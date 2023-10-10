<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = new mysqli($servername, $username, $password, $dbname);

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'DESC';
$newSort = $sort == 'ASC' ? 'DESC' : 'ASC';
$sql = "SELECT * FROM wonderen ORDER BY naam $sort";

// Retrieve data from the database
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonderen</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<div class="overzicht">
<form action="Overzicht.php" method="GET" id="sortForm">
            <input type="hidden" name="sort" value="<?php echo $newSort; ?>">
            <i class="fa-solid fa-arrow-down-a-z sortIcon" onclick="submitForm()"></i>
        </form>
    <h1>Overzicht</h1>
    <a href="Main.php">
        <button class="but2">Terug</button>
    </a>
    
    <input class="searchbox" type="text" id="search" onkeyup="searchTable()" placeholder="Zoeken naar wonder...">
    <?php
    echo "<table class='table' id='myTable'>";
    echo "<tr><th>Naam</th><th>Land</th><th>Stad</th><th>Omschrijving</th></tr>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr class='rows'><td>" . $row["naam"]. "</td><td>" . $row["land"] . "</td><td>" . $row["stad"] . "</td><td>" . $row["omschrijving"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No results found</td></tr>";
    }
    echo "</table>";
    ?>
    <a href="Addnew.php">
        <button class="but3">+ Nieuwe toevoegen</button>
    </a>
</div>

<script src="script.js"></script>

</body>
</html>
