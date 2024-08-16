<div>

    <div class="container mx-auto p-6">
        <div class="flex justify-between mb-4">
            <div class="text-xl font-semibold"> Subscriptions  </div>

        </div>


        <section class="bg-white py-8 antialiased shadow d:bg-gray-900 md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
              <div class="mx-auto max-w-5xl">
                <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                  <h2 class="text-xl font-semibold text-gray-900 d:text-white sm:text-2xl"> Vendor :  {{  $this->vendor_name}} </h2>

                  <div class="mt-6 gap-4 space-y-4 sm:mt-0 sm:flex sm:items-center sm:justify-end sm:space-y-0">
                    <div>
                      <label for="order-type" class="sr-only mb-2 block text-sm font-medium text-gray-900 d:text-white">Select order type</label>
                      <select wire:model.live="status" id="order-type" class="block w-full min-w-[8rem] rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 d:border-gray-600 d:bg-gray-700 d:text-white d:placeholder:text-gray-400 d:focus:border-primary-500 d:focus:ring-primary-500">
                        <option selected value="">All </option>
                        <option value="pending"> Pending </option>
                        <option value="active"> Active </option>

                        <option value="out_of_service"> Out of service</option>
                      </select>
                    </div>

                    <span class="inline-block text-gray-500 d:text-gray-400"> from </span>

                    <div>
                      <label for="duration" class="sr-only mb-2 block text-sm font-medium text-gray-900 d:text-white">Select duration</label>
                      <select id="duration" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 d:border-gray-600 d:bg-gray-700 d:text-white d:placeholder:text-gray-400 d:focus:border-primary-500 d:focus:ring-primary-500">
                        <option selected="">this week</option>
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


    @foreach ($subsriptions as $value )


                    <div class="flex flex-wrap items-center gap-y-4 py-6">

                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-base font-medium text-gray-500 d:text-gray-400"> Issue Date  </dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 d:text-white"> {{ $value->created_at->format('Y-M-d') }} </dd>
                          </dl>

                      <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                        <dt class="text-base font-medium text-gray-500 d:text-gray-400"> Plan Amount </dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 d:text-white">
                          <a href="#" class="hover:underline">{{  number_format($value->price,2) }}</a>
                        </dd>
                      </dl>

                      <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                        <dt class="text-base font-medium text-gray-500 d:text-gray-400"> Start Date </dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 d:text-white">  {{ $value->start_date }}</dd>
                      </dl>

                      <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                        <dt class="text-base font-medium text-gray-500 d:text-gray-400">  End Date </dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 d:text-white"> {{ $value->end_date }} </dd>
                      </dl>

                      <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                        <dt class="text-base font-medium text-gray-500 d:text-gray-400">Status:</dt>

                          <dd class="me-2 mt-1.5 inline-flex items-center rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 d:bg-red-900 d:text-red-300">
                            <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
                            </svg>
                            {{ $value->status }}
                          </dd>




                      </dl>

                    </div>



                    @endforeach



                  </div>
                </div>
   {{ $subsriptions->links() }}
              </div>
            </div>
          </section>


</div>

</div>
