<!-- Start Content Page -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="h2 text-danger mb-4">Your Shopping Cart</h2>
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Hình Ảnh</th>
                        <th>Tên Sản Phẩm </th>
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
                        $xoasp = '<a href="index.php?act=delcart&idsp=' . $product['idsp'] . '"><button class="btn btn-danger btn-sm">Xóa</button></a>';                        echo '
                        <tr>
                        <td><img src="./upload/' . $product['image'] . '" alt="" height="100px"></td>
                        <td>' . $product['name'] . '</td>
                        <td>' . number_format($product['price'], 0, ',', '.') . ' VNĐ</td>
                        <td>' . $product['quantity'] . '</td>
                        <td>' . number_format($product['total_price'], 0, ',', '.') . ' VNĐ</td>
                        <td>' . $xoasp . '</td>
                        </tr>';
                    }
                    echo '
                        <tr>
                            <td colspan="4">Tổng đơn hàng</td>
                            <td class="fs-5">' . number_format($tong, 0, ',', '.') . ' VNĐ</td>
                            <td></td>
                        </tr>';
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <h3 class="text-danger mb-3">Cart Summary</h3>
            <p><strong>Tổng:</strong> <span id="cart-total" class="fs-4"><?= number_format($tong, 0, ',', '.'); ?> VNĐ</span></p>
            <a href="?act=trangchu" class="btn btn-outline-danger">Thêm Đơn Hàng</a>
            <a href="?act=bill" class="btn btn-danger">Mua</a>
        </div>
    </div>
</div>
