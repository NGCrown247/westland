{{-- HSE PAGE --}}

@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    {{-- HERO --}}
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
                    Health, Safety &<br>
                    Environment
                </h1>

                <p
                    x-cloak
                    class="mt-6 max-w-3xl text-lg leading-8 text-west-white/85 opacity-0 transition-all duration-[1400ms] ease-out md:text-xl md:leading-9"
                    :class="loaded
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-24'"
                >
                    Our "Goal Zero" commitment ensures that every operation is conducted with the
                    highest regard for people and the environment.
                </p>

            </div>
        </div>
    </div>
</section>



    {{-- PHILOSOPHY --}}
    <section x-data="home" class="bg-west-bg py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-16 lg:grid-cols-2">

                {{-- Left Content --}}
                <div
                    data-reveal="80"
                    class="transition-all duration-700 ease-out"
                    :class="isRevealed(80) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <span class="text-sm font-semibold uppercase tracking-[0.22em] text-west-primary">
                        Our Philosophy
                    </span>

                    <h2 class="mt-4 text-3xl font-bold leading-tight text-west-off-dark md:text-5xl">
                        Safety is Not Negotiable
                    </h2>

                    <p class="mt-8 max-w-2xl text-lg leading-9 text-west-text-muted">
                        At Westland Solution Nigeria Ltd, HSE is not just a policy; it is our
                        core operational discipline. We believe that all accidents are
                        preventable and that a safe operation is an efficient operation. Our
                        management system is designed to identify risks before they become incidents.
                    </p>

                    <div class="mt-10 space-y-5">

                        <div
                            data-reveal="81"
                            class="flex items-start gap-4 transition-all duration-700 ease-out"
                            :class="isRevealed(81) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full border border-west-primary text-west-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-[18px] leading-8 text-west-off-dark">
                                Zero Lost Time Incidents (LTI) Goal
                            </span>
                        </div>

                        <div
                            data-reveal="82"
                            class="flex items-start gap-4 transition-all duration-700 ease-out delay-100"
                            :class="isRevealed(82) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full border border-west-primary text-west-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-[18px] leading-8 text-west-off-dark">
                                Environmental Stewardship in the Niger Delta
                            </span>
                        </div>

                        <div
                            data-reveal="83"
                            class="flex items-start gap-4 transition-all duration-700 ease-out delay-200"
                            :class="isRevealed(83) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full border border-west-primary text-west-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-[18px] leading-8 text-west-off-dark">
                                Continuous Safety Training and Competency
                            </span>
                        </div>

                        <div
                            data-reveal="84"
                            class="flex items-start gap-4 transition-all duration-700 ease-out delay-300"
                            :class="isRevealed(84) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full border border-west-primary text-west-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-[18px] leading-8 text-west-off-dark">
                                Active Risk Management at the Wellsite
                            </span>
                        </div>

                    </div>
                </div>

                {{-- Right Image --}}
                <div
                    data-reveal="85"
                    class="relative transition-all duration-700 ease-out"
                    :class="isRevealed(85) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <div class="overflow-hidden rounded-md shadow-lg">
                        <img
                            src="{{ asset('images/west-h-img1.png') }}"
                            alt="Safety Philosophy"
                            class="h-[560px] w-full object-cover"
                        >
                    </div>

                    <div
                        data-reveal="86"
                        class="absolute -bottom-8 -right-8 bg-west-primary px-10 py-8 text-west-white shadow-xl transition-all duration-700 ease-out"
                        :class="isRevealed(86) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <div class="flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>

                        <h3 class="mt-5 text-3xl font-bold">
                            Goal Zero
                        </h3>

                        <p class="mt-2 text-lg text-west-white/85">
                            Every day, every job.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- HSE PRINCIPLES --}}
    <section x-data="home" class="bg-west-bg py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold text-west-off-dark md:text-5xl">
                    Our HSE Principles
                </h2>

                <p class="mt-5 text-lg leading-8 text-west-text-muted">
                    These core principles guide our behavior and decision-making in the field and the office.
                </p>
            </div>

            {{-- Cards --}}
            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

                {{-- Card 1 --}}
                <div
                    data-reveal="90"
                    class="rounded-xl border border-west-border bg-west-white p-8 text-center shadow-sm transition-all duration-700 ease-out hover:-translate-y-2 hover:shadow-lg"
                    :class="isRevealed(90) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <div class="flex justify-center text-west-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                        </svg>
                    </div>

                    <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                        Personal Safety
                    </h3>

                    <p class="mt-4 text-[15px] leading-8 text-west-text-muted">
                        Protecting our people through rigorous PPE compliance and health monitoring.
                    </p>
                </div>

                {{-- Card 2 --}}
                <div
                    data-reveal="91"
                    class="rounded-xl border border-west-border bg-west-white p-8 text-center shadow-sm transition-all duration-700 ease-out delay-100 hover:-translate-y-2 hover:shadow-lg"
                    :class="isRevealed(91) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <div class="flex justify-center text-west-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="12" cy="12" r="9" stroke-width="2"/>
                            <circle cx="12" cy="12" r="4" stroke-width="2"/>
                        </svg>
                    </div>

                    <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                        Process Safety
                    </h3>

                    <p class="mt-4 text-[15px] leading-8 text-west-text-muted">
                        Ensuring well control integrity and mechanical reliability of all equipment.
                    </p>
                </div>

                {{-- Card 3 --}}
                <div
                    data-reveal="92"
                    class="rounded-xl border border-west-border bg-west-white p-8 text-center shadow-sm transition-all duration-700 ease-out delay-200 hover:-translate-y-2 hover:shadow-lg"
                    :class="isRevealed(92) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <div class="flex justify-center text-west-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3c-3 0-6 3-6 6 0 5 6 12 6 12s6-7 6-12c0-3-3-6-6-6z"/>
                        </svg>
                    </div>

                    <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                        Environmental Care
                    </h3>

                    <p class="mt-4 text-[15px] leading-8 text-west-text-muted">
                        Minimizing our footprint and preventing spills in the sensitive Delta ecosystem.
                    </p>
                </div>

                {{-- Card 4 --}}
                <div
                    data-reveal="93"
                    class="rounded-xl border border-west-border bg-west-white p-8 text-center shadow-sm transition-all duration-700 ease-out delay-300 hover:-translate-y-2 hover:shadow-lg"
                    :class="isRevealed(93) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <div class="flex justify-center text-west-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z"/>
                        </svg>
                    </div>

                    <h3 class="mt-6 text-[20px] font-bold text-west-off-dark">
                        Stop Work Authority
                    </h3>

                    <p class="mt-4 text-[15px] leading-8 text-west-text-muted">
                        Every employee has the authority and obligation to stop unsafe work.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section x-data="home" class="bg-west-bg py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">

            {{-- Image --}}
            <div
                data-reveal="100"
                class="transition-all duration-700 ease-out"
                :class="isRevealed(100) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img
                        src="{{ asset('images/west-h-img1.png') }}"
                        alt="Operational Discipline"
                        class="h-[520px] w-full object-cover"
                    >
                </div>
            </div>

            {{-- Content --}}
            <div
                data-reveal="101"
                class="transition-all duration-700 ease-out"
                :class="isRevealed(101) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h2 class="text-3xl font-bold leading-tight text-west-off-dark md:text-5xl">
                    Operational Discipline
                </h2>

                <div class="mt-10 space-y-10">

                    {{-- Item 1 --}}
                    <div
                        data-reveal="102"
                        class="transition-all duration-700 ease-out"
                        :class="isRevealed(102) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <div class="flex items-start gap-4">
                            <div class="mt-1 text-west-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7Z" />
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-[18px] font-bold text-west-off-dark md:text-[20px]">
                                    Risk Assessment
                                </h3>

                                <p class="mt-3 text-lg leading-8 text-west-text-muted">
                                    We conduct detailed Job Safety Analysis (JSA) and Tool Box Talks (TBT)
                                    before every operation to identify and mitigate hazards.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Item 2 --}}
                    <div
                        data-reveal="103"
                        class="transition-all duration-700 ease-out delay-100"
                        :class="isRevealed(103) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <div class="flex items-start gap-4">
                            <div class="mt-1 text-west-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-[18px] font-bold text-west-off-dark md:text-[20px]">
                                    Training & Preparedness
                                </h3>

                                <p class="mt-3 text-lg leading-8 text-west-text-muted">
                                    Our field crews undergo regular safety drills, first aid training, and well
                                    control certification to ensure they are prepared for any scenario.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Item 3 --}}
                    <div
                        data-reveal="104"
                        class="transition-all duration-700 ease-out delay-200"
                        :class="isRevealed(104) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <div class="flex items-start gap-4">
                            <div class="mt-1 text-west-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 5.186-3.84 9.5-8.824 9.5A9.978 9.978 0 0 1 3 12c0-4.966 3.582-9 8.25-9 .727 0 1.433.098 2.106.283A9.956 9.956 0 0 1 21 12Z" />
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-[18px] font-bold text-west-off-dark md:text-[20px]">
                                    Compliance & Auditing
                                </h3>

                                <p class="mt-3 text-lg leading-8 text-west-text-muted">
                                    We perform internal and external HSE audits to ensure our management
                                    systems meet international standards and client requirements.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section x-data="home" class="bg-west-off-dark py-24 border-b border-b-west-border/10">
    <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">

        <h2
            data-reveal="110"
            class="text-3xl font-bold text-west-white md:text-5xl transition-all duration-700 ease-out"
            :class="isRevealed(110) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            Our Commitment to the Niger Delta
        </h2>

        <p
            data-reveal="111"
            class="mx-auto mt-8 max-w-4xl text-xl italic leading-10 text-west-white/70 transition-all duration-700 ease-out delay-100"
            :class="isRevealed(111) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            "We are committed to operating in a manner that protects the health and safety of our employees,
            contractors, and the communities where we work, while preserving the environment for future generations."
        </p>

        <div
            data-reveal="112"
            class="mt-12 transition-all duration-700 ease-out delay-200"
            :class="isRevealed(112) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            <a href="#"
                class="inline-flex items-center justify-center rounded-md bg-west-primary px-10 py-5 text-lg font-bold text-west-white transition-all duration-300 hover:bg-west-primary-light hover:text-west-off-dark">
                Request HSE Capability Presentation
            </a>
        </div>

    </div>
</section>

@include('partials.footer')

@endsection
