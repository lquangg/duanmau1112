<?php 
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$ipdro=$_REQUEST['idpro'];
$dsbl=loadall_binhluan($ipdro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
.binhluan{
    width: 100%;
}
.binhluan td:nth-child(1) {
    width: 50%;
}

.binhluan td:nth-child(2) {
    width: 20%;
}

.binhluan td:nth-child(3) {
    width: 30%;
}
</style>
<body>
    
<div class="panel panel-default">
    <div class="panel-heading">Bình Luận</div>
    <div class="list-group">
       <table class="binhluan">
        <?php
        foreach ($dsbl as $ds) {
            extract($ds);
            echo '<tr><td>'.$noidung.'</td>';
            echo '<td>'.$iduser.'</td>';
            echo '<td>'.$ngaybinhluan.'</td>';
            
        }
        ?>
       </table> 
      


    </div>
    <div class="panel-footer">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="text" name="noidung" id="">
            <input type="submit" name="guibinhluan" value="Gửi Bình Luận">
        </form>
    </div>

    <div>
        <?php
        
    if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
        if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
           
        $noidung=$_POST['noidung'];
        $iduser=$_SESSION['user']['id'];
      
        $idpro=$_POST['idpro'];
        $ngay_bl=date('y/m/d ');
    

    insert_binhluan($noidung,$iduser,$idpro,$ngay_bl);
        header("Location: ".$_SERVER['HTTP_REFERER']);
}else{
     header('location:../../index.php');
}
    }
    ?>
   
    </div>
</div>
</body>
</html>