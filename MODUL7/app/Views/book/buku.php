<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-bordered border-primary">
        <h1 class = "mt-3">Daftar Buku</h1>
        <?php

use CodeIgniter\Commands\Database\Seed;

 if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= Session()->getFlashdata('pesan'); ?>         
          </div>
        <?php endif; ?>
        <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $index = 1; ?>
    <?php foreach ($buku as $Buku) : ?>
    <tr>
      <th scope="row"><?= $index++; ?></th>
      <td><?= $Buku['judul']; ?></td>
      <td><?= $Buku['penulis']; ?></td>
      <td><?= $Buku['penerbit']; ?></td>
      <td><?= $Buku['tahun_terbit']; ?></td>
      <td>
        <a href="/buku/edit/<?= $Buku['id']; ?>" class="btn btn-warning">Edit</a>
        <form action="/buku/delete/<?= $Buku['id']; ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
      </table>
      <a href = "/buku/create" class = "btn btn-success">Tambah Data</a>
      <a href = "/login" class = "btn btn-primary">Logout</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>