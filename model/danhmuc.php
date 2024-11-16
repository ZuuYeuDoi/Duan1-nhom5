<?php

function insert_danhmuc($tenloai)
{
    $sql = "insert into Danh_muc(ten_danhmuc) values('$tenloai')";
    pdo_execute($sql);
}
?>