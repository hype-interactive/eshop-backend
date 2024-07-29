<div>

    <div class=" flex mt-6 item-center justify-center ">
    <nav class="fi-tabs flex max-w-full gap-x-1 overflow-x-auto mx-auto rounded-xl bg-white p-2  ring-1 ring-gray-950/5 s:bg-gray-900 s:ring-white/10" role="tablist">
 <button type="button" class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75  @if($this->tab_id==1) fi-active fi-tabs-item-active bg-gray-50  @endif s:bg-white/5" aria-selected="aria-selected" role="tab"   wire:click="changeTab(1)" >
        <span class="fi-tabs-item-label transition duration-75 text-primary-600 s:text-primary-400">
           Profile
        </span>
            <span style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);" class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-1.5 min-w-[theme(spacing.5)] py-0.5 tracking-tight fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10 s:bg-custom-400/10 s:text-custom-400 s:ring-custom-400/30 fi-color-primary w-max">
        <span class="grid">
            <span class="truncate">
                1
            </span>
        </span>
       </span>
 </button>

  @if(auth()->user()->role_id==2)

  @else
 <button type="button" class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-gray-50 @if($this->tab_id==2) fi-active fi-tabs-item-active bg-gray-50  @endif  focus-visible:bg-gray-50 s:hover:bg-white/5 s:focus-visible:bg-white/5" role="tab" wire:click="changeTab(2)">
        <span class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700 s:text-gray-400 s:group-hover:text-gray-200 s:group-focus-visible:text-gray-200">
           Product  Category
        </span>
 </button>



 <button type="button" class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-gray-50 @if($this->tab_id==3) fi-active fi-tabs-item-active bg-gray-50  @endif  focus-visible:bg-gray-50 s:hover:bg-white/5 s:focus-visible:bg-white/5" role="tab" wire:click="changeTab(3)" >

        <span class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700 s:text-gray-400 s:group-hover:text-gray-200 s:group-focus-visible:text-gray-200">
            Billboard Settings
        </span>

 </button>


 <button type="button" class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-gray-50 @if($this->tab_id==4) fi-active fi-tabs-item-active bg-gray-50  @endif   focus-visible:bg-gray-50 s:hover:bg-white/5 s:focus-visible:bg-white/5" role="tab"  wire:click="changeTab(4)" >

    <span class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700 s:text-gray-400 s:group-hover:text-gray-200 s:group-focus-visible:text-gray-200">
            system logs
     </span>

 </button>

 @endif

 <button type="button" class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none @if($this->tab_id) fi-active fi-tabs-item-active bg-gray-50  @endif  transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 s:hover:bg-white/5 s:focus-visible:bg-white/5" role="tab" wire:click="changeTab(5)">
        <span class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700 s:text-gray-400 s:group-hover:text-gray-200 s:group-focus-visible:text-gray-200">
           Notifications
        </span>

 </button>

</nav>

    </div>


    @switch($this->tab_id)
        @case('1')
            <livewire:setting.profile />
            @break

        @case('2')

             <livewire:setting.product-category />

        @break

        @case('3')
            <livewire:billboard.billboard />
        @break

        @default

    @endswitch



</div>
