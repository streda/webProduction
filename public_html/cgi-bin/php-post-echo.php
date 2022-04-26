<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h2>POST Request Echo</h2>
  <hr>
  <strong>Message Body:</strong>
  <ul>

    <?php
    //$_POST = ['name' => 'FullName'];
    foreach ($_POST as $key => $value) {
      echo " <li>
      <strong>$key</strong> = $value
    </li>";
    } ?>
  </ul>
  <form method="post">
    <label>
      firstanme
      <input type="text" name="firstName">
    </label>
    <label>
      age
      <input type="number" name="age">
    </label>
    <button>
      send
    </button>
  </form>
</body>

</html>