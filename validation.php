<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'portal');


$userid = $_POST['idd'];
$pass = $_POST['pass'];

$s ="select * from `users` where userid= '$userid' && password='$pass'";
$res = mysqli_query($con,$s);

$numm = mysqli_num_rows($res);

if($numm == 1){
  header('location:dash.php');
}else{
  header('location:login.php');
}
?>
