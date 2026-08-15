{{--
    Shared site nav, used inside the dark hero on every top-level page (home,
    individual service pages, about). Lives as the first child of
    .hero-media-bg so it picks up that wrapper's
    `> * { position: relative; z-index: 1 }` rule and renders above the
    background overlay.

    Nav links point at route('home') + a hash rather than a bare hash, since
    #process only exists on the homepage — a bare "#process" on a service
    page would just be a no-op. Services, About, and Work all get real
    routes instead, since they're real pages now.
--}}
@php
    $navServices = config('service_offerings.services');
@endphp

<header
    class="p-2.5 mx-auto w-full max-w-5xl z-50 bg-green-50/5 rounded-full backdrop-blur-3xl left-0 right-0 top-0 border-2 border-amber-50/5 sticky"
>
    <div class="flex items-center w-full justify-between">
        <div class="pl-2">
            <a href="{{ route('home') }}">
                {{-- <x-icons.wavesync-logo class="text-cream w-40 flex" /> --}}
                <span class="text-3xl text-cream font-agency font-extrabold">wavesync</span>
            </a>
        </div>

        <div class="text-cream text-sm hidden md:flex items-center gap-px">
            {{--
                Services mega menu: hover-triggered (desktop-only nav row
                anyway), built with plain group-hover rather than JS since
                there's no other interaction to coordinate.
            --}}
            <div class="relative group">
                <a
                    href="{{ route('home') }}#services"
                    class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300 inline-flex items-center gap-1.5"
                >
                    Services
                    <i class="fi fi-rr-angle-small-down flex text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                </a>

                <div
                    class="absolute left-1/2 -translate-x-1/2 top-full pt-3 w-190 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-[cubic-bezier(.22,1,.36,1)] z-50"
                >
                    <div class="bg-forest-deep rounded-3xl border border-white/10 shadow-2xl p-3">
                        <div class="grid grid-cols-2 gap-2">
                            @foreach ($navServices as $navService)
                                <a
                                    href="{{ route('services.show', $navService['slug']) }}"
                                    class="group/item flex items-start gap-4 rounded-2xl p-5 hover:bg-white/5 transition-colors duration-300"
                                >
                                    <div
                                        class="flex items-center justify-center size-11 shrink-0 rounded-xl bg-white/5 text-lime text-lg group-hover/item:bg-lime group-hover/item:text-forest-deep transition-colors duration-300"
                                    >
                                        <i class="fi {{ $navService['icon'] }} flex"></i>
                                    </div>
                                    <div class="flex flex-col gap-1.5">
                                        <span class="font-agency font-bold text-cream text-xl group-hover/item:text-lime transition-colors duration-300">
                                            {{ $navService['title'] }}
                                        </span>
                                        <span class="text-cream/60 text-sm leading-snug line-clamp-2">{{ $navService['desc'] }}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <div class="border-t border-white/10 mt-2 pt-4 pb-3 px-5 flex items-center justify-between gap-4">
                            <span class="text-cream/50 text-sm">Not sure which one you need?</span>
                            <a href="#contact" class="text-lime text-sm font-bold hover:underline shrink-0">Let's talk →</a>
                        </div>
                    </div>
                </div>
            </div>

            <a
                href="{{ route('portfolio') }}"
                class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                >Work</a
            >

            <a
                href="{{ route('home') }}#process"
                class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                >Process</a
            >

            <a
                href="{{ route('about') }}"
                class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                >About</a
            >

            <a
                href="{{ route('home') }}#contact"
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
