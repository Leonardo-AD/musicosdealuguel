-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 19-Jun-2018 às 16:26
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
(4, 'aslap@gmail.com', '123', 'anderson dos santos lopes adolfo de paiiva', 'Caetes 3', 28121998, '125.080.304-73', '85107281', '');

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
(3, '98989898', 'Claudio Silva', 'cs@bol.com', '8475488754560', 'Rua do Sol', 'Pop', 3062000, '95878475431', NULL),
(4, 'ui', 'hsçkj', 'j@gmail.com', '6475893', 'dfdf', 'hu', 23789099, '54675281', NULL),
(5, '123', 'leo', 'leo@gmail.com', '996976890', 'rua x, n 20', '', 0, '2147483647', NULL),
(6, '2018', 'Tarcisio Marques', 'tarcisiomarques00000@gmail.com', '8199887766', 'Av. Brasil', 'MPB', 31051995, '11122233344', NULL),
(7, '123', 'zé silva', 'ze@gmail.com', '9549489489449', 'risd shisi', 'Rap', 7042011, '4878464894', NULL),
(8, '123', 'janaina', 'janaina.projetos@live.com', '33332232', 'djhsgjhgdggjh', 'Rock', 3022018, '0000000000', NULL),
(9, '123', 'lucy', 'luciellyx5@gmail.com', '9453535', '158', 'MPB', 1022004, '12345675', NULL),
(11, '123', 'vdsibf', 'jj@gmail.com', '828896891735', 'jhrytsgge', 'Reggae', 3082012, '68938736741', NULL),
(12, 'jrtter', 'terey', 'teyeeuy', 'yeeye', 'yyhertyt', 'yeyertyhte', 4656, '3', NULL),
(13, '', '', '', '', '', '', 0, '', NULL),
(31, '12345', 'GHBJBG', 'GUGJHUU', 'GUY8Y', 'GYUHYU', 'POP', 10214555, '8556588512', NULL);

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
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `MUSICO`
--
ALTER TABLE `MUSICO`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
