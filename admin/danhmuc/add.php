<!-- <div class="row">
            <div class="h">
                <h2>Thêm mới loại  sản phẩm</h2>
            </div>
            <div >
                <form action="index.php?act=adddm" method="post">
                    <div class="row mabot ">
                  Mã loại:<br> <input  type="text" name="maloai" >
                    </div>
                    <div >
                  Tên loại: <br> <input  type="text" name="tenloai" >
                    </div>
                    <div class="row q ">
                        <input type="submit"  name="themmoi" value="Thêm mới">
                        <input type="button" value="Nhập lại ">
                      <a href="index.php?act=lisdm">  <input type="button" value="Danh sách">
                   
                      </a> </div>
                      <?php
                      if(isset($thongbao)&&($thongbao!="")) 
                      echo $thongbao;
                      ?>
                      
                </form>
            </div>
        </div> -->

    <!--  -->


    <h2 class="mt-3 text-danger">Thêm mới loại  sản phẩm</h2>
    <div class="container mt-3 border border-success">
  <form action="index.php?act=adddm" method="post">
    <div class="mb-3 mt-3">
      <label for="email"> Mã loại:</label>
      <input type="email" class="form-control" name="maloai">
    </div>
    <div class="mb-3">
      <label for="pwd">Tên loại:</label>
      <input type="text" class="form-control" name="tenloai">
    </div>
    <div class="d-flex justify-content-center gap-3 mb-3">
     <input class="btn btn-primary mt-5" type="submit"  name="themmoi" value="Thêm mới">
     <input class="btn btn-primary mt-5" type="button" value="Nhập lại ">
    <a href="index.php?act=lisdm"><input class="btn btn-primary mt-5" type="button" value="Danh sách">
    </a> </div>
    <?php
                      if(isset($thongbao)&&($thongbao!="")) 
                      echo $thongbao;
                      ?>
  </form>
</div>