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


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Petugas</h3>
        <a href="/petugas/create" class="btn btn-primary float-right">Tambah</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($petugas as $key => $row): ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td>
                        <a href="/petugas/edit/<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/petugas/delete/<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

