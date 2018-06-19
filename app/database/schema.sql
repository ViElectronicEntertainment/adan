create database adan;
use adan;

create table usuarios ( 
  id int not null auto_increment primary key,
  /*Login Info*/
  email varchar(255) not null,
  password varchar(60) not null,
  /*Blinter Profile*/
  name varchar(20) not null,
  lastname varchar(20) not null,
  userpicture varchar(255) default 'default-avatar.jpg',
  leadership int(100) not null default 0,
  innovation int(100) not null default 0,
  teamwork int(100) not null default 0,
  management int(100) not null default 0,
  design int(100) not null default 0,
  development int(100) not null default 0,
  problemresolution int(100) not null default 0,
  sales int(100) not null default 0,
  communication int(100) not null default 0,
  community int(100) not null default 0,
  experience int(100) not null default 0,
  level int(100) not null default 1,
  created_at datetime not null
  );

insert into usuarios(email,password,name,lastname,userpicture,leadership,innovation,teamwork,management,design,development,problemresolution,sales,communication,community,experience,level,created_at)
	value ("pami@ublinter.com",sha1(md5('pami')),"PAMI","Adan","assets/img/a.jpg",99,99,99,99,99,99,99,99,99,99,99,99,NOW());