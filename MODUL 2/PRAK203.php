<!DOCTYPE html>
<html>
  <head>
    <title>Konversi Suhu</title>
  </head>
  
  <?php
  $nilai = $suhu1 = $suhu2 = $hasil = "";
  
  if (isset($_POST['konversi'])) {
    $nilai = $_POST['nilai'];
    $suhu1 = $_POST['suhu1'];
    $suhu2 = $_POST['suhu2'];
    
    if ($suhu1 == "°C") {
      if ($suhu2 == "°Re") {
        $hasil = $nilai * 0.8;
      } elseif ($suhu2 == "°F") {
        $hasil = ($nilai * 9/5) + 32;
      } elseif ($suhu2 == "K") {
        $hasil = $nilai + 273.15;
      } else {
        $hasil = $nilai;
      }
    
    } elseif ($suhu1 == "°Re") {
      if ($suhu2 == "°C") {
        $hasil = $nilai / 0.8;
      } elseif ($suhu2 == "°F") {
        $hasil = ($nilai * 9/4) + 32;
      } elseif ($suhu2 == "K") {
        $hasil = ($nilai / 0.8) + 273.15;
      } else {
        $hasil = $nilai;
      }
    
    } elseif ($suhu1 == "°F") {
      if ($suhu2 == "°C") {
        $hasil = ($nilai - 32) * 5/9;
      } elseif ($suhu2 == "°Re") {
        $hasil = ($nilai - 32) * 4/9;
      } elseif ($suhu2 == "K") {
        $hasil = (($nilai - 32) * 5/9) + 273.15;
      } else {
        $hasil = $nilai;
      }
    
    } elseif ($suhu1 == "K") {
      if ($suhu2 == "°C") {
        $hasil = $nilai - 273.15;
      } elseif ($suhu2 == "°Re") {
        $hasil = ($nilai - 273.15) * 0.8;
      } elseif ($suhu2 == "°F") {
        $hasil = (($nilai - 273.15) * 9/5) + 32;
      } else {
        $hasil = $nilai;
      }
    }
  }
  ?>
  
  <body>
    <form method = "post" action = "">
      <label for = "nilai"> Nilai: </label>
      <input type = "number" name = "nilai" value="<?php echo $nilai; ?>"><br>
      
      Dari: <br>
      <input type="radio" name="suhu1" value="°C" <?php if ($suhu1 == "°C") echo "checked"; ?> required> Celcius <br>
      <input type="radio" name="suhu1" value="°F" <?php if ($suhu1 == "°F") echo "checked"; ?>> Fahrenheit <br>
      <input type="radio" name="suhu1" value="°Re" <?php if ($suhu1 == "°Re") echo "checked"; ?>> Rheamur <br>
      <input type="radio" name="suhu1" value="K" <?php if ($suhu1 == "K") echo "checked"; ?>> Kelvin <br>
      
      Ke: <br>
      <input type="radio" name="suhu2" value="°C" <?php if ($suhu2 == "°C") echo "checked"; ?> required> Celcius <br>
      <input type="radio" name="suhu2" value="°F" <?php if ($suhu2 == "°F") echo "checked"; ?>> Fahrenheit <br>
      <input type="radio" name="suhu2" value="°Re" <?php if ($suhu2 == "°Re") echo "checked"; ?>> Rheamur <br>
      <input type="radio" name="suhu2" value="K" <?php if ($suhu2 == "K") echo "checked"; ?>> Kelvin <br>
      
      <input type="submit" name="konversi" value="Konversi"><br><br>
    </form>
    
    <?php
    if (isset($_POST['konversi'])) {
      echo "<h2> Hasil Konversi: $hasil $suhu2 </h2>";
    }
    ?>
    
  </body>
</html>