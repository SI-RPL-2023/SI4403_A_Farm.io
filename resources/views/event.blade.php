<!DOCTYPE html>
<html lang="en">
@include('partial.header')
<style>
    body {
        background-color: #2B2B2B
    }

    .jumbotron {
        padding-top: 5%;
    }

    h1 {
        font-size: 55px;
        font-family: inter;
        font-weight: 600;
    }

    p {
        font-size: 16px;
        font-family: inter;
        color: #D5D5D5;
    }

    button {
        margin-top: 4%;
        margin-right: 4%;
        font-style: bold;
    }

    .fitur {
        padding-top: 5%;
    }

    .manfaat {
        padding-top: 5%
    }
</style>

<body>

    <div class="app">
        @include('partial.navbar')
        <div>
        <img class="position-absolute bottom-0 end-0" style=" width: 400px; z-index:-1;" src="../../../asset/titik1.png" alt="">
        <img class="position-absolute top-100 ml-5 start-0 translate-middle-y" style=" width: 700px;z-index:-1" src="../../../asset/Frame 1063.png" alt="">
        </div>
        <section class="jumbotron mb-5" >
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
                <form action="" method="" class="course-input-box mt-5">
                    <img src="asset/search.png" alt="">
                    <input type="text" class="course-input" name="search" value="" autocomplete="off" placeholder="Search course">
                </form>
            </div>
        </section>
        <section class="fitur">

            <div class="container d-flex pb-5">
                <div>

                    <h1 class="justify-start" style="font-size: 60px">Our Upcoming Events </h1>
                </div>
            </div>
            <div class="d-flex align-content-center justify-content-center">
                <div class="nav__box">
                    <a href="" class="HE">All</a>
                    <a href="" class="HE">Webinar</a>
                    <a href="" class="HE">Product</a>
                    <a href="" class="HE">Other</a>
                </div>
            </div>
            <div class="container course-content mt-5">
                @foreach($Event as $data)
                <div class="course__card">
                                <img src="/asset/{{$data->image}}" alt="image" style="height: 200px; width:330px" class="">
                                <h1>{{ Str::limit($data->judul, 25) }}</h1>
                                <p>{{ Str::limit($data->deskripsi, 30) }}</p>
                                <div class="course__card-transaksi d-flex justify-content-between">
                                    <div class="course__harga">
                                        <p class="">{{$data->tipe_event}}</p>
                                        <p class="">{{$data->tanggal}}</p>
                                        <!-- <h2 class="course__harga-asli">Rp{{ $data->price }}</h2> -->
                                    </div>
                                    <div class="course__cardButton">
                                        <a href="/event-detail/{{ $data->id }}" class="course__card-cta cta"><b>Detail</b></a>
                                        <!-- <a href="/course/{{ $data->id }}" class="course__card-cta  course__card-cta-secondary cta">Detail Class</a> -->
                                    </div>
                                </div>
                            </div>
                @endforeach
            </div>
    </div>
        @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>