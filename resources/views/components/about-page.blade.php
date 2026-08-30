<div
    class="hero-media-bg w-full flex flex-col pt-23 pb-6 min-h-[45vh] sm:min-h-[50vh] md:min-h-[55vh] lg:min-h-[62vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <div class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 w-11/12 mx-auto flex-1" data-reveal>
        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            About Wavesync
        </div>

        <h1
            class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold font-agency flex flex-col leading-tight sm:leading-tight md:leading-[1.1]"
        >
            <span>Small footprint.</span>
            <span>Big <span class="text-lime">waves</span>.</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">Every project — <span class="text-cream font-semibold">150+</span> and counting — gets the same hands-on attention: {{ config('wavesync.founded_summary') }} of design, development, and automation built around what the business in front of us actually needs, not a template with the logo swapped.</p>
    </div>
</div>

<div class="bg-mist py-20 sm:py-24 md:py-28">
    {{-- Story --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-4 sm:gap-5 md:gap-6 lg:gap-8">
            <div class="md:col-span-2 col-span-full">
                <h2
                    class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Who We Are
                </h2>
            </div>

            <div class="md:col-span-3 col-span-full space-y-4 sm:space-y-5">
                <p class="text-forest font-agency text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold leading-snug sm:leading-tight md:leading-[1.2]">Wavesync exists for businesses that treat their digital presence as seriously as everything else they've built — a website that gets found, a brand that earns trust at a glance, and systems considered enough that nothing falls through the cracks.</p>
                <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">Every engagement is scoped around the business in front of us, not a template package — a landing page and a custom web application call for a different kind of attention entirely. That's a deliberate choice: fewer clients, handled properly, rather than more clients handled generically. It's also why we work remote-first with businesses across time zones, using short, considered feedback loops instead of filling calendars with meetings.</p>
            </div>
        </div>
    </div>

    {{-- Stats --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="grid grid-cols-3 border-y border-forest/10 divide-x divide-forest/10">
            <div class="flex flex-col items-center gap-1 sm:gap-2 py-8 sm:py-10 md:py-12 text-center px-2">
                <span class="font-agency font-extrabold text-4xl sm:text-5xl md:text-6xl text-forest">450+</span>
                <span class="text-forest/60 text-xs sm:text-sm md:text-base font-medium">Projects Delivered</span>
            </div>
            <div class="flex flex-col items-center gap-1 sm:gap-2 py-8 sm:py-10 md:py-12 text-center px-2">
                <span class="font-agency font-extrabold text-4xl sm:text-5xl md:text-6xl text-forest">150+</span>
                <span class="text-forest/60 text-xs sm:text-sm md:text-base font-medium">Clients Worldwide</span>
            </div>
            <div class="flex flex-col items-center gap-1 sm:gap-2 py-8 sm:py-10 md:py-12 text-center px-2">
                <span class="font-agency font-extrabold text-4xl sm:text-5xl md:text-6xl text-forest">15+</span>
                <span class="text-forest/60 text-xs sm:text-sm md:text-base font-medium">Countries Served</span>
            </div>
        </div>
    </div>

    {{-- Mission --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div
            class="rounded-3xl sm:rounded-4xl bg-forest px-6 sm:px-12 md:px-20 py-14 sm:py-16 md:py-20 flex flex-col items-center text-center gap-5 sm:gap-6"
        >
            <div
                class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
                Our Mission
            </div>
            <p class="text-cream font-agency text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-snug sm:leading-tight max-w-3xl">Most businesses lose customers not because the product is wrong, but because the digital front door doesn't hold up. Our mission is to close that gap.</p>
            <p class="text-cream/60 text-sm sm:text-base md:text-lg leading-relaxed max-w-2xl">We build the website, the brand, and the systems behind them to the same standard the business itself was built to — so the first impression a customer gets is an honest one.</p>
        </div>
    </div>

    {{-- Why Choose Us --}}
    @php
        $whyChooseUsImage = collect(config('portfolio.case_studies'))->firstWhere('title', 'Seaside Beach Vacations');
        $whyChooseUsPoints = [
            ['icon' => 'fi-rr-link-alt', 'title' => 'One system, not three vendors', 'desc' => "Website, SEO, and automation are usually bought separately, from people who don't talk to each other. Wavesync builds all three as one connected system, so nothing gets lost in the handoff."],
            ['icon' => 'fi-rr-search', 'title' => 'Built to get found, not just admired', 'desc' => 'A homepage only does its job if it turns visitors into inquiries. Every site is built with search visibility and conversion in mind from the start, not bolted on after launch.'],
            ['icon' => 'fi-rr-earth-americas', 'title' => 'Real experience, not a first attempt', 'desc' => "450+ projects across 15+ countries means patterns get recognized fast — what actually converts, what actually ranks, and what quietly breaks six months later."],
            ['icon' => 'fi-rr-receipt', 'title' => 'Scoped upfront, no surprise invoices', 'desc' => "Every project is quoted before work starts, not billed hourly against a running clock. What's agreed is what gets charged."],
        ];
    @endphp
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-12">
            <div class="md:col-span-3 col-span-full flex flex-col gap-6 sm:gap-7 order-2 md:order-1">
                <div class="flex flex-col gap-3 sm:gap-4">
                    <h2
                        class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                    >
                        <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                        Why Choose Us
                    </h2>
                    <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                        We don't just design. We build systems that work.
                    </h3>
                    <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">A good-looking site nobody finds doesn't grow a business. Here's what that actually means day to day.</p>
                </div>

                <div class="flex flex-col divide-y divide-forest/10 border-t border-forest/10">
                    @foreach ($whyChooseUsPoints as $point)
                        <div class="flex items-start gap-4 sm:gap-5 py-5 sm:py-6">
                            <div
                                class="flex items-center justify-center size-10 sm:size-11 shrink-0 rounded-xl bg-forest/5 text-forest text-base sm:text-lg"
                            >
                                <i class="fi {{ $point['icon'] }} flex"></i>
                            </div>
                            <div class="flex flex-col gap-1 sm:gap-1.5">
                                <h4 class="font-agency font-bold text-forest text-base sm:text-lg">
                                    {{ $point['title'] }}
                                </h4>
                                <p class="text-forest/70 text-sm sm:text-base leading-relaxed">{{ $point['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="md:col-span-2 col-span-full order-1 md:order-2 flex flex-col gap-4 sm:gap-5">
                <div class="relative w-full aspect-8/5 overflow-hidden rounded-3xl sm:rounded-4xl">
                    <img
                        class="absolute inset-0 w-full h-full object-cover object-center"
                        src="{{ $whyChooseUsImage['image'] }}"
                        alt="{{ $whyChooseUsImage['title'] }}"
                        loading="lazy"
                    />
                </div>
                <div class="flex items-center justify-between gap-4 px-1">
                    <span class="text-forest/50 text-xs sm:text-sm font-medium"
                        >{{ $whyChooseUsImage['title'] }} — {{ $whyChooseUsImage['category'] }}</span
                    >
                    <a
                        href="{{ route('portfolio') }}"
                        class="text-forest text-xs sm:text-sm font-bold hover:underline shrink-0"
                        >See the work &rarr;</a
                    >
                </div>
            </div>
        </div>
    </div>

    {{-- What We Do: a visitor landing directly on /about has no summary of
         what Wavesync actually does, so each card links through to its own
         /services/{slug} page. --}}
    @php
        $aboutServices = config('service_offerings.services');
    @endphp
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10 max-w-2xl">
            <h2
                class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                What We Do
            </h2>
            <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                The four things. Working as one.
            </h3>
            <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">Most agencies hand you off between departments for this. Wavesync builds all four as a single connected system, so nothing gets lost translating between teams that don't talk to each other.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            @foreach ($aboutServices as $service)
                <a
                    href="{{ route('services.show', $service['slug']) }}"
                    class="group flex flex-col gap-4 rounded-3xl bg-white border border-forest/10 p-6 sm:p-7 hover:border-forest/30 transition-colors duration-300"
                >
                    <div
                        class="flex items-center justify-center size-11 sm:size-12 shrink-0 rounded-xl bg-forest/5 text-forest text-lg"
                    >
                        <i class="fi {{ $service['icon'] }} flex"></i>
                    </div>
                    <h4 class="font-agency font-bold text-forest text-lg sm:text-xl group-hover:text-forest-deep transition-colors duration-300">{{ $service['title'] }}</h4>
                    <p class="text-forest/70 text-sm leading-relaxed line-clamp-4">{{ $service['desc'] }}</p>
                </a>
            @endforeach
        </div>

        <div class="flex justify-center mt-8 sm:mt-10"></div>
    </div>
    <div
        class="w-screen ml-[calc(50%-50vw)] mr-[calc(50%-50vw)] bg-forest-deep py-20 sm:py-24 md:py-28 lg:py-32 mt-16 sm:mt-20 md:mt-28"
        data-reveal
    >
        <div class="w-11/12 sm:w-9/12 md:w-8/12 mx-auto text-center flex flex-col items-center gap-5 sm:gap-6">
            <div
                class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
                Then &amp; Now
            </div>
            <p class="text-cream font-agency text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold leading-snug sm:leading-tight">From one <span class="text-lime">Core 2 Duo</span> PC to Wavesync.</p>
        </div>
    </div>
    {{-- Founder's journey: real story, in the founder's own words --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10 max-w-2xl">
            <h2
                class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                How It Started
            </h2>
            <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                No roadmap. No shortcuts.
            </h3>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-10">
            <div class="md:col-span-2 col-span-full flex flex-col gap-6 sm:gap-7">
                <div>
                    <blockquote
                        class="text-forest font-agency text-xl sm:text-2xl md:text-3xl font-semibold leading-snug sm:leading-tight"
                    >
                        "I taught myself everything, one broken program at a time."
                    </blockquote>
                    <p class="mt-3 sm:mt-4 text-forest/50 text-sm sm:text-base font-medium">— {{ config('wavesync.founder_name') }}, Founder &amp; CEO</p>
                </div>

                <div class="relative w-full aspect-square max-w-xs overflow-hidden rounded-3xl">
                    <img
                        class="absolute inset-0 w-full h-full object-cover object-center"
                        src="/images/founder.jpg"
                        alt="{{ config('wavesync.founder_name') }}"
                        loading="lazy"
                    />
                </div>

                <div>
                    <a
                        href="#contact"
                        class="group inline-flex items-center rounded-full bg-forest px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-white"
                    >
                        <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                            <span
                                class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                Book a 30-min call
                            </span>

                            <span
                                class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                Book a 30-min call
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="md:col-span-3 col-span-full flex flex-col gap-8 sm:gap-10">
                <div class="flex flex-col gap-3 sm:gap-4">
                    <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">
                        {{ config('wavesync.founded_summary') }} designing websites, building brands, and automating the
                        parts of running a business that shouldn't need a person doing them by hand. Every project that
                        comes through Wavesync is shaped personally, start to finish — never handed off to whoever
                        happens to be free.
                    </p>
                </div>

                @php
                    $founderTimeline = [
                        ['year' => '2016', 'text' => "Class 8, with a first Android phone and a Core 2 Duo computer running 1GB of RAM. The goal: become a software engineer and build his own games — and, as one of three siblings in a family where tuition wasn't guaranteed for everyone, start saving early toward his own future education."],
                        ['year' => '2016 – 2019', 'text' => 'No roadmap and no one to ask. Progress meant working through HTML/CSS, C, C++, C#, and Python largely alone, and switching languages whenever an error couldn\'t be solved.'],
                        ['year' => '2019', 'text' => 'Started over on a new Core 2 Duo, this time with 2GB of RAM, and turned the self-teaching into freelance work — graphic design first, then web development, then SEO and digital marketing, picking up UI/UX along the way. The order wasn\'t random: the plan was always to run his own agency one day, and learning each discipline firsthand was how he\'d actually understand the work well enough to judge it.'],
                        ['year' => 'Today', 'text' => 'Wavesync — run the way it was always planned. Because the founder has done every part of the work himself, he can check a team member\'s output and know whether it\'s genuinely good, not just take their word for it.'],
                    ];
                @endphp

                <div class="flex flex-col">
                    @foreach ($founderTimeline as $item)
                        <div class="flex gap-4 sm:gap-5">
                            <div class="flex flex-col items-center">
                                <div
                                    class="flex items-center justify-center size-2.5 sm:size-3 shrink-0 rounded-full bg-forest mt-2"
                                ></div>
                                @if (!$loop->last)
                                    <div class="w-px flex-1 bg-forest/15 my-1"></div>
                                @endif
                            </div>
                            <div class="pb-7 sm:pb-8">
                                <span
                                    class="text-forest font-agency font-bold text-sm sm:text-base"
                                    >{{ $item['year'] }}</span
                                >
                                <p class="mt-1.5 text-forest/70 text-sm sm:text-base leading-relaxed">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Closing statement, bookending the founder story with where it started vs. where it landed --}}

    <div class="mt-16 sm:mt-20 md:mt-28">
        <p class="text-center text-forest/50 uppercase text-xs sm:text-sm font-bold tracking-widest mb-6 sm:mb-8">Clients we've worked with</p>
        <x-logo-carousel />
    </div>

    {{-- Values --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10 max-w-2xl">
            <h2
                class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                How We Work
            </h2>
            <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                Principles, not policies.
            </h3>
        </div>

        @php
            $aboutValues = [
                ['icon' => 'fi-rr-diamond', 'title' => 'Craft over templates', 'desc' => "Every project is scoped and built around the business in front of us. Nothing ships from a starter kit with the logo swapped."],
                ['icon' => 'fi-rr-portfolio', 'title' => 'Real work, not stock templates', 'desc' => "Every project in the portfolio is an actual client engagement — not a concept mockup or a template dressed up to look like custom work."],
                ['icon' => 'fi-rr-time-past', 'title' => 'Considered, not rushed', 'desc' => "Fewer clients, handled properly, beats more clients handled generically. Deadlines matter, but they don't dictate quality."],
                ['icon' => 'fi-rr-shield-check', 'title' => 'Support doesn\'t end at launch', 'desc' => "A finished site or system still needs someone accountable for it after it ships. That someone stays on."],
            ];
        @endphp

        {{--
            Deliberately not another card grid — "What We Do" above already
            covers that shape. Each principle reads as its own big editorial
            statement instead: oversized title doing the work a card's
            border/background usually would, icon reduced to a quiet accent
            on the right rather than the visual anchor.
        --}}
        <div class="flex flex-col border-t border-forest/10">
            @foreach ($aboutValues as $index => $value)
                <div
                    class="group flex flex-col md:flex-row md:items-center gap-4 md:gap-10 py-8 sm:py-10 md:py-12 border-b border-forest/10"
                >
                    <span
                        class="font-agency font-extrabold text-lg sm:text-xl text-forest/25 group-hover:text-forest-deep transition-colors duration-500 md:w-12 shrink-0"
                    >
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h4
                        class="font-agency font-extrabold text-forest text-3xl sm:text-4xl md:text-5xl leading-tight md:w-2/5 shrink-0 group-hover:text-forest-deep transition-colors duration-500"
                    >
                        {{ $value['title'] }}
                    </h4>

                    <p class="text-forest/60 text-sm sm:text-base md:text-lg leading-relaxed md:flex-1">{{ $value['desc'] }}</p>

                    <div
                        class="hidden md:flex items-center justify-center size-14 rounded-2xl bg-forest/5 text-forest/40 text-2xl shrink-0 group-hover:bg-lime group-hover:text-forest-deep transition-colors duration-500"
                    >
                        <i class="fi {{ $value['icon'] }} flex"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <x-testimonials />
</div>

<x-contact-form />

<x-faq-section />

@php
    $at = '@';

    $aboutBreadcrumbLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'BreadcrumbList',
        'itemListElement' => [
            [$at . 'type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
            [$at . 'type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => route('about')],
        ],
    ];
@endphp

@push ('schema')
    <script type="application/ld+json">
        {!! json_encode($aboutBreadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
