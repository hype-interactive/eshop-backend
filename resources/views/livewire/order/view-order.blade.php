<div class="min-h-screen bg-gray-50">
    <div class="p-6">
        {{-- Success/Error Messages --}}
        @if (session()->has('message_success'))
            <div class="mb-6 bg-green-50 border border-green-200 rounded-lg p-4">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <p class="font-medium text-green-800">Success!</p>
                        <p class="text-sm text-green-600">{{ session('message_success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if (session()->has('message_fail'))
            <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-red-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <p class="font-medium text-red-800">Error!</p>
                        <p class="text-sm text-red-600">{{ session('message_fail') }}</p>
                    </div>
                </div>
            </div>
        @endif

        {{-- Order Details Card --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden max-w-7xl mx-auto">
            {{-- Header --}}
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-8 text-white">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h1 class="text-2xl font-bold mb-2">Order Details</h1>
                        <div class="flex items-center space-x-6 text-blue-100">
                            <div>
                                <p class="text-sm opacity-80">Order ID</p>
                                <p class="text-lg font-semibold">#{{ $order_id }}</p>
                            </div>
                            <div>
                                <p class="text-sm opacity-80">Order Date</p>
                                <p class="text-lg font-semibold">{{ $date->format('M d, Y') }}</p>
                            </div>
                            <div>
                                <p class="text-sm opacity-80">Payment Status</p>
                                <p class="text-lg font-semibold">{{ ucfirst($order->payment_status) }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3 mt-4 md:mt-0">
                        <button wire:click="close()" 
                            class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 flex items-center backdrop-blur-sm">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Back to Orders
                        </button>
                        
                        @if($order->payment_method != "selcom" && $order->status == "pending")
                            <button wire:click="confirmCashOrders('{{ $order_id }}')" 
                                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Confirm Payment
                            </button>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Order Items --}}
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6">Order Items</h2>
                
                <div class="space-y-6">
                    @foreach ($products as $product)
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-gray-100 transition-colors duration-200">
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-center">
                            {{-- Product Image & Info --}}
                            <div class="lg:col-span-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-20 h-20 rounded-lg object-cover border-2 border-gray-200" 
                                             src="@if($product->image_url){{ asset($product->image_url) }}@else https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80 @endif" 
                                             alt="{{ $product->name }}">
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $product->name }}</h3>
                                        <p class="text-gray-600 mb-3">By: {{ DB::table('users')->where('id', $product->customer_id)->value('first_name') ?? 'Unknown' }}</p>
                                        <div class="flex flex-wrap gap-4 text-sm">
                                            <div class="flex items-center text-gray-600">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                                </svg>
                                                Qty: {{ DB::table('order_products')->where('product_id', $product->id)->where('order_id', $order_id)->value('quantity') ?? 1 }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Price --}}
                            <div class="text-center lg:text-left">
                                <p class="text-sm text-gray-600 mb-1">Unit Price</p>
                                <p class="text-2xl font-bold text-gray-900">{{ number_format($product->final_price, 2) }} TZS</p>
                            </div>

                            {{-- Status & Delivery --}}
                            <div class="text-center lg:text-right">
                                <div class="mb-4">
                                    <p class="text-sm text-gray-600 mb-2">Status</p>
                                    @if($status == 'completed')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                            <svg class="w-1.5 h-1.5 mr-1.5 fill-current" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3"/>
                                            </svg>
                                            {{ ucfirst($status) }}
                                        </span>
                                    @elseif($status == 'pending')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                                            <svg class="w-1.5 h-1.5 mr-1.5 fill-current" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3"/>
                                            </svg>
                                            {{ ucfirst($status) }}
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                            <svg class="w-1.5 h-1.5 mr-1.5 fill-current" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3"/>
                                            </svg>
                                            {{ ucfirst($status) }}
                                        </span>
                                    @endif
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600 mb-1">Expected Delivery</p>
                                    <p class="text-sm font-medium text-gray-900">{{ $product->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Order Summary --}}
            <div class="bg-gray-50 px-6 py-8 border-t border-gray-200">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                    {{-- Payment & Actions --}}
                    <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-6">
                        @if($order->status == "pending")
                            <button wire:click="cancelOrder('{{ $order_id }}')" 
                                class="inline-flex items-center px-6 py-3 border border-red-300 text-red-700 bg-white rounded-lg hover:bg-red-50 font-medium transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Cancel Order
                            </button>
                        @endif
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            <span class="font-medium">Payment Status: {{ ucfirst($order->payment_status) }}</span>
                        </div>
                    </div>

                    {{-- Total Amount --}}
                    <div class="text-right">
                        <p class="text-sm text-gray-600 mb-1">Total Amount</p>
                        <p class="text-3xl font-bold text-gray-900">{{ number_format($total, 2) }} TZS</p>
                    </div>
                </div>

                {{-- Order Timeline (Optional Enhancement) --}}
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Order Timeline</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Order Placed</p>
                                <p class="text-xs text-gray-500">{{ $date->format('M d, Y \a\t H:i A') }}</p>
                            </div>
                        </div>

                        @if($order->status == 'completed')
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Order Completed</p>
                                <p class="text-xs text-gray-500">Successfully delivered</p>
                            </div>
                        </div>
                        @elseif($order->status == 'cancelled')
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Order Cancelled</p>
                                <p class="text-xs text-gray-500">Order was cancelled</p>
                            </div>
                        </div>
                        @else
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Processing Order</p>
                                <p class="text-xs text-gray-500">Order is being processed</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>