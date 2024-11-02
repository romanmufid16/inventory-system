@extends('layouts.template')
@section('title', 'Dashboard')
@section('content')
    <div class="px-6 pb-20 pt-6">
        <div class="flex items-center mb-4 justify-between">
            <!-- title -->
            <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Overview</h1>
            <a href="#"
                class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 md:visible invisible">
                Button
            </a>
        </div>
        <div class="bg-indigo-600 rounded-lg mb-6">
            <div class="p-6 md:flex justify-between items-center w-full">
                <div class="flex items-center gap-6">
                    <img src="assets/images/avatar/avatar-3.jpg" alt="Image" class="rounded-full h-20 w-20" />
                    <div class="leading-base">
                        <h3 class="text-white text-lg lg:text-xl">Good afternoon, Jitu Chauhan</h3>
                        <span class="text-white">Here is what’s happening with your projects today:</span>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <a href="#!"
                        class="btn gap-x-2 bg-white text-gray-800 border-white disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                        What’s New!
                    </a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="card card-lift h-full">
                    <div class="card-body">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold">Bounce Rate [Avg]</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity text-gray-400">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-4 mb-2">
                            <h3 class="font-bold">47.74%</h3>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-red-500 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-arrow-down">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <polyline points="19 12 12 19 5 12"></polyline>
                                </svg>
                                -26.50%
                            </div>
                            <div>vs 66.88(prev.)</div>
                        </div>
                    </div>
                </div>

                <div class="card card-lift h-full">
                    <div class="card-body">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold">New Sessions</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-pie-chart text-gray-400">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-4 mb-2">
                            <h3 class="font-bold">76.40%</h3>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-green-500 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-arrow-up">
                                    <line x1="12" y1="19" x2="12" y2="5"></line>
                                    <polyline points="5 12 12 5 19 12"></polyline>
                                </svg>
                                -2.50%
                            </div>

                            <div>vs 74.60(prev.)</div>
                        </div>
                    </div>
                </div>

                <div class="card card-lift h-full">
                    <div class="card-body">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold">Pageviews [Avg]</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-send text-gray-400">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-4 mb-2">
                            <h3 class="font-bold">2.15</h3>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-red-500 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <polyline points="19 12 12 19 5 12"></polyline>
                                </svg>
                                -1.83%
                            </div>

                            <div>vs 2.19 (prev.)</div>
                        </div>
                    </div>
                </div>

                <div class="card card-lift h-full">
                    <div class="card-body">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold">Time on Site [Avg]</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-clock text-gray-400">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-4 mb-2">
                            <h3 class="font-bold">2m:15s</h3>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-green-500 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                                    <line x1="12" y1="19" x2="12" y2="5"></line>
                                    <polyline points="5 12 12 5 19 12"></polyline>
                                </svg>
                                21.50%
                            </div>

                            <div>vs 2.19 (prev.)</div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="card h-full">
                    <div class="card-body">
                        <h4 class="mb-6">Session by Device Type</h4>
                        <div class="grid grid-cols-3">
                            <div>
                                <h4 class="mb-3">Desktop</h4>
                                <div class="leading-normal">
                                    <h4 class="text-2xl font-bold text-cyan-500">51.5%</h4>
                                    <span class="text-cyan-500">201,434</span>
                                </div>
                            </div>

                            <div>
                                <h4 class="mb-3">Mobile</h4>
                                <div class="leading-normal">
                                    <h4 class="text-2xl font-bold text-green-500">34.4%</h4>
                                    <span class="text-green-500">134,693</span>
                                </div>
                            </div>

                            <div>
                                <h4 class="mb-3">Tablet</h4>
                                <div class="leading-normal">
                                    <h4 class="text-2xl font-bold text-yellow-500">20.8%</h4>
                                    <span class="text-yellow-500">81,525</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 mb-3">
                            <div class="w-full h-10 flex">
                                <div class="rounded-l-lg h-10 bg-cyan-500" aria-label="Segment one" style="width: 35%"
                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="h-10 bg-green-500" aria-label="Segment two" style="width: 40%"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="rounded-r-lg h-10 bg-yellow-500" aria-label="Segment three"
                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <small>
                                <span class="mdi mdi-lightbulb-outline me-1"></span>
                                How perfformed over the last 30 days?
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mb-6">
            <div class="card h-100">
                <div class="px-6 py-3 border-b border-gray-300">
                    <h4>Users by Country</h4>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="lg:col-span-7 col-span-12">
                            <div id="locationmap" style="width: 100%; height: 400px"></div>
                        </div>

                        <div class="lg:col-span-5 col-span-12">
                            <div class="relative overflow-x-auto">
                                <table class="text-left w-full whitespace-nowrap">
                                    <thead class="bg-gray-200 text-gray-700">
                                        <tr>
                                            <th class="px-6 py-3">Top Regions</th>
                                            <th class="px-6 py-3">Sessions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-gray-300 border-b">
                                            <td class="px-6 py-3">United States</td>
                                            <td class="px-6 py-3">
                                                <span>22,120</span>
                                                <span class="ml-4 text-gray-800">34.54%</span>
                                            </td>
                                        </tr>
                                        <tr class="border-gray-300 border-b">
                                            <td class="px-6 py-3">India</td>
                                            <td class="px-6 py-3">
                                                <span>12,756</span>
                                                <span class="ml-4 text-gray-800">22.43%</span>
                                            </td>
                                        </tr>
                                        <tr class="border-gray-300 border-b">
                                            <td class="px-6 py-3">United Kingdom</td>
                                            <td class="px-6 py-3">
                                                <span>8,864</span>
                                                <span class="ml-4 text-gray-800">34.54%</span>
                                            </td>
                                        </tr>
                                        <tr class="border-gray-300 border-b">
                                            <td class="px-6 py-3">Sweden</td>
                                            <td class="px-6 py-3">
                                                <span>6,749</span>
                                                <span class="ml-4 text-gray-800">5.29%</span>
                                            </td>
                                        </tr>
                                        <tr class="border-gray-300 border-b">
                                            <td class="px-6 py-3">Russia</td>
                                            <td class="px-6 py-3">
                                                <span>5,523</span>
                                                <span class="ml-4 text-gray-800">4.54%</span>
                                            </td>
                                        </tr>
                                        <tr class="border-gray-300 border-b">
                                            <td class="px-6 py-3">Mexico</td>
                                            <td class="px-6 py-3">
                                                <span>3,214</span>
                                                <span class="ml-4 text-gray-800">3.12%</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid xl:grid-cols-2 gap-6 mb-6">
            <div class="card h-full">
                <div class="px-6 py-3 border-b border-gray-300 flex justify-between items-center">
                    <h4>Website Landing pages</h4>
                    <a href="#!"
                        class="flex items-center btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm">
                        Export
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-down">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <polyline points="19 12 12 19 5 12"></polyline>
                        </svg>
                    </a>
                </div>
                <div>
                    <div class="relative overflow-x-auto table-card">
                        <table class="text-left w-full whitespace-nowrap">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="px-6 py-3">Landing page</th>
                                    <th class="text-right px-6 py-3">Sessions</th>
                                    <th class="text-right px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <span class="flex items-center">
                                            /
                                            <a href="#!" class="text-inherit ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3">
                                                    </line>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2 justify-end">
                                            <span>5,056</span>
                                            <span class="text-green-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-up">
                                                    <line x1="12" y1="19" x2="12" y2="5">
                                                    </line>
                                                    <polyline points="5 12 12 5 19 12"></polyline>
                                                </svg>
                                            </span>
                                            <span class="text-green-600">1%</span>
                                        </div>
                                    </td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full bg-gray-300 h-2">
                                            <div class="bg-indigo-600 h-2" style="width: 100%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <span class="flex items-center">
                                            /landings/courses.html
                                            <a href="#!" class="text-inherit ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3">
                                                    </line>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2 justify-end">
                                            <span>2,385</span>
                                            <span class="text-red-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-down">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <polyline points="19 12 12 19 5 12"></polyline>
                                                </svg>
                                            </span>
                                            <span class="text-red-600">1%</span>
                                        </div>
                                    </td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full bg-gray-300 h-2">
                                            <div class="bg-indigo-600 h-2" style="width: 80%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <span class="flex items-center">
                                            /landings/lead.html
                                            <a href="#!" class="text-inherit ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3">
                                                    </line>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2 justify-end">
                                            <span>634</span>
                                            <span class="text-red-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-down">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <polyline points="19 12 12 19 5 12"></polyline>
                                                </svg>
                                            </span>
                                            <span class="text-red-600">1%</span>
                                        </div>
                                    </td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full bg-gray-300 h-2">
                                            <div class="bg-indigo-600 h-2" style="width: 60%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <span class="flex items-center">
                                            /dashboard.html
                                            <a href="#!" class="text-inherit ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3">
                                                    </line>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2 justify-end">
                                            <span>650</span>
                                            <span class="text-green-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-up">
                                                    <line x1="12" y1="19" x2="12" y2="5">
                                                    </line>
                                                    <polyline points="5 12 12 5 19 12"></polyline>
                                                </svg>
                                            </span>
                                            <span class="text-green-600">1%</span>
                                        </div>
                                    </td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full bg-gray-300 h-2">
                                            <div class="bg-indigo-600 h-2" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <span class="flex items-center">
                                            /checkout.html
                                            <a href="#!" class="text-inherit ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3">
                                                    </line>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2 justify-end">
                                            <span>243</span>
                                            <span class="text-red-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-down">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <polyline points="19 12 12 19 5 12"></polyline>
                                                </svg>
                                            </span>
                                            <span class="text-red-600">3%</span>
                                        </div>
                                    </td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full bg-gray-300 h-2">
                                            <div class="bg-indigo-600 h-2" style="width: 20%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3">
                                        <span class="flex items-center">
                                            /blog.html
                                            <a href="#!" class="text-inherit ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3">
                                                    </line>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2 justify-end">
                                            <span>209</span>
                                            <span class="text-red-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-down">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <polyline points="19 12 12 19 5 12"></polyline>
                                                </svg>
                                            </span>
                                            <span class="text-red-600">2%</span>
                                        </div>
                                    </td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full bg-gray-300 h-2">
                                            <div class="bg-indigo-600 h-2" style="width: 10%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card h-full">
                <div class="px-6 py-3 border-b border-gray-300 flex justify-between items-center">
                    <h4>Website Traffic Source</h4>
                    <a href="#!"
                        class="flex items-center btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm">
                        Export
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-down">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <polyline points="19 12 12 19 5 12"></polyline>
                        </svg>
                    </a>
                </div>

                <div>
                    <div class="relative overflow-x-auto table-card">
                        <table class="text-left w-full whitespace-nowrap">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="px-6 py-3">Source</th>
                                    <th class="text-right px-6 py-3">Visits</th>
                                    <th class="text-right px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">Direct</td>
                                    <td class="text-right px-6 py-3">6,860</td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full h-1 bg-gray-300 rounded-lg">
                                            <div class="bg-cyan-600 h-1 rounded-lg" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">Google</td>
                                    <td class="text-right px-6 py-3">4,768</td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full h-1 bg-gray-300 rounded-lg">
                                            <div class="bg-green-600 h-1 rounded-lg" style="width: 54%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">Referrals</td>
                                    <td class="text-right px-6 py-3">425</td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full h-1 bg-gray-300 rounded-lg">
                                            <div class="bg-indigo-600 h-1 rounded-lg" style="width: 64%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">Social Media</td>
                                    <td class="text-right px-6 py-3">245</td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full h-1 bg-gray-300 rounded-lg">
                                            <div class="bg-yellow-600 h-1 rounded-lg" style="width: 34%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">Campaign</td>
                                    <td class="text-right px-6 py-3">23</td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full h-1 bg-gray-300 rounded-lg">
                                            <div class="bg-cyan-600 h-1 rounded-lg" style="width: 23%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3">Others</td>
                                    <td class="text-right px-6 py-3">153</td>
                                    <td class="pr-6 py-3">
                                        <div class="w-full h-1 bg-gray-300 rounded-lg">
                                            <div class="bg-red-600 h-1 rounded-lg" style="width: 14%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid 2xl:grid-cols-3 gap-6 mb-6">
            <div class="card h-full">
                <div class="px-6 py-3 border-b border-gray-300 flex justify-between items-center">
                    <h4>Demographics</h4>
                    <div class="dropdown dropstart">
                        <a href="#!"
                            class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#!">Action</a></li>
                            <li><a class="dropdown-item" href="#!">Another action</a></li>
                            <li><a class="dropdown-item" href="#!">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chartGraphics"></div>
                </div>
            </div>

            <div class="card h-full">
                <div class="px-6 py-3 border-b border-gray-300 flex justify-between items-center">
                    <h4>Social Traffic</h4>
                    <div class="dropdown dropstart">
                        <a href="#!"
                            class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#!">Action</a></li>
                            <li><a class="dropdown-item" href="#!">Another action</a></li>
                            <li><a class="dropdown-item" href="#!">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 items-center">
                        <div class="md:col-span-5 col-span-12">
                            <div id="socialTraffic" class="flex justify-center"></div>
                        </div>
                        <div class="md:col-span-7 col-span-12">
                            <ul class="lg:p-6">
                                <li class="flex justify-between items-center border-b border-gray-300 p-2">
                                    <span class="text-gray-500">Quora</span>
                                    <span>460 / 83%</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-300 p-2">
                                    <span class="text-gray-500">Twitter</span>
                                    <span>320 / 24%</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-300 p-2">
                                    <span class="text-gray-500">Facebook</span>
                                    <span>123 / 12%</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-300 p-2">
                                    <span class="text-gray-500">Youtube</span>
                                    <span>109 / 10%</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-300 p-2">
                                    <span class="text-gray-500">LinkedIn</span>
                                    <span>88 / 8%</span>
                                </li>
                                <li class="flex justify-between items-center p-2">
                                    <span class="text-gray-500">Reddit</span>
                                    <span>40 / 4%</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card h-full">
                <div class="px-6 py-3 border-b border-gray-300">
                    <h4>Browsers</h4>
                </div>
                <div class="card-body p-0">
                    <!-- table -->
                    <table class="text-left w-full whitespace-nowrap">
                        <tbody>
                            <tr class="border-gray-300 border-b">
                                <td class="px-6 py-3 flex items-center">
                                    <img src="assets/images/svg/browser-svg/chrome.svg" alt="Image" class="mr-2" />
                                    <span>Google Chrome</span>
                                </td>
                                <td class="text-right px-6 py-3">21.54%</td>
                            </tr>
                            <tr class="border-gray-300 border-b">
                                <td class="px-6 py-3 flex items-center">
                                    <img src="assets/images/svg/browser-svg/firefox.svg" alt="Image" class="mr-2" />
                                    <span>Mozilla Firefox</span>
                                </td>
                                <td class="text-right px-6 py-3">14.43%</td>
                            </tr>
                            <tr class="border-gray-300 border-b">
                                <td class="px-6 py-3 flex items-center">
                                    <img src="assets/images/svg/browser-svg/brave.svg" alt="Image" class="mr-2" />
                                    <span>Brave</span>
                                </td>
                                <td class="text-right px-6 py-3">14.43%</td>
                            </tr>
                            <tr class="border-gray-300 border-b">
                                <td class="px-6 py-3 flex items-center">
                                    <img src="assets/images/svg/browser-svg/safari.svg" alt="Image" class="mr-2" />
                                    <span>Apple Safari</span>
                                </td>
                                <td class="text-right px-6 py-3">8.54%</td>
                            </tr>

                            <tr class="border-gray-300 border-b">
                                <td class="px-6 py-3 flex items-center">
                                    <img src="assets/images/svg/browser-svg/ie.svg" alt="Image" class="mr-2" />
                                    <span>Internet Export</span>
                                </td>
                                <td class="text-right px-6 py-3">6.21%</td>
                            </tr>
                            <tr class="border-gray-300 border-b">
                                <td class="px-6 py-3 flex items-center">
                                    <img src="assets/images/svg/browser-svg/opera.svg" alt="Image" class="mr-2" />
                                    <span>Opera Mini</span>
                                </td>
                                <td class="text-right px-6 py-3">8%</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-3 flex items-center">
                                    <img src="assets/images/svg/browser-svg/microsoft-edge.svg" alt="Image"
                                        class="mr-2" />
                                    <span>Microsoft edge</span>
                                </td>
                                <td class="text-right px-6 py-3">12.9%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="px-6 border-t border-gray-300 py-3 flex justify-between items-center absolute bottom-0 w-full">
        <div>
            <p class="m-0 leading-6">
                Made by
                <a href="https://codescandy.com/" target="_blank" class="text-indigo-600">Codescandy</a>
            </p>
            <a href="https://github.com/codescandy/dashui-tailwindcss" target="_blank">
                <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-gray-800">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z">
                    </path>
                </svg>
            </a>
        </div>
    @endsection
