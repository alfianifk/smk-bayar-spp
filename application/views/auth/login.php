<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Login</b>User</a>
    </div>
    <div class="card-body">
      <p class="alert alert-warning">Apabila anda seorang <b>Siswa</b> silahkan masukan <b>Username</b> dan <b>Password</b> dengan <b> NIS (Nomor induk Siswa) </b> </p>
      <?= $this->session->flashdata('message'); ?>

      <form action="" method="post">
        <div class="input-group mb-2">
          <input type="username" name="username" id="username" class="form-control" placeholder="Username">
        </div>
        <?= form_error('username', '<p class="pl-2 text-danger">', '</p>'); ?>

        <div class="input-group mb-2">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <?= form_error('password', '<p class="pl-2 text-danger">', '</p>'); ?>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" required id="setuju">
              <label for="setuju">
               Setuju dengan kebijakan sekolah
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
</body>
</html>
