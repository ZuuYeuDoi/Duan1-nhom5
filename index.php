<?php
ini_set(option: 'display_errors', value: 1);
ini_set(option: 'display_startup_errors', value: 1);
error_reporting(error_level: E_ALL);
ob_start();
session_start();
include './model/pdo.php';
include './model/product.php';
include './model/taikhoan.php';
include 'view/header.php';
include './model/cart.php';


//giỏ hàng- SECTION lưu dữ liệu
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'login':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)) {

                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);

                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;

                    // Lưu vai trò vào session
                    $_SESSION['role'] = $checkuser['role']; // Giả sử trường 'role' có trong cơ sở dữ liệu

                    $_SESSION['success'] = "";
                    header('location:index.php?act=trangchu');
                    exit(); // Đảm bảo dừng script
                } else {
                    $_SESSION['error'] = "Tên đăng nhập hoặc mật khẩu không đúng.";
                }
            }
            include './view/dkdn/login.php';
            break;
        case 'register':

            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                $email = $_POST['email'];
                $ten = $_POST['user'];
                $matkhau = $_POST['pass'];
                $address = $_POST['addr'];
                $sdt = $_POST['phone'];
                $role = 0;
                pdo_dangky_taikhoan($email, $matkhau, $ten, $sdt, $address);
                $_SESSION['success'] = "";

                  // Sau khi đăng ký, lấy thông tin user mới
                $userInfo = pdo_get_user_info($conn->lastInsertId()); // Lấy thông tin từ ID mới đăng ký
                $_SESSION['user'] = $userInfo; // Lưu thông tin user vào session

            }
            include './view/dkdn/register.php';
            break;
        case 'trangchu':
            $listsanpham = GetAllProduct();
            include './view/home.php';

            break;

        case 'logout':
            session_unset();
            header("Location:index.php?act=trangchu"); // Hoặc trang chủ index.php
            break;

        case 'search':
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'] > 0)) {
                $id_sp = $_POST['id_sp'];
                $tensp = $_POST['tensp'];
                $giamgia = $_POST['giamgia'];
                $anhsp = $_POST['anhsp'];
                $soluong = 1;
                $ttien = $soluong * $giamgia;
                $spadd = [$id_sp, $tensp, $anhsp, $giamgia, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
        case 'viewcart':
            include './view/cart/viewcart.php';
            break;
        
            case 'delcart':
                if (isset($_GET['idcart'])) {
                    // Xóa sản phẩm dựa trên chỉ số
                    unset($_SESSION['mycart'][$_GET['idcart']]);
                    // Đánh lại chỉ số mảng
                    $_SESSION['mycart'] = array_values($_SESSION['mycart']);
                } else {
                    // Nếu không có idcart, xóa toàn bộ giỏ hàng
                    $_SESSION['mycart'] = [];
                }
                // Chuyển hướng về trang giỏ hàng
                if (!headers_sent()) {
                    header('Location: index.php?act=viewcart');
                    exit;
                }
                break;


        case 'gioithieu':
            include './view/page/gioithieu.php';

            break;
        case 'ruouvang':
            $listsanpham = GetAllProduct();
            include './view/page/ruouvang.php';

            break;
        case 'ruoumanh':
            $listsanpham = GetAllProduct();
            include './view/page/ruoumanh.php';

            break;
        case 'lienhe':
                
                include './view/page/lienhe.php';
    
                break;

        case 'bill':
            include './view/cart/bill.php';

            break;
        
        case 'billconfirm':
                // Tạo đơn hàng
                // if (isset($_POST['btn_dathang']) && ($_POST['btn_dathang'])) {
                //     $name = $_POST['name'];
                //     $addr = $_POST['addr'];
                //     $phone = $_POST['phone'];
                //     $pttt = $_POST['httt_ma'];
                //     $email = $_POST['email'];
                //     $ngaydathang = date('h:i:sa d/m/y');
                //     $tongbill = tongbill();
            
                //     // Insert đơn hàng vào bảng "don_hang" và lấy id của đơn hàng vừa tạo
                //     $idbill = insert_bill($name, $addr, $pttt, $phone, $ngaydathang, $tongbill);
            
                //     // Kiểm tra nếu $idbill không null
                //     if ($idbill) {
                //         // Insert các sản phẩm vào bảng "chi_tiet_don_hang"
                //         foreach ($_SESSION['mycart'] as $cart) {
                //             insert_cart($_SESSION['user']['id'], $cart[0], $idbill, $cart[4], $cart[5], $cart[2], $cart[1], $cart[3]);
                //         }
                //     } else {
                //         // Thông báo lỗi nếu không tạo được đơn hàng
                //         $_SESSION['error'] = "Lỗi tạo đơn hàng!";
                //     }
                // }
            
                // // Lấy thông tin hóa đơn vừa tạo
                // if (isset($idbill)) {
                //     $listbill = loadone_bill($idbill);
                //     include './view/cart/billconfirm.php';
                // } else {
                //     $_SESSION['error'] = "Không tìm thấy hóa đơn!";
                //     // header('Location: index.php?act=trangchu');
                //     exit();
                // }

            include './view/cart/billconfirm.php';

            break;
            
        default:
            header('location:index.php?act=trangchu');
            break;
            
    }
} else {
    header('location:index.php?act=trangchu');
}
// include 'view/home.php';

include 'view/footer.php';
