<div class="card shadow mb-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách Sản Phẩm</h6>
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
                                        style="width: 5px;">Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 100px;">Hãng</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending"
                                        style="width: 100px;">Ảnh Sản Phẩm</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending"
                                        style="width: 100px;">Tên Sản Phẩm</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="width: 100px;">Giá</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="width: 5px;">Số Lượng</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        style="width: 100px;">Mô Tả</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="width: 100px;">Ngày Tạo</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="width: 100px;">Ngày Cập Nhật</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="width: 100px;">Thao Tác</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Id</th>
                                    <th rowspan="1" colspan="1">Hãng</th>
                                    <th rowspan="1" colspan="1">Ảnh Sản Phẩm</th>
                                    <th rowspan="1" colspan="1">Tên Sản Phẩm</th>
                                    <th rowspan="1" colspan="1">Giá</th>
                                    <th rowspan="1" colspan="1">Số Lượng</th>
                                    <th rowspan="1" colspan="1">Mô Tả</th>
                                    <th rowspan="1" colspan="1">Ngày Tạo</th>
                                    <th rowspan="1" colspan="1">Ngày Cập Nhật</th>
                                    <th rowspan="1" colspan="1">Thao Tác</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                foreach ($listsanpham as $key) {
                                    
                                    $hinhpath = "../upload/" . $key['anhsp'];
                                    if (is_file($hinhpath)) {
                                        $key['anhsp'] = "<img src='$hinhpath' width='80'>";
                                    } else {
                                        $key['anhsp'] = "no photo";
                                    }
                                ?>
                                    <tr class="even">
                                        <td class="sorting_1"><?php echo $key['id_sp'] ?></td>
                                        <td><?php echo $key['hang'] ?></td> <td><img src="<?php echo $hinhpath ?>" alt="" width="100"></td>
                                        <td><?php echo $key['tensp'] ?></td>
                                        <td><?php echo number_format($key['giatien'], 0, ',', '.'); ?> VNĐ</td>
                                        <td><?php echo number_format($key['soluong'], 0, ',', '.'); ?></td>
                                        <td><?php echo $key['mota'] ?></td>
                                        <td><?php echo $key['ngaytao'] ?></td>
                                        <td><?php echo $key['ngaycapnhat'] ?></td>

                                        <?php
                                            foreach($listsanpham as $key){
                                                $suasp="index.php?act=suasp&id_sp=".$key ['id_sp'];
                                                $xoasp="index.php?act=xoasp&id_sp=".$key ['id_sp'];

                                            }
                                        ?>

                                        <td><a href="<?= $suasp?>" class="btn btn-info btn-circle">
                                                <i class="fas fa-info-circle"></i>
                                            </a> <a href="<?= $xoasp?>" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a></td>
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