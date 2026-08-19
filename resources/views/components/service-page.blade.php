<div
    class="hero-media-bg w-full flex flex-col pt-23 pb-6 min-h-[55vh] sm:min-h-[50vh] md:min-h-[55vh] lg:min-h-[62vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
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
    {{-- Why it matters: back to the original plain small-label/big-text
         split — no card. --}}
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

    {{-- What's included: a dark card instead of a page-background tag
         cloud — gives the page a real light/dark rhythm break instead of
         everything sitting on the same bg-mist. --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="rounded-3xl sm:rounded-4xl bg-forest-deep px-6 sm:px-10 md:px-14 py-10 sm:py-14 md:py-16">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 sm:gap-6 mb-8 sm:mb-10">
                <div class="flex flex-col gap-2 sm:gap-3">
                    <span class="text-lime font-agency font-semibold text-sm uppercase tracking-wide">What's Included</span>
                    <h3 class="text-cream font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">Everything we bring to the table.</h3>
                </div>
                <span class="font-agency font-extrabold text-cream/15 text-5xl sm:text-6xl md:text-7xl leading-none">{{ str_pad(count($service['tags']), 2, '0', STR_PAD_LEFT) }}</span>
            </div>

            <div class="flex flex-wrap gap-2.5 sm:gap-3">
                @foreach ($service['tags'] as $tag)
                    <span class="rounded-full border border-white/15 px-4 sm:px-5 py-2 sm:py-2.5 text-sm sm:text-base font-semibold text-cream/90">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Deliverables, paired with the service's own real image rather than
         a stock photo — falls back to a full-width list if that image
         doesn't load, via initServiceImageFallback() below. --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-12">
            <div class="md:col-span-2 col-span-full order-1" data-service-visual>
                <div class="relative w-full aspect-square overflow-hidden rounded-3xl sm:rounded-4xl">
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
                            <span
                                class="font-agency font-bold text-forest/30 text-sm"
                                >{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span
                            >
                            <h4 class="font-agency font-bold text-forest text-base sm:text-lg">{{ $item['title'] }}</h4>
                            <p class="text-forest/70 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Process: real, already-written step-by-step content per service
         (config('service_offerings')'s process_steps) that had no section
         rendering it anywhere on this page until now. --}}
    <x-process-section
        eyebrow="Our Process"
        :title-lines="['How we deliver', $service['title'] . '.']"
        :steps="$service['process_steps']"
    />

    {{-- How we work: same editorial-list treatment as the About page's
         "How We Work" section (numbered statement + icon, no card
         background) — reused deliberately for a genuinely different shape
         than the card grids elsewhere on this page. No founder name,
         phrased around the engagement rather than the person running it. --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10 max-w-2xl">
            <span class="text-forest/40 font-agency font-bold text-sm uppercase tracking-wide">How We Work</span>
            <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                Nothing gets lost between scoping and delivery.
            </h3>
        </div>

        @php
            $workPoints = [
                ['icon' => 'fi-rr-comment-alt', 'title' => 'Direct communication', 'desc' => "You're talking to whoever is actually doing the work — not an account manager relaying messages back and forth."],
                ['icon' => 'fi-rr-user', 'title' => 'One point of contact', 'desc' => 'The same person scopes, builds, and delivers this, so nothing gets rewritten or misunderstood in a handoff.'],
                ['icon' => 'fi-rr-calendar-clock', 'title' => 'Realistic timelines', 'desc' => "Deadlines are set based on what the work genuinely needs, and communicated honestly if anything shifts."],
            ];
        @endphp
        <div class="flex flex-col border-t border-forest/10">
            @foreach ($workPoints as $index => $point)
                <div
                    class="group flex flex-col md:flex-row md:items-center gap-4 md:gap-10 py-8 sm:py-10 border-b border-forest/10"
                >
                    <span
                        class="font-agency font-extrabold text-lg sm:text-xl text-forest/25 group-hover:text-lime transition-colors duration-500 md:w-12 shrink-0"
                    >
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h4
                        class="font-agency font-extrabold text-forest text-2xl sm:text-3xl md:text-4xl leading-tight md:w-2/5 shrink-0 group-hover:text-forest-deep transition-colors duration-500"
                    >
                        {{ $point['title'] }}
                    </h4>

                    <p class="text-forest/60 text-sm sm:text-base leading-relaxed md:flex-1">{{ $point['desc'] }}</p>

                    <div
                        class="hidden md:flex items-center justify-center size-12 rounded-2xl bg-forest/5 text-forest/40 text-xl shrink-0 group-hover:bg-lime group-hover:text-forest-deep transition-colors duration-500"
                    >
                        <i class="fi {{ $point['icon'] }} flex"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if (!empty($service['why_wavesync']))
        {{-- Why Wavesync: differentiators specific to this service, not a
             repeat of the About page's general "Why Choose Us" section.
             Checklist + a plain-typography stat, deliberately not a card —
             a hairline left-border split instead of a filled/bordered box,
             per the earlier "don't default to cards" correction. --}}
        <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
            <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-12">
                <div class="md:col-span-3 col-span-full flex flex-col gap-6 sm:gap-7">
                    <div class="flex flex-col gap-3 sm:gap-4">
                        <span class="text-forest/40 font-agency font-bold text-sm uppercase tracking-wide">Why Wavesync</span>
                        <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                            Why Wavesync for {{ $service['title'] }}.
                        </h3>
                    </div>

                    <div class="flex flex-col divide-y divide-forest/10 border-t border-forest/10">
                        @foreach ($service['why_wavesync'] as $point)
                            <div class="flex items-start gap-3 sm:gap-4 py-4 sm:py-5">
                                <i class="fi fi-rr-check flex text-lime text-lg mt-0.5 sm:mt-1 shrink-0"></i>
                                <p class="text-forest text-sm sm:text-base leading-relaxed"><span class="font-agency font-bold">{{ $point['title'] }} —</span> {{ $point['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="md:col-span-2 col-span-full flex flex-col justify-center gap-2 sm:gap-3 md:border-l md:border-forest/10 md:pl-10">
                    <span class="font-agency font-extrabold text-forest text-6xl sm:text-7xl md:text-8xl leading-none">150+</span>
                    <span class="text-forest/60 text-sm sm:text-base font-medium max-w-xs">Clients worldwide who've been through this exact process, on this exact kind of work.</span>
                </div>
            </div>
        </div>
    @endif

    @if (!empty($service['tech_stack']))
        {{-- Technology We Use: an orbital visual instead of another logo
             row — a central globe with each real tool circling it on its
             own ring. Every icon URL is a verified, real brand logo
             (Simple Icons / devicon CDNs), not a placeholder. --}}
        <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
            <div class="flex flex-col gap-3 sm:gap-4 items-center text-center mb-8 sm:mb-10 max-w-2xl mx-auto">
                <h2
                    class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Technology We Use
                </h2>
                <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                    Built with the right tools for the job.
                </h3>
                <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">Real, industry-standard tools — not a stack picked to sound impressive, but the ones that actually get this kind of work done properly.</p>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-10 sm:mb-12">
                @foreach ($service['tech_stack'] as $tool)
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-forest/15 bg-white px-3.5 py-2 text-sm font-semibold text-forest"
                    >
                        <img src="{{ $tool['icon_url'] }}" alt="" class="size-4 object-contain" loading="lazy" />
                        {{ $tool['name'] }}
                    </span>
                @endforeach
            </div>

            {{--
                "Horizon" composition: the globe and every ring share the
                same anchor point (bottom-center, pushed down by half their
                own height), so only the upper arc of each shows above the
                section's bottom edge — like a planet's curve rather than a
                full flat circle. Always 3 rings for visual consistency
                across every page, even when a page only has 2 real tools —
                the 3rd ring then renders as a plain empty orbit path with
                no icon, rather than fabricating a 3rd tool. Ring width is
                min(percentage, px-cap): scales up to fill more of a wide
                section, capped so it never blows out a narrow one — the
                outermost is allowed up to 80% of the container's width.
            --}}
            <div class="relative w-full h-105 sm:h-115 md:h-140 overflow-hidden flex justify-center">
                @php
                    $ringSizeClasses = [
                        'w-[min(55%,460px)] h-[min(55%,460px)]',
                        'w-[min(68%,600px)] h-[min(68%,600px)]',
                        'w-[min(80%,760px)] h-[min(80%,760px)]',
                    ];
                @endphp

                {{-- central globe: a real rotating particle sphere drawn on
                     canvas (see the script below), not a static gradient. --}}
                <div
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 aspect-square w-[min(38%,340px)] h-[min(38%,340px)] rounded-full z-10 pointer-events-none"
                    style="animation: globe-pulse 4s ease-in-out infinite;"
                >
                    <canvas data-particle-globe class="w-full h-full"></canvas>
                </div>

                {{-- Each ring's real tool (if it has one) is mirrored to the
                     opposite side (angle + 180°) — same technique as the
                     reference component — so a populated ring never reads
                     as a single lonely dot. --}}
                @for ($index = 0; $index < 3; $index++)
                    @php
                        // Cycle back through the real tools rather than
                        // leaving a ring empty when there are fewer than 3
                        // — an empty outer ring read as unfinished, not
                        // "consistent". Never invents a tool that isn't
                        // real, just repeats one that already appears.
                        $tool = $service['tech_stack'][$index % count($service['tech_stack'])];
                        $isCw = $index % 2 === 0;
                        $orbitAnim = $isCw ? 'orbit-cw' : 'orbit-ccw';
                        $counterAnim = $isCw ? 'counter-cw' : 'counter-ccw';
                        $duration = 18 + $index * 6;
                        // Stagger each ring's starting angle so all 3 icons
                        // aren't stacked at the same "12 o'clock" spot on
                        // first paint, before rotation has spread them out.
                        $baseAngle = $index * 60;
                    @endphp
                    <div
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 rounded-full border border-forest/15 {{ $ringSizeClasses[$index] }}"
                    >
                        @foreach ([$baseAngle, $baseAngle + 180] as $angleOffset)
                                <div
                                    class="absolute top-0 left-1/2 h-1/2 -ml-7 origin-bottom flex flex-col justify-start items-center"
                                    style="--start-angle: {{ $angleOffset }}deg; animation: {{ $orbitAnim }} {{ $duration }}s linear infinite;"
                                >
                                    <div
                                        class="flex items-center justify-center size-10 sm:size-12 -mt-5 sm:-mt-6 rounded-full bg-white border border-forest/15 shadow-lg p-2.5 relative z-10"
                                        style="--counter-offset: {{ -$angleOffset }}deg; animation: {{ $counterAnim }} {{ $duration }}s linear infinite;"
                                    >
                                        <img
                                            src="{{ $tool['icon_url'] }}"
                                            alt="{{ $tool['name'] }}"
                                            class="w-full h-full object-contain"
                                            loading="lazy"
                                        />
                                    </div>
                                </div>
                            @endforeach
                    </div>
                @endfor
            </div>
        </div>
    @endif

    {{-- Relevant work. id="contact" lives here (not a form) so the Process
         section's "Start a Project" button — which links to the bare
         #contact anchor this page otherwise has no element for — lands
         somewhere real instead of being a dead no-op click. --}}
    <div id="work" class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div id="contact"></div>
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

    <x-testimonials />
</div>

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

            // "Technology We Use" particle globe: points distributed evenly
            // over a sphere (Fibonacci lattice) and rotated each frame, with
            // depth-based size/opacity for a pseudo-3D look. Plain canvas —
            // no WebGL/Three.js, no external library.
            document.addEventListener('DOMContentLoaded', function () {
                const canvases = document.querySelectorAll('[data-particle-globe]');
                if (!canvases.length) return;

                const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                canvases.forEach(function (canvas) {
                    const dpr = window.devicePixelRatio || 1;
                    const size = canvas.clientWidth || canvas.parentElement.clientWidth;
                    canvas.width = size * dpr;
                    canvas.height = size * dpr;
                    const ctx = canvas.getContext('2d');
                    ctx.scale(dpr, dpr);

                    const radius = size / 2;
                    const pointCount = 520;
                    const goldenAngle = Math.PI * (3 - Math.sqrt(5));
                    const points = [];

                    for (let i = 0; i < pointCount; i++) {
                        const y = 1 - (i / (pointCount - 1)) * 2;
                        const r = Math.sqrt(Math.max(0, 1 - y * y));
                        const theta = goldenAngle * i;
                        points.push({ x: Math.cos(theta) * r, y: y, z: Math.sin(theta) * r });
                    }

                    let angle = 0;

                    function draw() {
                        ctx.clearRect(0, 0, size, size);

                        const cos = Math.cos(angle);
                        const sin = Math.sin(angle);

                        const projected = points
                            .map(function (p) {
                                return { x: p.x * cos - p.z * sin, y: p.y, z: p.x * sin + p.z * cos };
                            })
                            .sort(function (a, b) {
                                return a.z - b.z;
                            });

                        projected.forEach(function (p) {
                            const depth = (p.z + 1) / 2;
                            const screenX = radius + p.x * radius * 0.92;
                            const screenY = radius + p.y * radius * 0.92;
                            const dotSize = 0.7 + depth * 1.8;
                            const opacity = 0.35 + depth * 0.6;

                            ctx.beginPath();
                            ctx.arc(screenX, screenY, dotSize, 0, Math.PI * 2);
                            // forest-deep, not lime — lime dots read weak
                            // against this section's near-white background.
                            ctx.fillStyle = 'rgba(22, 50, 47, ' + opacity.toFixed(3) + ')';
                            ctx.fill();
                        });

                        if (!prefersReducedMotion) {
                            angle += 0.006;
                            requestAnimationFrame(draw);
                        }
                    }

                    draw();
                });
            });
        </script>
    @endpush
@endonce
