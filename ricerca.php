
<?php include './header.php' ?>
<?php
//connessione al database
require_once ('config.php'); 


if (isset($_GET['search'])) {
  $clienteRicercato = $_GET['search'];
  $sql = "SELECT * FROM clienti WHERE cognome LIKE '%$clienteRicercato%'";
} else {
 

  exit;
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h1>Risultati della ricerca per '$clienteRicercato'</h1>";
  echo "<table class='table table-striped'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>Nome</th>";
  echo "<th>Cognome</th>";
  echo "<th>Email</th>";
  echo "<th>Telefono</th>";
  echo "<th></th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["nome"] . "</td>";
    echo "<td>" . $row["cognome"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["telefono"] . "</td>";
    echo "<td>";
    echo "<a href='modifica.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Modifica</a>";
    echo "<a href='elimina.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Elimina</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "<h1>Nessun cliente trovato.</h1>";
}

$conn->close();

?>
<?php include './footer.php' ?>