﻿<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Produto </title>
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
                <?php if (isset($_GET["sucesso"])) { ?>

                    <div class="alert alert-success">
                        <?php
                        # esse numero 1 refere-se a mensagem de sucesso exibida  no inicio da tela
                        # se o if ficar atrelado ao primeiro laço ele estará no laço de inserir referenciado no 
                        # crud_cliente
                        # logo ele retorna a mensagem de cliente inserido com sucsso
                        if ($_GET["sucesso"] == 1) {
                            echo "Produto inserido com sucesso!";
                            # esse numero 2 refere-se a mensagem de sucesso exibida  no inicio da tela
                            # se o if ficar atrelado ao segundo laço ele estará no laço de atualizar que esta referenciado no 
                            # crud_cliente
                            # logo ele retorna a mensagem de cliente inserido com sucsso
                        } else if ($_GET["sucesso"] == 2) {
                            echo "Produto atualizado com sucesso!";
                        } else {
                            echo "Produto excluído com sucesso!";
                        }
                        ?>
                    </div>

                <?php } ?>

                <?php if (isset($_GET["erro"])) { ?>
                    <div class="alert alert-danger">
                        <?php
                        if ($_GET["erro"] == 1) {
                            echo "Erro ao inserir Produto!";
                        } else if ($_GET["erro"] == 2) {
                            echo "Erro ao atualizar Produto!";
                        } else {
                            echo "Erro ao excluir Produto!";
                        }
                        ?>
                    </div>
                <?php } ?>



                <form action="crud_produto.php" method="post" name="produto" data-toggle="validator" role="form" >

                    <?php $dados;
                    if (isset($_GET["cod_produto"])) {
                        $queryProduto = $conexao->query("SELECT * FROM produto WHERE cod_produto = " . $_GET["cod_produto"]);
                        $dados = $queryProduto->fetch_assoc();  ?> <input type="hidden" name="cod_produto" value="<?php echo $_GET["cod_produto"]; ?>" />



                    <?php } ?>


                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4"> Cadastro de Produtos</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">

                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="small mb-1" for="textNome">Nome</label>

                                            <input class="form-control py-2" value="<?php if (isset($_GET["cod_produto"])) {
                                                                                        echo $dados["titulo"];
                                                                                    } ?>" id="textNome" type="text" name="titulo" required/>

                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Lote</label>
                                            <input value=" <?php if (isset($_GET["cod_produto"])) {
                                                                echo $dados["cod_lote"];
                                                            } ?>" class="form-control py-2" id="inputLastName" name="cod_lote" type="text" placeholder="Digite o lote" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Quantidade</label>
                                            <input value=" <?php if (isset($_GET["cod_produto"])) {
                                                                echo $dados["quantidade"];
                                                            } ?>" class="form-control py-2" id="inputLastName" name="quantidade" type="text" placeholder="Digite a quantidade"required />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Valor</label>
                                            <input value=" <?php if (isset($_GET["cod_produto"])) {
                                                                echo $dados["valor_unitario"];
                                                            } ?>" class="form-control py-2" id="inputLastName" name="valor_unitario" type="text" placeholder="Digite o valor" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Fornecedor</label>
                                            <input value=" <?php if (isset($_GET["cod_produto"])) {
                                                                echo $dados["cod_fornecedor"];
                                                            } ?>" class="form-control py-2" id="inputLastName" name="cod_fornecedor" type="text" placeholder="Digite a quanridade" required/>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="S" id="AtivoCli" name="ativo" <?php if (isset($_GET["cod_produto"])) {
                                                                                                                                    if ($dados["ativo"] == "S") {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                } ?>>
                                        <label class="form-check-label" for="AtivoCli">Ativo</label>
                                    </div>

                                    <div id="botoes" class="col-md-9 col-xs-12">
                                        <div style="padding-left:350px;" class="col-md-15">
                                            <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                </form>
                <div class="container-fluyd">
                    <form method="GET" style="margin-top:15px;" action="cad_Produto.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <br />
                                    <div style="padding-left:25px;" class="col-md-3">
                                        Pesquisar:
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php if (isset($_GET["pesquisar"])) {
                                                                        echo $_GET["pesquisar"];
                                                                    } ?>" name="pesquisar" class="form-control">
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="pesquisar">
                            </div>
                        </div>

                    </form>
                    <div class="card-body mr-1">

                        <table class="table table-bordered">
                            <tr>
                                <th>Cod produto</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Lote</th>
                                <th>Valor Unitário</th>
                                <th>Fornecedor</th>
                                <th>Ativo</th>
                                <th>Ações</th>
                            </tr>
                            <?php
                            $consultaTabela = "";
                            if (isset($_GET["pesquisar"])) {
                                $pesquisa = $_GET["pesquisar"];
                                $consultaTabela = "SELECT * FROM produto WHERE cod_produto LIKE '%$pesquisa%' OR titulo LIKE '%$pesquisa%' OR cod_lote LIKE '%$pesquisa%'";
                            } else {
                                $consultaTabela = "SELECT * FROM produto";
                            }
                            $queryProduto = $conexao->query($consultaTabela);

                            while ($dados = $queryProduto->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $dados["cod_produto"]; ?></td>
                                    <td><?php echo $dados["titulo"]; ?></td>
                                    <!--Converter a data para formato pt-BR-->
                                    <td><?php echo $dados["quantidade"]; ?></td>
                                    <td><?php echo $dados["cod_lote"]; ?></td>
                                    <td><?php echo $dados["valor_unitario"]; ?></td>
                                    <td><?php echo $dados["cod_fornecedor"]; ?></td>
                                    <td><?php echo $dados["ativo"]; ?></td>
                                    <td>
                                        <a href="cad_Produto.php?cod_produto=<?php echo $dados["cod_produto"]; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                        &nbsp;&nbsp;
                                        <a href="crud_produto.php?excluir=1&cod_produto=<?php echo $dados["cod_produto"]; ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                    </td>

                                </tr>
                            <?php } ?>



                        </table>
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