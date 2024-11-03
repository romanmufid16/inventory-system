@extends('layouts.template')
@section('title', 'Category List')
@section('content')
    <div class="px-6 pb-20 pt-6">
        <div class="flex items-center mb-4 justify-between">
            <!-- title -->
            <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Categories</h1>
        </div>
        <div class="grid grid-cols-1">
            <div class="card" id="listjs" data-list="name,description,action_info">
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
                        <select name="limit"
                            class="text-base py-2 px-4 block w-40 border-gray-300 focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="limit" onchange="updateLimit()">
                            <option value="10" {{ request('limit') == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ request('limit') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ request('limit') == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ request('limit') == 100 ? 'selected' : '' }}>100</option>
                        </select>
                        <label
                            class="leading-[1.7] p-2 px-3 border border-l-0 flex items-center justify-center bg-gray-200 border-gray-300 rounded-r-md">items</label>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="text-left w-full whitespace-nowrap">
                        <thead class="bg-sky-800 text-white">
                            <tr class="border-b border-gray-300">
                                <th class="pl-3 py-3" data-sort="category_checks">
                                    <div class="flex items-center mb-1">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" value="" id="checkAll" />
                                        <label for="checkAll"></label>
                                    </div>
                                </th>
                                <th class="py-3">No</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="name">Category Name</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="description">Description</th>
                                @if (Auth::user()->role == 'admin')
                                    <th class="listjs-sorter px-6 py-3" data-sort="action_info">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($categories as $i => $item)
                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    <td class="pl-3 py-3">
                                        <div class="flex items-center mb-1">
                                            <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox" value="{{ $item->id }}" id="categoriesCheckbox2" />
                                            <label for="categoriesCheckbox2"></label>
                                        </div>
                                    </td>
                                    <td class="py-3">{{ $i + 1 }}</td>
                                    <td class="name px-6 py-3">{{ $item->name }}</td>
                                    <td class="description px-6 py-3">{{ $item->description }}</td>
                                    @if (Auth::user()->role == 'admin')
                                        <td class="action_info px-6 py-3">
                                            <div class="dropdown">
                                                <a class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                    href="#!" role="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i data-feather="more-vertical" class="icon-xs"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item flex items-center" href="#!">Action</a>
                                                    </li>
                                                    <li><a class="dropdown-item flex items-center" href="#!">Another
                                                            action</a>
                                                    </li>
                                                    <li><a class="dropdown-item flex items-center" href="#!">Something
                                                            else
                                                            here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="btn-toolbar flex flex-col md:flex-row justify-between items-center px-6 py-4 gap-2">
                    <p class="">{{ $categories->total() }} entries found</p>
                    <div class="pagination-buttons flex gap-2">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateLimit() {
            var limit = document.getElementById("limit").value;
            var url = new URL(window.location.href);
            url.searchParams.set('limit', limit);
            window.location.href = url; // Muat ulang halaman dengan parameter baru
        }
    </script>
@endsection
