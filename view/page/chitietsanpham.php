<br>
<div class="a1">
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
                    <ul style=" display: list-item;"> Nồng độ: <?php echo $ctsanpham['nongdo']?> </ul>
                    <ul style="  display: list-item;   margin-top: -12px;">Dung Lượng: <?php echo $ctsanpham['dungluong']?></ul>
                    <ul style="  display: list-item;   margin-top: -12px;">Số Lượng: <?php echo $ctsanpham['soluong']?></ul>
                </div>
                <h4 style="font-weight: 500; font-size: 20px;">Mô Tả:</h4>
                <p style="font-weight: 500; font-size: 18px;"><?php echo $ctsanpham['mota']?></p>
                <div class="d-flex">
                    <div style="font-size: 15px;">

                        <span class="text-decoration-line-through" style="font-weight: 500; font-size: 25px; margin-left:15px;color: red;"><del><?php echo number_format($ctsanpham['giamgia'], 0, ',', '.'); ?></del></span>
                                            <span style="font-weight: 500; font-size: 30px;  margin-left:10px;"><?php echo number_format($ctsanpham['giatien'], 0, ',', '.'); ?> VNĐ </span>
                        <div class="d-flex" style="padding-top: 90px; ">
                            <!-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem"> -->
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" style="font-size: 20px;" name="addtocart" >
                                <i class="bi-cart-fill me-1"></i>
                                Thêm Vào Giỏ Hàng
                            </button>
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



<!-- hien thi binh luan -->
