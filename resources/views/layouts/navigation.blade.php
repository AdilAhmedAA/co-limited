<header class="sticky top-0 bg-white shadow z-10 rounded-tl-[15px] rounded-bl-[20px]">
    <div class="w-full mx-auto py-4 px-2 sm:px-5">
        <div class="flex  justify-between md:flex-row flex-col md:items-center">
            <div>
                @isset($header)
                <h1 class="text-2xl font-bold text-gray-900">{{ $header }}</h1>
                @endisset
                @isset($pagename)
                <span class="block text-sm font-semibold text-gray-800">{{ $pagename }}</span>
                @endisset
            </div>
            <div class="flex items-center space-x-2 sm:space-x-4 ml-auto">
                <button class="text-gray-600 text-xl hover:text-gray-900 flex items-center space-x-2 mr-2">
                    <i class="fas fa-language"></i>
                    <h3 class="text-sm font-semibold text-gray-900">Translate</h3>
                </button>
                <button class="text-gray-600 text-xl hover:text-gray-900">
                    <i class="fas fa-expand"></i>
                </button>
                <button class="text-gray-600 text-xl hover:text-gray-900">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="relative">
                    <button class="flex items-center space-x-3 text-gray-600 hover:text-gray-900 focus:outline-none"
                        id="userDropdownToggle">
                        <div class="flex items-center text-left space-x-3">
                            <div class="hidden md:block">
                                <h3 class="text-md font-semibold text-gray-900">{{ Auth::user()->name }}
                                </h3>
                                <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/150" alt="User Avatar">
                        </div>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div id="userDropdown"
                        class="hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 z-10">
                        <div class="block md:hidden p-3">
                            <h3 class="text-md font-semibold text-gray-900">{{ Auth::user()->name }}
                            </h3>
                            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <ul class="py-2">
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                    <i class="fas fa-user-circle mr-2"></i> Profile
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
