<?php
// Dit is het startpunt van je applicatie.
require "database.php";

//de sql query
$sql = "SELECT COUNT(titel) as aantal_recepten FROM  Caribische_Recepten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$aantal = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>header</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>Caribische Recepten</h1>
            <p> <?php echo $aantal['aantal_recepten'] ?> </p>
        </div>
    </header>
</body>

</html>