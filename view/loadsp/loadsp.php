<style>
    * {
        box-sizing: border-box
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        /* Smooth opacity transition */
    }

    /* Show the current slide */
    .mySlides.active {
        display: block;
        opacity: 1;
        /* Fully visible */
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }
</style>

<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides">
        <div class="numbertext">1 / 3</div>
        <img src="view/images/banner1.png" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img src="view/images/banner2.png" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img src="view/images/banner1.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->

</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");

        for (i = 0; i < slides.length; i++) {
            slides[i].classList.remove('active'); // Hide slides
        }

        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].classList.add('active'); // Show current slide
        dots[slideIndex - 1].className += " active";

        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
</script>
<style>
    .info {
        text-align: center;

    }

    .info p {
        font-size: 20px;
    }
</style>
<div class="info">
    <a href="#">
        <div class="section-title">
            <h2>GIÁ TỐT NHẤT TẠI WEB</h2>
        </div>
    </a>
    <p>Duy nhất tại website WineKing.Vn - từ 2024 mọi sản phẩm đều có chương trình ưu đãi tốt nhất, kết hợp đồng giá ship 10K mọi tỉnh thành</p>
</div>

<div class="indoor-plant-area pt-50 xxx-banner">
    <div class="container">
        <div class="row">
            <!--Section Title Start-->

            <div class="col-xs-12 col-sm-6">
                <a href="shop-verus" title="/wine/">
                    <img src="view\images\img1.png" alt="Verus">
                </a>
                <div class="cap-xxx">
                    <h3>
                        WineKing
                    </h3>
                    <p>
                        KEEP MOVING FORWARD
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <a href="shop-rebel-nerd" title="/REBEL NERD/">
                    <img src="view\images\img2.png" alt="Rebel Nerd">
                </a>
                <div class="cap-xxx">
                    <h3>
                        WineKing
                    </h3>
                    <p>
                        NERDY REBELS
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- sản phẩm -->
<div class="indoor-plant-area pt-50 mg-mb-10">
    <div class="container">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12">
                <div class="section-title text-center mb-50">
                    <h2>
                        <a href="/shop-verus" title="VERUS® new arrival">
                            VERUS® new arrival
                        </a>
                    </h2>
                </div>
            </div>
        </div>


        <div class="indor-plant-product">
            <div class="row">
                <div class="indoor-product-active">


                    <!--Single Product Start-->
                    <?php foreach ($listsanpham as $key => $value) {

                    ?>
                        <div class="col-xs-6 col-md-4">

                            <div class="single-product mb-10">
                                <div class="product-img img-full">
                                    <a href="/universe-is-ready-1" title="Universe Is Ready">

                                        <span class="onsale">- 16%</span>

                                        <img class="visible-xs lazyload" src="upload/<?php echo $value['anhsp'] ?>">


                                        <img class="hidden-xs lazyload protmt1 " src="upload/<?php echo $value['anhsp'] ?>">
                                        <img class="pro-img2 hidden-xs" src="view\images\2.jpg" alt="Universe Is Ready">
                                    </a>
                                    <a href="#" class="product-action btn-quickview-1" data-handle="/universe-is-ready-1">
                                        <ul>
                                            <li>XEM NHANH</li>

                                        </ul>
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="/universe-is-ready-1" title="Universe Is Ready"><?php echo $value['tensp'] ?></a></h3>
                                    <div class="product-price">
                                        <div class="price-box">


                                            <span class="regular-price"><?php echo $value['giatien'] ?></span>

                                            <!-- <span class="price ml5">130.000₫</span> -->

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div> <!--Single Product End-->
                    <?php } ?>


                </div>
            </div>
        </div>
        <div class="view-all-product text-center">
            <a href="index.php?act=sanpham" class="btnx">
                <span class="btn-content">Xem tất cả</span>
                <span class="icon"><i class="fa fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</div>