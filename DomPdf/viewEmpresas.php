 <?php 
        use Dompdf\Dompdf;
        require_once("dompdf/autoload.inc.php");
        include '../dao/conexao.php';
        require_once '../dao/empresaDAO.php'; 

        $idempresa = $_GET["id"];
        $empresaDAO = new EmpresaDAO();
        $empresa = $empresaDAO->getEmpresaById($idempresa);


        $id = $empresa["idempresa"];
        $razao = $empresa["razao"];
        $cnpj = $empresa["cnpj"];
        $inscricao = $empresa["inscricao"];
        $data = date("d/m/Y");
        
 $dompdf = new DOMPDF();       
 $dompdf->load_html("
 <fieldset>
 <h1 align='center'><img  src='../imagem/brasill.png' width='70px' height='50px'></h1>
 <h1>Dados do empresa</h1>
 <p class='center sub-titulo'>
 ID: <strong>$id</strong>  
 RAZAO: <strong> $razao </strong>
 </p>
 <p class='center'>CNPJ: <strong> $cnpj </strong> &nbsp; INSCRICAO: <strong> $inscricao</strong></p>
 
 <p class='center'>------------------------------------------------------------------------------------------------------------------------------------</p>

 <p><strong>Óticas Brasil Ltda</strong></p>
 <p>Há mais de 40 anos cuidando da saúde dos seus olhos</p>
 <p class='direita'>Brasília, $data</p>

 </fieldset>
 ");


    $dompdf->render();
    $dompdf->stream(
        "empresa.pdf", 
        array(
            "Attachment" => false //Para realizar o download somente alterar para true
        )
    );

 exit;