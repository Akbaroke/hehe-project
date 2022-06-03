<?php include 'header.php'; ?>

<div class="card-body content-wrapper bg-light">


  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>no</th>
                    <th>NAMA PRODUK</th>
                    <th>KATEGORI</th>
                    <th>HARGA</th>
                    <th>JUMLAH</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php 
                  include '../config/koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM produk,kategori where kategori_id=produk_kategori order by produk_id asc");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['produk_nama']; ?></td>
                      <td><?php echo $d['kategori_nama']; ?></td>
                      <td><?php echo "Rp. ".number_format($d['produk_harga']).",-"; ?></td>
                      <td><?php echo number_format($d['produk_jumlah']); ?></td>
                    </tr>
                    <?php 
                  }
                  ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

 <section class="content-header">
    <h1>
      <small>Tambah/Edit/Hapus</small>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12 col-lg-offset-1">
        <div class="box box-info">

          <div class="box-header">
            <a href="produk_tambah.php" class="btn btn-warning btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Produk Baru</a>              
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA PRODUK</th>
                    <th>KATEGORI</th>
                    <th>HARGA</th>
                    <th>JUMLAH</th>
                    <th colspan="2" width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../config/koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM produk,kategori where kategori_id=produk_kategori order by produk_id desc");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['produk_nama']; ?></td>
                      <td><?php echo $d['kategori_nama']; ?></td>
                      <td><?php echo "Rp. ".number_format($d['produk_harga']).",-"; ?></td>
                      <td><?php echo number_format($d['produk_jumlah']); ?></td>
                      <td>                        
                        <a class="badge badge-pill badge-warning" href="produk_edit.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-cog"></i> Edit</a>
                      </td>
                      <td>
                        <a class="badge badge-pill badge-danger" href="produk_hapus_konfir.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-trash"> Hapus</i></a>
                      </td>
                    </tr>
                    <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>


  </div>
  <!-- /.content-wrapper -->


 






</div>
<?php include 'footer.php'; ?>