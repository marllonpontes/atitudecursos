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
-- Estrutura da tabela `cad_cursos`
--

CREATE TABLE `cad_cursos` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` text NOT NULL,
  `link` varchar(40) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `page` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_cursos`
--

INSERT INTO `cad_cursos` (`id`, `nome`, `descricao`, `link`, `categoria`, `page`) VALUES
(1, 'Informatica Completo', 'VocÃª ira aprender tudo sobre o Microsoft Office, internet, sistemas operacionais e recursos do windows.', 'images/portfolio/informatica.png', 'info', 'cursos/informatica.php'),
(5, 'Microsoft Word 2010', 'VocÃª ira aprender tudo sobre o Microsoft Word 2010, um dos mais utilizados programas do pacote Office.', 'images/portfolio/word.png', 'info', 'cursos/word.php'),
(8, 'Powerpoint', 'Aprenda conceito bÃ¡sicos e avanÃ§ados de um dos programas mais utilizados de todos os tempos do pacote Microsoft Office.', 'images/portfolio/powerpoint.png', 'info', 'cursos/powerpoint.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_cursos`
--
ALTER TABLE `cad_cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_cursos`
--
ALTER TABLE `cad_cursos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
