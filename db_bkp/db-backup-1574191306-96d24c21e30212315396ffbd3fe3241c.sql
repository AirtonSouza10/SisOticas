DROP TABLE IF EXISTS atendimento;

CREATE TABLE `atendimento` (
  `IdAtendimento` int(11) NOT NULL AUTO_INCREMENT,
  `Cliente_IdCliente` int(11) NOT NULL,
  `Tecnico_IdTecnico` int(11) NOT NULL,
  `Medico_IdMedico` int(10) NOT NULL,
  `Empresa_IdEmpresa` int(11) NOT NULL,
  `DataAtendimento` date DEFAULT NULL,
  `REsfericoOD` varchar(6) DEFAULT NULL,
  `REsfericoOE` varchar(6) DEFAULT NULL,
  `RCilindricoOD` varchar(6) DEFAULT NULL,
  `RCilindricoOE` varchar(6) DEFAULT NULL,
  `REixoOD` varchar(6) DEFAULT NULL,
  `REixoOE` varchar(6) DEFAULT NULL,
  `RAvOD` varchar(6) DEFAULT NULL,
  `RAvOE` varchar(6) DEFAULT NULL,
  `RAmbosOlhos` varchar(6) DEFAULT NULL,
  `RAdicao` varchar(10) DEFAULT NULL,
  `CHorizontalOD` varchar(6) DEFAULT NULL,
  `CHorizontalOE` varchar(6) DEFAULT NULL,
  `CVerticalOD` varchar(6) DEFAULT NULL,
  `CVerticalOE` varchar(6) DEFAULT NULL,
  `CEixoOD` varchar(6) DEFAULT NULL,
  `CEixoOE` varchar(6) DEFAULT NULL,
  `LCEsfericoOD` varchar(6) DEFAULT NULL,
  `LCEsfericoOE` varchar(6) DEFAULT NULL,
  `LCCilindricoOD` varchar(6) DEFAULT NULL,
  `LCCilindricoOE` varchar(6) DEFAULT NULL,
  `LCEixoOD` varchar(6) DEFAULT NULL,
  `LCEixoOE` varchar(6) DEFAULT NULL,
  `LCAvOD` varchar(6) DEFAULT NULL,
  `LCAvOE` varchar(6) DEFAULT NULL,
  `LCCBOD` varchar(6) NOT NULL,
  `LCCBOE` varchar(6) NOT NULL,
  `LCAmbosOlhos` varchar(10) DEFAULT NULL,
  `DataEntrega` date DEFAULT NULL,
  `UsuarioDeLentes` varchar(1) DEFAULT NULL,
  `Observacoes` varchar(100) DEFAULT NULL,
  `Status_2` varchar(1) DEFAULT NULL,
  `produto_idproduto` int(11) DEFAULT '1',
  `Produto2` varchar(45) NOT NULL,
  PRIMARY KEY (`IdAtendimento`,`Cliente_IdCliente`,`Tecnico_IdTecnico`,`Medico_IdMedico`,`Empresa_IdEmpresa`),
  KEY `Cliente_IdCliente` (`Cliente_IdCliente`,`Empresa_IdEmpresa`),
  KEY `Tecnico_IdTecnico` (`Tecnico_IdTecnico`),
  KEY `Medico_IdMedico` (`Medico_IdMedico`),
  KEY `fk_produto` (`produto_idproduto`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO atendimento VALUES("11","10","4","3","2","2019-11-11","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-09","S","usuária natural colors quartzo.","A","1","HIDROCOR (JADE)");
INSERT INTO atendimento VALUES("12","12","4","4","2","2019-11-11","-11.25","-11.00","- 0.50","- 0.75","45","170","","","","","","","","","","","-10.00","- 9.50","-10.00","","","","","","","","","2019-11-09","S","COM 6 ANOS DE IDADE FEZ TRATAMENTO PARA GLAUCOMA
NO DIA LEVOU TESTE OD: OAYS / OE BIOFINITY - USAR ","A","0","OASYS V.S");
INSERT INTO atendimento VALUES("13","13","4","3","2","2019-11-13","","","","","","","","","","","","","","","","","+ 1.75","+ 3.50","+ 1.75","","","","","","8.50","8.50","","2019-11-16","S","CADASTRO FEITO PELA ORDEM DE SERVIÇO DO DIA 13/11/2019","A","1","MAGIC TOP  VERDE - DIAM. 14.2");
INSERT INTO atendimento VALUES("14","14","4","3","2","2019-11-14","- 2.50","- 4.25","- 1.50","- 0.75","60","145","","","","+1.50","","","","","","","- 2.50","","- 2.50","","60","","","","","","","2019-11-13","S","SOMENTE 1 CX PARA LONGE OD.","A","8","");
INSERT INTO atendimento VALUES("15","15","4","3","2","2019-11-14","- 2.00","- 1.75","- 0.50","- 0.50","155","35","","","","","","","","","","","- 2.00","- 1.75","- 2.00","","","","","","","","","2019-11-13","S","","A","1","HIDROCOR ( SEM BORDADAS ) - BÚZIOS");
INSERT INTO atendimento VALUES("16","16","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-19","S","     CADASTRO ANTERIOR: OP 60  (-8.50 / -7.50) CB 8.50 - 
     LENTES ANUAIS ESTAVA IRRITANDO (TINH","A","1","");
INSERT INTO atendimento VALUES("17","17","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-16","S","","A","11","LUNARE MENSAL GREEN");
INSERT INTO atendimento VALUES("18","18","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","","+22.5","","","","","","","","","","2019-11-19","S","AIR OPTIX MULTIFOCAl +2.25/HI  --- SEGUNDA ALTERNATIVA +2,50/HI - TESTE CX DE PROVA","A","1","AIR OPTIX MULTFOCAL +2,25/HI");
INSERT INTO atendimento VALUES("19","19","4","5","2","2019-11-19","- 2.75","- 2.75","- 0.50","- 0.50","10","140","","","","","42.75","42.50","43.00","43.25","","","- 3.50","- 2.75","- 3.50","","","","","","","","","2019-11-18","S","TESTE COM AS LENTES OASYS E LEVOU.","A","14","");
INSERT INTO atendimento VALUES("20","20","4","5","2","2019-11-19","+ 2.75","+ 2.00","","","","","","","","+2.75","41.50","42.00","43.00","43.00","","","+ 5.00","+ 2.50","+ 5.00","","","","","","","","","2019-11-21","N","18/11/19 TEATE BASCULA, OLHO DOMINANTE OE. TESTE COM AIR OPTIX HYDRA HYDRA GLYDE","A","15","");
INSERT INTO atendimento VALUES("21","21","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","- 4.50","- 4.75","- 4.50","","","","","","","","","2019-11-18","N","APRENDEU A MANUSEAR COM UMA DE TESTE E LEVOU PARA TREINAR EM CASA. TEVE MUITA 
DIFICULDADE DE COLOC","A","6","");
INSERT INTO atendimento VALUES("22","22","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-09","S","","A","19","MEL");



DROP TABLE IF EXISTS cliente;

CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `RG` varchar(30) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Logradouro` varchar(100) DEFAULT NULL,
  `Bairro` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `Telefone` varchar(11) DEFAULT NULL,
  `Celular` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO cliente VALUES("4","MARCOS ABREU CARNEIRO","46201211187","927467","1969-07-17","QI 7 CONJUNTO R CASA 54","GUARA  1 ","BRASILIA","DF","61996718515","61996718515","marcos.a.carneiro@gmail.com","A");
INSERT INTO cliente VALUES("5","BRUNO PINHEIRO MACHADO RODRIGUES","57992002172","1303429","1974-03-15","CONDOMINIO LAGO SUL 2 CJ 1 CS 23","LAGO SUL","BRASILIA","DF","61984279000","6198479000","brunopmrodrigues@gmail.com","A");
INSERT INTO cliente VALUES("6","DANIEL MIELE AMADO","04159478476","2388454","1981-12-05","SRIA AE 4 GUARA 2","GUARA 2 ","BRASILIA","DF","61992807878","61992807878","daniel.mieleamado@gmail.com","A");
INSERT INTO cliente VALUES("8","Jaqueline Raquel Correia Gomes","","","1990-11-30","CNB 01 lote 08 lojas 04 /05","Taguatinga","Brasilia","DF","","","","A");
INSERT INTO cliente VALUES("9","AIRTON DE ARAUJO SOUZA","02609494181","2511762","1990-06-30","QNM 11 CONJ. C CASA 45","CEILANDIA","BRASILIA","DF","35785596","61992458970","AIRTON@GMAIL.COM","A");
INSERT INTO cliente VALUES("10","KATIA BRAGA DE CARVALHO","89756568100","","1983-03-13","SHM QD 11 TORRE E4 APT 13","MANGUEIRAL","BRASILIA","DF","","61992179833","katiaabv1313@gmail.com","A");
INSERT INTO cliente VALUES("11","JULIO SIMIAO BRITO","","","1985-01-11","","","","DF","","61982251451","","A");
INSERT INTO cliente VALUES("12","FABIO RAFAEL FRANCA CHADU","71968881115","","0000-00-00","RESIDENCIAL FORMOSO I QD 11 CH. 2 BL D APTO 101","VALPARAISO","BRASILIA","DF","","99964 0558","fabiochadu@gmail.com","A");
INSERT INTO cliente VALUES("13","MARGARIDA ALVES BASTOS","","","1111-11-11","","","","DF","","992717747","","A");
INSERT INTO cliente VALUES("14","HAIDEIA PASSOS OLIVEIRA","49461273134","","1970-12-19","SQN 314 BL A APTO 602","ASA NORTE","BRASILIA","DF","30379037","98211 2966","","A");
INSERT INTO cliente VALUES("15","PATRICK MARLON SILVA REIS","04937765167","","1995-09-30","QD 02 CONJ. B-5 CASA 02","SOBRADINHO SI","BRASILIA","DF","","99203 9889","","A");
INSERT INTO cliente VALUES("16","JOSSYLEA GOMES DA SOLVA","","","1978-09-05","QI 13 CONJ. 6 CASA 04","PONTE ALTA","BRASÍLIA","DF","","98108 3584","","A");
INSERT INTO cliente VALUES("17","INAUE  DE FARIAS BARROS","","","1995-09-23","ESPANHA----","","","DF","","34632035520","","A");
INSERT INTO cliente VALUES("18","HELOIZA VASCONCELLOS","02114840751","","1970-12-08","QMSW QD 05 LT 09 APTO 248","SUDOESTE","BRASILIA","DF","","99921 0812","heloizavasconcellos15@gmail.com","A");
INSERT INTO cliente VALUES("19","LUIZA FERNANDES RATTO","","","2006-04-21","","","","DF","","99691 4146","","A");
INSERT INTO cliente VALUES("20","ANA MARIA FERNANDES RATTO","","","1967-02-16","","","","DF","","98105 8866","","A");
INSERT INTO cliente VALUES("21","JOAO PEDRO DA SILVA","","","1999-08-23","QD 102 LT 05 APTO 201","AGUAS CLARAS","BRASILIA","DF","3532 0899","9821 11331","","A");
INSERT INTO cliente VALUES("22","MARCELO HENRIQUE DE SOUSA RODRIGUES","","","2007-08-19","QD 03 CONJ. 6 LT 06 BL M APTO 404","PARANOA PARQUE","BRASILIA","DF","","99109 5439","","A");
INSERT INTO cliente VALUES("23","CLEONICE BARBOSA DE ANDRADE","","","2019-11-09","","","","DF","","99946 6218","","A");



DROP TABLE IF EXISTS empresa;

CREATE TABLE `empresa` (
  `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `Razao` varchar(45) DEFAULT NULL,
  `CNPJ` varchar(14) DEFAULT NULL,
  `Inscricao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdEmpresa`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO empresa VALUES("1","OTICAS BRASILEIRAS LTDA EPP","22467374000154","0772250800189");
INSERT INTO empresa VALUES("2","OTICAS BRASIL LTDA EPP","00384255000448","0731859400357");
INSERT INTO empresa VALUES("3","OTICAS ALM EIRELI EPP","30181683000191","0785411400154");
INSERT INTO empresa VALUES("4","OTICAS MLN EIRELI","30165255000175","0785386800123");



DROP TABLE IF EXISTS medico;

CREATE TABLE `medico` (
  `IdMedico` int(10) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `CRM` varchar(45) DEFAULT NULL,
  `Clinica` varchar(100) DEFAULT NULL,
  `Obs` varchar(100) DEFAULT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IdMedico`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO medico VALUES("3","Medico padrao","123456789","Clinica Vida","","A");
INSERT INTO medico VALUES("4","KLEBER PINHO SOUZA","7848","--------------------","GO","A");
INSERT INTO medico VALUES("5","ROBSON  - PACINI","","CLINICA PACINI","","A");



DROP TABLE IF EXISTS produto;

CREATE TABLE `produto` (
  `IdProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(45) DEFAULT NULL,
  `Marca` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Cor` varchar(45) DEFAULT NULL,
  `Obs` varchar(100) DEFAULT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IdProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO produto VALUES("1","Nenhum produto selecionado","s/n","s/n","s/n","s/n","A");
INSERT INTO produto VALUES("3","ACUVUE -  2","JOHNSON & JOHNSON","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("4","ACUVUE OAYS V.S","JOHSON & JOHNSON","DESCATÁVEL","INC.","","A");
INSERT INTO produto VALUES("5","ACUVUE OASYS TORIC","JOHSON & JOHSON","DESCARTÁVEL","INC","","A");
INSERT INTO produto VALUES("6","ACUVUE -  1 DAY","JOHNSON & JOHNSON","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("7","ACUVUE OASYS TRANSITIONS","JOHNSON & JOHNSON","DESCARTÁVEL","TRANSITIONS","","A");
INSERT INTO produto VALUES("8","SOFLENS TORIC","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("9","PUREVISION - 2   V.S","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("10","PUREVISION - 2 TORIC","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("11","LUNARE COLOR","BAUSH & LOMB","DESCARTÁVEL","","","A");
INSERT INTO produto VALUES("12","SOFLENS 66   V.S","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("14","OASYS","JHONSON & JHONSON","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("15","AIR OPTIX HYDRA GLYDE","ALCON","MENSAL","INC.","","A");
INSERT INTO produto VALUES("16","AIR OPTIX MULTIFOCAL","ALCON","MENSAL","INC.","","A");
INSERT INTO produto VALUES("17","AIR OPTIX TORICA","ALCON","MENSAL","INC.","","A");
INSERT INTO produto VALUES("18","AIR OPTTIX COLOR","ALCON","MENSAL","COLORIDA","","A");
INSERT INTO produto VALUES("19","NATURAL VISION","","MENSAL","COLOR","","A");



DROP TABLE IF EXISTS tecnico;

CREATE TABLE `tecnico` (
  `IdTecnico` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `Senha` varchar(100) DEFAULT NULL,
  `Perfil` varchar(45) NOT NULL,
  `Stattus` varchar(1) DEFAULT NULL,
  `empresa_idempresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTecnico`),
  KEY `fk_idempresa` (`empresa_idempresa`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tecnico VALUES("1","Administrador","02609494181","202cb962ac59075b964b07152d234b70","Administrador","A","4");
INSERT INTO tecnico VALUES("3","Cylene Fernandes","00575884142","3db11d259a9db7fb8965bdf25ec850b9","Tecnico","A","2");
INSERT INTO tecnico VALUES("4","Katia Regina dos Santos","57888647120","202cb962ac59075b964b07152d234b70","Tecnico","A","2");



