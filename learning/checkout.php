<?php
require_once './variable.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if(sizeof($_POST) > 0){
    //xử lý việc đặt hàng

    require_once "./heplers/mail.php";
}


include "particals/header.php"; ?>

<section class="checkout py-5">
    <div class="container">
        <h1 class="title mb-4">Thanh toán</h1>
        <form class="row" method="POST" action="" id="checkoutForm">
            <div class="col-12 col-lg-7 col-xl-6">
                <div class="card">
                    <div class="card-header">Thông tin giao hàng</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" value="tinhpv10@fe.edu.vn" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input type="text" value="Phan Văn Tính" class="form-control" name="fullname" id="fullname" placeholder="name@example.com">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        Thông tin đơn hàng
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Ghi chú đơn hàng</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">Iphone 17 ProMax 128gB </td>
                                <td>70.000.000đ (x2)</td>
                            </tr>

                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">Tạm tính: </td>
                                <td>70.000.000đ</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Phí vận chuyển: </td>
                                <td>10.000đ</td>
                            </tr>
                            <tr class="">
                                <td scope="row">VAT: </td>
                                <td>7.000.000đ (10%)</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card-body">
                    <h3 class="title">Phương thức thanh toán</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            COD
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            VNPay
                        </label>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thanh toán</button>
                </div>
            </div>
        </form>
    </div>
</section>


<?php include "particals/footer.php"; ?>