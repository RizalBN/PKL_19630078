<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/img/banjar.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Halaman Pendaftaran Pengguna</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/banjar.png" alt="" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="fw-bold nav-link " aria-current="page" href="index.php">Home</a>
          <a class="fw-bold nav-link active" href="daftar.php">Daftar</a>
          <a class="fw-bold nav-link" href="login.php">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <main style="margin-bottom: 10vh;">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12 d-flex justify-content-center flex-column align-items-center">
          <h1 class="text-center">FORM PENDAFTARAN PENGGUNA TAMU<br> DINAS SOSIAL P3AP2KB KABUPATEN BANJAR</h1>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12">
          <?php
          session_start();
          if (isset($_SESSION['result'])) {
            if ($_SESSION['result'] == 'success') {
          ?>
              <!-- Success -->
              <div class="alert alert-primary" role="alert">
                Berhasil Daftar!
              </div>
              <!-- Success -->
            <?php
            } else {
            ?>
              <!-- danger -->
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?= $_SESSION['message'] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- danger -->
          <?php
            }
            unset($_SESSION['result']);
            unset($_SESSION['message']);
          }
          ?>

        </div>
        <div class="card card-body">
          <form action="proses_daftar.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12 mb-3">
                <h4>Daftar Pengguna Tamu</h4>
              </div>
            </div>
            <div class="row">
            <div class="col-6 mb-3">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
              </div>
            </div>
            <div class="col-6 mb-3">
              <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="status">
                  <option value="">Pilih</option>
                  <option value="tamu">Tamu</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6 mb-3">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
              </div>
            </div>
          </div>
            <!--  -->
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary" name="tambah" value="tambah">
                Daftar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>