<!DOCTYPE html>
<html>
  <head>
    <title>Jumlah Bintang</title> 
  </head>  
    
    <?php
    if (isset($_POST['cetak'])) {
      $jumlahBintang = $_POST['jumlahBintang'];
    }
    ?>
  </head>
  
  <body>
    <form method = "post" action = "">
      <label>Jumlah Bintang : </label>
      <input type = "number" name = "jumlahBintang" value = "<?php echo isset($_POST['jumlahBintang']) ? $_POST['jumlahBintang'] : ''; ?>"><br>
      <input type = "submit" name = "submit" value = "Submit"><br><br>
    </form>
    
    <?php
    if (isset($_POST['submit']) || isset($_POST['tambah']) || isset($_POST['kurang'])) {
      $jumlahBintang = isset($_POST['jumlahBintang']) ? $_POST['jumlahBintang'] : 0;
      
      if (isset($_POST['tambah'])) {
        $jumlahBintang += 1;
      } else if (isset($_POST['kurang'])) {
        $jumlahBintang -= 1;
      }
      
      echo "Jumlah Bintang $jumlahBintang <br><br>"; 
      for ($i = 1; $i <= $jumlahBintang; $i++){
        echo '<img src = "bintang.png" width = "50" height = "50"> ';
      }
      ?>
      
      <form method = "post" action = "">
        <input type = "hidden" name = "jumlahBintang" value = "<?php echo $jumlahBintang; ?>">
        <input type = "submit" name = "tambah" value = "Tambah">
        <input type = "submit" name = "kurang" value = "Kurang"><br><br>
      </form>
      
      <?php
      }
      ?>
  </body>
</html>