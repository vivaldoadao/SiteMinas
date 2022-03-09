-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21-Nov-2021 às 20:15
-- Versão do servidor: 8.0.26-0ubuntu0.20.04.2
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `znat_cms_db_2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `advertises`
--

CREATE TABLE `advertises` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `position` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `published` tinyint NOT NULL,
  `image` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `advertises`
--

INSERT INTO `advertises` (`id`, `name`, `position`, `startDate`, `endDate`, `published`, `image`, `created_on`) VALUES
(4, 'Topo', 'Topo', '2021-11-30 13:58:00', '2021-11-30 13:58:00', 1, '1636808332_Banner_1.png', '2021-11-13 13:58:52'),
(5, 'Lateral', 'Lateral', '2021-11-13 14:00:00', '2021-11-30 14:00:00', 1, '1636808471_banner_4.png', '2021-11-13 14:01:11'),
(6, 'Centro', 'Centro', '2021-11-29 14:01:00', '2021-11-30 14:01:00', 1, '1636808527_Banner_2.png', '2021-11-13 14:02:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(27, 'Entrevistas'),
(29, 'Generalidade'),
(26, 'Internacional'),
(25, 'Sector Diamantifero'),
(28, 'Vídeos Eventos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cmments`
--

CREATE TABLE `cmments` (
  `id` int NOT NULL,
  `name` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `subject` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `description` text COLLATE utf8_croatian_ci NOT NULL,
  `post_id` varchar(70) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `cmments`
--

INSERT INTO `cmments` (`id`, `name`, `email`, `subject`, `description`, `post_id`, `created_at`, `status`) VALUES
(25, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'jaqduqgd', 'Vivaldo Manuel', '33', '2021-11-13 15:25:27', 1),
(26, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'jaqduqgd', 'Vivaldo Manuel', '33', '2021-11-13 15:27:33', 1),
(28, 'Znat Technology', 'admin@test.com', 'qqsqsq', 'asss', '33', '2021-11-17 20:16:38', 0),
(29, 'Znat Technology', 'admin@test.com', 'qqsqsq', 'asss', '33', '2021-11-17 20:20:56', 1),
(30, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'sdsds', 'ssdsdsd', '33', '2021-11-19 18:23:18', 1),
(31, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'sdsds', 'ssdsdsd', '33', '2021-11-19 18:23:45', 1),
(32, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'sdsds', 'ssdsdsd', '33', '2021-11-19 18:24:16', 0),
(33, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'sdsds', 'ssdsdsd', '33', '2021-11-19 18:25:35', 1),
(34, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'sdsds', 'ssdsdsd', '33', '2021-11-19 18:25:41', 0),
(35, 'Znat Technology', 'adao@hotmail.com', 'adda', 'vivas', '33', '2021-11-19 18:41:36', 1),
(36, 'Znat Technology', 'adao@hotmail.com', 'adda', 'vivas', '33', '2021-11-19 18:41:56', 0),
(37, 'Znat Technology', 'adao@hotmail.com', 'adda', 'vivas', '33', '2021-11-19 18:42:07', 1),
(38, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'vivas2', 'vivas2', '33', '2021-11-19 18:43:10', 1),
(39, 'Znat Technology', 'adao_vivaldo@hotmail.com', 'vivas2', 'vivas2', '33', '2021-11-19 18:43:59', 1),
(40, 'Znat Technology', 'julio@hotmail.com', 'dfdf', 'qqwq', '24', '2021-11-19 18:48:47', 1),
(41, 'Znat Technology', 'julio@hotmail.com', 'dfdf', 'qqwq', '24', '2021-11-19 18:49:17', 0),
(42, 'Znat Technology', 'adao@hotmail.com', 'jaqduqgd', 'aadadadad', '33', '2021-11-20 19:56:15', 0),
(43, 'Znat Technology', 'adao@hotmail.com', 'jaqduqgd', 'aadadadad', '33', '2021-11-20 19:58:46', 0),
(44, 'Znat Technology', 'adao@hotmail.com', 'jaqduqgd', 'aadadadad', '33', '2021-11-20 20:00:07', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `created_on`) VALUES
(1, '+244 927 482 499 / 923485346', 'geral@minasangola.ao', 'Ubanização Nova Vida Rua 181 Vivenda 6024', '2021-10-23 19:38:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `newslatters`
--

CREATE TABLE `newslatters` (
  `id` int NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pos`
--

CREATE TABLE `pos` (
  `id` int NOT NULL,
  `title` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `description` text COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(122) COLLATE utf8_croatian_ci NOT NULL,
  `published` tinyint DEFAULT NULL,
  `emphasis` tinyint DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `pos`
--

INSERT INTO `pos` (`id`, `title`, `description`, `image`, `created_at`, `slug`, `published`, `emphasis`, `created_on`) VALUES
(66, 'zzzzz', 'dgdg', 'download (1).jpeg', '2021-11-12 11:59:16', 'zzzzz', 0, 0, '2021-11-12 12:31:13'),
(70, 'ssfs', 'sfsfs', '33b869f90619e81763dbf1fccc896d8d.jpg', '2021-11-12 12:02:35', 'ssfs', 0, 0, '2021-11-12 12:31:13'),
(95, 'aass', 'wwfwwf', 'download (1).jpeg', '2021-11-12 18:39:27', 'aass618ea6cf07a47', NULL, NULL, '2021-11-12 18:39:27'),
(98, 'aax', 'ryeryyr', '33b869f90619e81763dbf1fccc896d8d.jpg', '2021-11-12 19:51:33', 'aax', NULL, NULL, '2021-11-12 19:51:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `published` tinyint DEFAULT NULL,
  `image` varchar(515) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emphasis` tinyint NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `title`, `category_id`, `body`, `published`, `image`, `created_on`, `emphasis`, `user_id`) VALUES
(24, 'Seminário sobre a Mineração do Ouro em Angola', 25, '&lt;p&gt;Reconhecida import&acirc;ncia dada pelo mirempet ao conhecimento aurifero da hu&iacute;la​&lt;/p&gt;&lt;p&gt;A vice-governadora da Huila, Maria Jo&atilde;o Chipalavela, discursou durante abertura do semin&aacute;rio sobre a minera&ccedil;&atilde;o de ouro em Angola, esta ter&ccedil;a- feira 26/10, na cidade do Lubango.​&lt;/p&gt;&lt;p&gt;A governante real&ccedil;ou que reconhece a import&acirc;ncia que o MIREMPET atribui ao conhecimento aurifero na prov&iacute;ncia da Huila, tendo em conta que &eacute; uma terra geologicamente rica, sendo assim o lugar privilegiado na estrat&eacute;gia da diversifica&ccedil;&atilde;o da economia nacional, tornando a prov&iacute;ncia no sector de elei&ccedil;&atilde;o para o investimento e a cria&ccedil;&atilde;o de postos de trabalho para a juventude.​&lt;/p&gt;&lt;p&gt;Maria Chipalavela afirmou ainda que se torna indispens&aacute;vel aprofundar o desenvolvimento das capacidades e compet&ecirc;ncia no &acirc;mbito destas ci&ecirc;ncias, tendo real&ccedil;ado de igual modo a import&acirc;ncia de se prestar aten&ccedil;&atilde;o especial a capacita&ccedil;&atilde;o do potencial humano.&ldquo;&Eacute; preciso que a compet&ecirc;ncia e a capacidade que as habilidades dos c&ecirc;ntricos, respondam a esses desafios trazendo a excel&ecirc;ncia para o trabalho&rdquo;.​&lt;/p&gt;&lt;p&gt;Concluiu agradecendo o facto de o MIREMPET ter colocado na sua agenda de roteiro a prov&iacute;ncia da Huila.​&lt;/p&gt;', 1, '1636811508_noticia_10.jpg', '2021-11-13 14:51:48', 0, 17),
(27, 'Prospecção e mineração de ouro em debate no lubang', 25, '&lt;p&gt;&quot;Foi na Huila que iniciou a primeira explora&ccedil;&atilde;o de ouro, depois da independ&ecirc;ncia&quot;, disse o Ministro Diamantino Azevedo, ao proceder a abertura, esta ter&ccedil;a-feira, 26.10, do primeiro Semin&aacute;rio sobre Explora&ccedil;&atilde;o de Ouro em Angola.​&lt;/p&gt;&lt;p&gt;Informou que o Minist&eacute;rio dos Recursos Minerais, Petr&oacute;leo e G&aacute;s &quot;tem se esfor&ccedil;ado em tornar realidade as metas do PDN&quot; que, reconheceu, &quot;est&atilde;o ainda aqu&eacute;m do previsto&quot;, raz&atilde;o que levou o MIREMPET a reunir as empresas que prospectam e produzem ouro &quot;para avaliar o estado de implementa&ccedil;&atilde;o dos projectos e encontrar solu&ccedil;&otilde;es&quot;.​&lt;/p&gt;&lt;p&gt;O evento vai ainda, entre outros assuntos, reflectir sobre os procedimentos para a melhoria da comercializa&ccedil;&atilde;o de ouro, a cria&ccedil;&atilde;o de empregos para jovens e a avalia&ccedil;&atilde;o da situa&ccedil;&atilde;o do garimpo.​&lt;/p&gt;&lt;p&gt;Vinte e oito projectos est&atilde;o licenciados para a actividade aur&iacute;fera, destes 20 fazem prospec&ccedil;&atilde;o e oito possuem t&iacute;tulos para produ&ccedil;&atilde;o, sendo que dois projectos mineiros j&aacute; extraem o mineral estrat&eacute;gico de forma experimental.​&lt;/p&gt;&lt;p&gt;O ministro espera que deste encontro de trabalho &quot;saiam recomenda&ccedil;&otilde;es e orienta&ccedil;&otilde;es que incrementem a actividade aur&iacute;fera em Angola&quot;.​&lt;/p&gt;&lt;p&gt;A vice-governadora da Huila Maria Jo&atilde;o Chipalavela fez as honras da casa, em representa&ccedil;&atilde;o do governador Nuno Mahapi Dala, tendo elogiado a realiza&ccedil;&atilde;o do evento na cidade do Lubango.​&lt;/p&gt;', 1, '1636812061_noticia_7.jpg', '2021-11-13 15:01:01', 1, 17),
(28, 'Gem Auctions DMCC vai estrear leilão de diamante bruto em novembro', 26, '&lt;p&gt;A Gem Auctions DMCC, fundada pelo empres&aacute;rio de minera&ccedil;&atilde;o Alan Davies, realizar&aacute; seu primeiro leil&atilde;o de diamantes em bruto em Dubai, Emirados &Aacute;rabes Unidos no pr&oacute;ximo m&ecirc;s.​&lt;/p&gt;&lt;p&gt;Em seu primeiro leil&atilde;o, a Gem Auctions DMCC apresentar&aacute; mais de 100.000 quilates de diamantes em bruto com um valor total estimado de mais de US $ 50 milh&otilde;es de 17 a 22 de novembro de 2021 no Dubai Diamond Exchange, o maior leil&atilde;o de diamantes do mundo. A produ&ccedil;&atilde;o run-of-mine incluir&aacute; pedras individuais, bem como parcelas que variam de 10 quilates a -5.​&lt;/p&gt;&lt;p&gt;Alan Davies, fundador da Gem Auctions DMCC, disse: &ldquo;Gem Auctions DMCC &eacute; o culminar de 25 anos na ind&uacute;stria de minera&ccedil;&atilde;o e diamantes, desde a cria&ccedil;&atilde;o de diversas opera&ccedil;&otilde;es de minera&ccedil;&atilde;o at&eacute; plataformas inovadoras de marketing de gemas brutas. Estamos extremamente orgulhosos de trazer esta produ&ccedil;&atilde;o de alta qualidade para Dubai para nosso primeiro leil&atilde;o e comercializ&aacute;-la para os maiores usu&aacute;rios de diamantes em bruto do mundo. &rdquo;​&lt;/p&gt;&lt;p&gt;Al&eacute;m de ser o fundador da Gem Auctions DMCC, Davies atualmente atua como CEO da empresa de minera&ccedil;&atilde;o da Z&acirc;mbia \'Moxico Resources\' e foi Chefe executivo da Diamonds, Energy and Minerals da Rio Tinto, onde liderou e inovou sua minera&ccedil;&atilde;o de diamantes e opera&ccedil;&otilde;es de licita&ccedil;&atilde;o em 2012- 2016​&lt;/p&gt;&lt;p&gt;Mais informa&ccedil;&otilde;es sobre Gem Auctions DMCC podem ser encontradas aqui: www.gemauctions.ae; e as partes interessadas em se conectar com a equipe DMCC da Gem Auctions podem enviar perguntas para support@gemauctions.ae.&lt;/p&gt;', 1, '1636812742_noticia_1.jpg', '2021-11-13 15:12:22', 1, 17),
(29, 'Exorta Cooperativas De Diamantes Ao Cumprimento Da Lei', 28, '&lt;p&gt;O Ministro dos Recursos Minerais, Petr&oacute;leo e G&aacute;s, Diamantino Azevedo exortou, esta sexta-feira, 22/10, em Luanda, as cooperativas semi-industriais de diamantes actuarem de forma &quot;sustent&aacute;vel&quot; baseando-se em &quot;princ&iacute;pios t&eacute;cnicos e legais&quot;, admitindo que o combate ao garimpo constitui &quot;desafio das autoridades&quot;.​&lt;/p&gt;&lt;p&gt;O governante, que falava na abertura do segundo encontro sobre a atividade semi-industrial de diamantes em Angola, apontou tamb&eacute;m o que considerou de &ldquo;desafios significativos&quot; no dom&iacute;nio da organiza&ccedil;&atilde;o das cooperativas do sector.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;&ldquo;Temos desafios significantes do ponto de vista de organiza&ccedil;&atilde;o das cooperativas, nomeadamente organiza&ccedil;&atilde;o t&eacute;cnica, administrativa, de observ&acirc;ncia dos princ&iacute;pios t&eacute;cnicos para o desenvolvimento de projetos mineiros&rdquo;, afirmou o Ministro.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;Segundo Diamantino Azevedo, o combate ao garimpo de diamantes, sobretudo na regi&atilde;o leste de Angola onde persiste a actividade, consta tamb&eacute;m dos desafios das autoridades e parceiros que actuam neste segmento de explora&ccedil;&atilde;o mineira.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;&ldquo;E tamb&eacute;m temos desafios por parte dos &oacute;rg&atilde;os do Governo relativamente &agrave; mais e melhor apoio &agrave;s nossas cooperativas. Portanto, a responsabilidade de melhoria da situa&ccedil;&atilde;o &eacute; de ambos os actores e s&oacute; em conjunto poderemos resolver estas quest&otilde;es&rdquo;, real&ccedil;ou.​&lt;/p&gt;&lt;p&gt;&ldquo;E implementarmos o regulamento para a explora&ccedil;&atilde;o da actividade semi-industrial de diamantes, que foi aprovado, que, a par de outros instrumentos legais, &eacute; o instrumento principal&rdquo;, sublinhou Diamantino Azevedo.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;Para que, real&ccedil;ou, se possa &ldquo;ver a actividade industrial a n&iacute;vel da pequena e m&eacute;dia escala regulamentada, organizada, mais eficiente e mais sustent&aacute;vel&rdquo;.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;Recordou, na sua interven&ccedil;&atilde;o, o impacto da pandemia provocada pelo novo coronav&iacute;rus no setor, &ldquo;que tem afectado o alcance de muito os objetivos tra&ccedil;ados&rdquo;, exortando, no entanto, os operadores para a &ldquo;persist&ecirc;ncia&rdquo;.​&lt;/p&gt;&lt;p&gt;&ldquo;Temos que ser persistentes e continuarmos a trabalhar no sentido de vermos as cooperativas a evolu&iacute;rem para cumprimento do regulamento semi-industrial de explora&ccedil;&atilde;o de diamantes&rdquo;, defendeu.​&lt;/p&gt;&lt;p&gt;&ldquo;Porque s&oacute; isso permitir&aacute; que haja mais benef&iacute;cios para o Estado, para as comunidades, mais respeito para o ambiente e melhor cumprimento da legisla&ccedil;&atilde;o nacional e internacional de explora&ccedil;&atilde;o sustent&aacute;vel dos recursos mineiras&rdquo;, notou.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;Respons&aacute;veis do Minist&eacute;rio dos Recursos Minerais, Petr&oacute;leos e G&aacute;s, empresas do sector e membros das cooperativas participaram no encontro.&lt;/p&gt;', 1, '1636812882_noticia_2.jpg', '2021-11-13 15:14:42', 0, 17),
(30, '87 Cooperativas Licenciadas Estão Em Actividade', 25, '&lt;p&gt;&ldquo;Neste momento est&atilde;o licenciadas cerca de 266 cooperativas de explora&ccedil;&atilde;o de diamantes, com vista a sua transforma&ccedil;&atilde;o em sociedades comerciais. Deste n&uacute;mero, 87 est&atilde;o em actividade, o que representa 32% do total&rdquo;. A informa&ccedil;&atilde;o foi avan&ccedil;ada nesta sexta-feira, 22/10, pelo director nacional dos recursos minerais, Andr&eacute; Buta Neto, &agrave; margem do segundo encontro realizado, em Luanda, pelo Minist&eacute;rio dos Recursos Minerais, Petr&oacute;leo e G&aacute;s, com as cooperativas.​&lt;/p&gt;&lt;p&gt;Sobre as reclama&ccedil;&otilde;es apresentadas pelas cooperativas, Andr&eacute; Buta Neto esclareceu que a actividade de minera&ccedil;&atilde;o &eacute; cara, e que aquando da atribui&ccedil;&atilde;o das licen&ccedil;as, todas garantiram terem capacidades financeiras. &ldquo;S&oacute; que a realidade demostra o contr&aacute;rio. A realidade demonstra que uma boa parte n&atilde;o tem capacidade financeira&rdquo;.​&lt;/p&gt;&lt;p&gt;Entretanto reconhece que as vias de acesso &agrave;s zonas de explora&ccedil;&atilde;o s&atilde;o &ldquo;muito lament&aacute;veis&rdquo;, e que t&ecirc;m impedido as equipas t&eacute;cnicas que acompanham as cooperativas, de chegar as &aacute;reas mais long&iacute;nquas, defendendo a necessidade de se proceder a recupera&ccedil;&atilde;o das vias de acesso.​&lt;/p&gt;&lt;p&gt;A Administradora da Cooperativa Tchitembo Tchalaza, Georgina Nunda, que esteve no encontro em representa&ccedil;&atilde;o das Cooperativas da prov&iacute;ncia do Bi&eacute;, disse, a sa&iacute;da da reuni&atilde;o, que 70% das orienta&ccedil;&otilde;es anteriormente deixadas foram cumpridas, tendo apontado como exemplo, a forma de comercializa&ccedil;&atilde;o de diamantes, a prorroga&ccedil;&atilde;o das licen&ccedil;as de explora&ccedil;&atilde;o semi-industrial &agrave;s cooperativas e a aten&ccedil;&atilde;o &agrave; ajuda que as cooperativas solicitam junto do departamento e a redu&ccedil;&atilde;o de garimpeiros nas zonas de explora&ccedil;&atilde;o de diamantes.​&lt;/p&gt;&lt;p&gt;Entre os desafios aquela respons&aacute;vel entende n&atilde;o terem sido ainda ultrapassados, apontou a n&atilde;o renova&ccedil;&atilde;o das licen&ccedil;as de algumas cooperativas, motivadas pela falta de investidores e das condi&ccedil;&otilde;es das vias que d&atilde;o acesso &agrave;s zonas de explora&ccedil;&atilde;o semi-industrial, bem como o facto de algumas ainda possu&iacute;rem minas.​&lt;/p&gt;&lt;p&gt;Georgina Nunda afirmou que as cooperativas do Bi&eacute;, j&aacute; cumpriram com todas as orienta&ccedil;&otilde;es, estando neste momento a espera do despacho do Minist&eacute;rio.​&lt;/p&gt;&lt;p&gt;O Administrador da Cooperativa Kuanza Mucango, F&eacute;lix Costa, elencou a falta de incentivos fiscais, bem como a crise financeira no sector constituem desafios para o desenvolvimento das actividades mineiras.​&lt;/p&gt;&lt;p&gt;Sobre os n&iacute;veis de produ&ccedil;&atilde;o, apontou para um balan&ccedil;o positivo, pelo facto de terem atingido a cifra de 5 mil milh&otilde;es de d&oacute;lares, contra os anteriores 3 mil milh&otilde;es. Com estes dados, F&eacute;lix Costa est&aacute; optimista de que as cooperativas da prov&iacute;ncia do Cuanza Sul, v&atilde;o conseguir transformar-se em Sociedade comercial e desenvolver actividades semi-industriais no sector mineiro.&lt;/p&gt;', 1, '1636812985_noticia_3.jpg', '2021-11-13 15:16:25', 0, 17),
(31, 'Mirempet Realiza Seminário Sobre Mineração De Ouro', 26, '&lt;p&gt;A cidade do Lubango acolhe, a 26 de Outubro de 2021, o primeiro semin&aacute;rio sobre minera&ccedil;&atilde;o de ouro em Angola, organizado pelo Minist&eacute;rio dos Recursos Minerais, Petr&oacute;leo e G&aacute;s (MIREMPET).​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;O evento decorrer&aacute; sob o lema &ldquo;Por um Sector Mineiro respons&aacute;vel, din&acirc;mico e produtivo, uniformizemos os procedimentos&rdquo;. Nele ser&atilde;o analisados temas referentes ao estado actual do desenvolvimento e perspectivas dos projectos de ouro em Angola e sobre a comercializa&ccedil;&atilde;o, servi&ccedil;os de suporte e boas pr&aacute;ticas na minera&ccedil;&atilde;o de ouro.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;O semin&aacute;rio vai congregar v&aacute;rios actores que operam no subsector desse mineral e contar&aacute; com a presen&ccedil;a do Governador da Huila, Nuno Dala, directores nacionais e provinciais e especialistas na &aacute;rea de recursos minerais.&lt;/p&gt;', 0, '1636813087_noticia_5.jpg', '2021-11-13 15:18:07', 1, 17),
(32, 'PARCERIA COM RIO TINTO: MINISTRO ESPERA MELHOR QUALIDADE DOS TRABALHOS', 28, '&lt;p&gt;​&lt;/p&gt;&lt;p&gt;&ldquo;N&oacute;s esperamos, com a entrada da empresa Rio Tinto em Angola, melhor qualidade do trabalho de prospec&ccedil;&atilde;o e explora&ccedil;&atilde;o mineira, sempre com respeito &agrave;s quest&otilde;es ambientais, &agrave;s comunidades que envolvem a actividade mineira e que, no fundo, haja proveitos para ambas as partes&rdquo;, anunciou o Ministro dos Recursos Minerais, Petr&oacute;leo e G&aacute;s, Diamantino Azevedo, em entrevista, esta sexta feira, 15.10.2021, &agrave; RTP/&Aacute;frica.​&lt;/p&gt;&lt;p&gt;O centro da conversa foi a assinatura do contrato de investimento mineiro para a concess&atilde;o de diamantes Chiri, rubricado a 08 de Outubro, em Lisboa.​&lt;/p&gt;&lt;p&gt;O governante avan&ccedil;ou que as negocia&ccedil;&otilde;es, para assinatura do referido contrato, come&ccedil;aram h&aacute; dois anos para desenvolver o projecto de diamantes na prov&iacute;ncia da Lunda Norte.​&lt;/p&gt;&lt;p&gt;&ldquo;Estivemos cerca de dois anos a negociar com essa empresa para a sua vinda &agrave; Angola, para que pudesse, junto da Endiama, come&ccedil;ar a desenvolver projectos de inspec&ccedil;&atilde;o, de explora&ccedil;&atilde;o de kimberlito. portanto, os jazigos prim&aacute;rios de diamantes&rdquo;, sublinhou o Ministro.​&lt;/p&gt;&lt;p&gt;Sobre a participa&ccedil;&atilde;o da parte angolana no projecto, Diamantino Azevedo garantiu que a Endiama, embora esteja numa situa&ccedil;&atilde;o dif&iacute;cil, est&aacute; em condi&ccedil;&otilde;es de fazer parte desta rela&ccedil;&atilde;o, acrescentando que &ldquo;a percentagem da participa&ccedil;&atilde;o actual da Endiama s&atilde;o 25%, sendo que o contrato prev&ecirc; um aumento progressivo desta participa&ccedil;&atilde;o que depende da vontade das partes, do interesse da Endiama em acompanhar o projecto e tamb&eacute;m da sua capacidade financeira de poder participar nesse aumento da sua percentagem&rdquo;.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;Diamantino Azevedo considerou que o garimpo &eacute; uma quest&atilde;o preocupante para Angola, recordando que &ldquo;&eacute; uma actividade ilegal&rdquo;. Acrescentou que existem muitas desvantagens como o branqueamento de capital, impacto negativo ao ambiente, problema de sa&uacute;de para as pessoas envolvidas e tamb&eacute;m a migra&ccedil;&atilde;o ilegal. &ldquo;Achamos que devemos procurar outras alternativas para as nossas comunidades para que tenham trabalhos mais condignos&rdquo;, sublinhou.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;O Ministro referiu tamb&eacute;m que a Lei angolana contempla obrigatoriedade da responsabilidade social das empresas, afirmanndo que os projectos sociais s&atilde;o geralmentes discutidos com as comunidades, governos municipais e provinciais. Depois s&atilde;o aprovados e implementados com o devido monitoramento.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;&ldquo;Temos experi&ecirc;ncia relevante nesse engajamento. Angola tem o quarto maior jazigo prim&aacute;rio de diamantes do mundo que &eacute; explorado pela Sociedade Mineira de Catoca e, a partir da&iacute;, temos uma experi&ecirc;ncia mineira no engajamento , tanto ao n&iacute;vel comunit&aacute;rio com em projectos sociais e de apoio as v&aacute;rias iniciativas, priorizadas pela sociedade civil, principalmente &agrave; n&iacute;vel da educa&ccedil;&atilde;o, agricultura e da sa&uacute;de&rdquo;, concluiu o Ministro.​&lt;/p&gt;&lt;p&gt;​&lt;/p&gt;&lt;p&gt;O contrato de investimento mineiro para concess&atilde;o do projecto de diamante Chiri foi assinado a 8 de Outubro de 2021 pelo Minist&eacute;rio dos Recursos Minerais, Petr&oacute;leo e G&aacute;s (MIREMPET), a Endiama-ep e a empresa Rio Tinto e prev&ecirc; 75% dos interesses participativos para a Rio Tinto e 25% para a Endiama-ep, mantendo aberta a possibilidade de a parte angolana aumentar a sua participa&ccedil;&atilde;o at&eacute; 49%.&lt;/p&gt;', 1, '1636813179_noticia_6.jpg', '2021-11-13 15:19:39', 0, 17),
(33, 'MIREMPET REALIZA CONFERÊNCIA INTERNACIONAL DE DIAMANTES', 25, '&lt;p&gt;Acontece de 25 a 27 de Novembro, em Saurimo, Lunda Sul, nas instru&ccedil;&otilde;es do P&oacute;lo de Desenvolvimento Diamant&iacute;fero.​&lt;/p&gt;&lt;p&gt;A Confer&ecirc;ncia vai congregar ministros de minas das principais na&ccedil;&otilde;es africanas produtoras de diamantes, l&iacute;deres de empresas diamant&iacute;feras, especialistas nacionais e internacionais da ind&uacute;stria, assim como empres&aacute;rios e homens de neg&oacute;cios apostados na estrat&eacute;gia da Rep&uacute;blica de Angola de diversifica&ccedil;&atilde;o, integra&ccedil;&atilde;o e crescimento econ&oacute;mico.​&lt;/p&gt;&lt;p&gt;​Ser&atilde;o analisados temas sobre a investiga&ccedil;&atilde;o geol&oacute;gico-mineira, explora&ccedil;&atilde;o de diamantes em Angola (do semi-industrial aos dep&oacute;sitos prim&aacute;rios e secund&aacute;rios); o estado actual e as perspectivas para a lapida&ccedil;&atilde;o em Angola; inova&ccedil;&atilde;o tecnol&oacute;gica, log&iacute;stica e o financiamento dos projectos diamant&iacute;feros.​&lt;/p&gt;&lt;p&gt;​No evento, o Ministro dos Recursos Minerais, Petr&oacute;leo e G&aacute;s, Diamantino Azevedo, far&aacute; a apresenta&ccedil;&atilde;o do Sector aos diferentes operadores para oportunidades de neg&oacute;cios com empresas e agentes da ind&uacute;stria angolana.&lt;/p&gt;', 1, '1636813265_noticia_8.jpg', '2021-11-13 15:21:05', 0, 17),
(35, 'MIREMPET REALIZA CONFERÊNCIA INTERNACIONAL DE DIAMANTES2', 29, '&lt;p&gt;Acontece de 25 a 27 de Novembro, em Saurimo, Lunda Sul, nas instru&ccedil;&otilde;es do P&oacute;lo de Desenvolvimento Diamant&iacute;fero.​&lt;/p&gt;&lt;p&gt;A Confer&ecirc;ncia vai congregar ministros de minas das principais na&ccedil;&otilde;es africanas produtoras de diamantes, l&iacute;deres de empresas diamant&iacute;feras, especialistas nacionais e internacionais da ind&uacute;stria, assim como empres&aacute;rios e homens de neg&oacute;cios apostados na estrat&eacute;gia da Rep&uacute;blica de Angola de diversifica&ccedil;&atilde;o, integra&ccedil;&atilde;o e crescimento econ&oacute;mico.​&lt;/p&gt;&lt;p&gt;​Ser&atilde;o analisados temas sobre a investiga&ccedil;&atilde;o geol&oacute;gico-mineira, explora&ccedil;&atilde;o de diamantes em Angola (do semi-industrial aos dep&oacute;sitos prim&aacute;rios e secund&aacute;rios); o estado actual e as perspectivas para a lapida&ccedil;&atilde;o em Angola; inova&ccedil;&atilde;o tecnol&oacute;gica, log&iacute;stica e o financiamento dos projectos diamant&iacute;feros.​&lt;/p&gt;&lt;p&gt;​No evento, o Ministro dos Recursos Minerais, Petr&oacute;leo e G&aacute;s, Diamantino Azevedo, far&aacute; a apresenta&ccedil;&atilde;o do Sector aos diferentes operadores para oportunidades de neg&oacute;cios com empresas e agentes da ind&uacute;stria angolana.&lt;/p&gt;', 1, '1637430288_noticia_2.jpg', '2021-11-20 18:44:48', 0, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `published` tinyint DEFAULT NULL,
  `imagem` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `published`, `imagem`, `created_at`) VALUES
(32, 'azazazaz', NULL, NULL, NULL, '2021-10-16 19:32:06'),
(34, 'azazazaz', NULL, NULL, NULL, '2021-10-16 20:20:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`) VALUES
(41, 1),
(41, 2),
(41, 3),
(50, 1),
(51, 1),
(52, 1),
(70, 4),
(71, 4),
(87, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 3),
(98, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `tag` varchar(50) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'INTERNACIONAL'),
(2, 'VIDEOS'),
(3, 'SECTOR PETROLIFERO'),
(4, 'EVENTOS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(60) COLLATE utf8_croatian_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'vivaldo', 'vivaldo', '2f2cc20149740f9b339591a690bf4e98');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `admin` tinyint NOT NULL,
  `password` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `admin`, `password`, `created_at`) VALUES
(17, 'Vivaldo', 'adao_vivaldo@hotmail.com', 1, '$2y$10$6FqCcN8byHqRNWH8cJwCWuh06r0z1fA5kxjPu3ik76m0eAjeqzsLm', '2021-10-17 22:08:57'),
(31, 'Vivaldo', 'adao@hotmail.com', 1, '$2y$10$Ru7f9eJ99lgRzWMmrOaiy.XJV4DNrFhvZF3x.q8.uKuZMTIp1U3Je', '2021-11-21 11:05:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `position` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `name`, `position`, `link`, `created_on`) VALUES
(2, 'Vivaldo Adão', 'Lateral', 'gfgfgfg', '2021-10-25 18:39:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `views`
--

CREATE TABLE `views` (
  `id` int NOT NULL,
  `post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_croatian_ci;

--
-- Extraindo dados da tabela `views`
--

INSERT INTO `views` (`id`, `post_id`) VALUES
(1, 33),
(2, 33),
(3, 27),
(4, 32),
(5, 32),
(6, 32),
(7, 33),
(8, 24),
(9, 33),
(10, 33),
(11, 30),
(12, 33),
(13, 30),
(14, 30),
(15, 12),
(16, 30),
(17, 30),
(18, 33),
(19, 33),
(20, 33),
(21, 33),
(22, 33),
(23, 33),
(24, 33),
(25, 33),
(26, 17),
(27, 32),
(28, 8),
(29, 8),
(30, 8),
(31, 33),
(32, 8),
(33, 31),
(34, 17),
(35, 31),
(36, 35),
(37, 17),
(38, 31),
(39, 31),
(40, 31),
(41, 33),
(42, 27),
(43, 27),
(44, 27),
(45, 27),
(46, 27),
(47, 27),
(48, 27),
(49, 27),
(50, 27),
(51, 27),
(52, 27),
(53, 27),
(54, 27),
(55, 27),
(56, 27),
(57, 27),
(58, 41),
(59, 41),
(60, 33),
(61, 60),
(62, 40),
(63, 17),
(64, 57),
(65, 60),
(66, 24),
(67, 29),
(68, 29),
(69, 60),
(70, 57),
(71, 57),
(72, 57),
(73, 57),
(74, 57),
(75, 60),
(76, 57),
(77, 17),
(78, 17),
(79, 57),
(80, 40),
(81, 60),
(82, 60),
(83, 33),
(84, 30),
(85, 33),
(86, 33),
(87, 33),
(88, 33),
(89, 33),
(90, 89),
(91, 33),
(92, 91),
(93, 91),
(94, 33),
(95, 27),
(96, 33),
(97, 31),
(98, 33),
(99, 27),
(100, 27),
(101, 27),
(102, 33),
(103, 27),
(104, 33),
(105, 31),
(106, 24),
(107, 24),
(108, 33),
(109, 33),
(110, 32),
(111, 29),
(112, 24),
(113, 30),
(114, 27),
(115, 28),
(116, 29),
(117, 33),
(118, 33),
(119, 33),
(120, 33),
(121, 33),
(122, 33),
(123, 33),
(124, 33),
(125, 33),
(126, 33),
(127, 33),
(128, 33),
(129, 33),
(130, 33),
(131, 33),
(132, 33),
(133, 33),
(134, 33),
(135, 33),
(136, 33),
(137, 33),
(138, 33),
(139, 33),
(140, 33),
(141, 33),
(142, 24),
(143, 24),
(144, 24),
(145, 33),
(146, 33),
(147, 32),
(148, 33),
(149, 33),
(150, 33),
(151, 33),
(152, 33);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Índices para tabela `cmments`
--
ALTER TABLE `cmments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `newslatters`
--
ALTER TABLE `newslatters`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `cmments`
--
ALTER TABLE `cmments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `newslatters`
--
ALTER TABLE `newslatters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `pos`
--
ALTER TABLE `pos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `views`
--
ALTER TABLE `views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
