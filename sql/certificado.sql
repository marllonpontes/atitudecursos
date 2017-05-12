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
-- Estrutura da tabela `certificado`
--

CREATE TABLE `certificado` (
  `keyword` int(10) NOT NULL,
  `course` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `data_inicio` varchar(10) NOT NULL,
  `data_fim` varchar(10) NOT NULL,
  `address` varchar(45) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `certificado`
--

INSERT INTO `certificado` (`keyword`, `course`, `description`, `data_inicio`, `data_fim`, `address`, `data_cadastro`) VALUES
(4501, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Luciano Delmiro Moraes Braga', '2017-04-28 18:45:32'),
(4502, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Valeria Souza dos Reis', '2017-04-28 18:47:06'),
(4503, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Bianca Coutinho Silva', '2017-04-28 18:48:02'),
(4504, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Rayssa Maria Silva Costa', '2017-04-28 18:51:46'),
(4505, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Arlesson Coutinho Silva', '2017-04-28 18:52:43'),
(4506, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Robson Cabral da Silva', '2017-04-28 18:53:53'),
(4507, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Stephanie Castelo Branco Bernardes', '2017-04-28 18:54:57'),
(4508, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Solange de Sousa GonÃ§alves', '2017-04-28 18:56:46'),
(4509, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Rosalina Herundina Souza da Silva', '2017-04-28 18:57:30'),
(4510, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Antonio Heleno de Oliveira JÃºnior', '2017-04-28 18:58:24'),
(4511, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Fabiani Cardoso do Monte', '2017-04-28 18:59:06'),
(4512, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Edney Alves Gomes', '2017-04-28 19:00:05'),
(4513, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Josias JÃºnior Tavares da Silva', '2017-04-28 19:01:08'),
(4514, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Vera Lucia Santos Fonseca', '2017-04-28 19:01:49'),
(4515, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Jorge Luiz Castelo Branco Costa JÃºnior', '2017-04-28 19:02:48'),
(4516, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Francisco Almeida da Silva', '2017-04-28 19:04:29'),
(4517, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'JosÃ© Augusto Almeida da Silva', '2017-04-28 19:05:14'),
(4518, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Anderson Trindade Carvalho', '2017-04-28 19:06:08'),
(4519, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Adelson Pantoja CorrÃªa', '2017-04-28 19:08:34'),
(4520, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Alessandro Oliveira de Almeida', '2017-04-28 19:09:56'),
(4521, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Natanael da Silva CorrÃªa', '2017-04-28 19:10:32'),
(4522, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Maiza Queiroz de Arruda', '2017-04-28 19:11:08'),
(4523, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Mileno Alves Vaz', '2017-04-28 19:11:51'),
(4524, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Antonio Admilson Costa CorrÃªa', '2017-04-28 19:13:12'),
(4525, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Ariane Patricia Nai da Silva Santos', '2017-04-28 19:15:54'),
(4526, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Raqueline Damasceno Santana', '2017-04-28 19:16:41'),
(4527, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Luciane Pereira Ribeiro', '2017-04-28 19:17:23'),
(4528, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Josenilson Pereira Costa', '2017-04-28 19:19:07'),
(4529, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Davi Machado de Castro', '2017-04-28 19:20:55'),
(4530, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Rosielton AndrÃ© dos Santos', '2017-04-28 19:21:31'),
(4531, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Kilmara Santana da Silva', '2017-04-28 19:21:59'),
(4532, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Ednilda de Freitas Ferreira', '2017-04-28 19:22:40'),
(4533, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Helton Tavares e Silva', '2017-04-28 19:23:28'),
(4534, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '07/03/2016', '11/03/2016', 'Lucas Monteiro de Castro', '2017-04-28 19:24:06'),
(4540, 'Munck', 'Concluiu com bom aproveitamento', '07/03/2016', '18/03/2016', 'Wellington da Silva Silva', '2017-04-28 19:25:47'),
(4546, 'TIG', 'Concluiu com bom aproveitamento', '14/03/2016', '08/04/2016', 'RÃ´mulo Silva dos Santos', '2017-04-28 19:27:33'),
(4547, 'Condutor de passageiros', 'Concluiu com bom aproveitamento', '21/03/2016', '07/04/2016', 'Mario Furtado das Merces Neto', '2017-04-28 19:29:05'),
(4568, 'Condutor de passageiros', 'Concluiu com bom aproveitamento', '21/03/2016', '08/04/2016', 'Manoel de Oliveira', '2017-04-28 19:31:38'),
(4598, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Ivo GonÃ§alves TenÃ³rio', '2017-04-28 19:33:39'),
(4599, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Luis Carlos Almeida Ribeiro', '2017-04-28 19:35:15'),
(4600, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Nerivan Lopes da Silva', '2017-04-28 19:35:58'),
(4601, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Marcello Moraes da Silva', '2017-04-28 19:36:42'),
(4602, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'JoÃ£o Batista Garcia Ramos', '2017-04-28 19:37:13'),
(4603, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'DamiÃ£o Santos da Silva', '2017-04-28 19:37:43'),
(4604, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Melc Zedec Bandeira Chaves', '2017-04-28 19:38:58'),
(4605, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Jose Edivaldo Soaris Nogueira', '2017-04-28 19:39:45'),
(4606, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Antonio Luiz Almeida Ribeiro', '2017-04-28 19:40:49'),
(4607, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Leandro de Sousa LourenÃ§o', '2017-04-28 19:41:18'),
(4608, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Elias Pereira Davila', '2017-04-28 19:43:30'),
(4609, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Wildyson de Lemos Ferreira', '2017-04-28 19:44:02'),
(4610, 'MOPP', 'Concluiu com bom aproveitamento', '04/04/2016', '20/04/2016', 'Manoel Terto', '2017-04-28 19:44:53'),
(4620, 'MecÃ¢nico Montador Industrial', 'Concluiu com bom aproveitamento', '07/03/2016', '29/04/2016', 'Jerri Clay Lima de Oliveira', '2017-04-28 20:57:18'),
(4630, 'Operador de RoÃ§adeira', 'Concluiu com bom aproveitamento', '30/04/2016', '30/04/2016', 'Mauricio de Jesus Silva da Silva', '2017-04-28 20:59:21'),
(4633, 'Motoniveladora', 'Concluiu com bom aproveitamento', '09/05/2016', '13/05/2016', 'Aristide da Silva', '2017-04-28 21:02:26'),
(4650, 'Condutor de Ambulancia', 'Concluiu com bom aproveitamento', '02/05/2016', '18/05/2016', 'Wellington da Silva Silva', '2017-04-28 21:05:35'),
(4652, 'Rigger', 'Concluiu com bom aproveitamento', '20/06/2016', '01/07/2016', 'Diego junior Macedo Mendes', '2017-04-28 21:07:32'),
(4653, 'Rigger', 'Concluiu com bom aproveitamento', '20/06/2016', '01/07/2016', 'Beraldo do Nascimento Souza', '2017-04-28 21:08:23'),
(4661, 'MecÃ¢nico Montador', 'Concluiu com bom aproveitamento', '11/04/2016', '20/05/2016', 'JosÃ© Maria Nai da Silva', '2017-04-28 21:11:04'),
(4662, 'MecÃ¢nico Montador', 'Concluiu com bom aproveitamento', '11/04/2016', '20/05/2016', 'Manoel de Almeida Pinto', '2017-04-28 21:14:43'),
(4663, 'MecÃ¢nico Montador', 'Concluiu com bom aproveitamento', '11/04/2016', '20/05/2016', 'Douglas Cristiano dos Reis', '2017-04-28 21:16:33'),
(4664, 'MecÃ¢nico Montador', 'Concluiu com bom aproveitamento', '11/04/2016', '20/05/2016', 'Robson de Aguiar Machado', '2017-04-28 21:17:23'),
(4680, 'Montador de Andaimes 80 horas', 'Concluiu com bom aproveitamento', '25/04/2016', '20/05/2016', 'Anderson Teixeira Santana', '2017-04-28 21:21:30'),
(4681, 'Montador de Andaimes 80 horas', 'Concluiu com bom aproveitamento', '25/04/2016', '20/05/2016', 'Tiago da Costa Mota', '2017-04-28 21:23:09'),
(4705, 'Guindaste de Grande Porte', 'Concluiu com bom aproveitamento', '09/05/2016', '20/05/2016', 'Evanildo Lima Galeno', '2017-04-28 21:25:19'),
(4706, 'Guindaste de Grande Porte', 'Concluiu com bom aproveitamento', '09/05/2016', '20/05/2016', 'Bianor da Cunha Santos', '2017-04-28 21:27:31'),
(4707, 'Guindaste de Grande Porte', 'Concluiu com bom aproveitamento', '09/05/2016', '20/05/2016', 'Davi Soares da Silva', '2017-04-28 21:28:11'),
(4720, 'Rolo Compactador', 'Concluiu com bom aproveitamento', '16/05/2016', '27/05/2016', 'Danilo da Silva LeÃ£o', '2017-04-28 21:30:07'),
(4725, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Renato Oliveira de Lima', '2017-04-28 21:32:47'),
(4726, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Alailson dos Santos Lago', '2017-04-28 21:33:56'),
(4727, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Erlon Ewerton Pinheiro', '2017-04-28 21:36:02'),
(4728, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Ivan Nunes da Silva', '2017-04-28 21:37:44'),
(4729, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Romildo Nunes Vieira', '2017-04-28 21:38:32'),
(4730, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Higo de Lima Miranda', '2017-04-28 21:39:21'),
(4736, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'David Silva Santos', '2017-04-28 21:40:22'),
(4737, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Fabiano Silva Tavares', '2017-04-28 21:41:48'),
(4738, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Eurique Almeida Lima', '2017-04-28 21:42:38'),
(4739, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Marcio Murilo Silva', '2017-04-28 21:43:20'),
(4740, 'Reach Stacker', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Nadil Barreto dos Santos Junior', '2017-04-28 21:44:41'),
(4755, 'Empilhadeira de Grande Porte', 'Concluiu com bom aproveitamento', '30/04/2016', '04/06/2016', 'Jorge Luiz Castelo Branco Costa', '2017-04-28 21:45:32'),
(4757, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'Giovanni Alves Cardoso Ferreira', '2017-04-28 19:46:23'),
(4758, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'JosÃ© de Ribamar Santos Melo', '2017-04-28 19:47:19'),
(4759, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'VirgÃ­nia Soares Silva', '2017-04-28 19:48:32'),
(4760, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'Gilney Barbosa de Melo', '2017-04-28 20:15:12'),
(4761, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'Daniel Berg Almeida de Oliveira', '2017-04-28 20:16:52'),
(4762, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'Oscar da Rocha Martins Neto', '2017-04-28 20:18:50'),
(4763, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'Ana Zilda de Carvalho Correa', '2017-04-28 20:19:36'),
(4764, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'Paulo CÃ©sar Monteiro de Lima', '2017-04-28 20:21:19'),
(4765, 'Inspetor de Qualidade de Cargas e GrÃ£os', 'Concluiu com bom aproveitamento', '04/06/2016', '12/06/2016', 'Vlademir Castelo Branco Costa', '2017-04-28 20:23:05'),
(4784, 'Caldereiro', 'Concluiu com bom aproveitamento', '02/05/2016', '24/06/2016', 'Cezar Augusto GonÃ§alves Ferreira', '2017-04-28 20:27:10'),
(5668, 'Especializado para condutores de veiculos de transportes de ', 'Concluiu com bom aproveitamento', '2017-04-10', '2017-04-26', 'Gilson de Sousa Silva', '2017-04-27 16:34:43'),
(7257, 'NR-33', 'Concluiu com bom aproveitamento', '07/06/2016', '10/06/2016', 'Marcos Patrick Medeiros da Rocha', '2017-04-28 20:32:11'),
(7258, 'NR-33', 'Concluiu com bom aproveitamento', '07/06/2016', '10/06/2016', 'Romulo da Silva Vieira', '2017-04-28 20:34:54'),
(7259, 'NR-33', 'Concluiu com bom aproveitamento', '07/06/2016', '10/06/2016', 'JoÃ£o de Oliveira e Silva Neto', '2017-04-28 20:37:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`keyword`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
