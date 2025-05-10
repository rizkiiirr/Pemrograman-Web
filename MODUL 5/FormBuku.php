<?php
require 'Model.php';

if (isset($_POST['submit'])){
    $id = $_POST['id_buku'] != '' ? $_POST['id_buku'] : uniqid();
    if (isset($_GET['id_buku'])){
        updateBuku($id, $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    } else{
        $conn = koneksiDB();
        $cek = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id'");
        if (mysqli_num_rows($cek) > 0){
            echo "<script>alert('ID Buku sudah digunakan. Silakan gunakan ID lain.'); window.location.href='FormBuku.php';</script>";
            exit;
        } else{
            insertBuku($id, $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
            header("Location: Buku.php");
            exit;
        }
    }
    header("Location: Buku.php");
    exit;
}

if (isset($_GET['id_buku'])){
    $buku = getBukuById($_GET['id_buku']);
    $data = mysqli_fetch_assoc($buku);
} else{
    $data = ['id_buku' => '', 'judul_buku' => '', 'penulis' => '', 'penerbit' => '', 'tahun_terbit' => ''];
}

if (isset($_GET['delete'])){
    deleteBuku($_GET['delete']);
    header("Location: Buku.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Buku</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
        <style>
        body{background-color:rgb(255, 244, 38);}
        .save {margin: 10px 0; padding: 10px 15px; background-color:green; color: white; border: none; border-radius: 5px;}
        .back {margin: 10px 0; padding: 10px 15px; background-color:blue; color: white; border: none; border-radius: 5px;}
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2 style="text-align: center;">FORM BUKU</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="id_buku" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?= $data['id_buku'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $data['judul_buku'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data['penulis'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data['penerbit'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label ">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>" required> 
                </div>
                <button type="button" class="back" onclick="history.back()">Kembali</button>
                <button type="submit" name="submit" class="save">Simpan</button>
            </form>
        </div>
    </body>
</html>