<div class="mt-5">
            <div class="text-danger">
                <h2>Danh sách  hàng hóa</h2>
            </div>
          <div class="container mt-3 ">
            <div class="">
                
                <form class="d-flex justify-content-center gap-3" action="index.php?act=lissp" method="post" class="row mabot">
                    <input class="form-control" type="text" name="kyw">
                    <select class="form-select-sm" name="iddm" >
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach($lisdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo'<option value="'.$id.'">'.$name.'</option> ';
                        }
                        ?>
                    </select>
                    <input  class="btn btn-primary" type="submit" name="ok" value="Go">
                </form>

                <table class="table text-center mt-3" border="2" >
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên san pham</th>
                        <th>Gia</th>
                        <th>Ảnh</th>
                        <th>Luot xem</th>
                        <th>Chức năng</th>
                    </tr> 
                    </thead>
                    <tbody>
                    <?php
                    foreach($lissanpham as $sanpham){
                        extract($sanpham);
                       $suasp="index.php?act=suasp&id=".$id;
                       $xoasp="index.php?act=xoasp&id=".$id;
                       $imgpath="../upload/".$img;
                       if(is_file($imgpath)){
                        $img="<img src='".$imgpath."' height='80'>";
                       }else{
                        $img="No photo";
                       }
                        echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$img.'</td>
                        <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input type="submit" value="Sửa"></a>  <a href="'.$xoasp.'"><input type="submit" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center gap-3 mb-3">
                <input  class="btn btn-primary mt-5" type="button" value="Chọn tất cả">
                <input  class="btn btn-primary mt-5" type="button" value=" Bỏ Chọn tất cả">
                <input  class="btn btn-primary mt-5" type="button" value="Xóa các mục đã chọn">
                <input  class="btn btn-primary mt-5" type="button" value="Chọn tất cả">
                <a href="index.php?act=addsp"> <input  class="btn btn-primary mt-5" type="button" value="Nhập thêm"></a>
            </div>
          </div>
        </div>