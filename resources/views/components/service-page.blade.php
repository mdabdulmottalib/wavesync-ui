{{-- Hero section --}}
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

<div class="my-12 sm:my-16 md:my-24 lg:my-36">
    <p class="text-center text-forest/50 uppercase text-xs sm:text-sm font-bold tracking-widest mb-6 sm:mb-8">Clients we've worked with</p>
    <x-logo-carousel />
</div>

<div class="bg-mist py-20 sm:py-24 md:py-28">
    {{-- Why It Matters section --}}
    <div class="pb-20 sm:pb-24 md:pb-28 w-11/12 mx-auto 2xl:w-10/12" data-reveal>
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
    {{-- Our Approach section --}}
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
    {{-- What You Get section --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-12">
            <div class="md:col-span-2 col-span-full order-1" data-service-visual>
                <div class="relative w-full aspect-4/3 overflow-hidden rounded-3xl sm:rounded-4xl">
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

    @if (!empty($service['who_its_for']))
        {{-- Who This Is For section --}}
        <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
            <div class="rounded-3xl sm:rounded-4xl bg-forest-deep px-6 sm:px-10 md:px-14 py-10 sm:py-14 md:py-16">
                <div class="flex flex-col gap-2 sm:gap-3 mb-8 sm:mb-10">
                    <span class="text-lime font-agency font-semibold text-sm uppercase tracking-wide"
                        >Who This Is For</span
                    >
                    <h3 class="text-cream font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                        Is this the right fit for you?
                    </h3>
                </div>

                <div class="flex flex-col divide-y divide-white/10 border-t border-white/10">
                    @foreach ($service['who_its_for']['fits'] as $point)
                        <div class="flex items-start gap-3 sm:gap-4 py-4 sm:py-5">
                            <span
                                class="flex items-center justify-center size-5 sm:size-6 rounded-full bg-lime text-forest-deep text-xs mt-0.5 shrink-0"
                            >
                                <i class="fi fi-rr-check flex"></i>
                            </span>
                            <p class="text-cream/90 text-sm sm:text-base leading-relaxed">{{ $point }}</p>
                        </div>
                    @endforeach

                    {{-- Honest counter-signal, same bg-white/10 text-white/40
                         "cross" convention as the homepage comparison table
                         (home-page.blade.php's $tradeoffIconsDark). --}}
                    <div class="flex items-start gap-3 sm:gap-4 py-4 sm:py-5">
                        <span
                            class="flex items-center justify-center size-5 sm:size-6 rounded-full bg-white/10 text-white/40 text-xs mt-0.5 shrink-0"
                        >
                            <i class="fi fi-rr-cross-small flex"></i>
                        </span>
                        <p class="text-cream/50 text-sm sm:text-base leading-relaxed">{{ $service['who_its_for']['not_fit'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (!empty($service['why_wavesync']))
        {{-- Why Wavesync section --}}
        @php
            // Ordered as a narrative: scale/track record first, then
            // reputation/trust, then service guarantees last.
            $glanceStats = [
                ['value' => '5+', 'label' => 'Years in business'],
                ['value' => '450+', 'label' => 'Projects delivered'],
                ['value' => '150+', 'label' => 'Clients worldwide'],
                ['value' => '15+', 'label' => 'Countries served'],
                ['value' => '4.9/5', 'label' => 'Average rating, real reviews'],
                ['value' => '85+', 'label' => 'Verified reviews'],
                ['value' => '95%+', 'label' => 'Client satisfaction'],
                ['value' => '80%+', 'label' => 'Repeat clients'],
                ['value' => 'Unlimited', 'label' => 'Revisions on every project'],
                ['value' => 'Lifetime', 'label' => 'Support after launch'],
            ];

            // Exactly 2 copies — the animate-scroll keyframe (app.css)
            // translates the track by exactly -50%, which only loops
            // seamlessly when the track is two identical halves back to
            // back (see logo-carousel.blade.php for the same convention).
            $glanceStatsLooped = collect($glanceStats)->concat($glanceStats);
        @endphp
        <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
            <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-12">
                <div class="md:col-span-3 col-span-full flex flex-col gap-6 sm:gap-7">
                    <div class="flex flex-col gap-3 sm:gap-4">
                        <span class="text-forest/40 font-agency font-bold text-sm uppercase tracking-wide"
                            >Why Wavesync</span
                        >
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
                                <span
                                    class="flex items-center justify-center size-5 sm:size-6 rounded-full bg-lime text-forest-deep text-xs mt-0.5 shrink-0"
                                >
                                    <i class="fi fi-rr-check flex"></i>
                                </span>
                                <p class="text-forest text-sm sm:text-base leading-relaxed"><span class="font-agency font-bold">{{ $point['title'] }} —</span> {{ $point['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Same real photo + image treatment as "What You Get"
                     above (aspect-square, rounded-3xl/4xl, object-cover) —
                     just on the right instead of the left this time. --}}
                <div class="md:col-span-2 col-span-full">
                    <div class="relative w-full aspect-4/3 overflow-hidden rounded-3xl sm:rounded-4xl">
                        <img
                            class="absolute inset-0 w-full h-full object-cover object-center"
                            src="{{ $service['img'] }}"
                            alt="{{ $service['title'] }}"
                            loading="lazy"
                        />
                    </div>
                </div>
            </div>

            {{-- Supporting proof for the checklist above, not a new topic —
                 no eyebrow/heading of its own, a marquee rather than a
                 static wrap since 10 stats is too much to land on all at
                 once (same animate-scroll technique as the logo carousel). --}}
            <div class="mt-12 sm:mt-14 md:mt-16 pt-8 sm:pt-10 border-t border-forest/10">
                <div
                    class="relative w-full overflow-hidden mask-[linear-gradient(to_right,transparent,#000_5%_95%,transparent)]"
                >
                    <div class="flex w-max will-change-transform animate-scroll">
                        @foreach ($glanceStatsLooped as $stat)
                            <div class="flex flex-col gap-1.5 shrink-0 mr-12 sm:mr-16 md:mr-20">
                                <span
                                    class="font-agency font-extrabold text-forest text-3xl sm:text-4xl leading-none whitespace-nowrap"
                                    >{{ $stat['value'] }}</span
                                >
                                <span
                                    class="text-forest/50 text-xs sm:text-sm font-medium whitespace-nowrap"
                                    >{{ $stat['label'] }}</span
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- How We Work section --}}
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

    @if (!empty($service['tech_stack']))
        {{-- Technology We Use section --}}
        <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
            <div class="flex flex-col gap-3 sm:gap-4 items-center text-center mb-10 sm:mb-12 max-w-2xl mx-auto">
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
                // Tools with a 'category' land on a fixed ring by meaning
                // (0 = inner/smallest = collaboration & planning tools,
                // 1 = middle = data/infra/AI tools, 2 = outer/largest =
                // languages & frameworks) instead of just being split by
                // their position in the config array. Pages whose tools
                // have no 'category' (Branding/Graphic Design) fall back
                // to the old even three-way split.
                $categoryToRingIndex = ['collab' => 0, 'infra' => 1, 'language' => 2];
                $ringGroups = [[], [], []];
                if (collect($service['tech_stack'])->contains(fn ($tool) => !empty($tool['category']))) {
                    foreach ($service['tech_stack'] as $tool) {
                        $ringGroups[$categoryToRingIndex[$tool['category'] ?? ''] ?? 1][] = $tool;
                    }
                } else {
                    foreach (array_chunk($service['tech_stack'], (int) ceil(count($service['tech_stack']) / 3)) as $i => $chunk) {
                        $ringGroups[$i] = $chunk;
                    }
                }
                // diameterClass sizes each ring's guide circle (and, via
                // spokeClass at half that, the pivot spoke's length/radius).
                // Both are literal strings (not built from interpolated
                // numbers) so Tailwind's build-time class scanner can
                // actually see and compile them — it can't evaluate PHP, so
                // a class assembled at runtime like h-[{{ $radius }}rem]
                // would never match any generated CSS rule.
                $ringConfig = [
                    ['diameterClass' => 'w-80 h-80 sm:w-96 sm:h-96 md:w-[30rem] md:h-[30rem] lg:w-[34rem] lg:h-[34rem]', 'spokeClass' => 'h-40 sm:h-48 md:h-60 lg:h-[17rem]', 'duration' => 26, 'stagger' => 0, 'reverse' => false],
                    ['diameterClass' => 'w-[28rem] h-[28rem] sm:w-[34rem] sm:h-[34rem] md:w-[42rem] md:h-[42rem] lg:w-[48rem] lg:h-[48rem]', 'spokeClass' => 'h-56 sm:h-[17rem] md:h-[21rem] lg:h-96', 'duration' => 34, 'stagger' => 30, 'reverse' => true],
                    ['diameterClass' => 'w-[36rem] h-[36rem] sm:w-[44rem] sm:h-[44rem] md:w-[54rem] md:h-[54rem] lg:w-[62rem] lg:h-[62rem]', 'spokeClass' => 'h-72 sm:h-[22rem] md:h-[27rem] lg:h-[31rem]', 'duration' => 42, 'stagger' => 15, 'reverse' => false],
                ];
            @endphp
            <div class="relative w-full h-96 sm:h-112 md:h-136 lg:h-160 overflow-hidden flex justify-center">
                {{-- glowing hub: soft blurred glow + a solid gradient core, both plain CSS --}}
                <div
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 rounded-full bg-forest blur-2xl pointer-events-none w-56 h-56 sm:w-64 sm:h-64 md:w-72 md:h-72 lg:w-80 lg:h-80"
                    style="animation: hub-pulse 4s ease-in-out infinite"
                ></div>
                <div
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 rounded-full bg-linear-to-br from-forest to-forest-deep shadow-lg pointer-events-none w-36 h-36 sm:w-44 sm:h-44 md:w-52 md:h-52 lg:w-60 lg:h-60"
                ></div>

                @foreach ($ringGroups as $ringIndex => $ringTools)
                    @continue (empty($ringTools))
                    @php
                        $config = $ringConfig[$ringIndex];
                        $ringToolCount = count($ringTools);
                        $direction = $config['reverse'] ? ' reverse' : '';
                    @endphp

                    {{-- faint guide ring at this ring's radius --}}
                    <div
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 rounded-full border border-forest/10 pointer-events-none {{ $config['diameterClass'] }}"
                    ></div>

                    @foreach ($ringTools as $toolIndex => $tool)
                        @php
                            $angle = round($config['stagger'] + $toolIndex * (360 / $ringToolCount));
                            $isMono = !empty($tool['icon_mono']);
                            $badgeStyle = "--start-angle: {$angle}deg; animation: counter-spin {$config['duration']}s linear infinite{$direction};";
                            if ($isMono) {
                                $badgeStyle .= " background-color: {$tool['icon_bg']};";
                            }
                        @endphp
                        <div
                            class="absolute bottom-0 left-1/2 {{ $config['spokeClass'] }} w-0 origin-bottom"
                            style="--start-angle: {{ $angle }}deg; animation: orbit-spin {{ $config['duration'] }}s linear infinite{{ $direction }};"
                        >
                            <div
                                class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center size-12 sm:size-14 md:size-16 rounded-full bg-white shadow-lg {{ $isMono ? '' : 'p-2.5' }}"
                                style="{{ $badgeStyle }}"
                                title="{{ $tool['name'] }}"
                            >
                                <img
                                    src="{{ $tool['icon_url'] }}"
                                    alt="{{ $tool['name'] }}"
                                    class="{{ $isMono ? 'size-6 sm:size-7' : 'w-full h-full' }} object-contain"
                                    @if ($isMono) style="filter: brightness(0) invert(1)" @endif
                                    loading="lazy"
                                />
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    @endif

    {{-- Related Work section. Keep id="contact" below — the Process
         section's CTA links to #contact and has no other target here. --}}
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
    {{-- Our Process section --}}
    <x-process-section
        eyebrow="Our Process"
        :title-lines="['How we deliver', $service['title'] . '.']"
        :steps="$service['process_steps']"
    />

    {{-- Testimonials section --}}
    <x-testimonials />
</div>

{{-- FAQ section --}}
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
