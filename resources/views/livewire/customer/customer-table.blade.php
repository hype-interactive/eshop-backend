<div class="overflow-x-auto">
    <div class="inline-block min-w-full align-middle">
        <div class="overflow-hidden border border-gray-200 shadow-sm rounded-xl">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <!-- Date Column -->
                        <th scope="col" class="px-6 py-4 text-left">
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" 
                                       class="h-4 w-4 border-gray-300 rounded transition-colors focus:ring-2"
                                       style="color: #305AA3; focus:ring-color: #305AA3;">
                                <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Join Date</span>
                            </div>
                        </th>

                        <!-- Customer Info Column -->
                        <th scope="col" class="px-6 py-4 text-left">
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Customer Information</span>
                        </th>

                        <!-- Status Column -->
                        <th scope="col" class="px-6 py-4 text-left">
                            <button class="flex items-center space-x-2 text-xs font-medium text-gray-500 uppercase tracking-wider hover:text-gray-700 transition-colors">
                                <span>Status</span>
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
                                </svg>
                            </button>
                        </th>

                        <!-- Role Column -->
                        <th scope="col" class="px-6 py-4 text-left">
                            <button class="flex items-center space-x-2 text-xs font-medium text-gray-500 uppercase tracking-wider hover:text-gray-700 transition-colors">
                                <span>Role</span>
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
                                </svg>
                            </button>
                        </th>

                        <!-- Orders Statistics -->
                        <th scope="col" class="px-6 py-4 text-left">
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Pending Orders</span>
                        </th>

                        <th scope="col" class="px-6 py-4 text-left">
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Completed Orders</span>
                        </th>

                        <th scope="col" class="px-6 py-4 text-left">
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Total Orders</span>
                        </th>

                        <!-- Actions Column -->
                        <!-- <th scope="col" class="relative px-6 py-4">
                            <span class="sr-only">Actions</span>
                        </th> -->
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($customers as $customer)
                    <tr class="cursor-pointer hover:bg-gray-50 transition-colors duration-200 group" 
                        wire:click="viewCustomerTransactions({{ $customer->id }})">
                        
                        <!-- Join Date -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" 
                                       class="h-4 w-4 border-gray-300 rounded transition-colors"
                                       style="color: #305AA3;"
                                       onclick="event.stopPropagation();">
                                <div class="text-sm text-gray-900 font-medium">
                                    {{ $customer->created_at->format('M d, Y') }}
                                </div>
                            </div>
                        </td>

                        <!-- Customer Information -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center space-x-4">
                                <div class="h-12 w-12 flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full object-cover border-2 border-gray-100 group-hover:border-blue-200 transition-colors" 
                                         src="{{ asset('/profile/customer-profile.png') }}" 
                                         alt="{{ $customer->full_name }}">
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900 group-hover:text-blue-700 transition-colors">
                                        {{ $customer->full_name }}
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        {{ $customer->phone }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <!-- Status -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></span>
                                Active
                            </span>
                        </td>

                        <!-- Role -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium text-white"
                                  style="background-color: #305AA3;">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Customer
                            </span>
                        </td>

                        <!-- Pending Orders -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                @php
                                    $pendingCount = DB::table('orders')->where('customer_id', $customer->id)->where('status', 'pending')->count();
                                @endphp
                                <span class="text-sm font-medium text-gray-900">{{ $pendingCount }}</span>
                                @if($pendingCount > 0)
                                <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Pending
                                </span>
                                @endif
                            </div>
                        </td>

                        <!-- Completed Orders -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                @php
                                    $completedCount = DB::table('orders')->where('customer_id', $customer->id)->where('status', 'completed')->count();
                                @endphp
                                <span class="text-sm font-medium text-gray-900">{{ $completedCount }}</span>
                                @if($completedCount > 0)
                                <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Done
                                </span>
                                @endif
                            </div>
                        </td>

                        <!-- Total Orders -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            @php
                                $totalCount = DB::table('orders')->where('customer_id', $customer->id)->count();
                            @endphp
                            <div class="flex items-center">
                                <span class="text-sm font-semibold text-gray-900">{{ $totalCount }}</span>
                                <div class="ml-2 flex-1 bg-gray-100 rounded-full h-2 max-w-16">
                                    @if($totalCount > 0)
                                    <div class="h-2 rounded-full transition-all duration-300"
                                         style="background-color: #305AA3; width: {{ min(($completedCount / max($totalCount, 1)) * 100, 100) }}%"></div>
                                    @endif
                                </div>
                            </div>
                        </td>

                        <!-- Actions -->
                        <!-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex items-center justify-end space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button onclick="event.stopPropagation();" 
                                        class="inline-flex items-center p-2 text-gray-400 hover:bg-blue-50 rounded-lg transition-colors"
                                        style="hover:color: #305AA3;"
                                        title="View Details">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                                
                                <button onclick="event.stopPropagation();" 
                                        class="inline-flex items-center p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded-lg transition-colors"
                                        title="Contact Customer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </button>

                                <button onclick="event.stopPropagation();" 
                                        class="inline-flex items-center p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors"
                                        title="Edit Customer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </button>
                            </div>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Section -->
        <div class="bg-white px-6 py-4 border-t border-gray-200">
            <div class="flex flex-col sm:flex-row items-center justify-between space-y-3 sm:space-y-0">
                <!-- Left side - Results info -->
                <div class="flex items-center text-sm text-gray-700">
                    <span>Showing</span>
                    <select class="mx-2 px-2 py-1 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-1 transition-colors"
                            style="focus:ring-color: #305AA3; focus:border-color: #305AA3;">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>of <strong>{{ count($customers) }}</strong> customers</span>
                </div>

                <!-- Center - Page navigation -->
                <div class="flex items-center space-x-1">
                    <!-- Previous Button -->
                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Previous
                    </button>

                    <!-- Page Numbers -->
                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-white border border-gray-300 transition-colors"
                            style="background-color: #305AA3; border-color: #305AA3;">
                        1
                    </button>
                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 transition-colors">
                        2
                    </button>
                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 transition-colors">
                        3
                    </button>

                    <!-- Next Button -->
                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50 transition-colors">
                        Next
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

                <!-- Right side - Quick stats -->
                <div class="flex items-center space-x-4 text-sm text-gray-600">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                        <span>{{ count($customers->where('status', 'active')) }} Active</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>
                        <span>{{ DB::table('orders')->where('status', 'pending')->count() }} Pending Orders</span>
                    </div>
                </div>
            </div>

            <!-- Mobile pagination info -->
            <div class="sm:hidden mt-3 text-center text-sm text-gray-500">
                Page 1 of {{ ceil(count($customers) / 10) }} ({{ count($customers) }} total customers)
            </div>
        </div>
    </div>
</div>