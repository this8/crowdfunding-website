@extends('layouts.auth-front-end')

@section('content')

<center>
    <form class="my-form shadow" method="POST" action="{{ route('register') }}">
        @csrf
    
        <!-- Name -->
        <div>
    
            <x-input id="name" placeholder="Enter patient name" class=" inputs block mt-1 w-full  form-control" type="text" name="name" :value="old('name')" required autofocus />
        </div>
    
        <!-- Email Address -->
        <div class="mt-4">
    
            <x-input id="email" placeholder="Enter email" class="inputs block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
        </div>
    
        <!-- Password -->
        <div class="mt-4">
    
            <x-input id="password" placeholder="Enter password" class="inputs block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>
    
        <!-- Confirm Password -->
        <div class="mt-4">
    
            <x-input id="password_confirmation" placeholder="Re-Enter password" class="inputs block mt-1 w-full form-control"
                            type="password"
                            name="password_confirmation" required />
        </div>
    
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
    
            <br><br>
            <x-button class="btn btn-danger">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
</center>


@endsection