<section class="my-24 p-8 max-w-screen-xl mx-auto lazy-section opacity-0 duration-300">
    <div class="">
        <div class="mb-8 md:mb-14 md:items-end lg:mb-16 text-center">
            <div>
                <h2 class="mb-3 text-3xl lg:text-4xl font-bold font-Poppins text-[#2074a3] md:mb-4 lg:mb-6">Dai un'occhiata</h2>
                <p class="max-w-4xl mx-auto text-pretty leading-7 font-Poppins text-xl text-textSecondary">
                    Attraverso le immagini del nostro viaggio, potrai vedere momenti di condivisione, attività di gruppo e piccoli frammenti della nostra quotidianità.
                    Esplora la nostra galleria e lasciati ispirare dalla bellezza della solidarietà.
                </p>
            </div>
        </div>
        <div class="my-10 flex shrink-0 items-center justify-center gap-2">
            <button id="prev-btn"
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#05cab6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left size-5">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg>
            </button>
            <button id="next-btn"
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#05cab6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-right size-5">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="w-full">
        <div class="relative" role="region" aria-roledescription="carousel">
            <div class="overflow-hidden">
                <div id="carousel-container"
                    class="flex transition-transform duration-500"
                    style="transform: translateX(0);">
                </div>
            </div>
        </div>
    </div>
</section>
