CREATE DATABASE mural;
USE mural;

create table login(
	id_usuario int primary key,
	email varchar(255) not null,
	senha varchar(255) not null
);

create table usuario(
	id_usuario serial unique,
	email varchar(255) primary key,
    nome_de_usuario varchar(255) unique,
    senha varchar(255) not null,
    nome varchar(255),
    descricao varchar(255),
    url_da_imagem_do_perfil varchar(500) not null,
    url_da_imagem_do_banner varchar(500) not null
);

alter table usuario
add data_nasc date;

create table postagem(
	id_postagem serial primary key,
    foreign key (id_postagem) references usuario(id_usuario),
    url_da_imagem varchar(500),
	descricao varchar(255),
	data_de_postagem timestamp default current_timestamp
);

create table pastas (
	id_pasta serial primary key,
    id_postagem int references postagem(postagem_id),
    id_usuario int references usuario(id_usuario)
);

create table comentarios(
	id_comentarios serial primary key,
    id_postagem int references postagem(postagem_id),
    id_usuario int references usuario(id_usuario),
	conteudo varchar(255) not null
);
create table comentarios_dos_comentarios(
	id_coment_dos_coment serial primary key,
    id_postagem int references postagem(postagem_id),
    id_comentario_pai int references comentarios(id_comentarios),
	conteudo varchar(255) not null
);

create table likes(
	id_likes serial,
    foreign key (id_likes) references usuario(id_usuario),
    id_postagem int references postagem(postagem_id),
    valor int
);

create table seguidor(
	id_usuario_que_segue int references usuario(id_usuario),
    id_usuario_que_esta_sendo_seguido int references usuario(id_usuario)
);

create table mural(
	id_mural serial primary key,
	url_das_conquistas varchar(500),
    id_usuario int references usuario(id_usuario),
	texto text
);
create table mensagens(
	id_remetente int references usuario(id_usuario),
    id_destinatario int references usuario(id_usuario),
	conteudo varchar(255)
);