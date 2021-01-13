<?php
require_once '../dto/tecnicoDTO.php';
require_once '../dao/tecnicoDAO.php'; 

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$empresa = $_POST["empresa"];
$perfil = $_POST["perfil"];
$senha = md5($_POST["senha"]);
$stattus = $_POST["stattus"];

$tecnicoDTO = new TecnicoDTO();
$tecnicoDTO->setNome($nome);
$tecnicoDTO->setCpf($cpf);
$tecnicoDTO->setEmpresa_idempresa($empresa);
$tecnicoDTO->setPerfil($perfil);
$tecnicoDTO->setSenha($senha);
$tecnicoDTO->setStattus($stattus);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM tecnico WHERE cpf = '$cpf' ";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0){ 
$tecnicoDAO = new tecnicoDAO();
$sucesso = $tecnicoDAO->salvarTecnico($tecnicoDTO);

if ($sucesso){

   echo	"<script>alert('Cadastro realizado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/cadastraTecnicos.php';</script>";	
}
	}else{
	echo	"<script>alert('tecnico já cadastrado');</script>";
	echo	"<script>window.location.href = '../view/cadastraTecnicos.php';</script>";	
}
?>

