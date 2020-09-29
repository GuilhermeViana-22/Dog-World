-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2020 às 19:36
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

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
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idagendamento` int(11) NOT NULL,
  `dt_agendamento` date NOT NULL,
  `horario_agendamento` time NOT NULL,
  `nome_animal` varchar(100) DEFAULT NULL,
  `observacao` varchar(300) DEFAULT NULL,
  `animal_idanimal` int(11) NOT NULL,
  `funcionario_idfuncionario` int(11) NOT NULL,
  `servico_idservico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `idanimal` int(11) NOT NULL,
  `nome_animal` varchar(100) NOT NULL,
  `rga_animal` varchar(45) DEFAULT NULL,
  `sexo_animal` tinyint(4) NOT NULL,
  `raca_animal` varchar(45) NOT NULL,
  `tipo_animal` varchar(45) NOT NULL,
  `ativo` tinyint(4) DEFAULT 1,
  `observacao` varchar(300) DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome_cliente` varchar(300) NOT NULL,
  `cpf_cliente` varchar(45) NOT NULL,
  `sexo_cliente` varchar(45) DEFAULT NULL,
  `telefone_cliente` varchar(20) NOT NULL,
  `email_cliente` varchar(100) DEFAULT NULL,
  `endereco_cliente` varchar(100) DEFAULT NULL,
  `cep_cliente` varchar(45) DEFAULT NULL,
  `cidade_cliente` varchar(45) DEFAULT NULL,
  `complemento_cliente` varchar(45) DEFAULT NULL,
  `estado_cliente` varchar(45) DEFAULT NULL,
  `dt_Nascimento_cliente` date DEFAULT NULL,
  `ativo` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome_cliente`, `cpf_cliente`, `sexo_cliente`, `telefone_cliente`, `email_cliente`, `endereco_cliente`, `cep_cliente`, `cidade_cliente`, `complemento_cliente`, `estado_cliente`, `dt_Nascimento_cliente`, `ativo`) VALUES
(1, 'Adolfo', '111.111.111-89', 'M', '11111-1111', 'adolto007@gmai.com', 'Casa da vovo', '123456-7', NULL, NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idfornecedor` int(11) NOT NULL,
  `nome_fornecedor` varchar(300) NOT NULL,
  `cnpj_fornecedor` varchar(45) DEFAULT NULL,
  `endereco_fornecedor` varchar(100) DEFAULT NULL,
  `telefone_fornecedor` varchar(45) NOT NULL,
  `ativo` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idfornecedor`, `nome_fornecedor`, `cnpj_fornecedor`, `endereco_fornecedor`, `telefone_fornecedor`, `ativo`) VALUES
(1, 'Golden ração', '12345678000112', 'r.Dos Bocós', '1140028922', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome_funcionario` varchar(300) NOT NULL,
  `sexo_funcionario` char(1) NOT NULL,
  `ativo` char(1) DEFAULT '1',
  `dt_nascimento_funcionario` date NOT NULL,
  `dt_admissao` date NOT NULL,
  `email_funcionario` varchar(100) NOT NULL,
  `cargo_funcionario` varchar(100) NOT NULL,
  `telefone_funcionario` varchar(45) NOT NULL,
  `cpf_funcionario` varchar(15) NOT NULL,
  `rg_funcionario` varchar(15) NOT NULL,
  `salario_funcionario` float(7,2) NOT NULL,
  `endereco_funcionario` varchar(100) NOT NULL,
  `cep_funcionario` varchar(45) NOT NULL,
  `numero_funcionario` varchar(10) NOT NULL,
  `cidade_funcionario` varchar(45) NOT NULL,
  `estado_funcionario` varchar(45) NOT NULL,
  `senha_funcionario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome_funcionario`, `sexo_funcionario`, `ativo`, `dt_nascimento_funcionario`, `dt_admissao`, `email_funcionario`, `cargo_funcionario`, `telefone_funcionario`, `cpf_funcionario`, `rg_funcionario`, `salario_funcionario`, `endereco_funcionario`, `cep_funcionario`, `numero_funcionario`, `cidade_funcionario`, `estado_funcionario`, `senha_funcionario`) VALUES
(1, 'Thiago Massaharu Nashiro', 'M', '1', '1999-08-21', '2020-09-23', 'thiago@dogworld.com', 'Gerente', '1140028922', '123', '123', 1000.00, 'R. avenida zero', '11111-111', '40028922', 'Ana Julia', 'SP', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `codigo_produto` varchar(45) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `lote_produto` varchar(45) DEFAULT NULL,
  `qtda_produto` int(11) DEFAULT NULL,
  `dt_produto` date DEFAULT NULL,
  `categoria_produto` varchar(100) DEFAULT NULL,
  `valor_produto` float(7,2) NOT NULL,
  `fornecedor_idfornecedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idservico` int(11) NOT NULL,
  `nome_servico` varchar(45) NOT NULL,
  `tipo_animal` varchar(45) NOT NULL,
  `tempo_gasto` time NOT NULL,
  `valor_servico` float(7,2) NOT NULL,
  `ativo` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL,
  `dt_venda` date NOT NULL,
  `hr_venda` time NOT NULL,
  `qtda_item` int(11) NOT NULL,
  `valor_total` float(7,2) NOT NULL,
  `valor_unitario` float(7,2) NOT NULL,
  `forma_pagamento` varchar(45) NOT NULL,
  `nome_cliente` varchar(300) DEFAULT NULL,
  `cpf_cliente` varchar(45) DEFAULT NULL,
  `produto_idproduto` int(11) NOT NULL,
  `produto_fornecedor_idfornecedor` int(11) NOT NULL,
  `funcionario_idfuncionario` int(11) NOT NULL,
  `agendamento_idagendamento` int(11) NOT NULL,
  `agendamento_animal_idanimal` int(11) NOT NULL,
  `agendamento_funcionario_idfuncionario` int(11) NOT NULL,
  `agendamento_servico_idservico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idagendamento`,`animal_idanimal`,`funcionario_idfuncionario`,`servico_idservico`),
  ADD KEY `fk_agendamento_animal1_idx` (`animal_idanimal`),
  ADD KEY `fk_agendamento_funcionario1_idx` (`funcionario_idfuncionario`),
  ADD KEY `fk_agendamento_servico1_idx` (`servico_idservico`);

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`idanimal`),
  ADD UNIQUE KEY `idanimal_UNIQUE` (`idanimal`),
  ADD KEY `fk_animal_cliente_idx` (`cliente_idcliente`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idfornecedor`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`,`fornecedor_idfornecedor`),
  ADD KEY `fk_produto_fornecedor1_idx` (`fornecedor_idfornecedor`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idservico`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idvenda`,`produto_idproduto`,`produto_fornecedor_idfornecedor`,`funcionario_idfuncionario`,`agendamento_idagendamento`,`agendamento_animal_idanimal`,`agendamento_funcionario_idfuncionario`,`agendamento_servico_idservico`),
  ADD KEY `fk_venda_produto1_idx` (`produto_idproduto`,`produto_fornecedor_idfornecedor`),
  ADD KEY `fk_venda_funcionario1_idx` (`funcionario_idfuncionario`),
  ADD KEY `fk_venda_agendamento1_idx` (`agendamento_idagendamento`,`agendamento_animal_idanimal`,`agendamento_funcionario_idfuncionario`,`agendamento_servico_idservico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idagendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `idanimal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idfornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `idservico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_animal1` FOREIGN KEY (`animal_idanimal`) REFERENCES `animal` (`idanimal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_funcionario1` FOREIGN KEY (`funcionario_idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_servico1` FOREIGN KEY (`servico_idservico`) REFERENCES `servico` (`idservico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `fk_animal_cliente` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_fornecedor1` FOREIGN KEY (`fornecedor_idfornecedor`) REFERENCES `fornecedor` (`idfornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_agendamento1` FOREIGN KEY (`agendamento_idagendamento`,`agendamento_animal_idanimal`,`agendamento_funcionario_idfuncionario`,`agendamento_servico_idservico`) REFERENCES `agendamento` (`idagendamento`, `animal_idanimal`, `funcionario_idfuncionario`, `servico_idservico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venda_funcionario1` FOREIGN KEY (`funcionario_idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venda_produto1` FOREIGN KEY (`produto_idproduto`,`produto_fornecedor_idfornecedor`) REFERENCES `produto` (`idproduto`, `fornecedor_idfornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
