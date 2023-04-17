<?php
require_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap-grid.min.css">
    <title>Registratie</title>
</head>

<body>
    <div>
        <?php
        if (isset($_POST['create'])) {
            $Voornaam = $_POST['Voornaam'];
            $Achternaam = $_POST['Achternaam'];
            $Email = $_POST['Email'];
            $Wachtwoord = $_POST['Wachtwoord'];

            $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES(?,?,?,?)";
            $stminsert = $db->prepare($sql);
            $result = $stminsert->execute([$Voornaam, $Achternaam, $Email, $Wachtwoord]);
            if($result){
                echo 'Successfully saved. ';
            }else{
                echo 'There were errors while saving the data.';
            }
        }

        ?>
    </div>
    <?php include 'header.php' ?>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1>Registratie</h1>
                <p>Vul de forumulier met de correcte gegevens</p>
                <hr class="mb-3">
                <form method="post" action="registreer.php">
                    <label for="Voornaam">Voornaam:</label>
                    <input class="form-control" type="text" name="firstname" id="Voornaam" required>

                    <label for="Achternaam">Achternaam:</label>
                    <input class="form-control" type="text" name="lastname" id="Achternaam" required>

                    <label for="Email">Email adres:</label>
                    <input class="form-control" type="email" name="email" id="Email" required>

                    <label for="Wachtwoord">Wachtwoord:</label>
                    <input class="form-control" type="password" name="password" id="Wachtwoord" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Registreren">
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>