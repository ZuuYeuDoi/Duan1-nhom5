<br><br><br>
<style>
    .bn1 {
        display: flex;
        margin-left: 180px;
        width: 1200px;
    }

    .bn2 {
        margin-left: 60px;
        margin-right: 30px;
    }

    .anhbn1 {

        background-size: cover;
        height: 300px;
        /* Chiều cao của banner */
    }

    .content {
        padding: 15px;
    }
    .mt-4{
        font-size: 60px;
        color: blue;
    }
</style>
<!-- <div>
    <img src=".\upload\bannerr1.jpg" alt="">
    <h1>Rượu Vang</h1>
    <h3>Rượu vang là một thức uống có cồn làm từ nho lên men . Nấm men tiêu thụ đường trong nho và chuyển đổi nó thành ethanol , carbon dioxide và nhiệt. Các giống nho và chủng nấm men khác nhau tạo ra các kiểu rượu khác nhau</h3>
</div> -->
<div class="bn1">
    <img class="anhbn1" src=".\upload\bannerr2.jpg" alt="">
    <div class="bn2">
        <h1 class="mt-4 text-primary">Rượu Mạnh</h1>
        <h2>Rượu mạnh là các loại rượu có nồng độ cồn cao từ 40% alc– 50% alc. Các dòng rượu mạnh gồm có 6 loại chính như sau: Brandy, Whisky, Gin, Vodka, Rum và Tequila. Mỗi loại rượu đều được sản xuất từ các nguyên liệu đặc trưng, qua quá trình lên men, chưng cất và ủ riêng biệt để có hương vị say nồng, ấn tượng.</h2>
    </div>
</div>
<br><br>
<hr><br>
<div class="indor-plant-product">
            <div class="row">
                <div class="indoor-product-active">


                    <!--Single Product Start-->

                    <?php foreach ($listidsp2 as $key => $value) {

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
                                    <div class="product-action btn-quickview-1" style="padding:10px">  <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" style="border-box:none"> </div>
                                                                     
                                    <!-- <a href="" class="product-action btn-quickview-1" data-handle="/universe-is-ready-1">
                                        <ul>
                                            <li>XEM CHI TIẾT</li>

                                        </ul> -->
                                    <!-- </a> -->
                                </div>
                                <div class="product-content">
                                    <h3><a href="index.php?act=chitietsp&id_sp=<?= $value['id_sp']?>" title="Universe Is Ready"><?php echo $value['tensp'] ?></a></h3>
                                    <div class="product-price">
                                        <div class="price-box">


                                            <span class="regular-price"><?php echo number_format($value['giatien'], 0, ',', '.'); ?> VNĐ </span>

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
    <br><br><br><br><br>