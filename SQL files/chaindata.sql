-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2018 at 07:08 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `chaindata`
--

CREATE TABLE `chaindata` (
  `id` int(11) NOT NULL,
  `nonce` int(11) NOT NULL,
  `previoushash` varchar(200) NOT NULL,
  `newhash` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chaindata`
--

INSERT INTO `chaindata` (`id`, `nonce`, `previoushash`, `newhash`) VALUES
(1, 0, '0', 'cfcd208495d565ef66e7dff9f98764da'),
(2, 12618, 'cfcd208495d565ef66e7dff9f98764da', '0000a09a4fecb7b19295cea348148eb4'),
(3, 145197, '0000a09a4fecb7b19295cea348148eb4', '000030aa7927b4074f9cf97ea140e60f'),
(4, 60067, '000030aa7927b4074f9cf97ea140e60f', '0000b123a5e69b204febdc860019882a'),
(5, 541, '0000b123a5e69b204febdc860019882a', '0000364845a2c9fed7070dafb85e2e01'),
(6, 41493, '0000364845a2c9fed7070dafb85e2e01', '0000513010e02258bce73e0cf1ea2069');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chaindata`
--
ALTER TABLE `chaindata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chaindata`
--
ALTER TABLE `chaindata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
