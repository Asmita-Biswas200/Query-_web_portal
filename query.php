<?php
session_start();
echo "Welcome " . $_SESSION['user'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Query</title>
    <style>
    body{
      background-color: #29A4E6;
      background-size: cover;
    }
    .formm{
      text-align: center;
      margin: auto;
    }
    .clr{
      text-align: center;
      color: #0DBF49;
      margin-top: 10px;
    }
    </style>

  </head>
  <body>
    <h1 align="center">Query Detalis</h1>
    <a style="margin:auto;" href="logout.php">Logout</a>

    <div class="formm">
      <form action="" method="post">
        <label>Enter the Number/Question:</label>
        <input type="number" name="namber" value="">
        </div>
        <div class="clr">
         <input type="submit" name="search" value="Seach By USERID">
        </div>
        <div class="clr">
        <button type="button" name="button"><a href="dash.php">Back To Dahboard</a></button>
        </div>
      </form>


    <table>
      <tr>
        <th>Answer</th>
      </tr>
      <?php
      //session_start();
      $con = mysqli_connect('localhost','root','');
      $db = mysqli_select_db($con,'portal');

       if(isset($_POST['search']))
       {
          $id = $_POST['namber'];
          $query ="select number,answer from `form` where number='$id'";
          $run = mysqli_query($con,$query);

          while($row = mysqli_fetch_array($run))
          {
            ?>
            <tr>
              <td>  <?php echo $row['answer']; ?></td>
            </tr>
            <?php
          }
       }
       ?>
    </table>

  </body>
</html>
