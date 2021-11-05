@extends('layouts.app2')

@section('content')
    <div class="container mx-auto my-8 p-4 bg-white">
        <div class="w-full md:w-1/2 lg:w-5/12 mx-auto my-12">
            <form class="flex flex-col mt-4" action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <input
                        type="text"
                        name="name"
                        class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-base border-2 @error('name') border-red-400  @enderror"
                        placeholder="Full Name"
                        value="{{ old('name') }}"
                    />
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message}} 
                        </div>
                    @enderror
                </div>
                <div>
                    <input
                        type="text"
                        name="username"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent  border-2 focus:border-gray-500 focus:bg-white focus:ring-0 text-base @error('username') border-red-400  @enderror"
                        placeholder="Username"
                        value="{{ old('username') }}"
                    /> 
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message}} 
                        </div>
                    @enderror                   
                </div>

                <div>
                    <input
                        type="email"
                        name="email"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-base border-2 @error('email') border-red-400  @enderror"
                        placeholder="Email address"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message}} 
                        </div>
                    @enderror 
                </div>
               <div>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent  border-2 focus:border-gray-500 focus:bg-white focus:ring-0 text-base @error('password') border-red-400  @enderror"
                        placeholder="Password"
                    />
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message}} 
                        </div>
                    @enderror 
               </div>
               <div>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent  border-2 focus:border-gray-500 focus:bg-white focus:ring-0 text-base @error('password') border-red-400  @enderror"
                        placeholder="Repeat Password"
                    />
               </div>
                <button
                    type="submit"
                    class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent focus:outline-none bg-blue-500 hover:bg-blue-700 text-blue-100 hover:text-white focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer inline-flex items-center w-full justify-center font-medium"
                >
                    Register
                </button>
                <div class="flex flex-col items-center mt-5">
                    <p class="mt-1 text-sm font-light text-gray-500">
                    Register already?<a href="{{ route('login') }}" class="ml-1 font-medium text-blue-400">Sign in now</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection