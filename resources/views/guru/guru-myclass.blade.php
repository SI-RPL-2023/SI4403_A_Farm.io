<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-guru')

            <div class="class-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E;">Kelas yang tersedia</h1>
                <div class="tagBungkus d-flex align-items-center">
                    <p>Kelas yang dimiliki</p>
                    <img src="../asset/coin.png" class="ms-5" alt="">
                </div>
                <div class="class-subtle dashboard-subtle">
                    Kelas yang dimiliki
                </div>

                <div class="class-container dashboard__guru-myclass">
                    @foreach ($course as $ord)
                    <div class="course__card dashboard__guru-myclass-card">
                        <img src="../asset/thumbnails/{{$ord->thumbnail}}" alt="thumbnail" class="course__img">
                        <h1>{{Str::limit($ord->title, 25)}}</h1>
                        <p>{{Str::limit($ord->description, 30)}}</p>
                        <div class="course__gutter"></div>
                        <div class="course__card-transaksi dashboard__guru-transaksi">
                            <div class="course__harga">
                                <span class="course__harga-coret">Rp100000</span>
                                <h2 class="course__harga-asli">Rp{{$ord->price}}</h2>
                            </div>
                            <a href="/guruternak/editclass/{{ $ord->id }}" class="course__card-cta cta">Edit</a>
                            <form action="/guruternak/myclass/{{ $ord->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="course__card-cta dahsboard__guru-delete cta" type="button"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{$ord->id}}">Delete</button>
                                
                                    <div class="modal fade" id="deleteModal{{$ord->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bugkusModal bg-white p-5 text-center rounded-4 mt-5">
                                                <img src="../asset/warning-2.png" alt="warning" style="width: 200px; margin:auto;">
                                                <h1 class="my-5">Apakah Anda Ingin Melakukkan Penghapusan kelas</h1>
                                                <div class="modalFooter d-flex justify-content-center align-items-center">
                                                    <button  type="submit" class="addclass-cta cta me-5">Hapus</button>
                                                    <button type="button" class="btn bg-white cta" data-bs-dismiss="modal" >Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>