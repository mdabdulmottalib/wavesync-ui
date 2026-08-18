@props(['caseStudies'])

@php
    $portfolioCategories = collect($caseStudies)->pluck('category')->unique()->values();
    $portfolioAspectRatios = ['aspect-[3/4]', 'aspect-square', 'aspect-[4/5]', 'aspect-[3/4]', 'aspect-[4/3]'];
@endphp

<div
    class="hero-media-bg w-full flex flex-col py-6 min-h-[45vh] sm:min-h-[50vh] md:min-h-[55vh] lg:min-h-[62vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <x-site-header />

    <div class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 w-11/12 mx-auto flex-1" data-reveal>
        <div class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide">
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Our Work
        </div>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold font-agency flex flex-col leading-tight sm:leading-tight md:leading-[1.1]"
        >
            <span>Real projects.</span>
            <span>Real <span class="text-lime">clients</span>.</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">
            Every project here shipped for a real business — no concept pieces, no filler. Web design and brand
            identity work, start to finish.
        </p>

        <div class="flex flex-wrap items-center gap-2 sm:gap-3 mt-1 sm:mt-2" data-portfolio-filters>
            <button
                type="button"
                data-filter="all"
                class="filter-pill rounded-full px-4 sm:px-5 py-2 sm:py-2.5 text-xs sm:text-sm font-agency font-bold transition-colors duration-300 border bg-lime text-forest-deep border-lime"
            >
                All Work
            </button>
            @foreach ($portfolioCategories as $category)
                <button
                    type="button"
                    data-filter="{{ $category }}"
                    class="filter-pill rounded-full px-4 sm:px-5 py-2 sm:py-2.5 text-xs sm:text-sm font-agency font-bold transition-colors duration-300 border border-cream/20 text-cream/70 hover:border-cream/40 hover:text-cream"
                >
                    {{ $category }}
                </button>
            @endforeach
        </div>
    </div>
</div>

<div class="bg-mist py-20 sm:py-24 md:py-28">
    <div class="w-11/12 mx-auto 2xl:w-10/12" data-reveal>
        <div class="w-full columns-1 sm:columns-2 lg:columns-3 gap-6 md:gap-8" data-portfolio-grid>
            @foreach ($caseStudies as $project)
                <a
                    href="{{ $project['href'] }}"
                    data-category="{{ $project['category'] }}"
                    class="group flex flex-col items-start gap-3 sm:gap-4 mb-6 md:mb-8 break-inside-avoid"
                >
                    <div
                        class="w-full overflow-hidden relative rounded-2xl sm:rounded-3xl {{ $portfolioAspectRatios[$loop->index % count($portfolioAspectRatios)] }}"
                    >
                        <img
                            class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover:scale-105"
                            src="{{ $project['image'] }}"
                            alt="{{ $project['title'] }}"
                            loading="lazy"
                        />
                    </div>

                    <div class="flex items-start flex-col gap-1 sm:gap-1.5">
                        <span class="text-sm font-medium text-forest/60">{{ $project['category'] }}</span>
                        <span class="relative inline-block text-xl sm:text-2xl font-agency font-extrabold text-forest">
                            {{ $project['title'] }}
                            <span
                                class="absolute bottom-0 left-0 h-0.5 w-full rounded-full origin-right scale-x-0 bg-current transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover:origin-left group-hover:scale-x-100"
                            ></span>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <x-process-section />

    <x-testimonials />
</div>

<x-contact-form />

<x-faq-section />

@php
    $at = '@';

    $portfolioBreadcrumbLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'BreadcrumbList',
        'itemListElement' => [
            [$at . 'type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
            [$at . 'type' => 'ListItem', 'position' => 2, 'name' => 'Portfolio', 'item' => route('portfolio')],
        ],
    ];
@endphp

@push ('schema')
    <script type="application/ld+json">
{!! json_encode($portfolioBreadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush

@once
    @push ('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const wrap = document.querySelector('[data-portfolio-filters]');
                const grid = document.querySelector('[data-portfolio-grid]');

                if (!wrap || !grid) return;

                const activeClasses = ['bg-lime', 'text-forest-deep', 'border-lime'];
                const inactiveClasses = ['border-cream/20', 'text-cream/70'];

                const buttons = wrap.querySelectorAll('.filter-pill');
                const items = grid.querySelectorAll('[data-category]');

                buttons.forEach(function (btn) {
                    btn.addEventListener('click', function () {
                        const filter = btn.dataset.filter;

                        buttons.forEach(function (b) {
                            b.classList.remove(...activeClasses);
                            b.classList.add(...inactiveClasses);
                        });
                        btn.classList.remove(...inactiveClasses);
                        btn.classList.add(...activeClasses);

                        items.forEach(function (item) {
                            const show = filter === 'all' || item.dataset.category === filter;
                            item.classList.toggle('hidden', !show);
                        });
                    });
                });
            });
        </script>
    @endpush
@endonce
