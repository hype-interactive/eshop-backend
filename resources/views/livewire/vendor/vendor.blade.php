<div>


    @switch($this->viewPage)

    @case(1)

    <div>
            <div class="grid grid-cols-4 mt-6  mx-6  gap-4 mb-6">
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Vendors</div>
                    <div class="text-xl font-semibold"> {{ $this->total_vendor }} </div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600"> Active Vendors</div>
                    <div class="text-xl font-semibold">{{ $this->active_vendor }}</div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600"> Total Products </div>
                    <div class="text-xl font-semibold"> {{ $this->total_product }} </div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">  onsale Products</div>
                    <div class="text-xl font-semibold">{{ $this->total_onsale_product }}</div>
                </div>
            </div>



            <div class="px-4 py-8 sm:px-6">

                {{-- @if ($this->enable_vendor_registration ==true)



                    @else --}}

                    <div class="mt-6">

                        <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">
                            <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
                                <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl"> Vendors </h2>

                                <a href="#"
                                    class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>

                                    <span wire:click="changeSubPage(3)" class="mx-1 cursor-pointer  ">Add Vendor</span>
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
                                                        <tr class="hover:bg-gray-50">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <input class="text-indigo-500 rounded-md focus:ring-indigo-500 "
                                                                    type="checkbox">
                                                            </td>
                                                            <td wire:click="viewVendor({{ $vendor->id }})"
                                                                class="flex-1 cursor-pointer  px-6 py-4 text-gray-500 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    <img class="object-cover w-12 h-12 rounded-full"
                                                                        src=" @if($vendor->image_url) {{ asset($vendor->image_url) }} @else  https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=880&amp;q=80 @endif "
                                                                        alt=" {{ $vendor->first_name }}">
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
                                                                    <button  wire:click="editVendor({{ $vendor->id }})"
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




                                                                    <button   wire:click ="deleteActionModal({{ $vendor->id   }})"
                                                                        class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />

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
                {{-- @endif --}}

            </div>
    </div>

        @break

        @case(2)
            <livewire:vendor.view-vendor />
        @break

        @case(3)
        <livewire:vendor.add-vendor />
        @break

        @case(4)
            <livewire:vendor.edit-vendor />
        @break

        @default
    @endswitch




    @if($this->delete_modal_boo)
    <div class="overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full flex"
        id="delete-product-modal" aria-modal="true" role="dialog">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-2xl shadow-lg">

                <div class="flex justify-end p-2">
                    <button wire:click="$toggle('delete_modal_boo')"  type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="delete-product-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-6 pt-0 text-center">
                    <svg class="mx-auto w-20 h-20 text-red-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>


                    @if (session()->has('message'))

                    {{-- @if (session('alert-class') == 'alert-success') --}}
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-8" role="alert">
                            <div class="flex">
                                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                <div>
                                    <p class="font-bold">The process is completed</p>
                                    <p class="text-sm">{{ session('message') }} </p>
                                </div>
                            </div>
                        </div>
                    {{-- @endif --}}
                @endif


                    <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500">Are you sure you want to delete this
                        Vendor ?</h3>
                    <a wire:click="delete()"
                        class="text-white cursor-pointer  bg-gradient-to-br from-red-400 to-red-600 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                        Yes, I'm sure
                    </a>
                    <a  wire:click="$toggle('delete_modal_boo')"
                        class="text-gray-900 cursor-pointer bg-white hover:bg-gray-100 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
                        data-modal-toggle="delete-product-modal">
                        No, cancel
                    </a>
                </div>
            </div>
        </div>
    </div>

 @endif



</div>
