
</div><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./content/css/indext.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="container" style="width: 900px;">
    <article class="container-1"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="width: 700px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="https://xuongdonghotreotuong.com/wp-content/uploads/2018/05/Banner-dong-ho-glu-moi-01_2.jpg" alt="Los Angeles" style="width:900px;height:500px;">
          </div>
    
          <div class="item">
            <img src="https://www.donghohanghieu.com/wp-content/uploads/2016/03/Raymond-weil.jpg" alt="Chicago" style="width:900px;height:500px;">
          </div>
        
          <div class="item">
            <img src="https://citywatch.vn/wp-content/uploads/2022/06/banner-city-watch-1.jpg" alt="New york" style="width:900px;height:500px;">
          </div>
        
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div>
        <div class="menu_2">
            <?php
            $i=0;
            foreach ($spnew as $sp){
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo'<div class="menu_2-sp '.$mr.'">
                <div class="row"><a href="'.$linksp.'"><img style="width: 250px;
                height: 270px;
                padding: 20px" src="'.$hinh.'" alt=""></a>
                </div>
                <p>$.'.$price.'</p>
                
                <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                $i+=1;
              
            }
            ?>
            
        </div>
    </article>
    <article class="boxright">
    <?php
    include "boxright.php";
    ?>
    </article>
</section>