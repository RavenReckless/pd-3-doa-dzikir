<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}" />
    <title>Doa & Dzikir | Login Register</title>
</head>

<body>
    <div class="container {{ $errors->any() ? 'sign-up-mode' : '' }}">
        <div class="forms-container">
            <div class="signin-signup">
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

                <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Register</h2>
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
                        <input type="password" placeholder="Konfirmasi Password" name="password_confirmation"
                            autocomplete="new-password" />

                    </div>
                    <button class="btn">Register</button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum mempunyai akun ?</h3>
                    <p>
                        Silakan membuat akun disini terlebih dahulu !
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Register
                    </button>
                </div>
                <img src="{{ asset('assets/img/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah mempunyai akun ?</h3>
                    <p>
                        Silakan log in disini !
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Log in
                    </button>
                </div>
                <img src="{{ asset('assets/img/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/auth.js') }}"></script>
</body>

</html>
