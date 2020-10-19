-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2020 às 20:37
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
  `id_animal` int(11) NOT NULL,
  `nome` varchar(300) DEFAULT NULL,
  `raca` varchar(300) DEFAULT NULL,
  `rga` varchar(100) NOT NULL,
  `idade` varchar(30) NOT NULL,
  `tipo` char(100) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `observacao` varchar(1000) NOT NULL,
  `ativo` char(1) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id_animal`, `nome`, `raca`, `rga`, `idade`, `tipo`, `sexo`, `observacao`, `ativo`, `id_cliente`) VALUES
(1, 'leon', 'viralata', '12345', '2', 'Gato', 'M', '', 'S', 1),
(2, 'nega', 'viralata', '234', '9', 'Gato', 'F', '', 'S', 2),
(3, 'mia', 'viralata', '4532', '4', 'Gato', 'F', '', 'S', 2),
(4, 'mirna', 'viralata', '1532', '9', 'Gato', 'F', '', 'S', 3),
(5, 'chico', 'Piriquito da pena azul', '0123', '4', 'Passáro', 'M', '', 'S', 1),
(6, 'Emilia', 'Periquito da pena verda', '0153', '5', 'Passáro', 'F', '', 'S', 1),
(7, 'Katty', 'Poodle', '10493', '6', 'Cachorro', 'F', '', 'S', 1),
(8, 'Cherry', 'viralata', '14783', '10', 'Gato', 'M', '', 'S', 4),
(9, 'Max', 'Golden Retriever', '10432', '12', 'Cachorro', 'M', '', '', 5),
(10, 'Belinha', 'Golden Retriever', '18430', '7', 'Cachorro', 'F', '', 'S', 5),
(11, 'Max', 'viralata', '17439', '9', 'Cachorro', 'M', '', 'S', 6),
(12, 'Bela', 'Buldogue', '185430', '3', 'Cachorro', 'F', '', 'S', 7),
(13, 'Daniel', 'viralata', '18430', '11', 'Gato', 'M', '', 'S', 8),
(14, 'Dollynho', 'Sabor do Brasil', '01020304', '5 anos', 'Coelho', 'M', 'Todo mundo quer', 'S', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `cod_servico` int(11) NOT NULL,
  `cod_funcionario` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `dt_agendamento` date NOT NULL,
  `valor` float NOT NULL,
  `tipo_atendimento` varchar(300) NOT NULL,
  `horario` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`cod_servico`, `cod_funcionario`, `cod_cliente`, `id_animal`, `nome`, `dt_agendamento`, `valor`, `tipo_atendimento`, `horario`, `status`) VALUES
(1, 1, 1, 6, ' max', '2020-10-29', 50, 'Banho', '12:00:00', ''),
(2, 1, 1, 5, ' max', '0000-00-00', 50, 'Banho', '12:00:00', ''),
(3, 1, 1, 6, ' max', '0000-00-00', 0, 'Banho', '12:00:00', ''),
(4, 1, 1, 6, ' max', '2020-10-31', 50, 'Banho', '12:00:00', ''),
(5, 1, 1, 6, ' dfd', '2020-10-06', 50, 'Banho e Tosa', '13:30:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(300) DEFAULT NULL,
  `sobrenome` varchar(300) DEFAULT NULL,
  `cpf` varchar(17) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(1500) DEFAULT NULL,
  `cep` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `num_comp` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ativo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `sobrenome`, `cpf`, `dt_nascimento`, `sexo`, `telefone`, `email`, `cep`, `logradouro`, `num_comp`, `cidade`, `estado`, `ativo`) VALUES
(1, 'Maria', 'luiza', '1234456789', '1983-08-21', 'F', '11-1111-1111', 'maria_luiza@gmail.com', '69310-035', 'Rua La Paz', '110', 'Boa Vista', 'RR', 'S'),
(2, 'Thiago', 'Nashiro', '123450', '1999-08-21', 'M', '117732740', 'thiago@gmail.com', '12245-488', 'Praça Capitão Paulo José Menezes', '', 'São José dos Campos', 'SP', 'S'),
(3, 'lais', 'nashiro', '35743', '1897-09-14', 'F', '1198434503', 'lais@gmail.com', '08391-160', 'Rua Catesetun', '415', 'São Paulo', 'SP', 'S'),
(4, 'Elton', 'Kelvin', '48310', '1998-04-14', 'M', '1184930483', 'elton@gmail', '13402-229', 'Rua Guerino Poletto', '240 F', 'Piracicaba', 'SP', 'N'),
(5, 'Yan', 'de souza', '48319', '1999-03-21', 'M', '119483943', 'yan@gmail.com', '03574-020', 'Rua Cedrorana', '23', 'São Paulo', 'SP', 'S'),
(6, 'Fernanda', 'cinchin', '74839', '1997-03-13', 'F', '11 948391243', 'fernanda@gmail.com', '19057-410', 'Rua Victório Andreasi Neto', '21', 'Presidente Prudente', 'SP', 'N'),
(7, 'Vitor', 'Augusto', '38023', '1986-07-18', 'M', '11 984348754', 'vitor@gmail.com', '14815-970', 'Avenida São João 849', '450 A', 'Ibaté', 'SP', 'S'),
(8, 'Kamily', 'Cristina', '1849230', '2000-10-12', 'F', '11 9673504729', 'Kamily@gmail.com', '13088-536', 'Rua Gregório Cristino de Paula', '432', 'Campinas', 'SP', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `cod_fornecedor` int(11) NOT NULL,
  `cnpj` varchar(300) DEFAULT NULL,
  `fornecedor` varchar(300) DEFAULT NULL,
  `logradouro` varchar(300) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `num_comp` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `ativo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`cod_fornecedor`, `cnpj`, `fornecedor`, `logradouro`, `cep`, `num_comp`, `cidade`, `estado`, `telefone`, `ativo`) VALUES
(1, '  11.111.111.0001-01', '   Golden', '  Rua Barbosa Lessa', '  94150-180', '  43', '  Gravataí', '  RS', '   00000-000', ''),
(2, '22.222.222.0001-22', ' Premier', 'Rua São José', ' 57040-510', ' ', 'Maceió', 'AL', ' 22222-2222', ''),
(3, ' 33.333.333.0001-33', ' whiskas', 'Avenida Minas Gerais', '88340-143 ', ' ', 'Camboriú', 'SC', ' 33333-3333', ''),
(4, ' 44.444.444.0001-4', 'Nutrópica ', 'Rua Nova Trento', ' 44032-394', ' ', 'Feira de Santana', 'BA', ' 44-4444-4444', ''),
(5, ' 12487367000136', '  Dolly comércio de gostosuras LTDA', ' Praça da Sé', ' 01001000', '  5', ' São Paulo', ' SP', ' 1130004000', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `Cod_funcionario` int(11) NOT NULL,
  `nome` varchar(300) DEFAULT NULL,
  `cpf` varchar(17) DEFAULT NULL,
  `rg` varchar(15) NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `dt_nascimento` date NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `Cep` varchar(100) DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `num_comp` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `salario` float DEFAULT NULL,
  `horas` varchar(100) NOT NULL,
  `dt_admicao` date DEFAULT NULL,
  `ativo` char(1) NOT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`Cod_funcionario`, `nome`, `cpf`, `rg`, `sexo`, `telefone`, `dt_nascimento`, `email`, `Cep`, `logradouro`, `num_comp`, `cidade`, `estado`, `cargo`, `salario`, `horas`, `dt_admicao`, `ativo`, `senha`) VALUES
(1, 'Elton Kelvin ferreira justino da silva', '123456789', '123456', 'M', '1122222222', '2018-12-16', 'elton@dogworld.com', '08485310', 'maria peluda', '12 ap5', 'sao paulo', 'sp', 'Gerente', 5.5, '08:00 ate as 17:00', '2020-05-12', 'S', '123456789'),
(2, 'Karolina santana', '789456123', '125463', 'F', '4455666633', '2000-05-09', 'karolina@dogworld.com', '8888666', 'rua dos bobos', '0 hha', 'sao paulo', 'sp', 'Gerente', 5.5, '10:00 as 18:00', '2020-05-12', 'S', '123456'),
(5, 'thiago nashiro ', '456321478', '852364', 'M', '4477889966', '2019-05-19', 'thiago@dogworld.com', '63258974', 'r santana', '41', 'sao paulo', 'sp', 'Gerente', 1200, '9:00 as 17:00', '2020-10-04', 'S', '123456'),
(6, 'Guilherme Viana', '987654321', '8523', 'M', '55663896', '2019-06-09', 'guilherme@dogworld.com', '789654123', 'sao joa', '96', 'sao paulo', 'sp', 'Gerente', 2, '10:00 as 18:00', '2020-05-11', 'S', '123456'),
(7, 'Mariana belvederesi', '5689632145', '8753692', 'F', '1122222222', '2019-11-26', 'mariana@dogworld.com', '4561237898', 'av maria antonia', '234', 'sao paulo', 'sp', 'Finaceiro', 2, '10:00 as 18:00', '2020-02-11', 's', '123456'),
(8, 'antonio', '3569287412', '65893214', 'M', '4455663322', '2019-04-23', 'antonio@dogworld.com', '74185245', 'rua das petalas', '58 cs2', 'sao paulo', 'sp', 'Estoquista', 1000, '8:00 as 18:00', '2020-09-24', 's', '123456'),
(10, 'jose', '45612378945', '789632541', 'M', '1122589632', '1990-08-25', 'antonio_maria@gmail.com', '08485310', 'Rua Igarapé Água Azul', '5 ap 8', 'São Paulo', 'S', 'Estoquista', 2.5, '2.500', '0000-00-00', 'S', '123456'),
(11, 'Marcus kaique dos santos ', ' 4563258741', '78965412', 'M', '1122556633', '1999-03-12', 'marcus@dogworld.com', '08485310', 'Rua Igarapé Água Azul', '', 'São Paulo', 'SP', 'estoquista', 6600, 'das 8:00 as 18:00', '2020-10-13', 'S', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_produto` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `quantidade` int(50) DEFAULT NULL,
  `cod_lote` int(100) DEFAULT NULL,
  `valor_unitario` float DEFAULT NULL,
  `cod_fornecedor` int(100) NOT NULL,
  `ativo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_produto`, `titulo`, `quantidade`, `cod_lote`, `valor_unitario`, `cod_fornecedor`, `ativo`) VALUES
(1, 'golden gatos castrados sabor frango', 7, 1, 30.4, 1, 'S'),
(3, 'Premier urinary 30kg', 10, 12, 90, 2, 'S'),
(4, 'Ração Premier Gatos Adultos Castrado Ambientes Internos 7,5kg ', 10, 3, 149, 2, 'S'),
(5, 'Golden cachorros castrados sabor frango 30kg', 15, 2, 30, 1, 'N'),
(7, 'Golden cachorros castrados sabor carne 30kg', 10, 21, 30, 1, 'S'),
(8, 'Ração Nutrópica para Periquito', 15, 11, 4.5, 4, 'S'),
(9, 'Golden Para Filhotes', 1, 1234, 12, 1, 'N'),
(10, 'Golden Para Gatos', 12, 12345, 18.7, 2, 'S'),
(14, 'bolinha de borracha', 5, 15, 5, 5, 'S'),
(15, 'bolinha de borracha', 5, 15, 5, 1, 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_venda`
--

CREATE TABLE `produtos_venda` (
  `cod_prod_venda` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `cod_venda` int(11) NOT NULL,
  `cod_prod_quantidade` int(11) NOT NULL,
  `v_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_venda`
--

INSERT INTO `produtos_venda` (`cod_prod_venda`, `cod_produto`, `cod_venda`, `cod_prod_quantidade`, `v_total`) VALUES
(25, 1, 24, 14, 70),
(29, 15, 28, 14, 28),
(32, 16, 31, 14, 70),
(33, 15, 32, 14, 70),
(36, 15, 35, 14, 70),
(37, 15, 36, 14, 70),
(38, 15, 37, 14, 70),
(39, 15, 39, 14, 91),
(40, 15, 40, 14, 91),
(41, 15, 41, 14, 70),
(42, 15, 42, 14, 70),
(43, 15, 42, 14, 212.8),
(44, 15, 42, 14, 212.8),
(45, 15, 43, 14, 70);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `cod_venda` int(11) NOT NULL,
  `cod_funcionario` int(20) NOT NULL,
  `cod_cliente` int(20) DEFAULT NULL,
  `cod_servico` int(20) DEFAULT NULL,
  `cpf_cliente` varchar(17) DEFAULT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `valor_total` float DEFAULT 0,
  `forma_pagamento` varchar(100) DEFAULT NULL,
  `data_venda` date NOT NULL DEFAULT current_timestamp(),
  `horario` time NOT NULL DEFAULT current_timestamp(),
  `status_venda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`);

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`cod_servico`),
  ADD KEY `FK_funcionario` (`cod_funcionario`),
  ADD KEY `FK_animal` (`id_animal`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`cod_fornecedor`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`Cod_funcionario`),
  ADD UNIQUE KEY `cpf_funcionario` (`cpf`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_produto`),
  ADD KEY `FK_produto_fornecedor` (`cod_fornecedor`);

--
-- Índices para tabela `produtos_venda`
--
ALTER TABLE `produtos_venda`
  ADD PRIMARY KEY (`cod_prod_venda`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`cod_venda`),
  ADD KEY `FK_funcionnario` (`cod_funcionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `cod_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `Cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos_venda`
--
ALTER TABLE `produtos_venda`
  MODIFY `cod_prod_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `cod_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `FK_animal` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `FK_funcionario` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionario` (`Cod_funcionario`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_produto_fornecedor` FOREIGN KEY (`cod_fornecedor`) REFERENCES `fornecedor` (`cod_fornecedor`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `FK_funcionnario` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionario` (`Cod_funcionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
