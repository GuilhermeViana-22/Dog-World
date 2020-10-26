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
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <!--Tag de incorporação ao menu no codigo html-->
	
    <?php include 'nav.php'; ?>

    <!---- mudar a referência quebra o projeto do arquivo, faça uma cópia se precisar editar-->

    <div id="layoutSidenav">

        <?php include 'menu_lateral.php'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br />
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card bg-primary text-white mb-4" style="padding: 20px;font-size: 25px;">
                                <div class="row">
                                    <div class="col-md-10"><i class="fas fa-chart-line" style="font-size: 35px;"></i> Total de vendas de hoje </i>
                                    </div>
									
                                    <?php

                                    #$queryVendas = $conexao->query("SELECT valor_total FROM vendas");
                                    $total = mysqli_query($conexao,'SELECT round(SUM(v_total),3)  as Total FROM produtos_venda INNER JOIN vendas ON produtos_venda.cod_venda = vendas.cod_venda');
									$total_vendas = $total->fetch_assoc();
                                    ?>
									
                                    <div class="col-my-4">R$ <?php echo $total_vendas["Total"]; ?></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i> Produtos Vendidos
                                </div>
                                <div class="card-body">
                                    
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Código da Venda</th>
                                            <th>Codigo dofuncionario</th>
                                            <th>Nome do cliente</th>
                                            <th>Total</th>
                                        </tr>
                                        <?php
                                        $sql = "SELECT v.cod_venda,v.nome_cliente,p.v_total,v.cod_funcionario FROM produtos_venda as p INNER JOIN vendas as v ON p.cod_venda = v.cod_venda and v.status_venda = 2";
                                       $queryVendas = $conexao->query($sql);

                                     while ($dados = $queryVendas->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td class="td"><?php echo $dados["cod_venda"]; ?></td>
                                            <td class="td"><?php echo $dados["cod_funcionario"]; ?></td>
                                            <td class="td"><?php echo $dados["nome_cliente"]; ?></td>
                                            <td class="td">R$:<?php echo $dados["v_total"]; ?></td>
                                            

                                        </tr>
                                     <?php } ?>
                                    </table>
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