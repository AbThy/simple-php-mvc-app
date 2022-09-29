# simple-php-mvc-app

An application rendering 3 pages: index / advertisements / users - and is using plain php with mysqli to implement an object oriented mvc model.
**To start the application, a mysql database under the name of 'advertisement_app' needs to be created. The SQL code for table creation is at the bottom of the document.** 
---
I had to learn completely new ideas, and of course php from scratch, because i was working on projects with Spring,
React, PostgreSQL and nginx in the last year.

## App built with XAMPP at route: ' http://localhost/RabIT/simple-php-mvc-app/public/ '
---
Database created with SQL commands:

CREATE TABLE `advertisement_app`.`advertisements` (`id` BIGINT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `advertisement_app`.`user` (`id` BIGINT NOT NULL AUTO_INCREMENT , `userid` BIGINT NOT NULL, `title` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
