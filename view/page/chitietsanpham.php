<br>



<div class="a1">

<form action="index.php?act=addtocart"method="post">
                        <input type="hidden" name="id_sp" value="<?= $ctsanpham['id_sp']?>">
                        <input type="hidden" name="tensp" value="<?= $ctsanpham['tensp']?>">
                        <input type="hidden" name="anhsp" value="<?= $ctsanpham['anhsp']?>">
                        <input type="hidden" name="giamgia" value="<?= $ctsanpham['giamgia']?>">

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src=".\upload\<?php echo $ctsanpham['anhsp'] ?>" alt="..."  style="width: 500px; height: 630px ;"></div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder" style="    margin-top: -100px;
    font-size: 50px;
"><?php echo $ctsanpham['tensp']?>
                </h1>
                <div style="margin-left: 20px;
                       margin-top: 20px;
                        font-weight: 400;
                        font-size: 20px;">
                    <ul style=" display: list-item;"> Nồng độ: <?php echo $ctsanpham['nongdo']?> %</ul>
                    <ul style="  display: list-item;   margin-top: -12px;">Dung Lượng: <?php echo $ctsanpham['dungluong']?> ml</ul>
                    <ul style="  display: list-item;   margin-top: -12px;">Số Lượng: <?php echo $ctsanpham['soluong']?></ul>
                </div>
                <h4 style="font-weight: 500; font-size: 20px;">Mô Tả:</h4>
                <p style="font-weight: 500; font-size: 18px;"><?php echo $ctsanpham['mota']?></p>
                <div class="d-flex">
                    <div style="font-size: 15px;">

                        <span class="text-decoration-line-through" style="font-weight: 500; font-size: 25px; margin-left:15px;color: red;"><del><?php echo number_format($ctsanpham['giamgia'], 0, ',', '.'); ?></del></span>
                                            <span style="font-weight: 500; font-size: 30px;  margin-left:10px;"><?php echo number_format($ctsanpham['giatien'], 0, ',', '.'); ?> VNĐ </span>
                                            <div>
        Số lượng:
        <input class="form-control text-center me-3" name="quantity" id="inputQuantity" type="number" value="1" min="1" max="<?php echo $ctsanpham['soluong']; ?>" required style="max-width: 5rem">
    </div>
    <div class="" style="padding-top:10px">  <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn btn-outline-dark flex-shrink-0" style="font-size: 20px;"> </div>
    
    
    <!-- <button class="btn btn-outline-dark flex-shrink-0" type="submit" style="font-size: 20px;" name="addtocart">
        <i class="bi-cart-fill me-1"></i>
        Thêm Vào Giỏ Hàng
    </button> -->
                            <!-- <button class="btn btn-outline-dark flex-shrink-0" type="button" style="margin-left:15px;font-size: 20px;">
                                <i class="bi-cart-fill me-1"></i>
                                Mua Ngay
                            </button> -->
                        </div>

                    </div>

                    <!-- <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button> -->
                    <!-- <div class="">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</section>



</form>

<div class="indor-plant-product">
<div class="container mt-5">

<div class="border border-danger rounded shadow-lg p-4 mb-4 bg-danger" style="border-width: 3px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
    <h1 class="text-center text-white">Sản Phẩm Mới Nhất</h1>
</div>

<br>
            <div class="row">
                <div class="indoor-product-active">


                    <!--Single Product Start-->

                    <?php foreach ($list9sp as $key => $sp9) {

                    ?>
                    <form action="index.php?act=addtocart"method="post">
                        <input type="hidden" name="id_sp" sp9="<?= $sp9['id_sp']?>">
                        <input type="hidden" name="tensp" sp9="<?= $sp9['tensp']?>">
                        <input type="hidden" name="anhsp" sp9="<?= $sp9['anhsp']?>">
                        <input type="hidden" name="giamgia" sp9="<?= $sp9['giamgia']?>">

                        <div class="col-xs-6 col-md-4">

                            <div class="single-product mb-10">
                                <div style="height: 400px" class="product-img img-full">
                                <a href="index.php?act=chitietsp&id_sp=<?= $sp9['id_sp']?>" title="Universe Is Ready">
                                        <input type="hidden" name="id" sp9="<?= $sp9['id_sp']?>">
                                        <span class="onsale">- 16%</span>

                                        <img  class="visible-xs lazyload" src="upload/<?php echo $sp9['anhsp'] ?>">


                                        <img class="hidden-xs lazyload protmt1 " src="upload/<?php echo $sp9['anhsp'] ?>">
                                        <img  class="pro-img2 hidden-xs" src="view\images\1.png" alt="Universe Is Ready">
                                    </a>
                                    <!-- <button class="product-action btn-quickview-1" style="padding: 10px;" name="addtocart" >Thêm vào giỏ hàng</button> -->
                                    <div class="product-action btn-quickview-1" style="padding:10px">  <input type="submit" name="addtocart" sp9="Thêm vào giỏ hàng" class="btn btn-danger"> </div>
                                                                     
                                    <!-- <a href="" class="product-action btn-quickview-1" data-handle="/universe-is-ready-1">
                                        <ul>
                                            <li>XEM CHI TIẾT</li>

                                        </ul> -->
                                    <!-- </a> -->
                                </div>
                                <div class="product-content">
                                    <h3><a href="index.php?act=chitietsp&id_sp=<?= $sp9['id_sp']?>"title="Universe Is Ready"><?php echo $sp9['tensp'] ?></a></h3>
                                    <div class="product-price">
                                        <div class="price-box">


                                            <span class="regular-price"><?php echo number_format($sp9['giamgia'], 0, ',', '.'); ?> VNĐ </span>

                                            <span class="price ml5" style = "color: red"><?php echo number_format($sp9['giatien'], 0, ',', '.'); ?></span>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Single Product End-->
                    <?php } ?>


             

                </div>
            </div>
        </div>
                    </div>


<!-- hien thi binh luan -->

<iframe src="view/binhluan/binhluanform.php?id_sp=<?= $ctsanpham['id_sp'] ?>&tensp=<?= urlencode($ctsanpham['tensp']) ?>" frameborder="0" width="1440px" height="500px" style="margin-right:30px"></iframe>