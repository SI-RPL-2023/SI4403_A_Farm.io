<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-user')

            <div class="class-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E; ">Mulai Belajar</h1>
                <div class="titleVideo d-flex align-items-center">
                    <p>{{$course->title}}</p>
                    <img src="../../../asset/book.png" alt="" class="ms-4">
                </div>
                <div class="class-subtle dashboard-subtle">
                    Kelas Saya
                </div>

                <div class="class-container">
                    <div class="video-left">
                        <div class="persiapanKelas">
                            <div class="button-persiapan d-flex align-items-center">
                                <img src="../../../asset/burger_open.png" alt="" class="logo-bar me-5">
                                <h1>Persiapan Kelas</h1>
                            </div>
                            <a href="" class="videoButton btn btn">
                                <img src="../../../asset/orangorang.png" alt="" class="logo-bar">
                                <h1>Join Group Kelas</h1>
                            </a>
                            <a href="" class="videoButton btn btn">
                                <img src="../../../asset/Download.png" alt="" class="logo-bar">
                                <h1>Download Materi</h1>
                            </a>
                        </div>
                        <div class="kelasLain">
                            <h1>kelas lain yang anda punya</h1>
                            <div class="course-content mb-5">
                                
                                    <div class="course__card p-5">
                                    <img src="{{isset($courseother) ? '../../../asset/thumbnails/'.$courseother->cover : '../../../asset/3q2rJvGWV5W4AzF7ydhEj4-1200-80.jpg'}}" alt="image" class="course__img align-items-center">
                                        <h1 class="my-3">{{isset($courseother) ? $courseother->title : 'no class'}}</h1>
                                        <div class="aksesSelamanya d-flex align-items-center">
                                            <img src="../../../asset/success.png" alt="" class="me-3">
                                            <p style="font-size: 20px;">{{isset($courseother) ? 'Premium' : ''}}</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-right w-100">
                        <iframe class="w-100 " style="border-radius: 10px;;"height="439" src="{{$course->video}}" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen style="background-color: #fff">
                        </iframe>
                        <h1></h1>
                    </div>

                </div>

            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>