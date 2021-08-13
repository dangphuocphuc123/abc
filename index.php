<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="prada.css">
    <link rel="stylesheet" href="font/font/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    .mySlides {display:none}
    </style>
<body>
    <!------------------------page-------------------->
    <div class="khung">
        
        <img src="" alt="" class="hinhnen">
        <a href="">
           
            <div class="khoi1">
                <span class="layer1">WOMEN</span>
                <span class="layer2">Fall Winter 2021</span>
                <span class="layer3"></span>
                <div class="icon">
                    <span class="ic far fa-comment-alt"></span><br>
                    <span class="ic2">New In<br></span>
                    <span class="ic3">All Items</span>
                </div>
            </div>
            <div class="khoi1 s2">
                    <span class="layer1">MAN</span>
                    <span class="layer2">Fall Winter 2021</span>
                    <span class="layer3"></span>
                    <div class="icon">
                        <span class="ic fas fa-utensils"></span><br>
                        <span class="ic2">New In<br></span>
                        <span class="ic3">All Items</span>
                    </div>
            l</div>
            <div class="khoi1 s3">
                        <span class="layer1">Blog</span>
                        <span class="layer2">Our Story</span>
                        <span class="layer3"></span>
                        <div class="icon">
                            <span class="ic fas fa-book"></span><br>
                            <span class="ic2">News<br></span>
                            <span class="ic3">And stories</span>
                        </div>
                    </div>    
                    <div class="khoi1 s4">
                            <span class="layer1">GIFTS</span>
                            <span class="layer2">The Latest</span>
                            <span class="layer3"></span>
                            <div class="icon">
                                <span class="ic far fa-address-book"></span><br>
                                <span class="ic2">More<br></span>
                                <span class="ic3">Prada Icons</span>
                            </div>
                        </div>
                        <div class="khoi1 s5">
                                <span class="layer1">PRADASPHERE</span>
                                <span class="layer2">Prada Luna Rossa Ocean</span>
                                <span class="layer3"></span>
                                <div class="icon">
                                    <span class="ic far fa-comment-alt"></span><br>
                                    <span class="ic2">AUG 2021<br></span>
                                    <span class="ic3">Discover</span>
                                </div>
                        </div>
                </a>
    </div>
    <!----------- Slide----------->
    <div class="container">
        <h2>PRADASPHERE_NEW</h2>
        <p>The Galleria</p>
      </div>
      <div class="sld" style="max-width:1200px">
        <img class="mySlides" src="Anh_1.webp" style="width:100%">
        <img class="mySlides" src="Anh_5.jpg" style="width:100%">
        <img class="mySlides" src="Anh_4.jpg" style="width:100%">
      </div>
      
      <div class="center">
        <div class="section">
          <button class="button light-grey" onclick="plusDivs(-1)" style="background-color:black; color: white; font-family: 'Courier New', Courier, monospace;">❮ Prev</button>
          <button class="button light-grey" onclick="plusDivs(1)"style="background-color:black; color: white; font-family: 'Courier New', Courier, monospace;">Next ❯</button>
        </div>
      </div>
      
      <script>
      var slideIndex = 1;
      showDivs(slideIndex);
      
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }
      
      function currentDiv(n) {
        showDivs(slideIndex = n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" red", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " red";
      }
      </script>      
    <!----------------------Sản phẩm----------------->
    <div>
        <h2 class="title">NEW IN</h2>
        <a href="" class="taokhoi">
            <img src="TTK.jpg" alt="" class="lop1">
            <span class="lop2">
                <p id="a1">Womenswear Collection</p>
            </span>   
        </a>
        <a href="" class="taokhoi">
            <img src="add1.webp" alt="" class="lop1">
            <span class="lop3">
                <p id="a1">Adidas for Prada</p>
            </span>   
        </a>
    </div>
    <!----------------------------Store------------------>
    <div class="container-fluid">
        <h2 class="title">STORE</h2>
        <div class="row">
            
            <div class="col-md-4">
                <img src="Adr.webp" alt="" style="width: 107%"; width="150px"; >
            </div>
            <div class="col-md-8">
                    <h1 style="margin-top:50px; color: rgb(143, 144, 145);">HELLO AND WELCOME</h1>
                    <div class="container"></div>
                    <div class="row">
                    <div class="col-md-6 le">
                        <h2>STORE <br>PRADA</h2>
                        <p id="gop">Working in the Prada Group means taking part of a world of talent, avant-garde and excellence.</p><br>
                        <h2>TALENTS</h2>
                        <p>“We must be the actors of change”
                            Miuccia Prada and Patrizio Bertelli</p>
                    </div>
                    <div class="col-md-6 cot">
                        <h4 class="mau">PHONE</h4>
                        <p class="mo">
                            Std International: +44 (0) 333 300 97 85 <br>
                            Italy: +39 06 99 721 048 <br>
                            Hong Kong: +852 58 08 55 96 <br>
                            USA: +1 (917) 677 7532; +1 (866) 331 1332</p>
                        <h4 class="mau">LOCATION</h4>
                        <p class="mo">Store Locator<br>
                                    Milan, Galleria Vittoria Emanuele II, 62</p>
                        <h4 class="mau">HOURS</h4>
                        <p class="mo">M-F 11am-2am <br>
                                    Sa 10am-3am <br>
                                    Su 10am-2am</p>
                        </div>
                </div> 
            </div>                 
        </div>
    </div>
    <!-------------day la footer-------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>FOLLOW US </h3>
                    
                    <div class="app-logo">
                        <img src="./flus.jpg" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="./logo.jpg" alt="logo-white">
                    <p>SUBSCRIBE TO OUR NEWSLETTER</p>
                    <input type="text" class="textbox" placeholder="Email">
                </div>
                <div class="footer-col-3">
                    <h3>COMPANY</h3>
                    <ul>
                        <li>Prada Group</li>
                        <li>Fondazione Prada</li>
                        <li>Luna Rossa</li>
                        <li>Sustainability</li>
                        <li>Work with us</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>LEGAL TERMS AND CONDITIONS</h3>
                    <ul>
                        <li>Legal Notice</li>
                        <li>Privacy Policy</li>
                        <li>Cookie Policy</li>
                        <li>Sitemap</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">@PRADA 2007 - 2021 | VAT n.10115350158</p>
        </div>
    </div>

    <!----------- js for toggle menu ----------->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px"
            }
            else
            {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>
</body>
</html>