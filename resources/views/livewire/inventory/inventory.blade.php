<div class="bg-gray-2" >


    @switch($this->sub_page)
        @case(1)

        <div class="container mx-auto p-6">
            <div class="flex justify-between mb-4">
                <div class="text-xl font-semibold">Inventory</div>
                <select class="border-gray-200 rounded p-2">
                    <option>Jan - Jul, 2024</option>
                    <option>Jan - Jul, 2024</option>
                    <option>Jan - Jul, 2024</option>
                    <option>Jan - Jul, 2024</option>

                </select>
            </div>
            <div class="grid grid-cols-4 gap-4 mb-6">
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Products</div>
                    <div class="text-xl font-semibold"> {{ $this->total_product }} </div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Categories</div>
                    <div class="text-xl font-semibold"> {{  $this->total_category}} </div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Out of Stock Products</div>
                    <div class="text-xl font-semibold"> 75 </div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Low Stock Products</div>
                    <div class="text-xl font-semibold">571</div>
                </div>
            </div>
                <section class="container mx-auto">


                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">

                                <div class="flex p-4  items-center bg-white justify-between gap-x-3">
                                    <div class="relative">
                                        <h2 class="text-lg  font-medium text-gray-800 s:text-white"> Products </h2>
                                         <h6>  List of products  </h6>
                                    </div>

                                    <x-button wire:click="changeSubPage(2)" class="ms-4  inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                                        {{ __(' New Product') }}
                                    </x-button>
                                </div>

                                <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 ">
                                        <thead class="bg-white ">
                                            <tr>
                                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                                    <div class="flex items-center gap-x-3">
                                                        <input type="checkbox" class="text-blue-500 border-gray-300 rounded  ">
                                                        <span>Name</span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                                    <button class="flex items-center gap-x-2">
                                                        <span>Status</span>

                                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                        </svg>
                                                    </button>
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                    <button class="flex items-center gap-x-2">
                                                        <span> Set final price </span>

                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                                        </svg>
                                                    </button>
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Unit </th>
                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Expire Date </th>
                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Final Price  </th>
                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Vendor  Price  </th>



                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Feature & Visibility  </th>

                                                <th scope="col" class="relative py-3.5 px-4">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200  ">

                                            @foreach ($this->products as  $product)


                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    <div class="inline-flex items-center gap-x-3">
                                                        <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">

                                                        <div class="flex items-center gap-x-2">
                                                            <img class="object-cover w-16 h-16 rounded-lg" src=" @if($product->image_url)  {{ asset($product->image_url) }}  @else  {{ asset('public/product/inventoryImage.jpeg') }} @endif  " alt="inventory image ">
                                                            <div>
                                                                <h2 class="font-medium text-gray-800  "> {{ $product->name }}</h2>
                                                                <p class="text-sm font-normal text-gray-600 ">{{ DB::table('product_categories')->where('id',$product->product_category_id)->value('name') }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    <div class=" inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 ">


                                                        <h2 class="text-sm font-normal text-emerald-500"> {{ $product->status }}</h2>


                                                    </div>
                                                </td>

                                                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                    @if($product->final_price <= 1)
                                                    <div class=" w-10 h-10 ">

                                                    <span wire:click="editFinalPriceModal({{ $product->id }})" class=" w-4 h-4">
                                                            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                                              </svg>
                                                        </span>

                                                    </div>

                                                        @else
                                                         @endif
                                                    </td>
                                                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap"> {{ $product->unit }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap"> {{ $product->expire_date }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap"> {{  number_format($product->final_price ,2) }} TZS </td>
                                                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap"> {{ number_format( $product->vendor_price ,2 ) }} TZS</td>



                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <div class="relative items-center gap-x-2">
                                                        @if($product->visibility)
                                                        <p class="px-3 py-1 text-xs text-indigo-500 rounded-full  bg-indigo-100/60"> Visible </p>
                                                         @endif
                                                         @if($product->featured)
                                                        <p class="px-3 py-1 text-xs text-indigo-500 rounded-full  bg-yellow-100/60"> Featured </p>
                                                        @endif

                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <div class="flex items-center gap-x-6">
                                                        <button wire:click="editActionModal({{ $product->id }})"  class="text-gray-500 transition-colors duration-200   hover:text-red-500 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                            </svg>
                                                        </button>

                                                        <button wire:click="enableEditPage({{ $product->id }})"  >

                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                            </svg>

                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>


                </section>


        </div>
            @break

            @case(2)
            <livewire:inventory.add-inventory />
            @break

            @case(3)
            <livewire:inventory.edit-inventory />
            @break

        @default

    @endswitch





    @if($this->delete_modal_boo)
    <div class="overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full flex"
        id="delete-product-modal" aria-modal="true" role="dialog">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-2xl shadow-lg">

                <div class="flex justify-end p-2">
                    <button wire:click="editActionModal(2)"  type="button"
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


                    <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500">Are you sure you want to disable this
                       Product ?

                    </h3>
                    <div class="text-xs text-red-500"> you will only change the the status and customer will not be able to see this product   </div>
                    <a wire:click="delete()"
                        class="text-white cursor-pointer  bg-gradient-to-br from-red-400 to-red-600 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                        Yes, I'm sure
                    </a>
                    <a  wire:click="editActionModal(2)"
                        class="text-gray-900 cursor-pointer bg-white hover:bg-gray-100 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
                        data-modal-toggle="delete-product-modal">
                        No, cancel
                    </a>
                </div>
            </div>
        </div>
    </div>

 @endif



 @if($this->enable_edit_final_price_modal)
<div class="overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full flex"
    id="delete-product-modal" aria-modal="true" role="dialog">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">

        <div class="relative bg-white rounded-2xl shadow-lg">

            <div class="flex justify-end p-2">
                <button wire:click="editFinalPriceModal(2)" type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="delete-product-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd">
                        </path>
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
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-8" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                                <p class="font-bold">The process is completed</p>
                                <p class="text-sm">{{ session('message') }} </p>
                            </div>
                        </div>
                    </div>
                @endif

                <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500">Update Final Price</h3>

                <div>
                    <div class="mb-4">
                        <label for="vendor_price" class="block text-sm font-medium text-gray-700">Vendor Price</label>
                        <div class=""> {{ number_format($this->vendor_price ,2) }} TZS  </div>

                    </div>

                    <div class="mb-4">
                        <label for="final_price" class="block text-sm font-medium text-gray-700">Final Price</label>
                        <input wire:model="final_price" type="number" id="final_price" name="final_price" wire:model="final_price"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-gray-900 sm:text-sm"
                            min="{{ $vendor_price }}" step="0.01">
                        @error('final_price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <button type="button" wire:click="editFinalPriceModal(2)"
                    class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium rounded-lg text-base px-3 py-2.5 text-center hover:scale-[1.02] transition-transform">
                    Cancel
                </button>

                    <button  wire:click="setFinalPrice()" type="submit"
                        class="tw-full inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2">
                        Save
                    </button>


                </div>
            </div>
        </div>
    </div>
</div>
@endif




</div>
