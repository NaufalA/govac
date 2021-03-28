<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<form action="auth/register" method="post">
  <div class="mb-2">
    <label for="nik" class="form-label">NIK</label>
    <input class="form-control" type="text" name="nik" id="nik" required>
  </div>  
  <div class="mb-2">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input class="form-control" type="text" name="nama" id="nama" required>
  </div>  
  <div class="mb-2">
    <label for="telp" class="form-label">No. Telp</label>
    <input class="form-control" type="text" name="telp" id="telp" required>
  </div>  
  <div class="mb-2">
    <label for="email" class="form-label">E-Mail</label>
    <input class="form-control" type="email" name="email" id="email" required>
  </div>  
  <div class="mb-2">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" required>
  </div>  
  <div class="mb-2">
    <label for="password" class="form-label">Password</label>
    <input class="form-control" type="password" name="password" id="password" required>
  </div>  
  <div class="mb-2">
    <label for="alamat" class="form-label">Alamat Lengkap</label>
    <textarea class="form-control" name="alamat" id="alamat" required></textarea>
  </div>  
  <div class="mb-2">
    <button class="btn btn-success" type="submit" class="form-label">Daftar</button>
  </div>
</form>

<?= $this->endSection('content') ?>