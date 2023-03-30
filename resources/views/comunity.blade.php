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
        font-size: 55px;
        font-family: inter;
        font-weight: 600;
    }
    p{
        font-size: 16px;
        font-family: inter;
        color: #D5D5D5;
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
    .garis{
        height: 61px;
        width: 2px;
        background-color: #EBFF00;
        margin-left: 35px;
        position: absolute;
        margin-top: -45px;
    }
    .garis2{
        height: 72px;
        width: 2px;
        background-color: #EBFF00;
        margin-left: 35px;
        position: absolute;
        margin-top: -45px;
    }
</style>
<body>
    <div class="app">
        @include('partial.navbar')
        <img class="position-absolute top-100 ml-5 start-0 translate-middle-y" style=" width: 700px;"  src="../../../asset/Frame 1063.png" alt="">
        <section class="jumbotron" >
            <div class="container ">
                <div class="row">
                  <div class="col align-items-center" style="padding-top: 75px">
                      <h5 class="fw-bold align-items-center" style="color:yellow">Farm House Komunitas</h5>
                      <h1 class="mt-3">Pengaruh Anda Dimulai Disini</h1>
                    <p class="my-5">Komunitas Farm House adalah sebuah komunitas tempat para peminat dan ahli pertanian di Indonesia berkumpul untuk berbagi dan berkembang bakat pertanian masa depan. Tidak peduli apa titik awal Anda adalah, kami bertujuan untuk mendukung setiap ide dan menciptakan dampak besar, dan itu dimulai dari Anda.</p>
                    <a href="" class="jelajah mt-5">Jelajahi Komunitas</a>
                  </div>
                  <div class="col">
                    <div>
                        <img class="position-absolute bottom-0 end-0" style=" width: 400px; z-index:-1;" src="../../../asset/titik1.png" alt="">
                        <img src="asset/embe.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
        </section>
       
        <section class="manfaat">
            <div class="container">
                <div>
                    <p style="color:yellow"><b>MENGAPA BERGABUNG DENGAN KAMI ?</b></p>
                    <h1 class="mt-5 pb-5" style="font-size: 52px">Grow together with the community</h1>
                    
                </div>
                <div class="kalender d-flex justify-content-center align-items-center mt-5">
                    <div class="leftInfo">
                        <img src="asset/kalender.png" alt="kalender" srcset="">
                    </div>
                    <div class="rightInfo ms-5">
                        <div class="info">
                            <div class="moreInfo">
                                <div class="infoImage d-flex mb-5 align-items-center">
                                    <img src="asset/lampu.png" class="me-5" alt="lampu">
                                    <div class="contentInfo">
                                        <h6 class="fs-1">Pengetahuan yang diperoleh</h6>
                                        <p class="contentDesc fs-4">dengan adanya kelas yang di sediakan maka benefit yang didapatkan adalah pengetahuan 
                                            yang luas tentang teknik dan strategi pertanian dan peternakan yang efektif.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="garis"></div>
                            <div class="moreInfo">
                                <div class="infoImage d-flex mb-5 align-items-center">
                                    <img src="asset/produktifitas.png" class="me-5" alt="produktifitas">
                                    <div class="contentInfo">
                                        <h6 class="fs-1">Peningkatan Produktifitas</h6>
                                        <p class="contentDesc fs-4">Pendidikan peternakan dapat membantu meningkatkan produktivitas ternak melalui penerapan teknik pemeliharaan yang benar, 
                                        diet yang tepat, dan pengelolaan kesehatan ternak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="garis2"></div>
                            <div class="moreInfo">
                                <div class="infoImage d-flex mb-5 align-items-center">
                                    <img src="asset/toga.png" class="me-5" alt="toga">
                                    <div class="contentInfo">
                                        <h6 class="fs-1">Peningkatan Pendapatan</h6>
                                        <p class="contentDesc fs-4">Dengan pengetahuan yang diperoleh melalui pendidikan pertanian dan peternakan, individu dapat meningkatkan pendapatan mereka dengan mengoptimalkan hasil produksi, 
                                            meningkatkan kualitas produk, dan menjual produk mereka dengan harga yang lebih tinggi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
           
       

    
    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>