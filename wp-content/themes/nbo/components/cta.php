<section class="max-w-7xl mx-auto bg-[#005282] my-10 p-4 boxed" data-aos="zoom-in" data-aos-duration="300">
  <div class="flex flex-col md:flex-row items-center gap-6">
    <!-- Left Image -->
    <div class="w-32 md:w-40 lg:w-48">
      <img src="http://localhost:10057/wp-content/uploads/2025/02/elemements-02.png" alt="Documents Illustration" class="w-full" />
    </div>

    <!-- Signup Form -->
    <div class="flex flex-col md:flex-1 text-center md:text-left">
      <h2 class="text-white font-bold text-[25px] text-center">
        Start Scaling Your Operations with NBO Consulting Group
      </h2>
      <form id="forminator-signup-form" class="mt-6 flex flex-col md:flex-row gap-8 lg:gap-4">
        <input type="text" id="first_name" name="first_name" placeholder="First name" class="flex-1 px-4 py-3 rounded-lg text-gray-700 bg-white outline-none" required />
        <input type="tel" id="last_name" name="last_name" placeholder="Phone Number" class="flex-1 px-4 py-3 rounded-lg text-gray-700 bg-white outline-none" required />
        <input type="email" id="email" name="email" placeholder="Email Address" class="flex-1 px-4 py-3 rounded-lg text-gray-700 bg-white outline-none" required />
        
        <!-- Honeypot Field (Hidden) -->
        <input type="text" name="honeypot" id="honeypot" style="display:none;" autocomplete="off" />
        
        <!-- Security Nonce -->
        <input type="hidden" id="forminator_nonce" name="forminator_nonce" value="<?php echo wp_create_nonce('forminator_signup'); ?>" />
        
        <button type="submit" id="submit-button" class="bg-gradient-to-r from-[#18A06E] to-[#08604E] text-white px-6 py-3 rounded-lg font-semibold shadow-md transition-all duration-300 hover:from-[#08604E] hover:to-[#18A06E] flex items-center">
          <span id="button-text">SIGN UP</span>
          <svg id="spinner" class="hidden animate-spin ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 01-8 8z"></path>
          </svg>
        </button>
      </form>
      <p id="form-message" class="text-white mt-4 text-center"></p>
    </div>
  </div>
</section>

<script>
document.getElementById("forminator-signup-form").addEventListener("submit", async function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    formData.append("action", "submit_forminator_entry");

    // Spam Protection Check (Honeypot)
    if (document.getElementById("honeypot").value) {
        return;
    }

    let submitButton = document.getElementById("submit-button");
    let buttonText = document.getElementById("button-text");
    let spinner = document.getElementById("spinner");
    let messageElem = document.getElementById("form-message");

    // Show loading spinner
    buttonText.style.display = "none";
    spinner.classList.remove("hidden");

    try {
        let response = await fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
            method: "POST",
            body: formData
        });
        let result = await response.json();

        if (result.success) {
            messageElem.textContent = "✅ Signup successful! One of our agents will be in touch shortly.";
            messageElem.classList.add("text-green-400");
        } else {
            messageElem.textContent = "❌ Error: " + result.data.message;
            messageElem.classList.add("text-red-400");
        }
    } catch (error) {
        messageElem.textContent = "❌ Something went wrong. Please try again.";
        messageElem.classList.add("text-red-400");
    } finally {
        // Hide loading spinner
        buttonText.style.display = "block";
        spinner.classList.add("hidden");
    }
});
</script>