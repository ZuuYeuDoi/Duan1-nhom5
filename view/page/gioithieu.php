<style>
    * {
        box-sizing: border-box
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1399px;
        position: relative;
        margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
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

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }
</style>
<br><br>
<h1 class="text-center text-primary">Giới Thiệu</h1><br>
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="view\images\banner3.png" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="view\images\banner4.png" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="view\images\banner5.png" style="width:100%">
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
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 1300); // Change image every 2 seconds
    }
</script>
<style>
     
        h1 {
            font-size: 6rem; /* Cỡ chữ lớn hơn cho tiêu đề chính */
            font-weight: bold; /* Đậm */
        }
        h2 {
            font-size: 4.8rem; /* Cỡ chữ lớn hơn cho tiêu đề chính */
            font-weight: bold; /* Đậm */
        }
        h3 {
            font-size: 2.6rem; /* Cỡ chữ cho tiêu đề phụ */
            font-weight: bold; /* Đậm */
        }
        p {
            font-size: 2rem; /* Cỡ chữ cho đoạn văn */
            line-height: 1.5; /* Khoảng cách giữa các dòng */
            padding: 6.5px;
        }
</style>
<div class="container">
    <h2 class="text-center">Wineking - Thế giới rượu vang đẳng cấp, trải nghiệm thượng lưu</h2>
    <div class="my-4">
        <h3 class="text-primary">Khám phá hương vị tuyệt vời cùng Wineking</h3>
        <p>Bạn là người yêu thích rượu vang và đang tìm kiếm một địa chỉ uy tín để thưởng thức những chai rượu hảo hạng? Hãy đến với Wineking, nơi hội tụ tinh hoa của thế giới rượu vang.</p> </div>
    <h3>Tại sao nên chọn Wineking?</h3>
    <p>• Nguồn gốc rõ ràng, chất lượng đảm bảo: Tất cả các sản phẩm rượu tại Wineking đều được nhập khẩu chính hãng từ các nhà sản xuất danh tiếng trên thế giới, đảm bảo chất lượng tuyệt đối.</p>
    <p>• Đa dạng chủng loại: Với hàng trăm nhãn hiệu rượu vang đến từ các quốc gia sản xuất rượu vang nổi tiếng như Pháp, Ý, Tây Ban Nha, Chile,... Wineking đáp ứng mọi nhu cầu của khách hàng, từ những chai rượu vang trẻ trung, sôi động đến những chai rượu vang cổ điển, đậm đà hương vị.</p>
    <p>• Giá cả cạnh tranh: Wineking cam kết mang đến cho khách hàng những sản phẩm chất lượng với giá cả hợp lý.</p>
    <p>• Dịch vụ chuyên nghiệp: Đội ngũ nhân viên tư vấn nhiệt tình, giàu kinh nghiệm sẽ giúp bạn lựa chọn được chai rượu phù hợp với khẩu vị và sở thích của mình.</p>
    <h3>Những trải nghiệm đặc biệt tại Wineking</h3>
    <p>• Tổ chức các buổi tasting rượu: Tham gia các buổi tasting rượu tại Wineking để khám phá hương vị của nhiều loại rượu khác nhau, học hỏi kiến thức về rượu vang và giao lưu với những người cùng sở thích.</p>
    <p>• Tư vấn chọn rượu: Đội ngũ chuyên gia của Wineking sẽ giúp bạn lựa chọn những chai rượu phù hợp với từng món ăn, từng dịp đặc biệt.
    Giao hàng nhanh chóng, tận nơi: Wineking cung cấp dịch vụ giao hàng nhanh chóng, tận nơi trên toàn quốc.</p>
    <h3>Một số dòng rượu nổi bật tại Wineking:</h3>
    <p>• Rượu vang đỏ: Với hương vị đậm đà, tannin mạnh mẽ, rượu vang đỏ là lựa chọn hoàn hảo cho những bữa ăn thịnh soạn.</p>
    <p>• Rượu vang trắng: Hương vị tươi mát, thanh lịch, rượu vang trắng rất thích hợp dùng kèm với hải sản, các món khai vị.</p>
    <p>• Rượu vang hồng: Kết hợp hài hòa giữa hương vị của rượu vang đỏ và rượu vang trắng, rượu vang hồng là sự lựa chọn đa năng cho mọi bữa tiệc.</p>
    <p>• Rượu sâm banh: Mang đến sự sang trọng và đẳng cấp, rượu sâm banh là lựa chọn hoàn hảo cho những dịp đặc biệt.</p>
    <h3>Liên hệ với Wineking</h3>
    <p>• Địa chỉ: [Địa chỉ cửa hàng]</p>
    <p>• Điện thoại: [Số điện thoại]</p>
    <p>• Website: [Website của cửa hàng]</p>
</div>