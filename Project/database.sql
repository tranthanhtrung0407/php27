/*
 Navicat Premium Data Transfer

 Source Server         : php27_blogs
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : php27_blogs

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 23/04/2021 22:29:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL COMMENT 'Danh mục cha',
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'Mô tả thể loại',
  `created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 48 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Cuộc chiến với 3 Đô Đốc', NULL, '10_cate.png', 'hanh-trinh-cuu-ace', 'Đụng độ 3 đô đốc Hải quân trong hành trình cứu anh trai của MonKey D.Lufy', '2021-04-21 12:23:59');
INSERT INTO `categories` VALUES (2, 'Đối đầu KataKuri - con trai BigMom', 1, '1_cate.jpg', 'haki-ba-vuong', 'Luffy và KataKuri trận chiến  trong thế giới gương', '2021-04-21 12:23:55');
INSERT INTO `categories` VALUES (3, 'Đại chiến Luffy với người cá Arlong', 1, '3_cate.jpg', 'nguoi-ca', 'Nami là một trong số ít người được Luffy tin tưởng giao cho chiếc mũ rơm khi cậu bận đánh nhau với đối thủ mạnh', '2021-04-21 11:56:49');
INSERT INTO `categories` VALUES (5, 'Giải cứu Nico Robin, phá hủy Trụ sở Hải Quân', NULL, '/15_cate.png', 'cuu-robin', 'Một trận đánh vô cùng gay cấn – Lucci, một thành viên tổ chức CP-9 thông thạo lục thức và kèm theo có sức mạnh của trái ác quỷ báo đốm. Luffy thật sự rất vất vả mới thắng được hắn', '2021-04-21 12:28:53');
INSERT INTO `categories` VALUES (6, ' Luffy vs Enel, tái đấu với Trái Ác Quỷ hệ Sét', 5, '2_cate.png', 'cuoc-chien-voi-set', 'Sở hữu trái ác quỷ Goro Goro Nomi, Trái ác quỷ hệ Logia, Enel là một trong những nhân vật có sức mạnh kinh hoàng nhất One Piece, đáng tiếc Luffy lại vô hiệu hóa được hắn.', '2021-04-21 12:28:30');
INSERT INTO `categories` VALUES (7, 'Mũ Rơm với Crocodile,trận chiến với cát', 5, '6_cate.png', 'cuoc-chien-voi-cat', 'Crocodile sở hữu sức mạnh của trái ác quỷ Logia – trái cát Suna Suna No Mi, Crocodile có khả năng sử dụng một dạng khác của nó, nó có thể gọi là thức tỉnh trái ác quỷ khiến Luffy vô cùng vất vả', '2021-04-21 12:27:44');
INSERT INTO `categories` VALUES (41, 'Luffy vs BlackBeard, Thế lực Bóng tối', NULL, '9_cate.png', 'rau-den', 'Cuộc chiến diễn ra tại Impel Down, Luffy Vs BlackBeard có một cuộc chạm chán nhỏ, tuy nhiên phải dừng lại – để biết lý do các bạn hãy xem tập 447, mình không tiết lộ ra được, vì làm thế sẽ mất hay', '2021-04-21 12:27:32');
INSERT INTO `categories` VALUES (42, 'Luffy vs Moriah, Ai sẽ là người chiến thắng', 1, '8_cate.png', 'dau-voi-nguoi-bong', 'Moriah, sỡ hữu trái ác quỷ Kage Kage Nomi hắn có thể cắt bóng của Luffy và tại trận chiến này chúng ta thấy Luffy ở dạng NightMare rất mạnh mẽ và ấn tượng', '2021-04-21 12:26:14');
INSERT INTO `categories` VALUES (43, 'Luffy vs Hody Jones, Bùng nổ HaKi', 1, '4_cate.png', 'danh-nguoi-ca', 'Hody Jones – một người cá thuộc loài cá mập trắng lớn, hắn kế thừa tư tưởng của Arlong – cựu đội trưởng của băng hải tặc New FishMan', '2021-04-21 12:27:13');
INSERT INTO `categories` VALUES (44, 'Luffy vs Caesar Clown, Niềm tin vào sức mạnh', 1, '5_cate.png', 'nguoi-doc', 'Caesar Clown ăn trái ác quỷ Gas Gas (Trái khí độc) – hắn là đồng nghiệp cũ của nhà khoa học thiên tài Vegapunk, hiện tại hắn đang bị áp giải đi cùng với băng Mũ Rơm, mong hắn sẽ trở thành người tốt ở các tập tiếp theo.', '2021-04-21 12:26:56');
INSERT INTO `categories` VALUES (45, 'Charlotte Katakuri, mức truy nã trên 1 tỷ Beri', NULL, '11_cate.png', 'no-kho-tuka', 'Charlotte Katakuri là con trai thứ hai và là con thứ ba của Gia đình Charlotte, anh trai sinh ba của Charlotte Daifuku và Charlotte Oven. Anh là một trong ba tư lệnh ngọt của băng hải tặc Big Mom cũng như Bộ trưởng Bột của Totto Land (粉 Kona Daijin), Quản lý đảo Komugi.\r\n\r\n\r\n\r\nDo hành động và vai trò của mình, anh là nhân vật phản diện chính trong Whole Cake Island Arc.', '2021-04-21 12:29:57');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'Tiêu đề bài viết',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'Mô tả bài viết',
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'ảnh bài viết',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'Nội dung bài viết',
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `view_count` bigint(20) NULL DEFAULT NULL COMMENT 'số lượng xem',
  `user_id` int(11) NULL DEFAULT NULL COMMENT 'tác giả',
  `category_id` int(11) NULL DEFAULT NULL COMMENT 'Bài post này thuộc danh mục nào',
  `created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `category_id`(`category_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 60 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 'Monkey D.Luffy', 'Khát vọng bùng cháy', '/11_post.jpg', 'Một cậu bé tên Monkey D. Luffy, được khuyến khích bởi người anh hùng thuở nhỏ Shanks ', 'mon-key', 3, 2, 7, '2021-04-22 14:20:12');
INSERT INTO `posts` VALUES (33, 'Monkey.D.Luffy', 'Nhiệt huyết dâng trào', '9_post.gif', 'Luffy lãnh đạo nhóm hải tặc Mũ Rơm qua East Blue (Biển Đông) và rồi tiến đến Grand Line. Cậu theo dấu chân của vị vua hải tặc quá cố, Gol D. Roger, chu du từ đảo này sang đảo khác để đến với kho báu vĩ đại One Piece. Mỗi thành viên trong nhóm đều có 1 quá khứ rất đặc biệt và đáng buồn. Ngoài khả năng đặc biệt trong công việc của mình, bất cứ thành viên nào cũng có khả năng chiến đấu rất tốt.', 'monkey-d-luffy', 1, 1, 2, '2021-04-21 12:11:43');
INSERT INTO `posts` VALUES (34, 'Mũ Rơm', 'Theo đuổi ước mơ', '6_post.jpg', 'One Piece bắt đầu từ hai truyện ngắn có tên Romance Dawn – sau này được dùng cho tên của tập một và chương một của One Piece. Hai truyện ngắn ấy kể về Luffy, và sử dụng những yếu tố sau này sẽ nằm trong bộ truyện chính. Truyện ngắn đầu tiên được xuất bản vào tháng 8/1996 trong một ấn bản đặc biệt của Shonen Jump và sau đó trong One Piece Red. Truyện thứ hai được xuất bản trong ấn bản số 41 của Shonen Jump năm 1996 và in lại ở tập truyện ngắn của Oda: Wanted!', 'mu-rom', 2, 2, 2, '2021-04-21 12:10:06');
INSERT INTO `posts` VALUES (35, 'Roronoa Zoro', 'Thợ Săn Hải Tặc', '1_post.jpg', 'Xuất thân từ một \"Thợ săn Hải Tặc\", Roronoa Zoro là thành viên đầu tiên của băng hải tặc Mũ rơm. Là kiếm sĩ cũng như là bậc thầy kiếm thuật duy nhất trong nhóm, sử dụng thành thục 3 thanh kiếm cùng lúc (Tam kiếm phái) và được biết hiện tại anh có thể sử dụng hai loại Haki. Đồng thời là một trong những thành viên mạnh nhất trong nhóm.', 'zo-ro', 310, 1, 3, '2021-04-21 11:53:25');
INSERT INTO `posts` VALUES (36, 'Vinsmoke Sanji', 'Hắc Cước Chân Đen Sanji', '2_post.jpg', 'Sanji là người thứ 4 được Luffy mời vào nhóm, hiện là đầu bếp trên tàu của Luffy.Trước đây,do đã từng được hải tặc \"Zeff Chân đỏ\" cứu mạng, nên cậu đã theo ông học tập và trở thành Phó bếp của tiệm ăn trên biển Baratie do Zeff mở ra. Lúc Luffy đặt chân đến đây cũng là lúc là Hải tặc Kreig cùng đội quân của mình đến quấy phá. Sanji cùng với Luffy và mọi người đã đánh đuổi được bọn chúng.Lúc tàu của Luffy khởi hành cũng chính là lúc mà Sanji chính thức trở thành thành viên, Bếp trưởng trên tàu. ', 'san-ji', 410, 3, 1, '2021-04-21 11:58:40');
INSERT INTO `posts` VALUES (45, 'Jinbe', 'Kỵ sĩ của Biển Jinbe', '4_post.jpg', '“Kỵ sĩ của Biển” Jinbe là một thành viên của băng Hải tặc Mũ Rơm và cũng là người lái tàu trong đoàn. Cho tới hiện thời, ông chính thức là thành viên thứ mười của băng Mũ Rơm và thứ chín gia nhập đoàn của Luffy, cũng như là thành viên duy nhất đến từ Đảo Người Cá.\r\n\r\nƯớc mơ của ông là thực hiện được di nguyện của thuyền trưởng cũ của ông là Fisher Tiger về việc con người và người cá có thể cùng tồn tại và bình đẳng với nhau, và tiếp tục sống với hi vọng được thấy giấc mơ đó thành sự thật.', 'jim-be', 320, 1, 2, '2021-04-21 12:05:00');
INSERT INTO `posts` VALUES (46, 'Usopp', '\"Thánh\" Usopp - Xạ thủ ', '10_post.jpg', 'Xạ thủ của băng Mũ Rơm, và là cựu thuyền trưởng của nhóm hải tặc Usopp. Trong lần đầu xuất hiện, Usopp thường được gọi với biệt danh hài hước là “kẻ dối trá” của băng Mũ Rơm (chữ “uso” trong tên anh còn mang nghĩa là “nói dối” hoặc “sai lầm”).\r\n\r\nAnh sinh ra ở làng Syrup và lần đầu được đề cập tới bởi cha anh, Yasopp. Trái ngược với sự hèn nhát bẩm sinh của mình, Usopp mơ ước trở thành một chiến binh dũng cảm của biển khơi, giống như cha mình, và sống mỗi ngày để đeo đuổi ước mơ của mình.', 'usop-usop', 350, 2, 1, '2021-04-21 12:12:25');
INSERT INTO `posts` VALUES (47, 'Sabo', 'Đội Trưởng 2 quân đội Cách Mạng', '3_post.jpg', 'Sabo là thành viên của Quân cách mạng và là anh em kết nghĩa của Monkey D. Luffy, Portgas D. Ace và Stelly (con nuôi của gia đình quý tộc Outlook), và cũng là con trai của Outlook III. Sabo sinh ra trong một quý tộc gia đình nhưng đã quyết định chạy trốn và sống trong vùng Cực Xám. Vào khoảng 12 năm trước so với cốt truyện hiện tại, Sabo là người bạn thời thơ ấu của Ace và Luffy, họ coi nhau như anh em. Cùng với Ace và Luffy, Sabo có ước mơ trở thành một cướp biển vĩ đại để có thể ra khơi và đạt được sự tự do. Kế hoạch căng buồm ra khơi của 3 anh em dự định thực hiện vào năm họ 17 tuổi.', 'fan-ky', 34, 3, 1, '2021-04-21 11:59:05');
INSERT INTO `posts` VALUES (48, 'Portgas D.Ace', 'Hỏa Quyền Ace', '5_post.png', 'Ace Hỏa Quyền là một nhân vật trong loạt anime và manga One Piece của Eiichiro Oda. Là anh em kết nghĩa của Monkey D. Luffy và Sabo. Ace là đội trưởng Đội 2 của băng hải tặc Râu Trắng và từng là đội trưởng của băng Spade, anh đã ăn trái Mera Mera no Mi trở thành người sử dụng năng lực chuyển hóa thành lửa cũng như tạo ra và điều khiển lửa.\r\n\r\nCha là vua hải tặc Gol D. Roger, mẹ là Portgas D. Rouge (cả hai đều đã chết). Anh đã được Monkey D. Garp nhận nuôi theo ý muốn của Roger trước khi anh sinh ra.', 'shank-shank', 1002, 1, 1, '2021-04-21 12:09:12');
INSERT INTO `posts` VALUES (49, 'Edward Newgate', 'Râu Trắng', '8_post.jpg', 'Râu Trắng (Whitebeard , 白ひげ , Shirohige), là thuyền trưởng Băng Hải Tặc Râu Trắng, và được cho là “người gần với kho báu One Piece nhất” cũng như “người đàn ông mạnh nhất thế giới” (The Strongest Man in the World , 世界最強の男 , Sekai Saikyō no Otoko). Ông là một trong Tứ Hoàng ngự trị Tân Thế Giới cho đến khi hy sinh trọng trận đại chiến ở Marineford.', 'rau-trang', 12, 2, 3, '2021-04-21 12:11:21');
INSERT INTO `posts` VALUES (50, 'Tony Tony Chopper', 'Tony Tony Chopper', '17_post.png', 'Tony Tony Chopper là bác sĩ của băng Mũ Rơm trong loạt anime và manga One Piece của Oda Eiichiro. Cậu đến từ Drum Island, thành viên duy nhất băng được sinh ra ở Grand Line và là thành viên thứ sáu của băng Mũ Rơm, đồng thời là người thứ năm gia nhập, cũng là thành viên nhỏ tuổi trên tàu (15 tuổi). Cậu sở hữu năng lực của trái ác quỷ Hito Hito no Mi.', 'chop-per', 23, 1, 3, '2021-04-21 19:58:27');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `avatar` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'Đường dẫn ảnh',
  `created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Thanh Trung', 'trungtt@gmail.com', 'd91b90e8968c8cbf5d2607a644edd4e6', '/1_user.jpg', '2021-04-22 14:19:20');
INSERT INTO `users` VALUES (2, 'Dương Thùy', 'thuypd@gmail.com', 'a09fe216278f103e70a7a179e173831c', '2_user.jpg', '2021-04-21 11:49:58');
INSERT INTO `users` VALUES (3, 'Anh Tú ', 'tu@gmail.com', '8ec316a6bd7240d74c0567a1d9b311e5', '3_user.jpg', '2021-04-21 11:50:25');
INSERT INTO `users` VALUES (4, 'Kiều Tuyên', 'tuyen@gmail.com', '3055a089cffae7c29c8942e5eb534a2a', '4_user.jpg', '2021-04-21 11:51:02');

SET FOREIGN_KEY_CHECKS = 1;
