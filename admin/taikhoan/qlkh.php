<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="quantri.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            background-color:aqua;
            color: black;
            padding: 10px 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="text"]:disabled {
            background-color: #eee;
        }

        .form-actions {
            text-align: center;
        }

        .form-actions button {
            background-color: blanchedalmond;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        input[name="mota"] {
        height: 100px;
}
th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }
    th, td a{
        text-decoration: none;
        font-weight: bold;
        }
    </style>
</head>
<div class="container">
    <div class="header">
        <h1>Bảng thêm khách hàng</h1>
    </div>
<body>
  
        <div class="form-container">
            <form action="" class="chucnang-sp">
                <div class="form-group">
                    <label for="masp">Mã Khách Hàng</label>
                    <input type="text" name="makh" id="makh" placeholder="ID tự tăng" disabled>
                </div>
                <div class="form-group">
                    <label for="tensp">Tên Khách Hàng</label>
                    <input type="text" name="tensp" id="tensp" placeholder="Tên khách hàng" require>
                </div>
                <div class="form-group">
                    <label for="gia">Mật Khẩu</label>
                    <input type="text" name="matkhau" id="gia" placeholder="Nhập mật khẩu"require>
                </div>
                <div class="form-group">
                    <label for="gia">Nhập lại Mật Khẩu</label>
                    <input type="text" name="repass" id="repass" placeholder="Nhập lại mật khẩu"require>
                </div>
                <div class="form-group">
                    <label for="img">IMG</label>
                    <input type="file" name="img" id="img">
                </div>
                <div class="form-group">
                    <label for="mahh">Email </label>
                    <input type="text" name="email" id="email" placeholder="email khách hàng"require >
                    </div>
                <div class="form-actions">
                    <button type="submit">Thêm mới</button>
                    <button type="submit">Nhập lại</button>
                    <button type="submit">Danh sách khách hàng</button>

                </div>
            </form>
           
    </div>
</body>
</html>
