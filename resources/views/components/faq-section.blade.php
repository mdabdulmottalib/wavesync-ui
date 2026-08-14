@php
    $faqs = [
        [
            'question' => 'What services does Wavesync Agency offer?',
            'answer' => 'We work across four areas: web & digital experiences (UI/UX design, WordPress, Laravel, digital product design), brand & creative (graphic design), SEO & digital growth (search visibility, digital marketing), and AI & business automation (workflow automation, integrations). Most client work draws on more than one of these at once.',
        ],
        [
            'question' => 'Do you work with international or remote clients?',
            'answer' => "Yes. We work remote-first with clients in different time zones, using short, async-friendly feedback loops so a project doesn't stall waiting on a single overlapping meeting slot.",
        ],
        [
            'question' => 'How does pricing work?',
            'answer' => "We scope each project individually rather than publishing flat-rate packages, since the right approach for a landing page and a custom Laravel platform aren't the same. Tell us what you're building in the form below and we'll follow up with a clear proposal before any work starts.",
        ],
        [
            'question' => 'How long does a typical project take?',
            'answer' => 'It depends on scope — a focused website or landing page moves faster than a custom application or a multi-service engagement. Once we understand what you need, we give you a realistic timeline as part of the proposal, not a generic estimate.',
        ],
    ];
@endphp

<div class="w-11/12 mx-auto 2xl:w-10/12 flex my-16 sm:my-20 md:my-28 lg:my-36">
    <div class="w-full flex flex-col gap-6 sm:gap-8 md:gap-10">
        <div class="w-full grid grid-cols-1 md:grid-cols-6 gap-6 md:gap-4">
            <div class="col-span-1 md:col-span-3 flex flex-col gap-3 sm:gap-4 items-start">
                <h2
                    class="capitalize text-forest text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                >
                    <div class="size-2.5 sm:size-3 rounded-full bg-forest"></div>
                    Frequently asked questions
                </h2>
                <h3
                    class="text-forest font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold flex flex-col leading-tight sm:leading-[1.15] md:leading-[1.1] lg:leading-18 capitalize"
                >
                    <span>Everything you</span>
                    <span>need to know.</span>
                </h3>
            </div>

            <div class="col-span-1 md:col-span-3 w-full flex flex-col items-start">
                <div class="w-full flex flex-col gap-6" id="faqAccordion">
                    @foreach ($faqs as $faq)
                        <div class="faq-item bg-forest text-cream rounded-2xl sm:rounded-3xl overflow-hidden">
                            <button
                                type="button"
                                class="faq-trigger flex items-center justify-between gap-4 cursor-pointer w-full p-4 sm:p-5 md:p-6.5"
                                aria-expanded="false"
                            >
                                <div>
                                    <h5 class="font-agency text-sm sm:text-base md:text-lg font-medium">
                                        {{ $faq['question'] }}
                                    </h5>
                                </div>
                                <div>
                                    <span class="faq-icon inline-flex text-lg sm:text-xl md:text-2xl shrink-0"
                                        ><i class="fi fi-rr-angle-small-down flex"></i
                                    ></span>
                                </div>
                            </button>

                            <div class="faq-content h-0 overflow-hidden">
                                <div class="faq-inner px-4 sm:px-5 md:px-6.5 pb-4 sm:pb-5 md:pb-6.5">
                                    <p class="text-sm sm:text-base md:text-lg">{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@once
    @push ('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const items = gsap.utils.toArray('#faqAccordion .faq-item');

                items.forEach(function (item) {
                    const trigger = item.querySelector('.faq-trigger');
                    const content = item.querySelector('.faq-content');
                    const inner = item.querySelector('.faq-inner');
                    const icon = item.querySelector('.faq-icon');

                    // start fully closed
                    gsap.set(content, { height: 0 });
                    gsap.set(icon, { rotate: 0, transformOrigin: '50% 50%' });

                    trigger.addEventListener('click', function () {
                        const isOpen = item.classList.contains('is-open');

                        // close every other item first, so only one stays open
                        items.forEach(function (other) {
                            if (other !== item && other.classList.contains('is-open')) {
                                closeItem(other);
                            }
                        });

                        isOpen ? closeItem(item) : openItem(item);
                    });

                    function openItem(el) {
                        const c = el.querySelector('.faq-content');
                        const i = el.querySelector('.faq-inner');
                        const ic = el.querySelector('.faq-icon');
                        const btn = el.querySelector('.faq-trigger');

                        el.classList.add('is-open');
                        btn.setAttribute('aria-expanded', 'true');

                        gsap.to(c, {
                            height: i.offsetHeight,
                            duration: 0.6,
                            ease: 'power3.inOut',
                            onComplete: function () {
                                // let it grow naturally if content reflows (resize, fonts, etc.)
                                gsap.set(c, { height: 'auto' });
                            },
                        });

                        gsap.to(ic, {
                            rotate: 180,
                            duration: 0.5,
                            ease: 'power3.inOut',
                        });
                    }

                    function closeItem(el) {
                        const c = el.querySelector('.faq-content');
                        const ic = el.querySelector('.faq-icon');
                        const btn = el.querySelector('.faq-trigger');

                        el.classList.remove('is-open');
                        btn.setAttribute('aria-expanded', 'false');

                        // lock the current pixel height first so GSAP can animate down from it
                        gsap.set(c, { height: c.offsetHeight });

                        gsap.to(c, {
                            height: 0,
                            duration: 0.5,
                            ease: 'power3.inOut',
                        });

                        gsap.to(ic, {
                            rotate: 0,
                            duration: 0.5,
                            ease: 'power3.inOut',
                        });
                    }
                });
            });
        </script>
    @endpush
@endonce
