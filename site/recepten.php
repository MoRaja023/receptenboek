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
$receptenboek = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Recepten</title>
</head>

<body>
	<?php include 'header.php' ?>
	<?php include "nav.php" ?>
	<main>
		<div class="container">
			<div class="recept">
				<?php foreach ($recepetenboek as $recept) : ?>
					<a href="recept.php">
						<div class="recept-image">
							<img id="receptimg" src="<?php echo $recept['foto'] ?>" alt="">
						</div>
						<div class="receptnaam">
							<h2><?php echo $recept["titel"] ?></h2>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</main>
	<?php include 'footer.php' ?>
</body>

</html>