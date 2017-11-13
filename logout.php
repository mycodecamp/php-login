<?php
session_start();

unset($_SESSION['login']);		
unset($_SESSION['loginuser']);
		
print "<script>window.location='index.php'</script>";
?>