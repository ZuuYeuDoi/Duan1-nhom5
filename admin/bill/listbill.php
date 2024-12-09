<div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Danh sách đơn hàng</h1>
            </div>
            
            <!-- Content Row -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Bảng đơn hàng</h6>
    <form method="GET" action="index.php?act=filter">
    <div class="input-group">
        <input type="hidden" name="act" value="filter"> <!-- Thêm dòng này -->
        <select class="form-control" name="filter_status"> <!-- Thêm name="filter_status" -->
            <option value="" <?= ($filter_status == '') ? 'selected' : ''; ?>>Tất cả trạng thái</option>
            <option value="1" <?= ($filter_status == '1') ? 'selected' : ''; ?>>Chờ xác nhận</option>
            <option value="2" <?= ($filter_status == '2') ? 'selected' : ''; ?>>Đã xác nhận</option>
            <option value="3" <?= ($filter_status == '3') ? 'selected' : ''; ?>>Chờ lấy hàng</option>
            <option value="4" <?= ($filter_status == '4') ? 'selected' : ''; ?>>Đang giao hàng</option>
            <option value="5" <?= ($filter_status == '5') ? 'selected' : ''; ?>>Giao hàng thành công</option>
            <option value="6" <?= ($filter_status == '6') ? 'selected' : ''; ?>>Đã huỷ</option>
        </select>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Lọc</button>
        </div>
    </div>
</form>
</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên người nhận</th>
                                    <th>Số điện thoại người nhận</th>
                                    <th>Địa chỉ người nhận</th>
                                    <th>Ngày mua</th>
                                    <th>Trạng thái của đơn hàng</th>
                                    <th>Thao tác</th>
                                    <th>Cập nhật trạng thái</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listbill as $bill) {
                                    $ttdh = get_ttdh($bill['id_trangthai']);
                                    extract($listbill);
                                    echo '
                                    <tr>
                                        <td>'.$bill['madh'].'</td>
                                        <td>'.$bill['hoten'].'</td>
                                        <td>'.$bill['sdt'].'</td>
                                        <td>'.$bill['diachi'].'</td>
                                        <td>'.$bill['ngaydathang'].'</td>
                                        <td>'.$ttdh.'</td>
                                        <td>
                                            <a class="btn btn-primary" href="?act=updateBill&id='.$bill['id_donhang'].'"
                                                role="button">Xem chi tiết</a>
                                        </td>
                                         <td>
                                            <a class="btn btn-primary" href="?act=ttdh&id='.$bill['id_donhang'].'"
                                                role="button">Cập nhật trạng thái</a>
                                        </td>
                                    </tr>
                                    ';  
                                    ?>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        </div>
