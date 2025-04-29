<!DOCTYPE html>
<html>
  <head>
    <title>Data KRS Mahasiswa</title>

    <style>
    table {
      border-collapse: collapse;
      width: 700px;
    }
    th, td {
      text-align: left;
      border: 1px solid #000;
      padding: 5px;
    }
    th {
      background-color: #bbbdbf;
    }
    </style>
    </head>
    
    <body>
      <?php
      $mahasiswa = array(
        "Ridho" => array(
          array("matkul" => "Pemrograman I", "sks" => 2),
          array("matkul" => "Praktikum Pemrograman I", "sks" => 1),
          array("matkul" => "Pengantar Lingkungan Lahan Basah", "sks" => 2),
          array("matkul" => "Arsitektur Komputer", "sks" => 3)
        ),
        "Ratna" => array(
          array("matkul" => "Basis Data I", "sks" => 2),
          array("matkul" => "Praktikum Basis Data I", "sks" => 1),
          array("matkul" => "Kalkulus", "sks" => 3)
        ),
        "Tono" => array(
          array("matkul" => "Rekayasa Perangkat Lunak", "sks" => 3),
          array("matkul" => "Analisis dan Perancangan Sistem", "sks" => 3),
          array("matkul" => "Komputasi Awan", "sks" => 3),
          array("matkul" => "Kecerdasan Bisnis", "sks" => 3)
       )
      );
      
      echo "<table>";
      echo "<tr>
      <th>No</th>
      <th>Nama</th>
      <th>Mata Kuliah diambil</th>
      <th>SKS</th>
      <th>Total SKS</th>
      <th>Keterangan</th>
      </tr>";
      
      $no = 1;
      foreach ($mahasiswa as $nama => $matkuls) {
        $totalSKS = 0;
        foreach ($matkuls as $mk) {
          $totalSKS += $mk['sks'];
        }
        
        $keterangan = ($totalSKS < 7) ? "Revisi KRS" : "Tidak Revisi";
        $warna = ($totalSKS < 7) ? "#e6071d" : "#0da112"; 
        $textColor = "black";
        
        $rowspan = count($matkuls);
        $firstRow = true;
        
        foreach ($matkuls as $mk) {
          echo "<tr>";
          if ($firstRow) {
            echo "<td>$no</td>";
            echo "<td>$nama</td>";
          }
          else{
            echo "<td></td>";
            echo "<td></td>";
          }
          
          echo "<td>{$mk['matkul']}</td>";
          echo "<td>{$mk['sks']}</td>";
          
          if ($firstRow) {
            echo "<td>$totalSKS</td>";
            echo "<td bgcolor='$warna' style='color: $textColor;'>$keterangan</td>";
            $firstRow = false;
          }
          else{
            echo "<td></td>";
            echo "<td></td>";
          }
          echo "</tr>";
        }
        $no++;
      }
      echo "</table>";
      ?>
      </body>
      </html>