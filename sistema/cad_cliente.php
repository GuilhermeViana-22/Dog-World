﻿<!DOCTYPE html>
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
        "M" => "Masculino",
        "F" => "Feminino"
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
                                    echo "Cliente inserido com sucesso!";
                                    # esse numero 2 refere-se a mensagem de sucesso exibida  no inicio da tela
                                    # se o if ficar atrelado ao segundo laço ele estará no laço de atualizar que esta referenciado no 
                                    # crud_cliente
                                    # logo ele retorna a mensagem de cliente inserido com sucsso
                                } else if ($_GET["sucesso"] == 2) {
                                    echo "Cliente atualizado com sucesso!";
                                } else {
                                    echo "Cliente excluído com sucesso!";
                                }
                                ?>
                            </div>

                        <?php } ?>

                        <?php if (isset($_GET["erro"])) { ?>
                            <div class="alert alert-danger">
                                <?php
                                if ($_GET["erro"] == 1) {
                                    echo "Erro ao inserir cliente!";
                                } else if ($_GET["erro"] == 2) {
                                    echo "Erro ao atualizar cliente!";
                                } else {
                                    echo "Erro ao excluir cliente   !";
                                }
                                ?>
                            </div>
                        <?php } ?>
                        <form id="formExemplo" method="post" action="crud_cliente.php" data-toggle="validator" role="form">
                            <?php
                            $dados;
                            if (isset($_GET["id_cliente"])) {

                                $queryCliente = $conexao->query("SELECT * FROM cliente WHERE id_cliente = " . $_GET["id_cliente"]);
                                $dados = $queryCliente->fetch_assoc();
                            ?>
                                <input type="hidden" name="id_cliente" value="<?php echo $_GET["id_cliente"]; ?>" />
                            <?php } ?>
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Cliente</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="textNome">Nome</label>
                                        <input class="form-control py-2 nome" value="<?php if (isset($_GET["id_cliente"])) { echo $dados["nome"];
                                                                                } ?>" id="textNome" type="text" placeholder="Digite o nome" name="nome" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputLastName">Sobrenome</label>
                                        <input class="form-control py-2 nome" value="<?php if (isset($_GET["id_cliente"])) {
                                            #essa função do php pega o valor do input sobrenome
                                                                                    echo $dados["sobrenome"];
                                                                                } ?>" id="inputLastName" type="text" placeholder="Digite o sobrenome" name="sobrenome" required />

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="dtNasc">Data de nascimento</label>
                                        <input class="form-control py-2 nascimento" id="dtNasc"
                                         value="<?php if (isset($_GET["id_cliente"])) {
                                             #essa função do php pega o valor do input data de nascimento
                                          echo $dados["dt_nascimento"];
                                    } ?>" type="date"min="1950-01-01" max="2020-11-12" placeholder="Digite o nascimento" name="dt_nascimento" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtCpf">CPF</label>
                                        <input class="form-control py-2 cpf" id="txtCpf" type="text" value="<?php if (isset($_GET["id_cliente"])) {
                                            #essa função do php pega o valor do input cpf
                                                                                                            echo $dados["cpf"];
                                                                                                        } ?>" placeholder="Digite o CPF" name="cpf" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3 mb-0">
                                    <label class="small mb-1" for="cmbSexo">Sexo</label>

                                    <select id="cmbSexo" class="form-control py-2" name="sexo">
                                        <?php
                                        # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                        if (isset($_GET["id_cliente"])) {
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtTelefone">Telefone / Celular</label>
                                        <input class="form-control py-2 telefone" id="txtTelefone" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                        echo $dados["telefone"];
                                                                                                    } ?>" type="text" placeholder="Digite o Telefone" name="telefone" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="col-md-15">
                                        <label for="inputEmail" for="txtEmail" class="small md-3 ">E-mail</label>
                                        <input type="email" class="form-control py-0" id="txtEmail" placeholder="E-mail" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                                                    echo $dados["email"];
                                                                                                                                } ?>" name="email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <label for="cep" class="small col-md-3 mb-1">CEP</label>
                                    <input name="cep" type="text" placeholder="digite o CEP" class="form-control" id="cep" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                            echo $dados["cep"];
                                                                                                        } ?>" onblur="pesquisacep(this.value);">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress" class="small mb-1">Endereço</label>
                                    <input value="<?php if (isset($_GET["id_cliente"])) {
                                                        echo $dados["logradouro"];
                                                    } ?>" type="text" class="form-control py-3" id="rua" placeholder="Rua dos Bobos, nº 0" name="logradouro">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress2" class="small mb-1">Complemento</label>
                                    <input type="text" class="form-control" id="inputAddress" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                            echo $dados["num_comp"];
                                                                                                        } ?>" placeholder="Apartamento, hotel, casa, etc." name="num_comp">
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Cidade</label>

                                        <input type="text" class="form-control" id="cidade" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                            echo $dados["cidade"];
                                                                                                        } ?>" placeholder="Digite a cidade." name="cidade" required>




                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Estado</label>
                                       <input type="text" class="form-control" id="uf" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                            echo $dados["estado"];
                                                                                                        } ?>" placeholder="Digite a cidade." name="estado" required>

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
                            </div>

                            <div id="botoes" class="col-md-9 col-xs-12">
                            <div style="margin-left:460px;" class="col-md-15">
                            <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
                                                    </div>  

                            </div>
                        </form>

                        <div class="row w-100">
                            <div class="col-xl-12 col-md-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fas fa-table mr-6"></i> Nossos Clientes
                                    </div>
                                    <form method="GET" style="margin-top:15px;" action="cad_cliente.php">
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
                                    <div class="card-body mr-1">
                                        <script>
                                            //confirmação de exclusão de cliente para evitar enganos (quando exclui um cliente, todos os pets atrelados serão excluidos tambe´m)
                                            document.addEventListener("DOMContentLoaded", function() {
                                                jQuery(".btn-excluir-cliente").on("click", function(e) {
                                                    e.preventDefault();
                                                    var href = jQuery(this).attr("href");
                                                    var resposta = confirm("Deseja realmente excluir cliente? Todos os pets pertencentes à ele serão excluidos também. Deseja continuar?");
                                                    if (resposta) {
                                                        document.location.href = href;
                                                    }
                                                });
                                            });
                                        </script>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>RGM</th>
                                                <th>Nome</th>
                                                <th>Data de nascimento</th>
                                                <th>Email</th>
                                                <th>cidade</th>
                                                <th>Ações</th>
                                            </tr>
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
                                                    <!--Converter a data para formato pt-BR-->
                                                    <td><?php echo date("d/m/Y", strtotime($dados["dt_nascimento"])); ?></td>
                                                    <td><?php echo $dados["email"]; ?></td>
                                                    <td><?php echo$dados["cidade"]; ?></td>
                                                    <td>
                                                        <a href="cad_cliente.php?id_cliente=<?php echo $dados["id_cliente"]; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                        &nbsp;&nbsp;



                                                        <a href="crud_cliente.php?excluir=1&id_cliente=<?php echo $dados["id_cliente"]; ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
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
    A: { pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/g, recursive: true },
  },
});
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.money2').mask("000", {reverse: true});
        $('.telefone').mask("(00)00000-0000")
    })
    </script>
</body>

</html>