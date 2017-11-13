<?php
session_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['loginuser']))

{

  print "<script>window.location='index.php';</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="wrapperbox">
    <h2><span class="fontawesome-home"></span>Home</h2>
    <div class="homediv">
      <h3>Welcome home</h3>

      
    </div> 


    <div class="logout"><a  href="logout.php"><span class="fontawesome-unlock"></span>Logout</a></div>

  </div>

</body> 

</html>