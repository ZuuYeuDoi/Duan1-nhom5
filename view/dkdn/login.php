<style>
   /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7fc;
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
}

/* Profile Picture & Card Styles */
.card {
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 2rem;
}

.rounded-circle {
    border: 4px solid #fff;
    padding: 4px;
}

.text-dark {
    color: #333 !important;
}

.btn {
    font-size: 14px;
    font-weight: 500;
    border-radius: 30px;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-warning {
    background-color: #ffc107;
    border: none;
}

.btn-warning:hover {
    background-color: #e0a800;
}

.btn-success {
    background-color: #28a745;
    border: none;
}

.btn-success:hover {
    background-color: #218838;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
}

.btn-danger:hover {
    background-color: #c82333;
}

/* Margin Adjustments */
.mt-4 {
    margin-top: 20px !important;
}

.gap-3 {
    gap: 15px;
}


/* Form Styles */
.login-form {
    max-width: 500px;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-form:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.login-form h2 {
    margin-bottom: 1.5rem;
    color: #333;
    font-size: 1.8rem;
    text-align: center;
    font-weight: 600;
    letter-spacing: 1px;
}

.form-group {
    margin-bottom: 1.25rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #555;
    font-weight: 500;
}

.form-group input[type="text"],
.form-group input[type="password"] {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    background-color: #f8f9fa;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-group input[type="text"]:focus,
.form-group input[type="password"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.form-group input[type="submit"] {
    width: 100%;
    padding: 0.75rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.form-group input[type="submit"]:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
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
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s ease;
}

.login-links a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Input Focus Styles */
input:focus {
    outline: none;
}

input[type="checkbox"] {
    margin-right: 0.5rem;
}

/* Button Styles for Reset / Register */
button {
    font-size: 14px;
    font-weight: 600;
    padding: 0.5rem 1rem;
    background-color: #f8f9fa;
    border: 2px solid #007bff;
    color: #007bff;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
}

button:hover {
    background-color: #007bff;
    color: #fff;
    border: 2px solid #007bff;
}

/* Responsive Design */
@media screen and (max-width: 500px) {
    .login-form {
        padding: 1.5rem;
    }

    .login-form h2 {
        font-size: 1.5rem;
    }

    .form-group {
        margin-bottom: 1rem;
    }
}

</style>
<!--  -->

<?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
    $ngaydangky = new DateTime($ngaydangky);
?>
    <section style="background-color: #eee;">
        <div class="container py-5">


            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://www.shutterstock.com/image-vector/abstract-boy-avtar-character-fiction-260nw-2168819879.jpg" alt="avatar"
                                class="rounded-circle shadow-4" style="width: 150px;">
                            <h5 class="my-3">Xin Chào: <?= $hoten ?></h5>

                            <div style="padding: 10px;">
                                <input type="submit" name="" id="" class="btn btn-primary btn-sm" style="height: 32px;
                                        width: 130px; margin-left: 10px;" value="Quên mật khẩu">
                                <!-- <input type="submit" name="" id="" class="btn btn-warning btn-sm" style="height: 32px;
                                        width: 130px; margin-left: 10px;" value="Đổi thông tin"> -->
                                <a href="index.php?act=update_user" class="btn btn-warning btn-sm" style="height: 32px;
                                        width: 130px; margin-left: 10px;">Sửa Thông Tin</a>

                            </div>

                            <div class="d-flex justify-content-center mb-2" style="margin-top: 15px;">
                                <div class="d-flex justify-content-center mb-2" style="margin-top: 15px; ">
                                <?php if ($_SESSION['user']['role'] == 1) { ?>
                                        <form action="./admin/index.php" method="post" style="display: inline;">
                                            <button type="submit" class="btn btn-success btn-sm" style="height: 32px; width: 130px; margin-left: 10px;">
                                                Đăng nhập admin
                                            </button>
                                        </form>
                                    <?php } ?>
                                    <input type="submit" name="" id="" class="btn btn-danger btn-sm" style="height: 32px;
                                        width: 130px; margin-left: 10px;" value="Đăng xuất">

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="margin-top: 11px;">Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="margin-top: 11px;"><?= $hoten ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="margin-top: 11px;">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="margin-top: 11px;"><?= $email ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="margin-top: 11px;">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    <!-- Input mật khẩu ẩn -->
                                    <input type="password" id="passwordField" class="form-control" value="<?= $matkhau ?>" readonly style="margin-top: 11px; width: 100%;">

                                    <!-- Nút ẩn/hiện mật khẩu -->
                                    <button type="button" class="btn btn-link" id="togglePassword" style="margin-top: 10px; padding: 0; color: #007bff; font-size:10px">
                                        Hiển thị mật khẩu
                                    </button>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="margin-top: 11px;">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="margin-top: 11px;"><?= $sdt ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="margin-top: 11px;">Active</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="margin-top: 11px;"><?= date_format($ngaydangky, "d-m-Y ") ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="margin-top: 11px;">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="margin-top: 11px;"><?= $diachi ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
<?php
} else {
?>
    <div style="height: 100%;" class="card-body">

        <div class="box-tong" style="padding-right:40px;">
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
                    <input type="checkbox" name="remember" id="remember" required> Ghi nhớ tài khoản?
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
    <script>
        // Lấy các phần tử trong DOM
        const togglePasswordButton = document.getElementById('togglePassword');
        const passwordField = document.getElementById('passwordField');

        // Lắng nghe sự kiện click vào nút "Hiển thị mật khẩu"
        togglePasswordButton.addEventListener('click', function() {
            // Kiểm tra xem mật khẩu có đang được ẩn không
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Thay đổi nội dung nút
            if (passwordField.type === 'password') {
                togglePasswordButton.textContent = 'Hiển thị mật khẩu';
            } else {
                togglePasswordButton.textContent = 'Ẩn mật khẩu';
            }
        });
    </script>