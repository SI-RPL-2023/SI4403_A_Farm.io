<!doctype html>
<html lang="en">

<head>
    @include("partial.header")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
/* body {
    background: url(asset/loginbackground.png);
    background-attachment: fixed;
    background-position: center;
    background-size: 100%;
    background-position-y: 85%;

} */
</style>
<!-- ini bagian registrasi User pelajar -->
<body>
<section id="regist">
    <img src="asset/Logo.png" alt="Dunia Tani" class="register-login__logo">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-5 min-vh-100 d-flex align-items-center bagianKiri">
                <div class="register-form shadow-lg rounded border-3 border rounded-5">
                    <h1 style="color: black; font-size: 31px;">Daftar</h1>
                    <h2 style="color: #939393; font-size: 16px; margin-top: 8px;">Daftar dengan menggunakan data diri yang sesuai</h2>
        
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show fs-5" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
        
                    <form action="/register" class="form-register" method="post">
                        @csrf
                        <label for="name">Name</label>
                        <input style="padding-left: 16px; border-radius: 10px;" type="text" name="name" placeholder="Enter your full name" required>
                        <label for="email">Email</label>
                        <input style="padding-left: 16px; border-radius: 10px;" type="email" name="email" placeholder="Enter your email" required>
                        <label for="username">Username</label>
                        <input style="padding-left: 16px; border-radius: 10px;" name="username" type="text" placeholder="enter your username" required>
                        <label for="password">Password</label>
                        <input style="padding-left: 16px; border-radius: 10px;" name="password" type="password" placeholder="enter your password" required>
                        <button type="submit" name="login">Daftar</button>
        
                    </form>
                    <p style="color: #9F9F9F; margin-top: 10px;" class="sign_up">Anda sudah memiliki akun ?<span
                                style="color: #7aa60b;"><a href="/login"> Login</a></span></p>
                </div>
            </div>
            <div class="col-md-7 min-vh-100 right">
                <div class="text-login">
                    <h1 style="font-size: 34px; font-weight: 700;" class="text-login_1">Ingin mengetahui tentang<br />peternakan & membeli hasil<br />ternak ?</h1>
                    <h2 style="font-size: 20px; font-weight: 400">Nikmati kemudahan untuk mempelajari<br />peternakan dan
                        membeli hasil ternak yang<br />berkualitas.
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>