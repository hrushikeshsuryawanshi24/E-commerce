<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width ,initial-scale=1.0">
        <title>Shopping Portal</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">


    </head>
    <body>
        <div class="header" >
        <div class="container">
       <div class="navbar">
        <div class="logo">
            <img src="images/logoo.png" width="210px" >
        </div>
        
        <div class="dropdown">
            <button class="dropbtn">&nbsp; &nbsp;Categories</button>
            <div class="dropdown-content">
              <a href="men.php">Men</a>
              <a href="women.php">Women</a>
              <a href="kids.php">Kids</a>
              <a href="cosmetics.php">Cosmetics</a>
              <a href="accessories.php">Accessories</a>
              <a href="home&kitchen.php">Home & Kitchen</a>
            </div>
          </div>
    
        




    
        <div class="search-container">
    
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          
      
        </div>
        <nav>
            <ul id="MenuItems">
                <li>
                    <a href="home.php" target="_self" >Home</a>
                </li>
                <li>
                    <a href="products.php" >Product</a>
                </li>
                <li>
                    <a href="My orders.html" >My Orders</a>
                </li>
                <li>
                    <a href="Account.php" >Account</a>
                </li>
                <!---li>
                    <a href="wishlist.html" ><i class="fa fa-heart-o fa-2x" ></i>
                    </a>
                </li--->

            </ul>
        </nav>
        <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
       </div> 
       <div class="row">
        <div class="col1">
            <h1>“Fashion & Clothing is the one makes you<br> look awesome and unique from others!”</h1>
            <p>It's not about brand, it's all about style!</p>
            <a href="products.html" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col1">
            <img src="images/bags.png">
        </div>
       </div>
        </div>
        </div>
<!----------------categories that we have to create for our shopping portal------------>
        <div class="categories">
            <div class="small-container">
            <div class="row">
                <div class="col2">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col2">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col2">
                    <img src="images/category-3.jpg">

                </div>
            </div>
        </div>
        </div>

        <div class="small-container">
            <h2 class="title"><u>Featured Products</u></h2>
            <div class="row">
                <div class="col3">
                    <a href=""><img src="images/product-12.jpg"></a>
                    <a href=""><h4>Classy track Pant</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                    <a href=""><img src="images/s1.webp"></a>
                    <a href=""><h4>Fashionable Trendy Wallet </h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                   <a href=""> <img src="images/s3.webp"></a>
                    <a href=""><h4>Stylish Black Jeans</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                    <img src="images/s4.webp">
                    <h4>Fancy Frok</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>

            </div>
            <h2 class="title"><u>Latest Products</u></h2>
            <div class="row">
                <div class="col3">
                    <img src="images/s5.webp">
                    <h4>Elite Clock</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                    <img src="images/s6.webp">
                    <h4>Stainless Steel Water Bottle</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                    <img src="images/s7.webp">
                    <h4>Fashionable Watch for ladies</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                   <a href=""> <img src="images/s8.webp"></a>
                    <a href=""><h4>Black flat Sandels</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>


            </div>
            <div class="row">
                <div class="col3">
                    <a href=""><img src="images/product-9.jpg"></a>
                    <a href=""><h4>Fashion Watch for Men</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                    <a href=""><img src="images/product-10.jpg"></a>
                    <a href=""><h4>Red black Sports Shoes</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                    <a href=""><img src="images/product-11.jpg"></a>
                    <a href=""><h4>Solid Slip-on Sneakers For Men</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>
                <div class="col3">
                    <a href="product-details.html"><img src="images/product-1.jpg"></a>
                    <a href="product-details.html"><h4>Red Printed T-shirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.365.00</p>
                </div>

            </div>
        </div>
<!---here we can represent our offers ------------>
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col1">
                <img src="images/My project-1.png" class="offer-img">
            </div>
            <div class="col1">
                <p><b>Exclusively available on Shopping Portal</b></p>
                <h1>
                    Smart Phone 
                </h1>
                <small>bsjhcjsgdhjsb dbjhdh dhuucbbc jhjbab dha hahbxx dhbavxg
                    hxhb s hx ahhschbc nhsahjhvxavx bkldbnxhbab <br>
                    we will later include here features!

                    now i dont have sufficient information....
                </small>
                <a href="exclusive.html" class="btn">Buy Now &#8594;</a>

            </div>
        </div>
    </div>
</div>
<!--------------Here we can write our customers opinion------------>
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col2">
                <i class="fa fa-quote-left"></i>
                <p>I would like to tell you that I am extremely pleased with the products that I received from Shopping Portal!  Not only is it a wonderful platform, but it also is so simple to use. Customer service plays a major part in my opinion. I would not hesitate to purchase again!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user-5.jpg">
                <h3>User name</h3>

            </div>
            <div class="col2">
                <i class="fa fa-quote-left"></i>
                <p>I would like to tell you that I am extremely pleased with the products that I received from Shopping Portal!  Not only is it a wonderful platform, but it also is so simple to use. Customer service plays a major part in my opinion. I would not hesitate to purchase again!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user-2.jpg">
                <h3>User name</h3>

            </div>
            <div class="col2">
                <i class="fa fa-quote-left"></i>
                <p>I would like to tell you that I am extremely pleased with the products that I received from Shopping Portal!  Not only is it a wonderful platform, but it also is so simple to use. Customer service plays a major part in my opinion. I would not hesitate to purchase again!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user-3.jpg">
                <h3>User name</h3>

            </div>
        </div>

    </div>
</div>
<!-----------------Here we are writing the brands of our products------------->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col4">
                <img src="images/logo-godrej.png">
            </div>
            <div class="col4">
                <img src="images/logo-oppo.png">
            </div>
            <div class="col4">
                <img src="images/logo-coca-cola.png">
            </div>
            <div class="col4">
                <img src="images/logo-paypal.png">
            </div>
            <div class="col4">
                <img src="images/logo-philips.png">
            </div>
        </div>
    </div>

</div>

<!-----Footer of shopping portal-------->
<div class="footer">
    <div class="container">
        <div class="row">
        
            <div class="footer-col1">
                <h3>Useful links</h3>
                <ul>
                 <li>Coupons</li>
                 <li>Blog post</li>
                 <li>Corporate Information</li>
                 <li>Join Affilate</li>
                 </ul>
            </div>
            <div class="footer-col2">
               <h3>Keep in touch</h3>
               <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>Youtube</li>
            </ul> 
            </div>
            <div class="footer-col3">
                <h3>Customer Policies</h3>
                <ul>
                 <li>Contact us</li>
                 <li>FAQ</li>
                 <li>T&C</li>
                 <li>Terms of use</li>
                 <li>Shipping</li>
                 <li>Cancellation</li>
                 <li>Returns</li>
                 <li>Privacy Policy</li>
             </ul> 
             </div>

        </div><hr>
        <div class="row">
             <div class="footer-col4">
            <h3>Registered Office Address</h3>
            <p>bs chbs bsh  hcgajjjks ncjbs nshs <br>gkfkk hsvs hchb  eryiweb dhdbbsh <br>giidgd arwydvv hsyvvd<br>kgih nhhfh dggd,<br>Nashik-02, India</p>
        </div>
        <div class="footer-col5">
            <h4>Email id: chavansakshi236@gmail.com</h4>
            <h4>Telephone no: 0253-45673355</h4>
        </div>
        </div>
    </div>
</div>



<script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight=="0px"){
                MenuItems.style.maxHeight="200px";

            }
            else{
                MenuItems.style.maxHeight="0px";
            }

        } 
</script>
    </body>
</html>