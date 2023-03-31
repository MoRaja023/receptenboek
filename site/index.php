<?php
// Dit is het startpunt van je applicatie.
require "database.php";

//de sql query
$sql = "SELECT * FROM  Caribische_Recepten";

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
	<?php include 'footer.php' ?>
</body>

</html>