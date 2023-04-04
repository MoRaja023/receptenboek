<?php
// Dit is het startpunt van je applicatie.
require "database.php";?>

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
		<div class="achtergrond"><h1>Welkom</h1><img src="images/viscurry.jpg" alt=""></div>
		
	</main>
	<?php include 'footer.php' ?>
</body>

</html>