<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>System Dog World || cliente </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <?php
    #nestes includes temos todos os estados e municipios do brasil na nossa aplicação, como isso ficaria dispensioso e sujando nosso codigo
    #está sendo utilizado um array em outro arquivo que carrega todas essas informações

    #ArrayLIst com os inputs do select
    # é necessario um ArrayList para utilizar ter um conjunto de valores selecionaveis
    $sexo = array(
        "" => "----Selecione----",
        "M" => "Macho",
        "F" => "Femea"
    );
    ?>

    <?php

    $tipo = array(
        "" => "----Selecione----",
        "Cachorro" => "Cachorro",
        "Coelho" => "Coelho",
        "Furão" => "Furão",
        "Gato" => "Gato",
        "Hamster" => "Hamster",
        "Roedor" => "Roedor",
        "Porquinho_da_india" => "Porquinho_da_india",
        "Passáro" => "Passáro",
        "Peixao" => "Peixao",
        "Tartaruga" => "Tartaruga",


    );

    ?>

</head>

<script>
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");

        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");

    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);

            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";

                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
</script>

<body class="sb-nav-fixed">

    <?php include 'nav.php'; ?>

    <div id="layoutSidenav">

        <!--Tag de incorporação ao menu no codigo html-->



        <?php include 'menu_lateral.php'; ?>

        <!--Tag de incorporação ao menu no codigo html-->



        <div id="layoutSidenav_content">


            <main>
                <!--
               -->
                <div class="container-fluid">
                    <div class="card">
                        <?php if (isset($_GET["sucesso"])) { ?>

                            <div class="alert alert-success">
                                <?php
                                # esse numero 1 refere-se a mensagem de sucesso exibida  no inicio da tela
                                # se o if ficar atrelado ao primeiro laço ele estará no laço de inserir referenciado no 
                                # crud_cliente
                                # logo ele retorna a mensagem de cliente inserido com sucsso
                                if ($_GET["sucesso"] == 1) {
                                    echo "Animal inserido com sucesso!";
                                    # esse numero 2 refere-se a mensagem de sucesso exibida  no inicio da tela
                                    # se o if ficar atrelado ao segundo laço ele estará no laço de atualizar que esta referenciado no 
                                    # crud_cliente
                                    # logo ele retorna a mensagem de cliente inserido com sucsso
                                } else if ($_GET["sucesso"] == 2) {
                                    echo "Animal atualizado com sucesso!";
                                } else {
                                    echo "Animal excluído com sucesso!";
                                }
                                ?>
                            </div>

                        <?php } ?>

                        <?php if (isset($_GET["erro"])) { ?>
                            <div class="alert alert-danger">
                                <?php
                                if ($_GET["erro"] == 1) {
                                    echo "Erro ao inserir Animal!";
                                } else if ($_GET["erro"] == 2) {
                                    echo "Erro ao atualizar Animal!";
                                } else {
                                    echo "Erro ao excluir Animal!";
                                }
                                ?>
                            </div>
                        <?php } ?>
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-1">Animal</h3>
                            </div>
                            <div class="card-body">
                                <form action="crud_animal.php" method="POST" data-toggle="validator" role="form">

                                    <?php
                                    $dados;
                                    if (isset($_GET["id_animal"])) {

                                        $queryCliente = $conexao->query("SELECT * FROM animal WHERE id_animal = " . $_GET["id_animal"]);
                                        $dados = $queryCliente->fetch_assoc();
                                    ?>
                                        <input type="hidden" name="id_animal" value="<?php echo $_GET["id_animal"]; ?>" />
                                    <?php } ?>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-2" for="NomeAnimal">Nome</label>
                                                <input class="form-control nome" id="NomeAnimal" type="text" value="<?php if (isset($_GET["id_animal"])) {
                                                                                                                        echo $dados["nome"];
                                                                                                                    } ?>" placeholder="Digite o nome" name="nome" required />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-2" for="idadeAnimal">Idade</label>
                                                <input class="form-control idade" id="idadeAnimal" type="text" value="<?php if (isset($_GET["id_animal"])) {
                                                                                                                            echo $dados["idade"];
                                                                                                                        } ?>" placeholder="Digite a idade" name="idade" required />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="RgaAni">RGA</label>
                                                <input class="form-control rga" id="RgaAni" type="text" value="<?php if (isset($_GET["id_animal"])) {
                                                                                                                    echo $dados["rga"];
                                                                                                                } ?>" placeholder="Digite o RGA" name="rga" required />

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="Raça">Raça</label>
                                                <input class="form-control py-2" id="Raça" type="text" value="<?php if (isset($_GET["id_animal"])) {
                                                                                                                    echo $dados["raca"];
                                                                                                                } ?>" placeholder="Digite a Raça" name="raca" required />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="SexoAni " class="small mb-1">Sexo</label>
                                            <select id="cmbSexo" class="form-control py-2" name="sexo">
                                                <?php
                                                # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                                if (isset($_GET["id_animal"])) {
                                                    foreach ($sexo as $key => $value) {
                                                        if ($dados["sexo"] == $key) {
                                                            echo "<option value=" . $key . " selected>" . $value . "</option>";
                                                        } else {
                                                            echo "<option value=" . $key . ">" . $value . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    foreach ($sexo as $key => $value) {
                                                        echo "<option value=" . $key . ">" . $value . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="tipoAni " class="small mb-1">Tipo</label>
                                            <select id="tipoAni" class="form-control py-2 " name="tipo">
                                                <?php
                                                # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                                if (isset($_GET["id_animal"])) {
                                                    foreach ($tipo as $key => $value) {
                                                        if ($dados["tipo"] == $key) {
                                                            echo "<option value=" . $key . " selected>" . $value . "</option>";
                                                        } else {
                                                            echo "<option value=" . $key . ">" . $value . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    foreach ($tipo as $key => $value) {
                                                        echo "<option value=" . $key . ">" . $value . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="Raca">Nome do Cliente</label>
                                                <select style="margin-left: -3px;" class="form-control" name="id_cliente">
                                                    <option>Selecione</option>
                                                    <?php
                                                    $consultaCliente = "SELECT * FROM cliente";
                                                    $queryCliente = $conexao->query($consultaCliente);
                                                    while ($dadosCliente = $queryCliente->fetch_assoc()) {
                                                    ?>
                                                        <?php
                                                        if (isset($_GET["id_animal"])) {
                                                            $resultadoVerificaAnimal = $conexao->query("SELECT * FROM cliente WHERE id_cliente = " . $_GET["id_cliente"]);
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
                                        <div class="form-group col-md-5">
                                            <label for="observacaoani">Observação</label>
                                            <textarea name="observacao" class="form-control" id="observacaoani" rows="3" placeholder="Digite a observação do animal"><?php if (isset($_GET["id_animal"])) {
                                                                                                                                                                            echo $dados["observacao"];
                                                                                                                                                                        } ?></textarea>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="S" id="AtivoAni" name="ativo" <?php if (isset($_GET["id_animal"])) {
                                                                                                                                        if ($dados["ativo"] == "S") {
                                                                                                                                            echo "checked";
                                                                                                                                        }
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="AtivoAni">Ativo</label>
                                        </div>






                                    </div>
                                    <div id="botoes" class="col-md-9 col-xs-12">
                                        <div style="padding-left:370px;" class="col-md-15">
                                            <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
                                        </div>

                                    </div>


                                </form>

                                <div class="row ">
                                    <div class="col-m">
                                        <div class="card">

                                            <div class="card-header">

                                                <i class="fas fa-table mr-6"></i> Animais
                                            </div>

                                            <form method="GET" style="margin-top:15px;" action="cad_animal.php">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <br />
                                                            <div style="padding-left:25px;" class="col-md-3">
                                                                Pesquisar:
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
                                                </div>

                                            </form>
                                            <br>
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>ID_Animal</th>
                                                    <th>Nome</th>
                                                    <th>Raça</th>
                                                    <th>RGA</th>
                                                    <th>idade</th>
                                                    <th>Sexo</th>
                                                    <th>Observação</th>
                                                    <th>Ativo</th>
                                                    <th>ID_Cliente</th>
                                                    <th>Ações</th>
                                                </tr>
                                                <?php
                                                $consultaTabela = "";
                                                if (isset($_GET["pesquisa"])) {
                                                    $pesquisa = $_GET["pesquisa"];
                                                    $consultaTabela = "SELECT * FROM animal WHERE nome LIKE '%$pesquisa%' OR raca LIKE '%$pesquisa%' OR tipo LIKE '%$pesquisa%' OR sexo LIKE '%$pesquisa%'";
                                                } else {
                                                    $consultaTabela = "SELECT * FROM animal";
                                                }
                                                $queryAnimal = $conexao->query($consultaTabela);

                                                while ($dados = $queryAnimal->fetch_assoc()) {
                                                ?>

                                                    <tr width="20px">
                                                        <td width="20px"><?php echo $dados["id_animal"]; ?> </td>
                                                        <td width="20px"><?php echo $dados["nome"]; ?></td>
                                                        <td width="20px"><?php echo $dados["raca"]; ?></td>
                                                        <td width="20px"> <?php echo $dados["rga"]; ?></td>
                                                        <td width="20px"><?php echo $dados["idade"]; ?></td>
                                                        <td width="20px"><?php echo $dados["sexo"]; ?></td>
                                                        <td width="20px"><?php echo $dados["observacao"]; ?></td>
                                                        <td width="20px"> <?php echo $dados["ativo"]; ?></td>
                                                        <td width="20px"><?php echo $dados["id_cliente"]; ?></td>
                                                        <td>
                                                            <a href="cad_animal.php?id_animal=<?php echo $dados["id_animal"]; ?>" class="btn btn-primary"><i style="font-size: 10pt;" class="fas fa-pencil-alt"></i></a>
                                                                &nbsp;&nbsp;

                                                            <a href="crud_animal.php?excluir=1&id_animal=<?php echo $dados["id_animal"]; ?>" class="btn btn-danger btn-excluir-cliente"><i style="font-size: 12pt; " class="fas fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script src="js/validator.min.js"></script>
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

            $('.rga').mask('000-00', {
                reverse: true
            });
            $('.idade').mask('00');
        })
    </script>

</body>

</html>