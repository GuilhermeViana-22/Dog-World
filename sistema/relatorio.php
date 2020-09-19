<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Funcionários </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script>
        // trocar textos após clicar no botão
        function funcao() {
            document.getElementById("h6").innerHTML = "Vendas";
           document.getElementById("tables-vendas").style.display = "block";
        }

        function funcao1() {
            document.getElementById("h6").innerHTML = "Financeiro";
            document.getElementById("tables-finan").style.display = "block";
        }

        function funcao2() {
            document.getElementById("h6").innerHTML = "Colaboradores";
            document.getElementById("tables-cola").style.display = "block";
        }

        function funcao3() {
            document.getElementById("h6").innerHTML = "Fornecedores";
            document.getElementById("tables-forn").style.display = "block";
        }
        // mostrar tabela



        // --- Script para paineis ativáveis ---
        document.addEventListener("DOMContentLoaded", function() {
            //pegar todos os botões que ativa os paineis
            var botoes = document.querySelectorAll(".btn-painel");

            //loop para poder pegar os atributos dos botões e atrelar evento de click
            for(i=0;i<botoes.length;i++) {
                var classeBotao = botoes[i].getAttribute("data-painel");
                console.log(".painel." + classeBotao)

                //atrelando evento de click baseado no atributo data-painel
                document.querySelector(".btn-painel[data-painel='" + classeBotao + "']").addEventListener("click", function() {
                    ativarPaineis(this.getAttribute("data-painel"));
                });
            }

        });


        function ativarPaineis(painelClicado) {
            //pegando todos os paineis que serão ativados ou desativados
            var paineis = document.querySelectorAll(".painel");

            //loop para desativar todos os paineis primeiramente
            for(i=0;i< paineis.length;i++) {
                paineis[i].style.display = "none";
            }

            //ativa o painel de acordo com a variável passada na função
            document.querySelector(".painel." + painelClicado).style.display="block";
        }
        //  X --- Script para paineis ativáveis --- X 




    </script>

</head>


<body class="sb-nav-fixed">
    <!--Tag de incorporação ao menu no codigo html

-->>
    <?php include 'nav.php'; ?>

    <!---- mudar a referência quebra o projeto do arquivo, faça uma cópia se precisar editar
    
    
    -->>

    <div id="layoutSidenav">
        <!--Tag de incorporação ao menu no codigo html

-->>
        <?php include 'menu_lateral.php'; ?>

        <div id="layoutSidenav_content">
            <main>                
                <h5>Relatórios</h5><br>
                <ol class="breadcrumb mb-4">
                    <h6 id="h6"></h6>
                </ol>
               
                <button class="btn-painel btn btn-dark" data-painel="painel-1" onclick="funcao()">Vendas</button>
                <button class="btn-painel btn btn-dark" data-painel="painel-2" onclick="funcao1()">Financeiro</button>
                <button class="btn-painel btn btn-dark" data-painel="painel-3"onclick="funcao2()">Colaboradores</button>
                <button class="btn-painel btn btn-dark" data-painel="painel-4"onclick="funcao3()">Fornecedores</button>
                
                <li class="breadcrumb-item active"></li>
                </ol>
                <br><br>
                <div class="paineis-ativaveis">
            
                
                </div>
                <section id="tables-vendas" class="hidden">
                    <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Vendas</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </section>
                <section id="tables-finan" class="hidden">
                    <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Financeiro</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </section>
                <section id="tables-cola" class="hidden">
                    <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Colaboradores</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </section>
                <section id="tables-forn" class="hidden">
                    <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Fornecedores</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </section>
                
                <section id="colaboradores" class="hidden">
                    <table class="table table-striped table-dark" style="background: rgb(9,5,71);
                background: linear-gradient(90deg, rgba(9,5,71,1) 0%, rgba(53,60,68,1) 0%, rgba(2,15,31,1) 96%);;">
                        <thead>
                            <tr>
                                <th scope="col">Matricula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Email</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Salario</th>
                                <th scope="col">Data de admissão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Otavio</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Otavio.silva@yahoo.com</td>
                                <td>51</td>
                                <td>7.000</td>
                                <td>24/04/1998</td>
                            </tr>

                        </tbody>
                    </table>

                </section>

            </main>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>