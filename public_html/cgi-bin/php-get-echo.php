<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h1>GET Request Echo</h1> <hr>
  <strong>Query String:</strong>
  <ul>

    <?php
    // $_GET = ['name' => 'FullName'];
    foreach ($_GET as $key => $value) {
      echo " <li>
      <strong>$key</strong> = $value
    </li>";
    } ?>
  </ul>
  
</body>

</html>