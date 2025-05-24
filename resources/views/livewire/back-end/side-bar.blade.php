<div>
    <style>
        .background-primary-color {
            background: linear-gradient(135deg, #305AA3 0%, #2A4E8C 100%);
        }
        .text-primary-color {
            color: #F5AD42;
        }
        .sidebar-shadow {
            box-shadow: 4px 0 20px rgba(48, 90, 163, 0.15);
        }
        .menu-item-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .menu-item-hover:hover {
            transform: translateX(4px);
            background: rgba(245, 173, 66, 0.1);
            border-radius: 12px;
        }
        .active-indicator {
            background: linear-gradient(90deg, #F5AD42 0%, rgba(245, 173, 66, 0.3) 100%);
            border-radius: 0 12px 12px 0;
        }
        .logo-glow {
            filter: drop-shadow(0 4px 8px rgba(245, 173, 66, 0.3));
        }
        .mobile-overlay {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
        }
    </style>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" 
            class="lg:hidden fixed top-4 left-4 z-50 p-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

    <!-- Mobile Overlay -->
    <div id="mobile-overlay" 
         class="lg:hidden fixed inset-0 z-40 mobile-overlay opacity-0 invisible transition-all duration-300"></div>

    <!-- Enhanced Sidebar -->
    <aside id="sidebar"
           class="background-primary-color sidebar-shadow text-white w-72 px-4 py-6 fixed inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 overflow-y-auto">
        
        <!-- Logo Section -->
        <div class="mb-8 text-center">
            <div class="relative inline-block">
                <img src="{{asset('/loginSlider/eshop-icon.png')}}" 
                     alt="Logo" 
                     class="w-20 h-16 mx-auto mb-3 logo-glow rounded-xl bg-white/10 p-2">
                <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-xl blur opacity-20"></div>
            </div>
            <h2 class="text-xl font-bold text-white">eShop @if(auth()->user()->role_id==1) Admin @else Vendor @endif </h2>
            <p class="text-sm text-blue-200 mt-1">Management System</p>
        </div>

        <!-- Divider -->
        <div class="h-px bg-gradient-to-r from-transparent via-white/20 to-transparent mb-6"></div>

        <!-- Main Navigation -->
        <nav class="space-y-2">
            <!-- Dashboard -->
            <div class="relative group">
                <div wire:click="selectedMenu(1)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==1) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(1)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(1)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==1) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==1) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Dashboard
                        </span>
                    </div>
                    @if($this->menu_id==1)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==1)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>

            @if(auth()->user()->role_id != 2)
            <!-- Vendors -->
            <div class="relative group">
                <div wire:click="selectedMenu(4)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==4) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(4)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(4)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==4) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==4) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Vendors
                        </span>
                    </div>
                    @if($this->menu_id==4)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==4)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>

            <!-- Orders -->
            <div class="relative group">
                <div wire:click="selectedMenu(2)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==2) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(2)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(2)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==2) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==2) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Orders
                        </span>
                    </div>
                    @if($this->menu_id==2)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==2)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>

            <!-- Customers -->
            <div class="relative group">
                <div wire:click="selectedMenu(5)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==5) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(5)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(5)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==5) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==5) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Customers
                        </span>
                    </div>
                    @if($this->menu_id==5)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==5)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>

            <!-- Approval -->
            <div class="relative group">
                <div wire:click="selectedMenu(8)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==8) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(8)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(8)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==8) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==8) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Approval
                        </span>
                    </div>
                    @if($this->menu_id==8)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==8)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>
            @else
            <!-- Inventory (Vendor only) -->
            <div class="relative group">
                <div wire:click="selectedMenu(3)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==3) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(3)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(3)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==3) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==3) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Inventory
                        </span>
                    </div>
                    @if($this->menu_id==3)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==3)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>
            @endif

            <!-- Subscriptions -->
            <div class="relative group">
                <div wire:click="selectedMenu(10)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==10) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(10)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(10)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==10) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 14.25 6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185ZM9.75 9h.008v.008H9.75V9Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm4.125 4.5h.008v.008h-.008V13.5Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==10) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Subscriptions
                        </span>
                    </div>
                    @if($this->menu_id==10)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==10)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>

            <!-- Transactions -->
            <div class="relative group">
                <div wire:click="selectedMenu(7)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==7) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(7)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(7)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==7) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==7) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Transactions
                        </span>
                    </div>
                    @if($this->menu_id==7)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==7)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>

            <!-- Settings -->
            <div class="relative group">
                <div wire:click="selectedMenu(6)" 
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl @if($this->menu_id==6) bg-yellow-500/20 border-l-4 border-yellow-400 @endif">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(6)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(6)" class="p-2 rounded-lg bg-white/10 group-hover:bg-yellow-400/20 transition-colors duration-200">
                            <svg class="w-5 h-5 @if($this->menu_id==6) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold @if($this->menu_id==6) text-yellow-400 @else text-white group-hover:text-yellow-400 @endif">
                            Settings
                        </span>
                    </div>
                    @if($this->menu_id==6)
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                </div>
                @if($this->menu_id==6)
                    <div class="absolute -left-4 top-0 bottom-0 w-1 active-indicator"></div>
                @endif
            </div>
        </nav>

        <!-- Divider -->
        <div class="h-px bg-gradient-to-r from-transparent via-white/20 to-transparent my-6"></div>

        <!-- User Info Section -->
        <div class="bg-white/10 rounded-xl p-4 mb-6 backdrop-blur-sm">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-sm">
                        {{ substr(auth()->user()->first_name ?? 'U', 0, 1) }}{{ substr(auth()->user()->last_name ?? 'U', 0, 1) }}
                    </span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-white font-medium text-sm truncate">
                        {{ auth()->user()->first_name ?? 'User' }} {{ auth()->user()->last_name ?? '' }}
                    </p>
                    <p class="text-blue-200 text-xs">
                        @if(auth()->user()->role_id == 2)
                            Vendor Account
                        @else
                            Admin Account
                        @endif
                    </p>
                </div>
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse" title="Online"></div>
            </div>
        </div>

        <!-- Logout -->
        <div class="relative group">
            <form method="POST" action="{{ route('logout') }}" x-data class="w-full">
                @csrf
                <div wire:click="selectedMenu(0)" 
                     @click.prevent="$root.submit();"
                     wire:loading.attr="disabled" 
                     class="menu-item-hover flex items-center justify-between px-4 py-3 cursor-pointer rounded-xl text-red-300 hover:text-red-200 hover:bg-red-500/20">
                    <div class="flex items-center space-x-3">
                        <div wire:loading wire:target="selectedMenu(0)" class="animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div wire:loading.remove wire:target="selectedMenu(0)" class="p-2 rounded-lg bg-red-500/20 group-hover:bg-red-500/30 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"/>
                            </svg>
                        </div>
                        <span class="font-semibold">
                            Logout
                        </span>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="mt-6 pt-4 border-t border-white/10 text-center">
            <p class="text-xs text-blue-200">© 2024 eShop Admin</p>
            <p class="text-xs text-blue-300 mt-1">Version 2.0</p>
        </div>
    </aside>

    <!-- JavaScript for Mobile Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-overlay');

            function toggleSidebar() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('opacity-0');
                overlay.classList.toggle('invisible');
            }

            mobileMenuButton.addEventListener('click', toggleSidebar);
            overlay.addEventListener('click', toggleSidebar);

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                if (window.innerWidth < 1024) {
                    if (!sidebar.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                        if (!sidebar.classList.contains('-translate-x-full')) {
                            toggleSidebar();
                        }
                    }
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.add('opacity-0', 'invisible');
                }
            });
        });
    </script>
</div>