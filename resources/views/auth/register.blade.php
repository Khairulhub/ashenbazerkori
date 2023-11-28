@extends('layouts.admin-template')


{{-- <x-guest-layout> --}}
@section('content')
<h3 class="text-center mb-4">Register Now</h3>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <label for="name" >Name</label>
            <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-group mt-4">
            <label for="email" >Email</label>
            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

        <!-- Password -->
        <div class=" form-group mt-4">
            <label for="password">Password</label>

            <input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
        </div>

        <!-- Confirm Password -->
        <div class="form-group mt-4">
            <label for="password_confirmation" >Confirm Password</label>

            <input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>


            <button class="btn btn-primary w-100 text-white my-4"><a href="" class="text-decoration-none text-white">Register</a></button>
            {{-- <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button> --}}
        </div>
    </form>
@endsection
{{-- </x-guest-layout> --}}
