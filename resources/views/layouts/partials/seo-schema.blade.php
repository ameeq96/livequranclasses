@php
    $routeName = request()->route()?->getName() ?? 'home';
    $siteName = config('seo.site_name', config('app.name'));
    $siteUrl = rtrim(config('app.url', url('/')), '/');
    $orgName = config('seo.organization.name', $siteName);
    $orgLogo = config('seo.organization.logo', '/assets/images/logo.webp');
    $orgLogoUrl = \Illuminate\Support\Str::startsWith($orgLogo, ['http://', 'https://']) ? $orgLogo : url($orgLogo);
    $sameAs = array_values(array_filter(config('seo.organization.same_as', [])));
    $contactPhone = preg_replace('/[^0-9+]/', '', config('site.contact_phone'));
    $breadcrumbMap = [
        'about' => ['About', route('about')],
        'faq' => ['FAQ', route('faq')],
        'services' => ['Services', route('services')],
        'courses' => ['Courses', route('courses')],
        'blogs' => ['Blogs', route('blogs')],
        'blogs.detail' => ['Blog Detail', url()->current()],
        'contact' => ['Contact', route('contact')],
        'enroll.show' => ['Enroll', route('enroll.show')],
        'enroll.plan' => ['Enroll', route('enroll.show')],
        'search' => ['Search', route('search')],
    ];
@endphp

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => $orgName,
    'url' => $siteUrl,
    'logo' => $orgLogoUrl,
    'email' => config('site.contact_email'),
    'telephone' => $contactPhone,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => config('site.contact_address'),
    ],
    'sameAs' => $sameAs,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => $siteName,
    'url' => $siteUrl,
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => route('search') . '?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'EducationalOrganization',
    'name' => $orgName,
    'url' => $siteUrl,
    'logo' => $orgLogoUrl,
    'email' => config('site.contact_email'),
    'telephone' => $contactPhone,
    'address' => config('site.contact_address'),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

@if (isset($breadcrumbMap[$routeName]))
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => route('home'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $breadcrumbMap[$routeName][0],
                'item' => $breadcrumbMap[$routeName][1],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'faq')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'How can I enroll in Live Quran classes?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'You can enroll from our enroll page by selecting your course, plan, country, state, city, and preferred class time.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do you offer Tajweed and Hifz classes?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes, we offer structured Tajweed and Hifz online classes for beginners, kids, and adults.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Can I choose class timing?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes, you can provide your preferred class timing during enrollment.',
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'blogs' || $routeName === 'blogs.detail')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => 'Quran Learning Guide with Tajweed',
        'author' => [
            '@type' => 'Organization',
            'name' => $orgName,
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => $orgName,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $orgLogoUrl,
            ],
        ],
        'mainEntityOfPage' => url()->current(),
        'datePublished' => now()->toDateString(),
        'dateModified' => now()->toDateString(),
        'image' => url(config('seo.default_og_image')),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'courses')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => 'Online Quran Courses',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Islamic Studies'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Quran for Kids'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Quran Memorization'],
            ['@type' => 'ListItem', 'position' => 4, 'name' => 'Quran Reading'],
            ['@type' => 'ListItem', 'position' => 5, 'name' => 'Tajweed Course'],
            ['@type' => 'ListItem', 'position' => 6, 'name' => 'Tajweed Qaida Course'],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif


