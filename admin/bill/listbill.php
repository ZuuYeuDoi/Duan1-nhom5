<div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Danh sách đơn hàng</h1>
            </div>

            <!-- Content Row -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bảng đơn hàng</h6>
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
                                        <td>'.$bill['id_nguoidung'].'</td>
                                        <td>'.$bill['sdt'].'</td>
                                        <td>'.$bill['diachi'].'</td>
                                        <td>'.$bill['ngaydathang'].'</td>
                                        <td>'.$ttdh.'</td>
                                        <td>
                                            <a class="btn btn-primary" href="?act=updateBill&id='.$bill['id_donhang'].'"
                                                role="button">Xem chi tiết</a>
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