<?php
// Database configuratie
$host  = "mariadb";
$dbuser = "user";
$dbpass = "password";
$dbname = "receptenboek";

$db = new PDO('mysql:host=localhost;dbname=',  $db_name, ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
?>