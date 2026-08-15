<div
    class="hero-media-bg w-full flex flex-col py-6 min-h-[45vh] sm:min-h-[50vh] md:min-h-[55vh] lg:min-h-[62vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <x-site-header />

    <div class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 w-11/12 mx-auto flex-1" data-reveal>
        <div class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide">
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            About Wavesync
        </div>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold font-agency flex flex-col leading-tight sm:leading-tight md:leading-[1.1]"
        >
            <span>Crafted, not templated.</span>
            <span>Considered, not rushed.</span>
            <span>Built to <span class="text-lime">last</span>.</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">
            Wavesync is led by {{ config('wavesync.founder_name') }} — {{ config('wavesync.founded_summary') }}
            designing, building, and automating for clients who expect their digital presence to match the
            quality of everything else they've built.
        </p>
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
                <p class="text-forest font-agency text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold leading-snug sm:leading-tight md:leading-[1.2]">
                    Wavesync exists for businesses that treat their digital presence as seriously as everything
                    else they've built — a website that gets found, a brand that earns trust at a glance, and
                    systems considered enough that nothing falls through the cracks.
                </p>
                <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">
                    Every engagement is scoped around the business in front of us, not a template package —
                    a landing page and a custom web application call for a different kind of attention entirely.
                    That's a deliberate choice: fewer clients, handled properly, rather than more clients handled
                    generically. It's also why we work remote-first with businesses across time zones, using
                    short, considered feedback loops instead of filling calendars with meetings.
                </p>
            </div>
        </div>
    </div>

    {{-- Founder --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-10 items-center">
            <div class="md:col-span-2 col-span-full">
                <div class="relative w-full aspect-square max-w-xs mx-auto md:mx-0 overflow-hidden rounded-3xl">
                    <img
                        class="absolute inset-0 w-full h-full object-cover object-center"
                        src="/images/founder.jpg"
                        alt="{{ config('wavesync.founder_name') }}"
                        loading="lazy"
                    />
                </div>
            </div>

            <div class="md:col-span-3 col-span-full flex flex-col gap-3 sm:gap-4">
                <h2
                    class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Founder &amp; CEO
                </h2>
                <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold">
                    {{ config('wavesync.founder_name') }}
                </h3>
                <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed max-w-xl">
                    {{ config('wavesync.founded_summary') }} designing websites, building brands, and automating the
                    parts of running a business that shouldn't need a person doing them by hand. Every project that
                    comes through Wavesync is shaped personally, start to finish — never handed off to whoever
                    happens to be free.
                </p>
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
        </div>
    </div>

    <div class="mt-16 sm:mt-20 md:mt-28">
        <p class="text-center text-forest/50 uppercase text-xs sm:text-sm font-bold tracking-widest mb-6 sm:mb-8">Clients we've worked with</p>
        <x-logo-carousel />
    </div>

    <x-process-section />

    <x-testimonials />
</div>

<x-contact-form />

<x-faq-section />
