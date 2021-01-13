<!--importacao page clienteDAO-->
<?php
 	require_once '../dao/produtoDAO.php';

  	$word = $_POST['s_post'];
    $produtoDAO = new ProdutoDAO();
    $produtos = $produtoDAO->getProdutosPesq($word);

      foreach ($produtos as $n) {
           echo "<tr>";
           echo "  <td>{$n['descricao']}</td>";
           echo "  <td>{$n['marca']}</td>";
           echo "  <td>{$n['tipo']}</td>";  
           echo "  <td>{$n['cor']}</td>";                                            
           echo "  <td><input type='checkbox' name='my_lente1' value='{$n['idproduto']} ' /> </td>";
           echo "  <td><input type='checkbox' name='my_len' value='{$n['descricao']} ' /> </td>";           
           echo "</tr>"; 
     
    }


?>