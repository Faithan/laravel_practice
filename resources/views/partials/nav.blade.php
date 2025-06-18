<!-- Navigation -->
<nav class="bg-white dark:bg-gray-900 shadow sticky top-0 z-50 dark:border-b-1 dark:border-gray-800">
    <div class="container mx-auto py-3 px-6 flex justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center space-x-2">
            <img src="{{ asset('system_img/sfilogo.png') }}" class="w-10 h-10" alt="Logo">
            <h1 class="text-2xl font-bold text-green-500 text-shadow-logo text-stroke">SFI</h1>
        </div>

        <!-- Burger Menu Button -->
        <button id="burger-menu" class="lg:hidden text-green-700 focus:outline-none">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>

        <!-- Navigation Links -->
        <ul id="nav-links" class="hidden lg:flex space-x-5 items-center lg:text-sm md:text-xs">
            <li><a href="#" class="nav-links">Home</a></li>
            <li><a href="#" class="nav-links">About</a></li>
            <li><a href="#" class="nav-links">Corporate Governance</a></li>
            <li><a href="#" class="nav-links">Product and Services</a></li>
            <li><a href="#" class="nav-links">Savings</a></li>
            <li><a href="#" class="nav-links">News and Events</a></li>
            <li><a href="#" class="nav-links">Contact</a></li>
            <li><a href="#" class="nav-links">FAQs</a></li>
            <li>
                <button class="nav-links" id="darkModeToggle" onclick="setDarkMode()">
                    <i id="darkModeIcon" class="fa-solid fa-moon"></i>
                </button>
            </li>
            <li>
                <button id="hoverButton"
                    class="flex items-center space-x-2 px-4 py-2 bg-white dark:bg-gray-900 text-green-700 rounded hover:bg-green-800 hover:dark:bg-gray-950 transition duration-300 hover:text-white ">
                    <i id="buttonIcon" class="fa-solid fa-right-to-bracket"></i>
                    <span>Login</span>
                </button>
            </li>
        </ul>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobile-menu" class="hidden flex-col space-y-4 bg-white shadow-md p-4 lg:hidden">
        <li><a href="#" class="nav-links">Home</a></li>
        <li><a href="#" class="nav-links">About</a></li>
        <li><a href="#" class="nav-links">Corporate Governance</a></li>
        <li><a href="#" class="nav-links">Product and Services</a></li>
        <li><a href="#" class="nav-links">Savings</a></li>
        <li><a href="#" class="nav-links">News and Events</a></li>
        <li><a href="#" class="nav-links">Contact</a></li>
        <li><a href="#" class="nav-links">FAQs</a></li>
        <li>
            <button class="nav-links" id="darkModeToggleMobile" onclick="setDarkMode()">
                <i id="darkModeIconMobile" class="fa-solid fa-moon"></i>
        <li>
            <button
                class="flex items-center space-x-2 px-4 py-2 bg-white text-green-700 rounded hover:bg-green-800 transition hover:text-white">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Login</span>
            </button>
        </li>
        <span>Login</span>
        </button>
    </ul>
</nav>


<script>
    // Select the button and icon elements
    const button = document.getElementById('hoverButton');
    const icon = document.getElementById('buttonIcon');

    // Add event listeners for hover
    button.addEventListener('mouseenter', () => {
        icon.classList.remove('fa-right-to-bracket');
        icon.classList.add('fa-person-walking-dashed-line-arrow-right');
    });

    button.addEventListener('mouseleave', () => {
        icon.classList.remove('fa-person-walking-dashed-line-arrow-right');
        icon.classList.add('fa-right-to-bracket');
    });
</script>
<script>
    document.getElementById('burger-menu').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>