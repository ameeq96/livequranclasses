<?php

return [
    'site_name' => env('SEO_SITE_NAME', 'Live Quran Classes'),
    'site_tagline' => env('SEO_SITE_TAGLINE', 'Online Quran Learning with Tajweed and Hifz'),
    'default_locale' => 'en_US',
    'default_og_image' => env('SEO_DEFAULT_OG_IMAGE', '/assets/images/main-slider/image-1.webp'),
    'twitter_site' => env('SEO_TWITTER_SITE', '@livequranclasses'),
    'indexable_robots' => 'index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1',
    'noindex_robots' => 'noindex,follow',
    'organization' => [
        'name' => env('SEO_ORG_NAME', 'Live Quran Classes'),
        'logo' => env('SEO_ORG_LOGO', '/assets/images/logo.webp'),
        'same_as' => [
            env('SEO_SOCIAL_FACEBOOK', 'https://facebook.com/'),
            env('SEO_SOCIAL_TWITTER', 'https://twitter.com/'),
            env('SEO_SOCIAL_INSTAGRAM', 'https://instagram.com/'),
            env('SEO_SOCIAL_YOUTUBE', 'https://youtube.com/'),
        ],
    ],
    'pages' => [
        'home' => [
            'title' => 'Live Quran Classes with Tajweed | Live Quran Classes',
            'description' => 'Join Live Quran Classes for online Quran learning with Tajweed, Hifz, Quran reading, and Islamic studies for kids and adults with expert teachers.',
            'type' => 'website',
        ],
        'about' => [
            'title' => 'About Live Quran Classes | Trusted Online Quran Academy',
            'description' => 'Learn about Live Quran Classes, our mission, expert male and female teachers, and our student-focused approach to Quran recitation and memorization.',
            'type' => 'website',
        ],
        'faq' => [
            'title' => 'FAQ | Live Quran Classes, Tajweed, and Hifz Support',
            'description' => 'Find answers about class schedules, fees, trial sessions, Tajweed online courses, Quran learning for kids, and online Hifz Quran classes.',
            'type' => 'website',
        ],
        'services' => [
            'title' => 'Quran Learning Services | Tajweed, Hifz, and Recitation',
            'description' => 'Explore our online Quran services including Tajweed courses online, Quran recitation practice, beginner support, and guided Quran memorization.',
            'type' => 'website',
        ],
        'courses' => [
            'title' => 'Quran Courses Online | Tajweed, Hifz, and Kids Programs',
            'description' => 'Browse Quran courses for kids and adults, including Tajweed course online, Quran reading, and structured Hifz Quran classes with live instructors.',
            'type' => 'website',
        ],
        'enroll.show' => [
            'title' => 'Enroll in Live Quran Classes | Book Your Trial Session',
            'description' => 'Book your Live Quran class in minutes. Choose your course, plan, time, and location to start learning Quran with Tajweed from qualified teachers.',
            'type' => 'website',
        ],
        'enroll.plan' => [
            'title' => 'Choose Quran Learning Plan | Enroll Online',
            'description' => 'Select a Quran learning plan and complete enrollment for online Tajweed, Quran reading, or Hifz classes with flexible schedules.',
            'type' => 'website',
        ],
        'blog' => [
            'title' => 'Quran Learning Blog | Tajweed, Hifz, and Study Tips',
            'description' => 'Read practical articles on how to learn Quran with Tajweed, memorization strategies, beginner guidance, and Quran learning at home.',
            'type' => 'website',
        ],
        'blog.detail' => [
            'title' => 'Quran Learning Article | Live Quran Classes Blog',
            'description' => 'Detailed Quran learning insights on Tajweed, Quran recitation, and Hifz methods to improve your study routine and consistency.',
            'type' => 'article',
        ],
        'contact' => [
            'title' => 'Contact Live Quran Classes | Admissions and Support',
            'description' => 'Contact Live Quran Classes for admissions, trial class information, schedules, and support for online Quran teaching programs.',
            'type' => 'website',
        ],
        'search' => [
            'title' => 'Search Results | Live Quran Classes',
            'description' => 'Search the Live Quran Classes website for courses, blog posts, FAQs, and enrollment information.',
            'type' => 'website',
        ],
    ],
];

