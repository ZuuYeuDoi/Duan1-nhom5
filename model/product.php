<?php
function GetAllProduct()
{  
    $sql="select * from San_pham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function add_sanpham($id_dm,$hang,$tensp,$giatien,$soluong,$giamgia,$mota,$anhsp,$ngaytao) {
    $sql = "insert into san_pham(id_dm,hang,tensp,giatien,soluong,giamgia,mota,anhsp,ngaytao) values('$id_dm','$hang','$tensp','$giatien','$soluong','$giamgia','$mota','$anhsp','$ngaytao')";
    pdo_execute($sql);
}
function loadone_sanpham($id) {
    $sql = "SELECT * FROM San_pham WHERE id_sp = :id";
    $sp = pdo_query_one($sql, [':id' => $id]); // Giả sử pdo_query_one hỗ trợ tham số
    return $sp;
}

function update_sanpham($id, $id_dm, $hang, $tensp, $giatien, $soluong, $giamgia, $mota, $anhsp, $ngaytao) {
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
                    ngaytao = :ngaytao
                WHERE id_sp = :id";
    }

    // Sử dụng câu lệnh chuẩn bị để ngăn chặn SQL injection
    $stmt = $pdo->prepare($sql);
    
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
        ':id' => $id
    ];

    // Thêm anhsp nếu có
    if ($anhsp != "") {
        $params[':anhsp'] = $anhsp;
    }

    // Thực thi câu lệnh
    $stmt->execute($params);
}
?>