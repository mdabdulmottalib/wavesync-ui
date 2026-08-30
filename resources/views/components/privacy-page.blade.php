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

        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold font-agency leading-tight">Privacy Policy</h1>
        <p class="text-cream/70 font-medium text-base sm:text-lg max-w-2xl">Last updated {{ now()->format('F Y') }}. What we collect, why, and what we do with it.</p>
    </div>
</div>

<div class="bg-mist py-16 sm:py-20 md:py-24">
    <div class="w-11/12 mx-auto 2xl:w-10/12 max-w-3xl flex flex-col gap-10 sm:gap-12" data-reveal>
        <p class="text-forest/70 text-sm sm:text-base leading-relaxed">This policy covers what happens to your information when you visit wavesync.agency or submit the contact form. It's written to describe what this site actually does, not a generic template — if a section doesn't apply to us, it isn't here.</p>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Information we collect</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">When you submit the contact form, we collect your name, email address, message, and — if you provide them — your budget range, how you heard about us, and which services you're interested in. That's the full list; we don't collect anything else through the form.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">How we use it</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Your information is used to respond to your inquiry and, if we start working together, to deliver the project. We don't use it for marketing emails you haven't asked for, and we don't sell or share it with third parties.</p>
        </div>

        <div class="flex flex-col gap-3" id="cookies">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Cookies &amp; tracking</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">This site does not currently use third-party analytics, advertising, or tracking cookies. The only cookie set is a standard session cookie needed for the site to function (e.g. keeping a submitted form from double-posting) — nothing that profiles you or follows you across other sites. If that changes, this section will be updated to reflect it, and this page's "last updated" date above will move.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">How your information is stored</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Contact form submissions are stored in our database and are only accessible to the people running Wavesync. Email notifications about new submissions are currently sent through our own mail infrastructure; if that changes to a third-party provider in the future, this policy will name it here.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Your rights</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">You can ask us what information we hold about you, request a copy of it, or ask us to delete it, at any time — email {{ config('wavesync.contact_email') }} and we'll handle it directly, no automated ticket system in between.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Changes to this policy</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">If what we collect or how we use it changes, this page gets updated and the date at the top moves — no silent edits.</p>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-agency font-bold text-forest text-xl sm:text-2xl">Questions</h2>
            <p class="text-forest/70 text-sm sm:text-base leading-relaxed">Reach out at <a href="mailto:{{ config('wavesync.contact_email') }}" class="text-forest font-semibold hover:underline">{{ config('wavesync.contact_email') }}</a> or through the <a href="{{ route('contact.page') }}" class="text-forest font-semibold hover:underline">contact page</a>.</p>
        </div>
    </div>
</div>
