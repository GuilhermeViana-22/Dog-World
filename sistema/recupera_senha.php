<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>System Dog World || Reuperar senha</title>


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php// include 'banco.php'; ?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-3">Recuperar senha</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="emailfun">Email</label>
                                                        <input class="form-control py-4" id="emailfun" type="text" name="email" laceholder="Digite o email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="cpffun">CPF</label>
                                                        <input class="form-control py-4" id="cpffun" type="text" name="cpf" placeholder="Digite o CPF" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="error-content">
                                                <div class="form-row" id="new">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="novasenha">Nova senha</label>
                                                            <input class="form-control py-4" id="novasenha" type="password" placeholder="Digite a nova senha" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputConfirmPassword">Confirmar Senha</label>
                                                            <input class="form-control py-4" id="inputConfirmPassword" type="password" name="nsenha" placeholder="Repita a nova senha" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="botoes" class="col-md-6 ">
                                                <button type="submit" class="btn btn-primary  " name="atualizar"><i class="fas fa-paw"></i> Alterar</button>

                                            </div>

                                            <?php 
                                            $conexao = new mysqli('localhost', 'root','','dog_world');
                                            
                                            if (isset($_POST["atualizar"])) {
                                               
                                                $email = $_POST['email'];
                                                $cpf = $_POST['cpf'];

                                                $sql = "update funcionario set senha_funcionario = '$_POST[nsenha]' where cpf_funcionario = '$_POST[cpf]' and email_funcionario = '$_POST[email]'";

                                                $resul = mysqli_query($conexao, $sql);

                                                if ($resul) {
                                                    echo ' <script type="text/javascript"> alert("Atualizado!")</script>';
                                                    mysqli_close($conexao);
                                                } else {
                                                    echo ' <script type="text/javascript"> alert("Erro ao atualizar!")</script>';
                                                    mysqli_close($conexao);
                                                }
                                            } ?>










                                            <br>

                                            <a type="submit" class="btn btn-primary btn-lg btn-block" href="login.php"><i class="fas fa-paw"></i>Fazer login </a>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Dog World Pet Shop</div>
                            <div>
                                <a href="#">Politica de privacidade</a> &middot;
                                <a href="#">Termos &amp; Condoções</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>

    </html>