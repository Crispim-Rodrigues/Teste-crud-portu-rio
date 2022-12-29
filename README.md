# Teste-crud-portu-rio

para o codigo funcionar precisa atualizar o config.php e criar um banco de dados com o nome porto.

#codigo para criar a database

CREATE DATABASE porto;
use porto

#codigo para criar as tabelas

CREATE TABLE `container` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `cliente` varchar(20) NOT NULL, `prefixo` VARCHAR(4) NOT NULL, `placa` INT(7) NOT NULL, `tipo` VARCHAR(20) NOT NULL, `status` VARCHAR(20) NOT NULL, `categoria` VARCHAR(20) NOT NULL)Engine=InnoDB;

#tabela 2

CREATE TABLE `movimentacao` (`id` INT NOT NULL PRIMARY KEY, `cliente` varchar(20) NOT NULL, `movimentacao` VARCHAR(20) NOT NULL, `data inicio` DATETIME NOT NULL, `data final` DATETIME NOT NULL)Engine=InnoDB;
