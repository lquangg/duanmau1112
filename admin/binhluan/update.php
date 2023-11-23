<?php
if(is_array($bl)){
    extract($bl);
}
?>

    <h2 class="mt-3 text-danger">Cập nhật bình luận</h2>
    <div class="container mt-3 border border-success">
    <form action="index.php?act=updatebl" method="post">

    <div class="mb-3 mt-3">
      <label for="pwd">Nội dung:</label>
      <input type="text" class="form-control" name="noidung" value="<?php if(isset($noidung)&&($noidung)!="") echo $noidung ?>">
    </div>
    <div class="mb-3">
      <label for="pwd">IDuser:</label>
      <input type="text" class="form-control" name="iduser" value="<?php if(isset($iduser)&&($iduser)!="") echo $iduser ?>">
    </div>
    <div class="mb-3">
      <label for="pwd">IDpro:</label>
      <input type="text" class="form-control" name="idpro" value="<?php if(isset($idpro)&&($idpro)!="") echo $idpro ?>">
    </div>
    <div class="mb-3">
      <label for="pwd">Ngày Bình Luận:</label>
      <input type="date" class="form-control" name="ngaybinhluan" value="<?php if(isset($ngaybinhluan)&&($ngaybinhluan)!="") echo $ngaybinhluan ?>">
    </div>
    <div class="d-flex justify-content-center gap-3 mb-3">
    <input type="hidden" name="id" value="<?php if(isset($id)&&($id)!="") echo $id ?>">
    <input class="btn btn-primary mt-5" type="submit"  name="sua" value="Sửa">

    
    </a> </div>
    <?php
                      if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                      ?>
  </form>
</div>