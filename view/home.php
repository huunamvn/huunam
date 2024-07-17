<style>


.product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; 
    max-width: 100%; 
}


.boxsp {
    flex: 1;
    width: calc(33.33% - 10px); 
    min-height: 300px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s; 
}


.boxsp .img {
    text-align: center;
    padding: 10px;
}

.boxsp .img img {
    max-width: 100%;
    height: auto;
    width: 100%; 
    max-height: 200px; 
}


.boxsp p {
    font-size: 13px;
    margin: 5px 0;
    color: #333;
    font-weight: bold;
}


.boxsp a {
    font-size:13px;
    text-decoration: none;
    color: #007bff; 
    font-weight: bold;
    
}

p.gia {
    color: #FF0000; 
    font-weight: bold;
    margin-left: 95px;
    margin-top: -20px;
}


    </style>
<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                            <a href="index.php?act=chitietsp&idsp=84"> <img src="view/img/img/anh1.webp" alt="Slide 1"></a>
                            </div>
                    
                            <div class="mySlides fade">
                            <a href="index.php?act=sanpham"> <img src="view/img/img/anh2.webp" alt="Slide 2"></a>
                            </div>
                            <div class="mySlides fade">
                                <a href="index.php?act=sanpham"><img src="view/img/img/anh3.webp" alt="Slide 3" ></a>
                            </div>
                            <div class="mySlides fade">
                                <a href="index.php?act=sanpham"><img src="view/img/img/anh4.webp" alt="Slide 3"></a>
                            </div>
                            <div class="mySlides fade">
                                <a href="index.php?act=sanpham"><img src="view/img/img/samsung2.webp" alt="Slide 3"></a>
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
                            setTimeout(showSlides, 2000); 
                        }
                    
                        showSlides(); // Start the slideshow
                    </script>
                </div>
                <div class="row">
                <?php
                $i=0;
                foreach($spnew as $sanpham){
                    extract($sanpham);
                    $linksp="index.php?act=chitietsp&idsp=".$idsp;
                    $hinh=$img_path.$img;
                    if(($i==2)||($i==5)||($i=8)){
                        $mr="";

                    }else{ 
                        $mr="mr";
                    }
                    echo '  <div class="boxsp '.$mr.'">
                
                    <a href="'.$linksp.'">  <div class="row img"><img src="'.$hinh.'" alt=""></div></a>
                    <p>Sản phẩm  <a class="sanpham" href="'.$linksp.'">'.$tensp.'</a></p>
                      <p>Giá sản phẩm <p class="gia">'.$giasp.'$</p></p>
                   
                     </div>';
                $i+=1;
                }
                ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img"><img src="view/img/img/anh2.webp" alt=""></div>
                        <p>$1000</p>
                        <a href="#">Điện thoại</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/img/img/anh3.webp" alt=""></div>
                        <p>$900</p>
                        <a href="#">Điện thoại</a>
                    </div>
                    <div class="boxsp  ">
                        <div class="row img"><img src="view/img/img/dongho1.webp" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">Điện thoại<img src="view/img/img/anh7.jpg" alt=""></div>
                        <p>$600</p>
                        <a href="#"></a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/img/img/maytinh1.jpg" alt=""></div>
                        <p>$300</p>
                        <a href="#">Máy tính</a>
                    </div>
                    <div class="boxsp  ">
                        <div class="row img"><img src="view/img/img/dongho4.png" alt=""></div>
                        <p>400</p>
                        <a href="#">Đồng hồ</a>
                    </div> -->
                </div>
            </div>
            
            
            <?php include('boxright.php') ?>
                
               
             
                
            </body>