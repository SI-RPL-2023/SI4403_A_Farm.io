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
                        <img src="../asset/thumbnails/{{$course->thumbnail}}" alt="" class="course_img rounded rounded-4">
                        <div>
                            <h2>{{ Str::limit($course->title, 25) }}</h2>
                            <p>{{ Str::limit($course->description, 30) }}</p>
                        </div>
                        <div class="course__card-transaksi">
                            <div class="course__gutter"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="course__harga">
                                    <p class="course__harga-coret">Rp{{ $course->price*120/100 }}</p>
                                    <h2 class="course__harga-asli">Rp{{ $course->price }}</h2>
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
                        <p class=" fw-bold mt-5">
                            Payment details
                        </p>
                        <div class="d-flex justify-content-between  mt-5">
                            <p>Harga Normal</p>
                            <p style="text-decoration: line-through; color: #6D4405">Rp{{ $course->price*120/100 }}</p>
                        </div>
                        <div class="d-flex justify-content-between mt-5">
                            <p>Harga Kelas</p>
                            <p >Rp{{ $course->price }}</p>
                        </div>
                        <div class="d-flex justify-content-between mt-5">
                            <p>Total Transfer</p>
                            <p >Rp{{ $course->price }}</p>
                        </div>
                        <p class=" fw-bold mt-5">
                            Payment details
                        </p>
                        <img src="asset/bni.png" class="mt-5" alt="">
                        <p class="mt-5">
                            PT Ternakin Indonesia (Admin Diki Ilham Firmansyah)
                        </p>
                        <p class="fw-boldmt-5">
                            0280256315
                        </p>
                        <hr>
                        <img src="asset/mandiri.png" class="mt-5" alt="">
                        <p class="mt-5">
                            PT Ternakin Indonesia (Admin Rafid fadhil)
                        </p>
                        <p class="fw-bold mt-5">
                            0280256315
                        </p>
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
            <img src="/asset/alert.png" style="width: 75px; height: 76px" alt="">
            <p class="text-dark fw-bold mt-5 fs-2">
                Konfirmasi Pembayaran
            </p>
            <p class="text-dark mt-5 fs-2">
                Apakah Anda yakin  ingin melakukan transaksi ?
            </p>
            <div class="mt-5">
                <button type="button" class="btn fs-2  me-5" data-bs-target="#konfir" data-bs-toggle="modal" style=" width:120px; height: 50px; background-color:#EBFF00">sudah</button>
              <button type="button" class="btn btn-secondary fs-2" data-bs-dismiss="modal" style=" width:120px; height: 50px" >belum</button>
            </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="konfir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
              
    
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center  modal-body">
              <img src="/asset/verify.png" style="width: 75px; height: 76px" alt="">
              <p class="text-dark fw-bold mt-5 fs-2">
                Tunggu Sebentar !
              </p>
              <p class="text-dark mt-5 fs-2 text-center">
                Jika Berhasil, Anda Dialihkan ke halaman dalam waktu 3 detik...
              </p>
              <div class="mt-5">
                  <a href="/konfirmasi/{{$course->id}}" class="btn fs-2  me-5 pt-3" style=" width:120px; height: 50px; background-color:#EBFF00">sudah</a>
              <button type="button" class="btn btn-secondary fs-2" data-bs-dismiss="modal" style=" width:120px; height: 50px" >belum</button>
              </div>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
  </div>
  
    
    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    
 
</body>
  


</html>