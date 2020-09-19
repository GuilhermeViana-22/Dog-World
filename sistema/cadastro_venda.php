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

    <?php include 'nav.html'; ?>
   
    <div id="layoutSidenav">

    <?php include 'menu_lateral.html'; ?>


        <div id="layoutSidenav_content">
            <main>
               
                <form>
                    <div class="form-group">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Cadastrar Venda</h3>
                        </div>
                      <div class="col-md-6 col-xs-12">
                        <label class="small mb-2" for="inputFirstName">Nome</label>
                        <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Digite o nome" />
                    </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <label class="small mb-2" for="inputFirstName" >CPF</label>
                        <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Digite o CPF" style="padding-right: 10px ;"/>
                        
                        
                    </div>

                    <div class="container-fluid">
                       <div class="form-group row">
                        <div class="form-group">
                            <label class="small mb-2" for="inputFirstName">Produto</label>
                            <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Nome do produto" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-2" for="inputLastName">Código</label>
                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o Código" />
                        </div>
                        
                        <div class="form-group">
                            <label class="small mb-2" for="inputLastName">Quantidade</label>
                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a Quantidade" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-2" for="inputLastName">Valor</label>
                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o Valor" />
                        </div>
                       
                        <div id="botoes" class="col-md-6 col-xs-12">
                            <button type="button" class="btn btn-success"><i class="fas fa-paw"></i>    Inserir</button>
                            <button type="button" class="btn btn-warning"><i class="fas fa-paw"></i> Alterar</button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Remover</button>
                        </div>
                    </div>
                    <div class="form-group row col-md-2 ">
                   
                    </div>
                   <div class="form-group row col-md-2">
                     
                    </div>
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>001</td>
                            <td>Ração golden sabor carne</td>
                            <td>2</td>
                            <td>R$60,00 </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>001</td>
                            <td>Ração golden sabor carne para gatos</td>
                            <td>2</td>
                            <td>R$60,00 </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>001</td>
                            <td>Ração golden sabor Frango</td>
                            <td>2</td>
                            <td>R$60,00 </td>
                          </tr>
                          
                        </tbody>
                      </table>
                   
                    </div>
                    <div class="form-group form-check">
                     
                      
                    </div>
                    <div id="botoes" class="col-md-6 col-xs-12">
                      <button type="button" class="btn btn-success"><i class="fas fa-paw"></i>  Finalizar</button>
                      
                      <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Cancelar venda</button>
                  </div>

                  </form>




            </main>
    <?php include 'footer.html'; ?>
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