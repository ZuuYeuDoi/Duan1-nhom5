<br><br>
<div>

<div class="indor-plant-product">

<div class="border border-danger rounded shadow-lg p-4 mb-4 bg-danger" style="border-width: 3px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
    <h1 class="text-center text-white">Rượu Thượng Hạng</h1>
</div>

<br>
            <div class="row">
                <div class="indoor-product-active">


                    <!--Single Product Start-->

                    <?php foreach ($listshop as $key => $value) {

                    ?>
                    <form action="index.php?act=addtocart"method="post">
                        <input type="hidden" name="id_sp" value="<?= $value['id_sp']?>">
                        <input type="hidden" name="tensp" value="<?= $value['tensp']?>">
                        <input type="hidden" name="anhsp" value="<?= $value['anhsp']?>">
                        <input type="hidden" name="giamgia" value="<?= $value['giamgia']?>">

                        <div class="col-xs-6 col-md-4">

                            <div class="single-product mb-10">
                                <div style="height: 400px" class="product-img img-full">
                                <a href="index.php?act=chitietsp&id_sp=<?= $value['id_sp']?>" title="Universe Is Ready">
                                        <input type="hidden" name="id" value="<?= $value['id_sp']?>">
                                        <span class="onsale">- 16%</span>

                                        <img  class="visible-xs lazyload" src="upload/<?php echo $value['anhsp'] ?>">


                                        <img class="hidden-xs lazyload protmt1 " src="upload/<?php echo $value['anhsp'] ?>">
                                        <img  class="pro-img2 hidden-xs" src="view\images\1.png" alt="Universe Is Ready">
                                    </a>
                                    <!-- <button class="product-action btn-quickview-1" style="padding: 10px;" name="addtocart" >Thêm vào giỏ hàng</button> -->
                                    <div class="product-action btn-quickview-1" style="padding:10px">  <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn btn-danger"> </div>
                                                                     
                                    <!-- <a href="" class="product-action btn-quickview-1" data-handle="/universe-is-ready-1">
                                        <ul>
                                            <li>XEM CHI TIẾT</li>

                                        </ul> -->
                                    <!-- </a> -->
                                </div>
                                <div class="product-content">
                                    <h3><a href="index.php?act=chitietsp&id_sp=<?= $value['id_sp']?>"title="Universe Is Ready"><?php echo $value['tensp'] ?></a></h3>
                                    <div class="product-price">
                                        <div class="price-box">


                                            <span class="regular-price"><?php echo number_format($value['giamgia'], 0, ',', '.'); ?> VNĐ </span>

                                            <span class="price ml5" style = "color: red"><?php echo number_format($value['giamgia'], 0, ',', '.'); ?></span>

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