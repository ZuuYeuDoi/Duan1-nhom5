<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../model/pdo.php';
// include '../model/danhmuc.php';

include 'header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tendm'];
                $ngaytao = $_POST['ngaytao'];
                $ngaysua = $_POST['ngaysua'];
                $sql = "insert into Danh_muc(ten_danhmuc,ngay_tao,ngay_sua) values('$tenloai','$ngaytao','$ngaysua')";
                pdo_execute($sql);
                $thongbao = 'thanh cong';
            }
            include "danhmuc/add.php";
            break;
        default:

            break;
    }
} else {

}
include 'footer.php';
?>