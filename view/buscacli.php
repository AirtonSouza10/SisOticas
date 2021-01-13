<!--importacao page clienteDAO-->
<?php
 	require_once '../dao/clienteDAO.php';

 	$word = $_POST['s_post'];
    $clienteDAO = new ClienteDAO();
    $nivers = $clienteDAO->getClientesPesq($word);

      foreach ($nivers as $n) {
           echo "<tr>";
           echo "  <td>{$n['idcliente']}</td>";
           echo "  <td>{$n['Nome']}</td>";
           echo "  <td>{$n['Cpf']}</td>";                       
           echo "  <td><input type='checkbox' name='my_cliente' value='{$n['idcliente']} ' /> </td>";
           echo "  <td><input type='checkbox' name='my_cli' value='{$n['Nome']} ' /> </td>";
           echo "</tr>"; 
     
    }


?>