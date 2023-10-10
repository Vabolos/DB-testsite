<?php
// Connect to the database
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

$naam = $_POST["naam"];
$land = $_POST["land"];
$stad = $_POST["stad"];
$omschrijving = $_POST["omschrijving"];

if (!empty($naam)) {
    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO wonderen (naam, land, stad, omschrijving) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $naam, $land, $stad, $omschrijving);
  
    $stmt->execute();
  
    // Close the prepared statement
    $stmt->close();
} else {
    echo "Error: Field 'naam' cannot be empty.";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Toegevoegd!</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>

<div class="added">
    <h1>Nieuw wonder toegevoegd</h1>
    <a href="Overzicht.php">
        <button class="but6">Terug</button>
    </a>
</div>
</div>
</body>
</html>