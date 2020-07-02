
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIGNUP</title>
    <style>
    body{
      background-color: #29A4E6;
      background-size: cover;
    }
    h2{
      text-align: center;
      margin: auto;
      margin-top: 40px; }
    .formm{
      text-align: center;
      margin-top: 20px;
    }
</style>
  </head>

  <body>
    <h2>SIGNUP</h2>
     <form action="registration.php" method="post">
       <div class="formm">
         <label>User ID :</label>
         <input type="text" name="idd" value="">
       </div>
      <div class="formm">
        <label>Name :</label>
        <input type="text" name="name">
      </div>
      <div class="formm">
        <label>Email  :</label>
        <input type="email" name="email" value="">
      </div>
      <div class="formm">
        <label>password :</label>
        <input type="password" name="pass">
      </div>
      <div class="formm">
        <label>Number :</label>
        <input type="number" name="num" value="">
      </div>
      <div class="formm">
        <label>Address :</label>
        <input type="text" name="add" value="">
      </div>
      <div class="formm">
      <button type="submit" name="submit">SIGNUP</button>
      </div>
     </form>
  </body>
</html>
