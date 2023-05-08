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
        <div class="eventDetail">
            <div class="coverEvent">
                <img src="/asset/{{$event->image}}" alt="" style="height:900px" class="imageEvent">
                <div class="event-left">
                    <h2>#Acara untuk Dihadiri</h2>
                    <h1>{{$event->judul}}</h1>
                    <p>{{$event->deskripsi}}</p>
                </div>
            </div>

            <div class="eventDesc">
                    <h2>#Acara untuk Dihadiri</h2>
                    <h1>{{$event->judul}}</h1>
                    <p>{{$event->deskripsi}}</p>
            </div>
            <div class="benefitEvent">
                <h2>Benefit {{$event->judul}}</h2>
            </div>

            <div class="containerCardEvent">
                <div class="cardEvent">
                    <div class="titleCardEvent">
                        <h1>1</h1>
                        <h2>Meningkatkan efisiensi produksi</h2>
                    </div>
                    <div class="materiEvent">
                        <p>Dengan menggunakan teknologi, peternak dapat memantau kesehatan dan kondisi hewan mereka secara lebih akurat dan efektif. Dengan informasi yang diperoleh dari teknologi, peternak dapat mengoptimalkan nutrisi, kesehatan, dan keamanan hewan, sehingga dapat meningkatkan efisiensi produksi dan mengurangi biaya.</p>
                    </div>
                </div>
                <div class="cardEvent">
                    <div class="titleCardEvent">
                        <h1>1</h1>
                        <h2>Meningkatkan efisiensi produksi</h2>
                    </div>
                    <div class="materiEvent">
                        <p>Dengan menggunakan teknologi, peternak dapat memantau kesehatan dan kondisi hewan mereka secara lebih akurat dan efektif. Dengan informasi yang diperoleh dari teknologi, peternak dapat mengoptimalkan nutrisi, kesehatan, dan keamanan hewan, sehingga dapat meningkatkan efisiensi produksi dan mengurangi biaya.</p>
                    </div>
                </div>
                <div class="cardEvent">
                    <div class="titleCardEvent">
                        <h1>1</h1>
                        <h2>Meningkatkan efisiensi produksi</h2>
                    </div>
                    <div class="materiEvent">
                        <p>Dengan menggunakan teknologi, peternak dapat memantau kesehatan dan kondisi hewan mereka secara lebih akurat dan efektif. Dengan informasi yang diperoleh dari teknologi, peternak dapat mengoptimalkan nutrisi, kesehatan, dan keamanan hewan, sehingga dapat meningkatkan efisiensi produksi dan mengurangi biaya.</p>
                    </div>
                </div>
                <div class="cardEvent">
                    <div class="titleCardEvent">
                        <h1>1</h1>
                        <h2>Meningkatkan efisiensi produksi</h2>
                    </div>
                    <div class="materiEvent">
                        <p>Dengan menggunakan teknologi, peternak dapat memantau kesehatan dan kondisi hewan mereka secara lebih akurat dan efektif. Dengan informasi yang diperoleh dari teknologi, peternak dapat mengoptimalkan nutrisi, kesehatan, dan keamanan hewan, sehingga dapat meningkatkan efisiensi produksi dan mengurangi biaya.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <p style="color:yellow"><b>MENGAPA BERGABUNG DENGAN KAMI ?</b></p>
                    <h1 class="mt-5 pb-5" style="font-size: 52px">Grow together with the community</h1>
                </div>
                <div class="kalender mt-5">
                        <div class="leftInfo">
                            <img src="../asset/kalender.png" alt="kalender" srcset="">
                        </div>
                        <div class="rightInfo ms-5">
                            <div class="info">
                                <div class="moreInfo">
                                    <div class="infoImage d-flex mb-5 align-items-center">
                                        <img src="../asset/lampu.png" class="me-5" alt="lampu">
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
                                        <img src="../asset/produktifitas.png" class="me-5" alt="produktifitas">
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
                                        <img src="../asset/toga.png" class="me-5" alt="toga">
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
        </div>
        
        @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>