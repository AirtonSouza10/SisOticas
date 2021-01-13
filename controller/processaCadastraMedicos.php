<?php
require_once '../dto/medicoDTO.php';
require_once '../dao/medicoDAO.php'; 

// recuperei os dados do formulario
$nome = $_POST["nome"];
$crm = $_POST["crm"];
$clinica = $_POST["clinica"];
$obs = $_POST["obs"];
$stattus = $_POST["stattus"];

$medicoDTO = new MedicoDTO();
$medicoDTO->setNome($nome);
$medicoDTO->setCrm($crm);
$medicoDTO->setClinica($clinica);
$medicoDTO->setObs($obs);
$medicoDTO->setStattus($stattus);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM medico WHERE crm = '$crm' ";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0){ 
$medicoDAO = new medicoDAO();
$sucesso = $medicoDAO->salvarMedico($medicoDTO);

if ($sucesso){

   echo	"<script>alert('Cadastro realizado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/cadastraMedicos.php';</script>";	
}
	}else{
	echo	"<script>alert('Médico já cadastrado');</script>";
	echo	"<script>window.location.href = '../view/cadastraMedicos.php';</script>";	
}
?>

