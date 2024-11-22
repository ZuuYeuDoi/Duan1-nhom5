<?php
ini_set(option: 'display_errors', value: 1);
ini_set(option: 'display_startup_errors', value: 1);
error_reporting(error_level: E_ALL);
ob_start();
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/product.php';
include 'header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
            // 
            // Phần danh mục
            // 
        case 'adddm':
            session_start();
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
            break;
            // 
            // Hết phần danh mục
            // 

            // 
            // Phần sản phẩm
            // 

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
                    $soluong= $_POST['soluongsp'];
                    $giamgia = $_POST['price1sp'];
                    
                    $anhsp = $_FILES['imgsp']['name'];
                    $stmt = $_FILES['imgsp']['tmp_name'];
                    move_uploaded_file($stmt, '../upload/' . $anhsp);

                    $mota = $_POST['motasp'];
                    $ngaytao = $_POST['ngaytaosp'];
                    
                    add_sanpham($id_dm,$hang,$tensp,$giatien,$soluong,$giamgia,$mota,$anhsp,$ngaytao);
                    $_SESSION['success'] = "";
                    header('location:index.php?act=listsp');
                    exit();
                }
                include "./sanpham/add.php";
            break;





        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}
include 'footer.php';
