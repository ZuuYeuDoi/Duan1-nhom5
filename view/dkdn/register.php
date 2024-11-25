<section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <?php
                            // Bắt đầu session để có thể sử dụng $_SESSION

                            // Kiểm tra và hiển thị thông báo nếu có
                            if (isset($_SESSION['success'])) {
                                echo '
    <style>
        .alert {
            padding: 15px;
            background-color: #d4edda; /* Màu nền cho thông báo thành công */
            color: #155724; /* Màu chữ cho thông báo */
            border: 1px solid #c3e6cb; /* Đường viền cho thông báo */
            border-radius: 5px; /* Bo góc */
            position: relative; /* Để nút đóng được định vị */
            margin-bottom: 20px; /* Khoảng cách dưới thông báo */
        }
        .btn-close {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none; /* Không có nền */
            border: none; /* Không có đường viền */
            font-size: 16px; /* Kích thước chữ cho nút */
            cursor: pointer; /* Con trỏ chuột khi hover */
            color: #155724; /* Màu chữ cho nút */
        }
        .btn-close:hover {
            color: #c82333; /* Màu chữ cho nút khi hover */
        }
    </style>
    <div class="alert">
        <strong>Success!</strong> Đăng Ký Thành Công!
        <button type="button" class="btn-close" onclick="this.parentElement.style.display=\'none\'">×</button>
    </div>';
                                unset($_SESSION['success']); // Xóa thông báo sau khi hiển thị
                            }
                            ?>
                            <h2 class="text-uppercase text-center mb-5">Đăng Ký</h2>

                            <form action="index.php?act=register" method="post">

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Họ Tên</label>

                                    <input type="text" name="user" id="form3Example1cg" class="form-control form-control-lg" required />

                                </div>


                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Email</label>
                                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Mật Khẩu</label>

                                    <input type="password" name="pass" id="form3Example4cg" class="form-control form-control-lg" required />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Địa Chỉ</label>
                                    <input type="text" name="addr" id="form3Example3cg" class="form-control form-control-lg" required />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Số Điện Thoại</label>
                                    <input type="text" name="phone" id="form3Example3cg" class="form-control form-control-lg" required />
                                </div>

                                
                                    <div class="form-group">
                                        <input type="checkbox" name="remember" id="remember" required> Ghi nhớ tài khoản?
                                    </div>
                                

                                <div class="d-flex justify-content-center">
                                    <input type="submit" name="dangky" value="Đăng ký" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Đã có tài khoản?
                                    <a href="index.php?act=login" class="fw-bold text-body"><u>Login</u></a>
                                </p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>