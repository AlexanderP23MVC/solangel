-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2025 at 04:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `realizado`
--

CREATE TABLE `realizado` (
  `id` int(11) NOT NULL,
  `id_username` int(11) DEFAULT NULL,
  `id_ubicacion` int(11) DEFAULT NULL,
  `id_respaldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `respaldo`
--

CREATE TABLE `respaldo` (
  `id` int(11) NOT NULL,
  `servidor` varchar(255) DEFAULT NULL,
  `fecha_respaldo` date DEFAULT NULL,
  `ip_estacion` varchar(255) DEFAULT NULL,
  `puesto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(11) NOT NULL,
  `agencia` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `nombre`, `apellido`, `usuario`, `password`, `rol`) VALUES
(6, 'jhon', 'amaro', '123456', '123456', 'especialista'),
(9, 'Andres', 'amaro', '123456', '123456', 'administrador'),
(11, 'yazzury', 'yamilet', '123456', '123456', 'especialista');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `realizado`
--
ALTER TABLE `realizado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_username` (`id_username`),
  ADD KEY `id_ubicacion` (`id_ubicacion`),
  ADD KEY `id_respaldo` (`id_respaldo`);

--
-- Indexes for table `respaldo`
--
ALTER TABLE `respaldo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `realizado`
--
ALTER TABLE `realizado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `respaldo`
--
ALTER TABLE `respaldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `realizado`
--
ALTER TABLE `realizado`
  ADD CONSTRAINT `realizado_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `username` (`id`),
  ADD CONSTRAINT `realizado_ibfk_2` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id`),
  ADD CONSTRAINT `realizado_ibfk_3` FOREIGN KEY (`id_respaldo`) REFERENCES `respaldo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
