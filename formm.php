<?php
session_start();
echo "Welcome " . $_SESSION['user'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>answer form</title>
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
    .formm{
      margin: auto;
      text-align: center;
        margin-top: 40px;
    }
    .bttn{
      text-align: center;
    }

   </style>
  </head>
  <body>
<a style="margin-right: 20px;" href="logout.php">Logout</a>

  <h1>Upload Answer</h1>
  <form class="" action="form2.php" method="post">

  <div class="formm">
    <label>Number:</label>
    <input type="number" name="num" placeholder="add number here" autocomplete="off">
  </div>
  <div class="formm">
  <label>Answer:</label>
<textarea rows="4" cols="50" name="ans">Add your answer here</textarea>
  </div>
  <div class="bttn">
    <button  type="submit" name="submit">submit</button>
  </div>
  </form>
</body>
</html>
