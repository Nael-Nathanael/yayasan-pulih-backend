/*
 Navicat Premium Data Transfer

 Source Server         : Localhost MySQL
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : pulih

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 07/08/2023 07:30:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imgUrl` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`slug`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of articles
-- ----------------------------

-- ----------------------------
-- Table structure for lines
-- ----------------------------
DROP TABLE IF EXISTS `lines`;
CREATE TABLE `lines`  (
  `group_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of lines
-- ----------------------------
INSERT INTO `lines` VALUES ('HOME', 'HOME_ACARA_TITLE', 'Acara', '2023-08-06 11:15:09', '2023-08-06 12:22:02');
INSERT INTO `lines` VALUES ('HOME', 'HOME_ARTIKEL_TITLE', 'Artikel', '2023-08-06 11:15:09', '2023-08-06 12:22:02');
INSERT INTO `lines` VALUES ('HOME', 'HOME_BANNER_BUTTON_TEXT', 'PELAJARI LEBIH LANJUT', '2023-08-06 11:07:32', '2023-08-06 11:07:32');
INSERT INTO `lines` VALUES ('HOME', 'HOME_BANNER_BUTTON_URL', '#', '2023-08-06 11:07:32', '2023-08-06 11:07:32');
INSERT INTO `lines` VALUES ('HOME', 'HOME_BANNER_HEADLINE', '<p>Memulihkan <strong>Harapan</strong>, <br>Menggalang <strong>Perdamaian</strong>, <br>dan <strong>Memutus rantai kekerasan</strong></p>', '2023-08-06 03:42:49', '2023-08-06 11:07:32');
INSERT INTO `lines` VALUES ('HOME', 'HOME_BANNER_IMAGE', 'http://localhost:8080/uploads/placeholder_bg_2.png', '2023-08-06 03:51:28', '2023-08-06 03:51:28');
INSERT INTO `lines` VALUES ('HOME', 'HOME_BANNER_TAG', 'Pulih', '2023-08-06 03:36:13', '2023-08-06 11:07:32');
INSERT INTO `lines` VALUES ('HOME', 'HOME_DONATE_BUTTON_TEXT', 'Donasi Sekarang', '2023-08-06 11:17:20', '2023-08-06 11:18:03');
INSERT INTO `lines` VALUES ('HOME', 'HOME_DONATE_FULLTEXT', 'Kami tidak dapat membantu semua orang, tapi semua orang bisa membantu seseorang', '2023-08-06 11:17:20', '2023-08-06 11:18:03');
INSERT INTO `lines` VALUES ('HOME', 'HOME_DONATE_IMAGE', 'http://localhost:8080/uploads/placeholder_bg_3.png', '2023-08-06 11:40:00', '2023-08-06 11:40:00');
INSERT INTO `lines` VALUES ('HOME', 'HOME_MITRA_TITLE', 'Mitra', '2023-08-06 11:15:35', '2023-08-06 12:22:02');
INSERT INTO `lines` VALUES ('LAPAUDIT', 'LAPAUDIT_BANNER_HEADLINE', '<p>Raport Keberhasilan:<br><strong>Laporan Audit</strong> Yayasan Pulih</p>', '2023-08-06 18:21:47', '2023-08-06 18:21:47');
INSERT INTO `lines` VALUES ('LAPAUDIT', 'LAPAUDIT_BANNER_IMAGE', 'http://localhost:8080/uploads/placeholder_bg_20.png', '2023-08-06 18:21:52', '2023-08-06 18:21:52');
INSERT INTO `lines` VALUES ('LAPAUDIT', 'LAPAUDIT_BANNER_TAG', 'LAPORAN AUDIT', '2023-08-06 18:21:47', '2023-08-06 18:21:47');
INSERT INTO `lines` VALUES ('LAPAUDIT', 'LAPAUDIT_MAINFILE', 'http://localhost:8080/uploads/Proposal%20Pembaruan%20Website%20YayasanPulih.org.pdf', '2023-08-06 18:29:29', '2023-08-06 18:37:43');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_BANNER_HEADLINE', '<p><strong>Sejarah Pulih</strong>,&nbsp;<br><strong>Anggota Tim Pulih</strong>,<br>&amp; bagaimana kita <strong>bekerja bersama</strong>.</p>', '2023-08-06 12:34:11', '2023-08-06 14:03:43');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_BANNER_IMAGE', 'http://localhost:8080/uploads/placeholder_bg_4.png', '2023-08-06 12:34:18', '2023-08-06 12:34:18');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_BANNER_TAG', 'TENTANG PULIH', '2023-08-06 12:34:11', '2023-08-06 14:03:43');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_HISTORY_CONTENT', 'Pulih Foundation is a nonprofit professional organization set up on July 24, 2002. Our main focus is in prevention and intervention of violence, trauma handling, and psychosocial empowerment to individuals and the society. Our founders Dr. Kristi Poerwandari, Psi, M.Hum., Dr. Livia Istania Dea Flavia, Psi, M.Sc., Prof. Dr. Saparinah Sadli, Dr. Karlina Leksono Supeli, Prof. Irwanto, PhD, and Ali Aulia Ramly, S.Psi, M.A acknowledged that there is a gap between the need of professional and affordable psychological services for the community and the availability of compassionate and gender sensitive psychologist who under stand the issues in a social context.', '2023-08-06 12:44:23', '2023-08-06 12:44:23');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_HISTORY_COVER', 'http://localhost:8080/uploads/placeholder_bg_5.png', '2023-08-06 12:39:13', '2023-08-06 12:39:13');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_HISTORY_MORE_LEFT', 'Pulih foundation sees that the need to end the cycle of violence are very crucial. Most of Pulih beneficiaries are women and children who are victims of violence, have been exposed to risk of revictimization, or even as perpetrators of violence.\r\n\r\nWe work endlessly as a team and as a part of a wider system of service providers to assist survivors, to educate and advocate the need of the victims, and conduct research for a better understanding of the issue. We also provide psychological examination as a part of legal process.', '2023-08-06 12:46:47', '2023-08-06 12:46:47');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_HISTORY_MORE_RIGHT', 'http://localhost:8080/uploads/placeholder_bg_6.png', '2023-08-06 12:39:19', '2023-08-06 12:39:19');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_HISTORY_TAG', 'Sejarah Pulih', '2023-08-06 12:44:37', '2023-08-06 12:50:34');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_HISTORY_TITLE', 'Tentang Pulih', '2023-08-06 12:44:37', '2023-08-06 12:50:34');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_CONTENT_1', 'Pasar Minggu office runs a psychology clinic as its direct services, providing counseling and psychosocial empowerment to children, youth and adult, either as individuals or as groups, including psychological examination for legal purposes. As the leading institution to introduce “community-based psychosocial recovery and empowerment”, Pulih is continuously providing capacity building to other civil society groups, as well as to government officials. This office also runs several community programs as a collaboration with other institution.', '2023-08-06 13:21:25', '2023-08-06 13:21:25');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_CONTENT_2', 'ince 2004, Pulih staff had worked in Aceh on psychological empowerment of children, then opened its office in Banda Aceh in early 2005 in order to deliver better services post-tsunami. The Pulih Aceh team is consisted of volunteers from various background who then were trained as social workers and providers of psychosocial services with strong perspectives of gender equality in a plural society. Pulih Aceh managed ‘Pulih Institute’ which provides training to young volunteers on psychosocial empowerment.', '2023-08-06 13:21:45', '2023-08-06 13:21:45');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_CONTENT_3', 'Pulih @the Peak is set up in 2014 to expand and spread the wings of Pulih in social entrepreneurship and established as a social enterprise. In addition to provide counseling and other psychosocial empowerment to women and children, Pulih@the Peak is keen in finding ways and programs to ensure its financial independence including fundraising activities. Currently it has several psychoeducation programs to women and youth running, such as family income management.', '2023-08-06 13:22:08', '2023-08-06 13:22:08');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_COORDINATOR_1', 'Coordinated by Dian Indraswari', '2023-08-06 13:21:25', '2023-08-06 13:21:25');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_COORDINATOR_2', 'Coordinated by Dian Marlina', '2023-08-06 13:21:45', '2023-08-06 13:21:45');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_COORDINATOR_3', 'Coordinated by Livia Iskandar', '2023-08-06 13:22:08', '2023-08-06 13:22:08');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_IMG_1', 'http://localhost:8080/uploads/placeholder_bg_7.png', '2023-08-06 13:22:19', '2023-08-06 13:22:19');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_IMG_2', 'http://localhost:8080/uploads/placeholder_bg_8.png', '2023-08-06 13:22:23', '2023-08-06 13:22:23');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_IMG_3', 'http://localhost:8080/uploads/placeholder_bg_9.png', '2023-08-06 13:22:28', '2023-08-06 13:22:28');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_NAME_1', 'Pasar Minggu Office', '2023-08-06 13:21:25', '2023-08-06 13:21:25');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_NAME_2', 'Banda Aceh', '2023-08-06 13:21:45', '2023-08-06 13:21:45');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_NAME_3', 'The Peak', '2023-08-06 13:22:08', '2023-08-06 13:22:08');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_TAG', 'A PLACE WE CALLED HOME', '2023-08-06 13:11:22', '2023-08-06 13:11:22');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_TITLE', 'Currently Pulih has three offices, with its own unique characteristics yet complementary to each other', '2023-08-06 13:11:22', '2023-08-06 13:11:22');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_TITLE_1', 'Pulih Foundation', '2023-08-06 13:21:25', '2023-08-06 13:21:25');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_TITLE_2', 'Pulih Aceh', '2023-08-06 13:21:45', '2023-08-06 13:21:45');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_TITLE_3', 'Pulih @The Peak', '2023-08-06 13:22:08', '2023-08-06 13:22:08');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_URL_1', 'https://yayasanpulih.org', '2023-08-06 13:21:25', '2023-08-06 13:21:25');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_URL_2', '#', '2023-08-06 13:21:45', '2023-08-06 13:21:45');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_OFFICES_URL_3', '#', '2023-08-06 13:22:08', '2023-08-06 13:22:08');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_STRUKTUR_ORGANISASI', 'http://localhost:8080/uploads/placeholder_bg_19.png', '2023-08-06 13:39:47', '2023-08-06 14:27:04');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_IMG_1', 'http://localhost:8080/uploads/placeholder_bg_18.png', '2023-08-06 13:49:07', '2023-08-06 13:49:07');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_IMG_2', 'http://localhost:8080/uploads/placeholder_bg_17.png', '2023-08-06 13:49:03', '2023-08-06 13:49:03');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_IMG_3', 'http://localhost:8080/uploads/placeholder_bg_16.png', '2023-08-06 13:48:58', '2023-08-06 13:48:58');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_IMG_4', 'http://localhost:8080/uploads/placeholder_bg_15.png', '2023-08-06 13:48:53', '2023-08-06 13:48:53');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_IMG_5', 'http://localhost:8080/uploads/placeholder_bg_14.png', '2023-08-06 13:48:50', '2023-08-06 13:48:50');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_IMG_6', 'http://localhost:8080/uploads/placeholder_bg_13.png', '2023-08-06 13:48:46', '2023-08-06 13:48:46');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_NAME_1', 'Yosephine Dian Indraswari', '2023-08-06 13:47:44', '2023-08-06 13:47:44');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_NAME_2', 'I G. A. A Jackie Viemilawati', '2023-08-06 13:47:56', '2023-08-06 13:47:56');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_NAME_3', 'Sidiq Gunawan', '2023-08-06 13:48:09', '2023-08-06 13:48:09');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_NAME_4', 'Danika Nurkalista', '2023-08-06 13:48:19', '2023-08-06 13:48:19');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_NAME_5', 'Ika Putri Dewi', '2023-08-06 13:48:27', '2023-08-06 13:48:27');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_NAME_6', 'Fitriani Mutiara', '2023-08-06 13:48:35', '2023-08-06 13:48:35');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_POSITION_1', 'Executive Director', '2023-08-06 13:47:44', '2023-08-06 13:47:44');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_POSITION_2', 'Deputy Program', '2023-08-06 13:47:56', '2023-08-06 13:47:56');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_POSITION_3', 'Finance Manager', '2023-08-06 13:48:09', '2023-08-06 13:48:09');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_POSITION_4', 'Clinic Manager', '2023-08-06 13:48:19', '2023-08-06 13:48:19');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_POSITION_5', 'Case Coordinator', '2023-08-06 13:48:27', '2023-08-06 13:48:27');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_POSITION_6', 'Human Resource Development', '2023-08-06 13:48:35', '2023-08-06 13:48:35');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_TAG', 'OUR TEAM', '2023-08-06 13:42:55', '2023-08-06 13:42:55');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_TEAM_TITLE', 'THE BIG TEAM', '2023-08-06 13:42:55', '2023-08-06 13:42:55');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_CARD_BG', 'http://localhost:8080/uploads/placeholder_bg_12.png', '2023-08-06 13:29:18', '2023-08-06 13:29:18');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_CARD_CONTENT', 'Because we understand that we cannot work alone in this field. Therefore, we always make sure that we can be accounted for. Especially in terms of psychosocial intervention, capacity building, technical assistance and publication.', '2023-08-06 13:29:27', '2023-08-06 13:29:40');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_CARD_FOOTER', 'We guarantee that we always. Can Be Accounted for.', '2023-08-06 13:29:27', '2023-08-06 13:29:40');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_CARD_HEADLINE', 'AS A TEAM, PULIH FOUNDATION ALSO WORK BASED ON NETWORKING.', '2023-08-06 13:29:27', '2023-08-06 13:29:40');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_CONTENT_LEFT', 'We work democratically and upholding human rights. We serve our client professionally and impartially. We always promote social and gender justice for all.', '2023-08-06 13:28:54', '2023-08-06 13:28:54');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_CONTENT_RIGHT', 'We are ensuring to be transparent in all of our works, especially in financial related matter. We uphold peace and anti-violence attitude towards everyone in our works.', '2023-08-06 13:29:01', '2023-08-06 13:29:01');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_IMG_LEFT', 'http://localhost:8080/uploads/placeholder_bg_10.png', '2023-08-06 13:29:06', '2023-08-06 13:29:06');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_IMG_RIGHT', 'http://localhost:8080/uploads/placeholder_bg_11.png', '2023-08-06 13:29:11', '2023-08-06 13:29:11');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_TAG', 'OUR VALUE', '2023-08-06 13:28:21', '2023-08-06 13:28:21');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VALUE_TITLE', 'To support our work, we always holding up to our organizational value.', '2023-08-06 13:28:21', '2023-08-06 13:28:21');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_CONTENT_MS_1', 'Membudayakan layanan dan dukungan psikologis sebagai layanan yang dapat diakses oleh seluruh kalangan umum.', '2023-08-06 13:02:49', '2023-08-06 13:02:49');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_CONTENT_MS_2', 'Mengembangkan kapasitas psikososial para lembaga di bidang kemanusiaan dan pekerja sosial.', '2023-08-06 13:02:55', '2023-08-06 13:03:03');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_CONTENT_MS_3', 'Memperkuat peran psikologis dalam proses penanganan hukum untuk memastikan keadilan dalam kasus-kasus kekerasan.', '2023-08-06 13:03:07', '2023-08-06 13:03:07');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_CONTENT_MS_4', 'Menjadi lembaga tolak ukur yang menggunakan perspektif dukungan psikososial dalam penanganan kasus kekerasan terhadap kelompok rentan.', '2023-08-06 13:03:13', '2023-08-06 13:03:13');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_CONTENT_MS_5', 'Membuktikan Pulih sebagai lembaga yang terjangkau oleh masyarakat, terpercaya, mandiri, dan terus berkembang hingga saat ini.', '2023-08-06 13:03:19', '2023-08-06 13:03:19');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_CONTENT_VS', 'The vision of Pulih Foundation is the attainment of prosperous and resilient society through psychosocial which up holds human dignity and rights.', '2023-08-06 12:53:32', '2023-08-06 12:53:32');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_IMG_MS_1', 'http://localhost:8080/uploads/private_con_1.svg', '2023-08-06 13:02:12', '2023-08-06 13:02:12');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_IMG_MS_2', 'http://localhost:8080/uploads/private_con_2.svg', '2023-08-06 13:02:16', '2023-08-06 13:02:16');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_IMG_MS_3', 'http://localhost:8080/uploads/private_con_3.svg', '2023-08-06 13:02:21', '2023-08-06 13:02:21');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_IMG_MS_4', 'http://localhost:8080/uploads/private_con_4.svg', '2023-08-06 13:02:26', '2023-08-06 13:02:26');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_IMG_MS_5', 'http://localhost:8080/uploads/private_con_5.svg', '2023-08-06 13:02:31', '2023-08-06 13:02:31');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_IMG_VS', 'http://localhost:8080/uploads/private_con.svg', '2023-08-06 12:56:29', '2023-08-06 12:56:29');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_TAG', 'Visi & Misi', '2023-08-06 12:49:30', '2023-08-06 12:49:44');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_TITLE_MS', 'Misi PULIH', '2023-08-06 12:49:44', '2023-08-06 12:49:44');
INSERT INTO `lines` VALUES ('TENTANG', 'TENTANG_VSMS_TITLE_VS', 'Visi PULIH', '2023-08-06 12:49:30', '2023-08-06 12:53:32');

SET FOREIGN_KEY_CHECKS = 1;
