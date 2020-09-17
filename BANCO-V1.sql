-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: 3.90.13.165:3306
-- Tempo de geração: 17/09/2020 às 21:20
-- Versão do servidor: 5.7.31-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.33-0ubuntu0.16.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meubanco_tmp_db_160037553822044`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `advertencias`
--

CREATE TABLE `advertencias` (
  `id` int(11) NOT NULL,
  `motivo` varchar(245) DEFAULT NULL,
  `descricao` text,
  `tecnico_responsvel` int(11) DEFAULT NULL,
  `funcionario` int(11) DEFAULT NULL,
  `data` varchar(245) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `epis`
--

CREATE TABLE `epis` (
  `id` int(11) NOT NULL,
  `equipamento` varchar(245) DEFAULT NULL,
  `tipo_de_epi` int(11) DEFAULT NULL,
  `data_de_compra` varchar(245) DEFAULT NULL,
  `data_de_validade` varchar(245) DEFAULT NULL,
  `status` varchar(245) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(245) DEFAULT NULL,
  `cpf` varchar(245) DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `telefone` varchar(245) DEFAULT NULL,
  `setor` int(11) DEFAULT NULL,
  `funcao` int(11) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcoes`
--

CREATE TABLE `funcoes` (
  `id` int(11) NOT NULL,
  `funcao` varchar(245) DEFAULT NULL,
  `descricao` varchar(245) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `palestrante`
--

CREATE TABLE `palestrante` (
  `id` int(11) NOT NULL,
  `nome` varchar(245) DEFAULT NULL,
  `telefone` varchar(245) DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `registro` varchar(245) DEFAULT NULL,
  `cpf` varchar(245) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `palestrante`
--

INSERT INTO `palestrante` (`id`, `nome`, `telefone`, `email`, `registro`, `cpf`, `r_auth`) VALUES
(1, 'REINALDO SANTOS', '(69) 99999-9999', 'teste@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `profissional_sst`
--

CREATE TABLE `profissional_sst` (
  `id` int(11) NOT NULL,
  `nome` varchar(245) DEFAULT NULL,
  `telefone` varchar(245) DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `registro` varchar(245) DEFAULT NULL,
  `cpf` varchar(245) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `profissional_sst`
--

INSERT INTO `profissional_sst` (`id`, `nome`, `telefone`, `email`, `registro`, `cpf`, `r_auth`) VALUES
(1, 'ROSEVALDO GOME DA SILVA', '(69) 99285-0678', 'gomes.tst.gestor@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `r_palestrante_habilitacoes`
--

CREATE TABLE `r_palestrante_habilitacoes` (
  `id` int(11) NOT NULL,
  `palestrante_id` int(11) NOT NULL,
  `habilitacoes` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `r_palestrante_habilitacoes`
--

INSERT INTO `r_palestrante_habilitacoes` (`id`, `palestrante_id`, `habilitacoes`) VALUES
(1, 1, 'nr 10'),
(2, 1, 'nr 30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `r_profissional_sst_habilitacoes`
--

CREATE TABLE `r_profissional_sst_habilitacoes` (
  `id` int(11) NOT NULL,
  `profissional_sst_id` int(11) NOT NULL,
  `habilitacoes` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `r_treinamentos_participantes`
--

CREATE TABLE `r_treinamentos_participantes` (
  `id` int(11) NOT NULL,
  `treinamentos_id` int(11) NOT NULL,
  `participantes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `setores`
--

CREATE TABLE `setores` (
  `id` int(11) NOT NULL,
  `setor` varchar(245) DEFAULT NULL,
  `descricao` varchar(245) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_de_epi`
--

CREATE TABLE `tipos_de_epi` (
  `id` int(11) NOT NULL,
  `tipo` varchar(245) DEFAULT NULL,
  `descricao` text,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `treinamentos`
--

CREATE TABLE `treinamentos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(245) DEFAULT NULL,
  `descricao` text,
  `data_inicial` datetime DEFAULT NULL,
  `data_final` datetime DEFAULT NULL,
  `carga_horaria` varchar(245) DEFAULT NULL,
  `palestrante_convidado` int(11) DEFAULT NULL,
  `palestrante_da_empresa` int(11) DEFAULT NULL,
  `r_auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `advertencias`
--
ALTER TABLE `advertencias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `epis`
--
ALTER TABLE `epis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `funcoes`
--
ALTER TABLE `funcoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `palestrante`
--
ALTER TABLE `palestrante`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `profissional_sst`
--
ALTER TABLE `profissional_sst`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `r_palestrante_habilitacoes`
--
ALTER TABLE `r_palestrante_habilitacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `r_profissional_sst_habilitacoes`
--
ALTER TABLE `r_profissional_sst_habilitacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `r_treinamentos_participantes`
--
ALTER TABLE `r_treinamentos_participantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `setores`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipos_de_epi`
--
ALTER TABLE `tipos_de_epi`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `treinamentos`
--
ALTER TABLE `treinamentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `advertencias`
--
ALTER TABLE `advertencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `epis`
--
ALTER TABLE `epis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `funcoes`
--
ALTER TABLE `funcoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `palestrante`
--
ALTER TABLE `palestrante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `profissional_sst`
--
ALTER TABLE `profissional_sst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `r_palestrante_habilitacoes`
--
ALTER TABLE `r_palestrante_habilitacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `r_profissional_sst_habilitacoes`
--
ALTER TABLE `r_profissional_sst_habilitacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `r_treinamentos_participantes`
--
ALTER TABLE `r_treinamentos_participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `setores`
--
ALTER TABLE `setores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `tipos_de_epi`
--
ALTER TABLE `tipos_de_epi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `treinamentos`
--
ALTER TABLE `treinamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
