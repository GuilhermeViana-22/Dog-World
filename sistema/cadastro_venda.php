<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Cadastra Venda</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous">

        
    
    </script>

    
        
</head>

<body class="sb-nav-fixed">

    <?php include 'nav.php'; ?>
   
    <div id="layoutSidenav">

    <?php include 'menu_lateral.php'; ?>


        <div id="layoutSidenav_content">
            <main>
               
            <div class="container-fluid">
			<form method="POST" action="crud_venda.php">
			
              <div class="card">
                <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Cadastrar venda</h3>
                            </div>
					
					<?php
						$dadosVenda;
						 if(isset($_REQUEST["cod_venda"])) {
							 echo "<input type='hidden' name='cod_venda' value='".$_REQUEST["cod_venda"]."'/>";
							 echo "<br/><h2 class='text-center'>Venda ativa: ".$_REQUEST["cod_venda"]."</h2>";
							 
							 $consultaDadosVenda = "SELECT * FROM vendas WHERE cod_venda = " . $_REQUEST["cod_venda"];
							 $queryDadosVenda = $conexao->query($consultaDadosVenda);
							 while($dadosBanco = $queryDadosVenda->fetch_assoc()) {
								 $dadosVenda = $dadosBanco;
							 }
						 }

					?>
						
        <?php if(isset($_GET["erro"]) && $_GET["erro"] == 1) { ?>

        <div class="alert alert-danger">
            Produto não existente.
        </div>

        <?php } else if(isset($_GET["erro"]) && $_GET["erro"] == 2) { ?>

        <div class="alert alert-danger">
            Produto da venda não existente.
        </div>
        <?php } else if(isset($_GET["erro"]) && $_GET["erro"] == 3) { ?>

        <div class="alert alert-danger">
            Terceiro erro.
        </div>
        <?php } else if(isset($_GET["erro"]) && $_GET["erro"] == 4) { ?>

        <div class="alert alert-danger">
            Terceiro erro.
        </div>
        <?php } else if(isset($_GET["erro"]) && $_GET["erro"] == 5) { ?>

        <div class="alert alert-danger">
            Erro ao cancelar venda.
        </div>
        <?php } ?>
		
		
		
		        <?php if(isset($_GET["sucesso"]) && $_GET["sucesso"] == 1) { ?>

        <div class="alert alert-success">
            Produto não existente.
        </div>

        <?php } else if(isset($_GET["sucesso"]) && $_GET["sucesso"] == 2) { ?>

        <div class="alert alert-success">
            Produto da venda não existente.
        </div>
        <?php } else if(isset($_GET["sucesso"]) && $_GET["sucesso"] == 3) { ?>

        <div class="alert alert-success">
            Terceiro erro.
        </div>
               <?php } else if(isset($_GET["sucesso"]) && $_GET["sucesso"] == 4) { ?>

        <div class="alert alert-success">
            Terceiro erro.
        </div>
                      <?php } else if(isset($_GET["sucesso"]) && $_GET["sucesso"] == 5) { ?>

        <div class="alert alert-success">
            Sucesso ao cancelar venda.
        </div>
        <?php } ?>
		
		
		
		
		
		
		
                    <div class="form-group">
                    <div class="form-group row">
                      <div class="col-md-6 col-xs-10">
                        <label class="small mb-2" for="inputFirstName">Nome</label>
                        <input class="form-control py-2" id="nome_cliente" name="nome_cliente" value="<?php if(isset($_REQUEST["cod_venda"])) {echo $dadosVenda["nome_cliente"];} ?>" type="text" placeholder="Digite o nome" />
                    
                    </div>
                    
                    <div class="col-md-3 col-xs-8">
                        <label class="small mb-2" for="inputFirstName" >CPF</label>
                        <input class="form-control py-2" id="cpf_cliente" value="<?php if(isset($_REQUEST["cod_venda"])) {echo $dadosVenda["cpf_cliente"];} ?>" name="cpf_cliente" type="text" placeholder="Digite o CPF" style="padding-right: 10px ;"/>
                        
                    </div>   
                    </div>

                    <div class="container-fluid">
                       <div class="form-group row">
					   <!--
                        <div class="form-group">
                            <label class="small mb-2" for="inputFirstName">Produto</label>
                            <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Nome do produto" />
                        </div>
						-->
                        <div class="form-group">
                            <label class="small mb-2" for="inputLastName">Código</label>
                            <input class="form-control py-2" id="cod_produto" name="cod_produto" type="text" placeholder="Digite o Código" />
                        </div>
                        
                        <div class="form-group">
                            <label class="small mb-2" for="inputLastName">Quantidade</label>
                            <input class="form-control py-2" id="cod_prod_quantidade" name="cod_prod_quantidade" type="text" placeholder="Digite a Quantidade" />
                        </div>
						<!--
                        <div class="form-group">
                            <label class="small mb-2" for="inputLastName">Valor</label>
                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o Valor" />
                        </div>
                       -->
					   <br/>
                     
                    </div>
                    <div class="form-group row col-md-12 ">
                      <div id="botoes" class="col-md-6 col-xs-12">
                            <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i>    Inserir</button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Remover</button>
                        </div>
                    </div>
                   <div class="form-group row col-md-2">
                     
                    </div>
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Nome do Produto</th>
                            <th scope="col">Código do produto</th>
                            <th scope="col">Código da Venda</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">#</th>
							
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
							if(isset($_REQUEST["cod_venda"])) {
								
								$consultaVenda = $conexao->query("SELECT * FROM produtos_venda INNER JOIN produto ON produtos_venda.cod_produto = produto.cod_produto WHERE cod_venda = " . $_REQUEST["cod_venda"]);
							    while($dados = $consultaVenda->fetch_assoc()) {
						?>
						
                          <tr>
                            <td><?php echo $dados["titulo"]; ?></td>
                            <td><?php echo $dados["cod_produto"]; ?></td>
                            <td><?php echo $dados["cod_venda"]; ?></td>
                            <td><?php echo $dados["cod_prod_quantidade"]; ?></td>
							<td><a class="btn btn-danger" href="crud_venda.php?cod_produto=<?php echo $dados["cod_produto"]; ?>&cod_venda=<?php echo $dados["cod_venda"]; ?>&deletar=1">X</a></td>
                          </tr>
						  
							<?php 
								}
							} ?>
                          
                        </tbody>
                      </table>
                   
                    </div>
                    <div class="form-group form-check">
                     
                      
                    </div>
					

               

              </div>
            </div>


</form>
					<?php 
						if(isset($_REQUEST["cod_venda"])) {
					?>
					
					<form method="POST" action="crud_venda.php">
					<input type="hidden" name="cod_venda" value="<?php if(isset($_REQUEST["cod_venda"])) {echo $_REQUEST["cod_venda"]; } ?>"/>
					     <div id="botoes" class="col-md-6 col-xs-12">
							<input name="finalizar_venda" value="Finalizar" type="submit" class="btn btn-success"/>
                      
							<input type="submit" name="cancelar_venda" value="Cancelar venda" class="btn btn-danger"/> 
						</div>
					</form>
					
						<?php } ?>


            </main>
    <?php include 'footer.php'; ?>
	  </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>