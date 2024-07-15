<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agendaphp";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
  die("Errore nella connessione " . $conn->connect_error);
}
