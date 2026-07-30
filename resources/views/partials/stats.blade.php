<section x-data="home" class="bg-west-off-dark py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-3 md:gap-0">

            {{-- Stat 1 --}}
            <div
                data-reveal="30"
                class="text-center md:text-left md:px-10 md:border-l md:border-west-white/10 transition-all duration-700 ease-out"
                :class="isRevealed(30) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="text-5xl font-bold text-west-primary md:text-6xl">
                    <span x-text="stats.experience"></span>+
                </div>

                <p class="mt-4 text-sm font-semibold uppercase tracking-[0.2em] text-west-white/80">
                    Years Combined Experience
                </p>
            </div>

            {{-- Stat 2 --}}
            <div
                data-reveal="31"
                class="text-center md:text-left md:px-10 md:border-l md:border-west-white/10 transition-all duration-700 ease-out delay-100"
                :class="isRevealed(31) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="text-5xl font-bold text-west-primary md:text-6xl">
                    <span x-text="stats.coverage"></span>%
                </div>

                <p class="mt-4 text-sm font-semibold uppercase tracking-[0.2em] text-west-white/80">
                    Niger Delta Coverage
                </p>
            </div>

            {{-- Stat 3 --}}
            <div
                data-reveal="32"
                class="text-center md:text-left md:px-10 md:border-l md:border-west-white/10 transition-all duration-700 ease-out delay-200"
                :class="isRevealed(32) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="text-5xl font-bold text-west-primary md:text-6xl">
                    <span x-text="stats.support"></span>/7
                </div>

                <p class="mt-4 text-sm font-semibold uppercase tracking-[0.2em] text-west-white/80">
                    Field Support
                </p>
            </div>

        </div>
    </div>
</section>
