@php
    $seoTitle = trim(($__env->yieldContent('title') ? $__env->yieldContent('title') . ' | ' : '') . config('app.name'));
    $seoDescription = $__env->yieldContent(
        'description',
        'Wavesync Agency helps growing businesses build stronger digital experiences, get found online, and automate repetitive work — through web design, branding, SEO, and automation.',
    );
    $seoCanonical = url()->current();
    // Falls back to the real wordmark rather than the favicon — still a
    // placeholder until a dedicated share-image asset exists (public/images/og-default.jpg),
    // but at least a recognizable, real brand asset in the meantime.
    // Individual pages can override via @section('image', ...), passing either
    // a local path (/images/x.jpg) or an already-absolute external CDN URL.
    $seoImageContent = $__env->yieldContent('image');
    $seoImage = match (true) {
        blank($seoImageContent) => asset('images/logo.svg'),
        str_starts_with($seoImageContent, 'http://') || str_starts_with($seoImageContent, 'https://') => $seoImageContent,
        default => url($seoImageContent),
    };
@endphp

<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}" />
<meta name="robots" content="index, follow" />
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
