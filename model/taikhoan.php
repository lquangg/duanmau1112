<?php
function loadall_taikhoan(){
    $sql="select * from user order by id desc";
               $listk=pdo_query($sql);
               return $listk;
    
}
function insert_taikhoan($username,$pass,$email,$address,$sdt){
    $sql="insert into user(username,pass,email,address,sdt) values('$username','$pass','$email','$address','$sdt')";
            pdo_execute($sql);
}
function checkuser($username,$pass){
    $sql="select * from user where username='".$username."' and pass='".$pass."' ";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkquenmk($email){
    $sql="select * from user where   email='.$email.' ";
    $sp=pdo_query_one($sql);
    return $sp;
}
function  update($id,$username,$pass,$email,$address,$sdt){
    
       $sql="update user set username='".$username."',pass='".$pass."',email='".$email."',address='".$address."',sdt='".$sdt."'  where id=".$id;
    pdo_execute($sql);
}

?>