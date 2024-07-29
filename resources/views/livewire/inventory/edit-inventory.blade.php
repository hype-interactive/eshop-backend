<div>
    <div class="w-full mx-6 px-16 mx-auto  rounded-lg px-8 py-8">
        {{-- <h2 class="text-3xl font-semibold mb-6 text-center">Product Registration</h2> --}}
            <div class="bg-white shadow flex w-full ">
                <div class="w-1/2">

                    <div class="flex p-4  items-center bg-white justify-between gap-x-3">
                        <div class="relative">
                            <h2 class="text-lg  font-medium text-gray-800 s:text-white"> Update  Products </h2>
                                <h6>  Update product </h6>
                        </div>
                    </div>
                                    <div class="p-2 mx-2">
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



                                        <div class="mt-4">
                                            <form wire:submit.prevent="save" class="space-y-8">

                                                <div class="grid grid-cols-1   gap-6 pb-4">





                                                    <div>
                                                        <label for="name" class="block text-sm font-medium text-gray-700"> Product Name </label>
                                                        <input wire:model="name" type="tel" id="phone_number"  placeholder="nyanya" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                        @error('name') <div for="name" class="text-red-500 text-xs " > {{ $message }}  </div> @enderror
                                                    </div>

                                                        <div>
                                                            <label for="unit" class="block text-sm font-medium text-gray-700"> unit </label>
                                                            <select wire:model.bounce="unit" name="product_category_id" id="product_category_id" class="mt-1 block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 s:bg-gray-700 s:border-gray-600 s:placeholder-gray-400 s:text-white s:focus:ring-blue-500 s:focus:border-blue-500">
                                                                <option value="kg"> KILOS</option>
                                                                <option value="tani">TANI</option>
                                                                <option value="litre"> LITRES</option>
                                                            </select>
                                                            @error('unit') <div for="name" class="text-red-500 text-xs  " > {{ $message }}  </div> @enderror
                                                        </div>
                                                    <div>
                                                            <label for="vendor_price" class="block text-sm font-medium text-gray-700">Vendor Price </label>
                                                            <input wire:model="vendor_price" type="number" id="first_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                            @error('vendor_price') <div for="name" class=" text-red-500 text-xs " > {{ $message }}  </div> @enderror
                                                        </div>

                                                        <div>
                                                            <label for="product_category_id" class="block text-sm font-medium text-gray-700"> Product Categotry </label>
                                                            <select wire:model.bounce="product_category_id" name="product_category_id" id="product_category_id" class="mt-1 block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 s:bg-gray-700 s:border-gray-600 s:placeholder-gray-400 s:text-white s:focus:ring-blue-500 s:focus:border-blue-500">

                                                                <option value=" "> Select </option>
                                                                @foreach (DB::table('product_categories')->get() as $category  )

                                                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div for="membership_type" cl                                                                                                  ass="mt-2" />
                                                        </div>

                                                        <div>
                                                            <label for="expire_date" class="block text-sm font-medium text-gray-700">Expire Date</label>
                                                            <input wire:model="expire_date" type="date" id="expire_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                            <div for="expire_date" >  </div>
                                                        </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                 <div class="w-1/2">

                    <div class="justify-center mt-6">
                        <div class="  w-full  items-center justify-center ">

                            <section class="bg-white-300 flex flex-col items-center rounded-full justify-center  mx-auto" style="width: 200px; height: 200px;">
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



                            <div class="grid grid-cols-1  gap-6 pb-4">
                                <div>
                                    <label for="quantity" class="block text-sm font-medium text-gray-700"> Product Quantity  </label>
                                    <input wire:model="quantity" type="number" id="expire_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <div for="quantity" >  </div>
                                </div>
                                <div class="flex items-center mb-4 justify-between  mx-4  ">
                                    <div class="flex items-center">
                                    <input id="default-checkbox" wire:model="visibility" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 s:focus:ring-blue-600 s:ring-offset-gray-800 focus:ring-2 s:bg-gray-700 s:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 s:text-gray-300"> visibility </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked id="checked-checkbox" type="checkbox" value="" wire:model="featured" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 s:focus:ring-blue-600 s:ring-offset-gray-800 focus:ring-2 s:bg-gray-700 s:border-gray-600">
                                        <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 s:text-gray-300"> featured </label>

                                    </div>

                                </div>
                                <div class=" flex w-full px-8 bg-white  -mt-8 mb-3 justify-end shadow-b  item-end ">
                                    <button wire:click="discard()" type="submit" class="inline-flex items-end justify-end  px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 ms-4">
                                        Discard
                                        </button>

                                        <button wire:click="update()" type="submit" class="px-2 inline-flex  bg-gradient-to-br from-blue-800 to-yellow-500 font-medium  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  focus:outline-none focus:ring-2 ">
                                            Update Product
                                            </button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
    </div>
</div>
