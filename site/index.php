<?php
// Dit is het startpunt van je applicatie.
require "database.php";

//de sql query
$sql = "SELECT * FROM  Caribische_Recepten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

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
	<title>Caribische Recepten</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
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
		<div class="recipe">
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

			<h2>Tonijsteak met ananas salsa</h2>
			<img src="images/Tonijnsteak.jpg" alt="Tonijnsteak">
			<ul>
				<li>2 verse tonijn steaks</li>
				<li>zwarte peper</li>
				<li>zeezout</li>
				<li>250 gram verse ananas</li>
				<li>½ komkommer</li>
				<li>½ rode peper</li>
				<li>sap van ½ limoen</li>
				<li>1 el verse munt (fijnsgesneden)</li>
				<li>150 gram bulghur</li>
				<li>1 rode paprika (in kleine blokjes snijden)</li>
				<li>1 tomaat (fijnsgesneden)</li>
				<li>1 bosui (in dunne ringen)</li>
				<li>1 el koriander (fijnsgesneden)</li>
				<li>2 el olijfolie</li>
			</ul>
			<p>1. Doe de bulghur in de hittebestendige kom en giet er kokend water bij totdat de bulghur net onder water staat. Sluit de kom af met een pannendeksel of een groot bord en zet dit 10 minuten apart. Intussen kun je verdergaan met de rest.</p>
			<p>2. Maak de salsa door de ananas in kleine blokjes te snijden, evenals de komkommer. Doe ze samen in een kom.</p>
			<p>3. Snijd de peper fijn. Verwijder eventueel wat van de zaadjes als je het minder pittig wilt maken. Voeg de peper toe aan de salsa en git er limoensap overheen. Meng de fijngesneden munt er doorheen en schep goed door.</p>
			<p>4. Kruid de tonijnsteak in met peper en zout.</p>
			<p>5. Zet de pan op hoog vuur en laat de pan goed heet worden. Giet olie in de pan en schroei de tonijnsteaks aan beide kanten dicht. Dit is op elke kant circa 2 minuten.</p>
			<p>6. Maak de bulghur met een vork los en meng de paprika, tomaat, bosui, olijfolie en koriander er doorheen.</p>
			<p>7. Serveer de tonijsteak met de ananassalsa en de bulghursalade.</p>

			<h2>Caribische pasteitjes</h2>
			<img src="images/Caribische-Pasteitjes.jpg" alt="Caribische-Pasteitjes">
			<ul>

				<li>10 vellen bladerdeeg</li>
				<li>½ wortel in kleine blokjes</li>
				<li>1 ui in kleine blokjes</li>
				<li>1 zoete aardappel</li>
				<li>200 gram kipgehakt</li>
				<li>1 theelepel kerriepoeder</li>
				<li>snufje zout</li>
				<li>1 ei geklutst</li>
			</ul>
			<p>1. Schil de zoete aardappel en kook zo'n 10 minuten in ruim water. Spoel daarna af met koud water en laat even afkoelen. Verwarm de oven intussen voor op 180 C.</p>
			<p>2. Laat de bladerdeegvellen 10 minuten ontdooien door ze naast elkaar te leggen op je werkblad.</p>
			<p>3. Bak in een koekepan met een klein beetje olijfolie de ui, het gehakt, de kerriepoeder en de wortel. Snijd de zoete aardappel in kleine blokjes doe deze na ongeveer 5 minuten bij het gehaktmengsel in de koekepan totdat het kipgehakt gaar is. Deze is gaar als je geen roze stukken meer ziet. Laat het mengsel zo'n 5 à 10 minuten afkoelen voor je verder gaat.</p>
			<p>4. Leg op elk bladerdeegvelletje ongeveer 1 eetlepel van het mengsel en vouw diagonaal dicht zodat je een driehoekje krijgt. Duw de zijkanten goed aan met een vork.</p>
			<p>5. Bestrijk de pasteitjes met ei en bak ze 20 minuten op 200 graden.</p>

			<h2>Tropische fruitsalade (in een kokosnoot)</h2>
			<img src="images/Tropische-Fruitsalade.jpg" alt="Tropische-Fruitsalade">
			<ul>

				<li>1 Mango</li>
				<li>1 pithaya (drakenvrucht/dragonfruit)</li>
				<li>1 jonge kokosnoot</li>
				<li>1 galia meloen</li>
				<li>1 of 2 kokosnoten (met droge bruine schil)</li>
				<li>optioneel: eetbare bloemen</li>
				<li>snufje zout</li>
				<li>1 ei geklutst</li>
			</ul>
			<p>1. Hak de volwassen (bruine) kokosnoten doormidden. Pas op voor het vocht dat eruit komt. Spoel ze voorzichtig schoon zodat ze van binnen geen stukjes schaal meer bevatten.</p>
			<p>2. Snijd de meloen doormidden en maak met de meloenlepel mooie bolletjes.</p>
			<p>3. Schil de mango en steek met behulp van de meloenlepel bolletjes uit.</p>
			<p>4. Snijd nu een stukje van de jonge kokosnoot af. Steek er een rietje in en drink het kokoswater op :-). Dit is behalve lekker ook nog eens erg voedzaam :-). Snijd vervolgens ook de jonge kokosnoot doormidden en schep er met de meloenlepel bolletjes of reepjes van. De structuur is waarschijnlijk te zacht om er mooie bolletjes van te kunnen scheppen, dus ik maakte er een soort reepjes van.</p>
			<p>5. Leg de fruitsoorten in de halve kokosnoten. Leg de jonge kokosreepjes ertussen en maak af met de eetbare bloemen (als je die gebruikt).</p>
		
			<h2>Chow mein met kip</h2>
			<img src="images/ChowMein.jpg" alt="Chow-Mein">
			<ul>
				
				<li>225 eiermie</li>
				<li>250 gram kipfilet</li>
				<li>1 rode puntpaprika</li>
				<li>2 bosuien</li>
				<li>250 wortels</li>
				<li>scheutje olie (bijvoorbeeld arachideolie of kokosolie)</li>
				<li>3 el sojasaus</li>
				<li>1 el sesamolie</li>
				<li>2 teentjes knoflook</li>
				<li>1 cm verse gember</li>
				<li>1 rode peper</li>
				<li>¼ theelepel korianderzaad</li>
				<li>¼ theelepel komijnzaad</li>
			</ul>
			<p>1. Pureer alle ingrediënten voor de kruidenpasta met een blender, staafmixer of hakmolen tot een gladde saus.</p>
			<p>2. Snijd de kipfilet in dunne, kleine sliertjes en leg ze in een afsluitbare bak. Giet de saus er overheen en laat minstens een kwartier marineren.</p>
			<p>3. Snijd de bosui in dunne ringen, de wortels in flinterdunne plakjes en de paprika in hele dunne reepjes.</p>
			<p>4. Kook intussen de noodles volgens de instructies op de verpakking.</p>
			<p>5. Zet de wok of koekenpan op hoog vuur, laat deze heet worden en giet er olie in.</p>
			<p>6. Bak de kip inclusief de saus en voeg na enkele minuten, als de kip gaar is, de groenten toe. Bak de groenten enkele minuten mee.</p>
			<p>7. Giet de noodles af en voeg de noodles toe aan de groenten en kip. Schep enkele minuten om en serveer direct.</p>
		</div>
	</main>

	<footer>
		<p>&copy; 2023 Mohamed - 155784</p>
	</footer>
</body>

</html>