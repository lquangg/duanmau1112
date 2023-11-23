</div><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./content/css/indext.css">
 
  
</head>
<body>
<section class="d-flex justify-content-between" >
 <div class="" >
 <!-- img -->
        <div class="text-center">
        <d iv class="img-thumbnail">
            <div class="row mb">
                <?php
                extract($onesp);
                ?>
            </div>
            <div class="h3"><?=$name?></div>
            <div class="p-2 h3" style="width:750px; height: 570px; ">
                <?php
                $img=$img_path.$img;
                echo '<div class="mb-5 p-5"><img width="500" height="400" src="'.$img.'"></div>';
                
                echo $mota;
                ?>
                
            </div>
        </div>
<!--BL  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
             
            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro:<?=$ma_hh?> });
                });
        </script>
        <div id="binhluan"></div>
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body" >
            </div>
        </div> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#binhluan").load("view/binhluan/binhluanform.php",{idpro:<?=$id?>});
        });
</script>
<div class="" style="margin-top: 70px;" id="binhluan">

<iframe src="view/binhluan/binhluanform.php?idpro<?=$ma_hh?>" frameborder="0" width="100%" height="400px"></iframe>
</div>


<!--SPCL  -->
        <div class="mt-5 text-center" style="margin-bottom: 250px;">
        <div class="boxtitle h3">San pham cung loai</div>
        <div class="border border-secondary p-3" style="height: 150px;"> 
                <?php
                 foreach ($sp_cung_loai as $sp_cung_loai){
                    extract($sp_cung_loai);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    echo'<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }

                ?>
            </div>
        </div>
 </div>
 
 <article class="boxright">
    <?php
    include "boxright.php";
    ?>
    </article>
        
    </section>
    </body>