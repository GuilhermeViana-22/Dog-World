<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Funcionários </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>


</head>


<body class="sb-nav-fixed">
    <!--Tag de incorporação ao menu no codigo html

-->>
    <?php include 'nav.php'; ?>

    <!---- mudar a referência quebra o projeto do arquivo, faça uma cópia se precisar editar
    -->>

    <div id="layoutSidenav">
        <!--Tag de incorporação ao menu no codigo html

-->>
        <?php include 'menu_lateral.php'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Relatórios</h3>
                </div>

                <body>
                    <br>
                    <p>Clique em determinado elemento para gerar o relatório especifico do departamento</p>


                    <button class="btn-painel btn btn-dark" data-painel="painel-1" onclick="myFunction()">Vendas</button>
                    <button class="btn-painel btn btn-dark" data-painel="painel-2" onclick="myFunction2()">Clientes</button>
                    <button class="btn-painel btn btn-dark" data-painel="painel-3" onclick="myFunction3()">Colaboradores</button>
                    <button class="btn-painel btn btn-dark" data-painel="painel-4" onclick="myFunction4()">Fornecedores</button>

                    <div style="display:none;  padding:20px" id="vendas">
                        <table class="table table-striped">
                            <table class="table table-striped">
                                      <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Código da venda</th>
                                        <th scope="col">Código do Funcionário</th>
                                        <th scope="col">Data da venda</th>
                                        <th scope="col">Valor total</th>
                                        <th scope="col">Código serviço</th>
                                        <th scope="col">Horário</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                 $consultaTabela = "";
                                 if (isset($_GET["pesquisa"])) {
                                     $pesquisa = $_GET["pesquisa"];
                                     $consultaTabela = "SELECT * FROM vendas WHERE cod_venda LIKE '%$pesquisa%' OR sobrenome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%'";
                                 } else {
                                     $consultaTabela = "SELECT * FROM vendas";
                                 }
                                 $queryClietes = $conexao->query($consultaTabela);
                                 while ($dados = $queryClietes->fetch_assoc()) {
                                 ?>
                    <tr>
      
                                                <td><?php echo $dados["cod_venda"]; ?></td>
                                                <td><?php echo $dados["cod_funcionario"]; ?></td>
                                                <td><?php echo date("d/m/Y", strtotime($dados["data_venda"])); ?></td>
                                                <td><?php echo $dados["valor_total"]; ?></td>
                                                <td><?php echo $dados["cod_servico"]; ?></td>       
                                                <td><?php echo $dados["horario"]; ?></td>
                                             
                                              
                                    <?php
                                        }?>

                                </tbody>
                            </table>

                        </table>

                    </div>
                    <div style="display:none;  padding:20px;" id="financeiro">

                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="word-break: break-word;">Registro de matricula</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Data de nascimento</th>
                                    <th>Email</th>
                                    <th>telefone</th>
                                    <th>cidade</th>
                                    <th>ativo</th>


                                </tr>
                            </thead>

                            <?php
                            $consultaTabela = "";
                            if (isset($_GET["pesquisa"])) {
                                $pesquisa = $_GET["pesquisa"];
                                $consultaTabela = "SELECT * FROM cliente WHERE nome LIKE '%$pesquisa%' OR sobrenome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%'";
                            } else {
                                $consultaTabela = "SELECT * FROM cliente";
                            }
                            $queryClietes = $conexao->query($consultaTabela);

                            while ($dados = $queryClietes->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $dados["id_cliente"]; ?></td>
                                    <td><?php echo $dados["nome"]; ?></td>
                                    <td><?php echo $dados["cpf"]; ?></td>
                                    <!--Converter a data para formato pt-BR-->
                                    <td><?php echo date("d/m/Y", strtotime($dados["dt_nascimento"])); ?></td>
                                    <td><?php echo $dados["email"]; ?></td>
                                    <td><?php echo $dados["telefone"]; ?></td>
                                    <td><?php echo $dados["cidade"]; ?></td>
                                    <td><?php echo $dados["ativo"]; ?></td>

                                </tr>
                            <?php } ?>



                        </table>
                    </table>
                    </div>
                    <div style="display:none;  padding:20px;" id="colaboradores">
                        <table class="table table-striped">
                            <tr>
                                <thead class="thead-dark">
                                    <th>Nome</th>
                                    <th>Criado em </th>
                                    <th>Email</th>
                                    <th>Cargo</th>
                                    <th>Salário</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Cep</th>
                                </thead>

                            </tr>
                            <?php
                            $consultaTabela = "";
                            if (isset($_GET["pesquisa"])) {
                                $pesquisa = $_GET["pesquisa"];
                                $consultaTabela = "SELECT * FROM funcionario WHERE nome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%'";
                            } else {
                                $consultaTabela = "SELECT * FROM funcionario";
                            }
                            $queryClietes = $conexao->query($consultaTabela);

                            while ($dados = $queryClietes->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td class="word-break: break-word;"><?php echo $dados["nome"]; ?></td>
                                    <td><?php echo date("d/m/Y", strtotime($dados["dt_admicao"])); ?></td>
                                    <td><?php echo $dados["email"]; ?></td>
                                    <td><?php echo $dados["cargo"]; ?></td>
                                    <td><?php echo $dados["salario"]; ?></td>
                                    <td><?php echo $dados["cpf"]; ?></td>
                                    <td><?php echo $dados["telefone"]; ?></td>
                                    <td><?php echo $dados["Cep"]; ?></td>

                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div style="display:none; padding:20px;" id="fornecedores">
                        <table class="table table-striped">
                            <tr>
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Código fornecedor</th>
                                        <th class="thead-light">CNPJ</th>
                                        <th>Fornecedor</th>
                                        <th class="thead-light">Logradouro </th>
                                        <th>Numero</th>
                                        <th class="thead-light">Telefone</th>
                                    </tr>
                                </thead>
                            </tr>
                            <?php
                            $consultaTabela = "";
                            if (isset($_GET["pesquisa"])) {
                                $pesquisa = $_GET["pesquisa"];
                                $consultaTabela = "SELECT * FROM fornecedor WHERE cnpj LIKE '%$pesquisa%' or fornecedor LIKE '%$pesquisa%' ";
                            } else {
                                $consultaTabela = "SELECT * FROM fornecedor";
                            }
                            $queryfornecedor = $conexao->query($consultaTabela);

                            while ($dados = $queryfornecedor->fetch_assoc()) {
                            ?>
                                <tr>
                                    <!--Para alimentar a tabela com o banco de dados basta substituir o nome dos atribudos selecionardos de movo que faça correspondencia com o bnco-->
                                    <td><?php echo $dados["cod_fornecedor"]; ?></td>
                                    <td><?php echo $dados["cnpj"]; ?></td>
                                    <td><?php echo $dados["fornecedor"]; ?></td>
                                    <td><?php echo $dados["logradouro"]; ?></td>
                                    <td><?php echo $dados["num_comp"]; ?></td>
                                    <td><?php echo $dados["telefone"]; ?></td>

                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("vendas");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                        function myFunction2() {
                            var z = document.getElementById("financeiro");
                            if (z.style.display === "none") {
                                z.style.display = "block";
                            } else {
                                z.style.display = "none";
                            }
                        }

                        function myFunction3() {
                            var a = document.getElementById("colaboradores");
                            if (a.style.display === "none") {
                                a.style.display = "block";
                            } else {
                                a.style.display = "none";
                            }
                        }

                        function myFunction4() {
                            var b = document.getElementById("fornecedores");
                            if (b.style.display === "none") {
                                b.style.display = "block";
                            } else {
                                b.style.display = "none";
                            }
                        }
                    </script>

                </body>
                <br><br>
                <p><b>Nota:</b> Para esconder o relatório basta clicar no botão novamente.</p>
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