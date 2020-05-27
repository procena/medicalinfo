-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2020 às 07:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `medical_info`
--
CREATE DATABASE IF NOT EXISTS `medical_info` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `medical_info`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `idcategorias` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategorias`, `descricao`, `estado`) VALUES
(1, 'Doenças Cardiovasculares', 1),
(2, 'Doenças Respiratorios', 1),
(10, 'Doenças Sexualmente Transmissíveis (DST)', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

DROP TABLE IF EXISTS `publicacoes`;
CREATE TABLE `publicacoes` (
  `idpublicacoes` int(11) NOT NULL,
  `artigo` varchar(45) GENERATED ALWAYS AS (concat('artigo-',`titulo`,'.txt')) VIRTUAL,
  `categoria` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT 1,
  `data_registo` datetime DEFAULT current_timestamp(),
  `resumo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`idpublicacoes`, `categoria`, `titulo`, `estado`, `data_registo`, `resumo`) VALUES
(7, 'Doenças Cardiovasculares', 'Melhoria da Saude Infantil', 1, '2020-03-22 00:03:50', '<h1><b>Pontos importantes</b></h1><p>Sendo que devido a muitos dramas, devemos ter a certeza do que se passa em todos os aspectos, sendo importante sempre que possivel, meio de comunicação aberto so'),
(8, 'Doenças Cardiovasculares', 'Exercicios Cardios', 1, '2020-03-24 09:00:57', '<b>O que são?</b><p>São na verdade exercicios</p>...'),
(9, 'Doenças Respiratorios', 'Exercicios Respiratorios', 1, '2020-03-24 09:30:31', 'Existem diversos exercicios respiratorios:<p><ul><li>Corrida</li><li>Caminhada</li></ul></p><p>Sendo importante saber, como aplica-los em diferente casos e diferentes pacientes.</p>...'),
(10, 'Doenças Respiratorios', 'Sistema Respiratorios', 1, '2020-03-28 22:47:53', 'O sistema respiratorio visa a controlar a entrada, tratamento e saida do ar. Seu principal orgao é, obviamente, os pulmões.<p>O pulmao, basicamente, funciona como um grande aspirador natural. Soment...'),
(11, 'Doenças Sexualmente Transmissíveis (DST)', 'Sífilis ', 1, '2020-05-02 18:27:31', '<b>Conceito</b><p>Doença transmitido sexualmente, que afecta os orgãos sexuais. Muito contagiosa que pode causar a morte caso nao seja tratado.</p><p><b>Meios de Transmissão</b></p><p>seja la o que...');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE `utilizadores` (
  `idutilizadores` int(11) NOT NULL,
  `conta` varchar(45) DEFAULT NULL,
  `passe` varchar(255) DEFAULT '$2y$10$G/WY2lz0DuoIoGOfSQFTVOrqmY4z6pSdowCf6.estJ7PWkpX7VgCC',
  `estado` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`idutilizadores`, `conta`, `passe`, `estado`) VALUES
(1, 'admin', '$2y$10$G/WY2lz0DuoIoGOfSQFTVOrqmY4z6pSdowCf6.estJ7PWkpX7VgCC', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategorias`);

--
-- Índices para tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`idpublicacoes`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`idutilizadores`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `idpublicacoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `idutilizadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
