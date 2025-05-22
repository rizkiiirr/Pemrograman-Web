<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class = "my-3">Form Tambah Data Buku</h2>
      <form action="/buku/save" method="post" >
        <?= csrf_field() ?>
        
        <div class="row mb-3">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" value="<?= old('judul') ?>">
            <div class="invalid-feedback">
              <?= (isset($validation)) ? $validation->getError('judul') : '' ?>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('penulis')) ? 'is-invalid' : '' ?>" id="penulis" name="penulis" value="<?= old('penulis') ?>">
            <div class="invalid-feedback">
              <?= (isset($validation)) ? $validation->getError('penulis') : '' ?>
            </div>
          </div>
        </div>
  
        <div class="row mb-3">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('penerbit')) ? 'is-invalid' : '' ?>" id="penerbit" name="penerbit" value="<?= old('penerbit') ?>">
            <div class="invalid-feedback">
              <?= (isset($validation)) ? $validation->getError('penerbit') : '' ?>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="tahunTerbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('tahunTerbit')) ? 'is-invalid' : '' ?>" id="tahunTerbit" name="tahunTerbit" value="<?= old('tahunTerbit') ?>">
            <div class="invalid-feedback">
              <?= (isset($validation)) ? $validation->getError('tahunTerbit') : '' ?>
            </div>
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/buku" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

