CREATE SCHEMA `catalog` ;

CREATE TABLE `reviews`.`t_reviews` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `date_review` DATETIME NOT NULL,
  `descr` TEXT(2000) NOT NULL,
  PRIMARY KEY (`id`));

 CREATE TABLE `catalog`.`t_catalog` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `descr` VARCHAR(45) NOT NULL,
  `active` VARCHAR(1) NOT NULL,
  `img` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `catalog`.`t_reviews` (`id`, `name`, `date_review`, `descr`) VALUES ('1', 'Петя', '12.01.2018', 'Плохо');
INSERT INTO `catalog`.`t_reviews` (`id`, `name`, `date_review`, `descr`) VALUES ('2', 'Вася', '11.01.2018', 'Хорошо');
INSERT INTO `catalog`.`t_reviews` (`id`, `name`, `date_review`, `descr`) VALUES ('3', 'Слава', '13.01.2018', 'Сойдет');
INSERT INTO `catalog`.`t_reviews` (`id`, `name`, `date_review`, `descr`) VALUES ('4', 'Иваныч', '14.01.2018', 'Раньше было лучше');
INSERT INTO `catalog`.`t_reviews` (`id`, `name`, `date_review`, `descr`) VALUES ('5', 'John Do', '18.01.2018', '...');
INSERT INTO `catalog`.`t_reviews` (`id`, `name`, `date_review`, `descr`) VALUES ('6', 'no one', '20.01.2018', 'Valar Morghulis');

INSERT INTO `catalog`.`t_catalog` (`id`, `title`, `price`, `descr`, `active`, `img`) VALUES ('1', 'Красный', '100', 'Это красный', 'Y', '/img/red.jpg');
INSERT INTO `catalog`.`t_catalog` (`id`, `title`, `price`, `descr`, `active`, `img`) VALUES ('2', 'Зеленый', '100.1', 'Очевидно зеленый', 'Y', '/img/green.jpg');
INSERT INTO `catalog`.`t_catalog` (`id`, `title`, `price`, `descr`, `active`, `img`) VALUES ('3', 'Синий', '200', 'Да да это синий', 'Y', '/img/blue.jpg');
INSERT INTO `catalog`.`t_catalog` (`id`, `title`, `price`, `descr`, `active`, `img`) VALUES ('4', 'Серый', '300', 'Серый вам к лицу', 'Y', '/img/grey.jpg');
INSERT INTO `catalog`.`t_catalog` (`id`, `title`, `price`, `descr`, `active`, `img`) VALUES ('5', 'Розовый', '400', 'Блин откуда туту розовый', 'Y', '/img/pink.jpg');
INSERT INTO `catalog`.`t_catalog` (`id`, `title`, `price`, `descr`, `active`, `img`) VALUES ('6', 'Коричневый', '500', 'Промолчу', 'Y', '/img/brown.jpg');

CREATE TABLE `catalog`.`t_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `catalog`.`t_users` (`id`, `username`, `password`) VALUES ('1', 'test', 'test');

INSERT INTO `catalog`.`t_users` (`id`, `username`, `password`) VALUES ('2', 'adm', 'adm');

INSERT INTO `catalog`.`t_users` (`id`, `username`, `password`) VALUES ('3', 'usr', 'psw');

