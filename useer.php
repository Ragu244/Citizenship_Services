<?php
$con=new mysqli("localhost","root","","citizen");
$Name = $_POST['uname'];
$Aadhar = $_POST['ano'];
$Email = $_POST['mail'];
$Password = $_POST['pwd'];
$sql = "INSERT INTO usersignup(username,aadhar,email,password) VALUES('$Name',$Aadhar,'$Email','$Password');";
$con->query($sql);
header("refresh:3;url=login.html");
?>