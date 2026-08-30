<div
    class="hero-media-bg w-full flex flex-col pt-23 pb-6 min-h-[30vh] sm:min-h-[32vh] md:min-h-[36vh]"
    style="background-image: url('/images/wavesync_hero_bg.png')"
>
    <div class="text-cream flex flex-col items-start justify-center gap-4 sm:gap-5 w-11/12 mx-auto flex-1" data-reveal>
        <div
            class="flex items-center gap-2 text-lime font-agency font-semibold text-sm sm:text-base uppercase tracking-wide"
        >
            <div class="size-2.5 sm:size-3 rounded-full bg-lime"></div>
            Legal
        </div>

        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold font-agency leading-tight">Terms of Service</h1>
        <p class="text-cream/70 font-medium text-base sm:text-lg max-w-2xl">Last updated {{ now()->format('F Y') }}. The terms behind using this site and working with Wavesync.</p>
    </div>
</div>

<div class="bg-mist py-16 sm:py-20 md:py-24">
    <div class="w-11/12 mx-auto 2xl:w-10/12 max-w-3xl flex flex-col gap-10 sm:gap-12" data-reveal>
        <p class="text-forest/70 text-sm sm:text-base leading-relaxed">These terms cover two things: using wavesync.agency itself, and the general terms that apply once a project is underway. The specifics of any individual engagement — scope, timeline, price — are agreed in writing before work starts and take precedence over the general terms here.</p>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Using this site</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">The content on this site — copy, design, case studies, code — belongs to Wavesync or the clients it's shown with permission from. You're welcome to browse, share links to it, and reach out through the contact form; reproducing it elsewhere as your own isn't permitted.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">How a project gets agreed</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Every project is scoped and quoted before any work starts — what's being delivered, the rough timeline, and the price. That scope is what gets built and charged; work outside it (a genuinely new request, not a small revision) gets its own conversation and, if needed, its own quote, rather than being absorbed silently or billed as a surprise.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Ownership of deliverables</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Once a project is paid in full, ownership of the agreed deliverables (the site, the brand assets, the automation built for you) transfers to you. Wavesync retains the right to display finished work in its own portfolio unless a client specifically asks otherwise.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Payment</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Payment terms (deposit, milestones, final balance) are set per project during scoping, not a fixed policy applied blindly to every engagement. Whatever's agreed in writing for a specific project is what governs that project.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Liability</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Work is delivered to a professional standard and tested before handoff, but no website, system, or automation can be guaranteed defect-free forever — especially as browsers, platforms, and third-party APIs it depends on change over time. Wavesync isn't liable for losses arising from those external changes, though ongoing support is available for exactly this reason.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Changes to these terms</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">If these general terms change, this page gets updated and the date at the top moves. Terms already agreed in writing for an active project aren't affected retroactively.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Questions</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Reach out at <a href="mailto:{{ config('wavesync.contact_email') }}" class="text-forest font-semibold hover:underline">{{ config('wavesync.contact_email') }}</a> or through the <a href="{{ route('contact.page') }}" class="text-forest font-semibold hover:underline">contact page</a>.</p>
        </div>
    </div>
</div>
