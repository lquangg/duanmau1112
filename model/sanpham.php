<?php
function insert_sanpham($ten,$gia,$filename,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$ten','$gia','$filename','$mota','$iddm')";
            pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$_GET['id'];
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    
               $lissanpham=pdo_query($sql);
               return $lissanpham;
    
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc";
    
               $lissanpham=pdo_query($sql);
               return $lissanpham;
    
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
              $sql.=" order by id desc";
               $lissanpham=pdo_query($sql);
               return $lissanpham;
    
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }
    
}
function loadten($iddm){
    if($iddm>0){
    $sql="select * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
      return "";
    }
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function load_sanpham_cungloai($id,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." AND id <>".$id;
    $lissanpham=pdo_query($sql);
               return $lissanpham;
    
}
function  update_sanpham($iddm,$id,$tensp, $price,$mota,$img){
    if($img!="")
       $sql="update sanpham set name='".$tensp."',iddm='".$iddm."',price='".$price."',mota='".$mota."',img='".$img."' where id=".$id;
       else
       $sql="update sanpham set name='".$tensp."',iddm='".$iddm."',price='".$price."',mota='".$mota."'  where id=".$id;
    pdo_execute($sql);
}

?>