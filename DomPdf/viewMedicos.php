 <?php 
        use Dompdf\Dompdf;
        require_once("dompdf/autoload.inc.php");
        include '../dao/conexao.php';
        require_once '../dao/medicoDAO.php'; 

        $idmedico = $_GET["id"];
        $medicoDAO = new MedicoDAO();
        $medico = $medicoDAO->getMedicoById($idmedico);


        $id = $medico["IdMedico"];
        $nome = $medico["Nome"];
        $crm = $medico["Crm"];
        $clinica = $medico["Clinica"];
        $obs = $medico["Obs"];
        $stattus = $medico["Stattus"];
        $data = date("d/m/Y");
        
 $dompdf = new DOMPDF();       
 $dompdf->load_html("
 <fieldset>
 <h1 align='center'><img  src='../imagem/brasill.png' width='50px' height='50px'></h1>
 <h1>Dados do medico</h1>
 <p class='center sub-titulo'>
 ID: <strong>$id</strong>  
 NOME: <strong> $nome </strong>
 </p>
 <p class='center'>CRM: <strong> $crm </strong> &nbsp; CLINICA: <strong> $clinica</strong></p>
 <p class='center'>OBS: <strong> $obs </strong></p>
 
 <p class='center'>--------------------------------------------------------------------------------------------------------------------------------------</p>

 <p><strong>Óticas Brasil Ltda</strong></p>
 <p>Há mais de 40 anos cuidando da saúde dos seus olhos</p>
 <p class='direita'>Brasília, $data</p>

 </fieldset>
 ");


    $dompdf->render();
    $dompdf->stream(
        "medico.pdf", 
        array(
            "Attachment" => false //Para realizar o download somente alterar para true
        )
    );

 exit;