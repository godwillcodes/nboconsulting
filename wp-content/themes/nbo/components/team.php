<section class="bg-gray-100 py-16 mt-10 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-8 lg:px-0">

        <!-- Section Title -->
        <div class="border-l-4 border-[#1ca56f] max-w-2xl pl-4" data-aos="fade-up">
            <h1 class="text-[25px] lg:text-[30px] font-extrabold mb-1">
                <span class="text-[#005282]">Meet the</span>
                <span class="text-[#1ca56f]">Team</span>
            </h1>
            <p class="text-gray-600 mt-2 text-[16px]">
                The minds shaping the future of NBO Consulting. A perfect blend of expertise, vision, and passion.
            </p>
        </div>

        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
            <!-- Team Member -->
            <?php for ($i = 0; $i < 4; $i++) { ?>

                <div class="group relative text-center" data-aos="fade-up" data-aos-delay="100">
    <!-- Team Member Image -->
    <img src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?q=80&w=3349&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
        alt="Alex Johnson"
        class="w-full h-80 object-cover rounded-lg transition-transform duration-300 ">
    
    <!-- Always Visible Name -->
    <p class="absolute bottom-0 left-0 right-0 text-white font-black text-[14px] bg-[#1ca56f] py-2 rounded-b-lg">
        Alex Johnson
    </p>

    <!-- Hover Overlay for Role & Description -->
    <div class="absolute inset-0 bg-black/80 rounded-lg flex flex-col items-center justify-center px-4 text-center 
        opacity-0 group-hover:opacity-100 transition-opacity duration-800">
        <p class="text-[#1ca56f] text-sm font-black">Lead Web Asset Manager</p>
        <p class="text-white text-xs mt-2">
            Expert in digital strategy, web optimization, and asset management.
        </p>
    </div>
</div>


            <?php } ?>
            
        </div>
    </div>
</section>