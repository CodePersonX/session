<?php
session_start();
$name=$_POST["userName"];
$pwd=$_POST["userPassword"];
$conn = new mysqli("localhost", "root", "", "bank");
$q="SELECT * from myusers where userName = '$name' and userPassword = '$pwd'"; 
$records=$conn->query($q);
if(mysqli_num_rows($records) > 0){
  $_SESSION["userName"] = $name;
  $_SESSION["userPassword"]=$pwd;
  header("location: home.php");
}
else{
  header("location: index.php");
}
?>