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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO atendimento VALUES("11","10","4","3","2","2019-11-11","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-09","S","usuária natural colors quartzo.","A","1","HIDROCOR (JADE)");
INSERT INTO atendimento VALUES("12","12","4","4","2","2019-11-11","-11.25","-11.00","- 0.50","- 0.75","45","170","","","","","","","","","","","-10.00","- 9.50","-10.00","","","","","","","","","2019-11-09","S","COM 6 ANOS DE IDADE FEZ TRATAMENTO PARA GLAUCOMA
NO DIA LEVOU TESTE OD: OAYS / OE BIOFINITY - USAR ","A","0","OASYS V.S");
INSERT INTO atendimento VALUES("13","13","4","3","2","2019-11-13","","","","","","","","","","","","","","","","","+ 1.75","+ 3.50","+ 1.75","","","","","","8.50","8.50","","2019-11-16","S","CADASTRO FEITO PELA ORDEM DE SERVIÇO DO DIA 13/11/2019","A","1","MAGIC TOP  VERDE - DIAM. 14.2");



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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO cliente VALUES("4","MARCOS ABREU CARNEIRO","46201211187","927467","1969-07-17","QI 7 CONJUNTO R CASA 54","GUARA  1 ","BRASILIA","DF","61996718515","61996718515","marcos.a.carneiro@gmail.com","A");
INSERT INTO cliente VALUES("5","BRUNO PINHEIRO MACHADO RODRIGUES","57992002172","1303429","1974-03-15","CONDOMINIO LAGO SUL 2 CJ 1 CS 23","LAGO SUL","BRASILIA","DF","61984279000","6198479000","brunopmrodrigues@gmail.com","A");
INSERT INTO cliente VALUES("6","DANIEL MIELE AMADO","04159478476","2388454","1981-12-05","SRIA AE 4 GUARA 2","GUARA 2 ","BRASILIA","DF","61992807878","61992807878","daniel.mieleamado@gmail.com","A");
INSERT INTO cliente VALUES("8","Jaqueline Raquel Correia Gomes","","","1990-11-30","CNB 01 lote 08 lojas 04 /05","Taguatinga","Brasilia","DF","","","","A");
INSERT INTO cliente VALUES("9","AIRTON DE ARAUJO SOUZA","02609494181","2511762","1990-06-30","QNM 11 CONJ. C CASA 45","CEILANDIA","BRASILIA","DF","35785596","61992458970","AIRTON@GMAIL.COM","A");
INSERT INTO cliente VALUES("10","KATIA BRAGA DE CARVALHO","89756568100","","1983-03-13","SHM QD 11 TORRE E4 APT 13","MANGUEIRAL","BRASILIA","DF","","61992179833","katiaabv1313@gmail.com","A");
INSERT INTO cliente VALUES("11","JULIO SIMIAO BRITO","","","1985-01-11","","","","DF","","61982251451","","A");
INSERT INTO cliente VALUES("12","FABIO RAFAEL FRANCA CHADU","71968881115","","0000-00-00","RESIDENCIAL FORMOSO I QD 11 CH. 2 BL D APTO 101","VALPARAISO","BRASILIA","DF","","99964 0558","fabiochadu@gmail.com","A");
INSERT INTO cliente VALUES("13","MARGARIDA ALVES BASTOS","","","1111-11-11","","","","DF","","","","A");



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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO medico VALUES("3","Medico padrao","123456789","Clinica Vida","","A");
INSERT INTO medico VALUES("4","KLEBER PINHO SOUZA","7848","--------------------","GO","A");



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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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



