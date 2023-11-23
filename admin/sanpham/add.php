<div class="mt-5">
            <div>
                <h2 class="text-danger">Thêm mới  sản phẩm</h2>
            </div>
            <div class="container mt-3 border border-success">
             
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-3 ">
                  Sản phẩm thuộc loại<br>
                  <select class="form-select" name="iddm" id="">
                   <?php
                     foreach($lisdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$name.'</option>';
                     }
                   ?>
                    
                  </select>
                    </div>
                    <div class="mb-3 mt-3">
                  Tên sản phẩm: <br> <input class="form-control" type="text" name="tensp" >
                    </div>
                    <div class="mb-3 mt-3">
                  Giá: <br> <input  class="form-control" type="text" name="gia" >
                    </div>
                    <div class="mb-3 mt-3">
                  Ảnh: <br> <input class="form-control" type="file" name="img" >
                    </div>
                    <div class="mb-3 mt-3">
                  Mô tả: <br> <textarea class="form-control" name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mb-3">
                        <input  class="btn btn-primary mt-5" type="submit"  name="themmoi" value="Thêm mới">
                        <input  class="btn btn-primary mt-5" type="button" value="Nhập lại ">
                      <a href="index.php?act=lissp">  <input  class="btn btn-primary mt-5" type="button" value="Danh sách">
                   
                      </a> </div>
                      
                </form>
            </div>
        </div>

