-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Dez-2021 às 21:47
-- Versão do servidor: 5.7.21
-- PHP Version: 7.1.16
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS
*/;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `faeterj3dawnoite`
--
CREATE DATABASE IF NOT EXISTS `faeterj3dawnoite` DEFAULT CHARACTER SET
latin1 COLLATE latin1_general_ci;
USE `faeterj3dawnoite`;
-- --------------------------------------------------------
--
-- Estrutura da tabela `onibus`
--
DROP TABLE IF EXISTS `onibus`;
CREATE TABLE IF NOT EXISTS `onibus` (
`id` int(11) NOT NULL,
`marca` varchar(50) COLLATE latin1_general_ci NOT NULL,
`modelo` varchar(50) COLLATE latin1_general_ci NOT NULL,
`qtdAssentos` int(11) NOT NULL,
`temBanheiro` tinyint(1) NOT NULL,
`temArCondicionado` tinyint(1) NOT NULL,
`chassis` varchar(50) COLLATE latin1_general_ci NOT NULL,
`placa` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
