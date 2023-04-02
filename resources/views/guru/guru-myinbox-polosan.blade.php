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
                                <td>Title</td>
                                <td>Class Type</td>
                                <td>Price</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                <a href="../asset/bukti-tf.jpg" target="_blank">
                                    <img src="../asset/bukti-tf.jpg" alt="" class="inbox-img">
                                </a>
                                </td>
                                <td>3</td>
                                <td>
                                    <a href="" class="inbox-idclass">a10</a>
                                </td>
                                <td>Rp123123</td>
                                <td>tanggal</td>
                                <td><span class="bg-warning text-white order-status">Status</span></td>
                                <td class="order-action">
                                    <form action="/gurutani/inbox/parameter" method="post">
                                        @csrf
                                        @method('put')
                                        <button class="inbox-invoice cta bg-succes" name="Verified" type="submit">Confirm</button>
                                    </form>
                                    <form action="/gurutani/inbox/parameter" method="post">
                                        @csrf
                                        @method('put')
                                        <button class="inbox-invoice cta bg-danger" name="Rejected" type="submit">Rejected</button>
                                    </form>
                                </td>
                            </tr>
    
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