drop database if exists foroPlatos;
drop user if exists pato;
-- por fallo de usuario existente

create database foroPlatos;
use foroPlatos;

create user 'pato' identified by 'moonChild';
grant all privileges on stressfulRelax.*to desarrollador;


create table if not exists usuario (
id int unsigned primary key auto_increment,
nombre varchar (50) not null,
apellido1 varchar (50),
apellido2 varchar (50),
nick varchar (20) unique not null,
esAdmin tinyint (1) not null,
edad int unsigned,
email varchar (200) not null,
telefono varchar (20),
contrasenia varchar (255) not null
);

ALTER TABLE receta
ADD imagen blob;
create table if not exists receta (
id int unsigned primary key auto_increment,
nombre varchar (50) unique not null,
tipo enum ('Tradicional','Slowfood','Freidora sin aceite'),
dificultad enum ('facil','media','dificil'),
pasos varchar (5000) not null,
ingredientes varchar (5000) not null
);

drop table comentario;
create table if not exists comentario (
id int unsigned primary key auto_increment,
id_usuario int unsigned,
	foreign key (id_usuario)
		references usuario (id),
id_receta int unsigned,
	foreign key (id_receta)
		references receta (id),
texto varchar (1500) not null,
valor int unsigned
);

create table if not exists mensaje (
id int unsigned primary key auto_increment,
id_usuario int unsigned,
	foreign key (id_usuario)
		references usuario (id),
remitente varchar (50),
texto varchar (1500) not null,
leido  tinyint (1) not null
);
