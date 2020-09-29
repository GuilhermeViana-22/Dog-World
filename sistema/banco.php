<?php
    $conexao = new mysqli('localhost', 'root','','dog_world');
    session_start();

    //Recupera a senha
    
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
    } 
?>