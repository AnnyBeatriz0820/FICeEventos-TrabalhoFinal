
set sql_mode = "no_auto_value_on_zero";
set autocommit = 0;
start transaction;
set time_zone = "+00:00";

DROP TABLE IF EXISTS tipoevento;
DROP TABLE IF EXISTS inscricao;
DROP TABLE IF EXISTS usuario;
DROP TABLE IF EXISTS acao;
DROP TABLE IF EXISTS evento;
DROP TABLE IF EXISTS endereco;
DROP TABLE IF EXISTS cidade;
DROP TABLE IF EXISTS estado;
DROP TABLE IF EXISTS pais;
DROP TABLE IF EXISTS administrador;
DROP TABLE IF EXISTS mes;
DROP TABLE IF EXISTS campus;
DROP TABLE IF EXISTS escolaridade;

create table `administrador` (
  `nome` varchar(50) default null,
  `cpf` char(11) default null,
  `e_mail` varchar(50) default null,
  `senha` int(11) default null,
  `id` int not null primary key auto_increment
) engine=innodb default charset=latin1;

create table `campus` (
  `id` int not null primary key auto_increment,
  `sigla` varchar(2) default null,
  `nome` varchar(50) default null
) engine=innodb default charset=latin1;

create table `escolaridade` (
  `id` int not null primary key auto_increment,
  `nome` varchar(50) default null
) engine=innodb default charset=latin1;

create table `mes` (
  `id` int not null primary key auto_increment,
  `nome` varchar(50) default null
) engine=innodb default charset=latin1;

create table `pais` (
  `id` int not null primary key auto_increment,
  `nome` varchar(50) default null
) engine=innodb default charset=latin1;

create table `estado` (
  `id` int(11) not null  primary key auto_increment,
  `nome` varchar(50) default null,
  `sigla` varchar(2) default null,
  `fk_pais_id` int(11) default null,
    FOREIGN KEY (fk_pais_id) REFERENCES pais(id)
) engine=innodb default charset=latin1;


create table `cidade` (
  `nome` varchar(50) default null,
  `id` int not null primary key auto_increment,
  `fk_estado_id` int default null,
  FOREIGN KEY (fk_estado_id) REFERENCES estado(id)
) engine=innodb default charset=latin1;


create table `endereco` (
  `id` int not null primary key auto_increment,
  `cep` int(11) default null,
  `logradouro` varchar(50) default null,
  `numero` int(11) default null,
  `complemento` varchar(50) default null,
  `fk_cidade_id` int default null,
  `fk_estado_id` int default null,
  `fk_pais_id` int default null,
    FOREIGN KEY (fk_cidade_id) REFERENCES cidade(id),
      FOREIGN KEY (fk_estado_id) REFERENCES estado(id),
        FOREIGN KEY (fk_pais_id) REFERENCES pais(id)
) engine=innodb default charset=latin1;

create table `evento` (
  `nome` varchar(100) default null,
  `id` int not null primary key auto_increment
) engine=innodb default charset=latin1;

create table `acao` (
  `datainicial` date default null,
  `nome` varchar(100) default null,
  `id` int not null primary key auto_increment,
  `fk_endereco_id` int default null,
  `fk_evento_id` int default null,
  `numero_de_vagas` int(11) default null,
  `datafinal` date default null,
    FOREIGN KEY (fk_endereco_id) REFERENCES endereco(id),
      FOREIGN KEY (fk_evento_id) REFERENCES evento(id)
 )engine=innodb default charset=latin1;

create table `usuario` (
  `e_mail` varchar(50) default null,
  `nome` varchar(100) default null,
  `cpf` varchar(11) default null,
  `id` int not null primary key auto_increment,
  `fk_endereco_id` int default null,
  `fk_evento_id` int default null,
    FOREIGN KEY (fk_endereco_id) REFERENCES endereco(id),
      FOREIGN KEY (fk_evento_id) REFERENCES evento(id)
) engine=innodb default charset=latin1;

create table `inscricao` (
  `carga_horaria` smallint(6) default null,
  `id` int not null primary key auto_increment,
  `fk_evento_id` int default null,
  `fk_acao_id` int default null,
  `fk_usuario_id` int default null,
    FOREIGN KEY (fk_evento_id) REFERENCES evento(id),
    FOREIGN KEY (fk_acao_id) REFERENCES acao(id),
    FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id)
) engine=innodb default charset=latin1;


create table `tipoevento` (
  `id` int not null primary key auto_increment,
  `descricao` varchar(100) default null
) engine=innodb default charset=latin1;