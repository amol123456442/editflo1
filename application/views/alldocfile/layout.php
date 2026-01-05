<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fuse.js for search -->
    <script src="https://cdn.jsdelivr.net/npm/fuse.js@6.6.2/dist/fuse.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Smooth Transitions */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }

        /* Mobile First Approach */
        @media (max-width: 768px) {
            .mobile-hidden {
                display: none;
            }

            .mobile-full {
                width: 100%;
                margin-left: 0;
                margin-right: 0;
            }
        }

        /* Right Sidebar Responsive */
        @media (max-width: 1280px) {
            .right-sidebar {
                display: none;
            }

            .main-content-full {
                margin-right: 0;
            }
        }

        @media (max-width: 1024px) {
            .right-sidebar-lg {
                display: none;
            }

            .main-content-lg {
                margin-right: 0;
            }
        }

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-size: small;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Print styles */
        @media print {

            .right-sidebar,
            #mobileTOC,
            .lg\:hidden {
                display: none !important;
            }
        }

        /* Promotional Card Styles */
        .promo-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }

        .promo-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            transform: rotate(30deg);
        }

        /* Right sidebar table of contents styles */
        .toc-link {
            transition: all 0.2s ease;
        }

        .toc-link:hover {
            background-color: #f7fafc;
            border-left-color: #4299e1;
        }

        .toc-link.active {
            background-color: #ebf8ff;
            border-left-color: #4299e1;
            color: #2b6cb0;
        }

        /* Search Results Styles */
        .search-results {
            max-height: 400px;
            overflow-y: auto;
            z-index: 9999;
        }

        .search-results mark {
            background-color: #fef3c7;
            padding: 0 2px;
            border-radius: 2px;
        }

        .search-results::-webkit-scrollbar {
            width: 6px;
        }

        .search-results::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 0 6px 6px 0;
        }

        .search-results::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .search-results::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Animation for search results */
        .search-results {
            animation: slideDown 0.2s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <header class="bg-gray-800 text-white sticky top-0 z-50 shadow-lg">
        <div class="px-2 sm:px-2 lg:px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <img src="<?= base_url('assets/logo2.png'); ?>" width="160" height="auto" alt="">
                </div>
                <div class="flex items-center justify-end space-x-4 lg:space-x-6 flex-1">
                    <!-- Search Bar - Desktop -->
                    <div class="hidden md:block max-w-md lg:max-w-lg mx-4 relative">
                        <div class="relative" id="desktopSearchContainer">
                            <input type="text" placeholder="Search"
                                class="w-full bg-white text-gray-800 placeholder-gray-500 rounded-md py-2 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all"
                                id="desktopSearchInput">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-500 text-sm"></i>
                            </div>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <kbd class="text-xs bg-gray-800 text-gray-200 px-2 py-1 rounded border border-gray-300 mr-1">Ctrl</kbd>
                                <kbd class="text-xs bg-gray-800 text-gray-200 px-2 py-1 rounded border border-gray-300">K</kbd>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Links - Desktop -->
                    <div class="hidden lg:flex items-center space-x-6">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors font-medium text-sm">
                            Home
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors font-medium text-sm">
                            Pricing
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors font-medium text-sm">
                            Language
                        </a>
                        <div class="h-4 w-px bg-gray-600"></div>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors font-medium text-sm">
                            Log In
                        </a>
                    </div>

                    <!-- Get Free API Key Button - Desktop -->
                    <div class="hidden lg:block">
                        <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
                            <i class="fa-solid fa-key mr-2"></i>
                            Get Free API Key
                        </button>
                    </div>

                    <!-- Mobile Menu Buttons -->
                    <div class="flex items-center space-x-4 lg:hidden">
                        <!-- Mobile Search Button -->
                        <button class="text-white" id="mobileSearchBtn">
                            <i class="fas fa-search text-lg"></i>
                        </button>

                        <!-- Mobile Menu Button -->
                        <button class="text-white" id="mobileMenuBtn">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Search Bar -->
            <div class="md:hidden mt-3 hidden" id="mobileSearchBar">
                <div class="relative" id="mobileSearchContainer">
                    <input type="text" placeholder="Search"
                        class="w-full bg-gray-700 text-white placeholder-gray-400 rounded-md py-3 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="mobileSearchInput">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="lg:hidden hidden" id="mobileMenu">
                <div class="bg-gray-800 border-t border-gray-700 py-4 px-4">
                    <!-- Search Bar in Mobile Menu -->
                    <div class="mb-4">
                        <div class="relative" id="mobileMenuSearchContainer">
                            <input type="text" placeholder="Search"
                                class="w-full bg-gray-700 text-white placeholder-gray-400 rounded-md py-3 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="mobileMenuSearchInput">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu Links -->
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors font-medium py-2">
                            Pricing
                        </a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors font-medium py-2">
                            Language Packs
                        </a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors font-medium py-2">
                            Log In
                        </a>
                        <a href="#" class="block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-3 rounded-md transition-colors text-center mt-4">
                            Get Free API Key
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="min-h-screen">
        <!-- Left Sidebar - Hidden on Mobile -->
        <nav class="w-64 lg:w-[250px] bg-gray-800 text-white h-screen fixed left-0 overflow-y-auto z-30 border-r border-gray-700 sidebar-transition lg:translate-x-0 -translate-x-full"
            id="leftSidebar">

            <!-- Close Button for Mobile -->
            <div class="p-4 border-b border-gray-700 lg:hidden flex justify-between items-center">
                <h1 class="text-lg font-semibold text-blue-400">Editflo Documentation</h1>
                <button class="text-gray-400 hover:text-white" onclick="closeMobileSidebar()">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <div class="py-4 flex flex-col">
                <div class="flex-1 mb-10">
                    <!-- Getting Started Dropdown -->
                    <div class="mb-2">
                        <div class="relative">
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'getting-started' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="toggleDropdown('getting-started-dropdown'); if(window.innerWidth < 1024) closeMobileSidebar();">
                                <div class="flex items-center flex-1 ml-2">
                                    <i class="fas fa-rocket mr-4 w-4 text-center"></i>
                                    <span class="font-medium text-sm">Getting started</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300 ml-5 <?php echo $active_page == 'getting-started' ? 'rotate-180' : ''; ?>"
                                    id="getting-started-arrow"></i>
                            </button>
                        </div>

                        <div class="mt-1 <?php echo $active_page == 'getting-started' ? 'block' : 'hidden'; ?>"
                            id="getting-started-dropdown">
                            <!-- Introduction -->
                            <a href="<?php echo base_url('documentation/getting-started/introduction'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'introduction' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Introduction to Editflo
                            </a>

                            <!-- Installation Dropdown -->
                            <div class="mt-1">
                                <button
                                    class="flex items-center justify-between w-full pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'installation' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                    onclick="toggleDropdown('installation-dropdown')">
                                    <span>Installation</span>
                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'installation' ? 'rotate-180' : ''; ?>"
                                        id="installation-arrow"></i>
                                </button>

                                <div class="mt-1 <?php echo $active_section == 'installation' ? 'block' : 'hidden'; ?>"
                                    id="installation-dropdown">
                                    <!-- Cloud Installation Dropdown -->
                                    <div class="mt-1">
                                        <button
                                            class="flex items-center justify-between w-full pl-16 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="toggleDropdown('cloud-dropdown')">
                                            <span>Cloud</span>
                                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'cloud') === 0 ? 'rotate-180' : ''; ?>"
                                                id="cloud-arrow"></i>
                                        </button>

                                        <div class="mt-1 <?php echo strpos($active_subsection, 'cloud') === 0 ? 'block' : 'hidden'; ?>"
                                            id="cloud-dropdown">
                                            <a href="<?php echo base_url('documentation/getting_started_cloud'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-quickstart' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Cloud Start
                                            </a>

                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/quick-start'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-quickstart' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Quick start guide
                                            </a>

                                            <!-- Supported Integrations -->
                                            <div class="pl-10 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Supported Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/react'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-react' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                React
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/angular'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-angular' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Angular
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/vue'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-vue' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Vue.js
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/blazor'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-blazor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Blazor
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/svelte'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-svelte' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Svelte
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/web-component'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-webcomponent' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Web Component
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/jquery'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-jquery' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                jQuery
                                            </a>

                                            <!-- Backend Integrations -->
                                            <div class="pl-10 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Backend Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/django'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-django' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Django
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/laravel'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-laravel' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Laravel
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/ruby-on-rails'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-rails' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Ruby on Rails
                                            </a>

                                            <!-- Other Integrations -->
                                            <div class="pl-10 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Other Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/bootstrap'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-bootstrap' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Bootstrap
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Self-hosted Installation Dropdown -->
                                    <div class="mt-1">
                                        <button
                                            class="flex items-center justify-between w-full pl-16 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="toggleDropdown('self-hosted-dropdown')">
                                            <span>Self-hosted</span>
                                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted') === 0 ? 'rotate-180' : ''; ?>"
                                                id="self-hosted-arrow"></i>
                                        </button>

                                        <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted') === 0 ? 'block' : 'hidden'; ?>"
                                            id="self-hosted-dropdown">
                                            <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/quick-start'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-quickstart' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Quick start guide
                                            </a>

                                            <!-- Supported Integrations -->
                                            <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/supported-integrations'); ?>"
                                                class="block pl-10 pr-6 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-supported-integrations' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Supported Integrations
                                            </a>

                                            <!-- React Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-react' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-react-dropdown')">
                                                    <span>React</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-react') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-react-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-react') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-react-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/react/package-manager-hosting'); ?>"
                                                        class="block pl-20 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-react-package-hosting' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Package Manager on Hosting
                                                    </a>
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/react/package-manager-bundling'); ?>"
                                                        class="block pl-20 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-react-package-bundling' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Package Manager + Bundling
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Angular Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-angular' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-angular-dropdown')">
                                                    <span>Angular</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-angular') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-angular-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-angular') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-angular-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/angular/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-angular-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Vue.js Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-vue' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-vue-dropdown')">
                                                    <span>Vue.js</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-vue') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-vue-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-vue') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-vue-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/vue/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-vue-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Blazor Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-blazor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-blazor-dropdown')">
                                                    <span>Blazor</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-blazor') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-blazor-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-blazor') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-blazor-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/blazor/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-blazor-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Svelte Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-svelte' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-svelte-dropdown')">
                                                    <span>Svelte</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-svelte') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-svelte-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-svelte') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-svelte-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/svelte/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-svelte-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Web Component Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-webcomponent' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-webcomponent-dropdown')">
                                                    <span>Web Component</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-webcomponent') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-webcomponent-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-webcomponent') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-webcomponent-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/web-component/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-webcomponent-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- jQuery Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-jquery' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-jquery-dropdown')">
                                                    <span>jQuery</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-jquery') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-jquery-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-jquery') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-jquery-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/jquery/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-jquery-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Java Swing -->
                                            <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/java-swing'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-java-swing' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Java Swing
                                            </a>
                                        </div>
                                    </div>

                                    <!-- ZIP Installation Dropdown -->
                                    <div class="mt-1">
                                        <button
                                            class="flex items-center justify-between w-full pl-16 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="toggleDropdown('zip-dropdown')">
                                            <span>ZIP</span>
                                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'zip') === 0 ? 'rotate-180' : ''; ?>"
                                                id="zip-arrow"></i>
                                        </button>

                                        <div class="mt-1 <?php echo strpos($active_subsection, 'zip') === 0 ? 'block' : 'hidden'; ?>"
                                            id="zip-dropdown">
                                            <a href="<?php echo base_url('documentation/getting-started/installation/zip/quick-start'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-quickstart' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Quick start guide
                                            </a>

                                            <!-- Supported Integrations -->
                                            <div class="block pl-10 pr-6 py-2 text-sm text-gray-400 hover:bg-gray-400 hover:text-white transition-colors <?php echo $active_subsection == 'zip-supported-integrations' ? 'bg-gray-700 text-blue-400' : ''; ?>">
                                                Supported Integrations
                                            </div>

                                            <!-- React Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-react' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('zip-react-dropdown')">
                                                    <span>React</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'zip-react') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="zip-react-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'zip-react') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="zip-react-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip/react/hosting'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-react-hosting' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using a .zip package with hosting
                                                    </a>
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip/react/bundling'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-react-bundling' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using a .zip package with bundling
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Angular Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-angular' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('zip-angular-dropdown')">
                                                    <span>Angular</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'zip-angular') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="zip-angular-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'zip-angular') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="zip-angular-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip/angular/package'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-angular-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using a .zip package
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Vue.js Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-vue' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('zip-vue-dropdown')">
                                                    <span>Vue.js</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'zip-vue') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="zip-vue-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'zip-vue') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="zip-vue-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip/vue/package'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-vue-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using a .zip package
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Blazor Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-blazor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('zip-blazor-dropdown')">
                                                    <span>Blazor</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'zip-blazor') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="zip-blazor-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'zip-blazor') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="zip-blazor-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip/blazor/package'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-blazor-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using a .zip package
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Svelte Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-svelte' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('zip-svelte-dropdown')">
                                                    <span>Svelte</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'zip-svelte') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="zip-svelte-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'zip-svelte') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="zip-svelte-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip/svelte/package'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-svelte-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using a .zip package
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Web Component Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-webcomponent' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('zip-webcomponent-dropdown')">
                                                    <span>Web Component</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'zip-webcomponent') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="zip-webcomponent-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'zip-webcomponent') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="zip-webcomponent-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip/web-component/package'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-webcomponent-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        Using a .zip package
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Java Swing -->
                                            <a href="<?php echo base_url('documentation/getting-started/installation/zip/java-swing'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-java' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Java Swing
                                            </a>

                                            <!-- Backend Integrations -->
                                            <div class="pl-10 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Backend Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/zip/django'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-django' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Django
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/zip/laravel'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-laravel' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Laravel
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/zip/ruby-on-rails'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-rails' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Ruby on Rails
                                            </a>

                                            <!-- Other Integrations -->
                                            <div class="pl-10 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Other Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/zip/bootstrap'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip-bootstrap' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                Bootstrap
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upgrading Editflo -->
                            <a href="<?php echo base_url('documentation/getting-started/upgrading'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'upgrading' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Upgrading Editflo
                            </a>
                        </div>
                    </div>

                    <!-- Examples Section -->
                    <div class="mb-2">
                        <div class="relative">
                            <a href="<?php echo base_url('documentation/examples'); ?>"
                                class="flex items-center justify-between w-full px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'examples' ? 'bg-gray-700 text-blue-400' : ''; ?> pr-12"
                                onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                <div class="flex items-center flex-1">
                                    <i class="fas fa-laptop-code mr-3 w-4 text-center"></i>
                                    <span class="font-medium">Examples</span>
                                </div>
                            </a>

                            <button type="button"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                onclick="event.stopPropagation(); toggleDropdown('examples-dropdown');">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_page == 'examples' ? 'rotate-180' : ''; ?>"
                                    id="examples-arrow"></i>
                            </button>
                        </div>

                        <div class="mt-1 <?php echo $active_page == 'examples' ? 'block' : 'hidden'; ?>"
                            id="examples-dropdown">
                            <!-- General Examples -->
                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/examples/general'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'general-examples' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>General examples</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('general-examples-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'general-examples' ? 'rotate-180' : ''; ?>"
                                            id="general-examples-arrow"></i>
                                    </button>
                                </div>
                                <div class="mt-1 <?php echo $active_section == 'general-examples' ? 'block' : 'hidden'; ?>"
                                    id="general-examples-dropdown">
                                    <a href="<?php echo base_url('documentation/examples/general/basic'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'basic-example' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Basic example
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/general/full-featured-open-source'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'full-featured-opensource' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Full-featured demo / Open Source features
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/general/full-featured-premium'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'full-featured-premium' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Full-featured demo / Open Source and Premium features
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/general/classic-editor'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'classic-editor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Classic editor mode
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/general/inline-editor'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'inline-editor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Inline editor
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/general/distraction-free-editor'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'distraction-free-editor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Distraction-free editor
                                    </a>
                                </div>
                            </div>

                            <!-- Integration Examples -->
                            <div class="mt-1">
                                <button
                                    class="flex items-center justify-between w-full pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'integration-examples' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                    onclick="toggleDropdown('integration-examples-dropdown')">
                                    <span>Integration examples</span>
                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'integration-examples' ? 'rotate-180' : ''; ?>"
                                        id="integration-examples-arrow"></i>
                                </button>

                                <div class="mt-1 <?php echo $active_section == 'integration-examples' ? 'block' : 'hidden'; ?>"
                                    id="integration-examples-dropdown">
                                    <a href="<?php echo base_url('documentation/examples/integration/template-creation'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'template-creation' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Template creation example
                                    </a>
                                </div>
                            </div>

                            <!-- Skins and Icons Examples -->
                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/examples/skins-and-icons'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'skins-icons-examples' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>Skins and Icons examples</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('skins-icons-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'skins-icons-examples' ? 'rotate-180' : ''; ?>"
                                            id="skins-icons-arrow"></i>
                                    </button>
                                </div>

                                <div class="mt-1 <?php echo $active_section == 'skins-icons-examples' ? 'block' : 'hidden'; ?>"
                                    id="skins-icons-dropdown">
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/bootstrap'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'bootstrap-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Bootstrap Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/borderless'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'borderless-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Borderless Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/fabric'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'fabric-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Fabric Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/fluent'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'fluent-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Fluent Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/jam-icons'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'jam-icons-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Jam Icons Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/material-classic'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'material-classic-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Material Classic Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/material-outline'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'material-outline-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Material Outline Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/naked'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'naked-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Naked Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/outside'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'outside-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Outside Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/small-icons'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'small-icons-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Small Icons Demo
                                    </a>
                                    <a href="<?php echo base_url('documentation/examples/skins-icons/snow'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'snow-demo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Snow Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Initial Configuration Section -->
                    <div class="mb-2">
                        <div class="relative">
                            <a href="<?php echo base_url('documentation/initial-configuration'); ?>"
                                class="flex items-center justify-between w-full px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'initial-configuration' ? 'bg-gray-700 text-blue-400' : ''; ?> pr-12"
                                onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                <div class="flex items-center flex-1">
                                    <i class="fas fa-sliders-h mr-3 w-4 text-center"></i>
                                    <span class="font-medium">Initial Configuration</span>
                                </div>
                            </a>

                            <button type="button"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                onclick="event.stopPropagation(); toggleDropdown('initial-configuration-dropdown');">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_page == 'initial-configuration' ? 'rotate-180' : ''; ?>"
                                    id="initial-configuration-arrow"></i>
                            </button>
                        </div>

                        <div class="mt-1 <?php echo $active_page == 'initial-configuration' ? 'block' : 'hidden'; ?>"
                            id="initial-configuration-dropdown">
                            <a href="<?php echo base_url('documentation/initial-configuration/integration-options'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'integration-options' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Integration options
                            </a>

                            <a href="<?php echo base_url('documentation/initial-configuration/size'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'size' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Size
                            </a>

                            <a href="<?php echo base_url('documentation/initial-configuration/save-submit'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'save-submit' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Save and submit
                            </a>

                            <a href="<?php echo base_url('documentation/initial-configuration/promotions'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'promotions' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Promotions
                            </a>
                        </div>
                    </div>

                    <!-- Security Section -->
                    <div class="mb-2">
                        <div class="relative">
                            <div class="flex items-center justify-between w-full px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'security' ? 'bg-gray-700 text-blue-400' : ''; ?> pr-12 cursor-pointer"
                                onclick="event.stopPropagation(); toggleDropdown('security-dropdown'); if(window.innerWidth < 1024) closeMobileSidebar();">
                                <div class="flex items-center flex-1">
                                    <i class="fas fa-shield-alt mr-3 w-4 text-center"></i>
                                    <span class="font-medium">Security</span>
                                </div>
                                <div class="w-10"></div>
                            </div>

                            <button type="button"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                onclick="event.stopPropagation(); toggleDropdown('security-dropdown');">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_page == 'security' ? 'rotate-180' : ''; ?>"
                                    id="security-arrow"></i>
                            </button>
                        </div>

                        <div class="mt-1 <?php echo $active_page == 'security' ? 'block' : 'hidden'; ?>"
                            id="security-dropdown">
                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/security/guide'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'security-guide' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>Security guide</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('security-guide-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'security-guide' ? 'rotate-180' : ''; ?>"
                                            id="security-guide-arrow"></i>
                                    </button>
                                </div>

                                <div class="mt-1 <?php echo $active_section == 'security-guide' ? 'block' : 'hidden'; ?>"
                                    id="security-guide-dropdown">
                                    <a href="<?php echo base_url('documentation/security/guide/reporting-issues#reporting-editflo-security-issues'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'reporting-issues' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Reporting Editflo security issues
                                    </a>
                                    <a href="<?php echo base_url('documentation/security/guide/reporting-issues#what-we-do-to-maintain-security-for-editflo'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'maintenance' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        What we do to maintain security for Editflo
                                    </a>
                                    <a href="<?php echo base_url('documentation/security/guide/reporting-issues#configuring-content-security-policy-for-editflo'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'configuring-csp' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        Configuring Content Security Policy for Editflo
                                    </a>
                                    <a href="<?php echo base_url('documentation/security/guide/reporting-issues#general-security-risks-for-user-input-elements'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'general-risks' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        General security risks for user input elements
                                    </a>
                                </div>

                                <a href="<?php echo base_url('documentation/security/guide/content-security-policies'); ?>"
                                    class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'content-security-policies' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                    onclick="closeMobileSidebar()">
                                    Content Security Policies
                                </a>
                                <a href="<?php echo base_url('documentation/security/guide/cors'); ?>"
                                    class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cors' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                    onclick="closeMobileSidebar()">
                                    CORS
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Release Notes Section -->
                    <div class="mb-2">
                        <div class="relative">
                            <a
                                class="flex items-center justify-between w-full px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'release-notes' ? 'bg-gray-700 text-blue-400' : ''; ?> pr-12"
                                onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                <div class="flex items-center flex-1">
                                    <i class="fas fa-clipboard-list mr-3 w-4 text-center"></i>
                                    <span class="font-medium">Release Notes</span>
                                </div>
                            </a>

                            <button type="button"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                onclick="event.stopPropagation(); toggleDropdown('release-notes-dropdown');">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_page == 'release-notes' ? 'rotate-180' : ''; ?>"
                                    id="release-notes-arrow"></i>
                            </button>
                        </div>

                        <div class="mt-1 <?php echo $active_page == 'release-notes' ? 'block' : 'hidden'; ?>"
                            id="release-notes-dropdown">
                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/release-notes/editflo'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'editflo' && !$active_subsection ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>Release notes for Editflo</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('editflo-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'editflo' ? 'rotate-180' : ''; ?>"
                                            id="editflo-arrow"></i>
                                    </button>
                                </div>

                                <div class="mt-1 <?php echo $active_section == 'editflo' ? 'block' : 'hidden'; ?>"
                                    id="editflo-dropdown">
                                    <div class="relative">
                                        <a href="<?php echo base_url('documentation/release-notes/editflo/0-1'); ?>"
                                            class="flex items-center w-full pl-16 pr-20 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == '0-1' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                            <span>Editflo 0.1</span>
                                        </a>

                                        <button type="button"
                                            class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                            onclick="event.stopPropagation(); toggleDropdown('editflo-0-1-dropdown');">
                                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, '0-1-') === 0 || $active_subsection == '0-1' ? 'rotate-180' : ''; ?>"
                                                id="editflo-0-1-arrow"></i>
                                        </button>
                                    </div>

                                    <div class="mt-1 <?php echo strpos($active_subsection, '0-1-') === 0 || $active_subsection == '0-1' ? 'block' : 'hidden'; ?>"
                                        id="editflo-0-1-dropdown">
                                        <a href="<?php echo base_url('documentation/release-notes/editflo/0-1/overview'); ?>"
                                            class="block pl-20 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == '0-1-overview' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="closeMobileSidebar()">
                                            Overview
                                        </a>

                                        <a href="<?php echo base_url('documentation/release-notes/editflo/0-1/overview#new-premium-plugins'); ?>"
                                            class="block pl-20 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == '0-1-new-premium-plugins' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="closeMobileSidebar()">
                                            New Premium plugins
                                        </a>

                                        <a href="<?php echo base_url('documentation/release-notes/editflo/0-1/overview#premium-plugin-changes'); ?>"
                                            class="block pl-20 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == '0-1-premium-plugin-changes' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="closeMobileSidebar()">
                                            Plugin changes
                                        </a>

                                        <a href="<?php echo base_url('documentation/release-notes/editflo/0-1/overview#improvements'); ?>"
                                            class="block pl-20 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == '0-1-improvements' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="closeMobileSidebar()">
                                            Improvements
                                        </a>

                                        <a href="<?php echo base_url('documentation/release-notes/editflo/0-1/overview#additions'); ?>"
                                            class="block pl-20 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == '0-1-additions' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="closeMobileSidebar()">
                                            Additions
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Other Main Navigation Items -->
                    <a href="<?php echo base_url('documentation/invalid-api-key'); ?>"
                        class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'invalid-api-key' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                        onclick="closeMobileSidebar()">
                        <i class="fas fa-key mr-3 w-4 text-center"></i>
                        <span class="font-medium">Invalid API Key</span>
                    </a>

                    <a href="<?php echo base_url('documentation/license-key'); ?>"
                        class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'license-key' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                        onclick="closeMobileSidebar()">
                        <i class="fas fa-id-card mr-3 w-4 text-center"></i>
                        <span class="font-medium">License Key</span>
                    </a>

                    <a href="<?php echo base_url('documentation/support'); ?>"
                        class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'support' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                        onclick="closeMobileSidebar()">
                        <i class="fas fa-headset mr-3 w-4 text-center"></i>
                        <span class="font-medium">Support</span>
                    </a>

                    <a href="<?php echo base_url('documentation/usage-based-billing'); ?>"
                        class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'usage-based-billing' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                        onclick="closeMobileSidebar()">
                        <i class="fas fa-credit-card mr-3 w-4 text-center"></i>
                        <span class="font-medium">Usage-Based Billing</span>
                    </a>

                    <!-- API Reference Section -->
                    <div class="mb-10">
                        <div class="relative">
                            <a href="<?php echo base_url('documentation/api-reference/editflo'); ?>"
                                class="flex items-center justify-between w-full px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'api-reference' ? 'bg-gray-700 text-blue-400' : ''; ?> pr-12"
                                onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                <div class="flex items-center flex-1">
                                    <i class="fas fa-code mr-3 w-4 text-center"></i>
                                    <span class="font-medium">API Reference</span>
                                </div>
                            </a>

                            <button type="button"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                onclick="event.stopPropagation(); toggleDropdown('api-reference-dropdown');">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_page == 'api-reference' ? 'rotate-180' : ''; ?>"
                                    id="api-reference-arrow"></i>
                            </button>
                        </div>

                        <div class="mt-1 <?php echo $active_page == 'api-reference' ? 'block' : 'hidden'; ?>"
                            id="api-reference-dropdown">
                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'editflo' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>EAR</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('editflo-api-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'editflo' ? 'rotate-180' : ''; ?>"
                                            id="editflo-api-arrow"></i>
                                    </button>
                                </div>

                                <div class="mt-1 <?php echo $active_section == 'editflo' ? 'block' : 'hidden'; ?>"
                                    id="editflo-api-dropdown">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == '' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/add-on-manager'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'add-on-manager' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.AddOnManager
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/annotator'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'annotator' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Annotator
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/editor'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'editor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Editor
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/editor-manager'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'editor-manager' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.EditorManager
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/editor-mode'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'editor-mode' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.EditorMode
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/editor-options'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'editor-options' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.EditorOptions
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/editor-upload'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'editor-upload' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.EditorUpload
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/env'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'env' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Env
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/event'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'event' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Event
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/fake-clipboard'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'fake-clipboard' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.FakeClipboard
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/formatter'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'formatter' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Formatter
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/notification-manager'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'notification-manager' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Notify
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/plugin'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'plugin' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Plugin
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/shortcuts'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'shortcuts' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Shortcuts
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/theme'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'theme' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Theme
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/undo-manager'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'undo-manager' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.UndoManager
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/user-lookup'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'user-lookup' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.UserLookup
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo/window-manager'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'window-manager' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.Win
                                    </a>
                                </div>
                            </div>
                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo-editor-ui'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'editflo-editor-ui' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>editflo.editor.ui</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('editflo-editor-ui-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'editflo-editor-ui' ? 'rotate-180' : ''; ?>"
                                            id="editflo-editor-ui-arrow"></i>
                                    </button>
                                </div>

                                <div class="mt-1 <?php echo $active_section == 'editflo-editor-ui' ? 'block' : 'hidden'; ?>"
                                    id="editflo-editor-ui-dropdown">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo-editor-ui/registry'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'registry' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.editor.ui.Registry
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-editor-ui/ui'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'ui' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.editor.ui.Ui
                                    </a>
                                </div>
                            </div>
                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'editflo-html' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>editflo.html</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('editflo-html-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'editflo-html' ? 'rotate-180' : ''; ?>"
                                            id="editflo-html-arrow"></i>
                                    </button>
                                </div>

                                <div class="mt-1 <?php echo $active_section == 'editflo-html' ? 'block' : 'hidden'; ?>"
                                    id="editflo-html-dropdown">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html/domparser'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'domparser' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.html.DomParser
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html/entities'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'entities' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.html.Entities
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html/node'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'node' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.html.Node
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html/schema'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'schema' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.html.Schema
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html/serializer'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'serializer' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.html.Serializer
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html/styles'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'styles' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.html.Styles
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-html/writer'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'writer' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.html.Writer
                                    </a>
                                </div>
                            </div>

                            <div class="mt-1">
                                <div class="relative">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util'); ?>"
                                        class="flex items-center w-full pl-12 pr-16 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'editflo-util' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="if(window.innerWidth < 1024) closeMobileSidebar();">
                                        <span>editflo.util</span>
                                    </a>

                                    <button type="button"
                                        class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white z-10"
                                        onclick="event.stopPropagation(); toggleDropdown('editflo-util-dropdown');">
                                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'editflo-util' ? 'rotate-180' : ''; ?>"
                                            id="editflo-util-arrow"></i>
                                    </button>
                                </div>

                                <div class="mt-1 <?php echo $active_section == 'editflo-util' ? 'block' : 'hidden'; ?>"
                                    id="editflo-util-dropdown">
                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util/delay'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'delay' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.util.Delay
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util/event-dispatcher'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'event-dispatcher' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.util.EventDispatcher
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util/i18n'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'i18n' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.util.I18n
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util/image-uploader'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'image-uploader' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.util.ImageUploader
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util/observable'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'observable' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.util.Observable
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util/tools'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'tools' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.util.Tools
                                    </a>

                                    <a href="<?php echo base_url('documentation/api-reference/editflo-util/uri'); ?>"
                                        class="block pl-16 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'uri' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        editflo.util.URI
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 lg:pl-[235px] lg:pr-[210px] min-h-screen bg-gray-50">
            <!-- Top Bar - Hidden on Mobile -->
            <div
                class="bg-white border-b border-gray-200 px-8 py-4 justify-between items-center sticky top-0 z-20 lg:flex hidden">
                <div class="text-sm text-gray-600">
                    <a href="<?php echo base_url('documentation'); ?>"
                        class="text-blue-500 hover:text-blue-700">Documentation</a>
                    <?php if ($active_page != 'overview'): ?>
                        <span class="mx-2">/</span>
                        <span class="text-gray-800"><?php echo ucfirst(str_replace('-', ' ', $active_page)); ?></span>
                        <?php if ($active_section): ?>
                            <span class="mx-2">/</span>
                            <span class="text-gray-800"><?php echo ucfirst(str_replace('-', ' ', $active_section)); ?></span>
                            <?php if ($active_subsection): ?>
                                <span class="mx-2">/</span>
                                <span class="text-gray-800"><?php echo ucfirst(str_replace('-', ' ', $active_subsection)); ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="lg:hidden px-4 max-w-4xl mx-auto mt-2">
                <div class="text-sm text-gray-600 truncate">
                    <a href="<?php echo base_url('documentation'); ?>" class="text-blue-500 hover:text-blue-700">
                        Docs
                    </a>
                    <?php if ($active_page != 'overview'): ?>
                        <span class="mx-2">&gt;</span>
                        <span class="text-gray-800 truncate">
                            <?php
                            $breadcrumb = ucfirst(str_replace('-', ' ', $active_page));
                            if ($active_section) {
                                $breadcrumb .= ' > ' . ucfirst(str_replace('-', ' ', $active_section));
                            }
                            if ($active_subsection) {
                                $breadcrumb .= ' > ' . ucfirst(str_replace('-', ' ', $active_subsection));
                            }
                            echo $breadcrumb;
                            ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Content Area -->
            <div class="px-4 lg:px-8 py-4 max-w-full">
                <div class="max-w-4xl mx-auto content-area">
                    <?php
                    // Build the view file path correctly
                    $view_file = 'alldocfile/';

                    // Handle different page structures
                    if ($active_page == 'overview') {
                        $view_file .= 'overview';
                    } elseif ($active_page == 'documentation') {
                        if ($active_section == 'editflo-blazor-integration') {
                            $view_file .= 'editflo_blazor_integration';
                        } elseif ($active_section == 'basic-setup') {
                            $view_file .= 'basic_setup';
                        } else {
                            $view_file .= 'documentation';
                        }
                    } elseif ($active_page == 'getting-started') {
                        if ($active_section == 'getting-started') {
                            $view_file .= 'getting_started';
                        } elseif ($active_section == 'introduction') {
                            $view_file .= 'getting_started_introduction';
                        } elseif ($active_section == 'installation') {
                            if ($active_subsection == '') {
                                $view_file .= 'getting_started_installation';
                            } elseif ($active_subsection == 'cloud') {
                                $view_file .= 'getting_started_cloud';
                            } elseif ($active_subsection == 'cloud-quickstart') {
                                $view_file .= 'getting_started_cloud_quickstart';
                            } elseif ($active_subsection == 'cloud-react') {
                                $view_file .= 'getting_started_cloud_react';
                            } elseif ($active_subsection == 'cloud-angular') {
                                $view_file .= 'getting_started_cloud_angular';
                            } elseif ($active_subsection == 'cloud-vue') {
                                $view_file .= 'getting_started_cloud_vue';
                            } elseif ($active_subsection == 'cloud-blazor') {
                                $view_file .= 'getting_started_cloud_blazor';
                            } elseif ($active_subsection == 'cloud-blazor-ref') {
                                $view_file .= 'getting_started_cloud_blazor_ref';
                            } elseif ($active_subsection == 'cloud-svelte') {
                                $view_file .= 'getting_started_cloud_svelte';
                            } elseif ($active_subsection == 'cloud-webcomponent') {
                                $view_file .= 'getting_started_cloud_webcomponent';
                            } elseif ($active_subsection == 'cloud-jquery') {
                                $view_file .= 'getting_started_cloud_jquery';
                            } elseif ($active_subsection == 'cloud-django') {
                                $view_file .= 'getting_started_cloud_django';
                            } elseif ($active_subsection == 'cloud-laravel') {
                                $view_file .= 'getting_started_cloud_laravel';
                            } elseif ($active_subsection == 'cloud-rails') {
                                $view_file .= 'getting_started_cloud_rails';
                            } elseif ($active_subsection == 'cloud-bootstrap') {
                                $view_file .= 'getting_started_cloud_bootstrap';
                            } elseif ($active_subsection == 'self-hosted') {
                                $view_file .= 'getting_started_self_hosted';
                            } elseif ($active_subsection == 'self-hosted-quickstart') {
                                $view_file .= 'getting_started_self_hosted_quickstart';
                            } elseif ($active_subsection == 'self-hosted-supported-integrations') {
                                $view_file .= 'getting_started_self_hosted_supported_integrations';
                            } elseif ($active_subsection == 'self-hosted-react-package-hosting') {
                                $view_file .= 'getting_started_self_hosted_react_package_hosting';
                            } elseif ($active_subsection == 'self-hosted-react-package-bundling') {
                                $view_file .= 'getting_started_self_hosted_react_package_bundling';
                            } elseif ($active_subsection == 'self-hosted-angular-package') {
                                $view_file .= 'getting_started_self_hosted_angular_package';
                            } elseif ($active_subsection == 'self-hosted-vue-package') {
                                $view_file .= 'getting_started_self_hosted_vue_package';
                            } elseif ($active_subsection == 'self-hosted-blazor-package') {
                                $view_file .= 'getting_started_self_hosted_blazor_package';
                            } elseif ($active_subsection == 'self-hosted-svelte-package') {
                                $view_file .= 'getting_started_self_hosted_svelte_package';
                            } elseif ($active_subsection == 'self-hosted-webcomponent-package') {
                                $view_file .= 'getting_started_self_hosted_webcomponent_package';
                            } elseif ($active_subsection == 'self-hosted-jquery-package') {
                                $view_file .= 'getting_started_self_hosted_jquery_package';
                            } elseif ($active_subsection == 'self-hosted-java-swing') {
                                $view_file .= 'getting_started_self_hosted_java_swing';
                            } elseif ($active_subsection == 'zip') {
                                $view_file .= 'getting_started_zip';
                            } elseif ($active_subsection == 'zip-quickstart') {
                                $view_file .= 'getting_started_zip_quickstart';
                            } elseif ($active_subsection == 'zip-supported-integrations') {
                                $view_file .= 'getting_started_zip_supported_integrations';
                            } elseif ($active_subsection == 'zip-react') {
                                $view_file .= 'getting_started_zip_react';
                            } elseif ($active_subsection == 'zip-react-hosting') {
                                $view_file .= 'getting_started_zip_react_hosting';
                            } elseif ($active_subsection == 'zip-react-bundling') {
                                $view_file .= 'getting_started_zip_react_bundling';
                            } elseif ($active_subsection == 'zip-angular') {
                                $view_file .= 'getting_started_zip_angular';
                            } elseif ($active_subsection == 'zip-angular-package') {
                                $view_file .= 'getting_started_zip_angular_package';
                            } elseif ($active_subsection == 'zip-vue') {
                                $view_file .= 'getting_started_zip_vue';
                            } elseif ($active_subsection == 'zip-vue-package') {
                                $view_file .= 'getting_started_zip_vue_package';
                            } elseif ($active_subsection == 'zip-blazor') {
                                $view_file .= 'getting_started_zip_blazor';
                            } elseif ($active_subsection == 'zip-blazor-package') {
                                $view_file .= 'getting_started_zip_blazor_package';
                            } elseif ($active_subsection == 'zip-svelte') {
                                $view_file .= 'getting_started_zip_svelte';
                            } elseif ($active_subsection == 'zip-svelte-package') {
                                $view_file .= 'getting_started_zip_svelte_package';
                            } elseif ($active_subsection == 'zip-webcomponent') {
                                $view_file .= 'getting_started_zip_webcomponent';
                            } elseif ($active_subsection == 'zip-webcomponent-package') {
                                $view_file .= 'getting_started_zip_webcomponent_package';
                            } elseif ($active_subsection == 'zip-java') {
                                $view_file .= 'getting_started_zip_java';
                            } elseif ($active_subsection == 'zip-django') {
                                $view_file .= 'getting_started_zip_django';
                            } elseif ($active_subsection == 'zip-laravel') {
                                $view_file .= 'getting_started_zip_laravel';
                            } elseif ($active_subsection == 'zip-rails') {
                                $view_file .= 'getting_started_zip_rails';
                            } elseif ($active_subsection == 'zip-bootstrap') {
                                $view_file .= 'getting_started_zip_bootstrap';
                            }
                        } elseif ($active_section == 'upgrading') {
                            $view_file .= 'getting_started_upgrading';
                        }
                    } elseif ($active_page == 'examples') {
                        if ($active_section == '') {
                            $view_file .= 'examples';
                        } elseif ($active_section == 'general-examples') {
                            if ($active_subsection == '') {
                                $view_file .= 'examples_general';
                            } elseif ($active_subsection == 'basic-example') {
                                $view_file .= 'examples_general_basic';
                            } elseif ($active_subsection == 'full-featured-opensource') {
                                $view_file .= 'examples_general_full_featured_opensource';
                            } elseif ($active_subsection == 'full-featured-premium') {
                                $view_file .= 'examples_general_full_featured_premium';
                            } elseif ($active_subsection == 'classic-editor') {
                                $view_file .= 'examples_general_classic_editor';
                            } elseif ($active_subsection == 'inline-editor') {
                                $view_file .= 'examples_general_inline_editor';
                            } elseif ($active_subsection == 'distraction-free-editor') {
                                $view_file .= 'examples_general_distraction_free_editor';
                            }
                        } elseif ($active_section == 'integration-examples') {
                            if ($active_subsection == '') {
                                $view_file .= 'examples_integration';
                            } elseif ($active_subsection == 'template-creation') {
                                $view_file .= 'examples_integration_template_creation';
                            }
                        } elseif ($active_section == 'skins-icons-examples') {
                            if ($active_subsection == '') {
                                $view_file .= 'examples_skins_icons';
                            } elseif ($active_subsection == 'bootstrap-demo') {
                                $view_file .= 'examples_skins_icons_bootstrap';
                            } elseif ($active_subsection == 'borderless-demo') {
                                $view_file .= 'examples_skins_icons_borderless';
                            } elseif ($active_subsection == 'fabric-demo') {
                                $view_file .= 'examples_skins_icons_fabric';
                            } elseif ($active_subsection == 'fluent-demo') {
                                $view_file .= 'examples_skins_icons_fluent';
                            } elseif ($active_subsection == 'jam-icons-demo') {
                                $view_file .= 'examples_skins_icons_jam';
                            } elseif ($active_subsection == 'material-classic-demo') {
                                $view_file .= 'examples_skins_icons_material_classic';
                            } elseif ($active_subsection == 'material-outline-demo') {
                                $view_file .= 'examples_skins_icons_material_outline';
                            } elseif ($active_subsection == 'naked-demo') {
                                $view_file .= 'examples_skins_icons_naked';
                            } elseif ($active_subsection == 'outside-demo') {
                                $view_file .= 'examples_skins_icons_outside';
                            } elseif ($active_subsection == 'small-icons-demo') {
                                $view_file .= 'examples_skins_icons_small';
                            } elseif ($active_subsection == 'snow-demo') {
                                $view_file .= 'examples_skins_icons_snow';
                            }
                        }
                    } elseif ($active_page == 'initial-configuration') {
                        if ($active_section == 'integration-options') {
                            $view_file .= 'integration_options';
                        } elseif ($active_section == 'size') {
                            $view_file .= 'size';
                        } elseif ($active_section == 'save-submit') {
                            $view_file .= 'save_and_submit';
                        } elseif ($active_section == 'promotions') {
                            $view_file .= 'promotions';
                        } else {
                            $view_file .= 'initial_configuration';
                        }
                    } elseif ($active_page == 'integration') {
                        $view_file .= 'integration';
                    } elseif ($active_page == 'configuration') {
                        $view_file .= 'configuration';
                    } elseif ($active_page == 'invalid-api-key') {
                        $view_file .= 'invalid_api_key';
                    } elseif ($active_page == 'license-key') {
                        $view_file .= 'license_key';
                    } elseif ($active_page == 'support') {
                        $view_file .= 'support';
                    } elseif ($active_page == 'usage-based-billing') {
                        $view_file .= 'usage_based_billing';
                    } elseif ($active_page == 'api') {
                        $view_file .= 'api';
                    } elseif ($active_page == 'security') {
                        if ($active_section == 'security-guide') {
                            if ($active_subsection == '') {
                                $view_file .= 'security_guide';
                            } elseif ($active_subsection == 'reporting-issues') {
                                $view_file .= 'security_reporting_issues';
                            } elseif ($active_subsection == 'maintenance') {
                                $view_file .= 'security_maintenance';
                            } elseif ($active_subsection == 'configuring-csp') {
                                $view_file .= 'security_configuring_csp';
                            } elseif ($active_subsection == 'general-risks') {
                                $view_file .= 'security_general_risks';
                            } elseif ($active_subsection == 'content-security-policies') {
                                $view_file .= 'security_content_security_policies';
                            } elseif ($active_subsection == 'cors') {
                                $view_file .= 'security_cors';
                            }
                        } else {
                            $view_file .= 'security';
                        }
                    } elseif ($active_page == 'release-notes') {
                        if ($active_section == 'editflo') {
                            if ($active_subsection == '') {
                                $view_file .= 'release_notes_editflo';
                            } elseif ($active_subsection == '0-1') {
                                $view_file .= 'editflo_0_1';
                            } elseif ($active_subsection == '0-1-overview') {
                                $view_file .= 'editflo_0_1_overview';
                            } elseif ($active_subsection == '0-1-new-premium-plugins') {
                                $view_file .= 'editflo_0_1_new_premium_plugins';
                            } elseif ($active_subsection == '0-1-premium-plugin-changes') {
                                $view_file .= 'editflo_0_1_premium_plugin_changes';
                            } elseif ($active_subsection == '0-1-improvements') {
                                $view_file .= 'editflo_0_1_improvements';
                            } elseif ($active_subsection == '0-1-additions') {
                                $view_file .= 'editflo_0_1_additions';
                            }
                        }
                    } elseif ($active_page == 'api-reference') {
                        if ($active_section == 'editflo') {
                            if ($active_subsection == '') {
                                $view_file .= 'editflo_api_reference';
                            } elseif ($active_subsection == 'add-on-manager') {
                                $view_file .= 'editflo_add_on_manager';
                            } elseif ($active_subsection == 'annotator') {
                                $view_file .= 'editflo_annotator';
                            } elseif ($active_subsection == 'editor') {
                                $view_file .= 'editflo_editor';
                            } elseif ($active_subsection == 'editor-manager') {
                                $view_file .= 'editflo_editor_manager';
                            } elseif ($active_subsection == 'editor-mode') {
                                $view_file .= 'editflo_editor_mode';
                            } elseif ($active_subsection == 'editor-options') {
                                $view_file .= 'editflo_editor_options';
                            } elseif ($active_subsection == 'editor-upload') {
                                $view_file .= 'editflo_editor_upload';
                            } elseif ($active_subsection == 'env') {
                                $view_file .= 'editflo_env';
                            } elseif ($active_subsection == 'event') {
                                $view_file .= 'editflo_event';
                            } elseif ($active_subsection == 'fake-clipboard') {
                                $view_file .= 'editflo_fake_clipboard';
                            } elseif ($active_subsection == 'formatter') {
                                $view_file .= 'editflo_formatter';
                            } elseif ($active_subsection == 'notification-manager') {
                                $view_file .= 'editflo_notification_manager';
                            } elseif ($active_subsection == 'plugin') {
                                $view_file .= 'editflo_plugin';
                            } elseif ($active_subsection == 'shortcuts') {
                                $view_file .= 'editflo_shortcuts';
                            } elseif ($active_subsection == 'theme') {
                                $view_file .= 'editflo_theme';
                            } elseif ($active_subsection == 'undo-manager') {
                                $view_file .= 'editflo_undo_manager';
                            } elseif ($active_subsection == 'user-lookup') {
                                $view_file .= 'editflo_user_lookup';
                            } elseif ($active_subsection == 'window-manager') {
                                $view_file .= 'editflo_window_manager';
                            }
                        } elseif ($active_section == 'editflo-editor-ui') {
                            if ($active_subsection == '') {
                                $view_file .= 'editflo_editor_ui';
                            } elseif ($active_subsection == 'registry') {
                                $view_file .= 'editflo_editor_ui_registry';
                            } elseif ($active_subsection == 'ui') {
                                $view_file .= 'editflo_editor_ui_ui';
                            }
                        } elseif ($active_section == 'editflo-html') {
                            if ($active_subsection == '') {
                                $view_file .= 'editflo_html';
                            } elseif ($active_subsection == 'domparser') {
                                $view_file .= 'editflo_html_domparser';
                            } elseif ($active_subsection == 'entities') {
                                $view_file .= 'editflo_html_entities';
                            } elseif ($active_subsection == 'node') {
                                $view_file .= 'editflo_html_node';
                            } elseif ($active_subsection == 'schema') {
                                $view_file .= 'editflo_html_schema';
                            } elseif ($active_subsection == 'serializer') {
                                $view_file .= 'editflo_html_serializer';
                            } elseif ($active_subsection == 'styles') {
                                $view_file .= 'editflo_html_styles';
                            } elseif ($active_subsection == 'writer') {
                                $view_file .= 'editflo_html_writer';
                            }
                        } elseif ($active_section == 'editflo-util') {
                            if ($active_subsection == '') {
                                $view_file .= 'editflo_util';
                            } elseif ($active_subsection == 'delay') {
                                $view_file .= 'editflo_util_delay';
                            } elseif ($active_subsection == 'event-dispatcher') {
                                $view_file .= 'editflo_util_event_dispatcher';
                            } elseif ($active_subsection == 'i18n') {
                                $view_file .= 'editflo_util_i18n';
                            } elseif ($active_subsection == 'image-uploader') {
                                $view_file .= 'editflo_util_image_uploader';
                            } elseif ($active_subsection == 'observable') {
                                $view_file .= 'editflo_util_observable';
                            } elseif ($active_subsection == 'tools') {
                                $view_file .= 'editflo_util_tools';
                            } elseif ($active_subsection == 'uri') {
                                $view_file .= 'editflo_util_uri';
                            }
                        } else {
                            $view_file .= 'api_reference';
                        }
                    }

                    // Check if view file exists, otherwise show a default message
                    if (file_exists(APPPATH . 'views/' . $view_file . '.php')) {
                        $this->load->view($view_file);
                    } else {
                        echo '<div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">';
                        echo '<h2 class="text-xl font-semibold text-yellow-800 mb-2">Page Under Construction</h2>';
                        echo '<p class="text-yellow-700">This documentation page is currently being developed. Please check back soon.</p>';
                        echo '<p class="text-yellow-600 text-sm mt-2">View file: ' . $view_file . '.php</p>';
                        echo '<p class="text-yellow-600 text-sm">Active Page: ' . $active_page . '</p>';
                        echo '<p class="text-yellow-600 text-sm">Active Section: ' . $active_section . '</p>';
                        echo '<p class="text-yellow-600 text-sm">Active Subsection: ' . $active_subsection . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </main>

        <!-- Right Sidebar - Table of Contents -->
        <aside class="w-64 lg:w-[230px] bg-white border-l border-gray-200 h-screen fixed right-0 top-0 overflow-y-auto z-20 hidden lg:block">
            <div class="p-6 mt-20">
                <!-- Table of Contents Header -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 flex items-center">
                        <i class="fas fa-list-ol text-blue-500 mr-2"></i>
                        On This Page
                    </h3>
                    <p class="text-sm text-gray-600">Jump to specific sections</p>
                </div>

                <!-- Table of Contents Navigation -->
                <nav class="space-y-1 text-gray-600 text-xs sm:text-sm" id="pageToc">
                    <!-- TOC items will be generated by JavaScript -->
                </nav>

                <!-- Divider -->
                <div class="my-6 border-t border-gray-200"></div>

                <!-- Help Card -->
                <div class="bg-gradient-to-br from-orange-50 to-red-50 border border-orange-200 rounded-lg p-3 shadow-sm max-w-xs">
                    <div class="flex items-start mb-2">
                        <div class="w-8 h-8 bg-orange-100 rounded-md flex items-center justify-center mr-2 flex-shrink-0">
                            <i class="fas fa-life-ring text-orange-600 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-semibold text-gray-800 mb-0.5">Need Help?</h4>
                            <p class="text-[10px] text-gray-600 leading-tight">Stuck somewhere? Get support from our team.</p>
                        </div>
                    </div>

                    <button class="w-full bg-white hover:bg-orange-50 text-orange-600 border border-orange-300 text-xs font-medium py-1.5 px-3 rounded-md transition-colors duration-200 flex items-center justify-center">
                        <i class="fas fa-headset text-xs mr-1.5"></i>
                        Contact Support
                    </button>
                </div>

                <!-- Promotional Section -->
                <div class="mt-4 promo-card p-3 text-white rounded-lg">
                    <div class="relative z-10">
                        <div class="flex items-center mb-1.5">
                            <i class="fas fa-gem text-yellow-300 text-sm mr-1.5"></i>
                            <h4 class="font-semibold text-xs">Free 14-Day Trial</h4>
                        </div>

                        <p class="text-[10px] leading-tight mb-2 opacity-90">
                            Try every feature in our Professional Plan for 14 days with no commitment.
                        </p>

                        <button class="w-full bg-white text-purple-600 hover:bg-gray-100 text-[10px] font-semibold py-1.5 px-2.5 rounded-md transition-colors">
                            Start Trial
                        </button>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <!-- Mobile TOC Button -->
    <div class="fixed bottom-6 right-6 z-40 lg:hidden">
        <button class="bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700 transition-colors duration-200" onclick="toggleMobileTOC()">
            <i class="fas fa-list-ol text-xl"></i>
        </button>
    </div>

    <!-- Mobile TOC Panel -->
    <div class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 lg:hidden" id="mobileTOC">
        <div class="p-6 h-full overflow-y-auto">
            <div class="flex justify-between items-center mb-6 pb-4 border-b border-gray-200">
                <div class="flex items-center">
                    <i class="fas fa-list-ol text-blue-500 text-xl mr-3"></i>
                    <h3 class="text-xl font-semibold text-gray-800">Table of Contents</h3>
                </div>
                <button class="text-gray-500 hover:text-gray-700 p-2 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileTOC()">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>

            <nav class="space-y-1" id="mobilePageToc">
                <!-- Mobile TOC items -->
            </nav>
        </div>
    </div>

    <!-- Search Index Data -->
    <!-- Search Index Data -->
    <script>
        // Search index data with all routes
        window.docsSearchIndex = [
            // Getting Started Section
            {
                id: 'getting-started',
                title: 'Getting Started',
                url: '<?php echo base_url('documentation/getting-started'); ?>',
                content: 'Get started with Editflo documentation. Learn about features and capabilities of Editflo rich text editor.',
                category: 'Getting Started'
            },
            {
                id: 'introduction',
                title: 'Introduction to Editflo',
                url: '<?php echo base_url('documentation/getting-started/introduction'); ?>',
                content: 'Introduction to Editflo. Learn about features and capabilities of Editflo rich text editor.',
                category: 'Getting Started'
            },
            {
                id: 'installation',
                title: 'Installation',
                url: '<?php echo base_url('documentation/getting-started/installation'); ?>',
                content: 'Installation guide for Editflo. Choose between cloud, self-hosted, or ZIP installation methods.',
                category: 'Installation'
            },

            // Cloud Installation Routes
            {
                id: 'cloud-installation',
                title: 'Cloud Installation',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud'); ?>',
                content: 'Cloud installation guide for Editflo. Quick start guide for cloud installation.',
                category: 'Installation'
            },
            {
                id: 'cloud-quick-start',
                title: 'Cloud Quick Start',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/quick-start'); ?>',
                content: 'Quick start guide for cloud installation of Editflo. Learn how to set up Editflo using cloud services.',
                category: 'Installation'
            },
            {
                id: 'react-cloud',
                title: 'React Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/react'); ?>',
                content: 'How to integrate Editflo with React applications using cloud installation. Step by step guide for React developers.',
                category: 'Integration'
            },
            {
                id: 'angular-cloud',
                title: 'Angular Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/angular'); ?>',
                content: 'Guide for integrating Editflo with Angular applications using cloud installation. Complete setup instructions.',
                category: 'Integration'
            },
            {
                id: 'vue-cloud',
                title: 'Vue.js Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/vue'); ?>',
                content: 'Integrate Editflo with Vue.js applications using cloud installation. Vue 2 and Vue 3 support.',
                category: 'Integration'
            },
            {
                id: 'blazor-cloud',
                title: 'Blazor Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/blazor'); ?>',
                content: 'Blazor integration with Editflo cloud installation. Guide for .NET developers.',
                category: 'Integration'
            },
            {
                id: 'blazor-ref-cloud',
                title: 'Blazor Reference Cloud',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/blazor-ref'); ?>',
                content: 'Blazor reference documentation for cloud installation. API references and advanced configurations.',
                category: 'Integration'
            },
            {
                id: 'svelte-cloud',
                title: 'Svelte Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/svelte'); ?>',
                content: 'Svelte integration with Editflo cloud installation. Modern JavaScript framework support.',
                category: 'Integration'
            },
            {
                id: 'webcomponent-cloud',
                title: 'Web Component Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/web-component'); ?>',
                content: 'Web Component integration with Editflo cloud installation. Custom element implementation.',
                category: 'Integration'
            },
            {
                id: 'jquery-cloud',
                title: 'jQuery Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/jquery'); ?>',
                content: 'jQuery integration with Editflo cloud installation. Traditional JavaScript library support.',
                category: 'Integration'
            },
            {
                id: 'django-cloud',
                title: 'Django Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/django'); ?>',
                content: 'Django backend integration with Editflo cloud installation. Python web framework support.',
                category: 'Backend'
            },
            {
                id: 'laravel-cloud',
                title: 'Laravel Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/laravel'); ?>',
                content: 'Laravel backend integration with Editflo cloud installation. PHP web framework support.',
                category: 'Backend'
            },
            {
                id: 'rails-cloud',
                title: 'Ruby on Rails Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/ruby-on-rails'); ?>',
                content: 'Ruby on Rails backend integration with Editflo cloud installation. Ruby web framework support.',
                category: 'Backend'
            },
            {
                id: 'bootstrap-cloud',
                title: 'Bootstrap Cloud Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/cloud/bootstrap'); ?>',
                content: 'Bootstrap integration with Editflo cloud installation. CSS framework styling.',
                category: 'Frontend'
            },

            // Self-hosted Installation Routes
            {
                id: 'self-hosted',
                title: 'Self-hosted Installation',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted'); ?>',
                content: 'Self-hosted installation guide for Editflo. Install on your own servers and infrastructure.',
                category: 'Installation'
            },
            {
                id: 'self-hosted-quick-start',
                title: 'Self-hosted Quick Start',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/quick-start'); ?>',
                content: 'Quick start guide for self-hosted installation of Editflo. Server setup and configuration.',
                category: 'Installation'
            },
            {
                id: 'self-hosted-integrations',
                title: 'Self-hosted Supported Integrations',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/supported-integrations'); ?>',
                content: 'Supported integrations for self-hosted Editflo installation. Framework compatibility list.',
                category: 'Installation'
            },
            {
                id: 'self-hosted-react',
                title: 'Self-hosted React Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/react'); ?>',
                content: 'React integration for self-hosted Editflo. Package manager and hosting options.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-react-package-hosting',
                title: 'Self-hosted React Package Manager on Hosting',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/react/package-manager-hosting'); ?>',
                content: 'React package manager installation on hosting for self-hosted Editflo.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-react-package-bundling',
                title: 'Self-hosted React Package Manager + Bundling',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/react/package-manager-bundling'); ?>',
                content: 'React package manager with bundling for self-hosted Editflo installation.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-angular',
                title: 'Self-hosted Angular Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/angular'); ?>',
                content: 'Angular integration for self-hosted Editflo. Package manager installation guide.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-angular-package',
                title: 'Self-hosted Angular Package Manager',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/angular/package-manager'); ?>',
                content: 'Angular package manager installation for self-hosted Editflo.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-vue',
                title: 'Self-hosted Vue.js Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/vue'); ?>',
                content: 'Vue.js integration for self-hosted Editflo. Package manager installation.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-vue-package',
                title: 'Self-hosted Vue.js Package Manager',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/vue/package-manager'); ?>',
                content: 'Vue.js package manager installation for self-hosted Editflo.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-blazor',
                title: 'Self-hosted Blazor Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/blazor'); ?>',
                content: 'Blazor integration for self-hosted Editflo. .NET framework support.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-blazor-package',
                title: 'Self-hosted Blazor Package Manager',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/blazor/package-manager'); ?>',
                content: 'Blazor package manager installation for self-hosted Editflo.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-svelte',
                title: 'Self-hosted Svelte Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/svelte'); ?>',
                content: 'Svelte integration for self-hosted Editflo. Modern JavaScript framework.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-svelte-package',
                title: 'Self-hosted Svelte Package Manager',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/svelte/package-manager'); ?>',
                content: 'Svelte package manager installation for self-hosted Editflo.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-webcomponent',
                title: 'Self-hosted Web Component Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/web-component'); ?>',
                content: 'Web Component integration for self-hosted Editflo. Custom elements implementation.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-webcomponent-package',
                title: 'Self-hosted Web Component Package Manager',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/web-component/package-manager'); ?>',
                content: 'Web Component package manager installation for self-hosted Editflo.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-jquery',
                title: 'Self-hosted jQuery Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/jquery'); ?>',
                content: 'jQuery integration for self-hosted Editflo. Traditional JavaScript library.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-jquery-package',
                title: 'Self-hosted jQuery Package Manager',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/jquery/package-manager'); ?>',
                content: 'jQuery package manager installation for self-hosted Editflo.',
                category: 'Integration'
            },
            {
                id: 'self-hosted-java-swing',
                title: 'Self-hosted Java Swing Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/self-hosted/java-swing'); ?>',
                content: 'Java Swing integration for self-hosted Editflo. Desktop application support.',
                category: 'Integration'
            },

            // ZIP Installation Routes
            {
                id: 'zip-installation',
                title: 'ZIP Installation',
                url: '<?php echo base_url('documentation/getting-started/installation/zip'); ?>',
                content: 'ZIP package installation for Editflo. Manual installation using ZIP files.',
                category: 'Installation'
            },
            {
                id: 'zip-quick-start',
                title: 'ZIP Quick Start',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/quick-start'); ?>',
                content: 'Quick start guide for ZIP installation of Editflo. Manual setup instructions.',
                category: 'Installation'
            },
            {
                id: 'zip-supported-integrations',
                title: 'ZIP Supported Integrations',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/supported-integrations'); ?>',
                content: 'Supported integrations for ZIP installation of Editflo. Framework compatibility.',
                category: 'Installation'
            },
            {
                id: 'zip-react',
                title: 'ZIP React Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/react'); ?>',
                content: 'React integration using ZIP package installation. Hosting and bundling options.',
                category: 'Integration'
            },
            {
                id: 'zip-react-hosting',
                title: 'ZIP React Hosting',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/react/hosting'); ?>',
                content: 'React hosting with ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-react-bundling',
                title: 'ZIP React Bundling',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/react/bundling'); ?>',
                content: 'React bundling with ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-angular',
                title: 'ZIP Angular Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/angular'); ?>',
                content: 'Angular integration using ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-angular-package',
                title: 'ZIP Angular Package',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/angular/package'); ?>',
                content: 'Angular package installation using ZIP for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-vue',
                title: 'ZIP Vue.js Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/vue'); ?>',
                content: 'Vue.js integration using ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-vue-package',
                title: 'ZIP Vue.js Package',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/vue/package'); ?>',
                content: 'Vue.js package installation using ZIP for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-blazor',
                title: 'ZIP Blazor Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/blazor'); ?>',
                content: 'Blazor integration using ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-blazor-package',
                title: 'ZIP Blazor Package',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/blazor/package'); ?>',
                content: 'Blazor package installation using ZIP for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-svelte',
                title: 'ZIP Svelte Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/svelte'); ?>',
                content: 'Svelte integration using ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-svelte-package',
                title: 'ZIP Svelte Package',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/svelte/package'); ?>',
                content: 'Svelte package installation using ZIP for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-webcomponent',
                title: 'ZIP Web Component Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/web-component'); ?>',
                content: 'Web Component integration using ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-webcomponent-package',
                title: 'ZIP Web Component Package',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/web-component/package'); ?>',
                content: 'Web Component package installation using ZIP for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-java',
                title: 'ZIP Java Swing Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/java-swing'); ?>',
                content: 'Java Swing integration using ZIP package installation for Editflo.',
                category: 'Integration'
            },
            {
                id: 'zip-django',
                title: 'ZIP Django Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/django'); ?>',
                content: 'Django backend integration using ZIP package installation for Editflo.',
                category: 'Backend'
            },
            {
                id: 'zip-laravel',
                title: 'ZIP Laravel Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/laravel'); ?>',
                content: 'Laravel backend integration using ZIP package installation for Editflo.',
                category: 'Backend'
            },
            {
                id: 'zip-rails',
                title: 'ZIP Ruby on Rails Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/ruby-on-rails'); ?>',
                content: 'Ruby on Rails backend integration using ZIP package installation for Editflo.',
                category: 'Backend'
            },
            {
                id: 'zip-bootstrap',
                title: 'ZIP Bootstrap Integration',
                url: '<?php echo base_url('documentation/getting-started/installation/zip/bootstrap'); ?>',
                content: 'Bootstrap integration using ZIP package installation for Editflo.',
                category: 'Frontend'
            },
            {
                id: 'upgrading',
                title: 'Upgrading Editflo',
                url: '<?php echo base_url('documentation/getting-started/upgrading'); ?>',
                content: 'Guide for upgrading Editflo to newer versions. Migration and update instructions.',
                category: 'Maintenance'
            },

            // Examples Routes
            {
                id: 'examples',
                title: 'Examples',
                url: '<?php echo base_url('documentation/examples'); ?>',
                content: 'Live examples of Editflo in action. Demo implementations for different use cases.',
                category: 'Examples'
            },
            {
                id: 'examples-general',
                title: 'General Examples',
                url: '<?php echo base_url('documentation/examples/general'); ?>',
                content: 'General examples of Editflo usage. Basic to advanced implementation demos.',
                category: 'Examples'
            },
            {
                id: 'basic-example',
                title: 'Basic Example',
                url: '<?php echo base_url('documentation/examples/general/basic'); ?>',
                content: 'Basic example of Editflo implementation. Simple setup and configuration.',
                category: 'Examples'
            },
            {
                id: 'full-featured-open-source',
                title: 'Full-featured Open Source Demo',
                url: '<?php echo base_url('documentation/examples/general/full-featured-open-source'); ?>',
                content: 'Full-featured demo showing all open source features of Editflo.',
                category: 'Examples'
            },
            {
                id: 'full-featured-premium',
                title: 'Full-featured Premium Demo',
                url: '<?php echo base_url('documentation/examples/general/full-featured-premium'); ?>',
                content: 'Full-featured demo showing both open source and premium features of Editflo.',
                category: 'Examples'
            },
            {
                id: 'classic-editor',
                title: 'Classic Editor Mode',
                url: '<?php echo base_url('documentation/examples/general/classic-editor'); ?>',
                content: 'Classic editor mode example of Editflo. Traditional toolbar interface.',
                category: 'Examples'
            },
            {
                id: 'inline-editor',
                title: 'Inline Editor',
                url: '<?php echo base_url('documentation/examples/general/inline-editor'); ?>',
                content: 'Inline editor example of Editflo. Edit content directly on the page.',
                category: 'Examples'
            },
            {
                id: 'distraction-free-editor',
                title: 'Distraction-free Editor',
                url: '<?php echo base_url('documentation/examples/general/distraction-free-editor'); ?>',
                content: 'Distraction-free editor mode example of Editflo. Minimal interface for focused writing.',
                category: 'Examples'
            },
            {
                id: 'integration-examples',
                title: 'Integration Examples',
                url: '<?php echo base_url('documentation/examples/integration'); ?>',
                content: 'Integration examples of Editflo with different frameworks and platforms.',
                category: 'Examples'
            },
            {
                id: 'template-creation',
                title: 'Template Creation Example',
                url: '<?php echo base_url('documentation/examples/integration/template-creation'); ?>',
                content: 'Template creation example using Editflo. Create and manage document templates.',
                category: 'Examples'
            },
            {
                id: 'skins-icons',
                title: 'Skins and Icons Examples',
                url: '<?php echo base_url('documentation/examples/skins-icons'); ?>',
                content: 'Skins and icons examples for Editflo. Customize appearance and icons.',
                category: 'Examples'
            },
            {
                id: 'bootstrap-demo',
                title: 'Bootstrap Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/bootstrap'); ?>',
                content: 'Bootstrap skin demo for Editflo. Bootstrap-styled interface.',
                category: 'Examples'
            },
            {
                id: 'borderless-demo',
                title: 'Borderless Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/borderless'); ?>',
                content: 'Borderless skin demo for Editflo. Clean, borderless interface design.',
                category: 'Examples'
            },
            {
                id: 'fabric-demo',
                title: 'Fabric Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/fabric'); ?>',
                content: 'Fabric skin demo for Editflo. Microsoft Fabric design system.',
                category: 'Examples'
            },
            {
                id: 'fluent-demo',
                title: 'Fluent Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/fluent'); ?>',
                content: 'Fluent skin demo for Editflo. Microsoft Fluent design system.',
                category: 'Examples'
            },
            {
                id: 'jam-icons-demo',
                title: 'Jam Icons Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/jam-icons'); ?>',
                content: 'Jam icons demo for Editflo. Jam icon set implementation.',
                category: 'Examples'
            },
            {
                id: 'material-classic-demo',
                title: 'Material Classic Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/material-classic'); ?>',
                content: 'Material Classic skin demo for Editflo. Classic Material Design.',
                category: 'Examples'
            },
            {
                id: 'material-outline-demo',
                title: 'Material Outline Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/material-outline'); ?>',
                content: 'Material Outline skin demo for Editflo. Outlined Material Design.',
                category: 'Examples'
            },
            {
                id: 'naked-demo',
                title: 'Naked Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/naked'); ?>',
                content: 'Naked skin demo for Editflo. Minimal, unstyled interface.',
                category: 'Examples'
            },
            {
                id: 'outside-demo',
                title: 'Outside Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/outside'); ?>',
                content: 'Outside skin demo for Editflo. External toolbar placement.',
                category: 'Examples'
            },
            {
                id: 'small-icons-demo',
                title: 'Small Icons Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/small-icons'); ?>',
                content: 'Small icons demo for Editflo. Compact toolbar icons.',
                category: 'Examples'
            },
            {
                id: 'snow-demo',
                title: 'Snow Demo',
                url: '<?php echo base_url('documentation/examples/skins-icons/snow'); ?>',
                content: 'Snow skin demo for Editflo. Clean, white interface design.',
                category: 'Examples'
            },

            // Initial Configuration Routes
            {
                id: 'initial-configuration',
                title: 'Initial Configuration',
                url: '<?php echo base_url('documentation/initial-configuration'); ?>',
                content: 'Initial configuration options for Editflo. Setup and customization guide.',
                category: 'Configuration'
            },
            {
                id: 'integration-options',
                title: 'Integration Options',
                url: '<?php echo base_url('documentation/initial-configuration/integration-options'); ?>',
                content: 'Integration options for Editflo. Framework and platform integration methods.',
                category: 'Configuration'
            },
            {
                id: 'size',
                title: 'Size Configuration',
                url: '<?php echo base_url('documentation/initial-configuration/size'); ?>',
                content: 'Size configuration for Editflo. Editor dimensions and responsive settings.',
                category: 'Configuration'
            },
            {
                id: 'save-submit',
                title: 'Save and Submit',
                url: '<?php echo base_url('documentation/initial-configuration/save-submit'); ?>',
                content: 'Save and submit configuration for Editflo. Form handling and data submission.',
                category: 'Configuration'
            },
            {
                id: 'promotions',
                title: 'Promotions',
                url: '<?php echo base_url('documentation/initial-configuration/promotions'); ?>',
                content: 'Promotional settings for Editflo. Upsell and feature promotion configurations.',
                category: 'Configuration'
            },

            // Security Routes
            {
                id: 'security',
                title: 'Security',
                url: '<?php echo base_url('documentation/security'); ?>',
                content: 'Security guide for Editflo. Best practices for secure implementation.',
                category: 'Security'
            },
            {
                id: 'security-guide',
                title: 'Security Guide',
                url: '<?php echo base_url('documentation/security/guide'); ?>',
                content: 'Comprehensive security guide for Editflo. Security best practices and guidelines.',
                category: 'Security'
            },
            {
                id: 'reporting-issues',
                title: 'Reporting Security Issues',
                url: '<?php echo base_url('documentation/security/guide/reporting-issues'); ?>',
                content: 'Guide for reporting security issues in Editflo. Vulnerability disclosure process.',
                category: 'Security'
            },
            {
                id: 'maintenance',
                title: 'Security Maintenance',
                url: '<?php echo base_url('documentation/security/guide/maintenance'); ?>',
                content: 'Security maintenance procedures for Editflo. Regular security updates and patches.',
                category: 'Security'
            },
            {
                id: 'configuring-csp',
                title: 'Configuring Content Security Policy',
                url: '<?php echo base_url('documentation/security/guide/configuring-csp'); ?>',
                content: 'Guide for configuring Content Security Policy (CSP) for Editflo.',
                category: 'Security'
            },
            {
                id: 'general-risks',
                title: 'General Security Risks',
                url: '<?php echo base_url('documentation/security/guide/general-risks'); ?>',
                content: 'General security risks for user input elements. Security considerations for rich text editors.',
                category: 'Security'
            },
            {
                id: 'content-security-policies',
                title: 'Content Security Policies',
                url: '<?php echo base_url('documentation/security/guide/content-security-policies'); ?>',
                content: 'Content Security Policies (CSP) configuration for Editflo.',
                category: 'Security'
            },
            {
                id: 'cors',
                title: 'CORS Configuration',
                url: '<?php echo base_url('documentation/security/guide/cors'); ?>',
                content: 'Cross-Origin Resource Sharing (CORS) configuration for Editflo.',
                category: 'Security'
            },

            // Release Notes Routes
            {
                id: 'release-notes',
                title: 'Release Notes',
                url: '<?php echo base_url('documentation/release-notes/editflo'); ?>',
                content: 'Release notes for Editflo versions. Changelog and version history.',
                category: 'Updates'
            },
            {
                id: 'editflo-0-1',
                title: 'Editflo 0.1',
                url: '<?php echo base_url('documentation/release-notes/editflo/0-1'); ?>',
                content: 'Release notes for Editflo version 0.1. Initial release features and changes.',
                category: 'Updates'
            },
            {
                id: 'editflo-0-1-overview',
                title: 'Editflo 0.1 Overview',
                url: '<?php echo base_url('documentation/release-notes/editflo/0-1/overview'); ?>',
                content: 'Overview of Editflo version 0.1 release. Summary of new features and improvements.',
                category: 'Updates'
            },
            {
                id: 'editflo-0-1-new-premium-plugins',
                title: 'Editflo 0.1 New Premium Plugins',
                url: '<?php echo base_url('documentation/release-notes/editflo/0-1/new-premium-plugins'); ?>',
                content: 'New premium plugins in Editflo version 0.1. Additional paid features.',
                category: 'Updates'
            },
            {
                id: 'editflo-0-1-premium-plugin-changes',
                title: 'Editflo 0.1 Premium Plugin Changes',
                url: '<?php echo base_url('documentation/release-notes/editflo/0-1/premium-plugin-changes'); ?>',
                content: 'Premium plugin changes in Editflo version 0.1. Updates to existing premium features.',
                category: 'Updates'
            },
            {
                id: 'editflo-0-1-improvements',
                title: 'Editflo 0.1 Improvements',
                url: '<?php echo base_url('documentation/release-notes/editflo/0-1/improvements'); ?>',
                content: 'Improvements in Editflo version 0.1. Performance and feature enhancements.',
                category: 'Updates'
            },
            {
                id: 'editflo-0-1-additions',
                title: 'Editflo 0.1 Additions',
                url: '<?php echo base_url('documentation/release-notes/editflo/0-1/additions'); ?>',
                content: 'New additions in Editflo version 0.1. Additional features and capabilities.',
                category: 'Updates'
            },

            // API Reference Routes
            {
                id: 'api-reference',
                title: 'API Reference',
                url: '<?php echo base_url('documentation/api-reference/editflo'); ?>',
                content: 'Complete API reference for Editflo. All methods, properties, and events documentation.',
                category: 'API'
            },
            {
                id: 'editflo-addon-manager',
                title: 'editflo.AddOnManager',
                url: '<?php echo base_url('documentation/api-reference/editflo/add-on-manager'); ?>',
                content: 'Editflo AddOnManager API reference. Add-on management and extension system.',
                category: 'API'
            },
            {
                id: 'editflo-annotator',
                title: 'editflo.Annotator',
                url: '<?php echo base_url('documentation/api-reference/editflo/annotator'); ?>',
                content: 'Editflo Annotator API reference. Annotation and commenting features.',
                category: 'API'
            },
            {
                id: 'editflo-editor',
                title: 'editflo.Editor',
                url: '<?php echo base_url('documentation/api-reference/editflo/editor'); ?>',
                content: 'Editflo Editor API reference. Main editor instance and methods.',
                category: 'API'
            },
            {
                id: 'editflo-editor-manager',
                title: 'editflo.EditorManager',
                url: '<?php echo base_url('documentation/api-reference/editflo/editor-manager'); ?>',
                content: 'Editflo EditorManager API reference. Multiple editor instance management.',
                category: 'API'
            },
            {
                id: 'editflo-editor-mode',
                title: 'editflo.EditorMode',
                url: '<?php echo base_url('documentation/api-reference/editflo/editor-mode'); ?>',
                content: 'Editflo EditorMode API reference. Editor mode configurations and states.',
                category: 'API'
            },
            {
                id: 'editflo-editor-options',
                title: 'editflo.EditorOptions',
                url: '<?php echo base_url('documentation/api-reference/editflo/editor-options'); ?>',
                content: 'Editflo EditorOptions API reference. Editor configuration options.',
                category: 'API'
            },
            {
                id: 'editflo-editor-upload',
                title: 'editflo.EditorUpload',
                url: '<?php echo base_url('documentation/api-reference/editflo/editor-upload'); ?>',
                content: 'Editflo EditorUpload API reference. File upload functionality.',
                category: 'API'
            },
            {
                id: 'editflo-env',
                title: 'editflo.Env',
                url: '<?php echo base_url('documentation/api-reference/editflo/env'); ?>',
                content: 'Editflo Env API reference. Environment detection and configuration.',
                category: 'API'
            },
            {
                id: 'editflo-event',
                title: 'editflo.Event',
                url: '<?php echo base_url('documentation/api-reference/editflo/event'); ?>',
                content: 'Editflo Event API reference. Event system and handlers.',
                category: 'API'
            },
            {
                id: 'editflo-fake-clipboard',
                title: 'editflo.FakeClipboard',
                url: '<?php echo base_url('documentation/api-reference/editflo/fake-clipboard'); ?>',
                content: 'Editflo FakeClipboard API reference. Clipboard simulation and handling.',
                category: 'API'
            },
            {
                id: 'editflo-formatter',
                title: 'editflo.Formatter',
                url: '<?php echo base_url('documentation/api-reference/editflo/formatter'); ?>',
                content: 'Editflo Formatter API reference. Text formatting and styling.',
                category: 'API'
            },
            {
                id: 'editflo-notification-manager',
                title: 'editflo.NotificationManager',
                url: '<?php echo base_url('documentation/api-reference/editflo/notification-manager'); ?>',
                content: 'Editflo NotificationManager API reference. Notification system and alerts.',
                category: 'API'
            },
            {
                id: 'editflo-plugin',
                title: 'editflo.Plugin',
                url: '<?php echo base_url('documentation/api-reference/editflo/plugin'); ?>',
                content: 'Editflo Plugin API reference. Plugin system and extensions.',
                category: 'API'
            },
            {
                id: 'editflo-shortcuts',
                title: 'editflo.Shortcuts',
                url: '<?php echo base_url('documentation/api-reference/editflo/shortcuts'); ?>',
                content: 'Editflo Shortcuts API reference. Keyboard shortcuts and hotkeys.',
                category: 'API'
            },
            {
                id: 'editflo-theme',
                title: 'editflo.Theme',
                url: '<?php echo base_url('documentation/api-reference/editflo/theme'); ?>',
                content: 'Editflo Theme API reference. Theme system and customization.',
                category: 'API'
            },
            {
                id: 'editflo-undo-manager',
                title: 'editflo.UndoManager',
                url: '<?php echo base_url('documentation/api-reference/editflo/undo-manager'); ?>',
                content: 'Editflo UndoManager API reference. Undo/redo functionality.',
                category: 'API'
            },
            {
                id: 'editflo-user-lookup',
                title: 'editflo.UserLookup',
                url: '<?php echo base_url('documentation/api-reference/editflo/user-lookup'); ?>',
                content: 'Editflo UserLookup API reference. User search and mention system.',
                category: 'API'
            },
            {
                id: 'editflo-window-manager',
                title: 'editflo.WindowManager',
                url: '<?php echo base_url('documentation/api-reference/editflo/window-manager'); ?>',
                content: 'Editflo WindowManager API reference. Dialog and window management.',
                category: 'API'
            },
            {
                id: 'editflo-editor-ui',
                title: 'editflo.editor.ui',
                url: '<?php echo base_url('documentation/api-reference/editflo-editor-ui'); ?>',
                content: 'Editflo editor.ui API reference. User interface components and system.',
                category: 'API'
            },
            {
                id: 'editflo-editor-ui-registry',
                title: 'editflo.editor.ui.Registry',
                url: '<?php echo base_url('documentation/api-reference/editflo-editor-ui/registry'); ?>',
                content: 'Editflo editor.ui.Registry API reference. UI component registry system.',
                category: 'API'
            },
            {
                id: 'editflo-editor-ui-ui',
                title: 'editflo.editor.ui.Ui',
                url: '<?php echo base_url('documentation/api-reference/editflo-editor-ui/ui'); ?>',
                content: 'Editflo editor.ui.Ui API reference. Main UI interface and methods.',
                category: 'API'
            },
            {
                id: 'editflo-html',
                title: 'editflo.html',
                url: '<?php echo base_url('documentation/api-reference/editflo-html'); ?>',
                content: 'Editflo html API reference. HTML parsing, serialization, and manipulation.',
                category: 'API'
            },
            {
                id: 'editflo-html-domparser',
                title: 'editflo.html.DomParser',
                url: '<?php echo base_url('documentation/api-reference/editflo-html/domparser'); ?>',
                content: 'Editflo html.DomParser API reference. DOM parsing and manipulation.',
                category: 'API'
            },
            {
                id: 'editflo-html-entities',
                title: 'editflo.html.Entities',
                url: '<?php echo base_url('documentation/api-reference/editflo-html/entities'); ?>',
                content: 'Editflo html.Entities API reference. HTML entity encoding and decoding.',
                category: 'API'
            },
            {
                id: 'editflo-html-node',
                title: 'editflo.html.Node',
                url: '<?php echo base_url('documentation/api-reference/editflo-html/node'); ?>',
                content: 'Editflo html.Node API reference. DOM node manipulation and traversal.',
                category: 'API'
            },
            {
                id: 'editflo-html-schema',
                title: 'editflo.html.Schema',
                url: '<?php echo base_url('documentation/api-reference/editflo-html/schema'); ?>',
                content: 'Editflo html.Schema API reference. HTML schema validation and rules.',
                category: 'API'
            },
            {
                id: 'editflo-html-serializer',
                title: 'editflo.html.Serializer',
                url: '<?php echo base_url('documentation/api-reference/editflo-html/serializer'); ?>',
                content: 'Editflo html.Serializer API reference. HTML serialization and output.',
                category: 'API'
            },
            {
                id: 'editflo-html-styles',
                title: 'editflo.html.Styles',
                url: '<?php echo base_url('documentation/api-reference/editflo-html/styles'); ?>',
                content: 'Editflo html.Styles API reference. CSS style manipulation and parsing.',
                category: 'API'
            },
            {
                id: 'editflo-html-writer',
                title: 'editflo.html.Writer',
                url: '<?php echo base_url('documentation/api-reference/editflo-html/writer'); ?>',
                content: 'Editflo html.Writer API reference. HTML writing and output generation.',
                category: 'API'
            },
            {
                id: 'editflo-util',
                title: 'editflo.util',
                url: '<?php echo base_url('documentation/api-reference/editflo-util'); ?>',
                content: 'Editflo util API reference. Utility functions and helpers.',
                category: 'API'
            },
            {
                id: 'editflo-util-delay',
                title: 'editflo.util.Delay',
                url: '<?php echo base_url('documentation/api-reference/editflo-util/delay'); ?>',
                content: 'Editflo util.Delay API reference. Delay and timing utilities.',
                category: 'API'
            },
            {
                id: 'editflo-util-event-dispatcher',
                title: 'editflo.util.EventDispatcher',
                url: '<?php echo base_url('documentation/api-reference/editflo-util/event-dispatcher'); ?>',
                content: 'Editflo util.EventDispatcher API reference. Event dispatching system.',
                category: 'API'
            },
            {
                id: 'editflo-util-i18n',
                title: 'editflo.util.I18n',
                url: '<?php echo base_url('documentation/api-reference/editflo-util/i18n'); ?>',
                content: 'Editflo util.I18n API reference. Internationalization and localization.',
                category: 'API'
            },
            {
                id: 'editflo-util-image-uploader',
                title: 'editflo.util.ImageUploader',
                url: '<?php echo base_url('documentation/api-reference/editflo-util/image-uploader'); ?>',
                content: 'Editflo util.ImageUploader API reference. Image upload utilities.',
                category: 'API'
            },
            {
                id: 'editflo-util-observable',
                title: 'editflo.util.Observable',
                url: '<?php echo base_url('documentation/api-reference/editflo-util/observable'); ?>',
                content: 'Editflo util.Observable API reference. Observable pattern implementation.',
                category: 'API'
            },
            {
                id: 'editflo-util-tools',
                title: 'editflo.util.Tools',
                url: '<?php echo base_url('documentation/api-reference/editflo-util/tools'); ?>',
                content: 'Editflo util.Tools API reference. General utility tools and functions.',
                category: 'API'
            },
            {
                id: 'editflo-util-uri',
                title: 'editflo.util.URI',
                url: '<?php echo base_url('documentation/api-reference/editflo-util/uri'); ?>',
                content: 'Editflo util.URI API reference. URI parsing and manipulation.',
                category: 'API'
            },

            // Other Main Sections
            {
                id: 'integration',
                title: 'Integration',
                url: '<?php echo base_url('documentation/integration'); ?>',
                content: 'Integration guide for Editflo. Framework and platform integration overview.',
                category: 'Integration'
            },
            {
                id: 'configuration',
                title: 'Configuration',
                url: '<?php echo base_url('documentation/configuration'); ?>',
                content: 'Configuration guide for Editflo. Advanced settings and customization options.',
                category: 'Configuration'
            },
            {
                id: 'basic-setup',
                title: 'Basic Setup',
                url: '<?php echo base_url('documentation/basic-setup'); ?>',
                content: 'Basic setup guide for Editflo. Quick start and initial configuration.',
                category: 'Getting Started'
            },
            {
                id: 'invalid-api-key',
                title: 'Invalid API Key',
                url: '<?php echo base_url('documentation/invalid-api-key'); ?>',
                content: 'Troubleshooting guide for invalid API key errors in Editflo.',
                category: 'Troubleshooting'
            },
            {
                id: 'license-key',
                title: 'License Key',
                url: '<?php echo base_url('documentation/license-key'); ?>',
                content: 'License key management and configuration for Editflo.',
                category: 'Administration'
            },
            {
                id: 'support',
                title: 'Support',
                url: '<?php echo base_url('documentation/support'); ?>',
                content: 'Support resources and contact information for Editflo.',
                category: 'Help'
            },
            {
                id: 'usage-based-billing',
                title: 'Usage-Based Billing',
                url: '<?php echo base_url('documentation/usage-based-billing'); ?>',
                content: 'Usage-based billing information and configuration for Editflo.',
                category: 'Billing'
            },
            {
                id: 'api',
                title: 'API',
                url: '<?php echo base_url('documentation/editflo_api_reference'); ?>',
                content: 'API overview and general information for Editflo.',
                category: 'API'
            },
            {
                id: 'overview',
                title: 'Documentation Overview',
                url: '<?php echo base_url('documentation'); ?>',
                content: 'Editflo documentation overview and getting started guide.',
                category: 'Documentation'
            },
            {
                id: 'editflo-blazor-integration',
                title: 'Editflo Blazor Integration',
                url: '<?php echo base_url('documentation/documentation?section=editflo-blazor-integration'); ?>',
                content: 'Blazor integration documentation for Editflo. .NET framework support.',
                category: 'Integration'
            }
        ];
    </script>

    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const leftSidebar = document.getElementById('leftSidebar');

            mobileMenuBtn.addEventListener('click', function() {
                leftSidebar.classList.remove('-translate-x-full');
            });

            // Generate Table of Contents
            generateTOC();

            // Initialize search functionality
            initSearch();

            function generateTOC() {
                const contentArea = document.querySelector('.content-area');
                const headings = contentArea?.querySelectorAll('h2, h3');
                const tocContainer = document.getElementById('pageToc');
                const mobileTocContainer = document.getElementById('mobilePageToc');

                if (headings && headings.length > 0) {
                    headings.forEach((heading, index) => {
                        if (!heading.id) {
                            heading.id = 'section-' + index;
                        }

                        const level = parseInt(heading.tagName.substring(1));
                        let indentClass = '';

                        if (level === 2) {
                            indentClass = 'pl-0';
                        } else if (level === 3) {
                            indentClass = 'pl-4';
                        } else if (level === 4) {
                            indentClass = 'pl-8';
                        }

                        // Desktop TOC Item
                        const listItem = document.createElement('div');
                        listItem.className = `toc-item ${indentClass}`;
                        listItem.innerHTML = `
                            <a href="#${heading.id}" class="toc-link flex items-center py-2 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group border-l-2 border-transparent">
                                <span class="text-sm flex-1">${heading.textContent}</span>
                                <i class="fas fa-arrow-right text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                            </a>
                        `;
                        if (tocContainer) tocContainer.appendChild(listItem);

                        // Mobile TOC Item
                        const mobileListItem = document.createElement('div');
                        mobileListItem.className = `toc-item ${indentClass}`;
                        mobileListItem.innerHTML = `
                            <a href="#${heading.id}" class="flex items-center py-3 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group border-l-2 border-transparent">
                                <span class="text-sm flex-1">${heading.textContent}</span>
                            </a>
                        `;
                        if (mobileTocContainer) mobileTocContainer.appendChild(mobileListItem);

                        // Add click events
                        const link = listItem.querySelector('a');
                        const mobileLink = mobileListItem.querySelector('a');

                        link.addEventListener('click', function(e) {
                            e.preventDefault();
                            setActiveTOCLink(this);
                            const target = document.getElementById(heading.id);
                            if (target) {
                                target.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            }
                        });

                        mobileLink.addEventListener('click', function(e) {
                            e.preventDefault();
                            setActiveTOCLink(this);
                            const target = document.getElementById(heading.id);
                            if (target) {
                                target.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                                toggleMobileTOC();
                            }
                        });
                    });
                } else {
                    const noContentMsg = '<div class="text-gray-500 text-sm text-center py-4">No sections available</div>';
                    if (tocContainer) tocContainer.innerHTML = noContentMsg;
                    if (mobileTocContainer) mobileTocContainer.innerHTML = noContentMsg;
                }

                // Add scroll spy
                window.addEventListener('scroll', debounce(highlightActiveTOCLink, 100));
                highlightActiveTOCLink();
            }

            function setActiveTOCLink(link) {
                document.querySelectorAll('.toc-link').forEach(el => {
                    el.classList.remove('active', 'bg-blue-50', 'text-blue-600', 'border-blue-500');
                    el.classList.add('border-transparent');
                });

                link.classList.add('active', 'bg-blue-50', 'text-blue-600', 'border-blue-500');
                link.classList.remove('border-transparent');
            }

            function highlightActiveTOCLink() {
                const headings = document.querySelectorAll('.content-area h2, .content-area h3, .content-area h4');
                let currentActive = null;

                headings.forEach(heading => {
                    const rect = heading.getBoundingClientRect();
                    if (rect.top >= 0 && rect.top <= window.innerHeight / 3) {
                        currentActive = heading.id;
                    }
                });

                if (currentActive) {
                    document.querySelectorAll('.toc-link').forEach(link => {
                        if (link.getAttribute('href') === `#${currentActive}`) {
                            link.classList.add('active', 'bg-blue-50', 'text-blue-600', 'border-blue-500');
                            link.classList.remove('border-transparent');
                        } else {
                            link.classList.remove('active', 'bg-blue-50', 'text-blue-600', 'border-blue-500');
                            link.classList.add('border-transparent');
                        }
                    });
                }
            }

            function debounce(func, wait) {
                let timeout;
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout);
                        func(...args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            }
        });

        // Search functionality
        function initSearch() {
            const searchInputs = [
                document.getElementById('desktopSearchInput'),
                document.getElementById('mobileSearchInput'),
                document.getElementById('mobileMenuSearchInput')
            ].filter(input => input);

            searchInputs.forEach(input => {
                let searchTimeout;

                input.addEventListener('input', function(e) {
                    clearTimeout(searchTimeout);

                    searchTimeout = setTimeout(() => {
                        const query = e.target.value.trim();
                        const results = performSearch(query);
                        displayResults(results, input);
                    }, 300);
                });

                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        const container = input.parentNode.parentNode;
                        const results = container.querySelector('.search-results');
                        if (results) {
                            results.remove();
                        }
                    }

                    // Ctrl+K shortcut
                    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                        e.preventDefault();
                        input.focus();
                    }
                });

                // Clear results when input loses focus
                input.addEventListener('blur', function() {
                    setTimeout(() => {
                        const container = input.parentNode.parentNode;
                        const results = container.querySelector('.search-results');
                        if (results && !results.contains(document.activeElement)) {
                            results.remove();
                        }
                    }, 200);
                });
            });

            // Global keyboard shortcut for search (Ctrl+K)
            document.addEventListener('keydown', function(e) {
                if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                    e.preventDefault();
                    // Try desktop search first, then mobile
                    const desktopInput = document.getElementById('desktopSearchInput');
                    const mobileInput = document.getElementById('mobileSearchInput') || document.getElementById('mobileMenuSearchInput');

                    if (desktopInput && window.innerWidth >= 768) {
                        desktopInput.focus();
                    } else if (mobileInput) {
                        mobileInput.focus();
                    }
                }
            });
        }

        function performSearch(query) {
            if (!query || query.length < 2) {
                return [];
            }

            try {
                const fuse = new Fuse(window.docsSearchIndex || [], {
                    keys: ['title', 'content', 'category'],
                    threshold: 0.4,
                    includeScore: true,
                    includeMatches: true,
                    minMatchCharLength: 2
                });
                return fuse.search(query);
            } catch (error) {
                console.error('Search error:', error);
                return [];
            }
        }

        function displayResults(results, searchBox) {
            // Remove existing results if any
            const container = searchBox.parentNode.parentNode;
            const existingResults = container.querySelector('.search-results');
            if (existingResults) {
                existingResults.remove();
            }

            if (results.length === 0) {
                // Show "no results" message only if query is long enough
                if (searchBox.value.trim().length >= 2) {
                    const noResults = document.createElement('div');
                    noResults.className = 'search-results absolute z-50 mt-1 w-full bg-white rounded-lg shadow-lg border border-gray-200 p-4';
                    noResults.innerHTML = `
                        <div class="text-center py-2">
                            <i class="fas fa-search text-gray-400 text-lg mb-2"></i>
                            <p class="text-gray-600">No results found for "${searchBox.value.trim()}"</p>
                            <p class="text-gray-500 text-sm mt-1">Try different keywords</p>
                        </div>
                    `;
                    container.appendChild(noResults);
                }
                return;
            }

            const resultsContainer = document.createElement('div');
            resultsContainer.className = 'search-results absolute z-50 mt-1 w-full bg-white rounded-lg shadow-lg border border-gray-200 max-h-96 overflow-y-auto';

            results.slice(0, 8).forEach(result => {
                const item = result.item;

                const resultItem = document.createElement('a');
                resultItem.href = item.url;
                resultItem.className = 'block p-3 hover:bg-gray-50 border-b border-gray-100 last:border-b-0 transition-colors';
                resultItem.innerHTML = `
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="inline-block px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded mr-2">${item.category}</span>
                                <h4 class="font-medium text-gray-900">${highlightMatches(item.title, result.matches, 'title')}</h4>
                            </div>
                            <p class="text-sm text-gray-600 truncate">${highlightMatches(item.content.substring(0, 100), result.matches, 'content')}...</p>
                            <div class="text-xs text-gray-500 mt-1">${item.url.replace(window.location.origin, '')}</div>
                        </div>
                    </div>
                `;

                resultItem.addEventListener('click', function(e) {
                    if (window.innerWidth < 1024) {
                        const mobileSearchBar = document.getElementById('mobileSearchBar');
                        const mobileMenu = document.getElementById('mobileMenu');
                        if (mobileSearchBar) mobileSearchBar.classList.add('hidden');
                        if (mobileMenu) mobileMenu.classList.add('hidden');
                    }
                });

                resultsContainer.appendChild(resultItem);
            });

            // Add "View all results" link if there are more results
            if (results.length > 8) {
                const viewAll = document.createElement('div');
                viewAll.className = 'p-3 text-center border-t border-gray-100';
                viewAll.innerHTML = `<a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View all ${results.length} results</a>`;
                viewAll.addEventListener('click', function(e) {
                    e.preventDefault();
                    // You can implement a dedicated search results page here
                    alert('Show all results feature would go here');
                });
                resultsContainer.appendChild(viewAll);
            }

            container.appendChild(resultsContainer);

            // Close results when clicking outside
            document.addEventListener('click', function closeResults(e) {
                if (!container.contains(e.target)) {
                    resultsContainer.remove();
                    document.removeEventListener('click', closeResults);
                }
            });
        }

        function highlightMatches(text, matches, key) {
            if (!matches || !text) return text;

            const match = matches.find(m => m.key === key);
            if (!match) return text;

            let highlighted = text;
            // Sort indices in reverse order to avoid index shifting issues
            const sortedIndices = match.indices.sort((a, b) => b[0] - a[0]);

            sortedIndices.forEach(([start, end]) => {
                const before = highlighted.substring(0, start);
                const matchText = highlighted.substring(start, end + 1);
                const after = highlighted.substring(end + 1);
                highlighted = `${before}<mark class="bg-yellow-200 px-0.5 rounded">${matchText}</mark>${after}`;
            });

            return highlighted;
        }

        // Dropdown functionality
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            if (!dropdown) return;

            let arrow = document.getElementById(dropdownId.replace('-dropdown', '-arrow'));
            if (!arrow) {
                arrow = document.getElementById(dropdownId + '-arrow');
            }

            dropdown.classList.toggle('hidden');
            if (arrow) {
                arrow.classList.toggle('rotate-180');
            }
        }

        // Mobile sidebar close
        function closeMobileSidebar() {
            const leftSidebar = document.getElementById('leftSidebar');
            leftSidebar.classList.add('-translate-x-full');
        }

        // Mobile TOC toggle
        function toggleMobileTOC() {
            const mobileTOC = document.getElementById('mobileTOC');
            mobileTOC.classList.toggle('translate-x-full');
        }

        // Mobile menu and search toggles
        document.getElementById('mobileSearchBtn')?.addEventListener('click', function() {
            const mobileSearchBar = document.getElementById('mobileSearchBar');
            const mobileMenu = document.getElementById('mobileMenu');

            mobileSearchBar.classList.toggle('hidden');
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }

            // Focus on input when opened
            setTimeout(() => {
                const searchInput = document.getElementById('mobileSearchInput');
                if (searchInput) searchInput.focus();
            }, 100);
        });

        document.getElementById('mobileMenuBtn')?.addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileSearchBar = document.getElementById('mobileSearchBar');

            mobileMenu.classList.toggle('hidden');
            if (!mobileSearchBar.classList.contains('hidden')) {
                mobileSearchBar.classList.add('hidden');
            }

            // Focus on search input in mobile menu when opened
            setTimeout(() => {
                const searchInput = document.getElementById('mobileMenuSearchInput');
                if (searchInput) searchInput.focus();
            }, 100);
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                closeMobileSidebar();
                const mobileTOC = document.getElementById('mobileTOC');
                mobileTOC.classList.add('translate-x-full');

                // Close mobile search and menu
                const mobileSearchBar = document.getElementById('mobileSearchBar');
                const mobileMenu = document.getElementById('mobileMenu');
                if (mobileSearchBar) mobileSearchBar.classList.add('hidden');
                if (mobileMenu) mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>