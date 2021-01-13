<?php 
        use Dompdf\Dompdf;
        require_once("dompdf/autoload.inc.php");
        include '../dao/conexao.php';
        require_once '../dao/atendimentoDAO.php'; 

        $idatendimento = $_GET["id"];
        $atendimentoDAO = new AtendimentoDAO();
        $atendimento = $atendimentoDAO->getAtendimentoById($idatendimento);

        //cabeçalho
        $id = $atendimento["idatendimento"];
        $cliente = $atendimento["cliente"];
        $cpf = $atendimento["cpf"];
        $medico = $atendimento["medico"];
        $crm = $atendimento["crm"];
        $tecnico = $atendimento["tecnico"];
        $razao = $atendimento["razao"];
        $cnpj = $atendimento["cnpj"];
        $dataatendimento = $atendimento["dataatendimento"];
        $dataentrega = $atendimento["dataentrega"];


        //refracao
        $REsfericoOD = $atendimento["REsfericoOD"];
        $REsfericoOE = $atendimento["REsfericoOE"];
        $RCilindricoOD = $atendimento["RCilindricoOD"];
        $RCilindricoOE= $atendimento["RCilindricoOE"];
        $REixoOD = $atendimento["REixoOD"];
        $REixoOE= $atendimento["REixoOE"];
        $RAvOD = $atendimento["RAvOD"];
        $RAvOE = $atendimento["RAvOE"];
        $RAmbosOlhos = $atendimento["RAmbosOlhos"];
        $RAdicao = $atendimento["RAdicao"];

        //ceratometria
        $CHorizontalOD = $atendimento["CHorizontalOD"];
        $CHorizontalOE = $atendimento["CHorizontalOE"];
        $CVerticalOD= $atendimento["CVerticalOD"];
        $CVerticalOE = $atendimento["CVerticalOE"];
        $CEixoOD= $atendimento["CEixoOD"];
        $CEixoOE = $atendimento["CEixoOE"];
        //lentes de contato
        $LCEsfericoOD = $atendimento["LCEsfericoOD"];
        $LCEsfericoOE = $atendimento["LCEsfericoOE"];
        $LCCilindricoOD = $atendimento["LCCilindricoOE"];
        $LCCilindricoOE = $atendimento["LCCilindricoOE"];
        $LCEixoOD = $atendimento["LCEixoOD"];
        $LCEixoOE= $atendimento["LCEixoOE"];
        $LCAvOD = $atendimento["LCAvOD"];
        $LCAvOE= $atendimento["LCAvOE"];
        $LCCBOD = $atendimento["LCCBOD"];
        $LCCBOE = $atendimento["LCCBOE"];        
        $LCAmbosOlhos = $atendimento["LCAmbosOlhos"];

        $UsuarioDeLentes = $atendimento["UsuarioDeLentes"];
        $Observacoes = $atendimento["Observacoes"];
        $Status_2 = $atendimento["Status_2"];
        $Produto2 = $atendimento["Produto2"];

        //lente tabela produto
        $descricao = $atendimento["descricao"];
        $marca = $atendimento["marca"];
        $tipo = $atendimento["tipo"];
        $cor = $atendimento["cor"];




        $data = date("d/m/Y");
        
 $dompdf = new DOMPDF();       
 $dompdf->load_html("
 <fieldset>
 <h2 align='center'><img  src='../imagem/brasill.png' width='40px' height='25px'> $razao - $cnpj </h2>
  
  <hr/>

 <h4 align='center'>Dados do Atendimento</h4>

 <p align='left'>
 NOME: <strong> $cliente </strong> | CPF: <strong>$cpf</strong> 
 </p>
 <p align='left'>
 MÉDICO: <strong>$medico</strong> | CRM: <strong>$crm</strong>  
 </p>
  </p>
 <p align='left'>  
 TÉCNICO: <strong> $tecnico </strong>
 </p>
 <p align='left'>
 ATENDIMENTO: <strong>$dataatendimento</strong>  | 
 ENTREGA: <strong> $dataentrega </strong>
 </p>
      
 <hr/>
 <hr/>

    <table border='0px' width='100%' style='text-align:center'> 

      <tr>
        <th colspan=6 style='color:red' >REFRAÇÃO</th>
      </tr>
      <tr>
        <th colspan=1></th>  <th colspan=1>ESFÉRICO</th> <th colspan=1>CILINDRICO</th> <th colspan=1>EIXO º</th> <th colspan=1>AV</th>  <th colspan=1>AO</th>
      </tr>                 
      <tr>
        <td>OD</td>
        <td>$REsfericoOD</td> 
        <td>$RCilindricoOD</td>
        <td>$REixoOD</td>
        <td>$RAvOD</td>
        <td>$RAmbosOlhos</td>
      </tr>      
      <tr><th colspan=5></th> <th>ADIÇÃO</th></tr>
      <tr>
        <td>OE</td>
        <td>$REsfericoOE</td> 
        <td>$RCilindricoOE</td>
        <td>$REixoOE</td>
        <td>$RAvOE</td>
        <td>$RAdicao</td>
      </tr>
    </table>
  <hr/>
  <hr/>

    <table border='0px' width='100%' style='text-align:center'> 

      <tr>
        <th colspan=4 style='color:red'>CERATOMETRIA</th>
      </tr>
      <tr>
        <th  colspan=1></th> <th colspan=1>HORIZONTAL</th> <th colspan=1>VERTICAL</th> <th colspan=1>EIXO º</th> 
      </tr>                 
      <tr>
        <td>OD</td>
        <td>$CHorizontalOD</td> 
        <td>$CVerticalOD</td>
        <td>$CEixoOD</td>

      </tr>      
      <tr>
        <td>OE</td>
        <td>$CHorizontalOE</td> 
        <td>$CVerticalOE</td>
        <td>$CEixoOE</td>
      </tr>
    </table>
    </table>

  <hr/>
  <hr/>
     <table border='0px' width='100%' style='text-align:center'> 

      <tr>
        <th colspan=7 style='color:red'>LENTE DE CONTATO</th>
      </tr>
      <tr>
        <th colspan=1></th>  <th colspan=1>ESFÉRICO</th> <th colspan=1>CILINDRICO</th> <th colspan=1>EIXO º</th> <th colspan=1>AV</th> <th colspan=1>CB</th> <th colspan=1>AO</th>
      </tr>                 
      <tr>
        <td>OD</td>
        <td>$LCEsfericoOD</td> 
        <td>$LCCilindricoOD</td>
        <td>$LCEixoOD</td>
        <td>$LCAvOD</td>
        <td>$LCCBOD</td>        
        <td>$LCAmbosOlhos</td>
      </tr>      
      <tr><th colspan=5></th> <th></th></tr>
      <tr>
        <td>OE</td>
        <td>$LCEsfericoOE</td> 
        <td>$LCCilindricoOE</td>
        <td>$LCEixoOE</td>
        <td>$LCAvOE</td>
        <td>$LCCBOE</td>
      </tr>
    </table>

  <hr/>
  <hr/>

<h4 align='LEFT'> DADOS DAS LENTES</h4>
 <p align='left'>
  01- LENTE: <strong>$descricao | $marca | $tipo | $cor</strong>  
 </p>
 <p align='left'>
  02- LENTE: <strong>$Produto2</strong>   
 </p>

 <p align='left'>
  OBS: <strong>$Observacoes</strong> 
</strong>
 </p>
 <p align='center'>
 </p>

 <hr/>
 

 <p><strong>Óticas Brasil -Há mais de 40 anos cuidando da saúde dos seus olhos </strong> <strong align='right'> - Brasília, $data</strong></p>

 </fieldset>
 ");


    $dompdf->render();
    $dompdf->stream(
        "atendimento.pdf", 
        array(
            "Attachment" => false //Para realizar o download somente alterar para true
        )
    );

 exit;