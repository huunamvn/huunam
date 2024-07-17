

<?php 
if(is_array($suads)){
extract($suads);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật loại hàng</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            margin: 20px auto;
            padding: 10px;
            box-sizing: border-box;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 70%;
        }

        .header {
            background-color: #FF99FF;
            border: 1px solid chocolate;
            color: blue;
            border-radius: 5px;
            text-align: center;
            padding: 10px;
        }

        .header h1 {
            font-size: 1.2vw;
            margin: 10px 0;
        }

        /* Form styles */
        .maloai, .tenloai {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #ccc;
        }

        .tenloai {
            margin-top: 10px;
        }

        /* Table styles */
        .table-ql {
            border-collapse: collapse;
            width: 100%;
            margin: 10px 0;
        }

        .table-ql th {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }

        .table-ql td {
            padding: 8px;
            text-align: center;
        }

        /* Button styles */
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Full-width container */
        .chon-full {
            text-align: center;
        }
    </style>
</head>
<body>
        <form action="index.php?act=updatedm" method="POST">
            Mã loại: <input type="number" name="maloai" class="maloai" placeholder="ID loại tự tăng" disabled><br>
            Tên loại: <input type="text" name="tenloai" class="tenloai" value="<?php if(isset($tenloai)&&($tenloai!="")) echo $tenloai; ?>" placeholder="Nhập tên loại"><br>
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
            <input type="submit" name="capnhat" value="Cập nhật" class="btn">
            <input type="reset" name="nhaplai" value="Nhập lại" class="btn">
            <a href="index.php?act=listdm"><input type="button" name="danhsach" value="Danh sách" class="btn"></a>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>

   
</body>
</html>
  