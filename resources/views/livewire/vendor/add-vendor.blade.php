<div>

    <div class="flex w-full">

        <div class="w-1/3 bg-white  p-4 mt-8 bg-white rounded-lg xl:p-6 gap-2 ">


            <section class="bg-white-300 mt-10 flex flex-col items-center rounded-full justify-center  mx-auto" style="width: 200px; height: 200px;">
                @if ($this->photo)
                    <img class="object-fill rounded-full " src="{{ $photo->temporaryUrl() }}" style="width: 200px; height: 200px;">
                @else
                    @if ($this->image_url)
                        <img class="object-fill  rounded-full " src="{{$this->image_url}}" style="width: 200px; height: 200px;">
                    @else
                        <img class="object-fill   rounded-full" src="{{ asset('product/product_image.jpeg')  }}" style="width: 300px; height: 200px;" >
                    @endif

                @endif
            </section>

            <label class="flex flex-col cursor-pointer hover:bg-gray-100 hover:border-gray-300 rounded-full mx-auto mt-4 pt-2" style="width: 200px;">
                <div class="flex flex-col items-center justify-center ">

                    <div wire:loading wire:target="photo" class="" >

                        <svg style="width: 50%; margin: 0 auto;" xmlns="http://www.w3.org/2000/svg" class="animate-spin  w-8 h-8 text-gray-400 group-hover:text-gray-600" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />

                        </svg>
                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">Please wait...</p>

                    </div>

                    <div wire:loading.remove wire:target="photo" class="flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                            Select new image</p>
                    </div>
                </div>
                <input type="file" class="opacity-0" wire:model="photo"/>
            </label>
            @error('photo') <span class="error text-red-500 text-xs mx-auto">{{ $message }}</span> @enderror




        </div>

    <div class="w-3/4 p-4 mt-8 bg-white rounded-lg xl:p-6">
        <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl"> Register New Vendor</h1>

        <div>
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

            @if (session()->has('message_fail'))

                <div class="bg-red-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-8" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="font-bold">The process fail</p>
                            <p class="text-sm">{{ session('message_fail') }} </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>



        <div class="grid grid-cols-2 gap-8 mt-6">

             <div>
                <label for="user name" class="block text-sm text-gray-700 capitalize"> First name @error('first_name') <div class="text-xs text-red-500"> {{ $message }} </div>  @enderror</label>
                <input wire:model="first_name" placeholder="Arthur " type="text" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
             </div>

             <div>
                <label for="user name" class="block text-sm text-gray-700 capitalize"> Last  name @error('middle_name') <div class="text-xs text-red-500"> {{ $message }} </div>  @enderror</label>
                <input  wire:model="middle_name" placeholder=" Melo" type="text" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>


            <div>
                <label for="user name" class="block text-sm text-gray-700 capitalize"> Last name @error('last_name') <div class="text-xs text-red-500"> {{ $message }} </div>  @enderror </label>
                <input placeholder="Juma" wire:model="last_name" type="text" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>


            <div>
                <label for="user name" class="block text-sm text-gray-700 capitalize"> Phone number  @error('phone_number') <div class="text-xs text-red-500"> {{ $message }} </div>  @enderror  </label>
                <input wire:model="phone_number" placeholder="076 *****" type="text" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>


            <div>
                <label for="email" class="block text-sm text-gray-700 capitalize"> Email @error('email') <div class="text-xs text-red-500"> {{ $message }} </div>  @enderror  </label>
                <input  wire:model="email" placeholder="example@gmail.com" type="email"  required class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>


            <div>
                <label for="Disabled" class="block text-sm text-gray-700 capitalize"> Role @error('role_id') <div class="text-xs text-red-500"> {{ $message }} </div>  @enderror  </label>

                <select wire:model="role_id"  class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <option selected  value= "2"> vendor  </option>
                </select>
            </div>

            <div>
                <label for="Disabled" class="block text-sm text-gray-700 capitalize"> Status  @error('status') <div class="text-xs text-red-500"> {{ $message }} </div>  @enderror </label>
                <select  wire:model="status" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <option value= ""> select status </option>
                    <option value= "active"> Ative  </option>
                    <option value = "pending" > Pending </option>
                    <option value ="blocked"> Blocked </option>
                </select>
            </div>




            <div>


        </div>
        <button wire:click="closeRegisterForm()" class="flex items-center justify-center  px-2 py-2 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 rounded-md md:w-auto md:mt-0 hover:bg-gray-400 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
            <svg data-slot="icon" fill="none"  class="w-4 h-4 " stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"></path>
              </svg>
            <span class="mx-1"> Discard  </span>
        </button>


        <button wire:click="register()" class="flex items-center justify-center  px-2 py-2 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md md:w-auto md:mt-0 hover:bg-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            <span class="mx-1"> Register  </span>
        </button>

    </div>



    </div>



</div>
