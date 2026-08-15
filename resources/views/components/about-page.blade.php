<div
    class="hero-media-bg w-full flex flex-col py-6 min-h-[45vh] sm:min-h-[50vh] md:min-h-[55vh] lg:min-h-[62vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <x-site-header />

    <div class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 w-11/12 mx-auto flex-1" data-reveal>
        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
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

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">Wavesync is led by {{ config('wavesync.founder_name') }} — {{ config('wavesync.founded_summary') }} designing, building, and automating for clients who expect their digital presence to match the quality of everything else they've built.</p>
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

    {{-- Mission --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-4 sm:gap-5 md:gap-6 lg:gap-8">
            <div class="md:col-span-2 col-span-full">
                <h2
                    class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Our Mission
                </h2>
            </div>

            <div class="md:col-span-3 col-span-full space-y-4 sm:space-y-5">
                <p class="text-forest font-agency text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold leading-snug sm:leading-tight md:leading-[1.2]">Most businesses lose customers not because the product is wrong, but because the digital front door doesn't hold up — slow, generic, or forgettable. Our mission is to close that gap.</p>
                <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">We build the website, the brand, and the systems behind them to the same standard the business itself was built to — so the first impression a customer gets is an honest one.</p>
            </div>
        </div>
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
                ['icon' => 'fi-rr-user', 'title' => 'One person, start to finish', 'desc' => 'The person who scopes your project is the same one who builds it — no handoffs between sales, design, and delivery.'],
                ['icon' => 'fi-rr-time-past', 'title' => 'Considered, not rushed', 'desc' => "Fewer clients, handled properly, beats more clients handled generically. Deadlines matter, but they don't dictate quality."],
                ['icon' => 'fi-rr-shield-check', 'title' => 'Support doesn\'t end at launch', 'desc' => "A finished site or system still needs someone accountable for it after it ships. That someone stays on."],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
            @foreach ($aboutValues as $value)
                <div
                    class="flex flex-col gap-3 sm:gap-4 rounded-3xl bg-white border border-forest/10 p-6 sm:p-7 md:p-8"
                >
                    <div
                        class="flex items-center justify-center size-11 sm:size-12 shrink-0 rounded-xl bg-forest/5 text-forest text-lg"
                    >
                        <i class="fi {{ $value['icon'] }} flex"></i>
                    </div>
                    <h4 class="font-agency font-bold text-forest text-lg sm:text-xl">{{ $value['title'] }}</h4>
                    <p class="text-forest/70 text-sm sm:text-base leading-relaxed">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
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
            <p class="text-cream font-agency text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold leading-snug sm:leading-tight">From one <span class="text-lime">Core 2 Duo</span> PC to Wavesync Agency.</p>
        </div>
    </div>
    {{-- Founder's journey: real story, in the founder's own words --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-10">
            <div class="md:col-span-2 col-span-full flex flex-col gap-6 sm:gap-7">
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
                    <h2
                        class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                    >
                        <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                        Founder &amp; CEO
                    </h2>
                    <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold">
                        {{ config('wavesync.founder_name') }}
                    </h3>
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

    <x-process-section />

    <x-testimonials />
</div>

<x-contact-form />

<x-faq-section />
