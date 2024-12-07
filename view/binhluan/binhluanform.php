<?php
session_start();
    include "../../model/pdo.php";
    include "../../model/comment.php";

    
    $id_sp = $_GET['id_sp'];
    $tensp = isset($_GET['tensp']) ? urldecode($_GET['tensp']) : '';
    $dsbl=  list_binhluan($id_sp);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./view/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="./view/css/all.css" rel="stylesheet" type="text/css" media="all">
    <link href="./view/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="./view/css/responsives.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./view/css/font-awesome.min.css">
    <link href="./view/css/cf-stylesheet.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<body>


<div class="container mt-5">
<div class="border border-danger rounded shadow-lg p-4 mb-4 bg-danger" style="border-width: 3px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
    <h2 class="text-center text-white">Bình luận</h1>
</div>
             <div class="">
        <h4 class="text-secondary">Danh sách bình luận</h4>
        <ul class="list-group">
                <?php

                    foreach($dsbl as $bl){
                        extract($bl);
                        echo '
                            <li class="list-group-item">
                        <strong style="Color: red">'.$hoten.' đã bình luận:</strong> '.$noidung.'
                      </li>
                        ';

                    }                
                ?>

</ul>
    </div>



        <form action = "<?php $_SERVER['PHP_SELF']; ?>" method= "post">
            <div class="mb-3">
                <label for="comment" class="form-label">Nội dung bình luận</label>
                <textarea class="form-control" name="noidung" id="noidung" rows="3" placeholder="Nhập bình luận của bạn" required></textarea>
                <input type="hidden" value="<?= $id_sp?>" name="id_sp">
                <input type="hidden" name="tensp" value="<?= $tensp ?>">

            </div>
            <!-- Nút gửi -->
            <button type="submit" name="guibinhluan" class="btn btn-primary">Gửi bình luận</button>
        </form>

        <?php
           if (isset($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $id_sp = $_POST['id_sp'];
            $tensp = $_POST['tensp']; 
            $hoten = $_SESSION['user']['hoten'];
            $id_nguoidung = $_SESSION['user']['id_nguoidung'];
            $ngaybl = date('h:i:sa d/m/Y');
        
            // Lưu vào cơ sở dữ liệu
            insert_binhluan($id_nguoidung, $hoten, $id_sp, $tensp, $noidung, $ngaybl);
        }
        
        ?>

    </div>  

</body>
</html>