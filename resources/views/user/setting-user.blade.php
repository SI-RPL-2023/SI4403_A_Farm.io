<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard setting">
            @include('partial.sidebar-user')
            
            <div class="setting-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E; ">Setting</h1>
                <p>Enter valid information to make the learning process easier</p>
                <div class="class-subtle dashboard-subtle">
                    <img src="../asset/edit.svg" alt="">
                    Kelas Saya
                </div>
                <form action="/user/setting/ auth()->user()->id " class="dashboard-form">
                    @csrf
                    @method("PUT")


                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="name">Name (Max. 50 characters)</label>
                        <input type="text" name="name" id="name" value="auth()->user()->name"
                            placeholder="Enter your name">
                    </div>
                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="username">Username (Max. 50 characters)</label>
                        <input type="text" name="username" id="username" value="auth()->user()->username"
                            placeholder="Enter your username">
                    </div>
                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="auth()->user()->email"
                            placeholder="Enter your email" disabled>
                    </div>
                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="pass">New Password (at least 6 characters)</label>
                        <input type="password" name="password" id="pass" value="" placeholder="Enter your password">
                    </div>
                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="new-pass">Confirm New Password</label>
                        <input type="password" name="cpassword" id="new-pass" value=""
                            placeholder="Confirm your password">
                    </div>
                    <button class="setting-cta cta" type="submit">Save Profile</button>
                </form>
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>