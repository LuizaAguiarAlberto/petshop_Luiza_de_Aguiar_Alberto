-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Set-2020 às 01:22
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `petshop2`
--
CREATE DATABASE IF NOT EXISTS `petshop2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `petshop2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE IF NOT EXISTS `animais` (
  `nome` varchar(40) NOT NULL,
  `cpf` varchar(80) NOT NULL COMMENT '80',
  `idade` int(11) NOT NULL,
  `especie` varchar(60) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`nome`, `cpf`, `idade`, `especie`) VALUES
('Salem', '500.300.400-90', 2, 'Gato'),
('Bartolo', '600.700.500-40', 1, 'Gato'),
('Thor', '700.200.300-80', 4, 'Cachorro'),
('Ozzy', '900.300.200-30', 5, 'Cachorro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `donos`
--

CREATE TABLE IF NOT EXISTS `donos` (
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `idade` int(11) NOT NULL,
  `cpf` varchar(60) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `donos`
--

INSERT INTO `donos` (`nome`, `telefone`, `idade`, `cpf`) VALUES
('Luiza Aguiar', '99999-8888', 23, '400.200.300-80'),
('Julia', '99997-8885', 43, '600.700.500-40'),
('Rafael', '99997-8822', 21, '700.200.300-80'),
('Rafaelly', '99996-8884', 34, '900.300.200-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
