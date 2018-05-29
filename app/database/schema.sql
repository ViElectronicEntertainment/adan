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
  experience int(100) not null default 1,
  created_at datetime not null
  );

insert into usuarios(email,password,name,lastname,userpicture,experience,created_at)
	value ("pami@ublinter.com","pami","PAMI","Adan","a.jpg",99,NOW());