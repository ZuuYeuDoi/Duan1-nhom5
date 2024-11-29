<?php
// Kiểm tra người dùng đã đăng nhập chưa
if (!isset($_SESSION['user'])) {
    header('location:index.php?act=login');
    exit();
}

// echo "<pre>";
// print_r($_SESSION['user']); // Kiểm tra thông tin hiện có trong session
// echo "</pre>";

// Lấy thông tin người dùng
$user = $_SESSION['user'];
extract($_SESSION['user']);


if (isset($_POST['update_user'])) {
    // Lấy thông tin từ form
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    // $userId = $user['id_nguoidung'];
    // Cập nhật thông tin vào database
    $result = update_user($user['id_nguoidung'], $hoten, $email, $matkhau, $sdt, $diachi);
    if ($result) {
        // Cập nhật session với thông tin mới
        $_SESSION['user'] = get_user_by_id($user['id_nguoidung']);
        $success = "Cập nhật thông tin thành công!";
        
    } else {
        $error = "Cập nhật thất bại. Vui lòng thử lại!";
    }
    header('Location:index.php?act=login');
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Khách Hàng</title>
</head>
<body>
    <div class="container">
        <h2>Sửa Thông Tin Khách Hàng</h2>
        <?php if (isset($success)) echo "<p style='color: green;'>$success</p>"; ?>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="hoten">Họ và Tên</label>
                <input type="text" name="hoten" id="hoten" value="<?= $user['hoten'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="matkhau">Mật Khẩu</label>
                <input type="password" name="matkhau" id="matkhau" value="<?= $user['matkhau'] ?>" required>
            </div>
            <div class="form-group">
                <label for="sdt">Số Điện Thoại</label>
                <input type="text" name="sdt" id="sdt" value="<?= $user['sdt'] ?>" required>
            </div>
            <div class="form-group">
                <label for="diachi">Địa Chỉ</label>
                <input type="text" name="diachi" id="diachi" value="<?= $user['diachi'] ?>" required>
            </div>
            <button type="submit" name="update_user">Cập Nhật</button>


            
        </form>
    </div>
</body>
</html>
