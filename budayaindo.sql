-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 12:11 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budayaindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `user_admin` varchar(15) NOT NULL,
  `pass_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `user_admin`, `pass_admin`) VALUES
(1, 'Khalifia Mutiara', 'piamutiara', 'd07525c21d666e35c3bb3d3c9021176d'),
(2, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `gambar_artikel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `gambar_artikel`) VALUES
(1, 'Tari Ratoeh Jaroe Aceh yang memukau di Opening Asian Games Jakarta-Palembang 2018', 'Pembukaan Asian Games 2018 berlangsung gegap gempita. Tari Ratoeh Jaroe ditampilkan secara kolosal. Koreografer tarian ini adalah Denny Malik, mantan penari dan penyanyi yang pernah populer dengan lagu Jalan-Jalan Sore (JJS) di era 90-an. Kemegahan tarian ini salah satunya terlihat dari jumlah penari yang dilibatkan, yang mencapai 1.600 penari yang terdiri dari siswa SMA se-DKI Jakarta.', 'ratoeh jaroe.jpeg'),
(2, 'Sasando', 'Sasando, alat musik dawai yang dimainkan dengan cara dipetik, menghasilkan instrumen musik yang indah dan romantis. Sasando berasal dari pulau Rote, Nusa Tenggara Timur.', '1545289202_SASANDO.jpg'),
(3, 'Seni Budaya Milik Indonesia Yang Kini Mendunia, Apa Saja?', 'Berbicara mengenai kesenian, Indonesia rupanya tidak ingin kalah dengan negara lain. Bila di China ada beragam kesenian layaknya barongsai, di negara kita pun juga ada beragam kesenian lokal.', 'Seni-Budaya-Milik-Indonesia-Yang-Kini-Mendunia-Apa-Saja.jpg'),
(4, 'Kiny Cultura Indonesia Punya Misi Mempromosikan Budaya Indonesia di Kancah Internasional', 'Kiny Cultura Indonesia adalah salah satu Yayasan yang peduli dengan pengembangan kebudayaan di Indonesia. Yayasan Kiny Cultura Indonesia yang berdiri sejak tahun 2016 merupakan anggota dari CID UNESCO (Conseil International de la Danse) dan pendiri South Jakarta Section dari CID UNESCO.', 'kiny-cultura-indonesia-punya-misi-mempromosikan-budaya-indonesia-di-kancah-internasional.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id_pages` int(20) NOT NULL,
  `judul_pages` varchar(200) NOT NULL,
  `isi_pages` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id_pages`, `judul_pages`, `isi_pages`) VALUES
(1, 'Sejarah Budaya Indonesia', 'Sejarah Kebudayaan Indonesia sedang dibahas perkembangannya dalam setiap periode. Wilayah Indonesia memiliki banyak pulau yang dipisahkan oleh laut dan selat memiliki sejarah perkembangan budaya tidak seragam.\r\n\r\nDua faktor utama berperan dalam membentuk budaya Indonesia saat ini. Dalam perkembangan, ada unsur-unsur yang mendasari pengembangan unsur-unsur lain, yaitu unsur-unsur agama. Ini memberikan pandangan kelahiran hidup.  Sejarah Kebudayaan Indonesia membahas agama dan filsafat yang berkembang di Indonesia.\r\n\r\nPerbedaan utama pendalaman sektarian karena akulturasi dengan lapisan budaya yang harus dipenuhi. Sampai saat ini kehidupan beragama di Indonesia berjalan dengan baik, toleransi, dan melanjutkan tradisi dan budaya kehidupan, diberbagai kelompok-kelompok maupun etnis besar atau kecil.'),
(2, 'Provinsi Indonesia', 'Di Indonesia saat ini memiliki 34 Provinsi yang tersebar di seluruh nusantara, dari 34 provinsi tersebut tentunya memiliki logo provinsi berbeda-beda yang mencirikan khas daerah masing-masing. Secara astronomis, Indonesia terletak diposisi 96° BT hingga 141° BT. Akibatnya, wilayah Indonesia terbagi menjadi tiga zona waktu yaitu WIB (Waktu Indonesia Barat), WITA (Waktu Indonesia bagian Tengah), dan WIT (Waktu Indonesia Timur). Pembagian waktu ini diatur dalam Keputusan Presiden Republik Indonesia Nomor 41 Tahun 1987, tentang Pembagian Wilayah Republik Indonesia menjadi 3 Wilayah Waktu. Perbedaan waktu antara WIB, WITA dan WIT selisihnya kurang lebih satu hingga dua jam. WIB memiliki selisih waktu satu jam dengan WITA, dan selisih dua jam dengan WIT.'),
(3, 'Tentang', 'Halo perkenalkan nama saya Khalifia Mutiara Andiarini, mahasiswi dari Universitas Gunadarma.\r\n\r\nTujuan mendirikan website ini agar para pembaca atau warga masyarakat yang sedang berpergian ke provinsi yang dituju mudah untuk mencari informasi pengenalan budaya indonesia yang tersedia di website ini. ');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(35) NOT NULL,
  `nama_prov` varchar(200) NOT NULL,
  `isi_prov` longtext NOT NULL,
  `gambar_prov` varchar(200) NOT NULL,
  `isi_rmh` mediumtext NOT NULL,
  `isi_pakaian` mediumtext NOT NULL,
  `isi_tari` mediumtext NOT NULL,
  `isi_senjata` mediumtext NOT NULL,
  `isi_alat` mediumtext NOT NULL,
  `isi_mkn` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama_prov`, `isi_prov`, `gambar_prov`, `isi_rmh`, `isi_pakaian`, `isi_tari`, `isi_senjata`, `isi_alat`, `isi_mkn`) VALUES
(1, 'Provinsi Jawa Barat', 'Budaya Sunda merupakan salah satu kekayaan budaya yang dimiliki oleh Negeri Indonesia. Sebagai salah satu akar budaya nasional, budaya Sunda sebenarnya lahir karena tradisi yang dianut dan dikembangkan oleh suku Sunda yang kebanyakan tinggal di provinsi Jawa Barat. Oleh karena itu, banyak sekali yang mengidentikkan budaya Sunda dengan budaya Jawa Barat. Karakteristik kuat dari budaya Sunda terletak pada sopan santun dan keramah tamahan suku Sunda. Maka tak heran, masyarakat Jawa Barat terkenal murah senyum, ramah, lemah lembut, sopan dan menghargai orang yang lebih tua.', 'bandung.jpeg', 'Salah satu contoh rumah adat Jawa Barat dinamakan Keraton Kasepuhan Cirebon yang di depannya terdapat pintu gerbang. Keraton Kasepuhan Cirebon ini terdiri dari 4 ruangan. Jinem atau pendopo untuk para pengawal/penjaga keselamatan Sultan. Pringgodani, tempat Sultan memberi perintah kepada adipati. Prabayasa, tempat menerima tamu istimewa Sultan dan Panembahan, ruang kerja dan istirahat Sultan.', 'Pakaian adat pria Jawa Barat berupa tutup kepala (destar), berjas dengan leher tertutup (jas tutup). Ia juga memakai kalung, sebilah keris yang terselip di pinggang bagian depan serta berkain batik. Sedangkan wanitanya memakai baju kebaya, kalung, dan berkain batik. Beberapa hiasan kembang goyang menghiasi bagian atas kepalanya. Begitu pula rangkaian bunga melati yang menghiasi rambut yang disanggul. Pakaian ini berdasarkan adat Sunda.', 'Tari Merak, sebuah tari yang mengisahkan kehidupan burung merak yang serba indah dan memukau.', 'Di Jawa Barat senjata tradisional yang terkenal adalah kujang. Pada mata kujang terdapat 1-5 buah lubang dan sarungnya terbuat dari kain hitam. Senjata lainnya adalah keris kirompang, keris kidongkol, golok, bedok, panah bambu, panah kayu dan tombak.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. Ornare arcu dui vivamus arcu felis. Egestas integer eget aliquet nibh praesent.', 'Karedok adalah makanan yang terbuat dari bahan sayuran segar dan mentah. Bahan utama sayuran untuk membuatnya antara lain taoge, mentimun, kol, kacang panjang, daun kemangi, dan terong. Kemudian diberi saus bumbu kacang yang khas, yang terbuat dari cabai merah, bawang putih, kacang tanah, air asam, gula merah, garam, terasi dan kencur.'),
(2, 'Provinsi Sulawesi Selatan', 'Salah satu kebiasaan yang cukup dikenal di Sulawesi Selatan adalah Mappalili. Mappalili (Bugis) atau Appalili (Makassar) berasal dari kata palili yang memiliki makna untuk menjaga tanaman padi dari sesuatu yang akan mengganggu atau menghancurkannya. Mappalili atau Appalili adalah ritual turun-temurun yang dipegang oleh masyarakat Sulawesi Selatan, masyarakat dari Kabupaten Pangkep terutama Mappalili adalah bagian dari budaya yang sudah diselenggarakan sejak beberapa tahun lalu. Mappalili adalah tanda untuk mulai menanam padi. Tujuannya adalah untuk daerah kosong yang akan ditanam, disalipuri (Bugis) atau dilebbu (Makassar) atau disimpan dari gangguan yang biasanya mengurangi produksi.', 'Makassar.jpg', 'Rumah tradisional yang berasal dari Sulawesi Selatan disebut dengan Rumah Tongkonan. Rumah ini memiliki desain dan arsitektur unik. Karakteristik rumah ini ada pada atapnya yang dibuat berbeda dengan rumah tradisional daerah lainnya.', 'Untuk suku bugis, pakaian tradisional yang dikenakan oleh anak laki-laki adalah tpe, songkok pute passapu, lopasabbe, pakambang dan waju kasa. Sedangkan untuk perempuan antara lain terdiri dari tope, jempang, waju ponco/waju pellaopella, lipa’sabbe, waju bella dada. Lalu untuk suku Toraja menggunakan pio, baju pokko’, seppa’, sambu serta bayu toraya untuk pakaian sehari-hari. Dan untuk pakaian upacara menggunakan passapu’. Bayu toraya, serta salembang.', 'Asal dari Tari Kipas Pakarena adalah daerah Provinsi Sulawesi Selatan, tepatnya daerah Goa. Dengan memainkan kipas, tarian ini dibawakan oleh para penari wanita dengan berbusana adat dan menari dengan gerakannya. Para penari berbusana berbusana adat dan diiringi musik pengiring yang dimainkan dari alat musik tradisional Indonesia yang sering disebut dengan Gondrong Rinci.', 'Badik raja adalah jenis badik yang berasal dari daerah Kajuara, Kabupaten Bone. Masyarakat sekitar percaya bila badik bernama lain gencong raja ata bontoala ini dibuat oleh mahluk halus, tak heran bila nilai sakral yang dimilikinya menjadi sangat tinggi. Badik raja berukuran agak besar dengan panjang antara 20 sd 25 cm. Bentuknya seperti badik lampo battang dengan bilah yang membungkuk dan perut bilah yang membesar. Badik ini dibuat dari logam kualitas tinggi dan kerap dilengkapi dengan pamor indah di bagian hulunya, seperti pamor timpalaja atau pamor mallasoancale. Sesuai namanya, senjata tradisional Sulawesi Selatan ini dahulunya kerap digunakan oleh para raja-raja Bone.', 'Alat musik ini adalah sejenis alat musik yang dimainkan dengan cara dipetik seperti halnya gitar. Namun kacaping hanya memiliki 2 string atau senar yang dapat mengeluarkan bunyi yang indah jika dimainkan dengan ketelatenan. Kacaping sendiri bentuknya menyerupai perahu layar yang sering dimainkan pada acara-acara pernikahan, upacara adat maupun upacara penyambutan.', 'Sop Konro merupakan salah satu makanan tradisional yang berasal dari Sulawesi Selatan. Sop ini terbuat dari bahan dasar iga atau daging sapi. Sop Konro memiliki kuah berwarna gelap yang berasal dari buah kluwek.'),
(3, 'Provinsi Papua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. Ornare arcu dui vivamus arcu felis. Egestas integer eget aliquet nibh praesent.', 'Raja-Ampat-islands-West-Papua-Indonesia.-Image-by-JonesShimlock-Secret-Sea-Visions.jpg', 'Rumah Ebai dihuni oleh perempuan dewasa. Ebai berasal dari kata ebe yang berarti tubuh dan ai yang berarti perempuan. Ebai bermakna perempuan merupakan tubuh bagi kehidupan sebelum seseorang lahir di dunia. Rumah Ebai memiliki ukuran yang lebih kecil dan pendek dibandingkan dengan rumah Honai. Rumah Ebai terletak di bagian sisi kiri atau kanan dari rumah Honai yang pintunya tidak sejajar dengan rumah Honai. Di rumah Ebai inilah biasanya perempuan melakukan berbagai kegiatannya. Di sini pula, para ibu akan mengajarkan kepada anak-anak mereka tentang beragam hal sebelum sang anak menikah nanti.', 'Rok rumbai ini dikhususkan untuk para wanita. Bahan yang digunakan untuk membuat rok rumbai juga berasal dari bahan alami yaitu sagu kering atau ijuk. Pemilihan bahan alami untuk pembuatannya inilah yang membuat pakaian adat Papua sangat unik. Pada beberapa masyarakat Papua yang tinggal di pedalaman, mereka mengenakan rok rumbai tanpa memakai atasan. Umumnya, mereka menggunakan lukisan motif khas Papua untuk menutupi bagian atas tubuh mereka. Namun, ada juga masyarakat Papua yang melengkapi penggunaan rok rumbai ini dengan hiasan kepala dari burung kasuari atau berasal dari daun sagu kering. Selain dikenakan dalam kegiatan sehari-hari, rok rumbai ini juga dikenakan untuk kegiatan upacara adat istiadat masyarakat Papua.', 'Tari Sajojo, tarian tradisional perekat budaya. Wajib bagi masyarakat Indonesia mencintai dan bangga pada kebudayaan di tanah air. Dalam banyak literasi, pengamat budaya menyebutkan, tarian ini sudah ada sejak 1990-an.', 'Bila pada umumnya terbuat dari bilah logam, bilah Belati Papua justru terbuat dari tulang kaki burung endemik Papua yaitu burung Kasuari. Tulang kaki burung ini dipilih karena mudah dibentuk dan ditajamkan tapi tetap memiliki struktur yang kuat. Pada gagang atau pegangan senjata tradisional Papua ini biasanya juga dilengkapi dengan hiasan bulu burung Kasuari atau serat alam.', 'Tifa merupakan alat musik khas Indonesia bagian Timur, khususnya Maluku dan Papua. Alat musik ini bentuknya menyerupai kendang dan terbuat dari kayu yang di lubangi tengahnya. tifa dari papua biasanya lebih panjang dan memiliki pegangan di salah satu bagian alat musiknya. Sedangkan, tifa dari Maluku memiliki ukuran yang melebar dan tidak terdapat pegangan di sisinya.', 'Papeda adalah makanan berupa bubur sagu khas Maluku dan Papua yang biasanya disajikan dengan ikan tongkol atau mubara yang dibumbui dengan kunyit. Papeda berwarna putih dan bertekstur lengket menyerupai lem dengan rasa yang tawar. Papeda merupakan makanan yang kaya serat, rendah kolesterol, dan cukup bernutrisi.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id_pages`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id_pages` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
