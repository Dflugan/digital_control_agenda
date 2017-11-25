-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2017 às 22:34
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `senha` varchar(140) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`ID`, `email`, `senha`) VALUES
(1, 'Flavio', '123'),
(2, 'flavioanalistadesistema@gmail.com', 'a94661007c7382bf7a56842074bb617d'),
(3, 'flavioanalistadesistema@gmail.com', 'a94661007c7382bf7a56842074bb617d'),
(4, 'flahenr@gmail.com', '5d95143fb8fe70e3b73215d9993b0ff2'),
(5, 'flavio@gmail.com', 'be83c80519c19a81d0d86d920060034e'),
(6, 'flavioapsantos@gmail.com', 'a94661007c7382bf7a56842074bb617d'),
(7, 'flahenr@gmail.com', '5d95143fb8fe70e3b73215d9993b0ff2'),
(8, 'flavio@gmail.com', 'be83c80519c19a81d0d86d920060034e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_imobel_cad`
--

CREATE TABLE `tbl_imobel_cad` (
  `id` int(15) NOT NULL,
  `codigo` int(15) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` int(10) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `complemento` text NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `forma` varchar(40) NOT NULL,
  `area` int(20) NOT NULL,
  `quarto` int(10) NOT NULL,
  `suite` int(10) NOT NULL,
  `banheiro` int(10) NOT NULL,
  `sala` int(10) NOT NULL,
  `garagem` int(10) NOT NULL,
  `imagem` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_imobel_cad`
--

INSERT INTO `tbl_imobel_cad` (`id`, `codigo`, `titulo`, `tipo`, `cep`, `rua`, `numero`, `cidade`, `estado`, `bairro`, `complemento`, `preco`, `forma`, `area`, `quarto`, `suite`, `banheiro`, `sala`, `garagem`, `imagem`) VALUES
(84, 11111, 'Conjunto Morada', 'Apartamento', '06145-145', 'Rua São Miguel', 250, 'Osasco', 'SP', 'Conceição', 'Cj 2 Ap33', '250000', 'venda', 150, 2, 1, 1, 1, 1, 'apartamento.jpg'),
(85, 1977, 'Condominio Jacarei', 'Apartamento', '06145-145', 'Rua São Miguel', 561, 'Osasco', 'SP', 'Conceição', 'Cj3 Ap25', '380000', 'venda', 180, 3, 1, 2, 1, 2, 'condominio-sustentavel.jpg'),
(86, 2017, 'Casa Jardim', 'Casa', '06380170', 'Rua São Pedro', 297, 'Carapicuíba', 'SP', 'Vila Mercês', 'Casa 3', '400000', 'venda', 350, 3, 1, 2, 1, 2, 'casaJardim.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_imobel_cad`
--
ALTER TABLE `tbl_imobel_cad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_imobel_cad`
--
ALTER TABLE `tbl_imobel_cad`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
