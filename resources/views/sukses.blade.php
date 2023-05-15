<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.header')
</head>
<body>
    <div class="app">
        @include('partial.navbar')
        <section class="checkout-success ">
            <img src="asset/259.png" alt="">
            <h1 class="text-white">Successful Checkout</h1>
            <p class="text-center">WhatsApp will open automatically for continue the 
                <br> payment confirmation process</p>
            <a href="/user/order" class="cta">Selesai</a>
            <a href="" style="background-color: white;" class="cta checkout-success-cta-back">Butuh Bantuan</a>
        </section>

        @include('partial.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>