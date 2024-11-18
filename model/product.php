<?php
function GetAllProduct()
{  
    $sql="select * from San_pham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>