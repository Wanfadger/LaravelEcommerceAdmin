@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8">
            <div class="card">
                <div class="card-title center">Register</div>

                <div class="card-content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-field">
                            
                                <input id="name" type="text" placeholder="name" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-field">
                            
                                <input id="email" type="email" placeholder="email" name="email" 
                                value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-field">
                        
                            <input id="password" type="password" placeholder="password" 
                            name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-field">
                            
                            <input id="password-confirm" name="comfirm password" type="password"  
                            required autocomplete="new-password">
                            
                        </div>

                        
                            <div class="col m6">
                                <button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
