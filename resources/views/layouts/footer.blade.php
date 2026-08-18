{{-- resources/views/partials/footer.blade.php --}}

<footer class="bg-ink w-full text-cream pt-8 lg:pt-24 px-4 sm:px-8 md:px-16 lg:px-28 overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-6 gap-8 md:gap-12">
        {{-- Brand --}}
        <div class="lg:col-span-3 flex flex-col gap-5 sm:gap-6">
            <a href="{{ route('home') }}">
                <img src="/images/logo.svg" alt="Wavesync" class="h-9 sm:h-10 w-auto" />
            </a>

            <p class="text-lg text-cream/80 max-w-96 font-medium leading-relaxed">We build the websites, search visibility, and automation that turn searches into customers. {{ config('wavesync.founded_summary') }}.</p>

            {{-- TODO(content): confirm each social handle is real before launch — see config/wavesync.php --}}
            <div class="flex flex-wrap gap-4 sm:gap-5">
                @foreach (config('wavesync.social_links') as $social)
                    <a
                        href="{{ $social['href'] }}"
                        aria-label="{{ $social['label'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-cream/60 hover:text-cream transition-colors duration-300"
                    >
                        <svg viewBox="0 0 24 24" fill="currentColor" class="size-3.5 sm:size-4">
                            <path d="{{ $social['path'] }}" />
                        </svg>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Nav columns --}}
        <div class="lg:col-span-3 grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12 lg:gap-16 items-start">
            {{-- Ecosystem --}}
            <div>
                <p class="text-base font-bold uppercase text-cream mb-4 sm:mb-5 font-agency">Ecosystem</p>
                <ul class="space-y-3 text-lg font-semibold text-cream/70">
                    <li>
                        <a href="/#services" class="hover:text-cream transition-colors duration-300">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="hover:text-cream transition-colors duration-300">Portfolio</a>
                    </li>
                    <li>
                        <a href="/#process" class="hover:text-cream transition-colors duration-300">Process</a>
                    </li>
                    <li><a href="/#faq" class="hover:text-cream transition-colors duration-300">FAQ</a></li>
                </ul>
            </div>

            {{-- Legal --}}
            <div>
                <p class="text-base font-bold uppercase text-cream mb-4 sm:mb-5 font-agency">Legal</p>
                <ul class="space-y-3 text-lg font-semibold text-cream/70">
                    <li>
                        <a href="#" class="hover:text-cream transition-colors duration-300">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-cream transition-colors duration-300">Terms of Service</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-cream transition-colors duration-300">Cookie Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.page') }}" class="hover:text-cream transition-colors duration-300">Contact Support</a>
                    </li>
                </ul>
            </div>

            {{-- Company --}}
            <div class="col-span-2 md:col-span-1">
                <p class="text-base font-bold uppercase text-cream mb-4 sm:mb-5 font-agency">Company</p>
                <ul class="space-y-3 text-lg font-semibold text-cream/70">
                    <li><a href="{{ route('about') }}" class="hover:text-cream transition-colors duration-300">About</a></li>
                    <li>
                        <a href="#" class="hover:text-cream transition-colors duration-300">Careers</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.page') }}" class="hover:text-cream transition-colors duration-300">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div
        class="mt-10 sm:mt-12 pt-4 border-t border-cream/10 flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0"
    >
        <p class="text-cream/60 text-xs sm:text-sm">© {{ date('Y') }} Wavesync Agency</p>
        <p class="text-xs sm:text-sm text-cream/60">All rights reserved.</p>
    </div>

    {{-- Watermark (motion removed, plain div); full-bleed and low-opacity so
         it reads as a subtle gray blend into bg-ink rather than a stark
         white shape — footer's own overflow-hidden clips any edge crop. --}}
    <div class="relative -bottom-16 pt-8">
        <div class="w-screen ml-[calc(50%-50vw)] mr-[calc(50%-50vw)] flex items-center justify-center">
            <img src="/images/logo.svg" alt="" class="w-full h-auto opacity-10" />
        </div>
    </div>
</footer>
