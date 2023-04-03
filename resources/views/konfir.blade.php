<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')

        <div class="container" style="margin-top: 50px">
            <header class="row justify-content-between" style="height: 500px">
                <div class="col-7 d-flex  justify-content-between align-items-center">
                    <div>
                        <p class="courseDetail">Beli kelas Premium</p>
                        <h3 class="titleDetail mt-5">Checkout Kelas</h3>
                        <p class="hasilDetail">Bergabunglah dengan kami di kelas Premium dan bangun sebuah peternakan yang sangat baik</p>
                    </div>
                </div>
                <div class="col-4">

                    <div class="course_card d-flex flex-column justify-content-between">
                        <img src="../asset/hayam.png" alt="" class="course_img rounded rounded-4">
                        <div>
                            <h2>Monitor Hasil Peternakan Menggunakan Teknologi</h2>
                            <p>Memudahkan melihat hasil peternakan dengan menggunakan aplikasi yang terbaik di ciptakan oleh anak bangsa</p>
                        </div>
                        <div class="course__card-transaksi">
                            <div class="course__gutter"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="course__harga">
                                    <p class="course__harga-coret">Rp125.000</p>
                                    <h2 class="course__harga-asli">GRATIS</h2>
                                </div>
                                <div class="course__cardButton">
                                    <img src="../asset/bintang.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="container" style="margin-top: 50px">
            <div class="row">
            <div class="col-11" >
                <div class=" bg-body rounded text-dark p-5 ">
                    <h2 class=" fw-bold mt-5">
                        Payment details
                    </h2>
                    <form class="align-items-center" method="post" enctype="multipart/form-data" action="uploadproses.php">
                        <h4 class="mt-5" >
                            Evidence of transfer
                        </h4>
                        <Input class="mt-5 border rounded rounded-4" type="file" name="gambar">
                        <h4 class="mt-5" >
                            Evidence of transfer
                        </h4>
                        <input class="border rounded rounded-4" type="text" placeholder="Type your username...">
                        <input class="mt-5 fw-bold fw-2 rounded" style="font-size:24px; background-color:#EBFF00"  type="submit" value="Pay now">
                    </form>
                    
                    <div class="mt-5">
                        <img src="asset/Image.png" alt="">

                    </div>
                </div>
                    
            </div>    
            </div>
             

        </div>
       

    
 
</body>
  




    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



</html>