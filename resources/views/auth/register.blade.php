@extends('auth.layout')
@section('title', 'Sign Up')
@section('content')
    <!-- start signup page -->
    <div class="flex flex-col items-center justify-center g-0 h-screen px-4">
        <!-- card -->
        <div class="justify-center items-center w-full bg-white rounded-md shadow lg:flex md:mt-0 max-w-md xl:p-0">
            <!-- card body -->
            <div class="p-6 w-full sm:p-8 lg:p-8">
                <div class="mb-4">
                    <p class="mb-1 text-xl font-semibold text-sky-950">Sign Up</p>
                    <p class="mb-6">Please enter your user information.</p>
                </div>
                <!-- form -->
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <!-- username -->
                    <div class="lg:flex 2xl:block gap-4">
                        <div class="mb-3">
                            <label for="username" class="mb-2 block text-gray-800 font-semibold">Name</label>
                            <input type="text" id="name" name="name"
                                class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                name="username" placeholder="Name" required="" />
                        </div>
                        <!-- email -->
                        <div class="mb-3">
                            <label for="email" class="mb-2 block text-gray-800 font-semibold">Email</label>
                            <input type="email" id="email" name="email"
                                class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                name="email" placeholder="Email address here" required="" />
                        </div>
                    </div>
                    <!-- password -->
                    <div class="mb-3">
                        <label for="password" class="mb-2 block text-gray-800 font-semibold">Password</label>
                        <input type="password" id="password" name="password"
                            class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            name="password" placeholder="**************" required="" />
                    </div>
                    <div>
                        <!-- button -->
                        <div class="grid">
                            <button type="submit"
                                class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                Create Free Account
                            </button>
                        </div>
                        <div class="md:flex md:justify-end mt-4">
                            <div class="mb-2 md:mb-0">
                                Already member?
                                <a href="{{ route('show-login') }}" class="text-indigo-600 hover:text-indigo-600">Login</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of signup page -->
@endsection
