<?php
// Dit is het startpunt van je applicatie.
require "database.php";

//de sql query

$id = $_GET['id'];

$sql = "SELECT * FROM Caribische_Recepten WHERE recepten_id = $id";

$result  = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);



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
    <?php include 'header.php' ?>
    <?php include "nav.php" ?>

    <main>
        <div class="recipe">
            <div class="titel_plaatje">
                <h2><?php echo $recept['titel'] ?></h2>
                <img src="<?php echo $recept['foto'] ?>">
            </div>
            <div class="flexbox">
                <div class="blok-tekst">
                    <article>
                        <p><?php echo $recept['duur'] ?></p>
                        <p><?php echo $recept['aantal_ingredienten'] ?></p>
                </div>
                <div class="blok-tekst2">
                    <p><?php echo $recept['menugang'] ?></p>
                    <p><?php echo $recept['moeilijkheidsgraad'] ?></p>
                </div>
                <div class="blok-tekst3">
                    <p><?php echo $recept['beschrijving'] ?></p>
                </div>
                </article>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>