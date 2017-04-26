
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `adotepets` DEFAULT CHARACTER SET utf8 ;
USE `adotepets` ;

-- -----------------------------------------------------
-- Table `adotepets`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotepets`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NULL,
  `telefone` VARCHAR(45) NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adotepets`.`animal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotepets`.`animal` (
  `id_animal` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NULL,
  `raca` VARCHAR(45) NULL DEFAULT 'Sem raça definida',
  `sexo` VARCHAR(45) NULL,
  `porte` VARCHAR(45) NULL,
  `idade` VARCHAR(45) NULL,
  `foto` MEDIUMBLOB NULL,
  `descricao` VARCHAR(255) NULL DEFAULT 'Nenhuma descrição',
  PRIMARY KEY (`id_animal`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adotepets`.`comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotepets`.`comentarios` (
  `id_comentario` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `comentario` VARCHAR(255) NOT NULL,
  `usuario_id_usuario` INT NOT NULL,
  PRIMARY KEY (`id_comentario`, `usuario_id_usuario`),
  INDEX `fk_comentarios_usuario1_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_comentarios_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `adotepets`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adotepets`.`adotar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotepets`.`adotar` (
  `usuario_id_usuario` INT NOT NULL,
  `animal_id_animal` INT NOT NULL,
  `data_adocao` DATE NOT NULL,
  PRIMARY KEY (`usuario_id_usuario`, `animal_id_animal`),
  INDEX `fk_usuario_has_animal_animal1_idx` (`animal_id_animal` ASC),
  INDEX `fk_usuario_has_animal_usuario_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_usuario_has_animal_usuario`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `adotepets`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_animal_animal1`
    FOREIGN KEY (`animal_id_animal`)
    REFERENCES `adotepets`.`animal` (`id_animal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
