<?php 
   if(isset($_SESSION['ADMIN_LOGIN'])){
      header('location: category.php');
      exit();
   }
   else{
      header('location: login.php');
      exit();
   }
?>