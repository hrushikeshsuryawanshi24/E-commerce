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
        <div class="search-container">
    
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          
      
        </div>
        <nav>
            <ul id="MenuItems">
                <li>
                    <a href="home.php" >Home</a>
                </li>
                <li>
                    <a href="" >Product</a>
                </li>
                <li>
                    <a href="" >About</a>
                </li>
                <li>
                    <a href="" >Contact</a>
                </li>
                <li>
                    <a href="" >Account</a>
                </li>
            </ul>
        </nav>
        <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
       </div> 
       
        </div>
       
        <div class="small-container">
            <div class="row row2">
                <h2>All Products</h2>
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
                    <img src="images/product-1.jpg">
                    <h4>T-shirt</h4>
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
                    <img src="images/product-2.jpg">
                    <h4> Mens Black shoes</h4>
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
                    <img src="images/product-3.jpg">
                    <h4>Mens pant</h4>
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
                    <img src="images/product-4.jpg">
                    <h4>Mens Blue T-shirt</h4>
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
                    <img src="images/product-5.jpg">
                    <h4>Mens Shoes</h4>
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
                    <img src="images/product-6.jpg">
                    <h4>Mens Black T-shirt</h4>
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
                    <img src="images/product-7.jpg">
                    <h4>Mens Socks</h4>
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
                    <img src="images/product-8.jpg">
                    <h4>Mens Watch</h4>
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
                    <img src="images/product-9.jpg">
                    <h4>Mens Watch</h4>
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
                    <img src="images/product-10.jpg">
                    <h4>Mens Black Shoes</h4>
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
                    <img src="images/product-11.jpg">
                    <h4>Mens Gray shoes</h4>
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
                    <img src="images/product-12.jpg">
                    <h4>Mens Black pant</h4>
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
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
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