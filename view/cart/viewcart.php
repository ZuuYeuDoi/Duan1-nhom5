<!-- Start Content Page -->
<div class="container py-5">
    <div class="row">
        <!-- Giỏ hàng (phần chính) -->
        <div class="col-lg-8">
            <!-- Card chứa bảng giỏ hàng -->
            <div class="card shadow-lg rounded-lg border-light">
                <div class="card-header bg-danger text-white rounded-top">
                    <h2 class="h2 mb-0">Giỏ Hàng Của Bạn</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-light">
                            <tr>
                                <th>Hình Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Đơn Giá</th>
                                <th>Số Lượng</th>
                                <th>Tổng</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="cart-items">

                            <?php
                            $tong = 0;
                            foreach ($_SESSION['mycart'] as $product) {
                                $tong += $product['total_price'];
                                $xoasp = '<a href="index.php?act=delcart&idsp=' . $product['idsp'] . '"><button class="btn btn-danger btn-sm">Xóa</button></a>';
                                echo '
                                <tr>
                                    <td><img src="./upload/' . $product['image'] . '" alt="" class="img-fluid" style="max-height: 100px; border-radius: 8px;"></td>
                                    <td>' . $product['name'] . '</td>
                                    <td>' . number_format($product['price'], 0, ',', '.') . ' VNĐ</td>
                                    <td>' . $product['quantity'] . '</td>
                                    <td>' . number_format($product['total_price'], 0, ',', '.') . ' VNĐ</td>
                                    <td>' . $xoasp . '</td>
                                </tr>';
                            }
                            echo '
                                <tr class="table-info">
                                    <td colspan="4" class="text-right">Tổng đơn hàng:</td>
                                    <td class="fs-5 text-danger">' . number_format($tong, 0, ',', '.') . ' VNĐ</td>
                                    <td></td>
                                </tr>';
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tóm tắt giỏ hàng (phần bên phải) -->
        <div class="col-lg-4">
            <!-- Card chứa tóm tắt giỏ hàng -->
            <div class="card shadow-lg rounded-lg border-light">
                <div class="card-header bg-danger text-white rounded-top">
                    <h3 class="mb-0">Thành Tiền</h3>
                </div>
                <div class="card-body">
                    <p><strong>Tổng:</strong> <span id="cart-total" class="fs-4 text-primary"><?= number_format($tong, 0, ',', '.'); ?> VNĐ</span></p>
                    <a href="?act=trangchu" class="btn btn-outline-danger w-100 mb-3">Tiếp Tục Mua Sắm</a>
                    <a href="?act=bill" class="btn btn-danger w-100">Thanh Toán</a>
                </div>
            </div>
        </div>
    </div>
</div>
