<div class="bg w-full flex flex-col py-6">
    <header
        class="p-2.5 mx-auto w-full max-w-5xl z-50 bg-green-50/5 rounded-full backdrop-blur-3xl left-0 right-0 top-0 border-2 border-amber-50/5 sticky"
    >
        <div class="flex items-center w-full justify-between">
            <div class="pl-2">
                <a href="/">
                    {{-- <x-icons.wavesync-logo class="text-cream w-40 flex" /> --}}
                    <span class="text-3xl text-cream font-agency font-extrabold">wavesync</span>
                </a>
            </div>

            <div class="text-cream text-sm hidden md:flex items-center gap-px">
                <a
                    href="#services"
                    class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                    >Services</a
                >

                <a
                    href="#work"
                    class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                    >Work</a
                >

                <a
                    href="#process"
                    class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                    >Process</a
                >

                <a
                    href="#about"
                    class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                    >About</a
                >

                <a
                    href="#contact"
                    class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                    >Contact</a
                >
            </div>

            <div>
                <a
                    href="#contact"
                    class="group inline-flex items-center rounded-full bg-lime px-6 py-3 font-bold text-forest-deep"
                >
                    <span class="relative overflow-hidden h-5 leading-5">
                        <span
                            class="block transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-5"
                        >
                            Get a Quote
                        </span>

                        <span
                            class="absolute left-0 top-5 block transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-5"
                        >
                            Get a Quote
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </header>

    <div class="text-cream flex flex-col items-start justify-center gap-8 w-11/12 mx-auto h-full" data-reveal>
        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-extrabold font-agency flex flex-col leading-10 sm:leading-12.5 md:leading-16.5 lg:leading-26"
        >
            <span>Websites, brands</span>
            <span>and <span class="text-lime">automation</span></span>
            <span>for growing businesses.</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-xl">
            {{ config('wavesync.founded_summary') }} designing, building, and automating the systems that help
            businesses get found, get chosen, and get leads.
        </p>
    </div>
</div>

<style>
    .bg {
        position: relative;
        width: 100%;
        height: 88vh;
        background-image: url('/images/wavesync_hero_bg.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    .bg::before {
        content: '';
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: 0;
    }

    .bg > * {
        position: relative;
        z-index: 1;
    }

    @media (max-width: 640px) {
        .bg {
            height: 50vh;
        }
    }

    @media (max-width: 768px) {
        .bg {
            height: 60vh;
        }
    }

    @media (max-width: 1024px) {
        .bg {
            height: 80vh;
        }
    }
</style>

<div class="bg-mist py-28">
    <div id="about" class="w-11/12 mx-auto flex 2xl:w-10/12" data-reveal>
        <div class="w-full">
            <div class="w-full grid grid-cols-5 gap-4 sm:gap-5 md:gap-6 lg:gap-8">
                <div class="md:col-span-2 col-span-full">
                    <h2
                        class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                    >
                        <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                        Who We Are
                    </h2>
                </div>

                <div class="md:col-span-3 space-y-6 sm:space-y-8 md:space-y-10 col-span-full">
                    <p class="text-forest font-agency text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold leading-snug sm:leading-tight md:leading-[1.2]">We help growing businesses build stronger digital experiences, get found online, and automate the work that slows them down. With {{ config('wavesync.founded_summary') }}, we design, build, and automate for clients around the world.</p>

                    <a
                        href="#contact"
                        class="group inline-flex items-center rounded-full bg-forest px-4 sm:px-5 md:px-6 py-2.5 sm:py-3 md:py-4 font-bold text-white text-sm sm:text-base md:text-lg"
                    >
                        <span class="relative overflow-hidden h-4 sm:h-5 md:h-5.5 leading-4 sm:leading-5">
                            <span
                                class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5 md:group-hover:-translate-y-5.5"
                            >
                                Work with <span class="font-agency">wavesync</span>
                            </span>

                            <span
                                class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5 md:group-hover:-translate-y-5.5"
                            >
                                Work with <span class="font-agency">wavesync</span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="my-12 sm:my-16 md:my-24 lg:my-36">
        <p class="text-center text-forest/50 uppercase text-xs sm:text-sm font-bold tracking-widest mb-6 sm:mb-8">Clients we've worked with</p>
        <x-logo-carousel />
    </div>

    {{--
        mt matches the standard section rhythm used everywhere else on the page. The
        bottom side is deliberately padding, not margin: this wrapper and the Services
        section right after it both use that same standard rhythm on the touching sides,
        and adjacent vertical margins collapse to whichever is larger rather than
        stacking — so a plain mb- here would still read as a smaller gap than intended.
        Padding physically adds to this element's own box and cannot collapse away.
    --}}
    <div class="mt-16 sm:mt-20 md:mt-28 lg:mt-36 pb-24 sm:pb-32 md:pb-40 lg:pb-48">
        {{--
            Full-bleed breakout: this section intentionally escapes the page's normal
            w-11/12 mx-auto content column so the horizontal scroll can pan cards all the
            way to the true screen edges (where the fade mask reads naturally), instead of
            cropping at an arbitrary boundary in the middle of the page.
            Desktop (md+): the heading and track scroll together at a normal distance until
            the track (the actual cards) reaches the vertical center of the viewport — at
            that point app.js pins this whole block. From there, further scrolling pans the
            track horizontally while the heading simultaneously animates upward and fades,
            handing focus to the gallery, then releases to the next section once the pan
            finishes. Mobile: plain horizontally-swipeable, snap-scrolling row (no JS needed).
        --}}
        <div id="work-pin" class="w-screen ml-[calc(50%-50vw)] mr-[calc(50%-50vw)]" data-reveal>
            <div id="work" class="w-11/12 mx-auto 2xl:w-10/12">
                <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-4">
                    <div class="col-span-1 md:col-span-2 flex flex-col gap-3 sm:gap-4 items-start">
                        <h2
                            class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                        >
                            <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                            Work Showcase
                        </h2>
                        <h3
                            class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold flex flex-col leading-tight sm:leading-[1.15] md:leading-[1.1] lg:leading-18"
                        >
                            <span>Selected</span> <span>project highlights</span>
                        </h3>
                    </div>

                    <div class="col-span-1 md:col-span-3 w-full flex items-start justify-start md:justify-end">
                        <a
                            href="#contact"
                            class="group inline-flex items-center rounded-full border-2 sm:border-4 border-forest px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-forest"
                        >
                            <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                                <span
                                    class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                >
                                    Let's build yours
                                </span>

                                <span
                                    class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                >
                                    Let's build yours
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            {{--
                Real projects (from the founder's portfolio). No 'year' field —
                none was recorded for these, and per policy we don't invent one.
                'category' mirrors the category each project was actually tagged
                with, and stands in for the old year+client line.
            --}}
            @php
                $caseStudies = [
                    [
                        'title' => 'Biscayne Bay Preparatory Academy',
                        'category' => 'Web Design',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Biscayne-bay-prep.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Biscayne Bay Preparatory Academy',
                        'category' => 'Branding & Marketing',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/BBPA.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Seaside Beach Vacations',
                        'category' => 'Web Design',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Seasidebeachvacations.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'TechPeak Digital',
                        'category' => 'Web Design',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/techpeakdigitalui.png',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'All-in-One Digital Planner',
                        'category' => 'Digital Products',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/DigitalPlanner.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Fillable Digital Planner',
                        'category' => 'Digital Products',
                        'image' => '/images/portfolio/digital-planner-fillable.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Sabor & Style',
                        'category' => 'Web Design',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Sabor-and-Style.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Bulklcdparts',
                        'category' => 'E-Commerce',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Bulklcdparts.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Digital Financial Planner',
                        'category' => 'Digital Products',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Digital-Financial-Planner.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Pretty Corner Shop',
                        'category' => 'E-Commerce',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/prettycornershop-eCommerce-Website-Design.jpg',
                        'href' => '#contact',
                    ],
                    [
                        'title' => 'Medicine Label Design',
                        'category' => 'Packaging Design',
                        'image' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Medicine-Label-Design.jpg',
                        'href' => '#contact',
                    ],
                ];
            @endphp

            {{--
                overflow-x-auto is the baseline for every case where JS doesn't take over
                (mobile, JS disabled, prefers-reduced-motion): a native horizontally
                scrollable row, so every card stays reachable. On desktop, app.js switches
                this to overflow-visible only once it has successfully set up the pinned
                scroll-pan effect, since the two mechanisms would otherwise fight each other.
            --}}
            <div
                class="mt-6 sm:mt-8 md:mt-10 overflow-hidden mask-[linear-gradient(to_right,rgba(0,0,0,0.45),#000_8%_92%,rgba(0,0,0,0.45))]"
            >
                {{--
                    Left padding at rest intentionally matches the page's normal w-11/12
                    (and 2xl:w-10/12) content-column margin, so the first card starts
                    aligned with the rest of the page instead of sitting near the true
                    screen edge. Right stays at the small fixed inset — as the track pans
                    left during the pinned scroll, this left inset scrolls away with it,
                    so by the time panning is underway the row reads as full-bleed on
                    both sides, exactly like before.
                --}}
                <div
                    id="work-track"
                    class="w-full flex gap-6 md:gap-8 overflow-x-auto snap-x snap-mandatory py-4 px-4 sm:px-6 md:pl-[4.1667%] 2xl:pl-[8.3333%] md:pr-10"
                >
                    @foreach ($caseStudies as $project)
                        <div
                            class="flex flex-col items-start gap-3 sm:gap-4 shrink-0 w-[78vw] sm:w-[380px] md:w-[420px] lg:w-[480px] snap-start"
                        >
                            <div
                                class="w-full overflow-hidden h-[260px] sm:h-[320px] md:h-[380px] lg:h-[450px] relative rounded-2xl sm:rounded-3xl"
                            >
                                <img
                                    class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="{{ $project['image'] }}"
                                    alt="{{ $project['title'] }}"
                                />
                            </div>

                            <div class="flex items-start flex-col gap-2 sm:gap-2.5">
                                <h4 class="flex items-center gap-2 sm:gap-2.5 text-sm sm:text-base font-medium">
                                    <span>{{ $project['category'] }}</span>
                                </h4>
                                <a
                                    href="{{ $project['href'] }}"
                                    class="group relative inline-block text-2xl sm:text-3xl md:text-4xl font-agency font-extrabold text-forest"
                                >
                                    {{ $project['title'] }}
                                    <span
                                        class="absolute bottom-0 left-0 h-0.5 w-full rounded-full origin-right scale-x-0 bg-current transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover:origin-left group-hover:scale-x-100"
                                    ></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @php
        $services = [
            [
                'title' => 'Web Design & Development',
                'desc' => 'From pixel-perfect WordPress builds to custom Laravel applications, we design and develop websites and products that are intuitive to use and built to perform — backed by UX research and interaction design that keeps visitors engaged, converting, and coming back.',
                'tags' => ['UI/UX Design', 'WordPress', 'Laravel', 'WooCommerce', 'Livewire', 'Custom Themes', 'SaaS', 'Page Speed'],
                'img' => 'https://images.unsplash.com/photo-1545235617-9465d2a55698?auto=format&fit=crop&q=80&w=2426',
                'href' => '#contact',
            ],
            [
                'title' => 'Branding & Product Design',
                'desc' => 'Visual identity systems, marketing collateral, and digital product design that make a business instantly recognizable — from brand guidelines and social content to full product systems mapped around real user journeys and tested until every touchpoint converts.',
                'tags' => ['Brand Identity', 'Graphic Design', 'Social Media', 'Print Design', 'Motion Graphics', 'Design Systems', 'Prototyping', 'CRO'],
                'img' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&q=80&w=1364',
                'href' => '#contact',
            ],
            [
                'title' => 'SEO & Digital Marketing',
                'desc' => 'Getting found in search and turning that visibility into qualified leads — technical SEO, GEO/AEO for AI answer engines, and full-funnel paid and outreach campaigns that keep your pipeline full and your organic traffic compounding.',
                'tags' => ['Technical SEO', 'GEO', 'AEO', 'Schema Markup', 'Meta Ads', 'Google Ads', 'Cold Email', 'Funnel Design'],
                'img' => 'https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?auto=format&fit=crop&q=80&w=2426',
                'href' => '#contact',
            ],
            [
                'title' => 'AI Automation & Integration',
                'desc' => 'We automate the work that slows your business down. From AI-powered lead generation and cold email sequences to live customer support chatbots, multi-step n8n workflows, and custom LLM agents — we build intelligent systems that run 24/7, qualify leads, nurture prospects, and handle support without adding headcount.',
                'tags' => ['n8n Workflows', 'Cold Email AI', 'Lead Generation', 'AI Live Support', 'Custom LLM Agents', 'Workflow Automation'],
                'img' => 'https://ik.imagekit.io/eoweeomen/WavesyncAgency/ai-automation.png',
                'href' => '#contact',
            ],
        ];
    @endphp

    <div id="services" class="w-11/12 mx-auto 2xl:w-10/12 flex mb-16 sm:mb-20 md:mb-28 lg:mb-36" data-reveal>
        <div class="w-full flex flex-col gap-6 sm:gap-8 md:gap-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-4">
                <div class="col-span-1 md:col-span-2 flex flex-col gap-3 sm:gap-4 items-start">
                    <h2
                        class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                    >
                        <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                        Our Services
                    </h2>
                    <h3
                        class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold flex flex-col leading-tight sm:leading-[1.15] md:leading-[1.1] lg:leading-18 capitalize"
                    >
                        <span>One team,</span>
                        <span>four disciplines.</span>
                    </h3>
                </div>

                <div class="col-span-1 md:col-span-3 w-full flex items-start justify-start md:justify-end">
                    <a
                        href="#contact"
                        class="group inline-flex items-center rounded-full border-2 sm:border-4 border-forest px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-forest"
                    >
                        <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                            <span
                                class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                Start a Project
                            </span>

                            <span
                                class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                Start a Project
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="w-full grid grid-cols-1 gap-6 sm:gap-7 md:gap-8">
                @foreach ($services as $index => $service)
                    <div
                        class="grid grid-cols-1 md:grid-cols-5 gap-4 col-span-full bg-forest text-cream rounded-3xl sm:rounded-4xl h-auto md:h-[500px] md:sticky md:top-16"
                    >
                        <div class="md:col-span-3 p-4 sm:p-5 md:p-6 flex flex-col justify-between gap-6 md:gap-0">
                            <div class="flex flex-col gap-4 sm:gap-5">
                                <div
                                    class="w-full flex items-start justify-between border-b border-amber-50/25 pb-3 sm:pb-4"
                                >
                                    <h5 class="font-agency text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold">
                                        *{{ sprintf('%02d', $index + 1) }}
                                    </h5>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <div>
                                        <h3 class="font-agency font-bold text-2xl sm:text-3xl md:text-4xl">
                                            {{ $service['title'] }}
                                        </h3>
                                    </div>
                                    <div>
                                        <p class="text-sm sm:text-base md:text-lg">{{ $service['desc'] }}</p>
                                    </div>

                                    <div class="mt-2">
                                        <ul class="list-disc list-inside flex flex-wrap gap-2 sm:gap-3 md:gap-4">
                                            @foreach ($service['tags'] as $tag)
                                                <li
                                                    class="border rounded-full px-3 sm:px-3.5 md:px-4 py-1 sm:py-1.5 font-medium text-xs sm:text-sm"
                                                >
                                                    {{ $tag }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a
                                    href="{{ $service['href'] }}"
                                    class="group inline-flex items-center rounded-full bg-lime px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 font-bold text-forest-deep text-sm sm:text-base md:text-lg"
                                >
                                    <span class="relative overflow-hidden h-4 sm:h-5 md:h-5.5 leading-4 sm:leading-5">
                                        <span
                                            class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                        >
                                            Get Started
                                        </span>

                                        <span
                                            class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                        >
                                            Get Started
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="md:col-span-2 p-4 h-56 sm:h-64 md:h-full overflow-hidden">
                            <img
                                class="w-full h-full object-cover object-center rounded-2xl"
                                src="{{ $service['img'] }}"
                                alt="{{ $service['title'] }}"
                            />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="w-full flex my-16 sm:my-20 md:my-28 lg:my-36 bg-forest" data-reveal>
        <div class="w-11/12 mx-auto 2xl:w-10/12 py-14 sm:py-20 md:py-24 flex flex-col gap-8 sm:gap-10 md:gap-12">
            <div class="flex flex-col gap-4 max-w-2xl">
                <h2 class="text-cream font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Beautiful is only the beginning.
                </h2>
                <p class="text-cream/70 text-base sm:text-lg font-medium">A good-looking website doesn't do much on its own. Here's what each part of what we build is actually for.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8">
                <div class="flex flex-col gap-2 border-t-2 border-lime pt-4">
                    <h3 class="font-agency text-xl sm:text-2xl font-bold text-cream">Get Found</h3>
                    <p class="text-sm sm:text-base text-cream/70">SEO and search visibility that put your business in front of people already looking for what you offer.</p>
                </div>
                <div class="flex flex-col gap-2 border-t-2 border-lime pt-4">
                    <h3 class="font-agency text-xl sm:text-2xl font-bold text-cream">Get Chosen</h3>
                    <p class="text-sm sm:text-base text-cream/70">Branding and a website experience that make it obvious why a visitor should pick you over the next tab.</p>
                </div>
                <div class="flex flex-col gap-2 border-t-2 border-lime pt-4">
                    <h3 class="font-agency text-xl sm:text-2xl font-bold text-cream">Get Leads</h3>
                    <p class="text-sm sm:text-base text-cream/70">Landing pages and lead-capture systems built around a clear next step, not just a contact page.</p>
                </div>
                <div class="flex flex-col gap-2 border-t-2 border-lime pt-4">
                    <h3 class="font-agency text-xl sm:text-2xl font-bold text-cream">Work Smarter</h3>
                    <p class="text-sm sm:text-base text-cream/70">AI and workflow automation that take repetitive follow-up, qualification, and admin off your plate.</p>
                </div>
            </div>

            <div>
                <a
                    href="#contact"
                    class="group inline-flex items-center rounded-full bg-lime px-5 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-bold text-forest-deep"
                >
                    <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                        <span
                            class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                        >
                            Start a Project
                        </span>

                        <span
                            class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                        >
                            Start a Project
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <x-testimonials />

    <div id="process" class="w-11/12 mx-auto 2xl:w-10/12 flex my-16 sm:my-20 md:my-28 lg:my-36" data-reveal>
        <div class="w-full flex flex-col gap-6 sm:gap-8 md:gap-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-4">
                <div class="col-span-1 md:col-span-2 flex flex-col gap-3 sm:gap-4 items-start">
                    <h2
                        class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                    >
                        <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                        Simple process
                    </h2>
                    <h3
                        class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold flex flex-col leading-tight sm:leading-[1.15] md:leading-[1.1] lg:leading-18 capitalize"
                    >
                        <span>How we </span>
                        <span>actually work. </span>
                    </h3>
                </div>

                <div class="col-span-1 md:col-span-3 w-full flex items-start justify-start md:justify-end">
                    <a
                        href="#contact"
                        class="group inline-flex items-center rounded-full border-2 sm:border-4 border-forest px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-forest"
                    >
                        <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                            <span
                                class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                Start a Project
                            </span>

                            <span
                                class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                Start a Project
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            {{--
                Decorative roadmap line connecting the 4 steps below, dipping down to
                touch the top-center of each card (and tucking slightly behind it via
                the negative margin, since the cards render after it in source order)
                and arcing up between them — a path running through the steps rather
                than a flat strip floating above them. Hidden below md where the cards
                stack into 1-2 columns and a horizontal connecting line would no
                longer line up with anything.
            --}}
            <div class="hidden md:block w-full -mb-2" aria-hidden="true">
                <svg viewBox="0 0 1200 100" preserveAspectRatio="none" class="w-full h-16 lg:h-20">
                    <path
                        d="M0,70 C75,70 75,100 150,100 C225,100 225,25 300,25 C375,25 375,100 450,100 C525,100 525,25 600,25 C675,25 675,100 750,100 C825,100 825,25 900,25 C975,25 975,100 1050,100 C1125,100 1125,70 1200,70"
                        fill="none"
                        stroke="currentColor"
                        class="text-forest/25"
                        stroke-width="2"
                        stroke-dasharray="7 7"
                        stroke-linecap="round"
                    />
                    <circle cx="150" cy="100" r="6" class="fill-lime" />
                    <circle cx="450" cy="100" r="6" class="fill-lime" />
                    <circle cx="750" cy="100" r="6" class="fill-lime" />
                    <circle cx="1050" cy="100" r="6" class="fill-lime" />
                </svg>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 sm:gap-2">
                <div
                    class="flex gap-4 col-span-1 bg-forest text-cream rounded-3xl sm:rounded-4xl h-fit md:sticky md:top-16"
                >
                    <div class="w-full p-5 sm:p-6 flex flex-col justify-between">
                        <div class="flex flex-col gap-2">
                            <div>
                                <h3 class="font-agency font-bold text-2xl sm:text-3xl md:text-4xl">*Discover</h3>
                            </div>
                            <div>
                                <p class="text-sm sm:text-base md:text-lg">We start by understanding your business, your customers, and where the current website or workflow is actually falling short.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="flex gap-4 col-span-1 bg-forest text-cream rounded-3xl sm:rounded-4xl h-fit md:sticky md:top-16"
                >
                    <div class="w-full p-5 sm:p-6 flex flex-col justify-between">
                        <div class="flex flex-col gap-2">
                            <div>
                                <h3 class="font-agency font-bold text-2xl sm:text-3xl md:text-4xl">*Design</h3>
                            </div>
                            <div>
                                <p class="text-sm sm:text-base md:text-lg">Wireframes and visual design come next — built around how your customers actually move through a decision, not just how a template looks.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="flex gap-4 col-span-1 bg-forest text-cream rounded-3xl sm:rounded-4xl h-fit md:sticky md:top-16"
                >
                    <div class="w-full p-5 sm:p-6 flex flex-col justify-between">
                        <div class="flex flex-col gap-2">
                            <div>
                                <h3 class="font-agency font-bold text-2xl sm:text-3xl md:text-4xl">*Build</h3>
                            </div>
                            <div>
                                <p class="text-sm sm:text-base md:text-lg">We build the site, brand assets, or automation on Laravel, WordPress, or the right workflow tooling — and connect the pieces that need to talk to each other.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="flex gap-4 col-span-1 bg-forest text-cream rounded-3xl sm:rounded-4xl h-fit md:sticky md:top-16"
                >
                    <div class="w-full p-5 sm:p-6 flex flex-col justify-between">
                        <div class="flex flex-col gap-2">
                            <div>
                                <h3 class="font-agency font-bold text-2xl sm:text-3xl md:text-4xl">*Launch</h3>
                            </div>
                            <div>
                                <p class="text-sm sm:text-base md:text-lg font-medium">After launch we keep watching what's working, fixing what isn't, and automating anything repetitive we find along the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-contact-form />
