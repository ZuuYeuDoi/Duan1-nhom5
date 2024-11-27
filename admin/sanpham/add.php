<div class="container-fluid">

    <!-- ghi trong đây -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Sản Phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                    <div class="container mt-5">
                        <h2 class="mb-4">Thêm Mới Sản Phẩm</h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="product-name" class="form-label">ID Sản Phẩm</label>
                                <input type="text" name="idsp" id="idsp" class="form-control" placeholder="Auto Number"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Tên Sản Phẩm</label>
                                <input type="text" name="tensp" id="tensp" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="product-price" class="form-label">Hãng Sản Phẩm</label>
                                <input type="text" name="hangsp" id="hangsp" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <!-- <label for="product-img" class="form-label">Ảnh Sản Phẩm</label>
                                <input type="file" name="imgsp" id="imgsp" class="form-control"
                                    accept="image/*" required onchange=""> -->
                                <label for="product-img" class="form-label">Ảnh Sản Phẩm</label>
                                <input type="file" name="imgsp" id="imgsp" class="form-control" accept="image/*" required onchange="previewImage()">
                                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-width: 100%; height: 150px;">
                            </div>


                            <div class="mb-3">
                                <label for="product-price" class="form-label">Giá Sản Phẩm</label>
                                <input type="text" name="pricesp" id="pricesp" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="product-detail" class="form-label">Số Lượng Sản Phẩm</label>
                                <input type="text" name="soluongsp" id="soluongsp"
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="product-price" class="form-label">Giảm Giá Sản Phẩm</label>
                                <input type="text" name="price1sp" id="price1sp" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Mô Tả</label>
                                <input type="text" name="motasp" id="motasp" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Ngày Tạo</label>
                                <input type="date" name="ngaytaosp" id="ngaytaosp" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="product-price" class="form-label"></label>
                                <input type="hidden" name="ngaysuasp" id="ngaysuasp" class="form-control"
                                    disabled>
                            </div>

                            <div class="mb-3">
                                <label for="product-category" class="form-label">Danh Mục Sản
                                    Phẩm</label>
                                <select name="id_dm" id="id_dm" class="form-control"
                                    required>
                                    <option value="">Lựa Chọn Danh Mục</option>
                                    <?php
                                    foreach ($listdanhmuc as $key => $value) { ?>
                                        <option value="<?php echo $value['id_dm'] ?>"><?php echo $value['ten_danhmuc'] ?></option>
                                    <?php } ?>
                                </select>

                                </select>
                            </div>

                            <input type="submit" name="themsp" class="btn btn-primary" value="Thêm Sản Phẩm">
                        </form>
                    </div>



                </div>
            </div>
        </div>
        <!-- kếp thúc nội dung -->

        <!-- ghi trong đây -->

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
    function previewImage() {
        const file = document.getElementById('imgsp').files[0];
        const imagePreview = document.getElementById('imagePreview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Hiển thị ảnh
            }
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '#';
            imagePreview.style.display = 'none'; // Ẩn ảnh nếu không có file
        }
    }
</script>
