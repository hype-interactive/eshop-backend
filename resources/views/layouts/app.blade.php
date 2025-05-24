<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{ asset('assets/color.css') }}" rel="stylesheet"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        
        <style>
            /* Custom scrollbar for sidebar */
            .custom-scrollbar::-webkit-scrollbar {
                width: 4px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 2px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(245, 173, 66, 0.5);
                border-radius: 2px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: rgba(245, 173, 66, 0.7);
            }
            
            /* Smooth transitions */
            .layout-transition {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            /* Header shadow */
            .header-shadow {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            }
            
            /* Main content area */
            .main-content {
                min-height: calc(100vh - 64px); /* Subtract header height */
            }
            
            /* Mobile sidebar overlay */
            .sidebar-overlay {
                background: rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(4px);
            }
            
            /* Responsive utilities */
            @media (max-width: 1023px) {
                .sidebar-mobile-hidden {
                    transform: translateX(-100%);
                }
                .content-mobile-full {
                    margin-left: 0 !important;
                }
            }
        </style>
    </head>

    <body class="font-sans antialiased bg-gray-50">
        @php
            $status = auth()->user()->status;
        @endphp

        @if($status != 'active')
            @include('pending-user', ['status' => $status])
        @else
            <!-- Layout Container -->
            <div class="flex h-screen bg-gray-50 overflow-hidden">
                
                <!-- Sidebar Component -->
                <div id="sidebar-container" class="layout-transition">
                    <livewire:back-end.side-bar />
                </div>
                
                <!-- Mobile Sidebar Overlay -->
                <div id="sidebar-overlay" 
                     class="fixed inset-0 z-40 sidebar-overlay opacity-0 invisible lg:hidden layout-transition"
                     onclick="toggleMobileSidebar()"></div>
                
                <!-- Main Content Area -->
                <div class="flex-1 flex flex-col overflow-hidden layout-transition lg:ml-72">
                    
                    <!-- Top Header/Navigation -->
                    <header class="bg-white header-shadow relative z-30">
                        <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                            
                            <!-- Mobile Menu Button -->
                            <button id="mobile-sidebar-toggle" 
                                    class="lg:hidden p-2 rounded-lg text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200"
                                    onclick="toggleMobileSidebar()">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                            
                            <!-- Page Title (Mobile) -->
                            <div class="lg:hidden">
                                <h1 class="text-lg font-semibold text-gray-900" id="mobile-page-title">Dashboard</h1>
                            </div>
                            
                            <!-- Desktop Header Content -->
                            <div class="hidden lg:flex flex-1">
                                @livewire('navigation-menu')
                            </div>
                            
                            <!-- Mobile User Menu -->
                            <div class="lg:hidden">
                                <button class="p-2 rounded-lg text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Mobile Navigation Menu (Hidden by default) -->
                        <div class="lg:hidden border-t border-gray-200 hidden" id="mobile-nav-menu">
                            <div class="px-4 py-3 bg-gray-50">
                                @livewire('navigation-menu')
                            </div>
                        </div>
                    </header>
                    
                    <!-- Main Content -->
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 main-content custom-scrollbar">
                        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
                            {{ $slot }}
                        </div>
                    </main>
                    
                    <!-- Footer (Optional) -->
                    <footer class="bg-white border-t border-gray-200 px-4 sm:px-6 lg:px-8 py-4">
                        <div class="flex flex-col sm:flex-row justify-between items-center text-sm text-gray-600">
                            <div class="mb-2 sm:mb-0">
                                <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
                            </div>
                            <div class="flex space-x-4">
                                <a href="#" class="hover:text-gray-900 transition-colors duration-200">Privacy</a>
                                <a href="#" class="hover:text-gray-900 transition-colors duration-200">Terms</a>
                                <a href="#" class="hover:text-gray-900 transition-colors duration-200">Support</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

            <!-- JavaScript for Layout Management -->
            <script>
                let sidebarOpen = false;
                
                function toggleMobileSidebar() {
                    const sidebar = document.getElementById('sidebar-container');
                    const overlay = document.getElementById('sidebar-overlay');
                    const toggleButton = document.getElementById('mobile-sidebar-toggle');
                    
                    sidebarOpen = !sidebarOpen;
                    
                    if (sidebarOpen) {
                        // Open sidebar
                        sidebar.classList.remove('sidebar-mobile-hidden');
                        overlay.classList.remove('opacity-0', 'invisible');
                        toggleButton.innerHTML = `
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        `;
                        document.body.style.overflow = 'hidden';
                    } else {
                        // Close sidebar
                        sidebar.classList.add('sidebar-mobile-hidden');
                        overlay.classList.add('opacity-0', 'invisible');
                        toggleButton.innerHTML = `
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        `;
                        document.body.style.overflow = 'auto';
                    }
                }
                
                // Close sidebar when window is resized to desktop
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 1024 && sidebarOpen) {
                        toggleMobileSidebar();
                    }
                });
                
                // Handle keyboard navigation
                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape' && sidebarOpen) {
                        toggleMobileSidebar();
                    }
                });
                
                // Auto-close sidebar on mobile when clicking links
                document.addEventListener('click', function(event) {
                    if (window.innerWidth < 1024 && sidebarOpen) {
                        const sidebar = document.getElementById('sidebar-container');
                        if (!sidebar.contains(event.target) && !event.target.closest('#mobile-sidebar-toggle')) {
                            toggleMobileSidebar();
                        }
                    }
                });
                
                // Update mobile page title based on active menu (optional)
                function updateMobilePageTitle(title) {
                    const mobileTitleElement = document.getElementById('mobile-page-title');
                    if (mobileTitleElement) {
                        mobileTitleElement.textContent = title;
                    }
                }
                
                // Initialize layout
                document.addEventListener('DOMContentLoaded', function() {
                    // Set initial mobile sidebar state
                    if (window.innerWidth < 1024) {
                        document.getElementById('sidebar-container').classList.add('sidebar-mobile-hidden');
                    }
                    
                    // Add smooth scrolling behavior
                    document.documentElement.style.scrollBehavior = 'smooth';
                });
            </script>

            @stack('modals')
        @endif

        @livewireScripts
    </body>
</html>