create database fatdb;
use fatdb;

create table usersregistration(
    user_id INT PRIMARY KEY AUTO_INCREMENT unsigned,
    Fname VARCHAR(50),
    UserName VARCHAR(50),
    Email VARCHAR(50),
    password VARCHAR(40),
    Registration_date DATETIME,
    user_level TINYINT(1)
);
ALTER TABLE `usersregistration` CHANGE `user_id` `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `usersregistration` CHANGE `user_level` `user_level` TINYINT(1) UNSIGNED NULL DEFAULT NULL;



