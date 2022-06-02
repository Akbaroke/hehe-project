<?php include 'header.php'; ?>

<div class="card-body content-wrapper bg-light">

  <section class="content-header">
    <h1>
      Produk
      <small>Data Produk</small>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-info">

          <div class="box-header">
            <a href="produk_tambah.php" class="btn btn-warning btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Produk Baru</a>              
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA PRODUK</th>
                    <th>KATEGORI</th>
                    <th>HARGA</th>
                    <th>JUMLAH</th>
                    <th width="15%">FOTO</th>
                    <th width="10%">OPSI</th>
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
                        <?php echo $d['produk_foto1']; ?> <br>
                        <?php echo $d['produk_foto2']; ?> <br>
                        <?php echo $d['produk_foto3']; ?>  
                      </td>
                      <td>                        
                        <a class="btn btn-warning btn-sm" href="produk_edit.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="produk_hapus_konfir.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-trash"></i></a>
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