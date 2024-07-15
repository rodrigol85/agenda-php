<?php

require_once ('config.php');


if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['email']) && isset($_POST['telefono'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];


$sql = "UPDATE clienti SET nome = ?, cognome = ?, email = ?, telefono = ? WHERE id = ?"; 

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssss", $nome, $cognome, $email, $telefono, $id);

if($stmt->execute()){
     echo "Dati aggiornati con successo!";
     header("Location:elenco.php");
 }else{
     echo "Errore creazione database: " . $stmt->error;
 }
 $stmt->close();
}else{
    echo "Errore: dati mancanti nel form";
}
?>