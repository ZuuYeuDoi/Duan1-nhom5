                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- ghi trong đây -->
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách</h6>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable table-hover" id="dataTable" width="100%"
                                                cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                                style="width: 100%;">
                                                <?php
                                                session_start(); // Bắt đầu session để có thể sử dụng $_SESSION

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
        <strong>Success!</strong> Thêm Danh Mục Thành Công!
        <button type="button" class="btn-close" onclick="this.parentElement.style.display=\'none\'">×</button>
    </div>';
                                                    unset($_SESSION['success']); // Xóa thông báo sau khi hiển thị
                                                }
                                                ?>

                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="dataTable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 100px;">ID</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Tên danh mục</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Ngày tạo</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Ngày sửa</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 100px;">Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">ID</th>
                                                        <th rowspan="1" colspan="1">Tên danh mục</th>
                                                        <th rowspan="1" colspan="1">Thao tác</th>
                                                        <th rowspan="1" colspan="1">Ngày tạo</th>
                                                        <th rowspan="1" colspan="1">Ngày sửa</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php foreach ($listdanhmuc as $key) { 
                                                        $suadm="index.php?act=suadm&id=".$key ['id_dm'];
                                                        $xoadm="index.php?act=xoadm&id=".$key ['id_dm'];
                                                        
                                                        ?>
                                                   <tr class="even">
                                                        <td class="sorting_1"><?php echo $key ['id_dm'] ?></td>
                                                        <td><?php echo $key ['ten_danhmuc'] ?></td>
                                                        <td><?php echo $key ['ngay_tao'] ?></td>
                                                        <td><?php echo $key ['ngay_sua'] ?></td>
                                                        <td><a href="<?php echo $suadm; ?>"  class="btn btn-info btn-circle">
                                                                <i class="fas fa-info-circle"></i>
                                                            </a> <a href="<?php echo $xoadm?>" class="btn btn-danger btn-circle">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->