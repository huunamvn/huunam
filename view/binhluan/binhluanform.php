<?php 
        session_start();
        include "../../model/pdo.php";
        include "../../model/binhluan.php";
        $idpro=$_POST['idsp'];
        $dsbl=loadall_binhluan($idpro);
        // print_r ($dsbl);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
   .dktaikhoan {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f44336;
    color: white;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.dktaikhoan:hover {
    background-color: #d32f2f;
}
.guibinhluan {
    display: inline-block;
    padding: 12px 20px;
    background-color: #f44336;
    color: white;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.guibinhluan:hover {
    background-color: #d32f2f;
}
</style>
<body>
<div class="row mb ">

        
        <div class="boxtitle">BÌNH LUẬN</div>
       <div class="boxcontent2 binhluan ">
        <table>
                            <?php   
                                foreach($dsbl as $binhluan){
                                extract($binhluan);
                                echo '<tr><td> '.$noidung.' </td> ';
                                echo '<td> '.$iduser.' </td> ';
                                echo '<td> '.$thoigian.' </td> </tr>';
                                }
                            ?>
        </table >         
        </div>
        <?php 
                if(!isset($_SESSION['tenkh'])){
                    echo '<div class="binhluan1">
                    Bạn cần đăng nhập để bình luận hoặc đăng kí tại đây:
                        </div>';
                        echo '<br>';
                        echo '<a href="index.php?act=dangki" class="dktaikhoan">Đăng kí tài khoản</a>';
                }else{
                    
            
        ?>
        <div class="boxfooter ">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <input type="hidden" name="idpro" value="<?= $idpro?>">
                            <input type="text" name="noidung" >
                            <input type="submit" name="guibinhluan" class="guibinhluan" value="GỬI BÌNH LUẬN">
                        </form>
        </div>
        
        <?php 
                }
            ?>
         <?php 
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){

            $noidung=$_POST['noidung'];
            $idpro=$_POST['idpro'];
            $iduser=$_SESSION['tenkh']['id'];
            $thoigian=date('h:i:a d/m/Y');
            insert_binhluan($iduser, $idpro, $noidung,$thoigian);
            header("Location: ../../index.php?act=chitietsp&idsp=".$idpro);
        }
         
         ?>
</div> 
</body>
</html>