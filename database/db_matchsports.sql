-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema matchsports
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema matchsports
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `matchsports` DEFAULT CHARACTER SET latin1 ;
USE `matchsports` ;

-- -----------------------------------------------------
-- Table `matchsports`.`modalidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `matchsports`.`modalidades` (
  `id_modalidade` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `logotipo` VARCHAR(100) NOT NULL,
  `slug` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_modalidade`))
ENGINE = InnoDB
AUTO_INCREMENT = 25
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `matchsports`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `matchsports`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(191) NOT NULL,
  `email` VARCHAR(191) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(191) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `provider` VARCHAR(100) NULL DEFAULT NULL,
  `provider_id` VARCHAR(100) NULL DEFAULT NULL,
  `photo` VARCHAR(100) NULL DEFAULT NULL,
  `endereco` VARCHAR(1000) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `estado` VARCHAR(45) NULL DEFAULT NULL,
  `cep` BIGINT(9) NULL DEFAULT NULL,
  `data_nascimento` VARCHAR(45) NULL DEFAULT NULL,
  `sexo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `matchsports`.`evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `matchsports`.`evento` (
  `id_evento` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(300) NOT NULL,
  `descricao` VARCHAR(1000) NOT NULL,
  `foto` VARCHAR(1000) NOT NULL,
  `local` VARCHAR(500) NOT NULL,
  `data_hora` DATETIME NULL DEFAULT NULL,
  `users_id` BIGINT(20) UNSIGNED NOT NULL,
  `modalidades_fk` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_evento`),
  UNIQUE INDEX `modalidades_fk_UNIQUE` (`modalidades_fk` ASC) VISIBLE,
  INDEX `fk_evento_users1_idx` (`users_id` ASC) VISIBLE,
  CONSTRAINT `evento_ibfk_1`
    FOREIGN KEY (`modalidades_fk`)
    REFERENCES `matchsports`.`modalidades` (`id_modalidade`),
  CONSTRAINT `fk_evento_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `matchsports`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `matchsports`.`mensagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `matchsports`.`mensagem` (
  `id_mensagem` INT(11) NOT NULL AUTO_INCREMENT,
  `mensagem` LONGTEXT NULL DEFAULT NULL,
  `data_hora` DATETIME NULL DEFAULT NULL,
  `evento_fk` INT(11) NULL DEFAULT NULL,
  `users_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_mensagem`),
  INDEX `evento_fk` (`evento_fk` ASC) VISIBLE,
  INDEX `fk_mensagem_users1_idx` (`users_id` ASC) VISIBLE,
  CONSTRAINT `fk_mensagem_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `matchsports`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `mensagem_ibfk_2`
    FOREIGN KEY (`evento_fk`)
    REFERENCES `matchsports`.`evento` (`id_evento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `matchsports`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `matchsports`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `matchsports`.`password_resets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `matchsports`.`password_resets` (
  `email` VARCHAR(191) NOT NULL,
  `token` VARCHAR(191) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  INDEX `password_resets_email_index` (`email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `matchsports`.`usuario_evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `matchsports`.`usuario_evento` (
  `id_usuario_evento` INT(11) NOT NULL AUTO_INCREMENT,
  `evento_fk` INT(11) NULL DEFAULT NULL,
  `users_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_usuario_evento`),
  INDEX `evento_fk` (`evento_fk` ASC) VISIBLE,
  INDEX `fk_usuario_evento_users1_idx` (`users_id` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_evento_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `matchsports`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `usuario_evento_ibfk_2`
    FOREIGN KEY (`evento_fk`)
    REFERENCES `matchsports`.`evento` (`id_evento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
