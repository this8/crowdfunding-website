@extends('layouts.auth')

@section('content')

<center>
    <div class="container">
        <div class="ui shadow-lg p-3" style="margin-top: 250px">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            
                <header>Log In Account</header>
    
                {{-- email --}}
    
                        <input type="email" class="myInput shadow-lg p-3 mb @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"  autofocus>
            
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                        <br><br>
    
                {{-- password --}}
                        <input id="password" type="password" value="" class="myInput shadow-lg p-3 mb @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class=" mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <br>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                            
                        <br>

                        <input type="submit" class="btn" value="LOGIN">
                        
                
                        @if (Route::has('password.request'))
                        
                               <a class=" btn-link" href="{{ route('password.request') }}">
                                   {{ __('Forgot Your Password?') }}
                               </a>
                        @endif
                        
            </form>
        </div>
    </div>
   
</center>


@endsection

