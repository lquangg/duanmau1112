</div><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <link rel="stylesheet" href="./content/css/indext.css">
  
</head>
<?php
     if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
        extract($_SESSION['username']);
     }
    ?>
             <div class="a">
                  <h1 class="text-danger">Cập nhật thông tin </h1>
                  <form action="index.php?act=edit" method="post">
                User : <input class="form-control" type="text" name="username" value="<?=$username?>"><br>
                Pass : <input class="form-control" type="password" name="pass" value="<?=$pass?>"><br>
                STD : <input class="form-control" type="text" name="sdt" value="<?=$sdt?>"><br>
                Email : <input class="form-control" type="email" name="email" value="<?=$email?>"><br>
                Address : <input class="form-control" type="address" name="address" value="<?=$address?>"><br>
              <input type="hidden" name="id" id="" value="<?=$id?>">
                <input class="btn btn-primary "  class="b" type="submit" name="edit" value="Cập nhật" id=""><br>
                <a class="btn btn-success mt-3" href="index.php">Quay lại trang chủ</a><br>
                  </form>
             </div>