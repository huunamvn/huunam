<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="quantri.css">
    <style>
   /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.header {
    text-align: center;
    background-color: #007BFF;
    color: #fff;
    padding: 15px 0;
    margin-bottom: 20px;
    border-radius: 10px;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333; /* Text color for labels */
}

.form-group input[type="text"],
.form-group input[type="date"],
.form-group input[type="file"],
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group input[type="text"]:disabled {
    background-color: #eee;
}

.form-actions {
    text-align: center;
    margin-top: 20px;
}

.form-actions button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

.form-actions button:hover {
    background-color: #0056b3;
}

.product-list {
    margin-top: 30px;
}

.product-list h2 {
    background-color: #007BFF;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.product-list table {
    width: 100%;
    border-collapse: collapse;
}

.product-list th {
    background-color: #007BFF;
    color: #fff;
    padding: 12px;
    border: 1px solid #ccc;
    text-align: left;
}

.product-list td {
    padding: 12px;
    border: 1px solid #ccc;
    text-align: left;
}

.product-list th a, .product-list td a {
    font-weight: bold;
    text-decoration: none;
    color: #007BFF;
}

.product-list th a:hover, .product-list td a:hover {
    color: #0056b3;
}


table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px;
    border: 1px solid #ccc;
    text-align: left;
}

th {
    background-color: #007BFF;
    color: #fff;
}

th, td a {
    font-weight: bold;
    text-decoration: none;
    color: #007BFF;
}

th a:hover, td a:hover {
    color: #0056b3;
}

.btn-danhsach {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
    text-decoration: none ;
    font-weight:bold ;
}

.btn-danhsach:hover {
    background-color: #00FF00;
}
.message-container {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #00FF00;
    color: #fff;
    border: 1px solid #C0C0C0;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    animation: fadeIn 1s, fadeOut 1s 3s forwards;
}

.message {
    text-align: center;
    font-size: 16px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeOut {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}




</style>

    <div class="container">
    <div class="header">
        <h1>Bảng thêm sản phẩm</h1>
    </div>
</head>
<body>
        <div class="form-container">
            <form action="index.php?act=addsp" class="chucnang-sp" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="idsp">Mã sản phẩm</label>
                    <input type="text" name="idsp"  placeholder="ID tự tăng" disabled>
                </div>
                <div class="form-group">
                    <label for="tensp">Tên Sản Phẩm</label>
                    <input type="text" name="tensp" placeholder="Tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="giasp">Giá sản phẩm</label>
                    <input type="text" name="giasp"  placeholder="Giá sản phẩm">
                </div>
                <div class="form-group">
                    <label for="img">IMG</label>
                    <input type="file" name="img" >
                </div>
                <div class="form-group">
                    <label for="iddm">ID loại hàng</label>
                    <select name="iddm" id="">
                       
                            <?php foreach($dsloai as $danhsach){
                                extract($danhsach);
                                echo ' <option value="'.$id.'">'.$id.'</option>';
                            } ?>
                        
                    </select>
                    <input  name="mahh" type="text" placeholder="Vui lòng chọn option hoặc tự tìm id" >
                </div>
                <div class="form-group">
                    <label for="ngaynhap">Ngày nhập</label>
                    <input type="date" name="ngaynhap" >
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <textarea name="mota" placeholder="Mô tả sản phẩm"></textarea>
                </div>
                <div class="form-actions">
                <input type="submit" name="themmoi" value="Thêm mới" class="btn-danhsach">
                 <input type="reset" name="nhaplai" value="Nhập lại" class="btn-danhsach">
                    <a href="index.php?act=listsp" class="btn-danhsach">Danh sách</a>
                </div>
                <?php
if (isset($thongbao) && $thongbao !== "") {
    echo '<div class="message-container">';
    echo '<div class="message">'.$thongbao.'</div>';
    echo '</div>';
}
?>


</body>
</html>