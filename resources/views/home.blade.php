<!DOCTYPE html>
<html lang="en">
@include('partial.header')
<style>
    body{
        background-color: #2B2B2B
    }
    .jumbotron{
        padding-top: 5%
    }
    h1{
        font-size: 75px
    }
    p{
        font-size: 15px
    }
    button{
        margin-top: 4%;
        margin-right: 4%;
        font-style: bold;
    }
    .fitur{
        padding-top: 5%;
    }
    .manfaat{
        padding-top: 5%
    }
</style>
<body>
    <div class="app">
        @include('partial.navbar')
        <section class="jumbotron" >
            <div class="container d-flex align-content-center justify-content-center">
                <div class="row align-items-center home">
                  <div class="col-md-4">
                      <h1 class="fw-bold">Farm House</h1>
                      <h1 class="fw-bold" style="color:yellow">Education</h1>
                    <p>Membantu peternak dan calon peternak untuk <br> 
                        meningkatkan pengetahuan mereka tentang <br> 
                        peternakan. Dalam aplikasi ini, mereka dapat <br> 
                        belajar tentang berbagai aspek peternakan seperti <br>
                        manajemen peternakan, nutrisi hewan, kesehatan <br>
                        hewan, dan lain sebagainya.!</p>
                    <button type="button" class="btn btn-warning"
                        style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 20px; --bs-btn-font-size: 16px;">
                        <b>Join For Free</b>
                    </button>
                    <button type="button" class="btn btn-outline-light"
                        style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 20px; --bs-btn-font-size: 16px;">
                        <b>View All Event</b>
                    </button>
                  </div>
                  <div class="col-md-8">
                    <iframe width="794" height="430" src="https://www.youtube.com/embed/nbXjnumdKwg" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen></iframe>
                  </div>
                </div>
              </div>
        </section>
        
        <section class="fitur">
            <div class="container d-flex align-content-center justify-content-center">
                <div style="text-align: center">
                    <p style="color:yellow"><b>Solusi Peternakanku</b></p><br><br>
                    <h1 style="font-size: 60px">Apa saja yang anda dapatkan dengan <br> bergabung kepada Farm House ?</h1><br>
                    <p>Selesaikan masalah seputar perternakan dan mendapatkan hasil ternak yang baik.</p><br>
                </div>
            </div>
            <div class="container align-content-center justify-content-center">
                <div class="cardfitur">
                    <div class="row align-items-center home">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-outline-secondary"
                            style="--bs-btn-padding-y: 140px; --bs-btn-padding-x:99px; --bs-btn-font-size: 10px;">
                            Custom button</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-outline-secondary"
                            style="--bs-btn-padding-y: 140px; --bs-btn-padding-x:99px; --bs-btn-font-size: 10px;">
                            Custom button</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-outline-secondary"
                            style="--bs-btn-padding-y: 140px; --bs-btn-padding-x:99px; --bs-btn-font-size: 10px;">
                            Custom button</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-outline-secondary"
                            style="--bs-btn-padding-y: 140px; --bs-btn-padding-x:99px; --bs-btn-font-size: 10px;">
                            Custom button</button>
                        </div>
                </div>
            </div>
            <div class="container d-flex align-content-center justify-content-center">
                <button type="button" class="btn btn-warning"
                    style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 20px; --bs-btn-font-size: 16px;">
                    <b>Lihat Semua</b>
                </button>
            </div>
        </section>
        <section class="manfaat">
            <div class="container">
                <div>
                    <p style="color:yellow"><b>Manfaat Platform</b></p><br><br>
                    <h1 style="font-size: 52px">Dapatkan ilmu perternakan yang baik dan bermutu, <br> agar mendapatkan hasil yang sangat memuaskan !</h1><br>
                    <p>Pelajari bagaimana solusi kami menghemat waktu dan uang dalam hal bidang perternakan. </p><br>
                </div>
                <div class="kalender">
                    <div class="col-md-5">
                        <img src="asset/kalender.png" alt="kalender" srcset="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    
    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>