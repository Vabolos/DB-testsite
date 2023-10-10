<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw Item</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>

<div class="info">
    <h1>Info</h1>
    <a href="Overzicht.php">
        <button class="but4">Terug</button>
    </a>
    <form method="POST" action="Added.php">
		<div class="form-group">
			<label>Naam:</label>
			<input type="text" id="Naam" name="naam" placeholder="Naam van wonder" required>
		</div>
		<div class="form-group">
			<label>Land:</label>
			<input type="text" id="Land" name="land" placeholder="In welk land is het te vinden" required>
		</div>
		<div class="form-group">
			<label>Stad:</label>
			<input type="text" id="Stad" name="stad" placeholder="In welke stad/plaats ligt het" required>
		</div>
		<div class="form-group">
			<label>Omschrijving:</label>
			<textarea id="Omschrijving" name="omschrijving" placeholder="Omschrijf het wereld wonder" required></textarea>
		</div>
		<button class="but5">Toevoegen</button>
	</form>
</div>
</div>
</body>
</html>