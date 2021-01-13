<?php
    session_start();
    include 'validaLogin.php';
    include '../dao/conexao.php';

    $busca = $_POST['busca'];

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT idproduto, descricao,marca,tipo,cor,stattus FROM produto  WHERE descricao like '%$busca%' limit 50";

$retorno = mysqli_query($conn, $search);
$row_cnt = mysqli_num_rows($retorno);
                      echo "<table class='table table-bordered table-hover table-striped'>";
                      echo "<thead class='thead-dark'>";
                      echo "<tr>";

                      echo  "<th>ID</th>";
                      echo  "<th></th>";                      
                      echo  "<th>DESCRIÇÃO</th>";                       
                      echo  "<th></th>"; 
                      echo  "<th>MARCA</th>";  
                      echo  "<th></th>";
                      echo  "<th>TIPO</th>";
                      echo  "<th></th>";  
                      echo  "<th>COR</th>";
                      echo  "<th></th>";
                      echo  "<th>STATTUS</th>"; 
                      echo  "<th class='actions'></th>";                 
                      echo  "<th class='actions'>AÇÃO</th>";

                      echo  "</tr>";
                      echo "</thead>";



    if($row_cnt >= 1){ 
        foreach ($retorno as $r) {

                      echo "<tbody>";
                      echo "<tr>";
                      echo "<td>{$r['idproduto']}<td>";
                      echo "<td>{$r['descricao']}<td>";
                      echo "<td>{$r['marca']}<td>";    
                      echo "<td>{$r['tipo']}<td>";
                      echo "<td>{$r['cor']}<td>";
                      echo "<td>{$r['stattus']}<td>";  
                      echo "<td>  <a href='../DomPdf/viewProdutos.php?id={$r["idproduto"]}'><i class='fas fa-eye'></i></a>";   
                      echo "  <a href='../controller/deletaProduto.php?id={$r["idproduto"]}'><i class='fas fa-trash-alt'></i></a>"; 
                      echo "  <a href='alteraProduto.php?id={$r["idproduto"]}'><i class='fas fa-edit'></i></a> </td>";                
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