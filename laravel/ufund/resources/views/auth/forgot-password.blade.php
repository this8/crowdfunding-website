@extends('layouts.auth-front-end')

@section('content')

<center>
    <form class="my-form shadow" method="POST" action="{{ route('password.email') }}">
        @csrf
    
        <!-- Email Address -->
        <div>
    
            <x-input id="email" placeholder="Enter Email" class="form-control inputs block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>
    
            <br>
            <x-button class="btn btn-danger">
                {{ __('Email Password Reset Link') }}
            </x-button>
    </form>
</center>


@endsection