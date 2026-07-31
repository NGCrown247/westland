<footer x-data="home" class="bg-west-off-dark text-west-white pt-20 pb-10 tracking-wide">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-4">

            {{-- Company --}}
            <div
                data-reveal="50"
                class="transition-all duration-700 ease-out"
                :class="isRevealed(50) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
          <div class="!text-west-white">
    @include('partials.logo')
</div>

                <p class="mt-6 text-sm leading-7 tracking-wide text-west-white/60">
                    A premier Nigerian oilfield servicing company specializing in high-end
                    wireline and well intervention solutions.
                </p>
            </div>

            {{-- Quick Links --}}
            <div
                data-reveal="51"
                class="transition-all duration-700 ease-out delay-100"
                :class="isRevealed(51) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h3 class="text-lg font-semibold">Quick Links</h3>

                <ul class="mt-6 space-y-4 text-sm text-white/60">
                    <li><a href="#" class="hover:text-west-primary">Home</a></li>
                    <li><a href="#" class="hover:text-west-primary">Services</a></li>
                    <li><a href="#" class="hover:text-west-primary">HSE</a></li>
                    <li><a href="#" class="hover:text-west-primary">About Us</a></li>
                    <li><a href="#" class="hover:text-west-primary">Contact</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div
                data-reveal="52"
                class="transition-all duration-700 ease-out delay-200"
                :class="isRevealed(52) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h3 class="text-lg font-semibold">Our Services</h3>

                <ul class="mt-6 space-y-4 text-sm text-west-white/60">
                    <li>Wireline Services</li>
                    <li>Perforating</li>
                    <li>Well Intervention</li>
                    <li>Well Testing</li>
                    <li>Technical Support</li>
                </ul>
            </div>

            {{-- Contact --}}
            <div
                data-reveal="53"
                class="transition-all duration-700 ease-out delay-300"
                :class="isRevealed(53) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h3 class="text-lg font-semibold">Contact Us</h3>

                <div class="mt-6 space-y-5 text-sm text-white/60">

                    <div class="flex items-start gap-3 tracking-wide">
                        <span class="text-west-primary">📍</span>
                        <p>
                            #50 Abec Road Nvuigwe, Woji,<br>
                            Port Harcourt, Rivers State
                        </p>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-west-primary">📞</span>
                        <p>+2349122644154<br>+2349030588284  </p>
                    </div>

                    <div class="flex items-center gap-3 tracking-wide">
                        <span class="text-west-primary">✉️</span>
                        <p>westlandsolution.ng@gmail.com</p>
                    </div>

                </div>
            </div>

        </div>

        {{-- Bottom --}}
        <div
            data-reveal="54"
            class="mt-16 border-t border-white/10 pt-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between text-sm text-white/40 transition-all duration-700 ease-out delay-400"
            :class="isRevealed(54) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            <p>
                © {{ date('Y') }} Westland Solution Nigeria Ltd. All rights reserved.
            </p>

            <div class="flex gap-6">
                <a href="#" class="hover:text-white">Privacy Policy</a>
                <a href="#" class="hover:text-white">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>
