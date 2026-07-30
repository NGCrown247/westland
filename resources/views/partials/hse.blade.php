<section x-data="home" class="bg-west-bg py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-14 lg:grid-cols-2">

            {{-- Image Side --}}
            <div
                data-reveal="15"
                class="relative transition-all duration-700 ease-out"
                :class="isRevealed(15) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="absolute -left-4 -top-4 h-24 w-24 border-l-2 border-t-2 border-west-primary"></div>

                <div class="overflow-hidden">
                    <img
                        src="{{ asset('images/west-h-img1.png') }}"
                        alt="HSE Commitment"
                        class="h-[620px] w-full object-cover"
                    >
                </div>

                <div class="absolute -bottom-5 right-[-13px] bg-west-primary px-5 py-5 text-west-white shadow-lg">
                    <div
                        data-reveal="16"
                        class="text-4xl font-bold leading-none transition-all duration-700 ease-out"
                        :class="isRevealed(16) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        100%
                    </div>

                    <div
                        data-reveal="17"
                        class="mt-3 text-sm font-semibold uppercase tracking-[0.2em] transition-all duration-700 ease-out"
                        :class="isRevealed(17) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        Safety Compliance
                    </div>
                </div>
            </div>

            {{-- Content Side --}}
            <div
                data-reveal="18"
                class="max-w-xl transition-all duration-700 ease-out"
                :class="isRevealed(18) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <span
                    data-reveal="19"
                    class="text-sm font-bold uppercase tracking-[0.25em] text-west-primary transition-all duration-700 ease-out"
                    :class="isRevealed(19) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    HSE Commitment
                </span>

                <h2
                    data-reveal="20"
                    class="mt-5 text-4xl font-bold leading-tight text-west-off-dark md:text-5xl transition-all duration-700 ease-out"
                    :class="isRevealed(20) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    Safety is Our Core Foundation
                </h2>

                <p
                    data-reveal="21"
                    class="mt-8 text-md leading-9 text-west-text-muted transition-all duration-700 ease-out"
                    :class="isRevealed(21) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    At Westland Solution Nigeria Ltd, we believe that every incident is preventable.
                    Our Health, Safety, and Environment (HSE) policy is integrated into every aspect
                    of our field operations.
                </p>

                <div
                    data-reveal="22"
                    class="mt-10 transition-all duration-700 ease-out"
                    :class="isRevealed(22) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <a
                        href="{{ route('hse') }}"
                        class="inline-flex items-center justify-center rounded-md bg-west-off-dark px-8 py-4 text-lg font-bold text-west-white transition-all duration-300 hover:bg-west-dark"
                    >
                        View HSE Policy
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
