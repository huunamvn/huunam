<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
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

        .change-password-container {
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
    </style>
</head>
<body>
    <div class="header">
        <h1>Đổi mật khẩu</h1>
    </div>
    <div class="change-password-container">
        <p>Nhập thông tin sau để đổi mật khẩu:</p>
        <form action="" class="chucnang-sp">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="form-group">
                <label for="old-password">Mật khẩu cũ</label>
                <input type="password" name="old-password" id="old-password" placeholder="Nhập mật khẩu cũ" required>
            </div>
            <div class="form-group">
                <label for="new-password">Mật khẩu mới</label>
                <input type="password" name="new-password" id="new-password" placeholder="Nhập mật khẩu mới" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Nhập lại mật khẩu mới</label>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Nhập lại mật khẩu mới" required>
            </div>
            <input type="submit" value="Đổi mật khẩu">
        </form>
    </div>
</body>
</html>
