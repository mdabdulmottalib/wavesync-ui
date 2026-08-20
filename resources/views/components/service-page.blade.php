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
                        class="font-agency font-extrabold text-lg sm:text-xl text-forest/25 group-hover:text-forest-deep transition-colors duration-500 md:w-12 shrink-0"
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
                                {{-- Lime text/icons read poorly straight on this section's near-white
                                     background (low contrast) — lime works here as a filled badge behind
                                     a dark icon instead, the established bg-lime + text-forest-deep
                                     icon-badge convention used in "How We Work" below. --}}
                                <span class="flex items-center justify-center size-5 sm:size-6 rounded-full bg-lime text-forest-deep text-xs mt-0.5 shrink-0">
                                    <i class="fi fi-rr-check flex"></i>
                                </span>
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

    {{-- Track Record: a bento grid — the shape genuinely fits this content
         (mixed proof: a rating, a real testimonial, and a few hard numbers)
         where it didn't fit "What You Get" (a plain deliverables list,
         restored to its original non-grid form above). 4-column asymmetric
         layout — one tall tile (row-span-2), one wide closing tile
         (col-span-2) — same convention as the homepage's stats bento.
         Falls back gracefully if the real photo doesn't load, via the
         script at the bottom of this file. --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10 max-w-2xl">
            <span class="text-forest/40 font-agency font-bold text-sm uppercase tracking-wide">Track Record</span>
            <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                Numbers instead of promises.
            </h3>
        </div>

        @php
            // One real, verified client quote + photo (Pastor Will Alston —
            // same Fiverr review shown in full in the Testimonials section
            // below; see resources/views/components/testimonials.blade.php).
            // Rating/review count match that same real dataset (10 reviews,
            // all 5-star, as of writing). "5+ years" and "450+ projects"
            // are the same verified facts already used elsewhere on the
            // site (About page / homepage stats), not new claims.
            $trackRecordQuote = "Went back and worked this gentleman again and will say that of all the designers I have worked with He is the most down to earth and easy to work with. He keeps going until everything is perfect for you.";
            $trackRecordReviewer = 'Pastor Will Alston';
            $processStepCount = count($service['process_steps']);
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 sm:gap-5">
            {{-- Real rating, computed from the same review set as Testimonials --}}
            <div class="col-span-1 min-w-0 bg-mist border border-forest/10 rounded-3xl sm:rounded-4xl p-5 sm:p-6 flex flex-col justify-between gap-6 min-h-44 sm:min-h-48">
                <i class="fi fi-sr-star flex text-forest text-xl sm:text-2xl"></i>
                <div class="flex flex-col gap-1">
                    <span class="font-agency font-extrabold text-forest text-3xl sm:text-4xl leading-none">5.0/5</span>
                    <span class="text-forest/60 text-xs sm:text-sm font-medium">From 10+ verified reviews</span>
                </div>
            </div>

            {{-- Real quote + real project photo, spans both rows --}}
            <div class="col-span-1 sm:row-span-2 min-w-0 rounded-3xl sm:rounded-4xl overflow-hidden flex flex-col">
                <div class="bg-mist p-5 sm:p-6 flex flex-col gap-2">
                    <i class="fi fi-sr-quote-right flex text-forest/15 text-2xl sm:text-3xl"></i>
                    <p class="text-forest text-xs sm:text-sm leading-relaxed italic line-clamp-5">&ldquo;{{ $trackRecordQuote }}&rdquo;</p>
                    <span class="text-forest/50 text-xs font-semibold">&mdash; {{ $trackRecordReviewer }}, verified client</span>
                </div>
                <div class="relative flex-1 min-h-40" data-track-record-visual>
                    <img
                        class="absolute inset-0 w-full h-full object-cover object-center"
                        src="{{ $service['img'] }}"
                        alt="{{ $service['title'] }}"
                        loading="lazy"
                        data-track-record-image
                    />
                    <div class="absolute inset-0 bg-linear-to-t from-forest-deep/85 via-forest-deep/5 to-transparent pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 p-4 sm:p-5 flex flex-col gap-0.5">
                        <span class="text-lime font-agency font-semibold text-xs uppercase tracking-wide">{{ $service['title'] }}</span>
                        <span class="text-cream font-agency text-base sm:text-lg font-bold">In practice.</span>
                    </div>
                </div>
            </div>

            {{-- Process step count, ties to the Process section above --}}
            <div class="col-span-1 min-w-0 bg-forest text-cream rounded-3xl sm:rounded-4xl p-5 sm:p-6 flex flex-col justify-between gap-6 min-h-44 sm:min-h-48">
                <i class="fi fi-rr-diagram-project flex text-lime text-xl sm:text-2xl"></i>
                <div class="flex flex-col gap-1">
                    <span class="font-agency font-extrabold text-3xl sm:text-4xl leading-none">{{ str_pad($processStepCount, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="text-cream/70 text-xs sm:text-sm font-medium">Clear steps, start to finish</span>
                </div>
            </div>

            {{-- Years in business, same verified fact used on the About page --}}
            <div class="col-span-1 min-w-0 bg-white border border-forest/10 rounded-3xl sm:rounded-4xl p-5 sm:p-6 flex flex-col justify-between gap-6 min-h-44 sm:min-h-48">
                <i class="fi fi-rr-time-past flex text-forest/60 text-xl sm:text-2xl"></i>
                <div class="flex flex-col gap-1">
                    <span class="font-agency font-extrabold text-forest text-3xl sm:text-4xl leading-none">5+</span>
                    <span class="text-forest/60 text-xs sm:text-sm font-medium">Years in business</span>
                </div>
            </div>

            {{-- Projects delivered, same verified stat as the homepage bento —
                 wide closing tile --}}
            <div class="col-span-1 sm:col-span-2 min-w-0 bg-lime rounded-3xl sm:rounded-4xl p-5 sm:p-6 md:p-7 flex items-center justify-between gap-4">
                <div class="flex flex-col gap-1">
                    <span class="font-agency font-extrabold text-forest text-3xl sm:text-4xl leading-none">450+</span>
                    <span class="text-forest-deep/70 text-xs sm:text-sm font-medium">Projects delivered</span>
                </div>
                <i class="fi fi-rr-rocket-lunch flex text-forest-deep/30 text-4xl sm:text-5xl"></i>
            </div>
        </div>
    </div>

    @if (!empty($service['tech_stack']))
        {{-- Technology We Use: a clean tech-card grid instead of the older
             floating-orbit animation — each card pairs a verified, real
             brand logo (Simple Icons / devicon CDNs, not a placeholder)
             with an honest one-line reason it's actually used, so the
             section carries real content even with only 2-3 tools rather
             than relying on motion to fill the space. Column count and
             max-width adapt to how many tools a given page actually has. --}}
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

            @php
                $techCount = count($service['tech_stack']);
                $techGridCols = $techCount <= 2 ? 'sm:grid-cols-2' : 'sm:grid-cols-3';
                $techMaxWidth = match (true) {
                    $techCount <= 2 => 'max-w-2xl',
                    $techCount <= 3 => 'max-w-4xl',
                    default => 'max-w-5xl',
                };
            @endphp
            <div class="grid grid-cols-1 {{ $techGridCols }} gap-4 sm:gap-5 mx-auto {{ $techMaxWidth }}">
                @foreach ($service['tech_stack'] as $tool)
                    @php $isMono = !empty($tool['icon_mono']); @endphp
                    <div
                        class="group relative overflow-hidden rounded-3xl border border-forest/10 bg-white p-6 sm:p-7 flex flex-col gap-4 hover:border-forest/25 hover:-translate-y-1 transition-all duration-300"
                    >
                        {{-- oversized, faint watermark of the tool's own logo — reuses the
                             same verified asset rather than a separate decorative image. --}}
                        <img
                            src="{{ $tool['icon_url'] }}"
                            alt=""
                            aria-hidden="true"
                            class="absolute -right-5 -bottom-5 size-28 sm:size-32 object-contain opacity-[0.05] pointer-events-none"
                            loading="lazy"
                        />
                        {{-- Most tool icons are already full-color brand logos, so a plain
                             bg-forest/5 badge behind them is enough. A couple of real tools
                             (Acrobat) only have a verified single-color (currentColor) SVG
                             available, not a colored brand mark — those get icon_mono in
                             config and render on their own brand-color badge with the icon
                             inverted to white instead, rather than a flat, out-of-place
                             black glyph next to everyone else's real logo colors. --}}
                        <span
                            class="relative flex items-center justify-center size-14 sm:size-16 rounded-2xl {{ $isMono ? '' : 'bg-forest/5' }}"
                            @if ($isMono) style="background-color: {{ $tool['icon_bg'] }}" @endif
                        >
                            <img
                                src="{{ $tool['icon_url'] }}"
                                alt="{{ $tool['name'] }}"
                                class="size-7 sm:size-8 object-contain"
                                @if ($isMono) style="filter: brightness(0) invert(1);" @endif
                                loading="lazy"
                            />
                        </span>
                        <div class="relative flex flex-col gap-1.5">
                            <h4 class="font-agency font-bold text-forest text-lg sm:text-xl">{{ $tool['name'] }}</h4>
                            <p class="text-forest/60 text-sm leading-relaxed">{{ $tool['desc'] ?? '' }}</p>
                        </div>
                    </div>
                @endforeach
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

                // Track Record bento's photo half — if it 404s, just drop
                // that half of the tile; the real quote/reviewer text above
                // it is a separate zone and stays intact either way.
                const trackRecordImg = document.querySelector('[data-track-record-image]');
                trackRecordImg?.addEventListener(
                    'error',
                    function () {
                        document.querySelector('[data-track-record-visual]')?.remove();
                    },
                    { once: true },
                );
            });
        </script>
    @endpush
@endonce
