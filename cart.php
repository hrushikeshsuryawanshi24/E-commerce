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
        
        <nav>
            <ul id="MenuItems">
                <li>
                    <a href="home.php" >Home</a>
                </li>
                <li>
                    <a href="products.php" >Product</a>
                </li>
                <li>
                    <a href="" >Categories</a>
                </li>




                
                <li>
                    <a href="" >Contact</a>
                </li>
                <li>
                    <a href="Account.php" >Account</a>
                </li>
            </ul>
        </nav>
        <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
       </div> 
       
        </div>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>
                    Product
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Subtotal
                </th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg">
                        <div>
                            <p>
                                Red Printed T-shirt
                            </p>
                            <small>Price: Rs.365.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                </td>
                <td>
                    Rs.365.00
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg">
                        <div>
                            <p>
                                Black Classy Sport Shoes
                            </p>
                            <small>Price: Rs.600.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                </td>
                <td>
                    Rs.600.00
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>
                                Track Pant 
                            </p>
                            <small>Price: Rs.1000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                </td>
                <td>
                    Rs.1000.00
                </td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rs.200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rs.35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rs.1100.00</td>
                </tr>
            </table>

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