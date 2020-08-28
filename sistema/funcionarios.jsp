<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Funcionários</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
<!--Tag de incorporação ao menu no codigo html

-->>
    <jsp:include page="nav.html" />

    <!---- mudar a referência quebra o projeto do arquivo, faça uma cópia se precisar editar
    
    
    -->>

    <div id="layoutSidenav">

        <jsp:include page="menu_lateral.html" />

        <div id="layoutSidenav_content">
            <main>
               <section id="section-form">
                <div class="container">
                    <form>
                        <ul class="flex-outer">
                            <li>
                                <label class="text-input"  for="matricula">Matricula</label>
                                <input type="text" class="form-control"  id="form-input" placeholder="Digite o número matricula" width="">
                            </li>
                            <li>
                                <label class="text-input" for="nome">Nome</label>
                                <input type="text" class="form-control"  id="form-input" placeholder="Digite o nome">
                            </li>
                            <li>
                                <label class="text-input" for="cargo">Cargo</label>
                                <input type="text" class="form-control"  class="form-control"  id="form-input" placeholder="Digite o cargo">
                            </li>
                            <li>
                                <label class="text-input" for="email">Email</label>
                                <input type="text"class="form-control"  class="form-control"  id="form-input" placeholder="Digite o email">
                            </li>
                            <li>
                                <label class="text-input" for="idade">Idade</label>
                                <input type="text"class="form-control"  id="form-input" placeholder="Digite a idade">
                            </li>
                            <li>
                                <label class="text-input" for="salario">Salário</label>
                                <input type="text" class="form-control" id="form-input" placeholder="Digite o salário">
                            </li>
                            <li>
                                <label class="text-input" for="data">Admissão</label>
                                <input type="text"class="form-control"  id="form-input" placeholder="Digite a data de admissão">
                                <br>
                                <button type="button" class="btn btn-secondary">Novo</button>
                                <button type="button" class="btn btn-secondary">Salvar</button>
                                <button type="button" class="btn btn-secondary">Alterar</button>
                                <button type="button" class="btn btn-secondary">Deletar</button>
                                
                            </li>
                            <li>
                    </form>
                </div>
               </section>
               <div>
                <br>
            </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <label>
                               <h6><strong> Mostrar:</strong></h6>
                                <select name="example_length" aria-controls="example"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="###"> ------Selecione-------</option>
                                    <option value="###">Vendas</option>
                                    <option value="###">Administração</option>
                                    <option value="###">Gerência</option>
                                    <option value="###">Diretoria</option>
                                    <option value="###">Operador</option>
        
                                </select>
        
                            </label>
                        </div> 
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <div id="example_filter" class="dataTables_filter">
                                <!---Pesquisa por nome de colaborador em  tabela-->

                                <label><h6><strong> Pesquisar:</strong></h6><input
                                    
                                        type="search" class="form-control form-control-sm" style="width: 400px;" placeholder=""
                                        aria-controls="example"></label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <br>
                    </div>
                   
                    <table class="table table-striped table-dark" style="background: rgb(9,5,71);
                    background: linear-gradient(90deg, rgba(9,5,71,1) 0%, rgba(53,60,68,1) 0%, rgba(2,15,31,1) 96%);;">
                        <thead>
                            <tr>
                                <th scope="col">Matricula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Email</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Salario</th>
                                <th scope="col">Data de admissão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>

                        </tbody>
                    </table>

            </main>
            <jsp:include page="footer.html" />
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