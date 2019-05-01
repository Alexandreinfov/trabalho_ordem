-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Abr-2019 às 23:11
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `os`
--
CREATE DATABASE IF NOT EXISTS `os` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `os`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`login`, `senha`, `permissao`) VALUES
('admin', '123456', 1),
('admin', '123456', 123456);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `COD_CLIENTE` int(255) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `CPF` int(11) NOT NULL,
  `ENDERECO` text NOT NULL,
  `TELEFONE` varchar(20) NOT NULL,
  PRIMARY KEY (`COD_CLIENTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`COD_CLIENTE`, `NOME`, `CPF`, `ENDERECO`, `TELEFONE`) VALUES
(1, '', 0, '', ''),
(2, 'Filipe', 678494, 'ksdfjklds', '4456'),
(3, 'Gabrila', 2147483647, 'Rua Sergipe', '44552211'),
(4, 'Gabrila', 2147483647, 'Rua Sergipe', '44552211');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `COD_FUNCIONARIO` int(255) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `CPF` int(11) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `TELEFONE` varchar(20) NOT NULL,
  `SALARIO` decimal(20,0) NOT NULL,
  PRIMARY KEY (`COD_FUNCIONARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`COD_FUNCIONARIO`, `NOME`, `CPF`, `ENDERECO`, `TELEFONE`, `SALARIO`) VALUES
(1, 'Rogerio', 213497989, 'Rua Bahia', '33336565', '2000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE IF NOT EXISTS `os` (
  `COD_OS` int(255) NOT NULL AUTO_INCREMENT,
  `CLIENTE` int(255) NOT NULL,
  `VEICULO` int(255) NOT NULL,
  `PRODUTO` int(255) NOT NULL,
  `SERVICO` int(255) NOT NULL,
  `FUNCIONARIO` int(255) NOT NULL,
  PRIMARY KEY (`COD_OS`),
  UNIQUE KEY `COD_OS` (`COD_OS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`COD_OS`, `CLIENTE`, `VEICULO`, `PRODUTO`, `SERVICO`, `FUNCIONARIO`) VALUES
(2, 2, 1, 1, 1, 1),
(3, 4, 3, 6, 4, 1),
(4, 0, 0, 0, 0, 0),
(5, 2, 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `COD_PRODUTO` int(255) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(50) NOT NULL,
  `PRECO` float NOT NULL,
  PRIMARY KEY (`COD_PRODUTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`COD_PRODUTO`, `DESCRICAO`, `PRECO`) VALUES
(1, 'Leite Integral Piracanjuba', 3),
(2, 'PÃ£o Integral', 5),
(3, 'PÃ£o Integral', 5),
(4, 'PÃ£o Integral', 5),
(5, 'PÃ£o Integral', 5),
(6, 'Danone', 2.5),
(7, 'Danone', 2.5),
(8, 'Cafe', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE IF NOT EXISTS `servico` (
  `COD_SERVICO` int(255) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(50) NOT NULL,
  `PRECO` float NOT NULL,
  PRIMARY KEY (`COD_SERVICO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`COD_SERVICO`, `DESCRICAO`, `PRECO`) VALUES
(1, 'ManutenÃ§Ã£o em impressora', 50),
(2, 'ManutenÃ§Ã£o em impressora', 50),
(3, 'ManutenÃ§Ã£o em impressora', 50),
(4, 'ManutenÃ§Ã£o em impressora', 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE IF NOT EXISTS `veiculo` (
  `COD_VEICULO` int(255) NOT NULL AUTO_INCREMENT,
  `PLACA` varchar(7) NOT NULL,
  `MODELO` varchar(20) NOT NULL,
  `MARCA` varchar(20) NOT NULL,
  `ANO` int(10) NOT NULL,
  PRIMARY KEY (`COD_VEICULO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`COD_VEICULO`, `PLACA`, `MODELO`, `MARCA`, `ANO`) VALUES
(1, 'BLY-551', 'Tempra', 'FIAT', 1996),
(2, 'BLY-551', 'Tempra', 'FIAT', 1996),
(3, 'kld-012', 'GOL', 'FORD', 1950);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
