<?php
function insert_binhluan($id_nguoidung,$id_sp,$noidung,$ngaybl)
{
    $sql = "insert into binh_luan(id_nguoidung,id_sp,noidung, ngaybl) values('$id_nguoidung','$id_sp','$noidung','$ngaybl')";
    pdo_execute($sql);
}

function list_binhluan() {
    $sql= "SELECT * FROM binh_luan ORDER BY id_bl DESC";
    $listbinhluan= pdo_query( $sql);
    return $listbinhluan;
}

?>