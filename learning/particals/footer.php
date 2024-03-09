</main>
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <!-- ul.menu-footer>li*5>a -->
                <ul class="menu-footer">
                    <li><a href="">Về chúng tôi</a></li>
                    <li><a href="">Hồ sơ năng lực</a></li>
                    <li><a href="">Liên hệ</a></li>
                    <li><a href="">Tìm hiểu về trả góp</a></li>
                    <li><a href="">Xem thêm</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <ul class="menu-footer">
                    <li><a href="">Chính sách bảo hành</a></li>
                    <li><a href="">Chính sách đổi trả</a></li>
                    <li><a href="">Chính sách bảo mật</a></li>
                    <li><a href="">Chính sách giao hàng</a></li>
                    <li><a href="">Xem thêm</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <!-- //fanpage facebook plugin -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15717.7648917924!2d105.74759854999999!3d9.9803641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1709816225041!5m2!1svi!2s" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">

            </div>
            <div class="col-12 text-center">
                © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
                Địa chỉ: 128 Trần Quang Khải, P.Tân Định, Q.1, TP.Hồ Chí Minh. Địa chỉ liên hệ và gửi chứng từ: Lô T2-1.2, Đường D1, Đ. D1, P.Tân Phú, TP.Thủ Đức, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Email: Tot.huynhvan@thegioididong.com. Xem chính sách sử dụng
            </div>

        </div>
    </div>
</footer>

<?php include 'action-buttons.php' ;?>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="./assets/js/jquery-3.7.1.min.js"></script>

<script type="text/javascript" src="./assets/slick-1.8.1/slick/slick.min.js"></script>

<script>
    jQuery(document).ready(function($) {
        $('.related-product').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 500,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    })


    
</script>

</body>

</html>