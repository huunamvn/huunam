<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .formtaikhoan {
       
        padding: 15px;
        border: 1px solid #FAFAD2;
        border-radius: 5px;
    }

    .formtaikhoan input[type="text"],
    .formtaikhoan input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .formtaikhoan input[type="checkbox"] {
        margin-left: 5px;
    }

    .formtaikhoan input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .formtaikhoan input[type="submit"]:hover {
        background-color: #00FFFF;
    }
.menudoc ul {
    list-style-type: none;
    padding: 0;
}
.menudoc li {
    margin: 20px 10px; 
    padding: 10px 20px; 
    background-color: #FAFAD2;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    border: 1px solid #007bff; 
}

.menudoc li:hover {
    background-color: #FFFFE0;
}

.menudoc a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}



    .box-sp-top5 {
        background-color: #00FFFF;
        border: 1px solid #ddd;
        margin: 10px;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        
        cursor: pointer;
    }

    .box-sp-top5:hover {
        background-color: #79CDCD;
    }

    .img-sp-top5 {
        max-width: 100%;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .name-sp-top5 {
        margin-top: 10px;
        font-weight: bold;
        
    }
    .boxcontent2 {
        background-color: #FAFAD2;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: background-color 0.3s;
        text-align: center;
    }

    .boxcontent2:hover {
        background-color: #79CDCD; 
    }
p.chaouser {
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    margin-top: 10px;
    font-family: 'Your Font Here', sans-serif;
    color: #FF4500;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
li.quenmk a {
    list-style-type: none;
    margin-left: -30px;
    font-family: 'Your Font Here', sans-serif;
    color: #0000FF;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
}
li.capnhattk a{
    list-style-type: none;
    margin-left: -30px;
    font-family: 'Your Font Here', sans-serif;
    color: #0000FF;
    font-weight: bold;
    text-decoration: none;
}
li.dangnhapadmin a {
    list-style-type: none;
    margin-left: -30px;
    font-family: 'Your Font Here', sans-serif;
    color: #0000FF;
    font-weight: bold;
    font-style: italic;
    text-decoration: none;
}
li.thoat a {
    margin-left: 140px;
    color: #DD0000;
    text-decoration: none;
    font-weight: bold;
}
h4.tenuser {
    font-size: 15px;
    font-weight: bold;
    color: #0077b6; 
    text-align: center; 
    margin-top: 5px; 
   
}

input[type="text"] {
    padding: 8px; 
    font-size: 16px; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    width: 220px; 
    
}


input.timkiem {
    padding: 8px 20px; 
    font-size: 13px; 
    background-color: #0077b6; 
    color: #fff; 
    border: none;
    border-radius: 5px; 
    cursor: pointer; 
    margin-left: 125px;
}


input.timkiem:hover {
    background-color: #005685; 
}


    
</style>

<div class="boxphai">
                <div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <?php 
                        if(isset($_SESSION['tenkh'])){
                           extract($_SESSION['tenkh']);
                         ?>
                          <div class="row mb10">
                             <p class="chaouser"> Xin chào  <br></p>
                             <h4 class="tenuser">  <?=$tenkh ?></h4> 
                            </div>
                            <div class="row mb10">
                            <ul>
                            <li class="quenmk"><a href="index.php?act=quenmk">Quên mật khẩu</a></li><br>

                            <li class="capnhattk"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li><br>

                            <?php if($role==1) {
                               
                               ?>

                            
                            <li class="dangnhapadmin"><a href="admin/index.php">Đăng nhập admin</a></li>
                                <?php }?>
                            <li class="thoat"><a href="index.php?act=thoat">Thoát</a></li>
                        </ul>
                            </div>
                      <?php
                        }else{
                    ?>
                    <div class="boxcontent formtaikhoan">
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="tenkh" id="">
                            </div>
                            <div class="row mb10">
                                Mật Khẩu
                                <input type="password" name="pass" id="" required>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản ?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <ul>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=dangki">Đăng kí thành viên</a></li>
                        </ul>
                        <?php }?>
                    </div>
               
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php 
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                <a href="'.$linkdm.'">'.$tenloai.'</a>
                                </li>';
                            }
                            ?>
                            <!-- <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Ba lô</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Ba lô</a></li>
                            <li><a href="#">Ba lô</a></li> -->
                        </ul>
                    </div>
                            <div class="">
                          <form action="index.php?act=sanpham" method="Post">
                            <input type="text" name="kyw">
                            <input type="submit" class="timkiem" name="timkiem" value="Tìm kiếm">
                          </form>
                            </div>
                          
                </div>
                <div class="row mb">
                    <div class="box-title-yt">TOP 10 YÊU THÍCH</div>
                    <div class="box-content">
                    <?php 
            foreach ($dstop10 as $sp) {
            extract($sp);
             $linksp = "index.php?act=chitietsp&idsp=$idsp"; 
             $img = $img_path . $img;
                  echo '<div class="box-sp-top5">
                  <a href="' . $linksp . '">   <img src="' . $img . '" alt="" class="img-sp-top5"></a>
                         <div class="name-sp-top5"><a href="' . $linksp . '">' . $tensp . '</a></div>
                         </div>';
} 
?>

                        <!-- <div class="box-sp-top5">
                            <img src="view/img/img/anh4.webp" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 15 Pro Max 256GB Chính Hãng VN/A</a></div>
                        </div>
                         foreach ($dstop10 as $sp) {
            extract($sp);
             $linksp = "index.php?act=chitietsp&idsp=$idsp"; 
             $img = $img_path . $img;
                  echo '<div class="box-sp-top5">
                  <a href="' . $linksp . '">   <img src="' . $img . '" alt="" class="img-sp-top5"></a>
                         <div class="name-sp-top5"><a href="' . $linksp . '">' . $tensp . '</a></div>
                         </div>';
} 
                        <div class="box-sp-top5">
                            <img src="view/img/img/anh5.webp" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 15 Plus 128GB Chính Hãng VN/A</a></div>
                        </div>
                        <div class="box-sp-top5">
                            <img src="view/img/img/anh7.jpg" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 14 Pro 128GB cũ đẹp 99%</a></div>
                        </div>
                        <div class="box-sp-top5">
                            <img src="view/img/img/anh8.jpg" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 14 Plus 128GB cũ đẹp 99%</a></div>
                        </div>
                        <div class="box-sp-top5">
                            <img src="view/img/img/anh6.jpg" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">Samsung Galaxy Z Fold5 12GB 256GB Chính Hãng</a></div>
                        </div>
                        
                    </div>
                     -->
                
                    </div>
                </div>
                </div>
                </div>