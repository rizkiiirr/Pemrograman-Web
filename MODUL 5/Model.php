<?php
require 'Koneksi.php';

function getAllMember(){
    $conn = koneksiDB();
    $query = "SELECT * FROM member";
    return mysqli_query($conn, $query);
}

function insertMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar){
    $conn = koneksiDB();
    $query = "INSERT INTO member (id_member, nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
    VALUES ('$id_member', '$nama_member', '$nomor_member', '$alamat', '$tgl_mendaftar', '$tgl_terakhir_bayar')";
    return mysqli_query($conn, $query);
}

function updateMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar){
  $conn = koneksiDB();
  $query = "UPDATE member SET id_member = '$id_member', nama_member = '$nama_member', nomor_member = '$nomor_member', alamat = '$alamat', tgl_mendaftar = '$tgl_mendaftar', tgl_terakhir_bayar = '$tgl_terakhir_bayar' WHERE id_member = '$id_member'";
  return mysqli_query($conn, $query);
}

function deleteMember($id_member){
    $conn = koneksiDB();
    $query = "DELETE FROM member WHERE id_member = '$id_member'";
    return mysqli_query($conn, $query);
}

function getMemberById($id_member){
    $conn = koneksiDB();
    $query = "SELECT * FROM member WHERE id_member = '$id_member'";
    return mysqli_query($conn, $query);
}

function getAllBuku(){
    $conn = koneksiDB();
    $query = "SELECT * FROM buku";
    return mysqli_query($conn, $query);
}

function insertBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit){
    $conn = koneksiDB();
    $query = "INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit) 
    VALUES ('$id_buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')";
    return mysqli_query($conn, $query);
}

function updateBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit){
  $conn = koneksiDB();
  $query = "UPDATE buku SET judul_buku = '$judul_buku', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' WHERE id_buku = '$id_buku'";
  return mysqli_query($conn, $query);
}

function deleteBuku($id_buku){
  $conn = koneksiDB();
  $query = "DELETE FROM buku WHERE id_buku = '$id_buku'";
  return mysqli_query($conn, $query);
}

function getBukuById($id_buku){
    $conn = koneksiDB();
    $query = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
    return mysqli_query($conn, $query);
}

function getAllPeminjaman(){
    $conn = koneksiDB();
    $query = "SELECT * FROM peminjaman";
    return mysqli_query($conn, $query);
}

function insertPeminjaman($id_peminjaman, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali){
    $conn = koneksiDB();
    $query = "INSERT INTO peminjaman (id_peminjaman, id_member, id_buku, tgl_pinjam, tgl_kembali) 
    VALUES ('$id_peminjaman', '$id_member', '$id_buku', '$tgl_pinjam', '$tgl_kembali')";
    return mysqli_query($conn, $query);
}

function updatePeminjaman($id_peminjaman, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali){
  $conn = koneksiDB();
  $query = "UPDATE peminjaman SET id_member = '$id_member', id_buku = '$id_buku', tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali' WHERE id_peminjaman = '$id_peminjaman'";
  return mysqli_query($conn, $query);
}

function deletePeminjaman($id_peminjaman){
  $conn = koneksiDB();
  $query = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
  return mysqli_query($conn, $query);
}

function getPeminjamanById($id_peminjaman){
    $conn = koneksiDB();
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
    return mysqli_query($conn, $query);
}
?>