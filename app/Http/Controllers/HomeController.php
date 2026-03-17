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
            [
                'slug' => 'how-to-start-quran-lessons-online-free-and-build-consistency',
                'title' => 'How to Start Quran Lessons Online Free and Build Consistency',
                'excerpt' => 'A simple roadmap for families who want to start Quran lessons online free, build a realistic routine, and stay consistent with Tajweed practice.',
                'image' => 'news-1.webp',
                'published_at' => '2025-10-10',
                'modified_at' => '2026-03-17',
                'intro' => [
                    'Many families search for quran lessons online free because they want a low-pressure way to begin. The best start is to keep the first month simple, scheduled, and easy to repeat every week.',
                    'Consistency matters more than intensity. A short plan with clear goals helps students move from free support into steady live Quran classes without losing motivation.',
                ],
                'focus_heading' => 'A Routine That Actually Sticks',
                'focus_text' => 'Pick fixed lesson times, review one target each day, and keep teacher feedback visible. This gives beginners a practical way to improve recitation and confidence over time.',
                'quote' => 'A small routine repeated every week is stronger than a perfect plan that never starts.',
                'tips' => [
                    'Begin with two or three fixed learning slots each week instead of an overloaded schedule.',
                    'Pair online quran learning with tajweed drills so pronunciation improves from the start.',
                    'Use one notebook for corrections, homework, and weekly revision targets.',
                    'Move into structured live classes once the student can maintain regular attendance.',
                ],
                'tags' => [
                    'quran lessons online free',
                    'learn quran with tajweed',
                    'online quran classes',
                ],
            ],
            [
                'slug' => 'choosing-the-right-tajweed-online-course-for-daily-recitation',
                'title' => 'Choosing the Right Tajweed Online Course for Daily Recitation',
                'excerpt' => 'Learn how to compare a Tajweed online course, choose the right teacher support, and build a daily recitation system that improves steadily.',
                'image' => 'news-2.webp',
                'published_at' => '2025-10-12',
                'modified_at' => '2026-03-17',
                'intro' => [
                    'A tajweed online course should do more than explain rules. It should help students apply those rules in daily recitation with teacher correction and repeated listening.',
                    'The right course usually has a clear order: makharij, common mistakes, daily recitation practice, and revision. Without that structure, students often understand rules but fail to use them consistently.',
                ],
                'focus_heading' => 'What to Compare Before You Join',
                'focus_text' => 'Look at lesson frequency, teacher correction style, homework expectations, and whether the course focuses on practical recitation instead of theory alone.',
                'quote' => 'Tajweed grows faster when every lesson ends with applied recitation, not only explanation.',
                'tips' => [
                    'Choose a program that gives live correction on pronunciation and stopping points.',
                    'Check whether daily review and recorded homework are part of the routine.',
                    'Prioritize a course that works for your recitation level, not only your schedule.',
                    'Use one surah at a time to apply Tajweed rules until they become natural.',
                ],
                'tags' => [
                    'tajweed online course',
                    'tajweed courses online',
                    'learn quran recitation with tajweed',
                ],
            ],
            [
                'slug' => 'best-way-to-hifz-quran-with-focused-revision-blocks',
                'title' => 'Best Way to Hifz Quran with Focused Revision Blocks',
                'excerpt' => 'A practical Hifz method built around memorization targets, focused revision blocks, and weekly accountability for stronger retention.',
                'image' => 'news-3.webp',
                'published_at' => '2025-10-15',
                'modified_at' => '2026-03-17',
                'intro' => [
                    'Students in online quran hifz classes often memorize quickly but struggle to retain what they learned. The real difference comes from how revision is scheduled, not only how much is memorized.',
                    'A focused Hifz routine balances new memorization with daily, short, repeatable revision blocks. This keeps old portions alive while still making progress.',
                ],
                'focus_heading' => 'How Focused Revision Prevents Forgetting',
                'focus_text' => 'When revision is divided into short blocks across the week, students review more consistently and can catch weak spots before they become major setbacks.',
                'quote' => 'Strong Hifz is not built by rushing new pages; it is built by protecting old ones.',
                'tips' => [
                    'Use separate blocks for new memorization, near revision, and old revision.',
                    'Keep weekly listening checks with a teacher for accountability.',
                    'Reduce the new lesson load when old revision starts slipping.',
                    'Track memorization quality, not only the number of lines completed.',
                ],
                'tags' => [
                    'online quran hifz classes',
                    'hifz quran classes',
                    'quran memorization',
                ],
            ],
            [
                'slug' => 'learn-arabic-for-quran-and-understand-ayah-meanings-clearly',
                'title' => 'Learn Arabic for Quran and Understand Ayah Meanings Clearly',
                'excerpt' => 'A step-by-step way to learn Arabic for Quran, connect vocabulary with recitation, and understand ayah meanings with less confusion.',
                'image' => 'news-8.webp',
                'published_at' => '2025-10-18',
                'modified_at' => '2026-03-17',
                'intro' => [
                    'Students who learn arabic for quran often progress faster when they connect vocabulary study directly to the ayat they already recite. This makes the language easier to remember and more meaningful.',
                    'The goal is not to master advanced grammar on day one. It is to build practical understanding of repeated Quran vocabulary, sentence patterns, and key themes.',
                ],
                'focus_heading' => 'Start with Repeat Vocabulary',
                'focus_text' => 'Repeated Quran words create the fastest path to comprehension because students hear and read them again and again in their recitation.',
                'quote' => 'Understanding grows faster when Arabic study is attached to the ayat you already know by heart.',
                'tips' => [
                    'Study common Quran words before rare vocabulary lists.',
                    'Write one short reflection after each lesson to fix meaning in memory.',
                    'Review word roots alongside recitation practice for better retention.',
                    'Use teacher guidance to keep grammar study practical and manageable.',
                ],
                'tags' => [
                    'learn arabic for quran',
                    'learning arabic for quran',
                    'quran translation',
                ],
            ],
            [
                'slug' => 'learn-quran-for-beginners-how-to-read-quran-in-arabic',
                'title' => 'Learn Quran for Beginners: How to Read Quran in Arabic',
                'excerpt' => 'A beginner-friendly guide to learning Quran in Arabic, reading fluently, and building confidence with basic pronunciation and daily practice.',
                'image' => 'news-9.webp',
                'published_at' => '2025-10-20',
                'modified_at' => '2026-03-17',
                'intro' => [
                    'Beginners usually need a clear order: Arabic letters, joining, short vowels, and controlled recitation practice. Skipping steps often creates confusion later.',
                    'The fastest path is not rushing into long surahs. It is learning to read quran in arabic with accuracy first, then building speed through repeated guided reading.',
                ],
                'focus_heading' => 'Build Fluency in the Right Order',
                'focus_text' => 'Students improve faster when they master one reading layer at a time instead of mixing basic decoding, Tajweed, and memorization all at once.',
                'quote' => 'Fluent reading comes from accuracy repeated daily, not from guessing quickly.',
                'tips' => [
                    'Practice letters and joining rules before moving into longer reading passages.',
                    'Use a teacher to correct sounds that beginners usually miss.',
                    'Repeat the same short passage until reading becomes smooth and confident.',
                    'Combine reading practice with simple Tajweed only after the basics are stable.',
                ],
                'tags' => [
                    'learn quran for beginners',
                    'learn to read quran',
                    'how to read quran in arabic',
                ],
            ],
            [
                'slug' => 'how-to-find-quran-teacher-online-for-your-family-goals',
                'title' => 'How to Find a Quran Teacher Online for Your Family Goals',
                'excerpt' => 'What families should check before choosing a Quran teacher online, from teaching style and schedule fit to child-friendly communication.',
                'image' => 'news-10.webp',
                'published_at' => '2025-10-22',
                'modified_at' => '2026-03-17',
                'intro' => [
                    'A quran teacher online should match the student’s level, family schedule, and learning goals. The best teacher for memorization may not be the best one for a young beginner.',
                    'Families make better choices when they compare teacher communication, class structure, correction style, and how progress is tracked after each lesson.',
                ],
                'focus_heading' => 'Choose for Fit, Not Only Availability',
                'focus_text' => 'The right teacher creates steady progress by matching class pace to the student, especially for children and first-time learners.',
                'quote' => 'A good teacher does not only teach the lesson; a good teacher keeps the student returning to the lesson.',
                'tips' => [
                    'Ask how the teacher handles beginners, kids, and weak confidence levels.',
                    'Check whether class reports or homework notes are shared with parents.',
                    'Use trial classes to test communication and correction style before committing.',
                    'Choose a timetable that the family can maintain every week without stress.',
                ],
                'tags' => [
                    'quran teacher online',
                    'female quran teacher online',
                    'find quran teacher',
                ],
            ],
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
            'seo' => [
                'title' => $query !== ''
                    ? 'Blog Search Results for "' . $query . '" | Live Quran Classes'
                    : config('seo.pages.blogs.title'),
                'description' => $query !== ''
                    ? 'Search results for "' . $query . '" in the Live Quran Classes blog.'
                    : config('seo.pages.blogs.description'),
                'type' => 'website',
                'robots' => $query !== '' ? config('seo.noindex_robots') : config('seo.indexable_robots'),
            ],
        ]);
    }

    public function blogDetail(string $slug): View
    {
        $post = collect($this->blogPosts())->firstWhere('slug', $slug);
        abort_if(! $post, 404);
        $recentPosts = array_slice(array_values(array_filter($this->blogPosts(), static fn (array $item): bool => $item['slug'] !== $slug)), 0, 3);

        return view('pages.blog-detail', [
            'post' => $post,
            'recentPosts' => $recentPosts,
            'seo' => [
                'title' => $post['title'] . ' | Live Quran Classes',
                'description' => $post['excerpt'],
                'type' => 'article',
                'image' => '/assets/images/resource/' . $post['image'],
            ],
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
