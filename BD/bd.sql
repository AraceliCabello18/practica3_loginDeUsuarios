create database LoguinUsuario;
use LoguinUsuario;
CREATE TABLE `t_usuario` (
    `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(245) NOT NULL,
    `paterno` varchar(245) NOT NULL,
    `materno` varchar(245) NOT NULL,
    `sexo` varchar(245) NOT NULL,
    `telefono` varchar(245) NOT NULL,
    `email` varchar(245) NOT NULL,
    `usuario` varchar(245) NOT NULL,
    `password` varchar(245) NOT NULL,
    `fechaInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;