<header
    class="flex flex-col px-4 py-4 text-blue-900 md:flex-row md:items-center md:justify-center fixed top-0 left-0 z-10 bg-white w-full">
    <input type="checkbox" class="peer hidden" id="navbar-open" />
    <label
        class="absolute top-5 right-7 cursor-pointer md:hidden"
        for="navbar-open">
        <span class="sr-only">Toggle Navigation</span>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </label>
    <nav
        aria-label="Header Navigation"
        class="peer-checked:mt-8 peer-checked:max-h-56 flex max-h-0 w-full flex-col items-center justify-between overflow-hidden transition-all md:ml-24 md:max-h-full md:flex-row md:items-start">
        <ul
            class="flex flex-col items-center space-y-2 md:flex-row md:mx-auto md:space-y-0">
            <li class="font-bold md:mr-12"><a href="#">Pricing</a></li>
            <li class="md:mr-12"><a href="#">Features</a></li>
            <li class="md:mr-12"><a href="#">Support</a></li>
            <li class="md:mr-12">
                <button
                    class="rounded-full border-2 border-blue-900 px-6 py-1 text-blue-900 transition-colors hover:bg-blue-900 hover:text-white">
                    Diventa volontario
                </button>
                <button
                    class="rounded-full border-2 border-blue-900 px-6 py-1 text-blue-900 transition-colors hover:bg-blue-900 hover:text-white">
                    Fai una donazione
                </button>
            </li>
        </ul>
    </nav>
</header>
