-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Ago-2022 às 20:11
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` varchar(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `codcurso` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `endereco`, `cidade`, `codcurso`) VALUES
('10001', 'Marcos Moraes', 'Rua Pe Roque, 2057', 'Mogi Mirim', '01'),
('10002', 'Maria Conceição Lopes', 'Rua Araras, 23', 'Mogi Guaçu', '01'),
('10003', 'Ana Carina Lopes', 'Rua Peraltas, 222', 'Santos', '01'),
('10004', 'Carlos Aguiar', 'Rua Botafogo, 33', 'Santos', '01'),
('10005', 'André Luiz dos Santos', 'Rua Lopes Conte, 3343', 'Sapucaí', '01'),
('10006', 'Pedro Antonio Pimenta', 'Rua Altair Lopes, 33', 'Itapira', '02'),
('10007', 'Rita de Cássia da Silva', 'Rua Eletromais, 33', 'Itapira', '02'),
('10008', 'Caique dos Santos', 'Rua das Amoreiras, 55', 'Campinas', '02'),
('10009', 'Carlos Tavares', 'Rua Peixe, 99', 'Santos', '02'),
('10010', 'Antonio Carlos Caetano', 'Rua Josefina Alface, 987', 'Campinas', '02'),
('10011', 'Ricardo Moreira', 'Rua do Pinhal, 332', 'Aparecida', '03'),
('10012', 'Richardson S. P Campeao', 'Rua do Tricolor, 433', 'São Paulo', '03'),
('10013', 'Junior Camisa Seis', 'Rua do Morumbi, 433', 'São Paulo', '03'),
('10014', 'Carina Melo', 'Rua Osvaldo Ramos, 88', 'Mogi Guaçu', '03'),
('10015', 'Pedro Mello', 'Rua Itororó, 3999', 'Mogi Mirim', '03'),
('10016', 'Artur Alvares', 'Rua Solimões, 888', 'São Paulo', '02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `codcurso` char(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `coddisc1` char(2) NOT NULL,
  `coddisc2` char(2) NOT NULL,
  `coddisc3` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`codcurso`, `nome`, `coddisc1`, `coddisc2`, `coddisc3`) VALUES
('01', 'Auxiliar de Informática', '11', '12', '13'),
('02', 'Programador de Computadores', '21', '22', '23'),
('03', 'Técnico em Informática', '31', '32', '33'),
('04', 'Logística', '41', '42', '43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `CodDisciplina` char(2) NOT NULL,
  `NomeDisciplina` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`CodDisciplina`, `NomeDisciplina`) VALUES
('11', 'Banco de Dados'),
('12', 'Lógica de Programação'),
('13', 'Desenvolvimento de Software 1'),
('21', 'Banco de Dados 2'),
('22', 'Desenvolvimento de Software 2'),
('23', 'Programação de Computadores 1'),
('31', 'Banco de Dados 3'),
('32', 'Programação de Computadores 2'),
('33', 'Desenvolvimento de Software 3 '),
('41', 'Logística empresarial'),
('42', 'Logística de pessoas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codcurso`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`CodDisciplina`);
--
-- Banco de dados: `exemplocurso`
--
CREATE DATABASE IF NOT EXISTS `exemplocurso` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `exemplocurso`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `estoque`) VALUES
(1, 'lápis', 100),
(2, 'borracha', 50),
(3, 'papel', 200),
(4, 'caderno', 100),
(5, 'caneta', 200),
(6, 'teste1', 200);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Banco de dados: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------
