<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Pemilik</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">  
</head>
<form action="/petugas/update/<?= $petugas['id']; ?>" method="post">
    <div class="form-group">
        <label for="id_user">ID User</label>
        <input type="text" name="id_user" class="form-control" value="<?= $petugas['id_user']; ?>" required>
    </div>
    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="<?= $petugas['nama_lengkap']; ?>" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control" value="<?= $petugas['status']; ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?= $petugas['alamat']; ?>" required>
    </div>
    <div class="form-group">
        <label for="no_hp">No HP</label>
        <input type="text" name="no_hp" class="form-control" value="<?= $petugas['no_hp']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/petugas/delete/<?= $petugas['id']; ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
</form>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
