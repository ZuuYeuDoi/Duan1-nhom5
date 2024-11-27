<?php
function pdo_dangky_taikhoan($email, $matkhau, $ten, $sdt, $address) {
    // Câu lệnh SQL sử dụng tham số PDO (chuẩn bị)
    $sql = "INSERT INTO `Nguoi_dung`(`email`, `matkhau`, `hoten`, `sdt`, `diachi`, `ngaydangky`) 
            VALUES (:email, :matkhau, :hoten, :sdt, :diachi, NOW())";

    // Thực thi câu lệnh SQL với các tham số
    pdo_execute($sql, [
        ':email' => $email,
        ':matkhau' => $matkhau,
        ':hoten' => $ten,
        ':sdt' => $sdt,
        ':diachi' => $address
    ]);  
}

function checkuser($user,$pass)
{
    $sql = "select * from Nguoi_dung where hoten ='". $user."' AND matkhau='". $pass."'" ;
    $sp = pdo_query_one($sql);
    return $sp;
}

function list_tk() {
    $sql= "select * from Nguoi_dung";
    $listtk= pdo_query( $sql);
    return $listtk;
}


function pdo_dangky_taikhoanbenadmin($email, $matkhau, $ten, $sdt, $address ,$role) {
    // Câu lệnh SQL sử dụng tham số PDO (chuẩn bị)
    $sql = "INSERT INTO `Nguoi_dung`(`email`, `matkhau`, `hoten`, `sdt`, `diachi`, `ngaydangky`,`role`) 
            VALUES (:email, :matkhau, :hoten, :sdt, :diachi, NOW(),:role)";  // Sửa phần giá trị của cột 'role'

    // Thực thi câu lệnh SQL với các tham số
    pdo_execute($sql, [
        ':email' => $email,
        ':matkhau' => $matkhau,
        ':hoten' => $ten,
        ':sdt' => $sdt,
        ':diachi' => $address,
        ':role' => $role,  
    ]);  
}

function deletetk($id_nguoidung) {
    $sql=" DELETE FROM `Nguoi_dung` WHERE id_nguoidung=".$id_nguoidung;
    pdo_execute($sql);
}


?>