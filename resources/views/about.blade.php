@extends('layouts.app')

@section('content')
@include('partials.navbar')

<section x-data="home" class="relative overflow-hidden">
    <img
        src="{{ asset('images/west-h-img1.png') }}"
        alt="Health, Safety and Environment"
        class="h-[420px] w-full object-cover md:h-[500px]"
    >

    <div class="absolute inset-0 bg-west-dark/60"></div>

    <div class="absolute inset-0 flex items-center">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">

                <h1
                    x-cloak
                    class="text-4xl font-bold leading-[0.95] text-west-white opacity-0 transition-all duration-[1200ms] ease-out md:text-6xl lg:text-7xl"
                    :class="loaded
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-24'"
                >
                   Our Story & Mission
                </h1>

                <p
                    x-cloak
                    class="mt-6 max-w-3xl text-lg leading-8 text-west-white/85 opacity-0 transition-all duration-[1400ms] ease-out md:text-xl md:leading-9"
                    :class="loaded
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-24'"
                >
                    A premier Nigerian oilfield servicing company specializing in high-end wireline and well intervention solutions.
                </p>

            </div>
        </div>
    </div>
</section>

<section x-data="home" class="bg-west-bg py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2">

            {{-- Left --}}
            <div
                data-reveal="0"
                class="transition-all duration-700 ease-out"
                :class="isRevealed(0) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <p class="text-[13px] font-semibold uppercase tracking-[0.2em] text-west-primary">
                    Company Overview
                </p>

                <h2 class="mt-4 text-[35px] font-bold leading-[1.2] text-west-off-dark md:text-[40px]">
                    Decades of Combined Field Expertise
                </h2>

                <p class="mt-6 text-[15px] leading-[1.9] text-west-dark/90">
                    Westland Solution Nigeria Ltd was established to address the growing need for high-precision wireline and well servicing in the Niger Delta. With a team of seasoned field engineers and technical specialists, we have built a reputation for operational excellence and safety.
                </p>

                <p class="mt-6 text-[15px] leading-[1.9] text-west-dark/90">
                    Our base in Port Harcourt allows us to respond rapidly to field requirements across Rivers, Delta, Bayelsa, and Akwa Ibom states. We are proud to be a 100% Nigerian-owned company contributing to the development of the nation's energy sector.
                </p>

                <div class="mt-14 grid gap-y-5 sm:grid-cols-2 sm:gap-x-8">

                    <div class="flex items-center gap-3">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full border border-west-primary text-west-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span class="text-[15px] text-west-dark/70">100% Nigerian Content</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full border border-west-primary text-west-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span class="text-[15px] text-west-dark/70">Port Harcourt Operational Base</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full border border-west-primary text-west-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span class="text-[15px] text-west-dark/70">Certified Field Engineers</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full border border-west-primary text-west-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span class="text-[15px] text-west-dark/70">Advanced Technical Equipment</span>
                    </div>

                </div>
            </div>

            {{-- Right --}}
            <div
                data-reveal="1"
                class="relative transition-all duration-700 ease-out"
                :class="isRevealed(1) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <img
                    src="{{ asset('images/west-h-img1.png') }}"
                    class="h-[460px] w-full rounded object-cover"
                >

                <div class="absolute bottom-[-30px] left-[-20px] bg-west-primary px-8 py-10 text-west-white">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor" class="h-10 w-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372A3.375 3.375 0 0 0 21 16.125V15a2.25 2.25 0 0 0-2.25-2.25h-1.5A2.25 2.25 0 0 1 15 10.5V9.375A3.375 3.375 0 0 0 11.625 6h-1.5A2.25 2.25 0 0 1 7.875 3.75V2.625A3.375 3.375 0 0 0 4.5 6v1.5A2.25 2.25 0 0 0 6.75 9.75h1.5A2.25 2.25 0 0 1 10.5 12v1.125A3.375 3.375 0 0 0 13.875 16.5h1.5A2.25 2.25 0 0 1 17.625 18.75v.378ZM12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold">Expert Team</h3>
                    <p class="mt-1 text-sm text-west-white/80">Niger Delta Specialists</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section x-data="home" class="bg-west-bg py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid gap-8 md:grid-cols-2">

            {{-- Mission --}}
            <div
                data-reveal="2"
                class="rounded-lg border border-west-border bg-white p-10 shadow-sm transition-all duration-700 ease-out"
                :class="isRevealed(2) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-west-primary/10 text-west-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6l4 2" />
                    </svg>
                </div>

                <h3 class="mt-6 text-[26px] font-bold text-west-off-dark">
                    Our Mission
                </h3>

                <p class="mt-5 text-[15px] leading-[1.9] text-west-dark/70">
                    To provide safe, efficient, and innovative wireline and well servicing solutions that optimize reservoir performance for our clients while maintaining the highest standards of operational integrity and environmental stewardship.
                </p>
            </div>

            {{-- Vision --}}
            <div
                data-reveal="3"
                class="rounded-lg border border-west-border bg-white p-10 shadow-sm transition-all duration-700 ease-out"
                :class="isRevealed(3) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-west-primary/10 text-west-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>

                <h3 class="mt-6 text-[26px] font-bold text-west-off-dark">
                    Our Vision
                </h3>

                <p class="mt-5 text-[15px] leading-[1.9] text-west-dark/70">
                    To be the preferred indigenous partner for technical well services in the Niger Delta, recognized for our technical competence, rapid response, and unwavering commitment to safety.
                </p>
            </div>

        </div>

    </div>
</section>

<section x-data="home" class="bg-west-bg py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">

        {{-- Header --}}
        <h2
            data-reveal="4"
            class="text-3xl font-bold text-west-off-dark transition-all duration-700 ease-out md:text-4xl"
            :class="isRevealed(4) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            Our Core Values
        </h2>

        <p
            data-reveal="5"
            class="mt-4 text-md text-west-dark/70 transition-all duration-700 ease-out"
            :class="isRevealed(5) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            The fundamental beliefs that drive our operations and relationships.
        </p>

        {{-- Cards --}}
        <div class="mt-14 grid gap-8 md:grid-cols-3">

            <div
                data-reveal="6"
                class="rounded-lg border border-west-border bg-white p-10 shadow-sm transition-all duration-700 ease-out"
                :class="isRevealed(6) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h3 class="text-xl font-semibold text-west-off-dark">
                    Integrity
                </h3>

                <p class="mt-4 leading-7 text-west-dark/70">
                    We are honest, transparent, and ethical in all our business dealings and field operations.
                </p>
            </div>

            <div
                data-reveal="7"
                class="rounded-lg border border-west-border bg-white p-10 shadow-sm transition-all duration-700 ease-out"
                :class="isRevealed(7) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h3 class="text-xl font-semibold text-west-off-dark">
                    Excellence
                </h3>

                <p class="mt-4 leading-7 text-west-dark/70">
                    We strive for the highest technical standards in every job we undertake, no matter the complexity.
                </p>
            </div>

            <div
                data-reveal="8"
                class="rounded-lg border border-west-border bg-white p-10 shadow-sm transition-all duration-700 ease-out"
                :class="isRevealed(8) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h3 class="text-xl font-semibold text-west-off-dark">
                    Safety
                </h3>

                <p class="mt-4 leading-7 text-west-dark/70">
                    We prioritize the health and safety of our people and the environment above all else.
                </p>
            </div>

        </div>

    </div>
</section>

<section x-data="home" class="bg-west-off-dark py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2">

            {{-- Left Content --}}
            <div
                data-reveal="9"
                class="transition-all duration-700 ease-out"
                :class="isRevealed(9) ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'"
            >
                <h2 class="text-3xl font-bold text-west-white md:text-4xl">
                    Leadership & Technical Expertise
                </h2>

                <p class="mt-6 max-w-2xl text-md leading-8 text-west-white/70">
                    Our leadership team comprises industry veterans with decades of experience in global oilfield servicing companies. This international perspective, combined with deep local knowledge, allows us to deliver world-class services in the Niger Delta.
                </p>

                <p class="mt-6 max-w-2xl text-md leading-8 text-west-white/70">
                    Every field engineer at Westland is rigorously trained and certified to handle the complex technical challenges of wireline, perforating, and well intervention.
                </p>
            </div>

            {{-- Right Images --}}
            <div
                data-reveal="10"
                class="grid grid-cols-1 gap-4 transition-all duration-700 ease-out sm:grid-cols-2 sm:gap-6"
                :class="isRevealed(10) ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'"
            >
                <img
                    src="{{ asset('images/west-h-img1.png') }}"
                    class="h-[320px] w-full rounded object-cover sm:h-[420px]"
                >

                <img
                    src="{{ asset('images/west-h-img1.png') }}"
                    class="h-[320px] w-full rounded object-cover sm:h-[420px]"
                >
            </div>

        </div>
    </div>
</section>

<section x-data="home" class="bg-west-bg py-20">
    <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">

        <h2
            data-reveal="11"
            class="text-3xl font-bold text-west-off-dark transition-all duration-700 ease-out md:text-4xl"
            :class="isRevealed(11) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            Partner with Westland
        </h2>

        <p
            data-reveal="12"
            class="mt-6 text-lg leading-8 text-west-dark transition-all duration-700 ease-out"
            :class="isRevealed(12) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            Experience the difference that technical competence and local commitment can make for your field operations.
        </p>

        <div
            data-reveal="13"
            class="mt-10 transition-all duration-700 ease-out"
            :class="isRevealed(13) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            <a href="#"
               class="inline-block rounded bg-west-primary px-8 py-4 text-lg font-semibold text-west-white transition hover:bg-west-primary-light">
                Contact Us Today
            </a>
        </div>

    </div>
</section>

@include('partials.footer')

@endsection
