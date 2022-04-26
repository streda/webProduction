<?php
session_start();
/* if($_SESSION['firstName'] == ""){
  $_SESSION['firstName'] = $_GET['firstName'];
  header('Location: session-1.php');  
exit;
} */
?>

Name:<?php echo $_SESSION['firstName'] ?:"" ?> <br>

<a href="php-sessions-1.php">Session-1 Page</a> <br>
<a href="php-cgiform.php">Form Page</a> <br>


<form action="php-destroy-session.php">
  <button>Destroy Session</button>
</form>