<?php include './header.php' ?>

  <div class="container">
    <h1>Lista Clienti</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Email</th>
          <th>Telefono</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php

        require_once('config.php');

        $sql = "SELECT * FROM clienti";

        if ($result = $conn->query($sql)) {
          if ($result->num_rows > 0) {

            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
              echo "<tr>";
              echo "<td>" . $row['nome'] . "</td>";
              echo "<td>" . $row['cognome'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['telefono'] . "</td>";
              echo "<td><a href='modifica.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Modifica</a></td>";
              echo "<td><button type='button' class='btn btn-danger' data-id='" . $row['id'] . "' onclick='check_del(event)'>Cancella</button></td>";
              echo "</tr>";
            }
          } else {
            echo "Nono ci sono righe disponibile";
          }
        } else {
          echo "Errore nell'esecuzione del comando";
        }

        ?>

      </tbody>
    </table>

  </div>

</body>

<script>
  function check_del(event) {

    var id = event.target.dataset.id;

    if (confirm("¿Sei sicuro di voler eliminare?")) {

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "elimina.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      location.reload();

      xhr.send("id=" + id);
    }
  }
</script>

</html>

<?php include './footer.php' ?>