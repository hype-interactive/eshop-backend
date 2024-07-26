<div>


    <div class="px-4 py-8 sm:px-6">
        <div>
            <h1 class="text-2xl font-medium text-gray-700 sm:text-3xl">    Profile
</h1>

            <div class="hidden mt-3 overflow-y-auto text-sm lg:items-center lg:flex whitespace-nowrap">
                <a href="#" class="text-gray-600 hover:underline">
                    Pages
                </a>

                <span class="mx-1 text-gray-500">
                    /
                </span>

                <a href="#" class="text-indigo-600 hover:underline">
                        Profile
                </a>
            </div>
        </div>

        <div class="mt-6">
                <div>
<div>
<div class="w-full rounded-lg bg-gradient-to-r from-[#305AA3] to-gray-900 h-36 sm:h-64"></div>
</div>

<div class="-mt-20">
<div class="flex flex-col items-center">
    <img class="w-24 h-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=880&amp;q=80" alt="">

    <div class="mt-4 text-center">
        <h1 class="text-2xl font-bold text-gray-700 truncate">
           {{ auth()->user()->first_name .' '. auth()->user()->last_name }}
        </h1>

        <p class="mt-1 text-gray-500">
            {{ auth()->user()->email }}
        </p>
    </div>
</div>
</div>
</div>

<div class="grid grid-cols-1 gap-8 mt-8 xl:grid-cols-2">
<div class="p-4 bg-white rounded-lg xl:p-6">
<h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl">Platform Settings</h1>

<div class="mt-6">
    <h1 class="text-xs font-medium text-gray-400 uppercase">ACCOUNT</h1>

    <div class="mt-4 space-y-5">
        <div class="flex items-center cursor-pointer" x-data="{ show: true }" @click="show =!show">
            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full bg-indigo-500" :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                <label for="show" @click="show =!show" class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer translate-x-full border-indigo-500" :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none" preview="" premium-dashboard="">
            </div>

            <p class="mx-3 text-gray-500">Email me when someone make order </p>
        </div>

        <div class="flex items-center cursor-pointer" x-data="{ show: false }" @click="show =!show">
            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full bg-gray-300" :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                <label for="show" @click="show =!show" class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer translate-x-0 border-gray-300" :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none" preview="" premium-dashboard="">
            </div>

            <p class="mx-3 text-gray-500">Email me when someone make payment </p>
        </div>

        <div class="flex items-center cursor-pointer" x-data="{ show: true }" @click="show =!show">
            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full bg-indigo-500" :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                <label for="show" @click="show =!show" class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer translate-x-full border-indigo-500" :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none" preview="" premium-dashboard="">
            </div>

            <p class="mx-3 text-gray-500"> System notification email </p>
        </div>
    </div>
</div>

<div class="mt-6">
    <h1 class="text-xs font-medium text-gray-400 uppercase">APPLICATION</h1>

    <div class="mt-4 space-y-5">

        <div class="flex items-center cursor-pointer" x-data="{ show: false }" @click="show =!show">
            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full bg-gray-300" :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                <label for="show" @click="show =!show" class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer translate-x-0 border-gray-300" :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none" preview="" premium-dashboard="">
            </div>

            <p class="mx-3 text-gray-500">Monthly product updates</p>
        </div>

        <div class="flex items-center cursor-pointer" x-data="{ show: true }" @click="show =!show">
            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full bg-indigo-500" :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                <label for="show" @click="show =!show" class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer translate-x-full border-indigo-500" :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none" preview="" premium-dashboard="">
            </div>

            <p class="mx-3 text-gray-500"> other notifiations   </p>
        </div>


        <div>
            @if (session()->has('success'))

                {{-- @if (session('alert-class') == 'alert-success') --}}
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-8" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                                <p class="font-bold">The process is completed</p>
                                <p class="text-sm">{{ session('success') }} </p>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
            @endif

            @if (session()->has('error_message'))

                <div class="bg-red-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-8" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="font-bold">The process fail</p>
                            <p class="text-sm">{{ session('error_message') }} </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>



        <div>
            <label for="phone" class="block text-sm text-gray-700 capitalize">Old Password  </label>
            <input  required  wire:model="password" type="text" class="block w-full px-3 py-2 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        </div>

        <div>
            <label for="email" class="block text-sm text-gray-700 capitalize"> New Password </label>
            <input required  wire:model="new_password" type="text" class="block w-full px-3 py-2 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
        </div>

        <div class="flex justify-end">
            <button wire:click="updatePassword" class="flex items-center px-2 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <span class="mx-1">Update</span>
            </button>
        </div>
    </div>
</div>
</div>

<div class="p-4 bg-white rounded-lg xl:p-2">
<h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl">Profile Information</h1>

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


<div class="mt-6 space-y-5">
    <div>
        <label for="username" class="block text-sm text-gray-700 capitalize">First Name   @error('first_name') <div class="text-xs text-red-500">  {{ $message }} </div>  @enderror  </label>
        <input wire:model="first_name"   type="text" class="block w-full px-3 py-1 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
    </div>

    <div>
        <label for="username" class="block text-sm text-gray-700 capitalize"> Middle  Name @error('middle_name') <div class="text-xs text-red-500">  {{ $message }} </div>  @enderror  </label>
        <input wire:model="middle_name"  type="text" class="block w-full px-3 py-1 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
    </div>

    <div>
        <label for="username" class="block text-sm text-gray-700 capitalize"> Last  Name  @error('last_name') <div class="text-xs text-red-500">  {{ $message }} </div>  @enderror   </label>
        <input wire:model="last_name"  type="text" class="block w-full px-3 py-1 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
    </div>

    <div>
        <label for="phone_number" class="block text-sm text-gray-700 capitalize"> Phone  Number @error('phone_number') <div class="text-xs text-red-500">  {{ $message }} </div>  @enderror   </label>
        <input wire:model="phone_number"  type="text" class="block w-full px-3 py-1 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
    </div>


    <div class="flex justify-end">
        <button wire:click="updateProfile()" class="flex items-center px-2 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
            </svg>
            <span class="mx-1">Update</span>
        </button>
    </div>

</div>
</div>
</div>





</div>
