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
                <p class="text-sm text-green-500 mt-1">▲ 5% from last month</p>
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
                    <div id="sales-chart"></div>
                </div>
            </div>
            <!-- Best Selling Products Chart -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Best Selling Products</h3>
                </div>
                <div class="chart-container" style="position: relative; height:40vh; width:100%">
                    <div id="best-selling-products-chart"></div>
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
                                <div class="text-sm text-gray-900">John Kivuli</div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Tsh 12,000</div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="text-sm text-gray-900">9 pcs</div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Cancelled
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/50" alt="Coconut Oil">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Coconut Oil</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Aisha Juma</div>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Tsh 34,000</div>
                            </td>
                        </tr>

                    </table >
            </div>


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var salesOptions = {
            chart: {
                type: 'line',
                height: '100%',
                width: '100%'
            },
            series: [{
                name: 'Sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            }
        }

        var salesChart = new ApexCharts(document.querySelector("#sales-chart"), salesOptions);
        //salesChart.render();

        var bestSellingOptions = {
            chart: {
                type: 'pie',
                height: '100%',
                width: '100%'
            },
            series: [44, 55, 13, 43],
            labels: ['Food & Beverages', 'Cosmetics', 'Nuts & Spices', 'Home Decor']
        }

        var bestSellingChart = new ApexCharts(document.querySelector("#best-selling-products-chart"), bestSellingOptions);
       // bestSellingChart.render();
    </script>



</div>





        {{-- <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-xl font-semibold">Overall Sales</h2>
            <div id="sales-chart"></div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-xl font-semibold">Best Selling Products</h2>
            <div id="best-selling-products-chart"></div>
        </div> --}}
{{--
    </div>

</body>
</html> --}}




    </div>
