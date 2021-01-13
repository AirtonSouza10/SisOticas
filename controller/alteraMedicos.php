<?php
require_once '../dto/medicoDTO.php';
require_once '../dao/medicoDAO.php'; 

// recuperei os dados do formulario
$nome = $_POST["nome"];
$crm = $_POST["crm"];
$clinica = $_POST["clinica"];
$obs = $_POST["obs"];
$stattus = $_POST["stattus"];
$idmedico = $_POST["idmedico"];

$medicoDTO = new MedicoDTO();
$medicoDTO->setNome($nome);
$medicoDTO->setCrm($crm);
$medicoDTO->setClinica($clinica);
$medicoDTO->setObs($obs);
$medicoDTO->setStattus($stattus);
$medicoDTO->setIdmedico($idmedico);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM medico WHERE crm = '$crm'";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0 or mysqli_num_rows($retorno) == 1){ 
$medicoDAO = new MedicoDAO();
$medicoDAO->updateMedicoById($medicoDTO);

   echo	"<script>alert('Cadastro alterado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/listMedicos.php';</script>";

}else{
	echo	"<script>alert('Medico ja cadastrado');</script>";
	echo	"<script>window.location.href = '../view/listMedicos.php';</script>";	
}

?>
