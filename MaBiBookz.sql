-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 10:34 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MaBiBookz`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacta`
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
-- Table structure for table `doacao`
--

CREATE TABLE `doacao` (
  `cod_doacao` text NOT NULL,
  `cod_envio` text,
  `cod_livro` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `envio`
--

CREATE TABLE `envio` (
  `cod_envio` text NOT NULL,
  `cod_usuario` varchar(25) DEFAULT NULL,
  `cod_livro` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `instituicao`
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
-- Table structure for table `livros`
--

CREATE TABLE `livros` (
  `nome_livro` varchar(80) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `editora` varchar(50) DEFAULT NULL,
  `isbn` varchar(20) NOT NULL,
  `sinopse` varchar(5000) NOT NULL,
  `idlivro` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`nome_livro`, `genero`, `autor`, `editora`, `isbn`, `sinopse`, `idlivro`) VALUES
('MemÃ³rias BrÃ¡s Cubas', 'FicÃ§Ã£o', 'livros@gmail.com', '999765280', '22', 'Biblioteca IFF', 13),
('Dom Casmurro', 'Drama', 'megs.dlt12@gmail.com', '999765280', '22', 'IFF Campus QuissamÃ£', 14),
('Demian', 'Drama', 'megs.dlt12@gmail.com', '999765280', '22', 'IFF Campus QuissamÃ£', 15),
('Harry Potter e a Pedra Filosofal', 'Fantasia', 'JK Rowling', 'Rocco', '8532530788', 'Harry Potter Ã© um garoto cujos pais, feiticeiros, foram assassinados por um poderosÃ­ssimo bruxo quando ele ainda era um bebÃª. Ele foi levado, entÃ£o, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrÃ¡rio. AtÃ© os 10 anos, Harry foi uma espÃ©cie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha Ã³culos remendados e era tratado como um estorvo. No dia de seu aniversÃ¡rio de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no paÃ­s das maravilhas, que o conduz a um mundo mÃ¡gico. Descobre sua verdadeira histÃ³ria e seu destino: ser um aprendiz de feiticeiro atÃ© o dia em que terÃ¡ que enfrentar a pior forÃ§a do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengonÃ§ado, tÃ£o habituado Ã  rejeiÃ§Ã£o, descobre, tambÃ©m, que Ã© um herÃ³i no universo dos magos. Potter fica sabendo que Ã© a Ãºnica pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa Ã© a causa da marca em forma de raio que ele carrega', 18);

-- --------------------------------------------------------

--
-- Table structure for table `postagem`
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
-- Table structure for table `usuario`
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`senha`, `telefone`, `email`, `imagem`, `DDD`, `cidade`, `estado`, `bairro`, `nome`, `username`, `iduser`) VALUES
('123123', '9960641208', 'teste@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'nein', '', 1),
('123123', '9960641208', 'teste@gmail.com', NULL, '22', 'Quissam', 'MS', 'Carmo', 'nein', '', 2),
('123', '9960641208', 'teset@gmail.com', NULL, '22', 'QuissamÃ£', 'DF', 'Carmo', 'Masculino', '', 3),
('123', '9960641208', 'teset@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'Masculino', '', 4),
('123', '9960641208', 'teste@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'iff campos QuissamÃ£', 'Drago', 5),
('159', '9960641208', 'e@gmail.com', NULL, '22', 'QuissamÃ£', 'RJ', 'Carmo', 'nein', 'Sr_D', 6);

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
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`idlivro`);

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
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `idlivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
