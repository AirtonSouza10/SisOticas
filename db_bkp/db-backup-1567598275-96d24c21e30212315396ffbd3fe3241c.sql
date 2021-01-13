DROP TABLE IF EXISTS atendimento;

CREATE TABLE `atendimento` (
  `IdAtendimento` int(11) NOT NULL AUTO_INCREMENT,
  `Cliente_IdCliente` int(11) NOT NULL,
  `Tecnico_IdTecnico` int(11) NOT NULL,
  `Medico_IdMedico` int(10) unsigned zerofill NOT NULL,
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
  `produto_idproduto` int(11) DEFAULT NULL,
  `Produto2` varchar(45) NOT NULL,
  PRIMARY KEY (`IdAtendimento`,`Cliente_IdCliente`,`Tecnico_IdTecnico`,`Medico_IdMedico`,`Empresa_IdEmpresa`),
  KEY `Cliente_IdCliente` (`Cliente_IdCliente`,`Empresa_IdEmpresa`),
  KEY `Tecnico_IdTecnico` (`Tecnico_IdTecnico`),
  KEY `Medico_IdMedico` (`Medico_IdMedico`),
  KEY `fk_produto` (`produto_idproduto`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO atendimento VALUES("1","1","2","0000000002","1","2019-08-30","1.00","1.00","2.75","3.75","4.00","1.00","2.11","5.00","6.00","7.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","8.00","9.00","9.00","8.00","2019-08-30","S","AVBCSS","A","1","aCUVUES 2");
INSERT INTO atendimento VALUES("2","1","1","0000000001","1","2019-09-04","1.00","1.00","","3.75","","1.00","","","6.00","7.00","","","","","","","","8.00","","","","","","","","","8.00","2019-09-05","S","","A","1","Optogel Torica");



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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO cliente VALUES("1","Airton de Araujo Souza","02609494181","2511762","2019-08-30","Setor SAGOCA apt 1008B","Taguatinga","Bras?lia","UF","992458970","992458970","airtonnwa2009@gmail.com","A");
INSERT INTO cliente VALUES("2","Cleiton de Araujo souza","1254666544","554455","2019-08-30","ABC Regional quadra 07 lote 05","Ceilandia","Brasilia","DF","992458977","992145888","cleitonsouza@gmail.com","A");
INSERT INTO cliente VALUES("3","Jose Bonifacio R. de Souza","38715821315","2545555","2019-08-30","Agus lindas quada 03 33","Jardim Aguas lindas 2","Aguas Lindas","GO","222222","222222","jose@gmail.com","A");



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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO medico VALUES("1","Ariovaldo bezerra","2225544","vida","sfadf1222","A");
INSERT INTO medico VALUES("2","Airton Souzasss","56457844","Vitoria regia4444","abc4dgfg","A");



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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO produto VALUES("1","Acuvue Oasys","Johnson","Colorida","Azul","linda","A");
INSERT INTO produto VALUES("2","Acuvue 3","Johnson0454","Colololo","Azulbl","12345469897","A");



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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tecnico VALUES("1","Administrador","02609494181","202cb962ac59075b964b07152d234b70","Administrador","A","4");
INSERT INTO tecnico VALUES("2","Airton de Araujo Souzab","02850477107","e10adc3949ba59abbe56e057f20f883e","Tecnico","A","4");



