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
            <h2><?php echo $recept['titel'] ?></h2>
            <img src="<?php echo $recept['foto'] ?>">
            <article>
                <p><?php echo $recept['duur'] ?></p>

                <ul>
                    <li><?php echo $recept['aantal ingredienten'] ?></li>
                </ul>
                <p>
                    <?php echo $recept['menugang'] ?>
                    <?php echo $recept['moeilijkheidsgraad'] ?></p>

                <p><?php echo $recept['beschrijving'] ?></p>
            </article>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>