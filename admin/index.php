<?php
ini_set(option: 'display_errors', value: 1);
ini_set(option: 'display_startup_errors', value: 1);
error_reporting(error_level: E_ALL);

include '../model/pdo.php';
include '../model/danhmuc.php';

include 'header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];


    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_danhmuc = $_POST['tendm'];
                $ngaytao = $_POST['ngaytao'];
                $ngaysua = $_POST['ngaysua'];
                insert_danhmuc($ten_danhmuc, $ngaytao, $ngaysua);
                $thongbao = "Thêm mới thành công";
            }
            include "./danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = list_danhmuc();
            include "./danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm= loadone_danhmuc($_GET['id']);
            }
            include "./danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                
                $id = $_POST['id'];
                $ten_danhmuc = $_POST['tendm'];
                $ngay_sua = $_POST['ngaysua'];
                // update_danhmuc($id_dm,$ten_danhmuc, $ngay_sua);
                $sql = "update danh_muc set ten_danhmuc='".$ten_danhmuc."', ngay_sua='".$ngay_sua."' where id_dm=".$id;
                pdo_execute($sql);
                $thongbao = "Cập Nhật thành công";
            }
            // $listdanhmuc= list_danhmuc();
            $sql= "select * from danh_muc order by id_dm desc";
            $listdanhmuc=pdo_query($sql);
            include "./danhmuc/list.php";
            break;
        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}
include 'footer.php';
