<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
   <link rel="stylesheet" href="view/trangchu.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha384-lYnnUe45/AXk3SvbN72mwnkFe0Wsqy7s1tmVrhcEId2s4UcmzfejtJhth3mjJmM1" crossorigin="anonymous">
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
.logo {
    width: 100px; 
    margin-right: 200px;
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
/* Header styles */
.row.mb.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    color: #fff;
    
}
.header {
    position: relative;
}

.image-container {
    position: relative;
}

.logo {
    position: absolute;
    top: 0px;
    left: 5px; 
    z-index: 1; 
    width: 150px; 
    height: 100px
}

h1 {
    font-size: 24px;
    margin: 0;
}


.row.mb.menu {
    background-color: #0070c0;
    color: #fff;
}

.menu ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
}

.menu li::before {
    
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #007BFF;
    transition: width 0.3s;
}
.menu li:hover::before {
    width: 100%;
}
.menu a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
}

.menu a:hover {
    text-decoration: underline;
}

.name-sp-top5 a:hover{
    color: red;
    text-decoration: underline;
}
.box-title-yt{
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
    .footer-content {
        display: flex;
        justify-content: space-between;
        background-color: #0000DD; 
        color: #fff; 
        padding: 20px; 
        width: 910px; 
        margin: 0 auto; 
    }

   
    .footer-item {
        flex: 1; 
        padding: 10px; 
    }
    .footer-item h3 {
        font-size: 18px; 
        margin-bottom: 10px; 
    }
    .footer-item a {
        color: #fff; 
        text-decoration: none; 
        display: block; 
        margin-bottom: 5px;
    }

    
    .footer-item a:hover {
        text-decoration: underline;
    }


    </style>
    
</head>
<body>
    <div class="tong">
    <div class="boxcenter">
    <div class="row mb header">
    <div class="image-container">
        <a href="index.php"><img src="view/img/img/maytinh3.webp" alt="Logo" class="logo" ></a>
        <img src="view/img/img/header-vr2.jpg" height="300px" width='200px' alt="">
        <div class="slideshow">
        </div>
            
        </div>
    </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
            </ul>
        </div>