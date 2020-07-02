<?php
session_start();
echo "Welcome " . $_SESSION['user'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
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
      margin: auto;
      text-align: center;
        margin-top: 40px;
    }

   </style>
  </head>
  <body>
     <a style="margin-right: 20px;" href="logout.php">Logout</a>
    <h2>Dashboard</h2>
    <form class="" action="" method="post">
      <div class="formm">
      <label>Upload a answer :</label>
      <button type="button" class="" name="button"><a href="formm.php">Click here to view form</a></button>
      </div>
      <div class="formm">
      <label>Query :</label>
      <button type="button" class="" name="button"><a href="query.php">Click here to query :</a></button>
      </div>
    </form>
  </body>
</html>
