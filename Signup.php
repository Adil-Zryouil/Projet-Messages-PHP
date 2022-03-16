<?php
$host="localhost";
$user="root";
$pass="";
$dbn="projetmessage";
$cnx=mysqli_connect($host,$user,$pass,$dbn);

?>
<!doctype html>
<html>
<head>
<title>Message On ligne</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
  <h1>Message <span style="color:#00FF00;" >Pro</span></h1>
</div>
<div>
<ul>
   <li><a  href="index.php" >Login</a></li>
   <li><a href="Signup.php" id="this" >Sign up</a></li>
   <li><a href="#" >Contact us</a></li>
   <li><a href="#" >About</a></li>
</ul>
</div>

<div style="padding-top:10px;" >
<div id="Login" >
<h2>Sign Up</h2>
<form action="Signup.php" method="get" >
<input type="text" name="username" placeholder="Enter The UserName" ><br>
<input type="email" name="email" placeholder="Enter your Email" ><br>
<input type="password" name="password" placeholder="Enter your Password" ><br>
<input type="password" name="cpassword" placeholder="Confirm your Password" ><br>
<Button type="submit" name="submitlogin">Login</button>
<?php
if(isset($_GET['submitlogin']))
{
	$password=htmlspecialchars(trim(strtolower($_GET["password"])));
	$cpassword=htmlspecialchars(trim(strtolower($_GET["cpassword"])));
	$username=htmlspecialchars(trim(strtolower($_GET['username'])));
	$email=htmlspecialchars(trim(strtolower($_GET['email'])));

	if(!empty($password)&&!empty($cpassword)&&!empty($username)&&!empty($email)){
	    if($password==$cpassword)
	      {
		     $query="INSERT INTO compte (email,username,pass) VALUES ('$email','$username','$password')";
			 mysqli_query($cnx,$query);
			 echo("<script> alert('The sign up is success now you have an account'); </script>");
			
	      }else{
			  echo "<script> alert('The Password and the confirm password are diffrent'); </script>";
		  }
	}else{
		 echo("<script> alert('Enter all the informations'); </script>");
	}
	
}
?>
</form>
</div>
</div>
</body>
</html>