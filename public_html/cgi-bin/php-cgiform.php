<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGI Form</title>
</head>

<body>
<h1 align="center">Session Test</h1> <hr>
  <form action="php-sessions-1.php" method="get">
    <h3>CGI using PHP (Cookie)</h3>

    <label>
      What is your name?
      <input type="text" name="firstName">
    </label> <br>
    <button>Test Sessioning</button>
  </form>
 <br>
  <a href="/">Home</a>
</body>

</html>


<!-- 
<!doctype html>
<html>

<head>
  <title>CGI Form</title>
</head>

<body>
  <h1 align="center">Session Test</h1>
  <hr>
  <label for="cgi-lang">CGI using Php</label>
  <form action="php-sessions-1.php" method="Post" id="form">
    <label>What is your name? <input type="text" name="username" autocomplete="off"></label>
    <br>
    <input type="submit" value="Test Sessioning">
  </form>
  
  <a href="/" style="display:inline-block;margin-top:20px;">Home</a> 

</body>

</html> -->
