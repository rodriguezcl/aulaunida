CREATE TABLE usuarios (
id_usuario INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombres VARCHAR (255) NOT NULL,
cargo VARCHAR (255) NOT NULL,
email VARCHAR (255) NOT NULL UNIQUE KEY,
password TEXT NOT NULL,

fyh_creacion DATETIME NULL,
fyh_actualizacion DATETIME NULL,
estado VARCHAR (11)

)ENGINE=InnoDB;

INSERT INTO usuarios (nombres,cargo,email,password,fyh_creacion,estado)
VALUES ('Leonardo Rodriguez','Administrador','admin@admin.com','$2y$10$0tYmdHU9uGCIxY1f90W1EuIm54NQ8axowkxL1WzLbqO2LdNa8m3l2','2024-05-26 00:59:10','1');


CREATE TABLE roles (
id_rol INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre_rol VARCHAR (255) NOT NULL,

fyh_creacion DATETIME NULL,
fyh_actualizacion DATETIME NULL,
estado VARCHAR (11)

)ENGINE=InnoDB;

INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('Administrador','2024-05-27 22:26:10','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('Director','2024-05-27 22:27:10','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('Docente','2024-05-27 22:28:10','1');

