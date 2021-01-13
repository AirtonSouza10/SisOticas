<?php 
        use Dompdf\Dompdf;
        require_once("dompdf/autoload.inc.php");
        include '../dao/conexao.php';
        require_once '../dao/clienteDAO.php'; 

        $idcliente = $_GET["id"];
        $clienteDAO = new ClienteDAO();
        $cliente = $clienteDAO->getClienteById($idcliente);


        $id = $cliente["IdCliente"];
        $nome = $cliente["Nome"];
        $cpf = $cliente["CPF"];
        $rg = $cliente["RG"];
        $nascimento = $cliente["datanascimento"];
        $logradouro = $cliente["Logradouro"];
        $cidade = $cliente["Cidade"];
        $bairro = $cliente["Bairro"];
        $uf = $cliente["UF"];
        $telefone = $cliente["Telefone"];
        $celular = $cliente["Celular"];
        $email = $cliente["email"];
        $stattus = $cliente["Stattus"];
        $data = date("d/m/Y");
        
 $dompdf = new DOMPDF();       
 $dompdf->load_html("
 <fieldset>
 <h1 align='center'><img  src='../imagem/brasill.png' width='50px' height='50px'></h1>
 <h1>Dados do Cliente</h1>
 <p class='center sub-titulo'>
 ID: <strong>$id</strong>  
 NOME: <strong> $nome </strong>
 </p>
 <p class='center'>CPF: <strong> $cpf </strong> &nbsp; RG: <strong> $rg</strong></p>
 <p class='center'>DATA NASCIMENTO: <strong> $nascimento </strong></p>
 <p class='center'>--------------------------------------------------------------------------------------------------------------------------------------</p>

  <p class='center'>DADOS DE <strong>ENDEREÇO<strong></p>

 <p class='center'>LOGRADOURO: <strong>$logradouro</strong></p>
 <p class='center'>BAIRRO: <strong>$bairro</strong> &nbsp; CIDADE: <strong>$cidade</strong> &nbsp; UF: <strong>$uf</strong></p>

 <p class='center'>--------------------------------------------------------------------------------------------------------------------------------------</p>

 <p class='center'>DADOS DE <strong>CONTATO<strong></p>
 <p class='center'>E-MAIL: <strong>$email</strong></p>
 <p class='center'>TELEFONE: <strong>$telefone</strong> &nbsp; CELULAR: <strong>$celular</strong> &nbsp; STATUS: <strong>$stattus</strong></p>


 <p class='center'>--------------------------------------------------------------------------------------------------------------------------------------</p>
 

 <p><strong>Óticas Brasil Ltda</strong></p>
 <p>Há mais de 40 anos cuidando da saúde dos seus olhos</p>
 <p class='direita'>Brasília, $data</p>

 </fieldset>
 ");


    $dompdf->render();
    $dompdf->stream(
        "Cliente.pdf", 
        array(
            "Attachment" => false //Para realizar o download somente alterar para true
        )
    );

 exit;