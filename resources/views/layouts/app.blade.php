<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Co-Limited') }}</title>
    <link rel="icon" href="https://www.example.com/path/to/logo-favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.example.com/path/to/logo-favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite(['resources/scss/app.scss','resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex gap-[33px]">
        <div id="sidebar"
            class="w-16 lg:w-64 z-50 bg-white text-gray-700 flex-shrink-0 h-screen fixed transition-all duration-300 ease-in-out pt-12 lg:pt-0 rounded-tr-[30px] rounded-br-[30px]">
            <div class="py-6 lg:px-4 px-2 flex flex-col">
                <h2 class="text-lg font-semibold text-gray-700 hidden lg:block">Dashboard</h2>
                <ul class="mt-5">
                    <li class="relative">
                        <a href="#"
                            class="flex items-center text-gray-700 hover:bg-blue-500 hover:text-white py-2 px-3 rounded-md">
                            <i class="fas fa-box text-xl"></i>
                            <span class="ml-2 link_text">Executive Dashboard</span>
                        </a>
                    </li>
                    <li class="relative">
                        @php
                        $humanisActive = in_array(request()->path(), ['employees']);
                        @endphp
                        <a href="#"
                            class="flex items-center text-gray-700 hover:bg-blue-500 hover:text-white py-2 px-3 rounded-md {{ $humanisActive ? 'bg-blue-500 text-white' : '' }}"
                            onclick="toggleSubLinks(event, 'human_resource', this)">
                            <i class="fas fa-user text-xl"></i>
                            <span class="ml-2 link_text">Human Resource</span>
                            <i
                                class="fas {{ $humanisActive ? 'fa-angle-down' : 'fa-angle-left' }} ml-auto text-md carret_icon transform transition-transform duration-300"></i>
                        </a>
                        <ul id="human_resource" class="pl-4 pt-2 {{ $humanisActive ? '' : 'hidden' }}">
                            <li class="border-l-4 hover:border-blue-500 {{ $humanisActive ? 'border-blue-500' : 'border-blue-200' }}"><a href="{{route('employees')}}"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Employees</span>
                                </a></li>
                            <li class="border-l-4 border-blue-200 hover:border-blue-500"><a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Attendance</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="#"
                            class="flex items-center text-gray-700 hover:bg-blue-500 hover:text-white py-2 px-3 rounded-md"
                            onclick="toggleSubLinks(event, 'fleet_management', this)">
                            <i class="fas fa-user text-xl"></i>
                            <span class="ml-2 link_text">Fleet Management</span>
                            <i
                                class="fas fa-angle-left ml-auto text-md carret_icon transform transition-transform duration-300"></i>
                        </a>
                        <ul id="fleet_management" class="pl-4 hidden pt-2">
                            <li class="border-l-4 border-blue-200 hover:border-blue-500"><a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Home</span>
                                </a></li>
                            <li class="border-l-4 border-blue-200 hover:border-blue-500"><a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Home</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="#"
                            class="flex items-center text-gray-700 hover:bg-blue-500 hover:text-white py-2 px-3 rounded-md"
                            onclick="toggleSubLinks(event, 'vehicles_management', this)">
                            <i class="fas fa-user text-xl"></i>
                            <span class="ml-2 link_text">Vehicles Management</span>
                            <i
                                class="fas fa-angle-left ml-auto text-md carret_icon transform transition-transform duration-300"></i>
                        </a>
                        <ul id="vehicles_management" class="pl-4 hidden pt-2">
                            <li class="border-l-4 border-blue-200 hover:border-blue-500"><a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Home</span>
                                </a></li>
                            <li class="border-l-4 border-blue-200 hover:border-blue-500"><a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Home</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        @php
                        $dashboardisActive = in_array(request()->path(), ['dashboard', '/']);
                        @endphp
                        <a href="#"
                            class="flex items-center text-gray-700 hover:bg-blue-500 hover:text-white py-2 px-3 rounded-md {{ $dashboardisActive ? 'bg-blue-500 text-white' : '' }}"
                            onclick="toggleSubLinks(event, 'route_management', this)">
                            <i class="fas fa-user text-xl"></i>
                            <span class="ml-2 link_text">Route Management</span>
                            <i
                                class="fas {{ $dashboardisActive ? 'fa-angle-down' : 'fa-angle-left' }} ml-auto text-md carret_icon transform transition-transform duration-300"></i>
                        </a>
                        <ul id="route_management" class="pl-4 pt-2 {{ $dashboardisActive ? '' : 'hidden' }}">
                            <li
                                class="border-l-4  hover:border-blue-500 {{ $dashboardisActive ? 'border-blue-500' : 'border-blue-200' }}">
                                <a href="{{ route('dashboard') }}"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Dashboard</span>
                                </a>
                            </li>
                            <li class="border-l-4 border-blue-200 hover:border-blue-500">
                                <a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Routes</span>
                                </a>
                            </li>
                            <li class="border-l-4 border-blue-200 hover:border-blue-500">
                                <a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Assignemnts Logs</span>
                                </a>
                            </li>
                            <li class="border-l-4 border-blue-200 hover:border-blue-500">
                                <a href="#"
                                    class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                    <span class="ml-2 link_text">Reports</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button id="toggleSidebar"
                class="lg:hidden absolute top-4 w-[50px] h-[50px] right-2 text-gray-700 bg-blue-200 hover:bg-blue-500 hover:text-white rounded-full p-2 text-[22px] flex items-center justify-center">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="flex-1 ml-[80px] lg:ml-[289px] overflow-y-auto py-3 h-[100vh] overflow-hidden">
            @include('layouts.navigation')
            <main class="mt-3 pb-6 overflow-y-auto pr-[20px]"
                style="max-height: calc(100vh - 130px); box-sizing: border-box;">
                <div class="relative">
                    <a href="#" class="flex w-fit ml-auto items-center text-black hover:text-gray-700 py-2 px-3 rounded-md"
                        onclick="toggleSubLinks(event, 'filter', this)">
                        <i class="fas fa-filter text-md "></i>
                        <span class="font-bold">Filters</span>
                        <i class="fas fa-angle-left ml-2 text-md carret_icon transform transition-transform duration-300"></i>
                    </a>
                    <ul id="filter" class="pl-4 hidden pt-2 flex pb-3 border-b-2 border-gray-300 mb-3">
                        <li class="border-l-4 border-blue-500"><a href="#"
                                class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                <span class="ml-2 link_text">Home</span>
                            </a></li>
                        <li class="border-l-4 border-blue-200 hover:border-blue-500"><a href="#"
                                class="flex items-center text-gray-700 hover:bg-transparent hover:text-black py-2 px-2 rounded-md">
                                <span class="ml-2 link_text">Home</span>
                            </a></li>
                    </ul>
                </div>
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        const toggleSidebarButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleSidebarButton.addEventListener('click', () => {
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-16');
            if (sidebar.classList.contains('active_sidebar')) {
                sidebar.classList.remove('active_sidebar');
            } else {
                setTimeout(() => {
                    sidebar.classList.add('active_sidebar');
                }, 200);
            }
        });


        function toggleSubLinks(event, linkId, clickedLink) {
            event.preventDefault();
            const subLinks = document.getElementById(linkId);
            const angleIcon = clickedLink.querySelector('.carret_icon');
            subLinks.classList.toggle('hidden');
            if (subLinks.classList.contains('hidden')) {
                console.log(angleIcon);
                angleIcon.classList.remove('fa-angle-down');
                angleIcon.classList.add('fa-angle-left');
            } else {
                console.log(angleIcon);
                angleIcon.classList.remove('fa-angle-left');
                angleIcon.classList.add('fa-angle-down');
            }
        }


        const userDropdownToggle = document.getElementById('userDropdownToggle');
        const userDropdown = document.getElementById('userDropdown');
        userDropdownToggle.addEventListener('click', () => {
            userDropdown.classList.toggle('hidden');
        });
        document.addEventListener('click', (e) => {
            if (!userDropdownToggle.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>