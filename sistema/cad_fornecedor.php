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
               <?php if (isset($_GET["sucesso"])) { ?>
               <div class="alert alert-success">
    <?php
    # esse numero 1 refere-se a mensagem de sucesso exibida  no inicio da tela
    # se o if ficar atrelado ao primeiro laço ele estará no laço de inserir referenciado no 
    # crud_cliente
    # logo ele retorna a mensagem de cliente inserido com sucsso
    if ($_GET["sucesso"] == 1) {
        echo "Fornecedor inserido com sucesso!";
        # esse numero 2 refere-se a mensagem de sucesso exibida  no inicio da tela
        # se o if ficar atrelado ao segundo laço ele estará no laço de atualizar que esta referenciado no 
        # crud_cliente
        # logo ele retorna a mensagem de cliente inserido com sucsso
    } else if ($_GET["sucesso"] == 2) {
        echo "Fornecedor atualizado com sucesso!";
    } else {
        echo "Fornecedor excluído com sucesso!";
    }
    ?>
</div>

<?php } ?>

<?php if (isset($_GET["erro"])) { ?>
<div class="alert alert-danger">
    <?php
    if ($_GET["erro"] == 1) {
        echo "Erro ao inserir Fornecedor!";
    } else if ($_GET["erro"] == 2) {
        echo "Erro ao atualizar Fornecedor!";
    } else {
        echo "Erro ao excluir Fornecedor!";
    }
    ?>
</div>
<?php } ?>
                <form action="crud_fornece.php" method="post" name="fornecedor">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Fornecedor</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputnumber">Cod Fornecedor:</label>
                                    <input class="form-control py-2" name="cod_fornecedor" id="inputFirstName" type="text" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputfirstName">Raz&#227;o Social</label>
                                    <input class="form-control py-2" id="inputLastName" name="fornecedor" type="text" placeholder="Digite a raz&#227;o Social" />
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">CNPJ</label>
                                    <input class="form-control py-2" id="inputLastName" name="cnpj" type="text" placeholder="Digite o CNPJ" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Endere&ccedil;o</label>
                                    <input class="form-control py-2" id="inputLastName" name="logradouro" type="text" placeholder="Digite a Endere&ccedil;o" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-2" for="inputnumber">Complemento:</label>
                                    <input class="form-control py-2" name="num_comp" id="inputFirstName" type="text"  />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">CEP</label>
                                    <input class="form-control py-2" id="inputLastName" name="cep" type="text" placeholder="Digite o CEP" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Cidade</label>
                                    <input class="form-control py-2" id="inputLastName" name="cidade" type="text" placeholder="Digite a cidade" />
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Estado</label>
                                    <input class="form-control py-2" id="inputLastName" name="estado" type="text" placeholder="Digite o Estado" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Telefone</label>
                                    <input class="form-control py-2" id="inputLastName" name="telefone" type="text" placeholder="Digite o Telefone" />
                                </div>
                            </div>
                            <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="S" id="AtivoCli" name="ativo" <?php if (isset($_GET["id_cliente"])) {
                                                                                                                                if ($dados["ativo"] == "S") {
                                                                                                                                    echo "checked";
                                                                                                                                }
                                                                                                                            } ?>>
                                    <label class="form-check-label" for="AtivoCli">Ativo</label>
                                </div>

                            <div id="botoes" class="col-md-6 col-xs-12">
                                <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i>    Inserir</button>
                                <button type="button" class="btn btn-warning"><i class="fas fa-paw"></i> Alterar</button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-paw"></i> Cancelar</button>
                            </div>
                            
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
                
                    <form method="GET" style="margin-top:15px; font-size: 10pt;" action="cad_Produto.php">

<div class="card-body mr-2">
    <table class="table table-bordered">
        <tr>
            <th>Código fornecedor</th>
            <th>CNPJ</th>
            <th>Fornecedor</th>
            <th>Logradouro </th>
            <th>cep</th>
            <th>Numero</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            
        </tr>
        <?php
        $consultaTabela = "";
        if (isset($_GET["pesquisa"])) {
            $pesquisa = $_GET["pesquisa"];
            $consultaTabela = "SELECT * FROM fornecedor WHERE cnpj or fornecedor LIKE '%$pesquisa%";
        } else {
            $consultaTabela = "SELECT * FROM fornecedor";
        }
        $queryClietes = $conexao->query($consultaTabela);
        while ($dados = $queryClietes->fetch_assoc()) {
        ?>
            <tr>
                <!--Para alimentar a tabela com o banco de dados basta substituir o nome dos atribudos selecionardos de movo que faça correspondencia com o bnco-->
                <td style="color:#1E90FF;"><?php echo $dados["cod_fornecedor"]; ?></td>
                
                <td><?php echo $dados["cnpj"]; ?></td>
                <!--Converter a data para formato pt-BR-->
                
                <td><?php echo $dados["fornecedor"]; ?></td>
                <td><?php echo $dados["logradouro"]; ?></td>
                <td> <?php echo $dados["cep"]; ?></td>
                <td><?php echo $dados["num_comp"]; ?></td>
                <td><?php echo $dados["cidade"]; ?></td>
                <td><?php echo $dados["estado"]; ?></td>
                <td><?php echo $dados["telefone"]; ?></td>


                <td>
                    <a href="cad_fornecedor.php?cod_fornecedor=<?php echo $dados["cod_fornecedor"]; ?>" class="btn btn-primary"><i style="font-size:x-small;" class="fas fa-pencil-alt"></i></a>
                    &nbsp;&nbsp;




                    <a href="crud_fornecedor.php?excluir=1&cod_fornecedor=<?php echo $dados["cod_fornecedor"]; ?>" class="btn btn-danger btn-excluir-cliente"><i style="" class="fas fa-times"></i></a>
                </td>

            </tr>
        <?php } ?>
    </table>
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