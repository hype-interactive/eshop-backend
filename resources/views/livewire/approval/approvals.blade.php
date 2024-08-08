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


                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
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
                        <!--[if BLOCK]><![endif]-->
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
                                    <button  class="text-gray-500 bg-blue-200 rounded-full  transition-colors duration-200   hover:text-red-500 focus:outline-none" wire:click="approvalModalAction('{{ $approval->id }}')" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                          </svg>

                                    </button>

                                    <button wire:click="decline('{{ $approval->id }}')" class="text-gray-500 bg-red-200 rounded-full transition-colors duration-200  hover:text-blue-500 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                          </svg>
                                    </button>
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
  <div id="select-modal" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Open positions
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <p class="text-gray-500 dark:text-gray-400 mb-4">Select your desired position:</p>
                <ul class="space-y-4 mb-4">
                    <li>
                        <input type="radio" id="job-1" name="job" value="job-1" class="hidden peer" required />
                        <label for="job-1" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">UI/UX Engineer</div>
                                <div class="w-full text-gray-500 dark:text-gray-400">Flowbite</div>
                            </div>
                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="job-2" name="job" value="job-2" class="hidden peer">
                        <label for="job-2" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">React Developer</div>
                                <div class="w-full text-gray-500 dark:text-gray-400">Alphabet</div>
                            </div>
                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="job-3" name="job" value="job-3" class="hidden peer">
                        <label for="job-3" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">Full Stack Engineer</div>
                                <div class="w-full text-gray-500 dark:text-gray-400">Apple</div>
                            </div>
                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                        </label>
                    </li>
                </ul>
                <button class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Next step
                </button>
            </div>
        </div>
    </div>
</div>


@endif



@if($this->approval_modal_bool)
  <!-- Main modal -->
  <div id="select-modal" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Open positions
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <p class="text-gray-500 dark:text-gray-400 mb-4">Select your desired position:</p>
                <ul class="space-y-4 mb-4">
                    <li>
                        <input type="radio" id="job-1" name="job" value="job-1" class="hidden peer" required />
                        <label for="job-1" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">UI/UX Engineer</div>
                                <div class="w-full text-gray-500 dark:text-gray-400">Flowbite</div>
                            </div>
                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="job-2" name="job" value="job-2" class="hidden peer">
                        <label for="job-2" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">React Developer</div>
                                <div class="w-full text-gray-500 dark:text-gray-400">Alphabet</div>
                            </div>
                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="job-3" name="job" value="job-3" class="hidden peer">
                        <label for="job-3" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">Full Stack Engineer</div>
                                <div class="w-full text-gray-500 dark:text-gray-400">Apple</div>
                            </div>
                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                        </label>
                    </li>
                </ul>
                <button class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Next step
                </button>
            </div>
        </div>
    </div>
</div>


@endif







</div>
