<!DOCTYPE html>
<html>
  <head>
    <title>Konversi Ejaan</title>
  </head>
  
  <?php
  if (isset($_POST['konversi'])){
    $nilai = $_POST['nilai'];
    if ($nilai >= 0 && $nilai < 1000){
      if ($nilai == 0){
        $hasil = "Nol";
      }
      elseif ($nilai > 0 && $nilai <10){
        $hasil = "Satuan";
      }
      elseif ($nilai > 10 && $nilai <20){
        $hasil = "Belasan";
      }
      elseif ($nilai == 10 || $nilai > 19 && $nilai <100){
        $hasil = "Puluhan";
      }
      elseif ($nilai > 99 && $nilai <1000){
        $hasil = "Ratusan";
      }
    }
    elseif ($nilai < 0) {
      $hasil = "Angka input tidak boleh negatif";
    }
    else {
      $hasil = "Anda Menginput Melebihi Limit Bilangan";
    }
  }
  ?> 

  <body>
    <form method = "post" action = "">
      <label for = "nilai"> Nilai : </label>
      <input type = "number" name = "nilai" value="<?php echo $nilai; ?>"><br>
      <input type = "submit" name = "konversi" value = "Konversi"></input>
    </form>

    <?php
    if (isset($_POST['konversi'])){
      echo $hasil;
    }
    ?>
  </body>  
</html>