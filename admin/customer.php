<?php include 'header.php'; ?>

<div class="card-body content-wrapper bg-light">

  <section class="content-header">
    <h1>
      Customer
      <small>Data Customer</small>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-info">

          <div class="box-header">
            <a href="customer_tambah.php" class="btn btn-warning btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Customer Baru</a>              
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>HP</th>
                    <th>ALAMAT</th>
                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../config/koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM customer");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['customer_nama']; ?></td>
                      <td><?php echo $d['customer_email']; ?></td>
                      <td><?php echo $d['customer_hp']; ?></td>
                      <td><?php echo $d['customer_alamat']; ?></td>
                      <td>                        
                        <a class="btn btn-warning btn-sm" href="customer_edit.php?id=<?php echo $d['customer_id'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="customer_hapus_konfir.php?id=<?php echo $d['customer_id'] ?>"><i class="fa fa-trash"></i></a>
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
<?php include 'footer.php'; ?>