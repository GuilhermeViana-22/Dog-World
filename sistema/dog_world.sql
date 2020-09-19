-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2020 às 00:45
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dog_world`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `COD_ANIMAL` int(11) NOT NULL,
  `NOME_PET` varchar(300) NOT NULL,
  `SEXO` tinyint(1) DEFAULT NULL,
  `OBSEVACAO` varchar(300) DEFAULT NULL,
  `RGA` varchar(40) DEFAULT NULL,
  `RACA` varchar(15) DEFAULT NULL,
  `TIPO` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL,
  `nome_CLIENTE` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `COMPLEMENTO` varchar(10) NOT NULL,
  `CEP` varchar(15) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nome_CLIENTE`, `email`, `cpf`, `telefone`, `endereco`, `COMPLEMENTO`, `CEP`, `dt_nascimento`, `ativo`) VALUES
(1, 'cobasi', 'cobasi@cobasi.com.br', '34235435352', '3242432432', 'Rua zero a esquerda, 69', '', '3425423', '2020-09-01', 1),
(2, 'petdog', 'petdog@email.com', '3432565', '4222222', 'rua um a esquerda, 69', '', '3243242', '2020-09-02', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(300) NOT NULL,
  `rg_funcionario` varchar(30) NOT NULL,
  `cpf_funcionario` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `email_funcionario` varchar(300) NOT NULL,
  `endereco_funcionario` varchar(300) NOT NULL,
  `dtNascimento_funcionario` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `horario` time NOT NULL,
  `dt_admisao` date NOT NULL,
  `salario` int(11) NOT NULL,
  `cargo` varchar(300) NOT NULL,
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_funcionario`, `nome_funcionario`, `rg_funcionario`, `cpf_funcionario`, `telefone`, `email_funcionario`, `endereco_funcionario`, `dtNascimento_funcionario`, `sexo`, `horario`, `dt_admisao`, `salario`, `cargo`, `senha`) VALUES
(1, 'Guilherme', '43523454235', '123456', '11123456789', 'gguicido.viana@gmail.com', 'Rua zero a esquerda, 69', '2020-06-02', 'M', '11:20:00', '2020-09-25', 1200, 'Funcionário', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`COD_ANIMAL`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cliente`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod_funcionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `COD_ANIMAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
