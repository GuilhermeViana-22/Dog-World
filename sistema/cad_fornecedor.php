<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Fornecedor </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <?php include 'nav.html'; ?>

    <div id="layoutSidenav">

        <!--Tag de incorporação ao menu no codigo html

-->>

        <?php include 'menu_lateral.html'; ?>

        <!--Tag de incorporação ao menu no codigo html

-->>

        <div id="layoutSidenav_content">


            <main>
                <!-- formulario com os inputs de cadastro
               -->
                <form>
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Fornecedor</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputnumber">Cod Fornecedor:</label>
                                    <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Digite o C&#243digo" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputfirstName">Raz&#227;o Social</label>
                                    <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a raz&#227;o Social" />
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">CNPJ</label>
                                    <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o CNPJ" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Endere&ccedil;o</label>
                                    <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a Endere&ccedil;o" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Telefone</label>
                                    <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o Telefone" />
                                </div>
                            </div>

                            <div id="botoes" class="col-md-6 col-xs-12">
                                <button type="button" class="btn btn-success"><i class="fas fa-paw"></i>    Inserir</button>
                                <button type="button" class="btn btn-warning"><i class="fas fa-paw"></i> Alterar</button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Cancelar</button>
                            </div>
                            
                    </div>


            </main>
            <?php include 'footer.html'; ?>
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