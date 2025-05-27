<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">

      <h1>Halo Semuanya!</h1>
      <p>Selamat Datang</p>
      <p>Saya <?= $name; ?></p>
      <p>Dengan NIM <?= $nim; ?></p>

    </div>
  </div>
</div>
<?= $this->endSection() ?>
