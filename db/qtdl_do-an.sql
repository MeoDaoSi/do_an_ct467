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

create database qtdl;
use qtdl;

-- --------------------------------------------------------
--
-- Table structure for table `admins`
--
CREATE TABLE `admins` (
  `id` bigint NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

CREATE TABLE `films` (
  `id` bigint NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `length` smallint NOT NULL,
  `cover_image` text NOT NULL,
  `release_year` smallint NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

CREATE TABLE `premieres` (
  `id` bigint NOT NULL,
  `film_id` bigint NOT NULL,
  `start` timestamp NOT NULL,
  `end` timestamp NOT NULL,
  `total_seats` smallint NOT NULL,
  `remaining_seats` smallint NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

CREATE TABLE `seats` (
  `id` bigint NOT NULL,
  `row` tinyint NOT NULL,
  `col` tinyint NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

-- --------------------------------------------------------
--
-- Table structure for table `ticket`
--
-- drop table tickets;
CREATE TABLE `tickets` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `premiere_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `status` int NOT NULL,
  `seat_id` int NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf32;

ALTER TABLE
  `admins`
ADD
  UNIQUE KEY `username` (`username`);

--
-- Indexes for table `films`
--
ALTER TABLE
  `films`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `premiere`
--
ALTER TABLE
  `premieres`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE
  `seats`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE
  `tickets`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `email` (`email`),
ADD
  UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE
  `films`
MODIFY
  `id` bigint NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `premiere`
--
ALTER TABLE
  `premieres`
MODIFY
  `id` bigint NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE
  `seats`
MODIFY
  `id` bigint NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 402;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE
  `tickets`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE
  `users`
MODIFY
  `id` bigint NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
