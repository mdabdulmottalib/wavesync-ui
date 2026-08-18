{{--
    Shared site nav, used inside the dark hero on every top-level page (home,
    about, portfolio). Lives as the first child of .hero-media-bg so it
    picks up that wrapper's `> * { position: relative; z-index: 1 }` rule
    and renders above the background overlay.

    Nav links point at route('home') + a hash rather than a bare hash, since
    #process only exists on the homepage — a bare "#process" elsewhere would
    just be a no-op.
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
                <img src="/images/logo.svg" alt="Wavesync" class="h-7 sm:h-8 w-auto" />
            </a>
        </div>

        <div class="text-cream text-sm hidden md:flex items-center gap-px">
            {{--
                Services mega menu — temporarily hidden while running without
                individual /services/{slug} pages (routes still registered,
                just 404 — see routes/web.php). Not deleted; uncomment to
                restore once single service pages are back.
            --}}
            {{--
            <div class="relative group">
                <a
                    href="{{ route('home') }}#services"
                    class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300 inline-flex items-center gap-1.5"
                >
                    Services
                    <i class="fi fi-rr-angle-small-down flex text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                </a>

                <div
                    class="absolute left-1/2 -translate-x-1/2 top-full pt-3 w-220 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-[cubic-bezier(.22,1,.36,1)] z-50"
                >
                    <div class="bg-forest-deep rounded-3xl border border-white/10 shadow-2xl p-6">
                        <div class="grid grid-cols-4 gap-6">
                            @foreach ($navServices as $navService)
                                <div class="flex flex-col gap-4">
                                    <a href="{{ route('services.show', $navService['slug']) }}" class="group/cat flex flex-col gap-3">
                                        <div
                                            class="flex items-center justify-center size-10 shrink-0 rounded-xl bg-white/5 text-lime text-base group-hover/cat:bg-lime group-hover/cat:text-forest-deep transition-colors duration-300"
                                        >
                                            <i class="fi {{ $navService['icon'] }} flex"></i>
                                        </div>
                                        <span class="font-agency font-bold text-cream text-sm sm:text-base leading-snug group-hover/cat:text-lime transition-colors duration-300">
                                            {{ $navService['title'] }}
                                        </span>
                                    </a>

                                    <div class="flex flex-col gap-2.5 border-t border-white/10 pt-3">
                                        @foreach ($navService['menu_highlights'] as $highlight)
                                            <a
                                                href="{{ route('services.show', $navService['slug']) }}#{{ \Illuminate\Support\Str::slug($highlight) }}"
                                                class="text-cream/60 hover:text-lime text-sm font-medium transition-colors duration-300"
                                            >
                                                {{ $highlight }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="border-t border-white/10 mt-5 pt-4 flex items-center justify-between gap-4">
                            <span class="text-cream/50 text-sm">Not sure which one you need?</span>
                            <a href="{{ route('contact.page') }}" class="text-lime text-sm font-bold hover:underline shrink-0">Let's talk →</a>
                        </div>
                    </div>
                </div>
            </div>
            --}}

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
                href="{{ route('contact.page') }}"
                class="font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300"
                >Contact</a
            >
        </div>

        <div class="hidden md:block">
            <a
                href="{{ route('contact.page') }}"
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

        {{-- Mobile menu trigger --}}
        <button
            type="button"
            id="mobileNavToggle"
            aria-expanded="false"
            aria-controls="mobileNavPanel"
            aria-label="Toggle menu"
            class="md:hidden flex items-center justify-center size-11 shrink-0 rounded-full border-2 border-cream/20 text-cream transition-colors duration-300 hover:border-cream/40"
        >
            <i class="fi fi-rr-menu-burger flex text-lg" data-icon="open"></i>
            <i class="fi fi-rr-cross-small hidden text-xl" data-icon="close"></i>
        </button>
    </div>

    {{-- Mobile nav panel: absolutely positioned below the pill bar (same
         pattern as the desktop mega menu above) so the header itself never
         has to change shape when the panel opens. --}}
    <div
        id="mobileNavPanel"
        class="md:hidden absolute left-0 right-0 top-full mt-3 opacity-0 invisible -translate-y-2 transition-all duration-300 ease-[cubic-bezier(.22,1,.36,1)] z-40"
    >
        <div class="bg-forest-deep rounded-3xl border border-white/10 shadow-2xl p-3 flex flex-col gap-1">
            <a
                href="{{ route('portfolio') }}"
                class="font-bold text-cream px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-lime transition-colors duration-300"
                >Work</a
            >

            <a
                href="{{ route('home') }}#process"
                class="font-bold text-cream px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-lime transition-colors duration-300"
                >Process</a
            >

            <a
                href="{{ route('about') }}"
                class="font-bold text-cream px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-lime transition-colors duration-300"
                >About</a
            >

            <a
                href="{{ route('contact.page') }}"
                class="font-bold text-cream px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-lime transition-colors duration-300"
                >Contact</a
            >

            <a
                href="{{ route('contact.page') }}"
                class="mt-2 inline-flex items-center justify-center rounded-full bg-lime px-6 py-3 font-bold text-forest-deep"
            >
                Get a Quote
            </a>
        </div>
    </div>
</header>

@once
    @push ('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toggle = document.getElementById('mobileNavToggle');
                const panel = document.getElementById('mobileNavPanel');

                if (!toggle || !panel) return;

                const iconOpen = toggle.querySelector('[data-icon="open"]');
                const iconClose = toggle.querySelector('[data-icon="close"]');

                function closeNav() {
                    panel.classList.add('opacity-0', 'invisible', '-translate-y-2');
                    toggle.setAttribute('aria-expanded', 'false');
                    iconOpen.classList.remove('hidden');
                    iconClose.classList.add('hidden');
                }

                function openNav() {
                    panel.classList.remove('opacity-0', 'invisible', '-translate-y-2');
                    toggle.setAttribute('aria-expanded', 'true');
                    iconOpen.classList.add('hidden');
                    iconClose.classList.remove('hidden');
                }

                toggle.addEventListener('click', function () {
                    toggle.getAttribute('aria-expanded') === 'true' ? closeNav() : openNav();
                });

                panel.querySelectorAll('a').forEach(function (link) {
                    link.addEventListener('click', closeNav);
                });

                window.addEventListener('resize', function () {
                    if (window.innerWidth >= 768) closeNav();
                });
            });
        </script>
    @endpush
@endonce
