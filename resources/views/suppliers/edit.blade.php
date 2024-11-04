@extends('layouts.template')
@section('title', 'Edit Suppliers')
@section('content')
    <div class="px-6 pb-20 pt-6">
        <div class="flex items-center mb-4 justify-between">
            <!-- title -->
            <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Edit Suppliers</h1>
        </div>
        <div class="container bg-white shadow-md rounded-xl mb-4 gap-3">
            <div class="px-5 py-3">
                <form action="{{ route('suppliers.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Supplier Email</label>
                    <input type="email" id="withLabel" name="email" value="{{ $data->email }}"
                        class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2"
                        />
                    <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Name</label>
                    <input type="text" id="withLabel" name="name" value="{{ $data->name }}"
                        class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2"
                        />
                    <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Contact Person</label>
                    <input type="text" id="withLabel" name="contact_person" value="{{ $data->contact_person }}"
                        class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2"
                        />
                    <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Phone Number</label>
                    <input type="text" id="withLabel" name="phone_number" value="{{ $data->phone_number }}"
                        class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2"
                        />
                        <label for="withLabel" class="mb-2 block text-gray-800 font-medium text-md">Address</label>
                        <textarea rows="4" name="address"
                            class=" text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-3"
                            placeholder="">{{ $data->address }}</textarea>
                    <button type="submit"
                        class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
