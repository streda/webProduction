<?php
header('Cache-Control: no-cache\n');
?>

<html>
<head>
<title>Hello, PHP!</title>
</head>
<body>
<h1> Hello, PHP!</h1>
<hr/>
<p> <?php echo "Hello World"; ?></p>
<p> <?php echo "This page was generated with the PHP programming langauge"; ?> </p>

<?php 
echo "<p>This program was run at: " . date('Y-m-s') . "</p>";
echo "Your IP Address is " . $_SERVER['REMOTE_ADDR'];
?>

</body>
</html>
