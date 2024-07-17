<!DOCTYPE html>
<html>
<head>
    <title>Bình luận bằng iframe</title>
    <style>
        .row.mb-ct {
            display: flex;
        }

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
            min-height: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            line-height: 1.6;
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease;
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
        .info {
            font-weight: bold;
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.5;
            color: #333;
            margin: 10px 0;
        }
        .infogia {
            font-weight: bold;
            color:red;
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.5;
            
            margin: 10px 0;
        }

        .info:last-child {
            font-style: italic;
            color: #555;
        }
      
.box-title-ct {
    font-size: 20px;
    font-weight: bold;
    background-color: #333;
    color: #fff;
    padding: 10px;
}


table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}


th {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:nth-child(odd) {
    background-color: #fff;
}


td {
    padding: 10px;
    border: 1px solid #ddd;
}
.giact{
    font-weight: bold;
            color:red;
}
td a {
    color: #0070c0; 
    text-decoration: none; 
}

td a:hover {
    text-decoration: underline; 
}


    </style>
</head>
<body>
    
    <div class="row mb-ct">
        <div class="boxtrai mr-ct">
            <?php
            extract($onesp);
            ?>
            <div class="box-title-ct"><?= $tensp ?></div>
            <div class="box-content-ct">
                <?php
                $img = $img_path . $img;
                echo '<img src="' . $img . '"><br>';
                ?>
                <p  class="info">Ngày nhập : <?php echo $ngaynhap; ?></p>
                <p  class="infogia">Giá sản phẩm : <?php echo $giasp.'$'; ?></p>
                <p  class="info">Mô tả sản phẩm : <?php echo $mota; ?></p>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    $("#binhluan").load("view/binhluan/binhluanform.php", {
                        idsp: <?= $idsp ?>
                    });
                });
            </script>
            <div class="row" id="binhluan">
                <div class="box-content-ct">
                </div>
            </div>
            <div class="row mb-ct">
                <div class="box-title-ct">Sản phẩm cùng loại</div>
                <div class="box-content-ct">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th> Giá</th>
                            <th>Mô tả</th>
                        </tr>
                        <?php
                        foreach ($spkhac as $spkhac) {
                            extract($spkhac);
                           
                            echo '<tr>';
                            echo '<td><a href="index.php?act=chitietsp&idsp='.$idsp.'">' . $tensp . '</a></td>';
                            echo '<td class="giact">' . $giasp.'$' . '</td>' ;
                            echo '<td>' . $mota . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include('boxright.php'); ?>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
