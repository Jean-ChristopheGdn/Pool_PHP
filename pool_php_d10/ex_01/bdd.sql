DROP DATABASE IF EXISTS bdd;
CREATE DATABASE bdd;
USE bdd;

SET time_zone = "+01:00";

CREATE TABLE IF NOT EXISTS `Users`
(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`password_confirmation` varchar(255) NOT NULL,
	`created_at` varchar(100) NOT NULL,

	
	PRIMARY KEY (`id`) 
)
ENGINE =InnoDB DEFAULT CHARSET = Latin1 AUTO_INCREMENT=0;