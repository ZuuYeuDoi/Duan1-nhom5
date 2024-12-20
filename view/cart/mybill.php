<div class="container mt-4 bg-light rounded p-4">
    <!-- Breadcrumb -->
    <nav class="text-center" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item active text-success fw-bolder" aria-current="page">Đơn Hàng</li>
        </ol>
    </nav>
</div>

<div class="container my-5 wow fadeIn">
    <!-- Card Container for the table -->
    <div class="card shadow-lg rounded-lg">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0">Danh Sách Đơn Hàng</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th class="text-start">Mã Đơn Hàng</th>
                            <th class="text-center">Thanh toán</th>
                            <th class="text-center">Giao hàng</th>
                            <th class="text-center">Ngày tạo</th>
                            <th class="text-center">Xem</th>
                            <th class="text-center">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        if (is_array($listBill) && count($listBill) > 0) {
                            foreach ($listBill as $bill) {
                                $madh = $bill['madh'];
                                $ngaydathang = $bill['ngaydathang'];
                                $tongtien = $bill['tongtien'];
                                $ttdh = get_ttdh($bill['id_trangthai']);
                                $pttt = get_pttt($bill['pttt']);
                                $id = $bill['id_donhang'];
                        ?>
                                <tr>
                                    <td class="text-start"><?php echo $madh; ?></td>
                                    <td class="text-center"><?php echo $pttt; ?></td>
                                    <td class="text-center"><?php echo $ttdh; ?></td>
                                    <td class="text-center"><?php echo $ngaydathang; ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-info btn-sm" href="index.php?act=chitietdonhang&id=<?php echo $id; ?>">Chi Tiết Đơn</a>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                        // Kiểm tra trạng thái đơn hàng
                                        if (strtolower(trim($ttdh)) === '<div class="text-danger" >Đã huỷ</div>') {
                                        ?>
                                            <button class="btn btn-secondary btn-sm" disabled>Đã huỷ</button>
                                        <?php
                                        } elseif (strtolower(trim($ttdh)) === '<div class="text-success">giao hàng thành công</div>') {
                                        ?>
                                            <button class="btn btn-secondary btn-sm" disabled>Giao hàng thành công</button>
                                            <a href="index.php?act=return&id=<?php echo $id; ?>" class="btn btn-warning btn-sm">Trả hàng</a>
                                        <?php
                                        } elseif (strtolower(trim($ttdh)) === '<div class="text-primary">Đang giao hàng</div>') {
                                        ?>
                                            <button class="btn btn-secondary btn-sm" disabled>Đang Giao Hàng</button>
                                        <?php
                                        } elseif (strtolower(trim($ttdh)) === '<div class="text-primary">chờ lấy hàng</div>') {
                                        ?>
                                            <button class="btn btn-secondary btn-sm" disabled>Chờ lấy hàng</button>
                                        <?php
                                        } elseif (strtolower(trim($ttdh)) === '<div class="text-primary">Đã xác nhận</div>') {
                                        ?>
                                            <button class="btn btn-secondary btn-sm" disabled>Đã xác nhận</button>
                                            <?php
                                        } elseif (strtolower(trim($ttdh)) === '<div class="text-warning">trả hàng</div>') {
                                        ?>
                                            <button class="btn btn-secondary btn-sm" disabled>Trả Hàng</button>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="index.php?act=deldh&id=<?php echo $id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có đồng ý huỷ không!!!')">Huỷ Đơn</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="6" class="text-center py-3">Không có đơn hàng nào.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>