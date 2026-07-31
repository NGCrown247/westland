@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    @include('partials.sidebar')



  {{--CONTACT HERO --}}
<section x-data="home" class="relative overflow-hidden">
    <img src="{{ asset('images/west-h-img1.png') }}" class="h-[380px] w-full object-cover md:h-[420px]">

    <div class="absolute inset-0 bg-west-dark/60"></div>

    <div class="absolute inset-0 flex items-center">
        <div class="mx-auto w-full max-w-7xl sm:px-6 lg:px-8">

            <h1
                x-cloak
                class="text-4xl font-bold leading-[0.95] text-west-white opacity-0 transition-all duration-[1200ms] ease-out md:text-6xl lg:text-7xl"
                :class="loaded
                    ? 'opacity-100 translate-x-0'
                    : 'opacity-0 translate-x-24'"
            >
                Contact Us
            </h1>

            <p
                x-cloak
                class="mt-6 max-w-3xl text-lg leading-8 text-west-white/85 opacity-0 transition-all duration-[1400ms] ease-out md:text-xl md:leading-9"
                :class="loaded
                    ? 'opacity-100 translate-x-0'
                    : 'opacity-0 translate-x-24'"
            >
                Our technical team is ready to discuss your well servicing requirements and
                provide expert field support.
            </p>

        </div>
    </div>
</section>

    {{-- CONTENT --}}
    <section x-data="home" class="bg-west-bg py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-[1.6fr_1fr]">

                {{-- FORM --}}
                <div
                    data-reveal="200"
                    class="bg-west-white rounded-lg p-8 md:p-10 shadow-sm transition-all duration-700 ease-out"
                    :class="isRevealed(200) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >

                    <h2 class="text-2xl font-semibold text-west-off-dark">
                        Send a Message
                    </h2>

                    <form class="mt-8 space-y-6">

                        <div class="grid gap-5 md:grid-cols-2">
                            <div
                                data-reveal="201"
                                class="transition-all duration-700 ease-out"
                                :class="isRevealed(201) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                            >
                                <label class="text-[12px] font-semibold uppercase text-west-off-dark">
                                    Full Name
                                </label>
                                <input type="text" placeholder="John Doe"
                                    class="mt-2 h-12 w-full rounded border border-west-border px-4 text-[14px] focus:border-west-primary outline-none">
                            </div>

                            <div
                                data-reveal="202"
                                class="transition-all duration-700 ease-out delay-100"
                                :class="isRevealed(202) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                            >
                                <label class="text-[12px] font-semibold uppercase text-west-off-dark">
                                    Email Address
                                </label>
                                <input type="email" placeholder="john@company.com"
                                    class="mt-2 h-12 w-full rounded border border-west-border px-4 text-[14px] focus:border-west-primary outline-none">
                            </div>
                        </div>

                        <div class="grid gap-5 md:grid-cols-2">
                            <div
                                data-reveal="203"
                                class="transition-all duration-700 ease-out"
                                :class="isRevealed(203) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                            >
                                <label class="text-[12px] font-semibold uppercase text-west-off-dark">
                                    Company
                                </label>
                                <input type="text" placeholder="Company Ltd"
                                    class="mt-2 h-12 w-full rounded border border-west-border px-4 text-[14px] focus:border-west-primary outline-none">
                            </div>

                            <div
                                data-reveal="204"
                                class="transition-all duration-700 ease-out delay-100"
                                :class="isRevealed(204) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                            >
                                <label class="text-[12px] font-semibold uppercase text-west-off-dark">
                                    Service Required
                                </label>
                                <select
                                    class="mt-2 h-12 w-full rounded border border-west-border px-4 text-[14px] focus:border-west-primary outline-none">
                                    <option>Select a service</option>
                                    <option>Slickline Services</option>
                                    <option>E-line Services</option>
                                    <option>Well Testing Services</option>
                                    <option>Directional Borehole Surveying</option>
                                </select>
                            </div>
                        </div>

                        <div
                            data-reveal="205"
                            class="transition-all duration-700 ease-out delay-200"
                            :class="isRevealed(205) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <label class="text-[12px] font-semibold uppercase text-west-off-dark">
                                Message
                            </label>
                            <textarea rows="5" placeholder="Tell us about your project requirements..."
                                class="mt-2 w-full rounded border border-west-border px-4 py-3 text-[14px] focus:border-west-primary outline-none"></textarea>
                        </div>

                        <div
                            data-reveal="206"
                            class="transition-all duration-700 ease-out delay-300"
                            :class="isRevealed(206) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <button
                                class="mt-4 inline-flex items-center cursor-pointer gap-2 bg-west-primary px-6 py-3 text-[15px] font-semibold text-west-white rounded hover:bg-west-primary-light hover:text-west-off-dark transition">
                                Send Message
                            </button>
                        </div>

                    </form>
                </div>

                {{-- INFO --}}
                <div
                    data-reveal="207"
                    class="transition-all duration-700 ease-out delay-100"
                    :class="isRevealed(207) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                >

                    <h2 class="text-2xl font-semibold text-west-off-dark">
                        Contact Information
                    </h2>

                    <div class="mt-8 space-y-7 text-[14px]">

                        <div
                            data-reveal="208"
                            class="flex gap-4 transition-all duration-700 ease-out"
                            :class="isRevealed(208) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <div
                                class="w-10 h-10 flex items-center justify-center bg-west-primary/10 text-west-primary rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>

                            </div>
                            <div>
                                <h3 class="font-semibold text-west-off-dark">Office Address</h3>
                               <p>
                            #50 Abec Road Nvuigwe, Woji,<br>
                            Port Harcourt, Rivers State
                        </p>
                            </div>
                        </div>

                        <div
                            data-reveal="209"
                            class="flex gap-4 transition-all duration-700 ease-out delay-100"
                            :class="isRevealed(209) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <div
                                class="w-10 h-10 flex items-center justify-center bg-west-primary/10 text-west-primary rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>

                            </div>
                            <div>
                                <h3 class="font-semibold text-west-off-dark">Phone Number</h3>
                             <p class="mt-5 text-2xl font-bold text-west-primary">
                             +2349122644154<br>+2349030588284
                        </p>   
                            </div>
                        </div>

                        <div
                            data-reveal="210"
                            class="flex gap-4 transition-all duration-700 ease-out delay-200"
                            :class="isRevealed(210) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <div
                                class="w-10 h-10 flex items-center justify-center bg-west-primary/10 text-west-primary rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>

                            </div>
                            <div>
                                <h3 class="font-semibold text-west-off-dark">Email Address</h3>
                                 <p>westlandsolution.ng@gmail.com</p>
                            </div>
                        </div>

                        <div
                            data-reveal="211"
                            class="flex gap-4 transition-all duration-700 ease-out delay-300"
                            :class="isRevealed(211) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <div
                                class="w-10 h-10 flex items-center justify-center bg-west-primary/10 text-west-primary rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>
                            <div>
                                <h3 class="font-semibold text-west-off-dark">Working Hours</h3>
                                <p class="mt-1 text-west-text-muted leading-6">
                                    Mon - Fri: 8:00 AM - 5:00 PM<br>
                                    24/7 Field Support Available
                                </p>
                            </div>
                        </div>

                    </div>

                    {{-- EMERGENCY --}}
                    <div
                        data-reveal="212"
                        class="mt-10 bg-west-off-dark rounded-lg p-6 border-l-west-primary border-10 transition-all duration-700 ease-out delay-400"
                        :class="isRevealed(212) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <h3 class="text-lg font-semibold text-west-white">
                            Urgent Field Support
                        </h3>

                        <p class="mt-3 text-[14px] text-west-white/70 leading-6">
                            For emergency well intervention or urgent field technical support,
                            please call our 24/7 hotline:
                        </p>

                        <p class="mt-5 text-2xl font-bold text-west-primary">
                             +2349122644154
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>




<div class="w-full h-[400px] rounded overflow-hidden border border-west-border">
    <iframe
        src="https://www.google.com/maps?q=50+Archdeacon+Brown+Educational+Centre+Rd,+Port+Harcourt&output=embed"
        class="w-full h-full border-0"
        loading="lazy">
    </iframe>
</div>

@include('partials.footer')


@endsection
