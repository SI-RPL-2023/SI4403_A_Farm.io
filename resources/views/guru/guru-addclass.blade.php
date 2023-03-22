<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard addclass">
            @include('partial.sidebar-guru')

            <div class="addclass-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E;" >Add Course</h1>
                <p>Add a new course and get paid from what you thought</p>
                <form action="/gurutani/addclass" class="dashboard-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="addclass-subtle dashboard-subtle">
                        <img src="../asset/edit.svg" alt="">
                        Add Course
                    </div>

                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="title">Course Title</label>
                        <input type="text" name="title" id="title" value="" placeholder="Enter course title" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="title">skillLevel</label>
                        <input type="text" name="skillLevel" id="title" value="" placeholder="Enter Skill Level"
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
                        <input type="number" name="price" id="harga" min="0" max='200000' value=""
                            placeholder="Enter course price" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="course-vid">Course Video</label>
                        <input type="file" name="video" id="course-vid" class="addclass-video" class=""
                            class="setting-edit-photo" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="course-vid">Thumbnail</label>
                        <input type="file" name="thumbnail" id="course-vid" class="addclass-video" class=""
                            accept="image/*" class="setting-edit-photo" required>
                    </div>
                    <button class="addclass-cta cta" type="submit">Submit</button>
                </form>
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>