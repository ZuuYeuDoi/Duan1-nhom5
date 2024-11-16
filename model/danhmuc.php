<?php

function insert_danhmuc($tenloai,$ngaytao,$ngaysua)
{
    $sql = "insert into Danh_muc(ten_danhmuc,ngay_tao,ngay_sua) values('$tenloai','$ngaytao','$ngaysua')";
    pdo_execute($sql);
}
function list_danhmuc() {
    $sql= "select * from Danh_muc";
    $listdanhmuc= pdo_query( $sql);
    return $listdanhmuc;
}
?>