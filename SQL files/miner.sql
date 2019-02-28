-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2018 at 07:06 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `miner`
--

CREATE TABLE `miner` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nonce` int(11) NOT NULL,
  `previoushash` varchar(200) NOT NULL,
  `newhash` varchar(200) NOT NULL,
  `bitcoin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `miner`
--

INSERT INTO `miner` (`id`, `email`, `nonce`, `previoushash`, `newhash`, `bitcoin`) VALUES
(36, 'asim', 145197, '0000a09a4fecb7b19295cea348148eb4', '000030aa7927b4074f9cf97ea140e60f', 5),
(37, 'asim', 60067, '000030aa7927b4074f9cf97ea140e60f', '0000b123a5e69b204febdc860019882a', 5),
(38, 'asim', 541, '0000b123a5e69b204febdc860019882a', '0000364845a2c9fed7070dafb85e2e01', 5),
(39, '1', 41493, '0000364845a2c9fed7070dafb85e2e01', '0000513010e02258bce73e0cf1ea2069', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `miner`
--
ALTER TABLE `miner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `miner`
--
ALTER TABLE `miner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
