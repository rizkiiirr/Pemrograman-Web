<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Matriks</title>
    
    <style>
    table {
      border-collapse: collapse;
    }
    
    td {
      border: 1px solid black;
      padding: 5px;
      text-align: center;
      width: 20px;
      height: 20px;
    }
    </style>
  </head>
  <?php
  $panjang = $lebar = $nilai = "";
  
  if (isset($_POST['cetak'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = $_POST['nilai'];
  }
  ?>
  </head>

  <body>
    <form method = "POST" action = "">
      <label for = "panjang">Panjang : </label>
      <input type = "number" name = "panjang" value = "<?php echo $panjang; ?>"><br>
      <label for = "lebar">Lebar : </label>
      <input type = "number" name = "lebar" value = "<?php echo $lebar; ?>"><br>
      <label for = "nilai">Nilai : </label>
      <input type = "text" name = "nilai" value = "<?php echo $nilai; ?>"><br>
      <input type = "submit" name = "cetak" value = "Cetak"><br><br>
    </form>
    
    <?php
    if (isset($_POST['cetak'])) {
      $nilaiMatriks = explode(' ', string: $_POST['nilai']);
      $indeks = 0;
      
      echo "<table>";
      if (count($nilaiMatriks) > $panjang * $lebar or count($nilaiMatriks) < $panjang * $lebar) {
        echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
      } 
      else {
        for ($i = 0; $i < $panjang; $i++) {
          echo "<tr>";
          for ($j = 0; $j < $lebar; $j++) {
            $isi = isset($nilaiMatriks[$indeks]) ? $nilaiMatriks[$indeks] : 0;
            echo "<td>$isi</td>"; 
            $indeks++;
          }
          echo "</tr>";
        }
      }
      echo "</table>";
    }
    ?>
  </body>
</html>