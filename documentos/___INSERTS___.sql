INSERT INTO pais (nome) VALUES
("África do Sul"),
("Albânia"),
("Alemanha"),
("Andorra"),
("Angola"),
("Anguilla"),
("Antigua"),
("Arábia Saudita"),
("Argentina"),
("Armênia"),
("Aruba"),
("Austrália"),
("Áustria"),
("Azerbaijão"),
("Bahamas"),
("Bahrein"),
("Bangladesh"),
("Barbados"),
("Bélgica"),
("Benin"),
("Bermudas"),
("Botsuana"),
("Brasil"), 
("Brunei"),
("Bulgária"),
("Burkina Fasso"),
("Botão"),
("Cabo Verde"),
("Camarões"),
("Camboja"),
("Canadá"),
("Cazaquistão"),
("Chade"),
("Chile"),
("China"),
("Cidade do Vaticano"),
("Colômbia"),
("Congo"),
("Coréia do Sul"),
("Costa do Marfim"),
("Costa Rica"),
("Croácia"),
("Dinamarca"),
("Djibuti"),
("Dominica"),
("EUA"),
("Egito"),
("El Salvador"),
("Emirados Árabes"),
("Equador"),
("Eritréia"),
("Escócia"),
("Eslováquia"),
("Eslovênia"),
("Espanha"),
("Estônia"),
("Etiópia"),
("Fiji"),
("Filipinas"),
("Finlândia"),
("França"),
("Gabão"),
("Gâmbia"),
("Gana"),
("Geórgia"),
("Gibraltar"),
("Granada"),
("Grécia"),
("Guadalupe"),
("Guam"),
("Guatemala"),
("Guiana"),
("Guiana Francesa"),
("Guiné-bissau"),
("Haiti"),
("Holanda"),
("Honduras"),
("Hong Kong"),
("Hungria"),
("Iêmen"),
("Ilhas Cayman"),
("Ilhas Cook"),
("Ilhas Curaçao"),
("Ilhas Marshall"),
("Ilhas Turks & Caicos"),
("Ilhas Virgens (brit.)"),
("Ilhas Virgens(amer.)"),
("Ilhas Wallis e Futuna"),
("Índia"),
("Indonésia"),
("Inglaterra"),
("Irlanda"),
("Islândia"),
("Israel"),
("Itália"),
("Jamaica"),
("Japão"),
("Jordânia"),
("Kuwait"),
("Latvia"),
("Líbano"),
("Liechtenstein"),
("Lituânia"),
("Luxemburgo"),
("Macau"),
("Macedônia"),
("Madagascar"),
("Malásia"),
("Malaui"),
("Mali"),
("Malta"),
("Marrocos"),
("Martinica"),
("Mauritânia"),
("Mauritius"),
("México"),
("Moldova"),
("Mônaco"),
("Montserrat"),
("Nepal"),
("Nicarágua"),
("Niger"),
("Nigéria"),
("Noruega"),
("Nova Caledônia"),
("Nova Zelândia"),
("Omã"),
("Palau"),
("Panamá"),
("Papua-nova Guiné"),
("Paquistão"),
("Peru"),
("Polinésia Francesa"),
("Polônia"),
("Porto Rico"),
("Portugal"),
("Qatar"),
("Quênia"),
("Rep. Dominicana"),
("Rep. Tcheca"),
("Reunion"),
("Romênia"),
("Ruanda"),
("Rússia"),
("Saipan"),
("Samoa Americana"),
("Senegal"),
("Serra Leone"),
("Seychelles"),
("Singapura"),
("Síria"),
("Sri Lanka"),
("St. Kitts & Nevis"),
("St. Lúcia"),
("St. Vincent"),
("Sudão"),
("Suécia"),
("Suiça"),
("Suriname"),
("Tailândia"),
("Taiwan"),
("Tanzânia"),
("Togo"),
("Trinidad & Tobago"),
("Tunísia"),
("Turquia"),
("Ucrânia"),
("Uganda"),
("Uruguai"),
("Venezuela"),
("Vietnã"),
("Zaire"),
("Zâmbia"),
("Zimbábue");


INSERT INTO `estado` (`nome`, `sigla`) VALUES
("Acre", "AC"),
("Alagoas", "AL"),
("Amapá", "AP"),
("Amazonas", "AM"),
("Bahia", "BA"),
("Ceará", "CE"),
("Distrito Federal", "DF"),
("Espírito Santo", "ES"),
("Goiás", "GO"),
("Maranhão", "MA"),
("Mato Grosso", "MT"),
("Mato Grosso do Sul", "MS"),
("Minas Gerais", "MG"),
("Pará", "PA"),
("Paraíba", "PB"),
("Paraná", "PR"),
("Pernambuco", "PE"),
("Piauí", "PI"),
("Rio de Janeiro", "RJ"),
("Rio Grande do Norte", "RN"),
("Rio Grande do Sul", "RS"),
("Rondônia", "RO"),
("Roraima", "RR"),
("Santa Catarina", "SC"),
("São Paulo", "SP"),
("Sergipe", "SE"),
("Tocantins", "TO");

INSERT INTO `mes` (`nome`) VALUES
("Janeiro"),
("Fevereiro"),
("Março"),
("Abril"),
("Maio"),
("Junho"),
("Julho"),
("Agosto"),
("Setembro"),
("Outubro"),
("Novemmbro"),
("Dezembro");

INSERT INTO campus (sigla, nome) VALUES
("AC", "Acaraú"),
("AP", "Acopiara"),
("AR", "Aracati "),
("BT", "Baturité"),
("BV", "Boa Viagem"),
("CM", "Camocim"),
("CN", "Canindé"),
("CC", "Caucaia"),
("CD", "Cedro"),
("CS", "Crateús"),
("CT", "Crato"),
("FT", "Fortaleza"),
("GR", "Guaramiranga"),
("HZ", "Horizonte"),
("IG", "Iguatu"),
("IT", "Itapipoca"),
("JB", "Jaguaribe"),
("JR", "Jaguaruana"),
("JN", "Juazeiro do Norte"),
("LN", "Limoeiro do Norte"),
("MC", "Maracanaú"),
("MR", "Maranguape"),
("MB", "Mombaça"),
("MV", "Morada Nova"),
("PR", "Paracuru"),
("PC", "Pecém"),
("PI", "Polo de Inovação Fortaleza"),
("QX", "Quixadá "),
("RT", "Reitoria"),
("SB", "Sobral"),
("TN", "Tabuleiro do Norte"),
("TU", "Tauá"),
("TG", "Tianguá"),
("UJ", "Ubajara "),
("UM", "Umirim");

INSERT INTO escolaridade (nome) VALUES
("Analfabeto"),
("Fundamental Incompleto"),
("Fundamental Completo"),
("Médio Incompleto"),
("Médio Completo"),
("Superior Incompleto"),
("Superior Completo");


--EXPANDIR OS INSERTS: TER PELO MENOS 10 DE CADA
INSERT INTO `administrador`(`nome`, `cpf`, `e_mail`, `senha`) 
VALUES ("Anny Beatriz Carlos de Souza",94578438921,"annybeatriz@gmail.com",1234);

INSERT INTO `cidade`(`nome`, `fk_estado_id`) 
VALUES ("Acopiara",1);

INSERT INTO `endereco`(`cep`, `logradouro`, `numero`, `complemento`, `fk_cidade_id`, `fk_estado_id`, `fk_pais_id`)
VALUES (63560000,"Sitio Vaca",161,"Zona Rural",1,1,1);

INSERT INTO `evento`(`nome`) 
VALUES ("Palestra");

INSERT INTO `acao`(`datainicial`, `nome`, `fk_endereco_id`, `fk_evento_id`, `numero_de_vagas`, `datafinal`) 
VALUES (20191203,"Palestra sobre Empreendedorismo",1,1,120,20191225);

INSERT INTO `usuario`(`e_mail`, `nome`, `cpf`, `fk_endereco_id`, `fk_evento_id`) 
VALUES ("rogerios2@gmail.com","José Rogério de Lima e Silva",12569321345,1,1);

INSERT INTO `inscricao`(`carga_horaria`, `fk_evento_id`, `fk_acao_id`, `fk_usuario_id`) 
VALUES (20,1,1,1);

INSERT INTO `tipoevento`(`descricao`) 
VALUES ("Palestra sobre Tecnologia de Informática");