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
-- Database: `trinave`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `fk_fornecedor` int(11) DEFAULT NULL,
  `id` int(100) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `cnpj` varchar(200) DEFAULT NULL,
  `estado` varchar(5) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `numero` int(5) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`fk_fornecedor`, `id`, `nome`, `cnpj`, `estado`, `telefone`, `endereco`, `cidade`, `numero`, `bairro`) VALUES
(10, 22, 'Tony Stark', '15.048.766/0001-53', 'RN', '16997391404', 'Rua da PerdiÃ§Ã£o', 'Paraguai', 5, 'Rua Jarvis Pereira'),
(16, 23, 'MESSIAS SILVA OLIVEIRA', '9999999999', 'SP', '16992771035', 'Ria Carlos JOHANCEM, 335', 'MatÃ£o', 0, 'Centauros'),
(16, 24, 'Thor Ragnarok', '1328445465461', 'SP', '16997391404', 'Rua paraiba', 'MatÃ£o', 512, 'Santa Marta'),
(16, 27, 'GABRIEL', '888888888888', 'SP', '8888888888', 'AV NOSSA SENHORA APARECIDA', 'ARARAQUARA', 454, 'Paraiba'),
(16, 28, 'JAO', '66.666.666/6666-66', 'SC', '77 77777-77777', 'ASJNFLASNFL', 'ASFAS', 545, 'ASFASF'),
(16, 36, 'FATIMA', '52.144.785/2255-26', 'SP', '51 65191-65165', 'XDNGDXGNDLK', 'ARARAQUARA', 656, 'LXNBLKDXK'),
(21, 37, 'MARTA SOLANGE LOPES GATI', '89.898.989/8989-89', 'SP', '16996186072', 'Avenida Nossa Senhora Aparecida', 'Araraquara', 158, 'Jardim Pinheiros'),
(21, 38, 'MILTON GATI', '56.565.656/5656-56', 'SP', '23 56232-35652', 'RUA WADI JOÃƒO JORDÃƒO', 'NOVA EUROPA', 141, 'HAB SANTA FE'),
(21, 39, 'Kelly M. Caplinger', '46.464.646/4646-46', 'SP', '18 18184-45461', 'RUA ZERO', 'JABOTICABAL', 258, 'JARDIM JABOTI'),
(21, 40, 'RAFAELA MANSANO', '13.151.484/1515-15', 'SP', '16 51616-51981', 'AVENIDA ANHANGUERA', 'MATÃƒO', 547, 'NOVO HORIZONTE'),
(21, 41, 'Daniel', '56.585.254/5525-55', 'SP', '45 25225-25525', 'RUA UM', 'ARARAQUARA', 55, 'JARDIM DO LADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(100) NOT NULL,
  `id_produto` int(100) NOT NULL,
  `quantidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(100) DEFAULT NULL,
  `telefone` int(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `cnpj`, `telefone`, `email`, `senha`) VALUES
(21, 'Vitor Lopes Mecene', '12.345.678/9999-99', 1699618607, 'vitor.mecene@gmail.com', 123),
(22, 'Vitor Ribeiro', '98.765.432/1111-11', 2147483647, 'vitor.ribeiro@gmail.com', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `id` int(100) NOT NULL,
  `id_produto` int(100) NOT NULL,
  `id_pedido` int(100) NOT NULL,
  `quantidade` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(100) NOT NULL,
  `id_cliente` int(100) NOT NULL,
  `data_emissao` date NOT NULL,
  `end_envio` char(250) NOT NULL,
  `chave` char(250) NOT NULL,
  `previsao_data` date NOT NULL,
  `end_receb` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `id_cliente`, `data_emissao`, `end_envio`, `chave`, `previsao_data`, `end_receb`) VALUES
(25, 22, '2019-05-13', 'Rua da PerdiÃ§Ã£o ,5<br>Rua Jarvis Pereira Paraguai - RN', 'BR-856601', '2019-06-03', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(26, 24, '2019-05-26', 'Rua paraiba ,512<br>Santa Marta MatÃ£o - SP', 'BR-469545', '2019-06-05', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(27, 28, '2019-05-26', 'ASJNFLASNFL ,545<br>ASFASF ASFAS - SC', 'BR-232689', '2019-05-31', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(28, 23, '2019-05-26', 'Ria Carlos JOHANCEM, 335 ,0<br>Centauros MatÃ£o - SP', 'BR-255384', '2019-05-29', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(29, 24, '2019-05-26', 'Rua paraiba ,512<br>Santa Marta MatÃ£o - SP', 'BR-349657', '2019-06-01', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(30, 24, '2019-05-26', 'Rua paraiba ,512<br>Santa Marta MatÃ£o - SP', 'BR-265895', '2019-06-03', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(31, 36, '2019-05-26', 'XDNGDXGNDLK ,656<br>LXNBLKDXK ARARAQUARA - SP', 'BR-423246', '2019-05-28', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(32, 27, '2019-05-26', 'AV NOSSA SENHORA APARECIDA ,454<br>Paraiba ARARAQUARA - SP', 'BR-858146', '2019-06-03', 'Rua Sete de Setembro, n 200<br>Mato Grosso - CuiabÃ¡<br>CEP: 12750-020'),
(33, 27, '2019-05-26', 'AV NOSSA SENHORA APARECIDA ,454<br>Paraiba ARARAQUARA - SP', 'BR-299385', '2019-05-29', 'Av. Dr. FlÃ¡vio Henrique Lemos, 585<br>Portal ItamaracÃ¡, Taquaritinga - SP<br>CEP: 15900-000'),
(34, 23, '2019-05-26', 'Ria Carlos JOHANCEM, 335 ,0<br>Centauros MatÃ£o - SP', 'BR-751566', '2019-05-29', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(35, 23, '2019-05-20', 'Ria Carlos JOHANCEM, 335 ,0<br>Centauros MatÃ£o - SP', 'BR-903055', '2019-06-07', 'Rua Sete de Setembro, n 200<br>Mato Grosso - CuiabÃ¡<br>CEP: 12750-020'),
(36, 24, '2019-05-29', 'Rua paraiba ,512<br>Santa Marta MatÃ£o - SP', 'BR-784624', '2019-05-31', 'Rua Davina, n 513<br>SÃ£o Paulo - Guarulhos - Parque dos ipes<br>CEP: 17902-701'),
(37, 37, '2019-05-27', 'Avenida Nossa Senhora Aparecida ,158<br>Jardim Pinheiros Araraquara - SP', 'BR-796910', '2019-05-31', 'Rua Davina, n 513<br>SÃ£o Paulo - Guarulhos - Parque dos ipes<br>CEP: 17902-701'),
(38, 38, '2019-05-25', 'RUA WADI JOÃƒO JORDÃƒO ,141<br>HAB SANTA FE NOVA EUROPA - SP', 'BR-638871', '2019-06-04', 'Rua Quinta do Jubair, n 715<br>GoiÃ¡s - GoiÃ¢nia - Pau Verde<br>CEP: 15921-000'),
(39, 39, '2019-05-23', 'RUA ZERO ,258<br>JARDIM JABOTI JABOTICABAL - SP', 'BR-412840', '2019-05-29', 'Rua Sete de Setembro, n 200<br>Mato Grosso - CuiabÃ¡<br>CEP: 12750-020'),
(40, 37, '2019-05-21', 'Avenida Nossa Senhora Aparecida ,158<br>Jardim Pinheiros Araraquara - SP', 'BR-393910', '2019-05-30', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(41, 37, '2019-05-29', 'Avenida Nossa Senhora Aparecida ,158<br>Jardim Pinheiros Araraquara - SP', 'BR-778295', '2019-06-07', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(42, 37, '2019-05-29', 'Avenida Nossa Senhora Aparecida ,158<br>Jardim Pinheiros Araraquara - SP', 'BR-475932', '2019-06-12', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150'),
(43, 39, '2019-05-29', 'RUA ZERO ,258<br>JARDIM JABOTI JABOTICABAL - SP', 'BR-825761', '2019-06-06', 'Juazeiro - Rua Padre Cicero, n 15<br>CearÃ¡ - Fortaleza<br>CEP: 11905-150');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(100) NOT NULL,
  `id_fornecedor` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` double NOT NULL,
  `ativo` varchar(30) DEFAULT NULL,
  `perfil` varchar(50) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `observacao` varchar(50) DEFAULT NULL,
  `largura` int(30) DEFAULT NULL,
  `comprimento` int(30) DEFAULT NULL,
  `espessura` int(30) DEFAULT NULL,
  `quantidade` int(30) DEFAULT NULL,
  `peso` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `id_fornecedor`, `nome`, `valor`, `ativo`, `perfil`, `descricao`, `observacao`, `largura`, `comprimento`, `espessura`, `quantidade`, `peso`) VALUES
(26, 21, 'Vitor Lopes Mecene', 5000, '1', 'Chapa', 'IMPLEMENTO INDUSTRIAL', 'PARA INDUSTRIA', 10000, 3000, 100, 7, 5000),
(27, 21, 'Vitor Lopes Mecene', 7000, '1', 'Triangular', 'IMPLEMENTO INDUSTRIAL', 'PARA INDUSTRIA', 5000, 9000, 300, -2, 5000),
(28, 21, 'Vitor Lopes Mecene', 8000, '1', 'Viga u', 'IMPLEMENTO INDUSTRIAL', 'PARA INDUSTRIA', 45000, 85000, 150, 3, 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fornecedor` (`id_fornecedor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `item_pedido`
--
ALTER TABLE `item_pedido`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `item_pedido_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`),
  ADD CONSTRAINT `item_pedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
