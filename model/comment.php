<?php
function insert_binhluan($id_nguoidung,$id_sp,$noidung,$ngaybl)
{
    $sql = "insert into binh_luan(id_nguoidung,id_sp,noidung, ngaybl) values('$id_nguoidung','$id_sp','$noidung','$ngaybl')";
    pdo_execute($sql);
}

function list_binhluan($id_sp) {
    $sql= "SELECT * FROM binh_luan where 1";
    if($id_sp>0)
        $sql.=" AND id_sp='".$id_sp."'";    
        $sql.= " ORDER BY id_bl DESC";
    $listbinhluan= pdo_query( $sql);
    return $listbinhluan;
}

function delete_binhluan($id_bl){
    $sql=" DELETE FROM `binh_luan` WHERE id_bl=".$id_bl;
    pdo_execute($sql);
}

?>