<?php
session_start();
$email=$_SESSION['$email'];

if(isset($_GET['OK']))
{
$host="localhost";
$user="root";
$pass="";
$dbn="projetmessage";
$cnx=mysqli_connect($host,$user,$pass,$dbn);

$emailTake=$_GET['email'];
$subject=$_GET['subject'];
$message=$_GET['message'];
$query="INSERT INTO contact (emailSendMessage,emailTakeMessage,subject,message) VALUES ('$email','$emailTake','$subject','$message')";
mysqli_query($cnx,$query);
echo "Good";
}
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link rel="stylesheet" href="NewM.css">
</head>
<body>
<header>  <h1 id="messagepro" >Message <span style="color:black;" >Pro</span></h1> </header>
<div>
 <h1 id="contact" >Contact</h1>
 <form action="NewMessage.php" method="get" >
  
	<label>Email : </label><br>
	<input type="email" name="email" placeholder="Enter the email"><br>
	<label>Subject : </label><br>
	<input type="text" name="subject" placeholder="Enter the subject"><br> 
	<label>Message : </label><br>
	<textarea type="text" name="message" rows="7" cols="30" placeholder="Message"  ></textarea><br>
	<button type="submit" name="OK">OK</button><br>
	
	
 </form>
 </div>
</body>
</html>