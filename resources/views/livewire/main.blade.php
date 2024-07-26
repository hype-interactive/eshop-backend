<div>
   @switch($this->side_bar_id)
       @case('1')
            <livewire:dashboard.dashboard />
           @break

           @case('2')
           <livewire:order.order-list  />

           @break

           @case('3')
           <livewire:inventory.inventory />

           @break

           @case('4')
         <livewire:vendor.vendor />
           @break

           @case('5')
           <livewire:customer.customer />
           @break

           @case('6')
           <livewire:setting.setting />

           @break
       @default

   @endswitch
</div>
