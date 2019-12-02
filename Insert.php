<?php

INSERT INTO `administrador`(`nome`, `cpf`, `e_mail`, `senha`, `id`) 
VALUES ("Anny Beatriz Carlos de Souza",94578438921,"annybeatriz@gmail.com",1234,1)

INSERT INTO `pais`(`id`, `nome`) 
VALUES ('',"Brasil")

INSERT INTO `estado`(`id`, `nome`, `sigla`, `fk_pais_id`) 
VALUES ('1',"Ceará","ce",'1')

INSERT INTO `cidade`(`nome`, `id`, `fk_estado_id`) 
VALUES ("Acopiara",'',1)

INSERT INTO `endereco`(`id`, `cep`, `logradouro`, `numero`, `complemento`, `fk_cidade_id`, `fk_estado_id`, `fk_pais_id`)
VALUES ('',63560000,"Sitio Vaca",161,"Zona Rural",1,1,1)

INSERT INTO `evento`(`nome`, `id`) 
VALUES ("Palestra",'')

INSERT INTO `acao`(`datainicial`, `nome`, `id`, `fk_endereco_id`, `fk_evento_id`, `numero_de_vagas`, `datafinal`) 
VALUES (20191203,"Palestra sobre Empreendedorismo",'',1,1,120,20191225)

INSERT INTO `usuario`(`e_mail`, `nome`, `cpf`, `id`, `fk_endereco_id`, `fk_evento_id`) 
VALUES ("rogerios2@gmail.com","José Rogério de Lima e Silva",12569321345,'',1,1)

INSERT INTO `inscricao`(`carga_horaria`, `id`, `fk_evento_id`, `fk_acao_id`, `fk_usuario_id`) 
VALUES (20,'',1,1,1)

INSERT INTO `tipoevento`(`id`, `descricao`) 
VALUES ('',"Palestra sobre Tecnologia de Informática")
?>