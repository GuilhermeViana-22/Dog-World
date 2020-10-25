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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Agendamento</h3>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <br>
                                <?php if (isset($_GET["sucesso"])) { ?>
                                    <div class="alert alert-success">

                                        <?php
                                        # esse numero 1 refere-se a mensagem de sucesso exibida  no inicio da tela
                                        # se o if ficar atrelado ao primeiro laço ele estará no laço de inserir referenciado no 
                                        # crud_cliente
                                        # logo ele retorna a mensagem de cliente inserido com sucsso
                                        if ($_GET["sucesso"] == 1) {
                                            echo "Agendado!";
                                            # esse numero 2 refere-se a mensagem de sucesso exibida  no inicio da tela
                                            # se o if ficar atrelado ao segundo laço ele estará no laço de atualizar que esta referenciado no 
                                            # crud_cliente
                                            # logo ele retorna a mensagem de cliente inserido com sucsso
                                        } else if ($_GET["sucesso"] == 2) {
                                            echo "Agendamento atualizado com sucesso!";
                                        } else {
                                            echo "Agendamento excluído com sucesso!";
                                        }
                                        ?>
                                    </div>

                                <?php } ?>

                                <?php if (isset($_GET["erro"])) { ?>
                                    <div class="alert alert-danger">
                                        <?php
                                        if ($_GET["erro"] == 1) {
                                            echo "Erro ao inserir Agendamento!";
                                        } else if ($_GET["erro"] == 2) {
                                            echo "Erro ao atualizar Agendamento!";
                                        } else if ($_GET["erro"] == 3) {
                                            echo "Erro ao excluir Agendamento!";
                                        } else {
                                            echo "Horário de agendamento ocupado, por favor, selecione outro horário.";
                                        }
                                        ?>
                                    </div>
                                <?php } ?>

                                <form action="crud_agendamento.php" method="post" name="FormAgendar" class="fomr-group row">
                                    <div id="form" class="form-group row">
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
                                        <?php
                                        $dados;
                                        if (isset($_GET["cod_servico"])) {

                                            $queryCliente = $conexao->query("SELECT * FROM atendimento WHERE cod_servico = " . $_GET["cod_servico"]);
                                            $dados = $queryCliente->fetch_assoc();
                                        ?>
                                            <input type="hidden" name="cod_servico" value="<?php echo $_GET["cod_servico"]; ?>" />
                                        <?php } ?>


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label style="margin-left: 20px;" class="small mb-2" for="inputFirstName">Nome Animal</label>
                                                <select style="margin-left: 20px;" class="form-control" name="id_animal">
                                                    <option>Selecione</option>
                                                    <?php


                                                    $consultaAnimal = "SELECT * FROM animal";
                                                    $queryAnimal = $conexao->query($consultaAnimal);
                                                    while ($dadosAnimal1 = $queryAnimal->fetch_assoc()) {
                                                    ?>
                                                        <?php
                                                        if (isset($_GET["cod_servico"])) {
                                                            $resultadoVerificaAnimal = $conexao->query("SELECT * FROM atendimento WHERE cod_servico = " . $_GET["cod_servico"]);
                                                            $dadosAnimal = $resultadoVerificaAnimal->fetch_assoc();
                                                            if ($dadosAnimal["id_animal"] == $dadosAnimal1["id_animal"]) {
                                                                echo '<option selected value="' . $dadosAnimal1["id_animal"] . '">' . $dadosAnimal1["nome"] . '</option>';
                                                            } else {
                                                                echo '<option value="' . $dadosAnimal1["id_animal"] . '">' . $dadosAnimal1["nome"] . '</option>';
                                                            }
                                                        ?>
                                                        <?php
                                                        } else {
                                                            echo '<option value="' . $dadosAnimal1["id_animal"] . '">' . $dadosAnimal1["nome"] . '</option>';
                                                        }
                                                        ?>


                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-2" for="inputLastName">Nome do Cliente</label>
                                                <select style="margin-left: 20px;" class="form-control" name="cod_cliente">
                                                    <option>Selecione</option>
                                                    <?php


                                                    $consultaCliente = "SELECT * FROM cliente";
                                                    $queryCliente = $conexao->query($consultaCliente);
                                                    while ($dadosCliente = $queryCliente->fetch_assoc()) {
                                                    ?>
                                                        <?php
                                                        if (isset($_GET["cod_servico"])) {
                                                            $resultadoVerificaAnimal = $conexao->query("SELECT * FROM atendimento WHERE cod_servico = " . $_GET["cod_servico"]);
                                                            $dadosverificaCliente = $resultadoVerificaAnimal->fetch_assoc();
                                                            if ($dadosCliente["id_cliente"] == $dadosverificaCliente["cod_cliente"]) {
                                                                echo '<option selected value="' . $dadosCliente["id_cliente"] . '">' . $dadosCliente["nome"] . '</option>';
                                                            } else {
                                                                echo '<option value="' . $dadosCliente["id_cliente"] . '">' . $dadosCliente["nome"] . '</option>';
                                                            }
                                                        ?>
                                                        <?php
                                                        } else {
                                                            echo '<option value="' . $dadosCliente["id_cliente"] . '">' . $dadosCliente["nome"] . '</option>';
                                                        }
                                                        ?>


                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="margin-left: 20px;" for="exampleInputBirth">Data de Agendamento</label>
                                                <input style="margin-left: 20px;" type="date" min="2020-10-26" max="2020-11-24" class="form-control" value="<?php if (isset($_GET["cod_servico"])) {
                                                                                                                                echo $dados["dt_agendamento"];
                                                                                                                            } ?>" name="dt_agendamento" id="inputLastName">
                                            </div>
                                        </div>

                                       



                                        <br>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label style="margin-left: 20px;" for="inputLastName">Servi&ccedil;os</label>
                                                <select style="margin-left: 20px;" class="form-control" name="tipo_atendimento">
                                                    <option>Selecione</option>
                                                    <?php

                                                    $consultaServicos = "SELECT * FROM produto WHERE categoria = 'Serviços'";

                                                    $queryServicos = $conexao->query($consultaServicos);
                                                    while ($dadosServicos = $queryServicos->fetch_assoc()) {
                                                    ?>
                                                    <?php
                                                        if (isset($_GET["cod_servico"])) {
                                                            $resultadoVerificaServico = $conexao->query("SELECT * FROM atendimento WHERE cod_servico = " . $_GET["cod_servico"]);
                                                            $dadosverificaServico = $resultadoVerificaServico->fetch_assoc();
                                                            if ($dadosServicos["cod_produto"] == $dadosverificaServico["tipo_atendimento"]) {
                                                                echo '<option selected value="' . $dadosServicos["cod_produto"] . '">' . $dadosServicos["titulo"] . '</option>';
                                                            } else {
                                                                echo '<option value="' . $dadosServicos["cod_produto"] . '">' . $dadosServicos["titulo"] . '</option>';
                                                            }
                                                        ?>
                                                        <?php
                                                        } else {
                                                            echo '<option value="' . $dadosServicos["cod_produto"] . '">' . $dadosServicos["titulo"] . '</option>';
                                                        }
                                                        ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <?php

    $horarios = array(
        "12:00:00" => "12:00:00",
        "13:30:00" => "13:30:00",
        "15:00:00" => "15:00:00",
    );
    ?>
                                                <label style="margin-left: 20px;"for="inputLastName">Horario</label>
                                                <select style="margin-left: 20px;" class="form-control" name="horario">
                                                    <label for="inputLastName">Horario</label>
                                                    <option>Selecione</option>
                                                    
                                                    <?php
                                            # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                            if (isset($_GET["cod_servico"])) {
                                                $resultadoVerificaHorario = $conexao->query("SELECT * FROM atendimento WHERE cod_servico = " . $_GET["cod_servico"]);
                                                $dadosverificaHorario = $resultadoVerificaHorario->fetch_assoc();
                                                foreach ($horarios as $key => $value) {
                                                    if ($dadosverificaHorario["horario"] == $key) {
                                                        echo "<option value=" . $key . " selected>" . $value . "</option>";
                                                    } else {
                                                        echo "<option value=" . $key . ">" . $value . "</option>";
                                                    }
                                                }
                                            } else {
                                                foreach ($horarios as $key => $value) {
                                                    echo "<option value=" . $key . ">" . $value . "</option>";
                                                }
                                            }
                                            ?>




                                                </select>
                                            </div>
                                        </div>


                                        <br>
                                        <br>
                                        <br>

                                        <div class="row-center" style="padding: 33px; margin-left: 20px;">
                                            <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i>Agendar</button>


                                        </div>
                                </form>

                                </article>
                                <br><br>

                                <div class="col-md-12 ">
                                    <div class="card">

                                        <div class="card-header">

                                            <i class="fas fa-table mr-6"></i> Agendados

                                        </div>
                                        <form method="GET" style="margin-top:15px;" action="agendamento.php">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <br />
                                                        <div style="padding-left:25px;" class="col-md-3">
                                                            Pesquisar :
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


                                    <div class="card-body mr-2">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Código Agendamento</th>
                                                <th>Nome do Animal</th>
                                                <th>Cliente</th>
                                                <th>cod funcionario </th>
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
                                                $consultaTabela = "SELECT atendimento.cod_servico, animal.nome as NomeAnimal, cliente.nome as NomeCliente, atendimento.cod_funcionario, atendimento.dt_agendamento, produto.titulo, atendimento.horario,  produto.valor_unitario FROM atendimento INNER JOIN cliente ON atendimento.cod_cliente = cliente.id_cliente INNER JOIN animal ON animal.id_animal = atendimento.id_animal INNER JOIN produto ON atendimento.tipo_atendimento = produto.cod_produto WHERE animal.nome LIKE '%$pesquisa%'";
                                            } else {
                                                $consultaTabela = "SELECT atendimento.cod_servico,  animal.nome as NomeAnimal, cliente.nome as NomeCliente, atendimento.cod_funcionario, atendimento.dt_agendamento, produto.titulo, atendimento.horario,  produto.valor_unitario FROM atendimento INNER JOIN cliente ON atendimento.cod_cliente = cliente.id_cliente INNER JOIN animal ON animal.id_animal = atendimento.id_animal INNER JOIN produto ON atendimento.tipo_atendimento = produto.cod_produto";
                                            }
                                            $queryAtendimento = $conexao->query($consultaTabela);
                                            while ($dados = $queryAtendimento->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <!--Para alimentar a tabela com o banco de dados basta substituir o nome dos atribudos selecionardos de movo que faça correspondencia com o bnco-->
                                                    <td style="color:#1E90FF;"><?php echo $dados["cod_servico"]; ?></td>
                                                    <td><?php echo $dados["NomeAnimal"]; ?></td>
                                                    <td><?php echo $dados["NomeCliente"]; ?></td>
                                                    <td><?php echo $dados["cod_funcionario"]; ?></td>
                                                    <!--Converter a data para formato pt-BR-->
                                                    <td><?php echo date("d/m/Y", strtotime($dados["dt_agendamento"])); ?></td>
                                                    <td><?php echo $dados["titulo"]; ?></td>
                                                    <td><?php echo $dados["horario"]; ?></td>
                                                    <td><?php echo $dados["valor_unitario"]; ?></td>


                                                    <td>
                                                        <a href="agendamento.php?cod_servico=<?php echo $dados["cod_servico"]; ?>" class="btn btn-primary"><i style="font-size:x-small;" class="fas fa-pencil-alt"></i></a>
                                                        &nbsp;&nbsp;



                                                        <a href="crud_agendamento.php?excluir=1&cod_servico=<?php echo $dados["cod_servico"]; ?>" class="btn btn-danger btn-excluir-cliente"><i style="" class="fas fa-times"></i></a>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>


                                </div>


                            </div>
                        </div>
                        <?php include 'footer.php'; ?>
            </main>
        </div>

    </div>
    </div>


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
    <script src="js/jquery.mask.js"></script>
    <script>
    jQuery(document).ready(function() {
        $('.nome').mask('A', {
  translation: {
    A: { pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/g, recursive: true },
  },
});
 

    })
</script>
</body>

</html>