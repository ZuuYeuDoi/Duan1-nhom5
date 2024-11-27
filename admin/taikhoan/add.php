<div class="container-fluid">
    <!-- ghi trong đây -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm</h6>
        </div>
        <div class="card-body">
            <div class="table">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <!-- code ở đây -->
                    <div class="container mt-5">
                        <h2 class="mb-4">Thêm Mới Tài Khoản</h2>
                        <?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                            ?>
                        <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="product-name" class="form-label">ID Người Dùng</label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="Auto Number"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Email</label>
                                <input type="email" name="email" id="" class="form-control"
                                    placeholder="Nhập email" required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Pass</label>
                                <input type="text" name="pass" id="" class="form-control"
                                    placeholder="Nhập mật khẩu" required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">User</label>
                                <input type="text" name="user" id="" class="form-control"
                                    placeholder="Nhập tên user" required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Số điện thoại</label>
                                <input type="text" name="sdt" id="" class="form-control"
                                    placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Địa chỉ</label>
                                <input type="text" name="diachi" id="" class="form-control"
                                    placeholder="Nhập địa chỉ" required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Phân quyền</label>
                               
                                    <select name="phanquyen" id="">
                                    <option value="" selected disabled required >Lựa Chọn</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Ngày đăng ký</label>
                                <input type="date" name="ngaydk" id="" class="form-control" disabled>
                            </div>
                            <input type="submit" name="themmoitk" id="" class="btn btn-primary" value="Thêm danh mục">
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- kếp thúc nội dung -->

        <!-- ghi trong đây -->

    </div>