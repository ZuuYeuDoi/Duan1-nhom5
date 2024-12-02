<?php
extract($chitietsp)
?>
<style>
    /* body {
    background-color: #f0f0f0;
    font-family: Inter, sans-serif;
    margin: 0;
    padding: 20px;
} */

.tong1 {
    display: flex;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.hang {
    color: #5E1E07;
    text-align: center;
    font-size: 50px;
    font-weight: 600;
    flex: 0 0 375px;
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
    margin: 10px 0;
}

.canhbao {
    color: #F00;
    text-align: center;
    font-size: 20px;
    font-weight: 700;
    margin: 20px 0;
}

.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.giohang, .mualai {
    padding: 12px 25px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 18px;
}

.giohang {
    background-color: #dc3545;
    color: white;
    margin-right: 20px;
}

.giohang:hover {
    background-color: #c82333;
}

.mualai {
    background-color: #343a40;
    color: white;
}

.mualai:hover {
    background-color: #23272b;
}

.mota {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.mota a {
    font-size: 24px;
    color: #5E1E07;
    text-decoration: none;
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
}

.mota a:hover {
    text-decoration: underline;
    color: #3b0e04;
}

.product-container {
    display: flex;
    flex-wrap: wrap; /* Cho phép sản phẩm xuống hàng */
    justify-content: space-between; /* Căn giữa các sản phẩm */
    max-width: 1500px;
    margin: auto;
}

.sanpham2 {
    display: flex;
    flex-direction: column; /* Sắp xếp theo chiều dọc */
    align-items: center; /* Căn giữa theo chiều ngang */
    margin: 20px; /* Khoảng cách giữa các sản phẩm */
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: calc(25% - 40px); /* Chiều rộng sản phẩm (25% - margin) */
    height: 350px; /* Chiều cao sản phẩm */
    transition: box-shadow 0.3s, transform 0.3s;
}

.sanpham2:hover {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.product-image {
    width: 150px;
    height: auto;
    margin-bottom: 10px;
    border-radius: 5px;
    transition: transform 0.3s;
}

.sanpham2:hover .product-image {
    transform: scale(1.1);
}

.chucai {
    font-size: 28px;
    font-weight: bold;
    color: white;
    text-align: center;
    margin: 20px 0;
    padding: 15px;
    background: linear-gradient(45deg, #5E1E07, #dc3545);
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: transform 0.3s;
    width: 1200px;
    margin: auto;
}

.chucai:hover {
    transform: scale(1.05);
}



        .star-rating {
            display: flex; /* Sử dụng Flexbox */
            justify-content: center; /* Căn giữa ngôi sao theo chiều ngang */
        }

        .star-rating label {
            font-size: 20px; /* Kích thước của sao */
            color: #f39c12; /* Màu vàng */
            cursor: default; /* Không cho phép nhấp chuột */
            animation: sparkle 1.5s infinite alternate; /* Hiệu ứng lấp lánh */
            transition: transform 0.3s; /* Hiệu ứng chuyển động */
        }

        @keyframes sparkle {
            0% {
                opacity: 0.8;
                transform: translateY(0);
            }
            50% {
                opacity: 1;
                transform: translateY(-5px); /* Nâng lên một chút */
            }
            100% {
                opacity: 0.8;
                transform: translateY(0);
            }
        }

        .star-rating label:hover {
            transform: scale(1.2) rotate(10deg); /* Phóng to và xoay khi hover */
            animation: none; /* Tạm dừng hiệu ứng lấp lánh khi hover */
        }
        .product-container {
            .product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around; /* Căn giữa các sản phẩm */
    max-width: 1200px;
    margin: auto;
}

.sanpham2 {
    display: flex;
    flex-direction: column; /* Sắp xếp theo chiều dọc */
    align-items: center; /* Căn giữa theo chiều ngang */
    margin: 20px;
    padding: 20px; /* Tăng padding để tạo không gian bên trong */
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 300px; /* Chiều rộng sản phẩm */
    height: 400px; /* Tăng chiều cao sản phẩm */
}

.product-image {
    width: 150px; /* Chiều rộng của ảnh */
    height: auto; /* Chiều cao tự động */
    margin-bottom: 20px; /* Khoảng cách giữa ảnh và thông tin */
}

.product-details {
    text-align: center; /* Căn giữa nội dung */
}

.star-rating {
    margin: 0px 0; /* Khoảng cách giữa đánh giá và thông tin khác */
}

.star-rating label {
    font-size: 20px; /* Kích thước của sao */
    color: #f39c12; /* Màu vàng */
}

.product-name {
    font-size: 18px; /* Kích thước tên sản phẩm */
    font-weight: bold; /* Đậm */
    color: #5E1E07; /* Màu chữ */
}
}
.quantity-container {
    display: flex; /* Sử dụng Flexbox */
    align-items: center; /* Căn giữa các phần tử theo chiều dọc */
    justify-content: space-between; /* Căn giữa các phần tử theo chiều ngang */
    margin-top: 20px; /* Khoảng cách phía trên */
    padding: 10px; /* Khoảng cách bên trong */
    background-color: #f9f9f9; /* Màu nền */
    border-radius: 5px; /* Bo góc */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng */
}

.quantity-container label {
    margin-right: 10px; /* Khoảng cách giữa nhãn và input */
    font-size: 16px; /* Kích thước chữ */
    color: #5E1E07; /* Màu chữ */
}

.giasp {
    font-size: 16px; /* Kích thước chữ */
    color: #000; /* Màu chữ giá */
}
.button-container {
    display: flex; /* Sử dụng Flexbox để căn chỉnh các nút */
    justify-content: center; /* Căn giữa các nút */
    margin-top: 20px; /* Khoảng cách trên */
}

.giohang, .mualai {
    padding: 12px 25px; /* Padding cho nút */
    border: 2px solid red; /* Viền đỏ */
    border-radius: 5px; /* Bo góc */
    background-color: white; /* Nền trắng */
    color: red; /* Chữ đỏ */
    cursor: pointer; /* Hiệu ứng con trỏ khi hover */
    transition: background-color 0.3s, color 0.3s; /* Hiệu ứng chuyển đổi */
    font-size: 18px; /* Kích thước chữ */
    margin: 0 10px; /* Khoảng cách giữa hai nút */
}

.giohang:hover, .mualai:hover {
    background-color: red; /* Nền đỏ khi hover */
    color: white; /* Chữ trắng khi hover */
}

</style>


<script>
    document.getElementById('quantity').addEventListener('input', function() {
        // Lấy giá cơ bản từ thuộc tính data-price
        const basePrice = parseFloat(this.getAttribute('data-price'));
        // Lấy số lượng từ input
        const quantity = parseInt(this.value);
        // Tính toán giá tổng
        const totalPrice = basePrice * quantity;
        // Cập nhật giá hiển thị
        document.getElementById('total-price').textContent = totalPrice.toFixed(0);
    });
</script>
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
        
        <li>Dung Tich : <?php echo $dungluong?>ml</li>
      <li>  Nồng độ :  <?php echo $nongdo?>%</li>
       
        </ul>
  
</div>
<div class="canhbao">
    Canh bao bạn phải đủ 18 tuôi trờ lên mới mua được hàng
</div>
<div class="quantity-container">
    <label for="quantity">Số lượng:</label>
    <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" style="width: 60px; text-align: center;" data-price="<?php echo $giatien; ?>">
    <div class="giasp">Giá: <span id="total-price"><?php echo $giatien; ?></span> VNĐ</div>
</div>
<div class="button-container">
    <div class="giohang">Thêm vào giỏ hàng</div>
    <div class="mualai">Mua Ngay</div>
</div>
<br><br> <br>

</div>
</div>

</div>
<div class="mota">
    <a href="#">Mô tả</a>
    <?php echo $mota; ?>
</div>
<br>
<div class="chucai">
    Sản Phẩm liên quan
</div>
<div class="product-container">
    <?php foreach($listsanpham as $row): ?>
    <div class="sanpham2">
        <img src="upload/<?php echo $row['anhsp'] ?>" class="product-image" alt="Sản phẩm">
        <div class="product-details">
        <h5 class="product-name"><?php echo $row['tensp']?></h5>
  
            <div class="star-rating">
                <label>★</label>
                <label>★</label>
                <label>★</label>
                <label>★</label>
                <label>★</label>
            </div>
            <div>Giá: <?php echo $row['giatien']?> VNĐ</div>
            <div>Giảm Giá: <?php echo $row['giamgia']?>%</div>
            <div>Nồng Độ: <?php echo $row['nongdo']?>%</div>
            <div>Dung Lượng: <?php echo $row['dungluong']?>ml</div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
  
</div>
</div>

</div>
</div>
</div>