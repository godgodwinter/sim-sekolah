<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset("loginreg/") }}/style.css" />
    <title>SMK DW KROMENGAN FORM</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">MASUK / LOGIN</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder=" Email"  class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder=" Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>

                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Kesulitan untuk Masuk ? Hubungi!</p>
                    <div class="social-media">
                        <a href="https://api.whatsapp.com/send?phone=112" class="social-icon">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                    </div>
                </form>

                  <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">DAFTAR / REGISTER</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder=" Nama Lengkap" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" >

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">


                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password COnfirmation">

                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <p class="social-text">Kesulitan untuk mendaftar?</p>
                    <div class="social-media">
                        <a href="https://api.whatsapp.com/send?phone=112" class="social-icon">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum mempunyai Akun ?</h3>
                    <p>
                        Buat akun terlebih dahulu dengan menekan tombol <b>Daftar</b> di bawah!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                    <br>
                    <h3>&nbsp;</h3>
                    <p>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </p>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Mempunyai Akun ?</h3>
                    <p>
                        Masuk menggunakan akun anda yang sudah terdaftar dengan menekan tombol <b>Masuk</b> di bawah.
                        Pastikan email anda aktif!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                    <br>
                    <h3>&nbsp;</h3>
                    <p>
                        @error('password2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </p>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset("loginreg/") }}/app.js"></script>
</body>

</html>
