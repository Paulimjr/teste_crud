CREATE DATABASE bd_estados;
use bd_estados;	
-- tabela de users
CREATE TABLE IF NOT EXISTS `bd_estados`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `permissao` INT(11) NULL DEFAULT NULL,
  `remember_token` VARCHAR(255) NULL DEFAULT NULL,
  `updated_at` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;

-- tabela de estados
CREATE TABLE IF NOT EXISTS `bd_estados`.`estados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `sigla` CHAR(2) NOT NULL,
  `historico` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 59
DEFAULT CHARACTER SET = utf8;

INSERT INTO users (nome,email,senha,permissao)VALUES ('Administrador', 'admin@gmail.com',md5('123'),1);

INSERT INTO users (nome,email,senha,permissao)VALUES ('Paulo Cesar', 'paulim.jr@hotmail.com',md5('123'),2);

