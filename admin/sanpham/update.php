

<?php 
if(is_array($suasp)){
extract($suasp);
}
$imgpath="../uploads/".$img;
if (is_file($imgpath)){
    $hinh="<img src='".$imgpath."' height='80'>";   
}else{
    $hinh="nophoto";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật loại hàng</title>
    <style>
        /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    margin: 20px auto;
    padding: 10px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 70%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    font-size: 1.5rem;
    margin: 10px 0;
}

/* Form styles */
.form-container {
    margin-top: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
select,
input[type="file"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

select {
    width: 100%;
}

input[type="submit"],
input[type="reset"],
.btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
    margin-right: 10px;
}

input[type="submit"]:hover,
input[type="reset"]:hover,
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
<div class="form-container">
            <form action="index.php?act=suasp" class="chucnang-sp" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="idsp">Mã sản phẩm</label>
                    <select name="iddm" id="">
                       
                       <?php foreach($dsloai as $danhsach){
                            extract($danhsach);
                           if($iddm==$id)$s="selected";  else $s="";
                           
                            echo ' <option value="'.$id.'"'.$s.'>'.$tenloai.'</option>';
                           
                           }
                          
                        ?>
                   
               </select>
                    <input type="text" name="idsp" value="<?=$idsp?>"placeholder="ID tự tăng" readonly>

                </div>
                <div class="form-group">
                    <label for="tensp">Tên Sản Phẩm</label>
                    <input type="text" name="tensp" value="<?=$tensp?>" placeholder="Tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="giasp">Giá sản phẩm</label>
                    <input type="text" name="giasp"value="<?=$giasp?>"  placeholder="Giá sản phẩm">
                </div>
                <div class="form-group">
                    <label for="img">IMG</label>
                    <input type="file" name="img" ><?=$hinh?>
                </div>
                <div class="form-group">
                    <label for="id">ID loại hàng</label>
                    <input type="text" name="id" value="<?=$id?>" placeholder="ID loại hàng">
                </div>
                <div class="form-group">
                    <label for="ngaynhap">Ngày nhập</label>
                    <input type="date" name="ngaynhap" value="<?=$ngaynhap?>">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" name="mota"value="<?=$mota?>" placeholder="Mô tả sản phẩm">
                </div>
                <div class="form-actions">
                    <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" name="danhsach" value="Danh sách" class="btn"></a>

                </div>
                <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </form>
    </div>

   
</body>
</html>
  