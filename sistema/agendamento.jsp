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
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <jsp:include page="nav.html" />

    <div id="layoutSidenav">

        <jsp:include page="menu_lateral.html" />

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br />
                    <h2>Agendar</h2>
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
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <br>
                            <select class="form-control">

                                <option>Novo Agendamento</option>
                                <option>Dona Marizete - Banho e Tosa</option>
                                <option>Luana - Banho</option>
                            </select>

                            <div class="form-check">
                                <br>
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Banho
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Banho e Tosa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Tosa
                                </label>
                            </div>
                            <br>
                            <button type="button" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Cancelar</button>
                            <button type="button" class="btn btn-warning"><i class="fas fa-paw"></i> Excluir</button>
                        </div>


                    </div>


                </div>
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