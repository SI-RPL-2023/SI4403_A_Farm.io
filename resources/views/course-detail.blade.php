<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>

<style>
    #hide{
        display: none !important;
    }
</style>
    <div class="app">
        @include('partial.navbar')

        <div class="headerDetail">
            <p class="courseDetail">Course Detail</p>
            <h3 class="titleDetail">{{ $course->title }}</h3>
            <p class="hasilDetail">{{ $course->description }}</p>
        </div>
        <div class="bungkusVid d-flex flex-row justify-content-around align-items-center">
            <div class="feature-course">
                <h1>Courses Features</h1>
                <div class="course-detail-feature mt-5">
                    <div>
                        <span>Skill Level</span>
                        <span>{{ $course->skillLevel }}</span>
                    </div>
                    <div>
                        <span>Instructur</span>
                        <span>{{ $username }}</span>
                    </div>
                    <div>
                        <span>Type</span>
                        <span>{{ $course->type }}</span>
                    </div>
                    <div>
                        <span>Rating</span>
                        <span class="course-detail-price">4</span>
                    </div>
                    <div>
                        <span>Price</span>
                        <span class="course-detail-price">Rp. {{ $course->price }}</span>
                    </div>
                    @if(auth()->check() && auth()->user()->role === "gurutani" )
                    @else
                    <a href="/checkout/{{$course->id}}" class="course-detail-cta cta w-50 mx-auto">Enroll Now</a>
                    @endif
                </div>
            </div>
            <div class="video">
                <img class="position-absolute top-100 ml-5 start-0 translate-middle-y" style=" width: 700px;z-index: -999;" src="../../../asset/Frame 1063.png" alt="">
                <div class="col rounded-5 p-5 border w-100 bg-light bg-opacity-25" style='backdrop-filter: blur(10px);'>
                    <iframe class="header__preview header__course-preview" width="863" height="500"
                        src="{{ $course->video }}">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="headerDetail">
            <h3 class="titleDetail">{{ $course->title }}</h3>
            <p class="hasilDetail">{{ $course->description }}</p>
            <p class="courseDetail">Related Course</p>
        </div>
        
        <div class="related">
            <div class="course-content">
                        
                            <div class="course__card">
                                <img src="{{isset($courseother) ? '../../../asset/thumbnails/'.$courseother->thumbnail : '../../../asset/3q2rJvGWV5W4AzF7ydhEj4-1200-80.jpg'}}" alt="image" class="course__img">
                                <h1>{{isset($courseother) ? $courseother->title : 'no course'}}</h1>
                                <p>{{ Str::limit(isset($courseother) ? $courseother->description : '',25)}}</p>
                                <div class="course__detail">
                                    <span>
                                        <img src="asset/book.svg" alt="">
                                        {{isset($courseother) ? '13 Materi' : ''}}
                                    </span>
                                    <span>
                                        <img src="asset/bookmark.svg" alt="">
                                        {{isset($courseother) ? $courseother->skillLevel : ''}}
                                    </span>
                                </div>
                                <div class="course__gutter"></div>
                                <div class="course__card-transaksi d-flex justify-content-between">
                                    <div class="course__harga">
                                    {{isset($courseother) ? $discount= $courseother->price*120/100 : ''}}
                                        <p class="course__harga-coret">{{isset($courseother) ?'Rp'. $discount : ''}}</p>
                                        <h2 class="course__harga-asli">{{isset($courseother) ?'Rp'. $courseother->price : ''}}</h2>
                                    </div>
                                    <div class="course__cardButton">
                                        <a href="{{ isset($courseother) ? '/checkout/'.$courseother->id : '' }}" id="{{isset($courseother) ? '' : 'hide'}}" class="course__card-cta cta me-2"><b>Beli Kelas</b></a>
                                        <a href="{{ isset($courseother) ? '/course/'.$courseother->id : '' }}" id="{{isset($courseother) ? '' : 'hide'}}" class="course__card-cta  course__card-cta-secondary cta">Detail Class</a>
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