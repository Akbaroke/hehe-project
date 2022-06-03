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
        <div class="link-set">
            <div class="foto-container">
                <div class="foto"><img src="assets/img/profile/Profile.png" alt="Foto Profile"></div>
                <div class="username">Username</div>
            </div>
            <div class="profile-saya">
                <h2>profile saya</h2>
                <a href="#">profil</a>
                <a href="#">alamat</a>
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
        <div class="data-profile">
            <div class="data-header"><h1>data profile</h1></div>
            <div class="pilih-gambar">
                <input type="file" name="foto-profile">
                <div>
                    <p>Ukuran gambar: maksimal 1000kb / 1MB,</p>
                    <p>Format gambar: JPG, JPEG, PNG</p>       
                </div>
            </div>
            <div class="email-data">
                <label>email login</label>
                <input type="text" nama="dataEmail" value="email@gmail.com" readonly>
            </div>
            <div class="nama-data">
                <label>nama lengkap</label>
                <input type="text" nama="dataNama" value="" required>
            </div>
            <div class="notlp-data">
                <label>nomor telepon</label>
                <input type="text" nama="dataNotlp" value="" required>
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
                <label>profinsi</label>
            </div>
        </div>
    </section>
    
<?php include 'layouts/footer.php'; ?>