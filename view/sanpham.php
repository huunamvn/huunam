<style>
    .boxtrai {
        flex: 2;
        padding: 20px;
    }

    .box-title-ct {
        font-size: 24px;
        font-weight: bold;
        background-color: #eee;
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        transition: background-color 0.3s ease; 
    }

    .box-title-ct:hover {
        background-color: #ddd; 
    }

    .box-content-ct {
        min-height: 1080px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        line-height: 1.6;
        margin-bottom: 20px;
        transition: box-shadow 0.3s ease; 
        background-color: #FFFFFF; 
    }

    .box-content-ct:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
    }

    .boxright {
        flex: 1;
        padding: 20px;
    }

    .boxright .box {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        transition: transform 0.3s ease; 
    }

    .boxright .box:hover {
        transform: rotate(3deg);
    }
</style>
<div class="row mb-ct">
    <div class="boxtrai mr-ct">
        <div class="box-title-ct">Sản phẩm</div>
        <div class="box-content-ct">
            <?php
            $i = 0;
            foreach ($dssp as $sanpham) {
                extract($sanpham);
                $linksp = "index.php?act=chitietsp&idsp=" . $idsp;
                $hinh = $img_path . $img;
                if ($i == 2 || $i == 5 || $i == 8 || $i == 11) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="boxsp ' . $mr . '">
                    <a href="' . $linksp . '">
                        <div class="row img"><img src="' . $hinh . '" alt=""></div>
                    </a>
                    <p>Giá sản phẩm <p>' . $giasp . '</p></p>
                    <p>Sản phẩm <a href="' . $linksp . '">' . $tensp . '</a></p>
                </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>
    <div>
        <?php include('boxright.php'); ?>
    </div>
</div>


