<?php

function viewcart()
{
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[5] * $cart[4];
        $tong += $ttien;
        // var_dump($cart[2]);
        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><button class="btn btn-danger btn-sm">Xóa</button></a>';
        echo '
                <tr>
                    <td><img src="./upload/' . $cart[2] . '" alt="" height="100px"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . number_format($cart[5], 0, ',', '.') . 'vnd</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . number_format($ttien, 0, ',', '.') . 'vnd</td>
                    <td>' . $xoasp . '</td>
                </tr>';
        $i++;
    }
    echo '
                <tr>
                    <td colspan= "4">Tổng đơn hàng</td>
                    <td>' .  number_format($tong, 0, ',', '.') . 'vnd</td>
                    <td></td>
                </tr> ';
}


function tongbill()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[5] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($id_nguoidung, $madh, $tongdonhang, $name, $addr, $email, $phone, $id_trangthai)
{
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

function insert_bill_detail($iduser, $idsp, $name, $image, $price, $quantity, $total_price)
{
    $sql = "INSERT INTO Chi_tiet_don_hang (id_donhang, id_sp, name, img, price, soluong, thanhtien) 
            VALUES (' $iduser ','$idsp','$name','$image','$price','$quantity','$total_price')";
    pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "SELECT * FROM chi_tiet_don_hang WHERE id_donhang = $id";
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadone_billuser($id_nguoidung) {
    $sql = "SELECT * FROM don_hang WHERE id_nguoidung = $id_nguoidung";
    $listBill = pdo_query1($sql);
    return $listBill;
}
// function loadone_bill1($id)
// {
//     $sql = "SELECT * FROM don_hang WHERE 1";
//     if ($id > 0) $sql .= "AND id_donhang=" . $id;
//     $sql .= "order by id desc ";
//     $listBill = pdo_query($sql);
//     return $listBill;
// }

function get_ttdh($n)
{
    switch ($n) {
        case '1':
            # code...
            $tt = 'Chờ xác nhận';
            break;
        case '2':
            # code...
            $tt = 'Đã Xác Nhận';

            break;
        case '3':
            # code...
            $tt = 'Chờ Lấy Hàng';

            break;
        case '4':
            # code...
            $tt = 'Đang Giao Hàng';
        case '5':
                # code...
                $tt = 'Giao hàng thành công';
            break;
            case '6':
                # code...
                $tt = 'Đã Huỷ';
            break;
        default:
            # code...
            $tt = 'Huỷ';

            break;
    }
    return $tt;
}

function get_pttt($n)
{
    switch ($n) {
        case '0':
            # code...
            $tt = 'Thanh toán bằng tiền mặt';
            break;
        case '1':
            # code...
            $tt = 'Quét Mã QR';

            break;
        case '2':
            # code...
            $tt = 'Thanh Toán Online';

            break;

        default:
            # code...
            $tt = 'Đơn Hàng Mới';

            break;
    }
    return $tt;
}

function loadone_bill_count($id)
{
    $sql = "SELECT * FROM don_hang WHERE id_donhang = $id";
    $bill = pdo_query_one($sql);
    return sizeof($bill);

}

function deldh($id){
    $sql = "UPDATE `don_hang` SET `id_trangthai` = '6' WHERE `don_hang`.`id_donhang` = $id;";
pdo_execute($sql);
}


function chitietdon($id) {
    $sql = "SELECT * FROM chi_tiet_don_hang WHERE id_donhang = $id ";
    return pdo_query($sql);  
}

function loadall_bill($id_nguoidung) {
    $sql = "SELECT * FROM don_hang WHERE 1";
    if ($id_nguoidung > 0) {
        $sql .= " AND id_nguoidung = $id_nguoidung";
    }
    $sql .= " ORDER BY id_donhang DESC";
    return pdo_query($sql);
}
function loadall_ttdh($id) {
    $sql = "SELECT * FROM trang_thai_don_hang WHERE id = " . $id;
    return pdo_query($sql);
}

function load_trang_thai() {
    $sql = "SELECT * FROM trang_thai_don_hang"; // Điều chỉnh nếu bạn muốn tất cả trạng thái
    return pdo_query($sql);
}