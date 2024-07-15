<?php include './header.php' ?>

<h1>Agenda</h1>
<h3>Inserisca i dati richiesti:</h3><br>
<form action="insert.php" method="POST">
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
  <input type="text" class="form-control" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Cognome:</span>
  <input type="text" class="form-control" name="cognome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email:</span>
  <input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Telefono:</span>
  <input type="number" class="form-control" name="telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>
<button type="submit" class="btn btn-success mx-auto">Aggiungi</button>
</form>
<?php include './footer.php' ?>