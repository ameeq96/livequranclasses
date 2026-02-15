<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
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

    public function serviceDetail(): View
    {
        return view('pages.service-detail');
    }

    public function courses(): View
    {
        return view('pages.courses');
    }

    public function courseDetail(): View
    {
        return view('pages.course-detail');
    }

    public function blog(): View
    {
        return view('pages.blog');
    }

    public function blogDetail(): View
    {
        return view('pages.blog-detail');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
