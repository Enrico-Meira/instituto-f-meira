-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Ago-2023 às 23:01
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fm_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id_agendamentos` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_clientes` varchar(13) DEFAULT NULL,
  `id_procedimentos` int(11) DEFAULT NULL,
  `data_agenda` datetime DEFAULT NULL,
  `status_agenda` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` varchar(13) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `data_nasc` datetime DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimentos`
--

CREATE TABLE `procedimentos` (
  `id_procedimentos` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `procedimento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD KEY `FK_id_clientes` (`id_clientes`),
  ADD KEY `FK_id_procedimentos` (`id_procedimentos`);


ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`);

-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `FK_id_clientes` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`),
  ADD CONSTRAINT `FK_id_procedimentos` FOREIGN KEY (`id_procedimentos`) REFERENCES `procedimentos` (`id_procedimentos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `clientes` 
(`id_clientes`, `nome`, `cpf`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `telefone`, `descricao`, `data_nasc`, `genero`, `email`, `senha`) 
VALUES ('43f5q34f543', 'Camila Loures', '12345678912', 'SP', 'Sorocaba', 'Cajuru', 'Rua dos Flamingo', '128', '15992342342', 'descrição', '2023-11-21 17:10:59', 'Feminino', 'email2@gmail.com', '123456');
INSERT INTO `clientes` 
(`id_clientes`, `nome`, `cpf`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `telefone`, `descricao`, `data_nasc`, `genero`, `email`, `senha`) 
VALUES ('q245f443f', 'João gomes', '09876543112', 'SP', 'Sorocaba', 'Cajuru', 'Rua dos Flamingo', '128', '15992342342', 'descrição', '2023-11-21 17:10:59', 'Masculino', 'email3@gmail.com', '123456');
INSERT INTO `clientes` 
(`id_clientes`, `nome`, `cpf`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `telefone`, `descricao`, `data_nasc`, `genero`, `email`, `senha`) 
VALUES ('q34f5q3ffq5', 'Sujiro Kimame', '56473829106', 'SP', 'Sorocaba', 'Cajuru', 'Rua dos Flamingo', '128', '15992342342', 'descrição', '2023-11-21 17:10:59', 'Masculino', 'email4@gmail.com', '123456');
INSERT INTO `clientes` 
(`id_clientes`, `nome`, `cpf`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `telefone`, `descricao`, `data_nasc`, `genero`, `email`, `senha`) 
VALUES ('qf54qf5q4fq', 'camila loures', '12222222222', 'SP', 'Sorocaba', 'Cajuru', 'Rua dos Flamingo', '128', '15992342342', 'descrição', '2023-11-21 17:10:59', 'Feminino', 'email5@gmail.com', '123456');