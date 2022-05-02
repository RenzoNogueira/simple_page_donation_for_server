-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Maio-2022 às 22:55
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `donate_world_bros_server`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `donates`
--

CREATE TABLE `donates` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nickname` varchar(60) DEFAULT NULL,
  `message` varchar(999) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `donates`
--

INSERT INTO `donates` (`id`, `name`, `email`, `nickname`, `message`, `amount`, `date`) VALUES
(13, 'renzo_nogueira', 'mainrenzossn@gmail.com', 'Renzo Nogueira', 'mensagem', 40, '2022-05-02 10:39:49'),
(14, 'renzo_nogueira', 'mainrenzossn@gmail.com', 'LuxAndrew', 'aaaaaaaaaa', 40, '2022-05-02 11:00:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `savings_goal`
--

CREATE TABLE `savings_goal` (
  `id` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `expired_date` date NOT NULL,
  `target_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `savings_goal`
--

INSERT INTO `savings_goal` (`id`, `date_created`, `expired_date`, `target_value`) VALUES
(5, '2022-05-02', '2022-08-19', 130);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `savings_goal`
--
ALTER TABLE `savings_goal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `donates`
--
ALTER TABLE `donates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `savings_goal`
--
ALTER TABLE `savings_goal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
