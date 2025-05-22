<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
  <h2>Edit Data Buku</h2>

  <form action="/buku/update/<?= $buku['id']; ?>" method="post">
    <?= csrf_field(); ?>

    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" value="<?= old('judul', $buku['judul']) ?>">
      <div class="invalid-feedback">
        <?= (isset($validation)) ? $validation->getError('judul') : '' ?>
      </div>
    </div>

    <div class="mb-3">
      <label for="penulis" class="form-label">Penulis</label>
      <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('penulis')) ? 'is-invalid' : '' ?>" id="penulis" name="penulis" value="<?= old('penulis', $buku['penulis']) ?>">
      <div class="invalid-feedback">
        <?= (isset($validation)) ? $validation->getError('penulis') : '' ?>
      </div>
    </div>

    <div class="mb-3">
      <label for="penerbit" class="form-label">Penerbit</label>
      <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('penerbit')) ? 'is-invalid' : '' ?>" id="penerbit" name="penerbit" value="<?= old('penerbit', $buku['penerbit']) ?>">
      <div class="invalid-feedback">
        <?= (isset($validation)) ? $validation->getError('penerbit') : '' ?>
      </div>
    </div>

    <div class="mb-3">
      <label for="tahunTerbit" class="form-label">Tahun Terbit</label>
      <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('tahunTerbit')) ? 'is-invalid' : '' ?>" id="tahunTerbit" name="tahunTerbit" value="<?= old('tahunTerbit', $buku['tahun_terbit']) ?>">
      <div class="invalid-feedback">
        <?= (isset($validation)) ? $validation->getError('tahunTerbit') : '' ?>
      </div>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="/buku" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?= $this->endSection() ?>
