<?php
Include"connect.php";
if(isset($_POST["Login"])){
$email=$_POST["email"];
$password=$_POST["password"];
$password=md5($password);
$rs=mysqli_query($conn,"select * from register where email='$email' AND password='$password'")or die("Error: " . mysqli_error($conn));
$rows = mysqli_fetch_array($rs);

if(is_array($rows))
{session_start();
	
setcookie ("fname",$rows["fname"],time()+5500);
$_session["fname"]=$rows["fname"];

header("location:index1.php");}


Else{
Echo'<script>alert("Incorrect email OR password")</script>';
}
}

?>