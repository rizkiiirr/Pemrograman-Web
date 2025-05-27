<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">

      <h1>Profile</h1>
      
      <img src="/img/rizki.jpeg" alt="Foto Rizki" width="200">
      <p>Nama Lengkap: <?= $name; ?></p>
      <p>NIM: <?= $nim; ?></p>
      <p>Program Studi: <?= $prodi; ?></p>
      <p>Hobi: <?= $hobbies; ?></p>
      <p>Skill: <?= $skills; ?></p>
      <p>Motto: <?= $mottos; ?></p>

    </div>
  </div>
</div>
<?= $this->endSection() ?>