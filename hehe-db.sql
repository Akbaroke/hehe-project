-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2022 pada 11.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hehe-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'Fajar Agung', 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_nama` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_hp` varchar(20) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `foto_profil` varchar(500) NOT NULL,
  `nama_penerima` varchar(200) NOT NULL,
  `hp_penerima` varchar(20) NOT NULL,
  `alamat_penerima` varchar(500) NOT NULL,
  `provinsi_penerima` varchar(100) NOT NULL,
  `kabkot_penerima` varchar(100) NOT NULL,
  `kecamatan_penerima` varchar(100) NOT NULL,
  `kelurahan_penerima` varchar(100) NOT NULL,
  `kodepos_penerima` varchar(50) NOT NULL,
  `alamat_lengkap_penerima` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_nama`, `customer_email`, `customer_hp`, `customer_password`, `foto_profil`, `nama_penerima`, `hp_penerima`, `alamat_penerima`, `provinsi_penerima`, `kabkot_penerima`, `kecamatan_penerima`, `kelurahan_penerima`, `kodepos_penerima`, `alamat_lengkap_penerima`) VALUES
(3, 'Fajar Agung Nugroho', 'fnugroho159@gmail.com', '089637524919', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', ''),
(9, 'akbar', 'akbar@gmail.com', '081310725348', 'f039e5f60e85d10bf7b742e65ad931ca', '', '', '', '', '', '', '', '', '', ''),
(10, 'ujang123', 'udin@gmail.com', '02222', 'a76e1dd34e314c2646b1736e4209371b', '629dc43ec77fb.png', 'joni', '05555', 'perum merpati', 'jawa barat', 'sumedang', 'suka mulya', 'sidojo', '123123', 'joni,05555,perum merpati,jawa barat,sumedang,suka mulya,sidojo,123123'),
(14, 'ujang', 'ujang@gmail.com', '01212121', 'ed84089fcb1b864597cf6dc504859d1d', '', '', '', '', '', '', '', '', '', ''),
(15, 'dadang', 'dadang@gmail.com', '01212121', 'f63f1ed278d0cb8f2ede661328779791', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_tanggal` date NOT NULL,
  `invoice_customer` int(11) NOT NULL,
  `invoice_nama` varchar(255) NOT NULL,
  `invoice_hp` varchar(255) NOT NULL,
  `invoice_alamat` text NOT NULL,
  `invoice_provinsi` varchar(255) NOT NULL,
  `invoice_kabupaten` varchar(255) NOT NULL,
  `invoice_kurir` varchar(255) NOT NULL,
  `invoice_berat` int(11) NOT NULL,
  `invoice_ongkir` int(11) NOT NULL,
  `invoice_total_bayar` int(11) NOT NULL,
  `invoice_status` int(11) NOT NULL,
  `invoice_resi` varchar(255) NOT NULL,
  `invoice_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(10, 'kucing'),
(11, 'anjing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(255) NOT NULL,
  `produk_kategori` int(11) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_keterangan` text NOT NULL,
  `produk_jumlah` int(11) NOT NULL,
  `produk_berat` int(11) NOT NULL,
  `produk_foto1` varchar(255) DEFAULT NULL,
  `produk_foto2` varchar(255) DEFAULT NULL,
  `produk_foto3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_kategori`, `produk_harga`, `produk_keterangan`, `produk_jumlah`, `produk_berat`, `produk_foto1`, `produk_foto2`, `produk_foto3`) VALUES
(15, 'MAKANAN KUCING ORI CAT FOOD PREMIUM REPACK 1 KG - Ikan', 10, 19500, 'Makanan kucing Ori cat yang berasal dari negara China tergolong makanan premium\r\n\r\nKibble\r\n- IKAN\r\n- KOTAK\r\n(cantumkan kibble yg di inginkan di kolom KETERANGAN, buka di DISKUSI PRODUK maupun CHAT, tanpa keterangan akan kami kirimkan KIBBLE secara ACAK. NO COMPLAIN !!! )\r\n\r\n\r\nBahan :\r\nkan laut, daging sapi, daging kambing,ragi,kuning telur, taurin,glukosamin,ekstrak yucca,gandum giling, gluten jagung,jagung kuning giling,beras seduh, vitamin E, vitamin C,oat,DHA,Omega 3,L-carnitine,dan mineral,tepung kedalai,produk sampingan gandum,garam dan bumbu alami tian.\r\n\r\nmemperkuat kekebalan tubuh , pertumbuhan pada otot , untuk memperbaiki usus', 50, 1000, '788192794_1.jpg', '', ''),
(16, 'Makanan Kucing Bolt / Cat Food Bolt Repack 1kg Murah Tuna Cat Food - Ikan', 10, 21000, 'Kondisi: Baru\r\nBerat: 1.050 Gram\r\nKategori: Makanan Kucing\r\nEtalase: Makanan Kucing\r\nMakanan Kucing Bolt Repack 1 kg\r\n\r\nTuna Cat Food\r\nrasa : TUNA\r\n\r\nBOLT diformulasikan untuk memenuhi nutrisi standar Profil Nutrisi Makanan Kucing yang disahkan oleh AAFCO (Association of American Feed Control Officials).\r\n\r\nKeunggulan :\r\n- Membuat kulit sehat dan bulu berkilau\r\n- Mempertajam penglihatan\r\n- Membantu menjaga kesehatan gigi\r\n- Mengurangi resiko FLUTD (penyakit saluran kemih pada kucing)\r\n- Meningkatkan sistem imunitas\r\n\r\nKomposisi Produk :\r\nTuna meal, Poultry Meat Meal, Wheat, Corn, Soya Flour, Full Fat Soybean Meal, Taurine, Omega Oil, Choline Choloride, Niacin, Inositol, Multivitamin (AD3, E, C, B1, B2, B6, B12, K3) Biotin, Folic Acid, Chelated Minerals,\r\n\r\nAnalysis :\r\nCrude Protein ........... min 28%\r\nCrude Fat .................. min 9%\r\nCrude Fiber ............... max 4%\r\nMoisture .................... max 10%', 50, 1000, '1154962878_2.jpg', '', ''),
(17, 'PRAMA Snack Anjing 70gr Cemilan Makanan Anjing Doggy Dog Treats - Strawberry', 11, 19800, 'Adalah makanan ringan yang memiliki cita rasa yang sangat disukai anjing. Dengan berbahan daging ayam pilihan berkualitas yang aman dan tidak berbahaya jika diberikan pada anjing anda.\r\n\r\nSnack dapat diberikan kepada anjing sebagai camilan untuk mencegah rasa bosan pada makanan harian anjing.\r\n\r\nMade in Thailand\r\n\r\nTersedia rasa sesuai variant.\r\n\r\nInformasi :\r\n- Simpan di tempat sejuk dan kering,\r\n- HANYA UNTUK HEWAN PELIHARAAN\r\n- Cocok untuk semua jenis anjing\r\n- Setelah dibuka, konsumsi dalam 7 hari\r\n\r\nInstruksi pemberian makan :\r\nPakan sebagai camilan atau hadiah untuk anjing, usia di atas 3 bulan,\r\nBerat Anjing :\r\n- 1-5 kg : 1-2 pcs / hari\r\n- 5-10 kg : 2-3 pcs / hari\r\n- 10-20 kg : 3-5 pcs / hari\r\n- Lebih dari 20 kg : 5-7 pcs / hari', 50, 1000, '1821767086_4.jpg', '', ''),
(18, 'JERHIGH Snack Anjing 70gr Cemilan Makanan Anjing Doggy Dog Treats - Strawberry', 11, 23750, 'Jerhigh merupakan snack atau camilan favorit kesukaan anjing Anda. Snack ini terbuat dari daging ayam dengan berbagai macam varian rasa. Jerhigh cocok untuk camilan anjing Anda maupun sebagai treat selama Anda melatih anjing. Jerhigh mengandung protein, lemak, moisture, vitamin E dan nutrisi lain yang bagus untuk kesehatan anjing Anda.\r\n\r\nKeunggulan Jerhigh:\r\n- Terbuat dari bahan-bahan alami.\r\n- Mengandung Protein dan serat tinggi.\r\n- Mempunyai aroma dan raza yang lezat yang pasti disukai oleh anjing Anda.\r\n- Tidak mengandung bahan pengawet dan pewarna sehingga aman dikonsumsi.\r\n\r\nSpesifikasi:\r\nMade in Thailand\r\nUkuran 70 gram', 50, 1000, '1445347289_3.jpg', '', ''),
(23, 'PROMO makanan kucing merk BOLT Ikan repack kemasan 1kg termurah - BOLT IKAN', 10, 18571, '<p><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Biasakan membaca deskripsi terlebih dahulu!!!</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Ready stock bentuk Ikan Berat bersih makanan 800-1000 gr Random|</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Karne per pack dibuat 23 pcs</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">800 gr 10 pcs</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">900 gr 10 pcs</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">1000 gr 3 pcs</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Semua ditumpuk jadi 1 jadi random</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Makanan Kucing Bolt Repack Pihak bolt hanya menyediakan isi dengan berat 800 - 1000 gr Random per pack karena ini pakan original bolt.</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Mohon untuk dituliskan di note bentuk yang diinginkan, jika tidak ada note nya maka akan kami kirimkan sesuai dengan stock yang ada Notes :</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">*Pengiriman dengan gosend instan maksimal 20kg</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">*Pengiriman dengan grab dan gosend same day maksimal 7-8kg</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">*jika stock bentuk yang di inginkan (ikan/donat) habis maka akan di kirim sesuai stock bentuk yang tersedia</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">*kemasan di ganti berupa plastik bening jika plastik bolt habis</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">* untuk gosend/grab pengiriman hanya menggunakan plastik kresek BOLT diformulasikan untuk memenuhi nutrisi standar Profil Nutrisi Makanan Kucing yang disahkan oleh AAFCO (Association of American Feed Control Officials).</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Keunggulan dari bolt</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">: - Membuat kulit sehat dan bulu berkilau</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">- Mempertajam penglihatan</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">- Membantu menjaga kesehatan gigi</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">- Mengurangi resiko FLUTD (penyakit saluran kemih pada kucing)</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">- Meningkatkan sistem imunitas</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">SYARAT DAN KETENTUAN PENGAJUAN KOMPLAIN :</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Komplain barang WAJIB menyertakan VIDEO UNBOXING PAKET (dari label toko masih utuh sampai proses pembukaan paket).</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Membeli artinya menyetujui syarat ini.</span><br></p>', 50, 1000, '1029223319_5.jpg', '', ''),
(24, 'Royal Canin Adult Persian 400gr Makanan Kucing Repack', 10, 55500, '<p><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Royal Canin Adult Persian 400gr Repack DIJAMIN 100% ASLI, NO MIX!!</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">\"Kelebihan Utama:</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Rambut panjang yang sehat</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Mengurangi hairball</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Membantu kinerja pencernaan</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">ROYAL CANIN Adult Persian Cat Food mengandung serangkaian nutrisi eksklusif untuk meningkatkan daya tahan pelindung luar kulit sehingga kesehatan kulit dan lapisan rambut tetap terpelihara. Rambut yang panjang dapat menyebabkan kucing Persia rentan memuntahkan gumpalan rambut (hairball). Dengan ROYAL CANIN Adult Persian, risiko rambut yang tertelan dapat dieliminasi, terbentuknya hairball dapat terkontrol, dan saluran pencernaan dapat terstimulasi secara alami berkat gabungan dari berbagai jenis serat (termasuk psyllium yang kaya gel).</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Kinerja pencernaan juga lebih terawat dengan adanya asupan protein yang mudah dicerna (L.I.P), prebiotik, dan asam lemak omega 3 &amp; 6. Selain itu, kibble ROYAL CANIN Adult Persian hadir dalam bentuk menyerupai kacang almond dengan bagian permukaan yang mudah diambil oleh kucing sehingga memudahkan proses makan dan mengunyah.</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Kemasan Repack 400gr</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Happy Shopping Paw Parents ^^</span><br></p>', 50, 400, '633027818_6.jpg', '', ''),
(25, 'BOLT DOG 20 KG - MAKANAN ANJING HUSUS EXPEDISI', 11, 303000, '<p>-</p>', 50, 20000, '500256862_7.jpg', '', ''),
(26, 'makanan anjing pureluxe grain free holistic made with turkey 1.8 kg', 11, 344000, '<p><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Mohon chat dulu untuk menanyakan ketersediaan produk sebelum membeli. Terima Kasih.</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">For All Breeds &amp; Sizes</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Natural Nutrition for All Life Stages with added vitamins and essential minerals</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">100% GRAIN FREE</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Absolutely NO corn, soy, wheat, dairy, fillers, by-products, artificial colors or preservatives</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Gluten-Free IngredientsMade in USA</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\"><span style=\"color: rgba(49, 53, 59, 0.96); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 14px;\">Our Elite Adult Turkey Dog formula is for adult dogs who want to be in peak condition whether they are lounging on the sofa or running next to their owner. Nothing is left out in this great tasting, nutritionally satisfying diet.</span><br></p>', 50, 1800, '425708231_8.jpg', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_invoice` int(11) NOT NULL,
  `transaksi_produk` int(11) NOT NULL,
  `transaksi_jumlah` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
