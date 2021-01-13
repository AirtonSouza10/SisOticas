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
$idcliente = $_POST["idcliente"];

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
$clienteDTO->setIdcliente($idcliente);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM cliente WHERE cpf = '$cpf'";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0 or mysqli_num_rows($retorno) == 1 or $cpf == "" or $rg == ""){ 
$clienteDAO = new ClienteDAO();
$clienteDAO->updateClienteById($clienteDTO);

   echo	"<script>alert('Cadastro alterado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/listClientes.php';</script>";

}else{
	echo	"<script>alert('Cliente ja cadastrado');</script>";
	echo	"<script>window.location.href = '../view/listaClientes.php';</script>";	
}

?>
