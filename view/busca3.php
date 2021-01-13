<?php
    session_start();
    include 'validaLogin.php';
    include '../dao/conexao.php';

    $busca = $_POST['busca'];

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT idmedico, nome,crm,clinica,obs,stattus FROM medico  WHERE nome like '%$busca%' OR crm like '%$busca%' limit 50";

$retorno = mysqli_query($conn, $search);
$row_cnt = mysqli_num_rows($retorno);
                      echo "<table class='table table-bordered table-hover table-striped'>";
                      echo "<thead class='thead-dark'>";
                      echo "<tr>";

                      echo  "<th>ID</th>";
                      echo  "<th></th>";                      
                      echo  "<th>NOME</th>";                       
                      echo  "<th></th>"; 
                      echo  "<th>CRM</th>";  
                      echo  "<th></th>";
                      echo  "<th>CLINICA</th>";
                      echo  "<th></th>";  
                      echo  "<th>OBS</th>";
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
                      echo "<td>{$r['idmedico']}<td>";
                      echo "<td>{$r['nome']}<td>";
                      echo "<td>{$r['crm']}<td>";    
                      echo "<td>{$r['clinica']}<td>";
                      echo "<td>{$r['crm']}<td>";
                      echo "<td>{$r['stattus']}<td>";  
                      echo "<td>  <a href='../DomPdf/viewMedicos.php?id={$r["idmedico"]}'><i class='fas fa-eye'></i></a>";   
                      echo "  <a href='../controller/deletaMedico.php?id={$r["idmedico"]}'><i class='fas fa-trash-alt'></i></a>"; 
                      echo "  <a href='alteraMedico.php?id={$r["idmedico"]}'><i class='fas fa-edit'></i></a> </td>";                
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