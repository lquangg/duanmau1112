<div class="row">

<div class="">
    <h1>Thong ke san pham theo loai</h1>
</div>
<div class="">
    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Mã danh mục</th>
            <th>Số lượng</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
        </tr>
        <?php
        
        foreach ($listthongke as $thongke){
            extract($thongke);
            echo' <tr>
            <td>
                '.$madm.'
            </td>
            <td>
                '.$tendm.'
            </td>
            <td>
                '.$countsp.'
            </td>
            <td>
                '.$maxprice.'
            </td>
            <td>
                '.$minprice.'
            </td>
            <td>
                '.$avgrprice.'
            </td>
        </tr> ';
        }
        ?>
        
    </table>
</div>
</div>