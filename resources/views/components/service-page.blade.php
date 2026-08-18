<div
    class="hero-media-bg w-full flex flex-col py-6 min-h-[55vh] sm:min-h-[50vh] md:min-h-[55vh] lg:min-h-[62vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <x-site-header />

    <div class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 w-11/12 mx-auto flex-1" data-reveal>
        <a
            href="{{ route('home') }}#services"
            class="inline-flex items-center gap-1.5 text-cream/70 hover:text-lime text-sm sm:text-base font-semibold transition-colors duration-300"
        >
            <i class="fi fi-rr-angle-small-left flex"></i>
            All Services
        </a>

        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Our Services
        </div>

        @php
            $titleParts = explode(' ', $service['title']);
            $titleHighlight = array_pop($titleParts);
            $titlePrefix = implode(' ', $titleParts);
        @endphp
        <h1
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold font-agency leading-tight sm:leading-tight md:leading-[1.1]"
        >
            {{ $titlePrefix }} <span class="text-lime">{{ $titleHighlight }}</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">{{ $service['desc'] }}</p>
    </div>
</div>

{{--
    Our Approach: a full-bleed dark band between the hero and the light
    content below, styled as a single pull-quote rather than another
    eyebrow+grid block — a deliberate break in rhythm so this page reads as
    its own thing rather than a filtered rehash of the homepage's sections.
--}}
<div class="bg-forest-deep py-16 sm:py-20 md:py-24" data-reveal>
    <div class="w-11/12 sm:w-9/12 md:w-8/12 mx-auto flex flex-col items-center gap-4 sm:gap-5 text-center">
        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Our Approach
        </div>
        <p class="text-cream font-agency text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-snug sm:leading-tight">&ldquo;{{ $service['approach_statement'] }}&rdquo;</p>
    </div>
</div>

<div class="bg-mist py-20 sm:py-24 md:py-28">
    {{-- Why it matters --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-4 sm:gap-5 md:gap-6 lg:gap-8">
            <div class="md:col-span-2 col-span-full">
                <h2
                    class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Why It Matters
                </h2>
            </div>

            <div class="md:col-span-3 col-span-full">
                <p class="text-forest font-agency text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold leading-snug sm:leading-tight md:leading-[1.2]">
                    {{ $service['why_it_matters'] }}
                </p>
            </div>
        </div>
    </div>

    {{-- What's included --}}

    <div class="w-11/12 mx-auto 2xl:w-10/12" data-reveal="" style="opacity: 1">
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10">
            <h2
                class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                What's Included
            </h2>
            <h3
                class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl font-bold leading-tight sm:leading-[1.15] capitalize"
            >
                Everything we bring to the table.
            </h3>
        </div>

        @php
            // Cycle of 5 size/weight variants (one highlighted as a lime
            // pill) so the tag cloud keeps its varied, energetic look
            // regardless of how many tags a given service has.
            $tagStyles = [
                'font-agency font-bold text-xl sm:text-2xl md:text-3xl text-forest',
                'font-agency font-bold text-2xl sm:text-3xl md:text-4xl text-forest/40',
                'font-agency font-bold text-lg sm:text-xl md:text-2xl bg-lime text-forest-deep rounded-full px-4 sm:px-5 py-1 sm:py-1.5',
                'font-agency font-bold text-3xl sm:text-4xl md:text-5xl text-forest',
                'font-agency font-bold text-xl sm:text-2xl md:text-3xl text-forest/40',
            ];
        @endphp

        <div class="flex flex-wrap items-center gap-x-3 sm:gap-x-4 md:gap-x-6 gap-y-3 sm:gap-y-4">
            @foreach ($service['tags'] as $index => $tag)
                <span class="{{ $tagStyles[$index % count($tagStyles)] }}">{{ $tag }}</span>
            @endforeach
        </div>
    </div>

    {{-- Deliverables, paired with the service's own real image rather than
         a stock photo — falls back to a full-width list if that image
         doesn't load, via initServiceImageFallback() below. --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-12">
            <div class="md:col-span-2 col-span-full order-1" data-service-visual>
                <div class="relative w-full aspect-4/5 overflow-hidden rounded-3xl sm:rounded-4xl">
                    <img
                        class="absolute inset-0 w-full h-full object-cover object-center"
                        src="{{ $service['img'] }}"
                        alt="{{ $service['title'] }}"
                        loading="lazy"
                        data-service-image
                    />
                </div>
            </div>

            <div class="md:col-span-3 col-span-full order-2 flex flex-col gap-6 sm:gap-7" data-service-content>
                <div class="flex flex-col gap-3 sm:gap-4">
                    <h2
                        class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                    >
                        <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                        What You Get
                    </h2>
                    <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                        Every deliverable, explained.
                    </h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 md:gap-x-8 gap-y-6 sm:gap-y-7">
                    @foreach ($service['deliverables'] as $index => $item)
                        <div
                            id="{{ \Illuminate\Support\Str::slug($item['title']) }}"
                            class="flex flex-col gap-1.5 scroll-mt-28 sm:scroll-mt-32"
                        >
                            <span class="font-agency font-bold text-forest/30 text-sm">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h4 class="font-agency font-bold text-forest text-base sm:text-lg">{{ $item['title'] }}</h4>
                            <p class="text-forest/70 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Relevant work --}}
    <div id="work" class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-4">
            <div class="col-span-1 md:col-span-2 flex flex-col gap-3 sm:gap-4 items-start">
                <h2
                    class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Related Work
                </h2>
                <h3
                    class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl font-bold flex flex-col leading-tight sm:leading-[1.15] capitalize"
                >
                    <span>Projects in</span>
                    <span>this area.</span>
                </h3>
            </div>

            <div class="col-span-1 md:col-span-3 w-full flex items-start justify-start md:justify-end">
                <a
                    href="{{ route('portfolio') }}"
                    class="group inline-flex items-center rounded-full border-2 sm:border-4 border-forest px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-forest"
                >
                    <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                        <span
                            class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                        >
                            See Full Portfolio
                        </span>

                        <span
                            class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                        >
                            See Full Portfolio
                        </span>
                    </span>
                </a>
            </div>
        </div>

        @if (count($caseStudies))
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mt-8 sm:mt-10 md:mt-12">
                @foreach ($caseStudies as $project)
                    <a href="{{ $project['href'] }}" class="group flex flex-col items-start gap-3 sm:gap-4">
                        <div class="w-full overflow-hidden h-60 sm:h-65 md:h-70 relative rounded-2xl sm:rounded-3xl">
                            <img
                                class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover:scale-105"
                                src="{{ $project['image'] }}"
                                alt="{{ $project['title'] }}"
                            />
                        </div>

                        <div class="flex items-start flex-col gap-1 sm:gap-1.5">
                            <span class="text-sm font-medium text-forest/60">{{ $project['category'] }}</span>
                            <span
                                class="relative inline-block text-xl sm:text-2xl font-agency font-extrabold text-forest"
                            >
                                {{ $project['title'] }}
                                <span
                                    class="absolute bottom-0 left-0 h-0.5 w-full rounded-full origin-right scale-x-0 bg-current transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover:origin-left group-hover:scale-x-100"
                                ></span>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div
                class="mt-8 sm:mt-10 md:mt-12 rounded-3xl border-2 border-dashed border-forest/20 p-8 sm:p-10 md:p-12 text-center"
            >
                <p class="text-forest/70 font-medium text-sm sm:text-base max-w-lg mx-auto">We're still building out public case studies for this specific service. Take a look at our full portfolio, or get in touch about your project.</p>
                <div class="mt-5 flex flex-wrap items-center justify-center gap-3">
                    <a
                        href="{{ route('portfolio') }}"
                        class="inline-flex items-center rounded-full border-2 border-forest px-5 py-2.5 text-sm font-bold text-forest"
                    >
                        See Full Portfolio
                    </a>
                    <a
                        href="#contact"
                        class="inline-flex items-center rounded-full bg-forest px-5 py-2.5 text-sm font-bold text-white"
                    >
                        Get in Touch
                    </a>
                </div>
            </div>
        @endif
    </div>

    <x-process-section
        eyebrow="Our Process"
        :title-lines="['How we deliver', $service['title'] . '.']"
        :steps="$service['process_steps']"
    />

    {{-- Other services --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10">
            <h2
                class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                More Ways We Help
            </h2>
            <h3
                class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl font-bold leading-tight sm:leading-[1.15] capitalize"
            >
                Explore our other services.
            </h3>
        </div>

        <div class="w-full grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-5">
            @foreach ($otherServices as $other)
                <a
                    href="{{ route('services.show', $other['slug']) }}"
                    class="group flex flex-col gap-2 bg-forest text-cream rounded-2xl sm:rounded-3xl p-5 sm:p-6 hover:bg-forest-deep transition-colors duration-300"
                >
                    <h4 class="font-agency font-bold text-lg sm:text-xl md:text-2xl">{{ $other['title'] }}</h4>
                    <span
                        class="inline-flex items-center gap-1.5 text-lime text-sm font-semibold transition-transform duration-300 group-hover:translate-x-1"
                    >
                        Learn more
                        <i class="fi fi-rr-angle-small-right flex"></i>
                    </span>
                </a>
            @endforeach
        </div>
    </div>

    <x-testimonials />
</div>

<x-contact-form />

<x-faq-section :faqs="$service['faqs']" />

{{--
    Service + BreadcrumbList schema, built from the same $service data
    already rendering above — provider references the Organization node
    from partials/schema-organization.blade.php by @id rather than
    repeating its fields, so the two stay in sync automatically.
--}}
@php
    $at = '@';

    $serviceLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'Service',
        'name' => $service['title'],
        'description' => $service['desc'],
        'url' => url()->current(),
        'provider' => [
            $at . 'id' => config('app.url') . '/#organization',
        ],
    ];

    $breadcrumbLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'BreadcrumbList',
        'itemListElement' => [
            [$at . 'type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
            [$at . 'type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => route('home') . '#services'],
            [$at . 'type' => 'ListItem', 'position' => 3, 'name' => $service['title'], 'item' => url()->current()],
        ],
    ];
@endphp

@push ('schema')
    <script type="application/ld+json">
{!! json_encode($serviceLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
{!! json_encode($breadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush

@once
    @push ('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const img = document.querySelector('[data-service-image]');
                if (!img) return;

                img.addEventListener(
                    'error',
                    function () {
                        document.querySelector('[data-service-visual]')?.remove();
                        const content = document.querySelector('[data-service-content]');
                        content?.classList.remove('md:col-span-3');
                        content?.classList.add('md:col-span-5');
                    },
                    { once: true },
                );
            });
        </script>
    @endpush
@endonce
