-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Out-2020 às 22:50
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `datanasc` date NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id_contato`, `nome`, `telefone`, `idade`, `datanasc`, `email`) VALUES
(1, 'Giuliano Ito Marim', '55 999998888', 42, '1970-04-01', 'giuliano.boss@gmail.com'),
(2, 'Daniel Bonfante Ito Marim', '55 988887777', 18, '2002-09-24', 'daniel.itomarim@gmail.com'),
(6, 'Leonardo Bonfante I', '55 98484 8445', 20, '1900-12-15', 'leo-ito@hotmail.com'),
(7, 'Thiago Telles', '111111111', 13, '2007-09-27', 'thiago@gmail.com'),
(8, 'Jorel Cristo', '22222222222', 18, '1991-01-01', 'jorel@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
