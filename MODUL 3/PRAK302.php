<!DOCTYPE html>
<html>
  <head>
    <title>Menyusun Segitiga</title>
  </head>
  
  <?php
  $angka = $alamatGambar = "";
  
  if (isset($_POST['cetak'])) {
    $angka = $_POST['angka'];
    $alamatGambar = $_POST['alamatGambar'];
  }
  ?>

  <body>
    <form method = "post" action = "">
      <label>Tinggi : </label>
      <input type = "number" name = "angka" value = "<?php echo $angka; ?>"><br>
      <label>Alamat Gambar : </label>
      <input type = "text" name = "alamatGambar" value = "<?php echo $alamatGambar; ?>"><br>
      <input type = "submit" name = "cetak" value = "Cetak"><br><br>
    </form>

    <?php
    if (isset($_POST['cetak'])){
      $baris = $angka;
      $spasi = 0;

      while ($baris >= 1){
          echo "<div class = 'baris' style = 'margin-left: {$spasi}px'>";        
          
          $gambar = 1;
          while ($gambar <= $baris){
            echo "<img src = '$alamatGambar' width = '50' height = '50'>";
            $gambar++;
          }
        echo "</div>";
        $baris--;
        $spasi += 50;
      }
    }
    ?>
  </body>
</html>