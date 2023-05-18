<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-guru')

            <div class="order-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E; ">Rincian Order</h1>
                <div class="tagBungkus d-flex align-items-center">
                    <p>Order Status</p>
                    <img src="../asset/book.png" class="ms-5" alt="">
                </div>
                <div class="report">
                    <div class="reportData">
                        <div class="headData">
                            <img src="../asset/tasReport.png" alt="logo">
                            <h2>Total Order</h2>
                        </div>
                        <h1>263K</h1>
                    </div>
                    <div class="reportData">
                        <div class="headData">
                            <img src="../asset/orangReport.png" alt="logo">
                            <h2>Total Order</h2>
                        </div>
                        <h1>263K</h1>
                    </div>
                    <div class="reportData">
                        <div class="headData">
                            <img src="../asset/ceklistReport.png" alt="logo">
                            <h2>Total Order</h2>
                        </div>
                        <h1>263K</h1>
                    </div>
                </div>
                <div class="class-subtle dashboard-subtle">
                        Order Status
                </div>
                <div class="tableOrder">
                    <table class="order-table mx-auto">
                        <thead>
                            <tr>
                                <td>#ID</td>
                                <td>Cover</td>
                                <td>Title</td>
                                <td>Class Type</td>
                                <td>Price</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $ord)
                            <tr>
                                <td>{{$ord->id}}</td>
                                <td><img src="../asset/thumbnails/{{$ord->cover}}" class="order-cover"
                                        alt=""></td>
                                <td>{{$ord->title}}</td>
                                <td>
                                    <a href="" class="inbox-idclass">{{$ord->type}}</a>
                                </td>
                                <td>{{$ord->price}}</td>
                                <td>{{$ord->created_at}}</td>
                                <td><span class="bg-warning text-white order-status">{{$ord->status}}</span></td>
                                <td>
                                    <form action="/guruternak/inbox/{{$ord->id}}" method="post">
                                        @csrf
                                        @method('put')
                                        <button class="inbox-invoice cta bg-succes" name="status" value="Verified" type="submit">Confirm</button>
                                    </form>
                                    <form action="/guruternak/inbox/{{$ord->id}}" class="mt-3" method="post">
                                        @csrf
                                        @method('put')
                                        <button class="inbox-invoice cta bg-danger" name="status" value="Rejected" type="submit">Rejected</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
    
                            <!-- <tr>
                                <td>2</td>
                                <td><a href="" class="inbox-idclass">b20</a></td>
                                <td>4</td>
                                <td>
                                    <a href="../asset/bukti-tf2.jpg" target="_blank">
                                        <img src="../asset/bukti-tf2.jpg" alt="" class="inbox-img">
                                    </a>
                                </td>
                                <td>Rp200.000</td>
                                <td>2022-01-16</td>
                                <td><span class="bg-success text-white order-status">success</span></td>
                                <td class="order-action">
                                    <a href="" class="inbox-invoice cta">Invoice</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="" class="inbox-idclass">c30</a></td>
                                <td>6</td>
                                <td>
                                    -
                                </td>
                                <td>Free</td>
                                <td>2022-01-21</td>
                                <td><span class="bg-success text-white order-status">success</span></td>
                                <td class="order-action">
                                    <a href="" class="inbox-invoice cta">Invoice</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="" class="inbox-idclass">d40</a></td>
                                <td>8</td>
                                <td>
                                    <a href="../asset/bukti-tf2.jpg" target="_blank">
                                        <img src="../asset/bukti-tf2.jpg" alt="" class="inbox-img">
                                    </a>
                                </td>
                                <td>Rp200.000</td>
                                <td>2022-01-25</td>
                                <td><span class="bg-danger text-white order-status">cancelled</span></td>
                                <td class="order-action">
                                    <a href="" class="inbox-invoice cta">Delete</a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>