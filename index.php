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
                    $_SESSION['success'] = "";
                    header('location:index.php');
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
            }
            include './view/dkdn/register.php';
            break;

        case 'logout':
            session_unset();
            header("Location: index.php"); // Hoặc trang chủ index.php
            break;

        default:
            # code...
            break;
    }
} else {
    # code...
}
include 'view/footer.php';
