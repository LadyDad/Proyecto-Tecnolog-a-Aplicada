CREATE DATABASE db_hotel;
USE db_hotel;

CREATE TABLE checkin
(
    id int primary key auto_increment,
    habitacion int not null,
    tiempo_estancia int not null,
    estado int(2) not null
    
);

CREATE TABLE Habitaciones
(
    numero int primary key,
    Tipo varchar(45) not null,
    piso int not null,
    precio double(20,2) not null

);


CREATE TABLE usuario
(
    id int primary key auto_increment,
    nombre varchar(60) not null,
    telefono varchar(45) not null,
    correo varchar(60) not null,
    clave varchar(60) not null
);

ALTER TABLE checkin ADD CONSTRAINT FK_CHECKIN_HABITACION FOREIGN KEY (habitacion) REFERENCES Habitaciones(numero);