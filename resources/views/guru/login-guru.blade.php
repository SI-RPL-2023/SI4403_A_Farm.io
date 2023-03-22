<!doctype html>
<html lang="en">

<head>
    @include("partial.header")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
body {
    background: url(../asset/Login.png);
    background-attachment: fixed;
    background-position: center;
    background-size: 100%;
    background-position-y: 85%;
}
</style>

<body>
    <section id="loginn">
        <div class="d-flex">
            {{-- <img src="asset/Login.png" alt="login" class="login-bg"> --}}
            <img src="../asset/logoblack.svg" alt="Dunia Tani" class="register-login__logo">
            <div class="guru-login-form shadow-lg rounded border-3 border">
                <h1 style="color: #4444; font-size: 25px;">Sign In Guru Tani</h1>
                <h2 style="color: #939393; font-size: 16px; margin-top: 8px;">Register using personal
                    data<br />appropiate</h2>
                <form action="/gurutani/login" class="form-login" method="post">
                    @csrf
                    <label for="username">Username</label>
                    <input style="padding-left: 16px" name="username" type="text" placeholder="Enter your username">
                    <label for="password">Password</label>
                    <input style="padding-left: 16px" name="password" type="password" placeholder="Enter your password">
                    <button type="submit" name="login">Login</button>

                </form>
            </div>
            <div class="text-login">
                <h1 style="font-size: 49px; font-weight: 700;" class="text-login_1">Ingin Mengetahui
                    tentang<br />pertaninan & membeli hasil<br />tani ?</h1>
                <h2 style="font-size: 31px; font-weight: 400">Nikmati kemudahan untuk mempelajari<br />pertanian dan
                    membeli hasil tani yang<br />segar.</h2>
            </div>
        </div>

        {{-- <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left"></div>
                <div class="col-md-6">
                    <div class="form-login m-auto ps-5">

                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif



        <h2 class="fw-bold mb-4">Login</h2>
        <form action="/login" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="name" name="name" id="name" class="form-control w-75 @error('name') is-invalid @enderror"
                    required value=" {{ old('name') }} ">
                @error('name')

                <div class="ivalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control w-75 required">
            </div>
            <div class="mb-3">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">remember me</label>
            </div>
            <button type="submit" name="login" class="d-block btn btn-primary mb-3">Login</button>
        </form>
        <p>You don't have account yet? <a href="/register">Sign Up</a></p>
        </div>
        </div>
        </div>
        </div> --}}
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>