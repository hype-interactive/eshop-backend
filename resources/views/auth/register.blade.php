<x-guest-layout>
    <!-- Logo -->
   
    <!-- Page Title and Description -->
    <div class="text-center mb-2">
        <h1 class="text-2xl font-bold text-gray-900">Vendor Registration</h1>
        <p class="mt-2 text-gray-600">Create your vendor account and start selling on E-Shop</p>
    </div>

    <!-- Alert Messages -->
    @if (session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md animate-fade-in">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-md animate-fade-in">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-red-700">{{ session('error') }}</p>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-md animate-fade-in">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-700">Please fix the following errors:</h3>
                    <ul class="mt-1 text-sm text-red-700 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <!-- Registration Form -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <form method="POST" action="{{ route('register') }}" class="p-4">
            @csrf
            <input type="hidden" name="role" value="vendor">

            <!-- Business Information Section -->
            <div class="space-y-4 mb-6">
                <h3 class="text-base font-medium text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#1C70CD]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4zm3 1h6v4H7V5zm8 8v-4H5v4h10z" clip-rule="evenodd" />
                    </svg>
                    Business Information
                </h3>
                
                <!-- Business Name -->
                <div>
                    <x-label for="name" value="{{ __('Business Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Your business or shop name" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-label for="email" value="{{ __('Email Address') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="your@email.com" />
                </div>

                <!-- Phone Number -->
                <div>
                    <x-label for="phone" value="{{ __('Phone Number') }}" />
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">+255</span>
                        </div>
                        <x-input id="phone" class="block w-full pl-14" type="text" name="phone" :value="old('phone')" required placeholder="712 345 678" />
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Example: 712345678 (without leading zero)</p>
                </div>
            </div>

            <!-- Password Section -->
            <div class="space-y-4 mb-6">
                <h3 class="text-base font-medium text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#1C70CD]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    Create Password
                </h3>
                
                <!-- Password -->
                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Minimum 8 characters" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password" />
                </div>
            </div>

            <!-- Terms and Conditions -->
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-[#1C70CD] hover:text-[#1860A0]">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-[#1C70CD] hover:text-[#1860A0]">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="mt-6">
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-[#1C70CD] hover:bg-[#1860A0] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1C70CD] transition-colors duration-300">
                    Register as Vendor
                </button>
                <p class="mt-3 text-center text-sm text-gray-500">
                    By registering, you'll be prompted to select a subscription plan
                </p>
            </div>
        </form>
        
        <!-- Login Link -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 text-center">
            <p class="text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="font-medium text-[#1C70CD] hover:text-[#1860A0]">
                    Sign in
                </a>
            </p>
        </div>
    </div>

    <!-- Benefits Section - Only visible on smaller screens -->
    <div class="mt-8 bg-[#1C70CD] rounded-xl p-6 text-white md:hidden">
        <h3 class="text-lg font-semibold mb-4">Benefits of becoming a vendor</h3>
        <ul class="space-y-3">
            <li class="flex items-start">
                <svg class="h-5 w-5 text-[#F5AD42] mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2 text-sm">Reach thousands of customers across Tanzania</span>
            </li>
            <li class="flex items-start">
                <svg class="h-5 w-5 text-[#F5AD42] mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2 text-sm">Manage your inventory with our easy dashboard</span>
            </li>
            <li class="flex items-start">
                <svg class="h-5 w-5 text-[#F5AD42] mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2 text-sm">Secure payment processing and reliable support</span>
            </li>
        </ul>
    </div>
</x-guest-layout>