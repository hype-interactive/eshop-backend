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

           @case('7')
           <livewire:transaction.transaction  />

           @break

           @case('8')

           <livewire:approval.approval-list  />

           @break

           @case('10')

           <livewire:subscription.subscription-list />

           @break



       @default

   @endswitch
</div>
