<div>




    <div class="bg-gray-2">
        <div class="container mx-auto p-6">
            <div class="flex justify-between mb-4">
                <div class="text-xl font-semibold"> Approvals </div>

            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600">Total Approvals</div>
                    <div class="text-xl font-semibold"> {{ DB::table('approvals')->count() }}</div>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <div class="text-sm text-gray-600 font-bold text-red-500">Pending Approvals</div>
                    <div class="text-xl font-semibold text-red-500"> {{ DB::table('approvals')->where('status','pending')->count() }} </div>
                </div>

            </div>
                <section class="container mx-auto">
 <div>
<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">

            <div class="overflow-hidden border border-gray-200 shadow-lg  md:rounded-lg">
                <table class="min-w-full divide-y border divide-gray-200 ">
                    <thead class="bg-white ">
                        <tr class="border">

                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <div class="flex items-center gap-x-3">
                                    <span> Date </span>
                                </div>
                            </th>

                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <div class="flex items-center gap-x-3">
                                    <span> Action Name</span>
                                </div>
                            </th>

                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <div class="flex items-center gap-x-3">
                                    <span> Description </span>
                                </div>
                            </th>


                            <th scope="col" class=" py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <button class="flex items-center gap-x-2">
                                    <span> Initialized By </span>
                                </button>
                            </th>


                            <th scope="col" class=" py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                <button class="flex items-center gap-x-2">
                                    <span> Approved By </span>
                                </button>
                            </th>


                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                <span class="flex items-center gap-x-2">
                                    <span> Action Date </span>
                                </span>
                            </th>


                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">  Action  </th>


                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200  ">

                        @foreach ($this->approvals as $approval )
                        <tr class="cursor-pointer hover:bg-gray-50 " >
                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <div class="flex items-center gap-x-2">
                                        {{ $approval->created_at->format('Y-m-d') }}
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-2 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <div class="flex items-center gap-x-2">
                                        <div>
                                            <h2 class="font-medium text-gray-800  "> {{ $approval->action_name }}</h2>

                                        </div>
                                    </div>
                                </div>
                            </td>



                            <td class=" py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class=" ">
                                   {{ $approval->description }}
                                </div>
                            </td>

                            <td class="px-4 py-2 text-sm text-gray-500  whitespace-nowrap"> {{ DB::table('users')->where('id',$approval->initiator)->value('first_name') }} </td>

                            <td class=" py-2 text-sm whitespace-nowrap">
                                <div class=" ">
                                  <p class="px-3 py-1 text-xs ">  {{ DB::table('users')->where('id',$approval->approved_by)->value('first_name') }} </p>
                                </div>
                            </td>

                            <td class="px-4 py-2 text-sm whitespace-nowrap">
                                <div class="flex items-center gap-x-2">
                                  <p class="px-3 py-1 text-xs text-pink-500 rounded-full  bg-pink-100/60"> {{ $approval->updated_at->format('Y-m-d') }} </p>
                                </div>
                            </td>


                            <td class="px-4 py-2 text-sm whitespace-nowrap">
                                <div class="flex items-center gap-x-6">
                                    @if($approval->approved_by)

                                    @else
                                    <button  class="text-gray-500 bg-blue-200 rounded-full  transition-colors duration-200   hover:text-red-500 focus:outline-none" wire:click="approvalModalAction('{{ $approval->id }}')" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                          </svg>

                                    </button>

                                    <div wire:click="decline({{ $approval->id }})" class="text-gray-500 bg-red-200 rounded-full transition-colors duration-200  hover:text-blue-500 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                          </svg>
                                        </div>
                                        @endif
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

</div>
                </section>
        </div>

        <!--[if ENDBLOCK]><![endif]-->






</div>






<!-- Modal toggle -->

@if($this->approval_modal_bool)
  <!-- Main modal -->
  <div id="select-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 flex items-center justify-center z-50 overflow-y-auto overflow-x-hidden">
    <div class="relative w-full max-w-4xl bg-white rounded-lg shadow-lg">
        <!-- Modal content -->
        <div class="relative bg-white">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">
                    Check Approval
                </h3>
                <button wire:click="$toggle('approval_modal_bool')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 inline-flex justify-center items-center hover:bg-gray-200 focus:outline-none" data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <p class="text-gray-500 mb-4">Select your desired position:</p>

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


                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <!-- Old Version Table -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md overflow-auto">
                        <h2 class="text-lg font-semibold mb-4">Old Version</h2>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    @foreach ($actual_package[0] as $key => $value)

                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ ucfirst($key) }}
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    @foreach ($actual_package[0] as $value)
                                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                            @if(is_string($value) && filter_var($value, FILTER_VALIDATE_URL))
                                                <img src="{{ $value }}" alt="Image" class="w-24 h-24 object-cover">
                                            @else
                                                {{ $value }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- New Version Table -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md overflow-auto">
                        <h2 class="text-lg font-semibold mb-4">New Version</h2>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    @foreach ($edit_package as $key => $value)
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ ucfirst($key) }}
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    @foreach ($edit_package as $value)
                                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                            @if(is_string($value) && filter_var($value, FILTER_VALIDATE_URL))
                                                <img src="{{ $value }}" alt="Image" class="w-24 h-24 object-cover">
                                            @else
                                                {{ $value }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex gap-4 space-x-4">
                <button wire:click="$toggle('approval_modal_bool')"  class="text-blue-900 inline-flex w-full justify-center bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4">
                    Close Modal
                </button>
                <button wire:click="update()" class="text-white inline-flex w-full justify-center bg-gradient-to-br from-blue-800 to-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4">
                    Approval Changes
                </button>
                </div>
            </div>
        </div>
    </div>
</div>


@endif

</div>
