<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
