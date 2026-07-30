<section x-data="home" class=" flex flex-col w-full relative items-center justify-center h-screen overflow-hidden bg-west-primary py-24 text-white">

    {{-- Slider --}}
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="active === index " x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0">
            <img :src="slide" class="w-full h-full object-cover ">
            <div class="absolute inset-0 bg-west-dark/60"></div>
        </div>
    </template>

    {{-- Content --}}
    <div class="relative w-full md:text-sm text-west-white transition-all duration-500 z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">

<h1
    x-cloak
    class="text-6xl opacity-0 md:text-7xl lg:text-6xl xl:text-7xl font-bold transition-all duration-1001 ease-out"
    :class="loaded
        ? 'opacity-100 translate-x-0'
        : 'opacity-0 translate-x-100'"
>
    Oil Well Servicing Solutions
</h1>
            <p
            :class="loaded ?
            'translate-y-0 opacity-100'
            : 'translate-y-10 opacity-0'"
             class="mt-6 text-lg opacity-0 text-west-white transition-all duration-500">Providing safe and efficient field operations across the Niger Delta with a strong commitment to safety and reliability.</p>

            <div
            :class="loaded ?
            'translate-y-0 opacity-100'
            : 'translate-y-30 opacity-0'"
             class="mt-8 flex gap-4 transition-all duration-500 opacity-0 ">
                <a href="#"class="group bg-west-primary flex items-center gap-3 sm:px-8 px-4 py-4 text-base sm:text-lg rounded font-bold hover:bg-west-primary-light hover:text-west-off-dark transition duration-300 ease-in-out">
                    <span>Request Services</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 mt-[3px] group-hover:translate-x-2 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>

                </a>
                <a href="#" class=" border border-west-white/20 flex items-center sm:px-8 px-4 py-4 text-base sm:text-lg  rounded font-bold hover:bg-west-white/10 transition duration-500 ease-in-out">
                    <span>Contact Us</span>

                </a>
            </div>

        </div>





    </div>
    <div class="hero-card w-full bg-black p-5">

    </div>

</section>
