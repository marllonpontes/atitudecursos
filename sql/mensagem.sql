-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2017 às 23:53
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, '', '', '', '2017-05-07 10:21:21'),
(2, '', '', '', '2017-05-07 10:21:23'),
(3, '', '', '', '2017-05-07 10:21:23'),
(4, '', '', '', '2017-05-07 10:21:23'),
(5, '', '', '', '2017-05-07 10:21:24'),
(6, '', '', '', '2017-05-07 10:21:24'),
(7, '', '', '', '2017-05-07 10:21:26'),
(8, '', '', '', '2017-05-07 11:40:30'),
(9, '', '', '', '2017-05-07 11:43:33'),
(10, '', '', '', '2017-05-07 11:56:52'),
(11, '', '', '', '2017-05-07 12:01:12'),
(12, '', '', '', '2017-05-07 12:02:29'),
(13, '', '', '', '2017-05-07 12:07:06'),
(14, '', '', '', '2017-05-07 12:07:10'),
(15, '', '', '', '2017-05-07 12:07:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
