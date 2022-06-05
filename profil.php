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
                    <span class="hal-profil">profil</span>
                    <span class="hal-alamat">alamat</span>
                    <span class="hal-sandi">ubah kata sandi</span>
                </div>
            </div>
            <div class="data-profile">
                <div class="data-header"><h1>data profil</h1></div>
                <form action="" method="post" class="form-dataprofil">
                    <div class="pilih-gambar">
                        <input type="file" name="foto-profile">
                        <div>
                            <p>Ukuran gambar: maksimal 1000kb / 1MB,</p>
                            <p>Format gambar: JPG, JPEG, PNG</p>       
                        </div>
                    </div>
                    <div class="email-data">
                        <label>email login</label>
                        <input id="form-profil" type="text" nama="dataEmail" value="email@gmail.com" readonly>
                    </div>
                    <div class="nama-data">
                        <label>nama lengkap</label>
                        <input id="form-profil" type="text" nama="dataNama" value="" required>
                    </div>
                    <div class="notlp-data">
                        <label>nomor telepon</label>
                        <input id="form-profil" type="text" nama="dataNotlp" value="" required>
                    </div>
                    <button class="btn-profil" type="submit">simpan</button>
                </form>
            </div>
            <div class="data-alamat">
                <div class="data-header"><h1>data alamat</h1></div>
                <form action="" method="post" class="form-alamat">
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
                        <input type="text" nama="dataProvinsi" value="" required>
                    </div>
                    <div class="kabkot-data">
                        <label>Kab/Kota</label>
                        <input type="text" nama="dataKabkot" value="" required>
                    </div>
                    <div class="kecamatan-data">
                        <label>Kecamatan</label>
                        <input type="text" nama="dataKecamatan" value="" required>
                    </div>
                    <div class="kelurahan-data">
                        <label>Kelurahan</label>
                        <input type="text" nama="dataKelurahan" value="" required>
                    </div>
                    <div class="kodepos-data">
                        <label>KodePos</label>
                        <input type="text" nama="dataKodepos" value="" required>
                    </div>
                    <button class="btn-profil" type="submit">simpan</button>
                </form>
            </div>
            <div class="data-sandi">
                <div class="data-header"><h1>Ubah Password</h1></div>
                <form action="" method="post" class="form-sandi">
                    <div class="passwordlama-data">
                        <label>password lama</label>
                        <input type="password" nama="passowordLama" value="" required>
                    </div>
                    <div class="passwordbaru-data">
                        <label>password baru</label>
                        <input type="password" nama="passowordBaru" value="" required>
                    </div>
                    <div class="konfir-passwordbaru-data">
                        <label>konfirmasi password baru</label>
                        <input type="password" nama="konfir-passowordBaru" value="" required>
                    </div>
                    <button class="btn-profil" type="submit">simpan</button>
                </form>
            </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="assets/js/profil.js"></script>
    
<?php include 'layouts/footer.php'; ?>