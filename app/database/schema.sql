create database adan;
use adan;

create table usuarios ( 
  id int not null auto_increment primary key,/*1*/
  /*Login Info*/
  email varchar(255) not null,/*1*/
  password varchar(60) not null,
  /*Blinter Profile*/
  name varchar(20) not null, /*1*/
  lastname varchar(20) not null,/*1*/
  userpicture varchar(255) default 'default-avatar.jpg',/*1*/
  level int(100) not null default 1,
  experience int(100) not null default 1,
  created_at datetime not null
  );

insert into usuarios(email,password,name,lastname,userpicture,level,experience,leadership,innovation,teamwork,management,design,development,problemresolution,sales,communication,community,created_at)
	value ("pami@ublinter.com","pami","PAMI","Adan","a.jpg",99,99,NOW());