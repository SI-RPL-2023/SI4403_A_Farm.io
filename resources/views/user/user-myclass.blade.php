<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-user')

            <div class="class-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E; ">Kelas Saya</h1>
                <div class="titleVideo d-flex align-items-center">
                    <p>Kelas yang tersedia</p>
                    <img src="../../../asset/coin.png" alt="" class="ms-4">
                </div>
                <div class="class-subtle dashboard-subtle">
                    <img src="../asset/edit.svg" alt="">
                    Kelas Saya
                </div>

                <div class="class-container">
                    @foreach ($order as $ord)
                    @if($ord->status == "Verified")

                    <div class="class-card">
                        <img src="../asset/thumbnails/{{$ord->thumbnail}}" alt="">
                        <h1>{{$ord->title}}</h1>
                        <p>{{$ord->created_at}}</p>
                        <a href="/course-video" class="class-cta cta">Start Learn</a>
                    </div>
                    @endif
                    @endforeach

                </div>

            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>