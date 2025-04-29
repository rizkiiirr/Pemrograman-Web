<!DOCTYPE html>
<html>
  <head>
    <title>Kalimat</title> 
  </head>
  
  <body>
    <form method = "post" action = "">
      <input type = "text" name = "kalimat">
      <input type = "submit" name = "submit" value = "Submit"><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $kalimat = $_POST['kalimat'];
      $panjangKalimat = strlen($kalimat);
      $output = "";

      for ($i = 0; $i < $panjangKalimat; $i++){
        $huruf = $kalimat[$i];
        $output .= strtoupper($huruf);
        $output .= str_repeat(strtolower($huruf), $panjangKalimat - 1);
      }

      echo "<h2>Input : </h2>";
      echo $kalimat . "<br>";

      echo "<h2>Output : </h2>";
      echo $output;
    }
    ?>
  </body>
</html>