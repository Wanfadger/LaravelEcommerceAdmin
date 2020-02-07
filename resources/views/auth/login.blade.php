@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l10">
            <div class="card">
                <div class="card-title center">Login</div>

                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-field">
                                <input id="email" placeholder="email"  type="email"  
                                name="email" value="{{ old('email') }}"
                                 required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-field">
                                <input id="password" placeholder="password" type="password"  name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <label>
                            <input type="checkbox" checked="checked" name="remember" />
                            <span>Remember Me</span>
                          </label>
                          
                          <br>
                          
                          <div class="row">
                            <div class="col m6">
                                <button type="submit" class="btn left">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="col m6">
                                @if (Route::has('password.request'))
                                <a class="btn right" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>

                          </div>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
