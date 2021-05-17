<?php 


session_start();
unset($_SESSION['Admin_LOGIN']);
unset($_SESSION['ADMIN_USERNAME']);
header("location: ../index.php");
die();

?>