<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <style>
        #img {
            position: relative;
            left: 30%;
            height: 30%;
            width: 500px;
            height: 500px;
        }
        
        @media screen and (min-width: 300px) and (max-width: 500px) {
            #img {
                position: relative;
                left: 20%;
                height: 30%;
                width: 300px;
                height: 300px;
            }
        }
    </style>
</head>

<body class="sb-nav-fixed">
 
    <jsp:include page="nav.html" />

    <div id="layoutSidenav">

        <jsp:include page="menu_lateral.html" />

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br />
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card bg-primary text-white mb-4" style="padding: 20px;font-size: 25px;">
                                <div class="row">
                                    <div class="col-md-10"><i class="fas fa-chart-line" style="font-size: 35px;"></i>
                                        Total de vendas de hoje </i></div>
                                    <div class="col-md-2">R$ 253,00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    Ùltimas Vendas
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Produtos</th>
                                            <th>Total</th>
                                        </tr>
                                        <tr>
                                            <td class="td">136857</td>
                                            <td>Gustavo Brito</td>
                                            <td>5x Ração ; 2x Brinquedo; 2x Banho </td>
                                            <td>R$ 89, 99</td>

                                        </tr>
                                        <tr>
                                            <td class="td" >134587</td>
                                            <td>Pedro oliveira</td>
                                            <td>5x Ração ; 2x Brinquedo; 2x Banho </td>
                                            <td>R$ 89, 99</td>

                                        </tr>
                                        <tr>
                                            <td class="td">136598</td>
                                            <td>Lucas Marques</td>
                                            <td>5x Ração ; 2x Brinquedo; 2x Banho </td>
                                            <td>R$ 89, 99</td>

                                        </tr>
                                        <tr>
                                            <td class="td">136485</td>
                                            <td>Marcos Garcia</td>
                                            <td>5x Ração ; 2x Brinquedo; 2x Banho </td>
                                            <td>R$ 89, 99</td>

                                        </tr>
                                        <tr>
                                            <td class="td">136456</td>
                                            <td>Eliane</td>
                                            <td>5x Ração ; 2x Brinquedo; 2x Banho </td>
                                            <td>R$ 89, 99</td>

                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>


                    </div>


                </div>
                <img src="img/dg.png" id="img">
        
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/pets.jpg" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/imgc2.jpg" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/imgc3.jpg" alt="Terceiro Slide">

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/imgc4.jpg" alt="Terceiro Slide">

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
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