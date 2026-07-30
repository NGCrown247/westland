
        {{-- Cards grid --}}
        <div class="mt-14 grid gap-4 sm:grid-cols-2 md:grid-cols-3">

            {{-- Card 1 --}}
            <article
                data-reveal="1"
                class="group relative overflow-hidden rounded-md shadow-sm transition-all duration-700 ease-out hover:-translate-y-1 hover:shadow-lg"
                :class="isRevealed(1) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="h-[420px] overflow-hidden">
                    <img src="{{ asset('images/west-h-img3.png') }}" alt="Well Intervention"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-x-0 bottom-0 h-90 bg-gradient-to-t from-black/90 to-transparent"></div>
                </div>

                <div class="absolute bottom-0 left-0 right-0 z-10 p-8">
                    <h4 class="text-2xl font-bold text-west-white">Well Intervention</h4>

                    <p class="mt-4 text-sm leading-[20px] text-west-white/80">
                        Specialized techniques to manage well integrity and optimize flow without the need for a full workover rig.
                    </p>

                    <a href="#" class="group flex items-center mt-5 text-sm font-semibold uppercase text-west-primary-light">
                        <span>Read More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 mt-[1px] transition duration-500 group-hover:translate-x-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </article>

            {{-- Card 2 --}}
            <article
                data-reveal="2"
                class="group relative overflow-hidden rounded-md shadow-sm transition-all duration-700 ease-out delay-100 hover:-translate-y-1 hover:shadow-lg"
                :class="isRevealed(2) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="h-[420px] overflow-hidden">
                    <img src="{{ asset('images/west-h-img3.png') }}" alt="Well Intervention"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-x-0 bottom-0 h-90 bg-gradient-to-t from-black/90 to-transparent"></div>
                </div>

                <div class="absolute bottom-0 left-0 right-0 z-10 p-8">
                    <h4 class="text-2xl font-bold text-west-white">Well Intervention</h4>

                    <p class="mt-4 text-sm leading-[20px] text-west-white/80">
                        Specialized techniques to manage well integrity and optimize flow without the need for a full workover rig.
                    </p>

                    <a href="#" class="group flex items-center mt-5 text-sm font-semibold uppercase text-west-primary-light">
                        <span>Read More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 mt-[1px] transition duration-500 group-hover:translate-x-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </article>

            {{-- Card 3 --}}
            <article
                data-reveal="3"
                class="group relative overflow-hidden rounded-md shadow-sm transition-all duration-700 ease-out delay-200 hover:-translate-y-1 hover:shadow-lg"
                :class="isRevealed(3) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="h-[420px] overflow-hidden">
                    <img src="{{ asset('images/west-h-img3.png') }}" alt="Well Intervention"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-x-0 bottom-0 h-90 bg-gradient-to-t from-black/90 to-transparent"></div>
                </div>

                <div class="absolute bottom-0 left-0 right-0 z-10 p-8">
                    <h4 class="text-2xl font-bold text-west-white">Well Intervention</h4>

                    <p class="mt-4 text-sm leading-[20px] text-west-white/80">
                        Specialized techniques to manage well integrity and optimize flow without the need for a full workover rig.
                    </p>

                    <a href="#" class="group flex items-center mt-5 text-sm font-semibold uppercase text-west-primary-light">
                        <span>Read More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 mt-[1px] transition duration-500 group-hover:translate-x-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </article>

        </div>
