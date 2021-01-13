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
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

INSERT INTO atendimento VALUES("11","10","4","3","2","2019-11-11","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-09","S","usuária natural colors quartzo.","A","1","HIDROCOR (JADE)");
INSERT INTO atendimento VALUES("12","12","4","4","2","2019-11-11","-11.25","-11.00","- 0.50","- 0.75","45","170","","","","","","","","","","","-10.00","- 9.50","-10.00","","","","","","","","","2019-11-09","S","COM 6 ANOS DE IDADE FEZ TRATAMENTO PARA GLAUCOMA
NO DIA LEVOU TESTE OD: OAYS / OE BIOFINITY - USAR ","A","0","OASYS V.S");
INSERT INTO atendimento VALUES("13","13","4","3","2","2019-11-13","","","","","","","","","","","","","","","","","+ 1.75","+ 3.50","+ 1.75","","","","","","8.50","8.50","","2019-11-16","S","CADASTRO FEITO PELA ORDEM DE SERVIÇO DO DIA 13/11/2019","A","1","MAGIC TOP  VERDE - DIAM. 14.2");
INSERT INTO atendimento VALUES("14","14","4","3","2","2019-11-14","- 4.25","- 4.25","- 1.50","- 0.75","60","145","","","","+1.50","","","","","","","- 3.00","","- 3.00","","60","","","","","","","2019-11-13","S","SOMENTE 1 CX PARA LONGE OD.  USA SOFLENS MULTIF. OE, FEITO EM CLINICA","A","8","");
INSERT INTO atendimento VALUES("15","15","4","3","2","2019-11-14","- 2.00","- 1.75","- 0.50","- 0.50","155","35","","","","","","","","","","","- 2.00","- 1.75","- 2.00","","","","","","","","","2019-11-13","S","","A","1","HIDROCOR ( SEM BORDADAS ) - BÚZIOS");
INSERT INTO atendimento VALUES("16","16","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-19","S","     CADASTRO ANTERIOR: OP 60  (-8.50 / -7.50) CB 8.50 - 
     LENTES ANUAIS ESTAVA IRRITANDO (TINH","A","1","");
INSERT INTO atendimento VALUES("17","17","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-16","S","","A","11","LUNARE MENSAL GREEN");
INSERT INTO atendimento VALUES("18","18","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-12-02","S","AIR OPTIX MULTIFOCAl    +2,50/HI - TESTE CX DE PROVA","A","1","AIR OPTIX MULTFOCAL +2,50/HI");
INSERT INTO atendimento VALUES("40","42","4","3","2","2019-12-03","","","","","","","","","","","43.50","43.00","43.00","43.75","",""," PL"," PL"," PL","","","","","","","","","2019-12-03","N","","A","1","HIDROCOR BUZIOS");
INSERT INTO atendimento VALUES("19","19","4","5","2","2019-11-19","- 2.75","- 2.75","- 0.50","- 0.50","10","140","","","","","42.75","42.50","43.00","43.25","","","- 3.50","- 2.75","- 3.50","","","","","","","","","2019-11-18","S","TESTE COM AS LENTES OASYS E LEVOU.","A","14","");
INSERT INTO atendimento VALUES("20","20","4","5","2","2019-11-19","+ 2.75","+ 2.00","","","","","","","","+2.75","41.50","42.00","43.00","43.00","","","+ 5.00","+ 2.50","+ 5.00","","","","","","","","","2019-11-21","N","18/11/19 TEATE BASCULA, OLHO DOMINANTE OE. TESTE COM AIR OPTIX HYDRA HYDRA GLYDE","A","15","");
INSERT INTO atendimento VALUES("21","21","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","- 4.50","- 4.75","- 4.50","","","","","","","","","2019-11-18","N","APRENDEU A MANUSEAR COM UMA DE TESTE E LEVOU PARA TREINAR EM CASA. TEVE MUITA 
DIFICULDADE DE COLOC","A","6","");
INSERT INTO atendimento VALUES("22","22","4","3","2","2019-11-19","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-09","S","","A","19","MEL");
INSERT INTO atendimento VALUES("23","24","4","4","2","2019-11-20","-11.25","-11.00","- 0.50","- 0.75","45","170","","","","","","","","","","","-10.00","- 9.50","-10.00","","","","","","","","","2019-11-09","S","COM 6 ANOS DE IDADE FEZ TRATAMENTO DE GLAUCOMA
TESTE OD OASYS , OE BIOFINITY","A","4","");
INSERT INTO atendimento VALUES("24","25","4","3","2","2019-11-20","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-09","S","","A","11","BLUE GRAY");
INSERT INTO atendimento VALUES("25","26","4","3","2","2019-11-20","+ 1.50","+ 1.50","","","","","","","","+2.25","","","","","","","+ 1.50","+ 3.50","+ 1.50","","","","","","","","","2019-11-07","N","OLHO SECO. OD DOMINANTE. TESTE OD: AIR OPTIX HIDRA GLYDE / OE: AC- 2","A","4","");
INSERT INTO atendimento VALUES("26","11","4","3","2","2019-11-20","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-08","S","GOSTOU ANUAL NATURAL COLORS AVELA.","A","19","MEL");
INSERT INTO atendimento VALUES("27","27","4","3","2","2019-11-20","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-08","S","","A","19","AZUL");
INSERT INTO atendimento VALUES("28","28","4","3","2","2019-11-20","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-08","S","","A","19","MEL");
INSERT INTO atendimento VALUES("29","31","4","4","2","2019-11-21","- 0.25","-11.00","- 1.75","- 0.75","25","180","","","","+1.00","43.75","43.25","44.12","43.62","10","180","- 0.25","- 8.50","- 0.25","- 0.75","25","180","","","","","","2020-01-20","S","RX OE VISAO SUBNORMAL .
TESTE COM ARMAÇÃO DE PROVA","A","1","OPTOGEL TORICA VERDE 8.50");
INSERT INTO atendimento VALUES("30","32","4","3","2","2019-11-23","- 3.75","- 1.00","","","","","","","","","","","","","","","- 3.75","- 0.50","- 3.75","","","","","","","","","2019-11-22","S","","A","0","HIDROCOR BUZIOS");
INSERT INTO atendimento VALUES("31","33","4","3","2","2019-11-25","- 1.50","- 1.25","- 1.25","- 1.25","175","170","","","","+2.00","","","","","","","- 1.50","","- 1.50","","180","","","","","","","2019-11-23","S","TESTE; OD: -1,50 - 1,25 X 180 (AIR OPTIX)  OE: TESTE LENTE DA CLIENTE: OASYS - 1.00 - 1.25 X 170","A","17","");
INSERT INTO atendimento VALUES("32","29","4","3","2","2019-11-25","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-08","S","GOSTOU NATURAL VISION VERDE ELLEGANT","A","19","NATURAL VISION MEL");
INSERT INTO atendimento VALUES("33","35","4","3","2","2019-11-25","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-08","S","ESTAVA COM OLHOS HIPERÊMICOS","A","1","NATURAL VISION MEL");
INSERT INTO atendimento VALUES("34","36","4","3","2","2019-11-25","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-08","S","","A","1","NATURAL VISION VERDE ELLEGANT");
INSERT INTO atendimento VALUES("35","32","4","3","2","2019-11-25","- 1.00","- 1.00","","","","","","","","","","","","","","","- 3.75","- 0.50","- 3.75","","","","","","","","","2019-11-22","S","OE JÁ USA -0,50 QUER MANTER ... PARA PERTO - OFTALMO IND. OASYS","A","1","HIDROCOR BUZIOS");
INSERT INTO atendimento VALUES("36","37","4","6","2","2019-11-25","+ 3.00","+ 3.00","- 0.50","- 1.00","100","80","","","","+3.00","","","","","","","","+ 3.00","","- 0.75","","80","","","","","","2019-11-27","S","OD: PERTO    OE: LONGE  TESTE CX DE PROVA","A","1","1 CX OASYS TORICA");
INSERT INTO atendimento VALUES("37","38","4","3","2","2019-11-25","","","","","","","","","","","","","","","","","+ 0.00","+ 0.00","+ 0.00","","","","","","","","","2019-11-22","S","USA AIR OPTIX GEMSTONE GREEN  OD: + 2,25   OE: PL","A","1","HIDROCOR BUZIOS");
INSERT INTO atendimento VALUES("38","39","4","7","2","2019-11-25","- 2.00","- 1.50","- 0.50","- 0.50","75","105","","","","","42.00","41.12","41.00","40.50","65","105","- 2.00","- 1.50","- 2.00","","","","","","","","","2019-11-22","S","PERTO; +0,25-0,50X75     +0,75-0,50X105  ... LC SOMENTE PARA LONGE","A","14","");
INSERT INTO atendimento VALUES("39","41","4","3","2","2019-12-02","","","","","","","","","","","","","","","","","  0.00","  0.00","  0.00","","","","","","","","","2019-12-02","S","","A","1","NATURAL COLORS  OCRE - SOLOTICA");
INSERT INTO atendimento VALUES("41","43","4","3","2","2019-12-03","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-11-29","S","USAVA FRESH LOOK PURE HAZEL. GOSTOU DA LUNARE VERDE E NATURAL VISION CRISTAL","A","1","");
INSERT INTO atendimento VALUES("42","44","4","3","2","2019-12-03","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-11-29","S","GOSTOU DA LUNARE VERDE","A","1","NATURAL VISION BRONZE");
INSERT INTO atendimento VALUES("43","45","4","3","2","2019-12-03","- 1.00","- 1.50","- 0.75","- 0.50","180","150","","","","","40.50","40.25","40.12","41.00","","","","","","","","","","","","","","2019-12-29","S","SÓ ORCAMENTO","A","1","");
INSERT INTO atendimento VALUES("44","46","4","3","2","2019-12-05","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-12-05","N","","A","1","NATURAL VISION DREAM - VERDE");
INSERT INTO atendimento VALUES("45","47","4","3","2","2019-12-07","","","","","","","","","","","","","","","",""," PL."," PL"," PL.","","","","","","","","","2019-12-07","S","","A","1","NATURAL VISION  DIAMANTE");
INSERT INTO atendimento VALUES("46","48","4","3","2","2019-12-07","","","","","","","","","","","41.00","41.87","41.25","41.50","",""," PL"," PL"," PL","","","","","","","","","2019-12-07","N","","A","1","LUNARE VERDE MENSAL");
INSERT INTO atendimento VALUES("47","50","4","3","2","2019-12-16","","","","","","","","","","","","","","","","","","","","","","","","","","","","2019-11-26","N","","A","1","LUNARE MENSAL AZUL");
INSERT INTO atendimento VALUES("48","49","4","3","2","2019-12-16","","","","","","","","","","","","","","","","","- 3.00","- 3.25","- 3.00","","","","","","","","","2019-11-26","S","","A","1","LUNARE ANUAL AZUL");
INSERT INTO atendimento VALUES("49","51","4","3","2","2019-12-16","","","","","","","","","","","","","","","","","- 1.00","- 2.75","- 1.00","","","","","","","","","2019-11-27","S","","A","1","NATURAL COLORS MEL");
INSERT INTO atendimento VALUES("50","52","4","3","2","2019-12-16","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-12-10","S","","A","1","NATURAL VISION ESMERALDA");
INSERT INTO atendimento VALUES("51","53","4","3","2","2019-12-16","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-12-13","S","USAVA A ANOS LIGHT GREEN - NATURAL LOOK","A","1","LUNARE MENSAL BLUE GRAY SII");
INSERT INTO atendimento VALUES("52","55","4","8","2","2019-12-16","- 7.00","- 6.50","- 0.50","- 0.75","10","5","","","","","","","","","","","- 6.50","- 6.50","- 6.50","","","","","","","","","2019-12-10","S","TESTE NA CAIXA DE PROVA","A","1","OASYS V.S");
INSERT INTO atendimento VALUES("53","56","4","3","2","2019-12-16","","","","","","","","","","","45.37","44.87","44.25","43.62","","","","","","","","","","","","","","2019-12-12","S","","A","1","LUNARE MENSAL GREEN SII");
INSERT INTO atendimento VALUES("54","57","4","3","2","2019-12-16","","","","","","","","","","","42.00","40.75","41.25","41.50","",""," PL"," PL"," PL","","","","","","","","","2019-12-05","S","","A","1","MAGIC TOP MEL OCRE 8.80");
INSERT INTO atendimento VALUES("55","58","4","9","2","2019-12-16","- 1.00","- 1.25","- 0.50","","55","","","","","","","","","","","","- 1.00","- 1.25","- 1.00","","","","","","","","","2019-12-07","S","FEZ CIRURGIA HA 4 ANOS,  ERA +-5.00/6.00","A","1","OASYS");
INSERT INTO atendimento VALUES("56","59","4","11","2","2019-12-16","+ 1.75","+ 1.75","- 0.50","- 0.25","90","95","","","","+2.75","43.12","42.50","43.12","42.50","","","+ 1.50","+ 1.75","+ 1.50","","","","","","","","","2019-12-05","S","TEVE SEBORREIA - HA 5 ANOS BLEFAROPLASTIA. 20 ANOS ATRAS USOU LC. NÃO SE ADAPTA BASCULA","A","1","BIOVIEW MULTIF. AD. HI - OD DOMINANTE");
INSERT INTO atendimento VALUES("57","60","4","12","2","2019-12-16","- 1.00","- 1.50","- 2.75","- 2.75","25","160","","","","","","","","","","","- 1.00","- 1.50","- 1.00","- 2.75","30","160","","","","","","2019-12-10","N","FOTO, AS VEZES OLHO SECO","A","1","OAYS TORIC");
INSERT INTO atendimento VALUES("58","61","4","10","2","2019-12-16","-14.75","-14.75","- 1.50","- 1.50","30","140","","","","","42.50","42.75","43.75","43.50","","","-13.00","-13.00","-13.00","","","","","","","","","2019-12-03","S","NO DIA LEVOU -12,00 ACUVUE-2","A","1","");
INSERT INTO atendimento VALUES("59","62","4","3","2","2019-12-16","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-12-06","S","","A","1","LUNARE MENSAL - DARK GREEN");
INSERT INTO atendimento VALUES("60","63","4","13","2","2019-12-16","- 2.00","- 2.00","- 1.25","- 1.25","65","115","","","","+3.00","","","","","",""," PL","- 2.25"," PL","","","","","","","","","2019-12-05","S","OD. P/ PERTO SEM LC - OE. DOMINANTE ","A","1","HIDROCOR AVELA / 2 CX DE NATURAL VISION INC.");
INSERT INTO atendimento VALUES("61","64","4","3","2","2019-12-16","","","","","","","","","","","","","","","",""," PL",""," PL","","","","","","","","","2019-12-11","S","SOMENTE 1 LENTE","A","1","MAGIC TOP AZUL 8.20");
INSERT INTO atendimento VALUES("62","65","4","3","2","2019-12-19","","","","","","","","","","","40.75","40.75","40.75","40.75","",""," PL"," PL"," PL","","","","","","","","","2019-12-19","S","","A","1","AIR OPTIX COLOR PURE HAZEL");
INSERT INTO atendimento VALUES("63","66","4","3","2","2019-12-23","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-12-23","S","","A","1","AIR OPTIX PURE HAZEL");
INSERT INTO atendimento VALUES("64","67","4","14","2","2019-12-26","- 4.25","- 3.50","- 1.75","- 1.00","75","130","","","","+2.00","","","","","","","- 4.00","- 1.50","- 4.00","- 0.75","90","130","","","","","","2019-12-23","S","DOM. OD  ... EIXO OE MELHOR E JÁ USAVA HA 90... SISTEMA BÁSCULA","A","1","BIOFINITY TORICA");
INSERT INTO atendimento VALUES("65","68","4","3","2","2019-12-26","- 0.50","- 0.50","- 0.50","- 1.50","140","55","","","","","42.75","41.75","44.00","44.00","","","- 0.50","- 0.50","- 0.50","- 1.25","","55","","","","","","2019-12-23","S","","C","1","MAGIC TOP VERDE 8.50");
INSERT INTO atendimento VALUES("66","69","4","3","2","2019-12-27","- 2.00","- 2.00","- 0.25","- 0.50","10","30","","","","","45.00","44.50","44.75","44.50","","","- 2.00","- 2.00","- 2.00","","","","","","","","","2019-12-17","S","","A","1","BIOFINITY");
INSERT INTO atendimento VALUES("67","70","4","15","2","2019-12-27","- 3.00","- 3.50","","","","","","","","","44.00","44.00","45.00","45.00","","","- 3.00","- 3.50","- 3.00","","","","","","","","","2019-12-19","S","","A","1","BIOFINITY");
INSERT INTO atendimento VALUES("68","71","4","3","2","2019-12-27","+ 2.25","+ 1.75","- 0.25","","145","","","","","+2.50","","","","","","","+ 4.00","+ 2.25","+ 4.00","","","","","","","","","2019-12-20","N","DOM. OE - BASCULA","A","1","ACUVUE-2");
INSERT INTO atendimento VALUES("69","72","4","3","2","2019-12-27","+ 2.50","+ 2.50","- 1.75","- 1.50","10","170","","","","+1.50","","","","","","","+ 2.75","+ 4.50","+ 2.75","- 1.25","10","170","","","","","","2019-12-23","S","DOM. OD - BASCULA","A","1","BIOFINITY TORIC");
INSERT INTO atendimento VALUES("70","72","4","3","2","2019-12-27","+ 2.50","+ 2.50","- 1.75","- 1.50","10","170","","","","+1.50","","","","","","","+ 2.75","+ 4.50","+ 2.75","- 1.25","10","170","","","","","","2019-12-23","S","DOM. OD - BASCULA","A","1","BIOFINITY TORIC");
INSERT INTO atendimento VALUES("71","73","4","16","2","2019-12-27","- 2.50","- 3.00","- 0.75","- 0.50","50","90","","","","","42.50","42.25","42.25","42.50","","","- 2.75","- 3.25","- 2.75","","","","","","","","","2019-12-10","N","OD - 3,25VDEVIDO QT PARA NÃO DAR BOLHA","A","1","LUNARE ANUAL AZUL SII");
INSERT INTO atendimento VALUES("72","74","4","3","2","2020-01-09","","","","","","","","","","","","","","","",""," PL","- 1.25"," PL","","","","","","","","","1111-11-11","S","","A","1","NATURAL COLORS MEL");
INSERT INTO atendimento VALUES("73","75","4","3","2","2020-01-10"," PL"," PL","","","","","","","","+1.50","37.50","38.00","36.50","36.25","","","+ 1.50"," PL","+ 1.50","","","","","","","","","2020-01-10","S","OE DOM.  REFRAÇÃO: KÁTIA / CIRUGIA REFRATIVA HA 16 ANOS, OUTRA 10 ANOS AO / ESCAVAÇÃO 
ALTERADA FIS","A","1","AIR OPTIX MULTIFOCAL  AD +2.00");
INSERT INTO atendimento VALUES("74","76","4","3","2","2020-01-10","","","","","","","","","","","","","","","","","- 0.50","- 0.25","- 0.50","- 1.25","180","180","","","","","","2020-01-02","N","","A","1","AIR OPTIX TORICA");
INSERT INTO atendimento VALUES("75","77","4","3","2","2020-01-10","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-01-09","S","","A","1","NATURAL VISION - AMBAR");
INSERT INTO atendimento VALUES("76","54","4","3","2","2020-01-14","- 2.00","- 2.00","- 1.00","- 0.75","140","30","","","","","","","","","","","- 1.50","- 2.00","- 1.50","- 0.75","140","30","","","","","","2019-12-20","S","VEIO COM 2 RX DIFERENTES. REFIZ REFRAÇÃO.","A","1","OASYS TÓRICA");
INSERT INTO atendimento VALUES("77","78","4","17","2","2020-01-14","- 2.50","- 3.25","- 1.00","- 1.50","180","160","","","","","42.12","43.50","42.50","42.50","180","130","- 2.50","- 3.25","- 2.50","- 1.25","180","160","","","","","","2019-12-28","S","LEVOU TESTE MIOPIA OPTIX ATÉ CHEGAR


","A","5","");
INSERT INTO atendimento VALUES("78","79","4","18","2","2020-01-14","+ 2.75","+ 2.75","","","","","","","","+2.75","","","","","","","+ 2.75","+ 4.50","+ 2.75","","","","","","","","","2020-01-10","S","RX PARA LC: +2,75 / +4,75","A","0","BIOFINITY");
INSERT INTO atendimento VALUES("79","80","4","13","2","2020-01-14","+ 2.25","+ 2.00","","","","","","","","+2.50","41.00","41.12","40.50","41.75","","","+ 2.00","+ 2.00","+ 2.00","","","","","","","","","2019-12-23","S","INDIQUEI BIOFINITY MULTIFOCAL AD. 2,50 AO DOMINANTES - OD: OE","A","1","");
INSERT INTO atendimento VALUES("80","81","4","3","2","2020-01-14","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-12-21","S","GOSTOU AIR OPTIX BLUE.","A","1","NATURAL VISION - VERDE ELLEGANT");
INSERT INTO atendimento VALUES("81","82","4","3","2","2020-01-14","","","","","","","","","","","","","","","","","- 1.25","","- 1.25","","","","","","","","","2020-01-03","N","OE SEM VISAO. OC.-1,00-0,50X130 - LC SÓ PARA RENOVAR CNH","A","3","");
INSERT INTO atendimento VALUES("82","83","4","19","2","2020-01-14","- 1.50","+ 0.25","- 0.50","- 0.50","135","5","","","","","","","","","","","- 1.50","","- 1.50","","","","","","","","","2019-12-20","S","RX OBS. MONOFOCAIS (17/12/2019)","A","14","");
INSERT INTO atendimento VALUES("83","84","4","20","2","2020-01-14","- 0.50","- 0.25","- 1.00","- 0.75","175","170","","","","","43.75","43.50","44.25","44.50","","","- 0.50","","- 0.50","","180","","","","","","","2019-12-28","S","LEVOU 1 CX ...SOMENTE COM 1 TESTE.","A","17","");
INSERT INTO atendimento VALUES("84","85","4","21","2","2020-01-14","- 1.50","- 1.50","- 0.25","","165","","","","","","","","","","","","- 1.50","- 1.50","- 1.50","","","","","","","","","2019-12-30","S","","A","1","SOLOTICA HIDROCOR IPANEMA");
INSERT INTO atendimento VALUES("85","86","4","22","2","2020-01-15","- 2.75","- 2.25","- 0.50","- 0.50","20","160","","","","","41.25","41.00","40.25","40.75","","","- 2.75","- 2.25","- 2.75","","","","","","","","","2019-12-18","N","","A","1","MAGIC TOP MEL 8.80");
INSERT INTO atendimento VALUES("86","87","4","23","2","2020-01-15","- 3.00","- 3.25","","","","","","","","","","","","","","","- 3.00","- 3.00","- 3.00","","","","","","","","","2019-11-13","N","TESTE - 3,25 OASYS - MÃE/PAI: SANDRA E PAULO","A","4","");
INSERT INTO atendimento VALUES("87","88","4","3","2","2020-01-15","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-11-14","S","","A","1","NATURAL VISION AMBAR");
INSERT INTO atendimento VALUES("88","89","4","3","2","2020-01-15","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-11-14","S","","A","1","NATURAL VISION AMBAR - MENSAL");
INSERT INTO atendimento VALUES("89","90","4","3","2","2020-01-15","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-11-14","S","","A","1","LUNARE DESCART. AZUL SII");
INSERT INTO atendimento VALUES("90","91","4","3","2","2020-01-15","","","","","","","","","","","42.50","42.50","41.75","42.50","","","- 1.00"," PL","- 1.00","- 0.75","","165","","","","","","2019-12-10","S","","A","1","MAGIC TOP V.S / TORICA MEL 8.50");
INSERT INTO atendimento VALUES("91","92","4","3","2","2020-01-15","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2019-11-22","S","TROCOU HIDROCOR ICE POR 4 CX DIAMANTE NAT. VISION","A","1","NATURAL VISION DIAMANTE - 4CX");
INSERT INTO atendimento VALUES("92","93","4","24","2","2020-01-15","- 3.50","- 3.50","- 0.50","","180","","","","","","43.00","43.00","43.00","43.75","","","- 3.50","- 3.50","- 3.50","","","","","","","","","2019-12-18","S","FEZ TESTE COM 1 BIOFINITY - LEVOU 2CX","A","20","");
INSERT INTO atendimento VALUES("93","94","4","3","2","2020-01-15","","","","","","","","","","","","","","","","","- 5.50","- 5.50","- 5.50","","","","","","","","","2020-01-16","S","MÃE: NEUZA   LEVOU SOMENTE 1 UNID.
","A","1","MAGIC TOP VERDE 8.20");
INSERT INTO atendimento VALUES("94","95","4","25","2","2020-01-15","+ 2.75","+ 3.50","- 0.50","","90","","","","","+2.50","43.00","43.00","42.50","42.50","90","0","+ 3.00","+ 6.00","+ 3.00","","","","","","","","","2020-01-14","S","LEVOU TESTE ATÉ CHEGAR
","A","1","SOLOTICA NATURAL COLORS GRAFITE");
INSERT INTO atendimento VALUES("95","96","4","26","2","2020-01-15","- 2.25","- 2.50","","","","","","","","","45.50","45.50","44.00","44.75","90","90","- 2.25","- 2.50","- 2.25","","","","","","","","","2020-01-15","N","","A","4","");
INSERT INTO atendimento VALUES("96","97","4","27","2","2020-01-15","- 1.75","- 1.75","- 1.00","- 1.50","115","95","","","","","","","","","","","- 1.75","- 1.75","- 1.75","- 1.25","120","90","","","","","","2020-01-15","S","LEVOU TESTE -1,75/-2,00 ATÉ CHEGAR","A","17","");
INSERT INTO atendimento VALUES("97","98","4","3","2","2020-01-16","- 3.00","- 3.50","","","","","","","","+1.75","","","","","","","- 3.00","- 1.75","- 3.00","","","","","","","","","2020-01-16","N","CÓPIA ÓCULOS... SOLICITOU LC PARA IR A UM CASAMENTO","A","0","NATURAL VISION INC. DESCART.");
INSERT INTO atendimento VALUES("98","99","4","28","2","2020-01-16","- 2.25","- 2.75","- 1.25","- 1.00","150","180","","","","","42.75","42.00","42.50","42.50","175","0","- 2.25","- 3.25","- 2.25","","150","","","","","","","2020-01-16","S","FEZ SOMENTE OD TÓRICA POR SER  DE MIRA (MILITAR)","A","0","SOFLENS TORIC / V.S");
INSERT INTO atendimento VALUES("99","100","4","29","2","2020-01-17","+ 1.50","+ 1.50","- 1.00","- 1.00","90","80","","","","+2.50","","","","","","","+ 1.25","+ 1.00","+ 1.25","","","","","","","","","2020-01-17","N","OE DOMINANTE... AS LENTES EM AO DOMINANTES.","A","1","MULTIFOCAL BIOFINITY AD.2,50");
INSERT INTO atendimento VALUES("100","101","4","3","2","2020-01-20","- 7.50","- 7.00","","","","","","","","+2.50","","","","","","","- 7.00","- 4.75","- 7.00","","","","","","","","","2020-01-18","S","USAVA -7,00 SÓ PARA LONGE.  OD DOM. BÁSCULA 1ºX- LEVOU SÓ PARA OE - TESTE COM BIOFINITY","A","15","");
INSERT INTO atendimento VALUES("101","102","4","26","2","2020-01-20","- 4.75","- 4.50","- 0.75","","90","","","","","","43.50","43.12","41.75","43.50","90","90","- 4.50","- 4.25","- 4.50","","90","","","","","","","2020-01-18","N","","A","0","BIOFINITY TÓRICA / V.S");
INSERT INTO atendimento VALUES("102","103","4","3","2","2020-01-22","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-01-21","S","","A","0","LUNARE HAZEL ANUAL");
INSERT INTO atendimento VALUES("103","104","4","26","2","2020-01-28","- 2.25","-32.5","- 0.75","- 1.00","180","180","","","","","","","","","","","- 2.25","- 3.25","- 2.25","- 0.75","180","180","","","","","","2020-01-25","S","","A","17","");
INSERT INTO atendimento VALUES("104","105","4","30","2","2020-01-28","- 8.25","- 8.50","- 4.75","- 5.50","25","175","","","","","40.37","40.25","42.50","42.87","20","175","- 7.50","- 7.75","- 7.50","- 4.25","30","180","","","","","","2020-01-22","N","","A","1","OPTOGEL TORICA INC. 8.80");
INSERT INTO atendimento VALUES("105","106","4","3","2","2020-01-28","-17.50","-11.00","- 1.00","- 1.00","70","90","","","","","42.50","43.50","42.25","43.50","25","50","-13.75","-10.00","-13.75","","","","","","8.04","8.04","","2019-12-26","S","26/12/2019 - SOMENTE OD","A","1","ESFERICA XO - DURASIL SOLOTICA DIAM. 9.2");
INSERT INTO atendimento VALUES("106","107","4","31","2","2020-01-28","- 3.50","- 4.25","- 0.50","- 0.75","165","25","","","","","43.00","43.37","43.62","43.75","180","20","- 3.50","- 4.25","- 3.50","","","","","","","","","2020-01-25","S","USAVA SOFLENS 66... LEVOU TESTE DE BIOFINITY","A","20","");
INSERT INTO atendimento VALUES("107","108","4","3","2","2020-02-01","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-02-01","N","","A","1","HIDROCOR IPANEMA ANUAL");
INSERT INTO atendimento VALUES("108","109","4","3","2","2020-02-05","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-02-05","S","","A","1","NATURAL VISION DESCART. ESMERALDA");
INSERT INTO atendimento VALUES("109","110","4","3","2","2020-02-06","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-02-06","S","","A","1","MAGIC TOP TURQUESA 8.20");
INSERT INTO atendimento VALUES("110","111","4","32","2","2020-02-11","- 0.25","- 0.50","- 0.75","- 2.25","90","55","","","","","45.00","43.25","43.12","44.75","90","40","- 0.25","- 0.50","- 0.25","- 2.25","90","60","","","","","","2020-02-11","N","OD CIRURGIA HORDEOLO + - 1ANO... RETORNOU MENOR","A","21","");
INSERT INTO atendimento VALUES("111","112","4","3","2","2020-02-11","","","","","","","","","","","","","","","","","- 0.50","+ 0.50","- 0.50","- 1.25","120","60","","","","","","2020-02-10","S","","A","21","");
INSERT INTO atendimento VALUES("112","113","4","3","2","2020-02-11","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-02-04","S","","A","1","NATURAL VISION BRONZE");
INSERT INTO atendimento VALUES("113","114","4","21","2","2020-02-11","","","","","","","","","","","","","","","","","+ 8.00","+ 6.50","+ 8.00","","","","","","","","","2020-02-01","S","PRIMEIRA VEZ BASCULA","A","20","");
INSERT INTO atendimento VALUES("114","115","4","3","2","2020-02-13","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-02-12","N","","A","1","LUNARE HAZEL");
INSERT INTO atendimento VALUES("115","116","4","3","2","2020-02-14","","","","","","","","","","","","","","","",""," PL"," PL"," PL","","","","","","","","","2020-02-18","N","DUAS SEMANAS ANTES ADQUIRIU HIDROCOR IPANEMA","A","1","AIR OPTIX PURE HAZEL");
INSERT INTO atendimento VALUES("116","118","4","26","2","2020-03-04","- 7.75","- 8.00","- 1.00","- 2.00","80","80","","","","","46.25","46.50","47.00","44.75","","","- 7.00","- 7.50","- 7.00","- 1.75","80","80","","","","","","2020-02-28","S","","A","21","");
INSERT INTO atendimento VALUES("117","119","4","26","2","2020-03-04","","","","","","","","","","","41.00","41.00","41.00","41.00","","","- 1.75","- 2.00","- 1.75","","","","","","","","","2020-02-28","S","","A","1","NATURAL COLORS MEL");
INSERT INTO atendimento VALUES("118","120","4","26","2","2020-03-04","","","","","","","","","","","46.75","43.75","47.00","46.75","","","- 4.75","- 4.50","- 4.75","","","","","","","","","2020-02-21","S","","A","1","NATURAL COLORS MEL");
INSERT INTO atendimento VALUES("119","121","4","26","2","2020-03-04","- 2.00","- 1.25","- 1.50","- 1.75","165","10","","","","","","","","","","","- 2.00","- 1.25","- 2.00","- 1.25","170","10","","","","","","2020-02-01","S","","A","5","");
INSERT INTO atendimento VALUES("120","122","4","26","2","2020-03-04","","","","","","","","","","","","","","","","","-12.00","-10.00","-12.00","","","","","","","","","2020-03-05","S","","A","9","");
INSERT INTO atendimento VALUES("121","123","4","26","2","2020-03-04","","","","","","","","","","","42.25","43.50","41.50","41.50","",""," PL"," PL"," PL","","","","","","","","","2020-02-15","S","","A","1","MAGIC TOP VERDE 8,80");
INSERT INTO atendimento VALUES("122","124","4","33","2","2020-03-04"," PL"," PL","","","","","","","","+1.00","42.50","43.00","42.75","43.50","","","+ 0.75","+ 0.25","+ 0.75","","","","","","","","","2020-01-27","N","","A","1","HIDROCOR BUZIOS");
INSERT INTO atendimento VALUES("123","125","4","26","2","2020-03-04","","","","","","","","","","","43.25","43.12","43.00","44.00","",""," PL"," PL"," PL","","","","","","","","","2020-02-21","S","","A","1","NATURAL COLORS AVELA / MAGIC TOP VERDE 8.50");
INSERT INTO atendimento VALUES("124","126","4","3","2","2020-03-14","- 0.50","- 0.50","- 0.50","- 0.75","125","5","","","","","43.25","43.00","43.25","43.75","0","0","- 0.50","- 0.50","- 0.50","- 0.75","","180","","","","","","0000-00-00","N","","A","0","BIOF. V.S  /  TÓRICA");
INSERT INTO atendimento VALUES("125","127","4","3","2","2020-05-27","","","","","","","","","","","","","","","","","- 7.00","","- 7.00","","","","","","","","","2020-05-27","S","","A","1","OPTIMA FW SII - 1 UNID.");



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
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

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
INSERT INTO cliente VALUES("24","FABIO RAFAEL FRANcA CHADU","71988811 15","","1980-05-17","RESIDENCIAL FORMOS I QD 11 CH 2 BL D APTO 101","VALPARAISO II","BRASILIA","DF","","99964 0558","fabiochadu@gmail.com","A");
INSERT INTO cliente VALUES("25","THAMARA DA SILVA MACHADO","","","1991-05-03","QD 202 CONJ. 07 CASA 19","SAO SEBASTIAO","BRASILIA","DF","","99237 7739","","A");
INSERT INTO cliente VALUES("26","JACQUELINE RAQUEL CORREA GOMES","","","1111-11-11","","","","DF","","","","A");
INSERT INTO cliente VALUES("27","JOSE DO EGITO","","","2019-11-08","","","","DF","","98117 9392","","A");
INSERT INTO cliente VALUES("28","BRENDA GOMES DE JESUS NEVES","70460725157","","1998-11-16","","SAO SEBASTIAO","BRASILIA","DF","","99408 1744","brendamirrord@gmail.com","A");
INSERT INTO cliente VALUES("29","MARCOS RODRIGUES DOS SANTOS","72421010187","","1983-02-24","RUA 10 CONJ. 12 CASA 9","SOBRASINHO II","","DF","","99578 2922","marco.rodriger@gmail.com","A");
INSERT INTO cliente VALUES("30","FABIOLA FRAGA","","","0000-00-00","","","","DF","16 99131661","99236 1939","","A");
INSERT INTO cliente VALUES("31","LILIAN AMORIM DA CUNHA DE CARVALHO","04071996676","","1978-09-04","QD 24 CONJ. B CASA 18","PARANOA","BRASILIA","DF","3026 8354","98457 2557","lilian.cunhadf@hotmail.com","A");
INSERT INTO cliente VALUES("32","Vanderlene Otacilia da Silva Costa","52427145149","","0000-00-00","QNN 24 CONJ. D CASA 21","CEILANDIA","BRASÍLIA","DF","","99948 5321","vandacosta@yahoo.com","A");
INSERT INTO cliente VALUES("33","JANEY NAGLIATTI DE MENDONCA","07003309840","","1969-07-26","SQS 312 BL B APTO 302","ASA SUL","BRASILIA","DF","","99602 2440","janeynagliatti@hotmail.com","A");
INSERT INTO cliente VALUES("35","ANA PAULA LIMA SILVA GOMES","94066930115","","1981-07-15","AV. MARECHAL TEODORO QD 120 CASA 4F SETOR TRADICIONAL SUL","PLANALTINA ","BRASILIA","DF","","99324  3610","","A");
INSERT INTO cliente VALUES("36","FABIANE PEREIRA DE FREITAS","00753245124","","1983-09-15","AV. MARECHAL TEODORO QD 120 CASA 4F SETOR TRADICIONAL","PLANALTINA","BRASILIA","DF","","998108 0553","","A");
INSERT INTO cliente VALUES("37","ALZIRA OLIVEIRA ANDRADE SILVA","","","1954-12-27","SQN 407 BL J APTO 101","ASA NORTE","BRASILIA","DF","","98576 1410","","A");
INSERT INTO cliente VALUES("38","ADRIANA MARIA GIUBERTTI","33373787149","","1965-01-20","QE 02 BL F APTO 201","GUARÁ I","BRASILIA","DF","","98645 7330","","A");
INSERT INTO cliente VALUES("39","WASHINGTON LUIZ PEREIRA DE FARIAS","46299025115","","1969-12-19","RUA ESPIRITO SANTOS CASA 08 VILA PLANALTO","VILA PLANALTO","BRASILIA","DF","33061008","99285 5834","wwluiz@hotmail.com","A");
INSERT INTO cliente VALUES("41","JANDIRA GIL","","","1111-11-11","","","","DF","","99962 5713","","A");
INSERT INTO cliente VALUES("42","JULIANA ISAC CAMPOS","","","1985-05-24","","","","DF","","98417 4017","","A");
INSERT INTO cliente VALUES("43","FERNANDA BARROSO SANTANA","","","1111-11-11","","","","DF","","71982026938","","A");
INSERT INTO cliente VALUES("44","GRAZIELE BORGES DA SILVA LANDIM","","","1998-01-01","","","","DF","","98413 0014","","A");
INSERT INTO cliente VALUES("45","THYAGO GUTIERRE RODRIGUES SANTOS","","","0000-00-00","","","","DF","","","","A");
INSERT INTO cliente VALUES("46","MARIA CARVALHO DOS SANTOS","02183827157","","1999-12-29","","","","DF","","99256 6471","","A");
INSERT INTO cliente VALUES("47","PAULA FONSECA DA SILVA","","","1986-11-16","","","","DF","","99177 4430","","A");
INSERT INTO cliente VALUES("48","ALEXANDRA GONCALVES VEIGA LIMA PAIVA","36773513585","","1995-12-01","QD 301 CONJ. 5 LT 2/5 APTO 203","AGUAS CLARAS","BRASILIA","DF","","98126 5243","","A");
INSERT INTO cliente VALUES("49","ROSE FONSECA","","","1111-11-11","","","","DF","","98502 0589","","A");
INSERT INTO cliente VALUES("50","MARIA ANTONIA MENDINA DE SOUSA","","","1111-11-11","SQSW 104 BL A APARTAMENTO 607","","","DF","","99119 6644","","A");
INSERT INTO cliente VALUES("51","LIVIA OLIVEIRA PINHEIRO","","","1989-07-31","SQN 115BL H APTO 209","ASA NORTE","BRASILIA","DF","","98151 5636","","A");
INSERT INTO cliente VALUES("52","MILENE GROCCI","","","0985-05-08","","","","DF","","98505 2667","","A");
INSERT INTO cliente VALUES("53","GISLENE DE MELLO ARAUJO","","","1111-11-11","C 05 LT 12 APTO 1006 ED. MONACO","TAGUATINGA CENTRO","BRASILIA","DF","","99192 0027","","A");
INSERT INTO cliente VALUES("54","KARITA KARIELLY CARDOSO MARQUES","04393383109","","1990-09-01","QD 09 AE 13 ED. VICTOR CLAIR","SOBRADINHO","","DF","","99244 6899","","A");
INSERT INTO cliente VALUES("55","POLLYANA LIMA BARRETO","71223479153","","1980-12-24","SQB BL I  302 ","GUARA I","","DF","","99963 7303","","A");
INSERT INTO cliente VALUES("56","SUELLEN NASCIMENTO DE OLIVEIRA","70529347105","","1999-09-01","QD 04 CONJ. 5 LT 6 BL O APTO 202","PARANOA PARQUE","BRASILIA","DF","","","","A");
INSERT INTO cliente VALUES("57","JACKELLINE LUCIA FERREIRA SANTOS","87007827187","","1979-04-30","","","","DF","","98407 4834","","A");
INSERT INTO cliente VALUES("58","BRUNA CRISTINA DA SILVA MIQUETTI","","","1988-07-29","","","","DF","","","","A");
INSERT INTO cliente VALUES("59","ANA KATIA MONTEIRO FARIAS","23009306334","","1962-08-20","SR 01 CASA 10 - SUDOESTE - CASA IRMAO","PORTO ALEGRE","","DF","","85996864049","","A");
INSERT INTO cliente VALUES("60","HELEN ROCHA DE OLIVEIRA","07786021175","","2001-12-18","TELEFONE DO TIO ITAMAR","","","DF","","99680 4381","helenrocha@live.com","A");
INSERT INTO cliente VALUES("61","ITAMAR DA SILVA FERREIRA","","","1111-11-11","","","","DF","","99680 4381","","A");
INSERT INTO cliente VALUES("62","DAIZA BRITO","","","1111-11-11","","","","DF","","98565 5596","","A");
INSERT INTO cliente VALUES("63","MARIA DA CONCEICAO MENDES DINIZ","22556974168","","1957-12-11","SQN 212 BL C APTO 616","ASA NORTE","BRASILIA","DF","","99117 2959","","A");
INSERT INTO cliente VALUES("64","WELLINGTON RAW","","","1958-12-09","SHCES QD 605 BL F APTO 205","CRUZEIRO NOVO","BRASILIA","DF","","99979 2000","","A");
INSERT INTO cliente VALUES("65","ANDREA PINTO","70561222134","","1981-09-17","","","","DF","","98300 9001","karolananet@gmail.com","A");
INSERT INTO cliente VALUES("66","SIMONE BASTOS MARCAL","","","1967-03-02","","","","DF","","99161 2823","","A");
INSERT INTO cliente VALUES("67","THANIA REGINA PEREIRA","","","1111-11-11","RUA 36 LOTE 7 APTO 1214","AGUAS CLARAS","BRASILIA","DF","2032 5571","99644 9250","","A");
INSERT INTO cliente VALUES("68","ROSILANE CARDOSO DA ROCHA","98810480104","","1982-10-18","SHPS 503 CONJ. A CASA 29","POR DO SOL","BRASILIA","DF","","99593 7735","","A");
INSERT INTO cliente VALUES("69","RENATA BRAGA CAVALCANTE DE AZEVEDO","91060800144","","1980-03-06","QC 11 RUA G CASA 12 ","JARDIM MAGUEIRAL","","DF","","99635 7054","","A");
INSERT INTO cliente VALUES("70","RAYANNE FERREIRA DOS SANTOS","03696934186","","1991-02-23","QNL 09 BL C APTO 106","L NORTE","BRASILIA","DF","","99376 0859","","A");
INSERT INTO cliente VALUES("71","HILDENE MACIEL FERRAZ","17858585304","","1960-01-01","SHIN QL 12 CONJ. 01 CASA 15","LAGO NORTE","BRASILIA","DF","","62982313424","","A");
INSERT INTO cliente VALUES("72","RODRIGO GIESBRECHT PINHEIRO","02391868693","","1974-06-17","SQS 406 BL L APTO 106","ASA SUL","BRASILIA","DF","","99591 1409","digobh.diego@gmail.com","A");
INSERT INTO cliente VALUES("73","PAULA NAYARA SIQUEIRA SALGADO","02623154163","","1111-11-11","","","","DF","","99369 0070","","A");
INSERT INTO cliente VALUES("74","CHRISTIANE SOUSA PEREIRA","","","1976-09-10","","","","DF","","99405 5881","","A");
INSERT INTO cliente VALUES("75","DEMETRIO GONCALVES GOMES","","","1111-11-11","","","","DF","","98284 2823","","A");
INSERT INTO cliente VALUES("76","ADRIANA BENEDITO BORGES","","","1111-11-11","","","","DF","","62992772289","","A");
INSERT INTO cliente VALUES("77","BRUNA DE SOUZA","","","1111-11-11","","","","DF","","99805 5329","","A");
INSERT INTO cliente VALUES("78","JULIA FERNANDES COSTA","05624146140","","1998-03-23","","","","DF","","98561 7555","","A");
INSERT INTO cliente VALUES("79","ELSA MARIA GERMANY C. CABRAL","","","1111-11-11","","","","DF","","99195 6305","","A");
INSERT INTO cliente VALUES("80","CHARLES TEIXEIRA","","","1111-11-11","CLIENTE CIRENE - DELLUCA","","","DF","","","","A");
INSERT INTO cliente VALUES("81","MICHELLE APARECIDA DE ABREU","84678550100","","1978-08-24","","","","DF","","99981 2808","","A");
INSERT INTO cliente VALUES("82","FRANCISCO RODRIGUES","","","1111-11-11","","","","DF","","98162 3913","","A");
INSERT INTO cliente VALUES("83","GASPAR DA FONSECA","","","1971-05-20","","","","DF","","98249 6788","","A");
INSERT INTO cliente VALUES("84","MARIA EUGENIA GADIA ULIAN","","","1111-11-11","","","","DF","","11971446564","","A");
INSERT INTO cliente VALUES("85","CAMILA TORELLI SOARES","","","1998-09-05","SQNW 307 BL A APTO 616","NOROESTE","BRASILIA","DF","","99118 3428","","A");
INSERT INTO cliente VALUES("86","SAMUEL SOARES DOS SANTOS","07346943422","","1987-06-27","QD 05 CONJ. G CASA 22","VARJAO","BRASILIA","DF","","99344 4177","","A");
INSERT INTO cliente VALUES("87","PAULA ROCHA CERQUEIRA CAMPOS","","","2008-04-04","SQS 308 BL I APTO 402","ASA SUL","","DF","","99273 8987","","A");
INSERT INTO cliente VALUES("88","JULIA VICTORIA CUNHA LOBATO","","","2000-05-12","","","","DF","","99269 5370","","A");
INSERT INTO cliente VALUES("89","TATIANA ESTRELA","","","1111-11-11","","","","DF","","","","A");
INSERT INTO cliente VALUES("90","NATALIA ESTRELA","","","1111-11-11","","","","DF","","","","A");
INSERT INTO cliente VALUES("91","JULIANA CANIELO DE ARAUJO","98650319149","","1982-10-03","SQS 405 BL Q APTO 305","ASA SUL","BRASILIA","DF","","99634 5338","","A");
INSERT INTO cliente VALUES("92","PAMERA QUINTAO VELOSO","73780839172","","1988-04-17","COND.. VIVENDAS NOVA PETROPOLIS QD 02 ,OD. B LT 18","SOBRADINHO I","BRASILIA","DF","","99242 0309","quintaopamera@gmail.com","A");
INSERT INTO cliente VALUES("93","PAULA LARANJEIRA DOS SANTOS THOME","","","1983-07-25","QD. 301 CJ 14 ED. HANA APTO 701","AGUAS CLARAS","BRASILIA","DF","","99278 4516","","A");
INSERT INTO cliente VALUES("94","LARISSA THAIANE COSTA SOBRINHO","05193815138","","2000-08-31","QI 08 CONJ. K CASA 32","GUARA I","BRASILIA","DF","","99260 8788","","A");
INSERT INTO cliente VALUES("95","ANTONIA NASCIMENTO CARDOSO","29776457134","","1961-03-23","SHPS 502 CONJ. A LT 59","POR DO SOL","BRASILIA","DF","","99301 7254","","A");
INSERT INTO cliente VALUES("96","MARILIA FOLHA DE OLIVEIRA SANTOS","00974183318","","1111-11-11","RUA PADRE AUREO OLIVEIRA NUMERO 1964","TEREZINA","PIAUI","PI","","86388929312","","A");
INSERT INTO cliente VALUES("97","BYANNKAH ABRAO FERREIRA MENDES","","","1111-11-11","","","","DF","98127 4846","98385 3484","","A");
INSERT INTO cliente VALUES("98","LUCINETE CACIANO DE ARAUJO LACERDA","57327750134","","1973-02-15","","","","DF","","98159 8445","","A");
INSERT INTO cliente VALUES("99","MARCOS VINICIUS DE SOUSA","","","1111-11-11","","","","DF","","99993 2449","","A");
INSERT INTO cliente VALUES("100","ALEXANDRE ROBSON DE ARAUJO CAVALCANTI","","","1111-11-11","","","","DF","98204 9093","98613 5865","","A");
INSERT INTO cliente VALUES("101","CLAUDIA RODRIGUES","41731174187","","1969-07-01","QI 31 LT 10 BL B APTO 101","GUARA II","BRASILIA","DF","","98153 9502","","A");
INSERT INTO cliente VALUES("102","JOAO PEDRO MAXWELL ANDRADE","05835463154","","2003-12-18","QD 13 RUA D CASA 07","SAO SEBASTIAO","BRASILIA","DF","","98512 1170","","A");
INSERT INTO cliente VALUES("103","JOSE AUGUSTO MONTEIRO DE LIMA FURTADO","","","1111-11-11","","","","DF","","","","A");
INSERT INTO cliente VALUES("104","ANDRESSA TAVARES VIEIRA","","","1111-11-11","","","","DF","","98178 8155","","A");
INSERT INTO cliente VALUES("105","ISABELLE SOBRINHO DA SILVA","","","1111-11-11","","","","DF","3335 7914","99207 9776","","A");
INSERT INTO cliente VALUES("106","THAIS TOZZATO","","","1982-01-02","","","","DF","","98271 2000","","A");
INSERT INTO cliente VALUES("107","ISABELLA INNOCENCIO DE PAULA","","","2004-04-26","SNPW QD 15 CONJ. 7 LT 05 CASA 09","PARK WAY","BRASILIA","DF","","99281 6216","","A");
INSERT INTO cliente VALUES("108","BRUNO ALVES REGIS","","","1997-01-31","","","","DF","","99643 3158","","A");
INSERT INTO cliente VALUES("109","VANESSA GONCALVES DE OLIVEIRA","","","1989-07-05","","","","DF","","99636 1344","","A");
INSERT INTO cliente VALUES("110","PRISCILA CARVALHO","03361440165","2552254","1989-05-07","","","","DF","","98474 8983","","A");
INSERT INTO cliente VALUES("111","FERNANDA GONCALVES ABREU","","","2000-09-22","COND. VILLE DE MONTAGE QD 07 CASA 18","JARDIM BOTANICO","BRASILIA","DF","","98239 8900","","A");
INSERT INTO cliente VALUES("112","TONY ALVES MENDES","","","1111-11-11","","","","DF","","98118 2602","","A");
INSERT INTO cliente VALUES("113","WESLEY DIAS OLIVEIRA","","","1998-10-16","","","","DF","","99981 1481","","A");
INSERT INTO cliente VALUES("114","SERGIO OLIVEIRA","","","1111-11-11","","","","DF","","98172 8524","","A");
INSERT INTO cliente VALUES("115","EVELIN ALVES DO BOMFIM","04548022180","3061455","1998-04-03","","","","DF","","99178 1590","","A");
INSERT INTO cliente VALUES("116","BRUNO ALVES REGIS","","","1111-11-11","","","","DF","","99643 3158","","A");
INSERT INTO cliente VALUES("117","RAYANE RODRIGUES SIQUEIRA","70277160","2782368","1990-10-04","SQS 411 BL P APTO 305 ENTRADA C","ASA SUL","BRASILIA","DF","","98263 3940","","A");
INSERT INTO cliente VALUES("118","MAYARA HARINE FUUJISHIMA SETUBAL","","","1987-06-15","RUA 20 NORTE LT 01/03 APTO 1010","AGUAS CLARAS","BRASILIA","DF","985541449","","","A");
INSERT INTO cliente VALUES("119","EMILANIO JUNIO CUNHA GOMES","","","1991-01-15","","","","DF","","99112 5338","","A");
INSERT INTO cliente VALUES("120","MELLANY DE JESUS SILVEIRA MATOS","","","1984-03-08","CL 01 BL B APTO 507","","","DF","","99839 1004","","A");
INSERT INTO cliente VALUES("121","SHOZO VINICIUS FERNANDES","","","1111-11-11","","","","DF","","99290 3757","","A");
INSERT INTO cliente VALUES("122","MARCIA MUZZY","","","1111-11-11","","","","DF","98151 9873"," 3344 3704","","A");
INSERT INTO cliente VALUES("123","ERICK CORREIA DE ALMEIDA","","","1984-10-08","SHCGN 704 BL A APTO 109","ASA NORTE","","DF","","99118 6711","","A");
INSERT INTO cliente VALUES("124","DANIELA VIANA DE MORAES DE FREITAS","78524148187","","1977-10-07","QD 10 CONJ. G CASA 33","SOBRADINHO I","","DF","","99907 5766","","A");
INSERT INTO cliente VALUES("125","EDILEUZA FIRMO DA SILVA","73670588191","","1988-01-24","QD 04 LT 06 ","JARDIM INGA","","DF","","99997 3709","","A");
INSERT INTO cliente VALUES("126","LEONARDO CAMILO CIRQUEIRA","","","1111-11-11","","","","DF","98101 9911","","","A");
INSERT INTO cliente VALUES("127","WESLEY RODRIGUES BARBOSA","","","1111-11-11","","","","DF","","99350 2471","","A");



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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO medico VALUES("3","Medico padrao","123456789","Clinica Vida","","A");
INSERT INTO medico VALUES("4","KLEBER PINHO SOUZA","7848","--------------------","GO","A");
INSERT INTO medico VALUES("5","ROBSON  - PACINI","","CLINICA PACINI","","A");
INSERT INTO medico VALUES("6","GUILHERME ANDRADE DO NASCIMENTO","17836","HOSPITAL OFTALMOLOGICO DE BRASILIA","","A");
INSERT INTO medico VALUES("7","EMERSON DUARTE DULTRA","12678","---------------","","A");
INSERT INTO medico VALUES("8","ANDREA CAVALIEROS","12457","ICB OFTALMOLOGIA","","A");
INSERT INTO medico VALUES("9","PAULO FABRICIO","16887","HOB - HOSPITAL OFTALMOLOGICO DE BRASILIA","","A");
INSERT INTO medico VALUES("10","LETICIA SALLES CARNEIRO","22958","","","A");
INSERT INTO medico VALUES("11","ANA PAULA MARTINS","16461","HFA - HOSPITL DAS FORÇAS ARMADAS","","A");
INSERT INTO medico VALUES("12","ERIC RODRIGUES","482","","","A");
INSERT INTO medico VALUES("13","MANOEL PAULO","13367","CL. PACINI","","A");
INSERT INTO medico VALUES("14","RAFAEL TEIXEIRA","20398","","","A");
INSERT INTO medico VALUES("15","CARLA NAGAMINE","26511","","","A");
INSERT INTO medico VALUES("16","SAMUEL DE FARIA","19931","","","A");
INSERT INTO medico VALUES("17","ROSANGELA DA SILVA MOREIRA","8169","","","A");
INSERT INTO medico VALUES("18","MARIO PACINI NETO","11604","","","A");
INSERT INTO medico VALUES("19","ALINE BAHE","25745","","","A");
INSERT INTO medico VALUES("20","ADRIANA F. A. LIVIA","7930","PROCURADORIA PUBLICA FEDERAL","","A");
INSERT INTO medico VALUES("21","ADRIANA CRISTINA","9171","","","A");
INSERT INTO medico VALUES("22","PATRICIA KALOUT","13736","","","A");
INSERT INTO medico VALUES("23","CLARISSA S. ARANTES","21703","","","A");
INSERT INTO medico VALUES("24","DANIELA A.M. COUTO","10268","PACCINI....","","A");
INSERT INTO medico VALUES("25","MATHEUS C. CORDEIRO - OPTO","460","","","A");
INSERT INTO medico VALUES("26","KATIA REGINA - OPTO","381","","","A");
INSERT INTO medico VALUES("27","JULLIANA DIAS","6103","HOSP. OFTALMOLOGICO DE BRASILIA","","A");
INSERT INTO medico VALUES("28","NAEL AHMAD","21233","","","A");
INSERT INTO medico VALUES("29","TULIO REIS","15611","CLINICA VISÃO","","A");
INSERT INTO medico VALUES("30","FREDERICO NOBRE","11111111111111","","","A");
INSERT INTO medico VALUES("31","ANTONIO MARCIO","7180","OCULARE - OFTALMOLOGIA","","A");
INSERT INTO medico VALUES("32","FABIO NAPOLI","15261","HOB---------","","A");
INSERT INTO medico VALUES("33","LEONARDO TIZZO","15240","","","A");



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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO produto VALUES("1","Nenhum produto selecionado","s/n","s/n","s/n","s/n","A");
INSERT INTO produto VALUES("3","ACUVUE -  2","JOHNSON & JOHNSON","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("4","ACUVUE OAYS V.S","JOHSON & JOHNSON","DESCATÁVEL","INC.","","A");
INSERT INTO produto VALUES("5","ACUVUE OASYS TORIC","JOHSON & JOHSON","DESCARTÁVEL","INC","","A");
INSERT INTO produto VALUES("6","ACUVUE -  1 DAY","JOHNSON & JOHNSON","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("7","ACUVUE OASYS TRANSITIONS","JOHNSON & JOHNSON","DESCARTÁVEL","TRANSITIONS","","A");
INSERT INTO produto VALUES("8","SOFLENS TORIC","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("9","PUREVISION - 2   V.S","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("10","PUREVISION - 2 TORIC","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("11","LUNARE COLOR","BAUSH & LOMB","MENSAL","COLOR","","A");
INSERT INTO produto VALUES("12","SOFLENS 66   V.S","BAUSH & LOMB","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("14","OASYS","JHONSON & JHONSON","DESCARTÁVEL","INC.","","A");
INSERT INTO produto VALUES("15","AIR OPTIX HYDRA GLYDE","ALCON","MENSAL","INC.","","A");
INSERT INTO produto VALUES("16","AIR OPTIX MULTIFOCAL","ALCON","MENSAL","INC.","","A");
INSERT INTO produto VALUES("17","AIR OPTIX TORICA","ALCON","MENSAL","INC.","","A");
INSERT INTO produto VALUES("18","AIR OPTTIX COLOR","ALCON","MENSAL","COLORIDA","","A");
INSERT INTO produto VALUES("19","NATURAL VISION","","MENSAL","COLOR","","A");
INSERT INTO produto VALUES("20","BIOFINITY V.S","COOPER VISION","MENSAL","","","A");
INSERT INTO produto VALUES("21","BIOFINITY TORICA","COOPER VISION","MENSAL","","","A");



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



