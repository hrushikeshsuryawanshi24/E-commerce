<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width ,initial-scale=1.0">
        <title>All Products - Shopping Portal</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        
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
                    <a href="My orders.php" >My Orders</a>
                </li>
                <li>
                    <a href="Account.php" >Account</a>
                </li>
                <!--li>
                    <a href="wishlist.html" ><i class="fa fa-heart-o fa-2x" ></i>
                    </a>
                </li-->

            </ul>
        </nav>
        <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
       </div> 
       
        </div>
       
        <div class="small-container">
            <div class="row row2">
                <h2>All Products of Babies</h2>
                <select>
                    <option>Default Sorting</option>
                    <option>Sort by Price</option>
                    <option>Sort by Popularity</option>
                    <option>Sort by Rating</option>
                    <option>Sort by Sale</option>
            </select>
            </div>
            <div class="row">
                <div class="col3">
                    <img src="images/s45.webp">
                    <h4>Black & White Shirt</h4>
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
                    <img src="images/s44.webp">
                    <h4>Boys shirts</h4>
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
                    <img src="images/s43.webp">
                    <h4>Princess Trendy Girls Frocks</h4>
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
                    <img src="images/s42.webp">
                    <h4>Soft Towel & Hooded Baby Blanket</h4>
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


            <div class="row">
                <div class="col3">
                    <img src="images/s41.webp">
                    <h4>DOUBLE BED Mosquito Net</h4>
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
                    <img src="images/s40.webp">
                    <h4>Girl's Wrist Watch Cum Toy </h4>
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
                    <img src="images/s39.webp">
                    <h4>Stylish Baby PU Orange Booties</h4>
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
                    <img src="images/s38.webp">
                    <h4>Hooh_New Kids Led Sports Shoes</h4>
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
                    <img src="images/s37.webp">
                    <h4>Velcro Closed Toe Shoes</h4>
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
                    <img src="images/s36.webp">
                    <h4>Stack-7 color Ring Sets for kids</h4>
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
                    <img src="images/s35.webp">
                    <h4>Soft Toys for Babies</h4>
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
                    <img src="images/s34.webp">
                    <h4>Classy soft toy</h4>
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
            <div class="page-btn">
                <a href=""><span>1</span></a>
                <a href=""><span>2</span></a>
                <a href=""><span>3</span></a>
                <a href=""><span>4</span></a>
                <a href=""><span>&#8594;</span></a>
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