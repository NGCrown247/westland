{{-- HOME FILE --}}

@extends('layouts.app')

@section('content')

    @include('partials.navbar')

    @include('partials.hero')


<section x-data="home" class="bg-west-bg py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section header --}}
        <div
            data-reveal="0"
            class="mx-auto max-w-3xl text-center transition-all duration-700 ease-out"
            :class="isRevealed(0) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
        >
            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-west-primary">
                Our Expertise
            </span>

            <h2 class="mt-4 text-4xl font-bold text-west-off-dark md:text-5xl">
                Core Servicing Solutions
            </h2>

            <div class="mx-auto mt-5 h-1 w-20 rounded-full bg-west-primary"></div>
        </div>


    @include('partials.services-card')



    </div>
</section>







    @include('partials.why-us')
    @include('partials.hse')
    @include('partials.stats')
    @include('partials.cta')
    @include('partials.footer')
@endsection
