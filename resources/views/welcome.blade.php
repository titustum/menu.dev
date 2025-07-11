<x-layouts.guest>

    <!-- Main Content -->
    <main class="flex-1">
        <!-- Hero Section -->
        <section class="py-12 sm:py-16 lg:py-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Create Your Business Menu in
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                            Seconds
                        </span>
                    </h1>
                    <p class="text-xl sm:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Just enter your business details and get a ready-to-edit menu tailored to your industry.
                    </p>
                </div>

                <!-- Form Card -->
                <div
                    class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl border border-gray-200/50 p-8 sm:p-10 max-w-2xl mx-auto">
                    <form action="{{ route('menus.store') }}" method="POST" class="space-y-6">

                        @csrf

                        <!-- User Email -->
                        <div>
                            <label for="user_email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Your Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="user_email" name="user_email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-gray-900 placeholder-gray-500 bg-white/80 hover:bg-white"
                                placeholder="e.g. john234@gmail.com">
                        </div>

                        <!-- Business Name -->
                        <div>
                            <label for="business_name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Business Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="business_name" name="business_name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-gray-900 placeholder-gray-500 bg-white/80 hover:bg-white"
                                placeholder="e.g. Hilltop Hotel">
                        </div>

                        <!-- Business Category -->
                        <div>
                            <label for="business_category" class="block text-sm font-semibold text-gray-700 mb-2">
                                Business Category <span class="text-red-500">*</span>
                            </label>
                            <select id="business_category" name="business_category" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-gray-900 bg-white/80 hover:bg-white">
                                <option value="" disabled selected>Select your business type</option>
                                @foreach ($business_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Mpesa Details Section -->
                        <div
                            class="bg-gradient-to-r from-green-50 to-blue-50 rounded-xl p-6 border border-green-200/50">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                M-Pesa Payment Details (Optional)
                            </h3>
                            <p class="text-sm text-gray-600 mb-4">Add your M-Pesa details to enable payments directly
                                from your menu</p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Mpesa Paybill/Till Number -->
                                <div>
                                    <label for="mpesa_paybill" class="block text-sm font-medium text-gray-700 mb-2">
                                        Paybill/Till Number
                                    </label>
                                    <input type="text" id="mpesa_paybill" name="mpesa_paybill"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 text-gray-900 placeholder-gray-500 bg-white/80 hover:bg-white"
                                        placeholder="e.g., 174379">
                                </div>

                                <!-- Mpesa Account Number -->
                                <div>
                                    <label for="mpesa_account" class="block text-sm font-medium text-gray-700 mb-2">
                                        Account Number
                                    </label>
                                    <input type="text" id="mpesa_account" name="mpesa_account"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 text-gray-900 placeholder-gray-500 bg-white/80 hover:bg-white"
                                        placeholder="Account number">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:from-blue-700 hover:to-purple-700 focus:ring-4 focus:ring-blue-200 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 active:translate-y-0">
                                Create Menu Now
                            </button>
                        </div>

                        <!-- Required Fields Note -->
                        <div class="text-center pt-2">
                            <p class="text-sm text-gray-500">
                                <span class="text-red-500">*</span> Required fields
                            </p>
                        </div>
                    </form>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-sm text-gray-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Free to start
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        No credit card required
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Ready in under 2 minutes
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layouts.guest>