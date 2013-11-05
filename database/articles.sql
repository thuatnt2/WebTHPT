delimiter $$

CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$

INSERT INTO `webthptdb`.`articles` ('user_id',`title`, `content`) 
VALUES ('2','Không biết tên là gì', 'Điều quan trọng là phải nhớ mục tiêu của bạn một cách thật rõ ràng, chính xác. Đường đi sẽ rõ ràng hơn, an toàn hơn nếu chúng ta biết đường của mình và những khó khăn sẽ gặp.');
