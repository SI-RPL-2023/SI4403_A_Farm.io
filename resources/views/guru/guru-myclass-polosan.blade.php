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
                <p>Kelas yang dimiliki</p>

                <div class="class-container dashboard__guru-myclass">
                    <div class="course__card dashboard__guru-myclass-card">
                        <img src="../asset/contoh_aset.svg" alt="thumbnail"
                            class="course__img">
                        <h1>title</h1>
                        <p>description</p>
                        <div class="course__gutter"></div>
                        <div class="course__card-transaksi dashboard__guru-transaksi">
                            <div class="course__harga">
                                <span class="course__harga-coret">Rp100000</span>
                                <h2 class="course__harga-asli">Rp123123123123</h2>
                            </div>
                            <a href="/gurutani/editclass" class="course__card-cta cta">Edit</a>
                            <form action="/gurutani/myclass/parameter" method="post">
                                @csrf
                                @method('delete')
                                <button class="course__card-cta dahsboard__guru-delete cta" type="submit"
                                    onclick="return confirm('yakin untuk menghapus course')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>