-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2018 às 22:42
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aleatorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacta`
--

CREATE TABLE `contacta` (
  `cod_texto` varchar(25) NOT NULL,
  `id_usuario` varchar(25) DEFAULT NULL,
  `id_inst` varchar(25) DEFAULT NULL,
  `texto` text,
  `data_hora` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `cod_doacao` text NOT NULL,
  `cod_envio` text,
  `cod_livro` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `envio`
--

CREATE TABLE `envio` (
  `cod_envio` text NOT NULL,
  `cod_usuario` varchar(25) DEFAULT NULL,
  `cod_livro` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `nome_inst` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `logradouro` text,
  `telefone_inst` decimal(20,0) DEFAULT NULL,
  `foto` longblob NOT NULL,
  `id_inst` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `nome_livro` varchar(200) DEFAULT NULL,
  `editora` varchar(100) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `cod_livro` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `cod_post` varchar(25) NOT NULL,
  `data_hora` date DEFAULT NULL,
  `cod_usuario` varchar(25) DEFAULT NULL,
  `cod_inst` varchar(25) DEFAULT NULL,
  `texto` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(25) NOT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `nome_compl` varchar(100) DEFAULT NULL,
  `telefone` decimal(20,0) DEFAULT NULL,
  `email` text,
  `logradouro` text,
  `imagem` longblob
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacta`
--
ALTER TABLE `contacta`
  ADD PRIMARY KEY (`cod_texto`),
  ADD KEY `fki_instituicao_conversa` (`id_inst`),
  ADD KEY `fki_conversa` (`id_usuario`);

--
-- Indexes for table `envio`
--
ALTER TABLE `envio`
  ADD KEY `fki_cod_usuario` (`cod_usuario`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id_inst`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`cod_post`),
  ADD KEY `fki_usuario` (`cod_usuario`),
  ADD KEY `fki_instituicao` (`cod_inst`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
.
