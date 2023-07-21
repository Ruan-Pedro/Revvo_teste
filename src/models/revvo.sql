-- Consultas para criar o banco de dados e CRUD no MYSQL
-- É NECESSÁRIO CRIAR O BANCO E A TABELA NO BANCO DE DADOS PARA QUE O SISTEMA FUNCIONE ADEQUADAMENTE
CREATE DATABASE `Revvo` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

CREATE TABLE `Cursos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IMAGE` varchar(50) COLLATE utf8mb3_bin DEFAULT 'default_img.png',
  `TITLE` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT 'LOREM IPSUM',
  `TEXT` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing elit.',
  `createdAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LINK` varchar(150) COLLATE utf8mb3_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

SELECT `Cursos`.`ID`,
    `Cursos`.`IMAGE`,
    `Cursos`.`TITLE`,
    `Cursos`.`TEXT`,
    `Cursos`.`createdAt`,
    `Cursos`.`updatedAt`,
    `Cursos`.`LINK`
FROM `Revvo`.`Cursos`;

INSERT INTO `Revvo`.`Cursos`
(`ID`,
`IMAGE`,
`TITLE`,
`TEXT`,
`createdAt`,
`updatedAt`,
`LINK`)
VALUES
(<{ID: }>,
<{IMAGE: default_img.png}>,
<{TITLE: LOREM IPSUM}>,
<{TEXT: Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing elit.}>,
<{createdAt: CURRENT_TIMESTAMP}>,
<{updatedAt: CURRENT_TIMESTAMP}>,
<{LINK: }>);

UPDATE `Revvo`.`Cursos`
SET
`ID` = <{ID: }>,
`IMAGE` = <{IMAGE: default_img.png}>,
`TITLE` = <{TITLE: LOREM IPSUM}>,
`TEXT` = <{TEXT: Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing elit.}>,
`createdAt` = <{createdAt: CURRENT_TIMESTAMP}>,
`updatedAt` = <{updatedAt: CURRENT_TIMESTAMP}>,
`LINK` = <{LINK: }>
WHERE `ID` = <{expr}>;

DELETE FROM `Revvo`.`Cursos`
WHERE <{where_expression}>;
