-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 08:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-8_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text,
  `id_kategori` int(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `id_user`, `judul`, `penulis`, `tanggal`, `isi`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mau Jadi Programmer tapi Binggung Mulai dari Mana?', 'Rico', '2020-08-16', 'Banyak orang yang tidak memperoleh pendidikan IT pasti akan berpikir bahwa belajar untuk menjadi programmer itu pasti sulit,    sebut saja Agung mahasiswa fakultas Ekonomi dari salah satu kampus mengatakan \"bagaimana ya cara para programmer membuat kode yang panjang seperti itu dan menyusunnya hingga menjadi satu system? canggih! pasti itu sangat sulit\"\r\n\r\nAlpha Tech Academy merupakan salah satu wadah untuk kalian yang ingin belajar menjadi programmer bahkan jika kalian bukan seorang yang memiliki latar belakang programmer atau IT. \r\n\r\nPada academy ini kalian akan mengikuti 3 fase latihan, mulai dari fase pertama dimana kalian akan belajar dasar-dasar pemrograman, fase kedua kalian akan mendapatakan pelatihan tentang konsep mengembangkan pelatihan sampai dengan fase ketiga kalian akan mendapatkan final project dimana kalian akan diajarkan untuk membuat satu system atau aplikasi.\r\n\r\nSemua pelatihan akan dipandu oleh orang-orang yang profesional dibidangnya, mulai dari sofeware engineer, arsitektur development, infrastucture dan quality engineer etc.\r\nSemua pelatihan yang kalian akan lakukan tidak dikenakan biaya apapun, kalian juga akan mendapatkan uang saku saat mengikuti pelatihan.', 1, '2020-11-25 03:22:28', '2020-11-26 21:22:50'),
(4, 4, 'Mau Bekerja Sebagai Web Developer? Kenali Bidang-bidangnya', 'Luthfi Fathurahman', '2020-08-17', 'Di zaman sekarang ini, menjadi web developer merupakan cita-cita bagi banyak orang. Sebagian orang menganggap web developer adalah pekerjaan yang keren dan juga bergaji sangat besar. Namun, web developer bukan hanya tentang gaji semata. Karena di dalam web developer, ternyata ada beberapa bidang-bidang yang harus kamu ketahui sebelum terjun ke dalamnya. Berikut adalah bidang-bidangnya. 1. Front-End Developer Front-End merupakan bagian dari website yang dapat dilihat oleh pengguna website. Dengan kata lain, front-end developer merupakan salah satu bidang dalam web developer yang mengurus tampilan-tampilan depan suatu website. Mengatur dan mempercantik tampilan website merupakan tugas utama dari seorang front-end developer. Untuk menjadi seorang front-end developer, haruslah memahami tiga komponen utama dalam web yaitu HTML, CSS, dan Javascript. a) HTML HTML (HyperText Markup Language) merupakan bahasa markah yang dirancang untuk ditampilkan pada browser. HTML bukanlah suatu bahasa pemrograman namun harus dipahami oleh front-end developer karena merupakan salah satu komponen dasar perancangan website. Segala sesuatu yang ada di dalam pengembangan website pasti berhubungan dengan HTML Untuk memahami HTML bukanlah suatu yang sulit. Elemen HTML digambarkan oleh tag, ditulis menggunakan tanda kurung sudut, contohnya seperti untuk menuliskan paragraf atau tag untuk membuat teks miring dan masih banyak tag-tag lainnya. b) CSS CSS merupakan kepanjangan dari Cascading Style Sheet yang berfungsi sebagai pengatur tampilan elemen dari bahasa markup (HTML). Tanpa CSS, tampilan website hanya menampilkan layar putih saja. CSS berperan untuk mempercantik website agar tampilan website tersebut lebih enak dipandang oleh pengguna. CSS memiliki beberapa framework, seperti Bootstrap, Semantic UI, dan masih banyak lagi. Framework-framework ini sangat berguna bagi front-end developer untuk membangun website karena tidak susah dalam menggunakan CSS. Dengan adanya framework ini, developer dapat mengurangi bug dari website yang dibuat dikarenakan fungsi dan variable sudah disediakan oleh framework. c) Javascript Javascript merupakan bahasa pemrograman yang digunakan pada website agar website tersebut menjadi lebih interaktif dan dinamis. Kegunaan JavaScript adalah untuk menuliskan fungsi yang disisipkan ke dalam HTML, baik disisipkan secara langsung maupun diletakkan ke dalam file teks dan di link dari dokumen HTML. Penggunaan javascript pada sebuah website tidak harus selalu ada. Javascript memiliki beberapa framework, seperti AngularJS, ReactJS, dan masih banyak lagi. 2. Back-End Developer Back-End merupakan bagian dari website yang tidak dapat dilihat oleh pengguna website. back-end sebuah website terdiri atas server, aplikasi, dan database. back-end developer bertanggung jawab untuk membangun dan mengelola teknologi yang mendukung ketiga komponen tersebut. Hal ini diperlukan agar bagian front-end dapat berjalan dengan baik Seorang back-end developer haruslah memiliki skill untuk memahami bahasa pemrograman server-side seperti PHP, Python, dan lain-lain. Selain itu back-end developer harus memahami bahasa SQL yang digunakan untuk memanajemen basis data suatu website. a) PHP PHP merupakan kepanjangan dari PHP: Hypertext Preprocessor yang dirancang sebagai bahasa pemrograman server-side scripting. Server-side Scripting sendiri merupakan bahasa pemrograman web yang pengolahan datanya dilakukan oleh komputer server/penyedia. Dengan kata lain, Server-side Scripting tidak dapat dilihat oleh pengguna website tersebut. PHP juga memiliki frameworknya sendiri, seperti Laravel, CodeIgniter, Symfony, dan masih banyak lagi. Hadirnya Framework-framework ini untuk membantu developer dalam membangun website. Dengan adanya framework-framework ini, developer tidak perlu menuliskan kode-kode yang banyak karena semua sudah tersedia dan didokumentasikan oleh setiap framework yang ada. b) Python Python merupakan bahasa server-side scripting selain PHP. Bahasa Python merupakan bahasa yang sangat popular belakangan ini. Selain menjadi bahasa pemrograman untuk web development, python biasanya digunakan oleh data scientist untuk mengolah data dan juga sering digunakan untuk membuat machine learning. Python sendiri juga memiliki framework, seperti Django, Flask, dan masih banyak lagi. c) SQL SQL merupakan kepanjangan dari Structured Query Language. SQL merupakan bahasa yang digunakan sebagai suatu bahasa pemograman khusus pada sistem manajemen di database yang menggunakan instruksi-instruksi khusus dalam memanipulasikan data guna menjalankan perintah-perintahnya. Hampir semua host server menggunakan bahasa SQL karena SQL merupakan bahasa standar yang digunakan dalam manajemen basis data yang relasional. SQL menjadi skill dasar yang harus dipahami jika ingin menjadi back-end developer. 3. Full-Stack Developer Full-Stack Developer merupakan salah satu bidang dalam web developer yang menggabungkan antara front-end developer dan back-end developer. Jadi full-stack developer ini membangun tampilan luar website dan bagian dalam website seperti server dan database. Perkembangan teknologi membuat perbedaan front-end dan back-end menjadi sedikit. Semakin banyak juga developer yang awalnya menguasai back-end malah dapat menguasai front-end dan begitu juga sebaliknya. Hal ini yang membuat full-stack developer menjadi pekerjaan yang paling dicari oleh banyak perusahaan. Namun yang patut diingat, semakin berkembangnya zaman, batasan antara front-end dan back-end akan menjadi tipis. Mempelajari keduanya merupakan suatu opsi agar tidak tertinggal di masa depan. Jadi udah pada tahu kan bidang-bidang dalam Web Developer. Berminat untuk menjadi salah satunya?', 1, '2020-11-29 05:52:05', '2020-11-29 05:52:05'),
(7, 5, 'Kamu Programmer, Designer, Content Writer? Bahkan Sales atau Marketing? Dapat Side Job? Pahami Dulu Ini', 'Armin', '2019-12-08', 'Pada masa kini, mendapat sampingan pekerjaan adalah sebuah berkah,peluang mendapat rejeki tambahan tapi,jangan serta-merta peluang di karenakan biasanya jarang ada pemasukan tambahan jadi bernafus,tetap harus waspada dan punya kontrol diri,self management lah jangan sampai merusak hubungan semua,dengan klien dan dengan mitra.\r\n\r\nOk,biasanya ini terjadi karena :\r\n\r\n1. Project Lemparan\r\n\r\nSeorang sales,umumnya seorang sales atau programmer yang punya jiwa sales dengan relasi yang cukup luas dengan fully task dan atau kurangnya skill namun hanya melihat sisi keuntungan akhirnya sales,ingat ya sales ini hanya melihat opportuny tanpa melihat risk,apa aja risknya? banyak,mulai dari hubungan dengan yang di \'oper\' projectnya karena yang jiwa sales begini hanya benar-benar melihat keuntungan,tidak ada mentalitas penengah.\r\n\r\n2. Butuh Duit\r\n\r\nHari gini siapa sih yang nggak butuh duit,tapi bukan berarti tanpa pengetahuan juga jangan niru-niru mereka trader palugada besar yang ambil proyek apa aja dan menjual apa aja mereka punya modal,sementara kalian? hanya sales yang tidak punya persediaan dana which is,dana ini bisa \'menambal\' kekecewaaan seseorang,ini penting! menambal yang bagaimana? pertama anda harus ingat kata pepatah\r\n\r\n\"Jika suatu urusan di serahkan yang bukan ahlinya,maka kegagalan besar sudah menyertainya\"\r\n\r\nanda hanya sales yang pasti akan menimbulkan kekecewaaan dan kegagalan anda tidak benar-benar memahami mitra anda apakah dia benar seorang berkompeten atau tidak? anda tidak benar-benar memahami apa yang di inginkan client anda lalu bagaimana anda menyampaikan pada mitra anda karena itu tadi,anda hanya melihat uangnya saja.\r\n\r\nBalik lagi ke \'menambal\' kekecewaaan,ini sudah harus di persiapkan karena bisnis barang jasa yang bersifat proyek tidak seperti jual-beli instan pasti ada ketidak cocokkan,nah di sinilah peran penengan memberikan edukasi pada client kalau masih tidak bisa,anda harus memberikan negosiasi win-win solution bisa berupa \'penambal\' kekesalan tadi let\'s say garansi kekecewaan.\r\n\r\n3. Peluang\r\n\r\nSayangnya peluang yang di lepaskan begitu saja,membuat jiwa sales seseorang hidup lalu dengan terpaksa-dengan skenario-asal jangan lepas-dia mencari orang-siapapun bahkan kenalan dari temannya teman punya sepupu,punya ipar,punya tetangga,mantan istri,kenalannya-iparnya lagi hingga melalui banyak tahap,lalu melalui banyak telinga harus ada uang dengar dan menjadi harga tambah mahal,namun karena histeria ini,mereka umumnya menjadi lupa diri sampai-sampai mereka sadar,bahwa mereka kurang kompeten,umumnya project menjadi mahal dan tidak selesai sesuai keingan client.\r\n\r\nLalu apa yang harus di lakukan?\r\n\r\nAs a Worker\r\n\r\n1. Pelajari profil Makelar\r\n\r\nLoh,tadi di atas di sebut sales,kok sekarang makelar? iya,mereka ini adalah makelar proyek yang sebenarnya,yang hanya mendapat peluang dari relasinya\r\nada macem-macem juga tipenya.\r\n\r\nKelas atas,biasanya relasinya orang parpol,dandan parlente punya PT/CV sebagai General Contractor/trading/supplier,tipikal sekali bukan.\r\n\r\nKelas menengah,biasanya level supervisor gak jarang juga level manajer di perusahaan mereka ini yang tipenya terima beres,cuma nyampe-nyampein doang khas makelar gak mau ikutan mikir,apa sih yang di inginkan client,tapi paling pinter nego harga murah ke kita (worker) dan nego mahal ke owner project)\r\n\r\nKalau kelas agak kebawah,sales yang biasanya nangkring di warung kopi pinggir jalan karena yang kita bahas ini project digital ya,jadi biasanya sales perusahaan ISP Sales perusahaan IT,dan gak jarang sales otomotif,karena mereka ini dekat dengan semua kalangan.\r\n\r\nMereka tipe pebisnis kacangan,mencari keuntungan sebesar-besarnya,ogah modal sepeserpun bahkan saat tahap meeting pertama dengan si client,mereka hanya mau bayar kopi gak mikir ongkos kalian,nggak mikir operasional kalian,bahkan nggak akan mau kasih kalian DP\r\n\r\nPelajari karakter intinya aja,pinter ngomong? udah pasti,itu harus,karena kalau nggak,dia nggak bisa jadi penengah tapi apakah dia bisa melihat dari 2 sisi? ajak bicara soal bahasan apapun,kalau dia selalu melihat dari 1 sisi sebaiknya jangan ada kerja sama dengan orang ini,karena mereka bisa saja plin plan.\r\n\r\n2. Doyan Duit\r\n\r\nSeperti point kedua diatas yang harus kita pelajari as a worker sama seperti,kalau ini motivasi dia untuk oper project ke kita kita sebagai pekerja yang akan menerima operannya harus sadar,bahwa dia akan sangat memohon pada kita di awal namun,95% menurut pengalaman saya,yang seperti ini akan menindas nantinya pada saat-saat menjelang finishing motivasinya itu tadi,karena butuh duit.\r\n\r\nYa kale siapa sih yang gak doyan duit,tuyul aja doyan,kata babe sabeni (babenya si doel) makelar macam ini tak ubahnya sama penghutang yang melas saat butuh tapi galak saat di tagih,awas!\r\n\r\n3. Jenis Project\r\n\r\n1. Apakah project ini bersifat Reform?\r\n2. Scratch?\r\n3. atau Restoration?\r\n\r\nGue nggak akan bahas panjang lebar mengenai 3 jenis project itu di sini nanti akan gue buatkan sendiri di tema lain dan di lain hari untuk kasus ini gue hanya akan menyarankan untuk mengambil project yang nomer 2 baik itu kalian single worker,atau team baik itu kalian freelancer atau as a pilot project sebuah company even itu hanya side job perorangan kalian.\r\n\r\nOf course mau itu nilai besar maupun kecil,jangan ambil yang nomer 1 atau nomer 3 yang nomer 1 itu biasanya project yang udah ada,lalu di kembangkan,dengan atau tanpa source code dari pembuat terdahulu yang nomer 3 itu biasanya project yang di kerjakan orang terdahulu yang asalnya juga dari makelar tapi nggak selesai,kentang hanya 70% jadi.\r\n\r\nSi owner project ini males2an nyediain budgetnya,bahkan mbayarnya juga males-malesan tapi nge push orang sales/makelar kalian bisa sangat kejam,yang ini rawan makan ati di bayarnya di undur-undur,hubungan sama si makelar yang tadinya teman bisa rawan rusak meskipun kalian butuh duit,mending jangan.\r\n\r\n4. Nilai Project dan Terms Pembayaran\r\n\r\nNilai projectnya berapa? ini jelas penting,jangan sampai kalian pulang kerja terus di rumah kerja lagi,waktu yang harusnya bisa di pakai belajar,olahraga,istirahat atau waktu bareng keluarga malah tergadai demi hal yang tak seberapa.\r\n\r\nIngat, pekerja bidang jasa itu tak beda jauh dengan pedagang,harus pandai-pandai menukar waktu menjadi uang Nilai project 12 juta untuk jangka pekerjaan 4 bulan dengan terms pembayaran tanpa DP atau DP di bawah 20% adalah kerugian,karena di situ kalian akan di push,sampai pada finishing dan pelajari juga apakah akan di bayar pada tepat di bulan ke 4? ataukah baru cuma nagih di bulan ke 4 aja? nagih di bulan ke 4 dan baru di bayarnya di bulan ke 5,itu udah rugi.\r\n\r\nAnd what you have to do as a Sales/Makelar/Marketing?\r\n\r\nOk bagi para makelar proyek yang dari tadi udah gontok baca artikel ini tetep gue kasih solusi atau,sebagai worker yang udah kepalang namanya bagus dan banyak di kenal sampai gak kepegang projectnya,lalu terpaksa harus oper,ini juga bisa jadi pegangan.\r\n\r\n1. Posisikan Diri Sebagai Pekerja\r\n\r\nSeperti yang gue sebut di atas,kalian harus bisa melihat 2 sisi pertama,dengar dulu,pahami secara mendalam apa keinginan client lalu,sederhanakan pengertiannya,dan pahami bersama dengan worker dengan banyak mendengarkan dan memahami posisi sebagai client dan worker kalian tau apa dan bagaimana pola pikir pekerja kalian apabila menemui masalah seperti ketidakcocokan hasil kerja dengan keinginan client.\r\n\r\n2. Client gak selamanya Raja\r\n\r\nIni salah sebenarnya,pelanggan adalah raja itu salah!! yang benar,pelanggan adalah bos,kalau raja tidak bisa di tolak kalau bos bisa di tolak bisa di beri pengertian,dan hanya bos yang menggaji raja nggak menggaji bro!!\r\n\r\nBanyakin membaca cara berkomunikasi untuk bisnis atau ikuti aja cara ngomongnya politisi di berita-berita\r\niya seperti itu,untuk menangkal kemauan client yang sudah keluar koridor kesepakatan bersama di awal btw gue ngetik seperti ini tidak berniat memusuhi client ya tapi menetralkan posisi client yang sebenarnya bukan raja dan jangan sampai kalian sebagai makelar bilang ke worker\r\n\r\n\"ya gimana bro,maunya yang mbayar begini\"\r\n\r\nterus kalau di balik\r\n\r\n\"ya gimana maunya gue yang ngerjain begini,kan bukan gue yang minta pekerjaan\" kalian sang makelar akan kesal,dan kalau tidak punya koneksi pasti akan memohon \"eh ada kenalan nggak yang bisa ngerjain project ini?\"\r\n\r\nya kan,kalian pasti akan berkata seperti itu penuh harap kan? karena sayang projectnya akan di beri pada orang lain,hahaha\r\n\r\nAgain,dengarkan kemampuan worker pekerjaan digital seperti ini tidak seperti pekerjaan konstruksi yang bisa di buatkan dalam bentuk shop drawing,untuk di koreksi bersama lalu revisi tapi hanya berupa pseudocode yang jarang sekali di pahami orang awam paling banter di buatkan dummy nya,itu juga kalau di kasih dummy,rata-rata orang langsung bilang \"isinya nggak begini,gambarnya nggak begini\"\r\n\r\nSekali lagi ini dummy,bukan real,jangan samakan!!\r\n\r\nKemampuan worker kalian batasnya sampai mana? seperti apa? apakah kalian paham apa yang di sampaikannya?? jangan cuma melihat worker ini aset yang bisa lu moneytized bro tapi jadikan dia sahabat,jadilah kalian pendengar yang baik lalu berikan pengertian bahwa keinginan client seperti A B C D\r\n\r\nDan sampaikan pada client bahwa hal seperti ini bisa dengan mudah di ganti dengan seperti ini tidak harus sama persis tapi sudah bisa mencakup Tidak bisa 100% kemauan client karena ada aspek lain yang bekerja misal, bisa mengurangi faktor SEO,memperlambat kinerja server dll jelaskan semua itu dengan bahasa sederhana yang bisa di pahami client sebagai orang awam.\r\n\r\nNah,itulah catatan artikel saya mengenai mendapatkan Digital Side Job dan tips-tricknya semua ini saya rangkum berdasar pengalaman nyata saya dari waktu ke waktu semoga bermanfaat dan dapat menjadi pelajaran bagi kamu yang mau cari sampingan atau mulai bekerja sebagai freelancer,atau bahkan salesnya', 1, '2020-11-29 06:34:07', '2020-11-29 06:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman', 3, '2020-11-26 21:17:57', '2020-11-29 13:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `isi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `email`, `nama`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'nichol26@gmail.com', 'Jefri Nichol', 'Terimakasih atas informasinya dan ini sangat membantu', '2020-11-26 20:45:56', '2020-11-26 20:45:56'),
(3, 'ridhaannisa1708@gmail.com', 'Ridha Annisa', 'Terimakasih atas informasinya', '2020-11-26 20:48:34', '2020-11-26 20:48:34'),
(4, 'riskiwulandary08@gmail.com', 'Riski Wulandary', 'Informasi ini sangat membantu', '2020-11-26 21:01:29', '2020-11-26 21:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ica', 'ridhaannisa1708@gmail.com', 'Ridha Annisa', '$2y$10$WDi1PpKqVJGLdVjqQ1G2k.PNcMxkq4ruDqWSFdq6Tv6s1JE8t9jzS', NULL, '2020-11-25 07:17:07', '2020-11-25 07:17:07'),
(4, 'jefrinichol', 'nichol26@gmail.com', 'Jefri Nichol', '$2y$10$4nt4SqGHh2G5w.y5ZhNYAe5TyKf9JJVTrG.onq7CyI0bXvTR.Oa.e', NULL, '2020-11-29 05:49:05', '2020-11-29 05:49:05'),
(5, 'Rendy', 'rendy@gmail.com', 'Uti Rendy Herlintra', '$2y$10$GaWg5Yci3rJrREQddfbgQuy32B1It3Ni3TZfNq/ItaIqNx1lxIc9e', NULL, '2020-11-29 06:33:18', '2020-11-29 06:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 2, '+6281226761326', '2020-11-25 07:15:34', '2020-11-25 07:15:34'),
(2, 3, '+62895376962037', '2020-11-25 07:17:08', '2020-11-25 07:17:08'),
(3, 4, '+6289534249815', '2020-11-26 21:26:19', '2020-11-26 21:26:19'),
(4, 4, '+6289508208756', '2020-11-27 20:49:54', '2020-11-27 20:49:54'),
(5, 4, '+6281226761326', '2020-11-29 05:49:05', '2020-11-29 05:49:05'),
(6, 5, '+6285312243626', '2020-11-29 06:33:18', '2020-11-29 06:33:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
