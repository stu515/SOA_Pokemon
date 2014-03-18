SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `soa_db` ;
CREATE SCHEMA IF NOT EXISTS `soa_db` DEFAULT CHARACTER SET utf8 ;
USE `soa_db` ;

-- -----------------------------------------------------
-- Table `soa_db`.`creatures_locations_tbl`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `soa_db`.`creatures_locations_tbl` ;

CREATE TABLE IF NOT EXISTS `soa_db`.`creatures_locations_tbl` (
  `location_id` INT(10) NOT NULL,
  `creature_id` INT(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`location_id`, `creature_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `soa_db`.`creatures_tbl`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `soa_db`.`creatures_tbl` ;

CREATE TABLE IF NOT EXISTS `soa_db`.`creatures_tbl` (
  `creature_id` INT(10) NOT NULL AUTO_INCREMENT,
  `creature_name` VARCHAR(355) NULL DEFAULT NULL,
  `type` VARCHAR(355) NULL DEFAULT NULL,
  `description` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`creature_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `soa_db`.`locations_tbl`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `soa_db`.`locations_tbl` ;

CREATE TABLE IF NOT EXISTS `soa_db`.`locations_tbl` (
  `location_id` INT(10) NOT NULL,
  `location_name` VARCHAR(355) NULL DEFAULT NULL,
  `gps_coordinates` VARCHAR(355) NULL DEFAULT NULL,
  PRIMARY KEY (`location_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `soa_db`.`moves_tbl`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `soa_db`.`moves_tbl` ;

CREATE TABLE IF NOT EXISTS `soa_db`.`moves_tbl` (
  `move_id` INT(10) NOT NULL AUTO_INCREMENT,
  `move_name` VARCHAR(355) NULL DEFAULT NULL,
  `max_number` INT(10) NULL DEFAULT NULL,
  `type` VARCHAR(355) NULL DEFAULT NULL,
  PRIMARY KEY (`move_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `soa_db`.`users_creatures_moves_tbl`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `soa_db`.`users_creatures_moves_tbl` ;

CREATE TABLE IF NOT EXISTS `soa_db`.`users_creatures_moves_tbl` (
  `user_id` INT(10) NOT NULL,
  `creature_id` INT(10) NOT NULL,
  `move_id` INT(10) NOT NULL,
  `experience_points` INT(10) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`, `creature_id`, `move_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `soa_db`.`users_creatures_tbl`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `soa_db`.`users_creatures_tbl` ;

CREATE TABLE IF NOT EXISTS `soa_db`.`users_creatures_tbl` (
  `user_id` INT(10) NOT NULL,
  `creature_id` INT(10) NOT NULL,
  `nickname` VARCHAR(355) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`, `creature_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `soa_db`.`users_tbl`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `soa_db`.`users_tbl` ;

CREATE TABLE IF NOT EXISTS `soa_db`.`users_tbl` (
  `user_id` INT(10) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(355) NULL DEFAULT NULL,
  `password` VARCHAR(355) NULL DEFAULT NULL,
  `handle` VARCHAR(355) NULL DEFAULT NULL,
  `email_address` VARCHAR(355) NULL DEFAULT NULL,
  `mobile_number` VARCHAR(355) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
