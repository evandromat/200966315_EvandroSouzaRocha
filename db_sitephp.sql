-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Ago-2021 às 14:13
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sitephp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carrinho`
--

CREATE TABLE `tb_carrinho` (
  `id_carrinho` int(12) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `valor` varchar(5) NOT NULL,
  `total` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_carrinho`
--

INSERT INTO `tb_carrinho` (`id_carrinho`, `descricao`, `quantidade`, `valor`, `total`, `id_user`) VALUES
(1, 'Bolo de Fuba com goiabada', 2, '30,00', '60', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_compras`
--

CREATE TABLE `tb_compras` (
  `id_compras` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `quantidade` int(5) DEFAULT NULL,
  `total` int(6) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `hr` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_postagens`
--

CREATE TABLE `tb_postagens` (
  `id_post` int(5) NOT NULL,
  `titulo` varchar(60) NOT NULL DEFAULT 'Alfajor Argentino',
  `desc_breve` varchar(200) DEFAULT 'alfajor argentino Ã© um doce feito com dois biscoitos macios que esfarelam.',
  `preco` varchar(6) DEFAULT '74.90',
  `unidade` varchar(5) DEFAULT '/Kg',
  `imagem` varchar(60) DEFAULT 'alfajor_vovo.jpg',
  `texto` varchar(1000) DEFAULT 'Em sua forma mais comum, o alfajor argentino Ã© um doce feito com dois biscoitos macios que esfarelam, recheados com doce de leite e cobertos com chocolate ou polvilhados com aÃ§Ãºcar ou coco ralado.',
  `composicao` varchar(200) DEFAULT 'manteiga\r\n\r\ngemas\r\n\r\naÃ§Ãºcar\r\n\r\nfarinha de trigo\r\n\r\nmel\r\n\r\nfermento em pÃ³\r\n\r\nbicarbonato de sÃ³dio\r\n\r\nessÃªncia de baunilha',
  `dt` date NOT NULL,
  `hr` time NOT NULL,
  `page` int(1) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_postagens`
--

INSERT INTO `tb_postagens` (`id_post`, `titulo`, `desc_breve`, `preco`, `unidade`, `imagem`, `texto`, `composicao`, `dt`, `hr`, `page`, `id_user`) VALUES
(1, 'Alfajor Argentino', 'alfajor argentino Ã© um doce feito com dois biscoitos macios que esfarelam.', '74.90', '/Kg', 'alfajor_vovo.jpg', 'Em sua forma mais comum, o alfajor argentino Ã© um doce feito com dois biscoitos macios que esfarelam, recheados com doce de leite e cobertos com chocolate ou polvilhados com aÃ§Ãºcar ou coco ralado.', 'manteiga\r\n\r\ngemas\r\n\r\naÃ§Ãºcar\r\n\r\nfarinha de trigo\r\n\r\nmel\r\n\r\nfermento em pÃ³\r\n\r\nbicarbonato de sÃ³dio\r\n\r\nessÃªncia de baunilha', '2021-08-12', '14:13:38', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `lembrete` varchar(60) NOT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `nivel` int(1) NOT NULL,
  `dt` date DEFAULT NULL,
  `hr` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nome`, `email`, `senha`, `lembrete`, `foto`, `nivel`, `dt`, `hr`) VALUES
(1, 'mario', 'mario@email.com', 'm123', 'numeros', 'mario.jfif', 1, '2021-08-10', '15:18:41'),
(2, 'toad', 'toad@email.com', 't123', 't', 'toad.png', 5, '2021-08-10', '15:19:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Indexes for table `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD PRIMARY KEY (`id_compras`),
  ADD KEY `nome` (`nome`);

--
-- Indexes for table `tb_postagens`
--
ALTER TABLE `tb_postagens`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  MODIFY `id_carrinho` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_compras`
--
ALTER TABLE `tb_compras`
  MODIFY `id_compras` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_postagens`
--
ALTER TABLE `tb_postagens`
  MODIFY `id_post` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
