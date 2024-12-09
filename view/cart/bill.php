<body>
  <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="billconfirm" method="post" action="index.php?act=bill">
                
                <?php
                if (isset($_SESSION['user'])) {
                    $name = $_SESSION['user']['hoten']; // Hoặc tên cột từ bảng của bạn
                    $addr = $_SESSION['user']['diachi'];
                    $phone = $_SESSION['user']['sdt'];
                    $email = $_SESSION['user']['email'];
                } else {
                    $name = "";
                    $addr = "";
                    $phone = "";
                    $email = "";
                }

                ?>
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                           
                            <?php
                           $totalQuantity = 0;
                            foreach ($_SESSION['mycart'] as $product) {
                            $totalQuantity += $product['quantity'];
                            echo '<input type="hidden" name="tongdonhang" value="'.$product['total_price'].'" id="">';
                            }
                            echo '
                            <span class="badge badge-secondary badge-pill">'.$totalQuantity.'</span>
                            ';
                            ?>
                        </h4>


                        <?php
                        $tong = 0;

                        foreach ($_SESSION['mycart'] as $product) {
                            $tong += $product['total_price'];

                            // var_dump($cart[2]);
                            // $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><button class="btn btn-danger btn-sm">Xóa</button></a>';
                            echo '
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">' . $product['name'] . '</h6>
                                                    <small class="text-muted">' . number_format($product['price'], 0, ',', '.') . ' x ' . $product['quantity'] . '</small>
                                                </div>
                                                <span class="text-muted">' . number_format($product['total_price'], 0, ',', '.')  . '</span>
                                            </li>';
                          
                        }
                        echo '
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Tổng thành tiền</span>
                                            <strong>' . number_format($tong, 0, ',', '.') . '</strong>
                                        </li>
                                    </ul>';
                        ?>

                        <div class="input-group">
                            <div class="input-group-append">
                                <!-- <button type="submit" class="btn btn-secondary" name="btn_dathang" >Xác nhận</button> -->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="name" id="tenkh"
                                    value="<?= $name ?>">
                            </div>
                            <!-- <div class="col-md-12">
                                <label for="kh_gioitinh">Giới tính</label>
                                <input type="text" class="form-control" name="kh_gioitinh" id="kh_gioitinh" value="Nam"
                                    >
                            </div> -->
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="addr" id="addr"
                                    value="<?= $addr ?>">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    value="<?= $phone ?>">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    value="<?= $email ?>">
                            </div>
                            <!-- <div class="col-md-12">
                                <label for="kh_ngaysinh">Ngày sinh</label>
                                <input type="text" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh"
                                    value="11/6/1989" >
                            </div> -->
                            <!-- <div class="col-md-12">
                                <label for="kh_cmnd">CMND</label>
                                <input type="text" class="form-control" name="kh_cmnd" id="kh_cmnd" value="362209685"
                                    >
                            </div> -->
                        </div>
<br>
                        <h4 class="mb-3">Hình thức thanh toán</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required value="0">
                                <label class="custom-control-label" for="httt">Ship COD</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required value="1">
                                <label class="custom-control-label" for="httt">Thanh toán online</label>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_dathang">Đặt hàng</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End block content -->
    </main>