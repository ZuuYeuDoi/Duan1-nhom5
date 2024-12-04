<?php
ini_set(option: 'display_errors', value: 1);
ini_set(option: 'display_startup_errors', value: 1);
error_reporting(error_level: E_ALL);
ob_start();

include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/product.php';

include "../model/cart.php"; 

// include '../model/bill.php';
include_once '../model/taikhoan.php';
include 'header.php';
session_start();
// Kiểm tra vai trò người dùng
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Chuyển hướng nếu chưa đăng nhập
    exit();
}
$userRole = $_SESSION['role'];
if ($userRole !== 1) { // Giả sử 'admin' là vai trò cần quyền truy cập
    header('Location: login.php');
    exit();
}
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
            // 
            // Phần danh mục
            // 
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_danhmuc = $_POST['tendm'];
                $ngaytao = $_POST['ngaytao'];
                $ngaysua = $_POST['ngaysua'];
                insert_danhmuc($ten_danhmuc, $ngaytao, $ngaysua);
                $_SESSION['success'] = "";
                header('location:index.php?act=listdm');
                exit();
            }
            include "./danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = list_danhmuc();
            include "./danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "./danhmuc/update.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $xoadm = delete_danhmuc($id);
            }
            $listdanhmuc = list_danhmuc();
            include "./danhmuc/list.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id = $_POST['id'];
                $ten_danhmuc = $_POST['tendm'];
                $ngay_sua = $_POST['ngaysua'];
                // update_danhmuc($id_dm,$ten_danhmuc, $ngay_sua);
                $sql = "update danh_muc set ten_danhmuc='" . $ten_danhmuc . "', ngay_sua='" . $ngay_sua . "' where id_dm=" . $id;
                pdo_execute($sql);
                $thongbao = "Cập Nhật thành công";
            }
            // $listdanhmuc= list_danhmuc();
            $sql = "select * from danh_muc order by id_dm desc";
            $listdanhmuc = pdo_query($sql);
            include "./danhmuc/list.php";
            // include "./danhmuc/update.php";
            break;
            // 
            // Hết phần danh mục
            //update san pham

        case 'suasp':
            $listdanhmuc = list_danhmuc();
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $id = $_GET['id_sp'];
                $sp = loadone_sanpham($id);
                // Kiểm tra nếu có dữ liệu cập nhật từ POST
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id_dm = $_POST['id_dm'];
                    $hang = $_POST['hangsp'];
                    $tensp = $_POST['tensp'];
                    $giatien = $_POST['pricesp'];
                    $soluong = $_POST['soluongsp'];
                    $giamgia = $_POST['price1sp'];
                    $mota = $_POST['motasp'];
                    $nongdo = $_POST['nongdo'];
                    $dungluong = $_POST['dungluong'];
                    $ngaycapnhat = $_POST['ngaycapnhat'];

                    // Xử lý ảnh
                    $anhsp = $_FILES['imgsp']['name'];
                    $tmp_name = $_FILES['imgsp']['tmp_name'];

                    if (!empty($anhsp)) {
                        // Di chuyển tệp tới thư mục upload
                        if (move_uploaded_file($tmp_name, '../upload/' . $anhsp)) {
                            // Nếu di chuyển thành công, sử dụng ảnh mới
                            $anhsp = $anhsp;
                        } else {
                            // Nếu không thành công, giữ ảnh cũ
                            $anhsp = $sp['anhsp'];
                        }
                    } else {
                        // Giữ lại ảnh cũ nếu không có ảnh mới
                        $anhsp = $sp['anhsp'];
                    }

                    // Câu lệnh SQL để cập nhật
                    $sql = "UPDATE San_pham SET 
                                    id_dm ='" . $id_dm . "',
                                    id_dm ='" . $id_dm . "',
                                    tensp ='" . $tensp . "',
                                    giatien ='" . $giatien . "',
                                    soluong ='" . $soluong . "',
                                    giamgia ='" . $giamgia . "',
                                    mota ='" . $mota . "',
                                    nongdo ='" . $nongdo . "',
                                    dungluong ='" . $dungluong . "',
                                    anhsp ='" . $anhsp . "',
                                    ngaycapnhat ='" . $ngaycapnhat . "'
                                WHERE id_sp =" . $id;

                    // Sử dụng câu lệnh chuẩn bị để ngăn chặn SQL injection
                    // $stmt = $pdo->prepare($sql);
                    // $stmt->execute([
                    //     ':id_dm' => $id_dm,
                    //     ':hang' => $hang,
                    //     ':tensp' => $tensp,
                    //     ':giatien' => $giatien,
                    //     ':soluong' => $soluong,
                    //     ':giamgia' => $giamgia,
                    //     ':mota' => $mota,
                    //     ':anhsp' => $anhsp,
                    //     ':ngaycapnhat' => $ngaycapnhat,
                    //     ':id' => $id
                    // ]);
                    pdo_execute($sql);
                    $thongbao = "Cập Nhật thành công";
                    header("Location: index.php?act=listsp");
                    exit(); // Dừng xử lý tiếp
                }
                // Hiển thị form cập nhật
                include "./sanpham/update.php";
            }

            // // // Lấy danh sách sản phẩm
            // $sql = "SELECT * FROM San_pham ORDER BY id_sp DESC";
            // $listdanhmuc = pdo_query($sql);
            // include "./danhmuc/list.php";
            break;


        case 'listsp':
            $listsanpham = GetAllProduct();
            include './sanpham/list.php';
            break;
        case 'addsp':
            $listdanhmuc = list_danhmuc();
            if (isset($_POST['themsp']) && ($_POST['themsp'])) {
                $id_dm = $_POST['id_dm'];
                $hang = $_POST['hangsp'];
                $tensp = $_POST['tensp'];
                $giatien = $_POST['pricesp'];
                $soluong = $_POST['soluongsp'];
                $giamgia = $_POST['price1sp'];
                $nongdo = $_POST['nongdo'];
                $dungluong = $_POST['dungluong'];


                $anhsp = $_FILES['imgsp']['name'];
                $stmt = $_FILES['imgsp']['tmp_name'];
                move_uploaded_file($stmt, '../upload/' . $anhsp);

                $mota = $_POST['motasp'];
                $ngaytao = $_POST['ngaytaosp'];

                add_sanpham($id_dm, $hang, $tensp, $giatien, $soluong, $giamgia, $mota, $anhsp, $ngaytao,$nongdo,$dungluong);
                $_SESSION['success'] = "";
                header('location:index.php?act=listsp');
                exit();
            }
            include "./sanpham/add.php";
            break;

        case 'xoasp':
            if (isset($_GET['id_sp']) && is_numeric($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $id = intval($_GET['id_sp']); // Chuyển về số nguyên
                delete_sanpham($id); // Gọi hàm xóa
                echo "Xóa sản phẩm thành công!";
            } else {
                echo "ID sản phẩm không hợp lệ!";
            }
            $listsanpham = GetAllProduct();
            include "./sanpham/list.php";
            break;

        case 'addtk':
            if (isset($_POST['themmoitk']) && ($_POST['themmoitk'] > 0)) {
                $email = $_POST['email'];
                $matkhau = $_POST['pass'];
                $ten = $_POST['user'];
                $sdt = $_POST['sdt'];
                $address = $_POST['diachi'];

                $role = $_POST['phanquyen'];

                pdo_dangky_taikhoanbenadmin($email, $matkhau, $ten, $sdt, $address, $role);
                header('location:index.php?act=listtk');
            }
            include "./taikhoan/add.php";
            break;
        case 'listtk':
            $listtk = list_tk();
            include "./taikhoan/list.php";

            break;
        case 'xoatk':
            if (isset($_GET['id_nguoidung']) && ($_GET['id_nguoidung'] > 0)) {
                $id_nguoidung = $_GET['id_nguoidung'];
                deletetk($id_nguoidung);
            }
            $listtk = list_tk();
            include "./taikhoan/list.php";
            break;

        case 'suatk':
            if (isset($_GET['id_nguoidung']) && ($_GET['id_nguoidung'] > 0)) {
                $tk = loadone_taikhoan($_GET['id_nguoidung']);
            }
            if (isset($_POST['uptkmoi']) && ($_POST['uptkmoi'] > 0)) {
                $id = $_GET['id_nguoidung'];
                $email = $_POST['email'];
                $password = $_POST['pass'];
                $user = $_POST['user'];
                $phone = $_POST['sdt'];
                $address = $_POST['diachi'];
                $role = $_POST['phanquyen'];
                update_taikhoan( $user, $password, $email, $address, $phone, $role, $id);
                header('location:index.php?act=listtk');
            }
            include "./taikhoan/update.php";
            break;
            case 'logout':
                session_unset();
                header("Location:index.php?act=trangchu"); // Hoặc trang chủ index.php
                break;
        case "listdh":
            $listbill = loadall_bill(0);
            include "./bill/listbill.php";
            break;
        case "updateBill":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $ctdh = chitietdon($id);
               
            }
            include "./bill/updatebill.php";
            break;
            
            case "ttdh":
                // if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //     $id = $_GET['id'];
                //     $ttdh = loadall_ttdh($id);
                // }
            
                // // Tải tất cả trạng thái cho dropdown
                // $statuses = load_trang_thai();
            
                include "./bill/updatett.php";
                break;
        case 'thongke':
            include './home.php';
            break;
            
        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}
include 'footer.php';
