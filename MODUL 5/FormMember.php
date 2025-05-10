<?php
require 'Model.php';

if (isset($_POST['submit'])){
    $id = $_POST['id_member'] != '' ? $_POST['id_member'] : uniqid();
    if (isset($_GET['id_member'])){
        updateMember($id, $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    } else {
    $conn = koneksiDB(); 
    $cek = mysqli_query($conn, "SELECT * FROM member WHERE id_member = '$id'");
    if (mysqli_num_rows($cek) > 0){
        echo "<script>alert('ID Member sudah digunakan. Silakan gunakan ID lain.'); window.location.href='FormMember.php';</script>";
        exit;
    } else {
        insertMember($id, $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
        header("Location: Member.php");
        exit;
    }
}
    header("Location: Member.php");
    exit;
}

if (isset($_GET['id_member'])){
    $member = getMemberById($_GET['id_member']);
    $data = mysqli_fetch_assoc($member);
} else{
    $data = ['id_member' => '', 'nama_member' => '', 'nomor_member' => '', 'alamat' => '', 'tgl_mendaftar' => '', 'tgl_terakhir_bayar' => ''];
}


if (isset($_GET['delete'])){
    deleteMember($_GET['delete']);
    header("Location: Member.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Member</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
        <style>
        body{background-color:rgb(255, 244, 38);}
        .save {margin: 10px 0; padding: 10px 15px; background-color:green; color: white; border: none; border-radius: 5px;}
        .back {margin: 10px 0; padding: 10px 15px; background-color:blue; color: white; border: none; border-radius: 5px;}
    </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2 style="text-align: center;">FORM MEMBER</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="id_member" class="form-label">ID Member</label>
                    <input type="text" class="form-control" id="id_member" name="id_member" value="<?= $data['id_member'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nama_member" class="form-label">Nama Member</label>
                    <input type="text" class="form-control" id="nama_member" name="nama_member" value="<?= $data['nama_member'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nomor_member" class="form-label">Nomor Member</label>
                    <input type="text" class="form-control" id="nomor_member" name="nomor_member" value="<?= $data['nomor_member'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tgl_mendaftar" class="form-label ">Tanggal Mendaftar</label>
                    <input type="datetime-local" class="form-control" id="tgl_mendaftar" name="tgl_mendaftar" value="<?= $data['tgl_mendaftar'] ?>" required> 
                </div>
                <div class="mb-3">
                    <label for="tgl_terakhir_bayar" class="form-label">Tanggal Terakhir Bayar</label>
                    <input type="date" class="form-control" id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" value="<?= $data['tgl_terakhir_bayar'] ?>" required>  
                </div>
                <button type="button" class="back" onclick="history.back()">Kembali</button>
                <button type="submit" name="submit" class="save">Simpan</button>
            </form>
        </div>
    </body>
</html>