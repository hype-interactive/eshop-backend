<div>
   @switch($this->side_bar_id)
       @case('1')

       1
            <livewire:dashboard.dashboard />
           @break

           @case('2')
2
           @break

           @case('3')

           3
           <livewire:inventory.inventory />

           @break

           @case('4')
4
           @break

           @case('5')
5
           @break

           @case('6')
6
           @break

7
       @default

   @endswitch
</div>
