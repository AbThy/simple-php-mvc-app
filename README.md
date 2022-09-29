# simple-php-mvc-app
 
App built with XAMPP at route: ' http://localhost/RabIT/simple-php-mvc-app/public/ '
 
Database created with SQL commands:
CREATE TABLE `advertisement_app`.`advertisements` (`id` BIGINT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
CREATE TABLE `advertisement_app`.`user` (`id` BIGINT NOT NULL AUTO_INCREMENT , `userid` BIGINT NOT NULL, `title` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 