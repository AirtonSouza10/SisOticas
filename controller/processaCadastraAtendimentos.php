<?php
require_once '../dto/atendimentoDTO.php';
require_once '../dao/atendimentoDAO.php'; 
include '../jscp/funcaoData.php';

// recuperei os dados do formulario
$cliente = $_POST["cliente"];
$tecnico = $_POST["tecnico"];
$medico = $_POST["medico"];
$empresa = $_POST["empresa"];
$dataatendimento =dateBRtoDateUS($_POST["dataatendimento"]);

$REsfericoOD = $_POST["REsfericoOD"];
$REsfericoOE = $_POST["REsfericoOE"];
$RCilindricoOD = $_POST["RCilindricoOD"];
$RCilindricoOE = $_POST["RCilindricoOE"];
$REixoOD = $_POST["REixoOD"];
$REixoOE = $_POST["REixoOE"];
$RAvOD= $_POST["RAvOD"];
$RAvOE = $_POST["RAvOE"];
$RAmbosOlhos = $_POST["RAmbosOlhos"];
$RAdicao = $_POST["RAdicao"];

$CHorizontalOD = $_POST["CHorizontalOD"];
$CHorizontalOE = $_POST["CHorizontalOE"];
$CVerticalOD = $_POST["CVerticalOD"];
$CVerticalOE= $_POST["CVerticalOE"];
$CEixoOD= $_POST["CEixoOD"];
$CEixoOE = $_POST["CEixoOE"];

$LCEsfericoOD = $_POST["LCEsfericoOD"];
$LCEsfericoOE = $_POST["LCEsfericoOE"];
$LCCilindricoOD = $_POST["LCCilindricoOD"];
$LCCilindricoOE = $_POST["LCCilindricoOE"];
$LCEixoOD = $_POST["LCEixoOD"];
$LCEixoOE = $_POST["LCEixoOE"];
$LCAvOD= $_POST["LCAvOD"];
$LCAvOE = $_POST["LCAvOE"];
$LCCBOD = $_POST["LCCBOD"];
$LCCBOE = $_POST["LCCBOE"];
$LCAmbosOlhos = $_POST["LCAmbosOlhos"];


$dataentrega =dateBRtoDateUS($_POST["dataentrega"]);
$usuarioDeLentes= $_POST["usuariodelentes"];
$observacoes = $_POST["obs"];
$stattus = $_POST["stattus"];
$lente1 = $_POST["lente1"];
$lente2 = $_POST["lente2"];

//fim


$atendimentoDTO = new atendimentoDTO();
$atendimentoDTO->setCliente_idcliente($cliente);
$atendimentoDTO->setTecnico_idtecnico($tecnico);
$atendimentoDTO->setMedico_idmedico($medico);
$atendimentoDTO->setEmpresa_idempresa($empresa);
$atendimentoDTO->setDataatendimento($dataatendimento);

$atendimentoDTO->setResfericood($REsfericoOD);
$atendimentoDTO->setResfericooe($REsfericoOE);
$atendimentoDTO->setRcilindricood($RCilindricoOD);
$atendimentoDTO->setRcilindricooe($RCilindricoOE);
$atendimentoDTO->setReixood($REixoOD);
$atendimentoDTO->setReixooe($REixoOE);
$atendimentoDTO->setRavod($RAvOD);
$atendimentoDTO->setRavoe($RAvOE);
$atendimentoDTO->setRambosolhos($RAmbosOlhos);
$atendimentoDTO->setRadicao($RAdicao);

$atendimentoDTO->setChorizontalod($CHorizontalOD);
$atendimentoDTO->setChorizontaloe($CHorizontalOE);
$atendimentoDTO->setCverticalod($CVerticalOD);
$atendimentoDTO->setCverticaloe($CVerticalOE);
$atendimentoDTO->setCeixood($CEixoOD);
$atendimentoDTO->setCeixooe($CEixoOE);


$atendimentoDTO->setLcesfericood($LCEsfericoOD);
$atendimentoDTO->setLcesfericooe($LCEsfericoOE);
$atendimentoDTO->setLccilindricood($LCCilindricoOD);
$atendimentoDTO->setLccilindricooe($LCCilindricoOE);
$atendimentoDTO->setLceixood($LCEixoOD);
$atendimentoDTO->setLceixooe($LCEixoOE);
$atendimentoDTO->setLcavod($LCAvOD);
$atendimentoDTO->setLcavoe($LCAvOE);
$atendimentoDTO->setLccbod($LCCBOD);
$atendimentoDTO->setLccboe($LCCBOE);
$atendimentoDTO->setLcambosolhos($LCAmbosOlhos);


$atendimentoDTO->setDataentrega($dataentrega);
$atendimentoDTO->setUsuariodelentes($usuarioDeLentes);
$atendimentoDTO->setObservacoes($observacoes);
$atendimentoDTO->setStatus_2($stattus);
$atendimentoDTO->setProduto_idproduto($lente1);
$atendimentoDTO->setProduto2($lente2);


$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM atendimento WHERE dataatendimento = '00000000' AND cliente_idcliente = $cliente ";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0){ 
$atendimentoDAO = new atendimentoDAO();
$sucesso = $atendimentoDAO->salvarAtendimento($atendimentoDTO);

if ($sucesso){

   echo	"<script>alert('Cadastro realizado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/cadastraAtendimentos.php';</script>";	
}
	}else{
	echo	"<script>alert('já existe');</script>";
	echo	"<script>window.location.href = '../view/cadastraAtendimentos.php';</script>";	
}
?>

