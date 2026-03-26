/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `db_sistema_chamados` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_sistema_chamados`;

CREATE TABLE IF NOT EXISTS `tb_chamados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Contato` varchar(50) NOT NULL,
  `Assunto` varchar(50) NOT NULL,
  `Prioridade` varchar(50) NOT NULL,
  `Status` bit(1) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Data` datetime NOT NULL,
  `Observacao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_chamados` (`id`, `Nome`, `Contato`, `Assunto`, `Prioridade`, `Status`, `Cidade`, `Data`, `Observacao`) VALUES
	(1, 'Roberto', 'instagram', 'Meu Carro quebrou', 'alta', b'0', 'SJBV', '2026-02-20 17:23:38', 'feito'),
	(2, 'Ana', 'Formulario', 'Deu problema no meu celular', 'alta', b'0', 'Prata', '2026-02-24 13:56:17', 'feito'),
	(3, 'Paulo', 'Whatszap', 'B.O no Softwere de produção', 'alta', b'0', 'Prata', '2026-01-30 17:47:00', NULL),
	(4, 'Carlos', 'Whatszap', 'Robaram meu Almoço', 'Baixo', b'0', 'SJBV', '2026-03-01 13:30:00', NULL),
	(5, 'oi', 'pjoj', 'ojh', 'BAIXA', b'0', 'jh', '0000-00-00 00:00:00', 'ohi');

CREATE TABLE IF NOT EXISTS `tb_departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(50) NOT NULL DEFAULT '',
  `area` varchar(20) NOT NULL DEFAULT '',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_departamentos` (`id`, `departamento`, `area`, `data_cadastro`, `ativo`) VALUES
	(10, '  o', '  er', '2026-03-26 15:04:58', 1);

CREATE TABLE IF NOT EXISTS `tb_empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `area` varchar(20) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `tb_funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '0',
  `telefone` varchar(15) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` tinyint(4) NOT NULL DEFAULT 1,
  `CPF` varchar(14) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_funcionarios` (`id`, `nome`, `email`, `telefone`, `departamento`, `data_cadastro`, `ativo`, `CPF`) VALUES
	(9, 'Léo', 'leo@gmail.com', '(23)47823-0470', 'Adiministrador', '2026-03-24 16:33:23', 1, '834.029.384-02'),
	(12, 'sarah', ' sajfóiajmsju', '(35) 85403-5808', '', '2026-03-24 16:43:10', 1, '324.946.938-05');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
