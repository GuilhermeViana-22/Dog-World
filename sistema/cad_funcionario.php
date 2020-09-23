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
                                <form role="form" id="form-user-create">
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
                                            <label for="exampleInputCountry">País</label>
                                            <select class="form-control" id="exampleInputCountry" name="country">
                                                <option value="" selected="selected">Selecione um país</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brasil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                             
                                            
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
                                        <button type="submit" class="btn btn-success">Salvar</button>
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