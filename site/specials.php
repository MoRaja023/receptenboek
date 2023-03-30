<?php
// Verbinding maken met de database
$conn = mysqli_connect('mariadb', 'user', 'password', 'receptenboek');

// Query om alle recepten op te halen
$query = "SELECT Caribische_Recepten, FROM foto";

// Resultaat van de query ophalen
$result = mysqli_query($conn, $query);

// Controleren of er resultaten zijn
if(mysqli_num_rows($result) > 0) {
  // Loop door alle resultaten heen en toon de gegevens
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo "<h2>" . $row['titel'] . "</h2>";
    echo "<img src='" . $row['afbeelding'] . "' alt='" . $row['titel'] . "' />";
    echo "</div>";
  }
} else {
  // Geen resultaten gevonden
  echo "Geen recepten gevonden.";
}

// Databaseverbinding sluiten
mysqli_close($conn);
?>
