<nav  @click.away="servicesDropdown = false"
    :class="scrolled
        ? 'fixed top-0 left-0 w-full bg-west-white shadow-md border-b border-west-border'
        : 'absolute top-0 left-0 w-full border-b border-west-white/10'"
    class="z-50 transition-all duration-300">

    <div class="max-w-7xl flex items-center mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Logo --}}
        <div :class="scrolled ? 'text-west-primary' : 'text-west-white'">
            @include('partials.logo')
        </div>

        <div class="flex items-center gap-6 ml-auto h-[70px]">

            {{-- Desktop Links --}}
            <div class="hidden lg:flex items-center text-lg space-x-8">

                <a href="/"
                    :class="scrolled ? 'text-west-dark hover:text-west-primary' : 'text-west-white/80 hover:text-west-white'">
                    Home
                </a>

                {{-- ✅ SERVICES DROPDOWN --}}
                <div class="relative"
                    @mouseenter="servicesDropdown = true"
                    @mouseleave="servicesDropdown = false"
               >

                    <button type="button"
                        @click="servicesDropdown = !servicesDropdown"
                        class="flex items-center cursor-pointer gap-2 transition-all duration-300"
                        :class="scrolled ? 'text-west-dark hover:text-west-primary' : 'text-west-white/80 hover:text-west-white'">

                        <span>Services</span>

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform duration-300"
                            :class="servicesDropdown ? 'rotate-[-180deg]' : ''"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 8.25 12 15.75 4.5 8.25" />
                        </svg>
                    </button>

                    {{-- DROPDOWN --}}
                    <div
                        x-show="servicesDropdown"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="dropdown-scroll absolute left-0 top-full mt-4 w-[320px] max-h-[420px] overflow-y-auto rounded border border-west-off-dark/15 border-t-west-primary-light bg-west-white shadow-xl"
                        style="display: none;">

                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Procurement Services</a>
                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Slickline Services</a>
                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">E-line Services</a>
                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Well testing services</a>
                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Directional borehole surveying</a>
                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Well Fix Services</a>

                        <a href="#" class="block px-5 py-4 text-[16px] leading-7 text-west-off-dark hover:bg-west-bg hover:text-west-primary">
                            Coiled Tubing Pumping & Stimulation Services
                        </a>

                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Wellhead Maintenance</a>

                        <a href="#" class="block px-5 py-4 text-[16px] leading-7 text-west-off-dark hover:bg-west-bg hover:text-west-primary">
                            Drill Stem Testing (dst) & Tubing Conveyed Perforation (tcp)
                        </a>

                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Well Completion Services</a>

                        <a href="#" class="block px-5 py-4 text-[16px] leading-7 text-west-off-dark hover:bg-west-bg hover:text-west-primary">
                            Casing And Tubular Inspection Services
                        </a>

                        <a href="#" class="block px-5 py-4 text-[16px] leading-7 text-west-off-dark hover:bg-west-bg hover:text-west-primary">
                            Casing And Tubular Running Services
                        </a>

                        <a href="#" class="block px-5 py-4 text-[16px] text-west-off-dark hover:bg-west-bg hover:text-west-primary">Directional Drilling</a>

                        <a href="#" class="block px-5 py-4 text-[16px] leading-7 text-west-off-dark hover:bg-west-bg hover:text-west-primary">
                            Logging While Drilling (lwd) / Measurement While Drilling (mwd)
                        </a>

                    </div>
                </div>

                <a href="{{ route('hse') }}"
                    :class="scrolled ? 'text-west-dark hover:text-west-primary' : 'text-west-white/80 hover:text-west-white'">
                    HSE
                </a>

                <a href="{{ route('about') }}"
                    :class="scrolled ? 'text-west-dark hover:text-west-primary' : 'text-west-white/80 hover:text-west-white'">
                    About
                </a>

                <a href="{{ route('contact') }}"
                    :class="scrolled ? 'text-west-dark hover:text-west-primary' : 'text-west-white/80 hover:text-west-white'">
                    Contact
                </a>

            </div>

            {{-- Button --}}
            <a href="#"
                class="hidden md:flex items-center px-4 py-3 rounded font-semibold transition-all duration-300 bg-west-primary text-west-white hover:bg-west-primary-light hover:text-west-off-dark">
                Get a quote
            </a>

            {{-- Mobile --}}
            <div class="md:hidden">
                <button type="button"
                @click="openSidebar = true"
                    :class="scrolled
                        ? 'cursor-pointer text-west-off-dark hover:bg-west-off-dark/10 rounded transition duration-300 p-1'
                        : 'cursor-pointer text-west-white hover:bg-west-white/10 rounded transition duration-300 p-1'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</nav>
