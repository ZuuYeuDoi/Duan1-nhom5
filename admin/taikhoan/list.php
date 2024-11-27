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
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="dataTable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 10px;">ID Người Dùng</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Email</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Pass</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">User</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Số điện thoại</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Địa chỉ</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 100px;">Ngày tạo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 10px;">Phân quyền</th>

                                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 100px;">Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">ID Người Dùng</th>
                                                        <th rowspan="1" colspan="1">Email</th>
                                                        <th rowspan="1" colspan="1">Pass</th>
                                                        <th rowspan="1" colspan="1">User</th>
                                                        <th rowspan="1" colspan="1">Số điện thoại</th>
                                                        <th rowspan="1" colspan="1">Địa chỉ</th>
                                                        <th rowspan="1" colspan="1">Ngày tạo</th>

                                                        <th rowspan="1" colspan="1">Phân quyền</th>
                                                        <th rowspan="1" colspan="1">Thao tác</th>

                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php
                                                    foreach ($listtk  as $key ) {
                                                        

                                                    ?>
                                                   <tr class="even">
                                                        <td class="sorting_1"><?php echo $key['id_nguoidung'] ?></td>
                                                        <td><?php echo $key['email'] ?></td>
                                                        <td><?php echo $key['matkhau']?></td>
                                                        <td><?php echo $key['hoten']?></td>
                                                        <td><?php echo $key['sdt']?></td>
                                                        <td><?php echo $key['diachi']?></td>
                                                        <td><?php echo $key['ngaydangky']?></td>
                                                        <td><?php echo $key['role']?></td>
                                                        <td><a href="" class="btn btn-info btn-circle">
                                                                <i class="fas fa-info-circle"></i>
                                                            </a> <a href="" class="btn btn-danger btn-circle">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
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
                    </div>
                    <!-- End of Main Content -->