
<!--  -->
<div class="container mt-3">
  <h2 class="text-danger">Danh Sách Loại</h2>         
  <table class="table" border="1"> 
      <tr>
        <th>Mã Loại</th>
        <th>Tên Loại</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
      <?php
foreach ($lisdanhmuc as $v){
      extract($v);
      $suadm="index.php?act=suadm&id=".$id;
      $xoadm="index.php?act=xoadm&id=".$id;
      echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td><a href="'.$suadm.'"><input type="submit" value="Sửa"></a>  <a href="'.$xoadm.'"><input type="submit" value="Xóa"></a></td>
     </tr>';
   }
?>
    </tbody>
  </table>
</div>