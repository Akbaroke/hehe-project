<?php include 'header.php'; ?>

<div class="card-body content-wrapper bg-light">

  <section class="content-header">
    <h1>
      Kategori
      <small>Data Kategori</small>
    </h1>
  </section>





  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-warning">

          <div class="box-header">
            <a href="kategori_tambah.php" class="btn btn-warning btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Kategori</a>              
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA</th>
                    <th width="15%">OPSI</th>
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
                        <?php if($d['kategori_id'] != 1){ ?>  
                          <a class="btn btn-warning btn-sm" href="kategori_edit.php?id=<?php echo $d['kategori_id'] ?>"><i class="fa fa-cog"></i></a>
                          <a class="btn btn-danger btn-sm" href="kategori_hapus_konfir.php?id=<?php echo $d['kategori_id'] ?>"><i class="fa fa-trash"></i></a>
                        <?php } ?>
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