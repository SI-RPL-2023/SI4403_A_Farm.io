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
        font-size: 50px
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
            <div class="container ">
                <div class="row">
                  <div class="col align-items-center" style="padding-top: 75px">
                      <h5 class="fw-bold align-items-center" style="color:yellow">#Acara Untuk Dihadiri</h5>
                      <h1 class="mt-3">Tambahkan relasi dengan berpartisipasi dalam acara bertani</h1>
                    <p class="mt-5">Manfaatkan kesempatan untuk menyelami pembelajaran yang tak ternilai dalam acara terbaru kami.</p>
                  </div>
                  <div class="col">
                    <div>
                        <img src="asset/embe.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <form action="">
        <div class="input-wrapper mt-5">
                <div class="fa fa-search mr-2"></div>
                <input class="rounded"  type="text" placeholder="   Search" />
                <div class="fa fa-times"></div>
              </div>
        </form>
        <section class="fitur">
            
            <div class="container d-flex pb-5">
                <div >
                    
                    <h1 class="justify-start" style="font-size: 60px">Our Upcoming Events </h1>
                </div>
            </div>
            <div class="d-flex align-content-center justify-content-center">
                <div class="nav__box">
                    <a href="" class="HE">ALL</a>
                    <a href="" class="HE">Webminar</a>
                    <a href="" class="HE">Prudct</a>
                    <a href="" class="HE">Other</a>
                </div>
            </div>
            <div class="container align-content-start justify-content-start mt-5">
                
                <div class="card" style="width: 50rem; height: 60rem;">
                    <img src="asset/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="bold card-title " style="color: black">Pentingnya penggunaan teknologi dalam perternakan</h1>
                      <p class="dark mt-3" style="color: black">Menambahan wawasan mengenai pentingnya menggunakan teknologi pada peternakan untuk memudahkan peternak</p>
                      <p class="dark mt-3" style="color: black">Virtual Event</p>
                      <p class="dark" style="color: black">21 Jan 2023</p>
                      
                    </div>
                  </div>
                </div>
            </div>
           
       

    
    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>