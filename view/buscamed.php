<!--importacao page medicoDAO-->
<?php
 	require_once '../dao/medicoDAO.php';

 	  $word = $_POST['s_post'];
    $medicoDAO = new MedicoDAO();
    $medicos = $medicoDAO->getMedicosPesq($word);

      foreach ($medicos as $n) {
           echo "<tr>";
           echo "  <td>{$n['idmedico']}</td>";
           echo "  <td>{$n['nome']}</td>";
           echo "  <td>{$n['crm']}</td>";                       
           echo "  <td><input type='checkbox' name='my_medico' value='{$n['idmedico']} ' /> </td>";
           echo "  <td><input type='checkbox' name='my_med' value='{$n['nome']} ' /> </td>";           
           echo "</tr>"; 
     
    }


?>