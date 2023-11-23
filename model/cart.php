<?php

function loadall_thongke(){
    $sql="SELECT danhmuc.id as madm ,danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice,
     avg(sanpham.price) as avgrprice FROM sanpham left join danhmuc on danhmuc.id=sanpham.iddm group by danhmuc.id order by danhmuc.id desc";
    $listtk= pdo_query($sql);
    return $listtk;
}
?>