-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Maio-2019 às 00:12
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_cliente` (IN `Nome` VARCHAR(200), IN `Cnpj` VARCHAR(200), IN `Setor` VARCHAR(150), IN `Telefone_comercial` VARCHAR(100), IN `Celular` VARCHAR(100), IN `Email` VARCHAR(100), IN `Endereco` VARCHAR(100), IN `Senha` VARCHAR(100))  NO SQL
INSERT INTO cliente(nome, cnpj, setor, telefone_comercial, celular, email, endereco, senha) VALUES (Nome, Cnpj, Setor, Telefone_comercial, Celular, Email, Endereco, Senha)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_estoque` (IN `Produto` VARCHAR(100), IN `Quantidade` INT(100))  NO SQL
BEGIN
DECLARE idProduto int(100);

SELECT id into idProduto FROM produto where nome = Produto;

INSERT INTO estoque(id_produto, quantidade) VALUES (idProduto, quantidade);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_fornecedor` (IN `Nome` VARCHAR(100), IN `Cnpj` VARCHAR(100))  NO SQL
INSERT INTO fornecedor(nome, cnpj, telefone, email, senha) VALUES (Nome, Cnpj, Telefone, Email, Senha)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_item_pedido` (IN `Produto` VARCHAR(100), IN `Pedido` VARCHAR(100), IN `Quantidade` VARCHAR(100))  NO SQL
BEGIN
DECLARE idProduto int(100);
DECLARE idPedido int(100);


SELECT id into idProduto FROM produto where nome = Produto;
SELECT id into idPedido FROM pedido where nome = Pedido;

INSERT INTO item_pedido(id_produto, id_pedido, quantidade) VALUES (idProduto, idPedido, Quantidade);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_pedido` (IN `Cliente` VARCHAR(100), IN `Data_emissao` TIMESTAMP, IN `Valor_total` DOUBLE, IN `Status_do_pedido` VARCHAR(100), IN `Transportadora` VARCHAR(100))  NO SQL
BEGIN
DECLARE idCliente int(100);

SELECT id INTO idCliente FROM cliente WHERE nome=Cliente;

INSERT INTO pedido(id_cliente, data_emissao, valor_total, `status`, transportadora) VALUES (idCliente, Data_emissao, Valor_total, Status_do_pedido, Transportadora);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_produto` (IN `Fornecedor` VARCHAR(100), IN `Nome` VARCHAR(100), IN `Valor` DOUBLE, IN `Ativo` VARCHAR(30))  NO SQL
BEGIN
DECLARE idFornecedor int(100);

SELECT id into idFornecedor FROM fornecedor where nome = Fornecedor;

INSERT INTO produto(id_fornecedor, nome, valor, ativo) VALUES (idFornecedor, Nome, Valor, Ativo);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
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

INSERT INTO `cliente` (`id`, `nome`, `cnpj`, `estado`, `telefone`, `endereco`, `cidade`, `numero`, `bairro`) VALUES
(4, 'Messias Oliveira', '39.707.959/8000-52', 'Pq Al', '16997391404', 'Rua Carlos Johancem, 335', 'MatÃ£o', 335, 'Pq AlianÃ§a');

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
(10, 'Messias Oliveira', '39.707.959/8000-52', 2147483647, 'messias@trinave.com', 123456789);

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
  `data_emissao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valor_total` double NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `transportadora` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `item_pedido`
--
ALTER TABLE `item_pedido`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

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
