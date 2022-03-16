
 <!doctype html>
<html>
<head>
<title>Message On ligne</title>
<meta charset="utf-8">
<link rel="stylesheet" href="connectstyle.css">
</head>
<body>
<header>  <h1>Message <span style="color:#00FF00;" >Pro</span></h1>
  <ul>
     <li><a>Messages</a></li>
     <li><a>Friends</a></li>
     <li><a>Profile</a></li>
  </ul>
  <form>
  <button type="submit" name="logout" >Log Out</button>
  </form>
 </header>
<div id="Container">
<a id="linkMessage" href="NewMessage.php"><img src="Images/message.jpg" width="60" height="60" >Nouveau Message</a>
<aside>
  
</aside>
<div id="Messages" >
 <h2>Messages :</h2>
 <?php
 session_start();
$host="localhost";
$user="root";
$pass="";
$dbn="projetmessage";
$cnx=mysqli_connect($host,$user,$pass,$dbn);
$email=$_SESSION['$email'];
$query="select * from contact where emailTakeMessage='$email'"; 
$result=mysqli_query($cnx,$query);
while($row=mysqli_fetch_array($result))
{
	echo '<label><span style="color:#00FF00;" >Email :</span> '."$row[emailSendMessage]".'</label>
	  <br><label><span style="color:#00FF00;">Subject :</span> '."$row[subject]".'</label><br>
	   <label><span style="color:#00FF00;">Message :</span> '."$row[message]".'</label><hr>
	';
}
 ?>
</div>
</div>
</body>
</html>