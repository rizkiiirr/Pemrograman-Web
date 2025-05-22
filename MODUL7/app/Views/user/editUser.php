<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
  <h2>Edit Data Pengguna</h2>
  
  <form action="/user/update/<?= $user['id']; ?>" method="post">
    <?= csrf_field(); ?>
    
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= old('username', $user['username']) ?>">   
      <div class="invalid-feedback">
        <?= $validation->getError('username'); ?>
      </div>
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= old('email', $user['email']) ?>">
      <div class="invalid-feedback">
        <?= (isset($validation)) ? $validation->getError('email') : '' ?>
      </div>    
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" value="<?= old('password', $user['password']) ?>">
      <div class="invalid-feedback">
        <?= (isset($validation)) ? $validation->getError('password') : '' ?>
      </div>    
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="/user" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?= $this->endSection() ?>
