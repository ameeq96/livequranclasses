<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/services/detail', '/enroll');
Route::permanentRedirect('/service-detail', '/enroll');
Route::permanentRedirect('/about.html', '/about');
Route::permanentRedirect('/faq.html', '/faq');
Route::permanentRedirect('/services.html', '/services');
Route::permanentRedirect('/courses.html', '/courses');
Route::permanentRedirect('/blog.html', '/blogs');
Route::permanentRedirect('/blog', '/blogs');
Route::permanentRedirect('/blog/detail', '/blogs/how-to-start-quran-lessons-online-free-and-build-consistency');
Route::permanentRedirect('/contact.html', '/contact');

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
Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('/blogs/{slug}', [HomeController::class, 'blogDetail'])->name('blogs.detail');
Route::redirect('/blog/{slug}', '/blogs/{slug}', 301);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('contact.submit');
Route::post('/newsletter/subscribe', [HomeController::class, 'newsletterSubscribe'])->name('newsletter.subscribe');
