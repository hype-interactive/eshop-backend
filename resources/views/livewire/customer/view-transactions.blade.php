<div class="bg-gray-50 min-h-screen">
    <!-- Enhanced Header Section -->
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between py-6">
                <div class="mb-4 lg:mb-0">
                    <h1 class="text-3xl font-bold text-gray-900">Customer Orders</h1>
                    <p class="text-gray-600 mt-2">Manage and track all customer orders efficiently</p>
                </div>
                
                <!-- Search and Actions -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text" 
                               class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-50 focus:bg-white transition-all duration-200" 
                               placeholder="Search orders by ID or amount...">
                    </div>
                    
                    <button class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-yellow-600 hover:from-blue-700 hover:to-yellow-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                        </svg>
                        Export Orders
                    </button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col xl:flex-row gap-6">
            <!-- Main Content -->
            <div class="flex-1 xl:w-3/4">
                <!-- Customer Information Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden mb-6">
                    <div class="bg-gradient-to-r from-indigo-500 to-yellow-600 px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-xl font-bold text-white">Customer Information</h2>
                                <p class="text-indigo-100 mt-1">Personal details and contact information</p>
                            </div>
                            <div class="p-3 bg-white bg-opacity-20 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Full Name</p>
                                    <p class="text-lg font-semibold text-gray-900">{{ $customers->full_name }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Email Address</p>
                                    <p class="text-lg font-semibold text-gray-900">{{ $customers->email }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Phone Number</p>
                                    <p class="text-lg font-semibold text-gray-900">{{ $customers->phone }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Location</p>
                                    <p class="text-lg font-semibold text-gray-900">{{ $customers->location }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Table -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-white">Order History</h3>
                                <p class="text-blue-100 mt-1">Complete list of customer orders</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white bg-opacity-20 text-white">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                    </svg>
                                    {{ count($customer_order) }} Orders
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                                            </svg>
                                            <span>ID</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                            </svg>
                                            <span>Order ID</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                            </svg>
                                            <span>Total Amount</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                            </svg>
                                            <span>Payment Type</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            <span>Date</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span>Status</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($customer_order as $order)
                                <tr wire:click="viewCustomerOrders({{ $order->id }})" 
                                    class="hover:bg-blue-50 cursor-pointer transition-colors duration-200 group">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="p-2 bg-gray-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-200">
                                                <span class="text-sm font-bold text-gray-700">#{{ $order->id }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="p-2 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-200">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <div class="text-sm font-semibold text-gray-900">{{ $order->order_id }}</div>
                                                <div class="text-xs text-gray-500">Order Reference</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-lg font-bold text-green-600">
                                            {{ number_format($order->total, 2) }} <span class="text-sm font-medium text-gray-500">TZS</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="p-2 bg-yellow-100 rounded-lg group-hover:bg-yellow-200 transition-colors duration-200">
                                                <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <div class="text-sm font-medium text-gray-900">{{ ucfirst($order->payment_method) }}</div>
                                                <div class="text-xs text-gray-500">Payment Method</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="p-2 bg-orange-100 rounded-lg group-hover:bg-orange-200 transition-colors duration-200">
                                                <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <div class="text-sm font-medium text-gray-900">{{ $order->updated_at->format('M d, Y') }}</div>
                                                <div class="text-xs text-gray-500">{{ $order->updated_at->format('H:i A') }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if(strtolower($order->payment_status) == 'completed' || strtolower($order->payment_status) == 'paid')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800 border border-green-200">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                {{ ucfirst($order->payment_status) }}
                                            </span>
                                        @elseif(strtolower($order->payment_status) == 'pending')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800 border border-yellow-200">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                                </svg>
                                                {{ ucfirst($order->payment_status) }}
                                            </span>
                                        @elseif(strtolower($order->payment_status) == 'cancelled' || strtolower($order->payment_status) == 'failed')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800 border border-yellow-200">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                </svg>
                                                {{ ucfirst($order->payment_status) }}
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800 border border-blue-200">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                                </svg>
                                                {{ ucfirst($order->payment_status) }}
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Enhanced Filter Sidebar -->
            <div class="w-full xl:w-1/3">
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden sticky top-4">
                    <div class="bg-gradient-to-r from-yellow-600 to-pink-600 px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-white bg-opacity-20 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.207A1 1 0 013 6.5V4z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Filter Orders</h3>
                                <p class="text-yellow-100 text-sm">Refine your search results</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 space-y-6">
                        <!-- Date Range -->
                        <div class="space-y-4">
                            <h4 class="text-sm font-semibold text-gray-700 uppercase tracking-wide flex items-center">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Date Range
                            </h4>
                            
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Start Date</label>
                                    <div class="relative">
                                        <input wire:model="start_date" type="date" 
                                               class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                        <svg class="absolute left-3 top-3.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">End Date</label>
                                    <div class="relative">
                                        <input wire:model="end_date" type="date" 
                                               class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                        <svg class="absolute left-3 top-3.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Amount Filter -->
                        <div>
                            <h4 class="text-sm font-semibold text-gray-700 uppercase tracking-wide flex items-center mb-4">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                </svg>
                                Amount Filter
                            </h4>
                            <div class="relative">
                                <input wire:model="amount" type="number" placeholder="Enter minimum amount (TZS)"
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-all duration-200 bg-gray-50 focus:bg-white">
                                <svg class="absolute left-3 top-3.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="pt-4 space-y-3">
                            <button wire:click="search()" 
                                    class="w-full bg-gradient-to-r from-yellow-600 to-pink-600 hover:from-yellow-700 hover:to-pink-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <span>Apply Filters</span>
                            </button>
                            
                            <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 px-6 rounded-xl transition-all duration-200 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                                <span>Reset Filters</span>
                            </button>
                        </div>

                        <!-- Quick Stats -->
                        <div class="pt-4 border-t border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-700 uppercase tracking-wide mb-4">Quick Stats</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                        <span class="text-sm font-medium text-gray-700">Total Orders</span>
                                    </div>
                                    <span class="text-sm font-bold text-green-600">{{ count($customer_order) }}</span>
                                </div>
                                
                                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                                        <span class="text-sm font-medium text-gray-700">Total Value</span>
                                    </div>
                                    <span class="text-sm font-bold text-blue-600">
                                        {{ number_format($customer_order->sum('total'), 2) }} TZS
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>