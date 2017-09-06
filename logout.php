<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo 'Good bye!';
   header('Refresh: 2; URL = index.php');
?>
