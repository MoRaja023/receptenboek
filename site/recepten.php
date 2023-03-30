<?php


// Dit is het startpunt van je applicatie.
require "database.php";

//de sql query
$sql = " SELECT * FROM  Caribische_Recepten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$recepetenboek = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Recepten</title>
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

		<?php foreach ($recepetenboek as $recept) : ?>
			<a href="#">
				<div class="recept-image">
					<img id="images/" src="<?php echo $recept['foto'] ?>" alt="">
				</div>
				<div class="recept-naam">
					<?php echo $recept["titel"]?>
				</div>
				<div class="caption">
					<i class="fa-refular fa-clock"></i>
				</div>
				<button>Ga verder</button>
			</a>
		<?php endforeach; ?>

	</main>

</body>

</html>