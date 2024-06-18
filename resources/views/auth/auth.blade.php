@extends('layouts.auth')
@section('content')

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup {{ $errors->any() ? 'sign-up-mode' : '' }}">
                <!-- Login Form Start -->
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Log in</h2>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                            autocomplete="off" />
                    </div>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <button class="btn solid">Log in</button>
                </form>
                <!-- Login Form End -->

                <!-- Registration Form Start -->
                <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Register</h2>
                    @if ($errors->any() && !$errors->has('email') && !$errors->has('password') && !$errors->has('password_confirmation'))
                        <div class="error-message">Please correct the errors below and try again.</div>
                    @endif
                    @if ($errors->has('name'))
                        <span class="error-message">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="name" value="{{ old('name') }}" />
                    </div>
                    @if ($errors->has('email'))
                        <span class="error-message">{{ $errors->first('email') }}</span>
                    @endif
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
                    </div>
                    @if ($errors->has('password'))
                        <span class="error-message">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="error-message">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" name="password_confirmation"
                            autocomplete="new-password" />
                    </div>
                    <button class="btn">Register</button>
                </form>
                <!-- Registration Form End -->
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Don't have an account yet?</h3>
                    <p>
                        Create your account here!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Register
                    </button>
                </div>
                <img src="{{ asset('assets/img/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>
                        Log in here!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Log in
                    </button>
                </div>
                <img src="{{ asset('assets/img/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>
@endsection
