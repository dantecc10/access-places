CREATE DATABASE `teacherdhapps`;
USE `teacherdhapps`;

DROP TABLE IF EXISTS `access_places`;
CREATE TABLE `access_places`  (
  `id_access_places` int NOT NULL AUTO_INCREMENT,
  `name_access_places` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `quantity_imgs_access_places` int NOT NULL COMMENT 'DEFAULT \'1\'',
  `imgs_access_places` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `coordinate1_access_places` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `coordinate2_access_places` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description_access_places` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  PRIMARY KEY (`id_access_places`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (1, 'Rampa de acceso', 1, '1.png', '19.0084348', '-98.2057863', 'Se encuentra al lado de una estética, entre calles Revolución y Avenida Héroes ');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (2, 'cecyte Chinahuapan ', 1, '2.png', '19.852349', '-98.034332', 'rampas de la escuela ');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (3, 'Dif ', 1, '3.png', '19.838158', '-98.032707', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (4, 'Buap ', 1, '4.png', '19.850094', '-98.033501', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (5, 'Complejo Cultural ', 1, '5.png', '19.849424', '-98.031128', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (6, 'Aurrera ', 1, '6.png', '19.843222', '-98.031258', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (7, 'Tecnica 34', 1, '7.png', '19.847626', '-98.027336', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (8, 'Inmaculada ', 1, '8.png', '19.841104', '-98.030866', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (9, 'Parroquia Santiago Apostol', 1, '9.png', '19.839239', '-98.031263', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (10, 'Presidencia ', 1, '10.png', '19.838612', '-98.031387', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (11, 'Mercado Guadalupe ', 1, '11.png', '19.837297', '-98.034264', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (12, 'Coppel', 1, '12.png', '19.838221', '-98.029495', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (13, 'Elekra 1', 1, '13.png', '19.838814', '-98.035530', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (14, 'Banco BBVA', 1, '14.png', '19.837536', '-98.031914', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (15, 'Mercado Zaragoza', 1, '15.png', '19.836557', '-98.037201', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (16, 'Reloj', 1, '16.png', '19.841198', '-98.032646', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (17, 'Teatro', 1, '17.png', '19.839388', '-98.023277', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (18, 'IMMSS', 1, '18.png', '19.838865', '-98.031837', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (19, 'Auditorio', 1, '19.png', '19.834581', '-98.033386', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (20, 'Tienda3B', 1, '20.png', '19.946541', '-97.951995', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (21, 'Casa de Justicia', 1, '21.png', '19.853624', '-98.035446', '');
INSERT INTO `access_places` (`id_access_places`, `name_access_places`, `quantity_imgs_access_places`, `imgs_access_places`, `coordinate1_access_places`, `coordinate2_access_places`, `description_access_places`) VALUES (22, 'Cesar', 1, '22.png', '19.841614', '-98.032989', '');
