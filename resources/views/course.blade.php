<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <header class="course-header d-flex">
            <div class="course-left">
                <h2>#LearnFromExpert</h2>
                <h1>Learning to farm online has never been easier!</h1>
                <p>We try to always make it easy for farmers in Indonesia to be able to access learning about the world of
                    farming</p>
            </div>
            <div class="course-right">
                <img class="position-absolute bottom-0 end-0" style=" width: 400px" src="../../../asset/titik1.png" alt="">
                <img class="position-absolute top-100 ml-5 start-0 translate-middle-y" style=" width: 700px; z-index:-1;" src="../../../asset/Frame 1063.png" alt="">
                <div class="col">
                    <div>
                        <img src="asset/embe.png" alt="">
                    </div>
                </div>
            </div>
        </header>
        <section class="course-container">

            <div class="course-box">
                <div class="course-sideFilter">
                    <div class="course-type">
                        <h2>Type</h2>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="starter" name="starter" id="starter">
                            <label class="form-check-label" for="starter">Starter (Rp 0)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="freemium" name="freemium"
                                id="freemium">
                            <label class="form-check-label" for="freemium">Freemium (Rp 0)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="premium" name="premium" id="premium">
                            <label class="form-check-label" for="premium">Premium</label>
                        </div>
                    </div>
                </div>
                <div class="course__search">
                    <form action="/courses" method="" class="course-input-box mb-5">
                        <img src="asset/search.png" alt="">
                        <input type="text" class="course-input" name="search" value="{{ request('search') }}" autocomplete="off"
                            placeholder="Search course">
                    </form>
                    <div class="course-content">
                        @foreach ($course as $crs)
                            <div class="course__card">
                                <img src="../asset/thumbnails/{{$crs->thumbnail}}" alt="image" class="course__img">
                                <h1>{{ Str::limit($crs->title, 25) }}</h1>
                                <p>{{ Str::limit($crs->description, 30) }}</p>
                                <div class="course__detail">
                                    <span>
                                        <img src="../../asset/book.svg" alt="">
                                        13 Materi
                                    </span>
                                    <span>
                                        <img src="asset/bookmark.svg" alt="">
                                        Fundamental
                                    </span>
                                </div>
                                <div class="course__gutter"></div>
                                <div class="course__card-transaksi d-flex justify-content-between">
                                    <div class="course__harga">
                                        {{$discount= $crs->price*120/100}}
                                        <p class="course__harga-coret">Rp{{ $discount }}</p>
                                        <h2 class="course__harga-asli">Rp{{ $crs->price }}</h2>
                                    </div>
                                    <div class="course__cardButton">
                                        <a href="/checkout/{{ $crs->id }}" class="course__card-cta cta me-2"><b>Beli Kelas</b></a>
                                        <a href="/course/{{ $crs->id }}" class="course__card-cta  course__card-cta-secondary cta">Detail Class</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        @include('partial.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>