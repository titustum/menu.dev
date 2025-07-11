<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Business Menu in Seconds - Menu.dev</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-md border-b border-gray-200/50 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">M</span>
                        </div>
                        <span class="ml-2 text-xl font-bold text-gray-900">menu.dev</span>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Features</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Pricing</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Support</a>
                    <a href="#"
                        class="bg-gray-900 text-white px-4 py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors duration-200">Sign
                        In</a>
                </nav>
            </div>
        </div>
    </header>


    {{ $slot }}

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">M</span>
                        </div>
                        <span class="ml-2 text-xl font-bold">menu.dev</span>
                    </div>
                    <p class="text-gray-400 mb-4 max-w-md">
                        Create beautiful, professional menus for your business in seconds. Built for modern restaurants,
                        cafés, and service businesses.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Features</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Examples</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Support</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Terms of Service</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 menu.dev. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>