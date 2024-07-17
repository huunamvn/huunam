<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .login-container {
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
        input[type="password"] {
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

        .forgot-register-links {
            text-align: center;
        }

        .forgot-register-links a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Đăng nhập tài khoản</h1>
    </div>
    <div class="login-container">
        <form action="" class="chucnang-sp">
            <div class="form-group">
                <label for="tenkh">Tên đăng nhập</label>
                <input type="text" name="tenkh" id="tenkh" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="form-group">
                <label for="pass">Mật khẩu</label>
                <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu" required>
            </div>
            <input type="submit" value="Đăng nhập">
        </form>
        <div class="forgot-register-links">
            <a href="#">Quên mật khẩu</a>
            <a href="#">Đăng kí thành viên</a>
        </div>
    </div>
</body>
</html>
