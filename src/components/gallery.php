<section class="py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="mb-8 flex flex-col justify-between md:mb-14 md:flex-row md:items-end lg:mb-16">
            <h2 class="mb-3 text-3xl lg:text-4xl font-bold font-Poppins text-[#2074a3] text-center md:mb-4 lg:mb-6">Dai un'occhiata</h2>
            <div class="mt-8 flex shrink-0 items-center justify-center gap-2">
                <button id="prev-btn"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left size-5">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                </button>
                <button id="next-btn"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-right size-5">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="relative" role="region" aria-roledescription="carousel">
            <div class="overflow-hidden">
                <div id="carousel-container"
                    class="flex transition-transform duration-500"
                    style="transform: translateX(0);">
                    <div role="group" aria-roledescription="slide"
                        class="min-w-0 shrink-0 grow-0 basis-full pl-[20px] md:max-w-[452px]">
                        <div>
                            <div class="flex aspect-[3/2] text-clip rounded-xl">
                                <div class="flex-1">
                                    <div class="relative size-full origin-bottom transition duration-300 group-hover:scale-105">
                                        <img src="../src/assets/imgs/volo-del-cuculo-3.jpg"
                                            alt="Duis sem sem, gravida vel porttitor eu, volutpat ut arcu"
                                            class="size-full object-cover object-center" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="group" aria-roledescription="slide"
                        class="min-w-0 shrink-0 grow-0 basis-full pl-[20px] md:max-w-[452px]">
                        <div>
                            <div class="flex aspect-[3/2] text-clip rounded-xl">
                                <div class="flex-1">
                                    <div class="relative size-full origin-bottom transition duration-300 group-hover:scale-105">
                                        <img src="../src/assets/imgs/volo-del-cuculo-3.jpg"
                                            alt="Duis sem sem, gravida vel porttitor eu, volutpat ut arcu"
                                            class="size-full object-cover object-center" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="group" aria-roledescription="slide"
                        class="min-w-0 shrink-0 grow-0 basis-full pl-[20px] md:max-w-[452px]">
                        <div>
                            <div class="flex aspect-[3/2] text-clip rounded-xl">
                                <div class="flex-1">
                                    <div class="relative size-full origin-bottom transition duration-300 group-hover:scale-105">
                                        <img src="../src/assets/imgs/volo-del-cuculo-3.jpg"
                                            alt="Duis sem sem, gravida vel porttitor eu, volutpat ut arcu"
                                            class="size-full object-cover object-center" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const carouselContainer = document.getElementById('carousel-container');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    let currentIndex = 0;

    // Funzione per aggiornare la posizione del carousel
    function updateCarousel() {
        const slideWidth = carouselContainer.children[0].offsetWidth + 20; // Aggiungere margine
        carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    // Event listener per il pulsante "precedente"
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    // Event listener per il pulsante "successivo"
    nextBtn.addEventListener('click', () => {
        if (currentIndex < carouselContainer.children.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });
</script>
