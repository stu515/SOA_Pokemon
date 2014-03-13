DROP DATABASE `soa_db`;

CREATE DATABASE if not exists `soa_db`;

USE `soa_db`;

CREATE TABLE `users_tbl` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(355) DEFAULT NULL,
  `password` varchar(355) DEFAULT NULL,
  `handle` varchar(355) DEFAULT NULL,
  `email_address` varchar(355) DEFAULT NULL,
  `mobile_number` varchar(355) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ;

CREATE TABLE `moves_tbl` (
  `move_id` int(10) NOT NULL AUTO_INCREMENT,
  `move_name` varchar(355) DEFAULT NULL,
  `max_number` int(10) DEFAULT NULL,
  `type` varchar(355) DEFAULT NULL,
  PRIMARY KEY (`move_id`)
) ;

CREATE TABLE `creatures_tbl` (
  `creature_id` int(10) NOT NULL AUTO_INCREMENT,
  `creature_name` varchar(355) DEFAULT NULL,
  `type` varchar(355) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`creature_id`)
) ;

CREATE TABLE `locations_tbl` (
  `location_id` int(10) NOT NULL,
  `location_name` varchar(355) DEFAULT NULL,
  `gps_coordinates` varchar(355) DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ;

CREATE TABLE `users_creatures_tbl` (
  `user_id` int(10) NOT NULL,
  `creature_id` int(10) NOT NULL,
  `nickname` varchar(355) DEFAULT NULL,
  PRIMARY KEY (`user_id`, `creature_id`)
) ;

CREATE TABLE `users_creatures_moves_tbl` (
  `user_id` int(10) NOT NULL,
  `creature_id` int(10) NOT NULL,
  `move_id` int(10) NOT NULL,
  `experience_points` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`, `creature_id`, `move_id`)
) ;

CREATE TABLE `creatures_locations_tbl` (
  `location_id` int(10) NOT NULL,
  `creature_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`location_id`, `creature_id`)
) ;