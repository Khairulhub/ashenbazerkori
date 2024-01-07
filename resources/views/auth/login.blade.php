@extends('layouts.admin-template')


{{-- <x-guest-layout> --}}
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />



    @section('content')
    <h3 class="text-center mb-4">Login Now</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            {{-- <label for="email">Email</label> --}}
            <input id="email" class="w-100" placeholder="Enter your Email" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <label for="password">Password</label> --}}

            <input id="password" class="w-100" placeholder="Enter your Password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        {{-- <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            {{-- <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button> --}}
           
            <button class="btn btn-primary w-100 text-white my-4"><a href="" class="text-decoration-none text-white">Login</a></button>

            <div>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password</a>
                @endif
                <a href="{{ route('register') }}" class="text-decoration-none">Sign UP</a>
            </div>




        </div>
    </form>

    @endsection
{{-- </x-guest-layout> --}}
