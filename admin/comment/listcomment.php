
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Quản lý bình luận</h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sản phẩm</th>
                                    <th>Người dùng</th>
                                    <th>Nội dung</th>
                                    <th>Ngày đăng</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($comments as $comment): ?>
                                <tr>
                                    <td><?= $comment['id_bl'] ?></td>
                                    <td><?= $comment['tensp'] ?></td>
                                    <td><?= $comment['hoten'] ?></td>
                                    <td><?= $comment['noidung'] ?></td>
                                    <td><?= $comment['ngaybl'] ?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn có chắc muốn xóa bình luận này?')"
                                            href="?act=deleteComment&id_bl=<?= $comment['id_bl'] ?>"
                                            class="btn btn-danger btn-sm">Xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>