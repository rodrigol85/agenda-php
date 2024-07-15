<div id="footer">
<footer>
<p>  Copyright &copy </p>
  <div id="footerTime">
 <?php
$dataCorrente = new DateTime();
$oraCorrente = $dataCorrente->format('d-m-yy H:i:s'); 
echo"<h3>" . $oraCorrente . "</h3>";


?> 
  </div>
</footer>
</div>
</div>
<script>
 
  function updateTime() {
    var now = new Date();
    var formattedTime = now.toLocaleDateString() + " " + now.toLocaleTimeString();
    document.getElementById("footerTime").innerHTML = formattedTime;
  }
  
  updateTime();

  setInterval(updateTime, 1000); 
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>