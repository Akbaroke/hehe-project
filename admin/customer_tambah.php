<?php include 'header.php'; ?>

<div class="card-body content-wrapper bg-light">

  <section class="content-header">
    <h1>
      <small>Tambah customer Baru</small>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-info">

          <div class="box-header">
            <a href="customer.php" class="btn btn-warning btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="card-body">
            <form action="customer_act.php" method="post">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama customer..">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" required="required" placeholder="Masukkan email customer..">
              </div>

              <div class="form-group">
                <label>HP</label>
                <input type="number" class="form-control" name="hp" required="required" placeholder="Masukkan no.hp customer..">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" required="required" placeholder="Masukkan alamat customer..">
              </div>

               <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="required" placeholder="Masukkan password customer..">
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>