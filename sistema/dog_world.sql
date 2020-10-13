-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Out-2020 às 02:41
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
(2, 'max', 'pitblull', '233655', '12', 'Cachorro', 'M', '', 'S', 1),
(3, 'ma', 'rato', '556325', '45', 'Roedor', 'F', 'ola', 'S', 1),
(4, 'ma', 'rato', '556325', '45', 'Roedor', 'F', 'nao é para matar', 'S', 1),
(6, 'cherry', 'persa', '123456789', '10', 'Gato', 'M', '', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `cod_servico` int(11) NOT NULL,
  `cod_funcionario` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `dt_agendamento` date NOT NULL,
  `valor` float NOT NULL,
  `tipo_atendimento` varchar(300) NOT NULL,
  `horario` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(300) DEFAULT NULL,
  `nome` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`cod_servico`, `cod_funcionario`, `cod_cliente`, `id_animal`, `dt_agendamento`, `valor`, `tipo_atendimento`, `horario`, `status`, `nome`) VALUES
(1, 8, 1, 6, '2020-10-02', 50.5, 'banho e tosa', '07:17:56', 'Agendado', ''),
(6, 2, 1, 6, '0000-00-00', 50.5, 'Banho', '13:30:00', '', 'cherry'),
(27, 5, 1, 6, '0000-00-00', 150, 'Banho', '12:00:00', '', ' cherry');

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
(1, 'ma', 'kdk', '77777', '1998-05-01', 'M', '666666666', 'elelfj@j.com', '08485310', 'Rua Igarapé Água Azul', '6', 'São Paulo', 'SP', 'S'),
(2, 'el', 'kdk', '523644', '1998-05-01', 'M', '666666666', 'elelfj@j.com', '08485310', 'Rua Igarapé Água Azul', '6', 'São Paulo', 'SP', 'S'),
(3, 'la', 'kdk', '666', '1998-05-01', 'M', '666666666', 'elelfj@j.com', '08485310', 'Rua Igarapé Água Azul', '6', 'São Paulo', 'SP', 'S'),
(4, 'elton', 'kelvin', '123456789', '1998-05-01', 'M', '(11) 98074 9797', 'elton13cdz@gmail.com', '08485310', 'Rua Igarapé Água Azul', '45', 'São Paulo', 'SP', 'S');

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
(5, '  22.222.222.0001-22', ' cobasi brasil', '  av da lua', '  222222', '  2', '  santo amaro', '  sp', '  2222-222', ''),
(6, ' 33.333.333-0001-33', '  Whiskas ', ' av.da maria', ' 333333', ' 3', ' Tiradentes', ' SP', ' 115563258', ''),
(7, ' 44.444.444-0001-44', ' Gold Cat Litter', ' av dos sonhos', ' 333333', ' 33', ' Rita', ' SP', ' 11111111', ''),
(8, '55.555.555-0001-55', 'Like Cat, Organnact', 'av toranja', '55555', '5', 'santa lusia', 'sp', '5555-5555', ''),
(9, '66.666.666-0001-66', 'Hello Kitty Clássica, PetFive\r\n', 'av. das katia', '66666', '6', 'Lotadaria', 'SP', '66666', ''),
(11, '123.145.126-0001.45', ' petz', 'R Igarapé A Azul', '08485-310', ' 4', 'São Paulo', 'SP', ' 111111111', '');

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
(1, 'Elton Kelvin ferreira justino da silva', '123456789', '123456', 'M', '1122222222', '2018-12-16', 'elton@dogworld.com', '08485310', 'maria peluda', '12 ap5', 'sao paulo', 'sp', 'Gerente', 5.5, '08:00 ate as 17:00', '2020-05-12', 's', '123456'),
(2, 'Karolina santana', '789456123', '125463', 'F', '4455666633', '2000-05-09', 'karolina@dogworld.com', '8888666', 'rua dos bobos', '0 hha', 'sao paulo', 'sp', 'Gerente', 5.5, '10:00 as 18:00', '2020-05-12', 's', '123456'),
(5, 'thiago nashiro ', '456321478', '852364', 'M', '4477889966', '2019-05-19', 'thiago@dogworld.com', '63258974', 'r santana', '41', 'sao paulo', 'sp', 'atendente', 1200, '9:00 as 17:00', '2020-10-04', 's', '123456'),
(6, 'Guilherme Viana', '987654321', '8523', 'M', '55663896', '2019-06-09', 'guilherme@dogworld.com', '789654123', 'sao joa', '96', 'sao paulo', 'sp', 'Financeiro', 2, '10:00 as 18:00', '2020-05-11', 's', '123456'),
(7, 'Mariana belvederesi', '5689632145', '8753692', 'F', '1122222222', '2019-11-26', 'mariana@dogworld.com', '4561237898', 'av maria antonia', '234', 'sao paulo', 'sp', 'Finaceiro', 2, '10:00 as 18:00', '2020-02-11', 's', '123456'),
(8, 'antonio', '3569287412', '65893214', 'M', '4455663322', '2019-04-23', 'antonio@dogworld.com', '74185245', 'rua das petalas', '58 cs2', 'sao paulo', 'sp', 'Estoquista', 1000, '8:00 as 18:00', '2020-09-24', 's', '123456'),
(9, 'sandra regina ferreira justino da silva zenaide ramos ferreira', '45766442890', '45632589', 'F', '6666666666666', '1995-08-29', 'maria@gmail.com', '08485-310', 'R Igarapé A Azul', '5', 'São Paulo', 'SP', 'Financeiro', 6, '6 por dia ', '2020-10-06', 'S', '123456'),
(10, 'jose', '45612378945', '789632541', 'M', '1122589632', '1990-08-25', 'antonio_maria@gmail.com', '08485310', 'Rua Igarapé Água Azul', '5 ap 8', 'São Paulo', 'S', 'Estoquista', 2.5, '2.500', '0000-00-00', 'S', '123456');

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
(14, 'areia pipicat', 2, 2, 2, 5, 's'),
(15, 'pipi', 3, 3, 30.5, 5, 'S'),
(16, 'terrinha', 5, 5, 5, 7, 's'),
(17, 'terrinh aromatica', 5, 4, 25, 7, 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_venda`
--

CREATE TABLE `produtos_venda` (
  `cod_prod_venda` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `cod_venda` int(11) NOT NULL,
  `cod_prod_quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_venda`
--

INSERT INTO `produtos_venda` (`cod_prod_venda`, `cod_produto`, `cod_venda`, `cod_prod_quantidade`) VALUES
(4, 17, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `cod_venda` int(11) NOT NULL,
  `valor_total` float DEFAULT NULL,
  `cod_funcionario` int(20) NOT NULL,
  `cod_cliente` int(20) DEFAULT NULL,
  `cpf_cliente` varchar(17) DEFAULT NULL,
  `data_venda` date NOT NULL DEFAULT current_timestamp(),
  `horario` time NOT NULL DEFAULT current_timestamp(),
  `cod_servico` int(20) DEFAULT NULL,
  `status_venda` int(11) NOT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`cod_venda`, `valor_total`, `cod_funcionario`, `cod_cliente`, `cpf_cliente`, `data_venda`, `horario`, `cod_servico`, `status_venda`, `nome_cliente`) VALUES
(1, 30.3, 8, 4, '', '2020-10-08', '08:14:45', 1, 0, ''),
(2, 50.5, 1, 1, '', '2020-10-06', '09:07:17', 1, 0, ''),
(4, NULL, 1, NULL, '', '2020-10-12', '16:09:49', NULL, 2, '');

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
  ADD KEY `FK_animal` (`id_animal`),
  ADD KEY `FK_funcionario` (`cod_funcionario`);

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
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `cod_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `Cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `produtos_venda`
--
ALTER TABLE `produtos_venda`
  MODIFY `cod_prod_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `cod_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
