z<!DOCTYPE html>
<html>
  <head>
    <title>Forms Input</title>
  </head>

  <?php
    $name1 = $name2 = $name3 = "";
    
    if (isset($_POST['urutan'])){
      $name1 = $_POST['name1'];
      $name2 = $_POST['name2'];
      $name3 = $_POST['name3'];
    }
    ?>
    
    <body>
      <form method="post" action = "">
        <label for = "name1">Nama: 1</label>
        <input type="text" name="name1" value="<?php echo $name1; ?>"><br>
        <label for = "name2">Nama: 2</label>
        <input type="text" name="name2" value="<?php echo $name2; ?>"><br>
        <label for = "name3">Nama: 3</label>
        <input type="text" name="name3" value="<?php echo $name3; ?>"><br>
        
        <input type = "submit" name = "urutan" value = "Urutkan">
      </form>
      
      <?php
      if (isset($_POST['urutan'])){
        $array = array($name1, $name2, $name3);
        sort($array);
        foreach ($array as $name){
          echo $name . "<br>";
        }
      }
      ?>
  </body>
</html>