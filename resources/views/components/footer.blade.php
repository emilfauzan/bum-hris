{{-- Footer Section Start --}}
<footer class="bg-white mt-4 rounded-b-lg">

    {{-- Alert Section Start --}}
    <div class="bg-orange-400 rounded-t-lg px-4 py-8 flex">
        <div class="mx-8 content-center">
            <svg class="size-12" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480L40 480c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24l0 112c0 13.3 10.7 24 24 24s24-10.7 24-24l0-112c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
            </svg>
        </div>
        <div class="text-justify">
            <p class="font-bold">PERHATIAN!</p>
            <p><strong>LAZ SWARA</strong> Tidak menerima dana donasi dari Dana Pencurian, Cuci Uang, dan Dana yang
                dilarang oleh Syariat.</p>
        </div>
    </div>
    {{-- Alert Section End --}}

    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2">

            {{-- Right Footer Section Start --}}
            <div class="border-b border-gray-100 py-8 lg:order-last lg:border-b-0 lg:border-s lg:py-16 lg:ps-16">
                <div class="flex text-teal-600 lg:hidden justify-center">
                    <img class="size-36" src="img/logosquare.PNG" alt="LAZ Swara">
                </div>

                <div class="mt-8 space-y-4 lg:mt-0">
                    <span class="hidden h-1 w-10 rounded bg-teal-500 lg:block"></span>

                    <div class="text-center lg:text-left">
                        <h2 class=" text-2xl font-medium text-gray-900">Lokasi Kami</h2>

                        <p class="mt-4  text-gray-500">
                            Jl. Dayung No.8, Tlk. Lingga, Kec. Sangatta Utara, Kabupaten Kutai Timur, Kalimantan
                            Timur 75683
                        </p>
                    </div>
                    <div class="relative w-full h-[300px] overflow-hidden">
                        <!-- Google Maps Background -->
                        <iframe
                            class="aspect-square w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22568.86547829671!2d117.52301569010554!3d0.5271470437625458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a35b5f8cd94d5%3A0x4073d181d20e9b1a!2sLAZ%20Swara%20Mandiri%20Ummat!5e0!3m2!1sen!2sid!4v1735263877831!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
            
                    </div>

                    <a class="group flex items-center justify-between gap-4 rounded-lg border border-teal-600 bg-teal-600 px-5 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring"
                        href="https://maps.app.goo.gl/EafDKf1JzEjQpp8X6" target="_blank">
                        <span
                            class="font-medium text-white transition-colors group-hover:text-teal-600 group-active:text-teal-500">
                            Arahkan saya
                        </span>

                        <span
                            class="shrink-0 rounded-full border border-current bg-white p-2 text-teal-600 group-active:text-teal-500">
                            <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            {{-- Right Footer Section End --}}

            {{-- Left Footer Section Start --}}
            <div class="py-8 lg:py-16 lg:pe-16">
                <div class="hidden text-teal-600 lg:block">
                    <img class="justify-self-center size-36" src="img/logosquare.PNG" alt="LAZ Swara">
                </div>

                <div
                    class="mt-8 grid grid-cols-1 gap-8 justify-items-center text-center lg:justify-items-start lg:text-left">

                    {{-- Navigation Section Start --}}
                    <div>
                        <p class="text-lg font-medium text-gray-900">Navigasi</p>

                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="/" class="text-gray-700 transition hover:opacity-75"> Beranda
                                </a>
                            </li>

                            <li>
                                <a href="/about" class="text-gray-700 transition hover:opacity-75"> Tentang Kami
                                </a>
                            </li>

                            <li>
                                <a href="/program" class="text-gray-700 transition hover:opacity-75"> Program
                                </a>
                            </li>

                            <li>
                                <a href="/zakat" class="text-gray-700 transition hover:opacity-75"> Zakat
                                </a>
                            </li>

                            <li>
                                <a href="/laporan" class="text-gray-700 transition hover:opacity-75"> Laporan </a>
                            </li>

                            <li>
                                <a href="/rekening" class="text-gray-700 transition hover:opacity-75"> Rekening </a>
                            </li>
                        </ul>
                    </div>
                    {{-- Navigation Section End --}}

                    {{-- Contact Us Section Start --}}
                    <p class="mt-4 text-lg font-medium text-gray-900">Hubungi Kami</p>
                    <a class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                        href="http://wa.me/6285349688826" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 text-gray-900" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>

                        <span class="flex-1 text-gray-700">+62853 4968 8826 - Admin Swara</span>
                    </a>
                    <a class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 text-gray-900" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <button email-copy class="copyButton cursor-pointer flex-1 text-gray-700">
                            <p>
                                lazswaramandiriummat@gmail.com
                            </p>
                        </button>
                    </a>
                    {{-- Contact Us Section End --}}

                </div>

                {{-- Social Media Section Start --}}
                <div class="mt-16 border-t border-gray-100 pt-8 items-center ">
                    <ul class="mt-2 flex justify-center gap-6 sm:mt-0">
                        <li class="cursor-pointer">
                            <a href="https://facebook.com/share/196NfRiQTf/?mibextid=wwXIfr" rel="noreferrer"
                                target="_blank" class="text-gray-700 transition hover:opacity-75 p-8">
                                <span class="sr-only">Facebook</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li class="cursor-pointer">
                            <a href="http://instagram.com/lazswara?igsh=MWF4MWt2bXNyYTFsZw%3D%3D&utm_source=qr"
                                rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75 p-8">
                                <span class="sr-only">Instagram</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="http://wa.me/6285349688826" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75 p-8">
                                <span class="sr-only">WhatsApp</span>
                                <svg class="size-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://youtube.com/@lazswara?si=DAT1kyHa4zFb3dJS" rel="noreferrer"
                                target="_blank" class="text-gray-700 transition hover:opacity-75 p-8">
                                <span class="sr-only">Youtube</span>
                                <svg class="size-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://tiktok.com/@lazswara?_t=ZS-8ti5W4a4BeB&_r=1" rel="noreferrer"
                                target="_blank" class="text-gray-700 transition hover:opacity-75 p-8">
                                <span class="sr-only">Tik Tok</span>
                                <svg class="size-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Social Media Section End  --}}

                <p class="mt-8 text-xs text-center text-gray-500">Copyright &copy; 2024 <strong>LAZ Swara </strong>
                    by Emil Fauzan</p>
            </div>
            {{-- Left Footer Section End --}}

        </div>
    </div>
</footer>
{{-- Footer Section End --}}

<!-- Modal Overlay (Success Message) Start -->
<div id="emailcopySuccessModal"
    class="fixed bottom-4 right-4 sm:bottom-0 sm:right-0 sm:left-0 flex items-center justify-center sm:justify-center bg-black bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="bg-teal-700/30 px-6 py-4 rounded-md shadow-md text-center w-auto sm:w-full sm:rounded-none">
        <p
            class="text-white font-semibold flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-white" viewBox="0 0 384 512">
                <path fill="#ffffff"
                    d="M192 0c-41.8 0-77.4 26.7-90.5 64L64 64C28.7 64 0 92.7 0 128L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64l-37.5 0C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM305 273L177 401c-9.4 9.4-24.6 9.4-33.9 0L79 337c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L271 239c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            Berhasil disalin!
        </p>
    </div>
</div>
<!-- Modal Overlay (Success Message) End -->

<script>
    function copyToClipboardFallback(text) {
        const textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        showModal();
    }

    function showModal() {
        const modal = document.getElementById("emailcopySuccessModal");
        modal.classList.remove("opacity-0", "pointer-events-none");

        setTimeout(() => {
            modal.classList.add("opacity-0", "pointer-events-none");
        }, 5000);
    }

    document.querySelectorAll("[email-copy]").forEach(button => {
        button.addEventListener("click", function() {
            const text = "lazswaramandiriummat@gmail.com";

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(text)
                    .then(() => showModal())
                    .catch(err => {
                        console.error("Clipboard Error: ", err);
                        copyToClipboardFallback(text);
                    });
            } else {
                copyToClipboardFallback(text);
            }
        });
    });

    // Carousel Start
    document.addEventListener("DOMContentLoaded", () => {
        function setupCarousel(emblaSelector, prevSelector, nextSelector, dotsContainerSelector) {
            const emblaNode = document.querySelector(emblaSelector);
            const prevButton = document.querySelector(prevSelector);
            const nextButton = document.querySelector(nextSelector);
            const dotsContainer = document.querySelector(dotsContainerSelector);

            if (emblaNode && prevButton && nextButton && dotsContainer) {
                const viewport = emblaNode.querySelector(".embla__viewport");
                const embla = EmblaCarousel(viewport, {
                    loop: true
                });

                // Membuat pagination dots
                const slideCount = embla.slideNodes().length;
                dotsContainer.innerHTML = ""; // Reset dots jika sudah ada
                const dots = [];

                for (let i = 0; i < slideCount; i++) {
                    const dot = document.createElement("button");
                    dot.classList.add("embla-dot");
                    dot.addEventListener("click", () => {
                        embla.scrollTo(i);
                        restartAutoScroll();
                    });
                    dotsContainer.appendChild(dot);
                    dots.push(dot);
                }

                function updateActiveDot() {
                    const selectedIndex = embla.selectedScrollSnap();
                    dots.forEach((dot, index) => {
                        dot.classList.toggle("active", index === selectedIndex);
                    });
                }

                embla.on("select", updateActiveDot);
                updateActiveDot(); // Set dot pertama aktif

                // Event untuk tombol navigasi
                prevButton.addEventListener("click", () => {
                    embla.scrollPrev();
                    restartAutoScroll();
                });

                nextButton.addEventListener("click", () => {
                    embla.scrollNext();
                    restartAutoScroll();
                });

                // Auto-slide tiap 3 detik
                let autoScroll = setInterval(() => embla.scrollNext(), 5000);

                function restartAutoScroll() {
                    clearInterval(autoScroll);
                    autoScroll = setInterval(() => embla.scrollNext(), 5000);
                }

                // Pause auto-slide saat user swipe
                embla.on("pointerDown", () => {
                    clearInterval(autoScroll);
                    setTimeout(restartAutoScroll, 5000);
                });

                // console.log(`Embla initialized for ${emblaSelector}`);
            }
        }

        // Inisialisasi semua carousel
        document.querySelectorAll(".embla").forEach((emblaNode, index) => {
            const carouselNumber = index + 1;
            setupCarousel(
                `.embla-${carouselNumber}`,
                `.prev-btn-${carouselNumber}`,
                `.next-btn-${carouselNumber}`,
                `.dots-container-${carouselNumber}`
            );
        });
    });
    // Carousel End
</script>

<style>
    .embla-dot {
        width: 12px;
        height: 12px;
        background-color: #d1d5db;
        border-radius: 50%;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .embla-dot.active {
        background-color: #0d9488;
        /* Warna teal untuk dot aktif */
    }
</style>
