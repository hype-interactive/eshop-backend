<div>


    @switch($this->page_id)
        @case('1')

        <div class="container mx-auto p-6">
            <div class="flex justify-between mb-4">
                <div class="text-xl font-semibold"> Orders </div>
                {{-- <select class="border-gray-200 rounded p-2">
                    <option>Jan - Jul, 2024</option>
                    <option>Jan - Jul, 2024</option>
                    <option>Jan - Jul, 2024</option>
                    <option>Jan - Jul, 2024</option>

                </select> --}}
            </div>
            <div class="grid grid-cols-4 gap-4 mb-6">
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Orders</div>
                    <div class="text-xl font-semibold"> {{ $total_orders }}</div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Cancelled Orders</div>
                    <div class="text-xl font-semibold">{{ $cancelled_order  }} </div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Out of Stock Products</div>
                    <div class="text-xl font-semibold">{{ $this->product_out_of_stocks }}</div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">In Stock Products</div>
                    <div class="text-xl font-semibold"> {{ $this->product_onstock_stock }}</div>
                </div>
            </div>

            <section class="bg-white py-8 antialiased shadow d:bg-gray-900 md:py-16">
                <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                  <div class="mx-auto max-w-5xl">
                    <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                      <h2 class="text-xl font-semibold text-gray-900 d:text-white sm:text-2xl">My orders</h2>

                      <div class="mt-6 gap-4 space-y-4 sm:mt-0 sm:flex sm:items-center sm:justify-end sm:space-y-0">
                        <div>
                          <label for="order-type" class="sr-only mb-2 block text-sm font-medium text-gray-900 d:text-white">Select order type</label>
                          <select id="order-type" class="block w-full min-w-[8rem] rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 d:border-gray-600 d:bg-gray-700 d:text-white d:placeholder:text-gray-400 d:focus:border-primary-500 d:focus:ring-primary-500">
                            <option selected>All orders</option>
                            <option value="confirmed">completed</option>
                            <option value="cancelled">Cancelled</option>
                          </select>
                        </div>

                        <span class="inline-block text-gray-500 d:text-gray-400"> from </span>

                        <div>
                          <label for="duration" class="sr-only mb-2 block text-sm font-medium text-gray-900 d:text-white">Select duration</label>
                          <select id="duration" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 d:border-gray-600 d:bg-gray-700 d:text-white d:placeholder:text-gray-400 d:focus:border-primary-500 d:focus:ring-primary-500">
                            <option selected>this week</option>
                            <option value="this month">this month</option>
                            <option value="last 3 months">the last 3 months</option>
                            <option value="lats 6 months">the last 6 months</option>
                            <option value="this year">this year</option>
                          </select>
                        </div>
                      </div>
                    </div>



                    <div class="mt-6 flow-root sm:mt-8">
                      <div class="divide-y divide-gray-200 d:divide-gray-700">


                        @foreach ($this->orders as  $order)


                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                          <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-base font-medium text-gray-500 d:text-gray-400">Order ID:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 d:text-white">
                              <a href="#" class="hover:underline">{{ $order->order_id }}</a>
                            </dd>
                          </dl>

                          <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-base font-medium text-gray-500 d:text-gray-400">Date:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 d:text-white"> {{ $order->created_at->format('Y-m-d') }}</dd>
                          </dl>

                          <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-base font-medium text-gray-500 d:text-gray-400">Price:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 d:text-white"> {{ number_format($order->total,2) }} TZS </dd>
                          </dl>

                          <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-base font-medium text-gray-500 d:text-gray-400">Status:</dt>
                            @if($order->status =="pending")
                            <dd class="me-2 mt-1.5 inline-flex items-center rounded bg-yellow-50 px-2.5 py-0.5 text-xs font-medium text-primary-800 d:bg-primary-900 d:text-primary-300">
                              <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 4h-13m13 16h-13M8 20v-3.333a2 2 0 0 1 .4-1.2L10 12.6a1 1 0 0 0 0-1.2L8.4 8.533a2 2 0 0 1-.4-1.2V4h8v3.333a2 2 0 0 1-.4 1.2L13.957 11.4a1 1 0 0 0 0 1.2l1.643 2.867a2 2 0 0 1 .4 1.2V20H8Z" />
                              </svg>
                              {{ $order->status }}
                            </dd>
                            @elseif($order->status =='completed' )

                            <dd class="me-2 mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 d:bg-green-900 d:text-green-300">
                                <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                                completed
                              </dd>
                              @elseif($order->status =='cancelled' )

                              <dd   class="me-2 mt-1.5 inline-flex items-center rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 d:bg-red-900 d:text-red-300">
                                <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                </svg>
                                Cancelled
                              </dd>
                              @endif



                          </dl>

                          <div class="w-full grid sm:grid-cols-2 lg:flex lg:w-64 lg:items-center lg:justify-end gap-4">
                            @if($order->status =='completed'  )   @else
                              <button type="button" class="w-full rounded-lg border border-red-700 px-3 py-2 text-center text-sm font-medium text-red-700 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-red-300 d:border-red-500 d:text-red-500 d:hover:bg-red-600 d:hover:text-white d:focus:ring-red-900 lg:w-auto" wire:click = "enableCancelModal({{ $order->id }})">Cancel order</button>

                              @endif


                            <a href="#" class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 d:border-gray-600 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white d:focus:ring-gray-700 lg:w-auto" wire:click="viewOrder({{ $order->id }})" >View details</a>

                        </div>
                        </div>

                        @endforeach

                      </div>
                    </div>

                    <nav class="mt-6 flex items-center justify-center sm:mt-8" aria-label="Page navigation example">
                      <ul class="flex h-8 items-center -space-x-px text-sm">
                        <li>
                          <a href="#" class="ms-0 flex h-8 items-center justify-center rounded-s-lg border border-e-0 border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 d:border-gray-700 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="h-4 w-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 d:border-gray-700 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white">1</a>
                        </li>
                        <li>
                          <a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 d:border-gray-700 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white">2</a>
                        </li>
                        <li>
                          <a href="#" aria-current="page" class="z-10 flex h-8 items-center justify-center border border-primary-300 bg-primary-50 px-3 leading-tight text-primary-600 hover:bg-primary-100 hover:text-primary-700 d:border-gray-700 d:bg-gray-700 d:text-white">3</a>
                        </li>
                        <li>
                          <a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 d:border-gray-700 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white">...</a>
                        </li>
                        <li>
                          <a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 d:border-gray-700 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white">100</a>
                        </li>
                        <li>
                          <a href="#" class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 d:border-gray-700 d:bg-gray-800 d:text-gray-400 d:hover:bg-gray-700 d:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="h-4 w-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </section>











      @if( $this->isOpen )
      <!-- Main modal -->
      <div id="progress-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto overflow-x-hidden">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">

                  <div class=" w-full">

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


                      <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl s:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-md sm:w-full sm:p-6">

                        <div>
                            {{-- <img class="object-cover w-full h-48 rounded-md" src="https://images.unsplash.com/photo-1579226905180-636b76d96082?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt=""> --}}
                            <div class="mt-4 text-center">
                                <h3 class="font-medium leading-6 text-gray-800 capitalize s:text-white" id="modal-title">
                                   Are you sure you want to cancel this order ?
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 s:text-gray-400">
                                    Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Aspernatur dolorum aliquam ea, ratione deleniti porro officia? Explicabo
                                    maiores suscipit.
                                </p>
                            </div>
                    </div>

                      <!-- Modal footer -->
                      <div class="flex items-end justify-end  mt-6 space-x-4 rtl:space-x-reverse">
                          <button wire:click="$toggle('isOpen')" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                          <button wire:click="cancelOrder()" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"> Confirm   </button>

                        </div>
                  </div>
              </div>
          </div>
      </div>

      @endif


            @break


            @case('2')
       <livewire:order.view-order />

            @break

        @default

    @endswitch

















</div>
