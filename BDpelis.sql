/* Crear BD */
DROP DATABASE IF EXISTS pelis;
CREATE DATABASE pelis CHARACTER SET utf8mb4;
USE pelis;
/* Crear tabla */
CREATE TABLE pelis (
IdPeli INT NOT NULL AUTO_INCREMENT ,
titulo VARCHAR(50) NOT NULL ,
portada VARCHAR(500) , 
annoEstreno YEAR NOT NULL,
fechaPublicacion TIMESTAMP NOT NULL , 
PRIMARY KEY (`IdPeli`), 
UNIQUE (`titulo`));

/* Insertar algunos datos */
INSERT INTO `pelis` ( `titulo`, `portada`,`annoEstreno`, `fechaPublicacion`) 
VALUES ('Primera', 'portada1.jpg','1998', current_timestamp());
INSERT INTO `pelis` ( `titulo`, `portada`,`annoEstreno`, `fechaPublicacion`) 
VALUES ('Segunda', 'portada2.jfif','1997', current_timestamp()+1);
INSERT INTO `pelis` ( `titulo`, `annoEstreno`, `fechaPublicacion`) 
VALUES ('Tercera', '1977', current_timestamp()+1);