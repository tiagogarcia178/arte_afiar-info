-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22-Jun-2020 às 18:26
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ada`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `afiacoes`
--

CREATE TABLE `afiacoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `afiacoes`
--

INSERT INTO `afiacoes` (`id`, `titulo`) VALUES
(1, 'Lâminas industriais'),
(2, 'Facas, cutelos, tesouras'),
(3, 'Discos, máquinas'),
(4, 'Pré-cortadores e discos com furos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguer_dois`
--

CREATE TABLE `aluguer_dois` (
  `id` int(11) NOT NULL,
  `texto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluguer_dois`
--

INSERT INTO `aluguer_dois` (`id`, `texto`) VALUES
(1, ' A troca de equipamento é efetuado no seu local de trabalho'),
(2, 'Levamos o equipamento para afiação e deixamos a mesma quantidade no seu local de trabalho'),
(3, 'Quando o equipamento estiver gasto será substituído por novo sem qualquer custo'),
(4, 'O serviço já tem valor incluido da troca e entrega não terá surpresas nos valores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguer_um`
--

CREATE TABLE `aluguer_um` (
  `id` int(11) NOT NULL,
  `texto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluguer_um`
--

INSERT INTO `aluguer_um` (`id`, `texto`) VALUES
(1, 'Poupe dinheiro, não compre mais facas'),
(2, 'Com o aluguer, economize as suas despesas'),
(3, 'Terá sempre facas bem afiadas'),
(4, 'Restaurantes, hipermercados, talhos, peixarias usam o aluguer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `endereço` varchar(250) NOT NULL,
  `email_um` varchar(250) NOT NULL,
  `email_dois` varchar(250) NOT NULL,
  `telefone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `endereço`, `email_um`, `email_dois`, `telefone`) VALUES
(1, 'Rua Portas do Sol nº6, Atalaia, Lourinhã', ' \r\n geral@arteafiar.pt', 'slgarcia18@hotmail.com', '  919064456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `laminas`
--

CREATE TABLE `laminas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `laminas`
--

INSERT INTO `laminas` (`id`, `titulo`) VALUES
(1, 'Discos e cruzetas'),
(2, 'Fitas de Serra'),
(3, 'Lâmina corte em cubos'),
(4, 'Pré-cortadores e discos'),
(5, 'Lâminas Kutter'),
(6, 'Descoratadoras'),
(7, 'Afiadores de facas'),
(8, 'Luvas de proteção'),
(9, 'Discos com serrilha'),
(10, 'Lâminas de espetada'),
(11, 'Lâmina corte de peixe'),
(12, 'Guilhotina de bacalhau'),
(13, 'Escamador'),
(14, 'Lâmina de fiambreira'),
(15, 'Lâmina para máquina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`) VALUES
(1, 'Carne'),
(2, 'Aves'),
(3, 'Peixe'),
(4, 'Charcutaria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `texto`) VALUES
(1, 'Bem-Vindo á Arte D\' Afiar', 'Bem-vindo á nossa empresa no ramo alimentar.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobrenos`
--

CREATE TABLE `sobrenos` (
  `id` int(11) NOT NULL,
  `texto_um` text NOT NULL,
  `texto_dois` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sobrenos`
--

INSERT INTO `sobrenos` (`id`, `texto_um`, `texto_dois`) VALUES
(1, 'Somos uma empresa no ramo alimentar, temos como principal função a venda e comércio de equipamento para a industria  alimentar, afiação de lâminas industriais e facas, o nosso objetivo é sempre fornecer o melhor em atendimento ao cliente.', 'Temos um serviço de aluguer de facas, com entregas e recolha nas suas instalações, a nossa empresa está sempre a evoluir á medida que as necessidades dos nossos clientes mudam e novas oportunidades são criadas no mercado.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `afiacoes`
--
ALTER TABLE `afiacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aluguer_dois`
--
ALTER TABLE `aluguer_dois`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aluguer_um`
--
ALTER TABLE `aluguer_um`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `laminas`
--
ALTER TABLE `laminas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sobrenos`
--
ALTER TABLE `sobrenos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `afiacoes`
--
ALTER TABLE `afiacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `aluguer_dois`
--
ALTER TABLE `aluguer_dois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `aluguer_um`
--
ALTER TABLE `aluguer_um`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `laminas`
--
ALTER TABLE `laminas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sobrenos`
--
ALTER TABLE `sobrenos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
