<nav x-data="{ open: false }" class="bg-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto py-7 px-8 lg:px-0 flex items-center justify-end">
        <!-- Desktop Menu -->
        <ul class="hidden lg:flex space-x-8 uppercase font-semibold text-gray-700">
            <li><a href="#" class="hover:text-[#1ca56f] text-[#005282] text-sm transition duration-300">Home</a></li>
            <li><a href="#" class="hover:text-[#1ca56f] text-[#005282] text-sm transition duration-300">About</a></li>
            <li><a href="#" class="hover:text-[#1ca56f] text-[#005282] text-sm transition duration-300">Contact Us</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <button @click="open = !open" class="ml-4 lg:hidden text-gray-700 focus:outline-none relative z-10">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Full-Page Mobile Menu -->
    <div x-show="open" x-cloak x-transition:enter="transition duration-500 ease-out transform" 
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition duration-500 ease-in transform" 
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
        class="fixed inset-0 bg-[#1ca56f] flex items-center text-start justify-center z-50 flex-col space-y-8 text-white text-3xl font-bold uppercase">

        <a href="#" class="hover:text-[#1ca56f] text-lg transition duration-300">Home</a>
        <a href="#" class="hover:text-[#1ca56f] text-lg transition duration-300">About</a>
        <a href="#" class="hover:text-[#1ca56f] text-lg transition duration-300">Services</a>
        <a href="#" class="hover:text-[#1ca56f] text-lg transition duration-300">Contact</a>

        <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            if ($logo) {
                echo '<img class="h-20 w-20 sm:h-20 sm:w-20 md:h-40 md:w-40 lg:h-60 lg:w-60 mx-auto text-center object-contain ml-0 lg:-ml-8" src="' . esc_url($logo[0]) . '" alt="Theme Logo">';
            }
            ?>

        <button @click="open = false" class="absolute top-6 right-8 text-white text-4xl">&times;</button>
    </div>
</nav>
