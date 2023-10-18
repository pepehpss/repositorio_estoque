create database estoque;

create table estoque.produtos (
    id_produto varchar(13) not null primary key,
    foto varchar(25),
    nome varchar(13) not null,
    quant int not null,
    preco float not null
)