<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
<h1 align=center> Environment Variables</h1>
<hr/>
  <h2>Environment Variables:</h2>
  <ul>

    <?php

    foreach (getenv() as $key => $value) {
      echo " <li>
      <strong>$key</strong> : $value
    </li>";
    } ?>
  </ul>

  <h2>Server Variables:</h2>
  <ul>

    <?php
    foreach ($_SERVER as $key => $value) {
      echo "<li>
    <strong>$key</strong> : $value
  </li>";;
    } ?>
  </ul>
</body>

</html>