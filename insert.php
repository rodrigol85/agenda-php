<?php

require_once ('config.php');



$nome = $conn->real_escape_string($_POST['nome']);
$cognome = $conn->real_escape_string($_POST['cognome']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);


$sql = "INSERT INTO clienti (nome, cognome, email, telefono) values
        ('$nome', '$cognome', '$email', '$telefono')       
";


if($conn->query($sql) == true){
     echo "Caricamento di dati avvenuta con successo";
     header("Location:elenco.php");
 }else{
     echo "Errore creazione database: " . $conn->error;
 }
?>