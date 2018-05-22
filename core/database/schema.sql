create database fenix;
use fenix;

create table usuarios ( 
  id int not null auto_increment primary key,
  /*Login Info*/
  email varchar(255) not null,
  password varchar(60) not null,
  /*Blinter Profile*/
  nombre varchar(20) not null,
  apellido varchar(20) not null,
  level int(100) not null default 1,
  experience int(100) not null default 1,
  /*Blinter Skills*/
  leadership int(100) not null default 1,
  innovation int(100) not null default 1,
  teamwork int(100) not null default 1,
  management int(100) not null default 1,
  design int(100) not null default 1,
  development int(100) not null default 1,
  problemresolution int(100) not null default 1,
  sales int(100) not null default 1,
  communication int(100) not null default 1,
  community int(100) not null default 1,
  created_at datetime not null
  );

insert into usuarios(email,password,nombre,apellido,level,experience,leadership,innovation,teamwork,management,design,development,problemresolution,sales,communication,community,created_at)
	value ("pami@ublinter.com","pami","PAMI","FENIX",99,99,99,99,99,99,99,99,99,99,99,99,NOW());