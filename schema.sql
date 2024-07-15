CREATE DATABASE IF NOT EXISTS agendaphp;
USE agendaphp;
CREATE TABLE IF NOT EXISTS clienti(
	id 		int not null auto_increment,
	nome 		varchar(45) not null,
    	cognome		varchar(45) not null,
	email 		varchar(100) not null,
	telefono 	varchar(20) not null,
	primary key (id)
);