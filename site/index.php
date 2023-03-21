<?php
// Dit is het startpunt van je applicatie.
echo 'Welkom bij het receptenboek';
require "database.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Caribische Recepten</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Caribische Recepten</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Recepten</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
	
	<main>
		<section class="recipe">
			<h2>Caribbean Jerk Chicken met Ananas Salsa</h2>
			<img src="images/chicken_jerk.jpg" alt="Chicken Jerk">
			<ul>
				<li>⅓ kopje olijfolie</li>
				<li>sap van 2 limoenen - 2-3 eetlepels</li>
				<li>2 theelepels gehakte knoflook</li>
				<li>2 eetlepels sojasaus</li>
				<li>1 theelepel uienpoeder</li>
				<li>½ theelepel nootmuskaat</li>
				<li>3 theelepels piment</li>
				<li>½ theelepel gemalen rode pepervlokken</li>
				<li>1 eetlepel honing</li>
			</ul>
			<p>1. Roer in een middelgrote kom alle marinade-ingrediënten door elkaar. Voeg de kip toe, gooi om te coaten. Dek af en laat 30 minuten afkoelen.</p>
			<p>2. Terwijl de kip aan het marineren is, combineer je alle salsa-ingrediënten in een kom en meng om te combineren. Optioneel: combineer in een blender of keukenmachine en geef het een paar pulsen. Koel tot klaar voor gebruik.</p>
			<p>3. Gebruik een tang om de kip over te brengen naar een voorverwarmde grill of koekenpan op middelhoog vuur (gooi de marinade weg) en bak 6-8 minuten aan elke kant tot ze gaar zijn.</p>
			<p>4. Serveer de kip met ananassalsa</p>
		</section>
	</main>
	
	<footer>
		<p>&copy; 2023 Delicious Recipes</p>
	</footer>
</body>
</html>