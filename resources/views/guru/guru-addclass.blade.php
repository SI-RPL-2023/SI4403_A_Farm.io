<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard addclass">
            @include('partial.sidebar-guru')
            <div class="addclass-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E;" >Tambah Kelas</h1>
                <div class="tagBungkus d-flex align-items-center">
                    <p>Tambah</p>
                    <img src="../asset/security.png" class="ms-5" alt="">
                </div>
                <div class="class-subtle dashboard-subtle">
                        <img src="../asset/edit.svg" alt="">
                        Tambah Kelas
                </div>
                <form action="{{route('course.store')}}" class="dashboard-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="addclass-subtle dashboard-subtle">
                        <img src="../asset/edit.svg" alt="">
                        Tambah Kelas
                    </div>

                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="title">Course Title</label>
                        <input class="w-100" type="text" name="title" id="title" value="" placeholder="Enter course title" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="title">skillLevel</label>
                        <input class="w-100" type="text" name="skillLevel" id="title" value="" placeholder="Enter Skill Level"
                            required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="description">Course Description</label>
                        <textarea name="description" class="" id="description" cols="30" rows="10"></textarea>
                        <!-- <input type="text" name="description" id="description" value=""
                            placeholder="Enter course description" required> -->
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="harga">Course Price</label>
                        <input class="w-100" type="number" name="price" id="harga" min="0" max='200000' value=""
                            placeholder="Enter course price" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="course-vid">Course Video</label>
                        <input type="text" name="video" id="course-vid" placeholder="Enter Link Video" class="w-100"
                            class="setting-edit-photo" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="thumbnail">Thumbnail</label>
                        <img class="img-preview img-fluid mb-3 col-md-5">
                        <input type="file" name="thumbnail" id="thumbnail" class="addclass-video" class=""
                            accept="image/*" class="setting-edit-photo" required onchange="previewImage()">
                    </div>
                    <!-- tombol submit -->
                    <button class="addclass-cta cta" type="submit">Submit</button>
                </form>
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // for preview image
    function previewImage() {
        const image = document.querySelector("#thumbnail");
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    </script>
</body>

</html>