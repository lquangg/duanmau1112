<div class="row">
    <article class="col-sm-9">
        <div class="panel panel-default form-group-lg">
            <div class="panel-heading">Sản phẩm <strong> <?= $tendm ?></strong></div>
            <div class="panel-body">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&ma_hh" . $ma_hh;
                    $hinh = $img_path . $hinh;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="col-sm-6 col-md-4 ' . $mr . '">
                            <div class="thumbnail text-center">
                                <a href="#">
                                    <img src="' . $hinh . '">
                                </a>
                                <div class="caption text-left">
                                    <h3>$ ' . $don_gia . ' </h3>
                                    <p>
                                        ' . $ten_hh . '
                                    </p>
                                </div>
                            </div>
                        </div>';

                    $i += 1;
                }
                ?>
            </div>
        </div>
    </article>
    <aside class="col-sm-3">
        <!--LOGIN-->
        <?php include "boxright.php"; ?>
    </aside>
</div>