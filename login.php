<?php
session_start();
if(isset($_SESSION['uid']))
{
  header('location:dash.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
    body{
      background-color: #29A4E6;
      background-size: cover;
    }
    h2{
      text-align: center;
      margin: auto;
      margin-top: 40px;
    }
    .formm{
      text-align: center;
      margin-top: 20px;
    }

    </style>
  </head>
  <body>
    <h2>LOGIN</h2>
    <form class="" action="validation.php" method="post">
    <div class="formm">
      <label>ID:</label>
      <input type="text" name="idd" value="">
    </div>
    <div class="formm">
      <label>PASSWORD:</label>
      <input type="password" name="pass" value="">
    </div>
    <div class="formm">
    <button type="submit" name="submit">Login</button>
    </div>
    </form>
  </body>
</html>
<?php
