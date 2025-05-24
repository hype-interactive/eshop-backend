<div class="bg-gray-50 min-h-screen">
    <!-- Enhanced Breadcrumb Navigation -->
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-4 py-4">
                @if($this->section_page == 1)
                    <button wire:click="direction({{ $this->section_page }})" 
                            class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-lg font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Vendor List
                    </button>
                @elseif($this->section_page == 2)
                    <button wire:click="direction(1)" 
                            class="inline-flex items-center px-3 py-1 text-blue-600 hover:text-blue-800 hover:bg-blue-50 rounded-lg transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Vendor List
                    </button>
                    <span class="text-gray-400">/</span>
                    <button wire:click="direction({{ $this->section_page }})" 
                            class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-lg font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Vendor Info
                    </button>
                @endif
            </div>
        </div>
    </div>

    @switch($this->section_page)
        @case(1)
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <!-- Header with Action Button -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Vendor Management</h1>
                    <p class="text-gray-600 mt-2">Manage vendor information and view business insights</p>
                </div>
                <button wire:click="viewInventory()" 
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                    </svg>
                    View Inventory
                </button>
            </div>

            <!-- Overview Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Simplified Subscription Card -->
                <div class="bg-white rounded-2xl  border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-white">Active Subscription</h3>
                                <p class="text-green-100 mt-1">Your current plan status</p>
                            </div>
                            <div class="p-3 bg-white bg-opacity-20 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">230,000 TZS</p>
                                <p class="text-sm text-gray-600">Annual Plan</p>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-800 border border-green-200">
                                <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                Active
                            </span>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>Next payment: <strong>Apr 23, 2025</strong></span>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <button class="flex-1 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-medium py-2 px-4 rounded-xl transition-all duration-200">
                                Change Plan
                            </button>
                            <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded-xl transition-all duration-200">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Simplified Transaction Summary -->
                <div class="bg-white rounded-2xl  border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-white">Transaction Summary</h3>
                                <p class="text-blue-100 mt-1">Your financial overview</p>
                            </div>
                            <button class="p-2 bg-white bg-opacity-20 rounded-xl hover:bg-opacity-30 transition-colors duration-200">
                                <!-- <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg> -->
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-green-50 rounded-xl border border-green-200">
                                <div class="flex items-center">
                                    <div class="p-2 bg-green-100 rounded-lg">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-700">Total Sales</p>
                                        <p class="text-xs text-gray-500">July 7-27, 2024</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-bold text-green-600">235,000.00 TZS</p>
                                    <p class="text-xs text-gray-500">20 products</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-red-50 rounded-xl border border-red-200">
                                <div class="flex items-center">
                                    <div class="p-2 bg-red-100 rounded-lg">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-700">Platform Charges</p>
                                        <p class="text-xs text-gray-500">Service fees</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-bold text-red-600">40,000.00 TZS</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-blue-50 rounded-xl border border-blue-200">
                                <div class="flex items-center">
                                    <div class="p-2 bg-blue-100 rounded-lg">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-700">Net Disbursed</p>
                                        <p class="text-xs text-gray-500">Available funds</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-bold text-blue-600">195,000.00 TZS</p>
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 mt-1">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                        </svg>
                                        Pending
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vendor Information Form -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden mb-8">
                <div class="bg-gradient-to-r from-gray-50 to-white px-6 py-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Vendor Information</h3>
                            <p class="text-gray-600 mt-1">Manage your profile details</p>
                        </div>
                        <button wire:click="enableEditing" 
                                class="inline-flex items-center px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-xl transition-colors duration-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                            </svg>
                            Edit Profile
                        </button>
                    </div>
                </div>

                <div class="p-6">
                    @if (session()->has('message'))
                    <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">Success!</p>
                                <p class="text-sm text-green-700">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Form Fields -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                                    <input wire:model="first_name" {{ session('enableEditing') }} type="text" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                    @error('first_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Middle Name</label>
                                    <input wire:model="middle_name" {{ session('enableEditing') }} type="text" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                    @error('middle_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                                    <input wire:model="last_name" {{ session('enableEditing') }} type="text" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                    @error('last_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                    <input wire:model="phone_number" {{ session('enableEditing') }} type="text" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                    @error('phone_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                                <input wire:model="email" {{ session('enableEditing') }} type="email" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Profile Picture -->
                        <div class="flex flex-col items-center">
                            <div class="w-48 h-48 rounded-2xl overflow-hidden bg-gray-100 mb-4 shadow-lg">
                                @if ($this->photo)
                                    <img class="w-full h-full object-cover" src="{{ $photo->temporaryUrl() }}">
                                @elseif ($this->image_url)
                                    <img class="w-full h-full object-cover" src="{{ $this->image_url }}">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-200 to-gray-300">
                                        <svg class="w-20 h-20 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            <label class="cursor-pointer inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl transition-all duration-200">
                                <div wire:loading wire:target="photo" class="flex items-center">
                                    <svg class="animate-spin w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                        <path class="opacity-75" fill="currentColor" d="m4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
                                    </svg>
                                    Uploading...
                                </div>
                                <div wire:loading.remove wire:target="photo" class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                    </svg>
                                    Change Photo
                                </div>
                                <input type="file" {{ session('enableEditing') }} class="hidden" wire:model="photo">
                            </label>
                            @error('photo') <p class="text-red-500 text-xs mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    @if (session('enableEditing') !== 'disabled')
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <button wire:click="update" 
                                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Update Profile
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @break

        @case(2)
        <livewire:inventory.inventory />
        @break

        @default
    @endswitch
</div>