<div id="contact" class="bg-forest py-14 sm:py-20 md:py-24 lg:py-28">
    <div class="w-11/12 mx-auto 2xl:w-10/12 flex">
        <div class="w-full flex flex-col gap-6 sm:gap-8 md:gap-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-4">
                <div class="col-span-1 md:col-span-2 flex flex-col gap-3 sm:gap-4 items-start">
                    <h2
                        class="capitalize text-cream text-xl sm:text-2xl md:text-3xl font-agency font-semibold flex items-center gap-2"
                    >
                        <div class="size-2.5 sm:size-3 rounded-full bg-cream"></div>
                        Get in touch
                    </h2>
                    <h3
                        class="text-cream font-agency text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold flex flex-col leading-tight sm:leading-[1.15] md:leading-[1.1] lg:leading-18 capitalize"
                    >
                        <span>Have a Project?</span>
                        <span class="text-[#E8FF49]">Let's talk!</span>
                    </h3>
                </div>

                <div class="col-span-1 md:col-span-3 w-full flex items-start justify-start md:justify-end">
                    <a
                        href="#"
                        class="group inline-flex items-center rounded-full border-2 sm:border-4 border-cream px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-cream"
                    >
                        <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                            <span
                                class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                See All Articles
                            </span>

                            <span
                                class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                            >
                                See All Articles
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="w-full grid grid-cols-1 gap-6 sm:gap-7 md:gap-8">
                <div
                    class="grid grid-cols-1 lg:grid-cols-4 gap-4 col-span-full bg-forest text-cream rounded-3xl sm:rounded-4xl h-fit"
                >
                    <div class="lg:col-span-2 w-full space-y-6 sm:space-y-8 md:space-y-10">
                        <div
                            class="flex flex-col gap-2 bg-cream text-forest p-5 sm:p-6 md:p-8 max-w-lg rounded-2xl sm:rounded-3xl"
                        >
                            <div class="border-b">
                                <h3 class="font-agency font-bold text-2xl sm:text-3xl md:text-4xl">Contact details</h3>
                            </div>
                            <div class="py-3 sm:py-4 space-y-3 sm:space-y-4">
                                <div>
                                    <h6 class="font-agency text-base sm:text-lg md:text-xl">*Email</h6>
                                    <a
                                        class="text-sm sm:text-base md:text-lg font-semibold break-all"
                                        href="mailto:{{ config('wavesync.contact_email') }}"
                                        >{{ config('wavesync.contact_email') }}</a
                                    >
                                </div>
                                <div>
                                    {{-- TODO(content): phone is a placeholder from config/wavesync.php — set WAVESYNC_PHONE in .env --}}
                                    <h6 class="font-agency text-base sm:text-lg md:text-xl">*Phone</h6>
                                    <a
                                        class="text-sm sm:text-base md:text-lg font-semibold"
                                        href="tel:{{ config('wavesync.phone') }}"
                                        >{{ config('wavesync.phone') }}</a
                                    >
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex flex-col gap-4 sm:gap-5 md:gap-6 bg-cream text-forest p-5 sm:p-6 md:p-8 max-w-lg rounded-2xl sm:rounded-3xl"
                        >
                            <div class="flex items-center gap-3 sm:gap-4">
                                <div
                                    class="relative size-14 sm:size-16 md:size-20 rounded-xl overflow-hidden shrink-0 bg-forest/10"
                                >
                                    <img
                                        class="absolute inset-0 w-full h-full object-cover object-center"
                                        src="/images/founder.jpg"
                                        alt="{{ config('wavesync.founder_name') }}"
                                        loading="lazy"
                                    />
                                </div>

                                <div>
                                    <span class="text-sm sm:text-base font-medium">Book a 30 min call</span>
                                    <h6 class="font-agency text-base sm:text-lg md:text-xl">{{ config('wavesync.founder_name') }}</h6>
                                    <span class="text-sm sm:text-base font-medium">Founder & CEO</span>
                                </div>
                            </div>

                            <div>
                                <p class="font-agency text-sm sm:text-base md:text-lg">Use the call to clarify scope, timeline, deliverables, and the fastest route to launch-ready assets.</p>
                            </div>

                            <div>
                                <a
                                    href="#"
                                    class="group inline-flex items-center rounded-full bg-forest px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 text-sm sm:text-base font-bold text-cream"
                                >
                                    <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                                        <span
                                            class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                        >
                                            Book a 30-min call
                                        </span>

                                        <span
                                            class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                        >
                                            Book a 30-min call
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="lg:col-span-2 p-5 sm:p-7 md:p-10 h-full bg-cream text-forest rounded-2xl sm:rounded-3xl w-full"
                    >
                        <form class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5" id="contact-form">
                            <div class="flex flex-col gap-1.5">
                                <label class="font-agency text-sm sm:text-base" for="full_name">Full Name*</label>
                                <input
                                    class="border-2 outline-none rounded-xl border-forest/80 px-3.5 sm:px-4 py-3 sm:py-3.5 text-sm sm:text-base bg-transparent text-forest font-semibold placeholder:text-forest/50"
                                    name="full_name"
                                    id="full_name"
                                    placeholder="Full Name"
                                    type="text"
                                    required
                                />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="font-agency text-sm sm:text-base" for="email">Email*</label>
                                <input
                                    class="border-2 outline-none rounded-xl border-forest/80 px-3.5 sm:px-4 py-3 sm:py-3.5 text-sm sm:text-base bg-transparent text-forest font-semibold placeholder:text-forest/50"
                                    name="email"
                                    id="email"
                                    placeholder="hello@example.com"
                                    type="text"
                                    required
                                />
                            </div>
                            {{--
                                Custom dropdown (not a native <select>): a hidden input carries
                                the actual value for form submission, a styled button shows the
                                current label, and a styled listbox replaces the browser's native
                                (unstylable) options panel. See the dropdown JS below.
                            --}}
                            <div class="flex flex-col gap-1.5">
                                <label class="font-agency text-sm sm:text-base" for="budget_range_trigger">
                                    Budget Range
                                </label>

                                <div class="relative" data-dropdown>
                                    <input type="hidden" name="budget_range" id="budget_range" value="" />
                                    <button
                                        type="button"
                                        id="budget_range_trigger"
                                        class="w-full flex items-center justify-between gap-2 border-2 outline-none rounded-xl border-forest/80 px-3.5 sm:px-4 py-3 sm:py-3.5 text-sm sm:text-base bg-transparent text-forest font-semibold text-left cursor-pointer"
                                        data-dropdown-trigger
                                        aria-haspopup="listbox"
                                        aria-expanded="false"
                                    >
                                        <span class="text-forest/50 truncate" data-dropdown-label>Choose your budget range</span>
                                        <i class="fi fi-rr-angle-small-down flex text-base shrink-0 transition-transform duration-300" data-dropdown-icon></i>
                                    </button>
                                    <ul
                                        class="absolute z-20 left-0 right-0 mt-2 max-h-64 overflow-y-auto rounded-xl border-2 border-forest/80 bg-cream shadow-lg hidden"
                                        role="listbox"
                                        data-dropdown-panel
                                        data-lenis-prevent
                                    >
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="under_1000">Under $1,000</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="1000_5000">$1,000 – $5,000</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="5000_10000">$5,000 – $10,000</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="10000_25000">$10,000 – $25,000</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="25000_plus">$25,000+</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="not_sure">I'm not sure yet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="font-agency text-sm sm:text-base" for="referral_source_trigger">
                                    How did you find us?
                                </label>

                                <div class="relative" data-dropdown>
                                    <input type="hidden" name="referral_source" id="referral_source" value="" />
                                    <button
                                        type="button"
                                        id="referral_source_trigger"
                                        class="w-full flex items-center justify-between gap-2 border-2 outline-none rounded-xl border-forest/80 px-3.5 sm:px-4 py-3 sm:py-3.5 text-sm sm:text-base bg-transparent text-forest font-semibold text-left cursor-pointer"
                                        data-dropdown-trigger
                                        aria-haspopup="listbox"
                                        aria-expanded="false"
                                    >
                                        <span class="text-forest/50 truncate" data-dropdown-label>Choose how you found us</span>
                                        <i class="fi fi-rr-angle-small-down flex text-base shrink-0 transition-transform duration-300" data-dropdown-icon></i>
                                    </button>
                                    <ul
                                        class="absolute z-20 left-0 right-0 mt-2 max-h-64 overflow-y-auto rounded-xl border-2 border-forest/80 bg-cream shadow-lg hidden"
                                        role="listbox"
                                        data-dropdown-panel
                                        data-lenis-prevent
                                    >
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="google_search">Google Search</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="social_media">Social Media</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="friend_or_colleague">Friend or Colleague</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="referral">Client Referral</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="advertisement">Advertisement</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="linkedin">LinkedIn</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="portfolio">Portfolio / Previous Work</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="blog">Blog or Article</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="email">Email Campaign</li>
                                        <li class="px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-forest cursor-pointer hover:bg-forest hover:text-cream transition-colors duration-200" role="option" data-value="other">Other</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5 col-span-full">
                                <label class="font-agency text-sm sm:text-base" for="message"
                                    >What Do You Need Help With?</label
                                >

                                <div>
                                    <ul class="list-disc list-inside flex flex-wrap gap-2" id="services-list"></ul>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5 col-span-full">
                                <label class="font-agency text-sm sm:text-base" for="message">How Can We Help?*</label>

                                <textarea
                                    class="border-2 outline-none rounded-xl border-forest/80 p-3.5 sm:p-4 text-sm sm:text-base bg-transparent text-forest font-semibold placeholder:text-forest/50"
                                    name="message"
                                    id="message"
                                    rows="5"
                                    placeholder="Tell Us About Your Project"
                                    required
                                ></textarea>
                            </div>

                            <div class="col-span-full">
                                <button
                                    type="submit"
                                    class="group inline-flex items-center rounded-full bg-lime px-5 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-bold text-forest-deep cursor-pointer"
                                >
                                    <span class="relative overflow-hidden h-4 sm:h-5 leading-4 sm:leading-5">
                                        <span
                                            class="block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                        >
                                            Send Message
                                        </span>

                                        <span
                                            class="absolute left-0 top-4 sm:top-5 block whitespace-nowrap transition-transform duration-300 ease-[cubic-bezier(.22,1,.36,1)] group-hover:-translate-y-4 sm:group-hover:-translate-y-5"
                                        >
                                            Send Message
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@once
    @push ('scripts')
        <script>
            const form = document.getElementById('contact-form');
            const name = form.elements['full_name'];
            const email = form.elements['email'];
            const budget = form.elements['budget_range'];
            const source = form.elements['referral_source'];
            const message = form.elements['message'];
            const submitButton = form.querySelector('button[type="submit"]');
            const servicesList = document.getElementById('services-list');

            // --- Custom dropdowns (budget range, referral source) ---
            const dropdowns = Array.from(form.querySelectorAll('[data-dropdown]'));

            const closeDropdown = (root) => {
                const trigger = root.querySelector('[data-dropdown-trigger]');
                const panel = root.querySelector('[data-dropdown-panel]');
                const icon = root.querySelector('[data-dropdown-icon]');
                panel.classList.add('hidden');
                trigger.setAttribute('aria-expanded', 'false');
                icon.classList.remove('rotate-180');
            };

            const closeAllDropdowns = (except) => {
                dropdowns.forEach((root) => {
                    if (root !== except) closeDropdown(root);
                });
            };

            dropdowns.forEach((root) => {
                const hiddenInput = root.querySelector('input[type="hidden"]');
                const trigger = root.querySelector('[data-dropdown-trigger]');
                const label = root.querySelector('[data-dropdown-label]');
                const panel = root.querySelector('[data-dropdown-panel]');
                const icon = root.querySelector('[data-dropdown-icon]');
                const defaultLabel = label.textContent;

                trigger.addEventListener('click', () => {
                    const isOpen = !panel.classList.contains('hidden');
                    closeAllDropdowns(root);
                    if (isOpen) {
                        closeDropdown(root);
                    } else {
                        panel.classList.remove('hidden');
                        trigger.setAttribute('aria-expanded', 'true');
                        icon.classList.add('rotate-180');
                    }
                });

                panel.addEventListener('click', ({ target }) => {
                    const option = target.closest('[role="option"]');
                    if (!option) return;

                    hiddenInput.value = option.dataset.value;
                    label.textContent = option.textContent;
                    label.classList.remove('text-forest/50');
                    closeDropdown(root);
                });

                root.resetDropdown = () => {
                    hiddenInput.value = '';
                    label.textContent = defaultLabel;
                    label.classList.add('text-forest/50');
                };
            });

            document.addEventListener('click', (e) => {
                dropdowns.forEach((root) => {
                    if (!root.contains(e.target)) closeDropdown(root);
                });
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeAllDropdowns();
            });

            // --- Modal elements ---
            const modal = document.getElementById('submit-modal');
            const modalContent = document.getElementById('submit-modal-content');
            const loadingState = document.getElementById('modal-loading-state');
            const successState = document.getElementById('modal-success-state');

            // --- Scroll lock (position:fixed method — works reliably across browsers, including iOS Safari) ---
            let scrollY = 0;

            const lockScroll = () => {
                scrollY = window.scrollY;
                const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;

                document.body.style.position = 'fixed';
                document.body.style.top = `-${scrollY}px`;
                document.body.style.left = '0';
                document.body.style.right = '0';
                document.body.style.overflow = 'hidden';

                // prevent the page from jumping sideways when the scrollbar disappears
                if (scrollBarWidth > 0) {
                    document.body.style.paddingRight = `${scrollBarWidth}px`;
                }
            };

            const unlockScroll = () => {
                document.body.style.position = '';
                document.body.style.top = '';
                document.body.style.left = '';
                document.body.style.right = '';
                document.body.style.overflow = '';
                document.body.style.paddingRight = '';
                window.scrollTo(0, scrollY);
            };

            const openModal = () => {
                modal.classList.remove('hidden');
                lockScroll();
                requestAnimationFrame(() => {
                    modalContent.classList.remove('scale-95', 'opacity-0');
                    modalContent.classList.add('scale-100', 'opacity-100');
                });
            };

            const closeModal = () => {
                modalContent.classList.remove('scale-100', 'opacity-100');
                modalContent.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    unlockScroll();

                    successState.classList.add('hidden');
                    successState.classList.remove('flex', 'animate-in');
                    loadingState.classList.remove('hidden');
                    loadingState.classList.add('flex');
                }, 300);
            };

            const showSuccess = () => {
                loadingState.classList.add('hidden');
                loadingState.classList.remove('flex');
                successState.classList.remove('hidden');
                successState.classList.add('flex');

                requestAnimationFrame(() => successState.classList.add('animate-in'));

                setTimeout(closeModal, 1500);
            };

            const services = [
                { label: 'UI/UX Design', value: 'ui-ux-design' },
                { label: 'Web Development', value: 'web-development' },
                { label: 'Branding', value: 'branding' },
                { label: 'Graphic Design', value: 'graphic-design' },
                { label: 'SEO', value: 'seo' },
                { label: 'Digital Marketing', value: 'digital-marketing' },
                { label: 'Cold Email', value: 'cold-email' },
                { label: 'AI Automation', value: 'ai-automation' },
                { label: 'SaaS Development', value: 'saas-development' },
                { label: 'Digital Product Design', value: 'digital-product-design' },
                { label: 'Etsy / Marketplace Products', value: 'etsy-marketplace-products' },
            ];

            const createNewList = (label, value) => {
                const li = document.createElement('li');
                li.className =
                    'border border-forest rounded-full px-4 py-1.5 font-medium text-sm cursor-pointer transition-colors duration-300 select-none';
                li.textContent = label;
                li.dataset.value = value;
                return li;
            };

            const lists = services.map((service) => createNewList(service.label, service.value));
            servicesList.append(...lists);

            const selectedServices = new Set();

            servicesList.addEventListener('click', ({ target }) => {
                const li = target.closest('li');
                if (!li) return;

                const { value } = li.dataset;

                li.classList.toggle('bg-forest');
                li.classList.toggle('text-cream');

                selectedServices.has(value) ? selectedServices.delete(value) : selectedServices.add(value);
            });

            const showFormError = (msg) => {
                let errorEl = form.querySelector('[data-form-error]');
                if (!errorEl) {
                    errorEl = document.createElement('p');
                    errorEl.dataset.formError = 'true';
                    errorEl.className = 'text-sm text-red-500 mt-2';
                    form.appendChild(errorEl);
                }
                errorEl.textContent = msg;
            };

            const clearFormError = () => {
                const errorEl = form.querySelector('[data-form-error]');
                if (errorEl) errorEl.remove();
            };

            const setSubmitting = (isSubmitting) => {
                submitButton.disabled = isSubmitting;
                submitButton.dataset.originalText ??= submitButton.textContent;
            };

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                clearFormError();

                if (selectedServices.size === 0) {
                    showFormError('Please select at least one service.');
                    return;
                }

                const formData = new FormData(form);

                const payload = {
                    name: formData.get('full_name'),
                    email: formData.get('email'),
                    budget_range: formData.get('budget_range'),
                    referral_source: formData.get('referral_source'),
                    message: formData.get('message'),
                    service: Array.from(selectedServices),
                };

                setSubmitting(true);
                openModal();

                try {
                    const response = await fetch('{{ route('contact') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            Accept: 'application/json',
                        },
                        body: JSON.stringify(payload),
                    });

                    if (!response.ok) {
                        const errorBody = await response.json().catch(() => ({}));
                        throw new Error(errorBody.message || `Request failed with status ${response.status}`);
                    }

                    form.reset();
                    dropdowns.forEach((root) => root.resetDropdown());
                    selectedServices.clear();
                    servicesList.querySelectorAll('li').forEach((li) => {
                        li.classList.remove('bg-forest', 'text-cream');
                    });

                    showSuccess();
                } catch (err) {
                    console.error('Form submission failed:', err);
                    closeModal();
                    showFormError(err.message || 'Something went wrong. Please try again.');
                } finally {
                    setSubmitting(false);
                }
            });
        </script>
    @endpush
@endonce
