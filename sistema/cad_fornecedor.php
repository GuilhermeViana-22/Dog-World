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
                <form action="crud_fornece.php" method="post" name="Formfornecedor">
                    <?php $dados;
                    if (isset($_GET["cod_fornecedor"])) {
                        $queryfornecedor = $conexao->query("SELECT * FROM fornecedor WHERE cod_fornecedor = " . $_GET["cod_fornecedor"]);
                        $dados = $queryfornecedor->fetch_assoc();  ?> <input type="hidden" name="cod_fornecedor" value="<?php echo $_GET["cod_fornecedor"]; ?>" />
                    <?php } ?>
                    
                    <div class="container-fluid">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Cadastrar Fornecedor</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-2" for="inputfirstName">Raz&#227;o Social</label>
                                            <input class="form-control py-2" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                            echo $dados["fornecedor"];
                                                                                        } ?>" id="inputLastName" name="fornecedor" type="text" placeholder="Digite a raz&#227;o Social" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">CNPJ</label>
                                            <input class="form-control py-2" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                            echo $dados["cnpj"];
                                                                                        } ?>" id="inputLastName" name="cnpj" type="text" placeholder="Digite o CNPJ" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Endere&ccedil;o</label>
                                            <input class="form-control py-2" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                            echo $dados["logradouro"];
                                                                                        } ?>" id="rua" name="logradouro" type="text" placeholder="Digite a Endere&ccedil;o" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="small mb-2" for="inputnumber">Complemento:</label>
                                            <input class="form-control py-2" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                            echo $dados["num_comp"];
                                                                                        } ?>" name="num_comp" id="inputFirstName" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">CEP</label>
                                            <input class="form-control py-2" id="cep" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                                            echo $dados["cep"];
                                                                                                        } ?>" name="cep" type="text" onblur="pesquisacep(this.value);" placeholder="Digite o CEP" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Cidade</label>
                                            <input class="form-control py-2" id="cidade" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                                            echo $dados["cidade"];
                                                                                                        } ?>" name="cidade" type="text" placeholder="Digite a cidade" />
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Estado</label>
                                            <input class="form-control py-2" id="uf" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                                            echo $dados["estado"];
                                                                                                        } ?>" name="estado" type="text" placeholder="Digite o Estado" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Telefone</label>
                                            <input class="form-control py-2" id="inputLastName" value=" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                                            echo $dados["telefone"];
                                                                                                        } ?>" name="telefone" type="text" placeholder="Digite o Telefone" />
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="S" id="AtivoCli" name="ativo" <?php if (isset($_GET["cod_fornecedor"])) {
                                                                                                                                    if ($dados["ativo"] == "S") {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                } ?>>
                                        <label class="form-check-label" for="AtivoCli">Ativo</label>
                                    </div>

                                    <div id="botoes" class="col-md-20 col-xs-20">
                                        <button type="submit" style="margin-left: 350px;" class="btn btn-success"><i class="fas fa-paw"></i> Inserir</button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form method="GET" style="margin-top:15px; font-size: 10pt;" action="cad_fornecedor.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <br />
                                <div style="padding-left:25px;" class="col-md-3">
                                    Pesquisar
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
                <div class="card-body mr-2">
                    <script>
                        //confirmação de exclusão de cliente para evitar enganos (quando exclui um cliente, todos os pets atrelados serão excluidos tambe´m)
                        document.addEventListener("DOMContentLoaded", function() {
                            jQuery(".btn-excluir-fornecedor").on("click", function(e) {
                                e.preventDefault();
                                var href = jQuery(this).attr("href");
                                var resposta = confirm("Deseja realmente excluir Fornecedor? Todos os Produtos pertencentes à ele serão excluidos também. Deseja continuar?");
                                if (resposta) {
                                    document.location.href = href;
                                }
                            });
                        });
                    </script>
                    <table class="table table-bordered">
                        <tr>
                            <th>Código fornecedor</th>
                            <th>CNPJ</th>
                            <th>Fornecedor</th>
                            <th>Logradouro </th>
                            <th>Numero</th>
                            <th>Telefone</th>
                            <th>Ações</th>
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
                                
                                <td ><?php echo $dados["cod_fornecedor"]; ?></td>
                                <td><?php echo $dados["cnpj"]; ?></td>
                                <td><?php echo $dados["fornecedor"]; ?></td>
                                <td><?php echo $dados["logradouro"]; ?></td>
                                <td><?php echo $dados["num_comp"]; ?></td>
                                <td><?php echo $dados["telefone"]; ?></td>
                                <td>
                                    <a href="cad_fornecedor.php?cod_fornecedor=<?php echo $dados["cod_fornecedor"]; ?>" class="btn btn-primary"><i style="font-size:x-small;" class="fas fa-pencil-alt"></i></a>
                                    &nbsp;&nbsp;


                                    <a href="crud_fornece.php?excluir=1&cod_fornecedor=<?php echo $dados["cod_fornecedor"]; ?>" class="btn btn-danger btn-excluir-fornecedor"><i style="" class="fas fa-times"></i></a>
                                </td>

                            </tr>
                        <?php } ?>
                    </table>
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