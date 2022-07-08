-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jul-2022 às 22:49
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `3dawav2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus`
--

CREATE TABLE `onibus` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `modelo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `qtdAssentos` int(11) NOT NULL,
  `temBanheiro` tinyint(1) NOT NULL,
  `temArCondicionado` tinyint(1) NOT NULL,
  `chassis` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `placa` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `onibus`
--

INSERT INTO `onibus` (`id`, `marca`, `modelo`, `qtdAssentos`, `temBanheiro`, `temArCondicionado`, `chassis`, `placa`) VALUES
(1, 'Ford', '15', 8, 1, 0, '3456', 'TPK83809');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `onibus`
--
ALTER TABLE `onibus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `onibus`
--
ALTER TABLE `onibus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
