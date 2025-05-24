<div class="bg-gray-50 min-h-screen p-4">
    <!-- Header Section -->
    <div class="mb-8">
        <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-2xl p-6 text-white shadow-xl">
            <h1 class="text-3xl font-bold mb-2">Vendor Dashboard</h1>
            <p class="text-blue-100">Welcome back! Here's your business overview</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total Sales Card -->
        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-1">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-gradient-to-br from-green-400 to-green-600 rounded-xl">
                    <i class="fas fa-dollar-sign text-white text-xl"></i>
                </div>
                <div class="text-right">
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total Sales</p>
                </div>
            </div>
            <div class="space-y-2">
                <p class="text-3xl font-bold text-gray-800">{{ number_format($total_sales,2) }}</p>
                <div class="flex items-center text-sm">
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <i class="fas fa-arrow-up mr-1"></i>
                        15% from last month
                    </span>
                </div>
            </div>
        </div>

        <!-- Products On Market Card -->
        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-1">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl">
                    <i class="fas fa-box text-white text-xl"></i>
                </div>
                <div class="text-right">
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Products On Market</p>
                </div>
            </div>
            <div class="space-y-2">
                <p class="text-3xl font-bold text-gray-800">{{ $onstock_product }}</p>
                <div class="flex items-center text-sm">
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                        <i class="fas fa-arrow-down mr-1"></i>
                        10% from Yesterday
                    </span>
                </div>
            </div>
        </div>

        <!-- Products Out of Market Card -->
        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-1">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-gradient-to-br from-orange-400 to-red-500 rounded-xl">
                    <i class="fas fa-exclamation-triangle text-white text-xl"></i>
                </div>
                <div class="text-right">
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Products Out of Market</p>
                </div>
            </div>
            <div class="space-y-2">
                <p class="text-3xl font-bold text-gray-800">{{ $outstock_product }}</p>
                <div class="flex items-center text-sm">
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <i class="fas fa-arrow-up mr-1"></i>
                        15% from last month
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="mb-8">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">Overall Sales</h3>
                        <p class="text-gray-600 mt-1">Monthly sales performance overview</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            <i class="fas fa-chart-line mr-2"></i>
                            Sales Trend
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="chart-container" style="position: relative; height:400px; width:100%">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- New Orders Section -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Recent Orders</h3>
                    <p class="text-gray-600 mt-1">Latest customer orders and their status</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        Live Orders
                    </span>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Product</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Quantity</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($orders as $order)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-12 w-12">
                                    <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                        <i class="fas fa-utensils text-white text-lg"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-semibold text-gray-900">Spice Jiko</div>
                                    <div class="text-sm text-gray-500">Kitchen Essential</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8">
                                    <div class="h-8 w-8 rounded-full bg-gradient-to-br  flex items-center justify-center">
                                        <span class="text-white text-xs font-bold">{{ substr($order->customer, 0, 1) }}</span>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">{{ $order->customer }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-semibold text-gray-900">Tsh {{ number_format($order->total,2) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <span class="inline-flex items-center px-2 py-1 rounded-lg text-xs font-medium bg-gray-100 text-gray-800">
                                    9 pcs
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($order->status == "cancelled")
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800 border border-red-200">
                                    <i class="fas fa-times-circle mr-1"></i>
                                    {{ ucfirst($order->status) }}
                                </span>
                            @elseif($order->status == "pending")
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800 border border-yellow-200">
                                    <i class="fas fa-clock mr-1"></i>
                                    {{ ucfirst($order->status) }}
                                </span>
                            @elseif($order->status == "completed")
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800 border border-green-200">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    {{ ucfirst($order->status) }}
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800 border border-blue-200">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    {{ ucfirst($order->status) }}
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

<script>
    const ctxLine = document.getElementById('lineChart').getContext('2d');

    const lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Monthly Sales (TSH)',
                data: [12000, 25000, 15000, 30000, 20000, 35000, 40000, 23000, 32000, 12000, 15000, 28000],
                borderColor: '#305AA3',
                backgroundColor: 'rgba(48, 90, 163, 0.1)',
                borderWidth: 3,
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '#305AA3',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2,
                pointRadius: 6,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: '#305AA3',
                pointHoverBorderColor: '#ffffff',
                pointHoverBorderWidth: 3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 14,
                            weight: '600'
                        }
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: '#ffffff',
                    bodyColor: '#ffffff',
                    borderColor: '#305AA3',
                    borderWidth: 1,
                    cornerRadius: 8,
                    displayColors: false,
                    callbacks: {
                        title: function(context) {
                            return context[0].label + ' 2024';
                        },
                        label: function(context) {
                            return 'Sales: TSH ' + context.parsed.y.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 12,
                            weight: '500'
                        },
                        color: '#6B7280'
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)',
                        drawBorder: false
                    },
                    ticks: {
                        font: {
                            size: 12,
                            weight: '500'
                        },
                        color: '#6B7280',
                        callback: function(value) {
                            return 'TSH ' + value.toLocaleString();
                        }
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            }
        }
    });
</script>