<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Pengguna</h1>

  <div class="card card-body">
    <div class="row">
      <div class="col-12">
        <?php
        if (isset($_SESSION['result'])) {
          if ($_SESSION['result'] == 'success') {
        ?>
            <!-- Success -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?= $_SESSION['message'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
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
      <div class="col-12">
        <form action="pengguna.php?page=proses" method="post">

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="status">
                  <option value="">Pilih</option>
                  <option value="admin">Admin</option>
                  <option value="tamu">Tamu</option>
                </select>
              </div>
            </div>
          </div>

          <div class=" row">
            <div class="col-6">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
              </div>
            </div>
          </div>

          <button name="tambah" value="tambah" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->