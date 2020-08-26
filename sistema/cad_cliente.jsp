<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Relatórios </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <jsp:include page="nav.html" />

    <div id="layoutSidenav">

        <!--Tag de incorporação ao menu no codigo html

-->>

        <jsp:include page="menu_lateral.html" />

        <!--Tag de incorporação ao menu no codigo html

-->>

        <div id="layoutSidenav_content">


            <main>
                <!--
               -->
                <form>
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Cliente</h3>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="small mb-2" for="inputFirstName">Nome</label>
                                <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Digite o nome" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-2" for="inputLastName">Sobrenome</label>
                                <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o sobrenome" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="small mb-2" for="inputLastName">Idade</label>
                                <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a idade" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="small mb-1" for="inputLastName">CPF</label>
                                <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o CPF" />
                            </div>
                        </div>
                        <div class="form-group col-md-3 mb-0">
                            <label for="inputLastName">Sexo</label>
                            <select id="inputLastName" class="form-control py-2 ">
                            <option selected>---Escolher---</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="small mb-1" for="inputLastName">Telefone/Celular</label>
                                <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o Telefone" />
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-md-15">
                                <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
                                <input type="email" class="form-control py-2" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control py-3" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputAddress2">Complemento</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Apartamento, hotel, casa, etc.">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Cidade</label>
                                <select id="inputEstado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>...</option>
                              </select>
                            </div>

                        </div>

                        <div class="form-group row col-md-2 ">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </div>
                        <div class="form-group row col-md-2 ">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-warning">localizar</button>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </div>



                    </div>



                    <div class="card ">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-1">Animal</h3>
                        </div>
                        <div class="card-body">
                            <form>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                                      Novo Animal
                                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                                      Existente
                                                    </label>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="small mb-2" for="inputFirstName">Nome</label>
                                            <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Digite o nome" />
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="small mb-2" for="inputLastName">Idade</label>
                                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a idade" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">RGA</label>
                                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o CPF" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Raça</label>
                                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a Raça" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputLastName">Sexo</label>
                                        <select id="inputLastName" class="form-control py-2 ">
                                                        <option selected>---Escolher---</option>
                                                        <option>Macho</option>
                                                        <option>Femea</option>
                                                      </select>
                                    </div>
                                    <div class="form-group row col-md-2 ">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-success">Salvar</button>
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-2">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-warning">localizar</button>
                                        </div>
                                    </div>
                                    <div class="form-group row col-mb-1">
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-primary">Atualizar</button>
                                        </div>
                                    </div>



                                </div>
                            </form>
                        </div>
                    </div>
                </form>












            </main>
            <jsp:include page="footer.html" />
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