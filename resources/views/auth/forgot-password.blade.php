@extends('layouts.app2')

@section('content')
    <div class="px-auto py-12 bg-gray-100">
        <div class="w-full md:w-1/2 lg:w-4/12 mx-auto my-12 bg-white p-4">
            @if (session('status'))
                <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status')}}
                </div>   
            @endif
            @error('email')
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ $message}} 
                </div>
            @enderror
            <p class="text-gray-600">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </p>
            <form class="flex flex-col mt-4" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div>
                    <input
                        type="email"
                        name="email"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-white border-transparent border-gray-300 focus:border-gray-500  focus:ring-0 text-base border-2 @error('email') border-red-400 @enderror"
                        placeholder="Email address"
                        value="{{ old('email') }}"
                    />
                </div> 
                <button
                    type="submit"
                    class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent text-white focus:outline-none bg-blue-500 hover:bg-blue-700 text-blue-100 hover:text-white focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer inline-flex items-center w-full justify-center items-center font-medium focus:outline-none"
                >
                    Reset Password
                </button>
                
            </form>
        </div>
    </div>
@endsection