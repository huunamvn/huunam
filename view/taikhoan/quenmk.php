<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
       

        .header1 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .h1quenmk {
    font-size: 24px;
    font-weight: bold;
    color: black;
    text-align: center;
    text-decoration: none;
    margin-top: 10px;
}

        .forgot-password-container {
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
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        [type="reset"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
        input[type="reset"]:hover {
            background-color: #555;
        }
        .thongbao {
 
 color: red; 
 padding: 10px; 
 border-radius: 5px; 
 text-align: center;
 font-weight: bold;
}
    </style>
</head>
<body>
    <div class="header1">
        
    </div>
    <h1 class="h1quenmk">Quên mật khẩu</h1>
    <div class="forgot-password-container">
        <p>Nhập tên đăng nhập và địa chỉ email của bạn để khôi phục mật khẩu:</p>
        <form action="index.php?act=quenmk" class="chucnang-sp" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Nhập email" required>
            </div>
            <input type="submit" value="Gửi yêu cầu khôi phục mật khẩu" name="guiemail">
            <input type="reset" value="Nhập lại">
        </form>
        <p class='thongbao'>
        <?php 
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
        
        ?>
        </p>
    </div>
</body>
</html>
