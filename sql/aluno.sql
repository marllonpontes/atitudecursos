-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2017 às 23:51
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
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(144) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(10) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT '1',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL,
  `data_ultimo_login` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `rg`, `cpf`, `pais`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `uf`, `telefone`, `celular`, `email`, `senha`, `nivel`, `ativo`, `cadastro`, `data_ultimo_login`) VALUES
(1, 'Cristiano Santos de Souza', '7052279', '02778852212', 'BRA', 'Rua Germano Aranha Qd. 294', '03', 'Proximo Ã  ParagÃ¡s', 'Vila dos Cabanos', '68447000', 'Barcarena', 'PA', '9191993974583', '0', 'cristiano@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 2, 1, '2017-04-23 17:28:17', '2017-05-07'),
(2, 'Mikael', '', '', '', '', '', '', '', '', '', '', '0', '0', 'mikael@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 2, 1, '2017-05-07 18:16:43', '2017-05-07'),
(3, 'Marllon', '', '', '', '', '', '', '', '', '', '', '0', '0', 'marllon@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 1, 1, '2017-05-07 18:22:27', '2017-05-07'),
(4, 'Castelo', '', '', '', '', '', '', '', '', '', '', '0', '0', 'castelo@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 2, 1, '2017-05-07 18:24:19', '2017-05-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivel` (`nivel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
