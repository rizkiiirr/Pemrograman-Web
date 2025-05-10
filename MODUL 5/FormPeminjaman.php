<?php
require 'Model.php';

$members = getAllMember();
$buku = getAllBuku();

if (isset($_POST['submit'])){
    $id = $_POST['id_peminjaman'] != '' ? $_POST['id_peminjaman'] : uniqid();
    if (isset($_GET['id_peminjaman'])){
        updatePeminjaman($_POST['id_peminjaman'], $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    } else{
        $conn = koneksiDB();
        $cek = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjaman = '$id'");
        if (mysqli_num_rows($cek) > 0){
            echo "<script>alert('ID Peminjaman sudah digunakan. Silakan gunakan ID lain.'); window.location.href='FormPeminjaman.php';</script>";
            exit;
        } else{
            insertPeminjaman($id, $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
            header("Location: Peminjaman.php"); 
            exit;
    }
}
    header("Location: Peminjaman.php");
    exit;
}

if (isset($_GET['id_peminjaman'])){
    $peminjaman = getPeminjamanById($_GET['id_peminjaman']);
    $data = mysqli_fetch_assoc($peminjaman);
} else{
    $data = ['id_peminjaman' => '', 'id_member' => '', 'id_buku' => '', 'tgl_pinjam' => '', 'tgl_kembali' => ''];
}

if (isset($_GET['delete'])){
    deletePeminjaman($_GET['delete']);
    header("Location: Peminjaman.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <style>
        body{background-color: rgb(255, 244, 38);}
        .save{margin: 10px 0; padding: 10px 15px; background-color: green; color: white; border: none; border-radius: 5px;}
        .back {margin: 10px 0; padding: 10px 15px; background-color:blue; color: white; border: none; border-radius: 5px;}
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">FORM PEMINJAMAN</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="id_peminjaman" class="form-label">ID Peminjaman</label>
                <input type="text" class="form-control" id="id_peminjaman" name="id_peminjaman" value="<?= $data['id_peminjaman'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="id_member" class="form-label">ID Member</label>
                <select class="form-select" name="id_member" id="id_member" required>
                    <?php while ($row = mysqli_fetch_assoc($members)){ ?>
                        <option value="<?= $row['id_member'] ?>" <?= ($data['id_member'] == $row['id_member']) ? 'selected' : '' ?>>
                            <?= $row['id_member'] ?> - <?= $row['nama_member'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Buku</label>
                <select class="form-select" name="id_buku" id="id_buku" required>
                    <?php while ($row = mysqli_fetch_assoc($buku)){ ?>
                        <option value="<?= $row['id_buku'] ?>" <?= ($data['id_buku'] == $row['id_buku']) ? 'selected' : '' ?>>
                            <?= $row['id_buku'] ?> - <?= $row['judul_buku'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['tgl_pinjam'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['tgl_kembali'] ?>" required>
            </div>
            <button type="button" class="back" onclick="history.back()">Kembali</button>
            <button type="submit" name="submit" class="save">Simpan</button>
        </form>
    </div>
</body>
</html>