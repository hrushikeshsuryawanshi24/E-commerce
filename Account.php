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
        <div class="header1"> 
     
       <div class="navbar">
        <div class="logo">
            <img src="images/logoo.png" width="210px" >
        </div>
          </div> 
        <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col1">
                    <img src="images/bags.png" width="100%">              
              </div>
              <div class="col2">
                <div class="form-container">  
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div> 
					
                    <form id="LoginForm" name="form1" action="Account.php" method="post"> <!---onsubmit="required()"-->
                        
                        <input type="text" placeholder="username" minlength="1" maxlength="15" name="username">
                        <input type="password" placeholder="password" minlength="8" name="password">
                        <input type="submit" class="btn" name="login_btn" value="Login">
                        <a href="">Forgot password</a>
                    </form>                 
                    <form id="RegForm" name="form2" action="Account.php" method="post"> <!---onsubmit="required1()"--->  
                        <input type="text" placeholder="username" minlength="1" maxlength="15" name="username" >
                        <input type="email" placeholder="email" minlength="15" maxlength="50" name="email">
                        <input type="password" placeholder="password" minlength="8" name="password">
                        <input type="password" placeholder="Confirm Password"  name="cpassword">

                        <input type="submit" class="btn" name="register_btn" value="Register">
                        
                    </form>
					
              </div>
				 <?php
				if(isset($_POST['register_btn']))
				{
					//echo '<script type= "text/javascript" >alert("Registered Button Clicked")</script>';
					$username = $_POST['username'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$cpassword =$_POST['cpassword'];


					if($password==$cpassword)
					{
						$query = " select * from  shopping1 WHERE username='$username'";
						$query_run = mysqli_query($con,$query);

						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type= "text/javascript" >alert("User aleady existed")</script>';
						}
						else
						{
							$query = "insert into shopping1 values('','$username','$email','$password')";

							$query_run = mysqli_query($con,$query);

							if($query_run)
							{
								echo '<script type= "text/javascript" >alert("Registered Successfully")</script>';
							}
							else
							{
								echo '<script type= "text/javascript" >alert("Error")</script>';
							}
						}

					}
					
				}
			
				else if(isset($_POST['login_btn']))
				{
					$username=$_POST['username'];
					$password = $_POST['password'];
					$query="select * from shopping1 where username='$username' And password='$password'";
				   $query_run=mysqli_query($con,$query);
						if(mysqli_num_rows($query_run)>0)
						{
							header('location:text.html');
						}
					 
						else
						{
							echo '<script type="text/javascript">alert("Invalid credential try again or not registered go to registered page")</script>';
						}
				}	
			?>
				
				
          </div>
		   

					
            </div>
			 
			
        </div>

       </div>
	  
       </div>
	    
           
        </div>    
<!------js for form-------->

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator=document.getElementById("Indicator");
     function register(){
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(100px)";
     }
     function login(){
        RegForm.style.transform="translateX(300px)";
        LoginForm.style.transform="translateX(300px)";
        Indicator.style.transform="translateX(0px)";
     } 
</script>
</body>

</html>