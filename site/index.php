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
			<h2>Chicken Alfredo</h2>
			<img src="chicken-alfredo.jpg" alt="Chicken Alfredo">
			<ul>
				<li>1 pound fettuccine</li>
				<li>1/2 cup unsalted butter</li>
				<li>1 pint heavy cream</li>
				<li>1 teaspoon garlic powder</li>
				<li>1/2 teaspoon salt</li>
				<li>1/4 teaspoon black pepper</li>
				<li>1 cup grated Parmesan cheese</li>
				<li>2 cups cooked chicken breast, cubed</li>
			</ul>
			<p>1. Cook fettuccine according to package instructions.</p>
			<p>2. In a saucepan, melt butter over medium heat. Add heavy cream, garlic powder, salt, and pepper. Bring to a simmer and cook for 5 minutes, stirring constantly.</p>
			<p>3. Remove from heat and stir in Parmesan cheese until melted and smooth.</p>
			<p>4. Add cooked chicken to sauce and stir to combine.</p>
			<p>5. Serve Alfredo sauce over cooked fettuccine.</p>
		</section>
	</main>
	
	<footer>
		<p>&copy; 2023 Delicious Recipes</p>
	</footer>
</body>
</html>