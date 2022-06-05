<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

<?php include 'layouts/header-static.php'; ?>

</head>
<body>

<?php include 'layouts/nav.php'; ?>

    <section id="detail">
        <div class="container-detail">
            <div class="link-set">
                <div class="foto-container">
                    <div class="foto"><img src="assets/img/profile/Profile.png" alt="Foto Profile"></div>
                </div>
                <div class="profile-saya">
                    <h2>profile saya</h2>
                    <a href="profil">profil</a>
                    <a href="alamat">alamat</a>
                    <a href="#">ubah kata sandi</a>
                    <a href="#">ubah kata sandi</a>
                    <a href="#">rekening bank</a>
                </div>
                <div class="pesanan-saya">
                    <h2>pesanan saya</h2>
                    <a href="#">status pesanan</a>
                    <a href="#">riwayat pesanan</a>
                    <a href="#">chatt</a>
                </div>
            </div>
            <div class="data-alamat">
                <div class="data-header"><h1>data alamat</h1></div>
                <div class="penerima-data">
                    <label>nama penerima</label>
                    <input type="text" nama="dataPenerima" value="" required>
                </div>
                <div class="nopenerima-data">
                    <label>nomor handphone</label>
                    <input type="text" nama="dataNoPenerima" value="" required>
                </div>
                <div class="alamat-data">
                    <label>alamat lengkap</label>
                    <input type="text" nama="dataAlamat" value="" required>
                </div>
                <div class="provinsi-data">
                    <label>provinsi</label>
                    <select name="nama_provinsi" class="from-control">
                        <option value="">--Pilih Provinsi--</option>
                    </select>
                </div>
                <div class="kabkot-data">
                    <label>Kab/Kota</label>
                    <select name="nama_kabkot" class="from-control">
                        <option value="">--Pilih Kab/Kota--</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                type:'post',
                url:'dataprovinsi.php',
                success:function(hasil_provinsi)
                {
                    $("select[name=nama_provinsi]").html(hasil_provinsi);
                }
            });

            $("select[name=nama_provinsi]").on("change",function(){
                //ambil id yg di klik
                var id_provinsi_terpilih = $('option:selected', this).attr("id_provinsi");
                $.ajax({
                    type:'post',
                    url:'datadistrik.php',
                    data:'id_provinsi='+id_provinsi_terpilih,
                    success:function(hasil_distrik)
                    {
                        $("select[name=nama_kabkot]").html(hasil_distrik);
                    }
                })
            });
        });
    </script>
    
<?php include 'layouts/footer.php'; ?>