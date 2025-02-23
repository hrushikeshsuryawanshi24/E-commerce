
 <?php

$con=mysqli_connect('localhost','root','') or die('unable to connect');
mysqli_select_db($con,'shopping');
 //login and registration
 function login($con){
				if(isset($_POST['register_btn']))
				{
					//echo '<script type= "text/javascript" >alert("Registered Button Clicked")</script>';
					$username = $_POST['username'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$cpassword =$_POST['cpassword'];


					if($password==$cpassword)
					{
						$query = " select * from  login WHERE username='$username'";
						$query_run = mysqli_query($con,$query);

						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type= "text/javascript" >alert("User aleady existed")</script>';
						}
						else
						{
							$query = "insert into login values('','$username','$email','$password')";

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
					$query="select * from login where username='$username' And password='$password'";
				   $query_run=mysqli_query($con,$query);
						if(mysqli_num_rows($query_run)>0)
						{
							echo '$username';
							header('location:text.php');
						}
					 
						else
						{
							echo '<script type="text/javascript">alert("Invalid credential try again or not registered go to registered page")</script>';
						}
				}
 }

//text.php code

function text($con){
	if(isset($_GET['search'])){
	$search=$_GET['search'];
	$query="select * from allproducts where pname LIKE '%$search%'";
	$query_run=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($query_run)){
		$pid = $row['pid'];
		$pname = $row['pname'];
	    $description = $row['description'];
		$price = $row['price'];
		$size = $row['size'];
		$image = $row['image'];
        echo '<div class="small-container"><div class="row"><div class="result"><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h4>" .$row['pname']."</h4>";
			echo"<p>Rs.&nbsp;" .$row['price']."</p>";
	//		echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p></div></div></div>";
			
    
	}		
	
	
	}

}
//men.php code
function men($con)
{
	 if( isset($_GET['search'])){
			 
			$search=$_GET['search'];
		    $sql="select * from men where pname LIKE '%$search%' ORDER BY RAND() LIMIT 12";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($result)){
				 $pid = $row['pid'];
  $pname = $row['pname'];
  $description = $row['description'];
  $price = $row['price'];
  $size = $row['size'];
  $image = $row['image'];
          echo '<div class="small-container"><div class="row"><div class="result"><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h4>" .$row['pname']."</h4>";
			echo"<p>Rs.&nbsp;" .$row['price']."</p>";
	//		echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p></div></div></div>";

			
		  }
		  }
}
//women.php
function women($con)
{
	if( isset($_GET['search'])){
			 
			$search=$_GET['search'];
		    $sql="select * from woman where pname LIKE '%$search%' ORDER BY RAND() LIMIT 12";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($result)){
				 $pid = $row['pid'];
  $pname = $row['pname'];
  $description = $row['description'];
  $price = $row['price'];
  $size = $row['size'];
  $image = $row['image'];
         echo '<div class="small-container"><div class="row"><div class="result"><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h4>" .$row['pname']."</h4>";
			echo"<p>Rs.&nbsp;" .$row['price']."</p>";
	//		echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p></div></div></div>";  
			

			
		  }
		  }
}	
//kid.php
function kid($con)
{
	if( isset($_GET['search'])){
			 
			$search=$_GET['search'];
		    $sql="select * from kids where pname LIKE '%$search%' ORDER BY RAND() LIMIT 12";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($result)){
				 $pid = $row['pid'];
  $pname = $row['pname'];
  $description = $row['description'];
  $price = $row['price'];
  $size = $row['size'];
  $image = $row['image'];
           echo '<div class="small-container"><div class="row"><div class="result"><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h4>" .$row['pname']."</h4>";
			echo"<p>Rs.&nbsp;" .$row['price']."</p>";
	//		echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p></div></div></div>";

			
		  }
		  }
}
//cosmetics.php
function cosmetics($con){
if( isset($_GET['search'])){
			 
			$search=$_GET['search'];
		    $sql="select * from cosmetics where pname LIKE '%$search%' ORDER BY RAND() LIMIT 12";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($result)){
				 $pid = $row['pid'];
  $pname = $row['pname'];
  $description = $row['description'];
  $price = $row['price'];
  
  $image = $row['image'];
         echo '<div class="small-container"><div class="row"><div class="result"><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h4>" .$row['pname']."</h4>";
			echo"<p>Rs.&nbsp;" .$row['price']."</p>";
	//		echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p></div></div></div>";
			

			
		  }
		  }
}
//home_kitchen.php
function home($con){
if( isset($_GET['search'])){
			 
			$search=$_GET['search'];
		    $sql="select * from kitchen where pname LIKE '%$search%' ORDER BY RAND() LIMIT 12";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($result)){
				 $pid = $row['pid'];
  $pname = $row['pname'];
  $description = $row['description'];
  $price = $row['price'];
 // $size = $row['size'];
  $image = $row['image'];
           echo '<div class="small-container"><div class="row"><div class="result"><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h4>" .$row['pname']."</h4>";
			echo"<p>Rs.&nbsp;" .$row['price']."</p>";
	//		echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p></div></div></div>";

			
		  }
		  }
}
function accessories($con)
{
	if( isset($_GET['search'])){
			 
			$search=$_GET['search'];
		    $sql="select * from accessories where pname LIKE '%$search%' ORDER BY RAND() LIMIT 12";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($result)){
				 $pid = $row['pid'];
  $pname = $row['pname'];
  $description = $row['description'];
  $price = $row['price'];
 // $size = $row['size'];
  $image = $row['image'];
          echo '<div class="small-container"><div class="row"><div class="result"><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h4>" .$row['pname']."</h4>";
			echo"<p>Rs.&nbsp;" .$row['price']."</p>";
	//		echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p></div></div></div>";

			
		  }
		  }
}
//product.php
function product($con){
if( isset($_GET['search'])){
			 
			$search=$_GET['search'];
		    $sql="select * from product where pname LIKE '%$search%' ORDER BY RAND() LIMIT 12";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($result)){
				 $pid = $row['pid'];
  $pname = $row['pname'];
  $description = $row['description'];
  $price = $row['price'];
  $size = $row['size'];
  $image = $row['image'];
          echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h2>" .$row['pname']."</h2>";
			echo"<h><b>" .$row['price']."</b></h><br/>";
			echo"<h><b>" .$row['size']."</b></h>";
			echo "<p>" .$row['description']."</p>";
			

			
		  }
		  }
}
function cart($con){
	
   if(isset($_GET['cart'])){
	   $cart=$_SESSION['cart'];
	   if(isset($_POST['pid'])){
	   $pid=$_POST['pid'];
   $_SESSION['cart'][$pid]['quantity']+=$quantity;
   
   }
   else{
	  $pid=$_GET['pid'];
	   $sql="select pid,pname,price,image from allproducts where pid=$pid";
	   $result=mysqli_query($con,$sql);
	   
	   if($row=mysqli_fetch_assoc($result)){
		   $pid = $row['pid'];
		$pname = $row['pname'];
	   // $description = $row['description'];
		$price = $row['price'];
		$size = $row['size'];
		$image = $row['image'];
		$query="insert into cart(pid,pname,price,image)values('$pid','$pname','$price','$image'";
		$res=mysqli_query($con,$query);
		 echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($row['image']).'"alt="image" width=200px,height=200px /><br/>';
			//echo "<h>" .$row['pid']."</h>";
			echo "<h2>" .$row['pname']."</h2>";
			echo"<h><b>" .$row['price']."</b></h><br/>";
		
	   }
   }
   }
}

 ?>