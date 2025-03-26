<header >
    {{-- Embla Hero Carousel Section Start --}}
    <div class="relative mb-8">
        <div class="embla embla-1 overflow-hidden">
            <div class="embla__viewport">
                <div class="embla__container flex items-center">
                    <div class="embla__slide select-none min-w-full">
                        <div class="relative w-full aspect-[1/1] md:aspect-[16/9] bg-cover bg-center bg-no-repeat rounded-md"
                            style="background-image: url('{{ asset('img/herobg.png') }}')">
                            <div class="absolute inset-0 bg-teal-500/50 backdrop-blur-sm flex items-center rounded-md">
                                <div class="grid md:grid-cols-2 w-full max-w-7xl mx-auto px-10 py-6 sm:px-8 lg:px-12">

                                    <!-- Mobile Logo (Visible on Small Screens) -->
                                    <div class="md:hidden place-self-center">
                                        <img class="w-32 sm:w-48 drop-shadow-[0_5px_5px_rgba(255,255,255,0.5)]"
                                            src="{{ asset('img/logotransparentsqr.png') }}" alt="">
                                    </div>

                                    <!-- Content -->
                                    <div
                                        class="text-center md:text-left flex flex-col justify-center max-w-lg mx-auto px-6">
                                        <h1
                                            class="text-4xl md:text-5xl font-bold tracking-wider text-gray-200 mb-6 drop-shadow-md">
                                            Wujudkan Kemandirian Ummat
                                        </h1>
                                        <p
                                            class="text-sm md:text-base text-gray-200 drop-shadow-md hover:cursor-default mb-6">
                                            lazswara.org
                                        </p>
                                        <a href="http://wa.me/6285349688826" target="_blank"
                                            class="flex justify-center md:justify-start items-center bg-teal-800 px-6 py-4 rounded-xl font-bold text-gray-200 hover:bg-teal-600 transition duration-200 active:bg-teal-900 drop-shadow-lg">
                                            <svg class="size-6 mr-2" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                            </svg>
                                            Hubungi Kami
                                        </a>
                                    </div>

                                    <!-- Desktop Logo (Only Visible on Large Screens) -->
                                    <div class="hidden md:block place-self-center">
                                        <img class="w-48 lg:w-64 drop-shadow-[0_5px_5px_rgba(255,255,255,0.5)]"
                                            src="{{ asset('img/logotransparentsqr.png') }}" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide min-w-full">
                        <img src="/img/hero2.jpg" class="w-full rounded-lg" alt="Image 2">
                    </div>
                    <div class="embla__slide min-w-full">
                        <img src="/img/hero3.jpg" class="w-full rounded-lg" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
        <button
            class="prev-btn-1 absolute left-2 top-1/2 -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-full">&laquo;</button>
        <button
            class="next-btn-1 absolute right-2 top-1/2 -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-full">&raquo;</button>
        <div class="dots-container-1 flex justify-center mt-4 space-x-2"></div>
    </div>
    {{-- Embla Hero Carousel Section End --}}
</header>
