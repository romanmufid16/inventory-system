@extends('layouts.template')
@section('title', 'Supplier List')
@section('content')
    <div class="px-6 pb-20 pt-6">
        <div class="flex items-center mb-4 justify-between">
            <!-- title -->
            <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Suppliers</h1>
        </div>
        <div class="grid grid-cols-1">
            <div class="card" id="listjs" data-list="email,name,contact_person,phone_number,address,action_info">
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

                <div class="relative overflow-x-auto p-2">
                    @php
                        $currentPage = $suppliers->currentPage(); // Mendapatkan halaman saat ini
                        $perPage = $suppliers->perPage(); // Jumlah item per halaman
                        $start = ($currentPage - 1) * $perPage + 1; // Menghitung nomor urut mulai dari 1
                    @endphp
                    <table class="text-left w-full whitespace-nowrap">
                        <thead class="bg-sky-800 text-white">
                            <tr class="border-b border-gray-300">
                                <th class="px-6 py-3">No</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="email">Email</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="name">Name</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="contact_person">Contact Person</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="phone_number">Phone Number</th>
                                <th class="listjs-sorter px-6 py-3" data-sort="address">Address</th>
                                @if (Auth::user()->role == 'admin')
                                    <th class="listjs-sorter px-6 py-3" data-sort="action_info">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($suppliers as $item)
                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    <td class="px-6 py-3">{{ $start++ }}</td>
                                    <td class="email px-6 py-3">{{ $item->email }}</td>
                                    <td class="name px-6 py-3">{{ $item->name }}</td>
                                    <td class="contact_person px-6 py-3">{{ $item->contact_person }}</td>
                                    <td class="phone_number px-6 py-3">{{ $item->phone_number }}</td>
                                    <td class="address px-6 py-3">{{ $item->address }}</td>
                                    @if (Auth::user()->role == 'admin')
                                        <td class="action_info px-6 py-3 flex gap-3">
                                            <a href="{{ route('suppliers.edit', $item->id) }}"
                                                class="bg-yellow-500 p-2 rounded-md shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="text-white size-6">
                                                    <path
                                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                </svg>
                                            </a>
                                            <form class="bg-red-500 rounded-md shadow-md p-2 h-10"
                                                onsubmit="return confirm('Are you sure you want to delete {{ $item->name }}?')"
                                                action="{{ route('suppliers.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-white size-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="btn-toolbar flex flex-col md:flex-row justify-between items-center px-6 py-4 gap-2">
                    <p class="">{{ $suppliers->total() }} entries found</p>
                    <div class="pagination-buttons flex gap-2">
                        {{ $suppliers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="toastSuccess"
        class="fixed top-5 right-5 hidden bg-white border-t-4 border-green-500 text-green-500 w-1/4 p-4 rounded-lg shadow-lg">
        <h1 class="text-md font-semibold text-black">Success</h1>
        {{ session('success') }}
    </div>
    <div id="toastError"
        class="fixed top-5 right-5 hidden bg-white border-t-4 border-red-500 text-red-500 p-4 rounded-lg shadow-lg">
        <h1 class="text-md font-semibold text-black">Error</h1>
        {{ session('error') }}
    </div>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toast = document.getElementById('toastSuccess');
                toast.classList.remove('hidden');
                toast.classList.add('block');

                // Menghilangkan toast setelah 3 detik
                setTimeout(() => {
                    toast.classList.add('hidden');
                    toast.classList.remove('block');
                }, 3000);
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toast = document.getElementById('toastError');
                toast.classList.remove('hidden');
                toast.classList.add('block');

                // Menghilangkan toast setelah 3 detik
                setTimeout(() => {
                    toast.classList.add('hidden');
                    toast.classList.remove('block');
                }, 3000);
            });
        </script>
    @endif
    <script>
        function updateLimit() {
            var limit = document.getElementById("limit").value;
            var url = new URL(window.location.href);
            url.searchParams.set('limit', limit);
            window.location.href = url;
        }
    </script>
@endsection
