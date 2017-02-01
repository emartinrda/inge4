create table usuarios
(
	usuario varchar(15) primary key,
	password varchar,
	nombre	varchar(80),
	apellido varchar(80)
);

alter table usuarios
add constraint solo_letras
check (usuario ~ '^[a-zA-Z]+$');

CREATE EXTENSION pgcrypto;

insert into usuarios(usuario,password,nombre,apellido)
values('etorres',crypt('123',gen_salt('bf')),'Eduardo','Torres');
