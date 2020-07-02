<?php
session_start();
$con = mysqli_connect('localhost','root','','portal');
if($con){
  echo "connection done";
}else{
    echo "no connection";
}
if(isset($_POST['submit'])){
$num = $_POST['num'];
$ans = $_POST['ans'];


$insert_query = "insert into `form`(number,answer) values ('$num','$ans')";

$res = mysqli_query($con,$insert_query);
if($res){
  $_SESSION['nam'] = $num;
  $_SESSION['an'] = $ans;
 header('location:submit.php');
}else{
  header('location:formm.php');
}
}
?>
