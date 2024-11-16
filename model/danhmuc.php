<?php

function insert_danhmuc($tenloai,$ngaytao,$ngaysua)
{
    $sql = "insert into Danh_muc(ten_danhmuc,ngay_tao,ngay_sua) values('$tenloai','$ngaytao','$ngaysua')";
    pdo_execute($sql);
}
?>