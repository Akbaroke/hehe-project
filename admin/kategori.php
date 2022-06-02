<?php include 'header.php'; ?>

<div class="card-body content-wrapper bg-light">



 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../config/koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM kategori");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['kategori_nama']; ?></td>
                      <td>                        
                        <a class="badge badge-pill badge-warning" href="kategori_edit.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-cog"></i> Edit</a>

                        <a class="badge badge-pill badge-danger" href="kategori_hapus_konfir.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-trash"> Hapus</i></a>
                      </td>
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


</div>
<?php include 'footer.php'; ?>