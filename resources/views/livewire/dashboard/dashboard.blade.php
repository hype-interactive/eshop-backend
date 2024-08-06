<div>

    @switch(auth()->user()->role_id)
        @case(1)
            <livewire:dashboard.admin-dashboard />
            @break

            @case(2)
            <livewire:dashboard.vendor-dashboard />

            @break

        @default

    @endswitch

 </div>
