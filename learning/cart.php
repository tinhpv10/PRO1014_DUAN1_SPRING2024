<?php include "particals/header.php"; ?>

<section class="cart py-5">
    <div class="container">
        <h1 class="title">
            Giỏ hàng
        </h1>

        <div class="row">
            <!-- .col-*, .col-sm-*, .col-md-*, .col-lg-*, .col-xl-*, .col-xxl-* -->
            <div class="col-12 col-lg-7 col-xl-8">

                <div class="card">
                    <div class="card-header">
                        Giỏ hàng
                    </div>
                    <div class="table-responsive">
                        <table class="table caption-top">

                            <thead>
                                <tr>
                                    <!-- Học lại xây dựng trang web -->
                                    <th scope="col" colspan="3">Sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Tạm tính</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 2; $i++) : ?>
                                    <tr>
                                        <th scope="row"><button class="btn rounded-circle btn-danger"><i class="bi bi-trash3-fill"></i></button></th>
                                        <td>
                                            <img src="https://th.bing.com/th/id/OIP.hpDNbPu5XVeX0VKJGKdybQHaFj?w=274&h=205&c=7&r=0&o=5&dpr=1.1&pid=1.7" height="50" alt="">
                                        </td>
                                        <td>
                                            <a href="" target="_blank">Điện thoại Iphone 17 ProMax 127GB</a>
                                        </td>
                                        <td><ins>7.000.000đ</ins> <br> <del>90.000.000đ</del></td>
                                        <td>
                                            <div class="input-group input-cart mb-3">
                                                <button class="btn btn-outline-secondary" type="button">-</button>
                                                <input type="number" value="1" min="1" class="form-control" placeholder="" aria-label="Example text with two button addons">
                                                <button class="btn btn-outline-secondary" type="button">+</button>
                                            </div>
                                        </td>
                                        <td>
                                            <ins>7.000.000đ</ins>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Vui lòng nhập voucher" aria-label="Vui lòng nhập voucher" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Apply voucher</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="table-responsive">
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

                    <button class="btn btn-primary">Tiến hành thanh toán</button>
                </div>

            </div>
        </div>



    </div>
</section>



<?php include "particals/footer.php"; ?>