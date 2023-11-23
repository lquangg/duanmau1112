
           <div class="form-group" style="border: 1px solid darkgray;
    width: 300px;
    height: 400px;
    margin-left: 50px;">
            <form action="index.php?act=dangnhap" method="post">
            <h2 style="padding: 10px;">Tài khoản</h2>
            <div class="form-group_1">
                user : <input type="text" name="username"><br></br>
                pass : <input type="password" name="pass"><br></br>

                <input class="b" style="margin-left: 41px;" type="submit" name="dangnhap" value="Đăng nhập" id=""><br>
                
                <div class="checkbox" style="margin-left: 41px;">
              <label><input type="checkbox" name="remember">Ghi nhớ tài khoản</label>
              <?php
                               if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                                extract($_SESSION['username']);
                               
                    ?>
                    <?=$username?>
                    
                            <li style="list-style: none;"><a class="btn btn-primary mt-3" href="index.php?act=edit">Cập nhât tài khoản</a> </li>
                              
                            <li style="list-style: none;"><a class="btn btn-danger mt-3" href="index.php?act=thoat">Thoát</a> </li>
                            <?php
                                 if($role==1){  
                            ?>
                            <li style="list-style: none;"><a class="btn btn-info mt-3" href="http://localhost/DUANMAU/duanmau/admin/">admin</a> </li>
                            <?php }
                            ?>
                   <?php
                               }else{
                                ?>
                          
                            <li style="list-style: none;"><a class="btn btn-primary mt-3" href="index.php?act=dangki">Đăng Kí</a> </li>
                            <?php }
                            ?>
            </div>
    </form>
                               </div>
          <br>
          <br>
          <div class="list-group" style="border: 1px solid gray;
    width: 300px;
    height: 250px;">
            <h3 style="margin-left:10px;">Danh mục</h3>
            <a href="#" class="list-group-item">Đồng hồ đeo tay</a>
            <a href="#" class="list-group-item">Máy tính xách tay</a>
            <a href="#" class="list-group-item">Điện thoại</a>
          <div class="boxfooter searbox" style="padding: 20px;">
            <form action="indext.php?act=sanpham.php" method="post">
                <input type="text" name="kyw">
                <input type="submit" name="timkiem" value="tim kiem">
            </form>
          </div>

          </div>
          <br>

          <div class="news_sp mb-5">
            <div class="news" style="text-align: center;font-weight: 600;color: black;">
                <h2>Top 10 yêu thích</h2>
            </div>
            <hr>
            <?php
                foreach ($dst10 as $sp){
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id; 
                    $hinh=$img_path.$img;
                    echo ' <div class="newss_sp">
                    <a style=" width: 50px;height: 60px;" href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                    <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
                }
            ?>
          </div>