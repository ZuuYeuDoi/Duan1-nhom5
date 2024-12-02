<?php

function viewcart(){
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
}


function tongbill(){
    $tong= 0 ;
        foreach($_SESSION['mycart'] as $cart){
            $ttien = $cart[5]*$cart[4];
            $tong+=$ttien;
        }
        return $tong;
}

function insert_bill($id_nguoidung, $madh, $tongdonhang, $name, $addr, $email, $phone, $id_trangthai) {
    $sql = "INSERT INTO Don_hang (id_nguoidung, madh, tongtien, hoten, diachi, email, sdt, id_trangthai, ngaydathang) 
            VALUES (:id_nguoidung, :madh, :tongdonhang, :hoten, :diachi, :email, :sdt, :id_trangthai, NOW())";
    
    return pdo_execute_return_lastInsertId($sql, [
        ':id_nguoidung' => $id_nguoidung,
        ':madh' => $madh,
        ':tongdonhang' => $tongdonhang,
        ':hoten' => $name,
        ':diachi' => $addr,
        ':email' => $email,
        ':sdt' => $phone,
        ':id_trangthai' => $id_trangthai
    ]);
}

function insert_bill_detail( $iduser ,$idsp,$name,$image,$price,$quantity,$total_price) {
    $sql = "INSERT INTO Chi_tiet_don_hang (id_donhang, id_sp, name, img, price, soluong, thanhtien) 
            VALUES (' $iduser ','$idsp','$name','$image','$price','$quantity','$total_price')";
     pdo_execute($sql);
}

function loadone_bill($id) {
    $sql = "SELECT * FROM chi_tiet_don_hang WHERE id_donhang = $id";
    $bill = pdo_query_one($sql);
    return $bill;
}


?>