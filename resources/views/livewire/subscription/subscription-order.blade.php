<div class="min-h-screen bg-gray-50">
    <div class="p-6">
        {{-- Header with Back Button --}}
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <button onclick="history.back()" 
                        class="flex items-center text-gray-600 hover:text-gray-900 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to Vendors
                    </button>
                    <div class="h-6 w-px bg-gray-300"></div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Subscription History</h1>
                        <p class="text-gray-600 mt-1">Vendor: <span class="font-medium">{{ $this->vendor_name }}</span></p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <select wire:model.live="status" 
                        class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                        <option value="">All Subscriptions</option>
                        <option value="pending">Pending</option>
                        <option value="active">Active</option>
                        <option value="out_of_service">Out of Service</option>
                    </select>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                        Export History
                    </button>
                </div>
            </div>
        </div>

        {{-- Subscription Timeline --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Subscription Timeline</h3>
                <p class="text-sm text-gray-600 mt-1">Complete history of subscription activities</p>
            </div>

            <div class="p-6">
                @forelse ($subsriptions as $subscription)
                <div class="relative border-l-4 @if($subscription->status == 'active') border-green-400 @elseif($subscription->status == 'pending') border-yellow-400 @else border-red-400 @endif rounded-r-lg bg-gray-50 p-6 mb-6 hover:bg-gray-100 transition-colors duration-200">
                    {{-- Status Badge --}}
                    <div class="absolute -left-3 top-6">
                        <div class="w-6 h-6 @if($subscription->status == 'active') bg-green-400 @elseif($subscription->status == 'pending') bg-yellow-400 @else bg-red-400 @endif rounded-full border-4 border-white shadow-sm flex items-center justify-center">
                            @if($subscription->status == 'active')
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            @elseif($subscription->status == 'pending')
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            @else
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                        </div>
                    </div>

                    <div class="ml-6">
                        {{-- Header Row --}}
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                    @if($subscription->status == 'active') bg-green-100 text-green-800 
                                    @elseif($subscription->status == 'pending') bg-yellow-100 text-yellow-800 
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ ucfirst($subscription->status) }}
                                </span>
                                <span class="text-sm text-gray-500">
                                    Created {{ $subscription->created_at->format('M d, Y') }}
                                </span>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-gray-900">
                                    {{ number_format($subscription->price, 2) }} TZS
                                </div>
                                <div class="text-xs text-gray-500">Plan Amount</div>
                            </div>
                        </div>

                        {{-- Details Grid --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 12v-4m0 0V9a4 4 0 118 0v2m-8 0h8"></path>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-700">Start Date</span>
                                </div>
                                <div class="text-sm text-gray-900 font-semibold">
                                    {{ $subscription->start_date ? \Carbon\Carbon::parse($subscription->start_date)->format('M d, Y') : 'Not started' }}
                                </div>
                                @if($subscription->start_date)
                                <div class="text-xs text-gray-500 mt-1">
                                    {{ \Carbon\Carbon::parse($subscription->start_date)->diffForHumans() }}
                                </div>
                                @endif
                            </div>

                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-700">End Date</span>
                                </div>
                                <div class="text-sm text-gray-900 font-semibold">
                                    {{ $subscription->end_date ? \Carbon\Carbon::parse($subscription->end_date)->format('M d, Y') : 'Not set' }}
                                </div>
                                @if($subscription->end_date)
                                <div class="text-xs text-gray-500 mt-1">
                                    {{ \Carbon\Carbon::parse($subscription->end_date)->diffForHumans() }}
                                </div>
                                @endif
                            </div>

                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-700">Duration</span>
                                </div>
                                <div class="text-sm text-gray-900 font-semibold">
                                    @if($subscription->start_date && $subscription->end_date)
                                        {{ \Carbon\Carbon::parse($subscription->start_date)->diffInDays(\Carbon\Carbon::parse($subscription->end_date)) }} days
                                    @else
                                        Not calculated
                                    @endif
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Subscription period</div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center py-12">
                    <div class="w-24 h-24 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Subscriptions Found</h3>
                    <p class="text-gray-500">This vendor doesn't have any subscription records yet.</p>
                </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if($subsriptions->hasPages())
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                {{ $subsriptions->links() }}
            </div>
            @endif
        </div>
    </div>
</div>