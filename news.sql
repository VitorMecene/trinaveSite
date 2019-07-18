-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jun-2019 às 04:58
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `texto` text,
  `autor` varchar(150) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `data`, `texto`, `autor`, `foto`) VALUES
(6, 'App Buser, o â€œUber dos Ã´nibusâ€, vai dar 10 mil viagens gratuitas', '2019-05-05', 'A despeito das turbulÃªncias jurÃ­dicas e crÃ­ticas das empresas de transporte rodoviÃ¡rio, serviÃ§o que conecta passageiros a operadoras de Ã´nibus acumula fÃ£s', 'Desconhecido', 'noticia4.jpg'),
(7, 'Tabela do frete Ã© ineficaz e aumenta custos e preÃ§os, diz BCG', '2019-05-15', 'Estudo da consultoria Boston Consulting Group aponta aumento de R$ 500 mil nas despesas com transporte em uma Ãºnica empresa', 'Desconhecido', 'noticia5.jpg'),
(8, 'ANTT publica nova tabela com valores do frete mÃ­nimo', '2019-01-18', 'Lei que instituiu a polÃ­tica de pisos mÃ­nimos prevÃª que nova tabela deve sair quando preÃ§o do diesel oscilar mais de 10%', 'Desconhecido', 'noticia6.jpg'),
(9, 'Rumo muda projeÃ§Ãµes para 2019 devido a novas normas contÃ¡beis', '2019-03-19', 'A estimativa para Ebitda passou do intervalo de R$ 3,6 bilhÃµes a R$ 3,9 bilhÃµes para a faixa de R$ 3,85 bilhÃµes a R$ 4,15 bilhÃµes', 'Desconhecido', 'noticia7.jpg'),
(10, '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
