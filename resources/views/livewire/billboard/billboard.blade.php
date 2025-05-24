<div class="min-h-screen bg-gray-50">

    {{-- Preview Modal --}}
    @if($this->priview)
    <div class="fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-75 flex items-center justify-center p-4">
        <div class="relative w-full max-w-7xl mx-auto">
            {{-- Enhanced Billboard Preview --}}
            <div class="relative isolate overflow-hidden bg-gray-900 rounded-2xl shadow-2xl">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>

                <!-- Background Image -->
                <img src="{{$this->image}}" alt="Billboard Background"
    class="absolute inset-0 h-full w-full object-cover">


                <!-- Close Button -->
                <button wire:click="$toggle('priview')" type="button" 
                    class="absolute top-6 right-6 z-20 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all duration-200 backdrop-blur-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Content -->
                <div class="relative z-10 px-8 py-16 sm:px-16 sm:py-24 lg:px-24 lg:py-32">
                    <div class="max-w-4xl">
                        <div class="inline-flex items-center px-4 py-2 bg-yellow-500/90 text-black font-bold text-sm rounded-full mb-8 backdrop-blur-sm">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                            </svg>
                            UP TO 30% OFF TODAY
                        </div>
                        
                        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                            {{ $this->title }}
                        </h1>
                        
                        <p class="text-xl text-gray-200 mb-10 max-w-2xl leading-relaxed">
                            {{ $this->content }}
                        </p>
                        
                        <div class="flex flex-wrap gap-4">
                            <button type="button"
                                class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-4 px-8 rounded-xl transition-all duration-200 transform hover:scale-105 shadow-xl">
                                Shop Now
                            </button>
                            <button type="button"
                                class="bg-white/10 hover:bg-white/20 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-200 backdrop-blur-sm border border-white/20">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- Status Change Modal --}}
    @if($this->delete_modal_boo)
    <div class="fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="relative w-full max-w-md mx-auto">
            <div class="relative bg-white rounded-2xl shadow-2xl">
                {{-- Header --}}
                <div class="flex justify-between items-center p-6 border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">Update Billboard Status</h3>
                    <button wire:click="$toggle('delete_modal_boo')" type="button"
                        class="text-gray-400 hover:bg-gray-100 hover:text-gray-900 rounded-lg p-2 transition-colors duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                {{-- Content --}}
                <div class="p-6">
                    {{-- Success Message --}}
                    @if (session()->has('message'))
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-green-800">Success!</p>
                                    <p class="text-sm text-green-600">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="mb-6">
                        <label for="status-select" class="block text-sm font-medium text-gray-700 mb-3">
                            Select Status
                        </label>
                        <select wire:model="status" id="status-select" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                            <option value="">Choose a status</option>
                            <option value="inactive">Inactive</option>
                            <option value="active">Active</option>
                        </select>
                        @error('status')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 mb-6">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="text-sm font-medium text-amber-800">Important Notice</p>
                                <p class="text-sm text-amber-700">Setting status to inactive will hide this billboard from the public dashboard.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button wire:click="blockBillboard()" 
                            class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-105">
                            Update Status
                        </button>
                        <button wire:click="$toggle('delete_modal_boo')" 
                            class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 px-4 rounded-lg transition-colors duration-200">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- Create Modal --}}
    @if ($this->enableRegisterModalboolean)
    <div class="fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="relative w-full max-w-4xl mx-auto">
            <div class="relative bg-white rounded-2xl shadow-2xl max-h-[90vh] overflow-y-auto">
                {{-- Header --}}
                <div class="sticky top-0 bg-white rounded-t-2xl border-b border-gray-200 px-6 py-4 z-10">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-900">Create New Billboard</h2>
                            <p class="text-gray-600 text-sm mt-1">Design and configure your billboard content</p>
                        </div>
                        <button wire:click="$toggle('enableRegisterModalboolean')" type="button"
                            class="text-gray-400 hover:bg-gray-100 hover:text-gray-900 rounded-lg p-2 transition-colors duration-200">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        {{-- Left Column - Form Fields --}}
                        <div class="space-y-6">
                            <div>
                                <label for="billboard-name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Billboard Name
                                </label>
                                <input wire:model="name" type="text" id="billboard-name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                                    placeholder="e.g., Summer Sale 2024">
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="billboard-description" class="block text-sm font-medium text-gray-700 mb-2">
                                    Description
                                </label>
                                <textarea wire:model="description" id="billboard-description" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 resize-none"
                                    placeholder="Describe your billboard content and promotional message..."></textarea>
                                @error('description')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center p-4 bg-blue-50 rounded-lg">
                                <input wire:model="visibility" id="visibility-checkbox" type="checkbox" 
                                    class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="visibility-checkbox" class="ml-3 text-sm font-medium text-gray-900">
                                    Make this billboard visible to customers
                                </label>
                                @error('visibility')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Right Column - Image Upload --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Billboard Image
                            </label>
                            <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-gray-400 transition-colors duration-200">
                                <div class="space-y-4">
                                    <div class="mx-auto h-16 w-16 text-gray-400">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <label for="image-upload" class="cursor-pointer">
                                            <span class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 inline-block">
                                                Choose Image
                                            </span>
                                            <input wire:model="image" id="image-upload" type="file" class="hidden" accept="image/*">
                                        </label>
                                        <p class="text-sm text-gray-600 mt-2">PNG, JPG up to 2MB</p>
                                    </div>
                                </div>
                                @error('image')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="flex justify-end mt-8 pt-6 border-t border-gray-200">
                        <div class="flex gap-3">
                            <button wire:click="$toggle('enableRegisterModalboolean')" type="button"
                                class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-200">
                                Cancel
                            </button>
                            <button wire:click="create()" type="button"
                                class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                Create Billboard
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- Main Content --}}
    <div class="p-6">
        {{-- Page Header --}}
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Billboard Management</h1>
            <p class="text-gray-600 mt-2">Manage your promotional billboards and marketing content</p>
        </div>

        {{-- Stats Overview --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm">Total Billboards</p>
                        <p class="text-2xl font-bold">{{ count($this->billboards) + count($this->billboard2) }}</p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm">Active</p>
                        <p class="text-2xl font-bold">{{ count($this->billboards) }}</p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-yellow-100 text-sm">Inactive</p>
                        <p class="text-2xl font-bold">{{ count($this->billboard2) }}</p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>

          
        </div>

        {{-- Kanban Board --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {{-- Active Billboards Column --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="bg-green-50 px-6 py-4 border-b border-green-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-green-500 w-3 h-3 rounded-full mr-3"></div>
                            <h3 class="text-lg font-semibold text-green-800">Active Billboards</h3>
                            <span class="ml-3 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ count($this->billboards) }}</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 space-y-4 max-h-96 overflow-y-auto">
                    @forelse ($this->billboards as $billboard)
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-all duration-200 transform hover:-translate-y-1">
                        {{-- Card Header --}}
                        <div class="flex justify-between items-start mb-4">
                            <h4 class="text-lg font-semibold text-gray-900 truncate flex-1 mr-3">{{ $billboard->name }}</h4>
                            <button wire:click="disableBillboard({{$billboard->id }})" 
                                class="text-gray-400 hover:text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition-colors duration-200" 
                                title="Change status">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                            </button>
                        </div>

                        {{-- Image --}}
                        <div class="mb-4 rounded-lg overflow-hidden">
                            <img class="w-full h-32 object-cover"
                                src="@if($billboard->image_url){{ $billboard->image_url }}@else https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80 @endif"
                                alt="{{ $billboard->name }}">
                        </div>

                        {{-- Description --}}
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $billboard->description }}</p>

                        {{-- Actions --}}
                        <div class="flex justify-between items-center">
                            <button wire:click="delete({{ $billboard->id }})" 
                                class="text-red-500 hover:text-red-700 hover:bg-red-50 p-2 rounded-lg transition-colors duration-200"
                                title="Delete billboard">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>

                            <button wire:click="priviewBillboard({{$billboard->id }})"
                                class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white text-xs font-medium px-4 py-2 rounded-lg transition-all duration-200 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                Preview
                            </button>
                        </div>

                        {{-- Timestamp --}}
                        <div class="mt-3 pt-3 border-t border-gray-100">
                            <p class="text-xs text-gray-500">Created {{ $billboard->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-8">
                        <div class="w-16 h-16 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-500 font-medium">No Active Billboards</p>
                        <p class="text-gray-400 text-sm">Create your first active billboard to get started</p>
                    </div>
                    @endforelse

                    {{-- Add New Button --}}
                    <button wire:click="registerModal()" type="button"
                        class="w-full border-2 border-dashed border-gray-300 rounded-xl p-4 text-gray-500 hover:border-gray-400 hover:text-gray-600 transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Add New Billboard
                    </button>
                </div>
            </div>

            {{-- Inactive Billboards Column --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="bg-yellow-50 px-6 py-4 border-b border-yellow-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-yellow-500 w-3 h-3 rounded-full mr-3"></div>
                            <h3 class="text-lg font-semibold text-yellow-800">Inactive Billboards</h3>
                            <span class="ml-3 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ count($this->billboard2) }}</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 space-y-4 max-h-96 overflow-y-auto">
                    @forelse ($this->billboard2 as $billboard)
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 hover:shadow-md transition-all duration-200 opacity-75">
                        {{-- Card Header --}}
                        <div class="flex justify-between items-start mb-4">
                            <h4 class="text-lg font-semibold text-gray-700 truncate flex-1 mr-3">{{ $billboard->name }}</h4>
                            <button wire:click="disableBillboard({{$billboard->id }})" 
                                class="text-gray-400 hover:text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition-colors duration-200" 
                                title="Change status">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                            </button>
                        </div>

                        {{-- Image --}}
                        <div class="mb-4 rounded-lg overflow-hidden relative">
                            <img class="w-full h-32 object-cover filter grayscale"
                                src="@if($billboard->image_url){{ $billboard->image_url }}@else https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80 @endif"
                                alt="{{ $billboard->name }}">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <span class="bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full">INACTIVE</span>
                            </div>
                        </div>

                        {{-- Description --}}
                        <p class="text-sm text-gray-500 mb-4 line-clamp-2">{{ $billboard->description }}</p>

                        {{-- Actions --}}
                        <div class="flex justify-between items-center">
                            <button wire:click="delete({{ $billboard->id }})" 
                                class="text-red-500 hover:text-red-700 hover:bg-red-50 p-2 rounded-lg transition-colors duration-200"
                                title="Delete billboard">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>

                            <button wire:click="priviewBillboard({{$billboard->id }})"
                                class="bg-gray-400 hover:bg-gray-500 text-white text-xs font-medium px-4 py-2 rounded-lg transition-all duration-200 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                Preview
                            </button>
                        </div>

                        {{-- Timestamp --}}
                        <div class="mt-3 pt-3 border-t border-gray-100">
                            <p class="text-xs text-gray-400">Created {{ $billboard->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-8">
                        <div class="w-16 h-16 mx-auto bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-500 font-medium">No Inactive Billboards</p>
                        <p class="text-gray-400 text-sm">Deactivated billboards will appear here</p>
                    </div>
                    @endforelse

                    {{-- Placeholder Add Button --}}
                    <div class="w-full border-2 border-dashed border-gray-200 rounded-xl p-4 text-gray-400 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Inactive billboards storage
                    </div>
                </div>
            </div>
        </div>

        {{-- Quick Actions Panel --}}
       
    </div>
</div>