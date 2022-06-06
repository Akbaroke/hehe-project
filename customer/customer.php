<?php 
include 'header.php';

$id = $_SESSION['customer_id'];
$customer = mysqli_query($koneksi,"select * from customer where customer_id='$id'");
$data = mysqli_fetch_array($customer);

?>
<?php 
$id = $_SESSION['customer_id'];
$customer = mysqli_query($koneksi,"select * from customer where customer_id='$id'");
while($i = mysqli_fetch_array($customer)){ ?>
	<section id="detail">
        <div class="container-detail">
            <div class="link-set">
                <div class="foto-container">
                    <div class="foto"><img src="../assets/img/profile/Profile.png" alt="Foto Profile"></div>
                </div>
                <div class="profile-saya">
                    <h2>profile saya</h2>
                    <span class="hal-profil">profil</span>
                    <span class="hal-alamat">alamat</span>
                    <span class="hal-sandi">ubah kata sandi</span>
                    <span><a class="logout" href="logout">keluar</a></span>
                </div>
            </div>
            <div class="data-profile">
                <div class="data-header"><h1>data profil</h1></div>
                <form action="" method="post" class="form-dataprofil" enctype="multipart/form-data">
                    <ul>
                        <li class="pilih-gambar">
                            <input type="file" name="gambar">
                            <div>
                                <p>Ukuran gambar: maksimal 1000kb / 1MB,</p>
                                <p>Format gambar: JPG, JPEG, PNG</p>       
                            </div>
                        </li>
                        <li class="email-data">
                            <label for="customer_email">Email :</label>
                            <input type="email" name="customer_email" id="customer_email" value="<?= $i['customer_email']; ?>" readonly>
                        </li>
                        <li class="nama-data">
                            <label for="customer_nama">Nama :</label>
                            <input type="teks" name="customer_nama" id="customer_nama" value="<?= $i['customer_nama']; ?>" required>
                        </li>
                        <li class="notlp-data">
                            <label for="customer_hp">Nomor Hp :</label>
                            <input type="teks" name="customer_hp" id="customer_hp" value="<?= $i['customer_hp']; ?>" required>
                        </li>
                        <li>
                            <button type="submit" name="profil" class="btn-profil">simpan</button>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="data-alamat">
                <div class="data-header"><h1>data alamat</h1></div>
                <form action="" method="post" class="form-alamat">
                <?php 
                $id = $_SESSION['customer_id'];
                $customer = mysqli_query($koneksi,"select * from customer where customer_id='$id'");
                while($i = mysqli_fetch_array($customer)){ ?>
                    <ul>
                        <li class="penerima-data">
                            <label for="nama_penerima">nama penerima</label>
                            <input type="text" name="nama_penerima" id="nama_penerima" value="<?= $i['nama_penerima']; ?>" >
                        </li>
                        <li class="nopenerima-data">
                            <label for="hp_penerima">nomor hp penerima</label>
                            <input type="text" name="hp_penerima" id="hp_penerima" value="<?= $i['hp_penerima']; ?>">
                        </li>
                        <li class="alamat-data">
                            <label for="alamat_penerima">alamat penerima</label>
                            <input type="text" name="alamat_penerima" id="alamat_penerima" value="<?= $i['alamat_penerima']; ?>" >
                        </li>
                        <li class="provinsi-data">
                            <label for="provinsi_penerima">provinsi penerima</label>
                            <input type="text" name="provinsi_penerima" id="provinsi_penerima" value="<?= $i['provinsi_penerima']; ?>" >
                        </li>
                        <li class="kabkot-data">
                            <label for="kabkot_penerima">kabkot penerima</label>
                            <input type="text" name="kabkot_penerima" id="kabkot_penerima" value="<?= $i['kabkot_penerima']; ?>" >
                        </li>
                        <li class="kecamatan-data">
                            <label for="kecamatan_penerima">kecamatan penerima</label>
                            <input type="text" name="kecamatan_penerima" id="kecamatan_penerima" value="<?= $i['kecamatan_penerima']; ?>" >
                        </li>
                        <li class="kelurahan-data">
                            <label for="kelurahan_penerima">kelurahan penerima</label>
                            <input type="text" name="kelurahan_penerima" id="kelurahan_penerima" value="<?= $i['kelurahan_penerima']; ?>" >
                        </li>
                        <li class="kodepos-data">
                            <label for="kodepos_penerima">kodepos penerima</label>
                            <input type="text" name="kodepos_penerima" id="kodepos_penerima" value="<?= $i['kodepos_penerima']; ?>" >
                        </li>
                        <li>
                            <button type="submit" name="alamat" class="btn-profil">simpan</button>
                        </li>
                    </ul>
                    <?php } ?>
                </form>
            </div>
            <div class="data-sandi">
                <div class="data-header"><h1>Ubah Password</h1></div>
                <form action="" method="post" class="form-sandi">
                    <ul>
                        <li class="passwordlama-data">
                            <label for="password_lama">password lama</label>
                            <input type="password" name="password_lama" id="password_lama">
                        </li>
                        <li class="passwordbaru-data">
                            <label for="password_baru">password lama</label>
                            <input type="password" name="password_baru" id="password_baru">
                        </li>
                        <li class="konfir-passwordbaru-data">
                            <label for="konf_password_lama">password lama</label>
                            <input type="password" name="konf_password_baru" id="konf_password_baru">
                        </li>
                        <li>
                            <button type="submit" name="sandi" class="btn-profil">simpan</button>
                        </li>
                    </ul>
                </form>
            </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../assets/js/customer.js"></script>
<?php } ?>
<?php

function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpawal = $_FILES['gambar']['tmp_name'];

    if( $error === 4 ){
        echo "<script> 
                alert('pilih gambar terlebih dahulu!');
            </script>";
        echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "<script> 
                alert('Yang anda upload bukan gambar!');
            </script>";
        echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
        return false;
    }

    if( $ukuranfile > 1000000 ) {
        echo "<script> 
                alert('Ukuran gambar terlalu besar! (Max.1MB)');
            </script>";
        echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpawal, '../assets/img/user/' . $namaFileBaru);
    return $namaFileBaru;
}

if (isset($_POST['profil'])){
    $customer_nama = htmlspecialchars($_POST["customer_nama"]);
    $customer_hp = htmlspecialchars($_POST["customer_hp"]);
    $foto_profil = '';

    $gambar = upload();
    if(!$gambar){
        mysqli_query($koneksi, "UPDATE customer set 
        customer_nama = '$customer_nama',
        customer_hp = '$customer_hp',
        foto_profil = '$foto_profil'
        WHERE customer_id = '$id'
        ");
        echo "<script>alert('data berhasil tersimpan');</script>";
        echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
    }else{
        mysqli_query($koneksi, "UPDATE customer set 
        customer_nama = '$customer_nama',
        customer_hp = '$customer_hp',
        foto_profil = '$gambar'
        WHERE customer_id = '$id'
        ");
        echo "<script>alert('data berhasil tersimpan');</script>";
        echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
    }
}

if (isset($_POST['alamat'])){
    $nama_p = htmlspecialchars($_POST["nama_penerima"]);
    $hp_p = htmlspecialchars($_POST["hp_penerima"]);
    $alamat_p = htmlspecialchars($_POST["alamat_penerima"]);
    $provinsi_p = htmlspecialchars($_POST["provinsi_penerima"]);
    $kabkot_p = htmlspecialchars($_POST["kabkot_penerima"]);
    $kecamatan_p = htmlspecialchars($_POST["kecamatan_penerima"]);
    $kelurahan_p = htmlspecialchars($_POST["kelurahan_penerima"]);
    $kodepos_p = htmlspecialchars($_POST["kodepos_penerima"]);
    $alamat_lengkap = $nama_p.','.$hp_p.','.$alamat_p.','.$provinsi_p.','.$kabkot_p.','.$kecamatan_p.','.$kelurahan_p.','.$kodepos_p;

    mysqli_query($koneksi, "UPDATE customer set 
    nama_penerima = '$nama_p',
    hp_penerima = '$hp_p',
    alamat_penerima = '$alamat_p',
    provinsi_penerima = '$provinsi_p',
    kabkot_penerima = '$kabkot_p',
    kecamatan_penerima = '$kecamatan_p',
    kelurahan_penerima = '$kelurahan_p',
    kodepos_penerima = '$kodepos_p',
    alamat_lengkap_penerima = '$alamat_lengkap'
    WHERE customer_id = '$id'
    ");
    echo "<script>alert('data berhasil tersimpan');</script>";
    echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
}

if (isset($_POST['sandi'])){
    // var_dump($_POST);
    $pw_lama = md5(htmlspecialchars($_POST["password_lama"]));
    $pw_baru = htmlspecialchars($_POST["password_baru"]);
    $pw_konfbaru = htmlspecialchars($_POST["konf_password_baru"]);

    $id = $_SESSION['customer_id'];
    $customer = mysqli_query($koneksi, "SELECT * FROM customer WHERE customer_id='$id' and customer_password='$pw_lama'");
    $cocok = mysqli_fetch_array($customer);
    if($cocok){
        if($pw_baru == $pw_konfbaru){
            $simpan_pw_baru = md5($pw_konfbaru);
            mysqli_query($koneksi, "UPDATE customer set customer_password='$simpan_pw_baru' WHERE customer_id = '$id'");
            echo "<script>alert('Password Baru BERHASIL di simpan');</script>";
            echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
        }else{
            echo "<script>alert('Konfirmasi Password TIDAK SAMA !');</script>";
            echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
        }
    }else{
        echo "<script>alert('Password Lama SALAH !');</script>";
        echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
    }
}

?>


<?php include 'footer.php'; ?>