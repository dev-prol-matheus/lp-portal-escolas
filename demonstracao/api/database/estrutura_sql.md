CREATE TABLE `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) NOT NULL,
  `indice` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `imagem` (`imagem`)
);

CREATE TABLE `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `data_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  `latitude` decimal(10, 6),
  `longitude` decimal(10, 6),
  `endereco` varchar(255),
  PRIMARY KEY (`id`)
);

CREATE TABLE `cursos` (
  `curso` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `segmento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio_turma` date NOT NULL,
  PRIMARY KEY (`curso`)
);

CREATE TABLE `segmentos` (
  `segmento` int NOT NULL AUTO_INCREMENT,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`segmento`)
);

CREATE TABLE `status_inscricao` (
  `status` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`status`)
);

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
);