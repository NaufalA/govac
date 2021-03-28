<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<form action="auth/login" method="post">
  <div class="mb-2">
    <label for="nik" class="form-label">NIK/No.Telp/E-Mail</label>
    <input class="form-control" type="text" name="nik" id="nik" required>
  </div>  
  <div class="mb-2">
    <label for="password" class="form-label">Password</label>
    <input class="form-control" type="password" name="password" id="password" required>
  </div>  
  <div class="mb-2">
    <button class="btn btn-success" type="submit" class="form-label">Masuk</button>
    <a class="" href="/daftar">Belum punya akun? Daftar dulu disini</a>
  </div>
</form>

<?= $this->endSection('content') ?>