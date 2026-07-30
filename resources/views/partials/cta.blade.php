<section x-data="home" class="bg-west-bg py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div
            data-reveal="40"
            class="flex flex-col items-start justify-between gap-8 rounded-lg border border-west-border bg-west-primary/5 p-10 transition-all duration-700 ease-out md:flex-row md:items-center"
            :class="isRevealed(40) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >

            {{-- Text --}}
            <div
                data-reveal="41"
                class="max-w-xl transition-all duration-700 ease-out"
                :class="isRevealed(41) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h2 class="text-3xl font-bold text-west-off-dark md:text-4xl">
                    Need Reliable Oilfield Support?
                </h2>

                <p class="mt-4 text-lg leading-8 text-west-off-dark/80">
                    Contact our technical team today for a comprehensive service proposal
                    tailored to your field requirements.
                </p>
            </div>

            {{-- Button --}}
            <div
                data-reveal="42"
                class="transition-all duration-700 ease-out delay-100"
                :class="isRevealed(42) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <a href="#"
                    class="flex items-center rounded bg-west-primary px-4 py-4 text-base font-bold text-west-white transition duration-500 ease-in-out hover:bg-west-primary-light hover:text-west-off-dark sm:px-8 sm:text-lg">
                    Request Service
                </a>
            </div>

        </div>

    </div>
</section>
