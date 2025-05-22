<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-bordered border-primary">
        <h1 class = "mt-3">Daftar Pengguna</h1>
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
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $index = 1; ?>
    <?php foreach ($user as $User) : ?>
    <tr>
      <th scope="row"><?= $index++; ?></th>
      <td><?= $User['username']; ?></td>
      <td><?= $User['email']; ?></td>
      <td><?= $User['password']; ?></td>
      <td>
        <a href="/user/edit/<?= $User['id']; ?>" class="btn btn-warning">Edit</a>
        <form action="/user/delete/<?= $User['id']; ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
      </table>
      <a href = "/user/create" class = "btn btn-success">Tambah Data</a>
      <a href = "/login" class = "btn btn-primary">Logout</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>