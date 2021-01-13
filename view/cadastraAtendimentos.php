        <!--Validacao de usuario logado-->
        <?php
        session_start();
        include 'validaLogin.php';
        include '../dao/conexao.php';
        ?> 
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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){

            $("#resfericood").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            })

            $("#rcilindricood").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            })
            $("#resfericooe").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            })
            $("#rcilindricooe").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            })
            $("#reixood").mask("000")
            $("#reixooe").mask("000")            
            $("#ravod").mask("00/00")
            $("#ravoe").mask("00/00") 
            $("#rambosolhos").mask("00/00")
            $("#radicao").mask("+0.00") 
            $("#chorizontalod").mask("00.00")
            $("#cverticalod").mask("00.00")
            $("#chorizontaloe").mask("00.00"    )
            $("#cverticaloe").mask("00.00")
            $("#ceixood").mask("000")
            $("#ceixooe").mask("000") 
            $("#lcesfericood").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            })
            $("#lccilindricood").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            })

            $("#lcesfericooe").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            })
            $("#lccilindricooe").mask("WSS.00", {
                translation: {
                    'W': {pattern: /[ +-]/},
                    'S': {pattern: /[ 0-9a-zA-Z]/}
                },
                reverse: false
            }) 
            $("#lceixood").mask("000")
            $("#lcavod").mask("00/00")            
            $("#lccbod").mask("0.00")
            $("#lcambosolhos").mask("00/00") 
            $("#lceixooe").mask("000")
            $("#lcavoe").mask("00/00") 
            $("#lccboe").mask("0.00")            
        })

        </script>

</head>

<body>

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

            <?php 
                require_once '../dao/tecnicoDAO.php';
               
                $cpf =$_SESSION["cpf"];
                $tecnicoDAO = new TecnicoDAO();
                $tecnico = $tecnicoDAO->getTecnicoByCpf($cpf);   

            ?>

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
                                <a class="nav-link" href="../view/listAtendimentos.php"><i class="fas fa-arrow-alt-circle-left"></i></a>
                            </li>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>  

            <!--modal cliente-->
            <div id="modal-cli" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Clientes</h4>
                  </div>
                  <div class="modal-body">
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("input[name=busca]").bind('input', function(){
                                var busca = $(this).val();
                                var conta = $(this).val().length;

                                if (conta>=1){
                                    $.post('buscacli.php',{s_post:busca},function(retorna){
                                        $("#results").html(retorna);
                                    });
                                }else{
                                    $("results").text('Pesquise algo');
                                }
                            });

                            $("#busca").submit(function(){

                            });

                        });
                    </script>

                    <input class="form-control" type="text" name="busca" id="busca">

                    <fieldset>
                        <table class="table"  id="results" name="results">
 
                        </table> 
                    </fieldset>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Salvar</button>
                  </div>
                </div>
              </div>
            </div>

            <!--modal medico-->
            <div id="modal-med" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Medicos</h4>
                  </div>
                  <div class="modal-body">
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("input[name=buscar]").bind('input', function(){
                                var buscar = $(this).val();
                                var contas = $(this).val().length;

                                if (contas>=1){
                                    $.post('buscamed.php',{s_post:buscar},function(retorna){
                                        $("#result").html(retorna);
                                    });
                                }else{
                                    $("result").text('Pesquise algo');
                                }
                            });

                            $("#busca").submit(function(){

                            });

                        });
                    </script>

                    <input class="form-control" type="text" name="buscar" id="buscar">

                    <fieldset>
                        <table class="table"  id="result" name="result">
 
                        </table> 
                    </fieldset>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="modal-save1">Salvar</button>
                  </div>
                </div>
              </div>
            </div>
            <!--modal produto-->
            <div id="modal-prod" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Lentes de Contato</h4>
                  </div>
                  <div class="modal-body">
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("input[name=buscou]").bind('input', function(){
                                var buscou = $(this).val();
                                var contage = $(this).val().length;

                                if (contage>=1){
                                    $.post('buscaprod.php',{s_post:buscou},function(retorna){
                                        $("#resultado").html(retorna);
                                    });
                                }else{
                                    $("resultado").text('Pesquise algo');
                                }
                            });

                            $("#buscou").submit(function(){

                            });

                        });
                    </script>

                    <input class="form-control" type="text" name="buscou" id="buscou">

                    <fieldset>
                        <table class="table"  id="resultado" name="resultado">
 
                        </table> 
                    </fieldset>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="modal-save2">Salvar</button>
                  </div>
                </div>
              </div>
            </div>

            <!--modal cadastra cliente-->
            <div id="modal-cadcli" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cadastro de cliente</h4>
                  </div>
                  <div class="modal-body">
                    <fieldset>
                    <!--Formulário de cadastro de Clientes-->
                        <form method="POST" action="../controller/processaCadastraClientesmodal.php">
                          <div class="form-row">
                            <div class="form-group col-md-5">
                              <label for="inputNome">Nome</label>
                              <input type="text" class="form-control" id="inputNome" placeholder="Nome Completo" name="nome" required="required" pattern="^[a-zA-Z][a-zA-Z- \.]{3,45}$" title="Digite apenas letras nesse campo" minlength="10" maxlength="45">
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputCpf">CPF</label>
                              <input type="text" class="form-control" id="CPF" placeholder="CPF" name="cpf" pattern="[0-9\s]+$" title="Digite apenas numeros nesse campo" maxlength="11">
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputRg">RG</label>
                              <input type="text" class="form-control" id="inputRg" placeholder="RG" name="rg" pattern="[0-9\s]+$" title="Digite apenas números nesse campo" maxlength="30">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputDataNascimento">Nascimento</label>
                              <input type="date" class="form-control" id="datanascimento" placeholder="Data de Nascimento" name="datanascimento" required="required" pattern="[0-9\s]+$" title="Digite apenas numeros nesse campo">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputLogradouro">Logradouro</label>
                                <input type="text" class="form-control" id="inputLogradouro" placeholder="Logradouro" name="logradouro" minlength="10" maxlength="100">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputBairro">Bairro</label>
                                <input type="text" class="form-control" id="inputBairro" placeholder="Bairro" name="bairro" minlength="5" maxlength="45">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" class="form-control" id="inputCidade" placeholder="Cidade" name="cidade" minlength="5" maxlength="45">
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputEstado">Estado</label>
                              <select id="inputEstado" class="form-control" name="estado">
                                <option value="DF" selected>DF</option>
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
                                <label for="inputTelefone">Tel. Res.</label>
                                <input type="tel" class="form-control" id="inputTelefone" placeholder="DDNNNNNNNNN" name="telefone" pattern="[0-9\s]+$" title="Digite só numeros nesse campo" maxlength="11">
                            </div>                    
                            <div class="form-group col-md-3">
                                <label for="inputCelular">Tel. Cel.</label>
                                <input type="tel" class="form-control" id="inputCelular" placeholder="DDNNNNNNNNN" name="celular" pattern="[0-9\s]+$" title="Digite só numeros nesse campo" maxlength="11">
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="Email" class="form-control" id="inputEmail" placeholder="Digite seu email" name="email" minlength="5" maxlength="100">
                            </div> 
                            <div class="form-group col-md-0">
                                <input type="hidden" class="form-control" id="inputStattus" name="stattus" value="A">
                            </div> 
                    

                    </fieldset>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="modal-save">Salvar</button>
                  </div>
                  <!--fim do formulario com o botao salvar incluso dentro do formulário-->
                    </form> 

                </div>
              </div>
            </div>
            <!--modal cadastrar medico-->
            <div id="modal-cadmed" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cadastro de Medico</h4>
                  </div>
                  <div class="modal-body">
                    <fieldset>
                     <!--Formulário de cadastro de medicos-->
                        <form method="POST" action="../controller/processaCadastraMedicosmodal.php">
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputNome">Nome</label>
                              <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome" required="required" pattern="^[a-zA-Z][a-zA-Z- \.]{3,45}$" title="Digite apenas letras nesse campo" minlength="10" maxlength="45">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputCpm">CRM/CRO</label>
                              <input type="text" class="form-control" id="Crm" placeholder="CRM" name="crm" title="Digite apenas numeros nesse campo" maxlength="45">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputClinica">Clinica</label>
                                <input type="text" class="form-control" id="inputClinica" placeholder="Clinica" name="clinica" minlength="10" maxlength="100">
                            </div>  
                            <div class="form-group col-md-12">
                                <label for="inputObs">Observações</label>
                                <input type="text" class="form-control" id="inputObs" placeholder="Observações" name="obs" maxlength="100">
                            </div> 
                            <div class="form-group col-md-0">
                                <input type="hidden" class="form-control" id="inputStattus" placeholder="stattus" name="stattus" value="A">
                            </div>                                       
                          </div>

                    </fieldset>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="modal-save1">Salvar</button>
                  </div>
                    </form>
                </div>
              </div>
            </div>

            <!--modal cadastra  produto-->
            <div id="modal-cadprod" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Lentes de Contato</h4>
                  </div>
                  <div class="modal-body">
                    <fieldset>
                    <!--Formulário de cadastro de produto-->
                        <form method="POST" action="../controller/processaCadastraProdutosmodal.php">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputDescricao">Descrição</label>
                              <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputMarca">Fornecedor</label>
                              <input type="text" class="form-control" id="marca" placeholder="Marca" name="marca">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputTipo">Tipo</label>
                              <input type="text" class="form-control" id="inputTipo" placeholder="Tipo" name="tipo">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputCor">Cor</label>
                              <input type="text" class="form-control" id="inputCor" placeholder="Cor" name="cor">
                            </div>
                            <div class="form-group col-md-12">
                               <label for="inputObs">Observação</label>
                               <input type="text" class="form-control" id="inputObs" placeholder="Observações" name="obs">
                            </div>
                            <div class="form-group col-md-0">
                              <input type="hidden" class="form-control" id="inputCor" name="stattus" value="A">
                            </div>
                          </div>
                    </fieldset>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="modal-save2">Salvar</button>
                  </div>
                     </form>
                </div>
              </div>
            </div>

            <h2>Novo Atendimento</h2>
            <!--Formulário de cadastro de Clientes-->
                <form method="POST" action="../controller/processaCadastraAtendimentos.php">
                  <div class="form-row">
                   <table> 
                    <tr>

                        <div class="form-group col-md-3 form-inline">
                                                        
                            <input type="text" class="form-control col-md-3" id="cliente" name="cliente" title="digite 'P'- Buscar 'C'-Cadastrar" autofocus required=""> 
                            <input type="text" class="form-control col-md-9" id="cli" name="cli" placeholder="Cliente" title="digite 'P'- Buscar 'C'-Cadastrar" disabled>
                            
                                         
                        </div>

                        <div class="form-group col-md-0 ">
                          <input type="hidden" class="form-control" id="tecnico" name="tecnico" value="<?php echo $tecnico['tecnico']?>">
                        </div>

                        <div class="form-group col-md-3 form-inline">
                          <input type="text" class="form-control col-md-3" id="medico" name="medico" title="digite 'P'- Buscar 'C'-Cadastrar" required="">
                          <input type="text" class="form-control col-md-9" id="med" name="med" placeholder="Médico" title="digite 'P'- Buscar 'C'-Cadastrar" disabled>

                          
                        </div>
                    
                        <div class="form-group col-md-0">
                          <input type="hidden" class="form-control" id="dataatendimento" placeholder="Data de Atemdimento" name="dataatendimento"  value="<?php echo date('d/m/Y')?>">
                        </div>                    
                        <div class="form-group col-md-3">
                          <label for="inputDataEntrega">Data de Entrega</label>
                          <input type="date" class="form-control" id="dataentrega" placeholder="Data de Entrega" name="dataentrega" required="required" pattern="[0-9\s]+$" title="Digite apenas numeros nesse campo">
                        </div>
                    <div class="form-group col-md-2">
                      <label for="inputEmpresa">Empresa</label>
                      <select id="inputEmpresa" class="form-control" name="empresa">
                        <option value="<?php echo $tecnico['empresa']?>" selected><?php echo $tecnico['empresa']?> - <?php echo $tecnico['razao']?></option>

                            <?php
                              require_once '../dao/empresaDAO.php';
                              
                              $empresaDAO = new EmpresaDAO();
                              $empresa = $empresaDAO->getAllEmpresas();
                            ?>
                            <?php                         
                              foreach ($empresa as $e) {
                                echo "<option value='{$e["idempresa"]}'>{$e["razao"]} {$e["cnpj"]} </option>";
                              }
                            ?>

                      </select>
                    </div>
                      </tr>  
                   </table>

                   <!-- tabela Refração--> 
                <div class="form-group col-md-12 atd">
                    <table  class="table-responsive" border='0px' width='100%' style='text-align:center;'> 

                      <tr>
                        <th colspan=6>REFRAÇÃO</th>
                      </tr>
                      <tr>
                        <th colspan=1></th>  <th colspan=1>ESFÉRICO</th> <th colspan=1>CILINDRICO</th> <th colspan=1>EIXO- º</th> <th colspan=1>AV</th>  <th colspan=1>AO</th>
                      </tr>                 
                      <tr>
                        <td>OD</td>
                        <td><input type="text" name="REsfericoOD" id="resfericood" size="10%"></td> 
                        <td><input type="text" name="RCilindricoOD" id="rcilindricood" size="10%"></td>
                        <td><input type="text" name="REixoOD" id="reixood" size="10%"></td>
                        <td><input type="text" name="RAvOD" id="ravod" size="10%"></td>
                        <td><input type="text" name="RAmbosOlhos" id="rambosolhos" size="10%"></td>
                      </tr>      
                      <tr><th colspan=5></th> <th>ADIÇÃO</th></tr>
                      <tr>
                        <td>OE</td>
                        <td><input type="text" name="REsfericoOE" id="resfericooe" size="10%"></td> 
                        <td><input type="text" name="RCilindricoOE" id="rcilindricooe" size="10%"></td>
                        <td><input type="text" name="REixoOE" id="reixooe" size="10%"></td>
                        <td><input type="text" name="RAvOE" id="ravoe" size="10%"></td>
                        <td><input type="text" name="RAdicao" id="radicao" size="10%"></td>
                      </tr>
                    </table>
                </div>    
                    <!-- tabela ceratometria-->
                <div class="form-group col-md-12 atd">
                    <table class="table-responsive" border='0px' width='100%' style='text-align:center'> 

                      <tr>
                        <th colspan=4>CERATOMETRIA</th>
                      </tr>
                      <tr>
                        <th  colspan=1></th> <th colspan=1>HORIZONTAL</th> <th colspan=1>VERTICAL</th> <th colspan=1>EIXO- º</th> 
                      </tr>                 
                      <tr>
                        <td>OD</td>
                        <td><input type="text" name="CHorizontalOD" id="chorizontalod" size="10%"></td> 
                        <td><input type="text" name="CVerticalOD" id="cverticalod" size="10%"></td>
                        <td><input type="text" name="CEixoOD" id="ceixood" size="10%"></td>

                      </tr>      
                      <tr>
                        <td>OE</td>
                        <td><input type="text" name="CHorizontalOE" id="chorizontaloe" size="10%"></td> 
                        <td><input type="text" name="CVerticalOE" id="cverticaloe" size="10%"></td>
                        <td><input type="text" name="CEixoOE" id="ceixooe" size="10%"></td>
                      </tr>
                    </table>
                </div>

                    <!--tabela lente de contato-->
                <div class="form-group col-md-12 atd">    
                     <table class="table-responsive" border='0px' width='100%' style='text-align:center'> 

                      <tr>
                        <th colspan=7>LENTE DE CONTATO</th>
                      </tr>
                      <tr>
                        <th colspan=1></th>  <th colspan=1>ESFÉRICO</th> <th colspan=1>CILINDRICO</th> <th colspan=1>EIXO- º</th> <th colspan=1>AV</th> <th colspan=1>CB</th> <th colspan=1>AO</th>
                      </tr>                 
                      <tr>
                        <td>OD</td>
                        <td><input type="text" name="LCEsfericoOD" id="lcesfericood" size="10%"></td> 
                        <td><input type="text" name="LCCilindricoOD" id="lccilindricood" size="10%"></td>
                        <td><input type="text" name="LCEixoOD" id="lceixood" size="10%"></td>
                        <td><input type="text" name="LCAvOD" id="lcavod" size="10%"></td>
                        <td><input type="text" name="LCCBOD" id="lccbod" size="10%"></td>        
                        <td><input type="text" name="LCAmbosOlhos" id="lcambosolhos" size="10%"></td>
                      </tr>      
                      <tr><th colspan=10%></th> <th></th></tr>
                      <tr>
                        <td>OE</td>
                        <td><input type="text" name="LCEsfericoOE" id="lcesfericooe" size="10%"></td> 
                        <td><input type="text" name="LCCilindricoOE" id="lccilindricooe" size="10%"></td>
                        <td><input type="text" name="LCEixoOE" id="lceixooe" size="10%"></td>
                        <td><input type="text" name="LCAvOE" id="lcavoe"  size="10%"></td>
                        <td><input type="text" name="LCCBOE" id="lccboe" size="10%"></td>
                      </tr>
                    </table>
                </div>

                    <table> 
                    <tr>

                        <div class="form-group col-md-3 form-inline">

                          <input type="text" class="form-control col-md-3" id="lente1" name="lente1" title="digite 'P'- Buscar 'C'-Cadastrar" value="1">
                          <input type="text" class="form-control col-md-9" id="len" name="len" placeholder="Produto 1" title="digite 'P'- Buscar 'C'-Cadastrar" disabled>
                          
                        </div>


                        <div class="form-group col-md-6">
                          <label for="inputlente2">Produto 2</label>
                          <input type="text" class="form-control" id="lente2" name="lente2">    
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputUsuariodelentes">Usa lentes</label>
                          <select id="inputUsuariodelentes" class="form-control" name="usuariodelentes">
                            <option value="S" selected>Sim</option>
                            <option value="N">Não</option>
                          </select>
                        </div>
                        <div class="form-group col-md-9">
                          <textarea class="form-control" cols=100% id="obs" rows="5%" name="obs" maxlength="500" wrap="hard" placeholder="Digite aqui alguma observação quanto ao atendimento. ! "></textarea>
                        </div>                         
                        <div class="form-group col-md-0">
                            <input type="hidden" class="form-control" id="inputStattus" name="stattus" value="A">
                        </div>
                      </tr>  
                   </table>
                    <div class="table" class="form-group">
                        <button type="submit" class="btn btn-info">Salvar</button>
                    </div>
                  </div>
                </form>


        </div>
    </div>

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
        <!--scrip de pesquisa do cliente-->
        <script type="text/javascript">
            $(() => {
              
              $("#modal-save").on("click", (event) => {
                event.preventDefault();
                const value = $("input[name=my_cliente]:checked").val();
                $('#modal-cli').modal('hide');
                $("input[name=cliente]").val(value);
              });


              $("#modal-save").on("click", (event) => {
                event.preventDefault();
                const value = $("input[name=my_cli]:checked").val();
                $('#modal-cli').modal('hide');
                $("input[name=cli]").val(value);
              });


            });
        </script>

</body>

</html>