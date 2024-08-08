<div>


    @if($this->managePackageBool)
    <div class="overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full flex"
        id="delete-product-modal" aria-modal="true" role="dialog">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-2xl shadow-lg">

                <div class="flex justify-end p-2">

                </div>

                <div class="p-6 pt-0 text-center">



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


                    <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500"> Package Permissions

                        <div class="max-w-sm mx-auto">


                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ds:text-white">Select an option</label>
                                <select  wire:model="status" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ds:bg-gray-700 ds:border-gray-600 ds:placeholder-gray-400 ds:text-white ds:focus:ring-blue-500 ds:focus:border-blue-500">
                                  <option selected>Choose status</option>
                                  <option value="active"> active</option>
                                  <option value="pending">pending </option>
                                  <option value="blocked">blocked </option>

                                </select>


                        </div>
                    </h3>






                <a wire:click="$toggle('managePackageBool')"  class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white inline-flex  bg-gradient-to-br from-gray-800 to-white-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>

                    <span  class="mx-1 cursor-pointer  "> Cancel  </span>
                </a>


                    <a wire:click="updateStatus()" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>

                        <span  class="mx-1 cursor-pointer  "> Update  </span>
                    </a>


                </div>
            </div>
        </div>
    </div>

 @endif



    <div class="bg-gray-2">
        <div class="container mx-auto p-6">
            <div class="flex justify-between mb-4">
                <div class="text-xl font-semibold"> Subscribers</div>

            </div>
            <div class="grid grid-cols-4 gap-4 mb-6">

                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Vendors </div>
                    <div class="text-xl font-semibold">{{ $total_vendor }}</div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600"> Active Vendor</div>
                    <div class="text-xl font-semibold">{{ $active_vendor }}</div>
                </div>

                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Pending Vendor</div>
                    <div class="text-xl font-semibold">{{ $pending_vendor }}</div>
                </div>

                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600"> Total Package</div>
                    <div class="text-xl font-semibold"> {{  $package}}</div>
                </div>



            </div>







            @switch($this->tab_id)
                @case(1)


            <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
                <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">  </h2>

                <a   wire:click="registerPackage(2)" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>

                    <span class="mx-1 cursor-pointer  "> New Package </span>
                </a>
            </div>

                <section class="container mx-auto">


<div>
<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 shadow-lg  md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 ">
                    <thead class="bg-white ">
                        <tr>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <div class="flex items-center gap-x-3">
                                    <input type="checkbox" class="text-blue-500 border-gray-300 rounded  ">
                                    <span>  Package  Name  </span>
                                </div>
                            </th>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <div class="flex items-center gap-x-3">
                                    <span> Services </span>
                                </div>
                            </th>


                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <div class="flex items-center gap-x-3">
                                    <span> Price </span>
                                </div>
                            </th>


                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <button class="flex items-center gap-x-2">
                                    <span>Status</span>
                                    <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1"></path>
                                        <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1"></path>
                                        <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3"></path>
                                    </svg>
                                </button>
                            </th>





                            <th>
                    Action
                            </th>


                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200  ">
                      @foreach ($this->packages as $package )


                        <tr class="cursor-pointer hover:bg-gray-50 " >
                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <div class="flex items-center gap-x-2">
                                     {{ $package->name }}
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="grid grid-cols-2 gap-x-3">
                                    @foreach (DB::table('package_has_services')->where('package_id', $package->id)->pluck('service_id')->toArray() as $service_id )
                                        <div class="font-medium text-gray-800">
                                         <ol>
                                            <li>
                                                {{ DB::table('services')->where('id', $service_id)->value('name') }}
                                            </li>
                                        </ol>
                                        </div>
                                    @endforeach
                                </div>
                            </td>

                            <td  class="px-12 py-2 text-sm font-medium text-gray-700 whitespace-nowrap" >
                                {{ number_format( $package->price ,2)  }}
                               </td>




                            <td class="px-12 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">

                                    @if( $package->status=="pending")
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-blue-100/60 ">
                                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                                    <h2 class="text-sm font-normal text-blue-500"> {{ $package->status }}</h2>
                                </div>

                                    @elseif( $package->status=="active")
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 ">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                    <h2 class="text-sm font-normal text-emerald-500"> {{ $package->status }}</h2>

                                </div>
                                    @elseif( $package->status=="blocked")
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-red-100/60 ">
                                        <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                    <h2 class="text-sm font-normal text-red-500"> {{ $package->status }}</h2>
                                </div>
                                    @endif


                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <button wire:click="editPackage({{ $package->id }})" class="mx-4 text-gray-500 focus:outline-none hover:text-indigo-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>

                                    <button wire:click="disablePackage({{ $package->id }})" class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"></path>

                                        </svg>

                                    </button>


                                </div>
                            </td>



                        </tr>

                        @endforeach
                        <!--[if ENDBLOCK]><![endif]-->

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</div>
</section>

@break

@case(2)
<livewire:setting.subscription-list />
@break

@default

@endswitch







        </div>

        <!--[if ENDBLOCK]><![endif]-->






</div>


</div>
