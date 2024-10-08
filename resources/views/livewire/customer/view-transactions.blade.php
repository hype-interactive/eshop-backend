<div>

    <div
        class="block justify-between items-center p-4 mx-4 mt-4 mb-6 bg-white rounded-2xl shadow-lg shadow-gray-50 lg:p-5 sm:flex">
        <div class="mb-1 w-full">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">All  Orders </h1>
            </div>
            <div class="sm:flex">
                <div class="hidden items-center mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0">
                    <form class="lg:pr-3" action="#" method="GET">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" name="email" id="users-search"
                                class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Search for order id and  amount ">
                        </div>
                    </form>
                    <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">




                    </div>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">

                    <a href="#"
                        class="inline-flex justify-center items-center py-2 px-3 w-1/2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:scale-[1.02] transition-transform sm:w-auto">
                        <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Export
                    </a>
                </div>
            </div>
        </div>
    </div>






    <div class="flex w-full  p-3 ">
        <div class="w-3/4  ">

            <div class="flex flex-col my-6 mx-4 bg-white rounded-2xl shadow-xl shadow-gray-200 p-6">
                <!-- Header with Edit Icon -->
                <div class="flex justify-between mb-4">
                    <div class="relative text-xl font-bold">
                       Customer Informations
                    </div>
                </div>

                <!-- Customer Information -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <div class="font-medium text-gray-600">Full Name:</div>
                        <div class="font-bold "> {{ $customers->full_name }}</div>
                    </div>
                    <div>
                        <div class="font-medium text-gray-600">Email:</div>
                        <div class="font-bold">{{ $customers->email }}</div>
                    </div>
                    <div>
                        <div class="font-medium text-gray-600">Phone Number:</div>
                        <div class="font-bold "> {{ $customers->phone }}</div>
                    </div>
                    <div>
                        <div class="font-medium text-gray-600">Location:</div>
                        <div class="font-bold"> {{ $customers->location }}</div>
                    </div>
                </div>
            </div>


            <div class="flex flex-col my-6 mx-4  bg-white  rounded-2xl shadow-xl shadow-gray-200">
                <div class="flex justify-between mx-4  ">

                    <div class="relative font-bold text-xl">
                       Order List

                    </div>
                </div>
                <div class="overflow-x-auto rounded-2xl">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">

                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                <thead class="bg-white">
                                    <tr>
                                        <th scope="col" class="p-4 lg:p-5">
                                            Id
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                            Order Id
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                            Total Amount
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                            Payment type
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                            Date
                                        </th>
                                        <th scope="col" class="p-4 lg:p-5">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($customer_order as $order )


                                    <tr wire:click="viewCustomerOrders({{ $order->id }})" class="hover:bg-gray-100 cursor-pointer ">
                                        <td class="p-4 w-4 lg:p-5">
                                            {{ $order->id }}
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                                            <div class="text-base font-semibold text-gray-900"> {{ $order->order_id }}
                                            </div>
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                            {{ number_format( $order->total,2) }} TZS
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                            {{ $order->payment_method }}
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                            {{ $order->updated_at->format("Y-M-d") }} </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                                            {{ $order->payment_status }}
                                        </td>
                                    </tr>

                                    @endforeach

                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-1/3">

            <div class="max-w-lg mt-6  mx-auto bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Filter Options</h2>
                <div class="space-y-4">

                    <!-- Start Date Filter -->
                    <div>
                        <label for="start-date" class="block text-sm font-medium text-gray-700">Start Date</label>
                        <input wire:model="start_date" type="date" id="start-date" name="start-date"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- End Date Filter -->
                    <div>
                        <label for="end-date" class="block text-sm font-medium text-gray-700">End Date</label>
                        <input wire:model="end_date" type="date" id="end-date" name="end-date"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Amount Filter -->
                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                        <input wire:model="amount" type="number" id="amount" name="amount"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Enter Amount">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button wire:click="search()" type="submit"
                            class="w-full inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2    ">
                            Apply Filters
                        </button>
                    </div>
                    </form>
                </div>


            </div>

        </div>

    </div>
