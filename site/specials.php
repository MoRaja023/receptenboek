<?php
require "database.php";

//de sql query 1
$sql = "SELECT *, MAX(duur) as duur FROM  Caribische_Recepten";

$result = mysqli_query($conn, $sql);

$tijdsduur = mysqli_fetch_all($result, MYSQLI_ASSOC);

//de sql query 2
$sql = "SELECT * FROM  Caribische_Recepten WHERE Moeilijkheidsgraad = 'Makkelijk'";

$result = mysqli_query($conn, $sql);

$makkelijkst = mysqli_fetch_all($result, MYSQLI_ASSOC);

//de sql query 3
$sql = "SELECT *, MAX(LENGTH(aantal_ingredienten)) FROM  Caribische_Recepten";

$result = mysqli_query($conn, $sql);

$ingredienten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>specials</title>
</head>

<body>
  <?php include 'header.php' ?>
  <?php include "nav.php" ?>
  <main>
    <div class="container">
      <?php foreach ($tijdsduur as $duur) : ?>
        <a href="recept.php?id=<?php echo $duur['recepten_id'] ?>">
          <div class="recept-image">
            <img id="receptimg" src="<?php echo $duur['foto'] ?>" alt="">
          </div>
          <div class="receptnaam">
            <h2><?php echo $duur["titel"] ?></h2>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <?php foreach ($makkelijkst as $makkelijker) : ?>
      <a href="recept.php?id=<?php echo $makkelijker['recepten_id'] ?>">
        <div class="recept-image">
          <img id="receptimg" src="<?php echo $makkelijker['foto'] ?>" alt="">
        </div>
        <div class="receptnaam">
          <h2><?php echo $makkelijker["titel"] ?></h2>
        </div>
      </a>
    <?php endforeach; ?>
    </div>
    <?php foreach ($ingredienten as $aantalingredienten) : ?>
      <a href="recept.php?id=<?php echo $aantalingredienten['recepten_id'] ?>">
        <div class="recept-image">
          <img id="receptimg" src="<?php echo $aantalingredienten['foto'] ?>" alt="">
        </div>
        <div class="receptnaam">
          <h2><?php echo $aantalingredienten["titel"] ?></h2>
        </div>
      </a>
    <?php endforeach; ?>
    </div>
    </div>
  </main>
  <?php include 'footer.php' ?>
</body>

</html>