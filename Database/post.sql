-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 01:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preneuracademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID_POST` char(10) NOT NULL,
  `ID_CT` char(10) NOT NULL,
  `ID_ADM` char(10) NOT NULL,
  `JUDUL_POST` varchar(200) DEFAULT NULL,
  `KONTEN_POST` text DEFAULT NULL,
  `TGL_POST` varchar(20) DEFAULT NULL,
  `FOTO_POST` varchar(100) DEFAULT NULL,
  `UPDT_TRAKHIR` varchar(20) DEFAULT NULL,
  `ST_POST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID_POST`, `ID_CT`, `ID_ADM`, `JUDUL_POST`, `KONTEN_POST`, `TGL_POST`, `FOTO_POST`, `UPDT_TRAKHIR`, `ST_POST`) VALUES
('PS00001', 'CT0002', 'ADM0000', 'Bagaimana-Caranya-Membuat-Konten-yang-Viral', '&lt;p&gt;Banyak para mastah iklan yang sekarang berlomba membuat konten viral \r\nuntuk bisa menghemat biaya iklan. Apalagi sekarang fb ads dan iklan \r\nberbayar lainnya mulai dikenakan pajak 10% dan langsung ditarik dari \r\nbudget iklan kita loh.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;&lt;em&gt;“Gimana ya caranya viralin konten kita, biar bisa jangkau banyak orang secara organik alias tanpa ads berbayar..??”&lt;/em&gt;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Mas Fardi Yandi founder dari Social Kreatif kupas tuntas hal tersebut\r\n di YEA Class yang berjudul the Science of being Viral, Sabtu kemarin. \r\nTernyata konten viral itu bisa kita buat loh dan ada polanya. Tahukah \r\nsobat eagles, konten yang dibuat oleh Mas Fardi Yandi ini sudah \r\nmenjangkau ratusan ribu reach secara organik tanpa ads berbayar.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Waduh, kebayang gak berapa juta tuh kalau pake fb ads buat menjangkau ratusan ribu orang..??&amp;nbsp;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Nah makanya kita bahas ini kemarin karena dengan konten viral kita \r\nbisa menghemat biaya iklan yang jutaan tadi. Kan lumayan uangnya bisa \r\nkita alokasikan untuk keperluan yang lain.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Ok, jadi gimana caranya..?&amp;nbsp;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Sebelum dibahas, kita ubah dulu persepsi viral menjadi ‘bisa \r\ndijangkau banyak orang’. Jadi, bagaimana caranya agar konten kita bisa \r\ndijangkau banyak orang tanpa ads..?&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Perlu diingat, bahwa viral itu butuh proses dalam menemukan pola \r\nviralnya. Beda bisnis, beda tujuan, beda target pasar, tentu berbeda \r\njuga cara jangkaunya. Dan dalam pembahasan ini kita batasi viral hanya \r\ndengan cara yang positif saja ya, baik itu di &lt;a href=&quot;https://yea-indonesia.com/2020/10/26/instagram-versus-tiktok-better-mana-sih/&quot;&gt;instagram maupun tiktok&lt;/a&gt;.&amp;nbsp;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Stepnya:&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;&lt;strong&gt;1. Purpose&lt;/strong&gt;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Jangan mulai dari how to, mulai dari WHY. Mengapa konten kita harus \r\nviral, mengapa saya bangun bisnis ini, mengapa saya buat konten ini, \r\nmengapa saya posting hal ini, dan ‘why’ lainnya yang bisa menjadi \r\nfondasi dari bisnis atau konten kita. Karena tidak setiap saat postingan\r\n kita akan selalu di like banyak orang. Mungkin satu atau dua bulan kita\r\n masih dalam spirit atau semangat yang kuat, tapi dalam bulan ketiga \r\njika masih tidak ada yang like apakah kita akan terus melanjutkan bisnis\r\n atau posting konten kita..? Nah ‘why’ yang kuatlah yang akan \r\nmengingatkan kita atau menjadi trigger bagi kita untuk tetap membuat \r\nkonten dan melanjutkan bisnis kita.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;&lt;strong&gt;2. Konsep&lt;/strong&gt;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Ok, jika sudah punya purpose maka selanjutnya kita harus mengetahui konsep atau anatomy of viral content. Terdiri dari 2 yaitu:&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;–&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Konten yang worth untuk di-shared oleh orang lain à ada 1 \r\nchannel marketing yang masih berlaku dan terpercaya dari jaman nenek \r\nmoyang hingga sekarang, yaitu MLM alias dari mulut ke mulut. Ketika ada \r\npostingan story teman kita yang menurut kita ‘gue banget nih’, kita \r\ncenderung ingin share postingan tersebut. Ada satu psikologi manusia \r\nyang bersifat mengikuti sesuatu yang dilakukan oleh orang terdekat atau \r\norang kebanyakan. Di sinilah awal dari proses viralnya suatu konten. \r\nJadi, apakah konten kita layak untuk dishare oleh orang lain..?&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;–&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Konten yang terbuka untuk semua orang à konten yang harus \r\nbisa dipahami atau relate dengan semua orang. Jika kita perhatikan saat \r\nini banyak orang membuat konten microblog dengan istilah atau kata-kata \r\nyang hanya dimengerti oleh orang/kalangan tertentu, padahal ini hanya \r\nakan memperkecil kemungkinan share atau jangkauan. Dan konten yang lebih\r\n membumi atau relate dengan kebanyakan netizen justru ini yang membuka \r\npeluang menuju viral.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Banyak orang posting tentang prestasi yang telah diraih. Tapi \r\nbagaimana jika posting tentang ‘bagaimana caranya agar kamu juga bisa \r\nberprestasi atau mendapatkan beasiswa a’ misalkan. Tentu akan jauh lebih\r\n tinggi share dan saved nya karena orang lain mendapatkan benefit dari \r\npostingan kita.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;&lt;strong&gt;3 faktor yang membuat sebuah &lt;a href=&quot;https://medium.com/@fattul/10-menit-membuat-konten-yang-mudah-tersebar-di-medsos-konten-viral-dfc60af6dea4&quot;&gt;konten bisa menjadi viral:&lt;/a&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;1.&amp;nbsp; Konten yang membangkitkan emosi: sedih, marah, bahagia, humor, \r\nharu, menyentuh. Angkat isu atau suatu trend dan kaitkan dengan bisnis \r\natau konten kita.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;2.&amp;nbsp; Konten yang menyampaikan pesan positif: harus sesuai dengan value kita.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;3.&amp;nbsp; Konten yang mengajarkan sesuatu: tips, DIY, ilmu terapan&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;&lt;strong&gt;Yuk ikuti rules-nya:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;# Social currency = orang lain senang membicarakan hal yang membuat mereka terlihat pintar.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;# Keresahan = hal – hal sederhana yang belum bisa diungkapkan netizen, kita ungkapkan menjadi sebuah konten&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;# Emotion = Kalau kamu peduli, kamu pasti akan share tentang hal ini&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;# General Issue = Semakin umum sesuatu, maka semakin besar kesempatan\r\n untuk dibagikan ke orang lain. Gimana caranya buat tahu trend..? main \r\ntwitter, baca medium.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;# Practical value = hal – hal praktikal yang berguna untuk orang sekitar&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;# Building stories = cerita yang belum mampu orang sampaikan, tapi mampu kita sampaikan&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;&lt;strong&gt;Quick tips:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Pakai Instagram = grabbing attention with visual, consuming time duration, hashtag&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Pakai tik tok = grabbing attention with audio, words, or the visual. 2 detik pertama, hashtag&lt;/p&gt;', '2020-11-25', '20170507_0705044.jpg', '2020-11-25', 1),
('PS00002', 'CT0004', 'ADM0000', 'Cara-Mudah-Memahami-Business-Model-Canvas', '&lt;p&gt;Apakah kamu sering dengar istilah business model canvas atau business model generation..?&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Business model generation, suatu buku karangan Alexander Osterwalder \r\ndan kawan-kawannya yang sebagian besarnya adalah doctor dan professor di\r\n bidang manajemen. Menurut saya buku ini adalah buku yang terbaik dalam \r\n10 tahun terakhir ini. Hanya saja, bagi orang awam memang tidak mudah \r\nuntuk memahaminya dalam waktu singkat.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Oleh karena itu saya akan berusaha untuk menjelaskan dengan waktu \r\nyang sangat singkat agar kita semua terutama yang awam untuk bisa \r\nmemahami Business Model Canvas (BMC).&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Saya akan menggunakan pendekatan yang disebut dengan input output \r\nanalysis. Bagi saya input ouput analysis adalah induknya framework, \r\nkarena bisa digunakan tidak hanya untuk bisnis saja. Saya mendapatkan \r\nframe work ini justru dari sekolah teknik elektro dimana saya sekolah \r\ndulu.&lt;strong&gt;&lt;br&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br&gt;&lt;/strong&gt;Nah apa sih input output analysis itu..?\r\n\r\n\r\n\r\n&lt;/p&gt;&lt;p&gt;Pada dasarnya terdiri dari 3 bagian yaitu input, proses, dan output. \r\nKalau dalam bisnis mungkin kita sering mendengar istilah hulu ke hilir, \r\ndimana hulu sebagai input, hilir sebagai output, dan perusahaan sebagai \r\nproses.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;1. Hulu&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Di sini kita akan menemui yang namanya supplier, kontraktor, petani, atau penambang.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;2. Perusahaan&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Tentunya di sini kita akan menemukan semua proses yang mengolah semua\r\n bahan dari hulu tadi untuk dibuat suatu produk baru yang diinginkan. \r\nPerusahaan itu bisa berupa manajemen, atau business owner yang punya \r\nsuatu bisnis, atau bisa jadi berupa tempat produksi.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;3. Hilir&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Di sini ujung dari sampainya produk yang telah diolah tadi, bisa \r\nberupa konsumen, toko eceran, dan tempat lainnya yang menerima atau \r\nmembeli produk yang telah diolah tadi.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Jika air mengalirnya dari hulu ke hilir, maka dalam bisnis terjadi \r\nsebaliknya. Uang tentunya akan mengalir dari hilir/konsumen ke \r\nperusahaan (keluar dalam bentuk operasional cost), baru kemudian ke \r\nhulu/supplier.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Selisih dari pemasukan dan pengeluaran menjadi keuntungan. Atau bisa \r\njuga terjadi kerugian jika pengeluaran lebih tinggi daripada pemasukan. \r\nItu yang disebut dengan laba rugi.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Apa korelasinya BMC dan input output analysis..?&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Kita mulai dari hilir yaitu permintaan pasar/konsumen. Siapa yang sebenarnya menjadi target pasar kita. itu disebut sebagai &lt;strong&gt;customer segmen&lt;/strong&gt; dalam BMC.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;ul&gt;&lt;li&gt;Apa yang mereka butuhkan..?&lt;/li&gt;&lt;li&gt;Masalah apa yang akan kita selesaikan..?&lt;/li&gt;&lt;li&gt;Apa keunggulan atau diferensiasi kita dari kompetitor..?&lt;/li&gt;&lt;/ul&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Jawaban pertanyaan ini akan memperbaiki output atau produk yang \r\nkeluar sehingga mempunyai diferensiasi yang kuat. Inilah yang disebut \r\ndengan &lt;strong&gt;value proposition&lt;/strong&gt; dalam BMC. Bisnis bisa dimulai dalam skala kecil dengan mendeliver value proposition tersebut ke tempat customer.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Tapi pada saat kita ingin melebarkan bisnis, maka kita akan membutuhkan saluran distribusi. Itulah yang disebut dengan &lt;strong&gt;channel distribution&lt;/strong&gt; dalam BMC.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Setelah kita mendistribusikan produk ke titik-titik terdekat dari \r\nkonsumen, permasalahan berikutnya adalah bagaimana caranya menarik \r\nkonsumen untuk mengetahui dan datang ke tempat distribusi tersebut. Di \r\nsinilah membutuhkan yang namanya kampanye/promosi.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;BMC tidak hanya dibuat untuk bisnis yang bersifat komersial saja, \r\nmelainkan bisa digunakan juga untuk organisasi non profit. Maka dari itu\r\n BMC juga menyediakan kolom &lt;strong&gt;customer relationship&lt;/strong&gt;.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Untuk menghasilkan value proposition yang tadi kita siapkan, \r\ndibutuhkan suatu proses dalam internal perusahaan yang disebut dengan &lt;strong&gt;key activities&lt;/strong&gt;.\r\n Adalah aktifitas-aktifitas perusahaan untuk membuat bisnisnya berjalan.\r\n Misal membuat produk, melakukan promosi, dan membuat konten harian.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Dalam aktifitas perusahaan tentunya membutuhkan sumber daya, yang disebut dengan &lt;strong&gt;key resources&lt;/strong&gt;. Bisa berupa sumber daya manusia, mesin, dan alat lainnya yang menjadi sumber daya perusahaan.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Ada beberapa proses yang tidak bisa dilakukan dalam internal \r\nperusahaan. Bisa karena alasan perampingan, meminimalisir resiko, atau \r\njuga untuk mempertahankan kefokusan terhadap kegiatan yang memang \r\nmenjadi potensi bagi perusahaan tersebut. Oleh karena itu, proses yang \r\ntidak bisa dijalankan dalam internal perusahaan dilemparkan keluar atau \r\nbekerjasama dengan pihak luar. Ini yang disebut dengan &lt;strong&gt;key partnership&lt;/strong&gt;. Bentuknya bisa berupa supplier, kontraktor, atau outsourcing.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Bagaimana, paham sampai sini..? Baik, kita lanjutkan.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Uang didapat dari konsumen yang membeli produk kita. Dari sini segala\r\n bentuk penjualan akan menghasilkan omset. Ini disebut dengan &lt;strong&gt;revenue stream&lt;/strong&gt;.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Sedangkan segala biaya yang dikeluarkan, baik biaya untuk \r\nmenghasilkan produk/jasa, biaya aktifitas perusahaan, pembayaran ke key \r\npartner, disebut sebagai &lt;strong&gt;cost structure&lt;/strong&gt;. Biaya internal perusahaan bisa dibagi menjadi 2:&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;1. yang sifatnya tetap, disebut fix cost.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;2. yang tidak tetap, disebut variable cost.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Nah, apakah sudah paham sampai di sini..? Ternyata induk &lt;a href=&quot;https://kirim.email/business-model-canvas/&quot;&gt;konsep BMC &lt;/a&gt;sama dengan framework input output analysis. Beda framework beda istilah, namun sesungguhnya serupa nalarnya.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Jadi, kegiatan apa saja nih yang bisa menambah revenue stream teman-teman..?&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Semoga bisa dipahami dan bermanfaat. Sampai jumpa di materi berikutnya..&lt;/p&gt;', '2020-11-18', '20170507_0705045.jpg', '2020-11-18', 1),
('PS00003', 'CT0002', 'ADM0000', 'Solusi-untuk-Pola-Kegagalan-Tempat-Wisata', '&lt;p&gt;Banyak tempat pariwisata di Indonesia yang tidak dikemas dengan baik \r\nsehingga menimbulkan pola kegagalan. Salah satunya sering memukul harga \r\nsehingga yang ada di benak kita bahwa makanan yang ada di tempat wisata \r\nya mahal, padahal tidak semua seperti itu. Ini yang membuat rugi bagi \r\npedagang yang menjual murah makanannya. Nah inilah gunanya perlihatkan \r\nharga di depan agar pengunjung tidak was was dan tidak takut untuk \r\nmembeli. Transparansi harga juga sudah banyak diterapkan di daerah \r\nwisata di luar negeri yang membuat pengunjung nyaman saat membeli.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Nah lalu apa solusi taktis yang dapat diterapkan..?&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;1. Buat alur peta wisata&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Gunanya agar pengunjung tidak bingung dan mendapatkan informasi lebih\r\n mengenai apa saja yang ada di tempat wisata tersebut. Kita juga bisa \r\nmenambahkan keterangan baiknya pengunjung itu mengunjungi tempat mana \r\nterlebih dahulu, disesuaikan keindahan tempatnya sesuai waktu. Misal \r\npagi hari sebaiknya pengunjung ke spot A terlebih dahulu agar dapat \r\nmenikmati sunrise, dan seterusnya.&amp;nbsp;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;2. Selaraskan semua tema di satu tempat wisata&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Misal tema tempatnya romantic, maka semua hal yang ada di tempat \r\nwisata tersebut harus mengikuti tema yang sudah ditetapkan. Termasuk \r\nsuara music dari tiap warung tidak boleh seenaknya sendiri, melainkan \r\nharus mengikuti tema tempat wisata. Agar pengunjung mendapatkan feel-nya\r\n dari tempat itu sehingga akan terkenang dan ingin berkunjung kembali \r\natau merekomendasikan pada yang lain.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;3.&amp;nbsp; Penataan spot&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Harus dipetakan di luar dan di dalam. Agar pengunjung mengerti ada \r\nspot apa saja dan baik user experience-nya. Ini sebenarnya sudah banyak \r\nditerapkan banyak tempat wisata di Indonesia, hanya perlu penataan lebih\r\n baik saja untuk warung dan pedagangnya.&lt;/p&gt;&lt;p&gt;4. Kuliner di tempat wisata&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Harus diselaraskan dengan tema tempat wisata dan ada transparansi \r\nharga agar pengunjung tidak takut untuk membeli. Kalau bisa jangan ada \r\nmakanan lain di luar tema tempat wisata.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;5. Oleh-olehcfgcf&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Juga harus sesuai tema tempat wisata, juga diedukasi pembuatannya dan\r\n harus dikurasi untuk bisa dijual di tempat tersebut, agar pengunjung \r\ntidak kecewa. Dan kalau bisa oleh-olehnya tidak dijual di tempat lain \r\nagar membuat eksklusifitas dan menciptakan rasa kangen bagi pengunjung.&amp;nbsp;&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Semua ini harus dilakukan oleh siapa..?? Bukan oleh pemerintah saja, melainkan semua yang &lt;a href=&quot;https://www.liputan6.com/lifestyle/read/4180172/solusi-kemenparekraf-dongkrak-pariwisata-yang-anjlok-karena-wabah-virus-corona&quot;&gt;peduli pada daerah wisata Indonesia &lt;/a&gt;bisa\r\n ikut andil dalam hal ini. Misal ibu-ibu PKK, pemuda karang taruna, dan \r\nwarga setempat yang ingin memajukan daerah wisatanya.&lt;/p&gt;\r\n\r\n\r\n\r\n&lt;p&gt;Semoga bermanfaat.. &lt;br&gt;&lt;/p&gt;', '2020-12-21', '20170507_0705046.jpg', '2020-12-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID_POST`),
  ADD KEY `FK_KATEGORI` (`ID_CT`),
  ADD KEY `FK_MEMPOSTING` (`ID_ADM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
