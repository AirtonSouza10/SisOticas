<?php
require_once '../dto/tecnicoDTO.php';
require_once '../dao/tecnicoDAO.php'; 

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$empresa = $_POST["empresa"];
$perfil = $_POST["perfil"];
$stattus = $_POST["stattus"];
$idtecnico = $_POST["idtecnico"];

$tecnicoDTO = new TecnicoDTO();
$tecnicoDTO->setNome($nome);
$tecnicoDTO->setCpf($cpf);
$tecnicoDTO->setEmpresa_idempresa($empresa);
$tecnicoDTO->setPerfil($perfil);
$tecnicoDTO->setStattus($stattus);
$tecnicoDTO->setIdtecnico($idtecnico);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM tecnico WHERE cpf = '$cpf'";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0 or mysqli_num_rows($retorno) == 1){ 
$tecnicoDAO = new TecnicoDAO();
$tecnicoDAO->updateTecnicoById($tecnicoDTO);

   echo	"<script>alert('Cadastro alterado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/listTecnicos.php';</script>";

}else{
	echo	"<script>alert('Tecnico ja cadastrado');</script>";
	echo	"<script>window.location.href = '../view/listaTecnicos.php';</script>";	
}

?>
