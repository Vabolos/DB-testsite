<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$echo = "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonderen</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>

<div class="wonder">
    <h1>Wereldwonderen</h1>
    <p class="toview">Naar het overzicht</p>
    <a href="Overzicht.php">
      <button class="but1">Click me!</button>
    </a>
</div>

<div class="php">
<?php
    echo $echo;
?>
</div>
</body>
</html>