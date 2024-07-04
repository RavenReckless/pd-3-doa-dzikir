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
                <form method="POST" action="{{ route('register') }}" class="sign-up-form" id="register-form">
                    @csrf
                    <h2 class="title">Register</h2>
                    <span class="error-message" id="name-error"></span>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="name" value="{{ old('name') }}"
                            id="name" />
                    </div>
                    @if ($errors->has('email'))
                        <span class="error-message">{{ $errors->first('email') }}</span>
                    @endif
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                            id="email" />
                    </div>
                    <span class="error-message" id="password-error"></span>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" id="password" />
                    </div>
                    <span class="error-message" id="password-confirmation-error"></span>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Konfirmasi Password" name="password_confirmation"
                            autocomplete="new-password" id="password_confirmation" />
                    </div>
                    <button class="btn" type="submit">Register</button>
                </form>
                <!-- Registration Form End -->
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum memiliki akun?</h3>
                    <p>
                        Daftar disini!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Register
                    </button>
                </div>
                <img src="{{ asset('assets/img/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah memiliki akun?</h3>
                    <p>
                        Log in disini!
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
