<?php
// Dit is het startpunt van je applicatie.
require "database.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>index</title>
</head>

<body>
	<?php include 'header.php' ?>
	<?php include "nav.php" ?>
	<main>
		<div class="content">
			<h1>Welkom bij de Caribische Recepten</h1>
			<p>De Caribische keuken is een smaakvolle mix van invloeden uit Afrika, Europa, India en de inheemse keukens van de regio. De gerechten zijn kleurrijk, kruidig en vol van smaak, met ingrediënten zoals verse vis, tropisch fruit, bonen en rijst. Van Jamaicaanse jerk chicken tot Trinidadiaanse roti en Cubaanse ropa vieja, de Caribische keuken heeft een scala aan heerlijke recepten die een feest voor de smaakpapillen zijn.</p>
		</div>
		<div class="achtergrond">
			<img src="images/viscurry.jpg" alt="">
		</div>
	</main>
	<?php include 'footer.php' ?>
</body>

</html>