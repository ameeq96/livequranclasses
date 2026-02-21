<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Nnjeim\World\Models\Country;

class HomeController extends Controller
{
    private function blogPosts(): array
    {
        return [
            ['slug' => 'how-to-start-quran-lessons-online-free-and-build-consistency', 'title' => 'How to start quran lessons online free and build consistency'],
            ['slug' => 'choosing-the-right-tajweed-online-course-for-daily-recitation', 'title' => 'Choosing the right tajweed online course for daily recitation'],
            ['slug' => 'best-way-to-hifz-quran-with-focused-revision-blocks', 'title' => 'Best way to hifz quran with focused revision blocks'],
            ['slug' => 'learn-arabic-for-quran-and-understand-ayah-meanings-clearly', 'title' => 'Learn arabic for quran and understand ayah meanings clearly'],
            ['slug' => 'learn-quran-for-beginners-how-to-read-quran-in-arabic', 'title' => 'Learn quran for beginners: how to read quran in arabic'],
            ['slug' => 'how-to-find-quran-teacher-online-for-your-family-goals', 'title' => 'How to find quran teacher online for your family goals'],
        ];
    }

    private function countryFlagFromIso(string $iso2, ?string $emoji = null): string
    {
        $iso = strtoupper(trim($iso2));
        if (preg_match('/^[A-Z]{2}$/', $emoji ?? '')) {
            $emoji = null;
        }

        if (! empty($emoji)) {
            return $emoji;
        }

        if (! preg_match('/^[A-Z]{2}$/', $iso)) {
            return '';
        }

        $base = 127397;
        return mb_chr(ord($iso[0]) + $base) . mb_chr(ord($iso[1]) + $base);
    }

    private function enrollCourses(): array
    {
        return [
            'islamic-studies' => 'Islamic Studies',
            'quran-for-kids' => 'Quran for Kids',
            'quran-memorization' => 'Quran Memorization',
            'quran-reading' => 'Quran Reading',
            'tajweed-course' => 'Tajweed Course',
            'tajweed-qaida-course' => 'Tajweed Qaida Course',
        ];
    }

    private function enrollPlans(): array
    {
        return [
            'plan-a' => 'Plan A - $40 / month',
            'plan-b' => 'Plan B - $48 / month',
            'plan-c' => 'Plan C - $55 / month',
        ];
    }

    private function locationData(): array
    {
        $countries = Country::query()
            ->whereIn('iso2', ['US', 'CA', 'AE'])
            ->with([
                'states' => function ($stateQuery) {
                    $stateQuery->orderBy('name')->with([
                        'cities' => function ($cityQuery) {
                            $cityQuery->orderBy('name');
                        },
                    ]);
                },
            ])
            ->orderBy('name')
            ->get();

        $locationData = [];
        foreach ($countries as $country) {
            $states = [];
            foreach ($country->states as $state) {
                $cities = $state->cities
                    ->pluck('name')
                    ->filter()
                    ->unique()
                    ->values()
                    ->all();

                if (! empty($cities)) {
                    $states[$state->name] = $cities;
                }
            }

            $locationData[$country->iso2] = [
                'name' => $country->name,
                'flag' => $this->countryFlagFromIso($country->iso2, $country->emoji),
                'dial_code' => $country->phone_code ? '+' . ltrim($country->phone_code, '+') : '',
                'states' => $states,
            ];
        }

        return $locationData;
    }

    private function buildEnrollView(?string $course = null, ?string $plan = null): View
    {
        $courseMap = $this->enrollCourses();
        $planMap = $this->enrollPlans();
        $locationData = $this->locationData();

        $selectedCourse = $course && isset($courseMap[$course]) ? $course : null;
        $selectedPlan = $plan && isset($planMap[$plan]) ? $plan : null;

        return view('pages.enroll', compact('courseMap', 'planMap', 'locationData', 'selectedCourse', 'selectedPlan'));
    }

    public function index(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function courses(): View
    {
        return view('pages.courses');
    }

    public function enrollForm(?string $course = null): View
    {
        return $this->buildEnrollView($course, null);
    }

    public function enrollPlanForm(string $plan): View
    {
        return $this->buildEnrollView(null, $plan);
    }

    public function enrollSubmit(Request $request): RedirectResponse
    {
        $courseMap = $this->enrollCourses();
        $planMap = $this->enrollPlans();
        $locationData = $this->locationData();
        $countryCodes = array_keys($locationData);

        $validated = $request->validate([
            'student_name' => ['required', 'string', 'max:120'],
            'parent_name' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'phone_number' => ['required', 'phone:country'],
            'age' => ['nullable', 'integer', 'min:4', 'max:80'],
            'country' => ['required', 'in:' . implode(',', $countryCodes)],
            'state' => ['required', 'string', 'max:120'],
            'city' => ['required', 'string', 'max:120'],
            'course' => ['required', 'in:' . implode(',', array_keys($courseMap))],
            'plan' => ['required', 'in:' . implode(',', array_keys($planMap))],
            'preferred_time' => ['nullable', 'string', 'max:120'],
            'notes' => ['nullable', 'string', 'max:1500'],
        ], [
            'phone_number.required' => 'Phone number is required.',
            'phone_number.phone' => 'Please enter a valid phone number for the selected country.',
        ]);

        $selectedCountry = $locationData[$validated['country']];
        $states = $selectedCountry['states'];
        if (! isset($states[$validated['state']])) {
            return back()
                ->withErrors(['state' => 'Please select a valid state for the selected country.'])
                ->withInput();
        }
        if (! in_array($validated['city'], $states[$validated['state']], true)) {
            return back()
                ->withErrors(['city' => 'Please select a valid city for the selected state.'])
                ->withInput();
        }

        $toEmail = config('site.contact_email');
        $studentEmail = $validated['email'];
        $countryName = $selectedCountry['name'] ?? $validated['country'];
        $mailData = [
            'student_name' => $validated['student_name'],
            'parent_name' => $validated['parent_name'] ?? 'N/A',
            'email' => $studentEmail,
            'phone_number' => $validated['phone_number'],
            'age' => $validated['age'] ?? 'N/A',
            'country' => $countryName,
            'state' => $validated['state'],
            'city' => $validated['city'],
            'course' => $courseMap[$validated['course']],
            'plan' => $planMap[$validated['plan']],
            'preferred_time' => $validated['preferred_time'] ?? 'N/A',
            'notes' => $validated['notes'] ?? 'N/A',
        ];

        try {
            Mail::send('emails.enrollment-request', $mailData, function ($mail) use ($toEmail, $studentEmail, $validated, $courseMap) {
                $mail->to($toEmail)
                    ->replyTo($studentEmail, $validated['student_name'])
                    ->subject('New Enrollment Request - ' . $courseMap[$validated['course']]);
            });

            Mail::send('emails.enrollment-confirmation', $mailData, function ($mail) use ($toEmail, $studentEmail, $validated, $courseMap) {
                $mail->to($studentEmail)
                    ->replyTo($toEmail)
                    ->subject('Enrollment Confirmation - ' . $courseMap[$validated['course']]);
            });
        } catch (\Throwable $exception) {
            return back()
                ->withInput()
                ->withErrors(['mail' => 'Enrollment request could not be sent right now. Please try again in a moment.']);
        }

        return redirect()
            ->route('enroll.show', $validated['course'])
            ->with('success', 'Your booking request has been submitted successfully. Our team will contact you shortly.');
    }

    public function blog(Request $request): View
    {
        $query = trim((string) $request->query('q', ''));
        $posts = $this->blogPosts();

        if ($query !== '') {
            $needle = mb_strtolower($query);
            $posts = array_values(array_filter($posts, function (array $post) use ($needle) {
                return str_contains(mb_strtolower($post['title']), $needle);
            }));
        }

        return view('pages.blog', [
            'blogPosts' => $posts,
            'query' => $query,
        ]);
    }

    public function blogDetail(string $slug): View
    {
        $post = collect($this->blogPosts())->firstWhere('slug', $slug);
        abort_if(! $post, 404);

        return view('pages.blog-detail', [
            'post' => $post,
        ]);
    }

    public function search(Request $request): View
    {
        $query = trim((string) $request->query('q', ''));
        $items = [
            ['title' => 'Home', 'route' => route('home'), 'keywords' => 'home quran classes tajweed hifz'],
            ['title' => 'About', 'route' => route('about'), 'keywords' => 'about institute teachers quran learning'],
            ['title' => 'FAQ', 'route' => route('faq'), 'keywords' => 'faq questions answers classes'],
            ['title' => 'Services', 'route' => route('services'), 'keywords' => 'services tajweed tafseer quran'],
            ['title' => 'Courses', 'route' => route('courses'), 'keywords' => 'courses islamic studies kids memorization reading tajweed qaida'],
            ['title' => 'Blogs', 'route' => route('blogs'), 'keywords' => 'blogs articles news quran'],
            ['title' => 'Contact', 'route' => route('contact'), 'keywords' => 'contact email phone address'],
            ['title' => 'Enroll', 'route' => route('enroll.show'), 'keywords' => 'enroll admission plan course booking'],
        ];

        $results = [];
        if ($query !== '') {
            $needle = mb_strtolower($query);
            foreach ($items as $item) {
                $haystack = mb_strtolower($item['title'] . ' ' . $item['keywords']);
                if (str_contains($haystack, $needle)) {
                    $results[] = $item;
                }
            }
        }

        return view('pages.search', [
            'query' => $query,
            'results' => $results,
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function contactSubmit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        $toEmail = config('site.contact_email');
        $senderEmail = $validated['email'];
        $mailData = [
            'name' => $validated['name'],
            'email' => $senderEmail,
            'messageBody' => $validated['message'],
        ];

        try {
            Mail::send('emails.contact-enquiry', $mailData, function ($mail) use ($toEmail, $senderEmail, $validated) {
                $mail->to($toEmail)
                    ->replyTo($senderEmail, $validated['name'])
                    ->subject('Website Contact Form Enquiry');

                if (strcasecmp($toEmail, $senderEmail) !== 0) {
                    $mail->cc($senderEmail);
                }
            });
        } catch (\Throwable $exception) {
            return back()
                ->withInput()
                ->withErrors(['mail' => 'Message could not be sent right now. Please try again in a moment.']);
        }

        return back()->with('success', 'Your message has been sent successfully.');
    }

    public function newsletterSubscribe(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:180'],
        ]);

        $toEmail = config('site.contact_email');

        try {
            Mail::raw(
                "New newsletter subscription request\n\n"
                . "Subscriber Email: {$validated['email']}\n",
                function ($mail) use ($toEmail, $validated) {
                    $mail->to($toEmail)
                        ->replyTo($validated['email'])
                        ->subject('Newsletter Subscription Request');
                }
            );
        } catch (\Throwable $exception) {
            return back()
                ->withInput()
                ->withErrors(['newsletter' => 'Subscription failed right now. Please try again.']);
        }

        return back()->with('newsletter_success', 'Subscribed successfully. We will keep you updated.');
    }
}
