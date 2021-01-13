<?php
require_once '../dto/empresaDTO.php';
require_once '../dao/empresaDAO.php';  

// recuperei os dados do formulario
$razao = $_POST["razao"];
$cnpj = $_POST["cnpj"];
$inscricao = $_POST["inscricao"];
$idempresa = $_POST["idempresa"];

$empresaDTO = new EmpresaDTO();
$empresaDTO->setRazao($razao);
$empresaDTO->setCnpj($cnpj);
$empresaDTO->setInscricao($inscricao);
$empresaDTO->setIdempresa($idempresa);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM empresa WHERE cnpj = '$cnpj'";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0 or mysqli_num_rows($retorno) == 1){ 
$empresaDAO = new EmpresaDAO();
$empresaDAO->updateEmpresaById($empresaDTO);

   echo	"<script>alert('Cadastro alterado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/listEmpresas.php';</script>";

}else{
	echo	"<script>alert('Empresa ja cadastrado');</script>";
	echo	"<script>window.location.href = '../view/listEmpresas.php';</script>";	
}

?>
