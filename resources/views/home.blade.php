<!DOCTYPE html>
<html lang="en">
@include('partial.header')
<style>
    body{
        background-color: #2B2B2B
    }
    .jumbotron{
        padding-top: 5%;
    }
    h1{
        font-size: 80px;
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
    .dikanan{
        top: 2700px;
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
<!-- ini bagian landing page -->
<body>
    <div class="app">
        @include('partial.navbar')
        <section class="jumbotron" >
            <div class="container d-flex align-content-center justify-content-between align-items-center"> 
                <div class="col-5">
                    <div class="row align-items-center home">
                    <div class="col w-100">
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
                    </div>
                </div>
                <div>
                <img class="position-absolute bottom-0 end-0" style=" width: 400px" src="../../../asset/titik1.png" alt="">
                <img class="position-absolute top-0 start-50 translate-middleç-x" style=" width: 400px" src="../../../asset/titik.svg" alt="">
                <img class="position-absolute top-100 ml-5 start-0 translate-middle-y" style=" width: 700px" src="../../../asset/Frame 1063.png" alt="">
                </div>
                <div class="col-6">
                    <div class="row">
                        <img class="position-absolute top-0 start-50 translate-middleç-x" style=" width: 400px" src="../asset/titik.svg" alt="">
                        <div class="col rounded-5 p-5 border w-100 bg-light bg-opacity-25" style='backdrop-filter: blur(10px);'>
                            <iframe class="w-100" height="439" src="https://www.youtube.com/embed/nbXjnumdKwg" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen style="background-color: #fff"></iframe>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
        </br>

        <section class="fitur">
            <div class="container d-flex align-content-center justify-content-center">
                <div style="text-align: center">
                    <p style="color:yellow"><b>Solusi Peternakanku</b></p><br><br>
                    <h1 style="font-size: 40px">Apa saja yang anda dapatkan dengan <br> bergabung kepada Farm House ?</h1><br>
                    <p>Selesaikan masalah seputar perternakan dan mendapatkan hasil ternak yang baik.</p><br>
                    <br>
                    </br>
                    <br>
                </div>
            </div>
            
            <div class="container align-content-center justify-content-center">
                <div class="cardfitur">
                    <div class="row align-items-center justify-content-center home">
                        <div class="kartu col-md-3 text-center py-5 px-4 border rounded-5 justify-content-center align-items-center">
                            <img src="asset/belajar.png" class="mb-3" alt="">
                            <p class="titleCard">Belajar Pertanian</p>
                            <p class="descCard my-4">Memahami inovasi terbaru di industri melalui
                            ribuan artikel, video pembelajaran, tentang Perternakan.</p>
                            <p class="miniDesc"> Belajar tentang berbagai aspek peternakan seperti manajemen 
                                peternakan, nutrisi hewan, kesehatan hewan, dan lain sebagainya.</p>
                        </div>
                        <div class="kartu col-md-3 text-center py-5 px-4 border rounded-5 justify-content-center align-items-center">
                            <img src="asset/belanja.png" class="mb-3" alt="">
                            <p class="titleCard">Belanja Hasil Peternakan</p>
                            <p class="descCard mt-4">Dapatkan produk perternakan terbaik yang ditanam dengan metode terbaru 
                                dan dapatkan produk perternakan yang sangat segar.</p>
                            <p class="miniDesc"> Dapatkan hasil perternak langsung dari sumber yang telah diolah para peternak 
                                dari hasil ternaknya sendiri, terjamin kualitas produk tanpa bahan penawet</p>
                        </div>
                        <div class="kartu col-md-3 text-center py-5 px-4 border rounded-5 justify-content-center align-items-center">
                            <img src="asset/tingkat.png" class="mb-3" alt="">
                            <p class="titleCard">Tingkatkan Hasil Ternak</p>
                            <p class="descCard my-4">Memahami inovasi terbaru di industri melalui
ribuan artikel, video pembelajaran, tentang Perternakan.</p>
                            <p class="miniDesc">  Belajar tentang berbagai aspek peternakan seperti manajemen peternakan, 
                                nutrisi hewan, kesehatan hewan, dan lain sebagainya.</p>
                        </div>
                        <div class="kartu col-md-3 text-center py-5 px-4 border rounded-5 justify-content-center align-items-center">
                            <img src="asset/belajar.png" class="mb-3" alt="">
                            <p class="titleCard">Community</p>
                            <p class="descCard my-4">Memahami inovasi terbaru di industri melalui
                            ribuan artikel, video pembelajaran, tentang Perternakan.</p>
                            <p class="miniDesc"> Banyak benefit yang anda dapatkan karena pada community 
                                anda dapat mempelajari dan sharing ilmu yang anda punyai</p>
                        </div>
                </div>
            </div>
            <div class="container d-flex align-content-center justify-content-center">
                <button type="button" class="btn btn-warning"
                    style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 20px; --bs-btn-font-size: 16px; background-color:yellow;">
                    <b>Lihat Semua</b>
                </button>
            </div>
        </section>
        <section class="manfaat">
            <div class="container">
                <div>
                    <p style="color:yellow"><b>Manfaat Platform</b></p><br><br>
                    <h1 style="font-size: 40px">Dapatkan ilmu perternakan yang baik dan bermutu, <br> agar mendapatkan hasil yang sangat memuaskan !</h1><br>
                    <p>Pelajari bagaimana solusi kami menghemat waktu dan uang dalam hal bidang perternakan. </p><br>
                </div>
                <div class="kalender d-flex justify-content-center align-items-center">
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
        <section class="community mt-5">
            <div class="community__box">
                <h2 class="community__subtle">Dipercaya Oleh 900K+ Siswa</h2>
                <h1 class="community__title">Bergabunglah dengan Suporter Kami Komunitas 😊</h1>
                <p class="community__desc">Sebuah komunitas terbentuk untuk satu sama lain membantu dalam mencapai Peternakan yang baik.</p>
                <a href="/course" class="community__cta cta">Lihat Semua</a>
            </div>
            <img src="asset/testimoni 2.png" alt="testimoni" class="community__img">
            <img class="position-absolute end-0 translate-middle-y dikanan" style=" width: 700px" src="../../../asset/Frame 1064.png" alt="">
        </section>
        <section class="sponsor">
            <h1 class="sponsor__title" style="margin-top: 60px">Sponsored by beloved partners</h1>
            <div class="sponsor__logo-box align-items-center">
                <img src="asset/gojek.svg" alt="logo" class="sponsor__logo">
                <img src="asset/farmer-boys.svg" alt="logo" class="sponsor__logo">
                <img src="asset/leo.svg" alt="logo" class="sponsor__logo">
                <img src="asset/state.svg" alt="logo" class="sponsor__logo">
            </div>
        </section>
        
        <section class="course">
            <div class="course__header">
                <div class="course__box">
                    <h4 class="course__subtle">Petani Kelas Dunia</h4>
                    <h3 class="course__title">Learn to advance Indonesian Peternakan</h3>
                    <p class="course__desc">
                    Kelas perternakan adalah solusi terbaik bagi para peternak yang ingin 
                    meningkatkan keterampilannya di bidang perternakan dengan cara yang 
                    menyenangkan, pelajari kelas-kelas yang tersedia dan jadilah ahli!
                    </p>
                </div>
                <a href="" class="course__cta cta">Lihat Kelas Lainnya</a>
            </div>
            
            <div class="course__container">
                <div class="course__card">
                    <img src="asset/testing1.png" alt="" class="course__img">
                    <h1>Pentingnya Penggunaan Teknolgi peternakan</h1>
                    <p>Menambahan wawasan mengenai pentingnya menggunakan teknologi pada peternakan</p>
                    <div class="course__detail">
                        <span>
                            <img src="asset/book.svg" alt="">
                            13 Materi
                        </span>
                        <span>
                            <img src="asset/bookmark.svg" alt="">
                            Fundamental
                        </span>
                    </div>
                    <div class="course__gutter"></div>
                    <div class="course__card-transaksi">
                        <div class="course__harga">
                            <span class="course__harga-coret">Rp125.000</span>
                            <h2 class="course__harga-asli">GRATIS</h2>
                        </div>
                        <a href="" class="course__card-cta cta">Buy Class</a>
                    </div>
                </div>
                
                <div class="course__card">
                    <img src="asset/testing2.svg" alt="" class="course__img">
                    <h1>Monitor Hasil peternakan Menggunakan Teknologi</h1>
                    <p>Memudahkan melihat hasil peternakan dengan menggunakan aplikasi yang terbaik diciptakan oleh anak
                        bangsa</p>
                    <div class="course__detail">
                        <span>
                            <img src="asset/book.svg" alt="">
                            15 Materi
                        </span>
                        <span>
                            <img src="asset/bookmark.svg" alt="">
                            Praktik
                        </span>
                    </div>
                    <div class="course__gutter"></div>
                    <div class="course__card-transaksi">
                        <div class="course__harga">
                            <span class="course__harga-coret">Rp150.000</span>
                            <h2 class="course__harga-asli">GRATIS</h2>
                        </div>
                        <a href="" class="course__card-cta cta">Buy Class</a>
                    </div>
                </div>
                <div class="course__card">
                    <img src="asset/testing3.svg" alt="" class="course__img">
                    <h1>Pupuk Yang Tepat Untuk perkembangan tanaman</h1>
                    <p>Memudahkan melihat hasil peternakan dengan menggunakan aplikasi yang terbaik diciptakan oleh anak
                        bangsa</p>
                    <div class="course__detail">
                        <span>
                            <img src="asset/book.svg" alt="">
                            12 Materi
                        </span>
                        <span>
                            <img src="asset/bookmark.svg" alt="">
                            Fundamental
                        </span>
                    </div>
                    <div class="course__gutter"></div>
                    <div class="course__card-transaksi">
                        <div class="course__harga">
                            <span class="course__harga-coret">Rp110.000</span>
                            <h2 class="course__harga-asli">GRATIS</h2>
                        </div>
                        <a href="" class="course__card-cta cta">Buy Class</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="event">
            <h1 class="event__title">Ready to get started?</h1>
            <p class="event__desc">
                World Class Farming is the best solution for teachers who want to improve their skills in the field of
                agriculture in a fun way, study the available classes
                and become an expert!
            </p>
            <a href="" class="event__cta cta">Bergabunglah secara gratis</a>
        </section>
    </div>

    
    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>