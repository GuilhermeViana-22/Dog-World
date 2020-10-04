-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2020 às 04:30
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
  `raça` varchar(300) DEFAULT NULL,
  `rga` varchar(100) NOT NULL,
  `tipo` char(100) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `obsercacao` varchar(1000) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `cod_servico` int(11) NOT NULL,
  `cod_funcionario` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_animal` int(11) NOT NULL,
  `dt_agendamento` date NOT NULL,
  `valor` float NOT NULL,
  `tipo_atendimento` varchar(300) NOT NULL,
  `horario` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(0, 'Marcelo', 'Gomes', '48519511832', '2020-10-21', 'M', '1195456687', 'fulanodetal@gmail.com', '05568000', 'Rua Antônio Francisco Soares', '', '1100320', 'SP', 'S'),
(2, 'maria eduarda ', 'Souza', '78995412322', '1995-05-02', 'F', '1122222222', 'maria_j@gmail.com', '78963254', 'rua marilia', '45 ap 5', '3550308', 'SP', 'S'),
(5, 'Leonardo matheus ', 'nunes', '18965412322', '1995-05-02', 'M', '1122222222', 'thuesleo_j@gmail.com', '78963254', 'rua marilia', '45 ap 5', '3550308', 'SP', 's'),
(6, 'mariza evelin ', 'santos', '38965412422', '1995-05-02', 'M', '1122222222', 'marizinha_gata@gmail.com', '78963254', 'rua igarape', '74', '3550308', 'SP', 's'),
(7, 'lucas  ', 'araujo silva', '58967412322', '1995-05-02', 'F', '1122222222', 'lucas_zlle@hotmail.com', '78963254', 'rua alagoas', '45 ap 5', '3550308', 'SP', 'M');

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
  `cod_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Elton Kelvin ferreira justino da silva', '123456789', '123456', 'M', '1122222222', '2018-12-16', 'elton13cdz@gmail.com', '08485310', 'maria peluda', '12 ap5', 'sao paulo', 'sp', 'Gerente', 5.5, '08:00 ate as 17:00', '2020-05-12', 's', '1111'),
(2, 'Karolina santana', '789456123', '125463', 'F', '4455666633', '2000-05-09', 'karolina@dogworld.com', '8888666', 'rua dos bobos', '0 hha', 'sao paulo', 'sp', 'Gerente', 5.5, '10:00 as 18:00', '2020-05-12', 's', '123456'),
(5, 'thiago nashiro ', '456321478', '852364', 'M', '4477889966', '2019-05-19', 'thiago@dogworld.com', '63258974', 'r santana', '41', 'sao paulo', 'sp', 'atendente', 1200, '9:00 as 17:00', '2020-10-04', 's', '123456'),
(6, 'Guilherme Viana', '987654321', '8523', 'M', '55663896', '2019-06-09', 'guilherme@dogworld.com', '789654123', 'sao joa', '96', 'sao paulo', 'sp', 'Financeiro', 2, '10:00 as 18:00', '2020-05-11', 's', '123456'),
(7, 'Mariana belvederesi', '5689632145', '8753692', 'F', '1122222222', '2019-11-26', 'mariana@dogworld.com', '4561237898', 'av maria antonia', '234', 'sao paulo', 'sp', 'Finaceiro', 2, '10:00 as 18:00', '2020-02-11', 's', '123456'),
(8, 'antonio', '3569287412', '65893214', 'M', '4455663322', '2019-04-23', 'antonio@dogworld.com', '74185245', 'rua das petalas', '58 cs2', 'sao paulo', 'sp', 'Estoquista', 1000, '8:00 as 18:00', '2020-09-24', 's', '123456');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `cod_venda` int(11) NOT NULL,
  `valor_total` float NOT NULL,
  `cod_funcionario` int(20) NOT NULL,
  `cod_produto` int(20) NOT NULL,
  `cod_cliente` int(20) DEFAULT NULL,
  `data_venda` date NOT NULL DEFAULT current_timestamp(),
  `horario` time NOT NULL DEFAULT current_timestamp(),
  `cod_servico` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`),
  ADD KEY `FK_id_cliente` (`id_cliente`);

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`cod_servico`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`cod_fornecedor`),
  ADD UNIQUE KEY `cod_produto` (`cod_produto`);

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
  ADD UNIQUE KEY `cod_fornecedor_produto` (`cod_fornecedor`) USING BTREE;

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`cod_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `cod_fornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `Cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `cod_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_produto_fornecedor` FOREIGN KEY (`cod_produto`) REFERENCES `fornecedor` (`cod_produto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
