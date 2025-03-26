<nav class="bg-gray-100" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <a href="/" class="transition hover:opacity-75 flex items-center">
                <div class="shrink-0">
                    <!-- Mobile (sm) Icon -->
                    <img class="size-8 sm:block md:hidden" src="img/logotransparent.png" alt="LAZ Swara">
                    
                    <!-- Tablet (md) & Desktop (lg) Icon -->
                    <img class="size-32 hidden md:block h-auto" src="img/logotransparent2.png" alt="LAZ Swara">
                </div>
            </a>
            


            <div
                class="invisible md:visible absolute inset-y-0 right-0 flex gap-3 items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <x-nav-link href='/' :active="request()->is('/')">Beranda</x-nav-link>
                <x-nav-link href='/about' :active="request()->is('about')">Tentang Kami</x-nav-link>
                <x-nav-link href='/program' :active="request()->is('program')">Program</x-nav-link>
                <x-nav-link href='/zakat' :active="request()->is('zakat')">Zakat</x-nav-link>

                <div class="relative">
                    <button @click="isOpen = !isOpen" type="button"
                        class="inline-flex items-center gap-x-1 text-sm/6 text-white" aria-expanded="false"
                        aria-haspopup="true" id="user-layanan-button">
                        <x-nav-link href='#' :active="request()->is('layanan')">
                            <div class="flex"> Layanan
                                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                    data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </x-nav-link>

                    </button>

                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="invisible md:visible absolute right-0 z-10 mt-2 w-64 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-layanan-button" tabindex="-1">
                        <div class="group relative rounded-lg px-2 py-1">
                            <div>
                                <x-nav-link href='/laporan' :active="request()->is('laporan')">
                                    Laporan Keuangan
                                </x-nav-link>
                            </div>
                        </div>

                        <div class="border-t border-gray-300 my-2"></div>

                        <div class="group relative rounded-lg px-2 py-1">
                            <div>
                                <x-nav-link href='/rekening' :active="request()->is('rekening')">
                                    Rekening Kami
                                </x-nav-link>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-lg border-2 border-gray-700/30 p-2 text-gray-700 hover:bg-teal-700 hover:border-gray-500 hover:text-white ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav-link href='/' :active="request()->is('/')">Beranda</x-nav-link>
            <x-nav-link href='/about' :active="request()->is('about')">Tentang Kami</x-nav-link>
            <x-nav-link href='/program' :active="request()->is('program')">Program</x-nav-link>
            <x-nav-link href='/zakat' :active="request()->is('zakat')">Zakat</x-nav-link>
            <x-nav-link href='/laporan' :active="request()->is('laporan')">Laporan Keuangan</x-nav-link>
            <x-nav-link href='/rekening' :active="request()->is('rekening')">Rekening Kami</x-nav-link>
        </div>
    </div>
</nav>
