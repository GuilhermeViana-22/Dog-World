<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Cadastra Venda</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">



    </script>
    <?php
    #nestes includes temos todos os estados e municipios do brasil na nossa aplicação, como isso ficaria dispensioso e sujando nosso codigo
    #está sendo utilizado um array em outro arquivo que carrega todas essas informações

    #ArrayLIst com os inputs do select
    # é necessario um ArrayList para utilizar ter um conjunto de valores selecionaveis
    $Forma_pagamento = array(
        "Crédito" => "Crédito",
        "Débito" => "Débito",
        "Dinheito" => "Dinheito",
    );
    ?>
    

</head>

<body class="sb-nav-fixed">

    <?php include 'nav.php'; ?>

    <div id="layoutSidenav">

        <?php include 'menu_lateral.php'; ?>


        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid">
                    <form method="POST" id="vendas" action="crud_venda.php" data-toggle="validator" role="form" >

                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Cadastrar venda</h3>
                            </div>

                            <?php
                            $dadosVenda;
                            if (isset($_REQUEST["cod_venda"])) {
                                echo "<input type='hidden' name='cod_venda' value='" . $_REQUEST["cod_venda"] . "'/>";
                                echo "<br/><h2 class='text-center'>Venda ativa: " . $_REQUEST["cod_venda"] . "</h2>";

                                $consultaDadosVenda = "SELECT * FROM vendas WHERE cod_venda = " . $_REQUEST["cod_venda"];
                                $queryDadosVenda = $conexao->query($consultaDadosVenda);
                                while ($dadosBanco = $queryDadosVenda->fetch_assoc()) {
                                    $dadosVenda = $dadosBanco;
                                }
                            }

                            ?>

                            <?php if (isset($_GET["erro"]) && $_GET["erro"] == 1) { ?>

                                <div class="alert alert-danger">
                                    Produto não Existe!
                                </div>

                            <?php } else if (isset($_GET["erro"]) && $_GET["erro"] == 2) { ?>

                                <div class="alert alert-danger">
                                    não foi Possivel deletar o produto!
                                </div>
                            <?php } else if (isset($_GET["erro"]) && $_GET["erro"] == 3) { ?>

                                <div class="alert alert-danger">
                                    Produto não Existe ou esta desativado
                                </div>
                            <?php } else if (isset($_GET["erro"]) && $_GET["erro"] == 4) { ?>

                                <div class="alert alert-danger">
                                    Não foi Possivel finalizar a venda.
                                </div>
                            <?php } else if (isset($_GET["erro"]) && $_GET["erro"] == 5) { ?>

                                <div class="alert alert-danger">
                                    Erro ao cancelar venda.
                                </div>
                            <?php } ?>



                            <?php if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 1) { ?>

                                <div class="alert alert-success">
                                    Venda finalizada!
                                </div>

                            <?php } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 2) { ?>

                                <div class="alert alert-success">
                                    Venda finalizada.
                                </div>
                            <?php } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 3) { ?>

                                <div class="alert alert-success">
                                    Terceiro erro.
                                </div>
                            <?php } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 4) { ?>

                                <div class="alert alert-success">
                                    Terceiro erro.
                                </div>
                            <?php } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 5) { ?>

                                <div class="alert alert-success">
                                    Venda cancelada
                                </div>
                            <?php } ?>







                            <div class="form-group">
                                <div class="form-group row">
                                    <div class="col-md-6 col-xs-10">
                                        <label class="small mb-2" for="inputFirstName" style="margin-left: 12px;" >Nome</label>
                                        <input style="margin-left: 12px;" class="form-control nome" id="nome_cliente" name="nome_cliente" value="<?php if (isset($_REQUEST["cod_venda"])) {
                                                                                                                            echo $dadosVenda["nome_cliente"];
                                                                                                                        } ?>" type="text" placeholder="Digite o nome" />

                                    </div>

                                    <div class="col-md-3 col-xs-8">
                                        <label class="small mb-2" for="inputFirstName">CPF</label>
                                        <input class="form-control cpf" id="cpf_cliente" value="<?php if (isset($_REQUEST["cod_venda"])) {
                                                                                                        echo $dadosVenda["cpf_cliente"];
                                                                                                    } ?>" name="cpf_cliente" type="text" placeholder="Digite o CPF" style="padding-right: 10px ;"  />

                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="form-group row">
                                        <div class="form-group col-md-4">

                                            <label class="small mb-2" style="margin-left: -12px;" for="inputLastName">Produto</label>
                                            <select style="margin-left: -10px;" class="form-control" name="cod_produto" >
                                                
                                                    <?php


                                                    $consultaProduto = "SELECT * FROM produto";
                                                    $queryProduto = $conexao->query($consultaProduto);
                                                    while ($dadosProduto = $queryProduto->fetch_assoc()) {

                                                        echo '<option value="' . $dadosProduto["cod_produto"] . '">' . $dadosProduto["titulo"] . '</option>';
                                                    } ?>
                                                </select>

                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-2" style="margin-left: 20px;" for="inputLastName">Quantidade</label>
                                            <input class="form-control money2"  style="margin-left: 20px;" id="cod_prod_quantidade" name="cod_prod_quantidade" type="text" placeholder="Digite a Quantidade" required/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                       <p> <label class="small mb-1" style="margin-left: -22px;"  for="cmbfp">Forma de pagamento</label></p>
                                        <select id="cmbfp" name="forma_pagamento" style="margin-left: -22px;" class="form-control" >
                                            <?php
                                            # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                            if (isset($_GET["cod_venda"])) {
                                                foreach ($Forma_pagamento as $key => $value) {
                                                    if ($dadosVenda["forma_pagamento"] == $key) {
                                                        echo "<option value=" . $key . " selected>" . $value . "</option>";
                                                    } else {
                                                        echo "<option value=" . $key . ">" . $value . "</option>";
                                                    }
                                                }
                                            } else {
                                                foreach ($Forma_pagamento as $key => $value) {
                                                    echo "<option value=" . $key . ">" . $value . "</option>";
                                                }
                                            }
                                            ?>
                                        </select required>
                                    </div>

                                    
                                  
                                    <div class="form-group row col-md-20 ">
                                        <div id="botoes" class="col-md-20 col-xs-12">
                                            <button type="submit" style="margin-left: 400px;"  class="btn btn-success"><i class="fas fa-paw"></i> Inserir Venda</button>

                                        </div>
                                    </div>
                                    <div class="form-group row col-md-2">

                                    </div>
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">Código da Venda</th>
                                                <th scope="col">Nome do Produto</th>
                                                <th scope="col">Código do produto</th>
                                                <th scope="col">Quantidade</th>
                                                <th scope="col">valor</th>
                                                <th scope="col">Excluir</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (isset($_REQUEST["cod_venda"])) {

                                                $consultaVenda = $conexao->query("SELECT * FROM produtos_venda INNER JOIN produto ON produtos_venda.cod_produto = produto.cod_produto WHERE cod_venda = " . $_REQUEST["cod_venda"]);
                                                while ($dados = $consultaVenda->fetch_assoc()) {
                                            ?>

                                                    <tr>
                                                        <td><?php echo $dados["cod_venda"]; ?></td>
                                                        <td><?php echo $dados["titulo"]; ?></td>
                                                        <td><?php echo $dados["cod_produto"]; ?></td>
                                                        <td><?php echo $dados["cod_prod_quantidade"]; ?></td>
                                                        <td><?php echo $dados["v_total"]; ?></td>
                                                        <td><a class="btn btn-danger" href="crud_venda.php?cod_produto=<?php echo $dados["cod_produto"]; ?>&cod_venda=<?php echo $dados["cod_venda"]; ?>&deletar=1">X</a></td>
                                                    </tr>

                                            <?php
                                                }
                                            } ?>

                                        </tbody>

                                    </table>
                                   
                                    <?php
                                    if (isset($_GET["cod_venda"])) {
                                        $total = $conexao->query("SELECT Round(sum(v_total),3) as va_total FROM produtos_venda WHERE cod_venda = " . $_GET["cod_venda"]);
                                        while ($total_venda = $total->fetch_assoc()) {
                                    ?>
                                            <div class="form-group">
                                                <label class="small mb-6" for="valor_totl">Total</label>
                                                <input type="text" class="form-control py-2" id="valor_totl" value="<?php if (isset($_GET["cod_venda"])) {
                                                                                                                                            echo $total_venda["va_total"];
                                                                                                                                        } ?>" disabled/>
                                            </div>



                                    <?php }
                                    } ?>




                            </div>
                        </div>


                    </form>
                    <script>
                        /*
                        //confirmação de exclusão de cliente para evitar enganos (quando exclui um cliente, todos os pets atrelados serão excluidos tambe´m)
                        document.addEventListener("DOMContentLoaded", function() {
                            jQuery(".finalizar_venda").on("click", function(e) {
                                e.preventDefault();
                                var href = jQuery(this).attr("crud_venda.php");
                                var resposta = confirm("Aguardando resposta da maquininha ");
                                if (resposta) {
                                    document.location.href = href;
                                }
                            });
                        });*/
                    </script>



                    <?php
                    if (isset($_REQUEST["cod_venda"])) {
                    ?>

                        <form method="POST" action="crud_venda.php">

                            <input type="hidden" name="cod_venda" value="<?php if (isset($_REQUEST["cod_venda"])) {
                                                                                echo $_REQUEST["cod_venda"];
                                                                            } ?>" />
                            <div id="botoes" class="col-md-6 col-xs-12">
                                <input name="finalizar_venda" value="Finalizar" type="submit" class="btn btn-success finalizar_venda" />

                                <input type="submit" name="cancelar_venda" value="Cancelar venda" class="btn btn-danger" />
                            </div>
                        </form>

                    <?php } ?>
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
    <script src="js/jquery.mask.js"></script>

    <script>
     jQuery(document).ready(function() {
        $('.nome').mask('A', {
  translation: {
    A: { pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/g, recursive: true },
  },
});
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.money2').mask("000", {reverse: true});
    })
    </script>
</body>

</html>