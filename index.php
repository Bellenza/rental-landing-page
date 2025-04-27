<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SmartRent — Rental Management Made Easy</title>
  <link rel="icon" href="fav_icon.png" type="image/x-icon"> <!-- Favicon -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="main-body">

  <!-- Hero Section -->
  <section class="bg-white min-h-screen flex items-center" id="hero">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Manage Your Rentals Without Stress</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-1200 lg:mb-8 md:text-lg lg:text-xl">Track rent payments, send automatic reminders, and handle tenant issues — all from one simple app.</p>
            <a href="#waitlist" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                Join the Waitlist
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="hero_image.jpg" alt="mockup" class="w-full max-w-md lg:max-w-lg xl:max-w-xl">
        </div>                
    </div>
</section>

  <!-- Pain Points Section -->
  <section class="bg-white dark:bg-gray-900 items-center"> 
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tired of Managing Properties Manually?</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Simplify rent collection, tenant communication, and maintenance — all in one place.</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-2 md:gap-12 md:space-y-0">
            <div>
                <div class="flex justify-center items-center mb-4" style="width: 100px; height: 100px; background-color: white; border-radius: 9999px;">
                    <img src="time.png" class="card-icon mx-auto" alt="Maintenance Issues" style="width: 70px; height: 70px; object-fit: contain;">
                </div>                
                <h3 class="mb-2 text-xl font-bold dark:text-white">Late Payments</h3>
                <p class="text-gray-500 dark:text-gray-400">Chasing tenants for rent every month is exhausting and eats up your valuable time.
                    SmartRent automates reminders and payments, so you can focus on growing your property business.</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4" style="width: 100px; height: 100px; background-color: white; border-radius: 9999px;">
                    <img src="maintenance.png" class="card-icon mx-auto" alt="Maintenance Issues" style="width: 70px; height: 70px; object-fit: contain;">
                </div> 
                <h3 class="mb-2 text-xl font-bold dark:text-white">Maintenance Issues</h3>
                <p class="text-gray-500 dark:text-gray-400">Managing tenant complaints over WhatsApp quickly becomes disorganized and overwhelming.
                    SmartRent gives you a centralized system to track and resolve issues with ease.</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4" style="width: 100px; height: 100px; background-color: white; border-radius: 9999px;">
                    <img src="excel.png" class="card-icon mx-auto" alt="Maintenance Issues" style="width: 70px; height: 70px; object-fit: contain;">
                </div> 
                <h3 class="mb-2 text-xl font-bold dark:text-white">Messy Spreadsheets</h3>
                <p class="text-gray-500 dark:text-gray-400">Relying on Excel for property management is not only prone to errors but also inefficient.
                    Switch to SmartRent for a streamlined, modern solution that eliminates mistakes and saves you time.</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4" style="width: 100px; height: 100px; background-color: white; border-radius: 9999px;">
                    <img src="communication.png" class="card-icon mx-auto" alt="Maintenance Issues" style="width: 70px; height: 70px; object-fit: contain;">
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Poor Communication</h3>
                <p class="text-gray-500 dark:text-gray-400">Juggling tenant communication across emails, calls, and messages can quickly become overwhelming.
                    With SmartRent, keep everything in one place for easier management and fewer missed details.</p>
            </div>
        </div>
    </div>
  </section>



  <!-- Solution Section -->
  <section class="bg-white py-8">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900">SmartRent Solves It All</h2>
            <p class="mb-6 font-light text-gray-1000 md:text-lg">Get automated reminders, instant rent receipts, and simple tenant management in one click.  
                Perfect for landlords managing 1–10 properties.</p>
            <a href="#waitlist"><button type="button" class="px-8 py-3 font-semibold rounded-full dark:bg-gray-800 dark:text-gray-100">Join the Early Access</button></a>
        </div>
    </div>
</section>

  <!-- Waitlist Form -->
  <section class="bg-white dark:bg-gray-900" id="waitlist">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Join the Early Access Waitlist</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Be the first to experience SmartRent’s powerful property management tools.
            Sign up now to get exclusive early access and stay ahead in managing your properties effortlessly.</p>
            <form id="waitlistForm" method="POST" class="space-y-8">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Name</label>
                    <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Your name" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@SmartRent.com" required>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone (Optional)</label>
                    <input type="text" id="phone" name="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="0123456789">
                </div>
                <div>
                    <label for="properties" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">How many properties do you manage?</label>
                    <input type="text" id="properties" name="properties" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Enter the number of properties you manage" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="problem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Biggest problem you face while managing tenants?</label>
                    <textarea id="problem" name="problem" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Describe the biggest challenge you face when managing tenants..."></textarea>
                </div>
                <button type="submit" class="px-8 py-3 font-semibold rounded dark:bg-gray-800 dark:text-gray-100">Join Waitlist</button>
            </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="p-4 bg-white md:p-8 lg:p-10">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="#hero" class="flex justify-center items-center text-2xl font-semibold text-gray-900 py-8">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">SmartRent</h1>    
        </a>
        <span class="text-sm text-gray-500 sm:text-center ">© 2025 <a href="#hero" class="hover:underline">SmartRent™</a>. All Rights Reserved.</span>
    </div>
  </footer>

<!-- Success Popup -->
<div id="info-popup" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full h-full flex justify-center items-center bg-black bg-opacity-50 backdrop-blur-sm">
        <div class="relative p-4 w-full max-w-3xl md:h-auto py-8 bg-white rounded-lg shadow-md">
            <div class="mb-4 text-sm font-light text-gray-900 text-center">
                <h3 class="mb-3 text-2xl font-bold text-gray-900">Thank You for Joining the Waitlist!</h3>
                <p>
                    We are excited to have you on board. You will be the first to know when we launch our property management tools.
                </p>
            </div>
        </div>
</div>

<script>
    $(document).ready(function () {
        // Handle form submission
        $('#waitlistForm').on('submit', function (e) {
            e.preventDefault(); // Prevent form from submitting normally

            // Get form data
            var formData = $(this).serialize();

            // Send data to the PHP file via AJAX
            $.ajax({
                url: 'process_form.php',  // URL to your PHP script
                type: 'POST',  // Method type (POST)
                data: formData,  // Send form data
                success: function (response) {
                    // Optionally reset the form
                    $('#waitlistForm')[0].reset();

                    // Show the modal popup
                    $('#info-popup').removeClass('hidden'); // Show the modal

                    setTimeout(function () {
                        $('#info-popup').addClass('hidden'); // Hide the modal after 5 seconds
                        $('#background-overlay').addClass('hidden'); // Hide the overlay
                    }, 5000); // Timeout after 5000ms (5 seconds)
                },
                error: function () {
                    alert('There was an error with your submission. Please try again.');
                }
            });
        });
    });
</script>




</body>
</html>
