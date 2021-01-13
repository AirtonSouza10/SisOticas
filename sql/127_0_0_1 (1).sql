-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30-Ago-2019 às 22:31
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisotica`
--
CREATE DATABASE IF NOT EXISTS `sisotica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sisotica`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

DROP TABLE IF EXISTS `atendimento`;
CREATE TABLE IF NOT EXISTS `atendimento` (
  `IdAtendimento` int(11) NOT NULL AUTO_INCREMENT,
  `Cliente_IdCliente` int(11) NOT NULL,
  `Tecnico_IdTecnico` int(11) NOT NULL,
  `Medico_IdMedico` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Cliente_Empresa_IdEmpresa` int(11) NOT NULL,
  `DataAtendimento` date DEFAULT NULL,
  `REsfericoOD` varchar(6) DEFAULT NULL,
  `REsfericoOE` varchar(6) DEFAULT NULL,
  `RCilindricoOD` varchar(6) DEFAULT NULL,
  `RCilindricoOE` varchar(6) DEFAULT NULL,
  `REixoOD` varchar(6) DEFAULT NULL,
  `REixoOE` varchar(6) DEFAULT NULL,
  `RAvOD` varchar(6) DEFAULT NULL,
  `RAvOE` varchar(6) DEFAULT NULL,
  `RAmbosOlhos` varchar(6) DEFAULT NULL,
  `RAdicao` varchar(10) DEFAULT NULL,
  `CHorizontalOD` varchar(6) DEFAULT NULL,
  `CHorizontalOE` varchar(6) DEFAULT NULL,
  `CVerticalOD` varchar(6) DEFAULT NULL,
  `CVerticalOE` varchar(6) DEFAULT NULL,
  `CEixoOD` varchar(6) DEFAULT NULL,
  `CEixoOE` varchar(6) DEFAULT NULL,
  `LCEsfericoOD` varchar(6) DEFAULT NULL,
  `LCEsfericoOE` varchar(6) DEFAULT NULL,
  `LCCilindricoOD` varchar(6) DEFAULT NULL,
  `LCCilindricoOE` varchar(6) DEFAULT NULL,
  `LCEixoOD` varchar(6) DEFAULT NULL,
  `LCEixoOE` varchar(6) DEFAULT NULL,
  `LCAvOD` varchar(6) DEFAULT NULL,
  `LCAvOE` varchar(6) DEFAULT NULL,
  `LCAmbosOlhos` varchar(10) DEFAULT NULL,
  `DataEntrega` date DEFAULT NULL,
  `UsuarioDeLentes` varchar(1) DEFAULT NULL,
  `Observacoes` varchar(100) DEFAULT NULL,
  `Status_2` varchar(1) DEFAULT NULL,
  `produto_idproduto` int(11) DEFAULT NULL,
  `Produto2` varchar(45) NOT NULL,
  `Qtde1` int(10) NOT NULL,
  `Qtde2` int(10) NOT NULL,
  PRIMARY KEY (`IdAtendimento`,`Cliente_IdCliente`,`Tecnico_IdTecnico`,`Medico_IdMedico`,`Cliente_Empresa_IdEmpresa`),
  KEY `Cliente_IdCliente` (`Cliente_IdCliente`,`Cliente_Empresa_IdEmpresa`),
  KEY `Tecnico_IdTecnico` (`Tecnico_IdTecnico`),
  KEY `Medico_IdMedico` (`Medico_IdMedico`),
  KEY `fk_produto` (`produto_idproduto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `RG` varchar(30) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Logradouro` varchar(100) DEFAULT NULL,
  `Bairro` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `Telefone` varchar(11) DEFAULT NULL,
  `Celular` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `Nome`, `CPF`, `RG`, `DataNascimento`, `Logradouro`, `Bairro`, `Cidade`, `UF`, `Telefone`, `Celular`, `email`, `Stattus`) VALUES
(1, 'Airton de Araujo Souza', '02609494181', '2511762', '2019-08-20', 'Setor SAGOCA apt 1008B', 'Taguatinga', 'Brasília', 'UF', '992458970', '992458970', 'airtonnwa2009@gmail.com', 'A'),
(2, 'Cleiton de Araujo souza', '1254666544', '554455', '2019-08-20', 'ABC Regional quadra 07 lote 05', 'Ceilandia', 'Brasilia', 'DF', '992458977', '992145888', 'cleitonsouza@gmail.com', 'A'),
(3, 'Jose Bonifacio R. de Souza', '38715821315', '2545555', '2019-08-20', 'Agus lindas quada 03 33', 'Jardim Aguas lindas 2', 'Aguas Lindas', 'GO', '222222', '222222', 'jose@gmail.com', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `Razao` varchar(45) DEFAULT NULL,
  `CNPJ` varchar(14) DEFAULT NULL,
  `Inscricao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdEmpresa`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`IdEmpresa`, `Razao`, `CNPJ`, `Inscricao`) VALUES
(1, 'OTICAS BRASILEIRAS LTDA EPP', '22467374000154', '0772250800189'),
(2, 'OTICAS BRASIL LTDA EPP', '00384255000448', '0731859400357'),
(3, 'OTICAS ALM EIRELI EPP', '30181683000191', '0785411400154'),
(4, 'OTICAS MLN EIRELI', '30165255000175', '0785386800123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `IdMedico` int(10) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `CRM` varchar(45) DEFAULT NULL,
  `Clinica` varchar(100) DEFAULT NULL,
  `Obs` varchar(100) DEFAULT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IdMedico`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`IdMedico`, `Nome`, `CRM`, `Clinica`, `Obs`, `Stattus`) VALUES
(1, 'Ariovaldo bezerra', '2225544', 'vida', 'sfadf1222', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `IdProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(45) DEFAULT NULL,
  `Marca` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Cor` varchar(45) DEFAULT NULL,
  `Obs` varchar(100) DEFAULT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IdProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`IdProduto`, `Descricao`, `Marca`, `Tipo`, `Cor`, `Obs`, `Stattus`) VALUES
(1, 'Acuvue Oasys', 'Johnson', 'Colorida', 'Azul', 'linda', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE IF NOT EXISTS `tecnico` (
  `IdTecnico` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `Senha` varchar(100) DEFAULT NULL,
  `Perfil` varchar(45) NOT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  `empresa_idempresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTecnico`),
  KEY `fk_idempresa` (`empresa_idempresa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`IdTecnico`, `Nome`, `CPF`, `Senha`, `Perfil`, `Stattus`, `empresa_idempresa`) VALUES
(1, 'Administrador', '02609494181', '202cb962ac59075b964b07152d234b70', 'Administrador', 'A', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
