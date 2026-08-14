@php
    $seoTitle = trim(($__env->yieldContent('title') ? $__env->yieldContent('title') . ' | ' : '') . config('app.name'));
    $seoDescription = $__env->yieldContent(
        'description',
        'Wavesync Agency helps growing businesses build stronger digital experiences, get found online, and automate repetitive work — through web development, branding, SEO, and AI automation.',
    );
    $seoCanonical = url()->current();
    // TODO(content): add a real share image at public/images/og-default.jpg and point this at it
    $seoImage = asset('favicon.ico');
@endphp

<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}" />
<link rel="canonical" href="{{ $seoCanonical }}" />

<meta property="og:type" content="website" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:title" content="{{ $seoTitle }}" />
<meta property="og:description" content="{{ $seoDescription }}" />
<meta property="og:url" content="{{ $seoCanonical }}" />
<meta property="og:image" content="{{ $seoImage }}" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $seoTitle }}" />
<meta name="twitter:description" content="{{ $seoDescription }}" />
<meta name="twitter:image" content="{{ $seoImage }}" />
