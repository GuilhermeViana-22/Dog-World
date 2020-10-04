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

    <?php include 'nav.php'; ?>


    <!--Tag de incorporação ao menu no codigo html

-->


    <div id="layoutSidenav">


        <?php include 'menu_lateral.php'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2>Agendar</h2>
                    <div class="row" style="background-color: #ebf2ff;">
                        <div class="col-xl-12 col-md-12">
                            <br>
                            <div class="form-group row">
                                <!--    <form action="/action_page.php">
                                    <fieldset>
                                        <legend>Personalia:</legend>
                                        <label for="fname">First name:</label>
                                        <input  class="form-control py-2" id="inputFirstName" type="text" placeholder="  "  type="text" id="fname" name="fname"><br><br>
                                        <label for="lname">Last name:</label>
                                        <input type="text" id="lname" name="lname"><br><br>
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <label for="birthday">Birthday:</label>
                                        <input type="date" id="birthday" name="birthday"><br><br>
                                        <input type="submit" value="Submit">
                                    </fieldset>
                                </form>-->
                        
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputFirstName">Código Animal</label>
                                        <input class="form-control py-2" id="inputFirstName" type="text" placeholder="  " />
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputFirstName">Código cliente</label>
                                        <input class="form-control py-2" id="inputFirstName" type="text" placeholder="" />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputLastName">Nome</label>
                                        <input class="form-control py-2" id="inputLastName" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputBirth">Data de Agendamento</label>
                                        <input type="date" class="form-control" id="exampleInputBirth" name="dt_agendamento">
                                    </div>
                                </div>
                             
                                <form class="col-md-6">

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
                                    </div>
                                </form>

                                <br>
                                <label style="padding: 20px;" for="inputLastName">Servi&ccedil;os</label>
                                <select class="form-control">
                                    <option>Selecione</option>
                                    <option>Banho</option>
                                    <option>Tosa</option>
                                    <option> Banho e Tosa</option>
                                </select>
                                <label style="padding: 20px;" for="inputLastName">Horario</label>
                                <select class="form-control">
                                    <label for="inputLastName">Horario</label>
                                    <option>Selecione</option>
                                    <option>12:00</option>
                                    <option>13:30</option>
                                    <option>15:00</option>
                                </select>


                                <br>

                                <div class="row-center" style="padding: 30px;">
                                    <button type="button" class="btn btn-success"><i class="fas fa-paw"></i>Agendar</button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Cancelar</button>

                                </div>

                                <br><br>

                                <div class="col-md-12 ">
                                    <div class="card">

                                        <div class="card-header">

                                            <i class="fas fa-table mr-6"></i> Agendados

                                        </div>
                                        <form method="GET" style="margin-top:40px; font-size: 11pt;" action=".php">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <br />
                                                        <div style="padding-left:45px;" class="col-md-3">
                                                            Pesquisa :
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" value="<?php if (isset($_GET["pesquisa"])) {
                                                                                            echo $_GET["pesquisa"];
                                                                                        } ?>" name="pesquisa" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="submit" class="btn btn-primary" value="pesquisar">
                                                </div>
                                        </form>
                                    </div>
                                    <form method="GET" style="margin-top:15px; font-size: 10pt;" action="cad_funcionariov2.php">

                                        <div class="card-body mr-2">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Código serviço</th>
                                                    <th>Nome do cliente</th>
                                                    <th>Nome do Animal</th>
                                                    <th>Agendado para </th>
                                                    <th>Tipo de atendimento</th>
                                                    <th>Horário</th>
                                                    <th>Valor</th>
                                                    <th>Ações</th>
                                                </tr>
                                                <?php
                                                $consultaTabela = "";
                                                if (isset($_GET["pesquisa"])) {
                                                    $pesquisa = $_GET["pesquisa"];
                                                    $consultaTabela = "SELECT * FROM atendimento WHERE  LIKE '%$pesquisa%";
                                                } else {
                                                    $consultaTabela = "SELECT * FROM atendimento";
                                                }
                                                $queryClietes = $conexao->query($consultaTabela);
                                                while ($dados = $queryClietes->fetch_assoc()) {
                                                ?>
                                                    <tr>
                                                        <!--Para alimentar a tabela com o banco de dados basta substituir o nome dos atribudos selecionardos de movo que faça correspondencia com o bnco-->
                                                        <td style="color:#1E90FF;"><?php echo $dados["cod_servico"]; ?></td>
                                                        <td><?php echo $dados["cod_cliente"]; ?></td>
                                                        <td><?php echo $dados["cod_animal"]; ?></td>
                                                        <!--Converter a data para formato pt-BR-->
                                                        <td><?php echo date("d/m/Y", strtotime($dados["dt_agendamento"])); ?></td>
                                                        <td><?php echo $dados["tipo_atendimento"]; ?></td>
                                                        <td><?php echo $dados["horario"]; ?></td>
                                                        <td><?php echo $dados["valor"]; ?></td>


                                                        <td>
                                                            <a href="agendamento.php?cod_cliente=<?php echo $dados["cod_cliente"]; ?>" class="btn btn-primary"><i style="font-size:x-small;" class="fas fa-pencil-alt"></i></a>
                                                            &nbsp;&nbsp;



                                                            <a href="crud_agendamento.php?excluir=1&id_cliente=<?php echo $dados["cod_cliente"]; ?>" class="btn btn-danger btn-excluir-cliente"><i style="" class="fas fa-times"></i></a>
                                                        </td>

                                                    </tr>
                                                <?php } ?>
                                            </table>
                                    </form>

                                </div>


                            </div>
                        </div>


                    </div>


                </div>
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