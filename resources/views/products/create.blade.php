@extends('layouts.template')
@section('title', 'Create Product')
@section('content')
    <div class="px-6 pb-20 pt-6">
        <div class="flex items-center mb-4 justify-between">
            <!-- title -->
            <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Add Products</h1>
        </div>
        <div class="container bg-white shadow-md rounded-xl mb-4 gap-3">
            <div class="px-5 py-3">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Category</label>
                    <select name="category_id"
                        class="mb-2 py-2 px-4 pr-9 block w-full border-gray-300 rounded-md focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                        <option selected>Choose supplier</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Supplier Name</label>
                    <select name="supplier_id"
                        class="mb-2 py-2 px-4 pr-9 block w-full border-gray-300 rounded-md focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                        <option selected>Choose supplier</option>
                        @foreach ($supplier as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Name</label>
                    <input type="text" id="withLabel" name="name"
                        class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2" />
                    <div class="flex gap-5 mb-5">
                        <div class="">
                            <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Quantity</label>
                            <input type="number" id="withLabel" name="quantity"
                                class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2" />
                        </div>
                        <div>
                            <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Price</label>
                            <input type="number" id="withLabel" name="price"
                                class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2" />
                        </div>
                    </div>
                    <button type="submit"
                        class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
