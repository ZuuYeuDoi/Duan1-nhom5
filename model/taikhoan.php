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

function loadone_taikhoan($id) {
    $sql = "SELECT * FROM Nguoi_dung WHERE id_nguoidung = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}


function update_taikhoan( $user, $password, $email, $address, $phone, $role, $id)
{
    // Cập nhật câu truy vấn SQL để thay đổi các trường trong bảng `Nguoi_dung`
    $sql = "UPDATE `Nguoi_dung` 
            SET `hoten` = :user, 
                `matkhau` = :password, 
                `email` = :email, 
                `diachi` = :address, 
                `sdt` = :phone, 
                `role` = :role 
            WHERE `id_nguoidung` = :id";
    
    // Truyền tham số vào câu truy vấn
    return pdo_execute($sql, [
        ':user' => $user,
        ':password' => $password,
        ':email' => $email,
        ':address' => $address,
        ':phone' => $phone,
        ':role' => $role,
        ':id' => $id
    ]);
}

function update_user($id, $hoten, $email, $matkhau, $sdt, $diachi) {
    $sql = "UPDATE nguoi_dung SET hoten = ?, email = ?, matkhau = ?, sdt = ?, diachi = ? WHERE id_nguoidung = ?";
    // Gói tất cả tham số thành một mảng
    return pdo_execute($sql, [$hoten, $email, $matkhau, $sdt, $diachi, $id]);
}

function get_user_by_id($id) {
    $sql = "SELECT * FROM nguoi_dung WHERE id_nguoidung = ?";
    return pdo_query_one($sql, $id);
}
?>