<div>

    <div class="px-4 py-4 sm:px-6">
        <div>
            <h1 class="text-2xl font-medium text-gray-700 sm:text-3xl">    Category
            </h1>
            <div class="hidden mt-3 overflow-y-auto text-sm lg:items-center lg:flex whitespace-nowrap">


                <a href="#" class="text-gray-600 hover:underline">
                    Pages
                </a>

                <span class="mx-1 text-gray-500">
                    /
                </span>

                <a href="#" class="text-indigo-600 hover:underline">
                        Tables
                </a>
            </div>
        </div>





 <div class="bg-white">
<div class="p-4 mt-8 bg-white rounded-lg shadow-sm xl:p-8">
<div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
<h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl"> Product Category</h2>

{{-- modal start --}}
<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1.5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
        </svg>

        <span class="mx-1.5"> Add Category </span>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
        <div @click="modelOpen = false" x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true" style=""></div>

            <div x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl rtl:text-right 2xl:max-w-2xl" style="">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-medium text-gray-800 "> Add Category</h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </button>
                </div>

                <p class="mt-2 text-sm text-gray-500 ">

                    Add a new product category to your inventory to organize and manage your products
                </p>

             <div class="mt-5">


                <label class="flex flex-col items-center justify-center w-full h-32 mt-2 text-gray-500 border-2 border-dashed rounded-md cursor-pointer hover:text-gray-600 md:h-64">

                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                    </svg>

                    <span class="mt-4">Select Image</span>
                    <input wire:model="image_url" type="file" class="hidden">
                     @error('image_url') <div class="text-xs text-red-500"> {{ $message }} </div> @enderror

                </label>

             </div>

                    <div>
                        <label for="user name" class="block text-sm text-gray-700 capitalize">Category  name @error('name') <div class="text-red-500 text-xs "> {{ $message }} </div> @enderror  </label>
                        <input wire:model="name" placeholder=" Nyanya " type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>

                    <div class="mt-4">
                        <p class="text-sm text-gray-500">
                        Category  Description  @error('description')  <div class="text-red-500 text-xs"> {{ $message }} </div> @enderror
                        </p>

                        <textarea wire:model="description" class="block w-full h-32 px-3 py-2 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button  wire:click="register " type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Register
                        </button>
                    </div>

            </div>


        </div>


     </div>
 </div>



</div>

{{-- modal end  --}}


</div>

<div class="flex flex-col mt-8">
<div class="-my-2 overflow-x-auto xl:-mx-8">
<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
    <div class=" bg-white ">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-left rtl:text-right">
                    <input class="text-indigo-500 rounded-md focus:ring-indigo-500 " type="checkbox">
                    </th>

                    <th scope="col" class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                    <div class="flex items-center">
                        <button type="button" class="text-gray-400 focus:outline-none hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"></path>
                        </svg>
                        </button>

                        <span class="mx-3">Name &amp; Image</span>
                    </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                    <div class="flex items-center">
                        <button type="button" class="text-gray-400 focus:outline-none hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"></path>
                        </svg>
                        </button>

                        <span class="mx-3"> Description  </span>
                    </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                    <div class="flex items-center">
                        <button type="button" class="text-gray-400 focus:outline-none hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"></path>
                        </svg>
                        </button>

                        <span class="mx-3"> Created Date </span>
                    </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                    <div class="flex items-center">
                        <button type="button" class="text-gray-400 focus:outline-none hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"></path>
                        </svg>
                        </button>

                        <span class="mx-3"> Updated Date </span>
                    </div>
                    </th>



                    <th scope="col" class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-700 uppercase rtl:text-right whitespace-nowrap">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($categories as $category )


                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input class="text-indigo-500 rounded-md focus:ring-indigo-500 " type="checkbox">
                    </td>

                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                        <div class="flex items-center">
                            <img class="object-cover w-16 h-16 rounded-md"  src=" @if($category->image_url) {{ asset($category->image_url) }} @else  https://images.unsplash.com/photo-1634316427425-722247ebe036?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1632&amp;q=80 @endif " alt="">
                            <h2 class="mx-4 font-medium text-gray-700">  {{ $category->name }}</h2>
                        </div>
                    </td>

                    <td class="px-6 py-4 text-gray-800 whitespace-nowrap">
                        {{ $category->description }}
                    </td>

                    <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                       {{ $category->created_at->format('Y-m-d') }}
                    </td>

                    <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                       {{ $category->updated_at->format('Y-m-d') }}
                    </td>


                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <button class="mx-4 text-gray-500 focus:outline-none hover:text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            </button>

                            <button class="text-gray-500 focus:outline-none hover:text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            </button>
                        </div>
                    </td>


                </tr>

                @endforeach

            </tbody>
        </table>

        <div class="w-full mt-8 bg-white">
            <div class=" flex flex-col items-center mx-auto space-y-6 sm:flex-row sm:justify-between sm:space-y-0 ">
                <div class="-mx-2">
                    <a href="#" class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform bg-gray-100 rounded-lg">
                        1
                    </a>

                    <a href="#" class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                        2
                    </a>

                    <a href="#" class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
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




    </div>










</div>
