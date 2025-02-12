<section class="bg-gray-100 py-16" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-7xl mx-auto px-6 md:px-8 lg:px-0">

        <!-- Section Title -->
        <div class="border-l-4 border-[#1ca56f] pl-4 max-w-2xl" data-aos="fade-right" data-aos-duration="1000">
            <h1 class="text-[25px] lg:text-[30px] font-extrabold mb-1">
                <span class="text-[#005282]">What We</span>
                <span class="text-[#1ca56f]">Do</span>
            </h1>

            <p class="text-gray-600 mt-2 text-[16px]">
                At NBO Consulting Group, we provide innovative BPO solutions that help businesses succeed globally and
                locally. With a blend of global expertise and local insight in Kenya, we assist companies in optimizing
                operations and achieving sustainable growth through tailored, cost-effective services. Let us drive your
                business forward.
            </p>
        </div>

        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-0 mt-10">
            <?php for ($i = 0; $i < 5; $i++) { ?>

                <div class="relative group text-white p-6 flex flex-col items-center justify-end h-80 sm:h-96"
                    data-aos="zoom-in-up" 
                    data-aos-duration="1000"
                    data-aos-delay="<?php echo $i * 150; ?>"> 

                    <img src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?q=80&w=3349&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                        alt="Background" 
                        class="absolute inset-0 w-full h-full object-cover">
                    
                    <!-- Gradient overlay that tints only the bottom half -->
                    <div class="absolute inset-x-0 bottom-0 h-4/5 bg-gradient-to-t from-black to-transparent opacity-90"></div>

                    <div class="relative z-10 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 sm:w-12 h-10 text-center mx-auto sm:h-12 mb-3 sm:mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>

                        <h3 class="text-[17px]">Global BPO Strategy</h3>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>
