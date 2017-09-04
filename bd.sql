-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Set-2017 às 01:43
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_framework`
--
CREATE DATABASE IF NOT EXISTS `base_framework` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `base_framework`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `nivel_permissao` int(2) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `nivel_permissao`, `data`, `status`) VALUES
(1, 'Lucas Paschoa Prado', 'lucasprado', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2017-09-04 14:05:45', 1),
(2, 'Henrique Prado', 'henriqueprado', '827ccb0eea8a706c4c34a16891f84e7b', 2, '2017-09-04 14:23:36', 1),
(3, 'Igor Paschoa', 'igorpaschoa', '827ccb0eea8a706c4c34a16891f84e7b', 3, '2017-09-04 14:23:57', 1),
(4, 'Usuario Teste', 'usuario_teste', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2017-09-04 14:24:12', 1),
(5, 'Usuario Teste 2', 'usuario_teste2', '827ccb0eea8a706c4c34a16891f84e7b', 3, '2017-09-04 23:31:13', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
