<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- icone -->
	<link rel="icon" href="imagem/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="imagem/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>SisOticas - Mudando o seu jeito de ver o mundo</title>
  </head>
  <body>
  
		<div class="container">
		  <div class="box">
		  		<section class="topo">
		  			<div class="row">
		  				<div class="col-sm-2">		  			
		  					<img src="imagem/LOGO.png" width="50px" height="50px" >
						</div>
		  				<div class="col-sm-10 centro">		  			
		  					<P>Centro de Adaptação de lentes de Contato</P>
						</div>
					</div>
		  		</section>

		  		<section class="corpo">

					<form method="POST" action="controller/loginController.php">
					 <div class="form-group row">
					    <div class="col-md-12">
					    	<input type="text" name="cpf" placeholder="CPF" class="form-control"></div>
					    <div class="col-md-12">
					    	<input type="password" name="senha" placeholder="Senha" class="form-control"></div>
					    <div class="col-md-12">
					    	<button type="submit" class="btn btn-secondary btn-lg btn-block btn-warning">Entrar</button>
					    </div>
					    <div class="col-md-12">
					    	<span class="ou">ou</span>
					    </div>
					 
					 </div>
 					</form>

					<div class="form-group row">
 					<!--inicio da div do modal-->
					    <div class="col-md-12">

							<!-- Botão para acionar modal -->
							<button type="button" class="btn btn-secondary btn-lg btn-block btn-info" data-toggle="modal" data-target="#modalCadastra">
							  clique aqui para o primeiro acesso
							</button>

							<!-- Modal -->
							<div class="modal fade" id="modalCadastra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Cadastre-se antes de utilizar o sistema</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
									<form method="POST" action="index2.php">
										 <div class="form-group row">
										    <div class="col-md-12">
										    	<input type="text" name="nome" placeholder="nome" class="form-control">
										    </div>
										    <div class="col-md-12">
										    	<input type="text" name="usuario" placeholder="CPF" class="form-control">
										    </div>
										    <div class="col-md-12">
										    	<input type="password" name="senha" placeholder="Senha" class="form-control"></div>										 
										 </div>

									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
									        <button type="submit" class="btn btn-primary">Salvar cadastro</button>
									      </div>
							      </form>
							    </div>
							  </div>
							</div>



					    </div>
					 </div>
		  		</section>


		  	</div>
	    
		  </div>
		</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>