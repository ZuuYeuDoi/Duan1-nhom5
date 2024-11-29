<?php
extract($chitietsp)
?>
<style>
    body {
        background-color: #f0f0f0; /* Màu nền cho body */
        font-family: Inter, sans-serif; /* Đặt font cho toàn bộ trang */
        margin: 0; /* Bỏ khoảng cách mặc định của body */
        padding: 20px; /* Khoảng cách bên trong body */
    }

    .tong1 {
        display: flex; /* Sử dụng flexbox để sắp xếp các thành phần */
        max-width: 1200px; /* Đặt chiều rộng tối đa cho khung tổng */
        margin: 0 auto; /* Căn giữa khung tổng */
        padding: 20px; /* Khoảng cách bên trong khung tổng */
        background-color: #fff; /* Màu nền cho khung tổng */
        border-radius: 10px; /* Bo góc cho khung */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng cho khung */
    }

    .hang {
        color: #5E1E07;
        text-align: center;
        font-family: Inter;
        font-size: 50px;
        font-weight: 600;
        margin-right: 20px; /* Khoảng cách bên phải */
        flex: 0 0 375px; /* Chiều rộng cố định cho phần tử này */
    }

    .tensp {
        color: #5E1E07;
        text-align: center;
        font-size: 50px;
        font-weight: 600;
    }

    .gioithieu {
        color: #000;
        font-size: 25px;
        font-weight: 500;
        margin: 10px 0; /* Khoảng cách trên/dưới */
    }

    .canhbao {
        color: #F00;
        text-align: center;
        font-size: 20px;
        font-weight: 700;
        margin: 20px 0; /* Khoảng cách trên/dưới */
    }
   
    .button-container {
        display: flex; /* Sử dụng flexbox để sắp xếp các nút nằm ngang */
        justify-content: center; /* Căn giữa các nút trong container */
        margin-top: 20px; /* Khoảng cách trên cho container */
    }

    .giohang {
        padding: 12px 25px; /* Tăng khoảng cách bên trong */
        background-color: #dc3545; /* Màu nền đỏ */
        color: white; /* Màu chữ */
        border-radius: 5px; /* Bo góc */
        margin-right: 20px; /* Khoảng cách bên phải */
        cursor: pointer; /* Hiệu ứng con trỏ khi di chuột qua */
        transition: background-color 0.3s; /* Hiệu ứng chuyển màu nền */
        font-size: 18px; /* Tăng kích thước chữ */
    }

    .giohang:hover {
        background-color: #c82333; /* Đổi màu nền khi hover */
    }

    .mualai {
        padding: 12px 25px; /* Tăng khoảng cách bên trong */
        background-color: #343a40; /* Màu nền đen */
        color: white; /* Màu chữ */
        border-radius: 5px; /* Bo góc */
        cursor: pointer; /* Hiệu ứng con trỏ khi di chuột qua */
        transition: background-color 0.3s; /* Hiệu ứng chuyển màu nền */
        font-size: 18px; /* Tăng kích thước chữ */
    }

    .mualai:hover {
        background-color: #23272b; /* Đổi màu nền khi hover */
    }
    .mota {
        background-color: #f9f9f9; /* Màu nền nhẹ cho phần mô tả */
        border: 1px solid #ddd; /* Đường viền nhẹ */
        border-radius: 5px; /* Bo góc */
        padding: 20px; /* Khoảng cách bên trong */
        margin-top: 20px; /* Khoảng cách trên */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ */
        width: 1200px;
        margin: auto;
    }

    .mota a {
        font-size: 24px; /* Kích thước chữ cho tiêu đề */
        color: #5E1E07; /* Màu chữ cho liên kết */
        text-decoration: none; /* Bỏ gạch chân */
        font-weight: bold; /* Chữ đậm */
        display: block; /* Để chiếm toàn bộ chiều rộng */
        margin-bottom: 10px; /* Khoảng cách dưới tiêu đề */
    }

    .mota a:hover {
        text-decoration: underline; /* Gạch chân khi hover */
        color: #3b0e04; /* Màu chữ khi hover */
    }

    .noidung {
        font-size: 16px; /* Kích thước chữ cho nội dung */
        color: #333; /* Màu chữ cho nội dung */
        line-height: 1.5; /* Đặt khoảng cách dòng */
        margin-top: 10px; /* Khoảng cách trên cho nội dung */
    }
   
    
    .product-container {
        display: flex; /* Sử dụng flexbox cho container */
        flex-wrap: wrap; /* Cho phép các sản phẩm xuống dòng nếu không đủ chỗ */
        justify-content: center; /* Căn giữa các sản phẩm */
        margin: 0 auto; /* Căn giữa container */
        max-width: 1200px; /* Chiều rộng tối đa của container */
    }

    .sanpham2 {
        display: flex; /* Sử dụng flexbox để sắp xếp ảnh và chữ nằm ngang */
        flex-direction: column; /* Sắp xếp theo chiều dọc cho nội dung */
        align-items: center; /* Căn giữa theo chiều ngang */
        margin: 20px; /* Khoảng cách giữa các sản phẩm */
        padding: 15px; /* Khoảng cách bên trong */
        border: 1px solid #ddd; /* Đường viền nhẹ */
        border-radius: 5px; /* Bo góc */
        background-color: #f9f9f9; /* Màu nền */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ */
        width: 250px; /* Chiều rộng cố định cho sản phẩm */
        height: 350px; /* Đặt chiều cao cố định để giữ các sản phẩm bằng nhau */
        transition: box-shadow 0.3s, transform 0.3s; /* Hiệu ứng chuyển tiếp cho đổ bóng và biến đổi */
    }

    .sanpham2:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Đổ bóng mạnh hơn khi hover */
        transform: translateY(-5px); /* Nâng sản phẩm lên một chút khi hover */
    }

    .product-image {
        width: 150px; /* Đặt chiều rộng cho ảnh */
        height: auto; /* Để chiều cao tự động */
        margin-bottom: 10px; /* Khoảng cách dưới cho ảnh */
        border-radius: 5px; /* Bo góc cho ảnh */
        transition: transform 0.3s; /* Hiệu ứng chuyển tiếp cho ảnh */
    }

    .sanpham2:hover .product-image {
        transform: scale(1.1); /* Phóng to ảnh khi hover */
    }

    .mota1 {
        display: flex; /* Sử dụng flexbox cho nội dung */
        flex-direction: column; /* Sắp xếp theo chiều dọc */
        align-items: center; /* Căn giữa theo chiều ngang */
        font-size: 16px; /* Kích thước chữ */
        color: #333; /* Màu chữ */
        line-height: 1.5; /* Khoảng cách giữa các dòng */
        flex-grow: 1; /* Cho phép chiếm không gian còn lại */
    }

    .product-name {
        font-size: 18px; /* Kích thước chữ cho tên sản phẩm */
        font-weight: bold; /* Chữ đậm cho tên sản phẩm */
        color: #5E1E07; /* Màu chữ cho tên sản phẩm */
        margin-bottom: 5px; /* Khoảng cách dưới cho tên sản phẩm */
        text-align: center; /* Căn giữa chữ */
    }

    .product-details {
        font-size: 14px; /* Kích thước chữ cho chi tiết sản phẩm */
        color: #777; /* Màu chữ nhẹ hơn cho chi tiết */
        margin-bottom: 10px; /* Khoảng cách dưới cho chi tiết sản phẩm */
        text-align: center; /* Căn giữa chữ */
    }

    .product-price {
        font-size: 18px; /* Kích thước chữ cho giá */
        font-weight: bold; /* Chữ đậm cho giá */
        color: #dc3545; /* Màu chữ nổi bật cho giá */
        text-align: center; /* Căn giữa chữ */
    }
    .chucai {
        font-size: 28px; /* Kích thước chữ lớn */
        font-weight: bold; /* Chữ đậm */
        color: white; /* Màu chữ trắng */
        text-align: center; /* Căn giữa chữ */
        margin: 20px 0; /* Khoảng cách trên và dưới */
        padding: 15px; /* Khoảng cách bên trong */
        background: linear-gradient(45deg, #5E1E07, #dc3545); /* Hiệu ứng gradient */
        border-radius: 10px; /* Bo góc cho khung */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Đổ bóng mạnh hơn */
        text-transform: uppercase; /* Chữ in hoa */
        letter-spacing: 2px; /* Khoảng cách giữa các chữ */
        font-family: 'Verdana', sans-serif; /* Phông chữ hiện đại */
        transition: transform 0.3s; /* Hiệu ứng chuyển động */
        width: 1200px;
        margin: auto;
    }

    .chucai:hover {
        transform: scale(1.05); /* Tăng kích thước khi hover */
    }
</style>


</style>
<div class="tong1">
<div class="hang">
<h1><?= $hang ?></h1>
<img src="./upload/<?= $anhsp ?>" alt="" with="400px" height="300px">
<hr>



</div>

<div class="tong2">
<div class="thanhtoan">
    <div class="tensp">
        <h1><?= $tensp ?></h1>
    </div>

<div class="gioithieu">
    <ul>
        <li>Dung Tich : 700ml</li>
        <li>Nồng độ : 40%</li>
        <li>Nhãn hiệu : Ruou Vang</li>
    </ul>
</div>
<div class="canhbao">
    Canh bao bạn phải đủ 18 tuôi trờ lên mới mua được hàng
</div>
<div class="button-container">
    <div class="giohang">Thêm vào giỏ hàng</div>
    <div class="mualai">Mua Lại</div>
</div>
<br><br> <br>

</div>
</div>

</div>
<div class="mota">
    <a href="#">Mô tả</a>
   <? $mota ?>
   

</div>
<br>
<div class="chucai">
    Sản Phẩm liên quan
</div>
<div class="product-container">
    <div class="sanpham2">
        
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name"><?= $tensp ?></div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">
            <div class="product-price">800.000.000đ</div>
             
            </div>
        </div>
    </div>
    
    <div class="sanpham2">
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name"><?= $tensp ?></div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">800.000.000đ</div>
        </div>
    </div>

    <div class="sanpham2">
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name">Canti Gran Passero Appassimento</div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">800.000.000đ</div>
        </div>
    </div>

    <div class="sanpham2">
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name">Canti Gran Passero Appassimento</div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">800.000.000đ</div>
        </div>
    </div>

    <div class="sanpham2">
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name">Canti Gran Passero Appassimento</div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">800.000.000đ</div>
        </div>
    </div>
    <div class="sanpham2">
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name">Canti Gran Passero Appassimento</div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">800.000.000đ</div>
        </div>
    </div>
    <div class="sanpham2">
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name">Canti Gran Passero Appassimento</div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">800.000.000đ</div>
        </div>
    </div>
    <div class="sanpham2">
        <img src="./upload/<?= $anhsp ?>" alt="Sản phẩm" class="product-image">
        <div class="mota1">
            <div class="product-name">Canti Gran Passero Appassimento</div>
            <div class="product-details">750ml / 14.5%</div>
            <div class="product-price">800.000.000đ</div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>

