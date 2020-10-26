<!DOCTYPE html>
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
<script>
    function produto(frm) {
        /*
        o parâmetro frm desta função significa: this.form,
        pois a chamada da função - validaForm(this) foi
        definida na tag form.
        */
        //Verifica se o campo nome foi preenchido e
        //contém no mínimo três caracteres.
        if (frm.nome.value == " " || frm.nome.value == null || frm.nome.value.lenght < 3) {
            //É mostrado um alerta, caso o campo esteja vazio.
            alert("Por favor, indique o seu nome.");
            //Foi definido um focus no campo.
            frm.nome.focus();
            //o form não é enviado.
            return false;
        }
        //o campo e-mail precisa de conter: "@", "." e não pode estar vazio
        if (frm.email.value.indexOf("@") == -1 ||
            frm.email.valueOf.indexOf(".") == -1 ||
            frm.email.value == "" ||
            frm.email.value == null) {
            alert("Por favor, indique um e-mail válido.");
            frm.email.focus();
            return false;
        }
        // O utilizador necessita de selecionar um dos dois
        //radio buttons: Masculino ou Feminino.
        escolhaSexo = -1; //valor negativo default (padrão) que significa que nada foi escolhido ainda.
        //No bloco de código abaixo foi criado um ciclo entre
        //os radios button com o mesmo nome (sexo)
        for (x = frm.sexo.lenght - 1; x > -1; x--) {
            /*
            x = frm.sexo.lenght -1 é a mesma coisa que: x = 2-
            1, que resulta em 1.
            x > -1 significa que o valor de x não pode ser igual a -1 e
            sim maior, porque -1 significa que nada foi escolhido.
            x-- significa que há um decremento no valor x, é algo como:
            x = 1, x= 0 e pára pois x não pode ser -1.
            */
            if (frm.sexo[x].checked) { //checked quer dizer selecionado,
                //então verifica se o primeiro (0) ou o
                //segundo (1) radio button foi selecionado (checked).
                escolhaSexo = x; //atribui à variável escolhaSexo o valor X.
            }
        }
        //se nenhuma das opções (masculino ou feminino) forem
        //escolhidas, mostra um alerta e cancela o envio.
        if (escolhaSexo == -1) {
            alert("qual o seu sexo?");
            frm.sexo[0].focus();
            return false;
        }
        /* valida a profissão:
        O utilizador tem de escolher uma entre as três opções
        (Programador, Designer e Tester).
        */
        if (frm.prof.value == "" || from.prof.value == "Todas") {
            alert("De momento, precisamos de especialistas nas três áreas indicadas");
            frm.prof.focus();
            return false;
        }
        //Valida a textArea, que é como validar um campo de texto simples.
        if (frm.sobre.value == "" || frm.sobre.value == null) {
            alert("Por favor, conte-nos um pouco sobre si.");
            frm.sobre.focus();
            return false;
        }
    }
</script>


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
                <form action="crud_produto.php" method="post" name="produto" data-toggle="validator" role="form" onsubmit="return validaForm(this);">

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
                                            <label class="small mb-1" for="textNome">Titudo Produto</label>

                                            <input type="text" id="nome" class="form-control" placeholder="Digite o Nome do produto" name="titulo" value="<?php if (isset($_GET["cod_produto"])) {
                                                                                                                                                                echo $dados["titulo"];
                                                                                                                                                            } ?>" required />

                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1">Lote</label>
                                            <input type="text" name="cod_lote" class="form-control lote" placeholder="Digite o lote"  value="<?php if (isset($_GET["cod_produto"])) {
                                                                                                                        echo $dados["cod_lote"];
                                                                                                                    } ?>"required />
                                            <div class="help-block with-errors"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Quantidade</label>
                                            <input type="text" class="form-control py-2 quantidade" id="inputLastName" name="quantidade" placeholder="Digite a quantidade" value="<?php if (isset($_GET["cod_produto"])) {
                                                                                                                echo $dados["quantidade"];
                                                                                                            } ?>" required />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Valor</label>
                                            <input type="text" class="form-control py-2 money2" id="inputLastName" name="valor_unitario" placeholder="Digite o valor unitário" value="<?php if (isset($_GET["cod_produto"])) {
                                                                echo $dados["valor_unitario"];
                                                            } ?>" required />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Fornecedor</label>
                                            <input type="text" class="form-control py-2" id="inputLastName" name="cod_fornecedor"  placeholder="Digite a quanridade"  value="<?php if (isset($_GET["cod_produto"])) {
                                                                echo $dados["cod_fornecedor"];
                                                            } ?>"  required />
                                            <div class="help-block with-errors"></div>
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
                                       <p><a href="cad_Produto.php?cod_produto=<?php echo $dados["cod_produto"]; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt" style="font-size: 12pt; "></i></a>
                                        &nbsp;&nbsp;
                                        </p> 
                                        <a href="crud_produto.php?excluir=1&cod_produto=<?php echo $dados["cod_produto"]; ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times" style="font-size: 12pt; "></i></a>

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
    <script src="js/jquery.mask.js"></script>

    <script>
        jQuery(document).ready(function() {
            $('.nome').mask('A', {
                translation: {
                    A: {
                        pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/g,
                        recursive: true
                    },
                },
            });

            $('.money2').mask("0.000,00", {
                reverse: true
            });
            $('.quantidade').mask("000");

        })

        $('.lote').mask("000000");
    </script>

</body>

</html>