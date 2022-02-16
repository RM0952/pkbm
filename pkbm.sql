/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : pkbm

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 15/02/2022 09:55:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for config_page
-- ----------------------------
DROP TABLE IF EXISTS `config_page`;
CREATE TABLE `config_page`  (
  `id_config` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `embed_lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_config`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of config_page
-- ----------------------------
INSERT INTO `config_page` VALUES (1, 'HOME | SMKN 1 CIOMAS', 'pkbm_posts_1644290348.jpg', 'pkbm_posts_1644290430.jpg', 'https://www.google.com/maps/d/embed?mid=1viyZhqtEarcpsBeyR-zqD5yIoBs&ehbc=2E312F', 'pendaftaran online', 'pendaftaran sd.smp.sma,smk');

-- ----------------------------
-- Table structure for jalur_jenjang
-- ----------------------------
DROP TABLE IF EXISTS `jalur_jenjang`;
CREATE TABLE `jalur_jenjang`  (
  `id_jenjang` int NOT NULL AUTO_INCREMENT,
  `tipe_jenjang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bg_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jalur_jenjang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `font_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenjang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jalur_jenjang
-- ----------------------------
INSERT INTO `jalur_jenjang` VALUES (2, 'sd', '#dc3545', 'Prestasi', '#ffffff');
INSERT INTO `jalur_jenjang` VALUES (3, 'sd', '#dc3545', 'Pindah Tugas Orangtua dan Anak Guru', '#ffffff');
INSERT INTO `jalur_jenjang` VALUES (4, 'sd', '#dc3545', 'Tahap Kedua', '#ffffff');
INSERT INTO `jalur_jenjang` VALUES (5, 'sd', '#dc3545', 'Tahap Ketiga', '#ffffff');
INSERT INTO `jalur_jenjang` VALUES (6, 'smp', '#0d6efd', 'Prestasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (7, 'smp', '#0d6efd', 'Afirmasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (8, 'smp', '#0d6efd', 'Zonasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (9, 'smp', '#0d6efd', 'Pindah Tugas Orangtua dan Anak Guru', '#000000');
INSERT INTO `jalur_jenjang` VALUES (10, 'smp', '#0d6efd', 'Tahap Kedua', '#000000');
INSERT INTO `jalur_jenjang` VALUES (11, 'sma', '#6c757d', 'Prestasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (12, 'sma', '#6c757d', 'Afirmasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (13, 'sma', '#6c757d', 'Zonasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (14, 'sma', '#6c757d', 'Pindah Tugas Orangtua dan Anak Guru', '#000000');
INSERT INTO `jalur_jenjang` VALUES (15, 'sma', '#6c757d', 'Tahap Kedua', '#000000');
INSERT INTO `jalur_jenjang` VALUES (16, 'sma', '#6c757d', 'PPDB Bersama Tahap Kedua', '#000000');
INSERT INTO `jalur_jenjang` VALUES (17, 'smk', '#ffc107', 'Prestasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (18, 'smk', '#ffc107', 'Afirmasi', '#000000');
INSERT INTO `jalur_jenjang` VALUES (19, 'smk', '#ffc107', 'Pindah Tugas Orangtua dan Anak Guru', '#000000');
INSERT INTO `jalur_jenjang` VALUES (20, 'smk', '#ffc107', 'Tahap Kedua', '#000000');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'Pendaftaran');
INSERT INTO `kategori` VALUES (2, 'Prestasi');
INSERT INTO `kategori` VALUES (3, 'Berita');

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak`  (
  `id_kontak` int NOT NULL AUTO_INCREMENT,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kontak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kontak`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kontak
-- ----------------------------
INSERT INTO `kontak` VALUES (1, 'WhatsApp', '081234567891');

-- ----------------------------
-- Table structure for pendaftar
-- ----------------------------
DROP TABLE IF EXISTS `pendaftar`;
CREATE TABLE `pendaftar`  (
  `id_pendaftar` int NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nisn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_hp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_wa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `createdAt` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_pendaftar`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pendaftar
-- ----------------------------
INSERT INTO `pendaftar` VALUES (2, '12', '123', 'Anjas Wicaksana', 'Bogor', '2001-07-25', '', '2131', 'Islam', 'Nuryati', 'Sartono', '081387387277', '081387387277', 'Laladonn', '2022-02-03 02:57:44');
INSERT INTO `pendaftar` VALUES (3, '1234', '1234', 'asd', 'asd', '2022-02-15', 'laki-laki', '1234', 'katholik', 'asd', 'asd12', '123', '123', 'asd', '2022-02-09 08:36:10');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id_posts` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `alt_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `createdAt` datetime NULL DEFAULT NULL,
  `updatedAt` datetime NULL DEFAULT NULL,
  `visited` int NULL DEFAULT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `id_kategori` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_posts`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (7, 'Pemakai Narkoba Tertangkap', '<p>TEMPO.CO, Jakarta - Laga Liga Spanyol antara Barcelona vs Atletico Madrid berakhir dengan skor 4-2. Pelatih Atletico Madrid, Diego Simeone, menilai timnya bermain lebih baik meskipun akhirnya menelan kekalahan karena Barcelona lebih tajam di depan gawang. Dalam konferensi pers usai pertandingan, Simeone mengakui keunggulan Barcelona pada laga itu. Dia menilai perbedaan kedua tim pada laga itu adalah karena anak asuhnya kurang tajam di depan gawang.</p>\r\n\r\n<p>Pelatih asal Argentina itu menilai timnya lebih mengontrol pertandingan tersebut. Menurut dia, mereka juga sebenarnya memiliki peluang untuk mencetak tiga gol lainnya pada babak pertama. Sayangnya peluang yang didapatkan Joao Felix dan Stefan Savic tak berbuah gol. &quot;Anda harus menghargai betapa tajamnya lawan kami dan kami berupaya untuk meningkatkan intensitas, agresifitas dan konsentrasi kami,&quot; kata Simeone. &quot;Kami mampu unggul terlebih dahulu, kami lebih mengontol pertandingan secara posisi, bisa membuka ruang untuk Carrasco dan Joao, kami memiliki tiga peluang lainnya pada babak pertama, dua untuk Joao dan satu untuk Savic. Mereka lebih tajam. Di luar penguasaan bola dan serangan balik, tim yang lebih tajam yang akan menang.&quot;</p>\r\n\r\n<p>Diego Simeone juga menyatakan bahwa mereka tampil lebih baik pada babak kedua dengan berhasil memperkecil ketertinggalan menjadi 2-4. Sayangnya, menurut dia, pertahanan skuad asuhan Xavi Hernandez tampil apik, bahkan setelah mereka bermain dengan 10 orang. &quot;Di babak kedua kami lebih agresif dan intens, kami mengubah skor menjadi 4-2 dan rasanya seperti kami bisa masuk ke dalam permainan. Barca bertahan dan terorganisir dengan baik dan kami memiliki lebih sedikit peluang,&quot; kata dia. Pelatih yang musim lalu membawa Atletico Madrid menjuarai Liga Spanyol itu pun menyoroti kinerja lini belakangnya. Menurut dia, musim ini pertahanan mereka tak sebaik satu dekade terakhir.</p>\r\n\r\n<p>&quot;Kami telah bertahan dengan sangat baik selama sepuluh tahun dan tahun ini kami tidak melakukan apa yang biasanya kami lakukan. Kami harus berkembang, kami memiliki waktu seminggu untuk memperbaikinya sekarang. Kami kurang beruntung dan sedikit kurang fokus juga,&quot; kata dia. Pada laga itu, Atletico Madrid memang sempat unggul lewat gol Yannick Carrasco pada menit ke-8. Akan tetapi Barcelona langsung membalasnya dua menit berselang lewat gol Jordi Alba. Barca berbalik unggul lewat sundulan Gavi yang memanfaatkan umpan silang Adama Traore pada menit ke-21. Ronald Araujo membuat skor menjadi 3-1 dua menit menjelang babak pertama usai. Anak asuh Xavi Hernandez menambah keunggulannya empat menit babak kedua berjalan. Kali ini Dani Alves mencatatkan namanya di papan skor. Atletico Madrid hanya mampu memperkecil ketertinggalan lewat sundulan Luis Suarez pada menit ke-58. Sebelas menit berselang Barcelona harus bermain dengan 10 orang setelah Dani Alves diganjar kartu merah karena melanggar Carrasco. Meskipun bermain dengan keunggulan satu orang, Los Rojiblancos gagal menambah gol. Laga Barcelona vs Atletico Madrid pun berakhir dengan skor 4-2 dan membuat Blaugrana naik ke peringkat keempat klasemen sementara Liga Spanyol. Mereka menyalip Atletico Madrid yang harus turun dengan ke posisi kelima.</p>\r\n', '', 'pkbm_posts_1644294519.jpg', '2022-02-08 05:27:54', NULL, 19, 'keyword1,keyword2,keyword3,keyword4', 'TEMPO.CO, Jakarta - Laga Liga Spanyol antara Barcelona vs Atletico Madrid berakhir dengan skor 4-2. Pelatih Atletico Madrid, Diego Simeone, menilai timnya bermain lebih baik meskipun akhirnya menelan kekalahan karena Barcelona lebih tajam di depan gawang...', 1);
INSERT INTO `posts` VALUES (8, 'Rupiah Rabu pagi menguat 24 poin', '<p>Jakarta (ANTARA) - Ketua Fraksi Partai Demokrat DPR RI Edhie Baskoro Yudhoyono (Ibas) berharap agar pers, sebagai salah satu pilar demokrasi yang memperjuangkan suara rakyat, bersifat jernih, jujur, dan adil dalam memilah saran dan kritik.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Saya percaya bahwa media, pers, dan rakyat Indonesia akan jernih, jujur, dan adil memilah saran dan kritik dalam sinergi bersama,&rdquo; kata Ibas dalam keterangan yang diterima di Jakarta, Rabu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ibas juga mengungkapkan apresiasi dan terima kasihnya kepada insan pers Indonesia pada peringatan Hari Pers Nasional yang jatuh setiap tanggal 9 Februari ini.</p>\r\n', '', 'pkbm_posts_1644376757.jpg', '2022-02-09 04:19:17', NULL, 9, '', '', 3);

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id_slider` int NOT NULL AUTO_INCREMENT,
  `img_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alt_img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_slider`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'pkbm_slider_1643875265.jpg', 'test');
INSERT INTO `slider` VALUES (2, 'pkbm_slider_1643876760.jpg', 'asd');

SET FOREIGN_KEY_CHECKS = 1;
