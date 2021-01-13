<?php
    session_start();
    include 'validaLogin.php';
    include '../dao/conexao.php';

    $busca = $_POST['busca'];

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT a.idatendimento,c.nome as cliente,c.cpf as cpf,c.telefone,c.celular,DATE_FORMAT(a.dataatendimento,'%d/%m/%Y') AS dataatendimento, DATE_FORMAT(a.dataentrega,'%d/%m/%Y') AS dataentrega,a.Status_2 as stattus FROM atendimento as a, cliente as c, tecnico as t, medico as m, empresa as e, produto as p WHERE c.cpf like '%$busca%' AND c.idcliente = a.cliente_idcliente AND t.idtecnico=a.tecnico_idtecnico AND m.idmedico = a.medico_idmedico AND e.idempresa = a.empresa_idempresa AND p.idproduto = a.produto_idproduto OR c.nome like '%$busca%' AND c.idcliente = a.cliente_idcliente AND t.idtecnico=a.tecnico_idtecnico AND m.idmedico = a.medico_idmedico AND e.idempresa = a.empresa_idempresa AND p.idproduto = a.produto_idproduto OR c.telefone like '%$busca%' AND c.idcliente = a.cliente_idcliente AND t.idtecnico=a.tecnico_idtecnico AND m.idmedico = a.medico_idmedico AND e.idempresa = a.empresa_idempresa AND p.idproduto = a.produto_idproduto OR c.celular like '%$busca%' AND c.idcliente = a.cliente_idcliente AND t.idtecnico=a.tecnico_idtecnico AND m.idmedico = a.medico_idmedico AND e.idempresa = a.empresa_idempresa AND p.idproduto = a.produto_idproduto limit 50";

$retorno = mysqli_query($conn, $search);
$row_cnt = mysqli_num_rows($retorno);
                      echo "<table class='table table-bordered table-hover table-striped'>";
                      echo "<thead class='thead-dark'>";
                      echo "<tr>";

                      echo  "<th>ID</th>";
                      echo  "<th></th>";                      
                      echo  "<th>CLIENTE</th>";                       
                      echo  "<th></th>"; 
                      echo  "<th>CPF</th>";  
                      echo  "<th></th>";
                      echo  "<th>ATENDIMENTO</th>";
                      echo  "<th></th>";  
                      echo  "<th>ENTREGA</th>";
                      echo  "<th></th>";
                      echo  "<th>SITUAÇÃO</th>"; 
                      echo  "<th class='actions'></th>";                 
                      echo  "<th class='actions'>AÇÃO</th>";

                      echo  "</tr>";
                      echo "</thead>";



    if($row_cnt >= 1){ 
        foreach ($retorno as $r) {

                      echo "<tbody>";
                      echo "<tr>";
                      echo "<td>{$r['idatendimento']}<td>";
                      echo "<td>{$r['cliente']}<td>";
                      echo "<td>{$r['cpf']}<td>";    
                      echo "<td>{$r['dataatendimento']}<td>";
                      echo "<td>{$r['dataentrega']}<td>";
                      echo "<td>{$r['stattus']}<td>";  
                      echo "<td>  <a href='../DomPdf/viewAtendimentos.php?id={$r["idatendimento"]}'><i class='fas fa-eye'></i></a>";   
                      echo "  <a href='../controller/cancelaAtendimento.php?id={$r["idatendimento"]}'><i class='fas fa-trash-alt'></i></a>"; 
                      echo "  <a href='alteraAtendimento.php?id={$r["idatendimento"]}'><i class='fas fa-edit'></i></a> </td>";                
                      echo "</tr>";
                      echo "</tbody>";
  

                    }

                      echo "</table>";
        
    }
    elseif ($busca = "") {
      echo "conte-nos o que procura";
    }

    else{
        echo "nenhum registro encontrado";
    }
   
?> 