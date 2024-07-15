<?php include './header.php' ?>

<?php

require_once ('config.php');

if(isset($_GET['id'])){
    $clienteId = $_GET['id'];

}
$sql = "SELECT * FROM clienti WHERE id = ? ";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $clienteId);
$stmt->execute();

$risultato = $stmt->get_result();

if($risultato->num_rows == 1){
    $datiCliente = $risultato->fetch_assoc();

    $id = $datiCliente['id'];
    $nome = $datiCliente['nome'];
    $cognome = $datiCliente['cognome'];
    $email = $datiCliente['email'];
    $telefono = $datiCliente['telefono'];
}


?>

<h1>Agenda</h1>
<h3>Modifica i dati:</h3><br>
<form action="aggiorna.php" method="POST">
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="text" class="form-control" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required value="<?php echo $nome; ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Cognome:</span>
  <input type="text" class="form-control" name="cognome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required value="<?php echo $cognome; ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email:</span>
  <input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required value="<?php echo $email; ?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Telefono:</span>
  <input type="number" class="form-control" name="telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required value="<?php echo $telefono; ?>">
</div>
<button type="submit" class="btn btn-success mx-auto">Aggiorna</button>
</form>
<?php include './footer.php' ?>