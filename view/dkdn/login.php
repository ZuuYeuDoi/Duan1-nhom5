<style>
/* Form container styles */


/* Box title styles */
.boxtitle {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
    text-align: center;
    padding-bottom: 10px;
    border-bottom: 1px solid #e0e0e0;
}

/* Unordered list styles */
.settingtk ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

/* List item styles */
.settingtk li {
    margin-bottom: 10px;
}

/* Link styles */
.settingtk a {
    display: block;
    padding: 10px;
    background-color: #f8f9fa;
    color: #495057;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.settingtk a:hover {
    background-color: #e9ecef;
    transform: translateY(-2px);
}

/* Admin link styles */
.settingtk li:nth-child(3) a {
    background-color: #28a745;
    color: #fff;
}

.settingtk li:nth-child(3) a:hover {
    background-color: #218838;
}

/* Logout link styles */
.settingtk li:last-child a {
    background-color: #dc3545;
    color: #fff;
}

.settingtk li:last-child a:hover {
    background-color: #c82333;
}

/* Responsive styles */
@media screen and (max-width: 400px) {
    .settingtk {
        max-width: 100%;
        margin: 10px;
    }
}

/* P2 */
/* Login Form Styling */
.login-form {
    max-width: 400px;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.login-form h2 {
    margin-bottom: 1.5rem;
    color: #333;
    text-align: center;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #555;
}

.form-group input[type="text"],
.form-group input[type="password"] {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.form-group input[type="checkbox"] {
    margin-right: 0.5rem;
}

.form-group input[type="submit"] {
    width: 100%;
    padding: 0.75rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-group input[type="submit"]:hover {
    background-color: #0056b3;
}

.login-links {
    list-style-type: none;
    padding: 0;
    margin-top: 1rem;
    text-align: center;
}

.login-links li {
    display: inline;
    margin: 0 0.5rem;
}

.login-links a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.login-links a:hover {
    color: #0056b3;
}

.box-tong .settingtk{
    width: 350px;
    height: 250px;
    margin: 0 auto;
    margin-top:40px ;
    border: 1px solid darkgrey;
    border-radius: 40px;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa; /* Màu nền nhẹ */
    margin: 0;
  
}

.settingtk {
    background-color: #ffffff; /* Màu nền trắng cho form */
    border-radius: 8px; /* Bo góc */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ */
    padding: 20px;
    max-width: 400px; /* Chiều rộng tối đa */
    margin: auto; /* Căn giữa */
}

.boxtitle {
    font-size: 24px; /* Kích thước chữ tiêu đề */
    font-weight: bold; /* Chữ đậm */
    margin-bottom: 20px; /* Khoảng cách dưới tiêu đề */
    color: #333; /* Màu chữ tối */
}

ul {
    list-style-type: none; /* Loại bỏ dấu đầu dòng */
    padding: 0; /* Bỏ padding */
}

li {
    margin: 10px 0; /* Khoảng cách giữa các mục */
}

a {
    text-decoration: none; /* Bỏ gạch chân */
    color: #007bff; /* Màu chữ cho liên kết */
    transition: color 0.3s; /* Hiệu ứng chuyển màu */
}

a:hover {
    color: #0056b3; /* Màu chữ khi hover */
}
</style>

<div style="height: 100%;" class="card-body">

    <div class="box-tong" style="padding-right:40px;">
        <!--  -->
        
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                ?>
            <form action="" class="settingtk">
            <div class="boxtitle">
                Xin chào
                <?= $hoten ?>
            </div>
            <ul>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php if ($_SESSION['user']['role'] == 1) { ?>
                <li>
                    <a href="admin/index.php">Đăng nhập Admin</a>
                </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=logout">Thoát</a>
                </li>
            </ul>
            <?php
            } else {
                ?>
        </form>
        <!--  -->
        <form action="index.php?act=login" method="post" class="login-form">
            <h2>Đăng nhập</h2>
            <div class="form-group">
                <label for="user">Tên đăng nhập</label>
                <input type="text" name="user" id="user">
            </div>
            <div class="form-group">
                <label for="pass">Mật khẩu</label>
                <input type="password" name="pass" id="pass" required>
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember" id="remember"> Ghi nhớ tài khoản?
            </div>
            <div class="">
                <input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="dangnhap" value="Đăng nhập">
            </div>
            <ul class="login-links">
                <li>
                    <a href="index.php?act=quenmk" style="color:brown">Quên mật khẩu</a>
                </li>
                <li><a href="index.php?act=register" style="color:brown">Đăng ký</a></li>
            </ul>
            <?php
            }
            ?>
        </form>
    </div>
</div>
</div>