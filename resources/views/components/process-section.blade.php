@props([
    'eyebrow' => 'Simple process',
    'titleLines' => ['How we ', 'actually work. '],
    'steps' => [
        ['title' => 'Discover', 'desc' => 'We start by understanding your business, your customers, and where the current website or workflow is actually falling short.'],
        ['title' => 'Design', 'desc' => 'Wireframes and visual design come next — built around how your customers actually move through a decision, not just how a template looks.'],
        ['title' => 'Build', 'desc' => 'We build the site, brand assets, or automation on Laravel, WordPress, or the right workflow tooling — and connect the pieces that need to talk to each other.'],
        ['title' => 'Launch', 'desc' => 'After launch we keep watching what\'s working, fixing what isn\'t, and automating anything repetitive we find along the way.'],
    ],
])

<div id="process" class="w-11/12 mx-auto 2xl:w-10/12 flex my-16 sm:my-20 md:my-28 lg:my-36" data-reveal>
    <div class="w-full flex flex-col gap-6 sm:gap-8 md:gap-10">
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-4">
            <div class="col-span-1 md:col-span-2 flex flex-col gap-3 sm:gap-4 items-start">
                <h2
                    class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    {{ $eyebrow }}
                </h2>
                <h3
                    class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold flex flex-col leading-tight sm:leading-[1.15] md:leading-[1.1] lg:leading-18 capitalize"
                >
                    @foreach ($titleLines as $line)
                        <span>{{ $line }}</span>
                    @endforeach
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

        {{--
            Decorative roadmap line connecting the 4 steps below, dipping down to
            touch the top-center of each card (and tucking slightly behind it via
            the negative margin, since the cards render after it in source order)
            and arcing up between them — a path running through the steps rather
            than a flat strip floating above them. Hidden below md where the cards
            stack into 1-2 columns and a horizontal connecting line would no
            longer line up with anything.
        --}}
        <div class="hidden md:block w-full -mb-2" aria-hidden="true">
            <svg viewBox="0 0 1200 100" preserveAspectRatio="none" class="w-full h-16 lg:h-20">
                <path
                    d="M0,70 C75,70 75,100 150,100 C225,100 225,25 300,25 C375,25 375,100 450,100 C525,100 525,25 600,25 C675,25 675,100 750,100 C825,100 825,25 900,25 C975,25 975,100 1050,100 C1125,100 1125,70 1200,70"
                    fill="none"
                    stroke="currentColor"
                    class="text-forest/25"
                    stroke-width="2"
                    stroke-dasharray="7 7"
                    stroke-linecap="round"
                />
                <circle cx="150" cy="100" r="6" class="fill-lime" />
                <circle cx="450" cy="100" r="6" class="fill-lime" />
                <circle cx="750" cy="100" r="6" class="fill-lime" />
                <circle cx="1050" cy="100" r="6" class="fill-lime" />
            </svg>
        </div>

        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 sm:gap-2">
            @foreach ($steps as $step)
                <div
                    class="flex gap-4 col-span-1 bg-forest text-cream rounded-3xl sm:rounded-4xl h-fit md:sticky md:top-16"
                >
                    <div class="w-full p-5 sm:p-6 flex flex-col justify-between">
                        <div class="flex flex-col gap-2">
                            <div>
                                <h3 class="font-agency font-bold text-2xl sm:text-3xl md:text-4xl">*{{ $step['title'] }}</h3>
                            </div>
                            <div>
                                <p class="text-sm sm:text-base md:text-lg">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
