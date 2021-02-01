-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2021 às 23:31
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jornal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(15) CHARACTER SET armscii8 DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cpf`, `senha`) VALUES
(22, 'Joana Eliane Jesus', 'jjoanaelianejesus@inovasom.com', '979.111.882-54', 'asdf45'),
(25, 'Anderson Erick Cavalcanti', 'andersonerick@gmail.com', '288.686.759-43', 'asdG6U8TF'),
(28, 'Marlene Lúcia Juliana Moraes', 'marlenelucia98@gmail.com', '538.790.892-13', '6J2x4w0xwC'),
(30, 'Benjamin Luís Raimundo Campos', 'bbenjaminluis@gmail.com', '404.476.351-82', 'aQuRIHsGmD'),
(32, 'Pedro José Almada', 'pedrojose95@gmail.com', '665-892-288-84', 'bSFBHCSY4H'),
(33, 'Iago Tomás Henry Dias', 'iagotomashenrydias@gmail.com', '293-490-351-62', 'asdf2004'),
(34, 'Cláudia Heloise Peixoto', 'claudiaheloisepeixoto@gmail.com', '987-390-267-87', 'KRL7mJA3uu'),
(35, 'Anthony Eduardo Benedito Brito', 'aanthonyeduardo67@gmail.com', '776-646-889-14', 'ElywROYJHU');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
