@extends('layouts.app2')

@section('content')
    <div class="container mx-auto my-8 p-4 bg-white">
        <div class="w-full md:w-1/2 lg:w-5/12 mx-auto my-12">
            @if (session('status'))
                <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status')}}
                </div>   
            @endif
             @error('email')
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ $message }}
                </div>
            @enderror 
            
            <form class="flex flex-col mt-4" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <input
                        type="email"
                        name="email"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-base border-2"
                        placeholder="Email address"
                        value="{{ old('email') }}"
                    />
                </div>
                <div>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent  border-2 focus:border-gray-500 focus:bg-white focus:ring-0 text-base"
                        placeholder="Password"
                    />
               </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                    </div>

                    <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-medium text-blue-500 hover:text-blue-400">
                        Forgot your password?
                    </a>
                    </div>
                </div>
                <button
                    type="submit"
                    class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent text-white focus:outline-none bg-blue-500 hover:bg-blue-700 text-blue-100 hover:text-white focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer inline-flex items-center w-full justify-center items-center font-medium focus:outline-none"
                >
                    Login
                </button>
                <div class="flex flex-col items-center mt-5">
                    <p class="mt-1 text-sm font-light text-gray-500">
                    New to Here<a href="{{ route('register') }}" class="ml-1 font-medium text-blue-400">Sign up now</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection