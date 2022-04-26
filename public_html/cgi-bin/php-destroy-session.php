<?php
session_start();
session_destroy();

if($_SESSION['firstName'] == ""){
 echo "<h1>Session Destroyed</h1>";
 echo '<a href="form.php">Form Page</a> <br>';
 echo '<a href="session-1.php">Session-1 Page</a> <br>';
 echo '<a href="session-2.php">Sesssion-2 Page</a> <br>';
} 
else {
  header('Location: destroy.php');  
exit;
}


?>

