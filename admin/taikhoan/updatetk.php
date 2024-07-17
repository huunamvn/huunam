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
        .h1capnhattk {
    font-size: 24px;
    font-weight: bold;
    color: black;
    text-align: center;
    text-decoration: none;
    margin-top: 10px;
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
        .thongbao {
 
    color: red; 
    padding: 10px; 
    border-radius: 5px; 
    text-align: center;
    
}

    </style>
</head>
<body>
    <div class="header-1">
     
    </div>
    <h1 class="h1capnhattk">Cập nhật tài khoản</h1>
    <div class="form-container-1">
        <?php
        if(isset($_SESSION['tenkh'])&&(is_array($_SESSION['tenkh']))){
            extract($_SESSION['tenkh']);
        }
        ?>
        <form action=""  method="post" class="chucnang-sp">
        <div class="form-group">
                Tên đăng nhập
                <input type="text" name="tenkh"  value="<?=$tenkh?>" >
            </div>
            <div class="form-group">
              Mật khẩu
                <input type="password" name="pass"  value="<?=$pass ?>"  >
            </div>
            <div class="form-group">
               Nhập lại mật khẩu
                <input type="password" name="repass" value="<?=$pass ?>"  >
            </div>
            <div class="form-group">
                Email
                <input type="text" name="email" value="<?=$email?>" >
            </div>
            <div class="form-group">
               Địa chỉ
                <input type="text" name="diachi" value="<?=$diachi ?>" >
            </div>
            <div class="form-group">
              Điện thoại
                <input type="text" name="dienthoai" value="<?=$dienthoai ?>" >
            </div>
            <div class="form-group">
              ROLE
                <input type="text" name="role" value="<?=$role ?>" >
            </div>
            <input type="hidden" name="id" value="<?=$id ?>">
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Cập nhật" name="capnhat">

            
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
