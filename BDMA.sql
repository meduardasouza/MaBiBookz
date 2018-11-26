-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 26/11/2018 às 09:15
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
  `nome_livro` varchar(80) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Nome_insti` int(11) NOT NULL,
  `telefone` varchar(9) DEFAULT NULL,
  `DDD` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `livros`
--

INSERT INTO `livros` (`nome_livro`, `genero`, `email`, `Nome_insti`, `telefone`, `DDD`) VALUES
(NULL, NULL, NULL, 1, NULL, ''),
(NULL, NULL, NULL, 2, NULL, ''),
(NULL, NULL, NULL, 3, NULL, ''),
(NULL, NULL, NULL, 4, NULL, ''),
(NULL, NULL, NULL, 5, NULL, ''),
(NULL, NULL, NULL, 6, NULL, ''),
(NULL, NULL, NULL, 7, NULL, ''),
(NULL, NULL, NULL, 8, NULL, ''),
(NULL, NULL, NULL, 9, NULL, ''),
(NULL, NULL, NULL, 10, NULL, '');

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
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `imagem` longblob,
  `DDD` varchar(2) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(3) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `nome` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`senha`, `telefone`, `email`, `imagem`, `DDD`, `cidade`, `estado`, `bairro`, `nome`, `username`, `iduser`) VALUES
('123123', '9960641208', 'teste@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'nein', '', 1),
('123123', '9960641208', 'teste@gmail.com', NULL, '22', 'Quissam', 'MS', 'Carmo', 'nein', '', 2),
('123', '9960641208', 'teset@gmail.com', NULL, '22', 'QuissamÃ£', 'DF', 'Carmo', 'Masculino', '', 3),
('123', '9960641208', 'teset@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'Masculino', '', 4),
('123', '9960641208', 'teste@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'iff campos QuissamÃ£', 'Drago', 5),
('159', '9960641208', 'e@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'nein', 'Sr_D', 6);

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
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`Nome_insti`);

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
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `Nome_insti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
