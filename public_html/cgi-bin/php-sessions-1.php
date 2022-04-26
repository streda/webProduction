<?php
session_start();
if($_GET['firstName'] != ""){
  if($_SESSION['firstName'] == ""){
    $_SESSION['firstName'] = $_GET['firstName'];
    header('Location: session-1.php');  
  exit;
  }
}
?>

Name:<?php echo $_SESSION['firstName'] ?:"" ?> <br>

<a href="php-sessions-2.php">Session-2 Page</a> <br>
<a href="php-cgiform.php">Form Page</a> <br>

<form action="php-destroy-session.php">
  <button>Destroy Session</button>
</form>