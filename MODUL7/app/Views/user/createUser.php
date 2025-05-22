<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class = "my-3">Form Tambah Data Pengguna</h2>
      <form action="/user/save" method="post" >
        <?= csrf_field() ?>
        
        <div class="row mb-3">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= old('username') ?>">
            <div class="invalid-feedback">
              <?= (isset($validation)) ? $validation->getError('username') : '' ?>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= old('email') ?>">
            <div class="invalid-feedback">
              <?= (isset($validation)) ? $validation->getError('email') : '' ?>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" value="<?= old('passowrd') ?>">
          <div class="invalid-feedback">
            <?= (isset($validation)) ? $validation->getError('password') : '' ?>
          </div>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="/user" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
</div>

<?= $this->endSection() ?>

