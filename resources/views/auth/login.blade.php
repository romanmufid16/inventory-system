@extends('auth.layout')
@section('title', 'Sign In')
@section('content')
    <!-- start signin page -->
    <div class="flex flex-col items-center justify-center g-0 h-screen px-4">
        <!-- card -->
        <div class="justify-center items-center w-full bg-white rounded-md shadow lg:flex md:mt-0 max-w-md xl:p-0">
            <!-- card body -->
            <div class="p-6 w-full sm:p-8 lg:p-8">
                <div class="mb-4">
                    <p class="mb-1 text-xl font-semibold text-sky-950">Sign In</p>
                    <p class="mb-6">Please enter your user information.</p>
                </div>
                <!-- form -->
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <!-- username -->
                    <div class="mb-3">
                        <label for="email" class="mb-2 block text-gray-800 font-semibold">Email</label>
                        <input type="email" id="email" name="email"
                            class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            name="email" placeholder="Email address here" required="" />
                    </div>
                    <!-- password -->
                    <div class="mb-5">
                        <label for="password" class="mb-2 block text-gray-800 font-semibold">Password</label>
                        <input type="password" id="password" name="password"
                            class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            name="password" placeholder="**************" required="" />
                    </div>
                    @if ($errors->any())
                        <div class="text-red-500 mb-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- checkbox -->
                    <div class="lg:flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember"
                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                id="rememberme" />
                            <label class="inline-block ml-2" for="rememberme">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <!-- button -->
                        <div class="grid">
                            <button type="submit"
                                class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                Sign in
                            </button>
                        </div>

                        <div class="flex justify-end mt-4">
                            <div class="mb-2">
                                <a href="{{ route('show-register') }}" class="text-indigo-600 hover:text-indigo-600">Create
                                    An
                                    Account</a>
                            </div>
                            {{-- <div>
                                <a href="forget-password.html" class="text-indigo-600 hover:text-indigo-600">Forgot your
                                    password?</a>
                            </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of signin page -->
@endsection
