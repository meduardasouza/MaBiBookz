-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 05/07/2018 às 08:45
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `MaBiBookz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contacta`
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
-- Estrutura para tabela `doacao`
--

CREATE TABLE `doacao` (
  `cod_doacao` text NOT NULL,
  `cod_envio` text,
  `cod_livro` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `envio`
--

CREATE TABLE `envio` (
  `cod_envio` text NOT NULL,
  `cod_usuario` varchar(25) DEFAULT NULL,
  `cod_livro` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicao`
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
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `nome_livro` varchar(200) DEFAULT NULL,
  `editora` varchar(100) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `cod_livro` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
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
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `senha` varchar(20) DEFAULT NULL,
  `nome_compl` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `imagem` longblob,
  `DDD` varchar(2) DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(3) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`senha`, `nome_compl`, `telefone`, `email`, `imagem`, `DDD`, `iduser`, `cidade`, `estado`, `bairro`) VALUES
('8755', 'gfyhfyyyyyyyyy', NULL, 'GABRIEL@GMAIL.COM', NULL, '0', 1, '', '', ''),
('123', 'Drago', '42224523', 'GABRIEL@GMAIL.COM', NULL, '22', 2, '', '', ''),
('123', 'Drago', '4552345', 'teste@gmail.com', NULL, '22', 3, '', '', ''),
('123', 'Sr_D', '42224523', 'GABRIEL@GMAIL.COM', NULL, '22', 4, '', '', ''),
('123', 'Drago', '42224523', 'dfsgdfgsdf', NULL, '22', 6, 'fdgsdf', 'PI', 'n interessa');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contacta`
--
ALTER TABLE `contacta`
  ADD PRIMARY KEY (`cod_texto`),
  ADD KEY `fki_instituicao_conversa` (`id_inst`),
  ADD KEY `fki_conversa` (`id_usuario`);

--
-- Índices de tabela `envio`
--
ALTER TABLE `envio`
  ADD KEY `fki_cod_usuario` (`cod_usuario`);

--
-- Índices de tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id_inst`);

--
-- Índices de tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`cod_post`),
  ADD KEY `fki_usuario` (`cod_usuario`),
  ADD KEY `fki_instituicao` (`cod_inst`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
