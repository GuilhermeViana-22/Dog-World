<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>System Dog World || Funcionário </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

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

<body class="func" class="sb-nav-fixed">

    <?php include 'nav.php'; ?>

    <div id="layoutSidenav">

        <!--Tag de incorporação ao menu no codigo html-->



        <?php include 'menu_lateral.php'; ?>

        <!--Tag de incorporação ao menu no codigo html-->



        <div id="layoutSidenav_content">
            <main>
                <ol class="breadcrumb">
                    <li><a href="/"></i>Gereciamento de Funcionários </a></li>
                </ol>
                <section>
                            <div class="col-md-12">
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>44</h3>
                                        <p>Novos Usuários</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                </div>
                        </section>
                        <section>

                            <div class="col-md-12">
                                <!-- small box -->
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>15</h3>
                                        Administradores
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <div class="container">

                <div id="" class="row">
                    <div class="row w-100">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-table mr-6"></i> <strong>Lista de Funcionários</strong>
                                </div>
                                <div class="card-body mr-1">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Cpf</th>
                                            <th>Criado em</th>
                                            <th>Ações</th>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>

                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                        <tr>
                                            <td class="td"><img class="foto" src="img/user1-128x128.jpg"></td>
                                            <td>Fulano de Tal</td>
                                            <td>Fulano@excellent.com.br</td>
                                            <td>40028922</td>
                                            <td>22/09/2020</td>
                                            <td> <button type="button" class="btn btn-primary">Editar </button>
                                                <button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-md-4">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Novo Funcionário</h3><br><br>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form action="" method="POST"role="form" id="form-user-create">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Nome</label>
                                            <input type="text" class="form-control" id="exampleInputName" placeholder="Digite o nome do usuário" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Gênero</label>
                                            <div class="radio">
                                                <label for="exampleInputGenderM">
                                                    <input type="radio" id="exampleInputGenderM" name="gender" checked="">
                                                    Masculino</label>
                                            </div>
                                            <div class="radio">
                                                <label for="exampleInputGenderF">
                                                    <input type="radio" id="exampleInputGenderF" name="gender">
                                                    Feminino</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputBirth">Nascimento</label>
                                            <input type="date" class="form-control" id="exampleInputBirth" name="birth">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCountry">Estado</label>
                                            <select class="form-control" id="exampleInputCountry" name="country">
                                                <option value="" selected="selected">Selecione um Estado</option>
         

         
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" class="form-control" id="1xampleInputEmail" placeholder="Digite o e-mail" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Senha</label>
                                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Crie uma senha" name="password">
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto</label>
                                            <input type="file" id="exampleInputFile" name="photo">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input id="admin" type="checkbox" name="admin"> Administrador
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" name="save" class="btn btn-success">Salvar</button>
                                    </div>

                                </form>
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
</body>

</html>