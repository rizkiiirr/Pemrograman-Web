<!DOCTYPE html>
<html>
  <head>
    <title>Cetak Output</title>
  </head>
  
  <?php
  $angka = "";
  if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
  }
  ?>
  
  <body>
    <form method = "post" action = "">
      <label for = "jumlahPeserta">Jumlah Peserta : </label>
      <input type = "number" name = "angka" value = "<?php echo $angka; ?>"><br> 
      <input type = "submit" name = "cetak" value = "Cetak"><br><br>
    </form>

    <?php
    if (isset($_POST['angka'])) {
      $angka = $_POST['angka'];
      $i = 1;
      
      while ($i <= $angka) {
        if ($i % 2 == 1) {
          echo "<h2 style='color: red;'>Peserta ke-$i</h2>"; 
          } else {
            echo "<h2 style='color: green;'>Peserta ke-$i</h2>"; 
            }
            $i++;
          }
        }
        ?>
  </body>
</html>