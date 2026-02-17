<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/services/detail', '/enroll');
Route::permanentRedirect('/service-detail', '/enroll');
Route::permanentRedirect('/about.html', '/about');
Route::permanentRedirect('/faq.html', '/faq');
Route::permanentRedirect('/services.html', '/services');
Route::permanentRedirect('/courses.html', '/courses');
Route::permanentRedirect('/blog.html', '/blog');
Route::permanentRedirect('/contact.html', '/contact');

Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('faq'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('courses'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => route('enroll.show'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => route('blog'), 'priority' => '0.8', 'changefreq' => 'weekly'],
        ['loc' => route('blog.detail'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => route('contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
    ];

    $xml = view('sitemap.index', [
        'urls' => $urls,
        'lastmod' => now()->toAtomString(),
    ])->render();

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/enroll/plan/{plan}', [HomeController::class, 'enrollPlanForm'])
    ->where('plan', '[a-z0-9\-]+')
    ->name('enroll.plan');
Route::get('/enroll/{course?}', [HomeController::class, 'enrollForm'])
    ->where('course', '[a-z0-9\-]+')
    ->name('enroll.show');
Route::post('/enroll', [HomeController::class, 'enrollSubmit'])->name('enroll.submit');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/detail', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('contact.submit');
Route::post('/newsletter/subscribe', [HomeController::class, 'newsletterSubscribe'])->name('newsletter.subscribe');
