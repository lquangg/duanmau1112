<div class="row">
    <h1 class="text-center">DANH SÁCH BÌNH LUẬN</h1>
    <table class="table table-bordered">
        <tr>
            <th scope="col">#</th>
            <th>ID</th>
            <th>Nội dung</th>
            <th>IDuser</th>
            <th>IDpro</th>
            <th>Ngày Bình Luận</th>
            
            <th></th>
        </tr>
        <?php 
        foreach ($listbinhluan as $binhluan) {
            extract($binhluan);
            $suabl = "index.php?act=suabl&id=".$id;
            $xoabl = "index.php?act=xoabl&id=".$id;
            echo ' <tr>
        <td><input type="checkbox" ten_loai="" ma_loai="" ></td>
        <td>' .$id.'</td>
        <td>' .$noidung.'</td>
        <td>' .$iduser.'</td>
        <td>' .$idpro.'</td>
        <td>'.$ngaybinhluan.'</td>
        <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a> <a href="' .$xoabl. '"><input type="button" value="Xóa"></a></td>
    </tr>';
        }

        ?>

    </table>
    <div class="rows">
        <input type="button" class="btn btn-default" value="CHỌN TẮT CẢ">
        <input type="button" class="btn btn-default" value="BỎ CHỌN TẤT CẢ">
        <input type="button" class="btn btn-default" value="XÓA CÁC MỤC ĐÃ CHỌN">
    
    </div>
</div>
<br>