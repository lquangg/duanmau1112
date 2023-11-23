<?php

function insert_binhluan($noidung, $iduser, $idpro, $ngay_bl)
{
    $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngay_bl')";
    pdo_execute($sql);
}
function loadbinhluan(){
    $sql = "SELECT * FROM binhluan order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function loadall_binhluan($idpro)
{
    $sql = "select * from binhluan where 1";
    if ($idpro > 0) $sql .= " AND idpro='" . $idpro . "'";
    $sql .= " order by id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}
function update_binhluan($id,$noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "UPDATE binhluan SET noidung='" . $noidung . "',iduser='" . $iduser . "',idpro='" . $idpro . "',ngaybinhluan='" . $ngaybinhluan . "' WHERE id=" .$id;
    pdo_execute($sql);
}

function loadone_binhluan($id){
    $sql = "SELECT * FROM binhluan WHERE id=" . $_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}

// function update_binhluan($id,$noidung){
//     $sql = "UPDATE binh_luan SET noidung='" . $noidung . "' WHERE id=" .$id;
//     pdo_execute($sql);
// }
?>


