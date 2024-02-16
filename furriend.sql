SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blog_posts
-- ----------------------------
DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE `blog_posts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `blog_posts_slug_unique`(`slug` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blog_posts
-- ----------------------------
INSERT INTO `blog_posts` VALUES (1, 'cara-cepat-tangkal-kutu-pada-hewan', 'Cara Cepat Tangkal Kutu pada Hewan', 'Alvin Febrianto', '<p>Bagi pet parents yang memiliki kucing kesayangan di rumah, tentunya tidak mau kucingnya terserang kutu. Seperti yang kita tahu, jika hewan kesayangan kita sampai dihinggapi kutu, tentu dapat membuat kucing menjadi merasa tidak nyaman dan bahkan menyakiti dirinya sendiri. Karena itu pet parents harus memastikan bahwa hewan kesayangan tetap bersih dan terbebas dari kutu. Ada beberapa solusi yang dapat dilakukan jika kucingmu dihinggapi kutu.</p>                                <h4>1. Obat tetes</h4>                                <p>Banyak sekali jenis obat tetes pembasmi kutu kucing yang tersedia di petshop dengan berbagai merk. Cara penggunaaanya yaitu diteteskan ke tengkuk kucing atau pangkal kepala (leher bagian atas), karena kucing tidak bisa menjilat di bagian itu. Furriend pet shop menyediakan berbagai obat tetes kutu untuk kucing maupun anjing. Obat kutu tersedia di website Furriend pet shop.</p>                                <h4>2. Minyak telon</h4>                                <p>Jika kamu tidak ingin menggunakan obat yang dirasa asing, minyak telon dapat digunakan untuk mengatasi kutu pada kucing. Kamu cukup mengusapkan minyak ke bagian kulit kucing yang terkena kutu. Cara ini cukup aman bagi hewan kesayanganmu.</p>                                <h4>3. Semprotan lemon</h4>                                <p>Dengan kandungan asam sitrat yang dimiliki lemon, kutu tidak akan mengganggu kucingmu lagi. Cukup didihkan air lalu masukkan lemon ke dalamnya. Setelah dingin, saring dan masukkan ke dalam botol semprot. Kamu tinggal menyemprot ke kucingmu setiap hari dengan larutan ini. Kamu juga bisa menggunakan cuka apel sebagai pengganti lemon.</p>                                <h4>4. Sampo khusus</h4>                                <p>Dengan menggunakan sampo anti kutu dan jamur, kamu sudah bisa membasmi sebagian kutu yang hinggap di kucing kamu. Bahkan sampo ini dapat membasmi sampai ke telur-telur kutu yang menempel pada bulu atau kulit kucing. Sampo khusus kutu tersedia di website Furriend pet shop. Furriend pet shop akan membantu pet parents dalam menentukan sampo yang cocok.</p>                                <h4>5. Membersihkan lingkungan</h4>                                <p>Biar bagaimanapun juga kebersihan lingkungan merupakan hal yang wajib dilakukan. Jika lingkungan kita bersih, kemungkinan kecil si kutu akan menyerang lingkungan dan bahkan tidak ada.</p>                                <h4>6. Grooming kuku</h4>                                <p>Grooming khusus untuk menghilangkan kutu dilakukan dengan treatment khusus. Mulai dari sampo khusus kutu, kondisioner, dan obat kutu.</p>', 'assets/imgs/blog/blog-1.jpg', '2023-10-13', '2023-10-12 15:05:16', '2023-10-13 15:05:16');
INSERT INTO `blog_posts` VALUES (2, 'merawat-kucing-saat-pandemi-covid-19', 'Merawat Kucing saat Pandemi Covid-19', 'Fisma Meividianugraha Subani', '<p>Coronavirus disease 2019 (Covid-19) atau yang juga seringkali disebut virus corona memang sedang heboh diperbincangkan saat ini. Virus yang berasal dari Wuhan-Cina ini membuat banyak orang panik dan berusaha untuk melindungi diri dari penyakit tersebut. Kepanikan tersebut terjadi karena hingga saat ini belum ada obat yang ampuh untuk menanganinya, dan korban pun semakin bertambah dari hari ke hari.</p>\r\n                                <p>Bukan hanya manusia yang butuh diperhatikan saat wabah virus corona, namun pet parents juga perlu memperhatikan hewan peliharaan yang dimiliki. Konon, virus ini disebut-sebut berasal dari hewan. Meskipun belum ada penelitian yang menyatakan secara resmi bahwa virus corona dapat menular melalui hewan, pet parents sebaiknya tetap berupaya untuk melakukan pencegahan penyebaran virus tersebut.</p>\r\n                                <p>Bagi pet parents yang memiliki anabul, menjaga dan membawanya masuk ke dalam rumah tentu wajib dilakukan. Namun, sebagai hewan yang biasanya tinggal di luar ruangan, mengajak mereka ikut mengisolasi diri di rumah dapat membuat stres. Alhasil, anabul bisa sakit dan mati. Nah, untuk merawat hewan peliharaan di rumah dengan benar saat wabah virus corona, Furriend pet shop telah merangkum beberapa tips yang bisa pet parents terapkan.</p>\r\n                                <h4>1. Mempersiapkan semua kebutuhan anabul</h4>\r\n                                <p>Selama melakukan karantina mandiri, pemerintah mengimbau untuk membatasi aktivitas di luar ruangan. Maka dari itu, pet parents perlu mempersiapkan kebutuhan anabul setidaknya selama 14 hari. Segala kebutuhan yang dimaksud termasuk makanan, tempat tinggal, dan berbagai pengobatan yang dibutuhkan. Kalau pet parents takut rumah akan penuh dengan kotoran anabul, maka pet parents bisa mempersiapkan popok khusus hewan.</p>\r\n                                <h4>2. Pastikan anabul tetap aktif secara fisik dan mental</h4>\r\n                                <p>Menjaga kesehatan fisik dan mental anabul juga wajib dilakukan. Memang, sebaiknya kita mengajak anabul berjalan keliling kompleks rumah untuk memenuhi kebutuhan kesehatan itu. Namun, karena keadaan yang harus berdiam diri di rumah, pet parents bisa melakukan alternatif lain, seperti main lempar bola, naik turun tangga atau berbagai permainan fisik lainnya.</p>\r\n                                <h4>3. Memperhatikan kebersihan anabul</h4>\r\n                                <p>Memperhatikan kebersihan anabul juga tak kalah penting untuk dikerjakan. Pet parents bisa mengajak anabul mandi satu kali seminggu. Jangan lupa untuk menggosok seluruh bagian tubuhnya dengan sikat mandi agar lebih bersih. Dengan menjaga kebersihan tubuhnya, pet parents dapat menghindarkan virus atau kuman menempel terlalu lama. Bersihkan pula kandang atau tempat tidur anabul kesayangan. Apabila ada kotoran, segera ambil dan masukkan ke dalam tas plastik sebelum dibuang ke tong sampah. Hal tersebut perlu dilakukan karena kotoran hewan bisa menjadi sumber penyakit.</p>\r\n                                <h4>4. Memperhatikan gejala yang terjadi</h4>\r\n                                <p>Memang virus corona terbilang jarang menimbulkan gejala pada hewan, tetapi bukan tidak mungkin ada gejala yang timbul. Beberapa gejala yang dapat terjadi adalah diare mendadak, tubuh yang kerap lesu, serta nafsu makan yang menurun. Selain itu, diare yang terjadi mungkin saja mengandung darah atau lendir. Jika gejala ini terjadi, ada baiknya pet parents langsung memeriksakannya ke dokter hewan kesayangan.</p>\r\n                                <p>Itulah beberapa hal yang dapat pet parents lakukan untuk menjaga kesehatan anabul agar tidak mudah terserang virus, termasuk juga virus corona. Dengan begitu, kemungkinan untuk menyerang pet parents sebagai pemilik anabul juga akan menurun. Hal yang pasti harus dilakukan adalah menjaga kebersihan hewan, kandang, dan buang kotorannya dengan baik. Pet parents juga sebaiknya tidak lupa untuk selalu mencuci tangan setelah memegang anabul, terutama saat akan makan ya!</p>', 'assets/imgs/blog/blog-2.webp', '2023-10-16', '2023-10-15 07:17:45', '2023-10-16 07:31:08');
INSERT INTO `blog_posts` VALUES (3, 'tips-membuat-kucing-nyaman-di-kandang', 'Tips Membuat Kucing Nyaman di Kandang', 'Rahmad Firdiansyah', '<p>Ada dua jenis pet parents di dunia ini. Pertama ialah pet parents yang suka membiarkan anabulnya untuk berkeliaran bebas di dalam rumah. Kedua, adalah pet parents yang lebih suka membatasi gerak si anabul agar terhindar dari hal-hal yang tidak diinginkan. Mungkin bagi keluarga yang mencintai kucing, melihat anabul tidur di seluruh penjuru rumah bukanlah hal yang perlu dirisaukan. Namun biasanya ada dari salah satu anggota keluarga yang tidak senang  jika anabultidur bukan didalam kandang yang sudah dipersiapkan melainkan disembarang tempat seperti kamar tidur, sofa, atau bahkan dipojokan rumah.</p>\r\n                                <p>Ada banyak faktor yang menjadikan anabul kurang nyaman berada di dalam kandang. Oleh karena itu, pet parents harus berusaha membuat anabul senyaman mungkin ketika berada di dalam kandang, karena akan sangat mempengaruhi kondisi kesehatannya. Ada kandang yang lembab, keras dan bisa saja bau sehingga anabul merasa tidak nyaman berada di dalam kandang. Berikut merupakan beberapa rangkaian tips agar anabul bisa tetap nyaman dan sehat saat berada di dalam kandangnya. Simak yuk, pet parents.</p>\r\n                                <h4>1. Ciptakan kandang yang lembut dan hangat</h4>\r\n                                <p>Anabul sangat suka meringkuk ditempat yang hangat, lembut, dan nyaman. Pet parents bisa menempatkan handuk atau selimut kecil di dalam kandang. Ganti alas tersebut setiap sebulan sekali. Jika pet parents menaruh kandang kucing di garasi atau ruangan yang tidak terpakai, sesekali bawalah masuk kandang kucing ke dalam rumah agar kehangatannya tetap terjaga.</p>\r\n                                <h4>2. Ukuran dan kelembaban kandang</h4>\r\n                                <p>Selain berusaha menciptakan kandang yang lembut dan hangat, pet parents juga perlu menjaga kelembaban dalam menaruh posisi kandang. Caranya, pet parents bisa menaruh kandang di tempat yang agak jauh dari sinar matahari. Selain itu, ukuran kandan yang dipilih oleh pet parents sangat berpengaruh terhadap kenyamanannya. Biarkan anabul bergerak secara leluasa di dalam kandang dengan memilih kandang yang cukup besar dengan beberapa tingkatan agar anabul dapat tetap aktif bergerak.</p>\r\n                                <h4>3. Berikan mainan di dalam kandang</h4>\r\n                                <p>Selain keadaan kandang, pet parents juga bisa memberikan anabul beberapa mainan favorit yang bisa dimainkan di dalam kandang. Sama halnya dengan manusia, kucing juga butuh hiburan dan perlakuan baik dari lingkungannya. Dengan adanya mainan, anabul dapat mengeksplorasi semua hal yang berada di dalam kandang dengan sendirinya dan mengurangi rasa bosan.</p>\r\n                                <h4>4. Jangan lupa memberi perhatian pada anabul</h4>\r\n                                <p>Saat memutuskan untuk menaruh anabul di dalam kandang, pet parents tidak disarankan untuk langsung mengunci pintu dan meninggalkannya. Hal tersebut akan membuat anabul merasa dijebak dan menyebabkan dia mengeong terus-menerus. Biarkan anabul merasa nyaman di dalamnya, ajak main dan beri perhatian walaupun pet parents meletakkannya di dalam kandang. Setelah anabul merasa cukup tenang, pet parents bisa mulai menutup pintunya dengan tidak terburu-buru meninggalkan terlebih dahulu.</p>\r\n                                <p>Menaruh anabul di dalam kandang secara terus-menerus memang tidak disarankan, tetapi untuk beberapa alasan tertentu seperti kesehatan dan keselamatan, hal tersebut perlu dipertimbangkan oleh pet parents. Terlebih saat pet parents akan mudik atau pergi ke suatu daerah tanpa membawa anabul, saat anabul dititipkan di Pet Hotel, tentunya anabul harus berada di dalam kandang dalam jangka waktu yang lama. Oleh karena itu, pet parents juga perlu melatih agar anabul betah dan tidak stres saat berada di dalam kandang.</p>', 'assets/imgs/blog/blog-3.webp', '2023-10-22', '2023-10-21 04:48:22', '2023-10-22 19:39:05');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_name_unique`(`name` ASC) USING BTREE,
  UNIQUE INDEX `categories_slug_unique`(`slug` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Makanan Anjing Kering', 'makanan-anjing-kering', '2023-11-28 09:34:17', '2023-11-28 09:34:17', '1701164057.webp', 1);
INSERT INTO `categories` VALUES (2, 'Makanan Anjing Basah', 'makanan-anjing-basah', '2023-11-28 09:35:09', '2023-11-28 09:35:09', '1701164109.webp', 1);
INSERT INTO `categories` VALUES (3, 'Makanan Kucing Kering', 'makanan-kucing-kering', '2023-11-28 09:37:09', '2023-11-28 09:37:09', '1701164229.webp', 1);
INSERT INTO `categories` VALUES (4, 'Makanan Kucing Basah', 'makanan-kucing-basah', '2023-11-28 09:37:54', '2023-11-28 09:37:54', '1701164274.webp', 1);
INSERT INTO `categories` VALUES (5, 'Mainan Hewan', 'mainan-hewan', '2023-11-28 09:38:32', '2023-11-28 14:48:54', '1701182934.webp', 1);

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for home_sliders
-- ----------------------------
DROP TABLE IF EXISTS `home_sliders`;
CREATE TABLE `home_sliders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `top_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_sliders
-- ----------------------------
INSERT INTO `home_sliders` VALUES (1, 'Lebih Hemat!', 'Diskon 20%', 'Cat Food', 'Segera beli, promo hanya berlaku sampai Maret 2023', '/shop', '1701159011.png', 1, '2023-11-28 08:10:11', '2023-11-28 08:10:11');
INSERT INTO `home_sliders` VALUES (2, 'Promo Besar!', 'Diskon 35%', 'Royal Canin', 'Jangan terlewat, diskon hanya berlaku di tanggal 11 Januari', '/shop', '1701159257.png', 1, '2023-11-28 08:14:17', '2023-11-28 08:15:32');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (11, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (12, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (14, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (15, '2023_10_15_063821_create_categories_table', 1);
INSERT INTO `migrations` VALUES (16, '2023_10_15_064346_create_products_table', 1);
INSERT INTO `migrations` VALUES (17, '2023_11_02_153739_create_home_sliders_table', 1);
INSERT INTO `migrations` VALUES (18, '2023_11_07_132338_add_image_and_is_popular_column_to_categories_table', 1);
INSERT INTO `migrations` VALUES (19, '2023_11_26_082905_create_contacts_table', 1);
INSERT INTO `migrations` VALUES (20, '2023_11_27_145706_create_blog_posts_table', 1);
INSERT INTO `migrations` VALUES (26, '2023_12_03_045556_create_orders_table', 7);
INSERT INTO `migrations` VALUES (27, '2023_12_03_050001_create_order_items_table', 8);
INSERT INTO `migrations` VALUES (28, '2023_12_03_050039_create_shippings_table', 9);
INSERT INTO `migrations` VALUES (29, '2023_12_03_050127_create_transactions_table', 10);
INSERT INTO `migrations` VALUES (30, '2023_12_04_121050_add_delivered_canceled_date_to_orders_table', 11);

-- ----------------------------
-- Table structure for order_items
-- ----------------------------
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `price` decimal(10, 0) NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `order_items_product_id_foreign`(`product_id` ASC) USING BTREE,
  INDEX `order_items_order_id_foreign`(`order_id` ASC) USING BTREE,
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_items
-- ----------------------------
INSERT INTO `order_items` VALUES (7, 4, 4, 85000, 1, '2023-12-03 17:17:27', '2023-12-03 17:17:27');
INSERT INTO `order_items` VALUES (8, 6, 4, 7000, 5, '2023-12-03 17:17:27', '2023-12-03 17:17:27');
INSERT INTO `order_items` VALUES (9, 4, 5, 85000, 1, '2023-12-04 04:36:20', '2023-12-04 04:36:20');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `subtotal` decimal(10, 0) NOT NULL,
  `total` decimal(10, 0) NOT NULL,
  `discount` decimal(10, 0) NOT NULL DEFAULT 0,
  `tax` decimal(10, 0) NOT NULL DEFAULT 0,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ordered','delivered','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date NULL DEFAULT NULL,
  `canceled_date` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `orders_user_id_foreign`(`user_id` ASC) USING BTREE,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (4, 2, 120000, 120000, 0, 0, 'Alvin', 'Febrianto', '089666666666', 'alvinfebrianto@gmail.com', 'Kandangan Bakti III-A/2', 'Jawa Timur', 'Surabaya', '60199', 'ordered', 0, '2023-12-03 17:17:27', '2023-12-04 15:08:10', NULL, '2023-12-04');
INSERT INTO `orders` VALUES (5, 2, 85000, 85000, 0, 0, 'Alvin', 'Febrianto', '089666666666', 'alvinfebrianto@gmail.com', 'Kandangan Gunung Bakti III-A/2', 'Jawa Timur', 'Surabaya', '60199', 'ordered', 0, '2023-12-04 04:36:19', '2023-12-04 14:29:30', '2023-12-04', '2023-12-04');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `regular_price` decimal(8, 0) NOT NULL,
  `sale_price` decimal(8, 0) NULL DEFAULT NULL,
  `SKU` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `category_id` bigint UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `products_name_unique`(`name` ASC) USING BTREE,
  UNIQUE INDEX `products_slug_unique`(`slug` ASC) USING BTREE,
  INDEX `products_category_id_foreign`(`category_id` ASC) USING BTREE,
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Whiskas® Dry Adult 1+ Indoor', 'whiskas-dry-adult-1-indoor', 'Diformulasikan untuk memenuhi kebutuhan energi bagi kucing rumahan dan menjaga kenyamanan rumah Anda.', 'Sebagai pencipta makanan kucing WHISKAS®, kami tahu bahwa kucing rumahan memiliki kebutuhan diet khusus yang perlu disesuaikan dengan gaya hidup mereka yang santai. Kucing rumahan cenderung menghabiskan waktu mereka dengan tidur dan bersantai di tempat favorit mereka seharian, mereka tidak terlalu aktif dan membutuhkan hanya sedikit energi. Karena itu, kucing rumahan lebih rentan terhadap kenaikan berat badan. Juga, dengan kurangnya bergerak, pergerakan usus merekapun menjadi lamban, ini menyebabkan feses mereka menjadi sangat bau dan mengganggu kenyamanan pemilik kucing.\n\nKeistimewaan WHISKAS® Indoor:\n\nMembantu mengontrol bau feses untuk kenyamanan rumah Anda\nFormula bergizi dengan kalori terbatas^ membantu kucing rumahan menjaga berat badan yang sehat\nProtein berkualitas membantu menjaga kesehatan otot\nNutrien esensial, termasuk vitamin E dan antioksidan, mendukung sistem imunitas yang sehat\nSerat alami membantu mengontrol hairball\nNutrisi lengkap dan seimbang untuk kucing dewasa\nTanpa pewarna buatan\n\nTersedia dalam kemasan 450 g dan 1.1 kg.\n\n^Dibandingkan dengan WHISKAS® Dewasa rasa Makanan Laut.', 88000, 68000, 'WDA1PI', 'instock', 1, 30, '1701177364.webp', NULL, 3, '2023-11-28 13:16:04', '2023-11-28 13:16:04');
INSERT INTO `products` VALUES (2, 'Whiskas® Dry Adult 1+ Skin & Coat', 'whiskas-dry-adult-1-skin-coat', 'Nutrisi lengkap untuk kesehatan kulit & keindahan bulu kucing Anda.', 'Bulu dan kulit yang indah adalah ciri khas kucing yang dirawat dengan baik dan sehat. Banyak faktor yang bisa menyebabkan kesehatan kulit & bulu yang jelek, seperti nutrisi yang buruk, berat badan yang berlebihan (yang mempersulit kucing Anda merawat tubuh mereka sendiri), usia tua dan bahkan terlalu sering dimandikan (yang bisa menghilangkan minyak alami dan menyebabkan iritasi kulit).\n\nHindari kerontokan rambut dan tampilkan keanggunan kucing Anda dengan WHISKAS® Skin & Coat. Kelebatan bulu dan kesehatan kulit mereka akan menjadi hal yang dikagumi oleh para pecinta kucing.\n\nKeistimewaan WHISKAS® Skin & Coat:\n\nNutrien esensial membantu menghindari kerontokan rambut\nBiotin dan vitamin B membantu menjaga kesehatan kulit dan keindahan bulu\nNutrien esensial, termasuk vitamin E dan antioksidan, mendukung sistem imunitas yang sehat\nProtein berkualitas membantu menjaga kesehatan otot\nSerat alami membantu mengontrol hairball\nNutrisi lengkap dan seimbang untuk kucing dewasa\nTanpa pewarna buatan\nTersedia dalam kemasan 450 g dan 1.1 kg.', 87000, 67000, 'WDA1PSC', 'instock', 1, 25, '1701177967.webp', NULL, 3, '2023-11-28 13:26:07', '2023-11-28 13:26:07');
INSERT INTO `products` VALUES (3, 'Whiskas® Dry Adult 1+ Hairball Control', 'whiskas-dry-adult-1-hairball-control', 'Nutrisi yang diformulasikan khusus untuk mengontrol hairball.', 'Kucing menghabiskan setidaknya lima jam sehari untuk merawat dirinya. Lidah mereka yang kasar seperti amplas mudah menjaring rambut yang terlepas, yang kemudiannya tertelan. Meskipun bulu tersebut biasanya bisa melewati usus dan dikeluarkan melalui feses, beberapa kucing (terutama kucing berambut panjang) cenderung membentuk hairball di perutnya. Memang kucing dapat memuntahkan hairball (sesuatu yang sudah cukup tidak menyenangkan), namun hairball yang menumpuk di perut dapat menjadi masalah serius jika tersendat pada saluran pencernaan.\n\nWHISKAS® Hairball Control dengan 50%^ lebih banyak Pulp Gula Bit menyediakan serat alami untuk mengontrol pembentukan hairball dan membantu pengekskresian rambut yang tertelan. Pecinta kucing pasti akan lebih senang dengan kucing yang tidak sering muntah.\n\nKeistimewaan WHISKAS® Hairball Control:\n\n50%^ lebih banyak Pulp Gula Bit untuk membantu pengekskresian rambut yang tertelan\nPulp Gula Bit bertindak sebagai prebiotik untuk mendukung flora usus yang sehat untuk sistem pencernaan yang sehat\nOmega-6 dan zinc untuk kulit dan bulu yang sehat\nAntioksidan\nProtein berkualitas membantu menjaga kesehatan otot\nNutrisi lengkap dan seimbang untuk kucing dewasa\n\nTersedia dalam kemasan 450 g.\n\n^Dibandingkan dengan WHISKAS® Dewasa rasa Makanan Laut.', 35000, 33000, 'WDA1PHC', 'instock', 1, 35, '1701178126.webp', NULL, 3, '2023-11-28 13:28:46', '2023-11-28 13:28:46');
INSERT INTO `products` VALUES (4, 'Whiskas® Dry Adult 1+ Grilled Saba Flavour', 'whiskas-dry-adult-1-grilled-saba-flavour', 'Diformulasikan secara khusus untuk menjaga kesehatan kulit dan bulu yang indah serta meningkatkan keaktifan kucing.', 'WHISKAS makanan kucing yang sehat dan seimbang, secara spesifik di formulasikan untuk memenuhi kebutuhan nutrisi kucing pada setiap masa kehidupannya. Jika kucingmu memasuki usia 12 bulan, maka ia menjadi kucing dewasa dan tentunya membutuhkan nutrisi yang berbeda pula. Perubahan dan perbedaan nutrisi yang dibutuhkan ini, akan berubah pula ketika mereka berganti usia menjadi 7 tahun.\n\nKucing dengan usia 1-6 tahun membutuhkan banyak latihan dan bermain serta makanan yang seimbang untuk menjaganya tetap aktif dan sehat. Kucing adalah karnivora, sedangkan manusia , omnivora, jadi kucing membutuhkan 2 kali lebih banyak protein daripada manusia. Mereka juga membutuhkan 41 kandungan nutrisi esensial untuk kesehatan yang optimum. WHISKAS mengerti akan kandungan nutrisi yang dibutuhkan oleh kucing dan setiap produk secara spesifik di formulasikan dengan kandungan nutrisi yang lengkap dan seimbang.\n\nMengandung Omega 3 & 6 , serta Zinc untuk kesehatan kulit dan bulu yang indah.\nMengandung Vit.A dan taurine untuk kesehatan matanya\nMengandung protein dari ikan yang segar, lemak yang baik, vitamin dan mineral yang seimbang, untuk tetap menjaga kucingmu aktif dan bahagia.\n \n\nBaik keduanya, WHISKAS Dry dan Wet food merupakan suatu kombinasi yang seimbang dan lengkap untuk menunjang kebutuhan nutrisi kucingmu. Untuk kelengkapan nutrisi yang optimal, kamu dapat mengkombinasikan antara keduanya untuk kucing kesayanganmu di rumah. Wet food atau Makanan basah mengandung air untuk menjaga kesehatan saluran kencingnya dan juga megandung kalori yang baik. Potongan kantung dadu kecil WHISKAS dry food ./ kering , membantu untuk membersihkan karang gigi dan menjaga kesehatan gusinya.\nKucingmu pasti dijamin menyukainya, dengan cara kamu mengkombinasikan makanan basah dan kering terbaik bernutrisi seimbang untuknya.\n\nWhiskas Makanan Kering / Dry Food tersedia dengan berbagai rasa seperti rasa seafood, rasa ocean fish, rasa tuna, rasa mackerel dan rasa ocean fish dengan susu.', 85000, 83000, 'WDA1PGSF', 'instock', 1, 20, '1701178454.webp', NULL, 3, '2023-11-28 13:34:14', '2023-11-28 13:34:14');
INSERT INTO `products` VALUES (5, 'Whiskas® Dry Adult 1+ Tuna Flavour', 'whiskas-dry-adult-1-tuna-flavour', 'Diformulasikan secara khusus untuk menjaga kesehatan kulit dan bulu yang indah serta meningkatkan keaktifan kucing.', 'WHISKAS makanan kucing yang sehat dan seimbang, secara spesifik di formulasikan untuk memenuhi kebutuhan nutrisi kucing pada setiap masa kehidupannya. Jika kucingmu memasuki usia 12 bulan, maka ia menjadi kucing dewasa dan tentunya membutuhkan nutrisi yang berbeda pula. Perubahan dan perbedaan nutrisi yang dibutuhkan ini, akan berubah pula ketika mereka berganti usia menjadi 7 tahun.\n\nKucing dengan usia 1-6 tahun membutuhkan banyak latihan dan bermain serta makanan yang seimbang untuk menjaganya tetap aktif dan sehat. Kucing adalah karnivora, sedangkan manusia , omnivora, jadi kucing membutuhkan 2 kali lebih banyak protein daripada manusia. Mereka juga membutuhkan 41 kandungan nutrisi esensial untuk kesehatan yang optimum. WHISKAS mengerti akan kandungan nutrisi yang dibutuhkan oleh kucing dan setiap produk secara spesifik di formulasikan dengan kandungan nutrisi yang lengkap dan seimbang.\n\nMengandung Omega 3 & 6 , serta Zinc untuk kesehatan kulit dan bulu yang indah.\nMengandung Vit.A dan taurine untuk kesehatan matanya\nMengandung protein dari ikan yang segar, lemak yang baik, vitamin dan mineral yang seimbang, untuk tetap menjaga kucingmu aktif dan bahagia.\n \n\nBaik keduanya, WHISKAS Dry dan Wet food merupakan suatu kombinasi yang seimbang dan lengkap untuk menunjang kebutuhan nutrisi kucingmu. Untuk kelengkapan nutrisi yang optimal, kamu dapat mengkombinasikan antara keduanya untuk kucing kesayanganmu di rumah. Wet food atau Makanan basah mengandung air untuk menjaga kesehatan saluran kencingnya dan juga megandung kalori yang baik. Potongan kantung dadu kecil WHISKAS dry food ./ kering , membantu untuk membersihkan karang gigi dan menjaga kesehatan gusinya.\nKucingmu pasti dijamin menyukainya, dengan cara kamu mengkombinasikan makanan basah dan kering terbaik bernutrisi seimbang untuknya.', 65000, 62000, 'WDA1PTF', 'instock', 1, 33, '1701178722.webp', NULL, 3, '2023-11-28 13:38:42', '2023-11-28 13:38:42');
INSERT INTO `products` VALUES (6, 'Whiskas® Pouch Dewasa 1+ Tuna', 'whiskas-pouch-dewasa-1-tuna', 'Makanan kucing dari tuna yang lezat dan bernutrisi lengkap ini sangat cocok bagi kucing Anda yang berusia 1+ tahun untuk menjaga kesehatannya.', 'Kucing dengan usia 1-6 tahun membutuhkan banyak latihan dan bermain serta makanan yang seimbang untuk menjaganya tetap aktif dan sehat. Kucing adalah karnivora, sedangkan manusia, omnivora, jadi kucing membutuhkan 2 kali lebih banyak protein daripada manusia. Mereka juga membutuhkan 41 kandungan nutrisi esensial untuk kesehatan yang optimum. Whiskas Tuna Basah mengerti akan kandungan nutrisi yang dibutuhkan oleh kucing dan setiap produk secara spesifik di formulasikan dengan kandungan nutrisi yang lengkap dan seimbang.\n\nSepesifik diformulasikan untuk kucing usia 1 tahun keatas\nMengandung Omega 3 & 6 , serta Zinc untuk kesehatan kulit dan bulu yang indah.\nMengandung Vit.A dan taurine untuk kesehatan matanya\nMengandung protein dari ikan yang segar, lemak yang baik, vitamin dan mineral yang seimbang, untuk tetap menjaga kucingmu aktif dan bahagia.\nMengandung Antioksidan (Vit E dan Selenium ) untuk kesehatan sistem immunnya.', 7000, 6000, 'WPD1PT', 'instock', 1, 40, '1701179267.webp', NULL, 4, '2023-11-28 13:47:47', '2023-11-28 14:13:01');
INSERT INTO `products` VALUES (7, 'Whiskas® Pouch Dewasa 1+ Ikan Kembung', 'whiskas-pouch-dewasa-1-ikan-kembung', 'Kelezatan ikan kembung dambaan semua kucing, dengan nutrisi lengkap yang diperoleh dari 41 jenis nutrien untuk kucing Anda.', 'Kucing dengan usia 1-6 tahun membutuhkan banyak latihan dan bermain serta makanan yang seimbang untuk menjaganya tetap aktif dan sehat. Kucing adalah karnivora, sedangkan manusia, omnivora, jadi kucing membutuhkan 2 kali lebih banyak protein daripada manusia. Mereka juga membutuhkan 41 kandungan nutrisi esensial untuk kesehatan yang optimum. Whiskas Makanan Basah mengerti akan kandungan nutrisi yang dibutuhkan oleh kucing dan setiap produk secara spesifik di formulasikan dengan kandungan nutrisi yang lengkap dan seimbang.>\n\nSepesifik diformulasikan untuk kucing usia 1 tahun keatas\nMengandung Omega 3 & 6 , serta Zinc untuk kesehatan kulit dan bulu yang indah.\nMengandung Vit.A dan taurine untuk kesehatan matanya\nMengandung protein dari ikan yang segar, lemak yang baik, vitamin dan mineral yang seimbang, untuk tetap menjaga kucingmu aktif dan bahagia.\nMengandung Antioksidan (Vit E dan Selenium )  untuk kesehatan sistem immunnya.', 8000, 7000, 'WPD1PIK', 'instock', 1, 15, '1701180739.webp', NULL, 4, '2023-11-28 14:12:19', '2023-11-28 14:12:19');
INSERT INTO `products` VALUES (8, 'ROYAL CANIN® Mini Adult in Gravy', 'royal-canin-mini-adult-in-gravy', 'Complete feed for dogs - For adult small breed dogs (from 1 to 10 kg) - From 10 months to 12 years old.', 'ROYAL CANIN® Mini Adult in Gravy is specially formulated with all the nutritional needs of your mini adult dog in mind.\nROYAL CANIN® Mini Adult in Gravy is suitable for all small dogs aged between 10 months – 12 years that weigh up to 10kg.\nThe formulation of specific nutrients in ROYAL CANIN® Mini Adult in Gravy helps to support your dog’s digestive health, as well as helping to maintain a good balance of intestinal flora.\nThe carefully adapted energy content in ROYAL CANIN® Mini Adult in Gravy helps to maintain an ideal weight in small breed dogs like yours.\nWhat’s more, ROYAL CANIN® Mini Adult in Gravy is also enriched with nutrients that help to support your adult dog’s healthy skin and coat condition – such as Omega-3 fatty acids EPA and DHA. \nTo cater to each dog’s individual preferences, ROYAL CANIN® Mini Adult is also available as dry food, with crunchy and tasty kibble.\nIf you’re considering mixed feeding, simply follow our feeding guidelines to ensure your dog gets an accurate amount of both wet and dry food for optimal benefit.', 70000, 68000, 'RCMAIG', 'instock', 0, 10, '1701181341.webp', NULL, 2, '2023-11-28 14:22:21', '2023-11-28 14:23:53');
INSERT INTO `products` VALUES (9, 'ROYAL CANIN® Medium Starter Mother & Babydog', 'royal-canin-medium-starter-mother-babydog', 'Complete feed for dogs - For the medium breed bitch (from 11 to 25 kg) and her puppies: bitch at the end of gestation and during lactation - Weaning puppies up to 2 months old', 'ROYAL CANIN® Medium Starter Mother & Babydog is specially formulated to support the nutritional needs of new mothers and their puppies. This formula is suitable for medium-sized adult dogs that weigh between 11 and 25 kg, and for weaning puppies up to 2 months old.\nThis tailored diet is specially adapted to meet your medium-sized dog’s high energy needs, while also supporting the healthy development of your nursing puppies.\nIt also contains a proven complex including Vitamins C and E to support healthy immune system development.\nThis formula includes beneficial prebiotics and highly digestible proteins to help support a healthy balance of intestinal microbiota (gut flora) for good digestion.\nROYAL CANIN® Medium Starter Mother & Babydog is enriched with Omega-3 fatty acids to help support healthy brain development in young puppies.\nThe kibble in ROYAL CANIN® Medium Starter Mother & Babydog is easy to rehydrate with water, giving it an appetising porridge texture that’s ideal for weaning puppies.\nIn the short span of 8 weeks, your puppies will need a diet that’s specially adapted to meet their nutritional needs during the next growth phase. At this stage, you can transition them onto ROYAL CANIN® Medium Puppy, available either as a dry kibble diet or with wet chunks in gravy.', 110000, 105000, 'RCMSMB', 'instock', 0, 8, '1701181661.webp', NULL, 1, '2023-11-28 14:27:41', '2023-11-28 14:27:41');
INSERT INTO `products` VALUES (10, 'Bola Mainan Cakar Kucing - Cat Scratche - Small', 'bola-mainan-cakar-kucing-cat-scratche-small', 'Kucing memiliki keinginan alami untuk menggaruk: tindakan yang dapat membantu kucing untuk mengasah kukunya dan untuk menandai wilayah mereka', 'Kucing memiliki keinginan alami untuk menggaruk: tindakan yang dapat membantu kucing untuk mengasah kukunya dan untuk menandai wilayah mereka dengan kelenjar bau di kaki mereka. Penyediaan garukan kucing bertujuan agar kucing tidak menggaruk pada furnitur yang ada di rumah yang dapat merusak furnitur.\n\nKelebihan:\n🐾Bentuk bola yg bisa diputar 360 derajat sangat menarik untuk bermain dan membawa kegembiraan bagi anabul\n🐾Mudah untuk dipasang dan dimainkan\n🐾Terbuat dari kayu solid dan bahan tali rami natural yg aman untuk anabul\n🐾Tampilan minimalist dengan desain modern', 55000, 50000, 'BMCKCSS', 'instock', 0, 5, '1701183147.webp', NULL, 5, '2023-11-28 14:52:27', '2023-11-28 14:52:27');

-- ----------------------------
-- Table structure for shippings
-- ----------------------------
DROP TABLE IF EXISTS `shippings`;
CREATE TABLE `shippings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shippings_order_id_foreign`(`order_id` ASC) USING BTREE,
  CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shippings
-- ----------------------------

-- ----------------------------
-- Table structure for transactions
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `transactions_user_id_foreign`(`user_id` ASC) USING BTREE,
  INDEX `transactions_order_id_foreign`(`order_id` ASC) USING BTREE,
  CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transactions
-- ----------------------------
INSERT INTO `transactions` VALUES (4, 2, 4, 'cod', 'pending', '2023-12-03 17:17:27', '2023-12-03 17:17:27');
INSERT INTO `transactions` VALUES (5, 2, 5, 'cod', 'pending', '2023-12-04 04:36:20', '2023-12-04 04:36:20');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for Normal User',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin@furriend.io', NULL, '$2y$10$JC2QZVuOW/9LpRFg1mvJguqoGKWHa6Be3Ee7bEoLX9IReClaT7Rlq', 'ADM', NULL, '2023-11-28 08:02:40', '2023-11-28 08:02:40');
INSERT INTO `users` VALUES (2, 'Alvin Febrianto', 'alvin@furriend.io', NULL, '$2y$10$qhn6LB/Ewayn2PaY45vF4OPjykgkL7mO6VhXZuOsaY97H337lUedG', 'USR', NULL, '2023-11-28 09:20:29', '2023-11-28 09:20:29');
INSERT INTO `users` VALUES (3, 'Fisma Meividianugraha Subani', 'fisma@furriend.io', NULL, '$2y$10$5ewTn3EUhOKNpMYEPtTEwexsSdXY8gxS5o5ABG/QiD5qclf2Vf7cm', 'USR', NULL, '2023-12-04 12:03:58', '2023-12-04 12:03:58');
INSERT INTO `users` VALUES (4, 'Rahmad Firdiansyah', 'rahmad@furriend.io', NULL, '$2y$10$h1A8uG7lL8Q9x0uFwjX5KeEixiJbI0IFqS2hSDxf5qdft0DHq.TV2', 'USR', NULL, '2023-12-04 12:07:51', '2023-12-04 12:07:51');

SET FOREIGN_KEY_CHECKS = 1;