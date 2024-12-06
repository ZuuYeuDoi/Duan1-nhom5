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
                            <?php 
                                if($ttdh !== 'Đã huỷ') {
                            ?>
                            <td class="text-center">
                                <a href="index.php?act=deldh&id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Huỷ Đơn</a>
                            </td>
                            <?php } ?>
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
