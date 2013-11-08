-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.12.7.130:3306
-- Generation Time: Nov 08, 2013 at 04:23 AM
-- Server version: 5.1.69
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webthptdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(1, 4, 'test 1', 'content1', '2013-11-06 17:13:09'),
(2, 4, 'test 2', 'test 2', '2013-11-06 17:13:18'),
(3, 7, 'Sự khác biệt giữa đại học và trung cấp', '\r\n<p class="Normal">\r\n	Sau khi đọc bài viết <a href="http://vnexpress.net/tin-tuc/ban-doc-viet/ky-su-phan-mem-tran-tinh-su-khac-biet-giua-thac-si-va-trung-cap-2900793.html">“Kỹ sư phần mềm trần tình sự khác biệt giữa thạc sĩ và trung cấp”</a>, tôi rất đồng tình với suy nghĩ và quan điểm của tác giả Bằng Nguyễn về các ví dụ mà tác giả đưa ra trong bài viết như: Bạn cứ chọn ra 100 anh thạc sĩ và 100 anh học trung cấp xem sau 10 năm tốt nghiệp&nbsp; có bao nhiêu anh đạt kết quả tốt hơn, và bạn sẽ thấy anh học trung cấp đang ở vị trí nào.</p>\r\n<p class="Normal">\r\n	Cũng như bản thân tôi đã tốt nghiệp đại học được 13 năm và tốt nghiệp thạc sĩ được 8 năm. Tôi còn nhớ khi đi học đại học (tôi học chuyên ngành kế toán tài chính) các thầy cô có lấy ví dụ để hạch toán đúng một nghiệp vụ kinh tế phát sinh trong kế toán. Vấn đề này, có thể các bạn học trung cấp làm nhanh hơn các bạn học đại học, nhưng họ sẽ không hiểu tại sao lại hạch toán như thế.</p>\r\n<p class="Normal">\r\n	Bởi vì họ không được học chuyên sâu và khi nghiệp vụ thay đổi họ sẽ không biết làm thế nào. Còn các bạn đã học qua đại học thì khác, họ sẽ giải thích được ngay vấn đề này. Sau khi đi làm, tôi mới thấy điều đấy là đúng.</p>\r\n<p class="Normal">\r\n	Nhân đây, tôi cũng chia sẻ với các bạn một câu chuyện này. Tôi có một người bạn sau khi học xong đại học, bạn ấy nhất quyết không đi làm cho các doanh nghiệp nhà nước mà tự mình kinh doanh. Khi tôi đến nhà bạn ấy chơi thì thấy bộ mẹ bạn ấy có kêu ca là: sau bao nhiêu công sức nuôi bạn ấy ăn học bây giờ lại đi làm công việc của một người không cần học gì.</p>\r\n<p class="Normal">\r\n	Các bạn biết cậu ấy trả lời bố mẹ bạn ý thế nào không? Cậu ấy nói: Nếu một người không có trình độ mà làm công việc đấy chỉ kiếm ra được 10 đồng thì người có trình độ như con sẽ biết sắp xếp và quản lý công việc, có thể kiếm được 50 đồng. Thực tế bạn ấy đã đúng và hiện tại đang làm chủ một công ty.</p>\r\n<p class="Normal">\r\n	Với 2 ví dụ trên cho thấy dù ở bất kì cương vị nào thì người có trình độ sẽ lợi thế hơn rất nhiều.</p>\r\n\r\n', '2013-11-09 01:23:56'),
(8, 7, 'Người Việt không xếp hàng vì đã mất niềm tin vào sự công bằng', '<p class="Normal">\r\n	Người Nhật xếp hàng trong các điểm dịch vụ công cộng là điều cả thế giới nhìn nhận là một nét văn hóa đặc biệt không phải đâu cũng có. Nhất là sau vụ thảm họa kép năm ngoái, toàn thế giới không chỉ được nghe đồn đại, hay đọc đâu đó mà được chứng kiến thực tế và mọi dân tộc khác đều phải ghen tị với việc xếp hàng này.</p>\r\n<p class="Normal">\r\n	Trong cuộc sống hàng ngày, tại các bến xe lửa, trước cửa toa tàu là hai hàng người đứng hai bên cho người trên tàu xuống và lần lượt lên. Nếu không hết, người còn lại kiên nhẫn chờ chuyến tới và họ không chen lấn hay phàn nàn điều gì.</p>\r\n<p class="Normal">\r\n	<strong>So với người Nhật, tại sao chúng ta ít xếp hàng?</strong> Hay nói cách khác, người Việt chúng ta có xếp hàng không? Và có được như người Nhật không?</p>\r\n<p class="Normal">\r\n	Tôi sinh ra khi chiến tranh gần kết thúc và lớn lên trong giai đoạn bao cấp, giao thời mở cửa rồi đến kinh tế thị trường hiện nay. Tôi còn nhớ câu chuyện vui về xếp hàng phát chẩn (cho tiền, gạo những người bị tai nạn) thời xưa: <span style="font-size:11.8pt;">“Số tôi thật không may, hôm trước đi nhận phát chẩn đứng cuối hàng nên khi đến lượt thì hết. Hôm qua đi sớm, họ lại phát từ cuối hàng lên và đến nơi cũng hết. Hôm nay, tôi cố gắng đứng giữa hàng, khổ nổi, họ phát từ hai đầu lại và… cũng hết khi đến lượt tôi”.</span></p>\r\n<p class="Normal">\r\n	Trong thời bao cấp, dù muốn hay không mọi người đều phải xếp hàng, tuy nhiên việc xếp hàng dần dần có tiêu cực trong đó, có sự xí chỗ, có sự bán chỗ đã “xếp gạch” và điển hình hơn những người nhà, thân quen sếp sẽ có được các cách lấy hàng mà không phải xếp hàng.</p>\r\n<p class="Normal">\r\n	Thời gian đó, ở<span style="font-size:11.8pt;">&nbsp;các bến tàu, bến xe, việc có được một vé đi xe khách trước đây rất vất vả, phải xếp hàng từ rất sớm trước khi xe chạy cả ngày. Nhưng người có mối quan hệ, quen biết sếp… sẽ bỗng nhiên chen ngang và lấy hết suất vé, đành quay về chờ chuyến khác và mọi&nbsp;</span><span style="font-size:11.8pt;">người đều phải sống chung với chuyện đó.</span></p>\r\n<p class="Normal">\r\n	Việc này tồn tại đến tận bây giờ. Các loại vé xe, vé tàu, vé thể thao, vé sự kiện nghệ thuật… đều có sự chen ngang. Hay gần đây, chúng ta biết nhiều việc xếp hàng xin cho con đi học từ mẫu giáo, cấp một mà báo chí nhiều lần thông tin. Trong làm ăn kinh tế, nếu xếp hàng chờ đến lượt để có dự án, chắc mọi người sẽ phì cười vì phi thực tế hiện nay.</p>\r\n<p class="Normal">\r\n	Tôi không ví dụ thêm nữa, chắc các bạn cũng hiểu trước nay, xưa kia và hiện tại thì người Việt Nam đều xếp hàng, chen ngang và mất chỗ diễn ra khắp nơi, mọi lĩnh vực, mọi hình thái, trong cả giáo dục, nghiên cứu khoa học đến nông dân bán hàng hóa…&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="color:rgb(0,0,0);font-family:''Times New Roman'';background-color:rgb(244,245,246);" width="1"><tbody><tr><td style="vertical-align: middle;">\r\n				<img alt="1-85-7602-1382928617.jpg" data-natural-width="500" height="332" src="http://m.f29.img.vnecdn.net/2013/10/28/1-85-7602-1382928617.jpg" width="500"></td>\r\n		</tr><tr><td style="vertical-align: middle;">\r\n				<p class="Image" style="font-size:12px;color:rgb(102,102,102);padding-top:5px;padding-bottom:5px;">\r\n					Hàng nghìn người chen lấn, xô đẩy để giành ăn sushi miễn phí tại Hà Nội. Ảnh:&nbsp;<em>Jenny</em></p>\r\n			</td>\r\n		</tr></tbody></table><p class="Normal">\r\n	<strong>Vậy nó nói lên điều gì? Đó là lòng tin của việc xếp hàng.</strong> Tôi dẫn chứng không đi quá xa về quá khứ, nhưng có thể nói: trong mỗi con người Việt Nam, lòng tin đạt được từ xếp hàng quá thấp, không ít thì nhiều, nhiều người có kinh nghiệm trả giá từ xếp hàng, bị chen ngang. Chính điều này khiến họ phải chủ động tranh chỗ, chen lấn nhau trong xếp hàng?</p>\r\n<p class="Normal">\r\n	Trong cơ quan, thay vì xếp hàng chờ đến lượt, nhiều người đã chủ động “chạy” trước để xen ngang, tác động quan hệ để đạt được cái mình mong muốn, từ tâm lý này, tạo niềm tin vào xếp hàng đi xuống.</p>\r\n<p class="Normal">\r\n	Với người Nhật, họ tin tưởng, biết chắc chuyến tàu tiếp theo sẽ đến và họ sẽ lên được tàu. Tin tưởng chắc chắn phần họ mong đợi trong xếp hàng sẽ đến và họ yên tâm xếp hàng, mọi người đều đồng thuận trong văn hóa này.</p>\r\n<p class="Normal">\r\n	Người Việt Nam khi ra nước ngoài, hầu hết cũng xếp hàng và theo trật tự của nước sở tại, nghĩa là họ cũng tin cậy và kiên nhẫn với hàng mình đợi. Người nước ngoài đến Việt Nam, cũng có nhiều người lái xe máy phóng vèo vèo, vượt đèn đỏ, xếp hàng cũng chen lấn, tại họ ư? Chắc chắn khó mà lý giải được!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p class="Normal">\r\n	Như vậy, không phải ý thức của người dân Việt Nam chúng ta kém, không phải chúng ta không muốn xếp hàng, hay người Việt Nam chúng ta không kiên nhẫn. Chúng ta có thể thấy từ các hệ quả của xen ngang trong hàng đợi trong cuộc sống, từ các nhà quản lý “con ông cháu cha”… đã dẫn đến mất lòng tin để phải xếp hàng.</p>\r\n<p class="Normal">\r\n	Bạn sẽ làm gì khi xếp hàng mà không tin là mình sẽ nhận được kết quả? Chen lấn, xô đẩy, đút lót, chạy chọt… làm sao cho mình đến được đích trước người khác. Và thế là chúng ta không xếp hàng được như người Nhật?</p>', '2013-11-09 08:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `alias`, `is_active`, `ordering`, `created`, `modified`) VALUES
(1, NULL, 'Giới thiệu', 'gioi-thieu', 1, NULL, '2013-11-07 10:19:11', '2013-11-07 10:38:32'),
(2, NULL, 'Tin tức', 'tin-tuc', 1, NULL, '2013-11-07 10:19:22', '2013-11-07 10:19:22'),
(4, NULL, 'Tuyển sinh', 'tuyen-sinh', 1, NULL, '2013-11-07 10:19:47', '2013-11-07 10:19:47'),
(5, NULL, 'Tổ chức đoàn thể', 'to-chuc-doan-the', 1, NULL, '2013-11-07 10:20:00', '2013-11-07 10:20:00'),
(8, 1, 'Lịch sử phát triển', 'lich-su-phat-trien', 1, NULL, '2013-11-07 10:43:20', '2013-11-07 16:43:40'),
(9, 1, 'Sứ mệnh tầm nhìn', 'su-menh-tam-nhin', 1, NULL, '2013-11-07 10:43:59', '2013-11-07 10:43:59'),
(10, 1, 'Cơ cấu tổ chức', 'co-cau-to-chuc', 1, NULL, '2013-11-07 10:44:10', '2013-11-07 10:44:10'),
(11, 1, 'Cơ sở vật chất', 'co-so-vat-chat', 1, NULL, '2013-11-07 10:44:23', '2013-11-07 10:44:23'),
(12, 2, 'Bảng tin trường', 'bang-tin-truong', 1, NULL, '2013-11-07 10:45:00', '2013-11-07 10:45:00'),
(13, 2, 'Đoàn thanh niên', 'doan-thanh-nien', 1, NULL, '2013-11-07 10:45:17', '2013-11-07 10:45:17'),
(16, 4, 'Tuyển sinh khối 10', 'tuyen-sinh-khoi-10', 1, NULL, '2013-11-07 10:47:32', '2013-11-07 10:47:32'),
(17, 4, 'Tuyển sinh đại học', 'tuyen-sinh-dai-hoc', 1, NULL, '2013-11-07 10:47:42', '2013-11-07 10:47:42'),
(18, 5, 'Hội khuyến học', 'hoi-khuyen-hoc', 1, NULL, '2013-11-07 10:48:20', '2013-11-07 10:48:20'),
(19, 5, 'Hội phụ huynh', 'hoi-phu-huynh', 1, NULL, '2013-11-07 10:49:12', '2013-11-07 10:49:12'),
(20, 2, 'Bản tin Internet', 'ban-tin-internet', 1, NULL, '2013-11-07 13:08:17', '2013-11-07 13:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `user_id`, `token`, `duration`, `used`, `created`, `expires`) VALUES
(18, 1, 'a480c3b0d250d678d093c5650880a327', '2 weeks', 0, '2013-11-07 07:59:36', '2013-11-21 07:59:36'),
(17, 1, '327a70a1838da2b9024e21976fabae00', '2 weeks', 0, '2013-11-07 07:33:04', '2013-11-21 07:33:04'),
(16, 1, 'd28b1b30e27a7f26b1921e09fb02372d', '2 weeks', 0, '2013-11-07 01:31:39', '2013-11-21 01:31:39'),
(15, 1, 'b06a87d921d3bc509ad20e2fed01587b', '2 weeks', 1, '2013-11-06 18:30:37', '2013-11-20 18:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sumary` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0' COMMENT 'Đếm số lần hiển thị bài viết',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `alias`, `is_active`, `ordering`, `thumbnail`, `sumary`, `content`, `created`, `modified`, `view_count`) VALUES
(1, 0, 2, 'Test 1', 'test-1', 1, 0, '/img/images/Desert.jpg', 'Tóm tắt bài viết', '<p>\r\n	Nội dung b&agrave;i viết ở đ&acirc;y</p>\r\n', '2013-11-05', '2013-11-05', 0),
(2, 0, 12, 'Chung kết giải thưởng Holcim Prize năm 2013', 'chung-ket-giai-thuong-holcim-prize-nam-2013', 1, 0, '/img/images/holcim2013_1.jpg', 'Trong 2 ngày 25 và 26 tháng 10 năm 2013, tại Trường Đại học Khoa học Xã hội và nhân văn Tp.HCM đã diễn ra Vòng chung kết Giải thưởng Holcim Prize năm 2013. Vòng Chung kết gồm có 07 đề tài xuất sắc nhất đại diện cho 7 trường Đại học của cả nước: Trường ĐH KHXH và NV Tp.HCM, Trường ĐH Kiến trúc Tp.HCM, trường ĐH SPKT Tp.HCM, trường ĐHBK Tp.HCM, Trường ĐH Cần Thơ, Trường ĐHBK - ĐHĐN và Trường ĐH Kiến trúc Hà Nội', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">Trong 2 ng&agrave;y 25 v&agrave; 26 th&aacute;ng 10 năm 2013, tại Trường Đại học Khoa học X&atilde; hội v&agrave; nh&acirc;n văn Tp.HCM đ&atilde; diễn ra V&ograve;ng chung kết Giải thưởng Holcim Prize năm 2013. V&ograve;ng Chung kết gồm c&oacute; 07 đề t&agrave;i xuất sắc nhất đại diện cho 7 trường Đại học của cả nước: Trường ĐH KHXH v&agrave; NV Tp.HCM, Trường ĐH Kiến tr&uacute;c Tp.HCM, trường ĐH SPKT Tp.HCM, trường ĐHBK Tp.HCM, Trường ĐH Cần Thơ, Trường ĐHBK - ĐHĐN v&agrave; Trường ĐH Kiến tr&uacute;c H&agrave; Nội. Đ&acirc;y l&agrave; những đề t&agrave;i xuất sắc nhất được lựa chọn từ hằng trăm đề t&agrave;i v&agrave; trải qua 3 v&ograve;ng lựa chọn.</span></p>\r\n<p style="text-align: center;">\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;"><img alt="" src="/app/webroot/img/images/holcim2013_1.jpg" style="width: 600px; height: 400px;" /></span></p>\r\n<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">Năm nay, đại diện cho trường Đại học B&aacute;ch khoa, Đại học Đ&agrave; Nẵng tham dự V&ograve;ng chung kết l&agrave; nh&oacute;m sinh vi&ecirc;n 09NL gồm c&aacute;c bạn: Đo&agrave;n Nguyễn V&acirc;n Hiếu, Trương Thế Minh v&agrave; Tạ Bảo Long với đề t&agrave;i&nbsp;</span><strong style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">&ldquo;Sản xuất Panel l&agrave;m trần c&aacute;ch nhiệt từ c&aacute;c phế phẩm n&ocirc;ng nghiệp&rdquo;</strong><span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">&nbsp;v&agrave; đ&atilde; xuất sắc nhận được Giải thưởng&nbsp;</span><strong style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">&ldquo;Bảo vệ m&ocirc;i trường&rdquo;</strong><span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">.</span></p>\r\n<p style="text-align: center;">\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;"><img alt="" src="/app/webroot/img/images/holcim2013_2.jpg" style="width: 600px; height: 400px;" /></span></p>\r\n<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">Đ&acirc;y l&agrave; lần thứ 2 trường ĐHBK - ĐHĐN tham dự Giải thưởng n&agrave;y, năm 2012 trường ta đoạt Giải khuyến kh&iacute;ch. C&oacute; thể n&oacute;i Giải thưởng Holcim l&agrave; một Giải thưởng NCKH d&agrave;nh cho sinh vi&ecirc;n rất hấp dẫn, c&oacute; gi&aacute; trị lớn v&agrave; đ&atilde; c&oacute; t&aacute;c động t&iacute;ch cực đến phong tr&agrave;o NCKH của sinh vi&ecirc;n. Giải thưởng năm 2014 sẽ được ph&aacute;t động v&agrave;o cuối th&aacute;ng 10 năm 2013 v&agrave; kết th&uacute;c v&agrave;o dịp n&agrave;y năm sau. Nh&agrave; trường mong muốn sẽ c&oacute; nhiều bạn sinh vi&ecirc;n đăng k&yacute; tham gia giải thưởng n&agrave;y, mang đến cuộc thi nhiều đề t&agrave;i hấp dẫn v&agrave; đoạt Giải thưởng lớn.</span></p>\r\n<p style="text-align: center;">\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;"><img alt="" src="/app/webroot/img/images/holcim2013_3.jpg" style="width: 600px; height: 400px;" /></span></p>\r\n', '2013-11-07', '2013-11-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `salt` text CHARACTER SET latin1,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`) VALUES
(1, 1, 'admin', '73dd22a5352d9b6a6588fab0ab62b0cc', '0a05df7556534f914c51e5510177fa21', 'admin@admin.com', 'Admin', '', 1, 1, '', '2013-11-03 15:00:36', '2013-11-06 18:15:17'),
(6, 3, 'lemaibk08', 'cd2a8881d4f310b0f03646396d56038e', '3466cab0e12097e4be82529e18aee72d', 'vienlm@ilucians.com', 'Lê Mai Viện', NULL, 1, 1, NULL, '2013-11-07 14:48:57', '2013-11-07 15:07:58'),
(7, 2, 'Thành Luân', '93ac8b7f5b2ac8aa13e573939cbbbf4c', '7def0d0fdbe03504df22e70d12d0ea9c', 'htluan2605@gmail.com', 'Thành', 'Luân', 0, 1, '127.12.7.129', '2013-11-08 01:17:19', '2013-11-08 01:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 0, '2013-11-03 15:00:36', '2013-11-03 15:00:36'),
(2, 'User', 'User', 1, '2013-11-03 15:00:36', '2013-11-03 15:00:36'),
(3, 'Guest', 'Guest', 0, '2013-11-03 15:00:36', '2013-11-03 15:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_group_permissions`
--

CREATE TABLE IF NOT EXISTS `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `user_group_permissions`
--

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`) VALUES
(1, 1, 'Pages', 'display', 1),
(2, 2, 'Pages', 'display', 1),
(3, 3, 'Pages', 'display', 1),
(4, 1, 'UserGroupPermissions', 'index', 1),
(5, 2, 'UserGroupPermissions', 'index', 0),
(6, 3, 'UserGroupPermissions', 'index', 0),
(7, 1, 'UserGroupPermissions', 'update', 1),
(8, 2, 'UserGroupPermissions', 'update', 0),
(9, 3, 'UserGroupPermissions', 'update', 0),
(10, 1, 'UserGroups', 'index', 1),
(11, 2, 'UserGroups', 'index', 0),
(12, 3, 'UserGroups', 'index', 0),
(13, 1, 'UserGroups', 'addGroup', 1),
(14, 2, 'UserGroups', 'addGroup', 0),
(15, 3, 'UserGroups', 'addGroup', 0),
(16, 1, 'UserGroups', 'editGroup', 1),
(17, 2, 'UserGroups', 'editGroup', 0),
(18, 3, 'UserGroups', 'editGroup', 0),
(19, 1, 'UserGroups', 'deleteGroup', 1),
(20, 2, 'UserGroups', 'deleteGroup', 0),
(21, 3, 'UserGroups', 'deleteGroup', 0),
(22, 1, 'Users', 'index', 1),
(23, 2, 'Users', 'index', 0),
(24, 3, 'Users', 'index', 0),
(25, 1, 'Users', 'viewUser', 1),
(26, 2, 'Users', 'viewUser', 0),
(27, 3, 'Users', 'viewUser', 0),
(28, 1, 'Users', 'myprofile', 1),
(29, 2, 'Users', 'myprofile', 1),
(30, 3, 'Users', 'myprofile', 0),
(31, 1, 'Users', 'login', 1),
(32, 2, 'Users', 'login', 1),
(33, 3, 'Users', 'login', 1),
(34, 1, 'Users', 'logout', 1),
(35, 2, 'Users', 'logout', 1),
(36, 3, 'Users', 'logout', 1),
(37, 1, 'Users', 'register', 1),
(38, 2, 'Users', 'register', 1),
(39, 3, 'Users', 'register', 1),
(40, 1, 'Users', 'changePassword', 1),
(41, 2, 'Users', 'changePassword', 1),
(42, 3, 'Users', 'changePassword', 0),
(43, 1, 'Users', 'changeUserPassword', 1),
(44, 2, 'Users', 'changeUserPassword', 0),
(45, 3, 'Users', 'changeUserPassword', 0),
(46, 1, 'Users', 'addUser', 1),
(47, 2, 'Users', 'addUser', 0),
(48, 3, 'Users', 'addUser', 0),
(49, 1, 'Users', 'editUser', 1),
(50, 2, 'Users', 'editUser', 0),
(51, 3, 'Users', 'editUser', 0),
(52, 1, 'Users', 'dashboard', 1),
(53, 2, 'Users', 'dashboard', 1),
(54, 3, 'Users', 'dashboard', 0),
(55, 1, 'Users', 'deleteUser', 1),
(56, 2, 'Users', 'deleteUser', 0),
(57, 3, 'Users', 'deleteUser', 0),
(58, 1, 'Users', 'makeActive', 1),
(59, 2, 'Users', 'makeActive', 0),
(60, 3, 'Users', 'makeActive', 0),
(61, 1, 'Users', 'accessDenied', 1),
(62, 2, 'Users', 'accessDenied', 1),
(63, 3, 'Users', 'accessDenied', 1),
(64, 1, 'Users', 'userVerification', 1),
(65, 2, 'Users', 'userVerification', 1),
(66, 3, 'Users', 'userVerification', 1),
(67, 1, 'Users', 'forgotPassword', 1),
(68, 2, 'Users', 'forgotPassword', 1),
(69, 3, 'Users', 'forgotPassword', 1),
(70, 1, 'Users', 'makeActiveInactive', 1),
(71, 2, 'Users', 'makeActiveInactive', 0),
(72, 3, 'Users', 'makeActiveInactive', 0),
(73, 1, 'Users', 'verifyEmail', 1),
(74, 2, 'Users', 'verifyEmail', 0),
(75, 3, 'Users', 'verifyEmail', 0),
(76, 1, 'Users', 'activatePassword', 1),
(77, 2, 'Users', 'activatePassword', 1),
(78, 3, 'Users', 'activatePassword', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `youtube_id` varchar(50) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `alias`, `link`, `youtube_id`, `is_active`, `description`, `created`, `modified`) VALUES
(1, 'somebody that i used to know', 'somebody-that-i-used-to-know', 'http://www.youtube.com/watch?v=8UVNT4wvIGY', '8UVNT4wvIGY', NULL, 'somebody that i used to know', '2013-11-06 01:01:48', '2013-11-06 01:01:48'),
(2, 'canon in d', 'canon-in-d', 'http://www.youtube.com/watch?v=jXC9tuumjiA', 'jXC9tuumjiA', NULL, 'canon in d', '2013-11-06 01:06:37', '2013-11-06 01:06:37'),
(3, 'what makes you beautiful', 'what-makes-you-beautiful', 'http://www.youtube.com/watch?v=QJO3ROT-A4E', 'QJO3ROT-A4E', NULL, 'what makes you beautiful', '2013-11-06 12:20:01', '2013-11-06 12:20:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
