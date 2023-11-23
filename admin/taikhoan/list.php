<div class="row">
            <div class="h">
                <h2>Danh sách  tài khoản khách hàng</h2>
            </div>
          
                <table class="table text-center mt-3" border="1">
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Pass</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>STD</th>
                        <th>Chức năng</th>

                     <th></th>
                    </tr> 
                    </thead>
                    <tbody>
                    <?php
                    foreach($listk as $tk){
                       
                        extract($tk);
                          $suatk="index.php?act=suatk".$id;
                          $xoatk="index.php?act=xoatk".$id;
                        echo ' <tr>
                       
                        <td>'.$id.'</td>
                        <td>'.$username.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$sdt.'</td>
                       
                        <td><a href="'.$suatk.'"><input type="submit" value="Sửa"></a>  <a href="'.$xoatk.'"><input type="submit" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                       </tbody>
                </table>
            </div>
            
          </div>
        </div>