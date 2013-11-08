-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.12.7.130:3306
-- Generation Time: Nov 08, 2013 at 01:42 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
