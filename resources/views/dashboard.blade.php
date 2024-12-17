@php

// Manually input the values for Routes
$routeValues = [247, 5, 130]; // Active, On Hold, Inactive Routes
$routeColors = [
'#10B981', // Green for Active Routes
'#A855F7', // Purple for On Hold Routes
'#F97316', // Orange for Inactive Routes
];
$routeLabels = [
'Active Routes',
'On Hold Routes',
'Inactive Routes'
];

// Manually input the values for Schools
$schoolValues = [152, 5, 0]; // Active, Inactive Schools
$schoolColors = [
'#10B981', // Green for Active Schools
'#F97316', // Orange for Inactive Schools
];
$schoolLabels = [
'Active Schools',
'Inactive Schools',
];

// Manually input the values for Passengers
$passengerValues = [152, 5, 0]; // Active, Inactive Passengers
$passengerColors = [
'#10B981', // Green for Active Passengers
'#F97316', // Orange for Inactive Passengers
];
$passengerLabels = [
'Active Passengers',
'Inactive Passengers',
];

// Create the chart for Routes
$routeChart = Chartjs::build()
->name("RouteBookingsChart")
->type('pie')
->size(['width' => 250, 'height' => 250])
->datasets([
[
"label" => "Route Bookings",
"backgroundColor" => $routeColors,
"data" => $routeValues,
]
])
->options([
'plugins' => [
'legend' => ['display' => false],
'tooltip' => [
'enabled' => true,
],
],
'labels' => $routeLabels,
]);

// Create the chart for Schools
$schoolChart = Chartjs::build()
->name("SchoolBookingsChart")
->type('pie')
->size(['width' => 250, 'height' => 250])
->datasets([
[
"label" => "School Bookings",
"backgroundColor" => $schoolColors,
"data" => $schoolValues,
]
])
->options([
'plugins' => [
'legend' => ['display' => false],
'tooltip' => [
'enabled' => true,
],
],
'labels' => $schoolLabels,
]);

// Create the chart for Passengers
$passengerChart = Chartjs::build()
->name("PassengerBookingsChart")
->type('pie')
->size(['width' => 250, 'height' => 250])
->datasets([
[
"label" => "Passenger Bookings",
"backgroundColor" => $passengerColors,
"data" => $passengerValues,
]
])
->options([
'plugins' => [
'legend' => ['display' => false],
'tooltip' => [
'enabled' => true,
],
],
'labels' => $passengerLabels,
]);

@endphp
<x-app-layout>
    <x-slot name="header">
        {{ __('Route Dashboard') }}
    </x-slot>

    <x-slot name="pagename">
        {{ __('Route Management - Dashboard') }}
    </x-slot>

    <div class="flex flex-wrap gap-4 justify-between">
        <div class="bg-white rounded-[15px] p-6 xl:max-w-[49%] w-full">
            <div class="head mb-3">
                <h2 class="text-2xl font-bold">Routes</h2>
                <p class="text-gray-800 font-semibold">Analytics And Statistics</p>
            </div>
            <div class="flex gap-3 justify-between flex-col lg:flex-row items-center">
                <div class="w-[250px] h-[250px]">
                    <x-chartjs-component :chart="$routeChart" />
                </div>
                <div class="flex flex-col w-full max-w-[300px] lg:max-w-[50%] mt-4 lg:mt-0 space-y-1.5">
                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            <div class="cube bg-gray-300 w-[15px] h-[15px] rounded-sm mr-1"></div>Total Routes
                        </div>
                        <span class="text-black font-bold block w-fit">377</span>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            <div class="cube bg-green-600 w-[15px] h-[15px] rounded-sm mr-1"></div>Active Routes
                        </div>
                        <span class="text-black font-bold block w-fit">247</span>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            <div class="cube bg-purple-600 w-[15px] h-[15px] rounded-sm mr-1"></div>On Hold Routes
                        </div>
                        <span class="text-black font-bold block w-fit">5</span>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            <div class="cube bg-orange-400 w-[15px] h-[15px] rounded-sm mr-1"></div>Inactive Routes
                        </div>
                        <span class="text-black font-bold block w-fit">130</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-[15px] p-6 xl:max-w-[49%] w-full">

            <div class="flex gap-3 justify-between flex-col-reverse md:flex-row">
                <div class="flex flex-col w-full mt-3 md:mt-[70px] space-y-1.5">
                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            Total Routes
                        </div>
                        <span class="text-black font-bold block w-fit">377</span>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            Active Routes
                        </div>
                        <span class="text-black font-bold block w-fit">247</span>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            On Hold Routes
                        </div>
                        <span class="text-black font-bold block w-fit">5</span>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            Inactive Routes
                        </div>
                        <span class="text-black font-bold block w-fit">130</span>
                    </div>
                </div>
                <div class="head mb-2">
                    <div
                        class="icon w-[60px] h-[60px] border-2 border-green-600 bg-green-200 text-green-600 rounded-lg flex items-center justify-center ml-auto">
                        <i class="fas fa-map-pin text-[32px]"></i></div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-[15px] p-6 xl:max-w-[49%] w-full">
            <div class="flex justify-between">
                <div class="head mb-3">
                    <h2 class="text-2xl font-bold">Schoolssss</h2>
                    <p class="text-gray-800 font-semibold">Analytics And Statistics</p>
                </div>
                <div class="head mb-2">
                    <div
                        class="icon w-[60px] h-[60px] border-2 border-purple-600 bg-purple-200 text-purple-600 rounded-lg  flex items-center justify-center ml-auto">
                        <i class="fas fa-school text-[32px]"></i>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 justify-between flex-col lg:flex-row items-center">
                <div class="w-[180px] h-[180px]">
                    <x-chartjs-component :chart="$schoolChart" />
                </div>
                <div class="flex flex-col w-full max-w-[300px] lg:max-w-[50%] mt-4 lg:mt-0 space-y-1.5">
                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            <div class="cube bg-gray-300 w-[15px] h-[15px] rounded-sm mr-1"></div>Total Schools
                        </div>
                        <span class="text-black font-bold block w-fit">157</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            <div class="cube bg-green-600 w-[15px] h-[15px] rounded-sm mr-1"></div>Active Schools
                        </div>
                        <span class="text-black font-bold block w-fit">152</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex w-fit items-center leading-tight uppercase">
                            <div class="cube bg-orange-400 w-[15px] h-[15px] rounded-sm mr-1"></div>Inactive Schools
                        </div>
                        <span class="text-black font-bold block w-fit">5</span>
                    </div>
                </div>
            </div>
        </div>
       <div class="bg-white rounded-[15px] p-6 xl:max-w-[49%] w-full">
        <div class="flex justify-between">
            <div class="head mb-3">
                <h2 class="text-2xl font-bold">Passengers</h2>
                <p class="text-gray-800 font-semibold">Analytics And Statistics</p>
            </div>
            <div class="head mb-2">
                <div
                    class="icon w-[60px] h-[60px] border-2 border-orange-600 bg-orange-200 text-orange-600 rounded-lg flex items-center justify-center ml-auto">
                    <i class="fas fa-users text-[32px]"></i>
                </div>
            </div>
        </div>
        <div class="flex gap-3 justify-between flex-col lg:flex-row items-center">
            <div class="w-[180px] h-[180px]">
                <x-chartjs-component :chart="$passengerChart" />
            </div>
            <div class="flex flex-col w-full max-w-[300px] lg:max-w-[50%] mt-4 lg:mt-0 space-y-1.5">
                <div class="flex justify-between">
                    <div class="flex w-fit items-center leading-tight uppercase">
                        <div class="cube bg-gray-300 w-[15px] h-[15px] rounded-sm mr-1"></div>Total Passengers
                    </div>
                    <span class="text-black font-bold block w-fit">157</span>
                </div>
                <div class="flex justify-between">
                    <div class="flex w-fit items-center leading-tight uppercase">
                        <div class="cube bg-green-600 w-[15px] h-[15px] rounded-sm mr-1"></div>Active Passengers
                    </div>
                    <span class="text-black font-bold block w-fit">152</span>
                </div>
                <div class="flex justify-between">
                    <div class="flex w-fit items-center leading-tight uppercase">
                        <div class="cube bg-orange-400 w-[15px] h-[15px] rounded-sm mr-1"></div>Inactive Passengers
                    </div>
                    <span class="text-black font-bold block w-fit">5</span>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
