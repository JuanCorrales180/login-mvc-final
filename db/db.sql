create database wisher

create table wisher
(
id int(15) auto_increment  not null,
nombre varchar(45) not null,
apellido varchar (45) not null,
usuario varchar(45) not null,
password varchar(45) not null,
primary key (id)
)

create table wish
(
id int(15) auto_increment not null,
title varchar(45) not null,
description varchar (45) not null,
wisher_id int(15),
primary key (id) 
)


alter table wish add foreign key(wisher_id) references wisher(id)



-- otro base de datos q se usara 
-- ///////////////////////////////////////////////////////////

create database deseo

create table deseador
(
cedula int auto_increment  not null,
nombre varchar(45) not null,
apellido varchar (45) not null,
usuario varchar(45) not null,
clave varchar(45) not null,
primary key (cedula)
)

create table deseos
(
id int auto_increment not null,
title varchar(45) not null,
description varchar (95) not null,
deseador_cedula int,
primary key (id) 
)


create table cargo
(
	id int not null auto_increment,
	descripcion varchar(15) not null,
	primary key (id)
)

alter table deseos add foreign key(deseador_cedula) references deseador(cedula)