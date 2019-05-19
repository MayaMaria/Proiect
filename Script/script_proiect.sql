CREATE TABLE Users (
id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
firstname VARCHAR(50),
lastname VARCHAR(50),
typeUser VARCHAR(20),
email VARCHAR(50),
country VARCHAR(40)
)

CREATE TABLE Sugesttions(
id_sugesttion INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50),
gender VARCHAR(10),
descpription VARCHAR(256),
imagePath  VARCHAR(256)
)

CREATE TABLE Newsletter(
id_news INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_user  INT(6)  UNSIGNED,
id_sugesttion INT(6)  UNSIGNED,
email VARCHAR(50),
option_news VARCHAR(40)
)

ALTER TABLE `newsletter` ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users`(`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `newsletter` ADD CONSTRAINT `fk_sugesttion` FOREIGN KEY (`id_sugesttion`) REFERENCES `sugesttions`(`id_sugesttion`) ON DELETE RESTRICT ON UPDATE RESTRICT;


CREATE TABLE Ratings(
id_rating INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_sugesttion INT(6) UNSIGNED,
rating1 INT(6),
rating2 INT(6),
rating3 INT(6),
rating4 INT(6),
rating5 INT(6)
)

ALTER TABLE `ratings` ADD CONSTRAINT `fk_sugesttion2` FOREIGN KEY (`id_sugesttion`) REFERENCES `sugesttions`(`id_sugesttion`) ON DELETE RESTRICT ON UPDATE RESTRICT;


CREATE TABLE Recommandations(
id_recommandations  INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
description VARCHAR(1000),
imagePath VARCHAR(100),
gender VARCHAR(100),
event VARCHAR(100),
season VARCHAR(100),
style VARCHAR(100),
brand VARCHAR(100),
color VARCHAR(100),
trends VARCHAR(100)
)
