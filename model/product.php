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
?>