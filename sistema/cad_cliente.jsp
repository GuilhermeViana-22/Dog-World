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

</head>

<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
           
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
           
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
          
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
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
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

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

    <jsp:include page="nav.html" />

    <div id="layoutSidenav">

        <!--Tag de incorporação ao menu no codigo html-->



        <jsp:include page="menu_lateral.html" />

        <!--Tag de incorporação ao menu no codigo html-->



        <div id="layoutSidenav_content">


            <main>
                <!--
               -->
                <form id="formExemplo" data-toggle="validator" role="form">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Cliente</h3>
                    </div>


                    <div class="form-group row" >
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="small mb-2" for="textNome">Nome</label>
                                <input class="form-control py-2" id="textNome" type="text" placeholder="Digite o nome " required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-2" for="inputLastName">Sobrenome</label>
                                <input class="form-control py-2" id="inputLastName"  type="text" placeholder="Digite o sobrenome"  required/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="small mb-2" for="dtNasc">Data de nascimento</label>
                                <input class="form-control py-2" id="dtNasc" type="text" placeholder="Digite o nascimento"required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="small mb-1" for="txtCpf">CPF</label>
                                <input class="form-control py-2" id="txtCpf" type="text" placeholder="Digite o CPF" required />
                            </div>
                        </div>
                        <div class="form-group col-md-3 mb-0">
                            <label for="cmbSexo">Sexo</label>
                            <select id="cmbSexo" class="form-control py-2 " required>
                            <option selected>---Escolher---</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="small mb-1" for="txtTelefone">Telefone/Celular</label>
                                <input class="form-control py-2" id="txtTelefone" type="text" placeholder="Digite o Telefone" required />
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-md-15">
                                <label for="inputEmail" for="txtEmail" class="col-sm-1 col-form-label">Email</label>
                                <input type="email" class="form-control py-2" id="txtEmail" placeholder="Email" required>
                            </div>
                        </div>
                        <form method="get" action=".">
                        <div class="form-group col-md-6">
                            <label for="rua">Endereço</label>
                            <input name="rua" type="text" class="form-control py-3" id="rua"  placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="txtComp">Complemento</label>
                            <input type="text" class="form-control" id="txtComp" placeholder="Apartamento, hotel, casa, etc." required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="txtCep">CEP</label>
                                <input type="text" class="form-control" id="txtCep" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cnbCidade">Cidade</label>
                                <select id="cnbCidade" class="form-control">
                                <option selected>---Selecione---</option>
                                <option>Guarulhos</option>
                                <option>Campinas</option>
                                <option>São Bernardo do Campo</option>
                                <option>Santo André</option>
                                <option>São José dos Campos</option>
                                <option>Osasco</option>
                                <option>Ribeirão Preto</option>
                                <option>Sorocaba</option>
                                <option>Mauá</option>
                                <option>São José do Rio Preto</option>
                                <option>Santos</option>
                                <option>Mogi das Cruzes</option>
                                <option>Diadema</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cmbEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>São Paulo</option>
                              </select>
                            </div>
                        </form>

                        </div>

                        <div id="botoes" class="col-md-6 col-xs-12">
                            <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
                            <button type="button" class="btn btn-warning"><i class="fas fa-paw"></i> Alterar</button>
                            <button type="button" class="btn btn-primary"><i class="fas fa-paw"></i> Atualizar</button>
                        </div>




                    </div>



                    <div class="card ">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-1">Animal</h3>
                        </div>
                        <div class="card-body">
                            <form>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                                      Novo Animal
                                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                                      Existente
                                                    </label>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="small mb-2" for="inputFirstName">Nome</label>
                                            <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Digite o nome" />
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="small mb-2" for="inputLastName">Idade</label>
                                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a idade" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">RGA</label>
                                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite o CPF" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Raça</label>
                                            <input class="form-control py-2" id="inputLastName" type="text" placeholder="Digite a Raça" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputLastName">Sexo</label>
                                        <select id="inputLastName" class="form-control py-2 ">
                                                        <option selected>---Escolher---</option>
                                                        <option>Macho</option>
                                                        <option>Femea</option>
                                                      </select>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col-xl-12 col-md-12 ">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fas fa-table mr-6"></i> Animais
                                                </div>
                                                <div class="card-body mr-1">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>RGA</th>
                                                            <th>Nome</th>
                                                            <th>idade</th>
                                                            <th>Raça</th>
                                                            <th>Observação</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="td">136857</td>
                                                            <td>Max</td>
                                                            <td>chitsu</td>
                                                            <td>3 anos</td>
                                                            <td>Alergico a talco</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="td">134587</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="td">136598</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="td">136485</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="td">136456</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>


                                    </div>


                                </div>
                                <div id="botoes" class="col-md-6 col-xs-12">
                                    <button type="button" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-paw"></i> Alterar</button>
                                    <button type="button" class="btn btn-primary"><i class="fas fa-paw"></i> Atualizar</button>
                                </div>


                            </form>

                        </div>
                        
                    </div>                   
                </form>
                
            </main>
            <jsp:include page="footer.html" />
         </div>
     
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