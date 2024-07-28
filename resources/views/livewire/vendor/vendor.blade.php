<div>


    @switch($this->viewPage)
        @case(1)

        <div class="grid grid-cols-4 mt-6  mx-6  gap-4 mb-6">
            <div class="p-4 bg-white rounded shadow">
                <div class="text-sm text-gray-600">Total Vendors</div>
                <div class="text-xl font-semibold">1</div>
            </div>
            <div class="p-4 bg-white rounded shadow">
                <div class="text-sm text-gray-600"> Active Vendors</div>
                <div class="text-xl font-semibold">1</div>
            </div>
            <div class="p-4 bg-white rounded shadow">
                <div class="text-sm text-gray-600"> Total Products </div>
                <div class="text-xl font-semibold"> 75 </div>
            </div>
            <div class="p-4 bg-white rounded shadow">
                <div class="text-sm text-gray-600"> Total out Products</div>
                <div class="text-xl font-semibold">571</div>
            </div>
        </div>



        <div class="px-4 py-8 sm:px-6">
            <div>
                <div class="hidden mt-3 overflow-y-auto text-sm lg:items-center lg:flex whitespace-nowrap">
                    <a href="#" class="text-gray-600 hover:underline">
                        vendor
                    </a>

                    <span class="mx-1 text-gray-500">
                        /
                    </span>

                    <a href="#" class="text-indigo-600 hover:underline">
                        vendor-list
                    </a>
                </div>
            </div>


            @if ($this->enable_vendor_registration)


                <livewire:vendor.add-vendor />
            @else
                <div class="mt-6">

                    <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">
                        <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
                            <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl"> Vendors </h2>

                            <a href="#"
                                class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <span wire:click="registerVendor()" class="mx-1 cursor-pointer ">Add Vendor</span>
                            </a>
                        </div>

                        <div class="flex flex-col mt-8">
                            <div class="-my-2 overflow-x-auto xl:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left rtl:text-right">
                                                        <input class="text-indigo-500 rounded-md focus:ring-indigo-500 "
                                                            type="checkbox">
                                                    </th>

                                                    <th scope="col"
                                                        class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                                                        Name
                                                    </th>

                                                    <th scope="col"
                                                        class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                                                        Phone Number
                                                    </th>

                                                    <th scope="col"
                                                        class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                                                        Status
                                                    </th>

                                                    <th scope="col"
                                                        class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                                                        Role
                                                    </th>

                                                    <th scope="col"
                                                        class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="bg-white divide-y divide-gray-200">

                                                @foreach ($this->users as $vendor)
                                                    <tr class="cursor-pointer hover:bg-gray-50"
                                                        wire:click="viewVendor({{ $vendor->id }})">
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <input class="text-indigo-500 rounded-md focus:ring-indigo-500 "
                                                                type="checkbox">
                                                        </td>
                                                        <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <img class="object-cover w-12 h-12 rounded-full"
                                                                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=880&amp;q=80"
                                                                    alt="">
                                                                <div class="mx-3">
                                                                    <h2 class="font-medium text-gray-700">
                                                                        {{ $vendor->first_name . ' ' . $vendor->middle_name . ' ' . $vendor->last_name }}
                                                                    </h2>
                                                                    <p class="text-gray-500"> {{ $vendor->email }} </p>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                                            {{ $vendor->phone_number }}
                                                        </td>

                                                        <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <span class="p-1.5 rounded-full bg-green-500"></span>

                                                                <span class="mx-4">
                                                                    {{ $vendor->status }}
                                                                </span>
                                                            </div>
                                                        </td>

                                                        <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                                            {{ DB::table('roles')->where('id', $vendor->role_id)->value('name') }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap"></td>

                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <button
                                                                    class="mx-4 text-gray-500 focus:outline-none hover:text-indigo-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                                        </path>
                                                                    </svg>
                                                                </button>

                                                                <button
                                                                    class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                        <div class="w-full mt-8 bg-white">
                                            <div
                                                class="container flex flex-col items-center mx-auto space-y-6 sm:flex-row sm:justify-between sm:space-y-0 ">
                                                <div class="-mx-2">
                                                    <a href="#"
                                                        class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform bg-gray-100 rounded-lg">
                                                        1
                                                    </a>

                                                    <a href="#"
                                                        class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                                                        2
                                                    </a>

                                                    <a href="#"
                                                        class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                                                        3
                                                    </a>
                                                </div>

                                                <div class="text-gray-500">
                                                    <span class="font-medium text-gray-700">1 - 25</span> of 77 records
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif

        </div>

        @break

        @case(2)
        <livewire:vendor.view-vendor />

        @break

        @default
    @endswitch






</div>
