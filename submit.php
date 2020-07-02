<?php
session_start();
echo "Welcome " . $_SESSION['user'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>submit</title>
    <style>
    body{
      background-color: #29A4E6;
      background-size: cover;
    }
    h1{
      text-align: center;
      margin: auto;
      margin-top: 40px;
    }
    a{
      margin: auto;
      text-align: center;
        margin-top: 40px;
    }
    .clr{
    margin: auto;
  text-align: center;
    }
    </style>
  </head>
  <body>

    <a style="margin-right: 20px;" href="logout.php">Logout</a>
    <h1>Thanks	you	 for submitting	 your	answer</h1>
    <h3 align="center">Details</h3>
    <div class="clr">
     <label>Question:
       <?php 
       echo $_SESSION['nam'] ?>
     </label>
     </div>
      <br>
      <div class="clr">
     <label>Answer</label>
     <?php
     echo $_SESSION['an'] ?>
   </label>
   </div>
   <div class="clr">
   <button  type="button" name="button"><a href="dash.php">Back To Dahboard</a></button>
   </div>
  </body>
</html>
