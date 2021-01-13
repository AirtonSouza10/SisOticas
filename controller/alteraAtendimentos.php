<?php
require_once '../dto/atendimentoDTO.php';
require_once '../dao/atendimentoDAO.php'; 
include '../jscp/funcaoData.php';

// recuperei os dados do formulario
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

$DataEntrega= $_POST["dataentrega"];
$Produto1 = $_POST["lente1"];
$Produto2 = $_POST["lente2"];
$Observacoes= $_POST["obs"];


$id = $_POST["id"];

$atendimentoDTO = new atendimentoDTO();
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


$atendimentoDTO->setDataentrega($DataEntrega);
$atendimentoDTO->setProduto_idproduto($Produto1);
$atendimentoDTO->setProduto2($Produto2);
$atendimentoDTO->setObservacoes($Observacoes);


$atendimentoDTO->setIdatendimento($id);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM atendimento WHERE idatendimento = '0'";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0 or mysqli_num_rows($retorno) == 1){ 
$atendimentoDAO = new AtendimentoDAO();
$atendimentoDAO->updateAtendimentoById($atendimentoDTO);

   echo	"<script>alert('Cadastro alterado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/listAtendimentos.php';</script>";

}else{
	echo	"<script>alert('ja cadastrado');</script>";
	echo	"<script>window.location.href = '../view/listaAtendimentos.php';</script>";	
}

?>
