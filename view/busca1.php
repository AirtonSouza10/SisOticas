<?php
    session_start();
    include 'validaLogin.php';
    include '../dao/conexao.php';

    $busca = $_POST['busca'];

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT idcliente, nome, cpf, bairro,uf, celular FROM cliente  WHERE cpf like '%$busca%' or nome LIKE '%$busca%' limit 50";

$retorno = mysqli_query($conn, $search);
$row_cnt = mysqli_num_rows($retorno);
                      echo "<table class='table table-bordered table-hover table-striped'>";
                      echo "<thead class='thead-dark'>";
                      echo "<tr>";

                      echo  "<th>ID</th>";
                      echo  "<th></th>";                      
                      echo  "<th>NOME</th>";                       
                      echo  "<th></th>"; 
                      echo  "<th>CPF</th>";  
                      echo  "<th></th>";
                      echo  "<th>BAIRRO</th>";
                      echo  "<th></th>";  
                      echo  "<th>UF</th>";
                      echo  "<th></th>";
                      echo  "<th>CELULAR</th>"; 
                      echo  "<th class='actions'></th>";                 
                      echo  "<th class='actions'>AÇÃO</th>";

                      echo  "</tr>";
                      echo "</thead>";



    if($row_cnt >= 1){ 
        foreach ($retorno as $r) {

                      echo "<tbody>";
                      echo "<tr>";
                      echo "<td>{$r['idcliente']}<td>";
                      echo "<td>{$r['nome']}<td>";
                      echo "<td>{$r['cpf']}<td>";    
                      echo "<td>{$r['bairro']}<td>";
                      echo "<td>{$r['uf']}<td>";
                      echo "<td>{$r['celular']}<td>";  
                      echo "<td>  <a href='../DomPdf/viewClientes.php?id={$r["idcliente"]}'><i class='fas fa-eye'></i></a>";   
                      echo "  <a href='../controller/deletaCliente.php?id={$r["idcliente"]}'><i class='fas fa-trash-alt'></i></a>"; 
                      echo "  <a href='alteraCliente.php?id={$r["idcliente"]}'><i class='fas fa-edit'></i></a> </td>";                
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