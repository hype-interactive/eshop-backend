<div>

    <div class="bg-gray-2">
        <div class="container mx-auto p-6">
            <div class="flex justify-between mb-4">
                <div class="text-xl font-semibold"> Vendor subscriptions </div>

            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Active</div>
                    <div class="text-xl font-semibold">3</div>
                </div>
                <div class="p-4 bg-white border-red-600 rounded shadow">
                    <div class="text-sm  text-red-600 text-gray-600"> Expired Subscriptions </div>
                    <div class="text-xl text-red-600 font-semibold">3</div>
                </div>

            </div>
                <section class="container mx-auto">


    <div wire:snapshot="{&quot;data&quot;:{&quot;customers&quot;:[null,{&quot;keys&quot;:[1,2,3],&quot;class&quot;:&quot;Illuminate\\Database\\Eloquent\\Collection&quot;,&quot;modelClass&quot;:&quot;App\\Models\\Customer&quot;,&quot;s&quot;:&quot;elcln&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;dthM3MRov0lyO3Z53Npg&quot;,&quot;name&quot;:&quot;customer.customer-table&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;fd3dc9ad873a6188af3ec26c29ef6f9771b1409adb8e163df7915a746abfa0c9&quot;}" wire:effects="{&quot;listeners&quot;:[&quot;viewCustomerOrderList&quot;]}" wire:id="dthM3MRov0lyO3Z53Npg">
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
                                    <span> Date </span>
                                </div>
                            </th>

                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <div class="flex items-center gap-x-3">
                                    <span>Name</span>
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

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                <button class="flex items-center gap-x-2">
                                    <span>Role</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"></path>
                                    </svg>
                                </button>
                            </th>


                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Pending  </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Completed  </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 "> Action   </th>


                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200  ">
                        <!--[if BLOCK]><![endif]-->
                        <tr class="cursor-pointer hover:bg-gray-50 " wire:click="viewCustomerTransactions( 1)">

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">
                                    <div class="flex items-center gap-x-2">
                                        2024-08-06
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-16 h-16 rounded-lg" src="http://127.0.0.1:8000/profile/customer-profile.png" alt="">
                                        <div>
                                            <h2 class="font-medium text-gray-800  ">jacknson</h2>
                                            <p class="text-sm font-normal text-gray-600 "> 255624451311 </p>
                                        </div>
                                    </div>
                                </div>
                            </td>



                            <td class="px-12 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 ">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                    <h2 class="text-sm font-normal text-emerald-500">Active</h2>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> Customer </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> 7</td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> 1 </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap">

                                <div class="w-full grid sm:grid-cols-2 lg:flex lg:w-64 lg:items-center lg:justify-end gap-4">
                                    <!--[if BLOCK]><![endif]-->                              <button type="button" class="w-full rounded-lg border border-red-700 px-3 py-2 text-center text-sm font-medium text-red-700 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-red-300 d:border-red-500 d:text-red-500 d:hover:bg-red-600 d:hover:text-white d:focus:ring-red-900 lg:w-auto" wire:click="enableCancelModal(1)">Cancel order</button>

                                      <!--[if ENDBLOCK]><![endif]-->


                                    <a href="#" class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 d:border-gray-600 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white d:focus:ring-gray-700 lg:w-auto" wire:click="viewOrder(1)">View details</a>

                                </div>
                            </td>


                        </tr>


                        <tr class="cursor-pointer hover:bg-gray-50 " wire:click="viewCustomerTransactions( 2)">

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">
                                    <div class="flex items-center gap-x-2">
                                        2024-08-12
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-16 h-16 rounded-lg" src="http://127.0.0.1:8000/profile/customer-profile.png" alt="">
                                        <div>
                                            <h2 class="font-medium text-gray-800  ">juma</h2>
                                            <p class="text-sm font-normal text-gray-600 "> 0624451311 </p>
                                        </div>
                                    </div>
                                </div>
                            </td>



                            <td class="px-12 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 ">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                    <h2 class="text-sm font-normal text-emerald-500">Active</h2>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> Customer </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> 1</td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> 0 </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap">


                                <div class="w-full grid sm:grid-cols-2 lg:flex lg:w-64 lg:items-center lg:justify-end gap-4">
                                <!--[if BLOCK]><![endif]-->                              <button type="button" class="w-full rounded-lg border border-red-700 px-3 py-2 text-center text-sm font-medium text-red-700 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-red-300 d:border-red-500 d:text-red-500 d:hover:bg-red-600 d:hover:text-white d:focus:ring-red-900 lg:w-auto" wire:click="enableCancelModal(1)">Cancel order</button>

                                  <!--[if ENDBLOCK]><![endif]-->


                                <a href="#" class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 d:border-gray-600 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white d:focus:ring-gray-700 lg:w-auto" wire:click="viewOrder(1)">View details</a>

                            </div> </td>


                        </tr>


                        <tr class="cursor-pointer hover:bg-gray-50 " wire:click="viewCustomerTransactions( 3)">

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">
                                    <div class="flex items-center gap-x-2">
                                        2024-08-12
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-16 h-16 rounded-lg" src="http://127.0.0.1:8000/profile/customer-profile.png" alt="">
                                        <div>
                                            <h2 class="font-medium text-gray-800  ">juma bakari</h2>
                                            <p class="text-sm font-normal text-gray-600 "> 0624451312 </p>
                                        </div>
                                    </div>
                                </div>
                            </td>



                            <td class="px-12 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 ">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                    <h2 class="text-sm font-normal text-emerald-500">Active</h2>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> Customer </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> 1</td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> 0 </td>
                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap">

                                <div class="w-full grid sm:grid-cols-2 lg:flex lg:w-64 lg:items-center lg:justify-end gap-4">
                                    <!--[if BLOCK]><![endif]-->                              <button type="button" class="w-full rounded-lg border border-red-700 px-3 py-2 text-center text-sm font-medium text-red-700 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-red-300 d:border-red-500 d:text-red-500 d:hover:bg-red-600 d:hover:text-white d:focus:ring-red-900 lg:w-auto" wire:click="enableCancelModal(1)">Cancel order</button>

                                      <!--[if ENDBLOCK]><![endif]-->


                                    <a href="#" class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 d:border-gray-600 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white d:focus:ring-gray-700 lg:w-auto" wire:click="viewOrder(1)">View details</a>

                                </div>

                            </td>


                        </tr>

                        <!--[if ENDBLOCK]><![endif]-->

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</div>
                </section>
        </div>







</div>

</div>
