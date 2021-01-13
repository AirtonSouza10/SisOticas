<?php
require_once '../dto/empresaDTO.php';
require_once '../dao/empresaDAO.php'; 

// recuperei os dados do formulario
$razao = $_POST["razao"];
$cnpj = $_POST["cnpj"];
$inscricao = $_POST["inscricao"];

$empresaDTO = new EmpresaDTO();
$empresaDTO->setRazao($razao);
$empresaDTO->setCnpj($cnpj);
$empresaDTO->setInscricao($inscricao);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM empresa WHERE cnpj = '$cnpj' ";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0){ 
$empresaDAO = new empresaDAO();
$sucesso = $empresaDAO->salvarEmpresa($empresaDTO);

if ($sucesso){

   echo	"<script>alert('Cadastro realizado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/cadastraEmpresas.php';</script>";	
}
	}else{
	echo	"<script>alert('Empresa já cadastrada');</script>";
	echo	"<script>window.location.href = '../view/cadastraEmpresas.php';</script>";	
}
?>

