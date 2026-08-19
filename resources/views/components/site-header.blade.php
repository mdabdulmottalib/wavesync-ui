{{--
    Shared site nav, rendered once in layouts/app.blade.php (not per-page)
    so `fixed` positioning holds it in place across the ENTIRE page scroll,
    not just within one page's hero section — position:sticky only holds an
    element within its own containing block, so when this used to live
    inside each page's .hero-media-bg, it stopped sticking the moment that
    section scrolled past. `fixed` has no such boundary.

    top-6 (24px) is a deliberate gap from the viewport edge, not touching
    it — matches the 24px (py-6) top padding .hero-media-bg used to give it
    when it sat in normal flow, so nothing shifted visually. Since header
    is now out of flow, every .hero-media-bg's own top padding was bumped
    from py-6 to pt-23 (92px = this 24px gap + header's own ~68px height)
    pb-6, to leave the same amount of visual space above the hero content
    that header used to occupy by being there.

    Nav links point at route('home') + a hash rather than a bare hash, since
    #process only exists on the homepage — a bare "#process" elsewhere would
    just be a no-op.

    The services mega menu panel (#services-panel below) is a SIBLING of
    <header>, not a descendant — <header> already has its own backdrop-blur
    for the pill's glass look, and backdrop-filter isolates its own subtree
    per spec, so a second backdrop-filter nested inside it can only sample
    header's own (empty) backdrop, never the real page behind everything.
    Keeping the panel outside <header> lets its blur reach real content.
    Both are `fixed` now (not absolute-in-a-relative-wrapper) since header's
    position is a constant, known viewport offset — no shared positioning
    ancestor needed. Visibility is driven by a small JS hover-intent handler
    (see the mobile-nav script block below) rather than Tailwind's
    group-hover or a CSS :has() rule — the trigger (inside header) and the
    panel (outside it) aren't close enough in the layout for a pure-CSS
    hover chain to survive the gap between them without a flicker-close.
--}}
@php
    // Mega menu groups the granular 'highlights' pages by category — the
    // 4 category cards are plain labels now (no page of their own to
    // link to from here), each showing its 3 real highlight pages.
    $navCategories = config('service_offerings.categories');
    $navHighlightsByCategory = collect(config('service_offerings.highlights'))->groupBy('category');
@endphp

<header
    id="site-header"
    class="p-2.5 mx-auto w-full max-w-5xl z-50 bg-green-50/5 rounded-full backdrop-blur-3xl left-0 right-0 top-6 border-2 border-amber-50/5 fixed transition-colors duration-300"
>
    <div class="flex items-center w-full justify-between">
        <div class="pl-2">
            <a href="{{ route('home') }}">
                <img src="/images/logo.svg" alt="Wavesync" class="h-7 sm:h-8 w-auto" />
            </a>
        </div>

        <div class="text-cream text-sm hidden md:flex items-center gap-px">
            <a
                id="services-trigger"
                href="{{ route('home') }}#services"
                class="group font-bold hover:bg-[#3C5847] hover:text-lime px-5 py-2 rounded-full transition-colors duration-300 inline-flex items-center gap-1.5"
            >
                Services
                <i class="fi fi-rr-angle-small-down flex text-xs transition-transform duration-300 group-hover:rotate-180"></i>
            </a>

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
                href="{{ route('home') }}#services"
                class="font-bold text-cream px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-lime transition-colors duration-300"
                >Services</a
            >

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

{{--
    Sibling of <header>, not a descendant — see the top-of-file comment
    for why. Visibility is driven by JS mouseenter/mouseleave (with a
    short close delay) below, not Tailwind's group-hover or a :has()
    rule — the trigger sits inside <header>, and there's real vertical
    distance between the trigger's own position and this panel's top
    (which starts below the WHOLE header pill, not just the trigger). A
    pure-CSS hover chain leaves a dead zone in that gap where the mouse is
    over neither element, closing the panel before it can be reached. A
    short JS close-delay bridges that gap the way every real mega menu
    does. `fixed`, not `absolute` — header is fixed at a constant viewport
    offset now, so this panel's `top` is just that offset plus header's
    own height, no shared positioned ancestor needed.

    Hidden via opacity + pointer-events, NOT `invisible` (visibility:
    hidden) — <header> uses the exact same backdrop-blur-3xl and never
    lags, because it's visible from first paint, so the browser promotes
    it to its own GPU layer immediately. `visibility:hidden` drops an
    element out of that layer entirely, so this panel was re-promoted
    (and re-rasterizing a blurred layer this size isn't free) on every
    first hover, showing up as a brief "flat, then blurry" pop-in.
    Staying opacity:0-but-rendered (plus will-change on the blurred inner
    div below) keeps its layer warm the same way header's always is.
--}}
<div
    id="services-panel"
    class="fixed left-1/2 -translate-x-1/2 top-26 w-220 lg:w-260 max-w-[calc(100vw-3rem)] opacity-0 pointer-events-none translate-y-2 transition-transform duration-150 ease-[cubic-bezier(.22,1,.36,1)] z-50"
>
        <div class="relative bg-green-50/5 backdrop-blur-3xl will-change-[backdrop-filter] rounded-3xl border-2 border-amber-50/5 shadow-2xl overflow-hidden">
            {{-- decorative glow, purely cosmetic --}}
            <div class="pointer-events-none absolute -top-20 -right-16 size-72 rounded-full bg-lime/10 blur-3xl"></div>

            <div class="relative flex divide-x divide-white/10">
                {{-- Category cards --}}
                <div class="flex-1 grid grid-cols-2 divide-x divide-y divide-white/10">
                    @foreach ($navCategories as $categoryKey => $category)
                        <div class="relative flex flex-col gap-4 p-6">
                            <div class="flex items-center gap-2.5">
                                <div class="flex items-center justify-center size-9 shrink-0 rounded-xl bg-white/5 text-lime text-sm">
                                    <i class="fi {{ $category['icon'] }} flex"></i>
                                </div>
                                <span class="font-agency font-bold text-cream text-base leading-snug">
                                    {{ $category['label'] }}
                                </span>
                            </div>

                            <div class="flex flex-col gap-2 border-t border-white/10 pt-3 mt-auto">
                                @foreach ($navHighlightsByCategory->get($categoryKey, []) as $highlight)
                                    <a
                                        href="{{ route('services.show', $highlight['slug']) }}"
                                        class="text-cream/60 hover:text-lime text-sm font-medium transition-colors duration-300"
                                    >
                                        {{ $highlight['title'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- "Not sure which one you need?" card — a real photo (not
                     another text block) so this column reads as a person to
                     talk to, not a fourth wall of copy next to three
                     columns of it. Third column, slightly wider than the
                     category columns so the photo has room to breathe. --}}
                <a
                    href="{{ route('contact.page') }}"
                    class="group/cta relative w-72 shrink-0 overflow-hidden"
                >
                    <img
                        src="/images/founder.jpg"
                        alt=""
                        class="absolute inset-0 w-full h-full object-cover object-top transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)] group-hover/cta:scale-105"
                    />
                    <div class="absolute inset-0 bg-linear-to-t from-forest-deep via-forest-deep/60 to-transparent"></div>

                    <div class="relative h-full flex flex-col justify-end gap-1.5 p-6">
                        <span class="text-cream/70 text-sm font-medium">Not sure which one you need?</span>
                        <span class="inline-flex items-center gap-1.5 text-lime font-agency font-bold text-lg">
                            Let's talk
                            <i class="fi fi-rr-arrow-right flex text-sm transition-transform duration-300 group-hover/cta:translate-x-1"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>

@once
    @push ('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Header is fixed across the whole page now (not just the
                // hero), so once scrolled past the hero photo it floats
                // over the light body sections instead — the translucent
                // glass look (cream/lime text) becomes unreadable there.
                // Swap to a solid dark pill once each element's OWN bottom
                // edge reaches past the hero's dark background, not just on
                // scroll — the mega menu panel is much taller than the
                // header, so on a page with a short hero, opening it can
                // already push its bottom into the light section below
                // even at scroll position 0. Header and panel are checked
                // independently since only one of them may have crossed.
                const header = document.getElementById('site-header');
                const servicesPanelEl = document.getElementById('services-panel');
                const hero = document.querySelector('.hero-media-bg');

                if (header && hero) {
                    const glassClasses = ['bg-green-50/5', 'backdrop-blur-3xl', 'border-amber-50/5'];
                    const solidClasses = ['bg-forest-deep', 'border-white/10'];

                    const applyState = (el, isSolid) => {
                        el.classList.remove(...(isSolid ? glassClasses : solidClasses));
                        el.classList.add(...(isSolid ? solidClasses : glassClasses));
                    };

                    const updateHeader = () => {
                        const heroBottom = hero.getBoundingClientRect().bottom;
                        const headerBottom = header.getBoundingClientRect().bottom;
                        applyState(header, heroBottom < headerBottom);
                    };

                    const updatePanel = () => {
                        if (!servicesPanelEl) return;
                        const innerPanel = servicesPanelEl.querySelector(':scope > div');
                        if (!innerPanel) return;
                        const heroBottom = hero.getBoundingClientRect().bottom;
                        const panelBottom = servicesPanelEl.getBoundingClientRect().bottom;
                        applyState(innerPanel, heroBottom < panelBottom);
                    };

                    const updateAll = () => {
                        updateHeader();
                        updatePanel();
                    };

                    updateAll();
                    window.addEventListener('scroll', updateAll, { passive: true });
                    window.addEventListener('resize', updateAll);

                    // Also re-check the moment the panel opens — its
                    // bottom edge is only meaningful once it's visible,
                    // and this shouldn't wait for a scroll event to fire.
                    servicesPanelEl?.addEventListener('mouseenter', updatePanel);
                    document.getElementById('services-trigger')?.addEventListener('mouseenter', updatePanel);
                }

                // Services mega menu: hover-intent with a short close delay
                // bridges the gap between the trigger (inside <header>) and
                // the panel (a sibling of <header> — see the comment near
                // #services-panel for why it can't be a descendant).
                const servicesTrigger = document.getElementById('services-trigger');
                const servicesPanel = document.getElementById('services-panel');

                if (servicesTrigger && servicesPanel) {
                    let closeTimer = null;

                    const openPanel = () => {
                        clearTimeout(closeTimer);
                        servicesPanel.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-2');
                        servicesPanel.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
                    };

                    const scheduleClose = () => {
                        clearTimeout(closeTimer);
                        closeTimer = setTimeout(() => {
                            servicesPanel.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
                            servicesPanel.classList.add('opacity-0', 'pointer-events-none', 'translate-y-2');
                        }, 200);
                    };

                    servicesTrigger.addEventListener('mouseenter', openPanel);
                    servicesTrigger.addEventListener('mouseleave', scheduleClose);
                    servicesPanel.addEventListener('mouseenter', openPanel);
                    servicesPanel.addEventListener('mouseleave', scheduleClose);
                }

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
