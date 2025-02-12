<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NBOConsultingGroup
 */

?>

<footer class="bg-gradient-to-r from-[#18A06E] to-[#08604E] text-white pt-16 pb-4">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">
        
        <!-- Logo Column -->
        <div>
            <img src="logo.png" alt="Company Logo" class="w-32 mb-3">
            <p class="text-gray-200 text-[16px]">Your trusted partner in consulting.</p>
        </div>

        <!-- Column 2 -->
        <div>
            <h3 class="font-semibold text-lg mb-3">Company</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline text-[14px]">About Us</a></li>
                <li><a href="#" class="hover:underline">Our Services</a></li>
                <li><a href="#" class="hover:underline">Careers</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div>
            <h3 class="font-semibold text-lg mb-3">Resources</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline text-[14px]">Blog</a></li>
                <li><a href="#" class="hover:underline">Case Studies</a></li>
                <li><a href="#" class="hover:underline">FAQs</a></li>
                <li><a href="#" class="hover:underline">Support</a></li>
            </ul>
        </div>

        <!-- Column 4 -->
        <div>
            <h3 class="font-semibold text-lg mb-3">Legal</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline text-[14px]">Privacy Policy</a></li>
                <li><a href="#" class="hover:underline">Terms of Service</a></li>
                <li><a href="#" class="hover:underline">Cookie Policy</a></li>
                <li><a href="#" class="hover:underline">Disclaimer</a></li>
            </ul>
        </div>
        
    </div>

    <!-- Bottom Section -->
    <p class="border-t max-w-7xl mx-auto border-white/10 mt-6 pt-4 mt-4 text-center text-[14px]">
        &copy; 2024 NBO Consulting Group. All rights reserved.
    </p>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>
</body>

</html>