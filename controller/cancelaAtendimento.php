<?php
require_once '../dto/atendimentoDTO.php';
require_once '../dao/atendimentoDAO.php';  

// recuperei os dados do formulario
$id = $_GET["id"];

$atendimentoDTO = new AtendimentoDTO();
$atendimentoDTO->setIdatendimento($id);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM atendimento WHERE idatendimento = '101010101010'";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0 or mysqli_num_rows($retorno) == 1){ 
$atendimentoDAO = new AtendimentoDAO();
$atendimentoDAO->updateCancelaById($atendimentoDTO);

   echo	"<script>alert('registro cancelado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/listAtendimentos.php';</script>";

}else{
	echo	"<script>alert('ja cadastrado');</script>";
	echo	"<script>window.location.href = '../view/listAtendimentos.php';</script>";	
}

?>
