@php
    $listings = config('careers.listings');
@endphp

<div
    class="hero-media-bg w-full flex flex-col pt-23 pb-6 min-h-[38vh] sm:min-h-[42vh] md:min-h-[46vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <div class="text-cream flex flex-col items-start justify-center gap-4 sm:gap-5 w-11/12 mx-auto flex-1" data-reveal>
        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Careers
        </div>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold font-agency leading-tight"
        >
            Work with <span class="text-lime">Wavesync</span>.
        </h1>
        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">A small, remote-first studio that brings in specialists project by project — not a fixed org chart. If the work below sounds like yours, we'd like to hear from you.</p>
    </div>
</div>

<div class="bg-mist py-16 sm:py-20 md:py-24">
    {{-- How we work with people --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12" data-reveal>
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-4 sm:gap-5 md:gap-6 lg:gap-8">
            <div class="md:col-span-2 col-span-full">
                <h2
                    class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    How This Works
                </h2>
            </div>

            <div class="md:col-span-3 col-span-full space-y-4 sm:space-y-5">
                <p class="text-forest font-agency text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold leading-snug sm:leading-tight md:leading-[1.2]">Wavesync doesn't keep a large in-house bench — specialists get brought in for specific client engagements, on contract or part-time terms, for as long as the work calls for it.</p>
                <p class="text-forest/70 text-sm sm:text-base md:text-lg leading-relaxed">That means the roles below aren't seats waiting to be filled on a deadline — they're the kind of skills we regularly need for real client work. If one fits what you do, reach out with a portfolio and we'll talk about what's actually available right now.</p>
            </div>
        </div>
    </div>

    {{-- Open roles --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div class="flex flex-col gap-3 sm:gap-4 items-start mb-8 sm:mb-10 max-w-2xl">
            <h2
                class="capitalize text-forest text-lg sm:text-xl md:text-2xl lg:text-3xl font-agency font-semibold flex items-center gap-2"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                Roles We Regularly Need
            </h2>
            <h3 class="text-forest font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                {{ count($listings) }} kinds of work, always open to a conversation.
            </h3>
        </div>

        <div class="flex flex-col gap-5 sm:gap-6">
            @foreach ($listings as $listing)
                <div
                    id="{{ $listing['slug'] }}"
                    class="rounded-3xl sm:rounded-4xl border border-forest/10 bg-white p-6 sm:p-8 md:p-10 flex flex-col gap-5 sm:gap-6 scroll-mt-28"
                >
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-3 sm:gap-4">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="rounded-full bg-forest/5 text-forest px-3 py-1 text-xs font-bold uppercase tracking-wide">{{ $listing['type'] }}</span>
                                <span class="rounded-full bg-forest/5 text-forest px-3 py-1 text-xs font-bold uppercase tracking-wide">{{ $listing['location'] }}</span>
                            </div>
                            <h4 class="font-agency font-bold text-forest text-xl sm:text-2xl">{{ $listing['title'] }}</h4>
                        </div>

                        <a
                            href="mailto:{{ config('wavesync.contact_email') }}?subject={{ rawurlencode('Application: ' . $listing['title']) }}"
                            class="inline-flex items-center justify-center rounded-full bg-forest px-5 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-bold text-white shrink-0 hover:bg-forest-deep transition-colors duration-300"
                        >
                            Apply
                        </a>
                    </div>

                    <p class="text-forest/70 text-sm sm:text-base leading-relaxed">{{ $listing['summary'] }}</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 pt-2 border-t border-forest/10">
                        <div class="flex flex-col gap-2 pt-4 sm:pt-5">
                            <span class="font-agency font-bold text-forest/40 text-xs uppercase tracking-wide">What You'd Do</span>
                            <ul class="flex flex-col gap-1.5">
                                @foreach ($listing['responsibilities'] as $item)
                                    <li class="flex items-start gap-2 text-forest/80 text-sm leading-relaxed">
                                        <i class="fi fi-rr-check flex text-forest/40 text-xs mt-1 shrink-0"></i>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="flex flex-col gap-2 pt-4 sm:pt-5">
                            <span class="font-agency font-bold text-forest/40 text-xs uppercase tracking-wide">What We're Looking For</span>
                            <ul class="flex flex-col gap-1.5">
                                @foreach ($listing['requirements'] as $item)
                                    <li class="flex items-start gap-2 text-forest/80 text-sm leading-relaxed">
                                        <i class="fi fi-rr-check flex text-forest/40 text-xs mt-1 shrink-0"></i>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Honest catch-all --}}
    <div class="w-11/12 mx-auto 2xl:w-10/12 mt-16 sm:mt-20 md:mt-28" data-reveal>
        <div
            class="rounded-3xl sm:rounded-4xl bg-forest-deep px-6 sm:px-12 md:px-20 py-14 sm:py-16 md:py-20 flex flex-col items-center text-center gap-5 sm:gap-6"
        >
            <div
                class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
            >
                <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
                Don't See A Fit?
            </div>
            <p class="text-cream font-agency text-2xl sm:text-3xl md:text-4xl font-bold leading-snug sm:leading-tight max-w-2xl">Reach out anyway. Good people are worth a conversation even without an open slot.</p>
            <a
                href="{{ route('contact.page') }}"
                class="group inline-flex items-center rounded-full bg-lime px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-forest-deep"
            >
                <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                    <span
                        class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                    >
                        Get in touch
                    </span>

                    <span
                        class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                    >
                        Get in touch
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>
