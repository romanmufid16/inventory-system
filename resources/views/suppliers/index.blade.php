@extends('layouts.template')
@section('title', 'Category List')
@section('content')
    <div class="px-6 pb-20 pt-6">
        <div class="flex items-center mb-4 justify-between">
            <!-- title -->
            <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Categories</h1>
        </div>
        <div class="grid grid-cols-1"> 
            <div class="card" id="listjs"
                data-list="supplier_checks,name,contact_erson,phone_number,address,action_info">
                <div
                    class="btn-toolbar border-b border-gray-300 px-5 py-3 flex flex-col lg:flex-row lg:justify-between lg:items-center mb-4 gap-3">
                    <div class="flex">
                        <label
                            class="leading-[1.7] p-2 px-3 border flex items-center justify-center bg-gray-200 border-gray-300 rounded-l-md">Search</label>
                        <input type="search"
                            class="border border-l-0 border-gray-300 text-gray-900 rounded-r-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none listjs-search" />
                    </div>
                    
                    <div class="lg:ml-auto flex">
                        <label
                            class="leading-[1.7] p-2 px-3 border border-r-0 flex items-center justify-center bg-gray-200 border-gray-300 rounded-l-md">Show</label>
                        <select
                            class="text-base py-2 px-4 block w-40 border-gray-300 focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="listjs-items-per-page">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <label
                            class="leading-[1.7] p-2 px-3 border border-l-0 flex items-center justify-center bg-gray-200 border-gray-300 rounded-r-md">items</label>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="text-left w-full whitespace-nowrap">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <th class="listjs-sorter px-3 py-3" data-sort="supplier_checks">
                                    <div class="flex items-center mb-1">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" value="" id="checkAll" />
                                        <label for="checkAll"></label>
                                    </div>
                                </th>
                                <th class="listjs-sorter px-6 py-3" data-sort="name">Category Name</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="contact_person">Contact Person</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="phone_number">Phone Number</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="address">Address</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="action_info">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($suppliers as $item)
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <td class="product_checks px-3 py-3">
                                    <div class="flex items-center mb-1">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" value="{{ $item->id }}" id="productCheckbox2" />
                                        <label for="productCheckbox2"></label>
                                    </div>
                                </td>
                                <td class="name px-6 py-3">{{ $item->name }}</td>
                                <td class="contact_person px-6 py-3">{{ $item->contact_person }}</td>
                                <td class="phone_number px-6 py-3">{{ $item->phone_number }}</td>
                                <td class="address px-6 py-3">{{ $item->address }}</td>
                                <td class="action_info px-6 py-3">
                                    <div class="dropdown">
                                        <a class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                            href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-vertical" class="icon-xs"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item flex items-center" href="#!">Action</a></li>
                                            <li><a class="dropdown-item flex items-center" href="#!">Another action</a>
                                            </li>
                                            <li><a class="dropdown-item flex items-center" href="#!">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="btn-toolbar flex flex-col md:flex-row justify-between items-center px-6 py-4 gap-2">
                    <p class="" id="listjs-showing-items-label">Showing 100 items</p>
                    <div class="pagination-buttons flex gap-2">
                        <button
                            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 prev">
                            Previous
                        </button>

                        <ul class="pagination flex gap-2"></ul>
                        <button
                            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 next">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
