<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- css -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .login-container {
      width: 100%;
      max-width: 400px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .login-header h1 {
      font-size: 32px;
      font-weight: 700;
      text-align: center;
      margin-bottom: 20px;
    }

    .form-control {
      border-radius: 5px 0 0 5px;
    }

    .input-group-text {
      background-color: #ffffff;
      border-left: none;
      border-radius: 0 5px 5px 0;
    }

    .btn-primary {
      width: 100%;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="login-container">
  <!-- Login Header -->
  <div class="login-header">
    <h1>Sumber Barokah</h1>
    <p class="text-center">Login</p>
  </div>

      <!-- Pesan Flash -->
      <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger" role="alert">
              <?= session()->getFlashdata('error') ?>
          </div>
      <?php endif; ?>
      <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success" role="alert">
              <?= session()->getFlashdata('success') ?>
          </div>
      <?php endif; ?>

      <!-- Form Login -->
      <form action="<?= base_url('user/processLogin') ?>" method="post">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">

        <!-- Input untuk ID User -->
        <div class="input-group mb-3">
          <label for="id_user" class="sr-only">ID User</label>
          <input id="id_user" type="text" name="id_user" class="form-control" placeholder="ID User" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-badge"></span>
            </div>
          </div>
        </div>

        <!-- Input untuk Password -->
        <div class="input-group mb-3">
          <label for="password" class="sr-only">Password</label>
          <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- Dropdown untuk Role -->
        <div class="form-group mt-3">
          <label for="role">Login Sebagai:</label>
          <select class="form-control" id="role" name="role" required>
            <option value="kasir">Kasir</option>
            <option value="pemilik">Pemilik</option>
          </select>
        </div>

        <!-- Tombol Login -->
        <div class="row">
          <div class="col-12 col-md-4 offset-md-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>

      <p class="mb-0 text-center mt-3">
        Belum punya akun? <a href="<?= base_url('user/register') ?>" class="text-center">Daftar Baru</a>
      </p>
    </div>
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