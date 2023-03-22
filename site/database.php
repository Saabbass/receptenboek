<?php

// Database configuratie
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "receptenboek";

// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// Controleer de verbinding
// if(mysqli_connect_error())
// {
//  echo "Connection establishing failed!";
// }
// else
// {
//  echo "Connection established successfully.";
// }

?>