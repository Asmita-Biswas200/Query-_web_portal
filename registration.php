<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'portal');

$name = $_POST['name'];
$userid = $_POST['idd'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$add = $_POST['add'];
$num = $_POST['num'];

$s ="select * from `users` where userid= '$userid'";
$res = mysqli_query($con,$s);

$numm = mysqli_num_rows($res);

if($numm == 1){
  ?>
  <script>
   alert("Userid already taken");
   </script>
   <?php
}else{
  $reg ="insert into `users`(userid,username,email,password,num,address) values ('$userid','$name','$email','$pass','$num','$add')";
mysqli_query($con,$reg);
$_SESSION['user'] = $name;
?>
<script>
  alert("successfully registered");
</script>
<?php
}
?>
