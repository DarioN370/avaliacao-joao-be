-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_redecanais
CREATE DATABASE IF NOT EXISTS `db_redecanais` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_redecanais`;

-- Copiando estrutura para tabela db_redecanais.tb_filmes
CREATE TABLE IF NOT EXISTS `tb_filmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `estudio` varchar(30) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `sinopse` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela db_redecanais.tb_filmes: ~7 rows (aproximadamente)
INSERT INTO `tb_filmes` (`id`, `nome`, `estudio`, `categoria`, `sinopse`) VALUES
	(1, 'Interestelar 001', '', '', ''),
	(2, 'Interestelar 001', '', 'Ficção 001', 'Sinopse do teeste 001 eles viajam no espaço, passa muito tempo na terra e pouco la, a filha dele fica velha e ele é novo'),
	(3, 'Filme teste 002', '', 'terror 002', 'uma descrição sendo o teste 002'),
	(4, 'Filme teste 002', '', 'terror 002', 'uma descrição sendo o teste 002'),
	(5, 'teste 003', 'teste 003', 'teste 003', 'teste 003\r\n'),
	(6, 'Filme teste 001', 'Estudio 001', 'Cat 001', 'teste 001 dia 24/6 conexão com o banco de dados '),
	(7, 'Teste após css', 'teste 002 do dia ', 'teste 002', 'teste 002 do dia apos ter encerrado o css das paginas principais ');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
