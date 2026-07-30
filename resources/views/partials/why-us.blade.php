<section x-data="home" class="bg-west-primary/5 py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div
            data-reveal="10"
            class="mx-auto max-w-4xl text-center transition-all duration-700 ease-out"
            :class="isRevealed(10) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            <span class="text-sm font-semibold uppercase tracking-[0.25em] text-west-primary">
                Why Westland
            </span>

            <h2 class="mt-5 text-3xl font-bold leading-tight text-west-off-dark md:text-4xl">
                The Industry Standard in Reliability
            </h2>
        </div>

        {{-- Features --}}
        <div class="mt-16 grid grid-cols-1 gap-10 sm:grid-cols-2 xl:grid-cols-4">

            {{-- Item 1 --}}
            <div
                data-reveal="11"
                class="text-center transition-all duration-700 ease-out"
                :class="isRevealed(11) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div
                    class="mx-auto flex h-18 w-18 items-center justify-center rounded-full bg-west-white shadow-sm ring-1 ring-west-dark/5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-west-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>

                <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                    Safety First Operations
                </h3>

                <p class="mx-auto mt-4 max-w-xs text-sm leading-8 text-west-off-dark/80">
                    Our zero-incident goal drives every field operation we undertake.
                </p>
            </div>

            {{-- Item 2 --}}
            <div
                data-reveal="12"
                class="text-center transition-all duration-700 ease-out delay-100"
                :class="isRevealed(12) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div
                    class="mx-auto flex h-18 w-18 items-center justify-center rounded-full bg-west-white shadow-sm ring-1 ring-west-dark/5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-west-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>

                <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                    Experienced Field Engineers
                </h3>

                <p class="mx-auto mt-4 max-w-xs text-sm leading-8 text-west-off-dark/80">
                    Highly trained Nigerian professionals with deep local basin expertise.
                </p>
            </div>

            {{-- Item 3 --}}
            <div
                data-reveal="13"
                class="text-center transition-all duration-700 ease-out delay-200"
                :class="isRevealed(13) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div
                    class="mx-auto flex h-18 w-18 items-center justify-center rounded-full bg-west-white shadow-sm ring-1 ring-west-dark/5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-west-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>

                <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                    Rapid Response
                </h3>

                <p class="mx-auto mt-4 max-w-xs text-sm leading-8 text-west-off-dark/80">
                    Strategically located in Port Harcourt for fast deployment across the Delta.
                </p>
            </div>

            {{-- Item 4 --}}
            <div
                data-reveal="14"
                class="text-center transition-all duration-700 ease-out delay-300"
                :class="isRevealed(14) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div
                    class="mx-auto flex h-18 w-18 items-center justify-center rounded-full bg-west-white shadow-sm ring-1 ring-west-dark/5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-west-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                    </svg>
                </div>

                <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                    Reliable Equipment
                </h3>

                <p class="mx-auto mt-4 max-w-xs text-sm leading-8 text-west-off-dark/80">
                    State-of-the-art tools maintained to international industry standards.
                </p>
            </div>

        </div>

    </div>
</section>
