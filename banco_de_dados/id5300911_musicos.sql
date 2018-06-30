-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30-Jun-2018 às 20:31
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5300911_musicos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTRATACOES`
--

CREATE TABLE `CONTRATACOES` (
  `ID` int(5) NOT NULL,
  `ID_MUSICO` int(5) NOT NULL,
  `ID_CONTRATANTE` int(5) NOT NULL,
  `DATA` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOTA_MUSICO` int(2) NOT NULL,
  `COMENTARIO_MUSICO` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `NOTA_CONTRATANTE` int(2) NOT NULL,
  `COMENTARIO_CONTRATANTE` varchar(90) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTRATANTE`
--

CREATE TABLE `CONTRATANTE` (
  `ID` int(5) NOT NULL,
  `EMAIL` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `SENHA` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `NOME` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ENDERECO` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `DATA_DE_NASCIMENTO` int(8) NOT NULL,
  `CNPJ` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `TELEFONE` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `FOTO` varchar(90) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `CONTRATANTE`
--

INSERT INTO `CONTRATANTE` (`ID`, `EMAIL`, `SENHA`, `NOME`, `ENDERECO`, `DATA_DE_NASCIMENTO`, `CNPJ`, `TELEFONE`, `FOTO`) VALUES
(1, 'braseiro@gmail.com', '2018', 'Restaurante Braseiro', 'Br-101 Norte', 10011920, '12312312312', '81954376732', ''),
(2, 'sauro@gmail.com', '123', 'Dino da Silva Sauro', 'rua b', 2042013, '12325489564156', '8159545621564', ''),
(3, 'vianna@gmail.com', '123', 'Contratante', 'Ilha de Itamaracá', 3052013, '231123123', '1231231232', ''),
(4, 'aslap@gmail.com', '123', 'anderson dos santos lopes adolfo de paiiva', 'Caetes 3', 28121998, '125.080.304-73', '85107281', ''),
(5, 'cross@gmail.com', '123', 'Leo Cross', 'hbougvbp i iwgbsipe', 13121921, '98765435678999', '7878344986378', ''),
(6, 'zuki@gmail.com', '123', 'suki zuki', 'fdgeawerfestewt', 4052011, '56465836878954', '5459789789489', ''),
(7, 'leonardo.alves779gm@outlook.com', '123', 'leo chefe', 'uifuihfis', 2011979, '78346573265936', '09929473922', ''),
(8, 'dru@gmail.com', '123', 'srhg', 'jgfhjfjfxjgfx', 1012013, '14897357364', '4865783573254', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTRATOS`
--

CREATE TABLE `CONTRATOS` (
  `ID` int(11) NOT NULL,
  `ID_M` int(11) NOT NULL,
  `ID_C` int(11) NOT NULL,
  `NOME_M` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NOME_C` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LOCAL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HORARIO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DIA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MES` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ANO` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `CONTRATOS`
--

INSERT INTO `CONTRATOS` (`ID`, `ID_M`, `ID_C`, `NOME_M`, `NOME_C`, `LOCAL`, `HORARIO`, `DIA`, `MES`, `ANO`) VALUES
(64, 6, 1, 'dggvjh', 'nbcnf', 'caetes city', '', '01', '10', '2017'),
(65, 35, 1, 'Anderson', 'Aslap', 'Abreu e lima', '', 'segunda', 'dezembro', '2019'),
(66, 6, 1, 'dggvjh', 'nbcnf', 'caetes city', '', '01', '10', '2017'),
(67, 6, 1, 'dggvjh', 'nbcnf', 'caetes city', '', '01', '10', '2017'),
(68, 6, 1, 'dggvjh', 'nbcnf', 'caetes city', '', '01', '10', '2017'),
(69, 6, 1, 'dggvjh', 'nbcnf', 'caetes city', '', '01', '10', '2017'),
(70, 1, 1, '', '', '', '', '', '', ''),
(71, 1, 1, 'alexandre', 'adawda', 'asadwda', '', 'awdadw', 'awdawd', 'awad'),
(72, 1, 1, '', '', '', '', '', '', ''),
(73, 39, 1, 'Tarcisio', 'Leonardo', 'Saramandaia', '', '10', '08', '2018'),
(74, 0, 1, 'Tarcisio', 'Marques', 'Saramandaia', '', '10', 'jun', '2018'),
(75, 0, 1, 'Tarcisio', 'Marques', 'Saramandaia', '', '15', 'jan', '2018'),
(76, 0, 1, 'Tarcisio', 'Marques', 'Saramandaia', '', '10', 'jun', '2018'),
(77, 0, 1, 'Tarcisio', 'Marques', 'Igarassu', '', '01', '09', '2018'),
(78, 40, 1, 'Leonardo', 'Tarcisio', 'Igarassu', '', '10', '07', '2018'),
(79, 39, 1, 'Tarcisio', 'Marques', 'Abreu', '', '20', '07', '2018'),
(80, 40, 1, 'jhoids', 'dsgfds', 'sdgfdsg', '', '1', 'maio', '1888'),
(81, 40, 1, 'gfxjh', 'rtfufth', 'tfhfdgh', '', 'fgyh', 'rtfh', 'fgdh'),
(82, 39, 1, 'fjyfdj', 'gfdjmhgvh', 'fcgcgm', '', '', '', ''),
(83, 39, 1, 'Thdhdhgjh', 'jhdhgdhh', 'fdhfggu', '', '25', '10', '2017'),
(84, 39, 1, 'Thdhdhgjh', 'jhdhgdhh', 'fdhfggu', '', '25', '10', '2017'),
(85, 39, 1, 'Thdhdhgjh', 'jhdhgdhh', 'fdhfggu', '', '25', '10', '2017'),
(86, 39, 1, 'Thdhdhgjh', 'jhdhgdhh', 'fdhfggu', '', '25', '10', '2017'),
(87, 40, 1, 'Leonardo', 'Marques', 'Igarassu', '', '31', '08', '2018'),
(88, 39, 1, 'ngffdfds', 'gffdsgfdf', 'fggfsgs', '', '', '', ''),
(89, 40, 1, 'gvsdgds', 'gsggfs', 'gsdgsgs', '', '', '', ''),
(90, 40, 1, 'htrjgfjhgfjhgf', 'hghgjhgfhgfd', 'igarassu', '', '', '', ''),
(91, 41, 1, 'Anderson', 'Aslap', 'Caetes city', '', '29', '12', '2019'),
(92, 40, 1, '', '', 'Abreu', '', '20', 'ago', '2018'),
(93, 43, 1, 'dasdas', 'adasdasd', 'Bar', '', '12', '12', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `FOTOS`
--

CREATE TABLE `FOTOS` (
  `id` int(11) NOT NULL,
  `ID_MUSICO` int(11) NOT NULL,
  `FOTO` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `FOTOS`
--

INSERT INTO `FOTOS` (`id`, `ID_MUSICO`, `FOTO`) VALUES
(14, 35, 'lucy.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `MUSICO`
--

CREATE TABLE `MUSICO` (
  `ID` int(5) NOT NULL,
  `SENHA` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `NOME` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `TELEFONE` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `ENDERECO` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `GENERO_MUSICAL` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `DATA_DE_NASCIMENTO` int(8) NOT NULL,
  `CPF` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `FOTO` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `MUSICO`
--

INSERT INTO `MUSICO` (`ID`, `SENHA`, `NOME`, `EMAIL`, `TELEFONE`, `ENDERECO`, `GENERO_MUSICAL`, `DATA_DE_NASCIMENTO`, `CPF`, `FOTO`) VALUES
(1, '123', 'Alexandre', 'alexandre@gmail.com', '8768767867', 'Ilha de Itamaracá', 'Eletrônico', 16022013, '6786867868', NULL),
(5, '123', 'leo', 'leo@gmail.com', '996976890', 'rua x, n 20', '', 0, '2147483647', NULL),
(9, '123', 'lucy', 'luciellyx5@gmail.com', '9453535', '158', 'MPB', 1022004, '12345675', NULL),
(35, '1237', 'Anderson', 'aslap@gmail.com', '123456789', 'Caetés 3', 'Rock', 1012018, '123456789', NULL),
(39, '2018', 'Tarcisio', 'tarcisiomarques00000@gmail.com', '5654565615161', 'Paulista', 'ELETRONICA', 15062010, '98659684541', NULL),
(40, '123', 'Leonardo', 'leonardo.alves779@gmail.com', '996956023', 'rua y, aracity', 'ROCK', 16051998, '11368683509', NULL),
(41, '1237', 'Anderson Adolfo', 'aslap7xx@gmail.com', '85107281', 'Caetés city', 'ROCK', 28121998, '123.123.123', NULL),
(43, '123', 'Forte Orange', 'strapacao@gmail.com', '321321321321', 'Ilha de Itamaracá', 'POP', 2022016, '2131231231', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CONTRATACOES`
--
ALTER TABLE `CONTRATACOES`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ID_MUSICO_FK` (`ID_MUSICO`),
  ADD KEY `ID_CONTRATANTE_FK` (`ID_CONTRATANTE`);

--
-- Indexes for table `CONTRATANTE`
--
ALTER TABLE `CONTRATANTE`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `TELEFONE` (`TELEFONE`),
  ADD UNIQUE KEY `CNPJ` (`CNPJ`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `CONTRATOS`
--
ALTER TABLE `CONTRATOS`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `FOTOS`
--
ALTER TABLE `FOTOS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MUSICO`
--
ALTER TABLE `MUSICO`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `TELEFONE` (`TELEFONE`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CONTRATACOES`
--
ALTER TABLE `CONTRATACOES`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CONTRATANTE`
--
ALTER TABLE `CONTRATANTE`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `CONTRATOS`
--
ALTER TABLE `CONTRATOS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `FOTOS`
--
ALTER TABLE `FOTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `MUSICO`
--
ALTER TABLE `MUSICO`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `CONTRATACOES`
--
ALTER TABLE `CONTRATACOES`
  ADD CONSTRAINT `ID_CONTRATANTE_FK` FOREIGN KEY (`ID_CONTRATANTE`) REFERENCES `CONTRATANTE` (`ID`),
  ADD CONSTRAINT `ID_MUSICO_FK` FOREIGN KEY (`ID_MUSICO`) REFERENCES `MUSICO` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
