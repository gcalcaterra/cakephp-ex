-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 10:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulario1`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `edad` varchar(50) DEFAULT NULL,
  `preferencia` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `intereses` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `sexo`, `edad`, `preferencia`, `email`, `intereses`) VALUES
(1, 'Fatima Romero ', 'Femenino', '25', '', 'Baile', 'larissa@gmail.com'),
(2, 'Jose Espinola', 'Masculino', '35', '', 'deportes', ''),
(3, 'Carla Espinola', 'Femenino', '23', '', 'Pintura', 'carla@hotmail.com'),
(4, 'Mario', 'Casas', '28', '', 'deportes', 'mario@gmail.com'),
(5, 'larissa  ZARACHO', 'FEMENINO', '45', '', 'LECTURA', 'lari@hotmail.com'),
(6, 'Luis Prieto', 'Masculino', '45', '', 'Juegos', ''),
(7, 'Federico Barrios', 'Masculino', '20', '', 'pintura', 'fede@gmail.com'),
(8, 'Liz Ortega', 'FEMENINO', '45', '', 'Manualidades', ''),
(9, 'Carina Lopez', 'Femenino', '21', '', 'Baile', 'cari@gmail.com'),
(10, 'Leila Lopez', 'Femenino', '21', '', 'musica', ''),
(11, 'Fatima Romero', 'Femenino', '25', '', 'pintura', ''),
(12, 'Larissa Romero', 'Femenino', '25', '', 'manualidades', ''),
(13, 'Carla Medina', 'Femenino', '25', '', 'Baile', 'carla@gmail.com'),
(14, 'Liz Avalos', 'Femenino', '24', '', 'Canto', ''),
(15, 'Liza Flores', 'femenino', '12', '', 'baile', 'larirr@gmail.com'),
(16, 'Liza Flores', 'femenino', '12', '', 'baile', 'larirr@gmail.com'),
(17, 'Liza Flores', 'femenino', '12', '', 'baile', 'larirr@gmail.com'),
(18, 'Maria Sosa', 'femenino', '12', '', 'baile', ''),
(19, 'Maria Sosa', 'masculino', '12', '', 'baile', ''),
(20, 'Ricardo ', 'MASCULINO', '45', '', 'FUTBOL', ''),
(21, '', '', '', '', '', ''),
(22, 'Lilian ', 'MASCULINO', '25', '', 'varios', ''),
(23, 'Lilian ', 'femenino', '25', '', 'varios', ''),
(24, 'Larissa Romero', 'femenino', '25', '', 'baile', ''),
(25, 'Carlos Luna', 'MASCULINO', '25', '', 'juegos', ''),
(26, 'Gus', 'm', '23', 'Cocina', '', ''),
(27, 'gus', 'm', '23', 'Deportes', '', ''),
(28, 'Gus', 'm', '23', 'Deportes', '', ''),
(29, 'Gus', 'm', '23', 'Deportes', '', ''),
(30, 'Gus', 'm', '23', 'Idiomas', '', ''),
(31, 'Gus', 'm', '23', 'Idiomas', '', ''),
(32, 'M', 'm', '23', 'Deportes', '', ''),
(33, 'M', 'm', '23', 'Deportes', '', ''),
(34, 'sdfsdf', 'fjefjjf', '25', 'Deportes', '', ''),
(35, 'Gus', 'm', '3', 'Deportes', '', ''),
(36, 'm', 'm', '8', 'Deportes', '', ''),
(37, 'g', 'g', '9', 'Deportes', '', ''),
(38, 'g', 'g', '9', 'Deportes', '', ''),
(39, 'g', 'g', '9', 'Electricidad', '', ''),
(40, 'calca', 'm', '33', 'Deportes', '', ''),
(41, 'calca', 'm', '33', 'Deportes', '', ''),
(42, 'Calca', 'm', '40', 'Deportes', '', ''),
(43, 'calca', 'm', '23', 'Deportes', '', ''),
(44, 'm', 'm', '3', 'Idiomas', NULL, NULL),
(45, 'm', 'm', '3', 'Idiomas', NULL, NULL),
(46, 'm', 'm', '3', 'Idiomas', NULL, NULL),
(47, 'maria', 'f', '22', 'Idiomas', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
