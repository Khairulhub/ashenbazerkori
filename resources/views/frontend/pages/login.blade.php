@extends('layouts.frontend-template')

@section('content')
<h1>homepage login</h1>


<form action="" >
@csrf


<div class="form-group">
    <label for="email">Email</label>
    <input id="email" class="form-control" type="email" name="email" :value="{{old('email')}}" required autofocus autocomplete="username" />

</div>
<!-- password Address -->
<div class="form-group">
    <label for="password">Password</label>
    <input id="password" class="form-control" type="password" name="password" :value="{{old('password')}}" required autofocus autocomplete="current-password" />

</div>

<div class="flex justify-between">

    {{-- <div>
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif
    </div> --}}

    <button class="btn btn-primary btn-lg  my-5" type="button">Login </button>



</form>





@endsection