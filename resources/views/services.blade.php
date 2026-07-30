@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    {{-- PAGE HERO --}}
<section x-data="home" class="relative overflow-hidden">
    <img
        src="{{ asset('images/west-h-img1.png') }}"
        alt="Technical Capabilities"
        class="h-[450px] w-full object-cover"
    >

    <div class="absolute inset-0 bg-black/55"></div>

    <div class="absolute inset-0 flex items-center">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">

                <h1
                    x-cloak
                    class="text-5xl font-bold text-white opacity-0 transition-all duration-[1200ms] ease-out md:text-7xl"
                    :class="loaded
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-24'"
                >
                    Technical Capabilities
                </h1>

                <p
                    x-cloak
                    class="mt-6 max-w-2xl text-xl leading-10 text-white/85 opacity-0 transition-all duration-[1400ms] ease-out"
                    :class="loaded
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-24'"
                >
                    Comprehensive wireline and well servicing solutions delivered by experienced
                    field engineers across the Niger Delta.
                </p>

            </div>
        </div>
    </div>
</section>
    {{-- SERVICES SECTION --}}
    <section x-data="home" class="bg-west-bg py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                @include('partials.services-card')

        </div>
    </section>



    <section x-data="home" class="bg-black py-24 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">

            {{-- Left Content --}}
            <div
                data-reveal="60"78+
                class="transition-all duration-700 ease-out"
                :class="isRevealed(60) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h2 class="text-3xl font-bold leading-tight md:text-5xl">
                    Integrated Field Solutions
                </h2>

                <p class="mt-8 text-sm leading-9 text-white/65">
                    Westland Solution Nigeria Ltd combines technical expertise with deep local
                    operational knowledge. Our integrated approach ensures that every service
                    we provide is optimized for the specific well conditions and reservoir
                    characteristics of the Niger Delta.
                </p>

                <div class="mt-10 grid gap-6 sm:grid-cols-2">

                    <div
                        data-reveal="61"
                        class="flex items-center gap-4 transition-all duration-700 ease-out"
                        :class="isRevealed(61) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <span class="h-3 w-3 rounded-full bg-west-primary"></span>
                        <span class=" font-semibold text-white">
                            Advanced Data Acquisition
                        </span>
                    </div>

                    <div
                        data-reveal="62"
                        class="flex items-center gap-4 transition-all duration-700 ease-out delay-100"
                        :class="isRevealed(62) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <span class="h-3 w-3 rounded-full bg-west-primary"></span>
                        <span class="font-semibold text-white">
                            Mechanical Interventions
                        </span>
                    </div>

                    <div
                        data-reveal="63"
                        class="flex items-center gap-4 transition-all duration-700 ease-out delay-200"
                        :class="isRevealed(63) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <span class="h-3 w-3 rounded-full bg-west-primary"></span>
                        <span class="font-semibold text-white">
                            Well Integrity Management
                        </span>
                    </div>

                    <div
                        data-reveal="64"
                        class="flex items-center gap-4 transition-all duration-700 ease-out delay-300"
                        :class="isRevealed(64) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <span class="h-3 w-3 rounded-full bg-west-primary"></span>
                        <span class="font-semibold text-white">
                            Production Optimization
                        </span>
                    </div>

                </div>
            </div>

            {{-- Right Image --}}
            <div
                data-reveal="65"
                class="relative transition-all duration-700 ease-out"
                :class="isRevealed(65) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <div class="overflow-hidden rounded-md">
                    <img
                        src="{{ asset('images/west-h-img1.png') }}"
                        alt="Integrated Field Solutions"
                        class="h-[600px] w-full object-cover"
                    >
                </div>

                <div
                    data-reveal="66"
                    class="absolute -bottom-8 -left-8 bg-west-primary px-10 py-8 shadow-xl transition-all duration-700 ease-out"
                    :class="isRevealed(66) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >
                    <h3 class="text-2xl font-bold text-white">
                        Operational Excellence
                    </h3>
                    <p class="mt-2 text-md text-white/80">
                        Niger Delta Basin Specialists
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section x-data="home" class="bg-west-bg py-24">
    <div class="mx-auto max-w-4xl px-4 text-center">

        {{-- Title --}}
        <h2
            data-reveal="70"
            class="text-3xl md:text-4xl font-bold text-west-off-dark transition-all duration-700 ease-out"
            :class="isRevealed(70) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            Ready to discuss your project?
        </h2>

        {{-- Subtitle --}}
        <p
            data-reveal="71"
            class="mt-6 text-lg text-west-text-muted transition-all duration-700 ease-out delay-100"
            :class="isRevealed(71) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            Our technical team is ready to provide detailed capability presentations and service proposals.
        </p>

        {{-- Button --}}
        <div
            data-reveal="72"
            class="mt-10 transition-all duration-700 ease-out delay-200"
            :class="isRevealed(72) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            <a href="#"
                class="inline-flex items-center justify-center bg-west-primary px-10 py-4 text-lg font-semibold text-white rounded-md transition-all duration-300 hover:bg-west-primary-light hover:scale-105">
                Contact Technical Sales
            </a>
        </div>

    </div>
</section>


@include('partials.footer')

@endsection
