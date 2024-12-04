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

//     echo '<pre>';
// print_r($chiTiet);
//     echo '</pre>';

// if (isset($_POST['btn_dathang'])) {
//     echo '<pre>';
//     print_r($_POST);  // In ra thông tin từ form
//     echo '</pre>';
// }

// echo '<pre>';
// print_r($_SESSION['mycart']);  
// echo '</pre>';

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
            // case 'register':

            //     if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
            //         $email = $_POST['email'];
            //         $ten = $_POST['user'];
            //         $matkhau = $_POST['pass'];
            //         $address = $_POST['addr'];
            //         $sdt = $_POST['phone'];
            //         $role = 0;
            //         pdo_dangky_taikhoan($email, $matkhau, $ten, $sdt, $address);
            //         $_SESSION['success'] = "";

            //           // Sau khi đăng ký, lấy thông tin user mới
            //         $userInfo = pdo_get_user_info($conn->lastInsertId()); // Lấy thông tin từ ID mới đăng ký
            //         $_SESSION['user'] = $userInfo; // Lưu thông tin user vào session

            //     }
            //     include './view/dkdn/register.php';
            //     break;

        case 'register':
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                $email = $_POST['email'];
                $ten = $_POST['user'];
                $matkhau = $_POST['pass'];
                $address = $_POST['addr'];
                $sdt = $_POST['phone'];

                // Đăng ký tài khoản và nhận ID của tài khoản mới
                $userId = pdo_dangky_taikhoan_user($email, $matkhau, $ten, $sdt, $address);

                if ($userId) {
                    // Lấy thông tin user mới dựa vào ID
                    $userInfo = pdo_get_user_info($userId);
                    $_SESSION['user'] = $userInfo; // Lưu thông tin user vào session
                    $_SESSION['success'] = "Đăng ký thành công!";
                } else {
                    $_SESSION['error'] = "Đăng ký thất bại!";
                }
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
                $giamgia = isset($_POST['giamgia']) ? (float)$_POST['giamgia'] : 0; // Đảm bảo giá giảm là số
                $anhsp = $_POST['anhsp'];
            
                // Đảm bảo số lượng là kiểu số nguyên
                $soluong = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
            
                // Kiểm tra lại các giá trị trước khi nhân
                if (is_numeric($soluong) && is_numeric($giamgia)) {
                    $ttien = $soluong * $giamgia;
            
                    // Sản phẩm tồn tại thì tăng số lượng
                    if (isset($_SESSION['mycart'][$id_sp])) {
                        $_SESSION['mycart'][$id_sp]['quantity'] += $soluong;
                        $_SESSION['mycart'][$id_sp]['total_price'] += $ttien;
                    } else {
                        // Thêm sản phẩm vào giỏ hàng dưới dạng một mặt hàng mới
                        $_SESSION['mycart'][$id_sp] = [
                            'idsp' => $id_sp,
                            'name' => $tensp,
                            'image' => $anhsp,
                            'price' => $giamgia,
                            'quantity' => $soluong,
                            'total_price' => $ttien
                        ];
                    }
                    header("location:index.php?act=viewcart");
                } else {
                    // Xử lý lỗi nếu giá trị không hợp lệ
                    echo "Số lượng hoặc giá sản phẩm không hợp lệ.";
                }
            }

            break;
        case 'viewcart':
            include './view/cart/viewcart.php';
            break;

        case 'delcart':
            if (isset($_GET['idsp'])) {
                if (isset($_SESSION['mycart'][$_GET['idsp']])) {
                    // Xóa sản phẩm dựa trên idsp
                    unset($_SESSION['mycart'][$_GET['idsp']]);
                    echo "Sản phẩm đã được xóa khỏi giỏ hàng.";
                } else {
                    echo "Sản phẩm không tồn tại trong giỏ hàng.";
                }
            } else {
                // Nếu không có idsp, xóa toàn bộ giỏ hàng
                $_SESSION['mycart'] = [];
                echo "Giỏ hàng đã được xóa.";
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
            //    $listidsp1 = laysp1($listidsp1);
            $listidsp1 = [];
            $listidsp1 = laysp1($listidsp1);
            include './view/page/ruouvang.php';

            break;
        case 'ruoumanh':
            $listidsp2 = [];
            $listidsp2 = laysp2($listidsp2);
            include './view/page/ruoumanh.php';

            break;
        case 'lienhe':

            include './view/page/lienhe.php';

            break;

        case 'bill':

            if (empty($_SESSION['mycart'])) {
                echo "
                <script>
                alert('Không có sản phẩm trong giỏ hàng');
                window.location ='index.php?act=viewcart';
                </script>
                ";
            }
            // Tạo đơn hàng
            if (isset($_POST['btn_dathang'])) {
                if (isset($_SESSION['user']))  $id_nguoidung = $_SESSION['user']['id_nguoidung'];
                else $id_nguoidung = 0;

                $tongdonhang = $_POST['tongdonhang'];
                $name = $_POST['name'];
                $addr = $_POST['addr'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $pttt = $_POST['httt_ma'];

                // Trạng thái đơn hàng mặc định là "Chờ xác nhận" (id_trangthai = 1)
                $id_trangthai = 1; // Hoặc lấy giá trị từ người dùng nếu có

                // Thực hiện thêm đơn hàng vào database
                $madh = "wk" . rand(0, 9999); // Mã đơn hàng ngẫu nhiên
                $iduser =  insert_bill($id_nguoidung, $madh, $tongdonhang, $name, $addr, $email, $phone, $id_trangthai);
                if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
                    foreach ($_SESSION['mycart'] as $key => $value) {
                        $idsp = $value['idsp'];
                        $name = $value['name'];
                        $image = $value['image'];
                        $price = $value['price'];
                        $quantity = $value['quantity'];
                        $total_price = $price * $quantity;
                        insert_bill_detail($iduser, $idsp, $name, $image, $price, $quantity, $total_price);
                    }
                }
                header("location:index.php?act=billconfirm");
                exit;
            }
            include './view/cart/bill.php';
            break;

        case 'billconfirm':

            include './view/cart/billconfirm.php';
            break;


        case 'update_user':
            include './view/dkdn/update_user.php';
            break;

        case 'chitietsp':
            if (isset($_GET['id_sp'])) {
                $id = $_GET['id_sp']; }

                $ctsanpham = loadone_sanpham($id);
                
                




            include "./view/page/chitietsanpham.php";
            break;

        case 'mybill':
            // Nếu bạn đang gọi một hàm để tải hóa đơn
            // Khởi tạo biến mặc định


            $id_nguoidung = 0; // Hoặc một giá trị khác tùy ý

            if (isset($_SESSION['user'])) {
                $id_nguoidung = $_SESSION['user']['id_nguoidung'];
            }

            // Bây giờ bạn có thể kiểm tra giá trị của $id_nguoidung
            if ($id_nguoidung > 0) {
                $listBill = loadone_billuser($id_nguoidung);
            } else {
                echo "
                <script>
                alert('Bạn cần đăng nhập để xem hóa đơn.');
                window.location ='index.php?act=login';
                </script>
                ";
                return;
            }
            include './view/cart/mybill.php';
            break;

        default:
            header('location:index.php?act=trangchu');
            break;

        case 'deldh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $id = $_GET['id'];
                $deldh = deldh($_GET['id']);
            }
            header('location:index.php?act=mybill');
            break;
        case 'chitietdonhang':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $ctdh = chitietdon($id);
            }
            include './view/cart/ctdh.php';
            break;
    }
} else {
    header('location:index.php?act=trangchu');
}
// include 'view/home.php';

include 'view/footer.php';
