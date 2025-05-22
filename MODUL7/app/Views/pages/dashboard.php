<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
  <h2>Selamat datang, <?= session()->get('username') ?></h2>
  <p>Pilih database yang ingin diakses:</p>
  <a href="/buku" class="btn btn-primary">Daftar Buku</a>
  <a href="/pengguna" class="btn btn-secondary">Daftar Pengguna</a>
  <a href="/logout" class="btn btn-danger float-end">Logout</a>
</div>

<?= $this->endSection() ?>
