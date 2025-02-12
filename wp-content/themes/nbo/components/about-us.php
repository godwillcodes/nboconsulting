<section class="bg-white pb-10">
    <div class="max-w-7xl mx-auto px-8 lg:px-0 flex flex-col md:flex-row items-center gap-8">
        
        <!-- Left Content (2/3 width) -->
        <div class="w-full md:w-3/5 flex flex-col items-start" data-aos="fade-right" data-aos-duration="300">
            <div class="border-l-4 border-[#1ca56f] pl-4">
                <h1 class="text-[25px] lg:text-[30px] font-extrabold mb-1">
                    <span class="text-[#005282]">About</span>
                    <span class="text-[#1ca56f]">Us</span>
                </h1>

                <p class="text-gray-600 mt-2 text-[16px]">
                    NBO Consulting Group is a Business Process Outsourcing (BPO) consulting firm headquartered in
                    Nairobi, Kenya.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">

            <?php for ($i = 0; $i < 6; $i++) { ?>

                <!-- Card 1 -->
                <div class="bg-gray-100 p-6 rounded-lg boxed ">
                    <div class="text-[#1ca56f] mb-4">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <h3 class="text-[#1ca56f] text-[16px] font-bold mb-2 text-center">Card Title 1</h3>
                    <p class="text-gray-600 text-[14px] text-start">This is a short description of the card content.</p>
                </div>
                <?php } ?>
                
            </div>
        </div>

        <!-- Right Image (1/3 width) -->
        <div class="w-full md:w-2/5 flex justify-end" data-aos="fade-left" data-aos-duration="400">
            <img src="http://localhost:10057/wp-content/uploads/2025/02/elemements-03.png" alt="Dream Home" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>
</section>
