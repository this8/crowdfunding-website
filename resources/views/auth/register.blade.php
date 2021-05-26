@extends('layouts.auth')

@section('content')
<div class="container">

    <div class="row " style="margin-top:200px">

        <div class="ui col-md-5 col-sm-12" style="margin-bottom: 50px;height: 600px;opacity:0.6; background: linear-gradient(to right, rgb(248, 242, 188), #eb7e18);">
            
                <header class="text-center" style="color: red"> Terms and Condition </header>
            
            <p>
                &Gt;Create an account here only if you need funds for the treatment. Otherwise we are not responsible for any inconvenince. <br> <br>
                &Gt;The truly documents required for treatment should be clearly stated in the post.         
            </p>
        </div>

        <div class="col-md-2 col-sm-0">

        </div>

        <div class="ui col-md-5 col-sm-12" style="height: 600px; background: linear-gradient(to right, rgb(248, 242, 188), #eb7e18);">
            <form method="POST" class="text-center" action="{{ route('register') }}">
                @csrf
            
                <header>Registration</header>

                    <div class="mt-4">
                        <input id="name" placeholder="Name" type="text" class="myInput @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <input id="email" type="email" class="myInput @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" name="Email" required autocomplete="email">
            
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    <div class="mt-4">
                        <input id="password" placeholder="Password" type="password" class="myInput @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
            
                    <div class="mt-4">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="myInput " name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="mt-4">
                        <input type="checkbox" class="myInput" required>
                                <br>
                                <small>I read and agree to Terms and Conditions</small>
                                
                    </div>

                    <button type="submit" class="btn">
                            {{ __('Register') }}
                    </button>
            </form>
        </div>

     
    </div>
    
</div>
@endsection


