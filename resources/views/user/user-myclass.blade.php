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
                <p>Kelas yang tersedia</p>
                <div class="class-subtle dashboard-subtle">
                    <img src="../asset/edit.svg" alt="">
                    Kelas Saya
                </div>

                <div class="class-container">
                    
                    
                    <div class="class-card">
                        <img src="asset('storage/thumbnails/products/'. $ord->cover)" alt="">
                        <h1>$ord->title</h1>
                        <p>$ord->created_at</p>
                        <a href="/course-video" class="class-cta cta">Start Learn</a>
                    </div>
                    <div class="class-card">
                        <img src="asset('storage/thumbnails/products/'. $ord->cover)" alt="">
                        <h1>$ord->title</h1>
                        <p>$ord->created_at</p>
                        <a href="/course-video" class="class-cta cta">Start Learn</a>
                    </div>
                    <div class="class-card">
                        <img src="asset('storage/thumbnails/products/'. $ord->cover)" alt="">
                        <h1>$ord->title</h1>
                        <p>$ord->created_at</p>
                        <a href="/course-video" class="class-cta cta">Start Learn</a>
                    </div>
                    

                </div>

            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>