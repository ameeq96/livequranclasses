@php
    $routeName = request()->route()?->getName() ?? 'home';
    $siteName = config('seo.site_name', config('app.name'));
    $siteUrl = rtrim(config('app.url', url('/')), '/');
    $orgName = config('seo.organization.name', $siteName);
    $orgLogo = config('seo.organization.logo', '/assets/images/site-logo-square.png');
    $orgLogoUrl = \Illuminate\Support\Str::startsWith($orgLogo, ['http://', 'https://']) ? $orgLogo : url($orgLogo);
    $sameAs = array_values(array_filter(config('seo.organization.same_as', [])));
    $contactPhone = preg_replace('/[^0-9+]/', '', config('site.contact_phone'));
    $faqItems = [
        [
            'question' => 'How to learn quran for complete beginners?',
            'answer' => 'Start with a level check and a simple routine. We guide students through learn how to read the quran, learn reading quran, learning the quran for beginners, and answer common concerns like how learn quran at a comfortable pace.',
        ],
        [
            'question' => 'Can children join quran learning for kids classes online?',
            'answer' => 'Yes. Our teachers use child-friendly methods, visual review, and short sessions so families can start quran learning online free and later move to structured plans when ready.',
        ],
        [
            'question' => 'What is the best way to learn quran with tajweed?',
            'answer' => 'Most students begin with a quran tajweed course or tajweed course online track. It is the best way to learn quran when pronunciation and fluency are your goals.',
        ],
        [
            'question' => 'How to learn to read quran in arabic step by step?',
            'answer' => 'We teach letter sounds, joining rules, and recitation flow so students can learn to read quran, learn to read the quran, and learn how to read quran with confidence.',
        ],
        [
            'question' => 'Can I switch to online tajweed courses if I miss a class?',
            'answer' => 'Yes. If timing changes, you can continue in tajweed online course groups, tajweed courses online, or online tajweed courses without losing progress.',
        ],
        [
            'question' => 'Do you offer quran learning app or quran learning apps support?',
            'answer' => 'Yes. We provide study tools through our quran learning application and classroom support. Students can also use a quran learning app and quran teacher app for homework reminders.',
        ],
        [
            'question' => 'How can I find quran teacher near me or female quran teacher online?',
            'answer' => 'We help families who search preply quran teacher, female quran teacher near me, female quran teacher online, find quran teacher, and quran teacher near me by matching them with our verified tutors.',
        ],
    ];
    $courseItems = [
        ['name' => 'Islamic Studies', 'url' => route('enroll.show', ['course' => 'islamic-studies'])],
        ['name' => 'Quran for Kids', 'url' => route('enroll.show', ['course' => 'quran-for-kids'])],
        ['name' => 'Quran Memorization', 'url' => route('enroll.show', ['course' => 'quran-memorization'])],
        ['name' => 'Quran Reading', 'url' => route('enroll.show', ['course' => 'quran-reading'])],
        ['name' => 'Tajweed Course', 'url' => route('enroll.show', ['course' => 'tajweed-course'])],
        ['name' => 'Tajweed Qaida Course', 'url' => route('enroll.show', ['course' => 'tajweed-qaida-course'])],
    ];
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
        'mainEntity' => array_map(static function (array $faqItem): array {
            return [
                '@type' => 'Question',
                'name' => $faqItem['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faqItem['answer'],
                ],
            ];
        }, $faqItems),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'blogs')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Blog',
        'name' => $siteName . ' Blog',
        'url' => route('blogs'),
        'description' => config('seo.pages.blogs.description'),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'blogs.detail' && isset($post))
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $post['title'],
        'description' => $post['excerpt'] ?? config('seo.pages.blogs.detail.description'),
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
        'datePublished' => $post['published_at'] ?? now()->toDateString(),
        'dateModified' => $post['modified_at'] ?? ($post['published_at'] ?? now()->toDateString()),
        'image' => isset($post['image']) ? asset('assets/images/resource/' . $post['image']) : url(config('seo.default_og_image')),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'courses')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => 'Online Quran Courses',
        'itemListElement' => array_map(static function (array $course, int $index): array {
            return [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $course['name'],
                'url' => $course['url'],
            ];
        }, $courseItems, array_keys($courseItems)),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'about')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'AboutPage',
        'name' => 'About ' . $siteName,
        'url' => route('about'),
        'description' => config('seo.pages.about.description'),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

@if ($routeName === 'contact')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ContactPage',
        'name' => 'Contact ' . $siteName,
        'url' => route('contact'),
        'description' => config('seo.pages.contact.description'),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

