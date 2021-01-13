<?php 
        use Dompdf\Dompdf;
        require_once("dompdf/autoload.inc.php");
        include '../dao/conexao.php';
        require_once '../dao/tecnicoDAO.php'; 

        $idtecnico = $_GET["id"];
        $tecnicoDAO = new TecnicoDAO();
        $tecnico = $tecnicoDAO->getTecnicoById($idtecnico);


        $id = $tecnico["idTecnico"];
        $nome = $tecnico["Nome"];
        $cpf = $tecnico["CPF"];
        $perfil = $tecnico["Perfil"];
        $stattus = $tecnico["Stattus"];
        $rz = $tecnico["Razao"];
        $data = date("d/m/Y");
        
 $dompdf = new DOMPDF();       
 $dompdf->load_html("
 <fieldset>
 <h1 align='center'><img  src='../imagem/brasill.png' width='50px' height='50px'></h1>
 <h1>Dados do tecnico</h1>
 <p class='center sub-titulo'>
 ID: <strong>$id</strong>  
 NOME: <strong> $nome </strong>
 </p>
 <p class='center'>CPF: <strong> $cpf </strong> &nbsp; Perfil: <strong> $perfil</strong></p>
 <p class='center'>STATUS: <strong> $stattus </strong></p>
 <p class='center'>EMPRESA: <strong> $rz </strong></p>
 <p class='center'>--------------------------------------------------------------------------------------------------------------------------------------</p>
 

 <p><strong>Óticas Brasil Ltda</strong></p>
 <p>Há mais de 40 anos cuidando da saúde dos seus olhos</p>
 <p class='direita'>Brasília, $data</p>

 </fieldset>
 ");


    $dompdf->render();
    $dompdf->stream(
        "tecnico.pdf", 
        array(
            "Attachment" => false //Para realizar o download somente alterar para true
        )
    );

 exit;