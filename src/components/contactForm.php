<section class="py-24 p-8 bg-bgPrimary lazy-section opacity-0 duration-300" id="contact">
    <div class="max-w-screen-xl mx-auto flex flex-col">
        <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
            <div class="lg:w-1/2 lg:mx-6">
                <h1 class="text-3xl lg:text-4xl font-bold font-Poppins text-textPrimary">
                    Contattaci
                </h1>

                <p class="max-w-xl font-Poppins text-textPrimary mt-6">
                    Hai domande o vuoi saperne di più su di noi? Scrivici o vieni a trovarci nella nostra sede a Telgate (BG).
                    Siamo qui per ascoltarti e costruire insieme un futuro migliore per chi vive il disagio psichico.
                </p>

                <div class="mt-6 space-y-8 md:mt-8">
                    <p class="flex items-start -mx-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 mx-2 text-textPrimary"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <span class="mx-2 text-textPrimary truncate w-72">
                            Via Arici n°15, Telgate (BG)
                        </span>
                    </p>

                    <p class="flex items-start -mx-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 mx-2 text-textPrimary"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>

                        <span class="mx-2 text-textPrimary truncate w-72">(+39) 3406814016</span>
                    </p>

                    <p class="flex items-start -mx-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 mx-2 text-textPrimary"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="mx-2 text-textPrimary truncate w-72">info@volodelcuculo.it</span>
                    </p>
                </div>
            </div>

            <div class="mt-8 lg:w-1/2 lg:mx-6">
                <div
                    class="w-full px-8 py-10 mx-auto overflow-hidden bg-white shadow rounded-xl dark:bg-gray-900 lg:max-w-xl">
                    <h1 class="text-xl font-medium text-gray-700 dark:text-gray-200">
                        Richiesta informazioni
                    </h1>

                    <form class="mt-4" id="contactForm">
                        <div class="flex-1">
                            <label
                                class="block mb-2 text-sm text-textSecondary">Nome e cognome*</label>
                            <input
                                type="text"
                                name="name"
                                placeholder="Nome e cognome"
                                required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" />
                        </div>

                        <div class="flex-1 mt-6">
                            <label
                                class="block mb-2 text-sm text-textSecondary">Email*</label>
                            <input
                                type="email"
                                name="email"
                                placeholder="Email"
                                required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" />
                        </div>

                        <div class="w-full mt-6">
                            <label
                                class="block mb-2 text-sm text-textSecondary">Message*</label>
                            <textarea
                                name="message"
                                required
                                class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                                placeholder="Messaggio"></textarea>
                        </div>
                        <div id="responseMessage" class="mt-6 p-2 hidden rounded-lg font-Poppins text-textPrimary lg:text-lg"></div>
                        <button
                            id="submitButton"
                            type="submit"
                            class="p-2 mt-6 w-full font-Poppins font-semibold text-lg text-white transition-colors duration-300 bg-bgSecondary rounded-lg shadow hover:bg-bgSecondary/50">
                            Invia
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
