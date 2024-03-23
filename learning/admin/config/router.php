<?php

$act = $_GET['act'] ?? '';

echo $act;
if (!empty ($act)) {
    switch ($act) {
        case "sanpham":
            $page = $_GET['page'] ?? '';
            $id = $_GET['id'] ?? '';
            if (!empty ($page) && $page === 'them') {
                if(sizeof($_POST) === 0){
                    require 'modules/sanpham/form.php';
                }else{
                    //b0 kiểm tra dữ liệu
                    //b1 sửa dữ liệu
                    //b2 header location dah sách
                }
            } else if (!empty ($page) && $page === 'sua' && !empty ($id)) {
                echo "load giao diện sửa sp";
                if(sizeof($_POST) === 0){
                    require 'modules/sanpham/form.php';
                }else{
                    //b0 kiểm tra dữ liệu
                    //b1 sửa dữ liệu
                    //b2 header location dah sách
                }

            } else if (!empty ($page) && $page === 'xoa' && !empty ($id)) {
                echo "load giao diện xoá sp";
            }else{
                require 'modules/sanpham/index.php';
            }

            break;
        case "baiviet":
            echo "Load module bài viết";
            break;

        case "donhang":
            echo "Load module đơn hàng";
            break;

        case "nguoidung":
            echo "Load module người dùng";
            break;

        default:
            echo "Lỗi 404";
            break;
    }
} else {
    // báo cáo
    echo "load trang dashboard";
}



// include "modules/sanpham/index.php";
