<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/detail', [HomeController::class, 'serviceDetail'])->name('service.detail');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/courses/detail', [HomeController::class, 'courseDetail'])->name('course.detail');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/detail', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
