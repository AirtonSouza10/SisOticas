<?php
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php'; 
include '../jscp/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$datanascimento =dateBRtoDateUS($_POST["datanascimento"]);
$logradouro = $_POST["logradouro"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$email= $_POST["email"];
$stattus = $_POST["stattus"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setRg($rg);
$clienteDTO->setdatanascimento($datanascimento);
$clienteDTO->setLogradouro($logradouro);
$clienteDTO->setBairro($bairro);
$clienteDTO->setCidade($cidade);
$clienteDTO->setUf($estado);
$clienteDTO->setTelefone($telefone);
$clienteDTO->setCelular($celular);
$clienteDTO->setEmail($email);
$clienteDTO->setStattus($stattus);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM cliente WHERE cpf = '$cpf' ";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0){ 
$clienteDAO = new clienteDAO();
$sucesso = $clienteDAO->salvarCliente($clienteDTO);

if ($sucesso){

   echo	"<script>alert('Cadastro realizado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/cadastraAtendimentos.php';</script>";	
}
	}else{
	echo	"<script>alert('Cliente já cadastrado');</script>";
	echo	"<script>window.location.href = '../view/cadastraAtendimentos.php';</script>";	
}
?>

