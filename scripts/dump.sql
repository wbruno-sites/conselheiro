-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "apuracao" ------------------------------
CREATE DATABASE IF NOT EXISTS `apuracao` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `apuracao`;
-- ---------------------------------------------------------


-- CREATE TABLE "candidates" -------------------------------
DROP TABLE IF EXISTS `candidates` CASCADE;

CREATE TABLE `candidates` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`region_id` Int( 11 ) NULL,
	`status` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 221;
-- ---------------------------------------------------------


-- CREATE TABLE "regions" ----------------------------------
DROP TABLE IF EXISTS `regions` CASCADE;

CREATE TABLE `regions` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- ---------------------------------------------------------


-- CREATE TABLE "schools" ----------------------------------
DROP TABLE IF EXISTS `schools` CASCADE;

CREATE TABLE `schools` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`rooms_amount` Int( 11 ) NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 23;
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
DROP TABLE IF EXISTS `users` CASCADE;

CREATE TABLE `users` (
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`login` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`password` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`admin` Enum( 'admin', 'user' ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
,
	CONSTRAINT `unique_login` UNIQUE( `login` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- ---------------------------------------------------------


-- CREATE TABLE "votes" ------------------------------------
DROP TABLE IF EXISTS `votes` CASCADE;

CREATE TABLE `votes` (
	`candidate_id` Int( 11 ) NULL,
	`school_id` Int( 11 ) NULL,
	`room_id` Int( 11 ) NULL,
	`votes_amount` Int( 11 ) NULL,
	`status` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


ALTER TABLE votes ADD UNIQUE KEY `pk` (`candidate_id`, `school_id`, `room_id`);
