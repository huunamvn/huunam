<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header-1 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .form-container-1 {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="repass"],
        input[type="password"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
        input[type="reset"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="reset"]:hover {
            background-color: #555;
        }
        
.back-link {
    display: inline-block; 
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
    color: red; 
}

    </style>
</head>
<body>
    <div class="header-1">
        <h1>Đăng ký thành viên</h1>
    </div>
    <div class="form-container-1">
        <form action="index.php?act=dangki" class="chucnang-sp" method="POST">
        <div class="form-group">
                <label for="tenkh">Tên đăng nhập</label>
                <input type="text" name="tenkh"  placeholder="Nhập tên" required>
            </div>
            <div class="form-group">
                <label for="pass">Mật khẩu</label>
                <input type="password" name="pass"  placeholder="Nhập mật khẩu" required>
            </div>
            <div class="form-group">
                <label for="repass">Nhập lại mật khẩu</label>
                <input type="repass" name="repass"  placeholder="Nhập lại mật khẩu" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Nhập email" required>
            </div>
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Đăng ký" name="dangki">

            
        </form>
        <?php 
       if (isset($thongbao) && $thongbao != "") {
        echo $thongbao;
        echo"<br>";
        echo '<a href="index.php" class="back-link">Quay lại</a>';
    }
        ?>
    </div>
</body>
</html>
