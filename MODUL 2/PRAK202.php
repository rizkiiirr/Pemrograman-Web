<!DOCTYPE html>
<html>
  <head>
    <title>Forms Input</title>
    <style> .error {color: #FF0000;} </style>
  </head>
  
  <body>
    <?php
    $namaError = $nimError = $genderError = "";
    $nama = $nim = $gender = "";
    
    if (isset($_POST['Submit'])) {
      if (empty($_POST['nama'])) {
        $namaError = "nama tidak boleh kosong";
      } else {
        $nama = htmlspecialchars($_POST['nama']);
      }
      
      if (empty($_POST['nim'])) {
        $nimError = "nim tidak boleh kosong";
      } else {
        $nim = htmlspecialchars($_POST['nim']);
      }
      
      if (empty($_POST['gender'])) {
        $genderError = "jenis kelamin tidak boleh kosong";
      } else {
        $gender = $_POST['gender'];
      }
    }
    ?>
    
    <form method="post" action="">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
      <span class="error">* <?php echo $namaError; ?></span><br>
      
      <label for="nim">Nim:</label>
      <input type="text" id="nim" name="nim" value="<?php echo $nim; ?>">
      <span class="error">* <?php echo $nimError; ?></span><br>
      
      <label for="jenisKelamin">Jenis Kelamin:</label>
      <span class="error">* <?php echo $genderError; ?></span><br>
      <input type="radio" name="gender" value = "Laki-laki" <?php if ($gender == "Laki-laki") echo "checked"; ?>> Laki-Laki<br>
      <input type="radio" name="gender" value = "Perempuan" <?php if ($gender == "Perempuan") echo "checked"; ?>> Perempuan<br>
      
      <input type="submit" name="Submit" value="Submit">
    </form>
    
    <?php
    if (isset($_POST['Submit']) && !$namaError && !$nimError && !$genderError) {
      echo "<h2>Output:</h2>";
      echo "$nama<br>";
      echo "$nim<br>";
      echo "$gender<br>";
    }
    ?>
    
  </body>
</html>