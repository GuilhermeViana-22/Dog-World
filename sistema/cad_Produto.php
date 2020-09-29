<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Produto </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <?php include 'nav.php'; ?>

    <div id="layoutSidenav">

        <!--Tag de incorporação ao menu no codigo html

-->>

        <?php include 'menu_lateral.php'; ?>

        <!--Tag de incorporação ao menu no codigo html

-->>

        <div id="layoutSidenav_content">
       

            <main>
                <!-- formulario com os inputs de cadastro
               -->
                <form action="banco.php" method="post" name="produto">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Produto</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputnumber">Cod_Produto</label>
                                    <input class="form-control py-2" id="inputFirstName" name="codigo_produto" type="text" placeholder="Digite o Codigo" readonly/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputfirstName">Nome</label>
                                    <input class="form-control py-2" id="inputLastName" name="nome_produto" type="text" placeholder="Digite o Nome" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputLastName">Data</label>
                                    <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a data"  />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">lote</label>
                                    <input class="form-control py-2" id="inputLastName" name="lote_produto" type="text" placeholder="Digite o lote" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Quantidade</label>
                                    <input class="form-control py-2" id="inputLastName" name="qtda_produto" type="text" placeholder="Digite a quanridade" />
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Valor</label>
                                    <input class="form-control py-2" id="inputLastName" name="valor_produto" type="text" placeholder="Digite a quanridade" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Fornecedor</label>
                                    <input class="form-control py-2" id="inputLastName" name="fornecedor_idfornecedor" type="text" placeholder="Digite a quanridade" />
                                </div>
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="inputLastName">Categoria</label>
                                <select id="inputLastName" name="categoria_produto" class="form-control py-2 ">
                            <option selected id="categoria_produto">---Escolher---</option>
                            <option>Shanpoo</option>
                            <option>Condicionador</option>
                            <option>Sabonete</option>
                            <option>Ração</option>
                            <option>Remedios</option>
                            <option>Itens</option>
                            <option>Brinquedos</option>
                          </select>
                            </div>

                            <div id="botoes" class="col-md-6 col-xs-12">
                                <button type="button" name="cadastrar_produto" class="btn btn-success"><i class="fas fa-paw"></i>    Inserir</button>
                                <button type="button" class="btn btn-warning"><i class="fas fa-paw"></i> Alterar</button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Cancelar</button>
                            </div>







                        </div>



                    </div>
                </form>












            </main>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>