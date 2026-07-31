<!-- Overlay -->
<div x-show="openSidebar"
     @click="openSidebar = false"
     class="fixed inset-0 bg-black/50 z-30"
     x-transition.opacity>
</div>

<!-- Sidebar Panel -->
<div x-show="openSidebar"
     @keydown.escape.window="openSidebar = false"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 -translate-x-full"
     x-transition:enter-end="opacity-100 translate-x-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 translate-x-0"
     x-transition:leave-end="opacity-0 -translate-x-full"
     class="fixed inset-y-0 left-0 w-72 bg-west-white shadow-lg z-50 overflow-y-auto">

    <!-- Header -->
    <div class="flex items-center z-60 bg-west-white sticky top-0 justify-between px-5 py-4 border-b border-west-border">
        @include('partials.logo')
        <button @click="openSidebar = false" class="text-west-dark hover:text-west-primary">
            <!-- close icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Links -->
    <nav class="flex flex-col px-5 py-6 space-y-4 text-west-off-dark">
        <a href="/" class="hover:text-west-primary">Home</a>

        <!-- Services Dropdown -->
        <div class="relative">
            <button @click.stop="servicesDropdown = !servicesDropdown"
                class="flex items-center justify-between w-full hover:text-west-primary">
                <span>Services</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="size-5 transition-transform duration-300"
                    :class="servicesDropdown ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M19.5 8.25 12 15.75 4.5 8.25" />
                </svg>
            </button>

            <div x-show="servicesDropdown"
                 x-cloak
                 @click.away="servicesDropdown = false"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-2"
                 class="mt-3 space-y-5 pl-3 text-[15px]">
                <a href="#" class="block hover:text-west-primary">Procurement Services</a>
                <a href="#" class="block hover:text-west-primary">Slickline Services</a>
                <a href="#" class="block hover:text-west-primary">E-line Services</a>
                <a href="#" class="block hover:text-west-primary">Well Testing Services</a>
                <a href="#" class="block hover:text-west-primary">Directional Borehole Surveying</a>
                <a href="#" class="block hover:text-west-primary">Well Fix Services</a>
                <a href="#" class="block hover:text-west-primary">Coiled Tubing Pumping & Stimulation</a>
                <a href="#" class="block hover:text-west-primary">Wellhead Maintenance</a>
                <a href="#" class="block hover:text-west-primary">Drill Stem Testing & TCP</a>
                <a href="#" class="block hover:text-west-primary">Well Completion Services</a>
                <a href="#" class="block hover:text-west-primary">Casing & Tubular Inspection</a>
                <a href="#" class="block hover:text-west-primary">Casing & Tubular Running</a>
                <a href="#" class="block hover:text-west-primary">Directional Drilling</a>
                <a href="#" class="block hover:text-west-primary">LWD / MWD</a>
            </div>
        </div>

        <a href="{{ route('hse') }}" class="hover:text-west-primary">HSE</a>
        <a href="{{ route('about') }}" class="hover:text-west-primary">About</a>
        <a href="{{ route('contact') }}" class="hover:text-west-primary">Contact</a>

        <a href="#" class="mt-4 px-4 py-3 rounded font-semibold text-center bg-west-primary text-west-white hover:bg-west-primary-light">
            Get a quote
        </a>
    </nav>
</div>
