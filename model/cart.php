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

function insert_bill($name, $addr, $pttt, $phone, $ngaydathang, $tongbill){
    $sql = "insert into don_hang(hoten,sdt,diachi,pttt,ngaydathang,tongtien) values('$name','$addr','$phone','$ngaydathang','$tongbill')";
     return pdo_execute_return_lastIsertId($sql);

}

function insert_cart($id_nguoidung, $id_sp, $id_donhang, $soluong, $tongbill, $anhsp, $tensp, $giamgia){
    $sql = "insert into chi_tiet_don_hang(id_nguoidung,id_sp,id_donhang,pttt,soluong,thanhtien, img, name, price) values('$id_nguoidung','$id_sp', '$id_donhang', '$soluong', '$tongbill', '$anhsp', '$tensp', '$giamgia')";
     return pdo_execute($sql);

}

function loadone_bill($id) {
    $sql = "SELECT * FROM chi_tiet_don_hang WHERE id_donhang = $id";
    $bill = pdo_query_one($sql);
    return $bill;
}


?>