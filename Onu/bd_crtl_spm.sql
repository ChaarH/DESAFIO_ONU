-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2018 às 14:01
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_crtl_spm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd_ctrl_contato`
--

CREATE TABLE `bd_ctrl_contato` (
  `ID` int(32) NOT NULL,
  `TXT_NOME` varchar(255) DEFAULT NULL,
  `TXT_ENDERECO` varchar(255) DEFAULT NULL,
  `INT_CPF` varchar(11) DEFAULT NULL,
  `TXT_GENERO` varchar(20) DEFAULT NULL,
  `INT_TELEFONE` int(11) DEFAULT NULL,
  `FAIXA_ETARIA` int(2) DEFAULT NULL,
  `TXT_APARENCIA` varchar(255) DEFAULT NULL,
  `TXT_CHK_01` varchar(255) DEFAULT NULL,
  `TXT_CHK_02` varchar(255) DEFAULT NULL,
  `TXT_CHK_03` varchar(255) DEFAULT NULL,
  `TXT_CHK_04` varchar(255) DEFAULT NULL,
  `TXT_CHK_05` varchar(255) DEFAULT NULL,
  `TXT_CHK_06` varchar(255) DEFAULT NULL,
  `TXT_CHK_07` varchar(255) DEFAULT NULL,
  `TXT_OUTROS` varchar(255) DEFAULT NULL,
  `TXT_NOME_AGRESSOR` varchar(255) DEFAULT NULL,
  `TXT_APARENCIA_AGRESSOR` varchar(255) DEFAULT NULL,
  `TXT_LUGAR` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bd_ctrl_contato`
--

INSERT INTO `bd_ctrl_contato` (`ID`, `TXT_NOME`, `TXT_ENDERECO`, `INT_CPF`, `TXT_GENERO`, `INT_TELEFONE`, `FAIXA_ETARIA`, `TXT_APARENCIA`, `TXT_CHK_01`, `TXT_CHK_02`, `TXT_CHK_03`, `TXT_CHK_04`, `TXT_CHK_05`, `TXT_CHK_06`, `TXT_CHK_07`, `TXT_OUTROS`, `TXT_NOME_AGRESSOR`, `TXT_APARENCIA_AGRESSOR`, `TXT_LUGAR`) VALUES
(21, 'MARCELO', 'RUA XV DE NOVEMBRO', '09456724362', 'MASCULINO', 2147483647, 31, 'CAUCASIANO', '', 'EXPLORACAO SEXUAL', '', '', '', '', 'SAUDE DEBILITADA', 'NADA A DECLARAR', 'JOSE', 'Alto', 'RUA DAS AVES'),
(22, 'MARCELO', 'RUA XV DE NOVEMBRO', '09456724362', 'MASCULINO', 2147483647, 31, 'CAUCASIANO', '', 'EXPLORACAO SEXUAL', '', '', '', '', 'SAUDE DEBILITADA', 'NADA A DECLARAR', 'JOSE', 'Alto', 'RUA DAS AVES'),
(23, 'MARCELO', 'RUA XV DE NOVEMBRO', '09456724362', 'MASCULINO', 2147483647, 31, 'CAUCASIANO', '', 'EXPLORACAO SEXUAL', '', '', '', '', 'SAUDE DEBILITADA', 'NADA A DECLARAR', 'JOSE', 'Alto', 'RUA DAS AVES'),
(24, 'MARCELO', 'RUA XV DE NOVEMBRO', '09456724362', 'MASCULINO', 2147483647, 31, 'CAUCASIANO', '', 'EXPLORACAO SEXUAL', '', '', '', '', 'SAUDE DEBILITADA', 'NADA A DECLARAR', 'JOSE', 'Alto', 'RUA DAS AVES'),
(25, 'MARCELO', 'RUA XV DE NOVEMBRO', '09456724362', 'MASCULINO', 2147483647, 31, 'CAUCASIANO', '', 'EXPLORACAO SEXUAL', '', '', '', '', 'SAUDE DEBILITADA', 'NADA A DECLARAR', 'JOSE', 'Alto', 'RUA DAS AVES'),
(27, 'MARCOS', 'RUA JOAQUIM BARBOSA', '3243432462', 'MASCULINO', 2147483647, 11, 'CICATRIZ NO ROSTO', 'CARCERE PRIVADO', '', '', 'TRAFICO DE PESSOAS', '', '', '', '', 'ANDERSON', 'Cabelo longo', 'RUA AMORINHA'),
(28, 'MARCOS', 'RUA JOAQUIM BARBOSA', '3243432462', 'MASCULINO', 2147483647, 11, 'CICATRIZ NO ROSTO', 'CARCERE PRIVADO', '', '', 'TRAFICO DE PESSOAS', '', '', '', '', 'ANDERSON', 'Cabelo longo', 'RUA AMORINHA'),
(29, 'MARCOS', 'RUA JOAQUIM BARBOSA', '3243432462', 'MASCULINO', 2147483647, 11, 'CICATRIZ NO ROSTO', 'CARCERE PRIVADO', '', '', 'TRAFICO DE PESSOAS', '', '', '', '', 'ANDERSON', 'Cabelo longo', 'RUA AMORINHA'),
(30, 'MARCOS', 'RUA JOAQUIM BARBOSA', '3243432462', 'MASCULINO', 2147483647, 11, 'CICATRIZ NO ROSTO', 'CARCERE PRIVADO', '', '', 'TRAFICO DE PESSOAS', '', '', '', '', 'ANDERSON', 'Cabelo longo', 'RUA AMORINHA'),
(31, 'MARCOS', 'RUA JOAQUIM BARBOSA', '3243432462', 'MASCULINO', 2147483647, 11, 'CICATRIZ NO ROSTO', 'CARCERE PRIVADO', '', '', 'TRAFICO DE PESSOAS', '', '', '', '', 'ANDERSON', 'Cabelo longo', 'RUA AMORINHA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT '1',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES
(1, 'Usuario Nivel 2', 'user2', 'a1881c06eec96db9901c7bbfe41c42a3f08e9cb4', 'usuario@demo.com.br', 3, 1, '2018-10-09 01:07:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd_ctrl_contato`
--
ALTER TABLE `bd_ctrl_contato`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `nivel` (`nivel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bd_ctrl_contato`
--
ALTER TABLE `bd_ctrl_contato`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
