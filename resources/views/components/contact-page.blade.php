<div
    class="hero-media-bg w-full flex flex-col pt-23 pb-6 min-h-[38vh] sm:min-h-[42vh] md:min-h-[46vh] lg:min-h-[50vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <div class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 w-11/12 mx-auto flex-1" data-reveal>
        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Start a Project
        </div>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold font-agency flex flex-col leading-tight sm:leading-tight md:leading-[1.1]"
        >
            <span>Tell us what</span>
            <span>you're <span class="text-lime">building</span>.</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">A fully scoped project or a rough idea you're still shaping — either is a good reason to reach out.</p>
    </div>
</div>

<x-contact-form />

@php
    $at = '@';

    $contactBreadcrumbLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'BreadcrumbList',
        'itemListElement' => [
            [$at . 'type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
            [$at . 'type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => route('contact.page')],
        ],
    ];
@endphp

@push ('schema')
    <script type="application/ld+json">
        {!! json_encode($contactBreadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
