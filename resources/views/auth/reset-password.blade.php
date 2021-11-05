{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.app2')

@section('content')
    <div class="container mx-auto my-8 p-4 bg-white">
        <div class="w-full md:w-1/2 lg:w-5/12 mx-auto my-12">
            @error('email')
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ $message}} 
                </div>
            @enderror
            <form class="flex flex-col mt-4" action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div>
                    <input
                        type="email"
                        name="email"
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-base border-2 @error('email') border-red-400  @enderror"
                        placeholder="Email address"
                        value="{{ old('email', $request->email) }}"
                    />
                   
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
                        class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent  border-2 focus:border-gray-500 focus:bg-white focus:ring-0 text-base @error('password_confirmation') border-red-400  @enderror"
                        placeholder="Repeat Password"
                    />
               </div>
                <button
                    type="submit"
                class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent focus:outline-none bg-blue-500 hover:bg-blue-700 text-blue-100 hover:text-white focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer inline-flex items-center w-full justify-center font-medium"
                >
                    Reset Password
                </button>
            </form>
        </div>
    </div>
@endsection