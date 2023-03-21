<?php
// Database configuratie
$host  = "localhost";
$dbuser = "mariadb";
$dbpass = "password";
$dbname = "receptenboek";

// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
?>