CREATE TABLE usuario(usuario varchar(30) NOT NULL PRIMARY KEY, contraseña varchar(30) NOT NULL, nombre varchar(50), apellido varchar(50), descripcion varchar(100), correo varchar(70));

CREATE TABLE wallpaper(id int NOT NULL PRIMARY KEY AUTO_INCREMENT, titulo varchar(30) NOT NULL, descripcion varchar(100), categoria int NOT NULL, imagen varchar(50) NOT NULL, usuario varchar(30) NOT NULL);

CREATE TABLE categoria(id int NOT NULL PRIMARY KEY AUTO_INCREMENT, nombre varchar(30) NOT NULL);

ALTER TABLE wallpaper ADD FOREIGN KEY(usuario) REFERENCES usuario(usuario);

ALTER TABLE wallpaper ADD FOREIGN KEY(categoria) REFERENCES categoria(id);


