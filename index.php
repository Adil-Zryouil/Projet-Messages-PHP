<?php
$host="localhost";
$user="root";
$pass="";
$dbn="projetmessage";
$cnx=mysqli_connect($host,$user,$pass,$dbn);
if(isset($_GET['submitlogin']))
{
	session_start();
	

	$email=htmlspecialchars(trim(strtolower($_GET['email'])));
	$pass=htmlspecialchars(trim(strtolower($_GET['password'])));
	$query="select * from compte where email='$email' && password='$pass'";
	if(mysqli_num_rows(mysqli_query($cnx,$query))>0)
	{
		$_SESSION['$email']=$email;
		header('location:Connect.php');//bhal response.redirect();
	}else{
		echo "<script> alert('email ou password incorrect'); </script>";
	}

}
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
   <li><a id="this" href="index.php" >Login</a></li>
   <li><a href="Signup.php" >Sign up</a></li>
   <li><a href="#" >Contact us</a></li>
   <li><a href="#" >About</a></li>
</ul>
</div>

<div style="padding-top:50px;" >
<div id="Login" >
<h2>Login</h2>
<form action="index.php" method="get" >
<input type="email" name="email" placeholder="Enter your Email" ><br>
<input type="password" name="password" placeholder="Enter your Password" ><br>
<Button type="submit" name="submitlogin">Login</button>
</form>
</div>
</div>
</body>
</html>