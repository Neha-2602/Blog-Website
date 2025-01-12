<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-9 text-center">Contact Us</h1>

        <!-- Contact Form -->
        <div class="bg-gray-50 border border-gray-300 rounded-lg shadow-lg p-8">
            <form action="/PRACTICE/contact_submit.php" method="POST" class="space-y-8">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-lg font-semibold text-gray-800 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none sm:text-base bg-white placeholder-gray-400 text-gray-800">
                </div>

                <!-- Phone Number Field -->
                <div>
                    <label for="phone" class="block text-lg font-semibold text-gray-800 mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none sm:text-base bg-white placeholder-gray-400 text-gray-800">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-lg font-semibold text-gray-800 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none sm:text-base bg-white placeholder-gray-400 text-gray-800">
                </div>

                <!-- Query Field -->
                <div>
                    <label for="query" class="block text-lg font-semibold text-gray-800 mb-2">Your Query</label>
                    <textarea id="query" name="query" rows="5" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none sm:text-base bg-white placeholder-gray-400 text-gray-800"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="px-6 py-3 text-base font-semibold text-white bg-blue-500 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Submit Query
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require 'partials/footer.php' ?>