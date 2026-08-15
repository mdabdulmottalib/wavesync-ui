<div
    class="hero-media-bg w-full flex flex-col py-6 min-h-[50vh] sm:min-h-[60vh] md:min-h-[80vh] lg:min-h-[88vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <x-site-header />

    <div
        class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 md:gap-8 w-11/12 mx-auto flex-1"
        data-reveal
    >
        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Boutique Digital Studio
        </div>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-extrabold font-agency flex flex-col leading-10 sm:leading-12.5 md:leading-16.5 lg:leading-26"
        >
            <span>We build the systems</span>
            <span>that turn strangers</span>
            <span>into <span class="text-lime">customers</span>.</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">From the first Google search to the phone ringing — websites, search visibility, and automation, working together. {{ config('wavesync.founded_summary') }}.</p>
    </div>
</div>

<x-video-frame />

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
        Full-bleed marquee, a pure rhythm/energy break between the logo strip
        and the portfolio — no claims, just typography in motion. Two
        identical copies back to back (same technique as the logo carousel),
        so the -50% translateX keyframe loops seamlessly.
    --}}
    <div
        class="w-screen ml-[calc(50%-50vw)] mr-[calc(50%-50vw)] bg-forest-deep py-8 sm:py-10 md:py-12 overflow-hidden"
        aria-hidden="true"
    >
        <div class="flex w-max will-change-transform animate-scroll" style="animation-duration: 20s">
            @for ($i = 0; $i < 2; $i++)
                <div class="flex items-center shrink-0">
                    @foreach (['Branding', 'Strategy','UI/UX Design','Web Design', 'Digital Marketing', 'SEO', 'Automation'] as $word)
                        <span
                            class="font-agency font-bold text-cream text-4xl sm:text-5xl md:text-7xl uppercase whitespace-nowrap mr-6 sm:mr-8 md:mr-10"
                            >{{ $word }}</span
                        >
                        <span
                            class="font-agency font-bold text-lime text-4xl sm:text-5xl md:text-7xl whitespace-nowrap mr-6 sm:mr-8 md:mr-10"
                            >&#10022;</span
                        >
                    @endforeach
                </div>
            @endfor
        </div>
    </div>
    {{--
        Stats bento, 7 tiles across exactly two rows (3 + 4) rather than
        spilling to a third — row 1's first cell stays wider than its
        row-mates, matching the earlier bento pattern. "95%+ Client
        Satisfaction" and "80%+ Repeat Clients" are measured performance
        claims (not simple counts or policy commitments) — make sure these
        are numbers that can actually be backed up before this goes live.
    --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12" data-reveal>
        <div class="grid grid-cols-12 gap-4 sm:gap-5 pt-20 sm:pt-24 md:pt-28 lg:pt-32">
            <div
                class="col-span-12 sm:col-span-5 md:col-span-5 bg-forest text-cream rounded-3xl sm:rounded-4xl p-6 sm:p-8 md:p-10 flex flex-col justify-end gap-1 sm:gap-2 min-h-56 sm:min-h-64 md:min-h-72"
            >
                <span class="font-agency font-extrabold text-5xl sm:text-6xl md:text-7xl">450+</span>
                <span class="text-cream/70 text-sm sm:text-base font-medium">Projects Delivered</span>
            </div>
            <div
                class="col-span-6 sm:col-span-4 md:col-span-4 bg-white border border-forest/10 rounded-3xl sm:rounded-4xl p-5 sm:p-6 md:p-8 flex flex-col justify-end gap-1 sm:gap-2 min-h-56 sm:min-h-64 md:min-h-72"
            >
                <span class="font-agency font-extrabold text-3xl sm:text-4xl md:text-5xl text-forest">150+</span>
                <span class="text-forest/60 text-xs sm:text-sm font-medium">Clients Worldwide</span>
            </div>
            <div
                class="col-span-6 sm:col-span-3 md:col-span-3 bg-white border border-forest/10 rounded-3xl sm:rounded-4xl text-forest p-5 sm:p-6 md:p-8 flex flex-col justify-end gap-1 sm:gap-2 min-h-56 sm:min-h-64 md:min-h-72"
            >
                <span class="font-agency font-extrabold text-3xl sm:text-4xl md:text-5xl">15+</span>
                <span class="text-forest-deep/70 text-xs sm:text-sm font-medium">Countries Served</span>
            </div>

            <div
                class="col-span-6 sm:col-span-3 md:col-span-3 bg-white border border-forest/10 rounded-3xl sm:rounded-4xl text-forest p-5 sm:p-6 md:p-8 flex flex-col justify-end gap-1 sm:gap-2 min-h-56 sm:min-h-64 md:min-h-72"
            >
                <span class="font-agency font-extrabold text-3xl sm:text-4xl md:text-5xl">95%+</span>
                <span class="text-forest-deep/70 text-xs sm:text-sm font-medium">Client Satisfaction</span>
            </div>
            <div
                class="col-span-6 sm:col-span-3 md:col-span-3 bg-white border border-forest/10 rounded-3xl sm:rounded-4xl text-forest p-5 sm:p-6 md:p-8 flex flex-col justify-end gap-1 sm:gap-2 min-h-56 sm:min-h-64 md:min-h-72"
            >
                <span class="font-agency font-extrabold text-3xl sm:text-4xl md:text-5xl">80%+</span>
                <span class="text-forest-deep/70 text-xs sm:text-sm font-medium">Repeat Clients</span>
            </div>
            <div
                class="col-span-6 sm:col-span-3 md:col-span-3 bg-white border border-forest/10 rounded-3xl sm:rounded-4xl p-5 sm:p-6 md:p-8 flex flex-col justify-end gap-1 sm:gap-2 min-h-48 sm:min-h-52 md:min-h-56"
            >
                <span class="font-agency font-extrabold text-3xl sm:text-4xl md:text-5xl text-forest">Unlimited</span>
                <span class="text-forest/60 text-xs sm:text-sm font-medium">Revisions On Every Project</span>
            </div>
            <div
                class="col-span-6 sm:col-span-3 md:col-span-3 bg-lime text-forest rounded-3xl sm:rounded-4xl p-5 sm:p-6 md:p-8 flex flex-col justify-end gap-1 sm:gap-2 min-h-48 sm:min-h-52 md:min-h-56"
            >
                <span class="font-agency font-extrabold text-3xl sm:text-4xl md:text-5xl">Lifetime</span>
                <span class="text-forest/60 text-xs sm:text-sm font-medium">Support After Launch</span>
            </div>
        </div>
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
            </div>

            @php
                $caseStudies = config('portfolio.case_studies');
            @endphp
            <div
                class="mt-6 sm:mt-8 md:mt-10 overflow-hidden mask-[linear-gradient(to_right,rgba(0,0,0,0.45),#000_8%_92%,rgba(0,0,0,0.45))]"
            >
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

    {{--
        Manifesto: a full-bleed editorial statement rather than another
        eyebrow-plus-grid section, giving the page a deliberate pause before
        the services pitch — the kind of brand-personality moment a
        traditional corporate layout skips.
    --}}
    <div
        class="w-screen ml-[calc(50%-50vw)] mr-[calc(50%-50vw)] bg-forest-deep py-20 sm:py-24 md:py-28 lg:py-32"
        data-reveal
    >
        <div class="w-11/12 sm:w-9/12 md:w-8/12 mx-auto text-center flex flex-col items-center gap-5 sm:gap-6">
            <div
                class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
                How We Think
            </div>
            <p class="text-cream font-agency text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold leading-snug sm:leading-tight">Good work isn't fast. It's considered. We'd rather build <span class="text-lime">one thing right</span> than five things quickly.</p>
        </div>
    </div>

    @php
        $services = config('service_offerings.services');
    @endphp

    <div
        id="services"
        class="w-11/12 mx-auto 2xl:w-10/12 flex mt-16 sm:mt-20 md:mt-28 lg:mt-36 mb-16 sm:mb-20 md:mb-28 lg:mb-36"
        data-reveal
    >
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
                        <span>Four disciplines,</span>
                        <span>one goal: the right customers.</span>
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
                                            <a
                                                href="{{ route('services.show', $service['slug']) }}"
                                                class="hover:text-lime transition-colors duration-300"
                                            >
                                                {{ $service['title'] }}
                                            </a>
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

    {{--
        The honest trade-off: Wavesync vs. freelancer vs. traditional agency,
        as a proper row/column comparison table (inspired by the compare
        tables used by Zaag and Design Monks) rather than a two-column
        checklist — the checklist version only ever compared Wavesync
        against one alternative, even though the heading asked about three.
        Verdicts are a mix of check/warning/cross on purpose: making every
        row a clean sweep for Wavesync would read as a strawman rather than
        an honest comparison. Freelancer and Traditional Agency get credit
        where it's genuinely warranted (freelancers: one person on the work;
        agencies: structured process).
    --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 flex my-16 sm:my-20 md:my-28 lg:my-36" data-reveal>
        <div class="w-full flex flex-col gap-8 sm:gap-10 md:gap-12">
            <div class="flex flex-col gap-4 max-w-3xl">
                <h2
                    class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    No Sugarcoating
                </h2>
                <h3
                    class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight sm:leading-[1.15] capitalize"
                >
                    Freelancer, agency, or Wavesync?
                </h3>
                <p class="text-forest/70 text-base sm:text-lg font-medium">Pick Wavesync if you want the person who scopes your project to be the same person who builds it — live, working, and still supported after launch, not a folder of files handed off to someone else.</p>
            </div>

            @php
                $tradeoffRows = [
                    [
                        'label' => 'Who does the work',
                        'freelancer' => ['status' => 'check', 'text' => 'One person, start to finish'],
                        'agency' => ['status' => 'cross', 'text' => 'Senior pitches, junior delivers'],
                        'wavesync' => ['status' => 'check', 'text' => 'One person, start to finish'],
                    ],
                    [
                        'label' => 'Design + development',
                        'freelancer' => ['status' => 'warning', 'text' => 'Usually just one discipline'],
                        'agency' => ['status' => 'warning', 'text' => 'Separate teams, handoff required'],
                        'wavesync' => ['status' => 'check', 'text' => 'Both under one roof'],
                    ],
                    [
                        'label' => 'Process & reliability',
                        'freelancer' => ['status' => 'warning', 'text' => 'Varies — no guaranteed process'],
                        'agency' => ['status' => 'check', 'text' => 'Structured, but slower & pricier'],
                        'wavesync' => ['status' => 'check', 'text' => 'Defined process, every project'],
                    ],
                    [
                        'label' => 'Pricing',
                        'freelancer' => ['status' => 'warning', 'text' => 'Often unclear scope'],
                        'agency' => ['status' => 'cross', 'text' => 'Change orders add up'],
                        'wavesync' => ['status' => 'check', 'text' => 'Scoped and agreed upfront'],
                    ],
                    [
                        'label' => 'After launch',
                        'freelancer' => ['status' => 'cross', 'text' => 'Support usually ends at payment'],
                        'agency' => ['status' => 'cross', 'text' => 'Needs a new contract'],
                        'wavesync' => ['status' => 'check', 'text' => 'Lifetime support included'],
                    ],
                    [
                        'label' => 'What you walk away with',
                        'freelancer' => ['status' => 'warning', 'text' => 'Depends who you hired'],
                        'agency' => ['status' => 'warning', 'text' => 'Often just files, no build'],
                        'wavesync' => ['status' => 'check', 'text' => 'A live, working site'],
                    ],
                ];

                // Two separate icon sets rather than one: a bright lime badge reads
                // fine against the dark Wavesync column but looks out of place as a
                // small saturated chip sitting directly on the light table rows, so
                // the light columns get a muted forest badge instead and lime stays
                // reserved for the Wavesync column where it's meant to stand out.
                $tradeoffIconsLight = [
                    'check' => ['icon' => 'fi-rr-check', 'badge' => 'bg-forest/10 text-forest'],
                    'warning' => ['icon' => 'fi-rr-exclamation', 'badge' => 'bg-amber-100 text-amber-600'],
                    'cross' => ['icon' => 'fi-rr-cross-small', 'badge' => 'bg-forest/5 text-forest/30'],
                ];
                $tradeoffIconsDark = [
                    'check' => ['icon' => 'fi-rr-check', 'badge' => 'bg-lime text-forest-deep'],
                    'warning' => ['icon' => 'fi-rr-exclamation', 'badge' => 'bg-amber-100 text-amber-600'],
                    'cross' => ['icon' => 'fi-rr-cross-small', 'badge' => 'bg-white/10 text-white/40'],
                ];
            @endphp

            <div class="w-full overflow-x-auto">
                <div class="min-w-175 md:min-w-0 rounded-3xl sm:rounded-4xl border border-forest/10 overflow-hidden">
                    {{--
                        Header row: all four labels share the same weight,
                        size, and case now — "Comparing" used to be small,
                        muted, and uppercase while its neighbors were bold
                        and full-size, which read as an accident rather
                        than a deliberate hierarchy.
                    --}}
                    <div class="grid grid-cols-[1.3fr_1fr_1fr_1fr]">
                        <div class="bg-mist p-4 sm:p-5 flex items-center border-r border-b border-forest/10">
                            <span class="font-agency font-bold text-forest text-sm sm:text-base">Comparing</span>
                        </div>
                        <div class="bg-mist p-4 sm:p-5 flex items-center border-r border-b border-forest/10">
                            <span class="font-agency font-bold text-forest text-sm sm:text-base">Freelancer</span>
                        </div>
                        <div class="bg-mist p-4 sm:p-5 flex items-center border-r border-b border-forest/10">
                            <span class="font-agency font-bold text-forest text-sm sm:text-base"
                                >Traditional Agency</span
                            >
                        </div>
                        <div class="bg-forest p-4 sm:p-5 flex items-center border-b border-forest">
                            <span class="font-agency font-bold text-lime text-sm sm:text-base">Wavesync</span>
                        </div>
                    </div>

                    {{-- Body rows --}}
                    @foreach ($tradeoffRows as $index => $row)
                        <div class="grid grid-cols-[1.3fr_1fr_1fr_1fr]">
                            <div
                                class="bg-white p-4 sm:p-5 flex items-center border-r border-forest/10 {{ $index < count($tradeoffRows) - 1 ? 'border-b' : '' }}"
                            >
                                <span
                                    class="font-agency font-semibold text-forest text-sm sm:text-base"
                                    >{{ $row['label'] }}</span
                                >
                            </div>

                            @foreach (['freelancer', 'agency'] as $column)
                                <div
                                    class="bg-white p-4 sm:p-5 flex items-center gap-2 sm:gap-3 border-r border-forest/10 {{ $index < count($tradeoffRows) - 1 ? 'border-b' : '' }}"
                                >
                                    <div
                                        class="flex items-center justify-center size-5 sm:size-6 shrink-0 rounded-full text-[10px] sm:text-xs {{ $tradeoffIconsLight[$row[$column]['status']]['badge'] }}"
                                    >
                                        <i
                                            class="fi {{ $tradeoffIconsLight[$row[$column]['status']]['icon'] }} flex"
                                        ></i>
                                    </div>
                                    <span
                                        class="text-forest/70 text-xs sm:text-sm leading-snug"
                                        >{{ $row[$column]['text'] }}</span
                                    >
                                </div>
                            @endforeach

                            <div
                                class="bg-forest p-4 sm:p-5 flex items-center gap-2 sm:gap-3 {{ $index < count($tradeoffRows) - 1 ? 'border-b border-forest-deep' : '' }}"
                            >
                                <div
                                    class="flex items-center justify-center size-5 sm:size-6 shrink-0 rounded-full text-[10px] sm:text-xs {{ $tradeoffIconsDark[$row['wavesync']['status']]['badge'] }}"
                                >
                                    <i class="fi {{ $tradeoffIconsDark[$row['wavesync']['status']]['icon'] }} flex"></i>
                                </div>
                                <span
                                    class="text-cream text-xs sm:text-sm leading-snug font-medium"
                                    >{{ $row['wavesync']['text'] }}</span
                                >
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <x-testimonials />

    <x-process-section />
</div>

<x-contact-form />

<x-faq-section />
