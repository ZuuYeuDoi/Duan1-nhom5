


    <!-- Start Content Page -->
    <div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="h2 text-danger mb-4">Your Shopping Cart</h2>
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Hình Ảnh</th>
                        <th>Tên Sản Phẩm </th>
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Tổng</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>

                
                <tbody id="cart-items">

                <?php
                    $tong= 0 ;
                    $i=0;
                    foreach($_SESSION['mycart'] as $cart){
                        $ttien = $cart[5]*$cart[4];
                        $tong+=$ttien;
                        // var_dump($cart[2]);
                        $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><button class="btn btn-danger btn-sm">Xóa</button></a>';
                        echo '
                            <tr>
                                <td><img src="./upload/'.$cart[2].'" alt="" height="100px"></td>
                                <td>'.$cart[1].'</td>
                                <td>'.number_format($cart[5], 0, ',', '.').'vnd</td>
                                <td>'.$cart[4].'</td>
                                <td>'.number_format($ttien, 0, ',', '.').'vnd</td>
                                <td>'.$xoasp.'</td>
                            </tr>';
                        $i++;

                    }
                        echo '
                            <tr>
                                <td colspan= "4">Tổng đơn hàng</td>
                                <td>' .  number_format($tong, 0, ',', '.') .'vnd</td>
                                <td></td>
                            </tr> ';
                    
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <h3 class="text-danger mb-3">Cart Summary</h3>
            <p><strong>Tog:</strong> <span id="cart-total"><?= number_format($tong, 0, ',', '.');?>vnd</span></p>
            <a href="?act=trangchu" class="btn btn-outline-danger">Thêm Đơn Hàng</a>
            <a href="?act=bill" class="btn btn-danger">Mua</a>
        </div>
    </div>
</div>