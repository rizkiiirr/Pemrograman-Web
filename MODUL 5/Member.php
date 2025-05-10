<!DOCTYPE html>
<html>
<head>
    <title>Daftar Member</title>
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
    $data = getAllMember();
    ?>
    
    <h2 style="text-align: center;">DAFTAR MEMBER</h2>
    <table>
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tgl Daftar</th>
            <th>Tgl Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($data)){ ?>
        <tr>
            <td><?= $row['id_member'] ?></td>
            <td><?= $row['nama_member'] ?></td>
            <td><?= $row['nomor_member'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['tgl_mendaftar'] ?></td>
            <td><?= $row['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="FormMember.php?id_member=<?= $row['id_member'] ?>" class = 'btn update' >Edit</a> 
                <a href="FormMember.php?delete=<?= $row['id_member'] ?>" class = 'btn delete' onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="Dashboard.php"><button class="back">Kembali</button></a>
    <a href="FormMember.php"><button class="add">Tambah Data</button></a>
</body>
</html>