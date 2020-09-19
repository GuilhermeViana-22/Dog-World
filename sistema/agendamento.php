<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Agendamento</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <!--Tag de incorporação ao menu no codigo html

-->>

    <?php include 'nav.html'; ?>


    <!--Tag de incorporação ao menu no codigo html

-->


    <div id="layoutSidenav">


        <?php include 'menu_lateral.html'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br />
                    <h2>Agendar</h2>

                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <br>
                            <div class="form-group row">


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputFirstName">RGA</label>
                                        <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Digite o nome" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputLastName">Nome</label>
                                        <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o sobrenome" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="">
                                        <h4></h4>
                                        <ul class="weekdays">
                                            <li>Seg</li>
                                            <li>Ter</li>
                                            <li>Qua</li>
                                            <li>Qui</li>
                                            <li>Sex</li>
                                            <li>Sab</li>
                                            <li>Dom</li>
                                        </ul>

                                        <ul class="days">
                                            <section class="estilo">
                                                <li>1</li>
                                                <li>2</li>
                                                <li>3</li>
                                                <li>4</li>
                                                <li>5</li>
                                                <li>6</li>
                                                <li>7</li>
                                                <li>8</li>
                                                <li>9</li>
                                                <li>10</li>
                                                <li>11</li>
                                                <li>12</li>
                                                <li>13</li>
                                                <li>14</li>
                                                <li>15</li>
                                                <li>16</li>
                                                <li>17</li>
                                                <li>18</li>
                                                <li>19</li>
                                                <li>20</li>
                                                <li>21</li>
                                                <li>22</li>
                                                <li>23</li>
                                                <li>24</li>
                                                <li>25</li>
                                                <li>26</li>
                                                <li>27</li>
                                                <li>28</li>
                                                <li>29</li>
                                                <li>30</li>
                                                <li>31</li>
                                            </section>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <br>
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Novo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Existente
                                </label>
                            </div><br>
                            <label for="inputLastName">Servi&ccedil;os</label>
                            <select class="form-control">
                                <option>Selecione</option>
                                <option>Banho</option>
                                <option>Tosa</option>
                                <option> Banho e Tosa</option>
                            </select>
                            <label for="inputLastName">Horario</label>
                            <select class="form-control">
                                <label for="inputLastName">Horario</label>
                                <option>Selecione</option>
                                <option>12:00</option>
                                <option>13:30</option>
                                <option>15:00</option>
                            </select>

                            <br>

                            <button type="button" class="btn btn-success"><i class="fas fa-cart-plus"></i>Agendar</button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Cancelar</button>


                            <br><br>
                            <div class="row w-100">
                                <div class="col-xl-12 col-md-12 ">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="fas fa-table mr-6"></i> Agendados
                                        </div>
                                        <div class="card-body mr-1">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>RGA</th>
                                                    <th>Nome</th>
                                                    <th>Data</th>
                                                    <th>Horario</th>
                                                    <th>Servi&ccedil;os</th>
                                                    <th>Observa&ccedil;&atilde;o</th>
                                                    <th>Status</th>
                                                </tr>
                                                <tr>
                                                    <td class="td">136857</td>
                                                    <td>Max</td>
                                                    <td>21/09/2020</td>
                                                    <td>13:30</td>
                                                    <td>Bnho e Tosa</td>
                                                    <td>Alergico a talco</td>
                                                    <td>Agendado</td>

                                                </tr>
                                                <tr>
                                                    <td class="td">134587</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="td">136598</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="td">136485</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="td">136456</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>


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