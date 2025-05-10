<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
    body{background-color:rgb(255, 244, 38);}
    table {width: 100%; border-collapse: collapse;}
    th, td {padding: 8px 12px; border: 1px solid rgb(0, 0, 0); text-align: center;}
    th {background-color:rgb(219, 146, 51);}
    .btn {padding: 5px 10px; text-decoration: none; border-radius: 5px;}
    .update {background-color: orange; color: white;}
    .delete {background-color: red; color: white;}
    .add {margin: 10px 0; padding: 10px 15px; background-color: green; color: white; border: none; border-radius: 5px;}
    .back {margin: 10px 0; padding: 10px 15px; background-color: blue; color: white; border: none; border-radius: 5px;}
    </style>
</head>
<body>
    <?php
    require 'Model.php';
    $data = getAllBuku();
    ?>
    
    <h2 style="text-align: center;">DAFTAR BUKU</h2>
    <table>
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($data)){ ?>
            <tr>
                <td><?= $row['id_buku'] ?></td>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= $row['penulis'] ?></td>
                <td><?= $row['penerbit'] ?></td>
                <td><?= $row['tahun_terbit'] ?></td>
                <td>
                    <a href="FormBuku.php?id_buku=<?= $row['id_buku'] ?>" class = 'btn update' >Edit</a> 
                    <a href="FormBuku.php?delete=<?= $row['id_buku'] ?>" class = 'btn delete' onclick="return confirm('Hapus?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <a href="Dashboard.php"><button class="back">Kembali</button></a>
        <a href="FormBuku.php"><button class="add">Tambah Data</button></a>
    </body>
    </html>