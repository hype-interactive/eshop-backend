<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}


    @switch($this->page_id)
        @case(1)

        <div class="bg-gray-2" >
            <div class="container mx-auto p-6">
                <div class="flex justify-between mb-4">
                    <div class="text-xl font-semibold"> Customers</div>
                    {{-- <select class="border-gray-200 rounded p-2">
                        <option>Jan - Jul, 2024</option>
                        <option>Jan - Jul, 2024</option>
                        <option>Jan - Jul, 2024</option>
                        <option>Jan - Jul, 2024</option>

                    </select> --}}
                </div>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="p-4 bg-white rounded shadow">
                        <div class="text-sm text-gray-600">Total Customers</div>
                        <div class="text-xl font-semibold">{{  $this->total_customers }}</div>
                    </div>
                    <div class="p-4 bg-white rounded shadow">
                        <div class="text-sm text-gray-600"> Active Customer</div>
                        <div class="text-xl font-semibold">{{ $this->total_ative_customers }}</div>
                    </div>

                </div>
                    <section class="container mx-auto">



        <livewire:customer.customer-table />
                    </section>
            </div>

            @break

            @case(2)

            <livewire:customer.view-transactions />

            @break

        @default

    @endswitch






</div>
