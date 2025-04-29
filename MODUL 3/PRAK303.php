<!DOCTYPE html>
<html>
  <head>
    <title>Bintang</title> 
  </head>

    <?php  
    if (isset($_POST['cetak'])) {
      $batasBawah = $_POST['batasBawah'];
      $batasAtas = $_POST['batasAtas'];
    }
    ?>
    
    <body>
      <form method = "post" action = "">
        <label>Batas Bawah : </label>
        <input type = "number" name = "batasBawah" value = "<?php echo isset($_POST['batasBawah']) ? $_POST['batasBawah'] : ''; ?>"><br>
        <label>Batas Atas : </label>
        <input type = "number" name = "batasAtas" value = "<?php echo isset($_POST['batasAtas']) ? $_POST['batasAtas'] : ''; ?>"><br>
        <input type = "submit" name = "cetak" value = "Cetak"><br><br>
      </form>
      
      <?php
      if (isset($_POST['cetak'])) {
        $batasBawah = $_POST['batasBawah'];
        $batasAtas = $_POST['batasAtas'];
        
        do {
          if (($batasBawah + 7) % 5 == 0) {
            echo "<img src = 'bintang.png' width = '20' height = '20'> ";
          } else {
            echo $batasBawah . " ";
          }
          $batasBawah++;
        } while ($batasBawah <= $batasAtas);
      }
    ?>
  </body>
</html>