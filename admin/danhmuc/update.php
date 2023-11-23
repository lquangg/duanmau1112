<?php
if(is_array($dm)){
    extract($dm);
}
?>

<!-- <div class="row">
            <div >
                <h2>Cập nhật  hàng hóa</h2>
            </div>
            <div >
                <form action="index.php?act=updatedm" method="post">
                    <div >
                  Mã loại:<br> <input class="q" type="text" name="maloai" >
                    </div>
                    <div >
                  Tên loại: <br> <input class="q" type="text" name="tenloai"  value="<?php if(isset($name)&&($name)!="") echo $name ?>">
                    </div>
                    <div >
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id)!="") echo $id ?>">
                        <input type="submit"  name="capnhat" value="Cập nhật">
                        <input type="button" value="Nhập lại ">
                      <a href="index.php?act=lisdm">  <input type="button" value="Danh sách">
                   
                      </a> </div>
                      <?php
                      if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                      ?>
                </form>
            </div>
        </div>

    </div> -->

    <!--  -->
    <h2 class="mt-3 text-danger">Cập nhật  hàng hóa</h2>
    <div class="container mt-3 border border-success">
    <form action="index.php?act=updatedm" method="post">
    <div class="mb-3 mt-3">
      <label for=""> Mã loại:</label>
      <input type="text" class="form-control" name="maloai">
    </div>
    <div class="mb-3">
      <label for="pwd">Tên loại:</label>
      <input type="text" class="form-control" name="tenloai" value="<?php if(isset($name)&&($name)!="") echo $name ?>">
    </div>
    <div class="d-flex justify-content-center gap-3 mb-3">
    <input type="hidden" name="id" value="<?php if(isset($id)&&($id)!="") echo $id ?>">
     <input class="btn btn-primary mt-5" type="submit"  name="themmoi" value="Thêm mới">
     <input class="btn btn-primary mt-5" type="button" value="Nhập lại ">
    <a href="index.php?act=lisdm"><input class="btn btn-primary mt-5" type="button" value="Danh sách">
    </a> </div>
    <?php
                      if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                      ?>
  </form>
</div>