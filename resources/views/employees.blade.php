<x-app-layout>
    <x-slot name="header">
        {{ __('Employees') }}
    </x-slot>

    <x-slot name="pagename">
        {{ __('HR & Administration - Employees') }}
    </x-slot>

    <div class="flex flex-wrap gap-4 justify-between">
        <div class="bg-white rounded-[15px] p-6 w-full">
            <div class="flex justify-between flex-col xl:flex-row">
                <div class="head mb-3">
                    <h2 class="text-2xl font-bold">364 Active / 487 Employees</h2>
                    <p class="text-gray-800 font-bold">Show <select class="custom-select" name="" id="">
                            <option value="" selected>50</option>
                            <option value="">25</option>
                            <option value="">15</option>
                            <option value="">5</option>
                        </select> Result Per Page</p>
                </div>
                <div class="flex items-center flex-wrap justify-center gap-2 mb-3 xl:mb-0 ml-auto">
                    <a href="" class="w-full sm:w-fit py-2 px-4 font-bold icon bg-red-200 text-red-600 rounded-lg flex items-center justify-center">
                        Delete Employees
                    </a>
                    <a href="" class="w-full sm:w-fit py-2 px-4 font-bold icon bg-green-200 text-green-600 rounded-lg flex items-center justify-center">
                        Instantly Add Employees
                    </a>
                    <a href="" class="w-full sm:w-fit py-2 relative px-4 font-bold icon bg-blue-200 text-blue-600 rounded-lg flex items-center justify-center">
                        Add Employees
                        <i class="fa fa-plus absolute top-0 right-1 transform translate-x-1/2 -translate-y-1/2 bg-blue-600 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs"></i>
                    </a>

                </div>
            </div>
            <div class="employee_card bg-gray-100 p-4 md:p-6 pt-[31px] md:pt-[39px] flex flex-wrap rounded-md">
                <div class="profile_employee detail_wrapper flex gap-3 w-full">
                    <div class="image_wrapper relative mt-[-15px] w-[100px] min-w-[100px] h-[100px]">
                        <img src="{{ asset('images/avatar.jpeg') }}" class="w-full h-full rounded-md object-cover" alt="">
                        <span class="absolute top-[-3px] right-[-3px] w-4 h-4 bg-green-500 rounded-full border-2 border-white"></span>
                    </div>
                    <div class="details w-full">
                        <ul class="unstyled">
                            <li>
                                <p class="text-black font-bold text-[18px]">Muhammad Ismail</p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Email: <span class="text-gray-600 font-semibold text-[16px]">im6783454@gmail.com</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Mobile: <span class="text-gray-600 font-semibold text-[16px]">07310210834</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Postcode: <span class="text-gray-600 font-semibold text-[16px]">692 7ep</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Sage ID: <span class="text-gray-600 font-semibold text-[16px]">--</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Pin: <span class="text-gray-600 font-semibold text-[16px]">****</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="detail_wrapper w-full">
                    <div class="details">
                        <ul class="unstyled">
                            <li>
                                <p class="text-black font-bold text-[18px]">Job Details</p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Role: <span class="text-gray-600 font-semibold text-[16px]">Passenger Assistant</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Branch: <span class="text-gray-600 font-semibold text-[16px]">AFJ Head Office (AFJ LIMITED, AFJ BUSINESS CENTRE, 2-18 FORSTER STREET, NECHELLS, BIRMINGHAM, B7 4JD)</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Location: <span class="text-gray-600 font-semibold text-[16px]">Birmingham</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Department: <span class="text-gray-600 font-semibold text-[16px]">Fleet Maintenance</span></p>
                            </li>
                            <li>
                                <p class="text-black font-bold text-[16px]">Work Designation: <span class="text-gray-600 font-semibold text-[16px]">Mechanic (Fleet Maintenance)</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="detail_wrapper w-full">
                    <div class="details">
                        <ul class="unstyled space-y-1">
                            <li>
                                <p class="text-black font-bold text-[18px]">Documents</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-green-500 text-white rounded-full">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </span>Driving License</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-green-500 text-white rounded-full">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </span>CPC</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-green-500 text-white rounded-full">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </span>ONLINE D/LICENCE CHECK</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-green-500 text-white rounded-full">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </span>PASSPORT COPY ATTACHMENT</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-green-500 text-white rounded-full">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </span>D/LICENCE AUTH LETTER</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-red-500 text-white rounded-full">
                                        <i class="fas fa-times text-white text-sm"></i>
                                    </span>FIRE EXT/FIRST AID</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-red-500 text-white rounded-full">
                                        <i class="fas fa-times text-white text-sm"></i>
                                    </span>ID PHOTO (CLEAR BACKGROUND)</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="detail_wrapper w-full">
                    <div class="details">
                        <ul class="unstyled space-y-1">
                            <li>
                                <p class="text-black font-bold text-[18px]">Trainings</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-red-500 text-white rounded-full">
                                        <i class="fas fa-times text-white text-sm"></i>
                                    </span>Anaphylaxis Training</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-red-500 text-white rounded-full">
                                        <i class="fas fa-times text-white text-sm"></i>
                                    </span>Communication Training</p>
                            </li>
                            <li>
                                <p class="text-black font-semibold text-[16px]"><span class="inline-flex items-center justify-center w-6 p-1 h-6 mr-1 bg-red-500 text-white rounded-full">
                                        <i class="fas fa-times text-white text-sm"></i>
                                    </span>Disability Training</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="detail_wrapper text-right w-full options_wrapper">
                    <div class="details text-right">
                        <a href="" class="py-1 w-fit mb-3 px-3 font-bold icon bg-gray-200 text-gray-600 rounded-lg flex items-center justify-center ml-auto">
                        <i class="fas fa-cogs text-gray-600 text-xl mr-1"></i> Options
                        </a>
                        <p class="text-black font-bold text-[16px]">Created At <span class="block text-gray-600 font-semibold text-[16px]">2024-07-12 13:17:44</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>