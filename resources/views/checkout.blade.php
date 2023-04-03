<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')

        <div class="container" style="margin-top: 50px">
            <header class="row justify-content-between" style="height: 500px">
                <div class="col-7 d-flex flex-column justify-content-between">
                    <div>
                        <p class="courseDetail">Beli kelas Premium</p>
                        <h3 class="titleDetail mt-5">Checkout Kelas</h3>
                        <p class="hasilDetail">Bergabunglah dengan kami di kelas Premium dan bangun sebuah peternakan yang sangat baik</p>
                    </div>
                    <div>
                        <p class="kelas mb-5">Manfaat untuk Anda</p>
                        <div class="d-flex wadah justify-content-between align-items-center w-100 rounded rounded-3 p-3" >
                            <div class="d-flex align-items-center">
                                <div class="me-5">
                                    <img src="asset/chat.png" alt="">
                                </div>
                                <div class="">
                                    <h3 class="bold">Discussion Group</h3>
                                    <p class="fw-light">Bonus from us</p>
                                </div>
                            </div>
                            <div class="">
                                <img src="asset/check.png" alt="">
                            </div>
                        </div>
                        <div class="d-flex mt-5 wadah justify-content-between align-items-center w-100 rounded rounded-3 p-3" >
                            <div class="d-flex align-items-center ">
                                <div class="me-5">
                                    <img src="asset/form.png" alt="">
                                </div>
                                <div class="">
                                    <h3 class="bold">Graduation Certificate</h3>
                                    <p class="fw-light">Bonus from us</p>
                                </div>
                            </div>
                            <div class="">
                                <img src="asset/check.png" alt="">
                            </div>
                        </div>
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
        <div class="container" style="margin-top: 80px">
            <div class="row justify-content-between">
                <div class="col-7">
                    <div class="bayar rounded rounded-4 py-1 px-5">
                        <h3 class="titleDetail">Select Payment Method</h3>
                        <div class="d-flex mt-5">
                            <button class="btn btn-light me-5">
                                <p class="">
                                    Automatic
                                </p>
                            </button>
                            <button class="  btn btn-light" >
                                <p>
                                    Manual Transfers
                                </p>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-5 btn btn-light" style="width: 100%;" href="">
                            <img src="asset/tiket.png" alt="">
                            <p>
                                Use promos to save more 
                            </p>
                            <img src="asset/tanda.png" alt="">
                        </div>
                        <p class="mt-5">
                            Payment details
                        </p>
                        <div class="d-flex justify-content-between  mt-5">
                            <p>Harga Normal</p>
                            <p style="text-decoration: line-through; color: #6D4405">Rp 325,000</p>
                        </div>
                        <div class="d-flex justify-content-between mt-5">
                            <p>Harga Kelas</p>
                            <p >Rp 200,000</p>
                        </div>
                        <div class="d-flex justify-content-between mt-5">
                            <p>Total Transfer</p>
                            <p >Rp 200,000</p>
                        </div>
                        <div class="d-grid mt-5 mb-5">
                                        <!-- Button trigger modal -->
<button type="button" class="btn" style="height: 50px; font-size:24px; background-color:#EBFF00" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Pay Now
  </button>
                        </div>
                    </div>
                </div>
                <div class="info rounded rounded-4 col-4 p-5">
                    <div class="mr-5">
                        <h3 class="titleDetail ">Important information</h3>
                        <p class="mt-5 text-muted">The class payment confirmation process will take around 20 minutes (from the WhatsApp message sent) if using the manual payment method. Please wait patiently and thank you.</p>
                        <h3 class="titleDetail ">Need help?contact us</h3>  
                        <div class="d-flex flex-column justify-content-between">

                            <div class="d-flex justify-content-between" style="margin-top: 50px; ">
                                <p style="font-size:20px;" >
                                Admin    
                                </p>
                                <p style="font-size:20px;">
                                Finance    
                                </p>    
                            </div>              
                            <div class="d-flex justify-content-between " style="margin-top: 50px; ">
                                <p style="font-size: 20px">
                                    No Wa Admin    
                                </p>
                                <p style="font-size: 20px">
                                    +62042242242424    
                                </p>    
                            </div>              
                        </div>
                    </div>
                </div>
            </div>

        </div>
           <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            
  
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center  modal-body">
            <img src="asset/alert.png" style="width: 75px; height: 76px" alt="">
            <p class="text-dark mt-5 fs-2">
                Apakah Anda yakin  ingin melakukan transaksi ?
            </p>
            <div class="mt-5">
                <button type="button" class="btn fs-2  me-5" data-bs-target="#bayar" data-bs-toggle="modal" style=" width:120px; height: 50px; background-color:#EBFF00">Iya</button>
              <button type="button" class="btn btn-secondary fs-2" data-bs-dismiss="modal" style=" width:120px; height: 50px" >tidak</button>
            </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>
    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Modal -->
<div class="modal fade" id="bayar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog rounded rounded-5">
        <div class="modal-contentrounded rounded-5">
            <div class="modal-header px-5" style="background-color: #320F07; height: 120px">
                <img src="asset/logo.png" style="width: 150px; margin-top: -20px" alt="">
            </div>
        </div>
        <div class="modal-body bg-light text-dark">
    <div class="d-flex justify-content-between rounded rounded-4 shadow mx-5 p-4 position-relative bg-white" style="top: -45px;">
        <div >
            <p style="font-size: 15px;">
                Total
            </p>
            <h2 class="fw-bold mt-3">Rp200.000</h2>
            <p class="mt-2">
                Order ID #Duta-10923
            </p>
        </div>
        <div class="text-end">
            <p class="text-muted">
                Choose Within: <a class="text-decoration-none text-dark fw-bold">23:55:26</a>
            </p>
            <img src="asset/icon.png" alt="">
        </div>

        
    </div>
    <div>

        <h1 class="ms-5 text-muted">
            Select method
        </h1>
        <h2 class=" mt-5 ms-5 fw-bold">
            Bank transfer 
        </h2>
        <img src="asset/Frame 940.png" class="ms-5 mt-5" alt="" style="width: 400px">
         <hr>   
        <h2 class=" mt-5 ms-5 fw-bold">
            Other e-Wallets 
        </h2>
    </div>
        <img src="asset/Frame 935.png" class="ms-5 mt-5" alt="" style="width: 75px">
   
    
     <hr>   
      </div>
    </div>
  </div>
    <!-- Modal -->
<div class="modal fade" id="qr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog rounded rounded-5">
        <div class="modal-contentrounded rounded-5">
            <div class="modal-header px-5" style="background-color: #320F07; height: 120px">
                <img src="asset/logo.png" style="width: 150px; margin-top: -20px" alt="">
            </div>
        </div>
        <div class="modal-body bg-light text-dark">
    <div class="d-flex justify-content-between rounded rounded-4 shadow mx-5 p-4 position-relative bg-white" style="top: -45px; z-index: 99;">
        <div >
            <p style="font-size: 15px;">
                Total
            </p>
            <h2 class="fw-bold mt-3">Rp200.000</h2>
            <p class="mt-2">
                Order ID #Duta-10923
            </p>
        </div>
        <div class="text-end">
            <p class="text-muted">
                Choose Within: <a class="text-decoration-none text-dark fw-bold">23:55:26</a>
            </p>
            <img src="asset/icon.png" alt="">
        </div>

        
    </div>
    <h1 class="ms-5 text-muted">
        Select method
    </h1>
    <h2 class=" mt-5 ms-5 fw-bold">
        Bank transfer 
    </h2>
    <img src="asset/Frame 940.png" class="ms-5 mt-5" alt="" style="width: 400px">
     <hr>   
    <h2 class=" mt-5 ms-5 fw-bold">
        Other e-Wallets 
    </h2>
    <button type="button" class="btn fs-2  me-5" data-bs-target="#bayar" data-bs-toggle="modal" >
        <img src="asset/Frame 935.png" class="ms-5 mt-5" alt="" style="width: 75px">

    </button>
    
     <hr>   
      </div>
    </div>
  </div>
 
</body>
  




    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



</html>