
<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$imgpath="../upload/".$img;
     if(is_file($imgpath)){
    $img="<img src='".$imgpath."' height='80'>";
       }else{
       $img="No photo";
                       }
?>

<div class="">
            <div class="mt-3 text-danger">
                <h2>Cập nhật  sản phẩm</h2>
            </div>
            <div class="container mt-3 ">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="mt-3">
                  <select class="form-select" name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                          foreach ($lisdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id) echo '<option value="'.$id.'" selected>'.$name.'</option>';

                            else echo '<option value="'.$id.'">'.$name.'</option>';

                          }
                    ?>
                   
                  </select>
                </div>   
            
                    <div class="mt-3">
                    Tên sản phẩm: 
                  <br> <input class="form-control" type="text" name="tensp"  value="<?=$name?>">
                    </div>
                    <div class="mt-3">
                  Giá: <br> <input class="form-control" type="text" name="price"   value="<?=$price?>">
                    </div>
                    <div class="mt-3">
                  Ảnh: <br> <input class="form-control" type="file" name="img" >
                  <?php echo $img ?>
                    </div>
                    <div class="mt-3">
                  Mô tả: <br> <textarea class="form-control" name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mb-5">
                      <input type="hidden" name="id" value="<?=$id ?>">
                        <input class="btn btn-primary mt-5" type="submit"  name="capnhat" value="Cập nhật">
                        <input class="btn btn-primary mt-5" type="button" value="Nhập lại ">
                      <a href="index.php?act=lissp">  <input class="btn btn-primary mt-5" type="button" value="Danh sách">
                   
                      </a> </div>
                      <?php
                      if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                      ?>
                </form>
            </div>
        </div>

    </div>