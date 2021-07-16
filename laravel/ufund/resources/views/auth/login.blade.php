@extends('layouts.auth-front-end')

@section('content')

        <center>
            <form class="my-form shadow" method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Address -->
                <div>
            
                    <x-input id="email"  placeholder="Enter Email" class="block mt-1 w-full form-control inputs" type="email" name="email" :value="old('email')" required autofocus  />
                </div>
            
                <!-- Password -->
                <div class="mt-4">
            
                    <x-input id="password"  placeholder="Enter Password" class="inputs block mt-1 w-full form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
            
            
            
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
            
                    <br><br>
                    <x-button class="btn btn-danger">
                        {{ __('Log in') }} 
                    </x-button>
                </div>
            </form>
        </center>

@endsection