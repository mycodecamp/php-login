
<?php 

error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
 <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="outerbox">

    <div id="loginbox">

      <h2><span class="fontawesome-lock"></span>Login</h2>

      <form action="login.php" method="POST">
        <?php
            if($_GET['err']==1){
        ?>
          <div class="warning">
            <span class="fontawesome-warning-sign"></span> Invalid username/ password!!
          </div>
        <?php

            }
         ?>
        <div class="formbox">


          <p><label for="user">Username</label></p>
          <p><input type="text" id="username" placeholder="username" name="username"></p>

          <p><label for="password">Password</label></p>
          <p><input type="password" id="password" placeholder="password" name="password"></p>

          <p><input type="submit" id="submit" value="Login"></p>
        </div>
       

      </form>

    </div> 

  </div>

</body> 

</html>