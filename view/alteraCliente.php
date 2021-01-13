<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- icone -->
    <link rel="icon" href="../imagem/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../imagem/favicon.ico" type="image/x-icon" />

    <title>SisOtica - Mudando o seu jeito de ver o mundo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
        <!--Validacao de usuario logado-->
        <?php
        session_start();
        include 'validaLogin.php';
        include '../dao/conexao.php';
   
        ?> 
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SisOtica</h3>
                <strong>SO</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index2.php">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="cadastraAtendimentos.php">
                        <i class="fas fa-tag"></i>
                        Fast Service
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-address-card"></i>
                        Cadastros
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="listClientes.php">Clientes</a>
                        </li>
                        <li>
                            <a href="listTecnicos.php">Técnicos</a>
                        </li>
                        <li>
                            <a href="listMedicos.php">Médicos</a>
                        </li>
                        <li>
                            <a href="listProdutos.php">Produtos</a>
                        </li>
                        <li>
                            <a href="listEmpresas.php">Empresas</a>
                        </li>
                        <li>
                            <a href="listAtendimentos.php">Atendimentos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index2.php">
                        <i class="fas fa-birthday-cake"></i>
                        Aniversariantes
                    </a>
                </li>
                <li>
                    <a href="pesquisar.php">
                        <i class="fas fa-search"></i>
                        Pesquisas
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-phone"></i>
                        Contato
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../db_bkp/ScriptBKPOticasBrasil.php" class="download">Backup</a>
                </li>
                <li>
                    <a href="logout.php" class="article">Sair</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu Lateral</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../view/listClientes.php"><i class="fas fa-arrow-alt-circle-left"></i></a>
                            </li>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            <?php 
                require_once '../dao/clienteDAO.php';
               
                $idcliente = $_GET["id"];
                $clienteDAO = new ClienteDAO();
                $cliente = $clienteDAO->getClienteById($idcliente);   
            ?>

            <h2>Alterar cadastro de cliente</h2>
            <h4>Preencha os campos abaixo:</h4>
            <!--Formulário de cadastro de Clientes-->
                <form method="POST" action="../controller/alterarClientes.php">
                <div class="form-row">
                    <div class="form-group">
                       <input type="hidden" class="form-control" id="idcliente" name="idcliente" value="<?php echo $cliente['IdCliente']?>">
                    </div>

                    <div class="form-group col-md-5">
                      <label for="inputNome">Nome</label>
                      <input type="text" class="form-control" id="inputNome" placeholder="Nome Completo" name="nome" required="required" pattern="^[a-zA-Z][a-zA-Z- \.]{3,45}$" title="Digite apenas letras nesse campo" minlength="10" maxlength="45" value="<?php echo $cliente['Nome']?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputCpf">CPF</label>
                      <input type="text" class="form-control" id="CPF" placeholder="CPF" name="cpf" pattern="[0-9\s]+$" title="Digite apenas numeros nesse campo" maxlength="11" value="<?php echo $cliente['CPF']?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputRg">RG</label>
                      <input type="text" class="form-control" id="inputRg" placeholder="RG" name="rg" pattern="[0-9\s]+$" title="Digite apenas números nesse campo" maxlength="30" value="<?php echo $cliente['RG']?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputDataNascimento">Data de Nascimento</label>
                      <input type="text" class="form-control" id="datanascimento" placeholder="Data de Nascimento" name="datanascimento" title="Digite apenas numeros nesse campo" value="<?php echo $cliente['datanascimento']?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputLogradouro">Logradouro</label>
                        <input type="text" class="form-control" id="inputLogradouro" placeholder="Logradouro" name="logradouro" minlength="10" maxlength="100" value="<?php echo $cliente['Logradouro']?>">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputBairro">Bairro</label>
                        <input type="text" class="form-control" id="inputBairro" placeholder="Bairro" name="bairro" minlength="5" maxlength="45" value="<?php echo $cliente['Bairro']?>">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" class="form-control" id="inputCidade" placeholder="Cidade" name="cidade" minlength="5" maxlength="45" value="<?php echo $cliente['Cidade']?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputEstado">Estado</label>
                      <select id="inputEstado" class="form-control" name="estado">
                        <option value="<?php echo $cliente['UF']?>" selected>DF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputTelefone">Telefone Residencial</label>
                        <input type="tel" class="form-control" id="inputTelefone" placeholder="DDNNNNNNNNN" name="telefone"  pattern="[0-9\s]+$" title="Digite só numeros nesse campo" maxlength="11" value="<?php echo $cliente['Telefone']?>">
                    </div>                    
                    <div class="form-group col-md-3">
                        <label for="inputCelular">Telefone Celular</label>
                        <input type="tel" class="form-control" id="inputCelular" placeholder="DDNNNNNNNNN" name="celular" pattern="[0-9\s]+$" title="Digite só numeros nesse campo" maxlength="11" value="<?php echo $cliente['Celular']?>">
                    </div> 
                    <div class="form-group col-md-4">
                        <label for="inputEmail">Email</label>
                        <input type="Email" class="form-control" id="inputEmail" placeholder="Digite seu email" name="email" minlength="5" maxlength="100"
                        value="<?php echo $cliente['email']?>">
                    </div> 
                    <div class="form-group col-md-2">
                      <label for="inputStatus">Status</label>
                      <select id="inputStatus" class="form-control" name="stattus">
                        <option value="A" selected>Ativo</option>
                        <option value="I">Inativo</option>
                      </select>
                    </div> 
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-info">Salvar</button>
                    </div>
                </div>
                </form>


        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>