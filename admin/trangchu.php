<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
   <link rel="stylesheet" href="../trangchu.css">
    <style>
        .slideshow-container {
    max-width: 100%;
    position: relative;
    overflow: hidden;
}

.mySlides {
    display: none;
}

img {
    width: 100%;
}
.box-sp-top5{
    margin-bottom: 14px;
    border-bottom: 1px solid#dedcdc;
}
.img-sp-top5{
    width: 15%;
    border: 1px solid #ccc;
    border-radius: 50%;
    margin-right: 8px;
    float: left;
}

.name-sp-top5 a{
    text-decoration: none;
    color: black;
}

.name-sp-top5 a:hover{
    color: red;
    text-decoration: underline;
}
.box-title{
    background-color: #eee;
    padding: 10px 20px;
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-left: 1px solid #ccc;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.box-content{
    min-height: 200px;
    border: 1px solid #ccc;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    padding: 10px 20px;
    line-height: 130%;
}

    </style>
    
</head>
<body>
    <div class="tong">
    <div class="boxcenter">
        <div class="row mb header">
            <h1>Cửa hàng điện tử</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Góp ý</a></li>
                <li><a href="#">Hỏi đáp</a></li>
            </ul>
        </div>
        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img src="../img/img/anh1.webp" alt="Slide 1">
                            </div>
                    
                            <div class="mySlides fade">
                                <img src="../img/img/anh2.webp" alt="Slide 2">
                            </div>
                    
                            <div class="mySlides fade">
                                <a href="#"><img src="../img/img/anh3.webp" alt="Slide 3"></a>
                            </div>
                            <div class="mySlides fade">
                                <a href="#"><img src="../img/img/anh4.webp" alt="Slide 3"></a>
                            </div>
                            <div class="mySlides fade">
                                <a href="#"><img src="../img/img/anh5.webp" alt="Slide 3"></a>
                            </div>
                        </div>
                    </div>
                    <script>
                        let slideIndex = 0;
                    
                        function showSlides() {
                            let slides = document.getElementsByClassName("mySlides");
                            for (let i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slideIndex++;
                            if (slideIndex > slides.length) {
                                slideIndex = 1;
                            }
                            slides[slideIndex - 1].style.display = "block";
                            setTimeout(showSlides, 2000); // Change slide every 3 seconds (adjust as needed)
                        }
                    
                        showSlides(); // Start the slideshow
                    </script>
                </div>
                <div class="row">
                    <!-- Product boxes -->
                    <div class="boxsp mr">
                        <div class="row img"><img src="../img/img/anh2.webp" alt=""></div>
                        <p>$1000</p>
                        <a href="#">Điện thoại</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="../img/img/anh3.webp" alt=""></div>
                        <p>$900</p>
                        <a href="#">Điện thoại</a>
                    </div>
                    <div class="boxsp  ">
                        <div class="row img"><img src="../img/img/dongho1.webp" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">Điện thoại<img src="../img/img/anh7.jpg" alt=""></div>
                        <p>$600</p>
                        <a href="#"></a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="../img/img/maytinh1.jpg" alt=""></div>
                        <p>$300</p>
                        <a href="#">Máy tính</a>
                    </div>
                    <div class="boxsp  ">
                        <div class="row img"><img src="../img/img/dongho4.png" alt=""></div>
                        <p>400</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                                Mật Khẩu
                                <input type="password" name="pass" id="" required>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản ?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <ul>
                            <li><a href="#">Quên mật khẩu</a></li>
                            <li><a href="#">Đăng kí thành viên</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Ba lô</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Ba lô</a></li>
                            <li><a href="#">Ba lô</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mb">
                    <div class="box-title">TOP 5 YÊU THÍCH</div>
                    <div class="box-content">
                        <div class="box-sp-top5">
                            <img src="../img/img/anh4.webp" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 15 Pro Max 256GB Chính Hãng VN/A</a></div>
                        </div>
                        <div class="box-sp-top5">
                            <img src="../img/img/anh5.webp" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 15 Plus 128GB Chính Hãng VN/A</a></div>
                        </div>
                        <div class="box-sp-top5">
                            <img src="../img/img/anh7.jpg" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 14 Pro 128GB cũ đẹp 99%</a></div>
                        </div>
                        <div class="box-sp-top5">
                            <img src="../img/img/anh8.jpg" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">iPhone 14 Plus 128GB cũ đẹp 99%</a></div>
                        </div>
                        <div class="box-sp-top5">
                            <img src="../img/img/anh6.jpg" alt="" class="img-sp-top5">
                            <div class="name-sp-top5"><a href="#">Samsung Galaxy Z Fold5 12GB 256GB Chính Hãng</a></div>
                        </div>
                        
                    </div>
                    <footer>
                <div class="footer">
                    <div class="footer-content">
                        <div class="footer-item">
                            <h3>Liên hệ</h3>
                            <p>Số điện thoại: +123456789</p>
                            <p>Địa chỉ: 123 Đường ABC, Quận XYZ, TP HCM</p>
                        </div>
                        <div class="footer-item">
                            <h3>Mạng xã hội</h3>
                            <a href="https://www.facebook.com/yourfacebookpage" target="_blank">Facebook</a><br>
                            <a href="mailto:youremail@example.com">Email</a>
                        </div>
                    </div>
                </div>
            </footer>
            </body>
            </html>
                
