<?php
   include('key_login.php');
   session_start();

   $user_check = $_SESSION['username'];

   if(!isset($_SESSION['username'])){
      header("location:key_login.php");
   }
?>
