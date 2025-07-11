<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Business Menu</title>
    <!-- Tailwind CSS CDN -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            /* Simple light gradient background */
            background: linear-gradient(to bottom right, #f0f9ff, #e0f2fe);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Custom styles for focus rings and shadows */
        .form-input-field:focus {
            outline: none;
            border-color: #3b82f6;
            /* Blue-500 */
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
            /* Blue-500 with transparency */
        }
    </style>
</head>

<body class="text-gray-800">
    <!-- Header Section -->
    <header class="bg-white shadow-sm py-4 px-6 md:px-12 flex justify-between items-center rounded-b-lg">
        <div class="flex items-center">
            <!-- Logo Placeholder -->
            <a href="#" class="text-2xl font-bold text-blue-600">MenuCraft</a>
        </div>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">Features</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">Pricing</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow container mx-auto px-4 py-8 md:py-16">
        <!-- Hero Section -->
        <section class="text-center mb-12 md:mb-20">
            <h1
                class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-blue-700 leading-tight mb-4 animate-fade-in-down">
                Create Your Business Menu in Seconds
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-8 animate-fade-in-up">
                Just enter your business details and get a ready-to-edit menu tailored to your industry.
            </p>
        </section>

        <!-- Form Section -->
        <section
            class="max-w-xl mx-auto bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-blue-100 animate-scale-in">
            <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-700 mb-8">Get Started</h2>
            <form action="/create-menu" method="POST" class="space-y-6">
                <!-- Business Name -->
                <div>
                    <label for="businessName" class="block text-sm font-medium text-gray-700 mb-1">Business Name <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="businessName" name="businessName" required
                        class="form-input-field w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out"
                        placeholder="e.g., The Grand Hotel">
                    <!-- Example of validation UI (can be toggled with JS) -->
                    <!-- <p class="text-red-500 text-xs mt-1 hidden">Business Name is required.</p> -->
                </div>

                <!-- Business Category -->
                <div>
                    <label for="businessCategory" class="block text-sm font-medium text-gray-700 mb-1">Business Category
                        <span class="text-red-500">*</span></label>
                    <select id="businessCategory" name="businessCategory" required
                        class="form-input-field w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out">
                        <option value="" disabled selected>Select a category</option>
                        <option value="Bar">Bar</option>
                        <option value="Kinyozi">Kinyozi</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Cafe">Café</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Mpesa Paybill/Till Number -->
                <div>
                    <label for="mpesaPaybill" class="block text-sm font-medium text-gray-700 mb-1">Mpesa Paybill/Till
                        Number (Optional)</label>
                    <input type="text" id="mpesaPaybill" name="mpesaPaybill"
                        class="form-input-field w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out"
                        placeholder="e.g., 123456">
                </div>

                <!-- Mpesa Account Number -->
                <div>
                    <label for="mpesaAccount" class="block text-sm font-medium text-gray-700 mb-1">Mpesa Account Number
                        (Optional)</label>
                    <input type="text" id="mpesaAccount" name="mpesaAccount"
                        class="form-input-field w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out"
                        placeholder="e.g., Your Name or Order ID">
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 px-6 rounded-xl font-semibold text-lg shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-75 transition duration-300 ease-in-out transform hover:scale-105 active:scale-95">
                        Create Menu Now
                    </button>
                </div>
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6 px-4 md:px-12 text-center mt-8 rounded-t-lg">
        <p>&copy; 2025 MenuCraft. All rights reserved.</p>
        <div class="flex justify-center space-x-6 mt-3">
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a>
        </div>
    </footer>
</body>

</html>