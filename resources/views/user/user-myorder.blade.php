<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-user')

            <div class="order-box dashboard-box">
                <h1 style="text-decoration: underline;text-decoration-color: #C5D22E; ">Rincian Order</h1>
                <p>Order Status</p>
                <div class="class-subtle dashboard-subtle">
                    <img src="../asset/edit.svg" alt="">
                    Order Status
                </div>
                <div class="tableOrder">
                    <table class="order-table mx-auto">
                        <thead>
                            <tr>
                                <td>#ID</td>
                                <td>Cover</td>
                                <td>Name</td>
                                <td>Type</td>
                                <td>Price</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $ord)
                            <tr>
                                <td>1</td>
                                <td><img src="asset('storage/thumbnails/products/'. {{$ord->cover}})" class="order-cover"
                                        alt=""></td>
                                <td class="order-name">{{$ord->title}}</td>
                                <td>{{$ord->type}}</td>
                                <td>{{$ord->price}}</td>
                                <td>{{$ord->created_at}}</td>
                                <td><span class="bg-warning text-white order-status">{{$ord->status}}</span></td>
                                <td class="order-action">
                                    
                                    <a href="" class="order-action-cta order-action-cta-secondary cta">Detail class</a>
                                </td>
                            </tr>
                            @endforeach
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