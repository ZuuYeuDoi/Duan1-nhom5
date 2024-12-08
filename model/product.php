<?php
function GetAllProduct()
{  
    $sql="select * from San_pham order by id_sp desc ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function add_sanpham($id_dm,$hang,$tensp,$giatien,$soluong,$giamgia,$mota,$anhsp,$ngaytao,$nongdo,$dungluong) {
    $sql = "insert into San_pham(id_dm,hang,tensp,giatien,soluong,giamgia,mota,anhsp,ngaytao,nongdo,dungluong) values('$id_dm','$hang','$tensp','$giatien','$soluong','$giamgia','$mota','$anhsp','$ngaytao','$nongdo','$dungluong')";
    pdo_execute($sql);
}

function loadone_sanpham($id) {
    $sql = "SELECT * FROM San_pham WHERE id_sp = $id";
    $ctsanpham = pdo_query_one($sql);
    return $ctsanpham;
}

function update_sanpham($id, $id_dm, $hang, $tensp, $giatien, $soluong, $giamgia, $mota, $anhsp, $ngaytao,$nongdo,$dungluong) {
    // Chuẩn bị câu lệnh SQL
    if ($anhsp != "") {
        // Nếu có ảnh mới
        $sql = "UPDATE San_pham SET 
                    id_dm = :id_dm,
                    hang = :hang,
                    tensp = :tensp,
                    giatien = :giatien,
                    soluong = :soluong,
                    giamgia = :giamgia,
                    mota = :mota,
                    anhsp = :anhsp,
                    nongdo = :nongdo,
                    dungluong = :dungluong,
                    ngaytao = :ngaytao
                WHERE id_sp = :id";
    } else {
        // Nếu không có ảnh mới
        $sql = "UPDATE San_pham SET 
                    id_dm = :id_dm,
                    hang = :hang,
                    tensp = :tensp,
                    giatien = :giatien,
                    soluong = :soluong,
                    giamgia = :giamgia,
                    mota = :mota,
                    nongdo = :nongdo,
                    dungluong = :dungluong,
                    ngaytao = :ngaytao
                WHERE id_sp = :id";
    }

    // Sử dụng câu lệnh chuẩn bị để ngăn chặn SQL injection
    $stmt = $pdo ->prepare($sql);
    
    // Tạo mảng tham số
    $params = [
        ':id_dm' => $id_dm,
        ':hang' => $hang,
        ':tensp' => $tensp,
        ':giatien' => $giatien,
        ':soluong' => $soluong,
        ':giamgia' => $giamgia,
        ':mota' => $mota,
        ':ngaytao' => $ngaytao,
        ':id' => $id,
        ':nongdo' => $nongdo,
        ':dungluong' => $dungluong
    ];

    // Thêm anhsp nếu có
    if ($anhsp != "") {
        $params[':anhsp'] = $anhsp;
    }

    // Thực thi câu lệnh
    $stmt->execute($params);
}


function delete_sanpham($id){
    $sql=" DELETE FROM `san_pham` WHERE id_sp=".$id;
    pdo_execute($sql);
}


function laysp1($listidsp1) {
    $sql = "select * from san_pham where id_dm = 1";
    $listidsp1 = pdo_query($sql);
    return $listidsp1;
}
function laysp2($listidsp2) {
    $sql = "select * from san_pham where id_dm = 2";
    $listidsp2 = pdo_query($sql);
    return $listidsp2;
}
// function top10()  {
//     $sql = "SELECT * FROM products ORDER BY created_at DESC LIMIT 10";
//     $listtop10 = pdo_query($sql);
//     return 
// }
function lay10sp()  {
    $sql = "select * from san_pham order by ngaytao desc limit 3 ";
    $list9sp = pdo_query($sql);
    return $list9sp;
}
function shop()  {
    $sql = "select * from san_pham order by id_sp desc ";
    $listshop = pdo_query($sql);
    return $listshop;
}
function demohome()  {

    $sql = "select * from san_pham order by ngaytao desc limit 11";
    $demohome = pdo_query($sql );
    return $demohome;
}


?>



