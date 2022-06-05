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
    </section>
    
<?php include 'layouts/footer.php'; ?>