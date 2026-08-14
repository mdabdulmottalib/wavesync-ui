<div class="w-11/12 mx-auto 2xl:w-10/12 flex my-16 sm:my-20 md:my-28 lg:my-36">
    <div class="w-full flex flex-col gap-6 sm:gap-8 md:gap-10">
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-4">
            <div class="col-span-1 md:col-span-2 flex flex-col gap-3 sm:gap-4 items-start">
                <h2
                    class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Testimonials
                </h2>
                <h3
                    class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold flex flex-col leading-tight sm:leading-[1.15] md:leading-[1.1] lg:leading-18 capitalize"
                >
                    <span>What our</span>
                    <span>happy clients</span>
                    <span>say about us.</span>
                </h3>
            </div>

            <div class="col-span-1 md:col-span-3 w-full flex items-start justify-start md:justify-end">
                <a
                    href="#contact"
                    class="group inline-flex items-center rounded-full border-2 sm:border-4 border-forest px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base md:text-lg font-bold text-forest"
                >
                    <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                        <span
                            class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                        >
                            Let's chat
                        </span>

                        <span
                            class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                        >
                            Let's chat
                        </span>
                    </span>
                </a>
            </div>
        </div>

        {{--
            Real client reviews, carried over from the founder's Fiverr history — verified,
            not fabricated. TODO(content): keep adding new ones here as they come in.
        --}}
        @php
            $testimonials = [
                [
                    'name' => '@buzzconrad',
                    'location' => 'United States',
                    'avatar_initial' => 'B',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Great from beginning to end. Met our deadlines and was quick to update the minor revisions that we required. I would recommend working with on fillable PDF forms and I, personally, will be working with him again on other types of projects.",
                ],
                [
                    'name' => '@chloeerankin',
                    'location' => 'United States',
                    'avatar_initial' => 'C',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Abdul is fantastic. Very responsive and polite. Required very minimal instructions and delivered a high quality product in a very reasonable amount of time. I will definitely use his services again if I need more digital products!",
                ],
                [
                    'name' => '@alessiobav',
                    'location' => 'Italy',
                    'avatar_initial' => 'A',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Mdabdul is really patient, he modified my project several times until I was fully satisfied, and now I am. Fast and efficient communication, 100% available, it is a real pleasure to work with him. We will definitely work together again !!",
                ],
                [
                    'name' => '@batiaparnass',
                    'location' => 'United States',
                    'avatar_initial' => 'B',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Professional quick and reliable. Exactly what I wanted.",
                ],
                [
                    'name' => '@kenshy1610',
                    'location' => 'Germany',
                    'avatar_initial' => 'K',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Sehr netter Kontakt. Hat alles super geklappt. Vielen Dank.",
                ],
                [
                    'name' => 'Ntombi Malatsi',
                    'location' => 'South Africa',
                    'avatar_initial' => 'N',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "I cannot even begin to express my gratitude because of the excellent manner in which the seller handled my order. He was able to communicate with me effectively and answered all my questions. He was very patient with me even when I asked the same question over and over again, he maintained the same attitude of excellence and for that, I am totally grateful because in the end, I was able to explain exactly what I wanted.",
                ],
                [
                    'name' => 'Ntombi Malatsi',
                    'location' => 'South Africa',
                    'avatar_initial' => 'N',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "This seller is totally amazing. The attention to detail when taking my order stood out for me, I would definitely use for all my future projects.",
                ],
                [
                    'name' => '@trophymom_',
                    'location' => 'United States',
                    'avatar_initial' => 'T',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Fast and efficient work! I am in the USA and he always responded in a timely fashion! He was very accommodating with any changes and made sure my journal was perfect! I will be sure to use him again and I highly recommend!",
                ],
                [
                    'name' => 'Pastor Will Alston',
                    'location' => 'United States',
                    'avatar' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/clients/pastor.jpeg',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Went back and worked this gentleman again and will say that of all the designers I have worked with He is the most down to earth and easy to work with. He keeps going until everything is perfect for you.",
                ],
                [
                    'name' => 'Pastor Will Alston',
                    'location' => 'United States',
                    'avatar' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/clients/pastor.jpeg',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "Was great to work with. He may be new but what he offers he does very well. Easy to communicate with, and hardworking. He beats a lot of competitions price yet delivers exceptional service.",
                ],
                [
                    'name' => '@theparrotmom',
                    'location' => 'United States',
                    'avatar_initial' => 'T',
                    'rating' => 5,
                    'source' => 'Fiverr',
                    'message' => "This seller worked hard to finish the project.",
                ],
            ];
        @endphp

        {{-- SLIDER --}}
        <div id="testimonialSlider" class="w-full relative overflow-hidden">
            <div
                id="testimonialTrack"
                class="w-full flex transition-transform duration-700 ease-[cubic-bezier(.22,1,.36,1)]"
            >
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-slide w-full md:w-1/2 shrink-0 px-1.5 sm:px-2">
                        <div
                            class="bg-forest text-cream rounded-3xl sm:rounded-4xl h-[300px] sm:h-[320px] md:h-[350px] relative"
                        >
                            <div class="p-5 sm:p-6 md:p-8">
                                <div class="flex flex-col gap-4 sm:gap-6 md:gap-8">
                                    <div class="w-full flex items-center justify-between">
                                        <div class="flex items-center gap-3 sm:gap-4">
                                            @if (! empty($testimonial['avatar']))
                                                <div
                                                    class="size-11 sm:size-12 md:size-14 rounded-full relative overflow-hidden shrink-0"
                                                >
                                                    <img
                                                        class="inset-0 object-cover object-center w-full h-full"
                                                        src="{{ $testimonial['avatar'] }}"
                                                        alt="{{ $testimonial['name'] }}"
                                                    />
                                                </div>
                                            @else
                                                <div
                                                    class="size-11 sm:size-12 md:size-14 rounded-full bg-lime/15 border border-lime/40 flex items-center justify-center text-lime font-agency font-bold text-base sm:text-lg shrink-0"
                                                    aria-hidden="true"
                                                >
                                                    {{ $testimonial['avatar_initial'] }}
                                                </div>
                                            @endif

                                            <div>
                                                <h3 class="font-agency font-bold text-base sm:text-lg leading-3.5">
                                                    {{ $testimonial['name'] }}
                                                </h3>
                                                <p class="text-xs sm:text-sm text-cream/70">{{ $testimonial['location'] }}</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col items-end gap-1 sm:gap-1.5 shrink-0">
                                            <div class="flex items-center gap-1 sm:gap-1.5">
                                                @foreach (range(1, $testimonial['rating'] ?? 5) as $index)
                                                    <i class="fi fi-sr-star flex text-xs sm:text-sm text-lime"></i>
                                                @endforeach
                                            </div>
                                            @if (! empty($testimonial['source']))
                                                <span class="text-[10px] sm:text-xs uppercase tracking-wide text-cream/50">via {{ $testimonial['source'] }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div>
                                        <p class="text-sm sm:text-base md:text-lg font-agency leading-relaxed line-clamp-4 md:line-clamp-5">"{{ $testimonial['message'] }}"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex items-center gap-3 sm:gap-4 ml-auto">
            <button
                id="prevBtn"
                type="button"
                class="group inline-flex items-center justify-center rounded-full border-2 border-forest font-bold text-forest size-10 sm:size-11 md:size-12 cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-300"
            >
                <i class="fi fi-rr-arrow-small-left flex text-xl sm:text-2xl md:text-3xl"></i>
            </button>
            <button
                id="nextBtn"
                type="button"
                class="group inline-flex items-center justify-center rounded-full border-2 border-forest font-bold text-forest size-10 sm:size-11 md:size-12 cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-300"
            >
                <i class="fi fi-rr-arrow-small-right flex text-xl sm:text-2xl md:text-3xl"></i>
            </button>
        </div>
    </div>
</div>

@push ('scripts')
    <script>
        (function () {
            const slider = document.getElementById('testimonialSlider');
            const track = document.getElementById('testimonialTrack');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const slides = Array.from(track.children);
            const total = slides.length;

            let itemsPerView = window.innerWidth >= 768 ? 2 : 1;
            let currentIndex = 0;
            let autoplayTimer = null;
            const AUTOPLAY_DELAY = 4000;

            // max index so the track never scrolls past the last full view
            function maxIndex() {
                return Math.max(total - itemsPerView, 0);
            }

            function slideWidthPercent() {
                // width of ONE slide as a percentage of the track container
                return 100 / itemsPerView;
            }

            function updateTransform(withTransition = true) {
                track.style.transition = withTransition ? 'transform 700ms cubic-bezier(.22,1,.36,1)' : 'none';
                const offset = currentIndex * slideWidthPercent();
                track.style.transform = `translateX(-${offset}%)`;
            }

            function goToIndex(index) {
                const max = maxIndex();
                // wrap around one card at a time
                if (index < 0) index = max;
                else if (index > max) index = 0;
                currentIndex = index;
                updateTransform(true);
            }

            function next() {
                goToIndex(currentIndex + 1);
            }

            function prev() {
                goToIndex(currentIndex - 1);
            }

            function startAutoplay() {
                stopAutoplay();
                autoplayTimer = setInterval(next, AUTOPLAY_DELAY);
            }

            function stopAutoplay() {
                if (autoplayTimer) {
                    clearInterval(autoplayTimer);
                    autoplayTimer = null;
                }
            }

            function restartAutoplay() {
                stopAutoplay();
                startAutoplay();
            }

            function recalcResponsive() {
                const newItemsPerView = window.innerWidth >= 768 ? 2 : 1;
                if (newItemsPerView !== itemsPerView) {
                    itemsPerView = newItemsPerView;
                    currentIndex = Math.min(currentIndex, maxIndex());
                    updateTransform(false);
                }
            }

            // Button events — move ONE card per click
            nextBtn.addEventListener('click', function () {
                next();
                restartAutoplay();
            });

            prevBtn.addEventListener('click', function () {
                prev();
                restartAutoplay();
            });

            // Pause on hover / touch
            slider.addEventListener('mouseenter', stopAutoplay);
            slider.addEventListener('mouseleave', startAutoplay);

            // Swipe support for mobile — one card per swipe
            let touchStartX = 0;
            let touchEndX = 0;

            slider.addEventListener(
                'touchstart',
                function (e) {
                    stopAutoplay();
                    touchStartX = e.changedTouches[0].screenX;
                },
                { passive: true },
            );

            slider.addEventListener(
                'touchend',
                function (e) {
                    touchEndX = e.changedTouches[0].screenX;
                    const diff = touchStartX - touchEndX;
                    if (Math.abs(diff) > 50) {
                        diff > 0 ? next() : prev();
                    }
                    startAutoplay();
                },
                { passive: true },
            );

            // Responsive recalculation
            let resizeTimeout;
            window.addEventListener('resize', function () {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(recalcResponsive, 150);
            });

            // Init
            updateTransform(false);
            startAutoplay();
        })();
    </script>
@endpush
