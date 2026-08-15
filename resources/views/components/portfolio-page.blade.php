@props(['caseStudies'])

<div
    class="hero-media-bg w-full flex flex-col py-6 min-h-[45vh] sm:min-h-[50vh] md:min-h-[55vh] lg:min-h-[62vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <x-site-header />

    <div class="text-cream flex flex-col items-start justify-center gap-5 sm:gap-6 w-11/12 mx-auto flex-1" data-reveal>
        <div class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide">
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Our Work
        </div>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold font-agency flex flex-col leading-tight sm:leading-tight md:leading-[1.1]"
        >
            <span>Real projects.</span>
            <span>Real <span class="text-lime">clients</span>.</span>
        </h1>

        <p class="text-cream/70 font-medium text-base sm:text-lg md:text-xl max-w-2xl">
            Every project here shipped for a real business — no concept pieces, no filler. Web design and brand
            identity work, start to finish.
        </p>
    </div>
</div>

<div class="bg-mist py-20 sm:py-24 md:py-28">
    <div class="w-11/12 mx-auto 2xl:w-10/12" data-reveal>
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach ($caseStudies as $project)
                <a href="{{ $project['href'] }}" class="group flex flex-col items-start gap-3 sm:gap-4">
                    <div class="w-full overflow-hidden h-60 sm:h-72 md:h-80 relative rounded-2xl sm:rounded-3xl">
                        <img
                            class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover:scale-105"
                            src="{{ $project['image'] }}"
                            alt="{{ $project['title'] }}"
                            loading="lazy"
                        />
                    </div>

                    <div class="flex items-start flex-col gap-1 sm:gap-1.5">
                        <span class="text-sm font-medium text-forest/60">{{ $project['category'] }}</span>
                        <span class="relative inline-block text-xl sm:text-2xl font-agency font-extrabold text-forest">
                            {{ $project['title'] }}
                            <span
                                class="absolute bottom-0 left-0 h-0.5 w-full rounded-full origin-right scale-x-0 bg-current transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover:origin-left group-hover:scale-x-100"
                            ></span>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <x-process-section />

    <x-testimonials />
</div>

<x-contact-form />

<x-faq-section />
