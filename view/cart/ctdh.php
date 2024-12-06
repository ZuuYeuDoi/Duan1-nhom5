<div class="container mt-5">

    <!-- Tiêu đề -->
    <h1 class="text-center mb-4 font-weight-bold text-uppercase">Chi Tiết Đơn Hàng Của Tôi</h1>

    <!-- Bảng đơn hàng -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr style="font-size: 16px;">
                <th>Số Lượng</th>
                <th>Giá</th>
                <th>Hình Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Thành Tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalAmount = 0; // Khởi tạo biến tổng tiền

            foreach ($ctdh as $ct) {
                $totalAmount += $ct['thanhtien']; // Cộng dồn tổng tiền
            ?>
                <tr style="font-size: 15px;">
                    <td><?php echo $ct['soluong'] ?></td>
                    <td><?php echo number_format($ct['price'], 0, ',', '.') ?> VND</td>
                    <td><img src="upload/<?php echo $ct['img'] ?>" alt="<?php echo $ct['name'] ?>" class="img-fluid" style="max-width: 100px;"></td>
                    <td><?php echo $ct['name'] ?></td>
                    <td><?php echo number_format($ct['thanhtien'], 0, ',', '.') ?> VND</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Phần tổng tiền -->
    <div class="d-flex justify-content-end font-weight-bold">
        <h4>Tổng Tiền: <?php echo number_format($totalAmount, 0, ',', '.') ?> VND</h4>
    </div>

    <!-- Nút quay lại -->
    <div class="text-center mt-4">
        <a class="btn btn-primary btn-lg" href="index.php?act=mybill">Quay Lại</a>
    </div>
</div>
