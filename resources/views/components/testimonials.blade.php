<div class="w-11/12 mx-auto 2xl:w-10/12 flex my-16 sm:my-20 md:my-28 lg:my-36">
    <div class="w-full flex flex-col gap-8 sm:gap-10 md:gap-12">
        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-8 items-end">
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

            <div class="col-span-1 md:col-span-3 flex flex-col md:items-end gap-4 sm:gap-5">
                <p class="text-forest/70 text-sm sm:text-base md:text-lg font-medium max-w-md md:text-right">
                    Every review here is real and unedited — pulled straight from client feedback, not written for
                    the website.
                </p>
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

            // Real numbers, computed from the reviews above rather than a
            // fixed figure — stays honest even as more get added over time.
            $reviewCount = count($testimonials);
            $avgRating = round(collect($testimonials)->avg('rating'), 1);
            $avatarPreview = array_slice($testimonials, 0, 4);
            $remainingCount = max($reviewCount - count($avatarPreview), 0);
        @endphp

        <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-4 sm:gap-5 items-stretch">
            {{-- Rating summary --}}
            <div
                class="md:col-span-2 col-span-full bg-forest text-cream rounded-3xl sm:rounded-4xl p-6 sm:p-8 flex flex-col justify-between gap-6 sm:gap-8"
            >
                <div class="flex flex-col gap-2 sm:gap-3">
                    <span class="font-agency font-extrabold text-6xl sm:text-7xl leading-none">{{ number_format($avgRating, 1) }}</span>
                    <div class="flex items-center gap-1.5">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fi fi-sr-star flex text-base sm:text-lg text-lime"></i>
                        @endfor
                    </div>
                    <span class="text-cream/60 text-sm sm:text-base font-medium">({{ $reviewCount }} reviews via Fiverr)</span>
                </div>

                <p class="font-agency font-bold text-xl sm:text-2xl leading-snug">Client feedback that speaks for itself.</p>

                <div class="flex items-center">
                    @foreach ($avatarPreview as $person)
                        <div
                            class="size-11 sm:size-12 rounded-full border-2 border-forest -ml-3 first:ml-0 overflow-hidden shrink-0 relative"
                        >
                            @if (! empty($person['avatar']))
                                <img
                                    class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="{{ $person['avatar'] }}"
                                    alt="{{ $person['name'] }}"
                                />
                            @else
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-lime/15 text-lime font-agency font-bold text-sm sm:text-base"
                                    aria-hidden="true"
                                >
                                    {{ $person['avatar_initial'] }}
                                </div>
                            @endif
                        </div>
                    @endforeach
                    @if ($remainingCount > 0)
                        <div
                            class="size-11 sm:size-12 rounded-full border-2 border-forest -ml-3 bg-lime text-forest-deep flex items-center justify-center font-agency font-bold text-sm shrink-0"
                        >
                            +{{ $remainingCount }}
                        </div>
                    @endif
                </div>
            </div>

            {{-- Featured single-review carousel --}}
            <div class="md:col-span-3 col-span-full">
                <div id="testimonialSlider" class="w-full h-full relative overflow-hidden">
                    <div
                        id="testimonialTrack"
                        class="w-full h-full flex transition-transform duration-700 ease-[cubic-bezier(.22,1,.36,1)]"
                    >
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-slide w-full shrink-0 h-full">
                                <div
                                    class="bg-white border border-forest/10 rounded-3xl sm:rounded-4xl p-6 sm:p-8 h-full flex flex-col justify-between gap-5 sm:gap-6 relative overflow-hidden"
                                >
                                    <i
                                        class="fi fi-sr-quote-right absolute -top-3 right-5 sm:right-7 text-6xl sm:text-7xl md:text-8xl text-forest/5 pointer-events-none"
                                        aria-hidden="true"
                                    ></i>

                                    <div class="flex flex-col gap-3 sm:gap-4 relative">
                                        <div class="flex items-center gap-1.5">
                                            @for ($i = 0; $i < ($testimonial['rating'] ?? 5); $i++)
                                                <i class="fi fi-sr-star flex text-sm sm:text-base text-lime"></i>
                                            @endfor
                                            <span class="ml-1 font-agency font-bold text-forest text-sm sm:text-base">{{ number_format($testimonial['rating'] ?? 5, 1) }}</span>
                                        </div>
                                        <p class="text-forest text-base sm:text-lg md:text-xl font-agency leading-relaxed line-clamp-4 sm:line-clamp-5">"{{ $testimonial['message'] }}"</p>
                                    </div>

                                    <div class="flex items-center gap-3 relative">
                                        @if (! empty($testimonial['avatar']))
                                            <div class="size-10 sm:size-11 rounded-full relative overflow-hidden shrink-0">
                                                <img
                                                    class="absolute inset-0 w-full h-full object-cover object-center"
                                                    src="{{ $testimonial['avatar'] }}"
                                                    alt="{{ $testimonial['name'] }}"
                                                />
                                            </div>
                                        @else
                                            <div
                                                class="size-10 sm:size-11 rounded-full bg-forest/5 border border-forest/10 flex items-center justify-center text-forest font-agency font-bold text-sm shrink-0"
                                                aria-hidden="true"
                                            >
                                                {{ $testimonial['avatar_initial'] }}
                                            </div>
                                        @endif
                                        <div>
                                            <h4 class="font-agency font-bold text-forest text-sm sm:text-base">{{ $testimonial['name'] }}</h4>
                                            <p class="text-forest/50 text-xs sm:text-sm">{{ $testimonial['location'] }} &middot; via {{ $testimonial['source'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3 sm:gap-4 ml-auto">
            <button
                id="prevBtn"
                type="button"
                class="group inline-flex items-center justify-center rounded-full bg-lime font-bold text-forest-deep size-10 sm:size-11 md:size-12 cursor-pointer hover:opacity-90 transition-opacity duration-300"
            >
                <i class="fi fi-rr-arrow-small-left flex text-xl sm:text-2xl md:text-3xl"></i>
            </button>
            <button
                id="nextBtn"
                type="button"
                class="group inline-flex items-center justify-center rounded-full bg-forest font-bold text-cream size-10 sm:size-11 md:size-12 cursor-pointer hover:bg-forest-deep transition-colors duration-300"
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

            let currentIndex = 0;
            let autoplayTimer = null;
            const AUTOPLAY_DELAY = 4000;

            function updateTransform(withTransition = true) {
                track.style.transition = withTransition ? 'transform 700ms cubic-bezier(.22,1,.36,1)' : 'none';
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            function goToIndex(index) {
                if (index < 0) index = total - 1;
                else if (index > total - 1) index = 0;
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

            nextBtn.addEventListener('click', function () {
                next();
                restartAutoplay();
            });

            prevBtn.addEventListener('click', function () {
                prev();
                restartAutoplay();
            });

            slider.addEventListener('mouseenter', stopAutoplay);
            slider.addEventListener('mouseleave', startAutoplay);

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

            updateTransform(false);
            startAutoplay();
        })();
    </script>
@endpush
