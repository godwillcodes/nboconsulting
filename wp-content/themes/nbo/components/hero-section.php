<section class="bg-gray-50 py-10 ">
    <div class="max-w-7xl mx-auto px-8 lg:px-0 grid grid-cols-1 md:grid-cols-2 items-center gap-8">
        <!-- Left Content -->
        <div class="flex flex-col items-start" data-aos="fade-right" data-aos-duration="300">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            if ($logo) {
                echo '<img class="h-20 w-20 sm:h-20 sm:w-20 md:h-40 md:w-40 lg:h-48 lg:w-48 object-contain ml-0 lg:-ml-8" src="' . esc_url($logo[0]) . '" alt="Theme Logo">';
            }
            ?>

            <div class="max-w-4xl">
            <h1 class="text-[25px] lg:text-[30px] mt-8 sm:mt-12 font-extrabold text-[#1ca56f] mb-1">
                Unlock the Power
            </h1>
            <h1 class="text-[25px] lg:text-[30px] font-extrabold text-[#005282] mb-4">
                of BPO Solutions in Kenya
            </h1>
            <p class="text-gray-600 mb-6 text-[16px]">
                NBO Consulting Group is a Business Process Outsourcing (BPO) consulting firm headquartered in
                Nairobi, Kenya.
            </p>

            </div>
            <a href="#" class="bg-gradient-to-r from-[#18A06E] to-[#08604E] text-white px-6 py-3 rounded-lg font-semibold shadow-md 
              transition-all duration-300 hover:from-[#08604E] hover:to-[#18A06E]" data-aos="zoom-in"
                data-aos-duration="1000">
                Let's Optimize Your Operations
            </a>

            <a href="#target-section"
                class="mt-10 flex items-center gap-2 text-gray-700 text-lg font-semibold transition-all duration-300 hover:text-[#18A06E]">
                Scroll Down
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 animate-bounce">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </a>
        </div>

        <!-- Right Image -->
        <div class="flex justify-end" data-aos="fade-left" data-aos-duration="400">
            <img src="http://localhost:10057/wp-content/uploads/2025/02/elemements-01.png" alt="Dream Home"
                class="w-full object-cover">
        </div>
    </div>
</section>
