<!DOCTYPE html>
<html>
  <head>
    <title>Data Mahasiswa</title>
    
    <style>
    table {
      border-collapse: collapse;
      width: 80%;
    }
    th, td {
      text-align: left;
      border: 1px solid #000;
      padding: 8px 12px;
    }
    th {
      background-color: #bbbdbf;
    }
    </style>
  </head>
  
  <body>
    <?php
    $mahasiswa = array(
      array("nama"=>"Andi", "nim"=>2101001, "nilaiUts"=>87, "nilaiUas"=>65),
      array("nama"=>"Budi", "nim"=>2101002, "nilaiUts"=>76, "nilaiUas"=>79),
      array("nama"=>"Tono", "nim"=>2101003, "nilaiUts"=>50, "nilaiUas"=>41),
      array("nama"=>"Jessica", "nim"=>2101004, "nilaiUts"=>60, "nilaiUas"=>75)
    );
    
    echo "<table>";
    echo "<tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Nilai UTS</th>
    <th>Nilai UAS</th>
    <th>Nilai Akhir</th>
    <th>Huruf</th></tr>";
    
    foreach ($mahasiswa as $mhs) {
      $nilaiAkhir = (0.4 * $mhs["nilaiUts"]) + (0.6 * $mhs["nilaiUas"]);
      $huruf = $nilaiAkhir >= 80 ? "A" : ($nilaiAkhir >= 70 ? "B" : ($nilaiAkhir >= 60 ? "C" : ($nilaiAkhir >= 50 ? "D" : "E")));
      
      echo "<tr>";
      echo "<td>{$mhs['nama']}</td>";
      echo "<td>{$mhs['nim']}</td>";
      echo "<td>{$mhs['nilaiUts']}</td>";
      echo "<td>{$mhs['nilaiUas']}</td>";
      echo "<td>" . (($nilaiAkhir == floor($nilaiAkhir)) ? intval($nilaiAkhir) : $nilaiAkhir). "</td>";
      echo "<td>{$huruf}</td>";
      echo "</tr>";
    }
    echo "</table>";
    ?>
    </body>
</html>