<?php
 session_start();
 unset($_SESSION["adminid"]);
 unset($_SESSION["email"]);
 session_destroy();
 echo "<script>
 alert('You are successfully logout as admin')
 window.location='login.php';
 </script>";


?>