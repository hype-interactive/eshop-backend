<div>
    <div class="flex w-full  p-3 ">
        <div class="w-3/4  ">
            <div class="flex flex-col my-6 mx-4  bg-white  rounded-2xl shadow-xl shadow-gray-200">
                <div class="flex justify-between mx-4  ">
                    <div class="relative">
                        <svg wire:click="enableEditing" data-slot="icon" fill="none" stroke-width="1.5"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="overflow-x-auto rounded-2xl">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                <thead class="bg-white">
                                    <tr>
                                        <th scope="col" class="p-4 lg:p-5">
                                          Date
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                            From
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                           To
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                           Product Name
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                           Amount
                                        </th>
                                        <th scope="col" class="p-4 lg:p-5">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                   @foreach ($transactions as $data )


                                    <tr class="hover:bg-gray-100">
                                        <td class="p-4  ">
                                           {{ $data->created_at->format('Y-M-d') }}
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                                            {{ $data->customer }}
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                           {{ $data->vendor_name }}
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                            {{ $data->product_name }}

                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                           {{  number_format( $data->amount,2)  }} TZS  </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                                            {{ $data->status }}
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
                     <!-- Customer ID Filter -->
              <div>
                <label for="customer-id" class="block text-sm font-medium text-gray-700">Customer ID</label>
                <input wire:model="customer_id" type="text" id="customer-id" name="customer-id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter Customer ID">
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







</div>
