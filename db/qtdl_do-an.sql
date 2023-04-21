-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2023 at 02:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `qtdl`
--
drop database qtdl;

create database qtdl;

use qtdl;

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` bigint NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

-- --------------------------------------------------------
--
-- Table structure for table `admins`
--
CREATE TABLE `admins` (
  `id` bigint NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

CREATE TABLE `films` (
  `id` bigint NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `length` smallint NOT NULL,
  `cover_image` text NOT NULL,
  `release_year` smallint NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

CREATE TABLE `premieres` (
  `id` bigint NOT NULL auto_increment,
  `film_id` bigint NOT NULL,
  `start` timestamp NOT NULL,
  `end` timestamp NOT NULL,
  `total_seats` smallint NOT NULL,
  `remaining_seats` smallint NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (film_id) REFERENCES films(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

CREATE TABLE `seats` (
  `id` bigint NOT NULL auto_increment,
  `row` tinyint NOT NULL,
  `col` tinyint NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

-- --------------------------------------------------------
--
-- Table structure for table `ticket`
--
-- drop table tickets;
CREATE TABLE `tickets` (
  `id` bigint NOT NULL auto_increment,
  `user_id` bigint NOT NULL,
  `premiere_id` bigint NOT NULL,
  `created_at` timestamp NOT NULL,
  `status` char(10) NOT NULL,
  `seat_id` bigint NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (premiere_id) REFERENCES premieres(id),
  FOREIGN KEY (seat_id) REFERENCES seats(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

ALTER TABLE
  `admins`
ADD
  UNIQUE KEY `username` (`username`);

ALTER TABLE
  `users`
ADD
  UNIQUE KEY `email` (`email`),
ADD
  UNIQUE KEY `username` (`username`);
