<div>

  <div class=" bg-gay-100 grid grid-cols-1 md:grid-cols-4 mx-4 mt-4 lg:grid-cols-4 gap-4 mb-6">
        <!-- Total Sales Card -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col justify-between">
            <div class="flex justify-between items-center mb-3">
                <h3 class="text-sm font-semibold text-gray-500">Total Sales</h3>
                <span class="text-gray-400"><!-- Icon placeholder --></span>
            </div>

            <div>
                <p class="text-2xl font-bold text-gray-800">Tsh 390,751.95</p>
                <p class="text-sm text-green-500 mt-1">▲ 15% from last month</p>
            </div>
        </div>
        <!-- New Orders Card -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col justify-between">
            <div class="flex justify-between items-center mb-3">
                <h3 class="text-sm font-semibold text-gray-500">New Orders</h3>
                <span class="text-gray-400"><!-- Icon placeholder --></span>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">76,243</p>
                <p class="text-sm text-red-500 mt-1">▼ 10% from Yesterday</p>
            </div>
        </div>
        <!-- Total Products Card -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col justify-between">
            <div class="flex justify-between items-center mb-3">
                <h3 class="text-sm font-semibold text-gray-500">Total Products</h3>
                <span class="text-gray-400"><!-- Icon placeholder --></span>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">751.95</p>
                <p class="text-sm text-green-500 mt-1">▲ 15% from last month</p>
            </div>
        </div>
        <!-- Total Users Card -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col justify-between">
            <div class="flex justify-between items-center mb-3">
                <h3 class="text-sm font-semibold text-gray-500">Total Users</h3>
                <span class="text-gray-400"><!-- Icon placeholder --></span>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">571</p>
                <p class="text-sm text-green-500 mt-1"> ▲ 5% from last month</p>
            </div>
        </div>
    </div>



<div class="bg-gray-100">
    <div class="container mx-auto p-4">
        <!-- Overview Section -->

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- Overall Sales Chart -->
            <div class="bg-white shadow-md rounded-lg p-6 col-span-2">

                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Overall Sales</h3>
                    <span class="text-yellow-500 font-semibold">Sales</span>
                </div>

                <div class="chart-container" style="position: relative; height:40vh; width:100%">
                <canvas id="lineChart" width="1000" height="400"></canvas>
                    </div>
            </div>
            <!-- Best Selling Products Chart -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Best Selling Products</h3>
                </div>
                <div class="chart-container" style="position: relative; height:40vh; width:100%">
                    <canvas id="donutChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>


        <!-- New Orders Section -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">New Orders</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Name</th>
                            <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer Name</th>
                            <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                            <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($orders as $order )


                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/50" alt="Spice Jiko">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Spice Jiko</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $order->customer }}</div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Tsh {{ number_format($order->total,2) }}</div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="text-sm text-gray-900">9 pcs</div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                @if($order->status=="cancelled")
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                     {{ $order->status }}
                                </span>
                                @else

                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-white-800">
                                    {{ $order->status }}
                               </span>

                                @endif
                            </td>
                        </tr>

                        @endforeach

                    </table >
            </div>


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</div>



<script>
    const ctxLine = document.getElementById('lineChart').getContext('2d');

 const lineChart = new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Monthly Sales',
            data: [-10, 25, 15, 30, 20, 35, 40, 23, 32, 12, 5, 20],
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderDash: [10, 5], // Dotted line (10px dash, 5px space)
            tension: 0.4, // Makes the line curved (adjust as needed)
            fill: false
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return `Sales: ${tooltipItem.raw}`;
                    }
                }
            }
        },
        elements: {
            line: {
                borderDash: [10, 5], // Dotted line
                tension: 0.4 // Makes the line folded (curved)
            }
        }
    }
    });
    </script>

<script>
    const ctxDonut = document.getElementById('donutChart').getContext('2d');
  const donutChart = new Chart(ctxDonut, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green'],
      datasets: [{
        label: 'My First Dataset',
        data: [300, 50, 100, 75],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      legend: {
                    display: true,
                    position: 'bottom',
                },
    }
  });


    </script>



    </div>
