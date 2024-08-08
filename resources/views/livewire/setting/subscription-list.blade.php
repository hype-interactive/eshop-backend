<div>

    <div class="bg-gray-100 p-2 rounded-2xl mt-4">



        @if($this->registerServiceBool)
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


                        <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500"> Register Service

                            <div class="max-w-sm mx-auto">

                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 sd:text-white"> Service Name @error('name')
                                         <div class="text-red-500 text-xs">{{ $message }} </div>
                                    @enderror </label>
                                    <input type="text" wire:model="name" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 sd:bg-gray-700 sd:border-gray-600 sd:placeholder-gray-400 sd:text-white sd:focus:ring-blue-500 sd:focus:border-blue-500">
                                </div>

                                <div class="mb-5">
                                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 sd:text-white">Description @error('description')
                                        <div class="text-red-500 text-xs">
                                            {{ $message }}

                                        </div>
                                    @enderror </label>
                                    <input type="text" id="large-input" wire:model="description" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 sd:bg-gray-700 sd:border-gray-600 sd:placeholder-gray-400 sd:text-white sd:focus:ring-blue-500 sd:focus:border-blue-500">
                                </div>
                                <div class="flex items-start mb-5">
                                    <div class="flex items-center h-5">
                                      <input wire:model="status" id="terms" type="checkbox" value="active" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 sd:bg-gray-700 sd:border-gray-600 sd:focus:ring-blue-600 sd:ring-offset-gray-800 sd:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 sd:text-gray-300">I agree with  <a href="#" class="text-blue-600 hover:underline sd:text-blue-500"> to set service active </a></label>
                                  </div>


                            </div>
                        </h3>


                    <a  wire:click="$toggle('registerServiceBool')" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-gray-900 inline-flex  white  font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                        <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                          </svg>

                        <span  class="mx-1 cursor-pointer  ">Cancel  </span>
                    </a>


                        <a wire:click="register()" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>

                            <span  class="mx-1 cursor-pointer  ">Register  </span>
                        </a>


                    </div>
                </div>
            </div>
        </div>

     @endif



        <div class="w-full bg-white p-4 sm:p-6 overflow-hidden rounded-2xl shadow-md shadow-gray-200">
          <div class="flex justify-between">

            <h5 class="mb-4">CREATE A NEW PACKAGE </h5>

            <a wire:click="registerServiceModal()"  class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                </svg>

                <span class="mx-1 cursor-pointer  "> New Service </span>
            </a>

          </div>

            @if(session()->has('success_message'))
                <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 sd:text-green-400 sd:bg-gray-800 sd:border-green-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        {{session()->get('success_message')}}
                    </div>
                </div>
            @endif

            @error('description')<ol>   <div class="text-red-600 text-xs">  {{$message}}    </div>  </ol>@enderror
            @error('role_name') <ol>  <div class="text-red-600 text-xs"> {{$message}}    </div> </ol> @enderror
            @error('selectedPermission')<ol>  <div class="text-red-600 text-xs"> {{$message}}  </div> </ol> @enderror
            @error('price')<ol>  <div class="text-red-600 text-xs"> {{$message}}  </div> </ol> @enderror



            <div >


                <div class="col-span-6 sm:col-span-4">
                    <div class="flex w-full gap-4">
                        <div class="w-1/2">
                            <label for="package" class="block mb-2 text-sm font-medium text-gray-900 sd:text-white">Enter Package Name @error('name')
                                <div class="text-red-500 text-xs">  {{ $message }} </div>
                            @enderror </label>
                            <input wire:model="name" type="text" id="package" class="bg-gray-50 border border-gray-300 text-gray-900
                                    text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 sd:bg-gray-700
                                    sd:border-gray-600 sd:placeholder-gray-400 sd:text-white sd:focus:ring-green-500 sd:focus:border-green-500" placeholder="" requigreen="">
                            <div class="mt-4"></div>

                            <div class="mt-4"></div>
                        </div>
                        <div class="w-1/2">

                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 sd:text-white">Package description
                                @error('description')
                                    <div class="text-red-500 text-xs">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>
                            <input wire:model="description" id="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 sd:bg-gray-700 sd:border-gray-600 sd:placeholder-gray-400 sd:text-white sd:focus:ring-green-500 sd:focus:border-green-500" placeholder="Enter description...">
                            <div class="mt-4"></div>

                            <div class="mt-4"></div>
                        </div>

                        <div class="w-1/2">

                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 sd:text-white">Package price /month
                                @error('price')
                                    <div class="text-red-500 text-xs">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>
                            <input type="number" wire:model="price" id="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 sd:bg-gray-700 sd:border-gray-600 sd:placeholder-gray-400 sd:text-white sd:focus:ring-green-500 sd:focus:border-green-500" placeholder="Enter price...">
                            <div class="mt-4"></div>

                            <div class="mt-4"></div>
                        </div>

                    </div>



                </div>

                <label class="block mb-2 text-sm font-medium text-gray-900 sd:text-white">Select Services
    @error('selectedService')
    <div class="text-red-500 text-xs">
        {{ $message }}
    </div>

    @enderror

                </label>
                <div class="flex flex-wrap mt-4 w-full mx-auto  ">

                    @foreach( $services as $service )
                    <div class="mt-1   w-1/3">
                        <label class="inline-flex items-center">
                            <input type="checkbox" value="{{$service->id}}" wire:model="selectedService" class="form-checkbox h-6 w-6 text-green-500 bg-gray-100
                       rounded border-gray-300 focus:ring-green-500 sd:focus:ring-green-600 sd:ring-offset-gray-800 focus:ring-2 sd:bg-gray-700 sd:border-gray-600">
                            <span class="ml-3 text-sm">{{$service->name}}</span>
                        </label>
                    </div>

                    @endforeach

                </div>






                <div class="flex justify-end w-auto">
                    <div wire:loading="" wire:target="registerPackageAndService">
                        <button class="text-white bg-gradient-to-br from-blue-800 to-yellow-500  hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 sd:bg-green-400 sd:hover:bg-green-400 sd:focus:ring-green-400" disabled="">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-white-800" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <p>Please wait...</p>
                            </div>
                        </button>
                    </div>

                </div>


                <div class="flex justify-end w-auto">
                    <div wire:loading.remove="" wire:target="registerPackageAndService">
                        <button wire:click="registerPackageAndService" class="text-white  bg-gradient-to-br from-blue-800 to-yellow-500   hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 sd:bg-green-400 sd:hover:bg-green-400 sd:focus:ring-green-400">
                            Register
                        </button>

                    </div>
                </div>
            </div>


            <div class="mt-4"></div>

        </div>







    </div>




</div>
