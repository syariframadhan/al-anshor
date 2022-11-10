<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('') ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body background="<?= base_url() ?>assets/img/bg-web.jpg">

  <div class="container"><br><br><br>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-3">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="text-center">
                  <img src="<?= base_url() ?>/assets/img/profile.png" alt="" class="img-thumbail mt-5 mb-0"
                    style="width: 150px;">
                </div>

              </div>

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 mt-0">Form Login<br>
                      APLIKASI SISTEM INFORMASI AKADEMIK <br>
                      SMP ISLAM AL-ANSHOR
                    </h1>
                    <h6>Jl. Kebon Kaung, Ciriung, Kec. Cibinong, Kab.Bogor Prov. Jawa Barat</h6>
                    <hr>

                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form method="post" action="<?= base_url('auth'); ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username"
                        aria-describedby="emailHelp" placeholder="Username Anda..." name="username">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password"
                        placeholder="Password Anda ..."
                        name="password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="text-center">

                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>