<div>


    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow-lg">
                    <div class="flex justify-start items-start px-4 mb-6 space-x-6">
                        <div class="min-w-20">
                            <div class="py-4 text-base font-semibold text-gray-900"> Inactive </div>
                            <div id="kanban-list-1" class="p-4 mb-6 space-y-6 bg-gray-200 rounded-xl min-w-20">


                                @foreach ( $this->billboards as $billboard)

                                <div
                                class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move">
                                <div class="flex justify-between items-center pb-4">
                                    <div class="text-base font-semibold text-gray-900"> {{ $billboard->name }} </div>
                                    <button type="button" data-modal-toggle="kanban-card-modal"
                                        class="p-1 text-gray-500 hover:text-gray-900">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>

                                </div>
                                <div class="flex justify-center items-center pb-4">
                                    <img class="bg-contain rounded-2xl"
                                        src=" @if($billboard->image_url) {{ asset($billboard->image_url) }} @else  https://demos.creative-tim.com/soft-ui-flowbite-pro/images/kanban/task-3.jpg @endif "
                                        alt="{{ $billboard->name }}">
                                </div>
                                <div class="flex flex-col">
                                    <div class="pb-4 text-sm font-normal text-gray-700">

                                        {{ $billboard->description }}

                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex justify-start items-center">

                                            <a wire:click="delete({{ $billboard->id }})">
                                                <svg data-slot="icon" class="w-6 h-6 " fill="none"
                                                    stroke-width="1.5" stroke="red " viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z">
                                                    </path>
                                                </svg>

                                            </a>


                                        </div>
                                        <div
                                            class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-blue-900 to-yellow-800 rounded-2xl">
                                            <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $billboard->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                                @endforeach

                                <div
                                    class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move">
                                    <div class="flex justify-between items-center pb-4">
                                        <div class="text-base font-semibold text-gray-900"> billboard title </div>
                                        <button type="button" data-modal-toggle="kanban-card-modal"
                                            class="p-1 text-gray-500 hover:text-gray-900">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>

                                    </div>
                                    <div class="flex justify-center items-center pb-4">
                                        <img class="bg-contain rounded-2xl"
                                            src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/kanban/task-3.jpg"
                                            alt="attachment">
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="pb-4 text-sm font-normal text-gray-700">

                                            Change homepage for Volt
                                            Dashboard. (descriptions )

                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex justify-start items-center">

                                                <a wire:click="delete(2)">
                                                    <svg data-slot="icon" class="w-6 h-6 " fill="none"
                                                        stroke-width="1.5" stroke="red " viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z">
                                                        </path>
                                                    </svg>

                                                </a>


                                            </div>
                                            <div
                                                class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-blue-900 to-yellow-800 rounded-2xl">
                                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                22 days left
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move">
                                    <div class="flex justify-between items-center pb-4">
                                        <div class="text-base font-semibold text-gray-900">Change charts javascript
                                        </div>
                                        <button type="button" data-modal-toggle="kanban-card-modal"
                                            class="p-1 text-gray-500 hover:text-gray-900">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="pb-4 text-sm font-normal text-gray-700">In _variables.scss on line
                                            672 you define $table_variants. Each instance of "color-level" needs to be
                                            changed to "shift-color".</div>
                                        <div class="flex justify-between">
                                            <div class="flex justify-start items-center">
                                                <a href="#" data-tooltip-target="user_65_1" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/bonnie-green.png"
                                                        alt="Bonnie Green">
                                                </a>
                                                <div id="user_65_1" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top" data-popper-reference-hidden=""
                                                    data-popper-escaped=""
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-21px, -56px);">
                                                    Bonnie Green<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(51px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_65_2" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/roberta-casas.png"
                                                        alt="Roberta Casas">
                                                </a>
                                                <div id="user_65_2" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top" data-popper-reference-hidden=""
                                                    data-popper-escaped=""
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-9px, -56px);">
                                                    Roberta Casas<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_65_3" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png"
                                                        alt="Michael Gough">
                                                </a>
                                                <div id="user_65_3" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top" data-popper-reference-hidden=""
                                                    data-popper-escaped=""
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(7px, -56px);">
                                                    Michael Gough<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-blue-900 to-yellow-800 rounded-2xl">
                                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                7 days left
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button wire:click="registerModal()" type="button" data-modal-toggle="new-card-modal"
                                class="flex justify-center items-center py-2 w-full font-medium text-gray-900 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 hover:border-gray-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Add another card
                            </button>
                        </div>




                        <div class="min-w-20">
                            <div class="py-4 text-base font-semibold text-gray-900">Active </div>
                            <div id="kanban-list-2" class="p-4 mb-6 space-y-6 bg-gray-200 rounded-xl min-w-20">
                                <div
                                    class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move">
                                    <div class="flex justify-between items-center pb-4">
                                        <div class="text-base font-semibold text-gray-900">Redesign tables card</div>
                                        <button type="button" data-modal-toggle="kanban-card-modal"
                                            class="p-1 text-gray-500 hover:text-gray-900">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex justify-center items-center pb-4">
                                        <img class="bg-contain rounded-2xl"
                                            src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/kanban/task-1.jpg"
                                            alt="attachment">
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="pb-4 text-sm font-normal text-gray-700">In _variables.scss on line
                                            672 you define $table_variants. Each instance of "color-level" needs to be
                                            changed to "shift-color".</div>
                                        <div class="flex justify-between">
                                            <div class="flex justify-start items-center">
                                                <a href="#" data-tooltip-target="user_76_1" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/bonnie-green.png"
                                                        alt="Bonnie Green">
                                                </a>
                                                <div id="user_76_1" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-21px, -56px);">
                                                    Bonnie Green<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(51px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_76_2" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/roberta-casas.png"
                                                        alt="Roberta Casas">
                                                </a>
                                                <div id="user_76_2" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-9px, -56px);">
                                                    Roberta Casas<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_76_3" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png"
                                                        alt="Michael Gough">
                                                </a>
                                                <div id="user_76_3" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(7px, -56px);">
                                                    Michael Gough<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-blue-900 to-yellow-800 rounded-2xl">
                                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                9 days left
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move">
                                    <div class="flex justify-between items-center pb-4">
                                        <div class="text-base font-semibold text-gray-900">Redesign tables card</div>
                                        <button type="button" data-modal-toggle="kanban-card-modal"
                                            class="p-1 text-gray-500 hover:text-gray-900">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="pb-4 text-sm font-normal text-gray-700">In _variables.scss on line
                                            672 you define $table_variants. Each instance of "color-level" needs to be
                                            changed to "shift-color".</div>
                                        <div class="flex justify-between">
                                            <div class="flex justify-start items-center">
                                                <a href="#" data-tooltip-target="user_49_1" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/bonnie-green.png"
                                                        alt="Bonnie Green">
                                                </a>
                                                <div id="user_49_1" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top" data-popper-reference-hidden=""
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-21px, -56px);">
                                                    Bonnie Green<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(51px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_49_2" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/roberta-casas.png"
                                                        alt="Roberta Casas">
                                                </a>
                                                <div id="user_49_2" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top" data-popper-reference-hidden=""
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-9px, -56px);">
                                                    Roberta Casas<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_49_3" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png"
                                                        alt="Michael Gough">
                                                </a>
                                                <div id="user_49_3" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top" data-popper-reference-hidden=""
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(7px, -56px);">
                                                    Michael Gough<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-blue-900 to-yellow-800 rounded-2xl">
                                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                3 days left
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-modal-toggle="new-card-modal"
                                class="flex justify-center items-center py-2 w-full font-medium text-gray-900 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 hover:border-gray-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Add another card
                            </button>
                        </div>


                        <div class="min-w-20">
                            <div class="py-4 text-base font-semibold text-gray-900">Done</div>
                            <div id="kanban-list-3" class="p-4 mb-6 space-y-6 bg-gray-200 rounded-xl min-w-20">

                                <div class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move"
                                    style="">
                                    <div class="flex justify-between items-center pb-4">
                                        <div class="text-base font-semibold text-gray-900">Redesign tables card</div>
                                        <button type="button" data-modal-toggle="kanban-card-modal"
                                            class="p-1 text-gray-500 hover:text-gray-900">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="pb-4 text-sm font-normal text-gray-700">In _variables.scss on line
                                            672 you define $table_variants. Each instance of "color-level" needs to be
                                            changed to "shift-color".</div>
                                        <div class="flex justify-between">
                                            <div class="flex justify-start items-center">
                                                <a href="#" data-tooltip-target="user_43_1" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/bonnie-green.png"
                                                        alt="Bonnie Green">
                                                </a>
                                                <div id="user_43_1" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="bottom"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-21px, 196px);">
                                                    Bonnie Green<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(51px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_43_2" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/roberta-casas.png"
                                                        alt="Roberta Casas">
                                                </a>
                                                <div id="user_43_2" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="bottom"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-9px, 196px);">
                                                    Roberta Casas<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_43_3" class="-mr-3">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png"
                                                        alt="Michael Gough">
                                                </a>
                                                <div id="user_43_3" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="bottom"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(7px, 196px);">
                                                    Michael Gough<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-green-500 to-green-700 rounded-2xl">
                                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Done
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move"
                                    draggable="false" style="">
                                    <div class="flex justify-between items-center pb-4">
                                        <div class="text-base font-semibold text-gray-900">Redesign tables card</div>
                                        <button type="button" data-modal-toggle="kanban-card-modal"
                                            class="p-1 text-gray-500 hover:text-gray-900">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex justify-center items-center pb-4">
                                        <img class="bg-contain rounded-2xl"
                                            src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/kanban/task-2.jpg"
                                            alt="attachment" draggable="false">
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="pb-4 text-sm font-normal text-gray-700">In _variables.scss on line
                                            672 you define $table_variants. Each instance of "color-level" needs to be
                                            changed to "shift-color".</div>
                                        <div class="flex justify-between">
                                            <div class="flex justify-start items-center">
                                                <a href="#" data-tooltip-target="user_87_1" class="-mr-3"
                                                    draggable="false">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/bonnie-green.png"
                                                        alt="Bonnie Green" draggable="false">
                                                </a>
                                                <div id="user_87_1" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-21px, -56px);"
                                                    data-popper-reference-hidden="">Bonnie Green<div
                                                        class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(51px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_87_2" class="-mr-3"
                                                    draggable="false">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/roberta-casas.png"
                                                        alt="Roberta Casas" draggable="false">
                                                </a>
                                                <div id="user_87_2" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-9px, -56px);"
                                                    data-popper-reference-hidden="">Roberta Casas<div
                                                        class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_87_3" class="-mr-3"
                                                    draggable="false">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png"
                                                        alt="Michael Gough" draggable="false">
                                                </a>
                                                <div id="user_87_3" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(7px, -56px);"
                                                    data-popper-reference-hidden="">Michael Gough<div
                                                        class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-green-500 to-green-700 rounded-2xl">
                                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Done
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col p-5 max-w-md bg-white rounded-2xl shadow-sm transform cursor-move"
                                    style="" draggable="false">
                                    <div class="flex justify-between items-center pb-4">
                                        <div class="text-base font-semibold text-gray-900">Create Javascript elements
                                        </div>
                                        <button type="button" data-modal-toggle="kanban-card-modal"
                                            class="p-1 text-gray-500 hover:text-gray-900">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="pb-4 text-sm font-normal text-gray-700">In _variables.scss on line
                                            672 you define $table_variants. Each instance of "color-level" needs to be
                                            changed to "shift-color".</div>
                                        <div class="flex justify-between">
                                            <div class="flex justify-start items-center">
                                                <a href="#" data-tooltip-target="user_34_1" class="-mr-3"
                                                    draggable="false">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/bonnie-green.png"
                                                        alt="Bonnie Green" draggable="false">
                                                </a>
                                                <div id="user_34_1" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-21px, -56px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">Bonnie
                                                    Green<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(51px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_34_2" class="-mr-3"
                                                    draggable="false">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/roberta-casas.png"
                                                        alt="Roberta Casas" draggable="false">
                                                </a>
                                                <div id="user_34_2" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-9px, -56px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">Roberta
                                                    Casas<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                                <a href="#" data-tooltip-target="user_34_3" class="-mr-3"
                                                    draggable="false">
                                                    <img class="w-7 h-7 rounded-full border-2 border-white"
                                                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png"
                                                        alt="Michael Gough" draggable="false">
                                                </a>
                                                <div id="user_34_3" role="tooltip"
                                                    class="inline-block absolute invisible z-50 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl opacity-0 transition-opacity duration-300 tooltip shadow-lg-sm"
                                                    data-popper-placement="top"
                                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(7px, -56px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">Michael
                                                    Gough<div class="tooltip-arrow" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(55px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-center items-center px-3 text-xs font-bold uppercase text-white bg-gradient-to-br from-green-500 to-green-700 rounded-2xl">
                                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Done
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-modal-toggle="new-card-modal"
                                class="flex justify-center items-center py-2 w-full font-medium text-gray-900 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 hover:border-gray-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Add another card
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>







    @if ($this->enableRegisterModalboolean)

        <div class="overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full flex"
            id="new-card-modal" aria-modal="true" role="dialog">
            <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">

                <div class="relative bg-white rounded-2xl shadow-lg">

                    <div class="flex justify-between items-center p-4 rounded-t border-b md:px-6">
                        <div class="text-xl font-semibold">Add new </div>
                        <button wire:click="$toggle('enableRegisterModalboolean')" type="button" data-modal-toggle="new-card-modal"
                            class="text-gray-400 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 space-y-6 md:px-6">
                        <div action="#">
                            <div class="grid grid-cols-2 gap-6 mb-4">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="product-name"
                                        class="block mb-2 text-sm font-medium text-gray-900">Card  Name
                                        @error('name')
                                            <div class="text-xs text-red-500">  {{ $message }} </div>
                                        @enderror

                                    </label>
                                    <input wire:model="name" type="text" name="product-name" id="product-name"
                                        class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-blue-50 focus:border-blue-300 block w-full p-2.5"
                                        placeholder="Redesign Homepage" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="product-details"
                                        class="block mb-2 text-sm font-medium text-gray-900">
                                        Enter a
                                        description

                                        @error('description')
                                        <div class="text-xs text-red-500">  {{ $message }} </div>
                                    @enderror

                                    </label>
                                    <textarea wire:model="description" id="product-details" rows="6"
                                        class="block w-full text-gray-900 rounded-lg border border-gray-200 sm:text-sm focus:ring-2 focus:ring-blue-50 focus:border-blue-300"
                                        placeholder=" billboard descriptions "></textarea>
                                </div>
                            </div>
                            <div class="flex justify-center items-center w-full">
                                <label
                                    class="flex justify-center items-center w-full h-32 text-gray-500 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer hover:bg-gray-100 hover:border-gray-300 hover:text-gray-900">
                                    <div class="flex justify-center items-center space-x-2">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <p class="text-base">Drop files to upload

                                            @error('image')
                                            <div class="text-xs text-red-500">  {{ $message }} </div>
                                        @enderror

                                        </p>
                                    </div>
                                    <input wire:model="image" type="file" class="hidden">
                                </label>
                            </div>

                            <div class="flex items-center mt-4 ">
                                <input wire:model="visibility" id="default-checkbox" wire:model="visibility" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 s:focus:ring-blue-600 s:ring-offset-gray-800 focus:ring-2 s:bg-gray-700 s:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 s:text-gray-300"> visibility
                                    @error('visibility')
                                    <div class="text-xs text-red-500">  {{ $message }} </div>
                                @enderror

                                </label>
                                </div>

                            </div>
                    </div>

                    <div class="flex items-center p-4 space-x-3 rounded-b border-t border-gray-200 md:p-6">
                        <button wire:click="create()" type="submit"
                            class="w-32 inline-flex items-center justify-center text-white bg-gradient-to-br from-blue-900 to-yellow-800 border border-blue-700 hover:border-blue-800 font-semibold rounded-lg text-sm py-2.5 text-center shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                            <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Add Card
                        </button>
                        <button   wire:click="$toggle('enableRegisterModalboolean')"  type="button" data-modal-toggle="new-card-modal"
                            class="w-24 text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 hover:border-gray-300 font-semibold rounded-lg text-sm py-2.5 text-center hover:scale-[1.02] transition-transform">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>
    @endif









</div>
