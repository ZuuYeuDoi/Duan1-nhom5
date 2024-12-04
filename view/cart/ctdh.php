<div class="container">

<h1 style="text-align: center;
    margin-bottom: 27px;
    font-weight: 600;
    margin-top: 20px;">Chi Tiết Đơn Hàng Của Tôi</h1>
    <table class="table table-hover">
        <thead>
            <tr style="font-size: 16px;
    font-variant: all-small-caps;">
                <th>Số Lượng</th>
                <th>Giá</th>
                <th>Hình Ảnh</th>
                <th>Tên SP</th>
                <th>Thành tiền</th>

            </tr>
        </thead>
        <?php
        foreach ($ctdh as $ct) {
        ?>
            <tr style="font-size: 15px;">
                <td><?php echo $ct['soluong'] ?></td>
                <td><?php echo $ct['price'] ?></td>
                <td><img src="upload/<?php echo $ct['img'] ?>" alt="" width="100px"></td>
                <td><?php echo $ct['name'] ?></td>
                <td><?php echo $ct['thanhtien'] ?></td>

            </tr>
        <?php
        }
        ?>
        <a class="btn btn-primary" href="index.php?act=mybill">Quay Lai</a>
    </table>
</div>