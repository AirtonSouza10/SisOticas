 <?php 
        use Dompdf\Dompdf;
        require_once("dompdf/autoload.inc.php");
        include '../dao/conexao.php';
        require_once '../dao/produtoDAO.php'; 

        $idproduto = $_GET["id"];
        $produtoDAO = new ProdutoDAO();
        $produto = $produtoDAO->getProdutoById($idproduto);


        $id = $produto["idproduto"];
        $descricao = $produto["descricao"];
        $marca = $produto["marca"];
        $tipo = $produto["tipo"];
        $cor = $produto["cor"];
        $obs = $produto["obs"];        
        $status = $produto["stattus"];
        $data = date("d/m/Y");
        
 $dompdf = new DOMPDF();       
 $dompdf->load_html("
 <fieldset>
 <h1 align='center'><img  src='../imagem/brasill.png' width='50px' height='50px'></h1>
 <h1>Dados do produto</h1>
 <p class='center sub-titulo'>
 ID: <strong>$id</strong>  
 NOME: <strong> $descricao </strong>
 </p>
 <p class='center'>MARCA: <strong> $marca </strong> &nbsp; TIPO: <strong> $tipo</strong></p>
 <p class='center'>COR: <strong> $cor </strong> &nbsp; STATUS: <strong> $status</strong></p>
 <p class='center'>OBS: <strong> $obs </strong></p>
 
 <p class='center'>--------------------------------------------------------------------------------------------------------------------------------------</p>

 <p><strong>Óticas Brasil Ltda</strong></p>
 <p>Há mais de 40 anos cuidando da saúde dos seus olhos</p>
 <p class='direita'>Brasília, $data</p>

 </fieldset>
 ");


    $dompdf->render();
    $dompdf->stream(
        "produto.pdf", 
        array(
            "Attachment" => false //Para realizar o download somente alterar para true
        )
    );

 exit;